Simple repo with studies of a simple communicaton between a python local server and a webApp through the use of websockets

To run this example docker is necessary. Using "docker compose up" will start the containers and start a development environment of this program.

Alternatively, this can be run manually by having python 3.6+ and Node 14+.

For the python server, install dependencies listed in requirements.txt file and execute main.py file. For the

For the node server, install dependencies with "yarn install", make a build with "yarn build" and then run with "yarn start". Alternatively, those three commands can be bundled:
"yarn build && yarn build && yarn start"