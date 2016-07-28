<?
$subject_val = "Re: [OMPI users] bug in CUDA support for dual-processor systems?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 13:39:09 2012" -->
<!-- isoreceived="20120731173909" -->
<!-- sent="Tue, 31 Jul 2012 10:39:02 -0700" -->
<!-- isosent="20120731173902" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in CUDA support for dual-processor systems?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8ABE6059_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="501809F6.1040909_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in CUDA support for dual-processor systems?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 13:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19880.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19878.php">Zbigniew Koza: "[OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>In reply to:</strong> <a href="19878.php">Zbigniew Koza: "[OMPI users] bug in CUDA support for dual-processor systems?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19880.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Reply:</strong> <a href="19880.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The current implementation does assume that the GPUs are on the same IOH and therefore can use the IPC features of the CUDA library for communication.
<br>
One of the initial motivations for this was that to be able to detect whether GPUs can talk to one another, the CUDA library has to be initialized and the GPUs have to be selected by each rank.  It is at that point that we can determine whether the IPC will work between the GPUs.    However, this means that the GPUs need to be selected by each rank prior to the call to MPI_Init as that is where we determine whether IPC is possible, and we were trying to avoid that requirement.
<br>
<p>I will submit a ticket against this and see if we can improve this.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Zbigniew Koza
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, July 31, 2012 12:38 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] bug in CUDA support for dual-processor systems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I wrote a simple program to see if OpenMPI can really handle cuda pointers as
</span><br>
<span class="quotelev1">&gt;promised in the FAQ and how efficiently.
</span><br>
<span class="quotelev1">&gt;The program (see below) breaks if MPI communication is to be performed
</span><br>
<span class="quotelev1">&gt;between two devices that are on the same node but under different IOHs in a
</span><br>
<span class="quotelev1">&gt;dual-processor Intel machine.
</span><br>
<span class="quotelev1">&gt;Note that  cudaMemCpy works for such devices, although not as efficiently as
</span><br>
<span class="quotelev1">&gt;for the devices on the same IOH and GPUDirect enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here's the output from my program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;===============================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun -n 6 ./a.out
</span><br>
<span class="quotelev1">&gt;Init
</span><br>
<span class="quotelev1">&gt;Init
</span><br>
<span class="quotelev1">&gt;Init
</span><br>
<span class="quotelev1">&gt;Init
</span><br>
<span class="quotelev1">&gt;Init
</span><br>
<span class="quotelev1">&gt;Init
</span><br>
<span class="quotelev1">&gt;rank: 1, size: 6
</span><br>
<span class="quotelev1">&gt;rank: 2, size: 6
</span><br>
<span class="quotelev1">&gt;rank: 3, size: 6
</span><br>
<span class="quotelev1">&gt;rank: 4, size: 6
</span><br>
<span class="quotelev1">&gt;rank: 5, size: 6
</span><br>
<span class="quotelev1">&gt;rank: 0, size: 6
</span><br>
<span class="quotelev1">&gt;device 3 is set
</span><br>
<span class="quotelev1">&gt;Process 3 is on typhoon1
</span><br>
<span class="quotelev1">&gt;Using regular memory
</span><br>
<span class="quotelev1">&gt;device 0 is set
</span><br>
<span class="quotelev1">&gt;Process 0 is on typhoon1
</span><br>
<span class="quotelev1">&gt;Using regular memory
</span><br>
<span class="quotelev1">&gt;device 4 is set
</span><br>
<span class="quotelev1">&gt;Process 4 is on typhoon1
</span><br>
<span class="quotelev1">&gt;Using regular memory
</span><br>
<span class="quotelev1">&gt;device 1 is set
</span><br>
<span class="quotelev1">&gt;Process 1 is on typhoon1
</span><br>
<span class="quotelev1">&gt;Using regular memory
</span><br>
<span class="quotelev1">&gt;device 5 is set
</span><br>
<span class="quotelev1">&gt;Process 5 is on typhoon1
</span><br>
<span class="quotelev1">&gt;Using regular memory
</span><br>
<span class="quotelev1">&gt;device 2 is set
</span><br>
<span class="quotelev1">&gt;Process 2 is on typhoon1
</span><br>
<span class="quotelev1">&gt;Using regular memory
</span><br>
<span class="quotelev1">&gt;^C^[[A^C
</span><br>
<span class="quotelev1">&gt;zkoza_at_typhoon1:~/multigpu$
</span><br>
<span class="quotelev1">&gt;zkoza_at_typhoon1:~/multigpu$ vim cudamussings.c
</span><br>
<span class="quotelev1">&gt;zkoza_at_typhoon1:~/multigpu$ mpicc cudamussings.c -lcuda -lcudart
</span><br>
<span class="quotelev1">&gt;-L/usr/local/cuda/lib64 -I/usr/local/cuda/include
</span><br>
<span class="quotelev1">&gt;zkoza_at_typhoon1:~/multigpu$ vim cudamussings.c
</span><br>
<span class="quotelev1">&gt;zkoza_at_typhoon1:~/multigpu$ mpicc cudamussings.c -lcuda -lcudart
</span><br>
<span class="quotelev1">&gt;-L/usr/local/cuda/lib64 -I/usr/local/cuda/include
</span><br>
<span class="quotelev1">&gt;zkoza_at_typhoon1:~/multigpu$ mpirun -n 6 ./a.out Process 1 of 6 is on
</span><br>
<span class="quotelev1">&gt;typhoon1 Process 2 of 6 is on typhoon1 Process 0 of 6 is on typhoon1 Process
</span><br>
<span class="quotelev1">&gt;4 of 6 is on typhoon1 Process 5 of 6 is on typhoon1 Process 3 of 6 is on
</span><br>
<span class="quotelev1">&gt;typhoon1 device 2 is set device 1 is set device 0 is set Using regular memory
</span><br>
<span class="quotelev1">&gt;device 5 is set device 3 is set device 4 is set
</span><br>
<span class="quotelev1">&gt;Host-&gt;device bandwidth for processor 1: 1587.993499 MB/sec device
</span><br>
<span class="quotelev1">&gt;Host-&gt;bandwidth for processor 2: 1570.275316 MB/sec device bandwidth for
</span><br>
<span class="quotelev1">&gt;Host-&gt;processor 3: 1569.890751 MB/sec device bandwidth for processor 5:
</span><br>
<span class="quotelev1">&gt;Host-&gt;1483.637702 MB/sec device bandwidth for processor 0: 1480.888029
</span><br>
<span class="quotelev1">&gt;Host-&gt;MB/sec device bandwidth for processor 4: 1476.241371 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [1] bandwidth: 3338.57 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [1] bandwidth: 420.85 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[1] bandwidth: 362.13 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Device[0] -&gt; Device[1] bandwidth: 6552.35 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [2] bandwidth: 3238.88 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [2] bandwidth: 418.18 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[2] bandwidth: 362.06 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Device[0] -&gt; Device[2] bandwidth: 5022.82 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [3] bandwidth: 3295.32 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [3] bandwidth: 418.90 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[3] bandwidth: 359.16 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Device[0] -&gt; Device[3] bandwidth: 5019.89 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [4] bandwidth: 4619.55 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [4] bandwidth: 419.24 MB/sec
</span><br>
<span class="quotelev1">&gt;MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[4] bandwidth: 364.52 MB/sec
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;The call to cuIpcOpenMemHandle failed. This is an unrecoverable error and
</span><br>
<span class="quotelev1">&gt;will cause the program to abort.
</span><br>
<span class="quotelev1">&gt;   cuIpcOpenMemHandle return value:   205
</span><br>
<span class="quotelev1">&gt;   address: 0x200200000
</span><br>
<span class="quotelev1">&gt;Check the cuda.h file for what the return value means. Perhaps a reboot of
</span><br>
<span class="quotelev1">&gt;the node will clear the problem.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[typhoon1:06098] Failed to register remote memory, rc=-1 [typhoon1:06098]
</span><br>
<span class="quotelev1">&gt;[[33788,1],4] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 465
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Comment:
</span><br>
<span class="quotelev1">&gt;In my machine there are 2 six-core intel processors with HT on, yielding
</span><br>
<span class="quotelev1">&gt;24 virtual processors, and  6 Tesla C2070s.
</span><br>
<span class="quotelev1">&gt;The devices  are grouped in two groups, one with 4 and the other with 2
</span><br>
<span class="quotelev1">&gt;devices.
</span><br>
<span class="quotelev1">&gt;Devices in the same group can talk to each other via GPUDirect at approx
</span><br>
<span class="quotelev1">&gt;6GB/s; devices in different groups can use cudaMemCpy and UVA at
</span><br>
<span class="quotelev1">&gt;somewhat smaller transfer rates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;my OpenMPI is openmpi-1.9a1r26904 compiled from sources
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;./configure -prefix=/home/zkoza/openmpi.1.9.cuda
</span><br>
<span class="quotelev1">&gt;--with-cuda=/usr/local/cuda --with-cuda-libdir=/usr/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; nvcc -V
</span><br>
<span class="quotelev1">&gt;nvcc: NVIDIA (R) Cuda compiler driver
</span><br>
<span class="quotelev1">&gt;Copyright (c) 2005-2012 NVIDIA Corporation Built on
</span><br>
<span class="quotelev1">&gt;Thu_Apr__5_00:24:31_PDT_2012 Cuda compilation tools, release 4.2,
</span><br>
<span class="quotelev1">&gt;V0.2.1221
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;gcc version 4.6.3 (Ubuntu/Linaro 4.6.3-1ubuntu5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ubuntu 12.04 64-bit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nvidia  Driver Version: 295.41         |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The program was compiled with:
</span><br>
<span class="quotelev2">&gt; &gt; mpicc prog.c -lcuda -lcudart -L/usr/local/cuda/lib64 -I/usr/local/cuda/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;================================================
</span><br>
<span class="quotelev1">&gt;SOURCE CODE:
</span><br>
<span class="quotelev1">&gt;================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;cuda.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;cuda_runtime.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#define NREPEAT 20
</span><br>
<span class="quotelev1">&gt;#define NBYTES 100000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#define CALL(x)\
</span><br>
<span class="quotelev1">&gt;{\
</span><br>
<span class="quotelev1">&gt;   cudaError_t err = x;\
</span><br>
<span class="quotelev1">&gt;   if (cudaSuccess != err)\
</span><br>
<span class="quotelev1">&gt;   {\
</span><br>
<span class="quotelev1">&gt;     printf(&quot;CUDA ERROR %s at %d\n&quot;, cudaGetErrorString(err),  __LINE__ ); \
</span><br>
<span class="quotelev1">&gt;     cudaGetLastError();\
</span><br>
<span class="quotelev1">&gt;   }\
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;         int rank, size, n, len, numbytes;
</span><br>
<span class="quotelev1">&gt;         void *a_h, *a_d;
</span><br>
<span class="quotelev1">&gt;         struct timeval time[2];
</span><br>
<span class="quotelev1">&gt;         double bandwidth;
</span><br>
<span class="quotelev1">&gt;         char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;         MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;         MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Process %d of %d is on %s\n&quot;, rank, size, name);
</span><br>
<span class="quotelev1">&gt;         fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         CALL( cudaSetDevice(rank) );
</span><br>
<span class="quotelev1">&gt;         printf(&quot;device %d is set\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;         fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#ifdef PINNED
</span><br>
<span class="quotelev1">&gt;         if (rank == 0)
</span><br>
<span class="quotelev1">&gt;                 printf(&quot;Using pinned memory \n&quot;);
</span><br>
<span class="quotelev1">&gt;         CALL( cudaMallocHost( (void **) &amp;a_h, NBYTES) );
</span><br>
<span class="quotelev1">&gt;#else
</span><br>
<span class="quotelev1">&gt;         if (rank == 0)
</span><br>
<span class="quotelev1">&gt;                 printf(&quot;Using regular memory \n&quot;);
</span><br>
<span class="quotelev1">&gt;         a_h = malloc(NBYTES);
</span><br>
<span class="quotelev1">&gt;#endif
</span><br>
<span class="quotelev1">&gt;         CALL( cudaMalloc( (void **) &amp;a_d, NBYTES) );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         gettimeofday(&amp;time[0], NULL);
</span><br>
<span class="quotelev1">&gt;         for (n=0; n&lt;NREPEAT; n++ )
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 CALL( cudaMemcpy(a_d, a_h, NBYTES,
</span><br>
<span class="quotelev1">&gt;cudaMemcpyHostToDevice) );
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         gettimeofday(&amp;time[1], NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         bandwidth = time[1].tv_sec - time[0].tv_sec;
</span><br>
<span class="quotelev1">&gt;         bandwidth += 1.e-6*(time[1].tv_usec - time[0].tv_usec);
</span><br>
<span class="quotelev1">&gt;         bandwidth = (double)NBYTES*NREPEAT/1.e6/bandwidth;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Host-&gt;device bandwidth for processor %d: %f MB/sec\n&quot;,
</span><br>
<span class="quotelev1">&gt;rank, bandwidth);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* Test MPI send/recv bandwidth. */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int i, proc;
</span><br>
<span class="quotelev1">&gt;         for (proc = 1; proc &lt; size; proc++)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 for (i = 0; i &lt; 4; i++)
</span><br>
<span class="quotelev1">&gt;                 {
</span><br>
<span class="quotelev1">&gt;                          const int from_host = (i &amp; 1) == 0;
</span><br>
<span class="quotelev1">&gt;                         const int to_host =   (i &amp; 2) == 0;
</span><br>
<span class="quotelev1">&gt;                         const char* tab[2] = {&quot;Device&quot;, &quot;Host  &quot;};
</span><br>
<span class="quotelev1">&gt;                         void * ptr[2] = {a_d, a_h};;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                         gettimeofday(&amp;time[0], NULL);
</span><br>
<span class="quotelev1">&gt;                         for (n=0; n&lt;NREPEAT; n++)
</span><br>
<span class="quotelev1">&gt;                         {
</span><br>
<span class="quotelev1">&gt;                                 if (rank == 0)
</span><br>
<span class="quotelev1">&gt;                                         MPI_Send(ptr[from_host],
</span><br>
<span class="quotelev1">&gt;NBYTES/sizeof(int), MPI_INT, proc, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                                 else if (rank == proc)
</span><br>
<span class="quotelev1">&gt;                                         MPI_Recv(ptr[to_host],
</span><br>
<span class="quotelev1">&gt;NBYTES/sizeof(int), MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         gettimeofday(&amp;time[1], NULL);
</span><br>
<span class="quotelev1">&gt;                         //        printf(&quot;MPI status: %d\n&quot;, status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         bandwidth = time[1].tv_sec - time[0].tv_sec;
</span><br>
<span class="quotelev1">&gt;                         bandwidth += 1.e-6*(time[1].tv_usec -
</span><br>
<span class="quotelev1">&gt;time[0].tv_usec);
</span><br>
<span class="quotelev1">&gt;                         bandwidth = NBYTES*NREPEAT/1.e6/bandwidth;
</span><br>
<span class="quotelev1">&gt;                         if (rank == 0)
</span><br>
<span class="quotelev1">&gt;                         {
</span><br>
<span class="quotelev1">&gt;                                 printf(&quot;MPI_Send/MPI_Receive,  %s[%d]
</span><br>
<span class="quotelev1">&gt;-&gt; %s[%d] bandwidth: %4.2f MB/sec\n&quot;,
</span><br>
<span class="quotelev1">&gt;                                                       tab[from_host],
</span><br>
<span class="quotelev1">&gt;0,  tab[to_host], proc, bandwidth);
</span><br>
<span class="quotelev1">&gt;                                 fflush(stdout);
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;#ifdef PINNED
</span><br>
<span class="quotelev1">&gt;         CALL( cudaFreeHost(a_h) );
</span><br>
<span class="quotelev1">&gt;#else
</span><br>
<span class="quotelev1">&gt;         free(a_h);
</span><br>
<span class="quotelev1">&gt;#endif
</span><br>
<span class="quotelev1">&gt;         CALL( cudaFree(a_d) ) ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19880.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19878.php">Zbigniew Koza: "[OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>In reply to:</strong> <a href="19878.php">Zbigniew Koza: "[OMPI users] bug in CUDA support for dual-processor systems?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19880.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Reply:</strong> <a href="19880.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
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
