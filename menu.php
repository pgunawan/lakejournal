<head>  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="menu/styles.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="menu/script.js"></script>
</head>
<tr>
            <td>
                <div id="cssmenu" style="width:850px; margin-left:34px">
                  <ul>
                    <li><a href="archives.php">ARCHIVES</a></li>
                    <li class="has-sub"><a href='#'>SHOP</a>
                       <ul>
                          <li><a href="https://www.facebook.com/DYNKelowna?ref=profile">DYN</a></li>
                       </ul>
                    </li>
                    <li><a href="soundings.php">SOUNDINGS</a></li>
                    <?php if ($page == 'support'){ ?>
                    <li class="active"><a href="support.php">SUPPORT</a></li>
                    <?php } else { ?> <li><a href="support.php">SUPPORT</a></li>
                    <li><a href="submissions.php">PUBLICATIONS &amp; CONTESTS</a></li>
                  </ul>
                </div>
            </td>
          </tr>