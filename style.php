<style>
@import url("https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
body {
  overflow-x: hidden;
  background-color: #021b29;
  margin: 0;
}

.myName {
  color: #4afcff;
  font-family: 'Source Code Pro', monospace;
  font-weight: 700;
}

.slideOneText {
  position: absolute;
  color: #eee;
  font-size: 0px;
  font-family: 'Montserrat', sans-serif;
  left: 50%;
  top: 57%;
  transform: translate(-50%,-43%);
  animation: slideOneTextAnimation 0.5s  3s  linear forwards;
}

.slideOne{
  display: flex;
  height: 100vh;
  width: 100vw;
}

.slideTwo{
  height: 100vh;
  width: 100vw;
  position: relative;
}

.frameOneSpan {
  position: relative;
  width: max-content;
  font-family: "Source Code Pro", monospace;
  color: #fff;
  font-size: 40px;
  align-self: center;
  margin: auto;
}

.frameOneSpan::before,
.frameOneSpan::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

.frameOneSpan::before {
  animation: typeWriterAnimation 2.5s steps(23) forwards;
  background-color: #021b29;
}

.frameOneSpan::after {
  background-color: #fff;
  width: 0.125em;
  animation: typeWriterAnimation 2.5s steps(23) forwards,
    cursorBlinkAnimation 1.2s linear infinite 3s;
}

.bgSquare{
  background-color: #0b5178;
  width: 75vw;
  height: 100vh;
  position: absolute;
  left: -50%;
  transform: rotate(45deg);
  z-index: -333;
}

.bgSquare2{
  background-color: #1b84bf;
  width: 80%;
  height: 80%;
  right: 20%;
}

code{
  color: #aaa;
  font-size: large;
  margin-left: 1.0em;
}

.about{
  position: absolute;
  top: 15%;
}

  .aboutPara{
    color: #fff;
    font-size: 2em;
    list-style: none;
    font-family: sans-serif;
    margin-left: 1.25em;
    line-height: 1.3em;
  }


@keyframes typeWriterAnimation {
  from {
    left: 0;
  }
  to {
    left: 100%;
  }
}

@keyframes cursorBlinkAnimation {
  from {
    background-color: #000;
  }
  to {
    background-color: #fff;
  }
}

@keyframes slideOneTextAnimation {
  0% {font-size: 0px}
  100% {font-size: large;}
}

@keyframes fadeInAnimation {
  0%{left: -100vw}
  100%{left: 0}
}
</style>