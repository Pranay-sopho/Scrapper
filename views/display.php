<table style="width: 100%">
    <tr>
        <th>College</th>
        <th>Address</th>
        <th>Facilities</th>
        <th>Reviews</th>
    </tr>
    <?php foreach ($data as $college): ?>
        
        <tr>
            <td><?= $college["name"] ?></td>
            <td><?= $college["address"] ?></td>
            <td><?= $college["facilities"] ?></td>
            <td><?= $college["reviews"] ?></td>
        </tr>
            
    <?php endforeach ?>
</table>