<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 12:20:28 2010" -->
<!-- isoreceived="20100628162028" -->
<!-- sent="Mon, 28 Jun 2010 09:22:56 -0700" -->
<!-- isosent="20100628162256" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="4C28CC60.8090505_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilNAP8ilWgcy6d_F86rK-_Pk99UKQ424BKKesFd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Persistent Communication Question<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 12:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13426.php">David Zhang: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
amjad ali wrote:
<blockquote
 cite="midAANLkTilNAP8ilWgcy6d_F86rK-_Pk99UKQ424BKKesFd@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <div>Hi&nbsp;&nbsp; Jeff S.<br>
Thank you very much for your reply. <br>
I am still feeling some confusion. Please guide.<br>
  <br>
  </div>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">&nbsp;The
idea is to do this:<br>
    <br>
&nbsp; &nbsp;MPI_Recv_init()<br>
&nbsp; &nbsp;MPI_Send_init()<br>
&nbsp; &nbsp;for (i = 0; i &lt; 1000; ++i) {<br>
&nbsp; &nbsp; &nbsp; &nbsp;MPI_Startall()<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* do whatever */<br>
&nbsp; &nbsp; &nbsp; &nbsp;MPI_Waitall()<br>
&nbsp; &nbsp;}<br>
&nbsp; &nbsp;for (i = 0; i &lt; 1000; ++i) {<br>
&nbsp; &nbsp; &nbsp; &nbsp;MPI_Request_free()<br>
&nbsp; &nbsp;}<br>
    <br>
So in your inner loop, you just call MPI_Startall() and a corresponding
MPI_Test* / MPI_Wait* call to complete those requests.<br>
    <br>
The idea is that the MPI_*_init() functions do some one-time setup on
the requests and then you just start and complete those same requests
over and over and over. &nbsp;When you're done, you free them.<br>
    <br>
  </blockquote>
  </div>
Actually in my code what I was doing is:<br>
</blockquote>
Okay, something like this:<br>
<br>
program main<br>
&nbsp; do i = 1, 10000<br>
&nbsp; &nbsp; call sub1()<br>
&nbsp; end do<br>
end<br>
<br>
subroutine sub1()<br>
&nbsp; do loopa = 1, 3<br>
&nbsp;&nbsp;&nbsp; call sub2()<br>
&nbsp; end do<br>
end<br>
<br>
subroutine sub2()<br>
&nbsp; u = ...<br>
&nbsp; call MPI_Irecv() ! for each neighbor<br>
&nbsp; call MPI_Isend() ! for each neighbor<br>
&nbsp; ! perform work that could be done with local data<br>
&nbsp; call MPI_Waitall()<br>
&nbsp; ! perform work using the received data<br>
end<br>
<br>
I find that "pseudocode" easier to read and understand.<br>
<blockquote
 cite="midAANLkTilNAP8ilWgcy6d_F86rK-_Pk99UKQ424BKKesFd@mail.gmail.com"
 type="cite">I assume that the above setup will overlap computation
with communication (hiding communication behind computations), as well.<br>
</blockquote>
A little, but MPI does not guarantee that a non-blocking operation will
make progress if you don't make any MPI calls.&nbsp; So, another alternative
is to break the "perform work that could be done with local data" part
up into smaller pieces and inserting MPI_Test() calls.&nbsp; You'd have to
play around with this to see a performance improvement, if any.<br>
<blockquote
 cite="midAANLkTilNAP8ilWgcy6d_F86rK-_Pk99UKQ424BKKesFd@mail.gmail.com"
 type="cite">Now intention is to use persistent communication to get
more efficiency. I am facing confusion how to use your proposed model
for my work. Please suggest.<br>
</blockquote>
You would break the MPI_Irecv and MPI_Isend calls up into two parts:&nbsp;
MPI_Send_init and MPI_Recv_init in the first part and MPI_Start[all] in
the second part.&nbsp; The first part needs to be moved out of the
subroutine... at least outside of the loop in sub1() and maybe even
outside the 10000-iteration loop in the main program.&nbsp; (There would
also be MPI_Request_free calls that would similarly have to be moved
out.)&nbsp; If the overheads are small compared to the other work you're
doing per message, the savings would be small.&nbsp; (And, I'm guessing this
is the case for you.)&nbsp; Further, the code refactoring might not be
simple.&nbsp; So, persistent communications *might* not be a fruitful
optimization strategy for you.&nbsp; Just a warning.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13426.php">David Zhang: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
