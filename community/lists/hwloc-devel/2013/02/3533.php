<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 01:57:12 2013" -->
<!-- isoreceived="20130212065712" -->
<!-- sent="Tue, 12 Feb 2013 07:57:05 +0100" -->
<!-- isosent="20130212065705" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src" -->
<!-- id="5119E7C1.4070703_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51198D69.4080504_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-12 01:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3534.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5317)"</a>
<li><strong>Previous message:</strong> <a href="3532.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>In reply to:</strong> <a href="3532.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/02/2013 01:31, Christopher Samuel a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On 08/02/13 23:22, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 08/02/2013 12:52, Samuel Thibault a &#239;&#191;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would it be possible to check some file in /proc or /sys to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; identify the machine, to make sure we are not lying?
</span><br>
<span class="quotelev2">&gt; &gt; There's no such filesystems on BlueGene compute nodes. The CNK
</span><br>
<span class="quotelev2">&gt; &gt; kernel redirects I/O call to the I/O node (which runs Linux).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually the latest BG/Q stack V1R2M0 does have a /proc directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I suspect you're probably better off calling uname() on it
</span><br>
<span class="quotelev1">&gt; and using the sysname[] component.
</span><br>
<p>Yeah I looked at this new /proc during the week-end but didn't find
<br>
anything significantly better than uname().
<br>
<p>Also, unfortunately, /proc/&lt;pid&gt;/task doesn't seem to contain all
<br>
threads of a process so I didn't bother looking longer.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3534.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5317)"</a>
<li><strong>Previous message:</strong> <a href="3532.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>In reply to:</strong> <a href="3532.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
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
