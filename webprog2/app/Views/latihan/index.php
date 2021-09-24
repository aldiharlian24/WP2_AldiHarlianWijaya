<!doctype html>
<html>
	<head> <title> Form Biodata </title>
	<style>
	h1		{
			text-align:center;
			padding-top:20px;
			font-size:50px;
			color:white;
			font-family:Times New Roman;
			}
	
	table	{
			width:640px;
			height:370px;
			text-indent:10px;	
			background-color:rgba(51,51,51,0.2);
			color:white;
			padding:20px 20px 20px 20px;
			border-radius:20px;
			}
			
	body			{
					background-color:#007ACC;
					background-size:250px;
					}

	input, text, textarea, date, radio, select		{
													background-color:rgba(51,51,51,0.2);
													color:white;
													}
													
	
				
	</style>


	</head>
	<body>
	<h1>Form Biodata</h1>
	
	<center><table>
	<form method='POST'>
		<tr>
			<td colspan="2">Isi data dibawah ini : </td>

		</tr>
		
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="a" required>
			</td>
			
		</tr>
		
		<tr>
			<td>Alamat</td>
			<td>
				<textarea name="b" cols="30" rows="5" required></textarea>
			</td>

		</tr>
		
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="c" required></td>
			
		</tr>
		
		<tr>
			<td> Tangggal Lahir </td>
			<td>
				<input type="date" name="d" required>
			</td>
		
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="radio" name="e" value="Laki-Laki" required> Laki-Laki
				<input type="radio" name="e" value="Perempuan" required> Perempuan
			</td>
			
		</tr>
		
		
		<tr>
			<td>Pendidikan</td>
			<td>
				<select name="f" required> 
					<option selected hidden value=""> Pilih </option>
					<option value="SD"> SD </option>
					<option value="SMP"> SMP </option>
					<option value="SMA/K"> SMA/K </option>
					<option value="D3"> D3 </option>
					<option value="S1"> S1 </option>
					<option value="S2"> S2 </option>
					<option value="S3"> S3 </option>					
				</select>
			</td>
			
		</tr>
		<br>
		<tr>
			<td colspan='2'><hr width="600px"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" value="Submit" name="z">&nbsp;&nbsp;<input type="reset" value="Cancel"></center></td>			
		</tr>
	</table></center>
	</form>
	<br>
	<br>
	</body>
	
</html>

<?php

echo	"<style>
			.anu	{
					text-indent:20px;
					}
		</style>";

	if(isset($_POST['z']))
		{
			$nama=$_POST['a'];
			$alamat=$_POST['b'];
			$tempatlahir=$_POST['c'];
			$tanggallahir=$_POST['d'];
			$jk=$_POST['e'];
			$pendidikan=$_POST['f'];
			
			echo "<br><br>";
			echo "<center><table class='anu'>
					<form method='POST'>
					<tr>
					<td colspan='2'><center><h2>BIODATA</h2></center></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>
							$nama
						</td>			
					</tr>
					<tr>
						<td>Alamat</td>
						<td>
							$alamat
						</td>			
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>
							$tempatlahir
						</td>			
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>
							$tanggallahir
						</td>			
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>
							$jk
						</td>			
					</tr>
					<tr>
						<td>Pendidikan</td>
						<td>
							$pendidikan
						</td>			
					</tr>
					
					</form>
					</table></center>";
					
					
			
		}




?>