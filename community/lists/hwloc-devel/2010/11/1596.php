<?
$subject_val = "[hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 04:32:16 2010" -->
<!-- isoreceived="20101124093216" -->
<!-- sent="Wed, 24 Nov 2010 03:31:40 -0600" -->
<!-- isosent="20101124093140" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CECDB7C.1030302_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 04:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1595.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1604.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Maybe reply:</strong> <a href="1611.php">Samuel Thibault: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>We are maintaining a few patches for hwloc within mpich2. I have just 
<br>
updated to 1.1rc3, and wanted to pass them through you guys to see if 
<br>
(1) these are still relevant, and (2) if they can be merged upstream.
<br>
<p>1. Gracefully abort at configure time if the compiler doesn't support 
<br>
C99: 
<br>
<a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
<br>
<p>2. Slight improvement to the error message: 
<br>
<a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
<br>
<p>3. Warning squashes from shadowing global variables: 
<br>
<a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
<br>
<p>The following patches are just a matter of preference. So you might not 
<br>
want to incorporate them, but here they are anyway:
<br>
<p>1. Disable doxygen builds by default: 
<br>
<a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
<br>
<p>2. Don't automatically pick debugging or picky compiler options unless 
<br>
the user asked for them: 
<br>
<a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
<br>
<p>Thanks,
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1595.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1604.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Maybe reply:</strong> <a href="1611.php">Samuel Thibault: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
