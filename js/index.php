<?php

include('/home/roihero/public_html/sandbox/dashboard/header.php'); // header tag html

include('/home/roihero/public_html/sandbox/dashboard/require/require_report.php'); // Scripts necessários para o report

include('/home/roihero/public_html/sandbox/dashboard/menu.php'); // menu topo

include('/home/roihero/public_html/sandbox/dashboard/content/content_dashboard.php'); // conteudo da página

echo '<script type="text/javascript">
           window.location = "https://www.roihero.com.br/sandbox/dashboard/"
      </script>';


include('/home/roihero/public_html/sandbox/dashboard/scripts.php'); // scripts

include('/home/roihero/public_html/sandbox/dashboard/footer.php'); // footer



?>