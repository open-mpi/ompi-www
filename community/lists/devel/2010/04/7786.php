<?
$subject_val = "[OMPI devel] sendrecv_replace: long time to allocate/free memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 08:50:30 2010" -->
<!-- isoreceived="20100422125030" -->
<!-- sent="Thu, 22 Apr 2010 14:50:24 +0200" -->
<!-- isosent="20100422125024" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="[OMPI devel] sendrecv_replace: long time to allocate/free memory" -->
<!-- id="4BD04610.3020407_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] sendrecv_replace: long time to allocate/free memory<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 08:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7787.php">Timur Magomedov: "[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="7785.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Reply:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Maybe reply:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Maybe reply:</strong> <a href="7853.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>The sendrecv_replace in Open MPI seems to allocate/free memory with 
<br>
MPI_Alloc_mem()/MPI_Free_mem()
<br>
<p>I measured the time to allocate/free a buffer of 1MB.
<br>
MPI_Alloc_mem/MPI_Free_mem take 350us while malloc/free only take 8us.
<br>
<p>malloc/free in ompi/mpi/c/sendrecv_replace.c was replaced by 
<br>
MPI_Alloc_mem/MPI_Free_mem with this commit :
<br>
<p>user:        twoodall
<br>
date:        Thu Sep 22 16:43:17 2005 +0000
<br>
summary:     use MPI_Alloc_mem/MPI_Free_mem for internally allocated 
<br>
buffers
<br>
<p>Is there a real reason to use these functions or can we move back to 
<br>
malloc/free ?
<br>
Is there a problem on my configuration explaining such slow performance 
<br>
with MPI_Alloc_mem ?
<br>
<p>Pascal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7787.php">Timur Magomedov: "[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="7785.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Reply:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Maybe reply:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Maybe reply:</strong> <a href="7853.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
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
