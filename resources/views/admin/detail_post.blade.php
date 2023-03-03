<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0 auto;
      max-width: 800px;
      padding: 0 20px;
    }

    .container {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      margin: 10px 0;
    }

    .darker {
      border-color: #ccc;
      background-color: #ddd;
    }

    .container::after {
      content: "";
      clear: both;
      display: table;
    }

    .container img {
      float: left;
      max-width: 60px;
      width: 100%;
      margin-right: 20px;
      border-radius: 50%;
    }

    .container img.right {
      float: right;
      margin-left: 20px;
      margin-right: 0;
    }

    .time-right {
      float: right;
      color: #aaa;
    }

    .time-left {
      float: left;
      color: #999;
    }

    .form-popup {
      display: none;
      position: absolute;
      margin: 50px;
      border: 3px solid #f1f1f1;
      z-index: 1;
      background-color: white;
      width: 400px;
      height: 400px;
      overflow: scroll;
    }
  </style>
</head>

<body>

  <h2>list Comments</h2>
  <h3>Post: {{ $postTitle }}</h3>
  <button class="open-button" onclick="openForm()">like</button>
  <div class="form-popup" id="myForm">
    @foreach($likes as $index)
    <p style="padding-left: 20px;">{{ $index->user->username ?? 'ago' }}</p>
    @endforeach
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
  @foreach($comments as $index)
  <div class="container">
    <p>
    <h5>
      {{ $index->user->username }}:
    </h5>
    {{$index->comment_text }}
    </p>
    <span class="time-right">{{ $index->created_at ?? 'ago' }}</span>
  </div>
  @endforeach
  {{ $comments->links() }}
</body>
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>

</html>