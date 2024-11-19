<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$report_unsolved = query("SELECT  COUNT(status) as status FROM reports WHERE status = 0");
$report_solved = query("SELECT COUNT(status) as status FROM reports WHERE status = 1");

?>

<!-- Tab Name -->
<h4 class="hidden lg:block lg:text-5xl font-bold text-primary ml-5 text-[#0C0D0F] "><?= ucwords($_GET['page']) ?></h4>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full bg-[#F7C236] border-4 border-[#0C0D0F]  shadow hover:bg-[#F7D47A]">
            <h5 class="mb-2 text-xl md:text-7xl font-bold tracking-tight text-[#0C0D0F]">
                <?= $report_unsolved[0]['status'] ?>
            </h5>
            <p class="font-normal text-[#0C0D0F] text-xl">
                Laporan masuk
            </p>
        </a>
    </div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full bg-[#EB92EE] border-4 border-[#0C0D0F]  shadow hover:bg-[#FDC6FF] hover">
            <h5 class="mb-2 text-xl md:text-7xl font-bold tracking-tight text-[#0C0D0F]">
                <?= $report_solved[0]['status'] ?>

            </h5>
            <p class="font-normal text-[#0C0D0F] text-xl">
                Laporan Selesai
            </p>
        </a>
    </div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
</div>
<div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
<div class="grid grid-cols-2 gap-4 mb-4">
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
</div>
<div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
<div class="grid grid-cols-2 gap-4">
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
</div>