<?php 
    include('includes/head.php');
    include('includes/nav.php');

        if(isset($_GET['page']))
        {
            switch($_GET['page'])
            {
                case "Home":
                    include('pages/home.php');
					break;
				case "Servicios":
					include('pages/servicios.php');
					break;
				case "Contacto":
					include('pages/contacto.php');
					break;
				case "Ubicacion":
					include('pages/ubicacion.php');
					break;
				default:
					include('pages/404.php');
					break;
			}
		}
		else
		{
			include('pages/home.php');
		}

    include('includes/footer.php');
?>

