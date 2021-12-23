<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                button: '#FFA800',
                drop: '#C4C4C4',
                bg1: '#055AFF',
                bg2: '#06004E'
              },
              spacing: {
                  '100': '50rem'
              }
            }
          }
        }
    </script>
</head>

<body class="h-screen bg-gradient-to-t from-bg2 to-bg1 no-repeat">
	<div class="py-20 flex flex-col items-center">
        <h1 class="text-white font-bold text-6xl">
            Profile Mahasiswa
        </h1>
        <div class="flex w-100 pt-20 pb-5 text-white text-xl">
            <div class="w-1/2">
                <span class="pl-20">ID</span>
            </div>
            <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                
                while($siswa = mysqli_fetch_array($query)){
                    echo ": ".$siswa['id'];
                }		
            ?>
        </div>
        <div class="flex w-100 py-5 text-white text-xl">
            <div class="w-1/2">
                <span class="pl-20">Nama Lengkap</span>
            </div>
            <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                
                while($siswa = mysqli_fetch_array($query)){
                    echo ": ".$siswa['nama_lengkap'];
                }		
            ?>
        </div>
        <div class="flex w-100 py-5 text-white text-xl">
            <div class="w-1/2">
                <span class="pl-20">Nama</span>
            </div>
            <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                
                while($siswa = mysqli_fetch_array($query)){
                    echo ": ".$siswa['nama'];
                }		
            ?>
        </div>
        <div class="flex w-100 py-5 text-white text-xl">
            <div class="w-1/2">
                <span class="pl-20">Alamat</span>
            </div>
            <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                
                while($siswa = mysqli_fetch_array($query)){
                    echo ": ".$siswa['alamat'];
                }		
            ?>
        </div>
        <div class="flex w-100 py-5 text-white text-xl">
            <div class="w-1/2">
                <span class="pl-20">Institusi</span>
            </div>
            <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                
                while($siswa = mysqli_fetch_array($query)){
                    echo ": ".$siswa['institusi'];
                }		
            ?>
        </div>
        <div class="py-10 flex gap-x-5">
            <button class="bg-red-500 text-white rounded-lg px-10 py-1">
                <a href="../index.php">BACK</a>
            </button>
            <button class="bg-green-500 text-white rounded-lg px-10 py-1">
                <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                
                while($siswa = mysqli_fetch_array($query)){
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>EDIT</a>";
                }		
                ?>
            </button>
        </div>
    </div>
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Institusi</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM siswa";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama_lengkap']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['institusi']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>