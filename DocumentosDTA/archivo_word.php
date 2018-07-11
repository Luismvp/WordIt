<?php
  require_once 'conecta.php';
  require_once dirname(__FILE__).'/PHPWord-master/src/PHPWord/Autoloader.php';
  \PhpOffice\PhpWord\Autoloader::register();

  use PhpOffice\PhpWord\PhpWord;
  use PhpOffice\PhpWord\Style\Font;

  $Documento = new \PhpOffice\PhpWord\PhpWord();
  $section = $Documento->addSection();
  $header = $section->addHeader();
  $header->addImage(
    'Imagen 1.png',
    array(
      'width' => 70,
      'height' => 30,
      'wrappingStyle' => 'inline'
    )
  );
  $sectionStyle = array(
    'orientation' => 'landscape',
    'marginTop' => 80
);
  $fuente = new Font();
  $fuente->setBold(true);
  $fuente->setName('Noway');
  $fuente->setSize(20);
  $fuente->setColor('000000');
  $fuente2 = new Font();
  $fuente2->setBold(false);
  $fuente2->setName('Noway');
  $fuente2->setSize(13);
  $fuente2->setColor('000000');

  $parrafos=explode(',', $_POST['parrafosFinales']);
  $parrafosConFoto=explode(',', $_POST['parrafosConFotoFinal']);
        $repe=0;
        foreach ($parrafos as $parra) {
          $sql= "SELECT id,texto,categoria FROM parrafos WHERE id=".$parra;
          foreach($db->query($sql) as $parrs){
            foreach ($parrafosConFoto as $foto) {
              if($parra === $foto){
                copy($_FILES['foto'.$foto]['tmp_name'], $_FILES['foto'.$foto]['name']);
                if($_POST[''.$foto]==="si"){
                  $section->addTextBreak(1);
                  $encabezado=$section->addText(
                    htmlspecialchars(
                      $parrs['categoria']
                    )
                  );
                  $encabezado->setFontStyle($fuente);
                  $section->addTextBreak(1);
                  $section->addImage(
                    $_FILES['foto'.$foto]['name'],
                    array(
                      'width' => 200,
                      'height' => 200,
                      'wrappingStyle' => 'behind',
                      'align'=>'center'
                    )
                  );
                  $section->addTextBreak(1);
                  $text = $parrs['texto'];
                  $textlines = explode("\n", $text);
                  foreach($textlines as $line) {
                    $section->addText(htmlspecialchars($line))->setFontStyle($fuente2);;
                  }
                  $section->addTextBreak(1);
                  $repe++;
                }else{
                  $encabezado=$section->addText(
                    htmlspecialchars(
                      $parrs['categoria']
                    )
                  );
                  $encabezado->setFontStyle($fuente);
                  $section->addTextBreak(1);
                  $text = $parrs['texto'];
                  $textlines = explode("\n", $text);
                  foreach($textlines as $line) {
                    $section->addText(htmlspecialchars($line))->setFontStyle($fuente2);;
                  }
                  $section->addTextBreak(1);
                  $section->addTextBreak(1);
                  $section->addImage(
                    $_FILES['foto'.$foto]['name'],
                    array(
                      'width' => 200,
                      'height' => 200,
                      'wrappingStyle' => 'behind',
                      'align'=>'center'
                    )
                  );
                  $section->addTextBreak(1);
                  $repe++;
                }
              }
            }
            if($repe===0){
                  $encabezado=$section->addText(
                    htmlspecialchars(
                      $parrs['categoria']
                    )
                  );
                  $encabezado->setFontStyle($fuente);
                  $section->addTextBreak(1);
                  $text = $parrs['texto'];
                  $textlines = explode("\n", $text);
                  foreach($textlines as $line) {
                    $section->addText(htmlspecialchars($line))->setFontStyle($fuente2);;
                  }
                  $section->addTextBreak(1);
            }else{
              $repe=0;
            }
          }
        } 
        //Guardando documento
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Documento, 'Word2007');
$objWriter->save($_POST['nombre'].'.docx');

header("Content-Disposition: attachment; filename='".$_POST['nombre'].".docx'");
echo file_get_contents($_POST['nombre'].'.docx');
      ?>