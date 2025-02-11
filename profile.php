<!-- profile -->
<div class=" bg-white shadow-lg p-3 mb-2">
    <div class="profile">
        <div class="d-flex justify-content-start align-items-center">
            <img src="https://i.ytimg.com/vi/fAwmtSmIRwU/maxresdefault.jpg" alt="User profile picture" class="me-3">
            <div>
                <label class="ms-0 d-block">Cong Velasquez</label>
                <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Edit Profile <i class="bi bi-pencil-square ms-1"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- job offer price -->
<div class="me-2 ms-2 px-2 py-2 rounded bg-white shadow-lg mb-2">
    <!-- Wrapper to allow horizontal scroll -->
    <div class="table-responsive" id="scrollableTable" style="overflow-x: auto; touch-action: pan-x;">
        <table class="table table-rounded booking">
            <thead>
                <tr>    
                    <label for="booking" class="ms-2" style="font-size: large;">JOB RATES</label>
                    
                    <th scope="col">Services</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Freelancer</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Carpentry</td>
                    <td>₱1000</td>
                    <td>Juan Cruz</td>
                    
                    <td>
                        <a class="d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#freelancer">
                            <i class="bi bi-check-square text-success text-primary fs-4" style="margin-top: -5px;"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Carpentry</td>
                    <td>₱600</td>
                    <td>Juan Cruz</td>
                    
                    <td>
                        <a class="d-flex justify-content-center">
                            <i class="bi bi-check-square text-success text-primary fs-4" style="margin-top: -5px;"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- bookings -->
<div class="me-2 ms-2 px-2 py-2 rounded bg-white shadow-lg">
    <!-- Wrapper to allow horizontal scroll -->
    <table class="table table-rounded booking">
        <thead>
        <h6 for="booking" class="text-center mt-1 mb-1" style="font-size: large;">BOOKING RECORDS</h6>

            <tr class="text-center">
                <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                    <form class="d-flex align-items-center " role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="font-size: 12px;">
                    </form>
                    <small>
                        <select class="form-select" id="booking" aria-label="Default select example" style="font-size: 12px; width: auto;">
                            <option selected>Sort</option>
                            <option value="1">Ongoing</option>
                            <option value="2">Working</option>
                            <option value="3">Completed</option>
                            <option value="4">Cancel</option>
                        </select>
                    </small>
                </div>
                <th scope="col">Services</th>
                <th scope="col">Status</th>
                <th scope="col ms-3">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>Carpentry</td>
                <td>Pending</td>
                <td>
                    <div class="d-flex justify-content-center gap-2">
                        <a class="d-flex align-items-center">
                            <i class="bi bi-x-circle text-danger fs-4 me-1" style="margin-top: -5px;"></i>
                        </a>
                        <a class="d-flex align-items-center" data-bs-toggle="modal" 
                        data-bs-target="#bookinfo">
                            <i class="bi bi-info-circle text-primary fs-4" style="margin-top: -5px;"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Carpentry</td>
                <td>Ongoing</td>
                <td>
                    <div class="d-flex justify-content-center gap-2">
                        <a class="d-flex align-items-center" data-bs-toggle="modal" 
                        data-bs-target="#bookinfo">
                            <i class="bi bi-info-circle text-primary fs-4" style="margin-top: -5px;"></i>
                        </a>
                    </div>
                </td>
            </tr>
            
        </tbody>
    </table>

    <!-- Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-3" style="font-size: 12px; padding: 0; margin: 0;">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous" style="padding: 4px 8px; font-size: 12px;">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="padding: 4px 8px; font-size: 12px;">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="padding: 4px 8px; font-size: 12px;">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="padding: 4px 8px; font-size: 12px;">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next" style="padding: 4px 8px; font-size: 12px;">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>


</div>






<div class="d-flex flex-column align-items-center mt-2 me-2 ms-2 px-3 py-3 rounded bg-white shadow-lg">
    <h6 class="text-center mb-3" style="font-size: medium;">Share Your Experience</h6>
    <button 
        type="button" 
        class="btn btn-primary rounded-pill px-4 py-2" 
        style="font-size: 14px;" 
        data-bs-toggle="modal" 
        data-bs-target="#testimonialModal">
        Share Your Experience
    </button>
</div>

