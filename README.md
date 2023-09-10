# validation-js
I will tell you four solutions for security against XSS attacks

    validation
    sanitization 
    Escaping
    secure code
    
validating data
-
Determines whether the data has been sent in the correct form or not

Functions

    is_email()
    is_url()
    strlen()
    preg_match()
    filter_var()

sanitizing data
-
It means removing unauthorized characters from data and sending clean data

Functions

    strip_tag()
    htmlspecialchars()
    htmlentities()
    urlencode()
    Filter_var()

Escaping
-
exit security
Escaping refers to the process of securing output data by removing unwanted data to prevent it from being seen in code

Functions

    URLEncoder.encode
    encodeURIComponent
    escape
    addslashes


.textContent
-
Using the textContent feature, we can get the text/content inside a tag or define a new value for it, like:

    & &amp;
    < &lt;
    > &gt;
    " &quot;
    ' &#x27;

Safe Sinks
-
Sink topic in js is used to receive and process data

List of Safe Sinks

    elem.textContent = dangerVariable;
    elem.insertAdjacentText(dangerVariable);
    elem.className = dangerVariable;
    elem.setAttribute(safeName, dangerVariable);
    formfield.value = dangerVariable; 
    document.createTextNode(dangerVariable);
    document.createElement(dangerVariable);
    elem.innerHTML = DOMPurify.sanitize(dangerVar);

postMessage() 
-
It enables us to send data to different pages

For security in postMessages, use the following three functions

    JSON.stringify
    event.origin
    window.addEventListener
