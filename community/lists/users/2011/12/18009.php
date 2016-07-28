<?
$subject_val = "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 11:49:13 2011" -->
<!-- isoreceived="20111219164913" -->
<!-- sent="Mon, 19 Dec 2011 16:49:08 +0000" -->
<!-- isosent="20111219164908" -->
<!-- name="Joao Amaral" -->
<!-- email="jsamaral_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;almost there&amp;quot; in getting MPI to run" -->
<!-- id="4EEF6B04.6010101_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E815B5F8-C55E-4287-ABD7-C0AF619AFBFD_at_cisco.com" -->
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
<strong>From:</strong> Joao Amaral (<em>jsamaral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 11:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>In reply to:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17990.php">Jeff Squyres: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your help. I though the number of process was set in the 
<br>
code, not in the command line.
<br>
<p>On 16-12-2011 14:06, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 15, 2011, at 9:09 AM, Joao Amaral wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strangely(?), in both my laptop and the cluster, the number of threads from the command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Comm_size ( MPI_COMM_WORLD, p, error )
</span><br>
<span class="quotelev1">&gt; Did you really mean &quot;threads&quot; there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is process-parallel, meaning that calling COMM_SIZE on a communicator will return the number of *processes* in that communicator, not threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the man page for mpirun(1) for how to launch multiple processes in a single MPI job.  Quick example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --hostfile your_host_file -np 8 your_mpi_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your_host_file: a file listing the host names to launch on
</span><br>
<span class="quotelev1">&gt; 8: number of copies of your_mpi_program to launch
</span><br>
<span class="quotelev1">&gt; your_mpi_program: your compiled executable MPI application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>In reply to:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17990.php">Jeff Squyres: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
