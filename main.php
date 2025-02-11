<?php
include('config.php');

// Fetch services
$sql = "SELECT `name` FROM `services`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <?php require('inc/link.php') ?>
</head>

<body class="bg-custom">
    <!-- page -->
    <div class="swiper page">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <?php require('home.php') ?>
            </div>
            <div class="swiper-slide">
                <?php require('about.php') ?>
            </div>
            <div class="swiper-slide">
                <?php require('profile.php') ?>
            </div>
            <div class="swiper-slide">
                <?php require('profile.php') ?>
            </div>

        </div>
    </div>
    <!-- navigation -->
    <nav class="sticky-bottom shadow-sm bg-primary mt-2">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-white" id="nav-0" href="#">
                    <i class="bi bi-house fs-3"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="nav-1" href="#">
                    <i class="bi bi-info-circle fs-3"></i>
                    <span>About Us</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="nav-2" href="#">
                    <i class="bi bi-person-fill fs-3"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </nav>

    <!--off canvas info freelancer  -->
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="profilefreelancer" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header bg-white shadow-lg">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Freelancer Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-light">
            <form class="d-flex flex-column align-items-center w-100" action="">
                <div class="mb-3 text-center">
                    <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg"
                        style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
                </div>
                <div class="mb-3 w-100">
                    <label for="">Name:</label>
                    <input type="text" value="Cong Velasquez" class="form-control">
                </div>
                <div class="mb-3 w-100">
                    <label for="">Finished Job:</label>
                    <input type="text" value="10" class="form-control" disabled>
                </div>
                <div class="mb-3 w-100">
                    <label for="">Job Description:</label>
                    <input type="text" value="Carpenter" class="form-control">
                </div>
                <div class="mb-3 w-100">
                    <label for="">Years Experience</label>
                    <input type="text" value="12 years" class="form-control">
                </div>
                <div class="mb-3 w-100">
                    <label for="">Certifications</label>
                    <div class="">
                        <img src="https://image.slidesharecdn.com/c5e3e9ce-18ba-49a7-b1b4-2fb7952c90c7-160425144151/85/NC2-Certificate-1-320.jpg" width="280px" alt="">
                    </div>
                </div>
                <div class="mb-3 w-100">
                    <label for="">Email:</label>
                    <input type="email" value="cong@gmail.com" class="form-control">
                </div>
                <div class="mb-3 w-100">
                    <label for="">Phone Number:</label>
                    <input type="text" value="09461109394" class="form-control">
                </div>
            </form>
        </div>
    </div>

    <!--off canvas book freelancer  -->
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="bookfreelancer" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header bg-white shadow-lg">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Booking Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-light">
            <form id="booknowForm">
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <!-- Contact No -->
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact No.</label>
                    <input type="tel" class="form-control" id="contact" name="contact" required>
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>

                <!-- Location (Interactive Map) -->
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            id="location"
                            name="location"
                            readonly
                            placeholder="Fetching current location..." />
                        <button
                            class="btn btn-outline-secondary"
                            type="button"
                            id="searchLocationBtn">
                            Open Map
                        </button>
                    </div>
                    <!-- Hidden Map -->
                    <div id="mapContainer" style="display: none;">
                        <div id="map" style="height: 300px; width: 100%; margin-top: 10px;"></div>
                    </div>
                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude">
                </div>

                <!-- Services -->
                <div class="mb-3">
                    <label for="services" class="form-label">Select Services</label>
                    <div class="row">
                        <?php
                        $query = "SELECT * FROM services";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $serviceName = htmlspecialchars($row['name']);
                                $serviceId = strtolower(str_replace(' ', '', $serviceName));
                        ?>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service<?php echo $serviceId; ?>" name="services[]" value="<?php echo $serviceName; ?>">
                                        <label class="form-check-label" for="service<?php echo $serviceId; ?>"><?php echo $serviceName; ?></label>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo "<p>No services available.</p>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Date -->
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <!-- Time -->
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>

                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">BOOK NOW</button>
                </div>
            </form>
        </div>
    </div>

    <!-- edit profile Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <form class="d-flex flex-column align-items-center w-100" action="">
                        <div class="mb-3 text-center">
                            <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg"
                                style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
                        </div>
                        <div class="mb-3 w-100">
                            <input type="file" class="form-control">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Name:</label>
                            <input type="text" value="Cong Velasquez" class="form-control">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Email:</label>
                            <input type="email" value="cong@gmail.com" class="form-control">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Phone Number:</label>
                            <input type="text" value="09461109394" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--  Testimonial Modal -->
    <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="testimonialModalLabel">Share Your Experience</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Testimonial Form -->
                    <form action="#" method="POST">
                        <!-- Star Rating -->
                        <div class="mb-3">
                            <label for="starRating" class="form-label" style="font-size: 14px;">Rate Us</label>
                            <select class="form-select bg-light" id="starRating" name="starRating" style="font-size: 14px;">
                                <option value="" selected disabled>Select Rating</option>
                                <option value="1">⭐ Very Dissatisfied</option>
                                <option value="2">⭐⭐ Dissatisfied</option>
                                <option value="3">⭐⭐⭐ Neutral</option>
                                <option value="4">⭐⭐⭐⭐ Satisfied</option>
                                <option value="5">⭐⭐⭐⭐⭐ Very Satisfied</option>
                            </select>
                        </div>

                        <!-- Testimonial Description -->
                        <div class="mb-3">
                            <label for="testimonialDescription" class="form-label" style="font-size: 14px;">Your Feedback</label>
                            <textarea
                                class="form-control bg-light"
                                id="testimonialDescription"
                                name="testimonialDescription"
                                rows="4"
                                placeholder="Write your experience here..."
                                style="font-size: 14px;"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2" style="font-size: 14px;">
                                Submit Feedback
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal booknow -->
    <div class="modal fade" id="booknowModal" tabindex="-1" aria-labelledby="booknowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="booknowModalLabel">Book Now Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="booknowForm">
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <!-- Contact No -->
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact No.</label>
                            <input type="tel" class="form-control" id="contact" name="contact" required>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>

                        <!-- Location (Interactive Map) -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="location"
                                    name="location"
                                    readonly
                                    placeholder="Fetching current location..." />
                                <button
                                    class="btn btn-outline-secondary"
                                    type="button"
                                    id="searchLocationBtn">
                                    Open Map
                                </button>
                            </div>
                            <!-- Hidden Map -->
                            <div id="mapContainer" style="display: none;">
                                <div id="map" style="height: 300px; width: 100%; margin-top: 10px;"></div>
                            </div>
                            <input type="hidden" id="latitude" name="latitude">
                            <input type="hidden" id="longitude" name="longitude">
                        </div>

                        <!-- Services -->
                        <div class="mb-3">
                            <label for="services" class="form-label">Select Services</label>
                            <div class="row">
                                <?php
                                $query = "SELECT * FROM services";
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $serviceName = htmlspecialchars($row['name']);
                                        $serviceId = strtolower(str_replace(' ', '', $serviceName));
                                ?>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="service<?php echo $serviceId; ?>" name="services[]" value="<?php echo $serviceName; ?>">
                                                <label class="form-check-label" for="service<?php echo $serviceId; ?>"><?php echo $serviceName; ?></label>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "<p>No services available.</p>";
                                }
                                ?>
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>

                        <!-- Time -->
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal bookinginfo -->
    <div class="modal fade" id="bookinfo" tabindex="-1" aria-labelledby="booknowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="booknowModalLabel">Book Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="booknowForm">
                        <!-- freelancer incharge -->
                        <div class="mb-3 text-center">
                            <img src="https://static.vecteezy.com/system/resources/previews/009/292/244/non_2x/default-avatar-icon-of-social-media-user-vector.jpg"
                                style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
                        </div>
                        <div class="mb-3">
                            <label for="incharge" class="form-label">Incharge :</label>
                            <input type="text" value="Pending" class="form-control" id="incharge" name="incharge" required>
                        </div>
                        <div class="mb-3">
                            <label for="services" class="form-label">Services :</label>
                            <input type="text" value="carpentry" class="form-control" id="services" name="services" required>
                        </div>

                        <!-- Contact No -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status :</label>
                            <input type="text" value="pending" class="form-control" id="status" name="status" required>
                        </div>

                        <div class="mb-3">
                            <label for="datetime" class="form-label">Date & Time :</label>
                            <input type="text" value="01/27/25 09:10 AM" class="form-control" id="datetime" name="datetime" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- info freelancer Modal -->
    <div class="modal fade" id="freelancer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content take">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Freelancer Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <form class="d-flex flex-column align-items-center w-100" action="">
                        <div class="mb-3 text-center">
                            <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg"
                                style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Name:</label>
                            <input type="text" value="Cong Velasquez" class="form-control">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Finished Job:</label>
                            <input type="text" value="10" class="form-control" disabled>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Job Description:</label>
                            <input type="text" value="Carpenter" class="form-control">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Years Experience</label>
                            <input type="text" value="12 years" class="form-control">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Certifications</label>
                            <div class="">
                                <img src="https://image.slidesharecdn.com/c5e3e9ce-18ba-49a7-b1b4-2fb7952c90c7-160425144151/85/NC2-Certificate-1-320.jpg" width="280px" alt="">
                            </div>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Email:</label>
                            <input type="email" value="cong@gmail.com" class="form-control">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="">Phone Number:</label>
                            <input type="text" value="09461109394" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">CONFIRM</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Swiper JS -->
    <?php require('inc/scripts.php') ?>
    <script src="scripts/home.js"></script>
    <script src="scripts/about.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/profile.js"></script>

    <script>
        let map, marker, geocoder;

        function initMap() {
            const defaultLocation = [14.5995, 120.9842]; // Default location (Manila, Philippines)
            const mapContainer = document.getElementById('mapContainer');

            // Initialize map
            map = L.map('map').setView(defaultLocation, 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Add draggable marker
            marker = L.marker(defaultLocation, {
                draggable: true
            }).addTo(map);

            // Initialize geocoder
            geocoder = L.Control.geocoder({
                    defaultMarkGeocode: false
                })
                .on('markgeocode', function(e) {
                    const {
                        lat,
                        lng
                    } = e.geocode.center;
                    const address = e.geocode.name;

                    updateLocation(lat, lng, address);
                    map.setView([lat, lng], 13);
                    marker.setLatLng([lat, lng]);
                })
                .addTo(map);

            // Reverse geocode when marker is moved
            marker.on('moveend', function(e) {
                const {
                    lat,
                    lng
                } = e.target.getLatLng();
                reverseGeocode(lat, lng);
            });

            // Display map on button click
            document.getElementById('searchLocationBtn').addEventListener('click', () => {
                mapContainer.style.display = 'block';
                map.invalidateSize(); // Ensure map is rendered correctly
            });

            // Fetch and set current location
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        reverseGeocode(lat, lng, true);
                        map.setView([lat, lng], 13);
                        marker.setLatLng([lat, lng]);
                    },
                    () => console.warn("Geolocation denied or unavailable.")
                );
            }
        }

        // Reverse geocode using OpenStreetMap Nominatim
        function reverseGeocode(lat, lng, isCurrentLocation = false) {
            const url = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`;

            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    const address = data.display_name || `Latitude: ${lat}, Longitude: ${lng}`;
                    updateLocation(lat, lng, address, isCurrentLocation);
                })
                .catch(() => {
                    console.error("Error fetching location name.");
                    const fallbackAddress = `Latitude: ${lat}, Longitude: ${lng}`;
                    updateLocation(lat, lng, fallbackAddress, isCurrentLocation);
                });
        }

        // Update location inputs
        function updateLocation(lat, lng, address, isCurrentLocation = false) {
            const locationInput = document.getElementById('location');
            const latitudeInput = document.getElementById('latitude');
            const longitudeInput = document.getElementById('longitude');

            locationInput.value = isCurrentLocation ?
                `${address}` :
                address;
            latitudeInput.value = lat;
            longitudeInput.value = lng;
        }

        // Initialize map on page load
        document.addEventListener('DOMContentLoaded', initMap);
    </script>


    <script>
        document.getElementById("booknowForm").addEventListener("submit", function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            fetch("process_booking.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        Swal.fire({
                            icon: "success",
                            title: "Booking Successful!",
                            text: data.message,
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            document.getElementById("booknowForm").reset();
                            let modal = bootstrap.Modal.getInstance(document.getElementById('booknowModal'));
                            modal.hide();
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Booking Failed",
                            text: data.message,
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Something went wrong. Please try again.",
                    });
                    console.error("Error:", error);
                });
        });
    </script>

</body>

</html>