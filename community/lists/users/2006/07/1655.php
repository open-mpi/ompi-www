<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 15:03:48 2006" -->
<!-- isoreceived="20060719190348" -->
<!-- sent="Wed, 19 Jul 2006 15:03:40 -0400 (EDT)" -->
<!-- isosent="20060719190340" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV in libopal during MPI_Alltoall" -->
<!-- id="Pine.GSO.4.62.0607191457280.23750_at_enterprise" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 15:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1661.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1661.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Frank
<br>
&nbsp;&nbsp;I am not sure which alltoall your using in 1.1 so can you please run 
<br>
the ompi_info utility which is normally built and put into the same 
<br>
directory as mpirun?
<br>
<p>i.e. host% ompi_info
<br>
<p>This provides lots of really usefull info on everything before we dig 
<br>
deeper into your issue
<br>
<p><p>and then more specifically run
<br>
host%  ompi_info --param coll all
<br>
<p>thanks
<br>
Graham
<br>
<p><p><p>On Wed, 19 Jul 2006, Frank Gruellich wrote:
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Frank Gruellich
</span><br>
<span class="quotelev1">&gt; HPC-Techniker
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.:   +49 3722 528 42
</span><br>
<span class="quotelev1">&gt; Fax:    +49 3722 528 15
</span><br>
<span class="quotelev1">&gt; E-Mail: frank.gruellich_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MEGWARE Computer GmbH
</span><br>
<span class="quotelev1">&gt; Vertrieb und Service
</span><br>
<span class="quotelev1">&gt; Nordstrasse 19
</span><br>
<span class="quotelev1">&gt; 09247 Chemnitz/Roehrsdorf
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; <a href="http://www.megware.com/">http://www.megware.com/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1661.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1661.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
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
