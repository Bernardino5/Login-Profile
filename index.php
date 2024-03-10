<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="Bev.css">
    <meta charset="UTF-8">
    <title>MY PROFILE</title>
    
</head>

<body>
    <img src="Bev.png" alt="Bev.png" width="200" height="300"> 
    <h1>Welcome to My Profile!</h1>
    <p>Hello, I'm Beverly Bernardino 2nd-year college student taking BSIT- MI at National University. My goal is to become a web developer, and I am confident that with perseverance and trust in God, I will achieve this dream. It's important to not only pray but also take action, as God guides us in our efforts to pursue our aspirations. Let's work hard and stay committed to our dreams.  "Don't follow your dreams, chase them!" </p>
    <div class="profile-button">
        <span onclick="showContent('Home')">Home</span>
        <span onclick="showContent('About me')">About me</span>
        <span onclick="showContent('Skills')">Skills</span>
        <span onclick="showContent('Contact')">Contact</span>
        <span onclick="showContent('Social Media')">Social Media</span>
        <span onclick="logout()">Logout</span>
    </div>
    <div id="about-content" class="content"></div>
    <div id="skills-content" class="content"></div>
    <div id="contact-content" class="content"></div>
    <div id="social-media-content" class="content"></div>
    <div class="comment-section">
            <h4>Leave a Comment</4>
            <form action="submit_comment.php" method="post" class="comment-form">
                <textarea name="comment" class="comment-textarea" placeholder="Your Feedback" required></textarea>
                <br>
                <button class="comment-submit">Submit</button>
            </form>
        </div>
    <div id="home-content" class="content"></div>
   

    <script>
        function logout() {
            // Redirect to login.php
            window.location.href = 'logout.php';
        }

        function showContent(page) {
            var elementsToHide = [document.querySelector('h1'), document.querySelector('p')];
            var homeContent = document.getElementById('home-content');
            var imageElement = document.querySelector('#home-content img');
            
            elementsToHide.forEach(function (element) {
                element.style.display = 'none';
            });

            var aboutContent = document.getElementById('about-content');
            var skillsContent = document.getElementById('skills-content');
            var contactContent = document.getElementById('contact-content');
            var socialMediaContent = document.getElementById('social-media-content');
            var homeContent = document.getElementById('home-content');

            aboutContent.style.display = 'none';
            skillsContent.style.display = 'none';
            contactContent.style.display = 'none';
            socialMediaContent.style.display = 'none';
            homeContent.style.display = 'none';

            if (page === 'About me') {
                aboutContent.innerHTML = "<p>Date of Birth: February 5, 2004</p>";
                aboutContent.innerHTML += "<p>Age: 19</p>";
                aboutContent.innerHTML += "<p>Status: Single";
                aboutContent.innerHTML += "<p>Religion: Roman Catholic";
                aboutContent.innerHTML += "<p>Nationality: Filipino";
                aboutContent.innerHTML += "<p><b><br>EDUCATION:</br></b></p>";
                aboutContent.innerHTML += "<p><br>Junior high graduated at San Bartolome High School</br></p>";
                aboutContent.innerHTML += "<p>Senior high graduated at Dr. Carlos S. Lanting College</p>";
                aboutContent.innerHTML += "<p>BSIT-MI 2nd year College at National University</p>";
                aboutContent.innerHTML += "<p><b><br>HOBBY:</br></b></p>";
                aboutContent.innerHTML += "<p><br>Playing Mobile Legend</br></p>";
                aboutContent.innerHTML += "<p>Watching Volleyball</p>";
                aboutContent.style.display = 'block';
            } else if (page === 'Skills') {
                skillsContent.innerHTML = "<p>Basic Flairtending</p>";
                skillsContent.innerHTML += "<p>Basic fixing broken gadgets and appliances</p>";
                skillsContent.innerHTML += "<p>Communication skills</p>";
                skillsContent.innerHTML += "<p>Time management</p>";
                var videoElement = document.createElement('video');
                videoElement.width = 400;
                videoElement.height = 300;
                videoElement.controls = true;
                videoElement.style.margin = 'auto';
                var sourceElement = document.createElement('source');
                sourceElement.src = 'Bev.mp4';
                sourceElement.type = 'video/mp4';
                videoElement.appendChild(sourceElement);
                skillsContent.appendChild(videoElement);
                skillsContent.style.display = 'block';
            } else if (page === 'Contact') {
                contactContent.innerHTML = "<p>Email: bernardinobeverly3@gmail.com</p>";
                contactContent.innerHTML += "<p>Teams: <a href='https://teams.microsoft.com/v2/' target='_blank'>Beverly Bernardino</a></p>";
                contactContent.style.display = 'block';
            } else if (page === 'Social Media') {
                socialMediaContent.innerHTML = "<p><b>Connect with me on social media:</b></p>";
            socialMediaContent.innerHTML += "<p>Facebook: <a href='https://www.facebook.com/profile.php?id=100004815435780' target='_blank'>Beverly Bernardino</a></p>";
            socialMediaContent.innerHTML += "<p>Tiktok: <a href='https://www.tiktok.com/@youucantfindbeverlyyyy?is_from_webapp=1&sender_device=pc' target='_blank'>youucantfindbeverlyyyy</a></p>";


            // Add more social media links as needed
            socialMediaContent.style.display = 'block';
            } else if (page === 'Home') {
                elementsToHide.forEach(function (element) {
                    element.style.display = 'block';
                });
                homeContent.style.display = 'block';
                imageElement.style.display = 'block'; // Show the image on the home page
            
            }
        }
    </script>

</body>

</html>