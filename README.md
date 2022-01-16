# php-rabbitmq
My exploration about rabbit mq using PHP
### How to start
- Install docker -> [https://www.docker.com/get-started](https://www.docker.com/get-started)
- Run -> **docker run -it --rm --name rabbitmq -p 5672:5672 -p 15672:15672 rabbitmq:3.9-management**

### Simple
- cd simple
- php receive.php
- php send.php

### Work Queues
- cd work_queues
- php worker.php
- php new_task.php blablabla.......

### Publisher Subscribe
- cd pubsub
- php receive_logs.php (Run in multiple terminal)
- php emit_log.php **some message**