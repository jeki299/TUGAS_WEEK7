<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Sepatu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">🛒 Daftar Sepatu</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama Sepatu</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Merk</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Ukuran</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Harga</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($sepatus as $sepatu)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sepatu->nama_sepatu }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sepatu->merk }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sepatu->ukuran }}</td>
                            <td class="px-6 py-4 whitespace-nowrap font-semibold text-green-600">Rp {{ number_format($sepatu->harga, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada data sepatu.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
