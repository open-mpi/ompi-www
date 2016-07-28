<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 15 13:15:27 2014" -->
<!-- isoreceived="20140115181527" -->
<!-- sent="Wed, 15 Jan 2014 18:15:25 +0000" -->
<!-- isosent="20140115181525" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52D6D03D.2030201_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52CD19D2.5060905_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - v2<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-15 13:15:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4030.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-38-g0e36bf7)"</a>
<li><strong>Previous message:</strong> <a href="4028.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-34-g5198d4c)"</a>
<li><strong>In reply to:</strong> <a href="4018.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/01/14 09:26, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 07/01/2014 15:19, Andrew Cooper a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 07/01/14 11:54, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can't check the code right now, but a couple questions below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just checked the code. My only little complain is that we always get
</span><br>
<span class="quotelev1">&gt; this error message in the terminal, even when not enabling Xen:
</span><br>
<span class="quotelev1">&gt;     xc: error: Could not obtain handle on privileged command interface
</span><br>
<span class="quotelev1">&gt; (2 = Aucun fichier ou dossier de ce ): Internal error
</span><br>
<span class="quotelev1">&gt; This will only happen when libxc is available but we're not root_at_dom0
</span><br>
<span class="quotelev1">&gt; (which is always my case :)). We'll see later if we really need to
</span><br>
<span class="quotelev1">&gt; make that go away (could use component conflicts, we'll see).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Fixed in v3
<br>
<p><a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v3">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v3</a>
<br>
<p>Also, while attempting to make a trivial repro of the &quot;intersection
<br>
without inclusion&quot; problem, I discovered that it really was a bug in my
<br>
code (which is now fixed)
<br>
<p>~Andrew
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4030.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-38-g0e36bf7)"</a>
<li><strong>Previous message:</strong> <a href="4028.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-34-g5198d4c)"</a>
<li><strong>In reply to:</strong> <a href="4018.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
