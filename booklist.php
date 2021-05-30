<?php
session_start();
?>
<html lang="en">
<head>
    <?php  include "headerfiles.html" ?>
    <title>Document</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <section class="bg-light p-5 m-5 rounded">
        <?php
            require "./admin/databaseClass.php";
            require "./admin/bookClass.php";
            $bookObj = new Book();
            $data = $bookObj->bookList();
            foreach($data as $row)
            {
        ?>
        <div class="exam-details text-start  bg-light p-5 shadow my-5">

            <div class="d-flex justify-content-between align-items-center text-primary">
                <div class="text-start">
                    <h4 class="h"><span class="h2 text-primary px-1 bName" id="start-date" style="font-size: 17px;width: 80%;">
                            <?php echo $row["bookName"]; ?>
                        </span></h4>
                </div>
                <div class="start-date text-end my-2">
                    <div class="text-start">
                        <span class="h5 iDate" style="font-size: 12px;">
                            <?php echo $row["bookIssueDate"];?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="px-5 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="start-date my-4 text-end d-flex">
                    </div>
                </div>
                <div class="font-monospace h5 text-dark" id="examDescription" style="font-size: 12px;">
                    <p>
                        <?php echo substr($row['bookDescription'], 0, 400); ?> ...
                    </p>
                </div>
            </div>

            <div class="d-flex justify-content-end align-items-center my-2">
                <div class="apply-btn">
                    <a target="_blank" href="./upload/<?php echo $row["fileName"]; ?>">
                        <button class="btn btn-block btn-primary px-3"><span class="h5">DOWNLOAD PDF NOW</span></button>
                    </a>
                </div>
            </div>

        </div>
        <?php
            }
        ?>
    </section>
    <?php
        include "footer.php";
    ?>
</body>
</html>