@charset "UTF-8";

/********* public:extra.less ********/
.message-signature{max-height:300px;overflow:hidden}.bbWrapper{overflow-x:auto;overflow-y:auto}.structItemContainer-group.structItemContainer-group--sticky>div.structItem{background-color:#f5f5f5}.structItem--thread.is-deleted{background-color:#fde9e9}.fr-box.fr-basic .fr-element.fr-view{font-family:Georgia,Serif}.notice--status{color:#0b0a07;background:#e9e8e6;border-width:1px;border-style:solid;border-top-color:#dfdfdf;border-right-color:#d8d8d8;border-bottom-color:#cbcbcb;border-left-color:#d8d8d8}.notice--status:has(> .notice-content > details[open])::after{content:"\f071";font-family:'Font Awesome 5 Pro';font-weight:900;font-size:75px;position:absolute;top:2%;right:2%;opacity:0.2;pointer-events:none}.notice--status td{vertical-align:top}.notice--status tr>td:first-child{font-weight:bold;padding-right:5px}.notice--status summary,.notice--status h2{margin:0;text-transform:uppercase;text-align:center;font-size:1.3em;font-weight:bold;display:block}.notice--status summary:hover{text-decoration:underline;cursor:pointer}.notice--status p{margin:0}.notice--status h2>a{color:inherit}.notice--status-maintenance{border-color:#217dbb;background:#3498db}.notice--status-minor,.notice--status-major{border-color:#d68b09;background:#f5a61d}.notice--status-critical{border-color:#ec1818;background:#f04747;color:white}.rank-badge{padding:1px 4px;display:inline-block;background:#ccc;font-size:11px;margin-bottom:3px;text-transform:uppercase;vertical-align:middle;text-shadow:none}.rank-badge-admin,.rank-badge-owner{background-color:#bc4141;color:#fff}.rank-badge-moderator,.rank-badge-mod,.rank-badge-game_master,.rank-badge-gm{background-color:#3e7134;color:#fff}.rank-badge-helper,.rank-badge-jr_helper{background-color:#2e5c8b;color:#fff}.rank-badge-youtuber{border:1px solid #fff;box-shadow:0 0 0 1px #c60000;background-color:#c60000;color:#fff}.rank-badge-superstar,.rank-badge-GOLD{background-color:#e8983a;color:#453909}.rank-badge-mvp_plus,.rank-badge-mvp{background-color:#a1e8ec;color:#0a3a3d}.rank-badge-vip_plus,.rank-badge-vip{background-color:#98cd7c;color:#203f10}#forumGameDesc{flex:1;display:flex;align-items:center}@media (max-width:650px){#forumGameDesc{flex-flow:column}#forumGameDesc .gameFeaturedVideo{margin-left:0 !important}#forumGameDesc .artPane{display:none}}@media (min-width:650px){#forumGameDesc .gameFeaturedVideo{display:inline;position:absolute;margin-top:-54px}}#forumGameDesc h4{margin:0;padding-left:0;font-size:19px;font-family:Neuton,serif;font-weight:100;color:#e5bd58;text-shadow:0 0 3px #000;display:inline}#forumGameDesc p{margin-bottom:17px;font-size:19px;text-shadow:0 0 3px #000;font-family:Neuton,serif;color:#fff;font-weight:100;padding-right:30px}#forumGameDesc .gameFeaturedVideo a::before{content:" ";position:absolute;top:0;bottom:0;left:0;width:81.33px;border-radius:3px;background:rgba(0,0,0,0.5) url(/styles/hypixel-v2/images/play-video-button.png) no-repeat 50% 50%;background-size:40px;transition:background-color .1s}#forumGameDesc .gameFeaturedVideo a{display:inline-block;position:relative;height:61px;margin:20px 0 0;border-radius:3px;font-family:Neuton,Times;vertical-align:middle;overflow:hidden;cursor:pointer}#forumGameDesc .gameFeaturedVideo a img{display:inline-block;height:61px;border-radius:3px;margin-right:10px;vertical-align:middle}#forumGameDesc .gameFeaturedVideo a span{display:inline-block;height:61px;font-size:1.2rem;color:#e5bd58;text-shadow:0 0 3px #000;line-height:61px;vertical-align:middle;font-family:Neuton,Times}#forumGameDesc .artPane{float:right}#forumGameDesc .artPane img{height:100%;width:100%;object-fit:contain}#cinema{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.85);z-index:499;display:none}#featuredVideoModal.modal-wrapper{background:rgba(0,0,0,0.5)}#featuredVideoModal.modal-wrapper .dialog{padding:0;background:none;box-shadow:0 0 15px #000}#featuredVideoModal.modal-wrapper .dialog .close{top:0;right:-32px;color:#fff}.trailerContainer{display:none;position:absolute;width:635px;height:435px;right:20px;top:26px}.featuredItems{visibility:hidden !important;height:50px !important}.formRow--reportItem{border-top:1px solid #d8d8d8}.approvalQueue-item .formRow>dt{width:0% !important}@media screen and (min-width:1200px){.p-nav-list{overflow:hidden}}@media (max-width:650px){.p-staffBar-hideMobile{display:none}}@media (max-width:650px){.p-body-inner{padding:0 10px !important}}.template-hypixel_play_index .p-body-inner{max-width:1200px;padding:0 !important}@media screen and (max-width:1200px) and (min-width:650px){.p-nav{background-color:#e2ba60}.p-nav .p-nav-scroller .p-navEl::after{background:none !important}}@media screen and (max-width:1200px) and (min-width:650px){.p-nav{background-color:#e2ba60}.p-nav .p-nav-scroller .p-navEl::after{background:none !important}}html:is([data-template="thread_view"], [data-template="thread_view_type_article"], [data-template="thread_view_type_poll"], [data-template="thread_view_type_suggestion"], [data-template="thread_view_type_question"]) .message--post.is-official{border-color:#ffc02e;outline:1px solid #ffc02e;box-shadow:0 2px 5px rgba(231,135,27,0.3)}html:is([data-template="thread_view"], [data-template="thread_view_type_article"], [data-template="thread_view_type_poll"], [data-template="thread_view_type_suggestion"], [data-template="thread_view_type_question"]) .message--post.is-official::before{position:relative;content:"Official message from a member of the Hypixel Team";padding:6px 0px;display:block;background:#fff5df;border-top-left-radius:3px;border-top-right-radius:3px;outline:1px solid #ffc02e;border:10px solid #fff5df;border-left-width:17px;border-right-width:17px;z-index:1;background-image:url(https://hypixel.net/styles/hypixel-v2/images/header-logo.png);background-size:contain;background-repeat:no-repeat;background-position:right;font-family:Arial,sans-serif;font-size:15px;font-weight:400;letter-spacing:0.01em}html:is([data-template="thread_view"], [data-template="thread_view_type_article"], [data-template="thread_view_type_poll"], [data-template="thread_view_type_suggestion"], [data-template="thread_view_type_question"]) article:is([data-author="Appeals"]).message--post.is-official::before{content:"Official message from the Appeals Team at Hypixel"}html:is([data-template="thread_view"], [data-template="thread_view_type_article"], [data-template="thread_view_type_poll"], [data-template="thread_view_type_suggestion"], [data-template="thread_view_type_question"]) article:is([data-author="Hypixel Team"]).message--post.is-official::before{content:"Official message from the Hypixel Team"}@media (max-width:650px){html:is([data-template="thread_view"], [data-template="thread_view_type_article"], [data-template="thread_view_type_poll"], [data-template="thread_view_type_suggestion"], [data-template="thread_view_type_question"]) .message--post.is-official::before{background-image:none;border-radius:0}}.message-wrapper-context{outline:2px solid #ffc02e;border-radius:3px;margin:8px 0 8px 0;padding:6px;padding-top:0;background:#fff5df;border:10px solid #fff5df;box-shadow:0 2px 5px rgba(231,135,27,0.3)}.message-wrapper-context .message{border-color:#ffc02e;border-width:2px;box-shadow:0 1px 5px rgba(231,135,27,0.2);background-color:#fffbf3}.message-wrapper-context .message blockquote{display:none}.message-wrapper-context .message .message-attribution{min-width:150px}.message-wrapper-context .message .message-attribution .avatar{display:inline-block}.message-wrapper-context .message .message-body{width:inherit}.message-wrapper-context .message .message-body .bbWrapper{-webkit-line-clamp:3;-webkit-box-orient:vertical;display:-webkit-box;overflow:hidden;color:#000}.message-wrapper-context .message .message-body .bbWrapper br{display:none}.message-wrapper-context .message .message-body .bbWrapper br:after{content:" "}.message-wrapper-context .message-cell{display:flex;flex-direction:row;justify-content:flex-start;align-items:flex-start;gap:10px}.message-wrapper-context:before{position:relative;content:"Members of the Hypixel Team added context you might be interested in";display:block;background:inherit;border:6px solid #fff5df;border-top-width:2px;border-bottom-width:12px;border-top-left-radius:inherit;border-top-right-radius:inherit;z-index:1;background-image:url(https://hypixel.net/styles/hypixel-v2/images/header-logo.png);background-size:contain;background-repeat:no-repeat;background-position:right;font-family:Arial,sans-serif;font-size:15px;font-weight:400;letter-spacing:0.01em;padding-bottom:inherit;padding-top:6px}@media (min-width:649px){div.message-wrapper-context .message-body{margin-top:0}}@media (max-width:650px){.message-wrapper-context{margin-left:-10px;margin-right:-10px;border-radius:0}.message-wrapper-context .message{margin-left:-15px;margin-right:-15px}.message-wrapper-context:before{background-image:none}}.block--category67 svg{display:none}.p-navgroup{background:none}.p-nav .p-nav-opposite .p-navgroup-link{padding:8px 10px}