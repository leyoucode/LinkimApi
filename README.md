### LinkimApi

1, Create a directory for VirtualHost:

```
mkdir -p ~/Documents/backend/
cd ~/Documents/backend/
```

2, clone source code from github.

```
git clone git@github.com:liuweicode/LinkimApi.git
```

3, Add your virtual host configuration, like this:

```
<VirtualHost api.local:80>
    DocumentRoot "/Users/LingJin/Documents/backend/LinkimApi/Public"
    ServerName api.local
    <Directory "/Users/LingJin/Documents/backend/LinkimApi/Public">
        Options all
        AllowOverride all
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>
```

4, Restart Apache Server, Period.