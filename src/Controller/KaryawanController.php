<?php

namespace App\Controller;
use\App\Entity\MasterKaryawan;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DataUriNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class KaryawanController extends Controller
{
    /**
     * @Route("/karyawan", name="karyawan")
     */
    public function index()
    {
        $kar = $this->getDoctrine()->getRepository(MasterKaryawan::class)->findAll();
        return $this->render('karyawan/index.html.twig',array('kar'=>$kar));
    }

    /**
     * @Route("/export", name="export_data")
     */
    public function exportAction()
    {
        $em= $this->getDoctrine()->getManager();
        $kary = $em->getRepository(MasterKaryawan::class)->findAll();
        $res = [["id","nik","nama","unit","divisi"]];

        foreach ($kary as $karys){
            $res[] = [
                $karys->getId(),
                $karys->getNik(),
                $karys->getNama(),
                $karys->getUnit(),
                $karys->getDivisi(),
            ];
        }
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet()->fromArray(
          $res
        );

        $sheet->setTitle("data karyawan");
        $writer = new Xlsx($spreadsheet);

        //create temporary file system

        $fileName = 'karyawan.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);

        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
