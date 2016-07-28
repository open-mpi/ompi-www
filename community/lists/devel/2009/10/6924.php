<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 06:33:34 2009" -->
<!-- isoreceived="20091001103334" -->
<!-- sent="Thu, 1 Oct 2009 06:33:29 -0400" -->
<!-- isosent="20091001103329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="10823104-50B0-4EC8-B36C-8F421CBDEF07_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FE6286D8-28D9-4960-95A5-10A5B941AE6F_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 06:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6925.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6923.php">Lenny Verkhovsky: "Re: [OMPI devel] bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2009, at 7:46 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In other words, we can safely remove the _DECLSPEC for all debugging
</span><br>
<span class="quotelev1">&gt; symbols and today this will work. However, if we want to avoid having
</span><br>
<span class="quotelev1">&gt; issues with them in the future (when the compiler and linked will be
</span><br>
<span class="quotelev1">&gt; much much much more smarter) I think it's wiser to keep them there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Why?  MPIR_Breakpoint, by not being static, *must* be visible outside  
<br>
of that .o file so that it can be used elsewhere in libmpi (and  
<br>
therefore that symbol cannot be optimized out).  DECLSPEC just means  
<br>
that it's *also* visible *outside* of libmpi.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6925.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6923.php">Lenny Verkhovsky: "Re: [OMPI devel] bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
