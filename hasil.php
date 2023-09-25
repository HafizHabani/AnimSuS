<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <title>AnimHub | Situs Streaming Anime</title>
</head>
<body>
<div class="top-header">
        <div class="section">
            <div class="logo">
                <img src="img/animSUS.png" alt="">
            </div>
            <div class="nav">
                <div class="navbar">
                  <div class="nav-links">
                    <ul class="links">
                      <li><a class="active" href="index.html">HOME</a></li>
                      <li><a href="daftaranime.html">Daftar Anime</a></li>
                      <li>
                        <a href="#">Tahun Rilis</a>
                        <ul class="TahunRilis sub-menu">
                          <li><a href="#">Spring 2020</a></li>
                          <li><a href="#">Summer 2020</a></li>
                          <li><a href="#">Fall 2020</a></li>
                          <li><a href="#">Winter 2020</a></li>
                          <li><a href="#">Spring 2021</a></li>
                          <li><a href="#">Summer 2021</a></li>
                          <li><a href="#">Fall 2021</a></li>
                          <li><a href="#">Winter 2021</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Genre</a>
                        <ul class="Genre sub-menu">
                          <li><a href="#">Action</a></li>  
                          <li><a href="#">Adventure</a></li>  
                          <li><a href="#">Comedy</a></li>
                          <li><a href="#">Drama</a></li>
                          <li><a href="#">Fantasy</a></li>
                          <li><a href="#">Horror</a></li>
                          <li><a href="#">Romance</a></li>
                          <li><a href="#">Yuri</a></li>
                        </ul>
                      </li>
                      <li>
                      <a href="#">Modul 4</a>
                      <ul class="M4 sub-menu">
                        <li><a href="#tugas1_m4.html">Tugas 1</a></li>  
                        <li><a href="#">Tugas 2</a></li>  
                        <li><a href="#tugas3_m4.php">Tugas 3</a></li>  
                      </ul>
                    </li>
                      <li><a href="profile.html">Profile</a></li>
                      <li><a href="calculator.html">Calculator</a></li>
                    </ul>
                  </div>
                </div>
                </div>
            <div class="search-container">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="img/search-icon.png" alt=""></button>
                </form>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['Nama']?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?php echo $_POST['nim']?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['ttl']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_POST['jk']?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?php echo $_POST['Hobi']?></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><?php echo $_POST['desc']?></td>
        </tr>
    </table>
    <li class="nav_item calculator">
        <a href="dataDiri.php" class="nav_link link3">
            Kembali
        </a>
    </li>
</body>
</html>