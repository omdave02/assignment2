<?php
require_once("model.php");
class controller extends model
{
    public function __construct()
    {
         parent::__construct();

         if(isset($_SERVER["PATH_INFO"]))
         {
            switch($_SERVER["PATH_INFO"])
           {
               case '/':

                require_once("index.php");
                require_once("header.php");
                //require_once("menu.php");
                //require_once("event.php");   
                //require_once("chefs.php");
                //require_once("gallery.php");
                require_once("gif.php");
               // require_once("about.php");
                require_once("footer.php");
                
                break;

                case '/about':

                    require_once("index.php");
                    require_once("header.php");
                    require_once("menu.php");
                    require_once("event.php");   
                    require_once("chefs.php");
                    require_once("gallery.php");
                    require_once("contect.php");
                    require_once("about.php");
                    require_once("footer.php");
                    break;

                    case '/menu':

                        require_once("index.php");
                        require_once("header.php");
                        require_once("menu.php");
                        require_once("event.php");   
                        require_once("chefs.php");
                        require_once("gallery.php");
                        require_once("contect.php");
                        require_once("about.php");
                        require_once("footer.php");
                        break;

                        case '/event':

                            require_once("index.php");
                            require_once("header.php");
                            require_once("menu.php");
                            require_once("event.php");   
                            require_once("chefs.php");
                            require_once("gallery.php");
                            require_once("contect.php");
                            require_once("about.php");
                            require_once("footer.php");
                            break;

                            case '/chefs':

                                require_once("index.php");
                                require_once("header.php");
                                require_once("menu.php");
                                require_once("event.php");   
                                require_once("chefs.php");
                                require_once("gallery.php");
                                require_once("contect.php");
                                require_once("about.php");
                                require_once("footer.php");
                                break;

                                case '/gallery':

                                    require_once("index.php");
                                    require_once("header.php");
                                    require_once("menu.php");
                                    require_once("event.php");   
                                    require_once("chefs.php");
                                    require_once("gallery.php");
                                    require_once("contect.php");
                                    require_once("about.php");
                                    require_once("footer.php");
                                    break;

                                    case '/contect':

                                        require_once("index.php");
                                        require_once("header.php");
                                        require_once("menu.php");
                                        require_once("event.php");   
                                        require_once("chefs.php");
                                        require_once("gallery.php");
                                        require_once("contect.php");
                                        require_once("about.php");
                                        require_once("footer.php");
                                        break;

                                        
                                    case '/contact':

                                        require_once("index.php");
                                        require_once("header.php");
                                        require_once("menu.php");
                                        require_once("event.php");   
                                        require_once("chefs.php");
                                        require_once("gallery.php");
                                        require_once("contact.php");
                                        require_once("about.php");
                                        require_once("footer.php");
                                        break;

                                                     
                                    case '/reservationtable':

                                        require_once("index.php");
                                        require_once("header.php");
                                        require_once("menu.php");
                                        require_once("event.php");   
                                        require_once("chefs.php");
                                        require_once("gallery.php");
                                        require_once("reservationtable.php");
                                        require_once("about.php");
                                        require_once("footer.php");
                                        break;

                                                              
                                    case '/login':

                                        require_once("index.php");
                                        require_once("login.php");
                                        require_once("menu.php");
                                        require_once("event.php");   
                                        require_once("chefs.php");
                                        require_once("gallery.php");
                                        require_once("reservationtable.php");
                                        require_once("about.php");
                                        require_once("footer.php");
                                        break;

                                                              
                                    case '/createaccount':

                                        require_once("index.php");
                                        require_once("createaccount.php");
                                        require_once("menu.php");
                                        require_once("event.php");   
                                        require_once("chefs.php");
                                        require_once("gallery.php");
                                        require_once("reservationtable.php");
                                        require_once("about.php");
                                        require_once("footer.php");
                                        break;


                                        case '/gif':

                                            require_once("index.php");
                                            require_once("createaccount.php");
                                            require_once("menu.php");
                                            require_once("event.php");   
                                            require_once("chefs.php");
                                            require_once("gif.php");
                                            require_once("reservationtable.php");
                                            require_once("about.php");
                                            require_once("footer.php");
                                            break;

                                            case '/manageprofile':

                                                require_once("index.php");
                                                require_once("createaccount.php");
                                                require_once("menu.php");
                                                require_once("event.php");   
                                                require_once("chefs.php");
                                                require_once("manageprofile.php");
                                                require_once("reservationtable.php");
                                                require_once("about.php");
                                                require_once("footer.php");
                                                break;

                                                


                                                

                            
    
                default;
                {
                   
                    require_once("index.php");
                    require_once("createaccount.php");
                    require_once("404.php");
                    break;
                }


                
            }
         }
    }
}
$obj=new controller;

?>