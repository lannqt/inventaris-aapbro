<h1>Form Add Data</h1>

<form action="/store" method="POST">
    @csrf
    <input type="text" name="KodeBarang" placeholder="KodeBarang" id="">
    <br>
    <input type="text" name="NamaBarang" placeholder="NamaBarang" id="">
    <br>
    <select name="Kategori" id="">
        <option value="">Kategori</option>
        <option value="Inventaris">Inventaris</option>
        <option value="Inventaris">Asset</option>
    </select>
    <br>
    <input type="text" name="Groups" placeholder="Groups" id="">
    <br>
    <select name="Status" id="">
        <option value="">Status</option>
        <option value="Aktif">Aktif</option>
        <option value="Tidak Aktif">Tidak Aktif</option>
    </select>
    <br>
    <button type="sumbit" name="sumbit" value="Add" id="">Add</button>
</form>