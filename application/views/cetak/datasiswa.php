<!DOCTYPE html>
<html>
<head>
	<title>cetak</title>
	<style type="text/css">
		table{
			padding: 1px;
		}
		tr{
			padding: 1px;
		}
		th{
			padding: 10px;
			border-bottom: 1px solid black;
			font-family: arial;
			text-align: center;
		}
		td{
			padding: 10px;
			border-bottom: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>SISWA</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Tahun Ajaran</th>
				<th>Biaya</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
	        	foreach ($datasiswa as $datasiswa){
 	       ?>
	        <tr>
 	           <td> <?php echo $no;  ?> </td>
	            <td> <?php echo $datasiswa->nis;  ?> </td>
	            <td> <?php echo $datasiswa->namasiswa;  ?> </td>
	            <td> <?php echo $datasiswa->kelas;  ?> </td>
 	           <td> <?php echo $datasiswa->tahunajaran;  ?> </td>
	            <td> <?php echo $datasiswa->biaya;  ?> </td>
	        </tr> 
			<?php 
				$no++;    
	            }
	        ?>
		</tbody>
	</table>
</body>
</html>

               
				



						