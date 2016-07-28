<?
$subject_val = "Re: [OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 21 19:04:56 2008" -->
<!-- isoreceived="20081222000456" -->
<!-- sent="Sun, 21 Dec 2008 16:08:43 -0800" -->
<!-- isosent="20081222000843" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared-memory allocations" -->
<!-- id="494EDA8B.6000303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5697BD1.2C582%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shared-memory allocations<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-21 19:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5079.php">Jeff Squyres: "[OMPI devel] Disappearing for US holidays..."</a>
<li><strong>Previous message:</strong> <a href="5077.php">Eugene Loh: "[OMPI devel] fast path MPI_Sendrecv"</a>
<li><strong>In reply to:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
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
Richard Graham wrote:
<blockquote cite="midC5697BD1.2C582%25rlgraham@ornl.gov" type="cite">
  <title>Re: [OMPI devel] shared-memory allocations</title>
  <font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">It does not make a difference who allocates
it, what makes a difference is who touches it first.<br>
  </span></font></blockquote>
Fair enough, but the process that allocates it right away starts to
initialize it.&nbsp; So, each circular buffer is set up (allocated and
initialized/touched) by the sender.<br>
<blockquote cite="midC5697BD1.2C582%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">&gt; There is support for multiple circular
buffers per FIFO.<br>
  <br>
The code is there, but I believe Gleb disabled using multiple fifo's,
and added a list to hold pending messages, so now we are paying two
overheads ... &nbsp;I could be wrong here, but am pretty sure I am not.&nbsp; I
don't know if George has touched the code since.<br>
  </span></font></blockquote>
I think there is support for multiple CBs (circular buffers) per FIFO.&nbsp;
This is why there was that recent bug about sm hanging on
unidirectional messaging after so many iterations.&nbsp; The sender would
keep allocating room for the eager free list and on the outbound FIFO
until the shared-memory area was filled.&nbsp; Both the eager free list and
the FIFO could grow "unbounded" (until the shared memory area was
exhausted).<br>
<blockquote cite="midC5697BD1.2C582%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">The cost per process is linear in the total
number of processes, so overall the cost scales as the number of procs
squared. &nbsp;This was designed for small smp's, to reduce coordination
costs between processes, and where memory costs are not large. &nbsp;Once
can go to very simple schemes that are constant with respect to memory
footprint, but then pay the cost of multiple writers to a single queue
- this is what LA-MPI did.<br>
  </span></font></blockquote>
The point was that there are these O(3n^2) allocations -- sometimes
just 12 or 64 bytes apiece -- that are taking up an entire page each
due to page alignment.&nbsp; I understand we're choosing to have O(n^2)
FIFOs.&nbsp; I'm just saying that by aggregating these numerous tiny
allocations, we can make them take up 100x less space.<br>
<br>
Patrick Geoffray wrote:
<blockquote cite="mid49442AAE.9060607@myri.com" type="cite">Richard
Graham wrote: <br>
  <blockquote type="cite">Yes - it is polling volatile memory, so has
to load from memory on every read.
    <br>
  </blockquote>
Actually, it will poll in cache, and only load from memory when the
cache coherency protocol invalidates the cache line. Volatile semantic
only prevents compiler optimizations. <br>
  <br>
It does not matter much where the pages are (closer to reader or
receiver) on NUMAs, as long as they are equally distributed among all
sockets (ie the choice is consistent). Cache prefetching is slightly
more efficient on local socket, so closer to reader may be a bit
better.
</blockquote>
Thanks for all the comments.&nbsp; I think I follow all the reasoning, but
what I was trying to figure out was if the design were based solely on
such reasoning, or also on performance measurements.&nbsp; Again, I tried
some experiments.&nbsp; I had two processes pingpong via shared memory and I
moved the processes and the memory around -- local to sender, local to
receiver, remote from both, etc.&nbsp; I found the pingpong time depended
only the relative positions of the sender and the receiver.&nbsp; It was
unrelated to the position of the shared memory backing the shared
variables.&nbsp; E.g., if the sender and receiver were collocated, I got
best performance -- even if the shared memory was remote to both of
them!&nbsp; I don't know how general this result is, but it's at least one
data point suggesting that the design may be based on reasoning that
might be incomplete.<br>
<br>
No big deal, but I just wanted to understand the motivation and
rationale for what I see in the code.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5079.php">Jeff Squyres: "[OMPI devel] Disappearing for US holidays..."</a>
<li><strong>Previous message:</strong> <a href="5077.php">Eugene Loh: "[OMPI devel] fast path MPI_Sendrecv"</a>
<li><strong>In reply to:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
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
