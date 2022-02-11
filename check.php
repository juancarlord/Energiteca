<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
    function showState(Country_Id)
    {
        document.frm.submit();
    }

    function showCity(State_Id)
    {
        document.frm.submit();
    }
</script>
</head>

<body>
    <form action="" method="post" name="frm" id="frm">
        <table width="500" border="0">
            <tr>
                <td width="119">Country</td>
                <td width="371">
                    <select name="Country_Id" id="Country_Id" onChange="showState(this.value);">
                        <option value="">--Select--</option>
                            <?php
                                $sql1="select * from country";
                                $sql_row1=mysql_query($sql1);
                                while($sql_res1=mysql_fetch_assoc($sql_row1))
                                {
                                ?>
                                <option value="<?php echo $sql_res1["Country_Id"]; ?>" <?php if($sql_res1["Country_Id"]==$_REQUEST["Country_Id"]) { echo "Selected"; } ?>><?php echo $sql_res1["CountryName"]; ?></option>
                                <?php
                                }
                                ?>
                    </select>
                </td>
            </tr>
        <tr>
            <td>State</td>
            <td id="td_state">
                <select name="state_id" id="state_id" onChange="showCity(this.value);">
                    <option value="">--Select--</option>
                        <?php
                            $sql="select * from state where Country_Id='$_REQUEST[Country_Id]'";
                            $sql_row=mysql_query($sql);
                            while($sql_res=mysql_fetch_assoc($sql_row))
                                {
                        ?>
                    <option value="<?php echo $sql_res["StateId"]; ?>" <?php if($sql_res["State_Id"]==$_REQUEST["state_id"]) { echo "Selected"; } ?>><?php echo $sql_res["StateName"]; ?></option>
                        <?php
                                }
                        ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td id="td_city">
                <select name="city_id" id="city_id">
                    <option value="">--Select--</option>
                        <?php
                            $sql="select * from city where State_Id='$_REQUEST[state_id]'";
                            $sql_row=mysql_query($sql);
                            while($sql_res=mysql_fetch_assoc($sql_row))
                            {
                        ?>
                            <option value="<?php echo $sql_res["State_Id"]; ?>"><?php echo $sql_res["CityName"]; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>