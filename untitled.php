&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Halaman Print&lt;/title&gt;
&lt;/head&gt;
&lt;body onload="window.print()"&gt;

&lt;?php

	include 'koneksi.php';
	$sql = mysqli_query($koneksi, "SELECT * FROM `kelas`");
	echo '&lt;table border="border"&gt;';
	echo '&lt;tr&gt;&lt;td&gt;NIK&lt;/td&gt;&lt;td&gt;Kelas&lt;/td&gt;&lt;/tr&gt;';
	foreach ($sql as $data) {
		echo '&lt;tr&gt;
		&lt;td&gt;' . $data['nik'] .'&lt;/td&gt;
		&lt;td&gt;' . $data['kelas'] .'&lt;/td&gt;
		&lt;/tr&gt;';
	}
	echo '&lt;/table&gt;';

?&gt;

&lt;/body&gt;
&lt;/html&gt;