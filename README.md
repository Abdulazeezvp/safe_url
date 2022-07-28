<p>A simple application to shorten the give url using redis and laravel cache</p>

## Why redis?
- Faster redirection
- Simple key value pair solution
- Stimulate a RAM server

## How it works?
- will create a shorten url 
- save it in cache(redis), key is parameter passed
- retrive original url from cache(using pull method, can be used only once) and redirects.



