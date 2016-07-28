<?
$subject_val = "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 11:24:51 2009" -->
<!-- isoreceived="20091001152451" -->
<!-- sent="Thu, 1 Oct 2009 18:24:46 +0300" -->
<!-- isosent="20091001152446" -->
<!-- name="Roman Cheplyaka" -->
<!-- email="roman.cheplyaka_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic" -->
<!-- id="6eda6fa0910010824v4020421bi5bbc6166d59c2328_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6eda6fa0909291036q3593ce8m38e4355ba4815dc4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic<br>
<strong>From:</strong> Roman Cheplyaka (<em>roman.cheplyaka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 11:24:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6926.php">Eugene Loh: "[OMPI devel] trac 1.3.1 1.3.2 etc."</a>
<li><strong>Previous message:</strong> <a href="6924.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anyone care to explain?
<br>
<p>All I want is to see how non-eager RDMA can be used by ob1 if
<br>
leave_pinned is FALSE.
<br>
<p>2009/9/29 Roman Cheplyaka &lt;roman.cheplyaka_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Thanks for your explanation, George. However:
</span><br>
<span class="quotelev1">&gt; suppose we have leave_pinned = FALSE. Then we go to
</span><br>
<span class="quotelev1">&gt; mca_mpool_rdma_find. There we try to find suitable registration in the
</span><br>
<span class="quotelev1">&gt; cache. Suppose we cannot (cache's empty). Then NULL registration is
</span><br>
<span class="quotelev1">&gt; returned, BTL is skipped and 0 is returned from mca_pml_ob1_rdma_btls.
</span><br>
<span class="quotelev1">&gt; This way RDMA never happends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (To make it clear: this is not some theoretical situation, this is
</span><br>
<span class="quotelev1">&gt; what I'm actually observing. OpenMPI 1.2.9) Can somebody explain
</span><br>
<span class="quotelev1">&gt; please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/9/29 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Roman,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before going into explaining the logic, let me state that the memory is
</span><br>
<span class="quotelev2">&gt;&gt; registered (if required/supported) by the BTLs. However, this is done only
</span><br>
<span class="quotelev2">&gt;&gt; at the moment when the memory segment is involved in any kind of
</span><br>
<span class="quotelev2">&gt;&gt; communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We do not want to replicate this at the PML level, in order to make sure
</span><br>
<span class="quotelev2">&gt;&gt; that the amount of memory registered at any moment is minimal. In other
</span><br>
<span class="quotelev2">&gt;&gt; words, the PML leave the decision on when to register and when to unregister
</span><br>
<span class="quotelev2">&gt;&gt; to the BTLs. However, in order to speedup the code a little bit (and to keep
</span><br>
<span class="quotelev2">&gt;&gt; things tidy), the PML will help the BTLs to work around the memory
</span><br>
<span class="quotelev2">&gt;&gt; registration issue. And the code you pointed out is exactly the place where
</span><br>
<span class="quotelev2">&gt;&gt; we do it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We need to register the memory if leave_pinned is TRUE, as registering will
</span><br>
<span class="quotelev2">&gt;&gt; leave a trace. If leave_pinned is FALSE then we only check if somehow this
</span><br>
<span class="quotelev2">&gt;&gt; memory is not already registered (by some BTL). In this case, there is no
</span><br>
<span class="quotelev2">&gt;&gt; need to create a registration in the PML (if required the BTL will do it
</span><br>
<span class="quotelev2">&gt;&gt; when needed).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 28, 2009, at 13:44 , Roman Cheplyaka wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to dig into OpenMPI sources but have some problems. Can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyone explain the logic of the following code from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/pml/ob1/pml_ob1_rdma.c please?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if(!mca_pml_ob1.leave_pinned) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; /* look through existing registrations */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; btl_mpool-&gt;mpool_find(btl_mpool, base, size, &amp;reg);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; /* register the memory */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; btl_mpool-&gt;mpool_register(btl_mpool, base, size, 0, &amp;reg);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to me that we should register new memory if leave_pinned is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FALSE (i.e. no existing registrations avaliable) and search through
</span><br>
<span class="quotelev3">&gt;&gt;&gt; existing registrations otherwise, but the logic is inversed here.
</span><br>
<p><p><p><p><pre>
-- 
Roman I. Cheplyaka
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6926.php">Eugene Loh: "[OMPI devel] trac 1.3.1 1.3.2 etc."</a>
<li><strong>Previous message:</strong> <a href="6924.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
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
