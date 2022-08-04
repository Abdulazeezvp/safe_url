<p>A simple application to short the given url using redis and laravel cache</p>

## Why redis?
- Faster redirection
- Simple key value pair solution
- Redis is a in-memory database, so it is faster than many of exisiting popular databasee.
- its a no sql db, so structure of db will not mess in future enhancements.

## How it works?
- 1 will create a shorten url 
- 2 save it in cache(redis), key is parameter passed
- 3 retrive original url from cache(using pull method, can be used only once) and redirects.



