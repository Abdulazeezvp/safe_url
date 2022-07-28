<p>A simple application to shorten the give url using redis and laravel cache</p>

## Why redis?
- Faster redirection
- Simple key value pair solution
- Stimulate a RAM server

## How it works?
- 1 will create a shorten url 
- 2 save it in cache(redis), key is parameter passed
- 3 retrive original url from cache(using pull method, can be used only once) and redirects.



