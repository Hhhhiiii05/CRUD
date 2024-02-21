<?php
include "konek.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  
  <title>Web CRUD</title>
</head>
<body>
  <div class="w-screen h-screen bg-purple-100 flex flex-col justify-center items-center shadow-lg">
    <div class="bg-zinc-100 w-3/4 h-auto rounded-lg p-5 md:w-1/2">
      <h1 class="text-4xl my-3.5 text-center font-semibold tracking-wides">Daftar</h1>
      <form class="flex flex-col my-4" action="" method="POST">
        <input class="mb-3 text-lg rounded-[8px] p-2 transition duration-400 focus:ring ring-[#9288F8] outline-none " type="text" placeholder="Masukan Nama">
          <input class="mb-3 text-lg rounded-[8px] p-2 transition duration-400 focus:ring ring-[#9288F8] outline-none " type="text" placeholder="Masukan Email">
          <input class="mb-6 text-lg rounded-[8px] p-2 transition duration-400 focus:ring ring-[#9288F8] outline-none " type="password" placeholder="Masukan Password">
          <input class="mb-2 bg-[#9288F8] rounded-[8px] h-11 text-xl font-semibold tracking-wides text-[#322653] transition duration-400 ease-in-out hover:scale-105" type="submit" value="Daftar">
        </form>
        <p>Sudah punya Akun? <a href="login.php" class="text-[#9288F8] hover:underline ">Masuk</a></p>
    </div>
  </div>
</body>
</html>