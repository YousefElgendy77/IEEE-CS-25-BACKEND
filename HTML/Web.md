# HTML Research 

### How the web works?

When you type a web address into your browser address bar, the following steps occur:
1. The browser goes to the DNS server and finds the real address of the server that the website lives on.

2. The browser sends an HTTP request message to the server, asking it to send a copy of the website to the client.
3. If the server approves the client's request,  and then starts sending the website's files to the browser as a series of small chunks called data packets.
4. The browser assembles the small chunks into a complete web page and displays it to you.


[Reference](https://developer.mozilla.org/en-US/docs/Learn_web_development/Getting_started/Web_standards/How_the_web_works)
#

### HTTP VS HTTPS.

|                      | HTTP                                                    | HTTTPS                                                                      |
| -------------------- | ------------------------------------------------------- | --------------------------------------------------------------------------- |
| Stands for           | Hypertext Transfer Protocol                             | Hypertext Transfer Protocol Secure                                          |
| Underlying Protocols | HTTP/1 and HTTP/2 use TCP/IP. HTTP/3 uses QUIC protocol | Uses HTTP/2 with SSL/TLS to further encrypt the HTTP requests and responses |
| Port                 | Default Port 80                                         | Default Port 443                                                            |
| Used for             | Older text-based websites                               | All modern websites                                                         |
| Security             | No additional security features                         | Uses SSL certificates for public-key encryption                             |
| Benefits             | Made communication over the internet possible           | Improves website authority, trust, and search engine rankings               |
[Reference](https://aws.amazon.com/compare/the-difference-between-https-and-http/#:~:text=HTTP%20messages%20are%20plaintext%2C%20which,the%20data%20over%20the%20network.)
#

## Web Server
### What is Web Sever?
A web server is a system that stores and delivers web pages to users. It uses the HTTP/HTTPS protocol to handle requests from browsers and sends back things like HTML files, images, and videos.
### How Does a Web Server Work?
1. Client Request
2. DNS Resolution
3. Connecting to the Web Server
4. Processing Request
5. Serving the Response
6. Rendering the Web Page
### Types of Web Servers
1. Apache Web Server
2. Nginx Web Server
3. Microsoft IIS (Internet Information Services)
4. LiteSpeed Web Server
5. Apache Tomcat Web Server
6. NodeJS Web Server
7. Lighttpd
8. OpenLiteSpeed
9. Jigsaw Server
10. Sun Java System Web Server

[Reference](https://www.geeksforgeeks.org/web-server-and-its-type/)
#
## DNS

### What is DNS?
The Domain Name System (DNS) is the phonebook of the Internet.DNS translates domain names to IP addresses so browsers can load Internet resources.
### How does DNS work?
The process of DNS resolution involves converting a hostname into a computer-friendly IP address. An IP address is given to each device on the Internet, and that address is necessary to find the appropriate Internet device. When a user wants to load a webpage, a translation must occur between what a user types into their web browser (example.com) and the machine-friendly address necessary to locate the example.com webpage.
### There are 4 types of DNS:
1. DNS recursor 
2. Root nameserver
3. TLD nameserver
4. Authoritative nameserver

[Reference](https://www.cloudflare.com/learning/dns/what-is-dns/)