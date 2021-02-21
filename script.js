
function myfunction(event) {
    if(event.target.id=='customize')
    {
        document.getElementById("templateDetails").style.display="block"
    }
    else
    {
        document.getElementById("templateDetails").style.display="none"
    }
}
document.querySelectorAll("input[name='select']").forEach((input) => {
    input.addEventListener('change', myfunction);
});