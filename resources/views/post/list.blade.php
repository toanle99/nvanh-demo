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

  <h1>List Posts</h1>
  <p>
    @if(session('message'))
    {{session('message')}}
    @endif
  </p>
  <div>
    <a href="{{ url('posts/create') }}">New</a>
  </div>
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Content</th>
      <th>Like</th>
      <th>Comment</th>
      <th>Date</th>
      <th></th>
    </tr>
    @foreach($user as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->title}}</td>
      <td>{{$item->content}}</td>
      <td>{{$item->count_like}}</td>
      <td>{{$item->count_comment}}</td>
      <td>{{$item->created_at}}</td>
      <td>
        @if($item->status === 1)
        <a href="{{ route('posts.edit', $item->id) }}" class="button button5">Hidden</a>
        @else
        <a href="{{ route('posts.edit', $item->id) }}" class="button">Show</a>
        @endif
        <a href="{{ route('posts.show', $item->id) }}" class="button button2">Edit</a>
        <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="button button3" onclick="return confirm('Are you sure ?');">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  <div>
    {{ $user->links() }}
  </div>