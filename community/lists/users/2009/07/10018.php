<?
$subject_val = "[OMPI users] Profiling performance by forcing transport choice.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 16:03:16 2009" -->
<!-- isoreceived="20090720200316" -->
<!-- sent="Mon, 20 Jul 2009 13:03:04 -0700" -->
<!-- isosent="20090720200304" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="[OMPI users] Profiling performance by forcing transport choice." -->
<!-- id="20090720200304.GA2964_at_compegg.wr.niftyegg.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Profiling performance by forcing transport choice.<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 16:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10019.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
<li><strong>Reply:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 25, 2009 at 08:37:21PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 50%performance reduction due to OpenMPI v 1.3.2forcing
</span><br>
<span class="quotelev1">&gt; 	allMPI traffic over Ethernet instead of using Infiniband
</span><br>
<p>&lt;musing&gt;
<br>
<p>While the previous thread on &quot;performance reduction&quot; went left, right,
<br>
forward and beyond the initial topic it tickled an idea for application
<br>
profiling or characterizing.
<br>
<p>What if the various transports (btl) had knobs that permitted stepwise 
<br>
insertion of bandwidth limits and latency limits etc. so the application
<br>
might be characterized better?
<br>
<p>Most micro benchmarks are designed to measure various hardware characteristics
<br>
but it is moderately hard to know what an application depends on.
<br>
<p>The value of this is that:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*the application authors might learn something
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;about their code that is hard to know at a well 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abstracted API level.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*the purchasing decision maker would have the ability 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to access a well instrumented cluster and build a 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weighted value equation to help structure the decision.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*the hardware vendor can learn what is valuable when deciding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;what feature and function needs the most attention/ transistors.
<br>
<p>i.e. it might be as valuable to benchmark &quot;your code&quot; on a single well
<br>
instrumented platform as it might be to benchmark all the hardware you 
<br>
can get &quot;yer hands on&quot;.
<br>
<p>&lt;/musing&gt;
<br>
<p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10019.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
<li><strong>Reply:</strong> <a href="10067.php">Eugene Loh: "Re: [OMPI users] Profiling performance by forcing transport choice."</a>
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
