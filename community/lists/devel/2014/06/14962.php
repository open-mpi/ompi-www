<?
$subject_val = "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 16:56:24 2014" -->
<!-- isoreceived="20140602205624" -->
<!-- sent="Mon, 2 Jun 2014 15:56:22 -0500" -->
<!-- isosent="20140602205622" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()" -->
<!-- id="CAMJJpkVvao9nniSLH9KO2viKiJCJaMcx-FW1rvCXJ6wpKiRKeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5t-w46MBVGFqxYSpMGhLUEGck9h_Yz=Babaz8dLfqOaYQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 16:56:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="14961.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14937.php">Gilles Gouaillardet: "[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the scif BTL registered it's own memory registration function, I
<br>
would have expected that it will deregister it upon finalize. Without
<br>
this we run into circular dependencies that are not solvable at the
<br>
library level.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Mon, Jun 2, 2014 at 12:39 AM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this email contains :
</span><br>
<span class="quotelev1">&gt; - the description of a problem
</span><br>
<span class="quotelev1">&gt; - a possible fix that requires a review
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PROBLEM :
</span><br>
<span class="quotelev1">&gt; i always get SIGSEGV when running
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl scif,self ./test_4610
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test_4610.c is attached to <a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in order to reproduce the issue, MPSS must be loaded
</span><br>
<span class="quotelev1">&gt; /* only MPSS is required, MIC is *not* required */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is what happens :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_mpi_finalize calls
</span><br>
<span class="quotelev1">&gt; mca_base_framework_close(&amp;ompi_mpool_base_framework)
</span><br>
<span class="quotelev1">&gt; at ompi/runtime/ompi_mpi_finalize:411
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that ends up crashing when executing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpool_grdma-&gt;resources.deregister_mem
</span><br>
<span class="quotelev1">&gt; at ompi/mca/mpool/grdma/mpool_grdma_module.c:115
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where mpool_grdma-&gt;resources.deregister_mem *was* scif_dereg_mem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i wrote *was* and not *is* because before that, ompi_mpi_finalize called
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_base_framework_close(&amp;ompi_bml_base_framework)
</span><br>
<span class="quotelev1">&gt; at ompi/runtime/ompi_mpi_finalize:408
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which indirectly unloaded the scif btl (and hence the scif_dereg_mem
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; POSSIBLE FIX :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a naive approach is to call
</span><br>
<span class="quotelev1">&gt; mca_base_framework_close(&amp;ompi_mpool_base_framework)
</span><br>
<span class="quotelev1">&gt; *before*
</span><br>
<span class="quotelev1">&gt; mca_base_framework_close(&amp;ompi_bml_base_framework)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; even if i ran very few tests and did not experience any issue, i simply do
</span><br>
<span class="quotelev1">&gt; not know wether this is the right thing to do and what could be the
</span><br>
<span class="quotelev1">&gt; consequences of swapping these two calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could someone please review and comment this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14937.php">http://www.open-mpi.org/community/lists/devel/2014/06/14937.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="14961.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14937.php">Gilles Gouaillardet: "[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
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
