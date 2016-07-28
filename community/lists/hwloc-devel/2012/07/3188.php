<?
$subject_val = "[hwloc-devel] mpich2 maintained patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 07:40:11 2012" -->
<!-- isoreceived="20120723114011" -->
<!-- sent="Mon, 23 Jul 2012 06:40:04 -0500" -->
<!-- isosent="20120723114004" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] mpich2 maintained patches for hwloc" -->
<!-- id="500D3814.2090108_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] mpich2 maintained patches for hwloc<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 07:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3187.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5rc3r4657)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are still maintaining a bunch of patches to hwloc in mpich2.
<br>
<p><a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/10011/mpich2/trunk/src/pm/hydra/tools/topo/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/10011/mpich2/trunk/src/pm/hydra/tools/topo/hwloc/hwloc</a>
<br>
<p>1. The change to Makefile.am was reported earlier, but we decided there 
<br>
wasn't a clean way to do this.  You can ignore that part.
<br>
<p>2. The change to autogen.sh is required for pgcc and friends.  You can't 
<br>
take this patch as is, obviously, but you'll need some version of this. 
<br>
&nbsp;&nbsp;Cc'ing Dave, in case you need more details of this issue.
<br>
<p>3. The changes to config/hwloc.m4 and include/private/private.h are 
<br>
essentially a warning squash when getpagesize() requires an explicit 
<br>
prototype declaration.  But it's not clear how easy it is for you to 
<br>
absorb it as it uses an MPICH2 internal m4 macro.  Maybe there's a 
<br>
cleaner way to integrate this patch.
<br>
<p>4. The change to configure.ac is an issue with automake-1.12 that Dave 
<br>
noticed.
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
<li><strong>Next message:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3187.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5rc3r4657)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
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
