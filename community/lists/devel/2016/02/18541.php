<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 20:19:00 2016" -->
<!-- isoreceived="20160203011900" -->
<!-- sent="Wed, 3 Feb 2016 10:18:48 +0900" -->
<!-- isosent="20160203011848" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?" -->
<!-- id="56B15578.80300_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20160203093012.5e5aeb0b7e5d1daec5857001_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 20:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18542.php">Cabral, Matias A: "[OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<li><strong>Previous message:</strong> <a href="18540.php">Kawashima, Takahiro: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="18540.php">Kawashima, Takahiro: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan and Kawashima-san,
<br>
<p>i just committed 
<br>
<a href="https://github.com/open-mpi/ompi/commit/6eac6a8b002d3992182c141334a7009ba5fa6176">https://github.com/open-mpi/ompi/commit/6eac6a8b002d3992182c141334a7009ba5fa6176</a>
<br>
<p>the datafile is still named with the CID, but it is now created
<br>
in ompi_process_info.proc_session_dir
<br>
instead of
<br>
ompi_process_info.job_session_dir
<br>
<p>the file is created on rank 0 of the given communicator, and file name 
<br>
is then broadcasted
<br>
as part of module-&gt;seg_ds to the other ranks.
<br>
<p>that was way more trivial than what i initially expected.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/3/2016 9:30 AM, Kawashima, Takahiro wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kawashima-san,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we always duplicate the communicator, and use the CID of the duplicated
</span><br>
<span class="quotelev2">&gt;&gt; communicator, so bottom line,
</span><br>
<span class="quotelev2">&gt;&gt; there cannot be more than one window per communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i will double check about using PID. if a broadcast is needed, i would
</span><br>
<span class="quotelev2">&gt;&gt; rather use the process name of rank 0 in order to avoid a broadcast.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/3/2016 8:40 AM, Kawashima, Takahiro wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is is sufficient?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Multiple windows can be created on a communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I think PID + CID is not sufficient.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Possible fixes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - The root process creates a filename with a random number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and broadcast it in the communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Use per-communicator counter and use it in the filename.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI development team,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fujitsu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmm, I think you are correct. There may be instances where two different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local processes may use the same CID for different communicators. It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be sufficient to add the PID of the current process to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; filename to ensure it is unique.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Feb 02, 2016 at 09:33:29PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Nathan,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      the sm osc component uses communicator CID to name the file that will be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      used to create shared memory segments.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      if I understand and correctly, two different communicators coming from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      same MPI_Comm_split might share the same CID, so CID (alone) cannot be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      used to generate a unique per communicator file name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Makes sense ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      From: Peter Wind &lt;peter.wind_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Date: Tuesday, February 2, 2016
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Subject: [OMPI users] shared memory under fortran, bug?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Enclosed is a short (&lt; 100 lines) fortran code example that uses shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      It seems to me it behaves wrongly if openmpi is used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Compiled with SGI/mpt , it gives the right result.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      To fail, the code must be run on a single node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      It creates two groups of 2 processes each. Within each group memory is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      shared.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      The error is that the two groups get the same memory allocated, but they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      should not.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and gfortran, intel 13.0, intel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      14.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      all fail.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      The call:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      comm_group, cp1, win, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Should allocate memory only within the group. But when the other group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      allocates memory, the pointers from the two groups point to the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      address in memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Could you please confirm that this is the wrong behaviour?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Peter Wind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program shmem_mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      !
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      ! in this example two groups are created, within each group memory is shared.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      ! Still the other group get allocated the same adress space, which it shouldn't.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      !
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      ! Run with 4 processes, mpirun -np 4 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      use mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      use, intrinsic :: iso_c_binding, only : c_ptr, c_f_pointer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      implicit none
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !   include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer, parameter :: nsize = 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer, pointer   :: array(:)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer            :: num_procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer            :: ierr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer            :: irank, irank_group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer            :: win
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer            :: comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer            :: disp_unit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      type(c_ptr)        :: cp1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      type(c_ptr)        :: cp2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer            :: comm_group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer(MPI_ADDRESS_KIND) :: win_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      integer(MPI_ADDRESS_KIND) :: segment_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Comm_size(comm, num_procs, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Comm_rank(comm, irank, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      disp_unit = sizeof(1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_COMM_SPLIT(comm, irank*2/num_procs, irank, comm_group, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Comm_rank(comm_group, irank_group, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !   print *, 'irank=', irank, ' group rank=', irank_group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      if (irank_group == 0) then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         win_size = nsize*disp_unit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         win_size = 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL, comm_group, cp1, win, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Win_fence(0, win, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Win_shared_query(win, 0, segment_size, disp_unit, cp2, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Win_fence(0, win, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      CALL MPI_BARRIER(comm, ierr)! allocations finished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !   print *, 'irank=', irank, ' size ', segment_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call c_f_pointer(cp2, array, [nsize])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      array(1)=0;array(2)=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      CALL MPI_BARRIER(comm, ierr)!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 77 format(4(A,I3))
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      if(irank&lt;num_procs/2)then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         if (irank_group == 0)array(1)=11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         CALL MPI_BARRIER(comm, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         print 77, 'Group 0, rank', irank, ':  array ', array(1), ' ',array(2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         CALL MPI_BARRIER(comm, ierr)!Group 1 not yet start writing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         CALL MPI_BARRIER(comm, ierr)!Group 1 finished writing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         print 77, 'Group 0, rank', irank, ':  array ', array(1),' ',array(2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         if(array(1)==11.and.array(2)==0)then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            print *,irank,' correct result'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            print *,irank,' wrong result'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         CALL MPI_BARRIER(comm, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         CALL MPI_BARRIER(comm, ierr)!Group 0 finished writing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         print 77, 'Group 1, rank', irank, ':  array ', array(1),' ',array(2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         if (irank_group == 0)array(2)=22
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         CALL MPI_BARRIER(comm, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         print 77, 'Group 1, rank', irank, ':  array ', array(1),' ',array(2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         if(array(1)==0.and.array(2)==22)then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            print *,irank,' correct result'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            print *,irank,' wrong result'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; end program
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18540.php">http://www.open-mpi.org/community/lists/devel/2016/02/18540.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18542.php">Cabral, Matias A: "[OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<li><strong>Previous message:</strong> <a href="18540.php">Kawashima, Takahiro: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="18540.php">Kawashima, Takahiro: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
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
