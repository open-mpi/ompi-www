<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 10:50:14 2010" -->
<!-- isoreceived="20101124155014" -->
<!-- sent="Wed, 24 Nov 2010 16:50:09 +0100" -->
<!-- isosent="20101124155009" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CED3431.3000907_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CECDB7C.1030302_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 10:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1605.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1611.php">Samuel Thibault: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/11/2010 10:31, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are maintaining a few patches for hwloc within mpich2. I have just
</span><br>
<span class="quotelev1">&gt; updated to 1.1rc3, and wanted to pass them through you guys to see if
</span><br>
<span class="quotelev1">&gt; (1) these are still relevant, and (2) if they can be merged upstream.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Gracefully abort at configure time if the compiler doesn't support
</span><br>
<span class="quotelev1">&gt; C99:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Slight improvement to the error message:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Warning squashes from shadowing global variables:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Please try v1.1 or trunk r2838 or later. All the above should be fixed.
<br>
<p>I assumed (1) isn't needed, configure seems to already fail properly
<br>
without c99 anyway.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1605.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1611.php">Samuel Thibault: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
