<?
$subject_val = "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 09:06:45 2011" -->
<!-- isoreceived="20111216140645" -->
<!-- sent="Fri, 16 Dec 2011 09:06:39 -0500" -->
<!-- isosent="20111216140639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;almost there&amp;quot; in getting MPI to run" -->
<!-- id="E815B5F8-C55E-4287-ABD7-C0AF619AFBFD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE9FFAE.5060708_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;almost there&quot; in getting MPI to run<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 09:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17992.php">Jeff Squyres: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="17990.php">Jeff Squyres: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18009.php">Joao Amaral: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="18009.php">Joao Amaral: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2011, at 9:09 AM, Joao Amaral wrote:
<br>
<p><span class="quotelev1">&gt; Strangely(?), in both my laptop and the cluster, the number of threads from the command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_size ( MPI_COMM_WORLD, p, error )
</span><br>
<p>Did you really mean &quot;threads&quot; there?
<br>
<p>Open MPI is process-parallel, meaning that calling COMM_SIZE on a communicator will return the number of *processes* in that communicator, not threads.
<br>
<p>See the man page for mpirun(1) for how to launch multiple processes in a single MPI job.  Quick example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --hostfile your_host_file -np 8 your_mpi_program
<br>
<p>where:
<br>
<p>your_host_file: a file listing the host names to launch on
<br>
8: number of copies of your_mpi_program to launch
<br>
your_mpi_program: your compiled executable MPI application
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
<li><strong>Next message:</strong> <a href="17992.php">Jeff Squyres: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="17990.php">Jeff Squyres: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18009.php">Joao Amaral: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="18009.php">Joao Amaral: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
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
