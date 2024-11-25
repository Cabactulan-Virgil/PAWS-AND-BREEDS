<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Paws and Breeds | Home</title>
    <link rel="stylesheet" href="CSS/Home.css">
    <link rel="icon" href="Assets/1000001718 1.png">
    <link rel="stylesheet" href="CSS/SweetAlert.css">
</head>

<body>


    <!-- Navigation Section -->
    <div class="nav-links">
        <img src="Assets/1000001718 1.png" class="logo-img" alt="Logo">
        <ul>
            <li><a href="#HEROOO">Home</a></li>
            <li><a href="#ABOUTUSSSS">About Us</a></li>
            <li><a href="#DOGBREEEDS">Dog Breeds</a></li>
            <li><a href="#REVIEWWWS">Reviews</a></li>
            <li><a href="#ContactUSSSS">Contact Us</a></li>

            <!-- Account Dropdown -->
            <li class="account-dropdown">
                <label for="dropdown-toggle" class="dropdown-toggle">Login</label>
                <input type="checkbox" id="dropdown-toggle">
                <ul class="dropdown-content">
                    <li><button id="login-now-btn" class="dropdown-btn">Login</button></li>
                    <li><button id="register-now-btn" class="dropdown-btn">Register</button></li>
                </ul>
            </li>


            <!-- Search Area -->
            <li>
                <input id="SearchAreaa" placeholder="Search..">
            </li>
        </ul>
    </div>

    <!-- Login Modal -->
    <div id="LoginAreaaa" class="modal hidden">
        <div id="lOginFillupform">
            <button id="Lexitbtnnn">X</button>
            <h2>LOGIN</h2>
            <h3>Already registered user, please login here.</h3><br>
            <input id="Usernameinput" type="text" placeholder="Username" required>
            <input id="Passwordinput" type="password" placeholder="Password" required><br>
            <button id="loginbuttnnn">Login</button>
            <h3 id="switchToRegister">Don't have an account? Register></h3>
        </div>
    </div>



    <!-- Register Modal -->
    <div id="RegisterAreaaa" class="modal hidden">
        <div id="RegisterFillupform">
            <button id="Rexitbtnnn">X</button>
            <h2>Register</h2>
            <h3>Don’t miss out on new product updates <br> and personalized tips and tricks!</h3><br>

            <!-- Add a container for form, image, and additional text -->
            <div class="form-container">
                <!-- Form Section -->
                <div class="form-section">
                    <form method="POST">
                        <div class="input-group">
                            <input id="Regis_Firstname" type="text" name="firstname" placeholder="Firstname" required>
                            <input id="Regis_LastName" type="text" name="lastname" placeholder="Lastname" required>
                        </div>
                        <div class="input-group2">
                            <input id="Regis_Email" type="email" name="email" placeholder="Email" required>
                            <input id="Regis_Username" type="text" name="username" placeholder="Username" required>
                            <input id="Regis_Password" type="password" name="password" placeholder="Password" required>
                        </div>

                        <button id="Registerbuttnnn">Register</button>
                    </form>
                </div>

                <!-- Image Section -->
                <div class="image-section">
                    <img src="Assets/pug-dog-jumping-white-background_957108-6 1.png" alt="Paws and Breeds Image">
                </div>

                <!-- Additional Text Section -->
                <div class="additional-info">
                    <h3>NEW MEMBER</h3>
                    <p>Create your account with us to unlock the following benefits:</p>
                    <ul>
                        <li>Ask an expert</li>
                        <li>Enjoy complimentary samples</li>
                        <li>Utilize interactive tools for a deeper understanding of your dog needs</li>
                        <li>Explore informative articles to enrich your pet journey</li>
                    </ul>
                    <h3><a href="#" id="switchToLogin">Already have an account? Login</a></h3>
                </div>
            </div>
        </div>
    </div>








    <!-- Hero Section -->
    <section class="hero" id="HEROOO">
        <div class="hero-slider">
            <!-- First Slide (Hero Content) -->
            <div class="slide active">
                <div class="hero-content">
                    <h1>Find the Breed That Fits Your<br>Lifestyle!</h1>
                    <p>From tiny French Bulldogs to giant Great Danes, our dog breed gallery has everything you need to know about your favourite dog breed!</p>
                    <!-- Know About Us Button with Link -->
                    <a href="#ABOUTUSSSS">
                        <button id="about-us-nav-btn" class="about-us-nav-button">Know About Us!</button>
                    </a>



                </div>
                <img src="Assets/1000001726 1.png" class="hero-image">
            </div>
        </div>
    </section>


    <!-- About Us Section -->
    <section class="about-us" id="ABOUTUSSSS">
        <div class="about-us-content">
            <span class="AboutUsContentt">
                <h2>ABOUT US</h2>
                <p>
                    At Paws & Breeds, we're dedicated to providing the best care for your furry friends. Whether you have a product-related query or are interested in connecting with us for dog food-related business inquiries, we're here to assist you. Feel free to reach out for any questions or concerns. Your dog's well-being is our top priority, and we're committed to being a reliable partner on your pet care journey.
                </p>
            </span>
            <img src="Assets/Ellipse 1.png" class="about-us-img2" style="max-width: 120%; height: auto;">
            <img src="Assets/pug-dog-jumping-white-background_957108-6 1.png" class="about-us-img1" style="max-width: 120%; height: auto;">

        </div>
    </section>



    <!-- Dog-Breeds Section -->
    <section class="dog-breeds" id="DOGBREEEDS">
        <h1 class="dog-breeds-title">List of All Kinds of Dog Breeds</h1>
        <p class="dog-breeds-description">
            From tiny French Bulldogs to giant Great Danes, our dog breed gallery has everything you need to<br>know about your favourite dog breed!
        </p>



        <span class="dog-breeds-container">
            <span class="Garrrr">
                <div class="filterAreaa">
                    <select id="OptionforFilter">
                        <option value="">Select A Breed</option>
                        <option value="BullDoggie">Bull Doggie</option>
                        <option value="CatDog">Cat Doggie</option>
                    </select>
                    <div class="category-buttons">
                        <button>Family Dogs</button>
                        <button>Easy to Train Dogs</button>
                        <button>Low Maintenance Dogs</button>
                        <button>Good for First Time Owners</button>
                        <button>Apartment Dogs</button>
                        <button>Can Live with Cats</button>
                    </div>
                </div>

                <div class="articles-container">
                    <!-- Article Card 1 -->
                    <div class="article-card">
                        <img src="Assets/American Bully.png" alt="Bulldog" class="article-image">
                        <h3>American Bully</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 2 -->
                    <div class="article-card">
                        <img src="Assets/American Bully.png" alt="Bulldog" class="article-image">
                        <h3>Poodle</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 3 -->
                    <div class="article-card">
                        <img src="Assets/American Bully.png" alt="Bulldog" class="article-image">
                        <h3>German Shepherd</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 4 -->
                    <div class="article-card">
                        <img src="Assets/American Bully.png" alt="Bulldog" class="article-image">
                        <h3>Beagle</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 5 -->
                    <div class="article-card">
                        <img src="Assets/American Bully.png" alt="Bulldog" class="article-image">
                        <h3>Golden Retriever</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 6 -->
                    <div class="article-card">
                        <img src="Assets/American Bully.png" alt="Bulldog" class="article-image">
                        <h3>Labrador</h3>

                        <button>Read More</button>
                    </div>
                </div>
            </span>

            </div>
            <!-- Pagination -->
            <div class="pagination">
                <button class="pagination-button">1</button>
                <button class="pagination-button">2</button>
                <button class="pagination-button">3</button>
                <button class="pagination-button">4</button>
                <button class="pagination-button">5</button>
                <button class="pagination-button">6</button>
                <button class="pagination-button">Next</button>
            </div>
    </section>



    <!-- Reviews Section -->
    <section class="reviewsARea" id="REVIEWWWS">
        <h2>What Pet Parents are Saying</h2>

        <span class="AlignAreee">
            <div class="review">
                <p><strong>Virgil G.</strong></p>
                ⭐⭐⭐⭐★
                <p>Namaak akong iro, gipaak pud nako.</p>
            </div>

            <div class="review">
                <p><strong>Chrisha K.</strong></p>
                ⭐⭐⭐⭐⭐
                <p>MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW.</p>
                </form>
            </div>

            <div class="review">
                <p><strong>Amiel B.</strong></p>
                ⭐⭐★★★
                <p>From tiny French Bulldogs to giant Great Danes, our dog breed gallery has everything you need to know about your favourite dog breed!</p>
                </form>
            </div>
        </span>


        <button id="ShareBtnnn">Share your feedback with us!</button>
    </section>




    <!-- Popular Articles Section -->
    <section class="popular-articles">
        <h2>Popular Articles</h2>
        <div class="articles-container">
            <div class="article-card">
                <img src="Assets/angry_chihuahua.png" alt="Understanding Dog Breeds" class="article-image">
                <h3>Understanding Dog Breeds</h3>
                <p>Explore the characteristics and behaviors of different dog breeds.</p>
                <button>Read More</button>
            </div>
            <div class="article-card">
                <img src="Assets/Rectangle 13.png" alt="Top 10 Dog Training Tips" class="article-image">
                <h3>Top 10 Dog Training Tips</h3>
                <p>Learn effective training techniques for your furry friend.</p>
                <button>Read More</button>
            </div>
            <div class="article-card">
                <img src="Assets/Rectangle 14.png" alt="Dog Nutrition Essentials" class="article-image">
                <h3>Dog Nutrition Essentials</h3>
                <p>Find out what to feed your dog for a healthy lifestyle.</p>
                <button>Read More</button>
            </div>
        </div>
    </section>



    <!-- Contact Us Section -->
    <section class="contact-us" id="ContactUSSSS">
        <div class="BannerLangss">
            <h2>Have Questions?</h2>
            <h3>CONTACT US</h3>
        </div>

        <div class="AboutYouForm">
            <span class="Garsm">
                <br>
                <br>
                <br>
                <h2>About you</h2>
                <br>
                <p>Dont miss out on new product updates<br>and personalized tips and tricks!</p>
                <br>
                <br>
            </span>

            <span class="Garrzzr">
                <span>
                    <h3>First Name</h3><input type="text" class="Spacesss">
                </span>
                <span>
                    <h3>First Name</h3><input type="text">
                </span>
            </span>

            <span>
                <h3>Email</h3><input type="text">
            </span>
            <span class="Garsm">
                <br>
                <br>
                <h2>About your contact</h2>
            </span>

            <span>
                <h3>Subject</h3><input type="text">
            </span>
            <span>
                <h3>Comments</h3><input type="text" class="helloo">
            </span>
            <span class="GGni"><button id="sendbuttnnn">SEND</button></span>

        </div>

        <!-- Contact Info Row -->
        <div class="contact-info-row">
            <!-- Location Section -->
            <div class="contact-info-item">
                <img src="Assets/internet 1.png" alt="Location Icon" class="contact-icon">
                <h4>OUR LOCATION</h4>
                <p>Seoul, Korea</p>
            </div>

            <!-- Call Us Section -->
            <div class="contact-info-item">
                <img src="Assets/telephone 1.png" alt="Phone Icon" class="contact-icon">
                <h4>CALL US</h4>
                <p>+82-2-323-6850</p>
            </div>

            <!-- Email Section -->
            <div class="contact-info-item">
                <img src="Assets/mail 1.png" alt="Email Icon" class="contact-icon">
                <h4>E-MAIL</h4>
                <p><a class="LinkToClickk" href="mailto:Paws&Breeds.com">Paws&Breeds.com</a></p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-column">
                <p>Reg. Number : 105-87-73167</p>
                <p>Tel : +82-2-323-6850</p>
                <p>Address : 2001, Geumcheon-gu, Seoul</p>
            </div>

            <div class="footer-column">
                <p><strong>Paws&Breeds</strong></p>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Paws&Breeds Blog</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <p><strong>Help</strong></p>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
    </footer>


    <script src="JS/SweetAlert.js"></script>
    <script src="JS/Home.js"></script>
</body>

</html>