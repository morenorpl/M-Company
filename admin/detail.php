<?php
$id = htmlspecialchars($_GET['id']);
$report = query("SELECT reports.*, users.name as user_name FROM reports
                     JOIN users ON reports.user_id = users.id
                     WHERE reports.id='$id'
                     ");
$report = $report[0];
?>

<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
    <div class="col-span-1 md:col-span-3 border-4 border-gray-900 h-auto mb-4 bg-white">
        <div class="block h-full">
            <div class="max-w-full border border-gray-200 shadow h-full flex flex-col">
                <?php if ($report['thumbnail']): ?>
                    <img class=" w-full h-48 object-cover" alt="<?= $report['thumbnail'] ?>" src="<?= "../assets/upload/" . $report['thumbnail'] ?>" />
                <?php endif ?>
                <div class="p-5 flex-grow flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-800 truncate">
                                <?= $report['user_name'] ?>
                            </p>
                            <p class="text-xs text-gray-700 truncate">
                                <?= $report['created_at'] ?>
                            </p>
                        </div>
                    </div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $report['title'] ?></h5>
                    <p class="mb-3 font-normal text-gray-800 flex-grow"><?= html_entity_decode(html_entity_decode(strval($report['content']))) ?></p>
                </div>
                <div class="container border-t-2 border-gray-300 ">
                    <h1 class="font-bold text-2xl text-center text-gray-900 mt-10">Comments (3)</h1>
                    <div class="bg-white border-4 border-gray-900 shadow-lg md:mx-auto my-4 max-w-2xl">
                        <div class="px-12 py-6 ">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams</h2>
                            </div>
                            <textarea id="editor" class="w-full h-32 border bg-gray-800 border-gray-300 p-2 resize-none" placeholder="Type your comment here..."></textarea>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-gray-900 px-6 py-2 mt-4 text-white border-2 border-white hover:bg-white hover:text-gray-900 hover:border-gray-900">Submit</button>
                            </div>
                        </div>
                        <div class="px-12 py-6 border-t-2">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams</h2>
                                <small class="text-sm text-gray-700">22h ago</small>
                            </div>
                            <p class="text-gray-700">Joined 12 SEP 2012.</p>
                            <p class="mt-3 text-gray-700 text-sm">
                                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                            </p>
                            <div class="mt-4 flex items-center">
                                <div class="flex text-gray-700 text-sm mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <span>12</span>
                                </div>
                                <div class="flex text-gray-700 text-sm mr-8">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                    <span>8</span>
                                </div>
                                <div class="flex text-gray-700 text-sm mr-4">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                    <span>share</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-12 py-6 border-t-2">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams</h2>
                                <small class="text-sm text-gray-700">22h ago</small>
                            </div>
                            <p class="text-gray-700">Joined 12 SEP 2012.</p>
                            <p class="mt-3 text-gray-700 text-sm">
                                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                            </p>
                            <div class="mt-4 flex items-center">
                                <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <span>12</span>
                                </div>
                                <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                    <span>8</span>
                                </div>
                                <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                    <span>share</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="border-[#0C0D0F] bg-[#FDC6FF] border-4 shadow h-fit flex flex-col justify-between col-span-1 md:col-span-1 hidden md:block">
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