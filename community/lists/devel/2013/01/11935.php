<?
$subject_val = "Re: [OMPI devel] 1.6.4rc1 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 17:27:21 2013" -->
<!-- isoreceived="20130117222721" -->
<!-- sent="Thu, 17 Jan 2013 14:26:34 -0800" -->
<!-- isosent="20130117222634" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc1 has been posted" -->
<!-- id="CAAvDA15Q=5Z41qv2S72_Ei7CVJgz+uFgtFTR4te=wmkUx_Nx3w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3E082FB9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.4rc1 has been posted<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 17:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11936.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="11934.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="11934.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11937.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Reply:</strong> <a href="11937.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I see OpenBSD twice on the list of changes, I've fired off my
<br>
automated testing on my OpenBSD platforms.
<br>
Since the &quot;MPI datatype issues on OpenBSD&quot; I reported against 1.7.0rc5 also
<br>
appeared on FreeBSD-6.3, I've tested that platform as well.
<br>
<p>The good news is that the problems I've reported in the past appear to be
<br>
resolved.
<br>
<p>The BAD news is a new failure (SEGV in orted at exit) on OpenBSD-5.2/amd64,
<br>
which I will report in a separate email once I've completed some triage.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 17, 2013 at 12:49 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In the usual location:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a list of changes since 1.6.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Added performance improvements to the OpenIB (OpenFabrics) BTL.
</span><br>
<span class="quotelev1">&gt; - Improved error message when process affinity fails.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_MINLOC on man pages for MPI_REDUCE(_LOCAL).  Thanks to Jed
</span><br>
<span class="quotelev1">&gt;   Brown for noticing the problem and supplying a fix.
</span><br>
<span class="quotelev1">&gt; - Made malloc hooks more friendly to IO interprosers.  Thanks to the
</span><br>
<span class="quotelev1">&gt;   bug report and suggested fix from Darshan maintainer Phil Carns.
</span><br>
<span class="quotelev1">&gt; - Restored ability to direct launch under SLURM without PMI support.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI datatype issues on OpenBSD.
</span><br>
<span class="quotelev1">&gt; - Major VT update to 5.14.2.
</span><br>
<span class="quotelev1">&gt; - Support FCA v3.0+.
</span><br>
<span class="quotelev1">&gt; - Fixed header file problems on OpenBSD.
</span><br>
<span class="quotelev1">&gt; - Fixed issue with MPI_TYPE_CREATE_F90_REAL.
</span><br>
<span class="quotelev1">&gt; - Fix an issue with using external libltdl installations.  Thanks to
</span><br>
<span class="quotelev1">&gt;   opolawski for identifying the problem.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_IN_PLACE case for MPI_ALLGATHER for FCA.
</span><br>
<span class="quotelev1">&gt; - Allow SLURM PMI support to look in lib64 directories.  Thanks to
</span><br>
<span class="quotelev1">&gt;   Guillaume Papaure for the patch.
</span><br>
<span class="quotelev1">&gt; - Restore &quot;use mpi&quot; ABI compatibility with the rest of the 1.5/1.6
</span><br>
<span class="quotelev1">&gt;   series (except for v1.6.3, where it was accidentally broken).
</span><br>
<span class="quotelev1">&gt; - Fix a very old error in opal_path_access(). Thanks to Marco Atzeri
</span><br>
<span class="quotelev1">&gt;   for chasing it down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11936.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="11934.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="11934.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11937.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Reply:</strong> <a href="11937.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
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
