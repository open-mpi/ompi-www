<?
$subject_val = "Re: [OMPI users] getc in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 10:08:40 2010" -->
<!-- isoreceived="20100515140840" -->
<!-- sent="Sat, 15 May 2010 08:08:29 -0600" -->
<!-- isosent="20100515140829" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getc in openmpi" -->
<!-- id="4691AD00-E180-40EA-B10A-7EAF51C5A6C9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinah2N5etk46z1_YLjln3nObGZ8l-aP0485gFq6_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 10:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13054.php">Olivier Riff: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Previous message:</strong> <a href="13052.php">Jeff Squyres: "Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2010, at 1:01 PM, Fernando Lemos wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, May 12, 2010 at 2:51 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 12, 2010, at 1:48 PM, Hanjun Kim wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am working on parallelizing my sequential program using OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although I got performance speedup using many threads, there was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slowdown on a small number of threads like 4 threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found that it is because getc worked much slower than sequential
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version. Does OpenMPI override or wrap getc function?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please correct me if I'm wrong, but I believe OpenMPI sends
</span><br>
<span class="quotelev1">&gt; stdin/stdout from the other ranks back to rank 0 so that the output is
</span><br>
<span class="quotelev1">&gt; displayed as the stdin of mpirun and the other way around with
</span><br>
<span class="quotelev1">&gt; stdout/stderr. Otherwise it wouldn't be possible to even see the
</span><br>
<span class="quotelev1">&gt; output from the other ranks. I guess that could make things slower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH-2  had a command line option that told mpiexec who would receive
</span><br>
<span class="quotelev1">&gt; stdin (all processes or only some of them) so that you could do things
</span><br>
<span class="quotelev1">&gt; like mpiexec &lt;bigfile and not worry (too much) about the overhead of
</span><br>
<span class="quotelev1">&gt; distributing the contents of bigfile across the network.
</span><br>
<p>FWIW: OMPI has the same capability via cmd line args as shown by &quot;mpirun -h&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;-stdin|--stdin &lt;arg0&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specify procs to receive stdin [rank, all, none]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(default: 0, indicating rank 0)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13054.php">Olivier Riff: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Previous message:</strong> <a href="13052.php">Jeff Squyres: "Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
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
