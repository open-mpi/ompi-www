<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 20:57:04 2006" -->
<!-- isoreceived="20060720005704" -->
<!-- sent="Thu, 20 Jul 2006 02:58:43 +0200 (Romance Daylight Time)" -->
<!-- isosent="20060720005843" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV in libopal during MPI_Alltoall" -->
<!-- id="Pine.WNT.4.64.0607200251160.1980_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44BE7A70.3060007_at_megware.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 20:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Previous message:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Frank,
<br>
<p>On the all-to-all collective the send and receive buffers has to be able 
<br>
to contain all the information you try to send. On this particular case, 
<br>
as you initialize the envio variable to a double I suppose it is defined 
<br>
as a double. If it's the case then the error is that the send operation 
<br>
will send more data than the amount available on the envio variable.
<br>
<p>If you want to be able to do correctly the all-to-all in your example, 
<br>
make sure the envio variable has a size at least equal to:
<br>
tam * sizeof(byte) * NPROCS, where NPROCS is the number of procs available 
<br>
on the mpi_comm_world communicator.
<br>
<p>Moreover, the error messages seems to indicate that some memory 
<br>
registration failed. This can effectively be the send buffer.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p>On Wed, 19 Jul 2006, Frank Gruellich wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running OFED 1.0 with OpenMPI 1.1b1-1 compiled for Intel Compiler
</span><br>
<span class="quotelev1">&gt; 9.1.  I get this error message during an MPI_Alltoall call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x1cd04fe0
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/ofed/mpi/intel/openmpi-1.1b1-1/lib64/libopal.so.0 [0x2b56964acc75]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/libpthread.so.0 [0x2b569739b140]
</span><br>
<span class="quotelev1">&gt; [2] func:/software/intel/fce/9.1.032/lib/libirc.so(__intel_new_memcpy+0x1540) [0x2b5697278cf0]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and have no idea about the problem.  It arises if I exceed a specific
</span><br>
<span class="quotelev1">&gt; number (10) of MPI nodes.  The error occures in this code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  do i = 1,npuntos
</span><br>
<span class="quotelev1">&gt;    print *,'puntos',i
</span><br>
<span class="quotelev1">&gt;    tam = 2**(i-1)
</span><br>
<span class="quotelev1">&gt;    tmin = 1e5
</span><br>
<span class="quotelev1">&gt;    tavg = 0.0d0
</span><br>
<span class="quotelev1">&gt;    do j = 1,rep
</span><br>
<span class="quotelev1">&gt;      envio = 8.0d0*j
</span><br>
<span class="quotelev1">&gt;      call mpi_barrier(mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;      time1 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;      do k = 1,rep2
</span><br>
<span class="quotelev1">&gt;        call mpi_alltoall(envio,tam,mpi_byte,recibe,tam,mpi_byte,mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;      end do
</span><br>
<span class="quotelev1">&gt;      call mpi_barrier(mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;      time2 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;      time = (time2 - time1)/(rep2)
</span><br>
<span class="quotelev1">&gt;      if (time &lt; tmin) tmin = time
</span><br>
<span class="quotelev1">&gt;      tavg = tavg + time
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
<span class="quotelev1">&gt;    m_tmin(i) = tmin
</span><br>
<span class="quotelev1">&gt;    m_tavg(i) = tavg/rep
</span><br>
<span class="quotelev1">&gt;  end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this code is said to be running on another system (running IBGD 1.8.x).
</span><br>
<span class="quotelev1">&gt; I already tested mpich_mlx_intel-0.9.7_mlx2.1.0-1, but get a similar
</span><br>
<span class="quotelev1">&gt; error message when using 13 nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev1">&gt; libpthread.so.0    00002B65DA39B140  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; main.out           0000000000448BDB  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [9] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; [6] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 9 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [9] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; 6 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [6] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [2] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; [11] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 11 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [11] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; 2 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [2] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [10] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 10 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [10] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [5] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 5 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [5] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [3] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; [8] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 3 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [3] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; 8 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [8] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [4] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 4 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [4] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [7] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 7 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [7] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [0] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 0 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [0] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt; [1] Registration failed, file : intra_rdma_alltoall.c, line : 163
</span><br>
<span class="quotelev1">&gt; 1 - MPI_ALLTOALL : Unknown error
</span><br>
<span class="quotelev1">&gt; [1] [] Aborting Program!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know wether this is a problem with MPI or Intel Compiler.
</span><br>
<span class="quotelev1">&gt; Please, can anybody point me in the right direction what I could have
</span><br>
<span class="quotelev1">&gt; done wrong?  This is my first post (so be gentle) and at this time I'm
</span><br>
<span class="quotelev1">&gt; not very used to the verbosity of this list, so if you need any further
</span><br>
<span class="quotelev1">&gt; informations do not hesitate do request them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance and kind regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Previous message:</strong> <a href="1655.php">Graham E Fagg: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
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
