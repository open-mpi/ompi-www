<?
$subject_val = "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 18:22:04 2009" -->
<!-- isoreceived="20091029222204" -->
<!-- sent="Thu, 29 Oct 2009 17:21:55 -0500" -->
<!-- isosent="20091029222155" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc" -->
<!-- id="4AEA1583.9000203_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AEA12B4.4050203_at_inria.fr" -->
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
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 18:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0301.php">Jeff Squyres: "Re: [hwloc-devel] docs updated"</a>
<li><strong>Previous message:</strong> <a href="0299.php">Brice Goglin: "Re: [hwloc-devel] docs updated"</a>
<li><strong>In reply to:</strong> <a href="0298.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the latest version of the PGI compiler. If this is indeed
<br>
broken, then it'll be ideal if the configure can detect it and basically
<br>
disable everything. That is, hwloc_topology_init can return a failure,
<br>
so packages relying on hwloc can do something else.
<br>
<p>FWIW, I don't have this problem with plpa.
<br>
<p>&nbsp;-- Pavan
<br>
<p>On 10/29/2009 05:09 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Do we support broken compilers ? :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this pgcc old? Is it supposed to work with a recent glibc that
</span><br>
<span class="quotelev1">&gt; defines CPU* using __CPU*_S instead of using __CPU*? I don't know what
</span><br>
<span class="quotelev1">&gt; they're doing, but the macros in this file look obsolete to me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0301.php">Jeff Squyres: "Re: [hwloc-devel] docs updated"</a>
<li><strong>Previous message:</strong> <a href="0299.php">Brice Goglin: "Re: [hwloc-devel] docs updated"</a>
<li><strong>In reply to:</strong> <a href="0298.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0302.php">Brice Goglin: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
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
