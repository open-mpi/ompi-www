<?
$subject_val = "[OMPI users] bug in CUDA support for dual-processor systems?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 12:38:21 2012" -->
<!-- isoreceived="20120731163821" -->
<!-- sent="Tue, 31 Jul 2012 18:38:14 +0200" -->
<!-- isosent="20120731163814" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="[OMPI users] bug in CUDA support for dual-processor systems?" -->
<!-- id="501809F6.1040909_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] bug in CUDA support for dual-processor systems?<br>
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 12:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19879.php">Rolf vandeVaart: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19877.php">Jeff Squyres: "Re: [OMPI users] infiniband with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19879.php">Rolf vandeVaart: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Reply:</strong> <a href="19879.php">Rolf vandeVaart: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I wrote a simple program to see if OpenMPI can really handle cuda 
<br>
pointers as promised in the FAQ and how efficiently.
<br>
The program (see below) breaks if MPI communication is to be performed 
<br>
between two devices that are on the same node but under different IOHs 
<br>
in a dual-processor Intel machine.
<br>
Note that  cudaMemCpy works for such devices, although not as 
<br>
efficiently as for the devices on the same IOH and GPUDirect enabled.
<br>
<p>Here's the output from my program:
<br>
<p>===============================
<br>
<p><span class="quotelev1"> &gt;  mpirun -n 6 ./a.out
</span><br>
Init
<br>
Init
<br>
Init
<br>
Init
<br>
Init
<br>
Init
<br>
rank: 1, size: 6
<br>
rank: 2, size: 6
<br>
rank: 3, size: 6
<br>
rank: 4, size: 6
<br>
rank: 5, size: 6
<br>
rank: 0, size: 6
<br>
device 3 is set
<br>
Process 3 is on typhoon1
<br>
Using regular memory
<br>
device 0 is set
<br>
Process 0 is on typhoon1
<br>
Using regular memory
<br>
device 4 is set
<br>
Process 4 is on typhoon1
<br>
Using regular memory
<br>
device 1 is set
<br>
Process 1 is on typhoon1
<br>
Using regular memory
<br>
device 5 is set
<br>
Process 5 is on typhoon1
<br>
Using regular memory
<br>
device 2 is set
<br>
Process 2 is on typhoon1
<br>
Using regular memory
<br>
^C^[[A^C
<br>
zkoza_at_typhoon1:~/multigpu$
<br>
zkoza_at_typhoon1:~/multigpu$ vim cudamussings.c
<br>
zkoza_at_typhoon1:~/multigpu$ mpicc cudamussings.c -lcuda -lcudart 
<br>
-L/usr/local/cuda/lib64 -I/usr/local/cuda/include
<br>
zkoza_at_typhoon1:~/multigpu$ vim cudamussings.c
<br>
zkoza_at_typhoon1:~/multigpu$ mpicc cudamussings.c -lcuda -lcudart 
<br>
-L/usr/local/cuda/lib64 -I/usr/local/cuda/include
<br>
zkoza_at_typhoon1:~/multigpu$ mpirun -n 6 ./a.out
<br>
Process 1 of 6 is on typhoon1
<br>
Process 2 of 6 is on typhoon1
<br>
Process 0 of 6 is on typhoon1
<br>
Process 4 of 6 is on typhoon1
<br>
Process 5 of 6 is on typhoon1
<br>
Process 3 of 6 is on typhoon1
<br>
device 2 is set
<br>
device 1 is set
<br>
device 0 is set
<br>
Using regular memory
<br>
device 5 is set
<br>
device 3 is set
<br>
device 4 is set
<br>
Host-&gt;device bandwidth for processor 1: 1587.993499 MB/sec
<br>
Host-&gt;device bandwidth for processor 2: 1570.275316 MB/sec
<br>
Host-&gt;device bandwidth for processor 3: 1569.890751 MB/sec
<br>
Host-&gt;device bandwidth for processor 5: 1483.637702 MB/sec
<br>
Host-&gt;device bandwidth for processor 0: 1480.888029 MB/sec
<br>
Host-&gt;device bandwidth for processor 4: 1476.241371 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [1] bandwidth: 3338.57 MB/sec
<br>
MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [1] bandwidth: 420.85 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[1] bandwidth: 362.13 MB/sec
<br>
MPI_Send/MPI_Receive,  Device[0] -&gt; Device[1] bandwidth: 6552.35 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [2] bandwidth: 3238.88 MB/sec
<br>
MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [2] bandwidth: 418.18 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[2] bandwidth: 362.06 MB/sec
<br>
MPI_Send/MPI_Receive,  Device[0] -&gt; Device[2] bandwidth: 5022.82 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [3] bandwidth: 3295.32 MB/sec
<br>
MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [3] bandwidth: 418.90 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[3] bandwidth: 359.16 MB/sec
<br>
MPI_Send/MPI_Receive,  Device[0] -&gt; Device[3] bandwidth: 5019.89 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [4] bandwidth: 4619.55 MB/sec
<br>
MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [4] bandwidth: 419.24 MB/sec
<br>
MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[4] bandwidth: 364.52 MB/sec
<br>
--------------------------------------------------------------------------
<br>
The call to cuIpcOpenMemHandle failed. This is an unrecoverable error
<br>
and will cause the program to abort.
<br>
&nbsp;&nbsp;&nbsp;cuIpcOpenMemHandle return value:   205
<br>
&nbsp;&nbsp;&nbsp;address: 0x200200000
<br>
Check the cuda.h file for what the return value means. Perhaps a reboot
<br>
of the node will clear the problem.
<br>
--------------------------------------------------------------------------
<br>
[typhoon1:06098] Failed to register remote memory, rc=-1
<br>
[typhoon1:06098] [[33788,1],4] ORTE_ERROR_LOG: Error in file 
<br>
pml_ob1_recvreq.c at line 465
<br>
<p>========================================================
<br>
<p><p><p>Comment:
<br>
In my machine there are 2 six-core intel processors with HT on, yielding 
<br>
24 virtual processors, and  6 Tesla C2070s.
<br>
The devices  are grouped in two groups, one with 4 and the other with 2 
<br>
devices.
<br>
Devices in the same group can talk to each other via GPUDirect at approx 
<br>
6GB/s; devices in different groups can use
<br>
cudaMemCpy and UVA at somewhat smaller transfer rates.
<br>
<p><p>my OpenMPI is openmpi-1.9a1r26904 compiled from sources
<br>
<p>./configure -prefix=/home/zkoza/openmpi.1.9.cuda 
<br>
--with-cuda=/usr/local/cuda --with-cuda-libdir=/usr/lib
<br>
<p><span class="quotelev1"> &gt; nvcc -V
</span><br>
nvcc: NVIDIA (R) Cuda compiler driver
<br>
Copyright (c) 2005-2012 NVIDIA Corporation
<br>
Built on Thu_Apr__5_00:24:31_PDT_2012
<br>
Cuda compilation tools, release 4.2, V0.2.1221
<br>
<p>gcc version 4.6.3 (Ubuntu/Linaro 4.6.3-1ubuntu5)
<br>
<p>Ubuntu 12.04 64-bit
<br>
<p>Nvidia  Driver Version: 295.41         |
<br>
<p>The program was compiled with:
<br>
<span class="quotelev1"> &gt; mpicc prog.c -lcuda -lcudart -L/usr/local/cuda/lib64 
</span><br>
-I/usr/local/cuda/include
<br>
<p><p><p>================================================
<br>
SOURCE CODE:
<br>
================================================
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;cuda.h&gt;
<br>
#include &lt;cuda_runtime.h&gt;
<br>
#include &lt;sys/time.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define NREPEAT 20
<br>
#define NBYTES 100000000
<br>
<p><p>#define CALL(x)\
<br>
{\
<br>
&nbsp;&nbsp;&nbsp;cudaError_t err = x;\
<br>
&nbsp;&nbsp;&nbsp;if (cudaSuccess != err)\
<br>
&nbsp;&nbsp;&nbsp;{\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;CUDA ERROR %s at %d\n&quot;, cudaGetErrorString(err),  __LINE__ ); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaGetLastError();\
<br>
&nbsp;&nbsp;&nbsp;}\
<br>
}
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, n, len, numbytes;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *a_h, *a_d;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct timeval time[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double bandwidth;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(name, &amp;len);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d of %d is on %s\n&quot;, rank, size, name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL( cudaSetDevice(rank) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;device %d is set\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
<p>#ifdef PINNED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Using pinned memory \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL( cudaMallocHost( (void **) &amp;a_h, NBYTES) );
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Using regular memory \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a_h = malloc(NBYTES);
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL( cudaMalloc( (void **) &amp;a_d, NBYTES) );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday(&amp;time[0], NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (n=0; n&lt;NREPEAT; n++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL( cudaMemcpy(a_d, a_h, NBYTES, 
<br>
cudaMemcpyHostToDevice) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday(&amp;time[1], NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bandwidth = time[1].tv_sec - time[0].tv_sec;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bandwidth += 1.e-6*(time[1].tv_usec - time[0].tv_usec);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bandwidth = (double)NBYTES*NREPEAT/1.e6/bandwidth;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Host-&gt;device bandwidth for processor %d: %f MB/sec\n&quot;, 
<br>
rank, bandwidth);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Test MPI send/recv bandwidth. */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (proc = 1; proc &lt; size; proc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; 4; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int from_host = (i &amp; 1) == 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int to_host =   (i &amp; 2) == 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char* tab[2] = {&quot;Device&quot;, &quot;Host  &quot;};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * ptr[2] = {a_d, a_h};;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday(&amp;time[0], NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (n=0; n&lt;NREPEAT; n++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(ptr[from_host], 
<br>
NBYTES/sizeof(int), MPI_INT, proc, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (rank == proc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(ptr[to_host], 
<br>
NBYTES/sizeof(int), MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday(&amp;time[1], NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//        printf(&quot;MPI status: %d\n&quot;, status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bandwidth = time[1].tv_sec - time[0].tv_sec;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bandwidth += 1.e-6*(time[1].tv_usec - 
<br>
time[0].tv_usec);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bandwidth = NBYTES*NREPEAT/1.e6/bandwidth;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MPI_Send/MPI_Receive,  %s[%d] 
<br>
-&gt; %s[%d] bandwidth: %4.2f MB/sec\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab[from_host], 
<br>
0,  tab[to_host], proc, bandwidth);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
#ifdef PINNED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL( cudaFreeHost(a_h) );
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(a_h);
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL( cudaFree(a_d) ) ;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19879.php">Rolf vandeVaart: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19877.php">Jeff Squyres: "Re: [OMPI users] infiniband with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19879.php">Rolf vandeVaart: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Reply:</strong> <a href="19879.php">Rolf vandeVaart: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
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
