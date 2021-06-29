 <?php

		$fp = fopen('abc.csv','w');
		fwrite($fp, "\xEF\xBB\xBF");
		$data = array(
				array('項目１','項目２','項目３','項目４'),
				array('データ１','データ２','データ３','データ４'),
				array('データ５','データ６','データ７','データ８'),
				array('データ９','データ１０','データ１１','データ１２')
		);
		foreach($data as $output){
			fputcsv($fp, $output, ',','"');
		}
		fclose($fp);

	?>