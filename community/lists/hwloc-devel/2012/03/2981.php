<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 18:47:57 2012" -->
<!-- isoreceived="20120322224757" -->
<!-- sent="Thu, 22 Mar 2012 18:47:53 -0400" -->
<!-- isosent="20120322224753" -->
<!-- name="Daniel Ibanez" -->
<!-- email="dan.a.ibanez_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="CADcFuabzo5Dy74zMdrQ7eXQQhZ=mHYdf2o9QBpuoGB7ys0nZOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F6BA988.9070803_at_inria.fr" -->
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
<strong>Date:</strong> 2012-03-22 18:47:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2982.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4418)"</a>
<li><strong>Previous message:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've compiled this test, but the machine is on hold for their own testing.
<br>
I should be able to run in two days and report the results.
<br>
<p>On Thu, Mar 22, 2012 at 6:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 22/03/2012 23:33, Daniel Ibanez a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I've run this test  before (didnt keep the results but can run it again).
</span><br>
<span class="quotelev2">&gt; &gt; I got debug output and compared it with the output from a hwloc test
</span><br>
<span class="quotelev2">&gt; &gt; executable
</span><br>
<span class="quotelev2">&gt; &gt; and I noticed that my program did not show any PU objects were
</span><br>
<span class="quotelev1">&gt; discovered.
</span><br>
<span class="quotelev2">&gt; &gt; In my program the first discovered topology is just a Machine object,
</span><br>
<span class="quotelev2">&gt; &gt; but in the hwloc program its a Machine object and 64 PU objects.
</span><br>
<span class="quotelev2">&gt; &gt; something went wrong in PU detection...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I am reading your output correctly, all PUs are created by
</span><br>
<span class="quotelev1">&gt; setup_pu_level() depending on the return value of
</span><br>
<span class="quotelev1">&gt; hwloc_fallback_nbprocessors() defined in src/topology.c. Any chance you
</span><br>
<span class="quotelev1">&gt; add some printf there to understand what's going on?
</span><br>
<span class="quotelev1">&gt; hwloc_fallback_nbprocessors() would likely return 64 when things work
</span><br>
<span class="quotelev1">&gt; and 0 otherwise here.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2981/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2982.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4418)"</a>
<li><strong>Previous message:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2980.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
