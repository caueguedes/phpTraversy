<?php 
	$path ="/dir/myfile.php";
	$file = 'file1.txt';

/*
	###FILE
		#File name
		echo basename($path);
		
		#File name withou ext
		echo basename($path, '.php');

		#Dir name
		echo dirname($path);
		
		#Absolute path
		echo realpath($file);

		#File Exists
		echo file_exists($file);

		#Is a File
		echo is_file($file);

		#Perssion write Writable
		echo is_writable($file);

		#Permission read Readable
		echo is_readable($file);

		#File size
		echo filesize($file);

		#Copy file
		echo copy('file1.txt', 'file2.txt');

		#Rename File
		echo rename('testrename.txt', 'file2.txt');

		#Delete File
		unlink('file2.txt'); 
		
		#Read File
		echo file_get_contents($file);

		#Write file
		echo file_put_contents($file, ', GoodBye World')

		//Add Data to file
		$current = file_get_contents($file);
		$current .= ', GoodBye World';
		echo file_put_contents($file, $current);

		//Open File Reading
		$handle = fopen('file2.txt', 'r');
		$data = fread($handle, filesize($file));
		echo $data;
		fclose($handle);

		###DIR
		#Create dir
		echo mkdir('testDir');
		
		#Remove dir
		echo rmdir('testDir');
	
		#File Exists
		echo file_exists('dir');
*/
		#Open file for writing
		$handle = fopen('file2.txt', 'wr');
		$txt = "Frank Marks\n";
		fwrite($handle, $txt);
		$txt = "Karl Smith\n";
		fwrite($handle, $txt);
		fclose($handle);
		echo file_get_contents('file2.txt');



 ?>