<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 24 23:14:33 2006" -->
<!-- isoreceived="20060425031433" -->
<!-- sent="Mon, 24 Apr 2006 23:14:24 -0400" -->
<!-- isosent="20060425031424" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGBUS on sparc / 64bit" -->
<!-- id="549151A2-598B-441B-BA38-3AF4F1A3EE7E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44488928.2000600_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-24 23:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1130.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Checking the cluster status with MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>In reply to:</strong> <a href="1118.php">Alexander Spiegel: "[OMPI users] SIGBUS on sparc / 64bit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 21, 2006, at 3:26 AM, Alexander Spiegel wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to compile OpenMPI 1.0.2 on a Sparc/Solaris machine
</span><br>
<span class="quotelev1">&gt; with Sun Studio 11 compilers in 64 bit addressing mode.
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; t_at_1 (l_at_1) signal BUS (invalid address alignment) in
</span><br>
<span class="quotelev1">&gt; mca_allocator_bucket_alloc_align at line 206 in file
</span><br>
<span class="quotelev1">&gt; &quot;allocator_bucket_alloc.c&quot;
</span><br>
<span class="quotelev1">&gt;    206       chunk = segment_header-&gt;first_chunk = first_chunk;
</span><br>
<p>Thanks for the bug report.  I committed a fix to our development  
<br>
trunk and it will be back-ported to our release branches (both 1.0  
<br>
and 1.1 series of releases).  I believe the maintainer of the 1.0  
<br>
branch moved the change over to the branch already, so it should show  
<br>
up in the nightly tarballs starting tomorrow (Tuesday), and are  
<br>
available here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a>
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1130.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Checking the cluster status with MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>In reply to:</strong> <a href="1118.php">Alexander Spiegel: "[OMPI users] SIGBUS on sparc / 64bit"</a>
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
