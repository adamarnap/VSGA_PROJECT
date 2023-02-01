<?php 
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");      
    // membuat nama file ekspor "data-anggota.xls"
    header("Content-Disposition: attachment; filename=laporan-penduduk-desa.xls");    
    // data source
    include 'Excel_Penduduk_Data.php';
?>