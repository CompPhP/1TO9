<?php
$i=1;

echo("1) \n");
for($j=$i;$j<=9;$j++)
{
    echo($j);
    echo(" ");
}

echo("\n2) \n");
for($j=$i;$j<=9;$j++)
{
    echo($j);
    echo("\n");
}

echo("\n3) \n");
for($j=$i;;$j++)
{
    echo($j);
    echo(" ");
    if($j==9)
    {
        break;
    }
    else
    {
        continue;
    }
}

echo("\n4) \n");
for($j=$i;;$j++)
{
    echo($j);
    echo("\n");
    if($j==9)
    {
        break;
    }
    else
    {
        continue;
    }
}

echo("\n5) \n");
for ($i = 1, $j = 0; $i <= 9; $j += $i, print $i, $i++);
?>
