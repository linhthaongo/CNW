@extends('layouts.base')
<!-- triển khai title-->

@section('title','Journals Details')

@section('main')
<div class="row mt-8">
    
    <div class="container px-4 text-center">
    <h1>JMS</h1>
    <a href="" class='btn btn-success'>+ Add New Journal</a>
  </div>

    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">JID</th>
      <th scope="col">Title</th>
      <th scope="col">Editor</th>
      <th scope="col">ISSN</th>
      <th scope="col">PublicationDate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
            @foreach($journals as $journal)
            <tr>
                <th scope="row">{{$journal->jid}}</th>
                <td>{{$journal->title}}</td>
                <td>{{$journal->editor}}</td>
                <td>{{$journal->issn}}</td>
                <td>{{$journal->PublicationDate}}</td>
                <td>
                    <form method="post" action="{{ route('journals.show', $journal->jid) }}">
                        @csrf
                       
                        @method('DELETE')
                        
                        <input type="submit" class="btn btn-danger btn-sm" value="Edit" />
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>

                </td>

            </tr>
            @endforeach
        </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    </div>
    
</div>
