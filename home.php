<?php
include('config.php');
// Fetch banners from the database
$sql = "SELECT `image_banner` FROM `banner`";
$result = mysqli_query($conn, $sql);

// Fetch services from the database
$sqlServices = "SELECT `name`, `icon` FROM `services` ORDER BY `name` ASC";
$resultServices = mysqli_query($conn, $sqlServices);

// Fetch promotions from the database
$sqlPromotions = "SELECT `image_promotion` FROM `promotion`";
$resultPromotions = mysqli_query($conn, $sqlPromotions);

?>
<!-- banner -->
<div class="container-fluid mt-1 mb-1">
    <div class="swiper container">
        <div class="swiper-wrapper">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="swiper-slide">
                        <img src="admin/uploads/' . htmlspecialchars($row['image_banner']) . '" class="w-100 d-block rounded" />
                      </div>';
            }
            ?>
        </div>
    </div>
</div>
<!-- our services -->
<div class="container-fluid">
    <h6>Home Services</h6>
    <div class="swiper homeservices">
        <div class="swiper-wrapper text-center">
            <?php while ($row = mysqli_fetch_assoc($resultServices)) { ?>
                <div class="swiper-slide">
                    <a data-bs-toggle="modal" data-bs-target="#booknowModal" class="text-decoration-none text-dark">
                        <img src="admin/uploads/<?php echo htmlspecialchars($row['icon']); ?>" width="53px" />
                        <p><?php echo htmlspecialchars($row['name']); ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Special Offers Section -->
<div class="container-fluid offer">
    <h6>Special Offers</h6>
    <div class="swiper promo">
        <div class="swiper-wrapper infinite-scroll">
            <?php while ($rowPromo = mysqli_fetch_assoc($resultPromotions)) : ?>
                <div class="swiper-slide mb-4">
                    <img src="admin/uploads/<?php echo htmlspecialchars($rowPromo['image_promotion']); ?>" width="150px" />
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- recommended freelancer -->
<div class="container-fluid offer">
    <h6 class="mt-1 text-center">Most Recommended Freelancer</h6>
    <div class="swiper freelancer">
        <div class="swiper-wrapper mb-1">
            <div class="swiper-slide">
                <div class="bg-white rounded px-4 py-2 text-center">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px;">
                    <h6 class="mt-2" style="font-size: 15px;">Ernesto Goñabo</h6>
                    <div class="row">
                        <div class="col">
                            <h6 style="font-size: 13px;">Ratings</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill text-warning me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">5</h6>
                            </div>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Rate</h6>
                            <h6 style="font-size: 11px;">₱ 700/Day</h6>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Job Title</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-briefcase text-success me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">Carpenter</h6>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mt-1 mb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#profilefreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            More Info <i class="bi bi-info-circle ms-1"></i>
                        </button>
                        <button class="btn btn-outline-success btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#bookfreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            Book Now <i class="bi bi-bookmark ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-white rounded px-4 py-2 text-center">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px;">
                    <h6 class="mt-2" style="font-size: 15px;">Ernesto Goñabo</h6>
                    <div class="row">
                        <div class="col">
                            <h6 style="font-size: 13px;">Ratings</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill text-warning me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">5</h6>
                            </div>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Rate</h6>
                            <h6 style="font-size: 11px;">₱ 700/Day</h6>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Job Title</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-briefcase text-success me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">Carpenter</h6>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mt-1 mb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#profilefreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            More Info <i class="bi bi-info-circle ms-1"></i>
                        </button>
                        <button class="btn btn-outline-success btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#bookfreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            Book Now <i class="bi bi-bookmark ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-white rounded px-4 py-2 text-center">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px;">
                    <h6 class="mt-2" style="font-size: 15px;">Ernesto Goñabo</h6>
                    <div class="row">
                        <div class="col">
                            <h6 style="font-size: 13px;">Ratings</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill text-warning me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">5</h6>
                            </div>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Rate</h6>
                            <h6 style="font-size: 11px;">₱ 700/Day</h6>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Job Title</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-briefcase text-success me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">Carpenter</h6>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mt-1 mb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#profilefreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            More Info <i class="bi bi-info-circle ms-1"></i>
                        </button>
                        <button class="btn btn-outline-success btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#bookfreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            Book Now <i class="bi bi-bookmark ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-white rounded px-4 py-2 text-center">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px;">
                    <h6 class="mt-2" style="font-size: 15px;">Ernesto Goñabo</h6>
                    <div class="row">
                        <div class="col">
                            <h6 style="font-size: 13px;">Ratings</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill text-warning me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">5</h6>
                            </div>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Rate</h6>
                            <h6 style="font-size: 11px;">₱ 700/Day</h6>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Job Title</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-briefcase text-success me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">Carpenter</h6>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mt-1 mb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#profilefreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            More Info <i class="bi bi-info-circle ms-1"></i>
                        </button>
                        <button class="btn btn-outline-success btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#bookfreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            Book Now <i class="bi bi-bookmark ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-white rounded px-4 py-2 text-center">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px;">
                    <h6 class="mt-2" style="font-size: 15px;">Ernesto Goñabo</h6>
                    <div class="row">
                        <div class="col">
                            <h6 style="font-size: 13px;">Ratings</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill text-warning me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">5</h6>
                            </div>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Rate</h6>
                            <h6 style="font-size: 11px;">₱ 700/Day</h6>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Job Title</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-briefcase text-success me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">Carpenter</h6>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mt-1 mb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#profilefreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            More Info <i class="bi bi-info-circle ms-1"></i>
                        </button>
                        <button class="btn btn-outline-success btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#bookfreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            Book Now <i class="bi bi-bookmark ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-white rounded px-4 py-2 text-center">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px;">
                    <h6 class="mt-2" style="font-size: 15px;">Ernesto Goñabo</h6>
                    <div class="row">
                        <div class="col">
                            <h6 style="font-size: 13px;">Ratings</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill text-warning me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">5</h6>
                            </div>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Rate</h6>
                            <h6 style="font-size: 11px;">₱ 700/Day</h6>
                        </div>

                        <div class="col">
                            <h6 style="font-size: 13px;">Job Title</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-briefcase text-success me-1" style="margin-top: -8px;"></i>
                                <h6 style="font-size: 11px;">Carpenter</h6>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mt-1 mb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#profilefreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            More Info <i class="bi bi-info-circle ms-1"></i>
                        </button>
                        <button class="btn btn-outline-success btn-sm rounded-pill d-flex align-items-center"
                            data-bs-toggle="offcanvas" data-bs-target="#bookfreelancer"
                            style="--bs-btn-font-size: .75rem;">
                            Book Now <i class="bi bi-bookmark ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- testimonials -->
<div class="container-fluid">
    <h6 class="text-center mt-1">Testimonials
    </h6>
    <div class="swiper reviews rounded">
        <div class="swiper-wrapper text-light rounded">
            <div class="swiper-slide bg-white shadow-lg p-3">
                <div class="d-flex">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg"
                        alt="User profile picture" class="me-3">
                    <div>
                        <h6 class="d-flex reviewer text-dark">Cong</h6>
                        <div class="rating d-flex">
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>

                        </div>
                    </div>
                </div>
                <p class="text-dark">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tenetur labore neque laboriosam dignissimos et sapiente necessitatibus
                </p>
            </div>
            <div class="swiper-slide bg-white shadow-lg p-3 text-dark">
                <div class="d-flex">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0LhNkp52T5-NkE6BehMJk5zUC24jYB4Gv4A&s"
                        alt="User profile picture" class="me-3">
                    <div>
                        <h6 class="d-flex reviewer">Junnie</h6>
                        <div class="rating d-flex">
                            <i class='bi bi-star-fill-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                        </div>
                    </div>
                </div>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tenetur labore neque laboriosam dignissimos et sapiente necessitatibus
                </p>
            </div>
            <div class="swiper-slide bg-white shadow-lg p-3 text-dark">
                <div class="d-flex">
                    <img src="https://i.ytimg.com/vi/_VF_MPqEk1I/maxresdefault.jpg"
                        alt="User profile picture" class="me-3">
                    <div>
                        <h6 class="d-flex reviewer">Waldo</h6>
                        <div class="rating d-flex">
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                        </div>
                    </div>
                </div>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tenetur labore neque laboriosam dignissimos et sapiente necessitatibus
                </p>
            </div>
            <div class="swiper-slide bg-white shadow-lg p-3 text-dark">
                <div class="d-flex">
                    <img src="https://pbs.twimg.com/profile_images/1257959595705692166/cKcfwh1y_400x400.jpg"
                        alt="User profile picture" class="me-3">
                    <div>
                        <h6 class="d-flex reviewer">Boss keng</h6>
                        <div class="rating d-flex">
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                        </div>
                    </div>
                </div>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tenetur labore neque laboriosam dignissimos et sapiente necessitatibus
                </p>
            </div>
            <div class="swiper-slide bg-white shadow-lg p-3 text-dark">
                <div class="d-flex">
                    <img src="https://contents.pep.ph/images2/images2/2021/12/03/burong-1638518991.jpg"
                        alt="User profile picture" class="me-3">
                    <div>
                        <h6 class="d-flex reviewer">Burong</h6>
                        <div class="rating d-flex">
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                            <i class='bi bi-star-fill text-warning fs-5 me-1'></i>
                        </div>
                    </div>
                </div>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tenetur labore neque laboriosam dignissimos et sapiente necessitatibus
                </p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>