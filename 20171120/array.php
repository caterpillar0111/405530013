<table border="2">
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php
    $data=array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)   
    );
       for ($i=0; $i<count($data); $i++) {
            echo "<tr>";
            for ($j=0; $j<count($data[$i]); $j++) {
                echo "<td>".$data[$i][$j]."</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<table border="2">
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php
    $data=array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)   
    );
    foreach($data as $row){
        echo "<tr>";
        foreach($row as $col){
            echo "<td>$col</td>";
        }    
    }
    ?>
</table>
<!-- 抄振志der -->
<?php
$data=array(
    "first"=>array("Volvo",22,18),
    "sec"=>array("BMW",15,13),
    "third"=>array("Saab",5,2),
    "forth"=>array("Land Rover",17,15)
);
function parseRow($row)
{
    $row=join(array_map("parseCol", $row));
    return "<tr>$row</tr>";
}
function parseCol($col)
{
    return "<td>$col</td>";
}
$table=join("", array_map("parseRow", $data));
?>

<table border="2" >
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php echo $table; ?> 
</table>