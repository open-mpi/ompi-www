<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 24 18:04:11 2012" -->
<!-- isoreceived="20120324220411" -->
<!-- sent="Sat, 24 Mar 2012 18:04:07 -0400" -->
<!-- isosent="20120324220407" -->
<!-- name="Daniel Ibanez" -->
<!-- email="dan.a.ibanez_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="CADcFuab==3qB=grs_584aoaM-90Hh78xgG_T3e8LevyP+nCx7A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADcFuabzo5Dy74zMdrQ7eXQQhZ=mHYdf2o9QBpuoGB7ys0nZOg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-24 18:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2989.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4421)"</a>
<li><strong>Previous message:</strong> <a href="2987.php">Christopher Samuel: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The fundamental difference is in
<br>
<p>src/topology-linux.c:3251
<br>
<p>when this if statement is true, hwloc_setup_pu_level
<br>
finds the PU objects.
<br>
When it is false, it fails with empty topology.
<br>
<p>I checked HWLOC_LINUX_USE_CPUINFO,
<br>
and it is not detected even when I set it from the front end.
<br>
<p>That means the difference is whether hwloc can access
<br>
the various /sys/devices and /sys/bus files.
<br>
<p>Additional printfs confirm that with MPI in the code,
<br>
hwloc_accessat succeeds on the various /sys/ directories,
<br>
but the overall procedure for getting PUs from these fails.
<br>
Without MPI, access to /sys/ directories fails but
<br>
the fallback hwloc_setup_pu_level works.
<br>
<p>due to the unstable nature of the machine I'm having trouble
<br>
submitting more tests to see what goes wrong using the /sys information.
<br>
<p>On Thu, Mar 22, 2012 at 6:47 PM, Daniel Ibanez &lt;dan.a.ibanez_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I've compiled this test, but the machine is on hold for their own testing.
</span><br>
<span class="quotelev1">&gt; I should be able to run in two days and report the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 22, 2012 at 6:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 22/03/2012 23:33, Daniel Ibanez a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've run this test  before (didnt keep the results but can run it
</span><br>
<span class="quotelev2">&gt;&gt; again).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I got debug output and compared it with the output from a hwloc test
</span><br>
<span class="quotelev3">&gt;&gt; &gt; executable
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and I noticed that my program did not show any PU objects were
</span><br>
<span class="quotelev2">&gt;&gt; discovered.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In my program the first discovered topology is just a Machine object,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; but in the hwloc program its a Machine object and 64 PU objects.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; something went wrong in PU detection...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I am reading your output correctly, all PUs are created by
</span><br>
<span class="quotelev2">&gt;&gt; setup_pu_level() depending on the return value of
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_fallback_nbprocessors() defined in src/topology.c. Any chance you
</span><br>
<span class="quotelev2">&gt;&gt; add some printf there to understand what's going on?
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_fallback_nbprocessors() would likely return 64 when things work
</span><br>
<span class="quotelev2">&gt;&gt; and 0 otherwise here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dan Ibanez
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Dan Ibanez
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2988/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2989.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4421)"</a>
<li><strong>Previous message:</strong> <a href="2987.php">Christopher Samuel: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
