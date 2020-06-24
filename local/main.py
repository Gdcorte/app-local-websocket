#!/usr/bin/env python

# WS server example

import asyncio
import websockets

async def hello(websocket, path):
    name = await websocket.recv()
    print(f"< {name}")

    greeting = f"Received {name}!"

    await websocket.send(greeting)
    print(f"> HOW YOU DOING?")

print("Starting Client Side Listener")
start_server = websockets.serve(hello, "localhost", 8765)

asyncio.get_event_loop().run_until_complete(start_server)
print("Listener Started")
asyncio.get_event_loop().run_forever()