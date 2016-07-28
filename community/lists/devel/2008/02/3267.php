<?
$subject_val = "[OMPI devel] RDMA pipeline";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 14:13:41 2008" -->
<!-- isoreceived="20080219191341" -->
<!-- sent="Tue, 19 Feb 2008 14:13:30 -0500" -->
<!-- isosent="20080219191330" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] RDMA pipeline" -->
<!-- id="B479EA4F-EC2C-419B-9012-70EF227E4012_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RDMA pipeline<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 14:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3266.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Few days ago during some testing I realize that the RDMA pipeline was  
<br>
disabled for MX and Elan (I didn't check for the others). A quick look  
<br>
into the source code, pinpointed the problem into the pml_ob1_rdma.c  
<br>
file, and it seems that the problem was introduced by commit 15247.  
<br>
The problem comes from the usage of the dummy registration, which is  
<br>
set for all non mpool friendly BTL. Later on this is checked against  
<br>
NULL (and of course it fails), which basically disable the RDMA  
<br>
pipeline.
<br>
<p>I'll enable the RDMA pipeline back in 2 days if I don't hear anything  
<br>
back. Attached is the patch that fix this problem.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>

<br><p>
<p><p><p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3267/pipeline_rdma.patch">pipeline_rdma.patch</a>
</ul>
<!-- attachment="pipeline_rdma.patch" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3267/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3266.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
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
