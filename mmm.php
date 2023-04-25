<?php

// Initialize like count variable to 0
$like_count = 30;

// Check if the like button is clicked
if (isset($_POST['like_button'])) {
    // Increase like count by 1
    $like_count++;
}

?>
<script>
    const likeBtn = document.querySelector(".like__btn");
let likeIcon = document.querySelector("#icon"),
  count = document.querySelector("#count");

let clicked = false;


likeBtn.addEventListener("click", () => {
  if (!clicked) {
    likeIcon.innerHTML = `<i class="fa fa-thumbs-up"></i>`;
    count.textContent++;
  } else {
    clicked = false;
    likeIcon.innerHTML = `<i class="fa fa-thumbs-up"></i>`;
    count.textContent++;
  }
});
</script>

<!-- Display the like button and its count -->
<form method="post">
    <button type="submit" name="like_button">Like</button>
    <span><?php echo $like_count; ?></span>
</form>