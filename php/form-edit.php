<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                  '100': '40rem'
              }
            }
          }
        }
    </script>
</head>

<body class="h-screen bg-gradient-to-t from-bg2 to-bg1 no-repeat">
    <div class="py-20 flex flex-col items-center">
        <h1 class="text-white font-bold text-6xl pb-20">
            Profile Mahasiswa
        </h1>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        <div class="flex w-100 py-5 text-base">
            <div class="w-1/2">
                <span class="pl-20 text-2xl text-white">Nama Lengkap</span>
            </div>
            <input type="text" name="nama_lengkap" placeholder="nama lengkap" value="<?php echo $siswa['nama_lengkap'] ?>" />
        </div>
        <div class="flex w-100 py-5 text-base">
            <div class="w-1/2">
                <span class="pl-20 text-2xl text-white">Nama</span>
            </div>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </div>
        <div class="flex w-100 py-5 text-base">
            <div class="w-1/2">
                <span class="pl-20 text-2xl text-white">Alamat</span>
            </div>
            <input type="text" name="alamat" placeholder="alamat" value="<?php echo $siswa['alamat'] ?>" />
        </div>
        <div class="flex w-100 py-5 text-base">
            <div class="w-1/2">
                <span class="pl-20 text-2xl text-white">Institusi</span>
            </div>
            <input type="text" name="institusi" placeholder="institusi" value="<?php echo $siswa['institusi'] ?>" />
        </div>
		<p>
            <div class="flex flex-col items-center py-10">
                <button class="bg-green-500 px-10 py-1 text-white font-semibold text-2xl rounded-xl">
                    <input type="submit" value="Simpan" name="simpan" />
                </button>
            </div>
		</p>
		
		</fieldset>
		
	
	    </form>
	</div>
	</body>
</html>