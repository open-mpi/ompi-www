<?
$subject_val = "[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 01:39:21 2014" -->
<!-- isoreceived="20140602053921" -->
<!-- sent="Mon, 2 Jun 2014 14:39:18 +0900" -->
<!-- isosent="20140602053918" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()" -->
<!-- id="CAAkFZ5t-w46MBVGFqxYSpMGhLUEGck9h_Yz=Babaz8dLfqOaYQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 01:39:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14936.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14962.php">George Bosilca: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="14962.php">George Bosilca: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>this email contains :
<br>
- the description of a problem
<br>
- a possible fix that requires a review
<br>
<p><p>PROBLEM :
<br>
i always get SIGSEGV when running
<br>
mpirun -np 2 --mca btl scif,self ./test_4610
<br>
<p>test_4610.c is attached to <a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>
<br>
<p>in order to reproduce the issue, MPSS must be loaded
<br>
/* only MPSS is required, MIC is *not* required */
<br>
<p><p>here is what happens :
<br>
<p>ompi_mpi_finalize calls
<br>
mca_base_framework_close(&amp;ompi_mpool_base_framework)
<br>
at ompi/runtime/ompi_mpi_finalize:411
<br>
<p>that ends up crashing when executing
<br>
<p>mpool_grdma-&gt;resources.deregister_mem
<br>
at ompi/mca/mpool/grdma/mpool_grdma_module.c:115
<br>
<p>where mpool_grdma-&gt;resources.deregister_mem *was* scif_dereg_mem
<br>
<p>i wrote *was* and not *is* because before that, ompi_mpi_finalize called
<br>
<p>mca_base_framework_close(&amp;ompi_bml_base_framework)
<br>
at ompi/runtime/ompi_mpi_finalize:408
<br>
<p>which indirectly unloaded the scif btl (and hence the scif_dereg_mem
<br>
function)
<br>
<p><p><p>POSSIBLE FIX :
<br>
<p>a naive approach is to call
<br>
mca_base_framework_close(&amp;ompi_mpool_base_framework)
<br>
*before*
<br>
mca_base_framework_close(&amp;ompi_bml_base_framework)
<br>
<p>even if i ran very few tests and did not experience any issue, i simply do
<br>
not know wether this is the right thing to do and what could be the
<br>
consequences of swapping these two calls.
<br>
<p>could someone please review and comment this ?
<br>
<p>Thanks in advance,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14936.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14962.php">George Bosilca: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="14962.php">George Bosilca: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
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
