<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 12:25:34 2010" -->
<!-- isoreceived="20100816162534" -->
<!-- sent="Mon, 16 Aug 2010 12:25:29 -0400" -->
<!-- isosent="20100816162529" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="1281975929.6786.1.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="20100816155018.AC7309B001B_at_asmx1.McGill.CA" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 12:25:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14041.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14039.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14042.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14042.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tried both--as you said, MPI_Abort doesn't drop a core file, but
<br>
does kill off the entire MPI job.   abort() drops core when I'm running
<br>
on 1 processor, but not in a multiprocessor run.  In addition, a node
<br>
calling abort() doesn't lead to the entire run being killed off.
<br>
<p>David
<br>
O
<br>
n Mon, 2010-08-16 at 08:51 -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 13, 2010, at 12:53 PM, David Ronis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using mpirun and the nodes are all on the same machin (a 8 cpu box
</span><br>
<span class="quotelev2">&gt; &gt; with an intel i7).  coresize is unlimited:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ulimit -a
</span><br>
<span class="quotelev2">&gt; &gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That looks good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In reviewing the email thread, it's not entirely clear: are you calling abort() or MPI_Abort()?  MPI_Abort() won't drop a core file.  abort() should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14041.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14039.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14042.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14042.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
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
