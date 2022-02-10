<?php
echo '<pre>';

if (in_array($_FILES['file']['type'], array('image/jpeg', 'image.jpg', 'image.png'))) {
$nome = md5(time().rand(0,1000)).'.jpg';
move_uploaded_file($_FILES['file']['tmp_name'], 'arquivos/'.$nome);
echo 'Arquivo salvo com sucesso';
}else{
    echo 'Arquivo nao permitido';
}
?>