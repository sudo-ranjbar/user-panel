<?php include ROOT_PATH . '/views/layouts/header.php'; ?>
<?php global $wpdb; ?>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar Section -->
        <?php include ROOT_PATH . '/views/layouts/sidebar.php'; ?>

        <!-- Main Section -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="fs-3 fw-bold">تیکت های من</h1>
            </div>

            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-4">
                <button type="button" class="btn btn-primary position-relative ms-5 p-3">
                    تیکت های باز
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
                <button type="button" class="btn btn-primary position-relative ms-5 p-3">
                    درحال بررسی
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
                <button type="button" class="btn btn-primary position-relative ms-5 p-3">
                    پاسخ داده شده
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
                <button type="button" class="btn btn-primary position-relative ms-5 p-3">
                    بسته شده
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
            </div>
            <div
                class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5">
                <h1 class="fs-5 btn btn-success">+ ثبت تیکت </h2>
            </div>

            <!-- Recent Tickets -->

            <div class="mt-4">
                <h4 class="text-secondary fw-bold">تیکت های اخیر</h4>
                <div class="table-responsive small">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>info</th>
                                <th>ردیف</th>
                                <th>عنوان</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c = 1; ?>
                            <?php foreach ($user_tickets as $ticket) : ?>
                                <tr>
                                    <th>
                                        <p class="d-inline-flex gap-1">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="bi bi-arrow-left-circle-fill"></i>
                                            </a>
                                        </p>
                                    </th>
                                    <td><?= $c ?></td>
                                    <td><?= $ticket['subject'] ?></td>
                                    <td><?= $ticket['created_at'] ?></td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-sm btn-outline-dark">مشاهده
                                        </a>
                                    </td>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            <span>آخرین پاسخ: 1400/12/29</span> <span>بخش: پشتیبانی</span>
                                        </div>
                                    </div>
                                </tr>
                                <?php $c++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

    </div>

</div>

<?php include ROOT_PATH . '/views/layouts/footer.php'; ?>