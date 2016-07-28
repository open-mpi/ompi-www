<?
$subject_val = "[OMPI devel] 1.6.4rc1 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 15:50:00 2013" -->
<!-- isoreceived="20130117205000" -->
<!-- sent="Thu, 17 Jan 2013 20:49:53 +0000" -->
<!-- isosent="20130117204953" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.4rc1 has been posted" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E082FB9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.4rc1 has been posted<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 15:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11935.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="11933.php">Jeff Squyres (jsquyres): "[OMPI devel] sanity check on 1.6.4 .so versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11935.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Reply:</strong> <a href="11935.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Here's a list of changes since 1.6.3:
<br>
<p>- Added performance improvements to the OpenIB (OpenFabrics) BTL.
<br>
- Improved error message when process affinity fails.
<br>
- Fixed MPI_MINLOC on man pages for MPI_REDUCE(_LOCAL).  Thanks to Jed
<br>
&nbsp;&nbsp;Brown for noticing the problem and supplying a fix.
<br>
- Made malloc hooks more friendly to IO interprosers.  Thanks to the
<br>
&nbsp;&nbsp;bug report and suggested fix from Darshan maintainer Phil Carns.
<br>
- Restored ability to direct launch under SLURM without PMI support.
<br>
- Fixed MPI datatype issues on OpenBSD.
<br>
- Major VT update to 5.14.2.
<br>
- Support FCA v3.0+.
<br>
- Fixed header file problems on OpenBSD.
<br>
- Fixed issue with MPI_TYPE_CREATE_F90_REAL.
<br>
- Fix an issue with using external libltdl installations.  Thanks to
<br>
&nbsp;&nbsp;opolawski for identifying the problem.
<br>
- Fixed MPI_IN_PLACE case for MPI_ALLGATHER for FCA.
<br>
- Allow SLURM PMI support to look in lib64 directories.  Thanks to
<br>
&nbsp;&nbsp;Guillaume Papaure for the patch.
<br>
- Restore &quot;use mpi&quot; ABI compatibility with the rest of the 1.5/1.6
<br>
&nbsp;&nbsp;series (except for v1.6.3, where it was accidentally broken).
<br>
- Fix a very old error in opal_path_access(). Thanks to Marco Atzeri
<br>
&nbsp;&nbsp;for chasing it down.
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
<li><strong>Next message:</strong> <a href="11935.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="11933.php">Jeff Squyres (jsquyres): "[OMPI devel] sanity check on 1.6.4 .so versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11935.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Reply:</strong> <a href="11935.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
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
