<?
$subject_val = "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 13:36:46 2009" -->
<!-- isoreceived="20090929173646" -->
<!-- sent="Tue, 29 Sep 2009 20:36:36 +0300" -->
<!-- isosent="20090929173636" -->
<!-- name="Roman Cheplyaka" -->
<!-- email="roman.cheplyaka_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic" -->
<!-- id="6eda6fa0909291036q3593ce8m38e4355ba4815dc4_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AF6226AB-ABD3-42D5-A311-2CCB1063548E_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-09-29 13:36:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6915.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
<li><strong>In reply to:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6925.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6925.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your explanation, George. However:
<br>
suppose we have leave_pinned = FALSE. Then we go to
<br>
mca_mpool_rdma_find. There we try to find suitable registration in the
<br>
cache. Suppose we cannot (cache's empty). Then NULL registration is
<br>
returned, BTL is skipped and 0 is returned from mca_pml_ob1_rdma_btls.
<br>
This way RDMA never happends.
<br>
<p>(To make it clear: this is not some theoretical situation, this is
<br>
what I'm actually observing. OpenMPI 1.2.9) Can somebody explain
<br>
please?
<br>
<p>2009/9/29 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Roman,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before going into explaining the logic, let me state that the memory is
</span><br>
<span class="quotelev1">&gt; registered (if required/supported) by the BTLs. However, this is done only
</span><br>
<span class="quotelev1">&gt; at the moment when the memory segment is involved in any kind of
</span><br>
<span class="quotelev1">&gt; communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do not want to replicate this at the PML level, in order to make sure
</span><br>
<span class="quotelev1">&gt; that the amount of memory registered at any moment is minimal. In other
</span><br>
<span class="quotelev1">&gt; words, the PML leave the decision on when to register and when to unregister
</span><br>
<span class="quotelev1">&gt; to the BTLs. However, in order to speedup the code a little bit (and to keep
</span><br>
<span class="quotelev1">&gt; things tidy), the PML will help the BTLs to work around the memory
</span><br>
<span class="quotelev1">&gt; registration issue. And the code you pointed out is exactly the place where
</span><br>
<span class="quotelev1">&gt; we do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We need to register the memory if leave_pinned is TRUE, as registering will
</span><br>
<span class="quotelev1">&gt; leave a trace. If leave_pinned is FALSE then we only check if somehow this
</span><br>
<span class="quotelev1">&gt; memory is not already registered (by some BTL). In this case, there is no
</span><br>
<span class="quotelev1">&gt; need to create a registration in the PML (if required the BTL will do it
</span><br>
<span class="quotelev1">&gt; when needed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2009, at 13:44 , Roman Cheplyaka wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to dig into OpenMPI sources but have some problems. Can
</span><br>
<span class="quotelev2">&gt;&gt; anyone explain the logic of the following code from
</span><br>
<span class="quotelev2">&gt;&gt; mca/pml/ob1/pml_ob1_rdma.c please?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if(!mca_pml_ob1.leave_pinned) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; /* look through existing registrations */
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; btl_mpool-&gt;mpool_find(btl_mpool, base, size, &amp;reg);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; } else {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; /* register the memory */
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; btl_mpool-&gt;mpool_register(btl_mpool, base, size, 0, &amp;reg);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that we should register new memory if leave_pinned is
</span><br>
<span class="quotelev2">&gt;&gt; FALSE (i.e. no existing registrations avaliable) and search through
</span><br>
<span class="quotelev2">&gt;&gt; existing registrations otherwise, but the logic is inversed here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Roman I. Cheplyaka
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
Roman I. Cheplyaka
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6915.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
<li><strong>In reply to:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6925.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6925.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
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
