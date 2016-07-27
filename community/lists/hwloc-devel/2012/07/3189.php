<?
$subject_val = "Re: [hwloc-devel] mpich2 maintained patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 12:37:05 2012" -->
<!-- isoreceived="20120723163705" -->
<!-- sent="Mon, 23 Jul 2012 18:36:59 +0200" -->
<!-- isosent="20120723163659" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] mpich2 maintained patches for hwloc" -->
<!-- id="500D7DAB.6090002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="500D3814.2090108_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] mpich2 maintained patches for hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 12:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3190.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3188.php">Pavan Balaji: "[hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3188.php">Pavan Balaji: "[hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3190.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3190.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/07/2012 13:40, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The change to autogen.sh is required for pgcc and friends.  You
</span><br>
<span class="quotelev1">&gt; can't take this patch as is, obviously, but you'll need some version
</span><br>
<span class="quotelev1">&gt; of this.  Cc'ing Dave, in case you need more details of this issue.
</span><br>
<p>I haven't tried pgcc recently. Which pgcc version needs this? and what
<br>
happens if you don't apply this patch?
<br>
<p><span class="quotelev1">&gt; 3. The changes to config/hwloc.m4 and include/private/private.h are
</span><br>
<span class="quotelev1">&gt; essentially a warning squash when getpagesize() requires an explicit
</span><br>
<span class="quotelev1">&gt; prototype declaration.  But it's not clear how easy it is for you to
</span><br>
<span class="quotelev1">&gt; absorb it as it uses an MPICH2 internal m4 macro.  Maybe there's a
</span><br>
<span class="quotelev1">&gt; cleaner way to integrate this patch.
</span><br>
<p>I will look at this. On which platform/system did you need this patch?
<br>
<p><span class="quotelev1">&gt; 4. The change to configure.ac is an issue with automake-1.12 that Dave
</span><br>
<span class="quotelev1">&gt; noticed.
</span><br>
<p>These lines have been added in v1.5 already.
<br>
<p>Thanks!
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3190.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3188.php">Pavan Balaji: "[hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3188.php">Pavan Balaji: "[hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3190.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3190.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
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
