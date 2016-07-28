<?
$subject_val = "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  1 16:20:23 2011" -->
<!-- isoreceived="20110401202023" -->
<!-- sent="Fri, 1 Apr 2011 15:20:17 -0500" -->
<!-- isosent="20110401202017" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="20110401202017.GP21829_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8CDBDDCBDFF19AD-1BC8-95BE_at_web-mmc-m05.sysops.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-01 16:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16068.php">Ahsan Ali: "[OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/16065.php">fah10_at_[hidden]: "[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 31, 2011 at 01:03:50PM -0400, fah10_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I've compiled Open-MPI 1.4.3 with --enable-mpi-threads and I'm always
</span><br>
<span class="quotelev1">&gt; getting a deadlock when calling mpi_file_set_view. 
</span><br>
<span class="quotelev1">&gt; The Fortran program which calls the routines hasn't opened any extra
</span><br>
<span class="quotelev1">&gt; thread when the error occurs.
</span><br>
<span class="quotelev1">&gt; The program works fine when I use (mpi_init instead of mpi_init_thread
</span><br>
<span class="quotelev1">&gt; (MPI_THREAD_SERIALIZED)) or (start the program with only 1 mpi process)
</span><br>
<span class="quotelev1">&gt; On abort, I'm getting the backtrace attached below.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; Does anyone know how to fix this?
</span><br>
<p>Even inside MPICH2, I have given little attention to threadsafety and
<br>
the MPI-IO routines.  In MPICH2, each MPI_File* function grabs the big
<br>
critical section lock -- not pretty but it gets the job done.  
<br>
<p>When ported to OpenMPI, I don't know how the locking works.
<br>
Furthermore, the MPI-IO library inside OpenMPI-1.4.3 is pretty old.  I
<br>
wonder if the locking we added over the years will help?  Can you try
<br>
openmpi-1.5.3 and report what happens?
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16068.php">Ahsan Ali: "[OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/16065.php">fah10_at_[hidden]: "[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
