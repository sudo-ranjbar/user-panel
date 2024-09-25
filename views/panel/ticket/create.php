<?php include RB_PLUGIN_DIR_VIEWS . 'layouts/header.php'; ?>
<?php global $wpdb; ?>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar Section -->
        <?php include RB_PLUGIN_DIR_VIEWS . 'layouts/sidebar.php'; ?>

        <!-- Main Section -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div
                class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5">
                <h1 class="fs-5">ثبت تیکت </h2>
            </div>

            <!-- Recent Tickets -->
            <?php
            $all_tickets = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "tickets WHERE user_id=1");
            ?>

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
                            <?php foreach ($all_tickets as $ticket) : ?>
                                <tr>
                                    <th>
                                        <p class="d-inline-flex gap-1">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="bi bi-arrow-left-circle-fill"></i>
                                            </a>
                                        </p>
                                    </th>
                                    <td><?= $c ?></td>
                                    <td><?= $ticket->subject ?></td>
                                    <td><?= $ticket->status ?></td>
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

<?php include RB_PLUGIN_DIR_VIEWS . 'layouts/footer.php'; ?>