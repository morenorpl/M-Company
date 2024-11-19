<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$reports = query("SELECT reports.*, users.name as user_name FROM reports 
                    JOIN users ON reports.user_id = users.id ORDER BY created_at ASC");
header('refresh:3;Content-Type: text/html; charset=UTF-8');

?>

<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
    <!-- Main Content Cards (Left Side) -->
    <div class="col-span-3 grid grid-cols-1 gap-4">
        <!-- Card 1 -->
        <?php
        if (empty($reports)) : ?>
            <h1 class="font-bold text-3xl text-black">Data kosong</h1>
        <?php else : ?>
            <?php
            foreach ($reports as $report) :
                $report['content'] = html_entity_decode(html_entity_decode(strval($report['content'])));

            ?>
                <div class="border-4 border-gray-900 h-fit mb-4">
                    <a href="index.php?page=detail&id=<?= $report['id'] ?>" class="block h-full">
                        <div class="max-w-full border border-gray-200 rounded-lg shadow h-full flex flex-col">
                            <?php if ($report['thumbnail']): ?>
                                <img class=" w-full h-48 object-cover" alt="<?= $report['thumbnail'] ?>" src="<?= "../assets/upload/" . $report['thumbnail'] ?>" />
                            <?php endif ?>
                            <div class="p-5 flex-grow flex flex-col bg-white">
                                <div class="flex items-center mb-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate"><?= $report['user_name'] ?></p>
                                        <p class="text-xs text-gray-800"><?= $report['created_at'] ?></p>
                                    </div>
                                </div>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $report['title'] ?></h5>
                                <?= $report['content'] ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif ?>

    </div>

    <!-- Breaking News (Right Side) -->
    <div class="border-[#0C0D0F] bg-[#FDC6FF] border-4 shadow h-fit flex-col justify-between col-span-1 md:col-span-1 hidden md:block">
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Breaking News!!</h5>
        </div>
        <img class="rounded-2xl w-5/6 h-48 text-center mx-auto" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Checkout DEV++</h5>
            <p class="mb-3 font-normal text-gray-800">Invest in your developer career with our value-maximizing membership program.</p>
            <button class="w-full outline-gray-900 outline text-gray-900 bg-white font-medium text-lg p-1 hover:bg-gray-900 hover:text-white hover:font-bold">Read more</button>
        </div>
    </div>

</div>