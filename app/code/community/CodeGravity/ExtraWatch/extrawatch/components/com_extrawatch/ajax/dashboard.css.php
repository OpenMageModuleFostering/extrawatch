<?php
header("Content-Type: text/css");

if (!defined("DS")) {
    define("DS", DIRECTORY_SEPARATOR);
}

if (!defined('_JEXEC')) {
    define('_JEXEC', 1);
}

//define("ENV", 1);

$env = @$_REQUEST['env'];
$jBasePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR;
if (!defined('JPATH_BASE')) {
    define('JPATH_BASE', $jBasePath);
}
if (!defined('JPATH_BASE2')) {
    define('JPATH_BASE2', $jBasePath);
}

$frontend = @$_REQUEST['frontend'];

// compatibility with ZOO
if (defined('JVERSION') && version_compare( JVERSION, '2.5.0', '<' )) {
    $mainframe = & JFactory :: getApplication('site');
    $mainframe->initialise();
}

$env = @$_REQUEST['env'];
$projectId = @$_REQUEST['projectId'];

if ($env == "ExtraWatchMagentoEnv") {
    $GLOBALS['mageRunCode'] = true;
}

require_once JPATH_BASE . DS."components" . DIRECTORY_SEPARATOR . "com_extrawatch" . DIRECTORY_SEPARATOR . "includes.php";

if (!defined("_EW_PROJECT_ID")) {
    define("_EW_PROJECT_ID", $projectId);
}


$extraWatch = new ExtraWatchMain();
$extraWatch->helper->setNoindexHttpHeaders();   //setting explicitly for ajax requests
$extraWatch->config->initializeTranslations();
$extraWatchHTML = new ExtraWatchHTML();
$extraWatch->block->checkPermissions();
$env = @$_REQUEST['env'];


?>
html {
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}

[hidden],
template {
  display: none;
}
a {
  background: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  margin: .67em 0;
  font-size: 2em;
}
mark {
  color: #000;
  background: #ff0;
}
small {
  font-size: 80%;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -.5em;
}
sub {
  bottom: -.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  height: 0;
  -moz-box-sizing: content-box;
       box-sizing: content-box;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font: inherit;
  color: inherit;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
input{
color:#2c3e50;
border-color:#2c3e50;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  padding: .35em .625em .75em;
  margin: 0 2px;
  border: 1px solid #c0c0c0;
}
legend {
  padding: 0;
  border: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
border-color: #2c3e50;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 0;
}
@media print {
  * {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;

    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  select {
    background: #fff !important;
  }
  .ew-navbar {
    display: none;
  }
  .table td,
  .table th {
    //background-color: #fff !important;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

html {
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  //font-size: 14px;
  line-height: 1.42857143;
  color: #2c3e50;
  background-color: #fdfdfd;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
#visits a {
  color: #34495E !important; 
  text-decoration: none;
}
a:hover,
a:focus {
  color: #2c3e50;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  display: inline-block;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
}

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 2px solid #eee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: #2c3e50;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #999;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 18px !important;
}
h2,
.h2 {
  font-size: 16px !important;
}
h3,
.h3 {
  font-size: 14px !important;
}
h4,
.h4 {
  font-size: 12px !important;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 200;
  line-height: 1.4;
}
@media {
  .lead {
    font-size: 21px;
  }
}
small,
.small {
  font-size: 85%;
}
cite {
  font-style: normal;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-muted {
  color: #999;
}
.text-primary {
  color: #428bca;
}
a.text-primary:hover {
  color: #3071a9;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #428bca;
}
a.bg-primary:hover {
  background-color: #3071a9;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    overflow: hidden;
    clear: left;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #999;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #999;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #eee;
  border-left: 0;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
blockquote:before,
blockquote:after {
  content: "";
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  white-space: nowrap;
  background-color: #f9f2f4;
  border-radius: 4px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.ew-container {
  padding-right: 15px;
  padding-left: 5px;
  margin-right: auto;
  margin-left: auto;
  width: auto;
  padding: 0 15px;
  font-size:11px;
  width:80%;
}
@media {
  .container {
    width: 100%;
  }
}
@media {
  .container {
    width: 100%;
  }
}
@media {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  //padding-right: 15px; - removed by matto
  //padding-left: 15px; - removed by matto
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: 0;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: 0;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0;
}
@media {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: 0;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: 0;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0;
  }
}
@media {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: 0;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: 0;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.36666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}
@media {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: 0;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: 0;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0;
  }
}
table {
  max-width: 100%;
  //background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 1px solid #2c3e50;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #2c3e50;
}
.table .table {
 //background-color: #2c3e50; //was causing wrong table TH
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #2c3e50;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped {
  border: 1px solid #2c3e50;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #dedede;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  //background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr.active:hover > th {
  //background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  //background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr.success:hover > th {
  //background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  //background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr.info:hover > th {
  //background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
@media (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: scroll;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  /* IE8-9 */
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #2c3e50;
  background-color: #fdfdfd;
  background-image: none;
  border: 1px solid #2c3e50;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #2c3e50;
  outline: 0;
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: #eee;
  opacity: 1;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
input[type="date"] {
  line-height: 34px;
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  display: block;
  min-height: 20px;
  padding-left: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  display: inline;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  float: left;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  vertical-align: middle;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
.radio[disabled],
.radio-inline[disabled],
.checkbox[disabled],
.checkbox-inline[disabled],
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"],
fieldset[disabled] .radio,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.has-feedback .form-control-feedback {
  position: absolute;
  top: 25px;
  right: 0;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.form-control-static {
  margin-bottom: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    float: none;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .control-label,
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px;
}
.form-horizontal .form-control-static {
  padding-top: 7px;
}
@media {
  .form-horizontal .control-label {
    text-align: right;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  top: 0;
  right: 15px;
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  pointer-events: none;
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
  opacity: .65;
}
.btn-default {
  color: #2c3e50;
  background-color: #fdfdfd;
  border-color: #2c3e50;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  color: #ecf0f1;
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .ew_badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #ecf0f1;
  background-color: #34495e;
  border-color: #34495e;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  color:#ecf0f1;
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #428bca;
  border-color: #357ebd;
}
.btn-primary .ew_badge {
  color: #428bca;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #47a447;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .ew_badge {
  font-size:10px !important;
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #39b3d7;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .ew_badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ed9c28;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .ew_badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #d2322d;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .ew_badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  font-weight: normal;
  color: #428bca;
  cursor: pointer;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #2a6496;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #999;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
  padding-right: 0;
  padding-left: 0;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity .15s linear;
          transition: opacity .15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height .35s ease;
          transition: height .35s ease;
}

@font-face{
 font-family:'Glyphicons Regular';
 src:url('<?php echo $extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/css/fonts/";?>glyphicons-regular.eot');
 src:url('<?php echo $extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/css/fonts/";?>glyphicons-regular.eot?#iefix') format('embedded-opentype'),url('<?php echo $extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/css/fonts/";?>glyphicons-regular.woff') format('woff'),url('<?php echo $extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/css/fonts/";?>glyphicons-regular.ttf') format('truetype'),url('<?php echo $extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/css/fonts/";?>glyphicons-regular.svg#glyphiconsregular') format('svg');
 font-weight:normal;
 font-style:normal
 }
.glyphicons{
  position:relative;
  padding-left:20px;
 
  text-decoration:none;
  *display:inline;
  *zoom:1;
  vertical-align:middle
}

.glyphicons:before{
  position:absolute;
  left:0;
  top:0;
  display:inline-block;
  margin:0 5px 0 0;
  font:14px 'Glyphicons Regular';
  font-style:normal;
  font-weight:normal;
 
  *display:inline;
  *zoom:1;
  vertical-align:middle;
  text-transform:none;
  -webkit-font-smoothing:antialiased
}

.glyphicons.white:before{color:#fff}.glyphicons.glass:before{content:"\E001"}.glyphicons.leaf:before{content:"\E002"}.glyphicons.dog:before{content:"\E003"}.glyphicons.user:before{content:"\E004"}.glyphicons.girl:before{content:"\E005"}.glyphicons.car:before{content:"\E006"}.glyphicons.user_add:before{content:"\E007"}.glyphicons.user_remove:before{content:"\E008"}.glyphicons.film:before{content:"\E009"}.glyphicons.magic:before{content:"\E010"}.glyphicons.envelope:before{content:"\2709"}.glyphicons.camera:before{content:"\E011"}.glyphicons.heart:before{content:"\E013"}.glyphicons.beach_umbrella:before{content:"\E014"}.glyphicons.train:before{content:"\E015"}.glyphicons.print:before{content:"\E016"}.glyphicons.bin:before{content:"\E017"}.glyphicons.music:before{content:"\E018"}.glyphicons.note:before{content:"\E019"}.glyphicons.heart_empty:before{content:"\E020"}.glyphicons.home:before{content:"\E021"}.glyphicons.snowflake:before{content:"\2744"}.glyphicons.fire:before{content:"\E023"}.glyphicons.magnet:before{content:"\E024"}.glyphicons.parents:before{content:"\E025"}.glyphicons.binoculars:before{content:"\E026"}.glyphicons.road:before{content:"\E027"}.glyphicons.search:before{content:"\E028"}.glyphicons.cars:before{content:"\E029"}.glyphicons.notes_2:before{content:"\E030"}.glyphicons.pencil:before{content:"\270F"}.glyphicons.bus:before{content:"\E032"}.glyphicons.wifi_alt:before{content:"\E033"}.glyphicons.luggage:before{content:"\E034"}.glyphicons.old_man:before{content:"\E035"}.glyphicons.woman:before{content:"\E036"}.glyphicons.file:before{content:"\E037"}.glyphicons.coins:before{content:"\E038"}.glyphicons.airplane:before{content:"\2708"}.glyphicons.notes:before{content:"\E040"}.glyphicons.stats:before{content:"\E041"}.glyphicons.charts:before{content:"\E042"}.glyphicons.pie_chart:before{content:"\E043"}.glyphicons.group:before{content:"\E044"}.glyphicons.keys:before{content:"\E045"}.glyphicons.calendar:before{content:"\E046"}.glyphicons.router:before{content:"\E047"}.glyphicons.camera_small:before{content:"\E048"}.glyphicons.dislikes:before{content:"\E049"}.glyphicons.star:before{content:"\E050"}.glyphicons.link:before{content:"\E051"}.glyphicons.eye_open:before{content:"\E052"}.glyphicons.eye_close:before{content:"\E053"}.glyphicons.alarm:before{content:"\E054"}.glyphicons.clock:before{content:"\E055"}.glyphicons.stopwatch:before{content:"\E056"}.glyphicons.projector:before{content:"\E057"}.glyphicons.history:before{content:"\E058"}.glyphicons.truck:before{content:"\E059"}.glyphicons.cargo:before{content:"\E060"}.glyphicons.compass:before{content:"\E061"}.glyphicons.keynote:before{content:"\E062"}.glyphicons.paperclip:before{content:"\E063"}.glyphicons.power:before{content:"\E064"}.glyphicons.lightbulb:before{content:"\E065"}.glyphicons.tag:before{content:"\E066"}.glyphicons.tags:before{content:"\E067"}.glyphicons.cleaning:before{content:"\E068"}.glyphicons.ruller:before{content:"\E069"}.glyphicons.gift:before{content:"\E070"}.glyphicons.umbrella:before{content:"\2602"}.glyphicons.book:before{content:"\E072"}.glyphicons.bookmark:before{content:"\E073"}.glyphicons.wifi:before{content:"\E074"}.glyphicons.cup:before{content:"\E075"}.glyphicons.stroller:before{content:"\E076"}.glyphicons.headphones:before{content:"\E077"}.glyphicons.headset:before{content:"\E078"}.glyphicons.warning_sign:before{content:"\E079"}.glyphicons.signal:before{content:"\E080"}.glyphicons.retweet:before{content:"\E081"}.glyphicons.refresh:before{content:"\E082"}.glyphicons.roundabout:before{content:"\E083"}.glyphicons.random:before{content:"\E084"}.glyphicons.heat:before{content:"\E085"}.glyphicons.repeat:before{content:"\E086"}.glyphicons.display:before{content:"\E087"}.glyphicons.log_book:before{content:"\E088"}.glyphicons.address_book:before{content:"\E089"}.glyphicons.building:before{content:"\E090"}.glyphicons.eyedropper:before{content:"\E091"}.glyphicons.adjust:before{content:"\E092"}.glyphicons.tint:before{content:"\E093"}.glyphicons.crop:before{content:"\E094"}.glyphicons.vector_path_square:before{content:"\E095"}.glyphicons.vector_path_circle:before{content:"\E096"}.glyphicons.vector_path_polygon:before{content:"\E097"}.glyphicons.vector_path_line:before{content:"\E098"}.glyphicons.vector_path_curve:before{content:"\E099"}.glyphicons.vector_path_all:before{content:"\E100"}.glyphicons.font:before{content:"\E101"}.glyphicons.italic:before{content:"\E102"}.glyphicons.bold:before{content:"\E103"}.glyphicons.text_underline:before{content:"\E104"}.glyphicons.text_strike:before{content:"\E105"}.glyphicons.text_height:before{content:"\E106"}.glyphicons.text_width:before{content:"\E107"}.glyphicons.text_resize:before{content:"\E108"}.glyphicons.left_indent:before{content:"\E109"}.glyphicons.right_indent:before{content:"\E110"}.glyphicons.align_left:before{content:"\E111"}.glyphicons.align_center:before{content:"\E112"}.glyphicons.align_right:before{content:"\E113"}.glyphicons.justify:before{content:"\E114"}.glyphicons.list:before{content:"\E115"}.glyphicons.text_smaller:before{content:"\E116"}.glyphicons.text_bigger:before{content:"\E117"}.glyphicons.embed:before{content:"\E118"}.glyphicons.embed_close:before{content:"\E119"}.glyphicons.table:before{content:"\E120"}.glyphicons.message_full:before{content:"\E121"}.glyphicons.message_empty:before{content:"\E122"}.glyphicons.message_in:before{content:"\E123"}.glyphicons.message_out:before{content:"\E124"}.glyphicons.message_plus:before{content:"\E125"}.glyphicons.message_minus:before{content:"\E126"}.glyphicons.message_ban:before{content:"\E127"}.glyphicons.message_flag:before{content:"\E128"}.glyphicons.message_lock:before{content:"\E129"}.glyphicons.message_new:before{content:"\E130"}.glyphicons.inbox:before{content:"\E131"}.glyphicons.inbox_plus:before{content:"\E132"}.glyphicons.inbox_minus:before{content:"\E133"}.glyphicons.inbox_lock:before{content:"\E134"}.glyphicons.inbox_in:before{content:"\E135"}.glyphicons.inbox_out:before{content:"\E136"}.glyphicons.cogwheel:before{content:"\E137"}.glyphicons.cogwheels:before{content:"\E138"}.glyphicons.picture:before{content:"\E139"}.glyphicons.adjust_alt:before{content:"\E140"}.glyphicons.database_lock:before{content:"\E141"}.glyphicons.database_plus:before{content:"\E142"}.glyphicons.database_minus:before{content:"\E143"}.glyphicons.database_ban:before{content:"\E144"}.glyphicons.folder_open:before{content:"\E145"}.glyphicons.folder_plus:before{content:"\E146"}.glyphicons.folder_minus:before{content:"\E147"}.glyphicons.folder_lock:before{content:"\E148"}.glyphicons.folder_flag:before{content:"\E149"}.glyphicons.folder_new:before{content:"\E150"}.glyphicons.edit:before{content:"\E151"}.glyphicons.new_window:before{content:"\E152"}.glyphicons.check:before{content:"\E153"}.glyphicons.unchecked:before{content:"\E154"}.glyphicons.more_windows:before{content:"\E155"}.glyphicons.show_big_thumbnails:before{content:"\E156"}.glyphicons.show_thumbnails:before{content:"\E157"}.glyphicons.show_thumbnails_with_lines:before{content:"\E158"}.glyphicons.show_lines:before{content:"\E159"}.glyphicons.playlist:before{content:"\E160"}.glyphicons.imac:before{content:"\E161"}.glyphicons.macbook:before{content:"\E162"}.glyphicons.ipad:before{content:"\E163"}.glyphicons.iphone:before{content:"\E164"}.glyphicons.iphone_transfer:before{content:"\E165"}.glyphicons.iphone_exchange:before{content:"\E166"}.glyphicons.ipod:before{content:"\E167"}.glyphicons.ipod_shuffle:before{content:"\E168"}.glyphicons.ear_plugs:before{content:"\E169"}.glyphicons.record:before{content:"\E170"}.glyphicons.step_backward:before{content:"\E171"}.glyphicons.fast_backward:before{content:"\E172"}.glyphicons.rewind:before{content:"\E173"}.glyphicons.play:before{content:"\E174"}.glyphicons.pause:before{content:"\E175"}.glyphicons.stop:before{content:"\E176"}.glyphicons.forward:before{content:"\E177"}.glyphicons.fast_forward:before{content:"\E178"}.glyphicons.step_forward:before{content:"\E179"}.glyphicons.eject:before{content:"\E180"}.glyphicons.facetime_video:before{content:"\E181"}.glyphicons.download_alt:before{content:"\E182"}.glyphicons.mute:before{content:"\E183"}.glyphicons.volume_down:before{content:"\E184"}.glyphicons.volume_up:before{content:"\E185"}.glyphicons.screenshot:before{content:"\E186"}.glyphicons.move:before{content:"\E187"}.glyphicons.more:before{content:"\E188"}.glyphicons.brightness_reduce:before{content:"\E189"}.glyphicons.brightness_increase:before{content:"\E190"}.glyphicons.circle_plus:before{content:"\E191"}.glyphicons.circle_minus:before{content:"\E192"}.glyphicons.circle_remove:before{content:"\E193"}.glyphicons.circle_ok:before{content:"\E194"}.glyphicons.circle_question_mark:before{content:"\E195"}.glyphicons.circle_info:before{content:"\E196"}.glyphicons.circle_exclamation_mark:before{content:"\E197"}.glyphicons.remove:before{content:"\E198"}.glyphicons.ok:before{content:"\E199"}.glyphicons.ban:before{content:"\E200"}.glyphicons.download:before{content:"\E201"}.glyphicons.upload:before{content:"\E202"}.glyphicons.shopping_cart:before{content:"\E203"}.glyphicons.lock:before{content:"\E204"}.glyphicons.unlock:before{content:"\E205"}.glyphicons.electricity:before{content:"\E206"}.glyphicons.ok_2:before{content:"\E207"}.glyphicons.remove_2:before{content:"\E208"}.glyphicons.cart_out:before{content:"\E209"}.glyphicons.cart_in:before{content:"\E210"}.glyphicons.left_arrow:before{content:"\E211"}.glyphicons.right_arrow:before{content:"\E212"}.glyphicons.down_arrow:before{content:"\E213"}.glyphicons.up_arrow:before{content:"\E214"}.glyphicons.resize_small:before{content:"\E215"}.glyphicons.resize_full:before{content:"\E216"}.glyphicons.circle_arrow_left:before{content:"\E217"}.glyphicons.circle_arrow_right:before{content:"\E218"}.glyphicons.circle_arrow_top:before{content:"\E219"}.glyphicons.circle_arrow_down:before{content:"\E220"}.glyphicons.play_button:before{content:"\E221"}.glyphicons.unshare:before{content:"\E222"}.glyphicons.share:before{content:"\E223"}.glyphicons.chevron-right:before{content:"\E224"}.glyphicons.chevron-left:before{content:"\E225"}.glyphicons.bluetooth:before{content:"\E226"}.glyphicons.euro:before{content:"\20AC"}.glyphicons.usd:before{content:"\E228"}.glyphicons.gbp:before{content:"\E229"}.glyphicons.retweet_2:before{content:"\E230"}.glyphicons.moon:before{content:"\E231"}.glyphicons.sun:before{content:"\2609"}.glyphicons.cloud:before{content:"\2601"}.glyphicons.direction:before{content:"\E234"}.glyphicons.brush:before{content:"\E235"}.glyphicons.pen:before{content:"\E236"}.glyphicons.zoom_in:before{content:"\E237"}.glyphicons.zoom_out:before{content:"\E238"}.glyphicons.pin:before{content:"\E239"}.glyphicons.albums:before{content:"\E240"}.glyphicons.rotation_lock:before{content:"\E241"}.glyphicons.flash:before{content:"\E242"}.glyphicons.google_maps:before{content:"\E243"}.glyphicons.anchor:before{content:"\2693"}.glyphicons.conversation:before{content:"\E245"}.glyphicons.chat:before{content:"\E246"}.glyphicons.male:before{content:"\E247"}.glyphicons.female:before{content:"\E248"}.glyphicons.asterisk:before{content:"\002A"}.glyphicons.divide:before{content:"\00F7"}.glyphicons.snorkel_diving:before{content:"\E251"}.glyphicons.scuba_diving:before{content:"\E252"}.glyphicons.oxygen_bottle:before{content:"\E253"}.glyphicons.fins:before{content:"\E254"}.glyphicons.fishes:before{content:"\E255"}.glyphicons.boat:before{content:"\E256"}.glyphicons.delete:before{content:"\E257"}.glyphicons.sheriffs_star:before{content:"\E258"}.glyphicons.qrcode:before{content:"\E259"}.glyphicons.barcode:before{content:"\E260"}.glyphicons.pool:before{content:"\E261"}.glyphicons.buoy:before{content:"\E262"}.glyphicons.spade:before{content:"\E263"}.glyphicons.bank:before{content:"\E264"}.glyphicons.vcard:before{content:"\E265"}.glyphicons.electrical_plug:before{content:"\E266"}.glyphicons.flag:before{content:"\E267"}.glyphicons.credit_card:before{content:"\E268"}.glyphicons.keyboard-wireless:before{content:"\E269"}.glyphicons.keyboard-wired:before{content:"\E270"}.glyphicons.shield:before{content:"\E271"}.glyphicons.ring:before{content:"\02DA"}.glyphicons.cake:before{content:"\E273"}.glyphicons.drink:before{content:"\E274"}.glyphicons.beer:before{content:"\E275"}.glyphicons.fast_food:before{content:"\E276"}.glyphicons.cutlery:before{content:"\E277"}.glyphicons.pizza:before{content:"\E278"}.glyphicons.birthday_cake:before{content:"\E279"}.glyphicons.tablet:before{content:"\E280"}.glyphicons.settings:before{content:"\E281"}.glyphicons.bullets:before{content:"\E282"}.glyphicons.cardio:before{content:"\E283"}.glyphicons.t-shirt:before{content:"\E284"}.glyphicons.pants:before{content:"\E285"}.glyphicons.sweater:before{content:"\E286"}.glyphicons.fabric:before{content:"\E287"}.glyphicons.leather:before{content:"\E288"}.glyphicons.scissors:before{content:"\E289"}.glyphicons.bomb:before{content:"\E290"}.glyphicons.skull:before{content:"\E291"}.glyphicons.celebration:before{content:"\E292"}.glyphicons.tea_kettle:before{content:"\E293"}.glyphicons.french_press:before{content:"\E294"}.glyphicons.coffee_cup:before{content:"\E295"}.glyphicons.pot:before{content:"\E296"}.glyphicons.grater:before{content:"\E297"}.glyphicons.kettle:before{content:"\E298"}.glyphicons.hospital:before{content:"\E299"}.glyphicons.hospital_h:before{content:"\E300"}.glyphicons.microphone:before{content:"\E301"}.glyphicons.webcam:before{content:"\E302"}.glyphicons.temple_christianity_church:before{content:"\E303"}.glyphicons.temple_islam:before{content:"\E304"}.glyphicons.temple_hindu:before{content:"\E305"}.glyphicons.temple_buddhist:before{content:"\E306"}.glyphicons.bicycle:before{content:"\E307"}.glyphicons.life_preserver:before{content:"\E308"}.glyphicons.share_alt:before{content:"\E309"}.glyphicons.comments:before{content:"\E310"}.glyphicons.flower:before{content:"\2698"}.glyphicons.baseball:before{content:"\26BE"}.glyphicons.rugby:before{content:"\E313"}.glyphicons.ax:before{content:"\E314"}.glyphicons.table_tennis:before{content:"\E315"}.glyphicons.bowling:before{content:"\E316"}.glyphicons.tree_conifer:before{content:"\E317"}.glyphicons.tree_deciduous:before{content:"\E318"}.glyphicons.more_items:before{content:"\E319"}.glyphicons.sort:before{content:"\E320"}.glyphicons.filter:before{content:"\E321"}.glyphicons.gamepad:before{content:"\E322"}.glyphicons.playing_dices:before{content:"\E323"}.glyphicons.calculator:before{content:"\E324"}.glyphicons.tie:before{content:"\E325"}.glyphicons.wallet:before{content:"\E326"}.glyphicons.piano:before{content:"\E327"}.glyphicons.sampler:before{content:"\E328"}.glyphicons.podium:before{content:"\E329"}.glyphicons.soccer_ball:before{content:"\E330"}.glyphicons.blog:before{content:"\E331"}.glyphicons.dashboard:before{content:"\E332"}.glyphicons.certificate:before{content:"\E333"}.glyphicons.bell:before{content:"\E334"}.glyphicons.candle:before{content:"\E335"}.glyphicons.pushpin:before{content:"\E336"}.glyphicons.iphone_shake:before{content:"\E337"}.glyphicons.pin_flag:before{content:"\E338"}.glyphicons.turtle:before{content:"\E339"}.glyphicons.rabbit:before{content:"\E340"}.glyphicons.globe:before{content:"\E341"}.glyphicons.briefcase:before{content:"\E342"}.glyphicons.hdd:before{content:"\E343"}.glyphicons.thumbs_up:before{content:"\E344"}.glyphicons.thumbs_down:before{content:"\E345"}.glyphicons.hand_right:before{content:"\E346"}.glyphicons.hand_left:before{content:"\E347"}.glyphicons.hand_up:before{content:"\E348"}.glyphicons.hand_down:before{content:"\E349"}.glyphicons.fullscreen:before{content:"\E350"}.glyphicons.shopping_bag:before{content:"\E351"}.glyphicons.book_open:before{content:"\E352"}.glyphicons.nameplate:before{content:"\E353"}.glyphicons.nameplate_alt:before{content:"\E354"}.glyphicons.vases:before{content:"\E355"}.glyphicons.bullhorn:before{content:"\E356"}.glyphicons.dumbbell:before{content:"\E357"}.glyphicons.suitcase:before{content:"\E358"}.glyphicons.file_import:before{content:"\E359"}.glyphicons.file_export:before{content:"\E360"}.glyphicons.bug:before{content:"\E361"}.glyphicons.crown:before{content:"\E362"}.glyphicons.smoking:before{content:"\E363"}.glyphicons.cloud-download:before{content:"\E364"}.glyphicons.cloud-upload:before{content:"\E365"}.glyphicons.restart:before{content:"\E366"}.glyphicons.security_camera:before{content:"\E367"}.glyphicons.expand:before{content:"\E368"}.glyphicons.collapse:before{content:"\E369"}.glyphicons.collapse_top:before{content:"\E370"}.glyphicons.globe_af:before{content:"\E371"}.glyphicons.global:before{content:"\E372"}.glyphicons.spray:before{content:"\E373"}.glyphicons.nails:before{content:"\E374"}.glyphicons.claw_hammer:before{content:"\E375"}.glyphicons.classic_hammer:before{content:"\E376"}.glyphicons.hand_saw:before{content:"\E377"}.glyphicons.riflescope:before{content:"\E378"}.glyphicons.electrical_socket_eu:before{content:"\E379"}.glyphicons.electrical_socket_us:before{content:"\E380"}.glyphicons.message_forward:before{content:"\E381"}.glyphicons.coat_hanger:before{content:"\E382"}.glyphicons.dress:before{content:"\E383"}.glyphicons.bathrobe:before{content:"\E384"}.glyphicons.shirt:before{content:"\E385"}.glyphicons.underwear:before{content:"\E386"}.glyphicons.log_in:before{content:"\E387"}.glyphicons.log_out:before{content:"\E388"}.glyphicons.exit:before{content:"\E389"}.glyphicons.new_window_alt:before{content:"\E390"}.glyphicons.video_sd:before{content:"\E391"}.glyphicons.video_hd:before{content:"\E392"}.glyphicons.subtitles:before{content:"\E393"}.glyphicons.sound_stereo:before{content:"\E394"}.glyphicons.sound_dolby:before{content:"\E395"}.glyphicons.sound_5_1:before{content:"\E396"}.glyphicons.sound_6_1:before{content:"\E397"}.glyphicons.sound_7_1:before{content:"\E398"}.glyphicons.copyright_mark:before{content:"\E399"}.glyphicons.registration_mark:before{content:"\E400"}.glyphicons.radar:before{content:"\E401"}.glyphicons.skateboard:before{content:"\E402"}.glyphicons.golf_course:before{content:"\E403"}.glyphicons.sorting:before{content:"\E404"}.glyphicons.sort-by-alphabet:before{content:"\E405"}.glyphicons.sort-by-alphabet-alt:before{content:"\E406"}.glyphicons.sort-by-order:before{content:"\E407"}.glyphicons.sort-by-order-alt:before{content:"\E408"}.glyphicons.sort-by-attributes:before{content:"\E409"}.glyphicons.sort-by-attributes-alt:before{content:"\E410"}.glyphicons.compressed:before{content:"\E411"}.glyphicons.package:before{content:"\E412"}.glyphicons.cloud_plus:before{content:"\E413"}.glyphicons.cloud_minus:before{content:"\E414"}.glyphicons.disk_save:before{content:"\E415"}.glyphicons.disk_open:before{content:"\E416"}.glyphicons.disk_saved:before{content:"\E417"}.glyphicons.disk_remove:before{content:"\E418"}.glyphicons.disk_import:before{content:"\E419"}.glyphicons.disk_export:before{content:"\E420"}.glyphicons.tower:before{content:"\E421"}.glyphicons.send:before{content:"\E422"}.glyphicons.git_branch:before{content:"\E423"}.glyphicons.git_create:before{content:"\E424"}.glyphicons.git_private:before{content:"\E425"}.glyphicons.git_delete:before{content:"\E426"}.glyphicons.git_merge:before{content:"\E427"}.glyphicons.git_pull_request:before{content:"\E428"}.glyphicons.git_compare:before{content:"\E429"}.glyphicons.git_commit:before{content:"\E430"}.glyphicons.construction_cone:before{content:"\E431"}.glyphicons.shoe_steps:before{content:"\E432"}.glyphicons.plus:before{content:"\002B"}.glyphicons.minus:before{content:"\2212"}.glyphicons.redo:before{content:"\E435"}.glyphicons.undo:before{content:"\E436"}.glyphicons.golf:before{content:"\E437"}.glyphicons.hockey:before{content:"\E438"}.glyphicons.pipe:before{content:"\E439"}.glyphicons.wrench:before{content:"\E440"}.glyphicons.folder_closed:before{content:"\E441"}.glyphicons.phone_alt:before{content:"\E442"}.glyphicons.earphone:before{content:"\E443"}.glyphicons.floppy_disk:before{content:"\E444"}.glyphicons.floppy_saved:before{content:"\E445"}.glyphicons.floppy_remove:before{content:"\E446"}.glyphicons.floppy_save:before{content:"\E447"}.glyphicons.floppy_open:before{content:"\E448"}.glyphicons.translate:before{content:"\E449"}.glyphicons.fax:before{content:"\E450"}.glyphicons.factory:before{content:"\E451"}.glyphicons.shop_window:before{content:"\E452"}.glyphicons.shop:before{content:"\E453"}.glyphicons.kiosk:before{content:"\E454"}.glyphicons.kiosk_wheels:before{content:"\E455"}.glyphicons.kiosk_light:before{content:"\E456"}.glyphicons.kiosk_food:before{content:"\E457"}.glyphicons.transfer:before{content:"\E458"}.glyphicons.money:before{content:"\E459"}.glyphicons.header:before{content:"\E460"}.glyphicons.blacksmith:before{content:"\E461"}.glyphicons.saw_blade:before{content:"\E462"}.glyphicons.basketball:before{content:"\E463"}.glyphicons.server:before{content:"\E464"}.glyphicons.server_plus:before{content:"\E465"}.glyphicons.server_minus:before{content:"\E466"}.glyphicons.server_ban:before{content:"\E467"}.glyphicons.server_flag:before{content:"\E468"}.glyphicons.server_lock:before{content:"\E469"}.glyphicons.server_new:before{content:"\E470"}.glyphicons-icon{display:inline-block;width:48px;height:48px;margin:0 8px 0 0;line-height:14px;vertical-align:text-top;background-image:url(../images/glyphicons.svg);background-position:0 0;background-repeat:no-repeat;vertical-align:top;*display:inline;*zoom:1;*margin-right:.3em}.glyphicons-icon _:-o-prefocus,.glyphicons-icon{background-image:url(../images/glyphicons.png)}.no-inlinesvg .glyphicons-icon{background-image:url(../images/glyphicons.png)}.glyphicons-icon.white{background-image:url(../images/glyphicons-white.svg)}.glyphicons-icon.white _:-o-prefocus,.glyphicons-icon.white{background-image:url(../images/glyphicons-white.png)}.no-inlinesvg .glyphicons-icon.white{background-image:url(../images/glyphicons-white.png)}.glyphicons-icon.glass{background-position:4px 11px}.glyphicons-icon.leaf{background-position:-44px 11px}.glyphicons-icon.dog{background-position:-92px 11px}.glyphicons-icon.user{background-position:-140px 11px}.glyphicons-icon.girl{background-position:-188px 11px}.glyphicons-icon.car{background-position:-236px 11px}.glyphicons-icon.user_add{background-position:-284px 11px}.glyphicons-icon.user_remove{background-position:-332px 11px}.glyphicons-icon.film{background-position:-380px 11px}.glyphicons-icon.magic{background-position:-428px 11px}.glyphicons-icon.envelope{background-position:4px -37px}.glyphicons-icon.camera{background-position:-44px -37px}.glyphicons-icon.heart{background-position:-92px -37px}.glyphicons-icon.beach_umbrella{background-position:-140px -37px}.glyphicons-icon.train{background-position:-188px -37px}.glyphicons-icon.print{background-position:-236px -37px}.glyphicons-icon.bin{background-position:-284px -37px}.glyphicons-icon.music{background-position:-332px -37px}.glyphicons-icon.note{background-position:-380px -37px}.glyphicons-icon.heart_empty{background-position:-428px -37px}.glyphicons-icon.home{background-position:4px -85px}.glyphicons-icon.snowflake{background-position:-44px -85px}.glyphicons-icon.fire{background-position:-92px -85px}.glyphicons-icon.magnet{background-position:-140px -85px}.glyphicons-icon.parents{background-position:-188px -85px}.glyphicons-icon.binoculars{background-position:-236px -85px}.glyphicons-icon.road{background-position:-284px -85px}.glyphicons-icon.search{background-position:-332px -85px}.glyphicons-icon.cars{background-position:-380px -85px}.glyphicons-icon.notes_2{background-position:-428px -85px}.glyphicons-icon.pencil{background-position:4px -133px}.glyphicons-icon.bus{background-position:-44px -133px}.glyphicons-icon.wifi_alt{background-position:-92px -133px}.glyphicons-icon.luggage{background-position:-140px -133px}.glyphicons-icon.old_man{background-position:-188px -133px}.glyphicons-icon.woman{background-position:-236px -133px}.glyphicons-icon.file{background-position:-284px -133px}.glyphicons-icon.coins{background-position:-332px -133px}.glyphicons-icon.airplane{background-position:-380px -133px}.glyphicons-icon.notes{background-position:-428px -133px}.glyphicons-icon.stats{background-position:4px -181px}.glyphicons-icon.charts{background-position:-44px -181px}.glyphicons-icon.pie_chart{background-position:-92px -181px}.glyphicons-icon.group{background-position:-140px -181px}.glyphicons-icon.keys{background-position:-188px -181px}.glyphicons-icon.calendar{background-position:-236px -181px}.glyphicons-icon.router{background-position:-284px -181px}.glyphicons-icon.camera_small{background-position:-332px -181px}.glyphicons-icon.dislikes{background-position:-380px -181px}.glyphicons-icon.star{background-position:-428px -181px}.glyphicons-icon.link{background-position:4px -229px}.glyphicons-icon.eye_open{background-position:-44px -229px}.glyphicons-icon.eye_close{background-position:-92px -229px}.glyphicons-icon.alarm{background-position:-140px -229px}.glyphicons-icon.clock{background-position:-188px -229px}.glyphicons-icon.stopwatch{background-position:-236px -229px}.glyphicons-icon.projector{background-position:-284px -229px}.glyphicons-icon.history{background-position:-332px -229px}.glyphicons-icon.truck{background-position:-380px -229px}.glyphicons-icon.cargo{background-position:-428px -229px}.glyphicons-icon.compass{background-position:4px -277px}.glyphicons-icon.keynote{background-position:-44px -277px}.glyphicons-icon.paperclip{background-position:-92px -277px}.glyphicons-icon.power{background-position:-140px -277px}.glyphicons-icon.lightbulb{background-position:-188px -277px}.glyphicons-icon.tag{background-position:-236px -277px}.glyphicons-icon.tags{background-position:-284px -277px}.glyphicons-icon.cleaning{background-position:-332px -277px}.glyphicons-icon.ruller{background-position:-380px -277px}.glyphicons-icon.gift{background-position:-428px -277px}.glyphicons-icon.umbrella{background-position:4px -325px}.glyphicons-icon.book{background-position:-44px -325px}.glyphicons-icon.bookmark{background-position:-92px -325px}.glyphicons-icon.wifi{background-position:-140px -325px}.glyphicons-icon.cup{background-position:-188px -325px}.glyphicons-icon.stroller{background-position:-236px -325px}.glyphicons-icon.headphones{background-position:-284px -325px}.glyphicons-icon.headset{background-position:-332px -325px}.glyphicons-icon.warning_sign{background-position:-380px -325px}.glyphicons-icon.signal{background-position:-428px -325px}.glyphicons-icon.retweet{background-position:4px -373px}.glyphicons-icon.refresh{background-position:-44px -373px}.glyphicons-icon.roundabout{background-position:-92px -373px}.glyphicons-icon.random{background-position:-140px -373px}.glyphicons-icon.heat{background-position:-188px -373px}.glyphicons-icon.repeat{background-position:-236px -373px}.glyphicons-icon.display{background-position:-284px -373px}.glyphicons-icon.log_book{background-position:-332px -373px}.glyphicons-icon.address_book{background-position:-380px -373px}.glyphicons-icon.building{background-position:-428px -373px}.glyphicons-icon.eyedropper{background-position:4px -421px}.glyphicons-icon.adjust{background-position:-44px -421px}.glyphicons-icon.tint{background-position:-92px -421px}.glyphicons-icon.crop{background-position:-140px -421px}.glyphicons-icon.vector_path_square{background-position:-188px -421px}.glyphicons-icon.vector_path_circle{background-position:-236px -421px}.glyphicons-icon.vector_path_polygon{background-position:-284px -421px}.glyphicons-icon.vector_path_line{background-position:-332px -421px}.glyphicons-icon.vector_path_curve{background-position:-380px -421px}.glyphicons-icon.vector_path_all{background-position:-428px -421px}.glyphicons-icon.font{background-position:4px -469px}.glyphicons-icon.italic{background-position:-44px -469px}.glyphicons-icon.bold{background-position:-92px -469px}.glyphicons-icon.text_underline{background-position:-140px -469px}.glyphicons-icon.text_strike{background-position:-188px -469px}.glyphicons-icon.text_height{background-position:-236px -469px}.glyphicons-icon.text_width{background-position:-284px -469px}.glyphicons-icon.text_resize{background-position:-332px -469px}.glyphicons-icon.left_indent{background-position:-380px -469px}.glyphicons-icon.right_indent{background-position:-428px -469px}.glyphicons-icon.align_left{background-position:4px -517px}.glyphicons-icon.align_center{background-position:-44px -517px}.glyphicons-icon.align_right{background-position:-92px -517px}.glyphicons-icon.justify{background-position:-140px -517px}.glyphicons-icon.list{background-position:-188px -517px}.glyphicons-icon.text_smaller{background-position:-236px -517px}.glyphicons-icon.text_bigger{background-position:-284px -517px}.glyphicons-icon.embed{background-position:-332px -517px}.glyphicons-icon.embed_close{background-position:-380px -517px}.glyphicons-icon.table{background-position:-428px -517px}.glyphicons-icon.message_full{background-position:4px -565px}.glyphicons-icon.message_empty{background-position:-44px -565px}.glyphicons-icon.message_in{background-position:-92px -565px}.glyphicons-icon.message_out{background-position:-140px -565px}.glyphicons-icon.message_plus{background-position:-188px -565px}.glyphicons-icon.message_minus{background-position:-236px -565px}.glyphicons-icon.message_ban{background-position:-284px -565px}.glyphicons-icon.message_flag{background-position:-332px -565px}.glyphicons-icon.message_lock{background-position:-380px -565px}.glyphicons-icon.message_new{background-position:-428px -565px}.glyphicons-icon.inbox{background-position:4px -613px}.glyphicons-icon.inbox_plus{background-position:-44px -613px}.glyphicons-icon.inbox_minus{background-position:-92px -613px}.glyphicons-icon.inbox_lock{background-position:-140px -613px}.glyphicons-icon.inbox_in{background-position:-188px -613px}.glyphicons-icon.inbox_out{background-position:-236px -613px}.glyphicons-icon.cogwheel{background-position:-284px -613px}.glyphicons-icon.cogwheels{background-position:-332px -613px}.glyphicons-icon.picture{background-position:-380px -613px}.glyphicons-icon.adjust_alt{background-position:-428px -613px}.glyphicons-icon.database_lock{background-position:4px -661px}.glyphicons-icon.database_plus{background-position:-44px -661px}.glyphicons-icon.database_minus{background-position:-92px -661px}.glyphicons-icon.database_ban{background-position:-140px -661px}.glyphicons-icon.folder_open{background-position:-188px -661px}.glyphicons-icon.folder_plus{background-position:-236px -661px}.glyphicons-icon.folder_minus{background-position:-284px -661px}.glyphicons-icon.folder_lock{background-position:-332px -661px}.glyphicons-icon.folder_flag{background-position:-380px -661px}.glyphicons-icon.folder_new{background-position:-428px -661px}.glyphicons-icon.edit{background-position:4px -709px}.glyphicons-icon.new_window{background-position:-44px -709px}.glyphicons-icon.check{background-position:-92px -709px}.glyphicons-icon.unchecked{background-position:-140px -709px}.glyphicons-icon.more_windows{background-position:-188px -709px}.glyphicons-icon.show_big_thumbnails{background-position:-236px -709px}.glyphicons-icon.show_thumbnails{background-position:-284px -709px}.glyphicons-icon.show_thumbnails_with_lines{background-position:-332px -709px}.glyphicons-icon.show_lines{background-position:-380px -709px}.glyphicons-icon.playlist{background-position:-428px -709px}.glyphicons-icon.imac{background-position:4px -757px}.glyphicons-icon.macbook{background-position:-44px -757px}.glyphicons-icon.ipad{background-position:-92px -757px}.glyphicons-icon.iphone{background-position:-140px -757px}.glyphicons-icon.iphone_transfer{background-position:-188px -757px}.glyphicons-icon.iphone_exchange{background-position:-236px -757px}.glyphicons-icon.ipod{background-position:-284px -757px}.glyphicons-icon.ipod_shuffle{background-position:-332px -757px}.glyphicons-icon.ear_plugs{background-position:-380px -757px}.glyphicons-icon.record{background-position:-428px -757px}.glyphicons-icon.step_backward{background-position:4px -805px}.glyphicons-icon.fast_backward{background-position:-44px -805px}.glyphicons-icon.rewind{background-position:-92px -805px}.glyphicons-icon.play{background-position:-140px -805px}.glyphicons-icon.pause{background-position:-188px -805px}.glyphicons-icon.stop{background-position:-236px -805px}.glyphicons-icon.forward{background-position:-284px -805px}.glyphicons-icon.fast_forward{background-position:-332px -805px}.glyphicons-icon.step_forward{background-position:-380px -805px}.glyphicons-icon.eject{background-position:-428px -805px}.glyphicons-icon.facetime_video{background-position:4px -853px}.glyphicons-icon.download_alt{background-position:-44px -853px}.glyphicons-icon.mute{background-position:-92px -853px}.glyphicons-icon.volume_down{background-position:-140px -853px}.glyphicons-icon.volume_up{background-position:-188px -853px}.glyphicons-icon.screenshot{background-position:-236px -853px}.glyphicons-icon.move{background-position:-284px -853px}.glyphicons-icon.more{background-position:-332px -853px}.glyphicons-icon.brightness_reduce{background-position:-380px -853px}.glyphicons-icon.brightness_increase{background-position:-428px -853px}.glyphicons-icon.circle_plus{background-position:4px -901px}.glyphicons-icon.circle_minus{background-position:-44px -901px}.glyphicons-icon.circle_remove{background-position:-92px -901px}.glyphicons-icon.circle_ok{background-position:-140px -901px}.glyphicons-icon.circle_question_mark{background-position:-188px -901px}.glyphicons-icon.circle_info{background-position:-236px -901px}.glyphicons-icon.circle_exclamation_mark{background-position:-284px -901px}.glyphicons-icon.remove{background-position:-332px -901px}.glyphicons-icon.ok{background-position:-380px -901px}.glyphicons-icon.ban{background-position:-428px -901px}.glyphicons-icon.download{background-position:4px -949px}.glyphicons-icon.upload{background-position:-44px -949px}.glyphicons-icon.shopping_cart{background-position:-92px -949px}.glyphicons-icon.lock{background-position:-140px -949px}.glyphicons-icon.unlock{background-position:-188px -949px}.glyphicons-icon.electricity{background-position:-236px -949px}.glyphicons-icon.ok_2{background-position:-284px -949px}.glyphicons-icon.remove_2{background-position:-332px -949px}.glyphicons-icon.cart_out{background-position:-380px -949px}.glyphicons-icon.cart_in{background-position:-428px -949px}.glyphicons-icon.left_arrow{background-position:4px -997px}.glyphicons-icon.right_arrow{background-position:-44px -997px}.glyphicons-icon.down_arrow{background-position:-92px -997px}.glyphicons-icon.up_arrow{background-position:-140px -997px}.glyphicons-icon.resize_small{background-position:-188px -997px}.glyphicons-icon.resize_full{background-position:-236px -997px}.glyphicons-icon.circle_arrow_left{background-position:-284px -997px}.glyphicons-icon.circle_arrow_right{background-position:-332px -997px}.glyphicons-icon.circle_arrow_top{background-position:-380px -997px}.glyphicons-icon.circle_arrow_down{background-position:-428px -997px}.glyphicons-icon.play_button{background-position:4px -1045px}.glyphicons-icon.unshare{background-position:-44px -1045px}.glyphicons-icon.share{background-position:-92px -1045px}.glyphicons-icon.chevron-right{background-position:-140px -1045px}.glyphicons-icon.chevron-left{background-position:-188px -1045px}.glyphicons-icon.bluetooth{background-position:-236px -1045px}.glyphicons-icon.euro{background-position:-284px -1045px}.glyphicons-icon.usd{background-position:-332px -1045px}.glyphicons-icon.gbp{background-position:-380px -1045px}.glyphicons-icon.retweet_2{background-position:-428px -1045px}.glyphicons-icon.moon{background-position:4px -1093px}.glyphicons-icon.sun{background-position:-44px -1093px}.glyphicons-icon.cloud{background-position:-92px -1093px}.glyphicons-icon.direction{background-position:-140px -1093px}.glyphicons-icon.brush{background-position:-188px -1093px}.glyphicons-icon.pen{background-position:-236px -1093px}.glyphicons-icon.zoom_in{background-position:-284px -1093px}.glyphicons-icon.zoom_out{background-position:-332px -1093px}.glyphicons-icon.pin{background-position:-380px -1093px}.glyphicons-icon.albums{background-position:-428px -1093px}.glyphicons-icon.rotation_lock{background-position:4px -1141px}.glyphicons-icon.flash{background-position:-44px -1141px}.glyphicons-icon.google_maps{background-position:-92px -1141px}.glyphicons-icon.anchor{background-position:-140px -1141px}.glyphicons-icon.conversation{background-position:-188px -1141px}.glyphicons-icon.chat{background-position:-236px -1141px}.glyphicons-icon.male{background-position:-284px -1141px}.glyphicons-icon.female{background-position:-332px -1141px}.glyphicons-icon.asterisk{background-position:-380px -1141px}.glyphicons-icon.divide{background-position:-428px -1141px}.glyphicons-icon.snorkel_diving{background-position:4px -1189px}.glyphicons-icon.scuba_diving{background-position:-44px -1189px}.glyphicons-icon.oxygen_bottle{background-position:-92px -1189px}.glyphicons-icon.fins{background-position:-140px -1189px}.glyphicons-icon.fishes{background-position:-188px -1189px}.glyphicons-icon.boat{background-position:-236px -1189px}.glyphicons-icon.delete{background-position:-284px -1189px}.glyphicons-icon.sheriffs_star{background-position:-332px -1189px}.glyphicons-icon.qrcode{background-position:-380px -1189px}.glyphicons-icon.barcode{background-position:-428px -1189px}.glyphicons-icon.pool{background-position:4px -1237px}.glyphicons-icon.buoy{background-position:-44px -1237px}.glyphicons-icon.spade{background-position:-92px -1237px}.glyphicons-icon.bank{background-position:-140px -1237px}.glyphicons-icon.vcard{background-position:-188px -1237px}.glyphicons-icon.electrical_plug{background-position:-236px -1237px}.glyphicons-icon.flag{background-position:-284px -1237px}.glyphicons-icon.credit_card{background-position:-332px -1237px}.glyphicons-icon.keyboard-wireless{background-position:-380px -1237px}.glyphicons-icon.keyboard-wired{background-position:-428px -1237px}.glyphicons-icon.shield{background-position:4px -1285px}.glyphicons-icon.ring{background-position:-44px -1285px}.glyphicons-icon.cake{background-position:-92px -1285px}.glyphicons-icon.drink{background-position:-140px -1285px}.glyphicons-icon.beer{background-position:-188px -1285px}.glyphicons-icon.fast_food{background-position:-236px -1285px}.glyphicons-icon.cutlery{background-position:-284px -1285px}.glyphicons-icon.pizza{background-position:-332px -1285px}.glyphicons-icon.birthday_cake{background-position:-380px -1285px}.glyphicons-icon.tablet{background-position:-428px -1285px}.glyphicons-icon.settings{background-position:4px -1333px}.glyphicons-icon.bullets{background-position:-44px -1333px}.glyphicons-icon.cardio{background-position:-92px -1333px}.glyphicons-icon.t-shirt{background-position:-140px -1333px}.glyphicons-icon.pants{background-position:-188px -1333px}.glyphicons-icon.sweater{background-position:-236px -1333px}.glyphicons-icon.fabric{background-position:-284px -1333px}.glyphicons-icon.leather{background-position:-332px -1333px}.glyphicons-icon.scissors{background-position:-380px -1333px}.glyphicons-icon.bomb{background-position:-428px -1333px}.glyphicons-icon.skull{background-position:4px -1381px}.glyphicons-icon.celebration{background-position:-44px -1381px}.glyphicons-icon.tea_kettle{background-position:-92px -1381px}.glyphicons-icon.french_press{background-position:-140px -1381px}.glyphicons-icon.coffee_cup{background-position:-188px -1381px}.glyphicons-icon.pot{background-position:-236px -1381px}.glyphicons-icon.grater{background-position:-284px -1381px}.glyphicons-icon.kettle{background-position:-332px -1381px}.glyphicons-icon.hospital{background-position:-380px -1381px}.glyphicons-icon.hospital_h{background-position:-428px -1381px}.glyphicons-icon.microphone{background-position:4px -1429px}.glyphicons-icon.webcam{background-position:-44px -1429px}.glyphicons-icon.temple_christianity_church{background-position:-92px -1429px}.glyphicons-icon.temple_islam{background-position:-140px -1429px}.glyphicons-icon.temple_hindu{background-position:-188px -1429px}.glyphicons-icon.temple_buddhist{background-position:-236px -1429px}.glyphicons-icon.bicycle{background-position:-284px -1429px}.glyphicons-icon.life_preserver{background-position:-332px -1429px}.glyphicons-icon.share_alt{background-position:-380px -1429px}.glyphicons-icon.comments{background-position:-428px -1429px}.glyphicons-icon.flower{background-position:4px -1477px}.glyphicons-icon.baseball{background-position:-44px -1477px}.glyphicons-icon.rugby{background-position:-92px -1477px}.glyphicons-icon.ax{background-position:-140px -1477px}.glyphicons-icon.table_tennis{background-position:-188px -1477px}.glyphicons-icon.bowling{background-position:-236px -1477px}.glyphicons-icon.tree_conifer{background-position:-284px -1477px}.glyphicons-icon.tree_deciduous{background-position:-332px -1477px}.glyphicons-icon.more_items{background-position:-380px -1477px}.glyphicons-icon.sort{background-position:-428px -1477px}.glyphicons-icon.filter{background-position:4px -1525px}.glyphicons-icon.gamepad{background-position:-44px -1525px}.glyphicons-icon.playing_dices{background-position:-92px -1525px}.glyphicons-icon.calculator{background-position:-140px -1525px}.glyphicons-icon.tie{background-position:-188px -1525px}.glyphicons-icon.wallet{background-position:-236px -1525px}.glyphicons-icon.piano{background-position:-284px -1525px}.glyphicons-icon.sampler{background-position:-332px -1525px}.glyphicons-icon.podium{background-position:-380px -1525px}.glyphicons-icon.soccer_ball{background-position:-428px -1525px}.glyphicons-icon.blog{background-position:4px -1573px}.glyphicons-icon.dashboard{background-position:-44px -1573px}.glyphicons-icon.certificate{background-position:-92px -1573px}.glyphicons-icon.bell{background-position:-140px -1573px}.glyphicons-icon.candle{background-position:-188px -1573px}.glyphicons-icon.pushpin{background-position:-236px -1573px}.glyphicons-icon.iphone_shake{background-position:-284px -1573px}.glyphicons-icon.pin_flag{background-position:-332px -1573px}.glyphicons-icon.turtle{background-position:-380px -1573px}.glyphicons-icon.rabbit{background-position:-428px -1573px}.glyphicons-icon.globe{background-position:4px -1621px}.glyphicons-icon.briefcase{background-position:-44px -1621px}.glyphicons-icon.hdd{background-position:-92px -1621px}.glyphicons-icon.thumbs_up{background-position:-140px -1621px}.glyphicons-icon.thumbs_down{background-position:-188px -1621px}.glyphicons-icon.hand_right{background-position:-236px -1621px}.glyphicons-icon.hand_left{background-position:-284px -1621px}.glyphicons-icon.hand_up{background-position:-332px -1621px}.glyphicons-icon.hand_down{background-position:-380px -1621px}.glyphicons-icon.fullscreen{background-position:-428px -1621px}.glyphicons-icon.shopping_bag{background-position:4px -1669px}.glyphicons-icon.book_open{background-position:-44px -1669px}.glyphicons-icon.nameplate{background-position:-92px -1669px}.glyphicons-icon.nameplate_alt{background-position:-140px -1669px}.glyphicons-icon.vases{background-position:-188px -1669px}.glyphicons-icon.bullhorn{background-position:-236px -1669px}.glyphicons-icon.dumbbell{background-position:-284px -1669px}.glyphicons-icon.suitcase{background-position:-332px -1669px}.glyphicons-icon.file_import{background-position:-380px -1669px}.glyphicons-icon.file_export{background-position:-428px -1669px}.glyphicons-icon.bug{background-position:4px -1717px}.glyphicons-icon.crown{background-position:-44px -1717px}.glyphicons-icon.smoking{background-position:-92px -1717px}.glyphicons-icon.cloud-download{background-position:-140px -1717px}.glyphicons-icon.cloud-upload{background-position:-188px -1717px}.glyphicons-icon.restart{background-position:-236px -1717px}.glyphicons-icon.security_camera{background-position:-284px -1717px}.glyphicons-icon.expand{background-position:-332px -1717px}.glyphicons-icon.collapse{background-position:-380px -1717px}.glyphicons-icon.collapse_top{background-position:-428px -1717px}.glyphicons-icon.globe_af{background-position:4px -1765px}.glyphicons-icon.global{background-position:-44px -1765px}.glyphicons-icon.spray{background-position:-92px -1765px}.glyphicons-icon.nails{background-position:-140px -1765px}.glyphicons-icon.claw_hammer{background-position:-188px -1765px}.glyphicons-icon.classic_hammer{background-position:-236px -1765px}.glyphicons-icon.hand_saw{background-position:-284px -1765px}.glyphicons-icon.riflescope{background-position:-332px -1765px}.glyphicons-icon.electrical_socket_eu{background-position:-380px -1765px}.glyphicons-icon.electrical_socket_us{background-position:-428px -1765px}.glyphicons-icon.message_forward{background-position:4px -1813px}.glyphicons-icon.coat_hanger{background-position:-44px -1813px}.glyphicons-icon.dress{background-position:-92px -1813px}.glyphicons-icon.bathrobe{background-position:-140px -1813px}.glyphicons-icon.shirt{background-position:-188px -1813px}.glyphicons-icon.underwear{background-position:-236px -1813px}.glyphicons-icon.log_in{background-position:-284px -1813px}.glyphicons-icon.log_out{background-position:-332px -1813px}.glyphicons-icon.exit{background-position:-380px -1813px}.glyphicons-icon.new_window_alt{background-position:-428px -1813px}.glyphicons-icon.video_sd{background-position:4px -1861px}.glyphicons-icon.video_hd{background-position:-44px -1861px}.glyphicons-icon.subtitles{background-position:-92px -1861px}.glyphicons-icon.sound_stereo{background-position:-140px -1861px}.glyphicons-icon.sound_dolby{background-position:-188px -1861px}.glyphicons-icon.sound_5_1{background-position:-236px -1861px}.glyphicons-icon.sound_6_1{background-position:-284px -1861px}.glyphicons-icon.sound_7_1{background-position:-332px -1861px}.glyphicons-icon.copyright_mark{background-position:-380px -1861px}.glyphicons-icon.registration_mark{background-position:-428px -1861px}.glyphicons-icon.radar{background-position:4px -1909px}.glyphicons-icon.skateboard{background-position:-44px -1909px}.glyphicons-icon.golf_course{background-position:-92px -1909px}.glyphicons-icon.sorting{background-position:-140px -1909px}.glyphicons-icon.sort-by-alphabet{background-position:-188px -1909px}.glyphicons-icon.sort-by-alphabet-alt{background-position:-236px -1909px}.glyphicons-icon.sort-by-order{background-position:-284px -1909px}.glyphicons-icon.sort-by-order-alt{background-position:-332px -1909px}.glyphicons-icon.sort-by-attributes{background-position:-380px -1909px}.glyphicons-icon.sort-by-attributes-alt{background-position:-428px -1909px}.glyphicons-icon.compressed{background-position:4px -1957px}.glyphicons-icon.package{background-position:-44px -1957px}.glyphicons-icon.cloud_plus{background-position:-92px -1957px}.glyphicons-icon.cloud_minus{background-position:-140px -1957px}.glyphicons-icon.disk_save{background-position:-188px -1957px}.glyphicons-icon.disk_open{background-position:-236px -1957px}.glyphicons-icon.disk_saved{background-position:-284px -1957px}.glyphicons-icon.disk_remove{background-position:-332px -1957px}.glyphicons-icon.disk_import{background-position:-380px -1957px}.glyphicons-icon.disk_export{background-position:-428px -1957px}.glyphicons-icon.tower{background-position:4px -2005px}.glyphicons-icon.send{background-position:-44px -2005px}.glyphicons-icon.git_branch{background-position:-92px -2005px}.glyphicons-icon.git_create{background-position:-140px -2005px}.glyphicons-icon.git_private{background-position:-188px -2005px}.glyphicons-icon.git_delete{background-position:-236px -2005px}.glyphicons-icon.git_merge{background-position:-284px -2005px}.glyphicons-icon.git_pull_request{background-position:-332px -2005px}.glyphicons-icon.git_compare{background-position:-380px -2005px}.glyphicons-icon.git_commit{background-position:-428px -2005px}.glyphicons-icon.construction_cone{background-position:4px -2053px}.glyphicons-icon.shoe_steps{background-position:-44px -2053px}.glyphicons-icon.plus{background-position:-92px -2053px}.glyphicons-icon.minus{background-position:-140px -2053px}.glyphicons-icon.redo{background-position:-188px -2053px}.glyphicons-icon.undo{background-position:-236px -2053px}.glyphicons-icon.golf{background-position:-284px -2053px}.glyphicons-icon.hockey{background-position:-332px -2053px}.glyphicons-icon.pipe{background-position:-380px -2053px}.glyphicons-icon.wrench{background-position:-428px -2053px}.glyphicons-icon.folder_closed{background-position:4px -2101px}.glyphicons-icon.phone_alt{background-position:-44px -2101px}.glyphicons-icon.earphone{background-position:-92px -2101px}.glyphicons-icon.floppy_disk{background-position:-140px -2101px}.glyphicons-icon.floppy_saved{background-position:-188px -2101px}.glyphicons-icon.floppy_remove{background-position:-236px -2101px}.glyphicons-icon.floppy_save{background-position:-284px -2101px}.glyphicons-icon.floppy_open{background-position:-332px -2101px}.glyphicons-icon.translate{background-position:-380px -2101px}.glyphicons-icon.fax{background-position:-428px -2101px}.glyphicons-icon.factory{background-position:4px -2149px}.glyphicons-icon.shop_window{background-position:-44px -2149px}.glyphicons-icon.shop{background-position:-92px -2149px}.glyphicons-icon.kiosk{background-position:-140px -2149px}.glyphicons-icon.kiosk_wheels{background-position:-188px -2149px}.glyphicons-icon.kiosk_light{background-position:-236px -2149px}.glyphicons-icon.kiosk_food{background-position:-284px -2149px}.glyphicons-icon.transfer{background-position:-332px -2149px}.glyphicons-icon.money{background-position:-380px -2149px}.glyphicons-icon.header{background-position:-428px -2149px}.glyphicons-icon.blacksmith{background-position:4px -2197px}.glyphicons-icon.saw_blade{background-position:-44px -2197px}.glyphicons-icon.basketball{background-position:-92px -2197px}.glyphicons-icon.server{background-position:-140px -2197px}.glyphicons-icon.server_plus{background-position:-188px -2197px}.glyphicons-icon.server_minus{background-position:-236px -2197px}.glyphicons-icon.server_ban{background-position:-284px -2197px}.glyphicons-icon.server_flag{background-position:-332px -2197px}.glyphicons-icon.server_lock{background-position:-380px -2197px}.glyphicons-icon.server_new{background-position:-428px -2197px}
	
.glyphicon {
  display: inline-block;
  font-family: 'Glyphicons';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  color:#ecf0f1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\2a";
}
.glyphicon-plus:before {
  content: "\2b";
}
.glyphicon-euro:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
          box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #428bca;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #999;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #999;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: "";
  border-top: 0;
  border-bottom: 4px solid;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}
@media {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus {
  outline: none;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child > .btn:last-child,
.btn-group > .btn-group:first-child > .dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child > .btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  display: table-cell;
  float: none;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
[data-toggle="buttons"] > .btn > input[type="radio"],
[data-toggle="buttons"] > .btn > input[type="checkbox"] {
  display: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-right: 0;
  padding-left: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #2c3e50;
  color:#ecf0f1;
}
.nav > li.disabled > a {
  color: #999;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #999;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eee;
  border-color: #428bca;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #428bca;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.ew-navbar {
  position: relative;
  min-height: 50px;
  // margin-bottom: 20px; - removed by matto
  border: 1px solid transparent;
}
@media {
  .ew-navbar {
    border-radius: 4px;
  }
}
@media {
  .ew-navbar-header {
    width:100%;
    float: left;
    padding-left: 10px;
    padding-top: 25px;
    padding-top: 25px;
    z-index:-9999;
  }
}
.navbar-collapse {
  max-height: 340px;
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .ew-navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-right: 0;
    padding-left: 0;
  }
}
.container > .ew-navbar-header,
.container-fluid > .ew-navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media {
  .container > .ew-navbar-header,
  .container-fluid > .ew-navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media {
  .navbar-static-top {
    border-radius: 0;
  }
}
.ew-navbar-fixed-top,
.navbar-fixed-bottom {
  position: relative;
clear: both;
  right: 0;
  left: 0;
  //z-index: 1030;    //matto - removed z-index, was causing joomla popup menu to be under this element
}
@media {
  .ew-navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.ew-navbar-fixed-top {
  border-width: 0 0 1px;
    position: relative !important;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
@media {
  .ew-navbar > .container .navbar-brand,
  .ew-navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle:focus {
  outline: none;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .navbar-nav.navbar-right:last-child {
    margin-right: -15px;
  }
}
@media {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
  }
}
.navbar-form {
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: -15px;
  margin-bottom: 8px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
}
@media {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    float: none;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
}
@media {
  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-form.navbar-right:last-child {
    margin-right: -15px;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media {
  .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px;
  }
  .navbar-text.navbar-right:last-child {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.ew-navbar-inverse {
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.ew-navbar-inverse .navbar-brand {
  color: #999;
}
.ew-navbar-inverse .navbar-brand:hover,
.ew-navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.ew-navbar-inverse .navbar-text {
  color: #999;
}
.ew-navbar-inverse .navbar-nav > li > a {
  color: #999;
}
.ew-navbar-inverse .navbar-nav > li > a:hover,
.ew-navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.ew-navbar-inverse .navbar-nav > .active > a,
.ew-navbar-inverse .navbar-nav > .active > a:hover,
.ew-navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.ew-navbar-inverse .navbar-nav > .disabled > a,
.ew-navbar-inverse .navbar-nav > .disabled > a:hover,
.ew-navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.ew-navbar-inverse .navbar-toggle {
  border-color: #333;
}
.ew-navbar-inverse .navbar-toggle:hover,
.ew-navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.ew-navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.ew-navbar-inverse .navbar-collapse,
.ew-navbar-inverse .navbar-form {
  border-color: #101010;
}
.ew-navbar-inverse .navbar-nav > .open > a,
.ew-navbar-inverse .navbar-nav > .open > a:hover,
.ew-navbar-inverse .navbar-nav > .open > a:focus {
  color: #fff;
  background-color: #080808;
}
@media (max-width: 767px) {
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #999;
  }
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .ew-navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.ew-navbar-inverse .navbar-link {
  color: #999;
}
.ew-navbar-inverse .navbar-link:hover {
  color: #fff;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  padding: 0 5px;
  color: #ccc;
  content: "/\00a0";
}
.breadcrumb > .active {
  color: #999;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #428bca;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #2a6496;
  background-color: #eee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #fff;
  cursor: default;
  background-color: #428bca;
  border-color: #428bca;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #999;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  text-align: center;
  list-style: none;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #999;
  cursor: not-allowed;
  background-color: #fff;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.label[href]:hover,
.label[href]:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #999;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #808080;
}
.label-primary {
  background-color: #428bca;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3071a9;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.ew_badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 9px !important;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  background-color: #999;
  border-radius: 10px;
}
.ew_badge:empty {
  display: none;
}
.btn .ew_badge {
  position: relative;
  top: -1px;
}
.btn-xs .ew_badge {
  top: 0;
  padding: 1px 5px;
}
a.ew_badge:hover,
a.ew_badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
a.list-group-item.active > .ew_badge,
.nav-pills > .active > a > .ew_badge {
  color: #428bca;
  background-color: #fff;
}
.nav-pills > li > a > .ew_badge {
  margin-left: 3px;
}
.jumbotron {
  padding: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.container .jumbotron {
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron {
    padding-right: 60px;
    padding-left: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-right: auto;
  margin-left: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #428bca;
}
.thumbnail .caption {
  padding: 9px;
  color: #333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable {
  padding-right: 35px;
}
.alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
  -webkit-transition: width .6s ease;
          transition: width .6s ease;
}
.progress-striped .progress-bar {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media-object {
  display: block;
}
.media-heading {
  margin: 0 0 5px;
}
.media > .pull-left {
  margin-right: 10px;
}
.media > .pull-right {
  margin-left: 10px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.list-group-item > .ew_badge {
  float: right;
}
.list-group-item > .ew_badge + .ew_badge {
  margin-right: 5px;
}
a.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
a.list-group-item:focus {
  text-decoration: none;
  background-color: #f5f5f5;
}
a.list-group-item.active,
a.list-group-item.active:hover,
a.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #428bca;
  border-color: #428bca;
}
a.list-group-item.active .list-group-item-heading,
a.list-group-item.active:hover .list-group-item-heading,
a.list-group-item.active:focus .list-group-item-heading {
  color: inherit;
}
a.list-group-item.active .list-group-item-text,
a.list-group-item.active:hover .list-group-item-text,
a.list-group-item.active:focus .list-group-item-text {
  color: #e1edf7;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 20px;
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a {
  color: inherit;
}
.panel-footer {
color:#ecf0f1;
  padding: 10px 15px;
  background-color: #2c3e50;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table {
  margin-bottom: 0;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  margin-bottom: 0;
  border: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  overflow: hidden;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse .panel-body {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #428bca;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #428bca;
  border-color: #428bca;
}
.panel-primary > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #428bca;
}
.panel-primary > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #428bca;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #ebccd1;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, .15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  filter: alpha(opacity=20);
  opacity: .2;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  filter: alpha(opacity=50);
  opacity: .5;
}
button.close {
  -webkit-appearance: none;
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
}
.modal-open {
  overflow: hidden;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: auto;
  overflow-y: scroll;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform .3s ease-out;
     -moz-transition:    -moz-transform .3s ease-out;
       -o-transition:      -o-transform .3s ease-out;
          transition:         transform .3s ease-out;
  -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
          transform: translate(0, -25%);
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
          transform: translate(0, 0);
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  outline: none;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
          box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0;
}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: .5;
}
.modal-header {
  min-height: 16.42857143px;
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 20px;
}
.modal-footer {
  padding: 19px 20px 20px;
  margin-top: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
@media {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1030;
  display: block;
  font-size: 12px;
  line-height: 1.4;
  visibility: visible;
  filter: alpha(opacity=0);
  opacity: 0;
}
.tooltip.in {
  filter: alpha(opacity=90);
  opacity: .9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  text-decoration: none;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  left: 5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  right: 5px;
  bottom: 0;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  left: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  right: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1010;
  display: none;
  max-width: 276px;
  padding: 1px;
  text-align: left;
  white-space: normal;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 18px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  content: "";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, .25);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, .25);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, .25);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, .25);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: .6s ease-in-out left;
          transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
  filter: alpha(opacity=50);
  opacity: .5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, .5) 0%), color-stop(rgba(0, 0, 0, .0001) 100%));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, .0001) 0%), color-stop(rgba(0, 0, 0, .5) 100%));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  filter: alpha(opacity=90);
  outline: none;
  opacity: .9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  margin-left: -10px;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    margin-left: -15px;
    font-size: 30px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.ew-navbar-header:before,
.ew-navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.clearfix:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.ew-navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media {
  .hidden-sm {
    display: none !important;
  }
}
@media {
  .hidden-md {
    display: none !important;
  }
}
@media {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*# sourceMappingURL=bootstrap.css.map */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

.sidebar {
  display: none;
}

.sidebar {
  position: relative;
  //top: 51px; - removed by matto
  bottom: 0;
  left: 0;
  
  display: block;
  padding: 20px;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
  background-color: #34495e;
}

ul.nav-sidebar li a i {
padding-right: 6px;
}
/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a {
  color: #ecf0f1;
  background-color: #2c3e50;
}


/*
 * Main content
 */
#main-content {
margin-left: 210px;
}
.wrapper {
display: inline-block;
//margin-top: 60px; -- fix for magento
//padding: 15px; -- fix for magento
width: 100%;
}
.main {
  padding: 20px;
  //padding-top: 120px !important;
  //top:100px;
//  position: absolute;
  vertical-align: top;
}
@media {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
#ew-footer {
   position:fixed;
   
   bottom:0px;
   height:30px;
   width:100%;
   background:#2c3e50;
   z-index: 99999;
}

.sidebar A, #ew-footer A {
    color: white;
}

a:link {
    color: #2C3E50;
    text-decoration: none;
}

.nav A {
    color: white;
}

/** wp hacks */
.wrap {
    margin: 0 !important;
}

.search {
background-color: transparent !important;
color: white;
}

media="all"
input[type=checkbox], input[type=radio] {
background: #ecf0f1;
border-color: #2c3e50;
color: #555;
}


/* olark chat */
#habla_topbar_div  A {
color: white !important;
}

<!--.tablesorter TD {
padding: 20px;
}
-->
.main TABLE TD {
    padding: 5px;
}
.ew_badge{
display: inline-block;
min-width: 10px;
padding: 5px 2px;
font-size: 11px;
color: #ecf0f1;
text-align: center;
background-color: #d35400;
border-radius: 14px;
margin: 1px 0 0 2px;
float: right;
}


/*joomla template overrides */
div.m {
    padding: 0px !important;
}
.submenu-box, div.m {
    background-color: transparent !important;
    border: none !important;
    border-radius: 0px;
    padding: 0;
}
#element-box, #toolbar-box, #submenu-box {
    padding: 0px !important;
}

#border-top {
    display: none !important; //hide joomla header
}


.sidebar A {
    font-size: 12px;
}

#visits TD {
    font-size: 12px !important;
}

<!--.tablesorter TD, .table TD, TABLE TD {
    font-size: 12px;
}
-->
#visits {
    width: 100%;
    float: left;
    padding-right:20px;
	background-color: #FAFAFA;
}

#stats {
width:100%;
float: left;
padding-left: 20px;
background-color: #FAFAFA;
}

#container-fluid, #stats, .main {
}

/* style fixes for Jooomla 2.5 */

#status, #footer {
    display: none;
}

/* style fixes for Joomla 3.2 */
#content {
width: 100% !importnant;
}

.container-main, .container-fluid {
    padding-left: 0px !important;
    padding-right: 0px !important;
}


.nav > li > a:hover, .nav > li > a:focus {
    background-color: #2C3E50 !important;
}

.linkDisabled  {
    color: #909090 !important;
}

/*TODO: colision with joomla 3.2 and tablesorter
*/
body {
    padding-top: 0px !important;
}

.ew-navbar {
    min-height: 94px;
    margin-bottom: 0px !important;
    z-index:0;
}

/* chages for wordpress |*/
#wpfooter {
    display: none;
}

.nav-sidebar A:link, .nav-sidebar A:visited, #ew-footer A:link, #ew-footer A:visited {
    color: white;
}	

.table TD A:link {
    color: rgb(52, 73, 94);
}

.main {
background-color: #fafafa !important;
}

TD, .container {
	font-size: 10px;
}

.tablesorter TABLE {
border 1px solid red !important;
}

.cta-btn-red{
display:block;
text-align: center;
background: #c4000b;
/* IE10 Consumer Preview */
background-image: -ms-linear-gradient(top, #e40410 0%, #c4000b 100%);
/* Mozilla Firefox */
background-image: -moz-linear-gradient(top, #e40410 0%, #c4000b 100%);
/* Opera */
background-image: -o-linear-gradient(top, #e40410 0%, #c4000b 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #e40410), color-stop(1, #c4000b));
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top, #e40410 0%, #c4000b 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom, #e40410 0%, #c4000b 100%);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
text-decoration: none;
color:#fff;
font-size:16px;
padding:10px;
text-shadow:0px -1px #c00037;
border:none;
cursor: hand;
cursor: pointer;
}
.cta-btn-red:hover{
background: #c4000b;
}

.middle {   /* magento css class */
padding: 0px;
}

/* prestashop */
#content {
padding: 0px;
}


/* joomla 3.0 */
.admin .header {
display: none;
}

.table th, .table td {
    border-top: 0px !important;
}

.admin .ew-navbar-header {
padding-top: 30px;
}

/* prestashop 1.6 */
#nav-sidebar {
display: none;
}

.extrawatchadmin #main #content {
padding-top: 35px;
margin-left: 0px;
}

.ew-navbar, .main, .nav-sidebar, .ew-container {
	font-family: Verdana !important;
}


.ewCentered {
    text-align: center !important;
}

INPUT[type=text] {
    height: 24px !important;
}


/* Joomla 2.5 */
#content-box {
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-right: none !important;
    border-width: 0 0px 0px !important;
    margin-bottom: 0px !important;
}