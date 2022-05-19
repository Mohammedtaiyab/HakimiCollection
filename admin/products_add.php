<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$slug = slugify($name);
		$category = $_POST['category'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$mrp = $_POST['mrp'];
		$dealer = $_POST['dealer'];
		$company=$_POST['company'];
		$madein=$_POST['country'];
		$size=$_POST['size'];
		$color=$_POST['color'];
		$filename = $_FILES['photo']['name'];
		 $status='1';
// 
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM product WHERE Name=:slug");
		$stmt->execute(['slug'=>$slug]);
		$row = $stmt->fetch();
		$new_filename = '';
		$arryofimgs=[];
		$extension=array('jpeg','jpg','png','gif');
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Product already exist';
		}
		else{
			if(!empty($filename)){
				foreach ($_FILES['photo']['tmp_name'] as $key => $value) {
					$filename=$_FILES['photo']['name'][$key];
					$filename_tmp=$_FILES['photo']['tmp_name'][$key];
					echo '<br>';
					$ext=pathinfo($filename,PATHINFO_EXTENSION);
					$finalimg='';
					if(in_array($ext,$extension))
					{
						if(!file_exists('../images/product/'.$filename))
						{
						move_uploaded_file($filename_tmp, '../images/product/'.$filename);
						$finalimg=$filename;
						}else
						{
							 $filename=str_replace('.','-',basename($filename,$ext));
							 $newfilename=rand(5, 1500).$filename.time().".".$ext;
							 move_uploaded_file($filename_tmp, '../images/product/'.$newfilename);
							 $finalimg=$newfilename;
							 array_push($arryofimgs, $newfilename);
							 
						}
					
					}else
					{
						//display error
					}
				}


			}
			else{
				$new_filename = '';
			}
			print_r($arryofimgs);
			
			echo '<br>';
			try{
				$stmt = $conn->prepare("INSERT INTO product(Categories_id,Name,Description,Short_desc,Price,mrp,Image,Dealer,MadeIn,Company,Size,Color,Status) VALUES (:category, :name, :description, :slug, :price,:mrp, :photo,:dealer, :madein, :company,:size,:color,:status)");
				$stmt->execute(['category'=>$category, 'name'=>$name, 'description'=>$description, 'slug'=>$slug, 'price'=>$price, 'mrp'=>$mrp,'photo'=>implode(",",$arryofimgs),'dealer'=>$dealer,'madein'=> $madein,'company'=>$company,'status'=>$status,'size'=>$size,'color'=>$color]);
				$_SESSION['success'] = 'User added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up product form first';
	}

	header('location: products.php');

?>