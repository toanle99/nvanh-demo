<style>
  * {
    box-sizing: border-box;
  }
  input[type=text],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    /* resize: vertical; */
  }
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }
  input[type=submit]:hover {
    background-color: #45a049;
  }
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  .col-75 {
    float: left;
    width: 40%;
    margin-top: 6px;
  }
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25,
    .col-75,
    input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
</style>

<h2>Infor user</h2>
<p>
  @if(session('messages'))
  {{session('messages')}}
  @endif
</p>

<div class="container">
  <form action="#">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" disabled id="title" value="{{ $user['username'] }}" name="username">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" disabled id="title" value="{{ $user['firstname'] }}" name="username">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" disabled id="title" value="{{ $user['lastname'] }}" name="username">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">birthday</label>
      </div>
      <div class="col-75">
      <input type="text" disabled id="title" value="{{ $user['birthday'] }}" name="birthday">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">gender</label>
      </div>
      <div class="col-75">
      <input type="text" disabled id="title" value="{{ $user['gender'] }}" name="gender">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Email</label>
      </div>
      <div class="col-75">
      <input type="text" disabled id="title" value="{{ $user['email'] }}" name="email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Email</label>
      </div>
      <div class="col-75">
      <input type="text" disabled id="title" value="{{ $user['username'] }}" name="title">
      </div>
    </div>
    <br>
  </form>
</div>