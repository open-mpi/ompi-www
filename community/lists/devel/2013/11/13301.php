<?
$subject_val = "Re: [OMPI devel] Change request for include/mpif-config.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 10:39:06 2013" -->
<!-- isoreceived="20131122153906" -->
<!-- sent="Fri, 22 Nov 2013 15:39:04 +0000" -->
<!-- isosent="20131122153904" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change request for include/mpif-config.h" -->
<!-- id="9E26879C-9685-4CCD-A77A-B5F2312714D1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E7EFA621-45D9-4776-884E-9F6D32D4291B_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change request for include/mpif-config.h<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 10:39:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13302.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13300.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13298.php">Gunter, David O: "[OMPI devel] Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres is usually our Fortran expert for this sort of issue, but he's on vacation until after the Thanksgiving holiday in the US.  So please expect a modest delay in (properly) responding to your question.
<br>
<p>-Dave
<br>
<p>On Nov 21, 2013, at 9:37 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We have a user complaining about warnings he is getting from his Fortran 95 code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Intel compilers throw out this warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; warning #7346: The CHARACTER* form of a CHARACTER declaration is an obsolescent feature in Fortran 95.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The warning stems from the following two lines in &lt;mpi dir&gt;/include/mpif-config.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      character*32 OMPI_GREEK_VERSION
</span><br>
<span class="quotelev1">&gt;      character*32 OMPI_SVN_VERSION
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we simply change those lines to the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      character(len=32) OMPI_GREEK_VERSION
</span><br>
<span class="quotelev1">&gt;      character(len=32) OMPI_SVN_VERSION
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What would break if that happened?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13302.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13300.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13298.php">Gunter, David O: "[OMPI devel] Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
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
