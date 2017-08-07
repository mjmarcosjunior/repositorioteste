<?php

include('/home/roihero/public_html/lite/dashboard/header.php'); // header tag html

include('/home/roihero/public_html/lite/dashboard/require/require_report.php'); // Scripts necessários para o report

include('/home/roihero/public_html/lite/dashboard/menu.php'); // menu topo

include('/home/roihero/public_html/lite/dashboard/content/content_dashboard.php'); // conteudo da página

echo '<script type="text/javascript">
           window.location = "https://www.roihero.com.br/lite/dashboard/"
      </script>';


include('/home/roihero/public_html/lite/dashboard/scripts.php'); // scripts

include('/home/roihero/public_html/lite/dashboard/footer.php'); // footer



?>