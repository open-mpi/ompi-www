<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 14:31:15 2006" -->
<!-- isoreceived="20060719183115" -->
<!-- sent="Wed, 19 Jul 2006 20:31:12 +0200" -->
<!-- isosent="20060719183112" -->
<!-- name="Frank Gruellich" -->
<!-- email="frank.gruellich_at_[hidden]" -->
<!-- subject="[OMPI users] SEGV in libopal during MPI_Alltoall" -->
<!-- id="44BE7A70.3060007_at_megware.com" -->
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
<strong>From:</strong> Frank Gruellich (<em>frank.gruellich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 14:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1658.php">shen T.T.: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm running OFED 1.0 with OpenMPI 1.1b1-1 compiled for Intel Compiler
<br>
9.1.  I get this error message during an MPI_Alltoall call:
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x1cd04fe0
<br>
[0] func:/usr/ofed/mpi/intel/openmpi-1.1b1-1/lib64/libopal.so.0 [0x2b56964acc75]
<br>
[1] func:/lib64/libpthread.so.0 [0x2b569739b140]
<br>
[2] func:/software/intel/fce/9.1.032/lib/libirc.so(__intel_new_memcpy+0x1540) [0x2b5697278cf0]
<br>
*** End of error message ***
<br>
<p>and have no idea about the problem.  It arises if I exceed a specific
<br>
number (10) of MPI nodes.  The error occures in this code:
<br>
<p>&nbsp;&nbsp;do i = 1,npuntos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;print *,'puntos',i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tam = 2**(i-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmin = 1e5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tavg = 0.0d0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do j = 1,rep
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;envio = 8.0d0*j
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time1 = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do k = 1,rep2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_alltoall(envio,tam,mpi_byte,recibe,tam,mpi_byte,mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time2 = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = (time2 - time1)/(rep2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (time &lt; tmin) tmin = time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tavg = tavg + time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m_tmin(i) = tmin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m_tavg(i) = tavg/rep
<br>
&nbsp;&nbsp;end do
<br>
<p>this code is said to be running on another system (running IBGD 1.8.x).
<br>
I already tested mpich_mlx_intel-0.9.7_mlx2.1.0-1, but get a similar
<br>
error message when using 13 nodes:
<br>
<p>forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line        Source
<br>
libpthread.so.0    00002B65DA39B140  Unknown               Unknown  Unknown
<br>
main.out           0000000000448BDB  Unknown               Unknown  Unknown
<br>
[9] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
[6] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
9 - MPI_ALLTOALL : Unknown error
<br>
[9] [] Aborting Program!
<br>
6 - MPI_ALLTOALL : Unknown error
<br>
[6] [] Aborting Program!
<br>
[2] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
[11] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
11 - MPI_ALLTOALL : Unknown error
<br>
[11] [] Aborting Program!
<br>
2 - MPI_ALLTOALL : Unknown error
<br>
[2] [] Aborting Program!
<br>
[10] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
10 - MPI_ALLTOALL : Unknown error
<br>
[10] [] Aborting Program!
<br>
[5] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
5 - MPI_ALLTOALL : Unknown error
<br>
[5] [] Aborting Program!
<br>
[3] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
[8] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
3 - MPI_ALLTOALL : Unknown error
<br>
[3] [] Aborting Program!
<br>
8 - MPI_ALLTOALL : Unknown error
<br>
[8] [] Aborting Program!
<br>
[4] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
4 - MPI_ALLTOALL : Unknown error
<br>
[4] [] Aborting Program!
<br>
[7] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
7 - MPI_ALLTOALL : Unknown error
<br>
[7] [] Aborting Program!
<br>
[0] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
0 - MPI_ALLTOALL : Unknown error
<br>
[0] [] Aborting Program!
<br>
[1] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
1 - MPI_ALLTOALL : Unknown error
<br>
[1] [] Aborting Program!
<br>
<p>I don't know wether this is a problem with MPI or Intel Compiler.
<br>
Please, can anybody point me in the right direction what I could have
<br>
done wrong?  This is my first post (so be gentle) and at this time I'm
<br>
not very used to the verbosity of this list, so if you need any further
<br>
informations do not hesitate do request them.
<br>
<p>Thanks in advance and kind regards,
<br>
<pre>
-- 
Frank Gruellich
HPC-Techniker
Tel.:   +49 3722 528 42
Fax:    +49 3722 528 15
E-Mail: frank.gruellich_at_[hidden]
MEGWARE Computer GmbH
Vertrieb und Service
Nordstrasse 19
09247 Chemnitz/Roehrsdorf
Germany
<a href="http://www.megware.com/">http://www.megware.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1653.php">Paul Heinzlreiter: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1658.php">shen T.T.: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
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
