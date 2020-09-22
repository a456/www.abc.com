//流程模块【project_contract.项目合同】下录入页面自定义js页面,初始函数
function initbodys(){

    var myDate = new Date();
    var year = myDate.getYear()
    var year = year < 2000 ? year + 1900 : year
    var yy = year.toString().substr(2, 2);
    var num = form('num').value;
    num = num.split('-')
    form('num').value = num[0] + '【'+yy+num[1]+'】'
}