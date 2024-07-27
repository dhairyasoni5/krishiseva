    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Krishi Seva</title>
        <link rel="shortcut icon" href="photos/logo_fin.png">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            /* body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .hero-image img {
                width: 100%;
                height: auto;
            }
            .main_container {
                display: flex;
                justify-content: space-evenly;
                padding: 20px;
            }
            .middle-main {
                flex: 1;
                margin-right: 20px;
            }
            .right-main {
                flex: 0.3;
            } */
            .post-1, .post-about {
                display: flex;
                align-items: center;
            }
            .middle-pic {
                border-radius: 50%;
                margin-right: 10px;
                width: 50px;
                height: 50px;
            }
            .linked-input .input {
                display: flex;
                align-items: center;
                margin-right: 10px;
            }
            .linked-input .input img {
                width: 20px;
                height: 20px;
                margin-right: 5px;
            }
            .post-image {
                width: 100%;
                height: auto;
                margin-top: 10px;
            }
            .arz-card, .communities-card {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            .arz-info, .communities-info {
                margin-left: 10px;
            }
            .follow-button, .join-button {
                background-color: #007BFF;
                color: white;
                border: none;
                padding: 5px 10px;
                cursor: pointer;
                border-radius: 5px;
            }
            .follow-button i, .join-button i {
                margin-right: 5px;
            }
            .main2 {
                padding: 20px 0;
            }
            .schemes {
                padding: 20px;
                background-color: white;
                margin-bottom: 20px;
                border-radius: 5px;
                width: 100%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .schemes h2 {
                margin-bottom: 20px;
            }
            .scheme-box {
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 5px;
                /* padding: 10px; */
                margin-bottom: 10px;
            }
            .scheme-box a {
                color: #007BFF;
                text-decoration: none;
                font-weight: bold;
            }
            .scheme-box a:hover {
                text-decoration: underline;
            }
            .news-updates, .testimonials {
                padding: 20px;
                background-color: white;
                margin-bottom: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .news-updates h2, .testimonials h2 {
                margin-bottom: 20px;
            }
            .news-item, .testimonial-item {
                margin-bottom: 10px;
            }
            .news-item h3, .testimonial-item h3 {
                margin: 0;
                font-size: 1.1em;
            }
            .news-item p, .testimonial-item p {
                margin: 5px 0;
            }
        </style>
    </head>

    <body>
        <?php include 'includes/navbar.php'; ?>
        <main>
            <div class="hero-image">
                <img src="photos/banner2.jpg" alt="Hero Image">
            </div>
        </main>

        <div class="carousel-container">
        <h2>Recent News and Updates</h2>
        <div class="carousel">
            <div class="carousel-item">
                <h3>New Agricultural Policy Announced</h3>
                <p>The government has introduced a new policy aimed at increasing crop yields and supporting farmers with better access to technology and resources.</p>
                <a href="#">Read More</a>
            </div>
            <div class="carousel-item">
                <h3>Record High Crop Production This Year</h3>
                <p>Farmers across the country are celebrating a record high in crop production, attributed to favorable weather conditions and modern farming techniques.</p>
                <a href="#">Read More</a>
            </div>
            <div class="carousel-item">
                <h3>Launch of New Subsidy Program for Farmers</h3>
                <p>A new subsidy program has been launched to provide financial assistance to small-scale farmers, helping them invest in better equipment and seeds.</p>
                <a href="#">Read More</a>
            </div>
            <div class="carousel-item">
                <h3>Innovative Irrigation System Gains Popularity</h3>
                <p>An innovative irrigation system is gaining popularity among farmers, significantly reducing water usage while maintaining crop health and yield.</p>
                <a href="#">Read More</a>
            </div>
            <div class="carousel-item">
                <h3>Organic Farming Sees a Surge in Interest</h3>
                <p>There has been a surge in interest in organic farming practices, with more farmers transitioning to sustainable and eco-friendly methods.</p>
                <a href="#">Read More</a>
            </div>
            <div class="carousel-item">
                <h3>Farmers' Market Sales Reach New Heights</h3>
                <p>Sales at local farmers' markets have reached new heights, reflecting a growing consumer preference for fresh, locally-sourced produce.</p>
                <a href="#">Read More</a>
            </div>
            <div class="carousel-item">
                <h3>New Pest Control Methods Improve Crop Health</h3>
                <p>New pest control methods are showing promise in improving crop health and reducing the need for chemical pesticides.</p>
                <a href="#">Read More</a>
            </div>
            <div class="carousel-item">
                <h3>Farmer Education Programs Yield Positive Results</h3>
                <p>Education programs aimed at farmers are yielding positive results, with participants reporting higher productivity and better farm management.</p>
                <a href="#">Read More</a>
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>


        
        <main class="main main2">
            <div class="main_container" style="display: flex; justify-content: space-evenly;">
                <div class="middle-main" style="padding-top: 10px;">
                    

                    <div class="middle-main-1">
                        <div class="post-1">
                            <img class="middle-pic" src="photos/profile pic.jpeg" alt="Profile Picture">
                            <input class="post" type="text" placeholder="Start a post">
                        </div>
                        <div class="linked-input">
                            <div class="input">
                                <img class="upload" src="icons/photo-svgrepo-com.svg" alt="Upload Photo">
                                <p>Photo</p>
                            </div>
                            <div class="input">
                                <img class="upload" src="icons/video-movie-play-svgrepo-com.svg" alt="Upload Video">
                                <p>Video</p>
                            </div>
                            <div class="input">
                                <img class="upload" src="icons/portfolio-svgrepo-com.svg" alt="Upload Portfolio">
                                <p>Portfolio</p>
                            </div>
                            <div class="input">
                                <img class="upload" src="icons/right-alignment-text-svgrepo-com.svg" alt="Upload Text">
                                <p>Text</p>
                            </div>
                        </div>
                    </div>

                    <div class="middle-main-2" style="width: 600px;">
                        <div class="post-about">
                            <div>
                                <img class="middle-pic" src="photos/profile pic.jpeg" alt="Profile Picture">
                            </div>
                            <div>
                                <p class="name">SUMIT CHAKRABORTY</p>
                                <p class="name-about">Large Scale farmer</p>
                                <p class="name-about">6h &#183; <i class="fa fa-globe" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <p>Urgently required labourers for 3 month job at Jabalpur. Pay negotiable. 12hrs/day.</p>
                        </div>
                        <img class="post-image" src="photos/post1.jpg" alt="Post Image">
                    </div>

                    <div class="news-updates">
                        <h2>Recent News and Updates</h2>
                        <div class="news-item">
                            <h3>News Title 1</h3>
                            <p>Summary of the news...</p>
                            <a href="link-to-full-news-1.html">Read More</a>
                        </div>
                        <div class="news-item">
                            <h3>News Title 2</h3>
                            <p>Summary of the news...</p>
                            <a href="link-to-full-news-2.html">Read More</a>
                        </div>
                        <!-- Add more news items as needed -->
                    </div>
                </div>

                <div class="right-main" style="padding-top: 100px;">
                    <div class="right-main-1">
                        <h4>Suggestions</h4>
                        <div class="arz-card">
                            <img class="arz" src="photos/anz.jpeg" alt="Random Fertilizers">
                            <div class="arz-info">
                                <h5>RANDOM Fertilizers</h5>
                                <p>Company &#183; Fertilizers</p>
                                <button class="follow-button"> <i class="fa fa-plus"></i> Follow </button>
                            </div>
                        </div>
                        <hr>
                        <div class="arz-card">
                            <img class="arz" src="photos/ropay.jpeg" alt="Farming Equipments">
                            <div class="arz-info">
                                <h5>FARMING EQUIPMENTS</h5>
                                <p>Company &#183; TRACTORS AND TOOLS</p>
                                <button class="follow-button"> <i class="fa fa-plus"></i> Follow </button>
                            </div>
                        </div>
                        <hr>
                        <div class="arz-card">
                            <img class="arz" src="photos/ARM.jpeg" alt="IREDA">
                            <div class="arz-info">
                                <h5>IREDA</h5>
                                <p>Company &#183; FINANCE AND LOANS</p>
                                <button class="follow-button"> <i class="fa fa-plus"></i> Follow </button>
                            </div>
                        </div>
                        <p style="font-size: 14px; text-align: center; margin-top: 10px; color: grey;">View all recommendations <i class="fa fa-arrow-right"></i></p>
                    </div>

                    <div class="communities">
                        <h4>Communities</h4>
                        <hr>
                        <div class="communities-card">
                            <img class="community" src="photos/farm.jpeg" alt="Farmers' Circle" height="50%" width="50%">
                            <div class="communities-info">
                                <h5>Farmers' Circle</h5>
                                <p>Discuss and share ideas about farming, agriculture, and food.</p>
                                <button class="join-button">Join</button>
                            </div>
                        </div>
                        <hr>
                        <div class="communities-card">
                            <img class="community" src="photos/he.jpg" alt="Food Fighters" height="50%" width="50%">
                            <div class="communities-info">
                                <h5>Food Fighters</h5>
                                <p>Discuss and share ideas about food, health, and safety.</p>
                                <button class="join-button">Join</button>
                            </div>
                        </div>
                    </div>

                    <div class="schemes">
                        <h2>Government Schemes for Farmers</h2>
                        <div class="scheme-box">
                            <h3>Pradhan Mantri Kisan Samman Nidhi</h3>
                            <a href="link-to-scheme-1-details.html">More Details</a>
                        </div>
                        <div class="scheme-box">
                            <h3>Pradhan Mantri Fasal Bima Yojana</h3>
                            <a href="link-to-scheme-2-details.html">More Details</a>
                        </div>
                        <div class="scheme-box">
                            <h3>Kisan Credit Card Scheme</h3>
                            <a href="link-to-scheme-3-details.html">More Details</a>
                        </div>
                        <!-- Add more schemes as needed -->
                    </div>

                    <div class="testimonials">
                        <h2>Success Stories</h2>
                        <div class="testimonial-item">
                            <h3>Farmer Name 1</h3>
                            <p>"This scheme helped me improve my yield by 30%!"</p>
                        </div>
                        <div class="testimonial-item">
                            <h3>Farmer Name 2</h3>
                            <p>"Thanks to the government support, I was able to buy new equipment."</p>
                        </div>
                        <!-- Add more testimonials as needed -->
                    </div>
                </div>
            </div>
        </main>


        <script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    document.querySelector('.next').addEventListener('click', () => {
        showSlides(slideIndex += 1);
    });

    document.querySelector('.prev').addEventListener('click', () => {
        showSlides(slideIndex -= 1);
    });

    function showSlides(n) {
        if (n >= totalSlides) { slideIndex = 0; }
        if (n < 0) { slideIndex = totalSlides - 1; }

        const offset = -slideIndex * 100;
        document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
    }

    // Initialize the carousel to show the first slide
    showSlides(slideIndex);
    </script>
    
    </body>

    </html>
