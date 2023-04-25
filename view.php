<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 700px;
			height: 700px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
        .frame {
  width: 750px;
  height: 750px;
  border: 3px solid #ccc;
  background: #eee;
  margin: auto;
  padding: 15px 10px;
}
.like-btn {
    cursor: pointer;
}
	</style>
</head>
<body style="background-color:lightblue;">
    
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  
				?>
                <div class="post">
                    
                    <img src="<?php echo $rows['image_url'];?>"/>
                </div>

            <div class ="post">    
            <div class ="frame">    
            <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
        
            </div>
            <div class="post-bottom">
                    <div class="action">
                    <button class="like-btn">
            <span id="icon"><a type = button class="fa fa-thumbs-up"></a></span>
            <span id="count">10</span> LIKES
           
         
         <script>
          const likeBtn = document.querySelector(".like-btn");
let likeIcon = document.querySelector("#icon"),
  count = document.querySelector("#count");

let clicked = false;


likeBtn.addEventListener("click", () => {
  if (!clicked) {
    likeIcon.innerHTML = '<i class="fa fa-thumbs-up"></i>';
    count.textContent++;
  } else {
    clicked = false;
    likeIcon.innerHTML = '<i class="fa fa-thumbs-up"></i>';
    count.textContent++;
  }
});
</script>
</button>

                    </div>
                    <div class="action">
                        <button>
                            <a type = button  class="far fa-comment" href="index1.html">COMMENT</a></button>
                    </div>
                    <div class="action">
                        <button>
                            <a type = button class="fa fa-share">SHARE</a></button>
                    </div>
                </div>
            </div> 
            </frame>        		
    <?php } }?>
</body>
</html>