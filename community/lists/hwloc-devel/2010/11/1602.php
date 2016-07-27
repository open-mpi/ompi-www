<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 09:59:56 2010" -->
<!-- isoreceived="20101124145956" -->
<!-- sent="Wed, 24 Nov 2010 09:59:37 -0500" -->
<!-- isosent="20101124145937" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="64C93FD3-74A7-4D53-8276-4AF3E7A3C97D_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 09:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See below. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Nov 24, 2010, at 4:32 AM, &quot;Pavan Balaji&quot; &lt;balaji_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are maintaining a few patches for hwloc within mpich2. I have just updated to 1.1rc3, and wanted to pass them through you guys to see if (1) these are still relevant, and (2) if they can be merged upstream.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Gracefully abort at configure time if the compiler doesn't support C99: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Slight improvement to the error message: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Warning squashes from shadowing global variables: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following patches are just a matter of preference. So you might not want to incorporate them, but here they are anyway:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Disable doxygen builds by default: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<p>Is there a reason you guys don't configure --disable-embedded-mode?
<br>
<p><span class="quotelev1">&gt; 2. Don't automatically pick debugging or picky compiler options unless the user asked for them: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Pavan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavan Balaji
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
