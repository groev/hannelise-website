<html>
    <body>
        <h1>Neue Bestellung auf www.hannelise.de</h1>
        <p>Name: <?php echo $data['name'];?></p>
        <p>E-Mail: <?php echo $data['email'];?></p>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bezeichnung</th>
                    <th>Stück</th>
                    <th>Preis</th>
                    <th>Gesamt</th>
                </tr>
            </thead>
            <tbody>
                <?php if($data['cart']):foreach($data['cart'] as $item):?>
                    <tr>
                        <td><?php echo $item['ID'];?></td>
                        <td><?php echo $item['Name'];?></td>
                        <td><?php echo $item['count'];?></td>
                        <td><?php echo $item['Preis'];?> €</td>
                        <td><?php echo floatval(str_replace(',','.',$item['Preis']))*$item['count'];?></td>
                    </tr>
                <?php endforeach;endif;?>
            </tbody>
        </table>
    </body>
</html>
