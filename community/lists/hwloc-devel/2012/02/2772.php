<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 18:14:01 2012" -->
<!-- isoreceived="20120201231401" -->
<!-- sent="Thu, 02 Feb 2012 00:13:55 +0100" -->
<!-- isosent="20120201231355" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F29C733.5070800_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29C3D3.4010605_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 18:13:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2773.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/02/2012 23:59, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 02/02/12 00:20, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This looks very bad. It means something screwed the already very complex
</span><br>
<span class="quotelev2">&gt; &gt; sched_setaffinity detection code.
</span><br>
<span class="quotelev2">&gt; &gt; Does XLC redefine its own sched_setaffinity functions? Can you find the
</span><br>
<span class="quotelev2">&gt; &gt; relevant header file and send it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, I can only find some library matches..
</span><br>
<p>I assume you have HWLOC_HAVE_OLD_SCHED_SETAFFINITY set in
<br>
include/private/autogen/config.h, right? If so, can you #undef it,
<br>
recompile (see if those ugly setaffinity warnings are gone in
<br>
topology-linux.c) and retest?
<br>
I am trying to find out which setaffinity prototype this version of XLC
<br>
wants.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2773.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
