<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ZZmart View</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">ZZmart</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" link href=insert.php>Insert</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href=index.php>Index</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href=update.php>Update</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href=delete.php>Delete</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</head>
<body background="assets/img/bg-masthead.jpg">
	<h1>ZZmart shop</h1>
	<?php
		include 'connect.php';
		$getProduct = $connection -> query("SELECT * FROM zzmart");
		while($fetchProduct = $getProduct -> fetch_assoc()){
		?>

		<table style="display:inline-table;width: 200px">
			<tr>
				<td><img style="width: 100%" src="<?=$fetchProduct["IMGproduct"]?>"></td>
			</tr>
			<tr>
				<td>
					<strong><font color=grey><?=$fetchProduct["NAMAproduct"]?></strong><br>
					IDR <font color=grey><?=number_format($fetchProduct["Harga"])?><br>
					<font color=grey><?=$fetchProduct["DESKproduct"]?>
				</td>				
			</tr>
			<tr>
				<td>
					<a href="update.php?id=<?=$fetchProduct["IDproduct"]?>"><button>Update</button></a>
					<a href="delete.php?id=<?=$fetchProduct["IDproduct"]?>"><button>Delete</button></a>
				</td>
			</tr>>
		</table>

		<?php
		}
	?>
	<a href="insert.php" style="text-align:right;"><button>insert new product</button></a>
</body>
</html>