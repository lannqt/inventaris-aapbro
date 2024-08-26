<h1>Form Edit Data</h1>

<form action="/db/{{$data->id}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="KodeBarang" placeholder="KodeBarang" id="" value="{{$data->KodeBarang}}">
    <br>
    <input type="text" name="NamaBarang" placeholder="NamaBarang" id="" value="{{$data->NamaBarang}}">
    <br>
    <select name="Kategori" id="">
        <option value="">Kategori</option>
        <option value="Inventaris" @if($data->Kategori == "Inventaris") selected @endif>Inventaris</option>
        <option value="Asset" @if($data->Kategori == "Asset") selected @endif>Asset</option>
    </select>
    <br>
    <input type="text" name="Groups" placeholder="Groups" id="" value="{{$data->Groups}}">
    <br>
    <select name="Status" id="">
        <option value="">Status</option>
        <option value="Aktif" @if($data->Status == "Aktif") selected @endif>Aktif</option>
        <option value="Tidak Aktif" @if($data->Status == "Tidak Aktif") selected @endif>Tidak Aktif</option>
    </select>
    <br>
    <button type="sumbit" name="sumbit" value="Add" id="">Add</button>
</form>