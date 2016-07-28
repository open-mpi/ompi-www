<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 19:15:42 2010" -->
<!-- isoreceived="20100628231542" -->
<!-- sent="Mon, 28 Jun 2010 16:18:05 -0700" -->
<!-- isosent="20100628231805" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="4C292DAD.50803_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinls8gUyzGkYEfPKYN_eKDw6lhjPUQpancykqzA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-06-28 19:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13433.php">Jack Bryan: "[OMPI users] Open MPI ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
 cite="midAANLkTinls8gUyzGkYEfPKYN_eKDw6lhjPUQpancykqzA@mail.gmail.com"
 type="cite">Dear E. Loh.<br>
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);"></span></b><br>
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div bgcolor="#ffffff" text="#000000">Another is whether you can
overlap communications and computation.&nbsp;
This does not require persistent channels, but only nonblocking
communications (MPI_Isend/MPI_Irecv).&nbsp; Again, there are no MPI
guarantees here, so you may have to break your computation up and
insert MPI_Test calls.<br>
    <br>
You may want to get the basic functionality working first and then run
performance experiments to decide whether these really are areas that
warrant such optimizations.<br>
    </div>
  </blockquote>
  </div>
  <br>
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CALL MPI_STARTALL</span><br style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);"></span><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; -------perform work that could
be done with local data ---------------- (A)</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; CALL MPI_WAITALL( )</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; -------perform work
using the received data&nbsp; --------------- (B)</span></b><br>
  <br>
In the above I have broken up the computation. In (A) I perform the
work that could be done with local data. When the recevied data is must
for remaining computations I put WAITALL&nbsp; to ensure that data data from
the neighbouring processes has received. I am fine with MPI_IRECV and
ISEND, i.e.,<br>
  <br>
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CALL MPI_IRECV()<br>
  </span></b><b style="color: rgb(204, 0, 0);"><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_ISEND()</span></b><br
 style="color: rgb(255, 0, 0);">
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);"></span>
  <span style="color: rgb(255, 0, 0);"></span><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; -------perform work that could
be done with local data ---------------- (A)</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; CALL MPI_WAITALL( )</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; -------perform work
using the received data&nbsp; --------------- (B)</span></b><br>
  <br>
But I am doubtful whether I am getting computation-communication
overlap to save time.or I am getting the the same performance as could
be obtained by, <br>
  <br>
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CALL MPI_IRECV()<br>
  </span></b><b style="color: rgb(204, 0, 0);"><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_ISEND()</span></b><br>
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp; CALL MPI_WAITALL( )</span></b><br style="color: rgb(255, 0, 0);">
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);"></span>
  <span style="color: rgb(255, 0, 0);"></span><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; -------perform work that could
be done with local data ---------------- (A)</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);"></span><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; -------perform work
using the received data&nbsp; --------------- (B)</span></b><br>
  <br>
In this case (equivalent to blocking communication), I observed that
only around 5% more time it takes.<br>
</blockquote>
Right.&nbsp; Again, MPI makes no guarantees that communications are actually
progressing between when you have posted nonblocking operations (like
Isend or Irecv) and when you force them to complete with MPI_Wait
calls.&nbsp; Sometimes (depending on the MPI implementation and what
interconnect is being used to effect a particular message), you have to
decompose the computation more finely.&nbsp; E.g., your situation might be:<br>
<br>
&nbsp;&nbsp;&nbsp; CALL MPI_ISEND()<br>
&nbsp;&nbsp;&nbsp; call my_work()&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! no MPI progress is being made here<br>
&nbsp;&nbsp;&nbsp; CALL MPI_WAIT()<br>
<br>
and it's conceivable that you might have better performance with<br>
<br>
&nbsp;&nbsp;&nbsp; CALL MPI_ISEND()<br>
&nbsp;&nbsp;&nbsp; DO I = 1, N<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call do_a_little_of_my_work()&nbsp; ! no MPI progress is being made
here<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_TEST()&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! enough MPI progress is being made
here that the receiver has something to do<br>
&nbsp;&nbsp;&nbsp; END DO<br>
&nbsp;&nbsp;&nbsp; CALL MPI_WAIT()<br>
<br>
Whether performance improves or not is not guaranteed by the MPI
standard.<br>
<blockquote
 cite="midAANLkTinls8gUyzGkYEfPKYN_eKDw6lhjPUQpancykqzA@mail.gmail.com"
 type="cite">And the SECOND desire is to use Persistent communication
for even better speedup.<br>
</blockquote>
Right.&nbsp; That's a separate issue.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13433.php">Jack Bryan: "[OMPI users] Open MPI ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
