<div id="top"></div>
<h3 align="center">PHP SMTP Checker</h3>

  <p align="center">
    A simple tool to check your SMTP is working, built in PHP.
    <br />
    <br />
    <a href="https://harrisonr.uk/projects/php-smtp-checker">View Demo</a>
    ·
    <a href="https://github.com/harrisonratcliffe/php-smtp-checker/issues">Report Bug</a>
    ·
    <a href="https://github.com/harrisonratcliffe/php-smtp-checker/issues">Request Feature</a>
  </p>
</div>


![Product Name Screen Shot][product-screenshot]


### How to use
1. First of all, you need to clone this repository using `git clone https://github.com/harrisonratcliffe/php-smtp-checker`.
2. Now browse to the PHP script on your browser and fill out the form with your SMTP settings.

Note: for the 'Debug Mode' value, use the below levels to determine which one is best for you.
```
SMTP::DEBUG_OFF (0): Disable debugging (you can also leave this out completely, 0 is the default).
SMTP::DEBUG_CLIENT (1): Output messages sent by the client.
SMTP::DEBUG_SERVER (2): as 1, plus responses received from the server (this is the most useful setting).
SMTP::DEBUG_CONNECTION (3): as 2, plus more information about the initial connection - this level can help diagnose STARTTLS failures.
SMTP::DEBUG_LOWLEVEL (4): as 3, plus even lower-level information, very verbose, don't use for debugging SMTP, only low-level problems.
```


### Built With
Here are the frameworks/libraries that were used to build this script:
* [PureCSS](https://purecss.io/)
* [Bootstrap](https://getbootstrap.com)
* [PHPMailer](https://github.com/PHPMailer/PHPMailer)


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.


<!-- CONTACT -->
## Contact

Harrison Ratcliffe<br>
[Website](https://harrisonr.uk) - [Email](mailto:email@harrisonr.uk)

Project Link: [https://github.com/harrisonratcliffe/php-smtp-checker](https://github.com/harrisonratcliffe/php-smtp-checker)


[product-screenshot]: https://i.hcloud.uk/TiyAyh
