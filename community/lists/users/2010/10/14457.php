<?
$subject_val = "Re: [OMPI users] How to time data transfers?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 13 14:23:22 2010" -->
<!-- isoreceived="20101013182322" -->
<!-- sent="Wed, 13 Oct 2010 11:23:03 -0700" -->
<!-- isosent="20101013182303" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to time data transfers?" -->
<!-- id="4CB5F907.5070004_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5FD53FFC7D1704890B0B1FE85A004F6037B4BD2_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to time data transfers?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-13 14:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14456.php">Ed Peddycoart: "[OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14456.php">Ed Peddycoart: "[OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Ed Peddycoart wrote:
<blockquote
 cite="midC5FD53FFC7D1704890B0B1FE85A004F6037B4BD2@cyclone.aegis.com"
 type="cite">
  <meta content="text/html; charset=unicode" http-equiv="Content-Type">
  <meta name="GENERATOR" content="MSHTML 8.00.6001.18943">
  <p>I need to do some performance tests on my mpi app.&nbsp; I simply want
to determine how long it takes for my sends from one process to be
received by another process.&nbsp; </p>
  <p><br>
Here is the code I used as my example for non-blocking send/receive...</p>
  <p><font face="Courier New">&nbsp;if( myrank == 0 ) {<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1, 19, MPI_COMM_WORLD, &amp;request );<br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 1, 17, MPI_COMM_WORLD );<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;}<br>
&nbsp;else if( myrank == 1 ) {<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 0, 17, MPI_COMM_WORLD, &amp;request
);&nbsp;&nbsp; <br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 0, 19, MPI_COMM_WORLD );<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;}</font></p>
</blockquote>
First of all, you should also complete the Isend request.&nbsp; One option
is to turn it into a blocking Send.&nbsp; Another option is to add a request
to the Isend call (which is required by the API) and then turn the Wait
call into a Waitall call on both requests.<br>
<blockquote
 cite="midC5FD53FFC7D1704890B0B1FE85A004F6037B4BD2@cyclone.aegis.com"
 type="cite">
  <p>I originally thought to just put a timer call before affer the
rank=0 receive, but that doesn't seem to capture the complete time...
see the following code.</p>
  <p><font face="Courier New">&nbsp;if( myrank == 0 ) {</font></p>
  <p><font face="Courier New">&nbsp;&nbsp;timer.start();<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1, 19, MPI_COMM_WORLD, &amp;request );<br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 1, 17, MPI_COMM_WORLD );<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;&nbsp;timer.stop();<br>
&nbsp;&nbsp;elapsedTime = getElapsedTime();<br>
&nbsp;}<br>
&nbsp;else if( myrank == 1 ) {<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 0, 17, MPI_COMM_WORLD, &amp;request
);&nbsp;&nbsp; <br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 0, 19, MPI_COMM_WORLD );<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;}</font></p>
</blockquote>
That should work once the code is corrected.&nbsp; Can you use MPI_Wtime()?&nbsp;
(Not necessarily a big deal, but should be a portable way of getting
high-quality timings in MPI programs.)&nbsp; In what sense does it not
capture the complete time?<br>
<blockquote
 cite="midC5FD53FFC7D1704890B0B1FE85A004F6037B4BD2@cyclone.aegis.com"
 type="cite">
  <p>How do others time this process?&nbsp; Should I send a msg from one app
to the other to initiate timing, send the data I want to time?</p>
</blockquote>
It's common to ping-pong many times back and forth.&nbsp; There may be one
or more "warm-up" iterations (to make sure both processes are ready and
all resources used have been touched and warmed/woken up) and other
iterations to check reproducibility of results.&nbsp; Also, one might have
many iterations between the timer calls to amortize the overhead of the
timer call.<br>
<blockquote
 cite="midC5FD53FFC7D1704890B0B1FE85A004F6037B4BD2@cyclone.aegis.com"
 type="cite">
  <p><br>
  <font face="Courier New">&nbsp;if( myrank == 0 ) {</font></p>
  <p><font face="Courier New">&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1,
startTimeTag, MPI_COMM_WORLD, &amp;request );<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;&nbsp;timer.start();<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1, dataTag, MPI_COMM_WORLD,
&amp;request );<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;&nbsp;timer.stop();<br>
&nbsp;&nbsp;elapsedTime = getElapsedTime();<br>
&nbsp;}<br>
&nbsp;else if( myrank == 1 ) {</font></p>
  <p><font face="Courier New">&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 0,
startTimerTag, MPI_COMM_WORLD );<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;&nbsp;MPI_Isend( b, 100, MPI_DOUBLE, 0, dataTag , MPI_COMM_WORLD,
&amp;request );&nbsp;&nbsp; <br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );<br>
&nbsp;}</font></p>
  <p>Ed<br>
  </p>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14456.php">Ed Peddycoart: "[OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14456.php">Ed Peddycoart: "[OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
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
