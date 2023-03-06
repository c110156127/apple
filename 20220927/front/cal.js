export default function cal(){
    const data = {
        "w1":document.getElementById("w1").value,
        "h1":document.getElementById("h1").value,
        "w2":document.getElementById("w2").value,
        "h2":document.getElementById("h2").value,
    };
    axios.post("http://localhost/20220927/backend/main.php",Qs.stringify(data))
    .then(res => {
        let response = res['data'];
        document.getElementById("content").innerHTML = response;
    })
    .catch(err => {
        console.error(err);
    })
}