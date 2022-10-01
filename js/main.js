!function(){"use strict";gsap.config({nullTargetWarn:!1}),window.App={},App.config={headroom:{enabled:!0,options:{classes:{initial:"headroom",pinned:"is-pinned",unpinned:"is-unpinned",top:"is-top",notTop:"is-not-top",bottom:"is-bottom",notBottom:"is-not-bottom",frozen:"is-frozen"}}},ajax:{enabled:!0},cursorFollower:{enabled:!1,disableBreakpoint:"992"}},App.html=document.querySelector("html"),App.body=document.querySelector("body"),App.SMcontroller=new ScrollMagic.Controller,window.onload=function(){CustomEase.create("quart.out","0.25, 1, 0.5, 1"),CustomEase.create("quart.inOut","0.76, 0, 0.24, 1"),s.init(),document.fonts.ready.then((function(){document.querySelector(".js-lazy")&&new LazyLoad({elements_selector:".js-lazy"}),o.init(),e.init(),t.init(),n.init(),function(){const e=document.querySelectorAll(".js-section-slider");if(e.length)for(let t=0;t<e.length;t++){const n=e[t];let o=n.querySelector(".js-prev"),i=n.querySelector(".js-next");n.getAttribute("data-nav-prev")&&(o=document.querySelector(`.${n.getAttribute("data-nav-prev")}`)),n.getAttribute("data-nav-next")&&(i=document.querySelector(`.${n.getAttribute("data-nav-next")}`));let r=0,s=!1,a=!1,c=!1,l=!1;if(n.getAttribute("data-gap")&&(r=n.getAttribute("data-gap")),n.hasAttribute("data-loop")&&(s=!0),n.hasAttribute("data-center")&&(a=!0),n.hasAttribute("data-pagination")){let e=n.querySelector(".js-pagination");n.getAttribute("data-pagination")&&(e=document.querySelector(`.${n.getAttribute("data-pagination")}`)),c={el:e,bulletClass:"pagination__item",bulletActiveClass:"is-active",bulletElement:"div",clickable:!0}}n.hasAttribute("data-scrollbar")&&(l={el:".js-scrollbar",draggable:!1});const d=n.getAttribute("data-slider-cols").split(" ");let u=1,m=1,p=1,g=1,f=1;d.forEach((e=>{e.includes("base")&&(u=e.slice(-1)),e.includes("xl")&&(m=e.slice(-1)),e.includes("lg")&&(p=e.slice(-1)),e.includes("md")&&(g=e.slice(-1)),e.includes("sm")&&(f=e.slice(-1))})),new Swiper(n,{speed:600,autoHeight:!0,spaceBetween:parseInt(r),centeredSlides:a,parallax:!0,watchSlidesVisibility:!0,loop:s,loopAdditionalSlides:1,preloadImages:!1,lazy:!0,scrollbar:l,pagination:c,slidesPerView:parseInt(u),breakpoints:{1199:{slidesPerView:parseInt(m)},991:{slidesPerView:parseInt(p)},767:{slidesPerView:parseInt(g)},574:{slidesPerView:parseInt(f)}},lazy:{loadPrevNext:!0},navigation:{prevEl:o,nextEl:i}})}}(),feather.replace(),function(){const e=document.querySelector(".js-countdown");if(!e)return;const t=new Date("Jan 5, 2023 15:37:25").getTime();setInterval((function(){const n=(new Date).getTime(),o=t-n,i=Math.floor(o/864e5),r=Math.floor(o%864e5/36e5),s=Math.floor(o%36e5/6e4),a=Math.floor(o%6e4/1e3);e.querySelector(".js-countdown-days").innerHTML=i,e.querySelector(".js-countdown-hours").innerHTML=r,e.querySelector(".js-countdown-minutes").innerHTML=s,e.querySelector(".js-countdown-seconds").innerHTML=a}),1e3)}(),function(){const e=document.querySelector(".js-header");if(!e)return;let t=[];e.getAttribute("data-add-bg")&&(t=e.getAttribute("data-add-bg"));const n=new ScrollMagic.Scene({offset:"6px"});n.setClassToggle(e,t),n.addTo(App.SMcontroller)}(),function(){const e=document.querySelectorAll(".js-dropdown");e&&e.forEach((e=>{const t=e.querySelectorAll(".js-dropdown-list .js-dropdown-link"),n=e.querySelector(".js-dropdown-title");t.forEach((e=>{e.addEventListener("click",(t=>{t.preventDefault(),n.innerHTML=e.innerHTML;const o=document.querySelectorAll(".js-click-dropdown.-is-el-visible");o&&o.forEach((e=>{e.classList.remove("-is-el-visible")}));const i=document.querySelectorAll(".-is-dd-active");i&&i.forEach((e=>e.classList.remove("-is-dd-active")))}))}))}))}(),function(){const e=document.querySelector(".js-shop-slider .js-slider-slider"),t=new Swiper(e,{spaceBetween:0,speed:1e3,parallax:!0,lazy:{loadPrevNext:!0},breakpoints:{575:{parallax:!1}}}),n=document.querySelectorAll(".js-shop-slider .js-slider-pagination > *");t.on("slideChangeTransitionStart",(function(){n[t.activeIndex].classList.add("is-active")}));for(let e=0;e<n.length;e++)n[e].addEventListener("click",(n=>{t.slideTo(e)}))}(),function(){const e=document.querySelectorAll(".js-input-counter");e&&e.forEach((e=>{const t=e.querySelector("input");var n=t.value;e.querySelector(".js-up").addEventListener("click",(()=>{t.focus(),n=parseInt(n)+1,t.value=n})),e.querySelector(".js-down").addEventListener("click",(()=>{t.focus(),n=(n=parseInt(n)-1)<0?0:n,t.value=n}))}))}(),function(){const e=document.querySelector("#map");if(!e)return;const t=L.map(e).setView([51.505,-.09],13);L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(t),L.marker([51.5,-.09]).addTo(t).openPopup()}(),function(){const e=document.getElementById("lineChart");e&&new Chart(e,{type:"line",data:{labels:["Jan","Feb","Marc","April","May","Jun","July","Agust","Sept","Oct","Now","Dec"],datasets:[{label:"#",data:[148,100,205,110,165,145,180,156,148,220,180,245],tension:.4,backgroundColor:"#336CFB",borderColor:"#336CFB",borderWidth:2}]},options:{responsive:!0,plugins:{legend:{display:!1}},scales:{y:{min:0,max:300,ticks:{stepSize:50}}}}})}(),function(){const e=document.getElementById("pieChart");e&&new Chart(e,{type:"pie",data:{labels:["Direct","Referal","Organic"],datasets:[{label:"#",data:[40,28,32]}]},options:{cutout:"75%",plugins:{legend:{position:"left"}},elements:{arc:{backgroundColor:"#336CFB",hoverBackgroundColor:"#556CFB"}}}})}(),function(){const e=document.querySelectorAll("[data-el-toggle]");e&&e.forEach((e=>{const t=e.getAttribute("data-el-toggle"),n=document.querySelector(t),o=e.getAttribute("data-el-toggle-active"),i=document.querySelector(o);e.addEventListener("click",(()=>{const e=document.querySelectorAll(".js-click-dropdown.-is-el-visible");e&&e.forEach((e=>e.classList.remove("-is-el-visible")));const t=document.querySelectorAll(".-is-dd-active");t&&t.forEach((e=>e.classList.remove("-is-dd-active"))),n.classList.toggle("-is-el-visible"),i&&i.classList.toggle("-is-dd-active")}))}))}(),function(){const e=document.documentElement,t=document.querySelectorAll("[data-maximize]");if(!t)return;let n=!1;const o=()=>{n=!1,document.exitFullscreen?document.exitFullscreen():document.webkitExitFullscreen?document.webkitExitFullscreen():document.msExitFullscreen&&document.msExitFullscreen()},i=()=>{n=!0,e.requestFullscreen?e.requestFullscreen():e.webkitRequestFullscreen?e.webkitRequestFullscreen():e.msRequestFullscreen&&e.msRequestFullscreen()};t.forEach((e=>{e.addEventListener("click",(()=>{n?o():i()}))}))}(),document.querySelectorAll(".js-mouse-move-container").forEach((e=>{const t=e;e.querySelectorAll(".js-mouse-move").forEach((e=>{const n=e.getAttribute("data-move");document.addEventListener("mousemove",(o=>{const i=o.pageX-t.offsetLeft,r=o.pageY-t.offsetTop;gsap.to(e,{x:(i-t.offsetWidth/2)/t.offsetWidth*n,y:(r-t.offsetHeight/2)/t.offsetHeight*n,duration:.2})}))}))})),new Swiper(".js-mainSlider",{speed:800,parallax:!0,lazy:{loadPrevNext:!0},navigation:{prevEl:".js-prev",nextEl:".js-next"}}),document.querySelector("[data-parallax]")&&document.querySelectorAll("[data-parallax]").forEach((e=>{jarallax(e,{speed:e.getAttribute("data-parallax"),imgElement:"[data-parallax-target]"})})),function(){const e=new Swiper(".js-testimonials-slider",{speed:700,loop:!0,lazy:{loadPrevNext:!0}}),t=document.querySelectorAll(".js-testimonials-slider .js-testimonials-pagination > * > *");t.forEach(((t,n)=>{t.addEventListener("click",(()=>{document.querySelector(".js-testimonials-slider .js-testimonials-pagination .is-active").classList.remove("is-active"),t.classList.add("is-active"),e.slideTo(n+1)}))})),e.on("slideChangeTransitionEnd",(()=>{document.querySelector(".js-testimonials-slider .js-testimonials-pagination .is-active").classList.remove("is-active"),t[e.realIndex].classList.add("is-active")}))}(),new Swiper(".js-testimonials-slider-2",{speed:800,effect:"cards",cardsEffect:{slideShadows:!0},grabCursor:!0,lazy:{loadPrevNext:!0},navigation:{prevEl:".js-prev",nextEl:".js-next"},pagination:{el:".js-pagination",bulletClass:"pagination__item",bulletActiveClass:"is-active",bulletElement:"div",clickable:!0}}),document.querySelector("#js-masthead-1-particles")&&particlesJS("js-masthead-1-particles",{particles:{number:{value:20,density:{enable:!1,value_area:200}},color:{value:["#00ff96","#0044EB","#1A3454"]},shape:{type:"circle",stroke:{width:0,color:"#000000"},polygon:{nb_sides:5}},opacity:{value:.5,random:!1,anim:{enable:!1,speed:1,opacity_min:.1,sync:!1}},size:{value:6,random:!0,anim:{enable:!1,speed:20,size_min:.1,sync:!1}},line_linked:{enable:!1,distance:150,color:"#ffffff",opacity:.4,width:1},move:{enable:!0,speed:2,direction:"none",random:!1,straight:!1,out_mode:"bounce",bounce:!1,attract:{enable:!1,rotateX:600,rotateY:1200}}},interactivity:{detect_on:"canvas",events:{onhover:{enable:!1,mode:"repulse"},onclick:{enable:!1,mode:"push"},resize:!1},modes:{grab:{distance:400,line_linked:{opacity:1}},bubble:{distance:400,size:40,duration:2,opacity:8,speed:3},repulse:{distance:200,duration:.4},push:{particles_nb:4},remove:{particles_nb:2}}},retina_detect:!0}),function(){const e=document.querySelectorAll(".js-pin-container");e&&e.forEach((e=>{const t=e.offsetHeight,n=e.querySelector(".js-pin-content").offsetHeight+70,o=new ScrollMagic.Scene({duration:t-n,offset:n,triggerElement:e,triggerHook:"onEnter"}).setPin(".js-pin-content").addTo(App.SMcontroller);(window.innerWidth>0?window.innerWidth:screen.width)<992?(o.duration("1px"),o.refresh()):(o.duration(t-n),o.refresh()),window.addEventListener("resize",(()=>{(window.innerWidth>0?window.innerWidth:screen.width)<992?(o.duration("1px"),o.refresh()):(o.duration(t-n),o.refresh())}))}))}(),function(){const e=document.querySelectorAll(".js-scroll-to-id");e.length&&e.forEach((e=>{e.addEventListener("click",(t=>{t.preventDefault();const n=e.getAttribute("href"),o=document.querySelector(`#${n.slice(1)}`);document.querySelector(".is-pin-active")&&document.querySelector(".is-pin-active").classList.remove("is-pin-active"),e.classList.add("is-pin-active"),gsap.to(window.document.documentElement,{duration:.6,ease:"linear",scrollTo:o.offsetTop-60})}))}))}(),function(){const e=document.querySelectorAll(".js-selectize");if(!e)return;e.forEach((function(e){NiceSelect.bind(e)}));const t=document.querySelectorAll(".js-selectize-seachable");t&&t.forEach((function(e){NiceSelect.bind(e,{searchable:!0})}))}(),function(){const e=document.querySelector(".js-dashboard-home-9-sidebar-toggle");if(!e)return;const t=document.querySelector(".js-dashboard-home-9");e.addEventListener("click",(()=>{t.classList.toggle("-is-sidebar-hidden")}))}(),function(){const e=document.querySelector(".js-darkmode-toggle");e&&e.addEventListener("click",(()=>App.html.classList.toggle("-dark-mode")))}(),function(){const e=document.querySelector(".js-sidebar-calendar");e&&e.querySelectorAll(".js-button").forEach((t=>{t.addEventListener("click",(()=>{e.querySelector(".-is-active").classList.remove("-is-active"),t.classList.add("-is-active")}))}))}(),function(){const e=document.querySelector(".js-dsbh-sidebar-menu");e&&e.querySelectorAll("[data-sidebar-menu-target]").forEach((t=>{t.addEventListener("click",(()=>{const n=t.getAttribute("data-sidebar-menu-target"),o=e.querySelector(`[data-sidebar-menu-open="${n}"]`);e.querySelector(".-sidebar-menu-opened").classList.remove("-sidebar-menu-opened"),o.classList.add("-sidebar-menu-opened");const i=e.querySelector(`[data-sidebar-menu-button="${n}"]`);e.querySelector(".-is-button-active").classList.remove("-is-button-active"),i.classList.add("-is-button-active")}))}))}(),function(){if(!document.querySelector(".js-dashboard-home-9"))return;const e=()=>{(window.innerWidth>0?window.innerWidth:screen.width)<992?document.querySelector(".js-dashboard-home-9").classList.add("-is-sidebar-hidden"):document.querySelector(".js-dashboard-home-9").classList.remove("-is-sidebar-hidden")};e(),window.addEventListener("resize",(()=>e()))}(),GLightbox({selector:".js-gallery",touchNavigation:!0,loop:!1,autoplayVideos:!0}),function(e){let t=gsap.timeline();t.preloaderInitial(),t=i.init(t)}()}))},window.onclick=function(e){if(!e.target.classList.contains("dropdown__button")&&!e.target.classList.contains("js-dropdown-title")){const e=document.querySelectorAll(".js-click-dropdown.-is-el-visible");e&&e.forEach((e=>{e.classList.remove("-is-el-visible")}));const t=document.querySelectorAll(".-is-dd-active");t&&t.forEach((e=>e.classList.remove("-is-dd-active")))}};const e={init:function(){const e=document.querySelectorAll(".js-accordion");if(e)for(let t=0;t<e.length;t++){const n=e[t].querySelectorAll(".accordion__item");for(let e=0;e<n.length;e++){const t=n[e].querySelector(".accordion__button"),o=n[e].querySelector(".accordion__content");n[e].classList.contains("js-accordion-item-active")&&(n[e].classList.toggle("is-active"),o.style.maxHeight=o.scrollHeight+"px"),t.addEventListener("click",(t=>{n[e].classList.toggle("is-active"),o.style.maxHeight?o.style.maxHeight=null:o.style.maxHeight=o.scrollHeight+"px"}))}}}},t={init:function(){const e=document.querySelectorAll(".js-show-more");e&&e.forEach(((e,t)=>{const n=e.querySelector(".show-more__button"),o=e.querySelector(".show-more__content");n.addEventListener("click",(t=>{e.classList.toggle("is-active"),o.style.maxHeight?o.style.maxHeight=null:o.style.maxHeight=o.scrollHeight+"px"}))}))}},n={init:function(){const e=document.querySelectorAll(".js-tabs");e&&e.forEach((e=>{!function(e){const t=e.querySelector(".js-tabs-controls"),n=e.querySelectorAll(".js-tabs-controls .js-tabs-button"),o=e.querySelector(".js-tabs-content");for(let e=0;e<n.length;e++){const i=n[e];i.addEventListener("click",(e=>{const n=i.getAttribute("data-tab-target");t.querySelector(".is-active").classList.remove("is-active"),o.querySelector(".is-active").classList.remove("is-active"),i.classList.add("is-active"),o.querySelector(n).classList.add("is-active")}))}}(e)}))}};const o=function(){let e,t,n,o,i=gsap.timeline();function r(e,t,o){let r=e.children;r=Array.from(r);const s=r.map((e=>e.querySelector("li > a")));let a=t.children;a=Array.from(a);const c=a.map((e=>e.querySelector("li > a")));(window.innerWidth>0?window.innerWidth:screen.width)<1199&&(i.clear(),o||gsap.to(n,{ease:"quart.inOut",duration:.6,opacity:0}),i.to(s,{ease:"quart.out",stagger:-.04,duration:.8,y:"100%",onStart:()=>{t.classList.add("-is-active")},onComplete:()=>{e.classList.remove("-is-active")}}),o&&i.to(n,{ease:"quart.inOut",duration:.6,y:"0px",opacity:1},">-0.5"),i.to(c,{ease:"quart.out",stagger:.08,duration:.9,y:"0%"},">-0.6"))}return{headerSticky:function(){const e=document.querySelector(".js-header");if(!e)return;let t="is-sticky";e.getAttribute("data-add-bg")&&(t=e.getAttribute("data-add-bg"),t=`${t} is-sticky`),new ScrollMagic.Scene({offset:"6px"}).setClassToggle(e,t).addTo(App.SMcontroller)},init:function(){e=document.querySelector(".js-navList"),t=document.querySelectorAll(".js-navList > li > a"),n=document.querySelectorAll(".js-nav-list-back"),o=0,function(){const t=document.querySelectorAll(".js-navList .menu-item-has-children");if(!t.length)return;n.forEach((t=>{t.addEventListener("click",(()=>{const t=e.querySelector("ul.-is-active"),n=t.parentElement.parentElement;o--,r(t,n,o,n.parentElement.querySelector("li > a").innerHTML)}))})),t.forEach((e=>{const t=e.querySelector("li > a");t.removeAttribute("href"),t.addEventListener("click",(()=>{const n=e.parentElement,i=e.lastElementChild;console.log(i),o++,r(n,i,o,t.innerHTML)}))}))}()}}}(),i={init:function(e){return function(e){e.add((()=>{r.init()}))}(e),e}};const r=function(){function e(e){let t,n,o;t=e.getAttribute("data-anim")?e.getAttribute("data-anim"):e.getAttribute("data-anim-child"),t.includes("delay-")&&(o=t.split(" ").pop(),n=o.substr(o.indexOf("-")+1)/10),t.includes("counter")?function(e,t=0){const n=e.getAttribute("data-counter"),o=e.getAttribute("data-counter-add"),i=t;let r="",s={count:0};const a=e.querySelector(".js-counter-num");o&&(r=o);gsap.to(s,{count:n,delay:i,duration:1.8,ease:"power3.inOut",onUpdate:function(){a.innerHTML=Math.round(s.count)+r}})}(e,n):t.includes("line-chart")?function(e,t=0){const n=e.getAttribute("data-percent");gsap.fromTo(e.querySelector(".js-bar"),{scaleX:0},{delay:.45+t,duration:1,ease:"power3.inOut",scaleX:n/100});let o={count:0};const i=e.querySelector(".js-number");gsap.to(o,{count:n,delay:.45+t,duration:1,ease:"power3.inOut",onUpdate:function(){i.innerHTML=Math.round(o.count)}})}(e,n):t.includes("pie-chart")?function(e,t=0){const n=e.getAttribute("data-percent"),o=e.querySelector(".js-chart-bar");n<0&&(n=0);n>100&&(n=100);gsap.fromTo(o,{drawSVG:"0%"},{delay:.3+t,duration:1.4,ease:"power3.inOut",drawSVG:`${n}%`,onStart:()=>{o.classList.remove("bar-stroke-hidden")}});let i={count:0};const r=e.querySelector(".js-chart-percent");gsap.to(i,{count:n,delay:.45+t,duration:1,ease:"power3.inOut",onUpdate:function(){r.innerHTML=Math.round(i.count)+"%"}})}(e,n):t.includes("split-lines")?function(e,t=0){const n=e.querySelectorAll(".split__line");gsap.to(n,{delay:t,stagger:.05,duration:1.2,ease:"power2.out",y:"0%"})}(e,n):e.classList.add("is-in-view")}return{init:function(){!function(){const t=document.querySelectorAll("[data-anim]");if(t.length)for(let n=0;n<t.length;n++){const o=t[n];new ScrollMagic.Scene({offset:"350px",triggerElement:o,triggerHook:"onEnter",reverse:!1}).on("enter",(function(t){e(o)})).addTo(App.SMcontroller)}}(),function(){const t=document.querySelectorAll("[data-anim-wrap]");if(t.length)for(let n=0;n<t.length;n++){const o=t[n];new ScrollMagic.Scene({offset:"350px",triggerElement:o,triggerHook:"onEnter",reverse:!1}).on("enter",(function(t){const n=o.querySelectorAll("[data-anim-child]");o.classList.add("animated"),n.forEach((t=>e(t)))})).addTo(App.SMcontroller)}}()}}}();const s=function(){const e=document.querySelector(".js-preloader"),t=e.querySelector(".preloader__bg");return{init:function(){e&&(gsap.registerEffect({name:"preloaderInitial",effect:(e,n)=>{document.documentElement.classList.add("html-overflow-hidden");const o=gsap.timeline();return document.body.classList.contains("preloader-visible")?o.to(t,{ease:"quart.inOut",duration:.6,scaleY:0,onComplete:()=>{document.documentElement.classList.remove("html-overflow-hidden")}}):(document.documentElement.classList.remove("html-overflow-hidden"),o)},extendTimeline:!0}),gsap.registerEffect({name:"preloaderShow",effect:(n,o)=>{const i=gsap.timeline();return e?i.to(t,{ease:"quart.inOut",duration:.6,scaleY:1,onStart:()=>{t.classList.remove("origin-bottom"),document.documentElement.classList.add("html-overflow-hidden")}}):i},extendTimeline:!0}),gsap.registerEffect({name:"preloaderHide",effect:(e,n)=>gsap.timeline().to(t,{ease:"quart.inOut",duration:.6,delay:.1,scaleY:0,onStart:()=>{t.classList.add("origin-bottom")},onComplete:()=>{document.documentElement.classList.remove("html-overflow-hidden"),document.documentElement.classList.remove("overflow-hidden"),document.body.classList.remove("overflow-hidden")}}),extendTimeline:!0}))}}}()}();
mybutton = document.getElementById("scroll");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}