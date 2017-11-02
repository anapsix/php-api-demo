## Build
```
docker build -t php-api-demo .
```

## Run, previously built
```
docker run -it --rm -p 8080:80 php-api-demo
```

## Run, while making changes live
```
docker run -it --rm -p 8080:80 -v $(pwd):/srv/app php-api-demo
```

## Test with curl
```
curl 127.0.0.1/api/test
```

