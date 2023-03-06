export default function startPage(){
    const sp = `
    長方形1 → 寬：<input type="text" id="w1">高：<input type="text" id="h1"><br>
    長方形2 → 寬：<input type="text" id="w2">高：<input type="text" id="h2"><br>
    <p></p>
    <button id="cal">計算</button><br>
    <div id="content"></div>
    `
    return sp;
}