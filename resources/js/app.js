const { default: axios } = require('axios');

require('./bootstrap');

const messages_el = document.getElementById('messages');
const username_input = document.getElementById('username');
const messages_input = document.getElementById('messages_input');
const messages_form = document.getElementById('messages_form');

messages_form.addEventListener('submit',function (e) 
{
    e.preventDefault();

    let has_errors = false;

    if(username_input.value == '') 
    {
        alert("Please enter a username");
        has_errors=true;
    }

    if(messages_input.value == '') 
    {
        alert("Please enter a message");
        has_errors=true;
    }


    const options= {
        method: 'post',
        url: '/send-message',
        data: {
            username: username_input.value,
            message: messages_input.value
        }
    }

    axios(options);
} );
 alert(test);
window.Echo.channel('chat')
    .listen('.message', (e) => {
        messages_el.innerHTML+= "<h4 style='display:inline-block'>"+e.username+": </h4> <h6 style='display:inline-block'>"+e.message+"<h6><br><br>";
    });