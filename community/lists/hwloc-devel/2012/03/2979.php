<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 18:33:19 2012" -->
<!-- isoreceived="20120322223319" -->
<!-- sent="Thu, 22 Mar 2012 18:33:14 -0400" -->
<!-- isosent="20120322223314" -->
<!-- name="Daniel Ibanez" -->
<!-- email="dan.a.ibanez_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="CADcFuaZUrN2UMy2oW8jBE=jzofEx+bjvCTPDq3ydGWHkBmM=4A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F6BA7BB.6070005_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd: BGQ empty topology with MPI<br>
<strong>From:</strong> Daniel Ibanez (<em>dan.a.ibanez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 18:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/04/3010.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run this test  before (didnt keep the results but can run it again).
<br>
I got debug output and compared it with the output from a hwloc test
<br>
executable
<br>
and I noticed that my program did not show any PU objects were discovered.
<br>
In my program the first discovered topology is just a Machine object,
<br>
but in the hwloc program its a Machine object and 64 PU objects.
<br>
something went wrong in PU detection...
<br>
<p>On Thu, Mar 22, 2012 at 6:29 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 22/03/2012 23:07, Daniel Ibanez a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspected this might be the reason, so I called &quot;nm&quot;
</span><br>
<span class="quotelev2">&gt; &gt; with the static versions of the libraries their compiler wrappers
</span><br>
<span class="quotelev2">&gt; &gt; link against and I could not find the term &quot;hwloc&quot; in the output.
</span><br>
<span class="quotelev2">&gt; &gt; Is this a valid test?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your hwloc is still compiled with debug enabled, you can rebuild/run
</span><br>
<span class="quotelev1">&gt; your MPI program with it. You should get the huge verbose output on
</span><br>
<span class="quotelev1">&gt; stderr as long as you call hwloc_topology_init() and load(). If you
</span><br>
<span class="quotelev1">&gt; don't get anything, some other hwloc is used instead of yours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dan Ibanez
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2979/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/04/3010.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
