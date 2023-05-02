<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../TP_Final/Css/Admin.css" />
    <link rel="stylesheet" href="../TP_Final/Css/all.min.css" />
    <link rel="stylesheet" href="../TP_Final/Css/all.css" />
  </head>

  <body>
    <header id="head">
      <div class="Logo">
        <img
          src="../TP_Final//Img/forum.png"
          alt="Forum Logo"
          style="
            width: 210px;
            height: 58px;
            position: relative;
            left: 18px;
            top: 7px;
            cursor:pointer;
          "
        />
      </div>
      <nav>
        <ul class="Links-List">
          <li><a href="../TP_Final/Visit.html">Home</a></li>
          <li><a href="#">Forums</a></li>
          <li><a href="#">What's new</a></li>
          <li><a href="#">Media</a></li>
          <li><a href="#">Resources</a></li>
          <li><a href="#">Members</a></li>
        </ul>
      </nav>
      <div class="Search">
        <input type="search" placeholder="Search" />
        <i class="fa-solid fa-magnifying-glass fa-bounce" id="icon-Search"></i>
      </div>
      
      <ul class="Sign">
        <button style="background-color: transparent;border: none;font-size: 19px;position: relative;left: 41px;top: 15px;cursor: pointer;color: #4c54fc;" onclick="Dark_Light()">
          <i class="fa-solid fa-circle-half-stroke" id="dark-light"></i>
        </button>
        <li id="Sign-in"><a href="#">Aouameur Rabah</a></li>
        <li id="Sign-up">
          <a href="../TP_Final/SignIn.php"><img src="../TP_Final/Img/Aouameur.png" alt="" /></a>
        </li>
      </ul>
    </header>
    <div class="content">
      <aside class="side_bar">
        <ul class="NameWimgAdmin">
          <li style="display: flex; flex-direction: row">
            <img src="../TP_Final/Img/Aouameur.png" alt="" id="admin-img" />
            <p id="admin-name" >Aouameur Rabah</p>
          </li>
          <li style="display: flex; flex-direction: row; flex-wrap: nowrap">
            <i class="fa-regular fa-envelope"></i>
            <p style="cursor: pointer" id="inbox">Inbox</p>
          </li>
          <li>
            <i class="fa-solid fa-bell" style="top: 0"></i>
            <p id="inb-not">Notification</p>
          </li>
        </ul>
        <h5 style="font-size: 15px;font-weight: bold;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;margin-left: 39px;" id="forum-filter">Forum Filters</h5>

        <ul class="Filters">
          <li style="display: flex;flex-direction: row;flex-wrap: nowrap;"> 
            <i class="fa-regular fa-circle fa-xs" style="color:greenyellow"></i>
            <p>Video & Gaming</p>
          </li>
          <li style="display: flex;flex-direction: row;flex-wrap: nowrap;">
            <i class="fa-regular fa-circle fa-2xs" style="color:rebeccapurple"></i>
            <p>Informatic</p>
          </li>
          <li style="display: flex;flex-direction: row;flex-wrap: nowrap;">
            <i class="fa-regular fa-circle fa-2xs" style="color:#ffbb00"></i>
            <p>Artificial Inteligence</p>
          </li>
          <li style="display: flex;flex-direction: row;flex-wrap: nowrap;">
            <i class="fa-regular fa-circle fa-2xs" style="color:rgb(60, 66, 255)"></i>
            <p>Freelance</p>
          </li>
        </ul>
        <h3>
          <i
            class="fa-solid fa-bolt-lightning"
            style="color: #fff04d; margin-right: 10px; top: 3px"
          ></i>
          Trending Thread
        </h3>
        <div>
          <ul class="Trend-List">
            <li>
              <img src="../TP_Final/Img/Othman.png" alt="" id="Trend-Img" />
            </li>
            <li><a href="#">Othman bougataia</a></li>
            <li><a href="#">2 hour</a></li>
          </ul>
          <ul class="Trend-List">
            <li>
              <img
                src="../TP_Final/Img/Kamel_Bidari.png"
                alt=""
                id="Trend-Img"
              />
            </li>
            <li><a href="#">Kamel Bidari</a></li>
            <li><a href="#">26 minutes</a></li>
          </ul>
          <ul class="Trend-List">
            <li>
              <img src="../TP_Final/Img/David.png" alt="" id="Trend-Img" />
            </li>
            <li><a href="#">David Bill Stones</a></li>
            <li><a href="#">6 minutes</a></li>
          </ul>
          <ul class="Trend-List">
            <li>
              <img src="../TP_Final/Img/barabara.png" alt="" id="Trend-Img" />
            </li>
            <li><a href="#">Barbara</a></li>
            <li><a href="#">April 18th,2023</a></li>
          </ul>
        </div>
        <h3>
          <i
            class="fa-solid fa-chart-area"
            style="color: #4c54fc; font-size: 21px; margin-right: 3px"
          ></i>
          Forum Stats
        </h3>
        <ul id="Forum-Stats">
          <li>
            <ul class="Stats">
              <li>Thread</li>
              <li id="num-Stats">4,045</li>
            </ul>
          </li>
          <li>
            <ul class="Stats">
              <li>Messages</li>
              <li id="num-Stats">654</li>
            </ul>
          </li>
          <li>
            <ul class="Stats">
              <li>Members</li>
              <li id="num-Stats">16,657</li>
            </ul>
          </li>
        </ul>
      </aside>
      <section class="themes">
        <div class="above">
          <h3>BACKFORUM COMMUNITY</h3>
          <form method="post" action="" style="margin-top: 20px;" id="formId" name="theForm">
            <input type="text" placeholder="Your Theme" id="inp-add">
          </form>
          <button onclick="addTheme(this,true)" id="New">New</button>
        </div>
        <table style="margin-left: -15px">
          <thead>
            <tr>
              <th>TOPIC</th>
              <th>REPLIES</th>
              <th>VIEWS</th>
              <th>LATEST</th>
            </tr>
          </thead>
          <tbody class="tb">
            <tr id="11">
              <td style="display: flex; flex-direction: row; flex-wrap: nowrap">
                <button
                  style="background: none; border: none; cursor: pointer"
                  onclick="removeNode(id)"
                  id="1"
                >
                  <i class="fa-regular fa-trash-can fa-shake" id="icon_del"></i>
                </button>
                <img src="../TP_Final/Img/Othman.png" alt="" id="theme-img" />
                <h4 style="position: relative;top: -11px;">
                  <p style="margin-bottom: 1px;">Programming at the highest level and Algerian youth</p>
                  <div id="Name-Time">
                    <p id="User">Othman bougataia</p>
                    <p id="Time">2 day ago</p>
                  </div>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                    id="star"
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      color: #fff04d;
                      left: 0px;
                    "
                  ></i>
                </h4>
              </td>
              <td>
                <span id="number">9,056</span>
                <p id="rep-view-lat">Replies</p>
                <button
                  id="button-Replay"
                  class="fa-shake"
                  onclick="addTheme(this,false)"
                >
                  ADD
                </button>
              </td>
              <td>
                <span id="number">74,658</span>
                <p id="rep-view-lat">Views</p>
              </td>
              <td>
                <p id="rep-view-lat">
                  <img
                    src="../TP_Final/Img/Lat1.png"
                    alt=""
                    style="
                      width: 30px;
                      height: 30px;
                      border-radius: 50%;
                      position: relative;
                      left: 14px;
                    "
                  />
                  <img
                    src="../TP_Final/Img/Lat2.png"
                    alt=""
                    style="
                      width: 30px;
                      height: 30px;
                      border-radius: 50%;
                      position: relative;
                      left: 14px;
                    "
                  />
                </p>
              </td>
            </tr>

            <tr id="commentForum">
              <td style="background-color: transparent">
                <form action="" method="GET">
                  <label for="Comment"
                    ><img
                      src="../TP_Final/Img/Aouameur.png"
                      alt=""
                      id="Comment-img"
                  /></label>
                  <textarea
                    name="Comment"
                    id="Comment"
                    cols="30"
                    rows="10"
                    placeholder="ADD COMMENT"
                  ></textarea>
                  <button type="submit" id="submitbutton">Comment</button>
                </form>
              </td>
            </tr>

            <tr id="22">
              <td style="display: flex; direction: row">
                <button
                  style="background: none; border: none; cursor: pointer"
                  onclick="removeNode(id)"
                  id="2"
                >
                  <i class="fa-regular fa-trash-can fa-shake" id="icon_del"></i>
                </button>
                <img
                  src="../TP_Final/Img/Kamel_Bidari.png"
                  alt=""
                  id="theme-img"
                />
                <h4>
                  Artificial intelligence sweeps a trend in Algeria
                  <div id="Name-Time">
                    <p id="User">Kamel Bidari</p>
                    <p id="Time">1 week ago</p>
                  </div>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                </h4>
              </td>
              <td>
                <span id="number">6,807</span>
                <p id="rep-view-lat">Replies</p>
                <button
                  id="button-Replay"
                  class="fa-shake"
                  onclick="addComment(this)"
                >
                  ADD
                </button>
              </td>
              <td>
                <span id="number">10,021</span>
                <p id="rep-view-lat">Views</p>
              </td>
              <td>
                <img
                  src="../TP_Final/Img/Lat3.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat4.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat5.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
              </td>
            </tr>

            <tr id="commentForum">
              <td style="background-color: transparent">
                <form action="" method="POST">
                  <label for="Comment"
                    ><img
                      src="../TP_Final/Img/Aouameur.png"
                      alt=""
                      id="Comment-img"
                  /></label>
                  <textarea
                    name="Comment"
                    id="Comment"
                    cols="30"
                    rows="10"
                    placeholder="ADD COMMENT"
                  ></textarea>
                  <button type="submit" id="submitbutton">Comment</button>
                </form>
              </td>
            </tr>

            <tr id="33">
              <td style="display: flex; direction: row">
                <button
                  style="background: none; border: none; cursor: pointer"
                  onclick="removeNode(id)"
                  id="3"
                >
                  <i class="fa-regular fa-trash-can fa-shake" id="icon_del"></i>
                </button>
                <img src="../TP_Final/Img/Aouameur.png" alt="" id="theme-img" />
                <h4>
                  Freelance photograpgher looking to optimize workflow
                  <div id="Name-Time">
                    <p id="User">Aouameur Rabah</p>
                    <p id="Time">Mar 11st,2023</p>
                  </div>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                </h4>
              </td>
              <td>
                <span id="number">43</span>
                <p id="rep-view-lat">Replies</p>
                <button
                  id="button-Replay"
                  class="fa-shake"
                  onclick="addComment(this)"
                >
                  ADD
                </button>
              </td>
              <td>
                <span id="number">124</span>
                <p id="rep-view-lat">Views</p>
              </td>
              <td>
                <img
                  src="../TP_Final/Img/Lat6.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat7.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat8.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
              </td>
            </tr>

            <tr id="commentForum">
              <td style="background-color: transparent">
                <form action="" method="GET">
                  <label for="Comment"
                    ><img
                      src="../TP_Final/Img/Aouameur.png"
                      alt=""
                      id="Comment-img"
                  /></label>
                  <textarea
                    name="Comment"
                    id="Comment"
                    cols="30"
                    rows="10"
                    placeholder="ADD COMMENT"
                  ></textarea>
                  <button type="submit" id="submitbutton">Comment</button>
                </form>
              </td>
            </tr>

            <tr id="44">
              <td style="display: flex; direction: row">
                <button
                  style="background: none; border: none; cursor: pointer"
                  onclick="removeNode(id)"
                  id="4"
                >
                  <i class="fa-regular fa-trash-can fa-shake" id="icon_del"></i>
                </button>
                <img src="../TP_Final/Img/James.png" alt="" id="theme-img" />
                <h4>
                  US policy in the fight against the tide of Russia
                  <div id="Name-Time">
                    <p id="User">James Ferdinand</p>
                    <p id="Time">26 minutes ago</p>
                  </div>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                </h4>
              </td>
              <td>
                <span id="number">145</span>
                <p id="rep-view-lat">Replies</p>
                <button
                  id="button-Replay"
                  class="fa-shake"
                  onclick="addComment(this)"
                >
                  ADD
                </button>
              </td>
              <td>
                <span id="number">1,028</span>
                <p id="rep-view-lat">Views</p>
              </td>
              <td>
                <img
                  src="../TP_Final/Img/Lat9.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat10.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
              </td>
            </tr>

            <tr id="commentForum">
              <td style="background-color: transparent">
                <form action="" method="GET">
                  <label for="Comment"
                    ><img
                      src="../TP_Final/Img/Aouameur.png"
                      alt=""
                      id="Comment-img"
                  /></label>
                  <textarea
                    name="Comment"
                    id="Comment"
                    cols="30"
                    rows="10"
                    placeholder="ADD COMMENT"
                  ></textarea>
                  <button type="submit" id="submitbutton">Comment</button>
                </form>
              </td>
            </tr>

            <tr id="55">
              <td style="display: flex; direction: row">
                <button
                  style="background: none; border: none; cursor: pointer"
                  onclick="removeNode(id)"
                  id="5"
                >
                  <i class="fa-regular fa-trash-can fa-shake" id="icon_del"></i>
                </button>
                <img src="../TP_Final/Img/Morad.jpg" alt="" id="theme-img" />
                <h4>
                  World Tree Day : Ozone hole kills nature
                  <div id="Name-Time">
                    <p id="User">Morad Hammouche</p>
                    <p id="Time">Jan 12nd,2023</p>
                  </div>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                </h4>
              </td>
              <td>
                <span id="number">2</span>
                <p id="rep-view-lat">Replies</p>
                <button
                  id="button-Replay"
                  class="fa-shake"
                  onclick="addComment(this)"
                >
                  ADD
                </button>
              </td>
              <td>
                <span id="number">14</span>
                <p id="rep-view-lat">Views</p>
              </td>
              <td>
                <img
                  src="../TP_Final/Img/Lat11.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat12.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
              </td>
            </tr>

            <tr id="commentForum">
              <td style="background-color: transparent">
                <form action="" method="GET">
                  <label for="Comment"
                    ><img
                      src="../TP_Final/Img/Aouameur.png"
                      alt=""
                      id="Comment-img"
                  /></label>
                  <textarea
                    name="Comment"
                    id="Comment"
                    cols="30"
                    rows="10"
                    placeholder="ADD COMMENT"
                  ></textarea>
                  <button type="submit" id="submitbutton">Comment</button>
                </form>
              </td>
            </tr>

            <tr id="66">
              <td style="display: flex; direction: row">
                <button
                  style="background: none; border: none; cursor: pointer"
                  onclick="removeNode(id)"
                  id="6"
                >
                  <i class="fa-regular fa-trash-can fa-shake" id="icon_del"></i>
                </button>
                <img src="../TP_Final/Img/David.png" alt="" id="theme-img" />
                <h4>
                  The war between Google and Microsoft is intensified after the
                  release of OpenIA for Chat-GPT
                  <div id="Name-Time">
                    <p id="User">David Bill Stones</p>
                    <p id="Time">3 hours ago</p>
                  </div>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      color: #fff04d;
                      left: 0px;
                    "
                  ></i>
                </h4>
              </td>
              <td>
                <span id="number">1,945</span>
                <p id="rep-view-lat">Replies</p>
                <button
                  id="button-Replay"
                  class="fa-shake"
                  onclick="addComment(this)"
                >
                  ADD
                </button>
              </td>
              <td>
                <span id="number">12,488</span>
                <p id="rep-view-lat">Views</p>
              </td>
              <td>
                <img
                  src="../TP_Final/Img/Lat13.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat14.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
              </td>
            </tr>

            <tr id="commentForum">
              <td style="background-color: transparent">
                <form action="" method="GET">
                  <label for="Comment"
                    ><img
                      src="../TP_Final/Img/Aouameur.png"
                      alt=""
                      id="Comment-img"
                  /></label>
                  <textarea
                    name="Comment"
                    id="Comment"
                    cols="30"
                    rows="10"
                    placeholder="ADD COMMENT"
                  ></textarea>
                  <button type="submit" id="submitbutton">Comment</button>
                </form>
              </td>
            </tr>

            <tr id="77">
              <td style="display: flex; direction: row">
                <button
                  style="background: none; border: none; cursor: pointer"
                  onclick="removeNode(id)"
                  id="7"
                >
                  <i class="fa-regular fa-trash-can fa-shake" id="icon_del"></i>
                </button>
                <img src="../TP_Final/Img/Morgan.png" alt="" id="theme-img" />
                <h4>
                  Elon Musk plans to open a telecommunications company to
                  compete with Cisco
                  <div id="Name-Time">
                    <p id="User">Morgan Steve</p>
                    <p id="Time">April 1st,2023</p>
                  </div>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                  <i
                    class="fa-solid fa-star fa-fade fa-2sm"
                    style="
                      color: #fff04d;
                      margin-bottom: 0;
                      position: relative;
                      bottom: 15px;
                      left: 0px;
                    "
                  ></i>
                </h4>
              </td>
              <td>
                <span id="number">98</span>
                <p id="rep-view-lat">Replies</p>
                <button
                  id="button-Replay"
                  class="fa-shake"
                  onclick="addComment(this)"
                >
                  ADD
                </button>
              </td>
              <td>
                <span id="number">547</span>
                <p id="rep-view-lat">Views</p>
              </td>
              <td>
                <img
                  src="../TP_Final/Img/Lat15.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat16.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
                <img
                  src="../TP_Final/Img/Lat17.png"
                  alt=""
                  style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: relative;
                    left: 14px;
                  "
                />
              </td>
            </tr>

            <tr id="commentForum">
              <td style="background-color: transparent">
                <form action="" method="GET">
                  <label for="Comment"
                    ><img
                      src="../TP_Final/Img/Aouameur.png"
                      alt=""
                      id="Comment-img"
                  /></label>
                  <textarea
                    name="Comment"
                    id="Comment"
                    cols="30"
                    rows="10"
                    placeholder="ADD COMMENT"
                  ></textarea>
                  <button type="submit" id="submitbutton">Comment</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
  </body>
  <script src="../TP_Final/backend/main.js"></script>
</html>
