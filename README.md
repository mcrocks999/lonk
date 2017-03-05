# lonk
> Be sure to allow creation of files in the directory this script is stored in

### Installation:
1. Put index.php in the folder you want links to be in.
2. Edit `$host_url` to the url of the folder
3. You can now do requests as described below

### Requests
**POST**: `https://example.com/mylinkshortener/`

Key | Desc | Required | Value
--- | --- | --- | ---
*url* | URL to shorten, eg `google.com` | yes | `url to shorten`
*pretty* | Send this key to enable worded url | no | [any value accepted]
