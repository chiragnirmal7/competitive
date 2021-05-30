<section id="feedback">
        <nav style="min-height:initial!important;" class="px-5 d-flex justify-content-between align-items-center w-100 align-items-top bg-primary">
            <div class="" ><a href="feedback.php">feedback</a></div>
            <ul class="d-flex h2">
                <li><button id="fLarge" class="bg-transparent border-0 text-light h5">A+</button></li>
                <li><button id="fNormal" class="bg-transparent border-0 text-light h5 mx-4">A</button></li>
                <li><button id="fSmall" class="bg-transparent border-0 text-light h5">-A</button></li>
            </ul>
        </nav>
    </section>
<section id="header_main">
        <nav class="d-flex justify-content-between w-100 align-items-center bg-success">
            <input type="checkbox" id="nav-toggle">
            <div class="logo"><a href="index.php">Competitive</a></div>
            <ul class="d-flex h2">
                <?php
                if(isset($_SESSION['id'])){
                    echo '<li><a class="text-warning" href="home.php"><i class="fa fa-home"></i>Home</a></li>';
                }else{
                    echo '<li><a class="text-warning" href="home.php"><i class="fa fa-home"></i>Home</a></li>';
                    
                }?> 
                <li><a href="booklist.php"><i class="fa fa-book"></i>books</a></li>
                <li><a href="examlist.php"><i class="fa fa-list"></i>examList</a></li>
                <?php
                if(isset($_SESSION['id'])){

                    echo '<li><a href="updates.php"><i class="fa fa-edit"></i>Update</a></li>';
                    echo '<li><a class="text-warning" href="logout.php">Logout</a></li>';
                    
                }
                else{
                    
                    echo '<li><a class="text-warning" href="index.php">Login</a></li>';
                }
                ?>
                
            </ul>
            <div class="icon-text">
                <label for="nav-toggle">
                    ≡
                </label>
            </div>
        </nav>
    </section>
    <script>
        
            $("#fLarge").click(function () {
                $("html").addClass("f-large");
                $("html").removeClass("f-init");
                $("html").removeClass("f-small");
            });
            $("#fNormal").click(function () {
                $("html").addClass("f-init");
                $("html").removeClass("f-large");
                $("html").removeClass("f-small");
            });
            $("#fSmall").click(function () {
                $("html").addClass("f-small");
                $("html").removeClass("f-init");
                $("html").removeClass("f-large");
            });
        
    </script>
    