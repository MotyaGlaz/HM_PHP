```server {
        listen 80;
        root /var/www/html/ngx_lab/app1;
}

server {
        listen 7777;
        root /var/www/html/ngx_lab/app1;

        location /docs {
                alias /var/www/html/ngx_lab/app2;
        }
}
```
![image](https://user-images.githubusercontent.com/65599677/169534713-2363eeee-9293-4958-9b70-01339f9bcb0d.png)


![image](https://user-images.githubusercontent.com/65599677/169534614-2048037a-9521-4031-8d2f-fd22ce3c87a1.png)


Сайтик: http://3.92.192.108/
