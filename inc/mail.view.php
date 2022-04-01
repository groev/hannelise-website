<html>
    <body>
        <h1>Neue Bestellung auf www.hannelise.de</h1>
        <?php echo $intro;?>
        <p>Name: <?php echo $data['name'];?><br />
        E-Mail: <?php echo $data['email'];?><br />
        Telefon / Handy: <?php echo $data['phone'];?><br />
        Bestelldatum: <?php echo date('d.m.Y - H:i');?><br />
        Abholdatum: <?php echo $data['datum'];?></p>
        <table style="width:100%;">
            <thead style="text-align:left">
                <tr>
                    <th>#</th>
                    <th>Bezeichnung</th>
                    <th>Stück</th>
                    <th>Preis</th>
                    <th>Gesamt</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0;?>
                <?php if($data['cart']):foreach($data['cart'] as $item):?>
                    <?php $total += floatval(str_replace(',','.',$item['Preis']))*$item['count'];?>
                    <tr>
                        <td><?php echo $item['ID'];?></td>
                        <td><?php echo $item['Name'];?></td>
                        <td><?php echo $item['count'];?></td>
                        <td><?php echo $item['Preis'];?> €</td>
                        <td><?php echo number_format(floatval(str_replace(',','.',$item['Preis']))*$item['count'], 2, ',', '.');?> €</td>
                    </tr>
                <?php endforeach;endif;?>
                <tr>
                    <td colspan="4"><strong>Gesamt</strong></td>
                    <td><strong><?php  echo number_format($total, 2, ',', '.');?> €</strong></td>

                </tr>
            </tbody>
        </table>
        <?php echo $outro;?>
    </body>
</html>
