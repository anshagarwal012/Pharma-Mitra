<?php
$t = 'Contact';
require('header.php');
?>
<!-- Main Content Wrapper -->
<main class="main-content w-full px-2 pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
            Contact
        </h2>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <!-- From HTML Table -->
        <div class="card py-4">
            <div>
                <div x-data x-init="$el._x_grid =  new Gridjs.Grid({
                from: $refs.table,
                sort: true,
                search: true,
                pagination: true,
                  pagination: {
                        limit: 50
                    },
              }).render($refs.wrapper);">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table x-ref="table" class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Action
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        #
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Date Time
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Name
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Email
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Phone
                                    </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Message
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM contacts order by id desc";
                                $result = mysqli_query($conn, $sql);
                                echo '<script>
                                var dta = '.json_encode(mysqli_fetch_All($result)).'
                                </script>'; 
                                // echo '<input type="hidden" class="data" value="' . str_replace('"', "'", json_encode(mysqli_fetch_All($result))) . '">';
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    $s = 1;
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                            <tr>
                                               <!--<td class="whitespace-nowrap px-4 py-3 sm:px-5">-->
                                               <!--    <button class="btn text-white" style="background-color:red">-->
                                               <!--         <a href="./delete?table=contacts&id=<?// $row['id'] ?>"><span>Delete</span></a>-->
                                               <!--     </button>-->
                                               <!-- </td>-->
                                               <td><input type="checkbox" class="multi_select" value="<?= $row['id'] ?>"></td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $s ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['datetime'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['name'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['email'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['phone'] ?>
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                    <?= $row['message'] ?>
                                                </td>
                                            </tr>
                                <?php
                                            $s++;
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div x-ref="wrapper"></div>
                        <a class="btn bg-primary text-white" onclick="tableToCSV()">Export CSV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require('footer.php');
