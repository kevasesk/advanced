$(function() {
    $(".tab-content").hide();
    $("ul.tabset li").click(function() {
        $("ul.tabset li").removeClass("active");
        $(this).addClass("active");
        $(".tab-content").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
    hash = window.location.hash;
    elements = $('a[href="' + hash + '"]');
    if (elements.length === 0) {
        $("ul.tabset li:first").addClass("active").show();
        $(".tab-content:first").show();
    } else {
        elements.click();
    }
    $('#tabset li').click(function(){
        window.scrollTo(0,0);
    });
});





(function(){
    var a = document.querySelector('#tabset-holder'), b = null, K = null, Z = 0, P = 0, N = 0;
    window.addEventListener('scroll', Ascroll, false);
    document.body.addEventListener('scroll', Ascroll, false);
    function Ascroll() {
        var Ra = a.getBoundingClientRect(),
            R1bottom = document.querySelector('#tabs').getBoundingClientRect().bottom;
        if (Ra.bottom < R1bottom) {
            if (b == null) {
                var Sa = getComputedStyle(a, ''), s = '';
                for (var i = 0; i < Sa.length; i++) {
                    if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                        s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
                    }
                }
                b = document.createElement('div');
                b.className = "stop";
                b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                a.insertBefore(b, a.firstChild);
                var l = a.childNodes.length;
                for (var i = 1; i < l; i++) {
                    b.appendChild(a.childNodes[1]);
                }
                a.style.height = b.getBoundingClientRect().height + 'px';
                a.style.padding = '0';
                a.style.border = '0';
            }
            var Rb = b.getBoundingClientRect(),
                Rh = Ra.top + Rb.height,
                W = document.documentElement.clientHeight,
                R1 = Math.round(Rh - R1bottom),
                R2 = Math.round(Rh - W);
            if (Rb.height > W) {
                if (Ra.top < K) {
                    if (R2 + N > R1) {
                        if (Rb.bottom - W + N <= 0) {
                            b.className = 'sticky';
                            b.style.top = W - Rb.height - N + 'px';
                            Z = N + Ra.top + Rb.height - W;
                        } else {
                            b.className = 'stop';
                            b.style.top = - Z + 'px';
                        }
                    } else {
                        b.className = 'stop';
                        b.style.top = - R1 +'px';
                        Z = R1;
                    }
                } else {
                    if (Ra.top - P < 0) {
                        if (Rb.top - P >= 0) {
                            b.className = 'sticky';
                            b.style.top = P + 'px';
                            Z = Ra.top - P;
                        } else {
                            b.className = 'stop';
                            b.style.top = - Z + 'px';
                        }
                    } else {
                        b.className = '';
                        b.style.top = '';
                        Z = 0;
                    }
                }
                K = Ra.top;
            } else {
                if ((Ra.top - P) <= 0) {
                    if ((Ra.top - P) <= R1) {
                        b.className = 'stop';
                        b.style.top = - R1 +'px';
                    } else {
                        b.className = 'sticky';
                        b.style.top = P + 'px';
                    }
                } else {
                    b.className = '';
                    b.style.top = '';
                }
            }
            window.addEventListener('resize', function() {
                a.children[0].style.width = getComputedStyle(a, '').width
            }, false);
        }
    }
})()
