
<script>
    let btn = document.getElementById('btn');
    btn.addEventListener('click', () => {
    const request = new XMLHttpRequest();

    const url = "../link-shortener.php";

    const link = 'link='+ document.getElementById('link').value;
    console.log(link);

    request.open("POST", url, true);

    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    request.addEventListener("readystatechange", () => {
        if(request.readyState === 4 && request.status === 200) {   
            const text = document.getElementById('text');   
            text.innerHTML = ""; 
            console.log(request.responseText);
            let newLink = document.createElement("a");
            let arr  = request.responseText.split("|");
            newLink.innerHTML = '<a href="http://mendeleev/'+arr[0]+'">'+arr[1]+'</a>';
            text.appendChild(newLink);
        }
    });

    request.send(link);
})

</script>
