<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 14:04:23 2009" -->
<!-- isoreceived="20090120190423" -->
<!-- sent="Tue, 20 Jan 2009 11:08:24 -0800" -->
<!-- isosent="20090120190824" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="49762128.5080707_at_sun.com" -->
<!-- charset="Big5" -->
<!-- inreplyto="C597B5B9.2D4DF%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 14:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5242.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5240.php">Jeff Squyres: "[OMPI devel] trac report 14"</a>
<li><strong>In reply to:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=Big5" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Richard Graham wrote:
<blockquote cite="midC597B5B9.2D4DF%25rlgraham@ornl.gov" type="cite">
  <title>Re: [OMPI devel] RFC: sm Latency</title>
  <font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">First, the performance improvements look
really nice.<br>
A few questions:<br>
&nbsp;&nbsp;- How much of an abstraction violation does this introduce?</span></font></blockquote>
Doesn't need to be much of an abstraction violation at all if, by that,
we mean teaching the BTL about the match header.&nbsp; Just need to make
some choices and I flagged that one for better visibility.<br>
<blockquote cite="midC597B5B9.2D4DF%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">This looks like the btl needs to start
¡§knowing¡¨ about MPI level semantics.</span></font></blockquote>
That's one option.&nbsp; There are other options.<br>
<blockquote cite="midC597B5B9.2D4DF%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">Currently, the btl purposefully is ulp
agnostic.</span></font></blockquote>
What's ULP?<br>
<blockquote cite="midC597B5B9.2D4DF%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">I ask for 2 reasons<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- you mention having the btl look at the match header (if I
understood correctly)<br>
  </span></font></blockquote>
Right, both to know if there is a match when the user had MPI_ANY_TAG
and to extract values to populate the MPI_Status variable.&nbsp; There are
other alternatives, like calling back the PML.<br>
<blockquote cite="midC597B5B9.2D4DF%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- not clear to me what you mean by
returning the header to the list if the irecv does not complete. &nbsp;If it
does not complete, why not just pass the header back for further
processing, if all this is happening at the pml level ?<br>
  </span></font></blockquote>
I was trying to read the FIFO to see what's on there.&nbsp; If it's
something we can handle, we take it and handle it.&nbsp; If it's too
complicated, then we just balk and tell the upper layer that we're
declining any possible action.&nbsp; That just seemed to me to be the
cleanest approach.<br>
<br>
Here's an analogy.&nbsp; Let's say you have a house problem.&nbsp; You don't know
how bad it is.&nbsp; You think you might have to hire an expensive
contractor to do lots of work, but some local handyman thinks he can do
it quickly and cheaply.&nbsp; So, you have the handyman look at the job to
decide how involved it is.&nbsp; Let's say the handyman discovers that it
is, indeed, a big job.&nbsp; How would you like things left at this point?&nbsp;
Two options:<br>
<br>
*) Handyman says this is a big job.&nbsp; Bring in the expensive contractor
and big equipment.&nbsp; I left everything as I found it.&nbsp; Or,<br>
<br>
*) Handyman says, "I took apart the this-and-this and I bought a bunch
of supplies.&nbsp; I ripped out the south wall.&nbsp; The water to the house is
turned off.&nbsp; Etc."&nbsp; You (and whoever has to come in to actually do the
work) would probably prefer that nothing had been started.<br>
<br>
I thought it was cleaner to go the "do the whole job or don't do any of
it" approach.<br>
<blockquote cite="midC597B5B9.2D4DF%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">&nbsp;&nbsp;- The measurements seem to be very dual
process specific. &nbsp;Have you looked at the impact of these changes on
other applications at the same process count ? &nbsp;¡§Real¡¨ apps would be
interesting, but even hpl would be a good start. <br>
  </span></font></blockquote>
Many measurements are for np=2.&nbsp; There are also np&gt;2 HPCC pingpong
results though.&nbsp; (HPCC pingpong measures pingpong between two processes
while np-2 process sit in wait loops.)&nbsp; HPCC also measures "ring"
results... these are point-to-point with all np processes work.<br>
<br>
HPL is pretty insensitive to point-to-point performance.&nbsp; It either
shows basically DGEMM performance or something is broken.<br>
<br>
I haven't looked at "real" apps.<br>
<br>
Let me be blunt about one thing:&nbsp; much of this is motivated by
simplistic (HPCC) benchmarks.&nbsp; This is for two reasons:<br>
<br>
1) These benchmarks are highly visible.<br>
2) It's hard to tune real apps when you know the primitives need work.<br>
<br>
Looking at real apps is important and I'll try to get to that.<br>
<blockquote cite="midC597B5B9.2D4DF%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">&nbsp;&nbsp;The current sm implementation is aimed only
at small smp node count, which was really the only relevant type of
systems when this code was written 5 years ago. &nbsp;For large core counts
there is a rather simple change that could be put in that is simple to
implement, and will give you flat scaling for the sort of tests you are
running. &nbsp;If you replace the fifo¡¦s with a single link list per process
in shared memory, with senders to this process adding match envelopes
atomically, with each process reading its own link list (multiple
writers and single reader in non-threaded situation) there will be only
one place to poll, regardless of the number of procs involved in the
run. &nbsp;One still needs other optimizations to lower the absolute latency
¡V perhaps what you have suggested. &nbsp;If one really has all N procs
trying to write to the same fifo at once, performance will stink
because of contention, but most apps don¡¦t have that behaviour.<br>
  </span></font></blockquote>
Okay.&nbsp; Yes, I am a fan of that approach.&nbsp; But:<br>
<br>
*) Doesn't strike me as a "simple" change.<br>
*) Not sure this addresses all-to-all well.&nbsp; E.g., let's say you post a
receive for a particular source.&nbsp; Do you then wade through a long FIFO
to look for your match?<br>
<br>
What the RFC talks about is not the last SM development we'll ever
need.&nbsp; It's only supposed to be one step forward from where we are
today.&nbsp; The "single queue per receiver" approach has many advantages,
but I think it's a different topic.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5242.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5240.php">Jeff Squyres: "[OMPI devel] trac report 14"</a>
<li><strong>In reply to:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
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
