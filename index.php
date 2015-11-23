<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="js/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="js/jqwidgets/styles/jqx.metrodark.css" type="text/css" />
    <link rel="stylesheet" href="js/jqwidgets/styles/jqx.metro.css" type="text/css" />
    <link rel="stylesheet" href="js/jqwidgets/styles/jqx.office.css" type="text/css" />
	
    <script type="text/javascript" src="js/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqx-all.js"></script>
    
    <script type="text/javascript" src="js/index.js"></script>
    
    <style>
        body, html {
            width: 100%;
            height: 100%;
            overflow: hidden;
            font-family: monospace;
        }
        
        .primaryButton{
            font-size: 3em;
        }
        
        .grid {
            display: inline-block;
            color: #000000;
            border:1px solid black;
            width:20px;
            padding: 5px 5px;
        }
        .grid.to {
            color:#ffffff;
            background: red;
        }
        .grid.from {
            color:#ffffff;
            background: purple;
        }
        .grid.def {
            background: yellow;
        }
        
        #windowOrderDetails label{
            font-weight: bold;
        }
    </style>
    
<title>LocalPhone</title>
</head>
<body>
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++main buttons-->
    <div style="width:20%; margin-left:auto; margin-right:auto; margin-top:15%;">
        <input type="button" class="dangerButton" id="cmdResetData" value="Reset Data">
        <br /><br />
        <input type="button" class="primaryButton" id="cmdShowProducts" value="Products">
        <br /><br />
        <input type="button" class="primaryButton" id="cmdShowOrders" value="Orders">
        <br /><br />
        <label style="color:#202020; font-size:.9em;">by: ALVIN CRIS A. ABASOLO</label>
    </div>
    
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++popup window product list-->
    <div id="windowProducts">
        <div>PRODUCT LIST</div>
        <div style="overflow: hidden;">
        	<table style="width:100%; height:100%;">
            	<tr>
                	<td>
                        <div id="gridProducts"></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++popup window order list-->
    <div id="windowOrders">
        <div>ORDER LIST</div>
        <div style="overflow: hidden;">
        	<table style="width:100%; height:100%;">
            	<tr>
                	<td>
                        <div id="gridOrders"></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++popup window order details-->
    <div id="windowOrderDetails">
        <div>ORDER DETAILS</div>
        <div style="overflow: hidden;">
        	<table style="width:100%; height:100%;">
            	<tr>
                	<td style="vertical-align:top; width:45%;">
                        <table style="width:100%;">
                            <tr>
                                <td style="text-align:right;">
                                    Name:
                                </td>
                                <td>
                                    <label class="lblSelectedOrderName"></label>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:right;">
                                    Item Count:
                                </td>
                                <td>
                                    <label class="lblSelectedOrderItemCount"></label>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:right;">
                                    Status:
                                </td>
                                <td>
                                    <label class="lblSelectedOrderStatus"></label>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:right;">
                                    SessionId:
                                </td>
                                <td>
                                    <label class="lblSelectedOrderSid"></label>
                                </td>
                            </tr>
                        </table>
                        <br /><br />
                        Item(s):
                        <br />
                        <div id="gridOrderDetails"></div>
                    </td>
                    <td style="vertical-align:top;">
                        Best picking location = <label id="lblBestPickingLocation"></label>
                        <br />
                        Order of picking items = <label id="lblOrderOfItems"></label>
                        <br />
                        <br />
                        <div id="divForGrid"></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++popup window open product-->
    <div id="windowOpenProduct">
        <div><label class="lblSelectedProdName"></label></div>
        <div style="overflow: hidden;">
        	<table style="width:100%;">
            	<tr>
                	<td style="text-align:right;">
                        Name:
                    </td>
                    <td>
                        <strong><label id="lblProdName"></label></strong>
                    </td>
                </tr>
                <tr>
                	<td style="text-align:right;">
                        Description:
                    </td>
                    <td>
                        <strong><label id="lblProdDesc"></label></strong>
                    </td>
                </tr>
                <tr>
                	<td style="text-align:right;">
                        Location:
                    </td>
                    <td>
                        <strong><label id="lblProdLoc"></label></strong>
                    </td>
                </tr>
                <tr>
                	<td style="text-align:right;">
                        On hand:
                    </td>
                    <td>
                        <strong><label id="lblProdOnHand"></label></strong>
                    </td>
                </tr>
                <tr>
                	<td style="text-align:right;">
                        Order Header:
                    </td>
                    <td>
                        <div id="cmbOrderHeader"></div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;" colspan="2">
                        <input type="button" id="cmdCreateNewOrder" value="Create new order" class="infoButton">
                        <input type="button" id="cmdOrderItem" value="Order Item" class="successButton">
                        <input type="button" id="cmdCloseItemDet" value="Cancel" class="warningButton">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++popup window create new order-->
    <div id="windowAddOrder">
        <div>CREATE NEW ORDER</div>
        <div style="overflow: hidden;">
        	<table style="width:100%;">
            	<tr>
                	<td style="text-align:right;">
                        Name:
                    </td>
                    <td>
                        <input type="text" class="txt" id="txtOrderName" style="width:70%;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;" colspan="2">
                        <input type="button" id="cmdSaveNewOrder" value="Save" class="successButton">
                        <input type="button" id="cmdCloseAddOrder" value="Cancel" class="warningButton">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <div id="jqxLoader">
    </div>

</body>
</html> 