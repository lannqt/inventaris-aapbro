<table border="1">

    <a href="/create">Add Data</a>
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Group</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach ($data as $item)
        <tr>
            <td>{{ $item->KodeBarang}}</td>
            <td>{{ $item->NamaBarang}}</td>
            <td>{{ $item->Kategori}}</td>
            <td>{{ $item->Groups}}</td>
            <td>{{ $item->Status}}</td>
            <td>
                <a href="/db/{{$item->id}}/edit">Edit</a>
                <form action="db/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
       
    @endforeach
</table>