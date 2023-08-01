<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="includes/normalize.css">
  <link rel="stylesheet" href="includes/style.css">


</head>

<body>
  <h1>Welcome to this cool site</h1>
  <p id="welcometext">I will help you find the best demonstration video.</p>
  <form id="form">
    <label for="body_parts">What body part would you like to train:</label>
    <select id="body_parts" name="body_parts">
      <option value="chest">Chest</option>
      <option value="back">Back</option>
      <option value="legs">Legs</option>
      <option value="glutes">Glutes</option>
      <option value="shoulders">Shoulders</option>
      <option value="biceps">Biceps</option>
      <option value="triceps">Triceps</option>
      <option value="abs">Abs</option>
    </select>
    <input type="submit" value="Recommend">
  </form>


  <div id="bench_press" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/SCVCLChPQFY">
    </iframe>
  </div>

  <div id="deadlift" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/1ZXobu7JvvE">
    </iframe>
  </div>

  <div id="back_squat" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/QmZAiBqPvZw">
    </iframe>
  </div>

  <div id="hip_thrust" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/SEdqd1n0cvg">
    </iframe>
  </div>

  <div id="shoulder_press" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/5yWaNOvgFCM">
    </iframe>
  </div>

  <div id="bicep_curl" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/ykJmrZ5v0Oo">
    </iframe>
  </div>

  <div id="lying_tricep_extension" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/JGWZcp5qdwY">
    </iframe>
  </div>

  <div id="sit_up" hidden>
    <iframe width="420" height="345" src="https://www.youtube.com/embed/jDwoBqPH0jk">
    </iframe>
  </div>
  <script src="script.js"></script>

  <p id="offer">Was the video helpful? If yes, subscribe to this newsletter and I will send you more detailed programs.
    </p>
  <h2>I wanna subscribe to the newsletter</h2>
  <form id="newsletter" action="includes/connection2023.php" method=post>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age"><br>
    <p>Gender</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">female</label><br>
    <p>Level</p>
    <input type="radio" id="Beginner" name="level" value="Beginner">
    <label for="Beginner">Beginner</label><br>
    <input type="radio" id="Intermediate" name="level" value="Intermediate">
    <label for="Intermediate">Intermediate</label><br>
    <input type="radio" id="Advanced" name="level" value="Advanced">
    <label for="Advanced">Advanced</label><br><br>
    <label for="email">Email address:</label><br>
    <input type="email" id="email" name="email"><br>
    <button>Send</button>

  </form>
  <script src="includes/script.js"></script>
</body>

</html>