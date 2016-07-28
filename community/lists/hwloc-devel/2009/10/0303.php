<?
$subject_val = "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 18:47:42 2009" -->
<!-- isoreceived="20091029224742" -->
<!-- sent="Thu, 29 Oct 2009 23:47:36 +0100" -->
<!-- isosent="20091029224736" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc" -->
<!-- id="20091029224736.GG4692_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AEA19C7.9010501_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 18:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0304.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0304.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 29 Oct 2009 23:40:07 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Pavan Balaji wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is the latest version of the PGI compiler. If this is indeed
</span><br>
<span class="quotelev2">&gt; &gt; broken, then it'll be ideal if the configure can detect it and basically
</span><br>
<span class="quotelev2">&gt; &gt; disable everything. That is, hwloc_topology_init can return a failure,
</span><br>
<span class="quotelev2">&gt; &gt; so packages relying on hwloc can do something else.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't have pgcc, so we can't really really/test such a detection
</span><br>
<span class="quotelev1">&gt; code. Maybe AC_COMPILE_IFELSE or AC_LINK_IFELSE with a code like below
</span><br>
<span class="quotelev1">&gt; would be enough:
</span><br>
<p>I'm doing it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0304.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0304.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
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
