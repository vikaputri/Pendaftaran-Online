<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Siswa Baru</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>		
    </head>

    <body>
        <style type="text/css">
		    body{
			    padding: 0;
			    margin: 0;
		    }
		    header{
			    background:#232323;
			    padding:10px;	
			    color:#fff;
			    font-family:"open sans";
			    overflow:hidden;
			    margin: 10;
		    }
     
		    .judul{
			    margin: 0;
                text-align: center;
		    }
		
		    .menu{
			    position: fixed;
			    background: #f6f6f6;
			    color: #232323;			
			    height: 100%;
			    width: 200px;
			    top: 0;
			    left: -300px;
			    -webkit-transition: left 0.2s;
			    transition: left 0.2s;
			    padding: 20px;
			    border: 1px solid #ccc;			
		    }
     
		    .menu ul{
			    padding: 0;
		    }
     
		    .menu li{
			    list-style-type: none;
			    padding: 10px 0px;
		    }
     
		    .menu a{
			    color: #232323;
			    text-decoration: none;
			    font-size: 10pt;
		    }
     
		    .tombol{
			    float: right;
			    background: transparent;
			    padding: 10px;
			    color: #fff;
			    border: 1px solid #fff;
			    cursor: pointer;
		    }

		    .bawah{
                margin:0px;
			    font-family:"open sans";
			    font-size: 14px;
			    color :white;
			    background:#232323;
			    line-height: 30px;
                position:absolute;
                bottom:0px;
                width:100%;
                text-align: center;
		    }
     
		    .slide-menu-tampil{
			    left: 0 !important;
		    }

            .pengumuman{
             position: fixed;
            }
	    </style>

        <header>
            <br><h1 class='judul'>PENGUMUMAN</h1>
            <button class="tombol">MENU</button><br>
             
		            <nav class="menu">    
			            <h4>Menu Navigasi</h4>
			            <ul>
				            <li><a href="home.php">HOME</a></li>
                            <li><a href="form-daftar.php">DAFTAR BARU</a></li>
				            <li><a href="ipa.php">PENGUMUMAN IPA</a></li>
                            <li><a href="bahasa.php">PENGUMUMAN BAHASA</a></li>
			            </ul>
		            </nav>

           <script type="text/javascript">
		        $(document).ready(function(){
			        $('.tombol').click(function(){
				        $('.menu').toggleClass("slide-menu-tampil");
			        });
		        });
	        </script>
        </header>

        <center><br><h1 class='pembuka'>DAFTAR SISWA BARU IPS</h1>
        <table border="1">
               <tr>
                    <th>Jurusan</th>
			        <th>Nama</th>
			        <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
			        <th>Agama</th>
			        <th>Alamat</th>
			        <th>No. Telepon</th>
                    <th>Nilai UN</th>
		        </tr>
		        
		        <?php
		        $sql = "SELECT * FROM siswa where jurusan='IPS' order by un DESC LIMIT 2";
		        $query = mysqli_query($db, $sql);
		        
		        while($siswa = mysqli_fetch_array($query)){
			        echo "<tr>";
			        echo "<td>".$siswa['jurusan']."</td>";
			        echo "<td>".$siswa['nama']."</td>";
			        echo "<td>".$siswa['ttl']."</td>";
			        echo "<td>".$siswa['jekel']."</td>";
			        echo "<td>".$siswa['agama']."</td>";
			        echo "<td>".$siswa['alamat']."</td>";
			        echo "<td>".$siswa['telepon']."</td>";
                    echo "<td>".$siswa['un']."</td>";
			        echo "</tr>";
		        }		
		        ?>
	        </table>
        </center>

        <p class='bawah'>SMA Online &copy; 2020
        <br>For More Information<br>
        <img src=".\gmail.png" width=20 px><a href="mailto:vikaputriariyanti@gmail.com">
		<img src=".\instagram(1).png" width=20 px><a href="https://www.instagram.com/">
        <img src=".\twitter.png" width=20 px><a href="https://www.twitter.com/">
		<img src=".\facebook.png" width=20 px><a href="https://www.facebook.com/">
    </body>
</html>
