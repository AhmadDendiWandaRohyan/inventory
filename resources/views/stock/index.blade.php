@extends('layout.layoutku')


@section('content')
        <!-- market value area start -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Notes</h2>
                        </div>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                <center> No </center>
                                            </th>
                                            <th>
                                                <center> Catatan </center>
                                            </th>
                                            <th>
                                                <center> Ditulis oleh </center>
                                            </th>
                                            <th>
                                                <center> Action </center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <form method='POST' action='/store'>
                                        @csrf
                                        <tr class="table-active">
                                            <td>
                                                <center><input type='hidden' /></center>
                                            </td>
                                            <td>
                                                <center> <input type='text' class='form-control' name='konten'
                                                        required /></center>
                                            </td>
                                            <td>
                                                <center>Saya, <b>{{ Auth::user()->nickname}}</b></strong> <span
                                                        class="badge badge-secondary">{{ Auth::user()->role}}</span>
                                                </center>
                                            </td>
                                            <td>
                                                <center><input type='submit' name='submit'
                                                        class='btn btn-primary btn-sm' value='Add Note' />
                                                </center>
                                            </td>
                                        <tr>
                                    </form>
                                    <tbody class="thead-dark">
                                        @php $no=1; @endphp
                                        @forelse ($data as $item)
                                            @if(Auth::user()->role == 'staff')
                                            <tr>
                                                <td><b><center>{{ $no++ }}</b></center></td>
                                                <td><b><center>{{ $item->contents }}</b></center></td>
                                                <td><b><center>{{ $item->admin }}</b></center></td>
                                                @if(Auth::user()->nickname == $item->admin)
                                                <td class="text-center">
                                                    <a href="/note/{{ $item->id }}" onclick="return confirm('Apakah Anda Yakin ingin menghapus ?');" class="btn btn-danger btn-xs"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endif

                                            @if(Auth::user()->role == 'admin')
                                            <tr>
                                                <td><b><center>{{ $no++ }}</b></center></td>
                                                <td><b><center>{{ $item->contents }}</b></center></td>
                                                <td><b><center>{{ $item->admin }}</b></center></td>
                                                <td class="text-center">
                                                    <a href="/note/{{ $item->id }}" onclick="return confirm('Apakah Anda Yakin ingin menghapus ?');" class="btn btn-danger btn-xs"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                            @endif
    
                                        @empty
                                            <div class="alert alert-danger">
                                                Data Post belum Tersedia.
                                            </div>
                                        @endforelse
                                        
                                    </tbody>
                                    
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area start-->
    </div>
</div>
@endsection