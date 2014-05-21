<?php
function get_date()
{

for($i=1;$i<=31;$i++)
{
echo '<option>'.$i.'</option>';
}

}

function get_month()
{
for($i=1;$i<13;$i++)
{echo '<option>'.$i.'</option>';
}
}

function get_year()
{
for($i=1995;$i>1935;$i--)
{
echo '<option>'.$i.'</option>';
}
}





?>