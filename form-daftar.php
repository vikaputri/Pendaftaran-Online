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
	    </style>

        <header>
            <br><h1 class='judul'>SMA ONLINE</h1>
            <button class="tombol">MENU</button><br>
             
		            <nav class="menu">    
			            <h4>Menu Navigasi</h4>
			            <ul>
				            <li><a href="home.php">HOME</a></li>
				            <li><a href="pendaftar.php">PENDAFTAR</a></li>
                            <li><a href="ipa.php">PENGUMUMAN IPA</a></li>
				            <li><a href="ips.php">PENGUMUMAN IPS</a></li>
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

        <center><br><h1 class='pembuka'>PENDAFTARAN SISWA BARU</h1></center>
       	
        <form action="proses-pendaftaran.php" method="POST">
            <table width="1100" border="0" align="center" cellpadding="2" cellspacing="0">
                 <td><label for="jurusan">Jurusan</label></td>
                 <td>:</td>
                 <td>
			        <select name="jurusan">
				        <option>IPA</option>
				        <option>IPS</option>
				        <option>Bahasa</option>
			        </select>
                 </td>
               </tr>

              <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap"/></td>
               </tr>

              <tr>
                <td><label for="jekel">Jenis Kelamin</label></td>
                <td>:</td>
                <td><label><input type="radio" name="jekel" value="laki-laki"> Laki-laki</label><label><input type="radio" name="jekel" value="perempuan"> Perempuan</label></td>
               </tr>

                <tr>
                    <td>Tempat Tanggal Lahir</td> 
                    <td>:</td> 
                    <td><input type="text" name="ttl" placeholder="Tempat Tanggal Lahir"/></td>
               </tr> 

               <tr>
                 <td><label for="agama">Agama</label></td>
                 <td>:</td>
                 <td>
			        <select name="agama">
				        <option>Islam</option>
				        <option>Kristen</option>
                        <option>Katolik</option>
				        <option>Hindu</option>
				        <option>Budha</option>
				        <option>Konghucu</option>
			        </select>
                 </td>
               </tr>

               <tr>
                 <td><label for="alamat">Alamat</label></td>
                 <td>:</td>
                 <td><input type="text" name="alamat" placeholder="alamat"/></td>
               </tr>


               <tr>
                 <td><label for="telepon">No. Telepon</label></td>
                 <td>:</td>
                 <td><input type="text" name="telepon" placeholder="No. Telepon"/></td>
               </tr>

               <tr>
                 <td><label for="un">Nilai UN</label></td>
                 <td>:</td>
                 <td><input type="text" name="un" placeholder="Nilai UN"/></td>
               </tr>

                <tr>
                   <td></td>
                   <td></td>
                   <td><input type="submit" value="Daftar" name="daftar"/></td>
                <tr>
            </table>
        </form>

        <p class='bawah'>SMA Online &copy; 2020
        <br>For More Information<br>
        <img src=".\gmail.png" width=20 px><a href="mailto:vikaputriariyanti@gmail.com">
		<img src=".\instagram(1).png" width=20 px><a href="https://www.instagram.com/">
        <img src=".\twitter.png" width=20 px><a href="https://www.twitter.com/">
		<img src=".\facebook.png" width=20 px><a href="https://www.facebook.com/">
    </body>
</html>
