# RoomBooking
Simple room booking system based on php

## infrastructure
![](https://i.imgur.com/nqOByrj.png)
## entry 
http://people.cs.nctu.edu.tw/~ysliu2525441/DB_LAB2/index.php

## [login page](http://people.cs.nctu.edu.tw/~ysliu2525441/DB_LAB2/index.php)
若有帳號可登入，無帳號可進入[註冊頁面](http://people.cs.nctu.edu.tw/~ysliu2525441/DB_LAB2/register.php)

## [register page](http://people.cs.nctu.edu.tw/~ysliu2525441/DB_LAB2/register.php)
若帳號已被註冊過將會跳出提示：`Register failed.Try another account.` <br>
若帳號註冊成功將會跳出提示：`Register success. Try to log in!`

## homepage
每頁會顯示五筆今天可訂的房間。<br>
* 查詢 <br>
可由`房屋名`、`租房價格`、`地點`、`房屋登記時間`、`屋主`、`房間特色`和`入住退房時間`查詢可訂的房間。<br>
* 加入最愛 <br>
  使用者可把有興趣的房子加入最愛，並在`我的最愛`頁面查看。
* 刪除 <br>
  僅屋主可刪除持有的房子。
* 範例：

![](https://i.imgur.com/QTQ2zhT.png)  
  
  
## house management
可點擊 `新增房屋` 登錄房屋資訊。 <br>
屋主可在此頁面看到自己登錄過的房子。 <br>
可進入 `房東頁面` 看到自己房子的出租紀錄。<br>
可進入 `訂房頁面` 看到自己的訂房紀錄。
* 範例：

![](https://i.imgur.com/bTfKqVp.png)  

## favorite list
使用者在 homepage 加入最愛的房子將會顯示在 `我的最愛` 頁面
* 範例：

![](https://i.imgur.com/fzhRL1f.png)  
