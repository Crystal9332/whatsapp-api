@extends('layout.index')
@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            @include('common.menu')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('common.nav');
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card mb-4">
                            <h5 class="card-header">Employees</h5>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Basic -->
                                    <div class="col-md-6 mb-4">
                                        <select id="select2Basic" class="select2 form-select form-select-lg"
                                            data-allow-clear="true">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-chat card overflow-hidden">
                            <div class="row g-0">
                                <!-- Chat & Contacts -->
                                <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end"
                                    id="app-chat-contacts">
                                    <div class="sidebar-header">
                                        <div class="d-flex align-items-center me-3 me-lg-0">
                                            <div class="flex-shrink-0 avatar avatar-online me-3" data-bs-toggle="sidebar"
                                                data-overlay="app-overlay-ex" data-target="#app-chat-sidebar-left">
                                                <img class="user-avatar rounded-circle cursor-pointer"
                                                    src="../../assets/img/avatars/1.png" alt="Avatar">
                                            </div>
                                            <div class="flex-grow-1 input-group input-group-merge rounded-pill">
                                                Jone Clone
                                            </div>
                                        </div>
                                        <i class="ti ti-x cursor-pointer d-lg-none d-block position-absolute mt-2 me-1 top-0 end-0"
                                            data-overlay data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i>
                                    </div>
                                    <hr class="container-m-nx m-0">
                                    <div class="sidebar-body">

                                        <div class="chat-contact-list-item-title">
                                            <h5 class="text-primary mb-0 px-4 pt-3 pb-2">Chats</h5>
                                        </div>
                                        <!-- Chats -->
                                        <ul class="list-unstyled chat-contact-list" id="chat-list">
                                            <li class="chat-contact-list-item chat-list-item-0 d-none">
                                                <h6 class="text-muted mb-0">No Chats Found</h6>
                                            </li>
                                            <li class="chat-contact-list-item">
                                                <a class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar avatar-online">
                                                        <img src="../../assets/img/avatars/13.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </div>
                                                    <div class="chat-contact-info flex-grow-1 ms-2">
                                                        <h6 class="chat-contact-name text-truncate m-0">Waldemar Mannering
                                                        </h6>
                                                        <p class="chat-contact-status text-muted text-truncate mb-0">Refer
                                                            friends. Get rewards.</p>
                                                    </div>
                                                    <small class="text-muted mb-auto">5 Minutes</small>
                                                </a>
                                            </li>
                                            <li class="chat-contact-list-item active">
                                                <a class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar avatar-offline">
                                                        <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                            class="rounded-circle">
                                                    </div>
                                                    <div class="chat-contact-info flex-grow-1 ms-2">
                                                        <h6 class="chat-contact-name text-truncate m-0">Felecia Rower</h6>
                                                        <p class="chat-contact-status text-muted text-truncate mb-0">I will
                                                            purchase it for sure. 👍</p>
                                                    </div>
                                                    <small class="text-muted mb-auto">30 Minutes</small>
                                                </a>
                                            </li>
                                            <li class="chat-contact-list-item">
                                                <a class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar avatar-busy">
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-success">CM</span>
                                                    </div>
                                                    <div class="chat-contact-info flex-grow-1 ms-2">
                                                        <h6 class="chat-contact-name text-truncate m-0">Calvin Moore</h6>
                                                        <p class="chat-contact-status text-muted text-truncate mb-0">If it
                                                            takes long you can mail inbox user</p>
                                                    </div>
                                                    <small class="text-muted mb-auto">1 Day</small>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- /Chat contacts -->

                                <!-- Chat History -->
                                <div class="col app-chat-history bg-body">
                                    <div class="chat-history-wrapper">
                                        <div class="chat-history-header border-bottom">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex overflow-hidden align-items-center">
                                                    <i class="ti ti-menu-2 ti-sm cursor-pointer d-lg-none d-block me-2"
                                                        data-bs-toggle="sidebar" data-overlay
                                                        data-target="#app-chat-contacts"></i>
                                                    <div class="flex-shrink-0 avatar">
                                                        <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                            class="rounded-circle" data-bs-toggle="sidebar" data-overlay
                                                            data-target="#app-chat-sidebar-right">
                                                    </div>
                                                    <div class="chat-contact-info flex-grow-1 ms-2">
                                                        <h6 class="m-0">Felecia Rower</h6>
                                                        <small class="user-status text-muted">Customer</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chat-history-body bg-body">
                                            <ul class="list-unstyled chat-history">
                                                <li class="chat-message chat-message-right">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">How can we help? We're here for you! 😄
                                                                </p>
                                                            </div>
                                                            <div class="text-end text-muted mt-1">
                                                                <i class='ti ti-checks ti-xs me-1 text-success'></i>
                                                                <small>10:00 AM</small>
                                                            </div>
                                                        </div>
                                                        <div class="user-avatar flex-shrink-0 ms-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/1.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="user-avatar flex-shrink-0 me-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">Hey John, I am looking for the best admin
                                                                    template.</p>
                                                                <p class="mb-0">Could you please help me to find it out?
                                                                    🤔</p>
                                                            </div>
                                                            <div class="chat-message-text mt-2">
                                                                <p class="mb-0">It should be Bootstrap 5 compatible.</p>
                                                            </div>
                                                            <div class="text-muted mt-1">
                                                                <small>10:02 AM</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message chat-message-right">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">Vuexy has all the components you'll ever
                                                                    need in a app.</p>
                                                            </div>
                                                            <div class="text-end text-muted mt-1">
                                                                <i class='ti ti-checks ti-xs me-1 text-success'></i>
                                                                <small>10:03 AM</small>
                                                            </div>
                                                        </div>
                                                        <div class="user-avatar flex-shrink-0 ms-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/1.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="user-avatar flex-shrink-0 me-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">Looks clean and fresh UI. 😃</p>
                                                            </div>
                                                            <div class="chat-message-text mt-2">
                                                                <p class="mb-0">It's perfect for my next project.</p>
                                                            </div>
                                                            <div class="chat-message-text mt-2">
                                                                <p class="mb-0">How can I purchase it?</p>
                                                            </div>
                                                            <div class="text-muted mt-1">
                                                                <small>10:05 AM</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message chat-message-right">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">Thanks, you can purchase it.</p>
                                                            </div>
                                                            <div class="text-end text-muted mt-1">
                                                                <i class='ti ti-checks ti-xs me-1 text-success'></i>
                                                                <small>10:06 AM</small>
                                                            </div>
                                                        </div>
                                                        <div class="user-avatar flex-shrink-0 ms-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/1.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="user-avatar flex-shrink-0 me-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">I will purchase it for sure. 👍</p>
                                                            </div>
                                                            <div class="chat-message-text mt-2">
                                                                <p class="mb-0">Thanks.</p>
                                                            </div>
                                                            <div class="text-muted mt-1">
                                                                <small>10:08 AM</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message chat-message-right">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">Great, Feel free to get in touch.</p>
                                                            </div>
                                                            <div class="text-end text-muted mt-1">
                                                                <i class='ti ti-checks ti-xs me-1 text-success'></i>
                                                                <small>10:10 AM</small>
                                                            </div>
                                                        </div>
                                                        <div class="user-avatar flex-shrink-0 ms-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/1.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="user-avatar flex-shrink-0 me-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="chat-message-wrapper flex-grow-1">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">Do you have design files for Vuexy?</p>
                                                            </div>
                                                            <div class="text-muted mt-1">
                                                                <small>10:15 AM</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="chat-message chat-message-right">
                                                    <div class="d-flex overflow-hidden">
                                                        <div class="chat-message-wrapper flex-grow-1 w-50">
                                                            <div class="chat-message-text">
                                                                <p class="mb-0">Yes that's correct documentation file,
                                                                    Design files are included with the template.</p>
                                                            </div>
                                                            <div class="text-end text-muted mt-1">
                                                                <i class='ti ti-checks ti-xs me-1'></i>
                                                                <small>10:15 AM</small>
                                                            </div>
                                                        </div>
                                                        <div class="user-avatar flex-shrink-0 ms-3">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/img/avatars/1.png" alt="Avatar"
                                                                    class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!-- /Chat History -->

                                <!-- Sidebar Right -->
                                <div class="col app-chat-sidebar-right app-sidebar overflow-hidden"
                                    id="app-chat-sidebar-right">
                                    <div
                                        class="sidebar-header d-flex flex-column justify-content-center align-items-center flex-wrap px-4 pt-5">
                                        <div class="avatar avatar-xl avatar-online">
                                            <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <h6 class="mt-2 mb-0">Felecia Rower</h6>
                                        <span>Customer</span>
                                        <i class="ti ti-x ti-sm cursor-pointer close-sidebar d-block"
                                            data-bs-toggle="sidebar" data-overlay
                                            data-target="#app-chat-sidebar-right"></i>
                                    </div>
                                    <div class="sidebar-body px-4 pb-4">
                                        <div class="my-4">
                                            <small class="text-muted text-uppercase">Personal Information</small>
                                            <ul class="list-unstyled d-grid gap-2 mt-3">
                                                <li class="d-flex align-items-center">
                                                    <i class='ti ti-mail ti-sm'></i>
                                                    <span class="align-middle ms-2">josephGreen@email.com</span>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <i class='ti ti-phone-call ti-sm'></i>
                                                    <span class="align-middle ms-2">+1(123) 456 - 7890</span>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <i class='ti ti-clock ti-sm'></i>
                                                    <span class="align-middle ms-2">Mon - Fri 10AM - 8PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Sidebar Right -->
                                <div class="app-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('common.footer')
                    <!-- / Footer -->
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
@endsection
