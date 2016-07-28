<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 09:56:14 2013" -->
<!-- isoreceived="20130308145614" -->
<!-- sent="Fri, 8 Mar 2013 14:56:08 +0000" -->
<!-- isosent="20130308145608" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F98068_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B0A75499-BE1B-45C7-8AF3-6E95A6BB2132_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-08 09:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2013, at 9:39 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a more advanced use case for you. Based on the MPI standard, MPI_Finalize can be called while the user still has non-complete requests returned by any of the non-blocking calls (there are some drawbacks of course, but this is not specifically prohibited).
</span><br>
<p>Actually, it is prohibited by MPI-3 p359:41-48:
<br>
<p>Before an MPI process invokes MPI_FINALIZE, the process must perform all MPI calls needed to complete its involvement in MPI communications: It must locally complete all MPI operations that it initiated and must execute matching calls needed to complete MPI communications initiated by other processes. For example, if the process executed a non- blocking send, it must eventually call MPI_WAIT, MPI_TEST, MPI_REQUEST_FREE, or any derived function; if the process is the target of a send, then it must post the matching receive; if it is part of a group executing a collective operation, then it must have completed its participation in the operation.
<br>
<p><span class="quotelev1">&gt; Thus, these requests will not have a ref count to 1, so they will not be able to be destructed. This is exactly what our code is doing today:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pml_base_close.c:58:    OBJ_DESTRUCT(&amp;mca_pml_base_send_requests);
</span><br>
<span class="quotelev1">&gt; pml_base_close.c:59:    OBJ_DESTRUCT(&amp;mca_pml_base_recv_requests);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then ompi_freelist.c:86.
</span><br>
<p><p>If the app REQUEST_FREE'd a nonblocking send/receive, don't we block in ompi_mpi_finalize() before the call to pml_base_close(), such that the PMLs will be drained before we get to destroying the PMLs?
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
<li><strong>Next message:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12198.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
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
