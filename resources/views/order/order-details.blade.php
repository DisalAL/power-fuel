<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Order Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <style>
    
    input[type=date], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=time], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
    .button {
      display: inline-block;
      padding: 5px 20px;
      font-size: 15px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #4ca8af;
      border: none;
      border-radius: 15px;
      box-shadow: 0 9px #999;
    }
    
    .button:hover {background-color: #3181c2}
    
    .button:active {
      background-color: #3398c7;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
    .button1 {
        background-color: #4ca8af; /* Green */
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
        border-radius: 50%;
    }

    </style>

</head>
<body style="background-color: #e9ecef;">
    <img src="logo.png" alt="Trulli" width="200" height="200" align="center">
    <p align="center" style="color:rgb(43, 169, 179); font-size:40px;"><b><u>Order Details</u></b></p>
  <!-- end preheader -->
  <button value="submit" class="button" onclick="location.href='filling stationdashboard.html';"><b>Back</b></button>               
    <br>
    <br>
  <!-- start body -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%">


    <!-- start logo -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
          </tr>
        </table>
      </td>
    </tr>
    <!-- end logo -->

    <!-- start hero -->
    <tr>
      <th align="center" bgcolor="#e9ecef">
        <td align="center" style="padding: 24px;">
        <table border="6" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" bgcolor="#ffffff"> 
            <tr bgcolor="#ffffff">
                <form action="">
                    <label for="type"><b>Petrol Type: </b></label>
                    <select name="type" id="type" >
                        <option value="option">Option</option>
                      </select>

                    <label for="date"><b> Order Date: </b></label>
                    <input type="date" id="date" name="date"><br><br>
                    <label for="placedby"><b>Order placed by Manager: </b></label>
                    <select name="placedby" id="placedby" >
                      <option value="option">Option</option>
                    </select>                 
                    <label for="status"><b> Delivery Status: </b></label>
                    <input type="radio" id="yes" name="status" value="yes">
                    <label for="yes"><b>Received</b></label>
                    <input type="radio" id="no" name="status" value="no"> <label for="no"><b>Not Received</b></label><br><br>

                  </form>
                    <button value="submit" class="button"><b>Add</b></button><br><br>
              </tr>
          <tr>
            <th style="padding: 36px 24px 0;"><b>Petrol Type</b>
            </th>
            <th style="padding: 36px 24px 0;"><b>Order Date</b>
            </th>
            <th style="padding: 36px 24px 0;"><b>Order Accepted</b>
            </th>
            <th style="padding: 36px 24px 0;"><b>Quota Assigned (litres)</b>
            </th>
            <th style="padding: 36px 24px 0;"><b>Quota Assigned Date</b>
            </th>
            <th style="padding: 36px 24px 0;"><b>Order placed by Manager </b>
            </th>
            <th style="padding: 36px 24px 0;"><b>Delivery Status </b>
            </th>
            <th style="padding: 36px 24px 0;"><b>Messages</b>
            </th>            
            <th colspan="2" style="padding: 36px 24px 0;"><b>Action</b>
            </th>

          </tr>
          <tr>
            <td style="padding: 36px 24px 0;"><b>Fuel</b>
            </td>
            <td style="padding: 36px 24px 0;"><b>11/09/2022</b>
            </td>
            <td style="padding: 36px 24px 0;"><b>Yes</b>
            </td>
            <td style="padding: 36px 24px 0;"><b>5L</b>
            </td>
            <td style="padding: 36px 24px 0;"><b>11/09/2022</b>
            </td>
            <td style="padding: 36px 24px 0;"><b>Yes</b>
            </td>
            <td style="padding: 36px 24px 0;"><b>Received</b>
            </td>
            <td style="padding: 36px 24px 0;"><b>Order Complete</b>
            </td>
            <td style="padding: 36px 24px 0;"><button value="submit" class="button1" onclick="location.href='UpdateOrderDetails.html'";><b>Update</b></button>               
            </td>
            <td style="padding: 36px 24px 0;">               
            <button value="submit" class="button1"><b>Delete</b></button>
            </td>
          </tr>
        </table>
    </td>

      </td>
    </tr>
    <!-- end hero -->

    <!-- start copy block -->
    <tr>
      <td align="center" bgcolor="#e9ecef">

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

        </table>

      </td>
    </tr>
    <!-- end copy block -->

    <!-- end footer -->

  </table>
  <!-- end body -->

</body>
</html>