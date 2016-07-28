<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 04:52:59 2010" -->
<!-- isoreceived="20101124095259" -->
<!-- sent="Wed, 24 Nov 2010 10:52:53 +0100" -->
<!-- isosent="20101124095253" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CECE075.7090000_at_inria.fr" -->
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
<strong>Date:</strong> 2010-11-24 04:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1598.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1600.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1600.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
<p>I don't remember why we never applied this.
<br>
<p><span class="quotelev1">&gt; 2. Slight improvement to the error message:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Should be ok.
<br>
<p><span class="quotelev1">&gt; 3. Warning squashes from shadowing global variables:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Looks ok but I don't see why index/depth would be global variables.
<br>
Aren't they reserved keywords instead?
<br>
<p><span class="quotelev1">&gt; The following patches are just a matter of preference. So you might
</span><br>
<span class="quotelev1">&gt; not want to incorporate them, but here they are anyway:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Disable doxygen builds by default:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't think we want this one since:
<br>
* doxygen is already disabled when building from official tarball since
<br>
we build the doc before make dist
<br>
* keeping doxygen enabled by default makes sure we don't forget to fix
<br>
the doc when changing the API
<br>
<p><span class="quotelev1">&gt; 2. Don't automatically pick debugging or picky compiler options unless
</span><br>
<span class="quotelev1">&gt; the user asked for them:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know about this one.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1598.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1600.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1600.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
