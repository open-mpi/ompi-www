<?
$subject_val = "[OMPI devel] After svn up...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 10:29:54 2012" -->
<!-- isoreceived="20120419142954" -->
<!-- sent="Thu, 19 Apr 2012 10:29:50 -0400" -->
<!-- isosent="20120419142950" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] After svn up..." -->
<!-- id="03E5C4FD-B929-4044-BB36-5CFFDB5F681F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] After svn up...<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 10:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10894.php">Ralph Castain: "[OMPI devel] June Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may have missed it at the bottom of my mail last night, but after running &quot;svn up&quot; to get all the new Fortran stuff, you might want to run these commands to clean out kruft that &quot;svn up&quot; may not remove:
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
<li><strong>Next message:</strong> <a href="10894.php">Ralph Castain: "[OMPI devel] June Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
<!-- nextthread="start" -->
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
