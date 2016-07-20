<?
$subject_val = "Re: [hwloc-users] Solaris and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 18:42:14 2012" -->
<!-- isoreceived="20120912224214" -->
<!-- sent="Thu, 13 Sep 2012 00:42:07 +0200" -->
<!-- isosent="20120912224207" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Solaris and hwloc" -->
<!-- id="20120912224207.GF5224_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="11A37373-1024-4671-A5D0-B9D60079CB5F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Solaris and hwloc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 18:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0715.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0713.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0716.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0716.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 13 Sep 2012 00:25:24 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 12, 2012, at 10:28 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; He seems to get an hwloc error any time he tries to bind to more than 1 PU.  Is that expected on Solaris?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Without lgrp support, unfortunately yes: the processor_bind solaris interface only permits to bind to one processor.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With lgrp support, on should be able to bind oneself to sets of whole
</span><br>
<span class="quotelev2">&gt; &gt; NUMA nodes. I don't know any interface which would provide a granularity
</span><br>
<span class="quotelev2">&gt; &gt; between one processor and one NUMA node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah.  So -- for Open MPI on Solaris using hwloc, all we can do is bind to 1 PU at a time.  I suppose we should release-note that...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Sorry Siegmar! :-( )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And just so I understand -- we don't have lgrp support in hwloc, mainly because no one had the cycles/interest to implement it.  Is that correct?
</span><br>
<p>No, we have it, but not all solaris systems have it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0715.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0713.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0716.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0716.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
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
