var A=Object.defineProperty,L=Object.defineProperties;var j=Object.getOwnPropertyDescriptors;var x=Object.getOwnPropertySymbols;var E=Object.prototype.hasOwnProperty,I=Object.prototype.propertyIsEnumerable;var $=(o,e,a)=>e in o?A(o,e,{enumerable:!0,configurable:!0,writable:!0,value:a}):o[e]=a,y=(o,e)=>{for(var a in e||(e={}))E.call(e,a)&&$(o,a,e[a]);if(x)for(var a of x(e))I.call(e,a)&&$(o,a,e[a]);return o},k=(o,e)=>L(o,j(e));import{_ as p,o as f,c as _,a as h,b as s,r as v,d as m,w as b,e as d,f as T,g as V,h as w,t as F,i as J,j as z,v as B,k as G,l as N,m as U,s as M}from"./vendor.83f7746d.js";const W=function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const n of document.querySelectorAll('link[rel="modulepreload"]'))t(n);new MutationObserver(n=>{for(const l of n)if(l.type==="childList")for(const r of l.addedNodes)r.tagName==="LINK"&&r.rel==="modulepreload"&&t(r)}).observe(document,{childList:!0,subtree:!0});function a(n){const l={};return n.integrity&&(l.integrity=n.integrity),n.referrerpolicy&&(l.referrerPolicy=n.referrerpolicy),n.crossorigin==="use-credentials"?l.credentials="include":n.crossorigin==="anonymous"?l.credentials="omit":l.credentials="same-origin",l}function t(n){if(n.ep)return;n.ep=!0;const l=a(n);fetch(n.href,l)}};W();const H={name:"Rightbar"},O={class:"flex flex-wrap shadow-lg px-4 py-1 justify-center"},q=h('<div class="w-full mt-2 shadow-md py-1 text-center"><div class="flex justify-center items-center"><div class="mr-4"><a class="text-gray-600" href="#"><span><i class="fas fa-phone-volume fa-2x"></i></span></a></div><div>Telefone: (13) 3354-2278 <br>Celular: (13) 99779-1954</div></div></div>',1),D=s("div",{class:"w-full mt-2 shadow-md py-1 text-center"},[s("div",{class:"widget plugin-facebook mx-auto"},[s("iframe",{src:"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flsstarincorporadora%2F&tabs=timeline&width=320&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId",height:"450",style:{border:"none",overflow:"hidden"},scrolling:"no",frameborder:"0",allowTransparency:"true",allow:"encrypted-media"})])],-1),K=[q,D];function Q(o,e,a,t,n,l){return f(),_("div",O,K)}var X=p(H,[["render",Q]]);const Y={name:"Leftbar"},Z={class:"flex flex-wrap shadow-lg p-4 mx-2 justify-center text-center sm:text-center md:text-left lg:text-left"},ee={class:"navbar w-full"},se={class:"sidebar-nav-item"},te=d("P\xE1gina In\xEDcial"),ae=h('<li class="sidebar-nav-item">Quem somos</li><li class="sidebar-nav-item">Projetos Realizados</li><li class="sidebar-nav-sub-item">1 - Av. Cai\xE7aras</li><li class="sidebar-nav-sub-item">2 - Rua Ezio da Gama</li><li class="sidebar-nav-sub-item">3 - Rua Julio Pedro Pontes</li><li class="sidebar-nav-sub-item">4 - Rua Edivaldo Pires</li><li class="sidebar-nav-sub-item">5 - Av. Adriano Dias</li><li class="sidebar-nav-sub-item">6 - Rua Arilene Farinazzo</li><li class="sidebar-nav-item">Im\xF3veis \xE0 venda</li>',9),oe={class:"sidebar-nav-sub-item"},ne=d("7 - Jardim Las Palmas"),le=h('<li class="sidebar-nav-sub-item">8 - Att\xEDlio Gelsomini</li><li class="sidebar-nav-item">Projetos Futuros</li><li class="sidebar-nav-sub-item">9 - Rua S\xE3o Paulo - Enseada</li><li class="sidebar-nav-sub-item">10 - Rua Rio Grande do Sul</li><li class="sidebar-nav-sub-item">11 - Chacar\xE1 Jo\xE3o de Barro</li>',5),ie={class:"sidebar-nav-item"},re=d("Contato"),ce=h('<div class="w-full sm:w-1/2 md:w-full shadow-md py-1 mt-4"><div class="flex text-center"><div class="w-1/4"><a class="text-blue-600" target="_blank" href="https://www.facebook.com/lsstarincorporadora/?ref=bookmarks"><span class="icon-social-media-header"><i class="fab fa-facebook-square fa-2x"></i></span></a></div><div class="w-1/4"><a class="text-red-600" target="_blank" href="https://www.instagram.com/lsstarincorporadora/"><span class="icon-social-media-header"><i class="fab fa-instagram fa-2x"></i></span></a></div><div class="w-1/4"><a class="text-orange-600" href="{{url(&#39;/contato&#39;)}}"><span class="icon-social-media-header"><i class="far fa-envelope fa-2x"></i></span></a></div><div class="w-1/4"><a class="text-green-600 link-whatsapp btn" href="whatsapp://send?phone=5513997791954"><span class="icon-social-media-header"><i class="fab fa-whatsapp fa-2x"></i></span></a></div></div></div>',1);function de(o,e,a,t,n,l){const r=v("router-link");return f(),_("div",Z,[s("nav",ee,[s("ul",null,[s("li",se,[m(r,{to:"/"},{default:b(()=>[te]),_:1})]),ae,s("li",oe,[m(r,{to:"/laspalmas"},{default:b(()=>[ne]),_:1})]),le,s("li",ie,[m(r,{to:"/contato"},{default:b(()=>[re]),_:1})])])]),ce])}var ue=p(Y,[["render",de]]);const me={},pe={class:"flex mt-4"},fe=s("div",{class:"w-full text-center shadow-lg p-4 mx-2 border-t"},[s("span",{class:"font-bold"},"Adm"),d(" - Av. dos Cai\xE7aras, 31 - CEP: 11420-440 - Jardim Guai\xFAba - Guaruj\xE1 - SP "),s("br"),s("span",{class:"text-blue-800"},"Telefone"),d(": (13) 3354-2278 / "),s("span",{class:"text-blue-800"},"Celular"),d(": (13) 99779-1954 ")],-1),_e=[fe];function ve(o,e,a,t,n,l){return f(),_("div",pe,_e)}var he=p(me,[["render",ve]]);const be={name:"Main",components:{Rightbar:X,Leftbar:ue,Footer:he}},we={class:"flex justify-center"},ge={class:"w-full sm:w-full md:w-full lg:w-full xl:w-10/12"},xe={class:"flex flex-wrap justify-center"},$e={class:"sm:w-full md:w-1/3 lg:w-1/5"},ye={class:"sm:w-full md:w-2/3 lg:w-3/5 shadow-lg px-2 pb-2"};function ke(o,e,a,t,n,l){const r=v("Leftbar"),c=v("Footer");return f(),_("div",we,[s("div",ge,[s("div",xe,[s("div",$e,[m(r)]),s("div",ye,[T(o.$slots,"main")]),m(c)])])])}var Ce=p(be,[["render",ke]]);const Se={name:"App",components:{Main:Ce}};function Re(o,e,a,t,n,l){const r=v("router-view"),c=v("Main");return f(),V(c,null,{main:b(()=>[m(r)]),_:1})}var Pe=p(Se,[["render",Re]]);const Ae=localStorage.getItem("token"),Le=()=>{var o=w.create({baseURL:"http://lsstar.com.br/sistema/back/public/api/v1",headers:{Accept:"application/json","Content-Type":"multipart/form-data"}}),e=w.create({baseURL:"http://lsstar.com.br/sistema/back/public/api/v1"}),a=w.create({baseURL:"http://lsstar.com.br/sistema/back/public/api/v1",headers:{Authorization:"Bearer "+Ae,"Content-Type":"application/json"}});async function t(i){return a.get(i)}async function n(i,u){return a.post(i,u)}async function l(i,u){return a.put(i,u)}async function r(i,u){return a.patch(i,u)}async function c(i){return a.delete(i)}async function C(i,u){return o.post(i,u)}async function S(i){return console.log(i),i}async function R(i,u){return e.post(i,u)}async function P(i,u){return e.put(i,u)}return{get:t,post:n,put:l,patch:r,delet:c,getWithoutToken:S,postWithoutToken:R,putWithoutToken:P,postimage:C}},je=()=>{async function o(e){const a="/site/contato";return Le().postWithoutToken(a,e).then(t=>{if(t.data)return t.data}).catch(t=>{console.log(e),console.log(t.response)})}return{httpSendEmailContato:o}};var Ee="./assets/logo.05ee7540.png",Ie="./assets/banner-home.8cacd59b.png",Te="./assets/videolaspalmas.6ef59ded.mp4";const g=()=>{const{httpSendEmailContato:o}=je(),e=J({contato:{},logo:Ee,banner:Ie,video:Te,linkmapa:"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1288.6079629238022!2d-46.274691206548184!3d-24.005178528126653!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1613755467581!5m2!1spt-BR!2sbr"});function a(){return!e.contato.nome||!e.contato.email||!e.contato.mensagem?(alert("Campos vazios"),!1):!0}async function t(){a()&&await o(e.contato).then(n=>{n?(alert("E-mail enviado com sucesso"),e.contato={}):alert("Erro ao enviar e-mail")})}return k(y({},F(e)),{sendContato:t})},Ve={setup(){const{logo:o,banner:e,video:a}=g();return{logo:o,banner:e,video:a}}},Fe={class:"flex flex-wrap justify-center items-center mt-2"},Je={class:"w-full"},ze=["src"],Be={class:"flex flex-wrap justify-center mt-2 items-center bg-gray-500"},Ge={class:"sm:w-full md:w-1/2 lg:w-1/2"},Ne=["src"],Ue={class:"sm:w-full md:w-1/2 lg:w-1/2 mt-2 p-1"},Me={class:"black",loop:"",controls:"",autoplay:""},We=["src"],He=d(" Seu navegador n\xE3o tem suporte. ");function Oe(o,e,a,t,n,l){return f(),_("div",null,[s("div",Fe,[s("div",Je,[s("img",{src:t.logo,class:"mx-auto shadow-md",alt:"Ls Star Incorporadora"},null,8,ze)])]),s("div",Be,[s("div",Ge,[s("img",{src:t.banner,class:"mx-auto shadow-md",alt:"Ls Star Incorporadora"},null,8,Ne)]),s("div",Ue,[s("video",Me,[s("source",{src:t.video,type:"video/mp4"},null,8,We),He])])])])}var qe=p(Ve,[["render",Oe]]);const De={setup(){const{video:o,linkmapa:e}=g();return{video:o,linkmapa:e}}},Ke=s("div",{class:"flex flex-wrap justify-center shadow-lg my-2"},[s("div",{class:"w-full p-2 mx-2"},[s("h2",{class:"text-center text-blue-800 font-bold"},"Jardim Las Palmas"),s("div",{class:"text-center mt-2"},[s("p",null,[d(" Obras finalizadas."),s("br"),d(" Projeto - Arq. Jair Correia de Souza. ")]),s("p",null,[d(" Rua Jos\xE9 Ramos, 381 - Jardim Las Palmas - Ast\xFArias "),s("br"),d(" Guaruj\xE1 - SP, CEP: 11420-490 ")])])])],-1),Qe={class:"flex flex-wrap mt-2 bg-gray-100 items-center"},Xe={class:"sm:w-full md:w-1/2 lg:w-1/2"},Ye={class:"black",loop:"",controls:"",autoplay:""},Ze=["src"],es=d(" Seu navegador n\xE3o tem suporte. "),ss={class:"sm:w-full md:w-1/2 lg:w-1/2 p-1"},ts=["src"];function as(o,e,a,t,n,l){return f(),_("div",null,[Ke,s("div",Qe,[s("div",Xe,[s("video",Ye,[s("source",{src:t.video,type:"video/mp4"},null,8,Ze),es])]),s("div",ss,[s("iframe",{src:t.linkmapa,height:"100%"},null,8,ts)])])])}var os=p(De,[["render",as]]);const ns={setup(){const{contato:o,sendContato:e}=g();return{contato:o,sendContato:e}}},ls={class:"flex flex-wrap justify-center shadow-lg my-2"},is={class:"w-full p-2 mx-2"},rs=h('<h2 class="text-center text-blue-800 font-bold">Informa\xE7\xF5es de Contato</h2><div class="flex flex-wrap"><div class="w-full mt-1"><ul class="list-unstyled"><li><span class="text-blue-800">Adm</span><ul class="style-none ml-3"><li>Paulo Rogerio dos Santos - CRECI 163 496 F</li><li>Av. dos Cai\xE7aras, 31 - CEP: 11420-440</li><li>Jardim Guai\xFAba - Guaruj\xE1 - SP</li><li>Tel: (13) 3354-2278</li></ul></li></ul></div><div class="w-full mt-1"><ul class="list-unstyled"><li><span class="text-blue-800">E-mail</span><ul class="style-none ml-3"><li>lsstar@lsstar.com.br</li></ul></li></ul></div></div>',2),cs={class:"flex mt-2"},ds={class:"w-full"},us={class:"mt-1"},ms={class:"mt-1"};function ps(o,e,a,t,n,l){const r=v("SInputT");return f(),_("div",null,[s("div",ls,[s("div",is,[rs,s("div",cs,[s("div",ds,[s("div",us,[m(r,{name:"nome",modelValue:t.contato.nome,"onUpdate:modelValue":e[0]||(e[0]=c=>t.contato.nome=c),placeholder:"Seu nome * "},null,8,["modelValue"]),m(r,{name:"telefone",modelValue:t.contato.telefone,"onUpdate:modelValue":e[1]||(e[1]=c=>t.contato.telefone=c),placeholder:"Seu telefone *"},null,8,["modelValue"]),m(r,{name:"email",modelValue:t.contato.email,"onUpdate:modelValue":e[2]||(e[2]=c=>t.contato.email=c),placeholder:"Seu e-mail *"},null,8,["modelValue"])]),s("div",ms,[z(s("textarea",{name:"mensagem",cols:"40",rows:"2",placeholder:"Sua mensagem *",class:"form","onUpdate:modelValue":e[3]||(e[3]=c=>t.contato.mensagem=c)},null,512),[[B,t.contato.mensagem]])]),s("button",{class:"btn-blue",onClick:e[4]||(e[4]=c=>t.sendContato())},"ENVIAR")])])])])])}var fs=p(ns,[["render",ps]]);const _s=[{path:"/",name:"Home",component:qe},{path:"/laspalmas",name:"Las Palmas",component:os},{path:"/contato",name:"Contato",component:fs}],vs=G({history:N(),routes:_s});U(Pe).use(vs).use(M).mount("#app");