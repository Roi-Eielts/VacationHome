<div class="container">
    <a href="toevoegen" class="tag">huis toevoegen</a>
    <table style="width:100%">
        <tr>
            <th>huis</th>
            <th>omschrijving</th>
            <th>personen</th>
            <th>prijs</th>
            <th>bewerkingen</th>
        </tr>
        <?php
        $sql = "SELECT * FROM huizen";
        $output = $conn->query($sql);
        if ($output->num_rows > 0) {
            while ($row = $output->fetch_assoc()) {
                echo "
            <tr>
                <td>$row[huis]</td>
                <td>$row[omschrijving]</td>
                <td>$row[personen]</td>
                <td>$row[prijs]</td>
                <td><a href='edit?id=$row[id]'><i class='fas fa-edit'></i></a> | <a href='' onclick='deleteHouse($row[id])'><i class='fas fa-trash'></i></a></td>
                
            </tr>
            ";
            
            }
        }
        ?>

    </table>
</div>
<script>
        function deleteHouse(id) {
            if (confirm("weet je het zeker dat u dit wilt verwijderen?")) {
                let del = new XMLHttpRequest()
                del.onload = function() {
                    window.location.reload()
                }
                del.open("get", "delete?id=" + id)
                del.send()
            } else {
                alert("geanuleerd")
            }
        }
    </script>