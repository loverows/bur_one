//获取浏览器页面可见高度和宽度
/*var _PageHeight = document.documentElement.clientHeight,
    _PageWidth = document.documentElement.clientWidth;*/
//在页面未加载完毕之前显示的loading Html自定义内容
var _LoadingHtml = '<div id="loadingDiv" style="position:fixed;left:0;width:100%;height:100%;top:0;background:#000;z-index:20000;"><div class="spinner"></div></div>';
//呈现loading效果
document.write(_LoadingHtml);

//监听加载状态改变
document.onreadystatechange = completeLoading;

//加载状态为complete时移除loading效果
function completeLoading() {
    if (document.readyState == "complete") {
        setTimeout(function () {
            var loadingMask = document.getElementById('loadingDiv');
            loadingMask.parentNode.removeChild(loadingMask);
        }, 500);

    }
}