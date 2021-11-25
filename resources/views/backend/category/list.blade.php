<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
{{--        <th>Action</th>--}}

    </tr>
    </thead>
    <tbody>
    @foreach($categories as $key=>$category)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$category['name']}}</td>
            <td>{{$category['description']}}</td>
            <td><img style="..." src="img/{{$category->image}}" alt=""></td>

            <th><a href="{{route("categories.detail",$key)}}">Detail</a></th>
{{--            <td><a href="{{route("categories.update",$category->id)}}">Update</a></td>--}}
{{--            <td><a href="{{route("categories.delete","$category->id")}}">Delete</a></td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
