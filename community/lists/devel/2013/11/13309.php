<?
$subject_val = "[OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 21:42:11 2013" -->
<!-- isoreceived="20131124024211" -->
<!-- sent="Sat, 23 Nov 2013 21:42:04 -0500" -->
<!-- isosent="20131124024204" -->
<!-- name="J&#246;rg Bornschein" -->
<!-- email="jb_at_[hidden]" -->
<!-- subject="[OMPI devel] CUDA support not working?" -->
<!-- id="1EC54122-3098-4209-B9AF-9FF62BEC08C3_at_capsec.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] CUDA support not working?<br>
<strong>From:</strong> J&#246;rg Bornschein (<em>jb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 21:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13308.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13311.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13311.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, 
<br>
<p><p>I&#146;m trying to evaluate the CUDA support in OpenMPI and I&#146;m failing to get it to 
<br>
work for both 1.7.3 and openmpi-1.9a1r29736. I tried on Ubuntu 13.04 and on 
<br>
Fedora 14. I&#146;m typically compiling with  
<br>
<p>&nbsp;&nbsp;./configure &#151;with-cuda     
<br>
<p>but I tried combining it with various other options. OMPI builds fine, but when I try to run programs compiled against it I always get:
<br>
<p>/a.out: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
<p>That error even seems to make sense, because the code in ompi/mca/pml/ob1/ refers to common_cuda.[ch], but it does not 
<br>
seem to link against it's dynamic binary.
<br>
<p>Am I missing something?
<br>
<p><p>Thanks!
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;jb
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13308.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13311.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13311.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
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
