FizzBuzz
========


Prerequisites
-------------
To run this FizzBuzz app, you need to have Docker installed. 
The easiest way to install Docker is to follow the Docker Desktop installation instructions provided 
[here](https://docs.docker.com/desktop/).


Instructions
------------
After Docker Desktop (or any other way to run containers on your machine) is installed, 
please run these CLI commands step-by-step:

1. Build the container:
```bash
docker compose up --build
```

2. After container was built, change into container
```bash
docker run --rm -it fizzbuzz-test
```

_From within container you can run the application or execute Unit tests_

- Run application code
```bash
php index.php
```

- Execute Unit tests
```bash
./vendor/bin/phpunit tests
```