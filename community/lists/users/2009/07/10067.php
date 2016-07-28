<?
$subject_val = "Re: [OMPI users] Profiling performance by forcing transport choice.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 12:43:48 2009" -->
<!-- isoreceived="20090723164348" -->
<!-- sent="Thu, 23 Jul 2009 09:43:57 -0700" -->
<!-- isosent="20090723164357" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Profiling performance by forcing transport choice." -->
<!-- id="4A68934D.3030108_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090720200304.GA2964_at_compegg.wr.niftyegg.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Profiling performance by forcing transport choice.<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 12:43:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10068.php">Eric Thibodeau: "[OMPI users] TCP btl misbehaves if btl_tcp_port_min_v4 is not set."</a>
<li><strong>Previous message:</strong> <a href="10066.php">Craig Tierney: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10018.php">Nifty Tom Mitchell: "[OMPI users] Profiling performance by forcing transport choice."</a>
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
Nifty Tom Mitchell wrote:
<blockquote cite="mid20090720200304.GA2964@compegg.wr.niftyegg.com"
 type="cite">
  <pre wrap="">On Thu, Jun 25, 2009 at 08:37:21PM -0400, Jeff Squyres wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Subject: Re: [OMPI users] 50%performance reduction due to OpenMPI v 1.3.2forcing
	allMPI traffic over Ethernet instead of using Infiniband
    </pre>
  </blockquote>
  <pre wrap=""><!---->&lt;musing&gt;

While the previous thread on "performance reduction" went left, right,
forward and beyond the initial topic it tickled an idea for application
profiling or characterizing.

What if the various transports (btl) had knobs that permitted stepwise 
insertion of bandwidth limits and latency limits etc. so the application
might be characterized better?
  </pre>
</blockquote>
I'm unclear what you're asking about.&nbsp; Are you asking that a BTL would
limit the performance delivered to the application?&nbsp; E.g., the
interconnect is capable of 1 Gbyte/sec, but you only deliver 100
Mbyte/sec (or whatever the user selects) to the app so the user can see
whether bandwidth is a sensitive parameter for the app?<br>
<br>
If so, I have a few thoughts.<br>
<br>
1)&nbsp; The actual limitations of an MPI implementation may hard to model.&nbsp;
E.g., the amount of handshaking between processes, synchronization
delays, etc.<br>
<br>
2)&nbsp; For the most part, you could (actually even should) try doing this
stuff much higher up than the BTLs.&nbsp; E.g., how about developing a PMPI
layer that does what you're talking about.<br>
<br>
3)&nbsp; I think folks have tried this sort of thing in the past by
instrumenting the code and then "playing it back" or "simulating" with
other performance parameters.&nbsp; E.g., "I run for X cycles, then I send a
N-byte message, then compute another Y cycles, then post a receive,
then ..." and then turn the knobs for latency, bandwidth, etc., to see
at what point any of these become sensitive parameters.&nbsp; You might
see:&nbsp; gosh, as long as latency is lower than about 30-70 usec, it
really isn't important.&nbsp; Or, whatever.&nbsp; Off hand, I think different
people have tried this approach and (without bothering to check my
notes to see if my memory is any good) I think Dimemmas (associated
with Paraver and CEPBA Barcelona) was one such tool.<br>
<blockquote cite="mid20090720200304.GA2964@compegg.wr.niftyegg.com"
 type="cite">
  <pre wrap="">Most micro benchmarks are designed to measure various hardware characteristics
but it is moderately hard to know what an application depends on.

The value of this is that:
	*the application authors might learn something
	about their code that is hard to know at a well 
	abstracted API level.

	*the purchasing decision maker would have the ability 
	to access a well instrumented cluster and build a 
	weighted value equation to help structure the decision.

	*the hardware vendor can learn what is valuable when deciding
	what feature and function needs the most attention/ transistors.

i.e. it might be as valuable to benchmark "your code" on a single well
instrumented platform as it might be to benchmark all the hardware you 
can get "yer hands on".

&lt;/musing&gt;

  </pre>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10068.php">Eric Thibodeau: "[OMPI users] TCP btl misbehaves if btl_tcp_port_min_v4 is not set."</a>
<li><strong>Previous message:</strong> <a href="10066.php">Craig Tierney: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10018.php">Nifty Tom Mitchell: "[OMPI users] Profiling performance by forcing transport choice."</a>
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
