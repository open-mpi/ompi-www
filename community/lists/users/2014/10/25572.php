<?
$subject_val = "[OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 11:46:13 2014" -->
<!-- isoreceived="20141024154613" -->
<!-- sent="Fri, 24 Oct 2014 15:46:09 +0000" -->
<!-- isosent="20141024154609" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code" -->
<!-- id="8337B490252F0944BF1D38541059627E17362373_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug%20in%20OpenMPI-1.8.3:%20storage%20limition%20in%20shared%20memory%20allocation%20(MPI_WIN_ALLOCATE_SHARED)%20in%20Ftn-code"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-10-24 11:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25573.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25571.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Reply:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers of OPENMPI,
<br>
<p>I am running a small downsized Fortran-testprogram for shared memory allocation (using MPI_WIN_ALLOCATE_SHARED and  MPI_WIN_SHARED_QUERY) )
<br>
on only 1 node   of 2 different Linux-clusters with OPENMPI-1.8.3 and Intel-14.0.4 /Intel-13.0.1, respectively.
<br>
<p>The program simply allocates a sequence of shared data windows, each consisting of 1 integer*4-array.
<br>
None of the windows is freed, so the amount of allocated data  in shared windows raises during the course of the execution.
<br>
<p>That worked well on the 1st cluster (Laki, having 8 procs per node))  when allocating even 1000 shared windows each having 50000 integer*4 array elements,
<br>
i.e. a total of  200 MBytes.
<br>
On the 2nd cluster (Cluster5, having 24 procs per node) it also worked on the login node, but it did NOT work on a compute node.
<br>
In that error case, there occurs something like an internal storage limit of ~ 140 MB for the total storage allocated in all shared windows.
<br>
When that limit is reached, all later shared memory allocations fail (but silently).
<br>
So the first attempt to use such a bad shared data window results in a bus error due to the bad storage address encountered.
<br>
<p>That strange behavior could be observed in the small testprogram but also with my large Fortran CFD-code.
<br>
If the error occurs, then it occurs with both codes, and both at a storage limit of  ~140 MB.
<br>
I found that this storage limit depends only weakly on  the number of processes (for np=2,4,8,16,24  it is: 144.4 , 144.0, 141.0, 137.0, 132.2 MB)
<br>
<p>Note that the shared memory storage available on both clusters was very large (many GB of free memory).
<br>
<p>Here is the error message when running with np=2 and an  array dimension of idim_1=50000  for the integer*4 array allocated per shared window
<br>
on the compute node of Cluster5:
<br>
In that case, the error occurred at the 723-th shared window, which is the 1st badly allocated window in that case:
<br>
(722 successfully allocated shared windows * 50000 array elements * 4 Bytes/el. = 144.4 MB)
<br>
<p><p>[1,0]&lt;stdout&gt;: ========on nodemaster: iwin=         722 :
<br>
[1,0]&lt;stdout&gt;:  total storage [MByte] alloc. in shared windows so far:   144.400000000000
<br>
[1,0]&lt;stdout&gt;: =========== allocation of shared window no. iwin=         723
<br>
[1,0]&lt;stdout&gt;:  starting now with idim_1=       50000
<br>
[1,0]&lt;stdout&gt;: ========on nodemaster for iwin=         723 : before writing on shared mem
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] *** Process received signal ***
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] Signal: Bus error (7)
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] Signal code: Non-existant physical address (2)
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] Failing at address: 0x7fffe08da000
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 0] [1,0]&lt;stderr&gt;:/lib64/libpthread.so.0(+0xf800)[0x7ffff6d67800]
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 1] ./a.out[0x408a8b]
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 2] ./a.out[0x40800c]
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 3] [1,0]&lt;stderr&gt;:/lib64/libc.so.6(__libc_start_main+0xe6)[0x7ffff69fec36]
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 4] [1,0]&lt;stderr&gt;:./a.out[0x407f09]
<br>
[1,0]&lt;stderr&gt;:[r5i5n13:12597] *** End of error message ***
<br>
[1,1]&lt;stderr&gt;:forrtl: error (78): process killed (SIGTERM)
<br>
[1,1]&lt;stderr&gt;:Image              PC                Routine            Line        Source
<br>
[1,1]&lt;stderr&gt;:libopen-pal.so.6   00007FFFF4B74580  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF7267F3E  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF733B555  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF727DFFD  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:libmpi_mpifh.so.2  00007FFFF779BA03  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:a.out              0000000000408D15  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:a.out              000000000040800C  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:libc.so.6          00007FFFF69FEC36  Unknown               Unknown  Unknown
<br>
[1,1]&lt;stderr&gt;:a.out              0000000000407F09  Unknown               Unknown  Unknown
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 12597 on node r5i5n13 exited on signal 7 (Bus error).
<br>
--------------------------------------------------------------------------
<br>
<p><p>The small Ftn-testprogram was built by
<br>
&nbsp;&nbsp;mpif90 sharedmemtest.f90
<br>
&nbsp;&nbsp;mpiexec -np 2 -bind-to core -tag-output ./a.out
<br>
<p>Why does it work on the Laki  (both on login-node and on a compute node)  as well as on the login-node of Cluster5,
<br>
but fails on an compute node of Cluster5?
<br>
<p>Greetings
<br>
&nbsp;&nbsp;&nbsp;Michael Rachner
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25573.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25571.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Reply:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
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
