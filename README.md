Simple repo with studies of a simple communicaton between a python local server and a webApp through the use of websockets

To run this example as it is, some configuration is necessary. First the Ip address used by the local and webserver applications should match the machine IP address.
Second, PHP 7+ and python 3+ are meeded in order to run both sides of the application.

Starting the python app will make it act as a server waiting for connections to be made in the designated address:port. For development and example only purposes it
is enough to run the command "PHP -S localhost:8000" in a terminal located inside the webserver folder.
