# How to load content after user scrolls down the page using ajax and php

Sometimes you need to show more content to the user as he/she scrolls down the page. This can have more benefits like increasing page load performance. Whatever the reason you want to do this we got you covered.
Follow these simple steps to achieve it in a lapse of time.

## Usage
Step I: Download the project and extract it to your computer. Copy and paste the file called content.php in your project at the same level as the page you want to use this functionality.

Step: II: Copy the following lines and paste them where you want the loaded content to appear in you page
```html
<div id="ajaxContent"></div>
<div id="loading" class="text-center d-none">Loading...</div>
```

Step II: Add these javascript code at the bottom of your page before the closing html tag.
```javascript
    /**Wait until the dom is full loaded**/
    document.addEventListener("DOMContentLoaded", function () {
        // Listen as user scroll down the document 
        window.addEventListener('scroll',onScrollHandler);
        console.log(document.body.scrollHeight);
    });
    function onScrollHandler(e){
        /**where the content will be appended**/
        var ajaxContentContainer = document.getElementById('ajaxContent');
        //get the scrolled height
        var scrolledHeight = (window.innerHeight + window.scrollY);
        //if the user scrolled the page at the very bottom point, then load more content
        //You can choose to load content earlier
        if(scrolledHeight == document.documentElement.scrollHeight) {
            loadContent((content)=>{
                //create a div element
                var newContent = document.createElement('div');
                //add the loaded content to the newly created div
                newContent.innerHTML=content;
                //append content to the ajax container for the user to see it
                ajaxContentContainer.append(newContent);
            });
        }
    }

    function loadContent(callback){
        //show loading text so that the user can know what is going on
        let loading = document.getElementById('loading');
        loading.classList.remove('d-none');
        //fetch data online
        fetch('content.php',{
            method:'post'
        })
        .then(res=>{return res.text()})
        .then(data=>{
            //hide loading text
            loading.classList.add('d-none');
            if(!data){
                throw "Data was not found";
            }
            else{
                //return data to the calling function
                callback(data);
            }
        })
        .catch(err=>{
            //hide loading text
            loading.classList.add('d-none');
            //log error for developer to se what happened
            console.log(err);
        })
    }
```

##Demo
[Demo](https://iwacumarket.xyz/codinghacks/demo/load-content-with-onscroll-ajax-php)

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)