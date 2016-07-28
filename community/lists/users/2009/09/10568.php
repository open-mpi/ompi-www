<?
$subject_val = "Re: [OMPI users] Help!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 12:00:48 2009" -->
<!-- isoreceived="20090903160048" -->
<!-- sent="Thu, 03 Sep 2009 09:01:28 -0700" -->
<!-- isosent="20090903160128" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!" -->
<!-- id="4A9FE858.6080007_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL102-W434CB791EE4C1F94F1B062A8F00_at_phx.gbl" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Help!<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-03 12:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<li><strong>Previous message:</strong> <a href="10567.php">Shiqing Fan: "Re: [OMPI users] Open MPI in a PC network running Windows XP"</a>
<li><strong>In reply to:</strong> <a href="10562.php">guosong: "[OMPI users] Help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<li><strong>Reply:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=GB2312" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
guosong wrote:
<blockquote cite="midCOL102-W434CB791EE4C1F94F1B062A8F00@phx.gbl"
 type="cite">
  <style>
.hmmessage P
{
margin:0px;
padding:0px
}
body.hmmessage
{
font-size: 10pt;
font-family:Verdana
}
  </style>I am new to open MPI<br>
</blockquote>
I am not, but I'm not real familiar with thread-safe MPI programming.&nbsp;
Still, I saw no other replies to your question, so I'll make an attempt
to answer.<br>
<br>
MPI does not guarantee thread safety.&nbsp; E.g., see
<a class="moz-txt-link-freetext" href="http://www.mpi-forum.org/docs/mpi-20-html/node162.htm#Node162">http://www.mpi-forum.org/docs/mpi-20-html/node162.htm#Node162</a> and the
ensuing pages.<br>
<br>
To do what you want to do, you need to make sure you have thread
safety.&nbsp; There is a standard MPI interface for doing so.&nbsp; I'm not good
at C++, so here is a C example:<br>
<br>
<br>
<br>
#include &lt;stdio.h&gt;<br>
#include &lt;mpi.h&gt;<br>
<br>
int main(int argc, char **argv) {<br>
&nbsp; int provided;<br>
<br>
&nbsp; /* start MPI, asking for support for multiple threads */<br>
&nbsp;
MPI_Init_thread(&amp;argc,&amp;argv,MPI_THREAD_MULTIPLE,&amp;provided);<br>
<br>
&nbsp; /* report what level of support is actually provided */<br>
&nbsp; if ( MPI_THREAD_SINGLE&nbsp;&nbsp;&nbsp;&nbsp; == provided ) printf("
MPI_THREAD_SINGLE\n");<br>
&nbsp; if ( MPI_THREAD_FUNNELED&nbsp;&nbsp; == provided ) printf("
MPI_THREAD_FUNNELED\n");<br>
&nbsp; if ( MPI_THREAD_SERIALIZED == provided ) printf("
MPI_THREAD_SERIALIZED\n");<br>
&nbsp; if ( MPI_THREAD_MULTIPLE&nbsp;&nbsp; == provided ) printf("
MPI_THREAD_MULTIPLE\n");<br>
<br>
&nbsp; /* exit */<br>
&nbsp; MPI_Finalize();<br>
<br>
&nbsp; return 0;<br>
}<br>
<br>
<br>
<br>
Run this program.&nbsp; If the program does not print out
"MPI_THREAD_MULTIPLE", you're not getting the level of thread support
you require and your program is not guaranteed to run properly.&nbsp; You
have to make sure you're using a thread-safe MPI before you can expect
your program to work.<br>
<br>
The next question is whether Open MPI is thread safe, and I'll leave
you with this:<br>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=supported-systems#thread-support">http://www.open-mpi.org/faq/?category=supported-systems#thread-support</a><br>
<br>
Good luck.&nbsp; Again, I'm not experienced with thread-safe MPI programming
(though I understand the general concepts).<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<li><strong>Previous message:</strong> <a href="10567.php">Shiqing Fan: "Re: [OMPI users] Open MPI in a PC network running Windows XP"</a>
<li><strong>In reply to:</strong> <a href="10562.php">guosong: "[OMPI users] Help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<li><strong>Reply:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
