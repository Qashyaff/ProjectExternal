<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" type="image/png" href="https://www.freeiconspng.com/thumbs/resume-icon-png/resume-icon-png-15.png">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900");
.container, .container-sm, .container-md {
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
  width: 100%;
}

@media (min-width: 576px) {
  .container, .container-sm, .container-md {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container, .container-sm, .container-md {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container, .container-sm, .container-md {
    max-width: 1140px;
  }
}

.container-sm {
  max-width: 640px;
}

.container-md {
  max-width: 960px;
}

/* A flex grid to be used as a backup in case display grid
   is not supported in the browser. */
.grid {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.grid .grid-col-sm-1, .grid .grid-col-sm-2, .grid .grid-col-sm-3, .grid .grid-col-sm-4, .grid .grid-col-sm-5, .grid .grid-col-sm-6, .grid .grid-col-sm-7, .grid .grid-col-sm-8, .grid .grid-col-sm-9, .grid .grid-col-sm-10, .grid .grid-col-sm-11, .grid .grid-col-sm-12, .grid .grid-col-sm,
.grid .grid-col-sm-auto, .grid .grid-col-md-1, .grid .grid-col-md-2, .grid .grid-col-md-3, .grid .grid-col-md-4, .grid .grid-col-md-5, .grid .grid-col-md-6, .grid .grid-col-md-7, .grid .grid-col-md-8, .grid .grid-col-md-9, .grid .grid-col-md-10, .grid .grid-col-md-11, .grid .grid-col-md-12, .grid .grid-col-md,
.grid .grid-col-md-auto, .grid .grid-col-lg-1, .grid .grid-col-lg-2, .grid .grid-col-lg-3, .grid .grid-col-lg-4, .grid .grid-col-lg-5, .grid .grid-col-lg-6, .grid .grid-col-lg-7, .grid .grid-col-lg-8, .grid .grid-col-lg-9, .grid .grid-col-lg-10, .grid .grid-col-lg-11, .grid .grid-col-lg-12 {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

@media (min-width: 576px) {
  .grid .grid-col-sm-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .grid .grid-col-sm-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .grid .grid-col-sm-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .grid .grid-col-sm-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .grid .grid-col-sm-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .grid .grid-col-sm-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .grid .grid-col-sm-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .grid .grid-col-sm-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .grid .grid-col-sm-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .grid .grid-col-sm-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .grid .grid-col-sm-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .grid .grid-col-sm-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 768px) {
  .grid .grid-col-md-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .grid .grid-col-md-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .grid .grid-col-md-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .grid .grid-col-md-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .grid .grid-col-md-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .grid .grid-col-md-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .grid .grid-col-md-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .grid .grid-col-md-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .grid .grid-col-md-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .grid .grid-col-md-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .grid .grid-col-md-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .grid .grid-col-md-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 992px) {
  .grid .grid-col-lg-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .grid .grid-col-lg-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .grid .grid-col-lg-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .grid .grid-col-lg-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .grid .grid-col-lg-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .grid .grid-col-lg-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .grid .grid-col-lg-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .grid .grid-col-lg-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .grid .grid-col-lg-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .grid .grid-col-lg-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .grid .grid-col-lg-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .grid .grid-col-lg-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}

/* If the grid is supported then I will use that, if not then
the display flex can serve as a backup. */
@supports (display: grid) {
  .grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-gap: 1rem;
    -ms-flex-wrap: none;
        flex-wrap: none;
    margin-right: none;
    margin-left: none;
  }
  .grid > [class^="grid-col-"] {
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none;
    max-width: none;
  }
  .grid .grid-col-sm-1, .grid .grid-col-sm-2, .grid .grid-col-sm-3, .grid .grid-col-sm-4, .grid .grid-col-sm-5,
  .grid .grid-col-sm-6, .grid .grid-col-sm-7, .grid .grid-col-sm-8, .grid .grid-col-sm-9, .grid .grid-col-sm-10,
  .grid .grid-col-sm-11, .grid .grid-col-sm-12, .grid .grid-col-md-1, .grid .grid-col-md-2, .grid .grid-col-md-3,
  .grid .grid-col-md-4, .grid .grid-col-md-5, .grid .grid-col-md-6, .grid .grid-col-md-7, .grid .grid-col-md-8,
  .grid .grid-col-md-9, .grid .grid-col-md-10, .grid .grid-col-md-11, .grid .grid-col-md-12, .grid .grid-col-lg-1,
  .grid .grid-col-lg-2, .grid .grid-col-lg-3, .grid .grid-col-lg-4, .grid .grid-col-lg-5, .grid .grid-col-lg-6,
  .grid .grid-col-lg-7, .grid .grid-col-lg-8, .grid .grid-col-lg-9, .grid .grid-col-lg-10, .grid .grid-col-lg-11,
  .grid .grid-col-lg-12 {
    grid-column: span 12;
  }
  @media (min-width: 544px) {
    .grid .grid-col-sm-12 {
      grid-column: span 12;
    }
    .grid .grid-col-sm-11 {
      grid-column: span 11;
    }
    .grid .grid-col-sm-10 {
      grid-column: span 10;
    }
    .grid .grid-col-sm-9 {
      grid-column: span 9;
    }
    .grid .grid-col-sm-8 {
      grid-column: span 8;
    }
    .grid .grid-col-sm-7 {
      grid-column: span 7;
    }
    .grid .grid-col-sm-6 {
      grid-column: span 6;
    }
    .grid .grid-col-sm-5 {
      grid-column: span 5;
    }
    .grid .grid-col-sm-4 {
      grid-column: span 4;
    }
    .grid .grid-col-sm-3 {
      grid-column: span 3;
    }
    .grid .grid-col-sm-2 {
      grid-column: span 2;
    }
    .grid .grid-col-sm-1 {
      grid-column: span 1;
    }
  }
  @media (min-width: 768px) {
    .grid .grid-col-md-12 {
      grid-column: span 12;
    }
    .grid .grid-col-md-11 {
      grid-column: span 11;
    }
    .grid .grid-col-md-10 {
      grid-column: span 10;
    }
    .grid .grid-col-md-9 {
      grid-column: span 9;
    }
    .grid .grid-col-md-8 {
      grid-column: span 8;
    }
    .grid .grid-col-md-7 {
      grid-column: span 7;
    }
    .grid .grid-col-md-6 {
      grid-column: span 6;
    }
    .grid .grid-col-md-5 {
      grid-column: span 5;
    }
    .grid .grid-col-md-4 {
      grid-column: span 4;
    }
    .grid .grid-col-md-3 {
      grid-column: span 3;
    }
    .grid .grid-col-md-2 {
      grid-column: span 2;
    }
    .grid .grid-col-md-1 {
      grid-column: span 1;
    }
  }
  @media (min-width: 992px) {
    .grid .grid-col-lg-12 {
      grid-column: span 12;
    }
    .grid .grid-col-lg-11 {
      grid-column: span 11;
    }
    .grid .grid-col-lg-10 {
      grid-column: span 10;
    }
    .grid .grid-col-lg-9 {
      grid-column: span 9;
    }
    .grid .grid-col-lg-8 {
      grid-column: span 8;
    }
    .grid .grid-col-lg-7 {
      grid-column: span 7;
    }
    .grid .grid-col-lg-6 {
      grid-column: span 6;
    }
    .grid .grid-col-lg-5 {
      grid-column: span 5;
    }
    .grid .grid-col-lg-4 {
      grid-column: span 4;
    }
    .grid .grid-col-lg-3 {
      grid-column: span 3;
    }
    .grid .grid-col-lg-2 {
      grid-column: span 2;
    }
    .grid .grid-col-lg-1 {
      grid-column: span 1;
    }
  }
}

* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  font-family: 'Roboto', serif;
  font-weight: 300;
  color: #fefffe;
  background: #111;
}

body p {
  font-size: 1.125rem;
  line-height: 1.75rem;
  margin-bottom: 1.5rem;
}

html {
  font-size: 0.8rem;
}

@media (min-width: 544px) {
  html {
    font-size: 0.9rem;
  }
}

@media (min-width: 768px) {
  html {
    font-size: 1rem;
  }
}

button, .btn {
  cursor: pointer;
}

.text-center {
  text-align: center;
}

.section-title {
  font-weight: 100;
  text-transform: uppercase;
  margin-bottom: 2rem;
}

.display-flex-between {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

@media (min-width: 544px) {
  .display-flex-between {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}

.btn {
  font-size: 1.25rem;
  font-weight: 700;
  padding: 1rem 5rem;
  margin: 1.5625rem 0 0;
  border-radius: 2px;
  text-align: center;
  display: inline-block;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  background-color: transparent;
  text-decoration: none;
}

.btn-outline-teal, .btn-outline-purple {
  color: #00d8b2;
  border: 2px solid #00d8b2;
}

.btn-outline-teal:hover, .btn-outline-purple:hover {
  background-color: #00d8b2;
  color: #ffffff;
}

.btn-outline-purple {
  color: #5458FF;
  border: 2px solid #5458FF;
}

.btn-outline-purple:hover {
  background-color: #5458FF;
}

h1 {
  font-size: 2.5rem;
}

h2 {
  font-size: 2rem;
}

h3 {
  font-size: 1.75rem;
}

h4 {
  font-size: 1.5rem;
}

h5 {
  font-size: 1.25rem;
}

h6 {
  font-size: 1rem;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 700;
  font-family: inherit;
  margin-bottom: 1rem;
  line-height: 1.5;
  color: inherit;
}

.wrapper {
  position: relative;
  width: 100%;
  margin: 0 auto;
}

.content-wrapper-sm {
  position: relative;
  width: 100%;
  margin: 0 auto;
  max-width: 1200px;
}

.content-wrapper {
  position: relative;
  padding: 5rem 20%;
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
}

.content-wrapper-lg {
  position: relative;
  padding: 12rem 20%;
  width: 100%;
  margin: 0 auto;
}

.contact-form .form-group {
  z-index: 1;
  margin-top: 1.5rem;
}

.contact-form .form-group input, .contact-form .form-group textarea {
  background: transparent;
  border: 0;
  border-bottom: 2px solid #00d8b2;
  border-radius: 0;
  color: #00d8b2;
  outline: none;
  display: block;
  width: 100%;
}

.contact-form .form-group input:focus, .contact-form .form-group textarea:focus {
  outline: none;
  border-color: inherit;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.contact-form .form-group input:focus ~ label,
.contact-form .form-group input:valid ~ label,
.contact-form .form-group textarea:focus ~ label,
.contact-form .form-group textarea:valid ~ label {
  top: -1.1rem;
  left: 0;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
}

.contact-form .form-group label {
  position: absolute;
  top: 0.5rem;
  left: 0.8rem;
  color: #fefffe;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  z-index: -1;
}

.contact-form .form-group textarea {
  resize: none;
}

#menu-button {
  cursor: pointer;
  padding: 0.5rem;
  display: block;
}

@media (min-width: 768px) {
  #menu-button {
    display: none;
  }
}

#menu-button .bar1, #menu-button .bar2, #menu-button .bar3 {
  width: 35px;
  height: 3px;
  background-color: #fefffe;
  margin: 6px 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  border-radius: 10px;
}

.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-8px, 5px);
          transform: rotate(-45deg) translate(-8px, 5px);
}

.change .bar2 {
  opacity: 0;
}

.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-6px, -6px);
          transform: rotate(45deg) translate(-6px, -6px);
}

.main-nav {
  display: block;
  padding: 1rem 2rem;
  position: absolute;
  width: 100%;
  z-index: 2;
  -webkit-transition: background 0.3s ease-in-out;
  transition: background 0.3s ease-in-out;
  background: #111;
  border-bottom: 1px solid rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
          box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
}

.main-nav > .content-wrapper-sm {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

@media (min-width: 768px) {
  .main-nav {
    background: transparent;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}

.main-nav .navbar-brand {
  font-size: 1.5rem;
  font-weight: 700;
  color: #ffffff;
  text-decoration: none;
}

.main-nav .nav-links {
  position: relative;
  top: auto;
  padding: 0;
  margin: 0;
  list-style: none;
  display: none;
  overflow: hidden;
  height: 0;
  background: transparent;
}

@media (min-width: 768px) {
  .main-nav .nav-links {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: auto;
  }
}

.main-nav .nav-links li {
  margin: 1rem;
  text-align: center;
}

.main-nav .nav-links li a {
  color: #fefffe;
  display: block;
  text-decoration: none;
}

.main-nav .nav-open {
  position: absolute;
  top: 133%;
  width: 100%;
  display: block;
  height: auto;
  background: #111;
}

.main-nav .nav-open li {
  margin: 0;
  border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.main-nav .nav-open li a {
  padding: 2rem 0;
}

.fixed-nav {
  background: #111;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
          box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
  -webkit-transition: background 0.3s ease-in-out;
  transition: background 0.3s ease-in-out;
}

header {
  position: relative;
  height: 100vh;
  color: #ffffff;
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

header h1 {
  font-size: 3.25rem;
  font-weight: 100;
  text-transform: uppercase;
  line-height: 1.2;
  margin: 0;
}

@media (min-width: 544px) {
  header h1 {
    font-size: 4.25rem;
  }
}

@media (min-width: 768px) {
  header h1 {
    font-size: 6.25rem;
  }
}

header h2 {
  font-weight: 300;
  font-size: 1.5rem;
}

.img-absolute {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  opacity: 0.8;
  z-index: -1;
}

#map {
  height: 350px;
  width: 100%;
}

footer {
  padding: 2rem;
}

footer .social-links ul {
  padding: 0;
  margin: 0;
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

footer .social-links ul li {
  margin: 1rem;
  text-align: center;
}

footer .social-links ul li a {
  font-size: 1.5rem;
  color: #fefffe;
  display: block;
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
        </style>
</head>
<body>
    <!-- Main Navigation -->

<nav class="main-nav" id="main-nav">
 <div class="content-wrapper-sm">
  <a href="{{ route('homepage')}}" class="navbar-brand"> MR</a>
  <div id="menu-button">
   <div class="bar1"></div>
   <div class="bar2"></div>
   <div class="bar3"></div>
  </div>
  <ul class="nav-links">
   <li><a href="#about">About</a></li>
   <li><a href="{{ route('myresume')}}">My Resume</a></li>

  </ul>
 </div>
</nav>

<!-- Main header -->
<header>
 <!-- First replaceble image -->
 <img class="" src="" alt="">
 <div class="wrapper astonish animated fadeInDown">
  <h1><strong>My</strong> Homepage Project</h1>
  <h2> To satisfy the customer in Digital Resume & Physical Resume<br>
                    Created by Tester.</h2>
 </div>
</header>

<!-- Main content -->
<main>
 <div class="content-wrapper" id="about">
  <!-- second replaceble image -->
  <img class="" src="" alt="">
  <div class="grid">
   <div class="grid-col-sm-12 grid-col-md-6 astonish" data-animation="fadeInLeft">
    <h2 class="section-title">About  Resume</h2>
    <p>CityScapes is a fully responsive and customizable landing page template. All images can easily be replaced from the html side, without having to dig through the css.</p>
    <p>The full version of this template is available at Github and it comes with the SASS files in order to provide quicker customization features, for those who are developers.</p>
    <p>Javascript files are also included, they are used to enhance the user experience but apart from the menu.js file, they are all optional.</p>
   </div>
  </div>
 </div>

 <div id="reserve" class="content-wrapper-lg text-center astonish" data-animation="zoomIn">
  <h2 class="section-title">Explore New Pathways</h2>
  <p> If you want a unique looking landing page that has a unique artistic style that will attract clients, then this is the template for you. Go
   ahead and download it for free from Github.</p>
  <a href="https://github.com/Qashyaff/ProjectExternal/tree/alluqmanbranch" class="btn btn-outline-purple" target="_blank">Download</a>
 </div>

 <div class="content-wrapper" id="contact">
  <!-- Third replaceble image -->
  <img class="" src="" alt="">


  


 <!-- This is an embedded Google map, this is easily customizable especially if you get a Google API key, this will allow for more customizable features. -->
 <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d81584.50435706123!2d-80.8378430874413!3d35.23358937843391!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1514142608486" frameborder="0" style="border:0" allowfullscreen></iframe>
</main>

<!-- Main footer -->
<footer>
 <div class="content-wrapper-sm display-flex-between">
  <!-- Easily replaceble copyright information -->
  <small>Your copyright 2022.</small>

  <!-- Make sure to edit the links so that they go to your social media. -->
  <div class="social-links">
   <ul>
    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
   </ul>
  </div>
 </div>
</footer>
</body>
</html>