<?
$subject_val = "[OMPI devel] Fortran merge complete";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 18 21:53:33 2012" -->
<!-- isoreceived="20120419015333" -->
<!-- sent="Wed, 18 Apr 2012 21:53:28 -0400" -->
<!-- isosent="20120419015328" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fortran merge complete" -->
<!-- id="27C56E91-32C3-4F69-AD0B-556223FD48AC_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Fortran merge complete<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-18 21:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10891.php">Alex Margolin: "[OMPI devel] OPAL polling optimization"</a>
<li><strong>Previous message:</strong> <a href="10889.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Reply:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AFAICT, everything should be working now.  It took me longer than expected today to deal with configury for older Folder compilers.  Yuck!
<br>
<p>It looks like the nightly tarball built ok; we'll get some MTT results to look at for the morning.
<br>
<p>Please let me know if you have any problems.
<br>
<p>Some notes:
<br>
<p>- Remember: you have to have a recent Fortran compiler to get the new stuff.
<br>
&nbsp;&nbsp;- No version of gfortran has the Right stuff yet.  They're working on it.
<br>
&nbsp;&nbsp;- icc 12+ has all the Right stuff (that is available so far these days).
<br>
&nbsp;&nbsp;- icc 10 has some, but not all.  Meaning: you'll get a better &quot;use mpi&quot;, but no &quot;use mpi_f08&quot;).
<br>
&nbsp;&nbsp;- YMMV with other compilers.  Hopefully the configury will just sort it all out.
<br>
<p>- If you &quot;svn up&quot;, you might want to run the following commands to remove old kruft from your tree that svn might not remove (I also include below some of the directories from the recent ORTE update):
<br>
<p>rm -f ompi/mpiext/affinity/OMPI_Affinity_str.3
<br>
rm -rf ompi/mpiext/example/f77
<br>
rm -f ompi/include/mpi_ext.mod
<br>
rm -f ompi/include/mpicxx-ext.h
<br>
rm -f ompi/include/mpi-ext.h
<br>
rm -f ompi/include/mpif-ext.h
<br>
rm -f ompi/include/mpif90-ext.f90
<br>
rm -rf ompi/mpiext/example/f77
<br>
rm -rf ompi/mpi/f90
<br>
rm -rf ompi/mpi/f77
<br>
rm -rf orte/threads
<br>
rm -rf orte/mca/plm/ccp
<br>
rm -rf orte/mca/plm/poe
<br>
rm -rf orte/mca/plm/xgrid
<br>
rm -rf orte/mca/errmgr/orted
<br>
rm -rf orte/mca/errmgr/app
<br>
rm -rf orte/mca/errmgr/hnp
<br>
rm -rf orte/mca/ras/ccp
<br>
rm -rf orte/mca/ess/slurmd
<br>
rm -f ompi/tools/wrappers/*f90*
<br>
rm -f ompi/tools/wrappers/*f77*
<br>
rm -f config/ompi_get_version.sh
<br>
<p>- mpifort is the new wrapper compiler for all MPI Fortran codes (mpif77 and mpif90 exist, but are deprecated).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10891.php">Alex Margolin: "[OMPI devel] OPAL polling optimization"</a>
<li><strong>Previous message:</strong> <a href="10889.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Reply:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
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
