<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="logo.png" type="image/png">
    <title>home</title>
    <style>
  button {
    &.dark {
        --background: #2F3545;
        --shadow: 0 2px 8px -1px #{rgba(#151924, .32)};
        --shadow-hover: 0 4px 20px -2px #{rgba(#151924, .5)};
    }
    &.white {
        --background: #fff;
        --text: #275efe;
        --shadow: 0 2px 8px -1px #{rgba(#121621, .04)};
        --shadow-hover: 0 4px 20px -2px #{rgba(#121621, .12)};
    }
    &.fast {
        --duration: .32s;
    }
}

button {
    --background: #275efe;
    --text: #fff;
    --font-size: 16px;
    --duration: .44s;
    --move-hover: -4px;
    --shadow: 0 2px 8px -1px #{rgba(#275efe, .32)};
    --shadow-hover: 0 4px 20px -2px #{rgba(#275efe, .5)};
    --font-shadow: var(--font-size);
    padding: 16px 32px;
    font-family: 'Roboto';
    font-weight: 500;
    line-height: var(--font-size);
    border-radius: 24px;
    display: block;
    outline: none;
    appearance: none;
    border: none;
    text-decoration: none;
    font-size: var(--font-size);
    letter-spacing: .5px;
    background: var(--background);
    color: var(--text);
    box-shadow: var(--shadow);
    transform: translateY(var(--y)) translateZ(0);
    transition: transform var(--duration) ease, box-shadow var(--duration) ease;
    div {
        display: flex;
        overflow: hidden;
        text-shadow: 0 var(--font-shadow) 0 var(--text);
        span {
            display: block;
            backface-visibility: hidden;
            font-style: normal;
            transition: transform var(--duration) ease;
            transform: translateY(var(--m)) translateZ(0);
            $i: 1;
            @while $i < 12 {
                &:nth-child(#{$i}) {
                    transition-delay: $i / 20 + s;
                }
                $i: $i + 1;
            }
        }
    }
    &:hover {
        --y: var(--move-hover);
        --shadow: var(--shadow-hover);
        span {
            --m: calc(var(--font-size) * -1);
        }
    }
    &.reverse {
        --font-shadow: calc(var(--font-size) * -1);
        &:hover {
            span {
                --m: calc(var(--font-size));
            }
        }
    }
}
    </style>
</head>

<body>
<div class="app-container">
  <div class="app-left">
    <div class="app-left-header">
      <div class="app-logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <defs/>
          <path class="path-1" fill="#3eb798" d="M448 193.108h-32v80c0 44.176-35.824 80-80 80H192v32c0 35.344 28.656 64 64 64h96l69.76 58.08c6.784 5.648 16.88 4.736 22.528-2.048A16.035 16.035 0 00448 494.868v-45.76c35.344 0 64-28.656 64-64v-128c0-35.344-28.656-64-64-64z" opacity=".4"/>
          <path class="path-2" fill="#3eb798" d="M320 1.108H64c-35.344 0-64 28.656-64 64v192c0 35.344 28.656 64 64 64v61.28c0 8.832 7.168 16 16 16a16 16 0 0010.4-3.84l85.6-73.44h144c35.344 0 64-28.656 64-64v-192c0-35.344-28.656-64-64-64zm-201.44 182.56a22.555 22.555 0 01-4.8 4 35.515 35.515 0 01-5.44 3.04 42.555 42.555 0 01-6.08 1.76 28.204 28.204 0 01-6.24.64c-17.68 0-32-14.32-32-32-.336-17.664 13.712-32.272 31.376-32.608 2.304-.048 4.608.16 6.864.608a42.555 42.555 0 016.08 1.76c1.936.8 3.76 1.808 5.44 3.04a27.78 27.78 0 014.8 3.84 32.028 32.028 0 019.44 23.36 31.935 31.935 0 01-9.44 22.56zm96 0a31.935 31.935 0 01-22.56 9.44c-2.08.24-4.16.24-6.24 0a42.555 42.555 0 01-6.08-1.76 35.515 35.515 0 01-5.44-3.04 29.053 29.053 0 01-4.96-4 32.006 32.006 0 01-9.28-23.2 27.13 27.13 0 010-6.24 42.555 42.555 0 011.76-6.08c.8-1.936 1.808-3.76 3.04-5.44a37.305 37.305 0 013.84-4.96 37.305 37.305 0 014.96-3.84 25.881 25.881 0 015.44-3.04 42.017 42.017 0 016.72-2.4c17.328-3.456 34.176 7.808 37.632 25.136.448 2.256.656 4.56.608 6.864 0 8.448-3.328 16.56-9.28 22.56h-.16zm96 0a22.555 22.555 0 01-4.8 4 35.515 35.515 0 01-5.44 3.04 42.555 42.555 0 01-6.08 1.76 28.204 28.204 0 01-6.24.64c-17.68 0-32-14.32-32-32-.336-17.664 13.712-32.272 31.376-32.608 2.304-.048 4.608.16 6.864.608a42.555 42.555 0 016.08 1.76c1.936.8 3.76 1.808 5.44 3.04a27.78 27.78 0 014.8 3.84 32.028 32.028 0 019.44 23.36 31.935 31.935 0 01-9.44 22.56z"/>
        </svg>
      </div>
      <h1>QuickChat</h1>
    </div>
    <div class="app-profile-box">
      <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" alt="profile">
      <div class="app-profile-box-name">
        khawla kha
        <button class="app-setting">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-settings" viewBox="0 0 24 24">
            <defs/>
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/>
          </svg>
        </button>
      </div>
      <p class="app-profile-box-title">UI Designer</p>
      <div class="switch-status">
        <input type="checkbox" name="switchStatus" id="switchStatus" checked>
        <label class="label-toggle" for="switchStatus"></label>
        <span class="toggle-text toggle-online">Online</span>
        <span class="toggle-text toggle-offline">Offline</span>
      </div>
    </div>
    <div class="chat-list-wrapper">
      <div class="chat-list-header">Active Conversations <span class="c-number">4</span>
        <svg class="list-header-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="feather feather-chevron-up" viewBox="0 0 24 24">
          <defs/>
          <path d="M18 15l-6-6-6 6"/>
        </svg>
      </div>
      <ul class="chat-list active">
        <!-- list amis -->
        <!-- fin list amis -->
    </div>
    <div class="chat-list-wrapper">
      <div class="chat-list-header active">Achived Conversations <span class="c-number">3</span>
        <svg class="list-header-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="feather feather-chevron-up" viewBox="0 0 24 24">
          <defs/>
          <path d="M18 15l-6-6-6 6"/>
        </svg>
      </div>
      <ul class="chat-list">
        <!-- <li class="chat-list-item">
          <img src="https://images.unsplash.com/photo-1542042457485-a4c7afd74cd5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1270&q=80" alt="chat">
          <span class="chat-list-name">Toby Flenderson</span>
        </li>
        <li class="chat-list-item">
          <img src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjV8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="chat" class="h-28 w-28">
          <span class="chat-list-name">Kelly Kapoor</span>
        </li>
        <li class="chat-list-item">
          <img src="https://images.unsplash.com/photo-1528763380143-65b3ac89a3ff?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDExfHx8ZW58MHx8fA%3D%3D&auto=format&fit=crop&w=900&q=60" alt="chat">
          <span class="chat-list-name">Roy Andersson</span>
        </li> -->
      </ul>
    </div>
  </div>
  <div class="app-main">
    <div class="chat-wrapper">
      <div class="message-wrapper reverse">
        <img class="message-pp" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
           Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper reverse">
        <img class="message-pp" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper">
        <img class="message-pp" src="https://images.unsplash.com/photo-1587080266227-677cc2a4e76e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper">
        <img class="message-pp" src="https://images.unsplash.com/photo-1587080266227-677cc2a4e76e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit 
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper reverse">
        <img class="message-pp" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Lorem ipsum dolor sit amet
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper reverse">
        <img class="message-pp" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Lorem ipsum dolor
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper">
        <img class="message-pp" src="https://images.unsplash.com/photo-1587080266227-677cc2a4e76e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper">
        <img class="message-pp" src="https://images.unsplash.com/photo-1587080266227-677cc2a4e76e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit
          </div>
          <span>9h ago</span>
        </div>
      </div>
      <div class="message-wrapper">
        <img class="message-pp" src="https://images.unsplash.com/photo-1587080266227-677cc2a4e76e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Lorem ipsum dolor sit amet
          </div>
          <span>9h ago</span>
        </div>
      </div>
    <div class="message-wrapper reverse">
        <img class="message-pp" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile-pic">
        <div class="message-box-wrapper">
          <div class="message-box">
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <span>9h ago</span>
        </div>
      </div>
    </div>
    <div class="chat-input-wrapper" >
     <div class="input-wrapper">
       <button class="chat-attachment-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-paperclip" viewBox="0 0 24 24">
          <defs/>
          <path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48"/>
        </svg>
      </button>
      
        <input type="text" class="chat-input" placeholder="Enter your message here">
<div class="button-list">
<button class="fast white">send</button>
</div>
     </div>
  </div>
  </div>
  <div class="app-right">
    <div class="app-profile-box">
      <img src="https://images.unsplash.com/photo-1587080266227-677cc2a4e76e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" alt="profile">
      <p class="app-profile-box-title name"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Dwight Scrute</p>
      <p class="app-profile-box-title mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>dwightscrute@test.com</p>
      <button class="archive-btn">Archive<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-archive" viewBox="0 0 24 24">
  <defs/>
  <path d="M21 8v13H3V8M1 3h22v5H1zM10 12h4"/>
</svg></button>
    </div>
    <div class="app-activity-box">
      <div class="activity-info-boxes">
        <div class="activity-info-box time">
          <div class="info-icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-clock" viewBox="0 0 24 24">
              <defs/>
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 6v6l4 2"/>
            </svg>
          </div>
          <div class="info-text-wrapper">
            <span class="info-text-upper">13h</span>
            <span class="info-text-bottom">Time</span>
          </div>
        </div>
        <div class="activity-info-box atendee">
          <div class="info-icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-users" viewBox="0 0 24 24">
              <defs/>
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
            </svg>
          </div>
          <div class="info-text-wrapper">
            <span class="info-text-upper">32</span>
            <span class="info-text-bottom">Atendeed</span>
          </div>
        </div>
        <div class="activity-info-box meeting">
          <div class="info-icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-calendar" viewBox="0 0 24 24">
              <defs/>
              <rect width="18" height="18" x="3" y="4" rx="2" ry="2"/>
              <path d="M16 2v4M8 2v4M3 10h18"/>
            </svg>
          </div>
          <div class="info-text-wrapper">
            <span class="info-text-upper">122</span>
            <span class="info-text-bottom">Meetings</span>
          </div>
        </div>
        <div class="activity-info-box reject">
          <div class="info-icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-x-square" viewBox="0 0 24 24">
              <defs/>
              <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
              <path d="M9 9l6 6M15 9l-6 6"/>
            </svg>
          </div>
          <div class="info-text-wrapper">
            <span class="info-text-upper">12</span>
            <span class="info-text-bottom">Rejected</span>
          </div>
        </div>
      </div>
      <div class="activity-info-header">
        <span class=
"info-header-bold">Current Week</span>
         <span class=
"info-header-light">Activity</span>
      </div>
      <div class="activity-days-wrapper">
        <div class="day">
          <div class="chart"></div>
          <span>MON</span>
        </div>
        <div class="day">
          <div class="chart"></div>
          <span>TUE</span>
        </div>
        <div class="day current">
          <div class="chart"></div>
          <span>WED</span>
        </div>
        <div class="day">
          <div class="chart"></div>
          <span>THU</span>
        </div>
        <div class="day">
          <div class="chart"></div>
          <span>FRI</span>
        </div>
        <div class="day">
          <div class="chart"></div>
          <span>SAT</span>
        </div>
        <div class="day">
          <div class="chart"></div>
          <span>SUN</span>
        </div>
      </div>
    </div>
    <div class="app-right-bottom">
      <div class="app-theme-selector">
      <button class="theme-color indigo" data-color="indigo">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" title="Indigo">
          <defs/>
          <path fill="#fff" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
      <button class="theme-color pink" data-color="pink" title="Pink">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" >
          <defs/>
          <path fill="#fff" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
      <button class="theme-color navy-dark active" data-color="navy-dark" title="Navy Dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
          <defs/>
          <path fill="#fff" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
      <button class="theme-color dark" data-color="dark" title="Dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
          <defs/>
          <path fill="currentColor" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
    </div>
    </div>
  </div>
  <div class="app-right-bottom">
      <div class="app-theme-selector">
      <button class="theme-color indigo" data-color="indigo">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" title="Indigo">
          <defs/>
          <path fill="#fff" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
      <button class="theme-color pink" data-color="pink" title="Pink">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" >
          <defs/>
          <path fill="#fff" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
      <button class="theme-color navy-dark active" data-color="navy-dark" title="Navy Dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
          <defs/>
          <path fill="#fff" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
      <button class="theme-color dark" data-color="dark" title="Dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
          <defs/>
          <path fill="currentColor" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
    </div>
    </div>
</div>
<script>
    let title = document.querySelectorAll(".chat-list-header");
let totalHeight = 0;

for(let i = 0; i < title.length; i++){
  let totalHeight = 0;
  title[i].addEventListener("click", function(){
    let result = this.nextElementSibling;
    let activeSibling = this.nextElementSibling.classList.contains('active');
    this.classList.toggle('active');
    result.classList.toggle("active");
    if(!activeSibling) {
      for( i= 0; i < result.children.length; i++) {
        totalHeight = totalHeight +  result.children[i].scrollHeight + 40;
      }
    } else {
      totalHeight = 0;
    }
    result.style.maxHeight =  totalHeight + "px";
  });
}

const themeColors = document.querySelectorAll('.theme-color');

themeColors.forEach(themeColor => {
  themeColor.addEventListener('click', (e) => {
    themeColors.forEach(c => c.classList.remove('active'));
    const theme = themeColor.getAttribute('data-color');
    document.body.setAttribute('data-theme', theme);
    themeColor.classList.add('active');
  });
});
</script>
<script>
  document.querySelectorAll('button').forEach(button => button.innerHTML = '<div><span>' + button.textContent.trim().split('').join('</span><span>') + '</span></div>');
</script>
</body>

</html>