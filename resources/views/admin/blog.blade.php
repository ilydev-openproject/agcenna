<x-dashboard.layout title="{{ $title }}">



    <h4>Data Table</h4>
    <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. Below is an example of zero configuration.</p>
    <div class="m-t-25">
        <table id="data-table" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blogs )
                <tr>
                    <td>{{ $blogs['judul'] }}</td>
                    <td>{{ $blogs['slug'] }}</td>
                    <td>{{ $blogs->category['nama_category'] }}</td>
                    <td class="d-flex">
                        <button class="btn btn-warning m-r-5">
                            <span>Edit</span>
                        </button>
                        <button class="btn btn-danger m-r-5">
                            <span>Hapus</span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>







</x-dashboard.layout>