!function (e) {
    function t(t) {
        for (var n, l, o = t[0], s = t[1], c = t[2], u = 0, v = []; u < o.length; u++) l = o[u], Object.prototype.hasOwnProperty.call(a, l) && a[l] && v.push(a[l][0]), a[l] = 0;
        for (n in s) Object.prototype.hasOwnProperty.call(s, n) && (e[n] = s[n]);
        for (d && d(t); v.length;) v.shift()();
        return i.push.apply(i, c || []), r()
    }

    function r() {
        for (var e, t = 0; t < i.length; t++) {
            for (var r = i[t], n = !0, o = 1; o < r.length; o++) {
                var s = r[o];
                0 !== a[s] && (n = !1)
            }
            n && (i.splice(t--, 1), e = l(l.s = r[0]))
        }
        return e
    }

    var n = {}, a = {0: 0}, i = [];

    function l(t) {
        if (n[t]) return n[t].exports;
        var r = n[t] = {i: t, l: !1, exports: {}};
        return e[t].call(r.exports, r, r.exports, l), r.l = !0, r.exports
    }

    l.m = e, l.c = n, l.d = function (e, t, r) {
        l.o(e, t) || Object.defineProperty(e, t, {enumerable: !0, get: r})
    }, l.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
    }, l.t = function (e, t) {
        if (1 & t && (e = l(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var r = Object.create(null);
        if (l.r(r), Object.defineProperty(r, "default", {
            enumerable: !0,
            value: e
        }), 2 & t && "string" != typeof e) for (var n in e) l.d(r, n, function (t) {
            return e[t]
        }.bind(null, n));
        return r
    }, l.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return l.d(t, "a", t), t
    }, l.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, l.p = "";
    var o = window.webpackJsonp = window.webpackJsonp || [], s = o.push.bind(o);
    o.push = t, o = o.slice();
    for (var c = 0; c < o.length; c++) t(o[c]);
    var d = s;
    i.push([127, 1]), r()
}({
    127: function (e, t, r) {
        r(128), e.exports = r(326)
    }, 314: function (e, t, r) {
    }, 318: function (e, t) {
    }, 319: function (e, t) {
        window.addEventListener("DOMContentLoaded", (function () {
            var e = document.querySelector(".js-sidebars"), t = document.querySelectorAll(".js-sidebars > section"),
                r = document.querySelector(".modal-call"), n = document.querySelector(".modal-calc"),
                a = document.querySelector(".modal-job"), i = document.querySelector(".modal-region"),
                l = document.querySelector(".modal-query"), o = document.querySelectorAll(".modal-region__link"),
                s = document.querySelector(".js-region-city"), c = document.querySelector(".adaptive-menu");

            function d(t, r) {
                t.preventDefault(), document.querySelector("html").classList.toggle("lock"), document.querySelector("body").classList.toggle("lock"), e.classList.toggle("sidebar-bg"), r.classList.toggle("active"), document.querySelector(".header").classList.toggle("blur"), document.querySelector("main").classList.toggle("blur"), document.querySelector(".footer").classList.toggle("blur")
            }

            s && (null != localStorage.getItem("city") ? s.innerHTML = localStorage.getItem("city") : s.innerHTML = "Москва"), document.addEventListener("click", (function (u) {
                var v = u.target;
                if (v && (v.classList.contains("js-call") || v.classList.contains("modal-call__exit")) && d(u, r), v && (v.classList.contains("js-job") || v.classList.contains("modal-job__exit")) && d(u, a), v && (v.classList.contains("js-calc") || v.classList.contains("modal-calc__exit")) && d(u, n), v && (v.classList.contains("js-query") || v.classList.contains("modal-query__exit")) && d(u, l), v && (v.classList.contains("js-modal-header") || v.classList.contains("adaptive-menu__exit")) && d(u, c), v && (v.classList.contains("js-region") || v.classList.contains("modal-region__exit")) && d(u, i), v.classList.contains("modal-region__link")) {
                    for (var p = 0; p < o.length; p++) if (o[p] == v) {
                        var m = o[p].innerHTML;
                        localStorage.setItem("city", m);
                        var f = localStorage.getItem("city");
                        "undifiend" == f ? s.innerHTML = "Москва" : (s.innerHTML = f.innerHTML, s.innerHTML = f)
                    }
                    d(u, i)
                } else if (v.classList.contains("js-region-close")) {
                    var y = document.querySelector(".js-select-city");
                    localStorage.setItem("city", y.innerHTML);
                    var g = localStorage.getItem("city");
                    s.innerHTML = g, d(u, i)
                }
                if (v && (v.classList.contains("sidebar-bg") || v.classList.contains("sidebar-bg"))) {
                    u.preventDefault(), document.querySelector("html").classList.toggle("lock"), document.querySelector("body").classList.toggle("lock"), e.classList.toggle("sidebar-bg");
                    for (var h = 0; h < t.length; h++) t[h].classList.toggle("active") && t[h].classList.remove("active");
                    document.querySelector(".header").classList.toggle("blur"), document.querySelector("main").classList.toggle("blur"), document.querySelector(".footer").classList.toggle("blur")
                }
            }))
        }))
    }, 320: function (e, t) {
        window.addEventListener("DOMContentLoaded", (function () {
            var e = document.querySelector(".header");
            e && e.addEventListener("click", (function (e) {
                e.target && e.target.classList.contains("js-burger") && (e.preventDefault(), document.querySelector(".hamburger-menu").classList.toggle("active"), document.querySelector(".js-burger").classList.toggle("active")), e.target && e.target.classList.contains("js-search") && (e.preventDefault(), document.querySelector(".form-wrapper-header").classList.toggle("active"))
            }))
        }))
    }, 321: function (e, t) {
        window.addEventListener("DOMContentLoaded", (function () {
            function e(e) {
                var t = e.querySelector(".video__link"), r = e.querySelector(".video__media"),
                    n = e.querySelector(".video__button"), a = function (e) {
                        var t = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/hqdefault\.jpg/i;
                        return e.src.match(t)[1]
                    }(r);
                e.addEventListener("click", (function () {
                    var r = function (e) {
                        var t = document.createElement("iframe");
                        return t.setAttribute("allowfullscreen", ""), t.setAttribute("allow", "autoplay"), t.setAttribute("src", function (e) {
                            return "https://www.youtube.com/embed/" + e + "?rel=0&showinfo=0&autoplay=1"
                        }(e)), t.classList.add("video__media"), t
                    }(a);
                    t.remove(), n.remove(), e.appendChild(r)
                })), t.removeAttribute("href"), e.classList.add("video--enabled")
            }

            !function () {
                for (var t = document.querySelectorAll(".video"), r = 0; r < t.length; r++) e(t[r])
            }()
        }))
    }, 322: function (e, t) {
        window.addEventListener("DOMContentLoaded", (function () {
            var e = document.querySelector(".faq"), t = document.querySelectorAll(".faq-item__header"),
                r = document.querySelectorAll(".faq-item__text"), n = document.querySelector(".stocks"),
                a = document.querySelectorAll(".js-stocks-more"), i = document.querySelectorAll(".stocks-item__text");

            function l(e, t, r, n, a, i) {
                var l = !1;
                document.addEventListener("click", (function (o) {
                    if (o.target && o.target.classList.contains(r)) {
                        o.preventDefault();
                        for (var s = 0; s < e.length; s++) o.target == e[s] && (e[s].classList.toggle("active"), t[s].classList.toggle("active"), n && (l ? (e[s].innerHTML = a, l = !1) : (e[s].innerHTML = i, l = !0)))
                    }
                }))
            }

            r && t && e && l(t, r, "faq-item__header"), i && a && n && l(a, i, "js-stocks-more", !0, "РАЗВЕРНУТЬ", "СВЕРНУТЬ")
        }))
    }, 323: function (e, t) {
        window.addEventListener("DOMContentLoaded", (function () {
            function e(e) {
                this.type = e
            }

            e.prototype.init = function () {
                var e = this, t = this;
                this.оbjects = [], this.daClassname = "_dynamic_adapt_", this.nodes = document.querySelectorAll("[data-da]");
                for (var r = 0; r < this.nodes.length; r++) {
                    var n = this.nodes[r], a = n.dataset.da.trim().split(","), i = {};
                    i.element = n, i.parent = n.parentNode, i.destination = document.querySelector(a[0].trim()), i.breakpoint = a[1] ? a[1].trim() : "767", i.place = a[2] ? a[2].trim() : "last", i.index = this.indexInParent(i.parent, i.element), this.оbjects.push(i)
                }
                this.arraySort(this.оbjects), this.mediaQueries = Array.prototype.map.call(this.оbjects, (function (e) {
                    return "(" + this.type + "-width: " + e.breakpoint + "px)," + e.breakpoint
                }), this), this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, (function (e, t, r) {
                    return Array.prototype.indexOf.call(r, e) === t
                }));
                for (var l = function (r) {
                    var n = e.mediaQueries[r], a = String.prototype.split.call(n, ","), i = window.matchMedia(a[0]),
                        l = a[1], o = Array.prototype.filter.call(e.оbjects, (function (e) {
                            return e.breakpoint === l
                        }));
                    i.addListener((function () {
                        t.mediaHandler(i, o)
                    })), e.mediaHandler(i, o)
                }, o = 0; o < this.mediaQueries.length; o++) l(o)
            }, e.prototype.mediaHandler = function (e, t) {
                if (e.matches) for (var r = 0; r < t.length; r++) {
                    var n = t[r];
                    n.index = this.indexInParent(n.parent, n.element), this.moveTo(n.place, n.element, n.destination)
                } else for (var a = 0; a < t.length; a++) {
                    var i = t[a];
                    i.element.classList.contains(this.daClassname) && this.moveBack(i.parent, i.element, i.index)
                }
            }, e.prototype.moveTo = function (e, t, r) {
                t.classList.add(this.daClassname), "last" === e || e >= r.children.length ? r.insertAdjacentElement("beforeend", t) : "first" !== e ? r.children[e].insertAdjacentElement("beforebegin", t) : r.insertAdjacentElement("afterbegin", t)
            }, e.prototype.moveBack = function (e, t, r) {
                t.classList.remove(this.daClassname), void 0 !== e.children[r] ? e.children[r].insertAdjacentElement("beforebegin", t) : e.insertAdjacentElement("beforeend", t)
            }, e.prototype.indexInParent = function (e, t) {
                var r = Array.prototype.slice.call(e.children);
                return Array.prototype.indexOf.call(r, t)
            }, e.prototype.arraySort = function (e) {
                "min" === this.type ? Array.prototype.sort.call(e, (function (e, t) {
                    return e.breakpoint === t.breakpoint ? e.place === t.place ? 0 : "first" === e.place || "last" === t.place ? -1 : "last" === e.place || "first" === t.place ? 1 : e.place - t.place : e.breakpoint - t.breakpoint
                })) : Array.prototype.sort.call(e, (function (e, t) {
                    return e.breakpoint === t.breakpoint ? e.place === t.place ? 0 : "first" === e.place || "last" === t.place ? 1 : "last" === e.place || "first" === t.place ? -1 : t.place - e.place : t.breakpoint - e.breakpoint
                }))
            }, new e("max").init()
        }))
    }, 324: function (e, t) {
        window.addEventListener("DOMContentLoaded", (function () {
            document.querySelector("#map") && ymaps.ready((function () {
                var e = new ymaps.Map("map", {
                    center: [55.753994, 37.622093],
                    zoom: 9,
                    controls: ["routePanelControl"]
                }).controls.get("routePanelControl");
                e.routePanel.state.set({from: "Москва, Льва Толстого 16"}), e.routePanel.options.set({
                    allowSwitch: !1,
                    types: {transit: !0}
                });
                var t = document.querySelector(".map-modal__wrapper");
                document.querySelectorAll(".map-list__link"), document.querySelector(".ymaps-2-1-79-route-panel-input__input");
                t.addEventListener("click", (function (t) {
                    t.target && t.target.classList.contains("map-list__link") && (t.preventDefault(), e.routePanel.state.set({to: $(t.target).text()}))
                }))
            }))
        }))
    }, 326: function (e, t, r) {
        "use strict";
        r.r(t);
        r(314), r(315), r(316), r(317), r(318);
        var n = r(333), a = r(329), i = r(330), l = r(331), o = r(332);
        n.a.use([a.a, i.a, l.a, o.a]), window.addEventListener("DOMContentLoaded", (function () {
            new n.a(".swiper-letter", {
                slidesPerView: 4,
                spaceBetween: 0,
                observeParents: !0,
                observer: !0,
                allowSlidePrev: !0,
                allowSlideNext: !0,
                navigation: {nextEl: ".letter__next", prevEl: ".letter__prev"},
                breakpoints: {
                    0: {slidesPerView: 1},
                    576: {slidesPerView: 2},
                    992: {slidesPerView: 3},
                    1200: {slidesPerView: 4}
                }
            }), new n.a(".swiper-partners", {
                slidesPerView: 2,
                spaceBetween: 30,
                observeParents: !0,
                observer: !0,
                allowSlidePrev: !0,
                allowSlideNext: !0,
                navigation: {nextEl: ".partners__next", prevEl: ".partners__prev"},
                breakpoints: {
                    0: {slidesPerView: 1},
                    480: {slidesPerView: 2},
                    768: {slidesPerView: 3},
                    992: {slidesPerView: 4},
                    1200: {slidesPerView: 5}
                }
            }), new n.a(".swiper-article", {
                slidesPerView: 2,
                spaceBetween: 30,
                observeParents: !0,
                observer: !0,
                allowSlidePrev: !0,
                allowSlideNext: !0,
                navigation: {nextEl: ".article__next-1", prevEl: ".article__prev-1"},
                breakpoints: {0: {slidesPerView: 1}, 992: {slidesPerView: 2}}
            }), new n.a(".swiper-article-2", {
                slidesPerView: 2,
                spaceBetween: 30,
                observeParents: !0,
                observer: !0,
                allowSlidePrev: !0,
                allowSlideNext: !0,
                navigation: {nextEl: ".article__next-2", prevEl: ".article__prev-2"},
                breakpoints: {0: {slidesPerView: 1}, 992: {slidesPerView: 2}}
            }), new n.a(".swiper-article-3", {
                slidesPerView: 2,
                spaceBetween: 30,
                observeParents: !0,
                observer: !0,
                allowSlidePrev: !0,
                allowSlideNext: !0,
                navigation: {nextEl: ".article__next-3", prevEl: ".article__prev-3"},
                breakpoints: {0: {slidesPerView: 1}, 992: {slidesPerView: 2}}
            }), new n.a(".swiper-tags", {
                slidesPerView: "auto",
                spaceBetween: 20,
                observeParents: !0,
                observer: !0,
                allowSlidePrev: !0,
                allowSlideNext: !0,
                navigation: {nextEl: ".tags__next", prevEl: ".tags__prev"},
                breakpoints: {0: {spaceBetween: 10}, 767: {spaceBetween: 15}, 991: {spaceBetween: 20}}
            });
            var e = new n.a(".gallery-thumbs", {
                spaceBetween: 10,
                autoplay: !0,
                slidesPerView: 4,
                freeMode: !0,
                watchSlidesVisibility: !0,
                watchSlidesProgress: !0,
                breakpoints: {0: {slidesPerView: 2}, 575: {slidesPerView: 4}}
            });
            new n.a(".gallery-top", {
                spaceBetween: 0,
                autoplay: !0,
                navigation: {nextEl: ".product__next", prevEl: ".product__prev"},
                thumbs: {swiper: e}
            })
        }));
        var s = r(14), c = r.n(s);
        window.addEventListener("DOMContentLoaded", (function () {
            c()(".select").each((function () {
                var e = c()(this), t = e.find("option"), r = t.length;
                t.filter(":selected");
                e.hide(), e.wrap('<div class="select"></div>'), c()("<div>", {
                    class: "new-select",
                    text: e.children("option:disabled").text()
                }).insertAfter(e);
                var n = e.next(".new-select");
                c()("<div>", {class: "new-select__list"}).insertAfter(n);
                for (var a = n.next(".new-select__list"), i = 1; i < r; i++) c()("<div>", {
                    class: "new-select__item",
                    html: c()("<span>", {text: t.eq(i).text()})
                }).attr("data-value", t.eq(i).val()).appendTo(a);
                var l = a.find(".new-select__item");
                a.slideUp(0), n.on("click", (function () {
                    c()(this).hasClass("on") ? (c()(this).removeClass("on"), a.slideUp(250)) : (c()(this).addClass("on"), a.slideDown(250), l.on("click", (function () {
                        var e = c()(this).data("value");
                        c()("select").val(e).attr("selected", "selected"), n.text(c()(this).find("span").text()), a.slideUp(250), n.removeClass("on")
                    })))
                }))
            }));
            var e = document.querySelector(".tariffs"), t = document.querySelectorAll(".js-tariffs-link"),
                r = document.querySelectorAll(".js-tariffs-tab"), n = document.querySelector(".article-block"),
                a = document.querySelectorAll(".js-article-link"), i = document.querySelectorAll(".js-article-tab"),
                l = document.querySelector(".sitemap"), o = document.querySelectorAll(".js-sitemap-link"),
                s = document.querySelectorAll(".js-sitemap-tab"), d = document.querySelector(".mail"),
                u = document.querySelectorAll(".js-mail-link"), v = document.querySelectorAll(".js-mail-tab");

            function p(e, t, r, n, a, i, l) {
                f(e, t), m(0, e, t);
                var o = 0, s = !1;
                if (a && i && l) {
                    var c = t[o].querySelectorAll(".".concat(i)), d = t[o].querySelectorAll(".".concat(l));
                    f(c, d), m(0, c, d), s = !0
                }
                r.addEventListener("click", (function (r) {
                    if (r.target && r.target.classList.contains(n)) {
                        r.preventDefault(), s && (v = !0);
                        for (var a = 0; a < e.length; a++) if (e[a] === r.target && (f(e, t), m(a, e, t), v)) {
                            var c = t[a].querySelectorAll(".".concat(i)), d = t[a].querySelectorAll(".".concat(l));
                            f(c, d), m(0, c, d), o = a
                        }
                    }
                    var u = t[o].querySelectorAll(".".concat(i)), v = t[o].querySelectorAll(".".concat(l));
                    if (r.target && r.target.classList.contains(i)) {
                        r.preventDefault();
                        for (var p = 0; p < u.length; p++) u[p] === r.target && (f(u, v), m(p, u, v))
                    }
                }))
            }

            function m() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                    t = arguments.length > 1 ? arguments[1] : void 0, r = arguments.length > 2 ? arguments[2] : void 0;
                t[e].classList.add("active"), r[e].classList.add("active")
            }

            function f(e, t) {
                for (var r = 0; r < e.length; r++) e[r].classList.remove("active");
                for (var n = 0; n < t.length; n++) t[n].classList.remove("active")
            }

            t.length > 0 && r.length > 0 && e && p(t, r, e, "js-tariffs-link", !0, "new-select__item", "js-tariffs-subtab"), a.length > 0 && i.length > 0 && n && p(a, i, n, "js-article-link", !1), o.length > 0 && s.length > 0 && l && p(o, s, l, "js-sitemap-link"), u.length > 0 && v.length > 0 && d && p(u, v, d, "js-mail-link")
        }));
        r(319);
        var d = r(93), u = r.n(d);
        window.addEventListener("DOMContentLoaded", (function () {
            u()({touchNavigation: !0, loop: !0, autoplayVideos: !0})
        }));
        r(320), r(321), r(322), r(323), r(324);
        window.addEventListener("DOMContentLoaded", (function () {
            var e = document.querySelector(".js-from"), t = document.querySelector(".js-to"),
                r = document.querySelector(".js-revert");
            e && t && r && r.addEventListener("click", (function (r) {
                r.preventDefault();
                var n = e.value;
                e.value = t.value, t.value = n, e.innerHTML = e.value, t.innerHTML = t.value
            }));
            var n = document.querySelectorAll(".header-menu > li > ul > li > ul > li");
            if (n) {
                !function () {
                    for (var e = function (e) {
                        var t = n[e].querySelector("input"), r = n[e].querySelectorAll("li a");
                        t && r && (t.oninput = function () {
                            "" !== t.value.trim() ? r.forEach((function (e) {
                                if (-1 == e.innerText.search(t.value.trim())) e.classList.add("hide"), e.innerHTML = e.innerText; else {
                                    e.classList.remove("hide");
                                    var r = e.innerText;
                                    e.innerHTML = function (e, t, r) {
                                        return e.slice(0, t) + "<mark>" + e.slice(t, t + r) + "</mark>" + e.slice(t + r)
                                    }(r, e.innerText.search(t.value.trim()), t.value.trim().length)
                                }
                            })) : r.forEach((function (e) {
                                e.classList.remove("hide"), e.innerHTML = e.innerText
                            }))
                        })
                    }, t = 0; t < n.length; t++) e(t)
                }()
            }
            var a = document.querySelector("#index-banner"), i = document.querySelector("#index-banner-front"),
                l = document.querySelector(".header");
            document.querySelector("main");
            if (a && i) {
                var o = a.getBoundingClientRect(), s = i.querySelector(".banner-slide");
                l.classList.add("active");
                var c = !0;
                document.addEventListener("scroll", (function (e) {
                    scrollY > 10 && c && (c = !1, window.scrollTo({
                        top: o.top - 100,
                        behavior: "smooth"
                    }), s.classList.add("anim")), scrollY <= 1 && !c && (c = !0), scrollY > 400 && scrollY <= o.top - 100 && !c && s.classList.remove("anim")
                }), !1)
            }
            var d = document.querySelectorAll(".tariffs .tablepress");
            if (d) for (var u = 0; u < d.length; u++) for (var v = d[u].querySelectorAll("tbody > tr"), p = 0; p < v.length; p++) p > 9 && v[p].classList.add("hidden");
            var m = document.querySelector(".why"), f = document.querySelectorAll(".why-item__num");
            if (m && f) for (var y = 0; y < f.length; y++) f[y].innerHTML = y + 1;
            var g = document.querySelector(".js-tariffs-more"), h = !1;
            document.addEventListener("click", (function (e) {
                if (e.target && e.target.classList.contains("js-tariffs-more")) {
                    e.preventDefault();
                    var t = document.querySelector(".js-tariffs-tab.active .js-tariffs-subtab.active > table");
                    if (t) {
                        var r = t.querySelectorAll("tbody > tr");
                        if (r && r.length > 9) {
                            for (var n = 10; n < r.length; n++) r[n].classList.toggle("hidden");
                            h ? (g.innerHTML = "Показать ещё", h = !1) : (g.innerHTML = "Скрыть", h = !0)
                        }
                    }
                }
            }));
            var w = document.querySelector(".js-rating"), b = document.querySelector("#js-rating"),
                L = document.querySelectorAll(".js-rating > li");
            w && w.addEventListener("click", (function (e) {
                e.preventDefault();
                var t = e.target;
                if (t && "LI" == t.tagName) {
                    for (var r = 0; r < L.length; r++) L[r].classList.remove("active");
                    for (var n = 0; function (e) {
                        return L.length
                    }; n++) {
                        if (L[n] == t) return L[n].classList.add("active"), void (b.value = ++n);
                        L[n].classList.add("active")
                    }
                }
            }))
        }), !1);
        r(325)
    }
});


window.addEventListener('load', function () {
    if (document.querySelector('.hero-banner')) {
        document.querySelector('.hero-banner').classList.add('active');
    }
})

var scrollPos = 0;
$(window).scroll(function () {
    var st = $(this).scrollTop();
    if (st > scrollPos) {
        // $('#result').html('Вниз');
        // $('.hero-banner').addClass('hidden');
        // $('.hero-banner').hide('slow');
    } else {
        // $('.hero-banner').removeClass('hidden');
        // $('.hero-banner').show('slow');
    }
    scrollPos = st;
});


$(document).ready(function () {
    setTimeout(function () {
        window.scrollTo(0, 0);
    }, 1);
});


// const animItems = document.querySelector('._anim-items');
//
// if(animItems.length > 0) {
//     window.addEventListener('scroll', animOnScroll);
//
//     function animOnScroll(params) {
//         for (let index = 0; index < array.length; index++) {
//             const animItem = animItems[index];
//             const animItemHeight = animItem.offsetHeight;
//             const animItemOffset = offset(animItem).top;
//             const animStart = 4;
//
//             let animItemPoint = window.innerHeight - animItemHeight / animStart;
//             if(animItemHeight > window.innerHeight) {
//                 animItemPoint = window.innerHeight - window.innerHeight / animStart;
//             }
//
//             if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
//                 animItem.classList.add('.active');
//             } else {
//                 animItem.classList.remove('.active');
//             }
//         }
//     }
//
//     function offset(el) {
//         const rect  = el.getBoundingClientRect(),
//             scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
//             scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//
//             return { top: rect.top + scrollTop, left: rec.left + scrollLeft}
//     }
// }