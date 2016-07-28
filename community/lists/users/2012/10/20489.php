<?
$subject_val = "[OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 12:45:23 2012" -->
<!-- isoreceived="20121015164523" -->
<!-- sent="Mon, 15 Oct 2012 12:44:58 -0400" -->
<!-- isosent="20121015164458" -->
<!-- name="Roland Schulz" -->
<!-- email="roland_at_[hidden]" -->
<!-- subject="[OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1" -->
<!-- id="CAO2TwbmNh+yOY=f65ee9gEH-zKTtGm6560Gs-BxkCS-BB+tL=w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1<br>
<strong>From:</strong> Roland Schulz (<em>roland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 12:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20490.php">tmishima_at_[hidden]: "Re: [OMPI users] -cpus-per-proc in openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>my application crashes with
<br>
/shared/openmpi-1.6.1/intel/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3)[0x7fbef40e1413]
<br>
/shared/openmpi-1.6.1/intel/lib/libmpi.so.1(opal_memory_ptmalloc2_int_memalign+0x8b)[0x7fbef40e494b]
<br>
/shared/openmpi-1.6.1/intel/lib/libmpi.so.1(opal_memory_ptmalloc2_memalign+0x70)[0x7fbef40e4500]
<br>
/shared/openmpi-1.6.1/intel/lib/libmpi.so.1(+0x252486)[0x7fbef40e4486]
<br>
/lib64/libc.so.6(posix_memalign+0x5e)[0x348547a18e]
<br>
<p>when linked against OpenMPI 1.6.1 compiled with  ICC 12.1 (20110811).
<br>
<p>The problem disappears if I either use &quot;--mca mpi_leave_pinned 0&quot; or
<br>
if I link against OpenMPI 1.6.1 compiled with gcc or ICC 13.0. It
<br>
doesn't matter whether I compile with or without
<br>
--enable-mpi-thread-multiple.
<br>
<p>The allocation which causes the problem is inside an OpenMP region.
<br>
The problem also disappears if I run with 1 OpenMP thread only.
<br>
<p>All MPI communication is from OpenMP master (MPI_THREAD_FUNNELED).
<br>
<p>Roland
<br>
<p><pre>
-- 
ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
865-241-1537, ORNL PO BOX 2008 MS6309
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20490.php">tmishima_at_[hidden]: "Re: [OMPI users] -cpus-per-proc in openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
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
