<div
    class="offcanvas offcanvas-start sidebar-nav"
    tabindex="-1"
    id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel"
>
    <div class="container d-flex justify-content-end pt-3 sidebar-nav-close">
        <button
            type="button"
            class="btn-close align-content-end"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>
    </div>
    <div class="offcanvas-header d-flex justify-content-center">
        <img
            src="{{ asset('images/LogoHimti.png') }}"
            class="image-fluid"
            alt="Logo Himti"
        />
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">HIMTI</h5>
    </div>
    <div class="offcanvas-body">
        <div class="container sidebar-menu d-flex">
            <ul>
                <li class="py-3">
                    <a href=""><i class="bi bi-columns-gap"></i> Dashboard</a>
                </li>
                <li class="py-3">
                    <a href="/calendar"
                        ><i class="bi bi-calendar-fill"></i> Calender</a
                    >
                </li>
                <li class="py-3">
                    <a href="/meeting"
                        ><i class="bi bi-clock-fill"></i> Meeting Schedule</a
                    >
                </li>
                <li class="py-3">
                    <a href="/"
                        ><i class="bi bi-person-fill"></i> Manage Member</a
                    >
                </li>
                <li class="py-3">
                    <a href="/photo"><i class="bi bi-image"></i> View Photo</a>
                </li>
                <li class="py-3">
                    <a href="/admin-panel"
                        ><i class="bi bi-pencil-square"></i> Admin & DPI
                        Panel</a
                    >
                </li>
                <li class="py-3">
                    <a href=""><i class="bi bi-gear-fill"></i> Settings</a>
                </li>
            </ul>
        </div>
        <div class="container sidebar-logout d-flex align-items-center">
            <a href="">
                <div class="row d-flex flex-row">
                    <div class="col-8">Logout</div>
                    <div class="col-4">
                        <i class="bi bi-box-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
