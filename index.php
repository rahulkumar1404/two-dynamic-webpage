<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dynamic WebPage</title>
    

    <link rel="icon" href="./img/logo.jpg" type="image/x-icon">
 </head>

<body>
        <nav>
            <div class="logo">
                <h3>SANJIVANI</h3>
            </div>
            <div class="menu">
                <a href="#home">Home</a>
                <a href="#upload">Upload your Work</a>
                
            </div>
        </nav>
    <section id="home" class="first">
        <div class="container">
            <div class="list">
                
                <h1>See the uploaded work</h1>
                <p>click on the button to check all the results that had submitted</p>

                <form action="./upload.php" method="post">
                    <label for="Name" class="name">Names  :</label>
                    <select name="Name" id="drop">
                <option value="Rahul">Rahul</option>
                <option value="Ram">Ram</option>
                <option value="xyz">xyz</option>
                <option value="abc">abc</option>
                <option value="john">john</option>
                <option value="mike">Mike</option>
                <option value="sam">Sam</option>
                <option value="sony">sony</option>
                <option value="tvs">Tvs</option>
                <option value="hallmark">Hallmark</option>
                <option value="Musk">Musk</option>
                <option value="honda">Honda</option>
                </select>
                    <br> <br>
                    
                <button class="btn"><a href="./diplay.php">See the works</a></button>
                    <input class="submit" type="submit" value="submit">
                    
                </form>
                

            </div>
        </div>
        <div class="right">
            <div class="work">
                <h1>works</h1>
                <img src="./work-img/rahul.jfif" id="img1" class="visible">
                <img src="./work-img/ram.jpg" id="img2" class="hidden">
                <img src="./work-img/xyz.jfif" id="img3" class="hidden">
                <img src="./work-img/abc.jfif" id="img4" class="hidden">
                <img src="./work-img/john.jpg" id="img5" class="hidden">
                <img src="./work-img/mike.jfif" id="img6" class="hidden">
                <img src="./work-img/sam.jfif" id="img7" class="hidden">
                <img src="./work-img/sony.png" id="img8" class="hidden">
                <img src="./work-img/tvs.jfif" id="img9" class="hidden">
                <img src="./work-img/hallmark.jpg" id="img10" class="hidden">
                <img src="./work-img/musk.jpg" id="img11" class="hidden">
                <img src="./work-img/honda.jpg" id="img12" class="hidden">

            </div>
            <script type="text/javascript">
                var activeImageId = 1;
                var nextImageId = 1;

                setInterval(function() {
                    nextImageId = nextImageId + 1;

                    if (nextImageId <= 12) {
                        document.getElementById("img" + activeImageId).classList.replace("visible", "hidden");
                        document.getElementById("img" + nextImageId).classList.replace("hidden", "visible");
                        activeImageId = nextImageId;
                    } else {

                        document.getElementById("img" + activeImageId).classList.replace("visible", "hidden");
                        document.getElementById("img" + activeImageId).classList.replace("hidden", "visible");
                        activeImageId = 12;
                        nextImageId = 0;
                    }
                }, 800)
            </script>
        </div>
    </section>

    <section id="upload" class="file-upload">
        <div class="details">
            <div class="Upload">
                <h2>Upload your Work</h2>
            </div>
            <form action="./upload.php" method="POST" enctype="multipart/form-data" class="file">
                <h2 class="name">Name : </h2>
                <input type="text" placeholder="Name" required>

                <br>

                <h2 class="name">Email : </h2>
                <input type="email" placeholder="Email" required>
                <br>

                <h2 class="name">Work Title : </h2>
                <input type="text" placeholder="work title" required>
                <br>
                <h2 class="name">Company Name : </h2>
                <input type="text" placeholder="Company Name" required>
                <br>
                <h2 class="name">Contact No : </h2>
                <input type="text" type="number" placeholder="contact number" required>
                <br>


                <h2 class="name">Upload File:</h2>
                    <input type="file" name="fileToUpload" id="fileToUpload" required>
                    <br>
                    <br>
                    <button class="upload-btn"><input type="submit" value="submit" name="submit"></button>
        </div>

    </section>
    

    <footer style="background: #111;
    color: white;
    height: 4%;
    bottom: -34px;
    text-transform: uppercase;">
        <marquee behavior="scroll" direction="right"> SANJIVANI test done by RAHUL KUMAR</marquee>
    </footer>
</body>
<script type="javascript" src="./js.js"></script>

</html>