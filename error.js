const first = document.getElementById('first')
const last = document.getElementById('last')
const gender = document.getElementById('gender')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit',(e)=>{
    let messages =[]
    if(first.value ==='' || first.value == null){
        messages.push('first name is required')
    }

    if(messages.length > 0){
   
     e.preventDefault()
     errorElement.innerText = messages.join(',')
    }
})