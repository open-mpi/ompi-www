<?
$subject_val = "[OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 13:44:55 2009" -->
<!-- isoreceived="20090928174455" -->
<!-- sent="Mon, 28 Sep 2009 20:44:50 +0300" -->
<!-- isosent="20090928174450" -->
<!-- name="Roman Cheplyaka" -->
<!-- email="roman.cheplyaka_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic" -->
<!-- id="6eda6fa0909281044m73dd75e1tdc60f19ebae9c4b0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic<br>
<strong>From:</strong> Roman Cheplyaka (<em>roman.cheplyaka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 13:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6904.php">Jeff Squyres: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) butmissing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm trying to dig into OpenMPI sources but have some problems. Can
<br>
anyone explain the logic of the following code from
<br>
mca/pml/ob1/pml_ob1_rdma.c please?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!mca_pml_ob1.leave_pinned) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* look through existing registrations */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_mpool-&gt;mpool_find(btl_mpool, base, size, &amp;reg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* register the memory */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_mpool-&gt;mpool_register(btl_mpool, base, size, 0, &amp;reg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>It seems to me that we should register new memory if leave_pinned is
<br>
FALSE (i.e. no existing registrations avaliable) and search through
<br>
existing registrations otherwise, but the logic is inversed here.
<br>
<p><pre>
-- 
Roman I. Cheplyaka
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6904.php">Jeff Squyres: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) butmissing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
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
