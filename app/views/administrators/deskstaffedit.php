<!-- the title of the update-->
<?= $data['title'];?>
<!-- the form to get the controller in the view en use it to do the methods-->
<form action="<?= URLROOT; ?>/administrators/deskstaffedit" method="POST">
    <table>
        <tbody>
        <tr>
            <td>
                <input type="text" name="studentnr" id="studentnr" value="<?= $data["row"]->studentnr;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="firstname" id="firstname" value="<?= $data["row"]->firstname;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="lastname" id="lastname" value="<?= $data["row"]->lastname;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="email" name="email" id="email" value="<?= $data["row"]->email;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="class" id="class" value="<?= $data["row"]->class;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?=$data["row"]->id;?>"
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="update">
            </td>
        </tr>

        </tbody>
    </table>
</form>