# Nevs Single Css
A simple plugin for wordpress. It adds a new textfield metabox in each post/page. This metabox field is for custom css of each page.


## Usage
To fetch the data from custom metabox. You need to use the get_post_meta() function of wordpress. See full documentation of get_post_meta [click here](https://developer.wordpress.org/reference/functions/get_post_meta/).

### Manual Code
```php
get_post_meta($post_ID, '__nevs_css', true);
````

### Shortcode
```
[customcss]
```