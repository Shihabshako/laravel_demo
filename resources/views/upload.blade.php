<x-header data="Upload a file"/>

@if (session('uploadFile') == 'success')
    <span style="color:green" >File uploaded successfully</span>
@elseif(session('uploadFile') == 'error')
    <span style="color:red">Filed to upload file</span>
@endif



<form action="uploadFile" method="POST" enctype="multipart/form-data" >
    @csrf
    <input type="file" name="file" ><br><br>
    <button type="submit">Submit</button>
</form>