<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('template/head') ?>
    <style>
        nav.original {
            background: white;
            box-shadow: 0px 4px 3px rgba(0, 0, 0, 0.05);
            top: 34px;
    padding-bottom: 10px
        }
    
        nav.original .navbar-nav>li>a:not(.btn) {
            color: #bbb;
        }
    </style>
<body>

<?php
    $nav['playlist'] = $playlist;
    $this->load->view('template/nav',$nav); 
?>

<div class="top-padding" style="width:100%;background-color: white">
   
</div>
<section id="services" class="section playlist-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quo velit asperiores error. Pariatur dolor quos cumque impedit
                    odit inventore aspernatur maiores, voluptatibus, nihil modi sed deserunt veniam sunt vel!
                </p>
            </div>
        </div>
    </div>
</section>



<?php $this->load->view('template/footer') ?> 

<script>
    $(document).ready(function () {
        $(".top-padding").css("padding-top", ($("nav").height() + 80) + "px");
    })
</script>
</body>
</html>