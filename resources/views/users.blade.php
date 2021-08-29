@include('inner')

@for ($i = 0; $i < count($users); $i++)
    <h3><?= $users[$i] ?></h3>
@endfor

<script>
    var users = @JSON($users);
    console.log(users);
</script>