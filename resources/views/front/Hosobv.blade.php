@extends('user_layout')
@section('title','Hồ Sơ Bệnh viện')
@section('main_content')
       
   <div class=" row bg-container fix-row">
      @foreach($show_detail_hospital as $key=>$show_detail_hospital)
    <div class="container-fluid pt-4 bg-container wrap-hospital-responsive" style="background:#f4f4f4">
      <div class="container content-detail-hospital">
          <div class="row" style="background-color: white;">
         <div class="col-lg-5" >
            <img style="width: 100%; height:100%;" " src="upload/hospital/bacsioi7.png" alt="">
         </div>
       <div class="detail-hospital col-lg-7" >
        <div class="title">
        <div class="logo">
            <img src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/o2o-01-png_cebc770c_62bc_4119_ab16_2c2a4e732128.png" class="img-logo-hospital" alt="Logo BÁC SĨ ƠI - PHÒNG KHÁM O2O">
        </div>
         <div style="margin-left:16px">
           <h1 class="name">{{$show_detail_hospital->name_hospital}}</h1>
           <div class="rates">
           <div class="text-appointments">
             <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADNSURBVHgB7ZPBDcIwDEW/qw7ACLBBOXQAJoAjPQGbME17ZQN6RUWCERihdxDGENFKKAmxVPWUd3GdWn5S7ACRyDicyxVO1aHLm+r4OQuAnH+a8gKmialiifLNuPW5wNSaXGK+ntvapHC7s15P3zD9yY1IzC48AiwwAG4BYQMdtU7A2ELHznaYQAvJoB+YdQP/Q6BAtoSf7y2pcZfZpHJ93cAHEchaUrJEXpjmwB6BeN5BZdk9uooss9bnhbWXcgaO5h48Am4RLlbURiJaXkZaLhTnQNZgAAAAAElFTkSuQmCC" style="user-select:none"><span>Lượt ĐK: </span>
                <b>{{$show_detail_hospital->book_hospital}}</b>
             </div>
              <div class="ratesStars">
                 <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAD5SURBVHgB7VNNDsFAFP7aqb0j9AiOILHAjhMgsSAWOAFOIFYNK06AlWDjCG6gbmDfn/GqTZsmHTMiEYt+i8lL3ve99828N0COHL/FaTXEeTn/RKIpMw+WCabfXjFjJirdu4pMhyo03ohj1+koy4SZwLFBRX2tGDL1Fp1mlLXB/U3M9bFGvW9nlTFE9elubXA2EVgwqeEk4frBOc0uI0LgCrhCCn6JuJmQD/loTVNuUyb4ArXe6J1cPmSX7YS5giFdWXmDglcS5hyvia8bgLWi4EGbM6P3Hic5XpapDRmB3nkPnVPgjVEdhEM/WDv6dFv6GwpLkCPH3+MJZbc9lnl2XvAAAAAASUVORK5CYII=" style="user-select:none">Đánh giá: 
               <b> 5</b>
          </div></div></div></div>
         <div class="information">
          <div class="address">
            <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAwCAYAAAC4wJK5AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUUSURBVHgB7VnNcts2EF5Icqd/M5VPlttmylw7jY1M4ja3yk8Q9wli3XqzcutN0hPYufUWv0GcJ4hy6IxrZaZ02kNvYQ5t1VPVWxJbZD4QgEBSFEWQVHLxN6MhQQALLPZb7AIiusIVKgOjFYJz3pxSvU0UNPW3gGpegy5dYEIVoXIlvuY7vEHsLqNgH0Uno6mH35DRxQAKeVQClSmBVXcCWnuI1zbZ47iMMpUoscV3DrDyfYhrmq8BVpme4ukSrbny27QpqOVDUdR9j/btqJyAWP+5ezYgS5RWAgocQkjXfAknj1V9NlzWl/M7jk/TPtrfm/UmOnruju6TBUopEVeAeYz8Tp7JJ8H57TYcHlQMHPXp+NwddfL2r1NBbPHbPUbsJ1kSCtR2XffMpQIYj//2NlvXHuN1Dz9BSb7R+pL+Hf/1NE//QpZQTvxCiVAKnHppbcVuVacpRxv08T2xxf6xwFqCXmjzRFsEfrabx7KFlNjmO0IBRwqoX09TQDp7SDUnRYQH5x787o6OkxUcSsMvflPFIWi1S0tgrcQNfmuvRrVHqvMD1x1145PgTVhJ1LdziBNx4odk4ANV4eysJ8dYbo0aWaJG7MCU6kfJeigAOswUmGASAyh7U1hMPqkjKKjq26K9UDw+xqWQO5HypDJZsLKEWuX/VHFuB1HO3leiXUYfYxWHk3Q5DexGbE9NdID40I/LunUEPzqQk7xYz0pTrCwh8yA1RfIfJybmRBTwFikgICbE6FIsgCtlBQfz1mAnZtzaHmXASglMkpvSdBitm9Ja27QLBosU0JCKBDqoIYo39uMtLl0jr86zZFn6BHPUyyRpXliGmwnO7zppUA47kf3ZdrwulO/JOvosS461YyvMrXJkEh5ZIfDUi7OwBbF1ykBRJdIGeknvCZZK+NoCTtIRs+vSITYDUn6GAHee0sSRj5m1UmGlRBCm1RoNHhdkdhOfPuhSDsCZ75n+wUm07hskhabOH2bJsVKiTn5koiy27UknDYbiHbtOj0cmkQZYgUe35GRUhlIR+WuZiaWVEnLH0BM1ZwANcY7Q7/CRR1v8u1SLiLwKwe6J6ed35mXV7pph05PLyLh2QFTuYgUPxTuSuE4yiYMFuoGqV/BE9EZ2eo5+X1G4wuYEiG+IKfFofYPv7GN1H8p66izbsq2VUKmHyGLFRBCZL24mYwZHkhhQ/TByyEkDgh3DBM9OkhUmS85O8zWsD0Xj8fjVRuvzj5g8H4sc6DUOL8N4m3/+xLcHm60vXsrrmnDlP6QwvgSnIvtl9CkU+GWO6yr/Cv0BT2TJv54sm1Ph4+k2//aFObwQrDEqdKqLInnYOnfPrufpVzjYRZ0xUPwtC5XGz8lfhsJnbHEu3mhtrsPkd1Bs4UzMkrSyQZxG4rD17Oe8fUulHTVct+gDjkqnHSqAZBpP9Enfpn8pJWQ6PTN7U90AWiPaL08an0RhOmkkaOVstK79D1qd5u2vLhR+VEVxWrS+Aawki43Tyu/lpZWkkbj+DHsiJtStFZDjV4CitJLtZPSWNMoOaotQmk4atrSqgkYalR2KpLB8tKqKRmbcCpGXVvjeq4JGGpXRSWMZrUSGChr1VbEUjTQqtYQRmk4r8cSA6kavPI3MeCvAIlpJGumL6PI00ij9T1EWoleRwJDMHa3VnyjLsBJLGOGCVrM7qrZ8VEcjM84KkaBVCJj+flU0ishcPcQ/QERv2lgzr8h/ele4wjvEW3MiL062sQwPAAAAAElFTkSuQmCC" style="user-select:none">
             <span style="margin-right:10px;">{{$show_detail_hospital->address_hospital}}
              <a rel="nofollow external" href="https://ivie.vn/r?url=https://www.google.com/maps?saddr=BÁC SĨ ƠI - PHÒNG KHÁM O2O" target="_blank" class="map-link text-link">Xem đường đi
               </a></span></div>
             <div class="time-open">
              <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAwCAYAAAC4wJK5AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPiSURBVHgB7ZhNctMwFMf/shMWwEBZUT5m8AGgaIAy7DAnIJyg4QSEEzQ9AeUEpCegrFhiNgxDYKq2HMCdASbdpVvaWDxZqpuWxJYSuyv/ZjKRkydLT09P7+kBNTU1NTU102EoGc75QoJGm4Hdp8cQkAs0zIL5O1YfCYgE8sNP8T1CCZSmxF3+KPTBVpFO3BpSiPU8/N0QQsSYkbmVoJUPJJrvMHnyMVmCPizWFoGyCtffp+USYG1X9HuYgbmU0KuP92PbhZARQ7IBXNkUIhpO6sf5MqdJd2jLPSX5IOsJrO+I/ms4MrMSS/zxCoPsnfyiJo814bjPOX/UlXobpnisGWxtfdlzeMVsSpxVgF7yVoh+BxMnmW63VVr5z9O2C+dPSOboHVlmj97ThiPOSuhJNbaOtxANTKv/rTtNfok/XGfwXmnZw2vkwEOUjAdHaFU/2Spghsj8hbGLV1EBDRfhe3y5TV+BfpLkuP0uKkDHmmbqJzaO7mQJEs4ckKHhfIrYMoIfsvT0QscsXNG87FDHKTIroCfE1xgV4WMUHbdpgitF8tZKUDTOXqZOI1SIdn4ZmcdQba88eZftFOovFpMvCFRMkgZMzQheK0/WSgmzEoFqU1Tdxjng40J03GbweZ6s5enUDE7aycxWGMnD1j3+4OD0r2y4K35snpVVPnefL2sJIPdotlLiiJI338RFiSTGjNAbKPD5//2+xJff7kyO+CowZrtgGs7Bzh2VxeZTtNJFWFmiQSaX2YBeAAd2xPcu5w+FScWncGVzyh9pH0oQD5A7PysOY/KLtEWpxh04Iibs+SJUui6zp3xrWm0nk7TF5jHEOTAiPY7bHpIoT9baJ8ihP5hmwHX0rhQP8vnJU1Pky1q/lGVbIgFroUJUuo+TMaKiFMdaCX1jU3fl9DRZ0QNVgzQZrBlro0je6Yil29yaaS6Y4kDpmESzbUZUKU6vqI8PBwaDP2Jx8WZILw/oMbi+eBv7g9+fURLKuhQMqfAAc+nCazVmUT/nYEf3iJfQkVRZpkv37VWUgLmL061RR2dzb+/Z9HWyhGIw+DW8sXhrn5otM1g4r0VIAYoJzY/I0gsmtkX/hW3/mUs2FIzaFIzG/SKmQsAzl0qevoZeeKUsOjYlwXDx2bSa1STmKp5ROtGS8N+MF8CIiMozGz4ON6dVNpTzevCeUpGtM1540yfRpY6LAqbffKiaUYJRl02+RiqnNNFeTVYpqz7sbB41VCcfHePrmIHSCsoqisu0kMBCh25q8nTVvbzuuvrjVFDafxJQ5kMKpWlDYI7jsdK+VJXwbS8t+ZRT2q+pqampqcnjH+/aUDNHJizsAAAAAElFTkSuQmCC" style="user-select:none">
               <span>Đang mở cửa (08:00 - 22:00)
             <div class="text-link" style="min-width:55px">Xem lịch
              </div></span>
               </div></div></div></div></div></div>
             <div class="styled__ServiceContainer-sc-dkwzhh-0 eOOPOn container-fluid" style="display:none"></div>
              <div class="styled__DoctorContainer-sc-16nbxge-0 ieSmsk container-fluid">
              <div class="container" style="padding-right:0px;padding-left:0px">
                <h2 class="title">Đặt khám bác sĩ</h2>
              <div class="line-list">
               <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAAARCAYAAAAyqiXFAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFXSURBVHgB7dgxS8NAHAXw908C6taP0NGxOOimdeniYhdnY0EoTm7iopOLg3QQQYTmAyiddapbFyGjbv0IGYu0d147FC+5WDDjvR+lJI9kCS+XuxOQ03bn+RAI+wJkIohHT+0hqCAAlQivTHlq5qCuNfogJxaohOhFeWgFFogqYYGoEhaIKongu4eLOiQcQKOxzJSO8WFdVdvpDOyJtJjV2RS9UdIew2MR3h79WmG0TmPrPF8et/mE+thKtPmFi/v2f8dbJy9ePU8zAs3e4bPV5flLMx8o5dfzjNDqJvCZYGhK1MT/JPkgTY4SeIRzID2Lzbfo2mz87C0z0Zn572mtSveCBEG2oYoF8o2Aiu4vGwjkzsrU9znOblOQhSOQSzAfecKmlak17kw7cB+IKmGBqBIWyGWynkJLZmXRdAwqCEFFr8MJDna/zOu1ac4+zVojRveGE2iHHxgEUP2nfIdXAAAAAElFTkSuQmCC" style="user-select:none">
                </div>
             <div class="list-container">
              <div class="ant-row row-list-doctor row" style="margin-left:-15px;margin-right:-15px">
              <div class="col-lg-3 col-xs-3" style="padding-left: 15px; padding-right: 15px;">
             <div class="styled__WrapDoctor-sc-16nbxge-1 eQWZSE">
                 <div class="wrap_info">
                    <div class="logo">
                        <img src="upload/doctor/" alt="PGS.TS.  Nguyễn Quang" class="avatar">
                        <img class="img_isOnline" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAhCAYAAAC4JqlRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAM1SURBVHgBxVe/UxNBGH13hMHRGUll5wgz2FHAQKWFiZ0VobMD/gJCoTNUHhUjFsJfQOjsAo2dEgrt1DBDpzPeaEfjQaGiwvm93dskl9wlm5jgm7nZ27vb7739fuzuOegC4TpycDEHB2PSnWp4FagrRBUX2HNWUbE0KaY6kXrI4hqW5bYoBFnYwZergnOsiRgfvQoIn+FJl8RJDJ7zCGvpr5OI18XFGWwLcQ79QVW8MZ/kDSeRfAj7cjuG/sIXEflmEc4lkaeKcGOvB0sOZXsI5cYHNQFRwo3BFiOSlzekEm8XgOv2wwRT4VN4pqNCELn+s7WJGanKu54WYXBUAt5Isp/6NhYCCcU0Q5FR3SE1+2SQxMzyawUYlfb+JnAWaEK29MTkom53pmGBrEy9KG3RCZ9L57eafWutk3TxQ3ymJOT1Ig+c+PXneRE1K57ZnQc+7sICAb5j3MUvVevJC83DfU3OmZKQhtk/PoyTE+83dTsxB0tkcRWFjLgieQRdzevTHvDW08+OqzocI6Ot35tEPDuBNS4w5UYbSyt+BpHhW8CVyEE3c/V2tlj/ll55sK3v7dyv4eKeE27gG9JCUCjrGdPdzG4mWWM+MCmZDxTE5+wzVEYUc4JjXq2kVUdAAWEiOYkLZXQNE66ZYl0sw1guJH6eSTXEWidYViYc7cAwLUjF3PF0n9442tGhScqZBgG0nr7dMvFscGpaH3i5pAUQJjeSETAJffQTzBdD3hm+K6VwiP+HKj1QQT/Bipgv10u2Hc5xkMEwdmUpbg2USTwbQ4RZK1iWEwV9dQ5FJeOsIJBS5OoRr5N3W7oUuRx3g9crmpjVMLmgn305SPqyxN3QbMe56DASB5dizmQkvUhiIHHjrDne7KLNOMd4TYASsQHuJsu4HJScx1jiTf1INqxOKT4GjVCdC2vH9JoA5oI0spnDYtnrGYGUffqhVNzCZS+PwYigzZZjudv8lRIh5zX0MxyhspWPJoi2ApSIVX1+l4E7+FdcYAs/5ACaQK64Oo1XJ2ZXEtTBAroBV9g/6ue00v4zSyghUOuF/j0PY7/nhA/+A4Y4kBmXHG+gyRyJkl/3SFjP+AsPKwpovAUWFwAAAABJRU5ErkJggg==">
                    </div>
                <div class="info">
                    <h3 class="name">
                        <a style="list-style: none;color:rgb(47, 48, 53);text-decoration:none;" href="/ho-so-bac-si/PGS-TS-Nguyen-Quang-975">aaaaa</a>
                    </h3>
                <div class="detail">
                    <div class="appointments" title="Lượt đặt khám">
                        <img class="icon_detail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADNSURBVHgB7ZPBDcIwDEW/qw7ACLBBOXQAJoAjPQGbME17ZQN6RUWCERihdxDGENFKKAmxVPWUd3GdWn5S7ACRyDicyxVO1aHLm+r4OQuAnH+a8gKmialiifLNuPW5wNSaXGK+ntvapHC7s15P3zD9yY1IzC48AiwwAG4BYQMdtU7A2ELHznaYQAvJoB+YdQP/Q6BAtoSf7y2pcZfZpHJ93cAHEchaUrJEXpjmwB6BeN5BZdk9uooss9bnhbWXcgaO5h48Am4RLlbURiJaXkZaLhTnQNZgAAAAAElFTkSuQmCC" style="user-select: none;">50000
                    </div>
                <div class="ratesStars" title="Đánh giá của người bệnh">
                    <img class="icon_detail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAD5SURBVHgB7VNNDsFAFP7aqb0j9AiOILHAjhMgsSAWOAFOIFYNK06AlWDjCG6gbmDfn/GqTZsmHTMiEYt+i8lL3ve99828N0COHL/FaTXEeTn/RKIpMw+WCabfXjFjJirdu4pMhyo03ohj1+koy4SZwLFBRX2tGDL1Fp1mlLXB/U3M9bFGvW9nlTFE9elubXA2EVgwqeEk4frBOc0uI0LgCrhCCn6JuJmQD/loTVNuUyb4ArXe6J1cPmSX7YS5giFdWXmDglcS5hyvia8bgLWi4EGbM6P3Hic5XpapDRmB3nkPnVPgjVEdhEM/WDv6dFv6GwpLkCPH3+MJZbc9lnl2XvAAAAAASUVORK5CYII=" style="user-select: none;">5
                </div>
                </div>
                <div class="hospital-name">aaaaa
                </div>
              <div class="specializations">11aaaaaa
              </div>
             
              </div>
             <div class="price-info">
          <div class="price-title">Giá khám:</div>
           <div class="price-detail"><span class="price-number">150VNĐ</span>
           </div>
           </div>
            </div>
          <div class="btn-footer-card">
             <button type="button" class="ant-btn ant-btn-default">
                 <a style="list-style: none;color:white;text-decoration:none;" href="/ho-so-bac-si/PGS-TS-Nguyen-Quang-975">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGeSURBVHgB3VXtUcMwDFV6DJANCBOQDTATUCZomKDdoNmgZQLYgHaCsEFhgmSDdAMj06dDVR3SpP/67nSK9WHJshQTXQuSPgPvfcpszuSYMqVqmLZMmyRJGhoLDrDy52GFZAYHyNUmH0xTpgyUY/2ubOqgo6Fgp6LPEUHrQYHYaMk0pwEIpWLaIVDVZ1zAcIf1FNkJLSBfGLlDIDnRQu87MXGW4K/gOR06SkguNzVyxx22Z/4C/Yw6TiEXXStZCdkatU9VeTLIA0rl00KWx06SgX9HctiHWUC2FDhmYx+x3aoqnAQR4RddhgY8iwWJQTLtGrRbOgOTSAbaUU41s/0fOooOv5qAT6W6p+MEj5xOLh5yPdWtalvB2tiLzlEMqjOckZdmYwlYGrsilihFNtMZV7pMqmXXHf6SSPFfkNyfolXzUdq5UL5vXaew3eXAN0x3dLjQEKCg7sTCYFawCZf9aG1uOnx/h42dG6ylhWX9xLrQeQ/YPIXuufcBM+Vq1Xemsq4jJa38kLfE//15JVBh9PLPqsAdjYUf88pdPX4AVkVhoJ7NOBsAAAAASUVORK5CYII=">
                    <span>Đặt khám</span>
                 </a>
                </button>
                </div></div></div>
               
                </div></div>
                <div class="btn-footer">
                 <button type="button" class="ant-btn ant-btn-default">
                  <a style="color:rgb(0, 186, 153) ; text-decoration:none;" href="/danh-sach-bac-si/BAC-SI-OI---PHONG-KHAM-O2O-78">
                   <span>Tất cả bác sĩ</span>
                   <span role="img" aria-label="arrow-right" class="anticon anticon-arrow-right"><svg viewBox="64 64 896 896" focusable="false" data-icon="arrow-right" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 000-48.4z"></path></svg>
                    </span></a></button>
                      </div></div></div>
                   <div class="styled__InforContainer-sc-je1yq3-0 jyfmbt container-fluid">
                    <div class="container">
                        <div class="title">Thông tin cơ sở y tế</div>
                        <div class="line-list">
                         <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAAASCAYAAAC0PldrAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAD6SURBVHgB7djdbcJAEATgccR7XIJLSAdxCaQDp4IkFSSpIOkAOgAqoARKgA6ACo5BMgKtl9/jiZ1PGtle2X6wV+fzAeJKKVXMtE0FkWuwaWZpbwpxPUGOKQ/2K4hLDSRZ1ECSRQ0kWXoIrv3D+mbqg/KXOa3keY2prYqiGCO4nvNgHhpf+tCU/pi+qZXO8cDUts035v3eTK1BINsR6BWxDM1xH7fzro32PGMz6z07DTNP580QXPg5EL0zI3TXeibM84nr1sw/gisgHRxZXrj5MOVfzncWEDmHDVQ7n6sa0qF1IMmiBpIsaiDf4sKaiI9znh9m2eYTInJ/G1Lso5f5I9b3AAAAAElFTkSuQmCC" style="user-select:none">
                        </div>
                        <div class="list-container bg-white">
                          <div><div class="title-infor">Giới thiệu chung</div>
                            <div font-size="[object Object]" class="detail__DetailBody-sc-xxj5tu-5 styleHelpers__styledSystem-sc-1x1jqqv-0 cfPTKz ioqCTt mostly-customized-scrollbar hidden-text">
                                <p style="text-align: justify;">
                                  <strong>"BÁC SĨ ƠI!"&nbsp;</strong>là một chiến dịch nhân văn, hướng đến giúp đỡ các đối tượng F0, F1 đang tự cách ly y tế hoặc đang ở trong khu vực bị phong tỏa và người dân cả nước bị ảnh hưởng bởi dịch COVID-19.</p>

<p style="text-align: justify;">Chương trình chung tay cùng cộng đồng y tế phục vụ và hỗ trợ tốt nhất cho mọi người dân thông qua các nền tảng kết nối linh hoạt, tiện ích và nhanh chóng.</p>

<p style="text-align: justify;">ISOFHCARE khởi xướng chương trình&nbsp;
 <a href="https://isofhcare.com/bac-si-oi-chuong-trinh-ho-tro-nguoi-benh-bi-anh-huong-boi-dich-covid--0">Bác sĩ ơi!</a>&nbsp;nhằm hỗ trợ&nbsp;cho người dân trên cả nước bị ảnh hưởng bởi dịch Covid-19 được&nbsp;<strong>khám bệnh&nbsp;trực tuyến&nbsp;</strong>trên ứng dụng ISOFHCARE với nhiều ưu đãi hấp dẫn.</p>

<p style="text-align:justify;">
  <img alt="Khám bệnh trực tuyến với Bác sĩ ơi cùng nhiều ưu đãi hấp dẫn" src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/kham-benh-online-bac-si-oi-isofhcare-jpg_173c32ec_6530_4585_b59a_401ce1b2b08d.png">
</p>

<p style="text-align: center;"><em>Khám bệnh trực tuyến với Bác sĩ ơi cùng nhiều ưu đãi hấp dẫn</em></p>

<ul style="list-style: none;">
	<li style="text-align: justify;">Giảm giá 50% - 100% giá dịch vụ khám bệnh trực tuyến với các bác sĩ trong chương trình "Bác Sĩ Ơi!"</li>
	<li style="text-align: justify;">Áp dụng khám bệnh trực tuyến&nbsp;các chuyên khoa: nhi, phụ khoa, nam khoa, cơ xương khớp, tai mũi họng, da liễu</li>
	<li style="text-align: justify;">Voucher khuyến mãi giảm giá áp dụng độc quyền trên&nbsp;<a href="https://isofhcare.com/s/Digital?campaign=GGSEM">ứng dụng ISOFHCARE</a></li>
	<li style="text-align: justify;">Số lượng voucher có hạn mỗi ngày</li>
</ul>

<p style="text-align: justify;"><img alt="Khám bệnh online trên ứng dụng Bác sĩ ơi - ISOFHCARE" src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/kham-benh-online-bac-si-oi-oihcare-jpg_7fecad95_ef9d_4634_b557_501a289c802f.png"></p>

<p style="text-align: center;"><em>Khám bệnh online trên Ưeb Health Plus</em></p>

<p style="text-align: justify;">Đội ngũ Bác sĩ thực hiện&nbsp;khám bệnh trực tuyến trên Web Health Plus đều đang công tác tại các bệnh viện lớn và các phòng khám uy tín hàng đầu tại Việt Nam như: Bệnh viện Phổi trung ương Hà Nội, bệnh viện Bạch Mai, bệnh viện 199 - Bộ Công An Đà Nẵng, Đại học y dược TP.HCM...luôn sẵn sàng tư vấn, hỗ trợ người bệnh.</p>

<p style="text-align: justify;">Để tiến hành khám bệnh trực tuyến/ kết nối trực truyến với bác sĩ, bạn thực hiện theo các bước sau:</p>

<p style="text-align: justify;"><img alt="Hướng dẫn khám bệnh trực tuyến trên ứng dụng Bác Sĩ Ơi - ISOFHCARE" src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/bac-si-oi-huong-dan-kham-benh-truc-tuyen-isofhcare-jpg_feaabc80_ad64_456f_897d_87069b33f430.png"></p>

<p style="text-align: center;"><em>Hướng dẫn khám bệnh trực tuyến trên ứng dụng Bác Sĩ Ơi - Heath Plus</em></p>

<p style="text-align: justify;"><strong>1&nbsp;<a href="https://isofhcare.com/s/Digital?campaign=GGSEM">Tải ứng dụng ISOFHCARE</a>&nbsp;</strong>về điện thoại thông minh</p>

<p style="text-align: justify;"><strong>2. Đăng ký, đăng nhập</strong>&nbsp;bằng số điện thoại, nhập mật khẩu</p>

<p style="text-align: justify;"><strong>3.&nbsp;</strong>Chọn<strong>&nbsp;"Bác sĩ ơi!"</strong>&nbsp;tại Trang Chủ</p>

<p style="text-align: justify;"><strong>4. Lựa chọn bác sĩ</strong>, nhấn Tư vấn trực tuyến (có thể tìm kiếm bác sĩ theo triệu chứng hoặc chuyên khoa), Mô tả triệu chứng để được bác sĩ tư vấn tốt nhất.</p>

<p style="text-align: justify;"><strong>5. Chọn thời gian:&nbsp;</strong>ngày giờ khám bệnh&nbsp;</p>

<p style="text-align: justify;"><strong>6. Nhập voucher và thanh toán:</strong>&nbsp;Nhập mã voucher hoặc chọn mã sẵn có, nhấn áp dụng và tiến hành thanh toán qua ví điện tử, thẻ VISA hoặc thẻ ATM nội địa</p>

<p style="text-align: justify;"><strong>7. Đến giờ hẹ</strong>n, người bệnh mở&nbsp;<strong>Lịch hẹn</strong>&nbsp;tại Trang chủ và nhấn&nbsp;<strong>Gọi khám</strong>&nbsp;để kết nối với bác sĩ.&nbsp;</p>

<p style="text-align: justify;">Bạn có thể liên hệ tới tổng đài&nbsp;<strong>1900638367&nbsp;</strong>hoặc qua kênh fanpage<a href="https://www.facebook.com/official.isofhcare">&nbsp;ISOFHCARE_official</a>&nbsp;để được nhân viên hỗ trợ.&nbsp;</p>
</div></div>
  <div class="btn-footer">
     <button type="button" class="ant-btn ant-btn-default">
        <span>Xem thêm thông tin</span>
        <span role="img" aria-label="arrow-down" class="anticon anticon-arrow-down">
            <svg viewBox="64 64 896 896" focusable="false" data-icon="arrow-down" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M862 465.3h-81c-4.6 0-9 2-12.1 5.5L550 723.1V160c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v563.1L255.1 470.8c-3-3.5-7.4-5.5-12.1-5.5h-81c-6.8 0-10.5 8.1-6 13.2L487.9 861a31.96 31.96 0 0048.3 0L868 478.5c4.5-5.2.8-13.2-6-13.2z">              
            </path></svg>
        </span>
          </button>
            </div>
             </div>
               </div>
            </div>
        <div class="styled__RateContainer-sc-19yai6z-0 fkfkuN container-fluid">
        </div>
        @endforeach
   </div>
@endsection