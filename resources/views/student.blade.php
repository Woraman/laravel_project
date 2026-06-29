<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประวัตินักศึกษา - {{ $id }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Prompt', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-semibold text-indigo-600 hover:text-indigo-700 transition">MyWebsite</a>
            <nav class="flex gap-6 font-medium">
                <a href="/" class="text-slate-600 hover:text-indigo-600 transition">หน้าแรก</a>
                <a href="/about" class="text-slate-600 hover:text-indigo-600 transition">เกี่ยวกับฉัน</a>
                <a href="/blog" class="text-slate-600 hover:text-indigo-600 transition">บล็อก</a>
                <span class="text-indigo-600 font-semibold">ข้อมูลนักเรียน</span>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-4xl mx-auto px-4 py-12 w-full">
        
        <div class="bg-white rounded-2xl shadow-sm p-6 md:p-8 border border-slate-100 flex flex-col md:flex-row gap-8 items-center md:items-start mb-8">
            <div class="w-32 h-32 md:w-40 md:h-40 rounded-full bg-slate-200 border-4 border-indigo-50 overflow-hidden flex-shrink-0 flex items-center justify-center">
                <span class="text-slate-400 text-sm">ใส่รูปภาพที่นี่</span>
            </div>
            
            <div class="flex-grow text-center md:text-left">
                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-full text-sm font-medium">ข้อมูลนักศึกษา</span>
                <h1 class="text-3xl font-bold text-slate-900 mt-2 mb-1">นายวรมัน สุเรรัมย์</h1>
                
                <p class="text-slate-500 mb-4">รหัสนักศึกษา: <span class="text-indigo-600 font-semibold">{{ $id }}</span></p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-slate-600 text-sm border-t border-slate-100 pt-4">
                    <div><strong>คณะ:</strong> บริหารธุรกิจ</div>
                    <div><strong>สาขา:</strong> เทคโนโลยีสารสนเทศ</div>
                    <div><strong>อีเมล:</strong> somchai.d@student.ac.th</div>
                    <div><strong>สถานะ:</strong> กำลังศึกษาชั้นปีที่ 4</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-slate-100">
                <h2 class="text-xl font-semibold text-slate-900 mb-4 border-b border-slate-100 pb-2">🎓 ประวัติการศึกษา</h2>
                <ul class="space-y-4 text-sm text-slate-600">
                    <li class="relative pl-6 before:content-[''] before:absolute before:left-0 before:top-2 before:w-2 before:h-2 before:bg-indigo-600 before:rounded-full">
                        <p class="font-medium text-slate-800">มัธยมศึกษาตอนปลาย (สายวิทย์-คณิต)</p>
                        <p class="text-xs text-slate-400">โรงเรียนตัวอย่างวิทยา</p>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 border border-slate-100">
                <h2 class="text-xl font-semibold text-slate-900 mb-4 border-b border-slate-100 pb-2">⚡ ทักษะและความสนใจ</h2>
                <div class="flex flex-wrap gap-2 pt-2">
                    <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-lg text-sm">HTML / CSS</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-lg text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-lg text-sm">Laravel</span>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white text-slate-600 font-medium rounded-lg border border-slate-200 hover:bg-slate-50 hover:text-indigo-600 transition-all duration-200 text-sm">
                ← กลับสู่หน้าแรก
            </a>
        </div>
    </main>

    <footer class="bg-white border-t border-slate-100 py-6 text-center text-sm text-slate-400">
        <p>&copy; 2026 MyWebsite. All rights reserved.</p>
    </footer>

</body>
</html>