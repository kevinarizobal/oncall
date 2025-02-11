<?php
include('config.php');

// Fetch logo
$logoQuery = "SELECT image_logo FROM logo LIMIT 1";
$logoResult = mysqli_query($conn, $logoQuery);
$logoRow = mysqli_fetch_assoc($logoResult);
$logo = $logoRow['image_logo'] ?? 'default-logo.png'; // Fallback image

// Fetch About Us section
$aboutQuery = "SELECT title, content FROM about_tbl LIMIT 1";
$aboutResult = mysqli_query($conn, $aboutQuery);
$aboutRow = mysqli_fetch_assoc($aboutResult);

// Fetch Mission section
$missionQuery = "SELECT title, content FROM mission_tbl LIMIT 1";
$missionResult = mysqli_query($conn, $missionQuery);
$missionRow = mysqli_fetch_assoc($missionResult);

// Fetch Team Members (Approved Users)
$teamQuery = "SELECT name, job_position, profile_picture FROM users WHERE approved = 'approved' AND finish_job BETWEEN 6 AND 10 ORDER BY finish_job DESC";
$teamResult = mysqli_query($conn, $teamQuery);
?>

<div class="container-fluid p-3" style="font-size: small;">
    <img 
        src="admin/uploads/<?php echo htmlspecialchars($logo); ?>" 
        width="80px" 
        class="mx-auto d-block mb-2"
    >

    <div>
        <h6 class="text-center" style="font-size: medium;">
            <?php echo htmlspecialchars($aboutRow['title'] ?? 'About Us'); ?>
        </h6>
        <p class="text-justify" style="text-align: justify;">
            <?php echo nl2br(htmlspecialchars($aboutRow['content'] ?? 'Description not available.')); ?>
        </p>

        <h6 class="text-center" style="font-size: medium;">
            <?php echo htmlspecialchars($missionRow['title'] ?? 'Our Mission'); ?>
        </h6>
        <p class="text-justify" style="text-align: justify;">
            <?php echo nl2br(htmlspecialchars($missionRow['content'] ?? 'Description not available.')); ?>
        </p>
    </div>

    <div>
        <h6 class="text-center" style="font-size: medium;">Meet Our Team</h6>
        <div class="swiper team">
            <div class="swiper-wrapper text-center">
                <?php while ($teamRow = mysqli_fetch_assoc($teamResult)) : ?>
                    <div class="swiper-slide">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="freelancer/<?= htmlspecialchars($teamRow['profile_picture'] ?: 'default-profile.png') ?>" width="90px" height="160px" />
                        </a>
                        <p class="mt-2" style="font-size: 11px;"><?= htmlspecialchars($teamRow['name']) ?></p>
                        <p style="font-size: 11px; margin-top: -15px;"><?= htmlspecialchars(strtoupper($teamRow['job_position'])) ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- <div class="ms-1 me-1">
        <div class="bg-white shadow-lg px-3 py-2 rounded">
            <h6 class="text-center" style="font-size: medium;">Contact Us</h6>
            <div class="row">
                <div class="col">
                    <label>Social Media:</label>
                    <a href="www.facebook.com" class="d-line-block mb-2 text-decoration-none text-dark" style="font-size: 12px;">
                        <br><i class="bi bi-facebook"></i> Facebook
                    </a>
                    <a href="www.instagram.com" class="d-line-block mb-2 text-decoration-none text-dark" style="font-size: 12px;">
                        <br><i class="bi bi-instagram"></i> Instagram
                    </a>
                    <a href="www.twitter.com" class="d-line-block mb-2 text-decoration-none text-dark" style="font-size: 12px;">
                        <br><i class="bi bi-twitter"></i> Twitter
                    </a>
                </div>
                <div class="col">
                    <div>
                        <label>Email:</label>
                        <a href="mailto: oncall@gmail.com" class="d-line-block mb-2 text-decoration-none text-dark" style="font-size: 10px;">
                            <br><i class="bi bi-envelope-fill"></i> oncall@gmail.com
                        </a>
                        <label>Phone No:</label>
                        <a href="tel: +639461109394 " class="d-line-block mb-2 text-decoration-none text-dark" style="font-size: 10px;">
                            <br><i class="bi bi-telephone-fill"></i> 09461109394
                        </a>                
                    </div>
                </div>
            </div>
            <label>Address:</label><br>
            <a href="https://maps.app.goo.gl/r8LqfEW5nBY7zDfR7" style="font-size: 10px;" class="text-decoration-none">
                Brgy. Pag-antayan, Cantilan, Surigao Del Sur 8317.
            </a>
            <div class="responsive-map-container mt-3 mb-2 rounded" style="position: relative; overflow: hidden; padding-top: 56.25%;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1602.6946807954052!2d125.96926226056894!3d9.336830337772836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303d71cb995b3a9%3A0x9ab9df7bff357479!2sNorth%20Eastern%20Mindanao%20State%20University%20-%20Cantilan%20Campus!5e1!3m2!1sen!2sph!4v1737320014326!5m2!1sen!2sph" 
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" 
                    allowfullscreen="true" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div> -->
</div>
