<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Blog - Home</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="logo.png" alt="My Blog">
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<section class="featured-post">
		<div class="post-image">
			<img src="featured-post.jpg" alt="Featured Post">
		</div>
		<div class="post-content">
			<h2>Featured Post Title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada diam vel velit eleifend, non tristique lorem dapibus. Sed eget nisi nec lorem sodales suscipit. </p>
			<a href="#">Read More</a>
		</div>
	</section>
    
</body>
</html>
body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-between;
	background-color: #333;
	color: #fff;
	padding: 20px;
}

.logo img {
	height: 50px;
}

nav ul {
	list-style: none;
	display: flex;
	flex-direction: row;
	margin: 0;
	padding: 0;
}

nav li {
	margin-right: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

section.featured-post {
	display: flex;
	flex-direction: row;
	align-items: center;
	padding: 50px;
}

.post-image img {
	height: 400px;
	object-fit: cover;
}

.post-content {
	margin-left: 50px;
}

.post-content h2 {
	font-size: 32px;
	margin: 0 0 20px;
}

.post-content p {
	font-size: 18px;
	margin: 0 0 30px;
}

.post-content a {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px;
	text-decoration: none;
}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Blog - Blog</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="logo.png" alt="My Blog">
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="blog-posts">
			<h2>Latest Blog Posts</h2>
			<ul>
				<li>
					<a href="#">
						<img src="post1.jpg" alt="Blog Post 1">
						<h3>Blog Post Title 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada diam vel velit eleifend, non tristique lorem dapibus. Sed eget nisi nec lorem sodales suscipit. </p>
						<button>Read More</button>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="post2.jpg" alt="Blog Post 2">
						<h3>Blog Post Title 2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada diam vel velit eleifend, non tristique lorem dapibus. Sed eget nisi nec lorem sodales suscipit. </p>
						<button>Read More</button>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="post3.jpg" alt="Blog Post 3">
						<h3>Blog Post Title 3</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada diam vel velit eleifend, non tristique lorem dapibus. Sed eget nisi nec lorem sodales suscipit. </p>
						<button>Read More</button>
					</a>
				</li>
			</ul>
		</section>
		<aside>
			<form>
				<label for="search">Search:</label>
				<input type="text" id="search" name="search">
				<button type="submit">Go</button>
			</form>
			<h3>Categories</h3>
			<ul>
				<li><a href="#">Category 1</a></li>
				<li><a href="#">Category 2</a></li>
				<li><a href="#">Category 3</a></li>
			</ul>
		</aside>
	</main>
</body>
</html>
body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	display: flex;
	flex-direction: row;
	align-items: center













/*
function addTwoNumber (){
$num1 = 10;
$num2 = 20;
$num3 =$num1+$num2;
return $num3;
}
echo addTwoNumber($num1:100,)+1;



/*
function addTwoNumber (){
    $number1 = 10;
    $number2 = 20;
    $num3 = $number1+$number2;
    echo ($number3);
}
addTwoNumber( $number1 4000,$number2 5000);



function writeStudentName()

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Blog - Blog</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="logo.png" alt="My Blog">
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="blog-posts">
			<h2>Latest Blog Posts</h2>
			<ul>
				<li>
					<a href="#">
						<img src="post1.jpg" alt="Blog Post 1">
						<h3>Blog Post Title 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada diam vel velit eleifend, non tristique lorem dapibus. Sed eget nisi nec lorem sodales suscipit. </p>
						<button>Read More</button>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="post2.jpg" alt="Blog Post 2">
						<h3>Blog Post Title 2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada diam vel velit eleifend, non tristique lorem dapibus. Sed eget nisi nec lorem sodales suscipit. </p>
						<button>Read More</button>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="post3.jpg" alt="Blog Post 3">
						<h3>Blog Post Title 3</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada diam vel velit eleifend, non tristique lorem dapibus. Sed eget nisi nec lorem sodales suscipit. </p>
						<button>Read More</button>
					</a>
				</li>
			</ul>
		</section>
		<aside>
			<form>
				<label for="search">Search:</label>
				<input type="text" id="search" name="search">
				<button type="submit">Go</button>
			</form>
			<h3>Categories</h3>
			<ul>
				<li><a href="#">Category 1</a></li>
				<li><a href="#">Category 2</a></li>
				<li><a href="#">Category 3</a></li>
			</ul>
		</aside>
	</main>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>My Blog - Post Title</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php">My Blog</a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="container">
			<?php
				// Get the ID of the post from the URL
				$id = $_GET['id'];

				// Query the database for the post with the specified ID
				$conn = mysqli_connect('localhost', 'username', 'password', 'blog');
				$query = "SELECT * FROM posts WHERE id = $id";
				$result = mysqli_query($conn, $query);

				// Display the post
				$row = mysqli_fetch_assoc($result);
				echo "<div class='post'>";
				echo "<h2>" . $row['title'] . "</h2>";
				echo "<img src='" . $row['image'] . "' alt='" . $row['title'] . "' />";
				echo "<p>" . $row['content'] . "</p>";
				echo "<p>Author: " . $row['author'] . "</p>";
				echo "<div class='share-buttons'>";
				echo "<a href='#'>Share on Facebook</a>";
				echo "<a href='#'>Share on Twitter</a>";
				echo "<a href='#'>Share on LinkedIn</a>";
				echo "</div>";
				echo "</div>";

				// Close the database connection
				mysqli_close($conn);
			?>
		</div>
	</main>
	<footer>
		<p>&copy; 2023 My Blog</p>
	</footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>My Blog - Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php">My Blog</a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="container">
			<h2>Contact Us</h2>
			<form action="process_contact.php" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>

				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject" required>

				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>

				<input type="submit" value="Submit">
			</form>
		</div>
	</main>
	<footer>
		<p>&copy; 2023 My Blog</p>
	</footer>
</body>
</html>
<?php
	// Get the form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Send an email with the form data
	$to = "youremail@example.com";
	$headers = "From: $email \r\n";
	$headers .= "Reply-To: $email \r\n";
	$headers .= "Content-type: text/html \r\n";
	$message = "<p>Name: $name</p><p>Email: $email</p><p>Subject: $subject</p><p>Message: $message</p>";
	$mail = mail($to, $subject, $message, $headers);

	// Display a success message
	if ($mail) {
		echo "<p>Thank you for contacting us! We will get back to you as soon as possible.</p>";
	} else {
		echo "<p>There was an error sending your message. Please try again later.</p>";
	}
/* styles for desktop */
@media screen and (min-width: 992px) {
    /* styles for header */
    /* styles for featured post section */
    /* styles for blog posts section */
    /* styles for sidebar */
    /* styles for footer */
  }
  
  /* styles for tablet */
  @media screen and (max-width: 991px) {
    /* styles for header */
    /* styles for featured post section */
    /* styles for blog posts section */
    /* styles for sidebar */
    /* styles for footer */
  }
  
  /* styles for mobile */
  @media screen and (max-width: 767px) {
    /* styles for header */
    /* styles for featured post section */
    /* styles for blog posts section */
    /* styles for sidebar */
    /* styles for footer */
  }
  
  <img src="image.jpg"
  srcset="image-small.jpg 480w,
          image-medium.jpg 768w,
          image-large.jpg 1200w"
  sizes="(min-width: 1200px) 960px,
         (min-width: 768px) 50vw,
         100vw"
  alt="Image description">




