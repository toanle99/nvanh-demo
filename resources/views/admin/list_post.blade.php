<style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td,
  #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #customers tr:hover {
    background-color: #ddd;
  }

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }

  .button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }

  .button2 {
    background-color: #008CBA;
  }

  /* Blue */
  .button3 {
    background-color: #f44336;
  }

  /* Red */
  .button5 {
    background-color: #555555;
  }

  /* Black */
</style>
</head>

<body>

  <h1>List post</h1>
  <p>
    @if(session('message'))
    {{session('message')}}
    @endif
  </p>
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Content</th>
      <th></th>
    </tr>
    @foreach($posts as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->title}}</td>
      <td>{{$item->content}}</td>
      <td>
        <a href="{{ route('user.detail.post', $item->id) }}" class="button button5">Detail</a>
      </td>
    </tr>
    @endforeach
  </table>
  <div>
    {{ $posts->links() }}
  </div>