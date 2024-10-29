<?php

  class ApiResponseConstant {

    //HTTP STATUS CODE 1xx
    //100 - Request still fine, client could continue process
    const HTTP_CONTINUE = 100;  
    //101 - Protocol on stage switching
    const HTTP_SWITCHING_PROTOCOLS = 101; 
    //102 - Server received request and on processing, but did not send anything
    const HTTP_PROCESSING = 102;
    //103 - Respond some information before the last HTTP message
    const HTTP_EARLY_HINTS = 103;

    //HTTP STATUS CODE 2xx
    //200 - OK
    const HTTP_OK = 200;
    //201 - Request successfully and new resource has been created
    const HTTP_CREATED = 201;
    //202 - Received request but still not process
    const HTTP_ACCEPTED = 202;
    //204 - This request have nothing
    const HTTP_NO_CONTENT = 204;


    //HTTP STATUS CODE 3xx

    //HTTP STATUS CODE 4xx
    const HTTP_BAD_REQUEST = 400;
    const HTTP_NOT_FOUND = 404;

  }

