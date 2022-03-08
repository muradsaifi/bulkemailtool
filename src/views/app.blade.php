<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('bulk_email_tool.send')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('bulk_email_recent')}}">Sent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Other</a>
        </li>
      </ul>
    </div>
  </nav>