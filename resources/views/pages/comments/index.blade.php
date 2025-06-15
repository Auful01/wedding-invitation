@extends('app.layout')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-between">
            <div class="col-auto">
                <h1>Komentar</h1>
            </div>
        </div>
        <div class="card border-0 rounded-xl">
            <div class="card-body">
               <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Isi Komentar</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->content }}</td>
                                <td>{{ $comment->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               </table>
            </div>
        </div>
        {{-- Modal --}}


    </div>


