<!doctype html>
<html>
    <head>
        <title>香港樹木搜尋 - {{$tree['Code']}}</title>

        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="HKSearchTree">
        <link rel="apple-touch-icon" href="https://res.cloudinary.com/dcmnwc3ux/image/upload/v1493918347/%E8%9E%A2%E5%B9%95%E5%BF%AB%E7%85%A7_2017-05-05_%E4%B8%8A%E5%8D%881.09.00_fnw5k9.png">

        <!-- boostrap style sheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <style type="text/css">
                a:link {
                    text-decoration: none;
                    color: #1a0dab;
                }

                a:visited {
                    text-decoration: none;
                }

                a:hover {
                    text-decoration: underline;
                }

                a:active {
                    text-decoration: underline;
                }
                .sultStats {
                    color: #808080;
                    font-size: small;
                }
            </style>
            <script>
            var x;
            function search() {
                x = document.getElementById("searchInput").value;
                window.location.href = "../search/"+x;
            }
            </script>

        </head>
        <body >
            
            
            
            <div class="jumbotron container" >
              <h1>香港樹木搜尋</h1> 
              <p> 如欲了解更多，請前往 <a href="https://hk-tree.lotusfa.com/">https://hk-tree.lotusfa.com/</a></p>
              <p></p> 
              <div class="input-group" >
                <input id="searchInput" type="text" class="form-control" placeholder="Enter Tree Code....">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button" onclick="search()">Search</button>
                </span>
              </div>
              <p class="sultStats"><small>Search More: ie. <a href="../search/{{$ranString}}">{{$ranString}}</a></small></p>
            </div>
        <div class="container">
          <div class="searchDetail">
              <table class="table" >
                @foreach ( $tree as $key=>$info )
                  <tr v-for="(item, index) in display_detail">
                    <td>{{$key}}</td>
                    <td>{{$info}}</td>
                  </tr>
                @endforeach
                <tbody>
                </tbody>
              </table>
              <div class="thumbnail" >
                <img src="{{$imgLink}}">
              </div>
            </div>
        </div>
          <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
          <p>以上資料由<a href="http://www.greening.gov.hk/treeregister/map/treeIndex.aspx#districtPanel" >香港政府網站</a>提供</p>
    <p>Powered by <a href="https://lotusfa.com/" title="LotusFa" target="_blank" class="w3-hover-text-green">Lotusfa.com</a></p>
  </footer>
  <!-- Google Analytics -->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-80492067-1', 'auto');
      ga('send', 'pageview');

    </script>
    </body>
</html>