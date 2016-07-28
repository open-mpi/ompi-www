<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 15:31:22 2010" -->
<!-- isoreceived="20100628193122" -->
<!-- sent="Mon, 28 Jun 2010 12:33:51 -0700" -->
<!-- isosent="20100628193351" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="4C28F91F.4050604_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinz6c5yqBEdJlzOHfNjMZNdYUw6HCkUy2Y7KzXn_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-06-28 15:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
 cite="midAANLkTinz6c5yqBEdJlzOHfNjMZNdYUw6HCkUy2Y7KzXn@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div bgcolor="#ffffff" text="#000000">You would break the MPI_Irecv
and MPI_Isend calls up into two parts:&nbsp;
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
    </div>
  </blockquote>
  </div>
  <br>
Well! If I follow this strategy then the picture should be as follows.
Correct?? <br>
</blockquote>
Yes, I think that's right.<br>
<blockquote
 cite="midAANLkTinz6c5yqBEdJlzOHfNjMZNdYUw6HCkUy2Y7KzXn@mail.gmail.com"
 type="cite">Obviously the sub1 and sub2 exists outside separately.
Following is just for understanding.<br>
  <b style="color: rgb(204, 0, 0);"><br>
  </b><b style="color: rgb(51, 204, 0);">Main program
starts------@@@@@@@@@@@@@@@@@@@@@@@.</b><br
 style="color: rgb(51, 204, 0);">
  <b style="color: rgb(51, 204, 0);"><br>
  </b><b style="color: rgb(51, 204, 0);">CALL MPI_RECV_INIT for each
neighboring process&nbsp; <br>
CALL MPI_SEND_INIT for each neighboring process</b><br>
  <b style="color: rgb(51, 204, 0);">Loop Calling the
subroutine1--------------------(10000 times in the main program).<br>
  <br>
  </b><b style="color: rgb(51, 204, 0);"> Call subroutine1</b><br
 style="color: rgb(51, 204, 0);">
  <b style="color: rgb(204, 0, 0);"><br>
  </b><b style="color: rgb(204, 0, 0);">Subroutine1
starts===================================</b><br>
  <b style="color: rgb(204, 0, 0);">&nbsp;&nbsp; Loop A starts here
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
(three passes)<br>
&nbsp;&nbsp; Call subroutine2<br>
  <br>
&nbsp;&nbsp; Subroutine2 starts----------------------------<br>
&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; <span style="color: rgb(255, 0, 0);">Pick local data from
array U in separate arrays for each neighboring processor</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; CALL MPI_STARTALL</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);"></span><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; -------perform work that could
be done with local data</span><br style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; CALL MPI_WAITALL( )</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; -------perform work
using the received data</span><br style="color: rgb(255, 0, 0);">
&nbsp;&nbsp; Subroutine</b><b style="color: rgb(204, 0, 0);">2</b><b
 style="color: rgb(204, 0, 0);"> ends</b><b
 style="color: rgb(204, 0, 0);">----------------------------</b><br>
  <br>
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-------perform work to update array U</span></b><br>
  <b style="color: rgb(204, 0, 0);">&nbsp;&nbsp; Loop A ends here
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;</b><br>
  <b style="color: rgb(204, 0, 0);">Subroutine1
ends====================================</b><br>
  <br>
  <b style="color: rgb(51, 204, 0);">Loop Calling the subroutine1
ends------------(10000 times in the main program).</b><br
 style="color: rgb(51, 204, 0);">
  <br style="color: rgb(51, 204, 0);">
  <b style="color: rgb(51, 204, 0);">CALL MPI_Request_free( )</b><br
 style="color: rgb(51, 204, 0);">
  <br style="color: rgb(51, 204, 0);">
  <b style="color: rgb(51, 204, 0);">Main program
ends------@@@@@@@@@@@@@@@@@@@@@@@.</b><br>
  <br>
  <br>
But I think in the above case sending and receiving buffers would need
to be create in GLOBAL Module , or need to be passed in the subroutine
headers.</blockquote>
Right.&nbsp; The buffer information is needed both outside of all the loops
(in MAIN, where the persistent channels are created) and in the
innermost loop (in subroutine 2, where the buffers are loaded and used).<br>
<blockquote
 cite="midAANLkTinz6c5yqBEdJlzOHfNjMZNdYUw6HCkUy2Y7KzXn@mail.gmail.com"
 type="cite">In above there is one confusion. The sending buffer will
be present in the argument list of the MPI_SEND_INIT() but it will get
the values to be sent in the sub2? Is it possible/correct?<br>
</blockquote>
Yes.&nbsp; The buffer needs to be used by the user program to set the send
message up and to use the data that has been received.&nbsp; The buffer also
needs to be specified to the MPI implementation so that MPI knows which
buffers to send/receive.&nbsp; With a persistent communication, you specify
the buffer in the "init" call and thereafter refer to it opaquely with
the "request" handle.&nbsp; Incidentally, this can cause problems for
optimizing compilers, which may not recognize there is a relationship
between a buffer and the opaque request handle.&nbsp; Consider the "extreme
possibility" described in
<a class="moz-txt-link-freetext" href="http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node236.htm#Node241">http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node236.htm#Node241</a><br>
<blockquote
 cite="midAANLkTinz6c5yqBEdJlzOHfNjMZNdYUw6HCkUy2Y7KzXn@mail.gmail.com"
 type="cite">The question is that, will above actually be communication
efficient and over-lapping communication-computation. &nbsp; <br>
</blockquote>
There are two issues, I think.<br>
<br>
One is whether persistent communications will help you reduce
overheads.&nbsp; It depends, but if for each message you do a bunch of work
(packing buffers, computing on data, or even just having lost of data
per message), then the amount of overhead you're saving may be
relatively small.<br>
<br>
Another is whether you can overlap communications and computation.&nbsp;
This does not require persistent channels, but only nonblocking
communications (MPI_Isend/MPI_Irecv).&nbsp; Again, there are no MPI
guarantees here, so you may have to break your computation up and
insert MPI_Test calls.<br>
<br>
You may want to get the basic functionality working first and then run
performance experiments to decide whether these really are areas that
warrant such optimizations.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13428.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13430.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
