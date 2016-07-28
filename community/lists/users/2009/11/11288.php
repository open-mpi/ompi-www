<?
$subject_val = "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 07:45:31 2009" -->
<!-- isoreceived="20091127124531" -->
<!-- sent="Fri, 27 Nov 2009 13:45:19 +0100" -->
<!-- isosent="20091127124519" -->
<!-- name="Christoph Rackwitz" -->
<!-- email="rackwitz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking MPI_File_iwrite() does block?" -->
<!-- id="4B0FC9DF.3070705_at_rz.rwth-aachen.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.7.1258995605.24706.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblocking MPI_File_iwrite() does block?<br>
<strong>From:</strong> Christoph Rackwitz (<em>rackwitz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-27 07:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11287.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
<li><strong>Maybe in reply to:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob Latham wrote:
<br>
<span class="quotelev1">&gt; If the other processors need header data, perhaps rank 0 can broadcast
</span><br>
<span class="quotelev1">&gt; it to everyone else?
</span><br>
<p>That's what happens, when *reading* that file back to continue 
<br>
number-crunching. When writing, rank 0 is also the only one to write a 
<br>
header, and then each rank writes their parts of the matrices.
<br>
<p><span class="quotelev1">&gt; Is it OK to mention MPICH2 on this list?  I did prototype some MPI
</span><br>
<span class="quotelev1">&gt; extensions that allowed ROMIO to do true async I/O  (at least as far
</span><br>
<span class="quotelev1">&gt; as the underlying operating system supports it).   If you really need
</span><br>
<span class="quotelev1">&gt; to experiment with async I/O, I'd love to hear your experiences.
</span><br>
<p>I don't really need to, I think. I can't say I have had any experience 
<br>
either. It would have been a great demo of real-world implementation and 
<br>
performance, but the convenience of the APIs themselves is good enough. 
<br>
I'll try and see how much split-collective operations will bring, 
<br>
performance-wise.
<br>
<p>Thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11287.php">Vivek Satpute: "Re: [OMPI users] [mvapich-discuss] MPI-2 over ibverbs/rdma"</a>
<li><strong>Maybe in reply to:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
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
