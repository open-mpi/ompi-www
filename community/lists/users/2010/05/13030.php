<?
$subject_val = "Re: [OMPI users] getc in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 13:51:26 2010" -->
<!-- isoreceived="20100512175126" -->
<!-- sent="Wed, 12 May 2010 13:51:16 -0400" -->
<!-- isosent="20100512175116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getc in openmpi" -->
<!-- id="8FCBF366-6824-4699-8675-F18D230A50A9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTiks901QyQctDkOXfEsEQgNMNstJwX_vP8hzrRlU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] getc in openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 13:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13029.php">Hanjun Kim: "[OMPI users] getc in openmpi"</a>
<li><strong>In reply to:</strong> <a href="13029.php">Hanjun Kim: "[OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2010, at 1:48 PM, Hanjun Kim wrote:
<br>
<p><span class="quotelev1">&gt; I am working on parallelizing my sequential program using OpenMPI.
</span><br>
<span class="quotelev1">&gt; Although I got performance speedup using many threads, there was
</span><br>
<span class="quotelev1">&gt; slowdown on a small number of threads like 4 threads.
</span><br>
<span class="quotelev1">&gt; I found that it is because getc worked much slower than sequential
</span><br>
<span class="quotelev1">&gt; version. Does OpenMPI override or wrap getc function?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; To find the cause, I added mpi.h to the program and compiled it with
</span><br>
<span class="quotelev1">&gt; mpicc. There are two versions on the program;
</span><br>
<span class="quotelev1">&gt; 1. The sequential program without MPI_Init_thread and MPI_Finalize.
</span><br>
<span class="quotelev1">&gt; 2. The sequential program with MPI_Init_thread and MPI_Finalize.
</span><br>
<span class="quotelev1">&gt; Version 2 was 4x slower than version 1. I think it is because of slow
</span><br>
<span class="quotelev1">&gt; getc. Does MPI_Init_thread have some relation with the getc function
</span><br>
<span class="quotelev1">&gt; call?
</span><br>
<p>Not that I'm aware of.  Perhaps something about linking in threading libraries changes getc...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13029.php">Hanjun Kim: "[OMPI users] getc in openmpi"</a>
<li><strong>In reply to:</strong> <a href="13029.php">Hanjun Kim: "[OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
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
