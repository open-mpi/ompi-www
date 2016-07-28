<?
$subject_val = "Re: [OMPI users] bug in CUDA support for dual-processor systems?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  2 01:09:34 2012" -->
<!-- isoreceived="20120802050934" -->
<!-- sent="Thu, 2 Aug 2012 07:09:29 +0200" -->
<!-- isosent="20120802050929" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in CUDA support for dual-processor systems?" -->
<!-- id="CAGR4S9H5N1KpyuURQNpqMBYRVBkR3GzbUTu=Btr2-1GwQxZ0qg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="501833E4.3040908_at_gmail.com" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-02 01:09:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19873.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<li><strong>Previous message:</strong> <a href="19871.php">Rushton Martin: "Re: [OMPI users] UC  Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="../../2012/07/19869.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Zbigniew,
<br>
<p><span class="quotelev1">&gt; a) I noticed that on my 6-GPU 2-CPU  platform the initialization of CUDA 4.2 takes a looooong time, approx 10 seconds.
</span><br>
<span class="quotelev1">&gt; Do you think I should report this as a bug to nVidia?
</span><br>
<p>This is an expected time for creation of driver contexts on so many
<br>
devices. I'm sure NVIDIA already got thousands of reports on this :)
<br>
The typical answer is: keep alive context on GPU either by running an
<br>
X server or by executing &quot;nvidia-smi -l 1&quot; in background. With one of
<br>
these init time should drop down to ~1 sec or less.
<br>
<p>- D.
<br>
<p>2012/7/31 Zbigniew Koza &lt;zzkoza_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Thanks for a quick reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know much about low-level CUDA and IPC,
</span><br>
<span class="quotelev1">&gt; but there's no problem using high-level CUDA to determine if
</span><br>
<span class="quotelev1">&gt; device A can talk to B via GPUDirect (cudaDeviceCanAccessPeer).
</span><br>
<span class="quotelev1">&gt; Then, for such connections, one only needs to call
</span><br>
<span class="quotelev1">&gt; cudaDeviceEnablePeerAccess
</span><br>
<span class="quotelev1">&gt; and then essentially  &quot;sit back and laugh&quot; -  given correct current device
</span><br>
<span class="quotelev1">&gt; and stream, functions like cudaMemcpyPeer work irrespectively of whether
</span><br>
<span class="quotelev1">&gt; GPUDirect
</span><br>
<span class="quotelev1">&gt; is on or off for a given pair of devices, the only difference being the
</span><br>
<span class="quotelev1">&gt; speed.
</span><br>
<span class="quotelev1">&gt; So, I hope it should be possible to implement device-IOH-IOH-device
</span><br>
<span class="quotelev1">&gt; communication using low-level CUDA.
</span><br>
<span class="quotelev1">&gt; Such functionality should be an important step in the &quot;CPU-GPU
</span><br>
<span class="quotelev1">&gt; high-performance war&quot; :-),
</span><br>
<span class="quotelev1">&gt; as  8-GPU fast-MPI-link systems  bring a new meaning to a &quot;GPU node&quot; in GPU
</span><br>
<span class="quotelev1">&gt; clusters...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output of my test program that was aimed at determining
</span><br>
<span class="quotelev1">&gt; a) aggregate, best-case transfer rate between 6 GPUs running in parallel and
</span><br>
<span class="quotelev1">&gt; b) whether devices on different IOHs can talk to each other:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3 [GB] in  78.6952 [ms] =  38.1218 GB/s (aggregate)
</span><br>
<span class="quotelev1">&gt; sending 600000000 bytes from device 0:
</span><br>
<span class="quotelev1">&gt; 0 -&gt; 0: 11.3454 [ms] 52.8848 GB/s
</span><br>
<span class="quotelev1">&gt; 0 -&gt; 1: 90.3628 [ms] 6.6399 GB/s
</span><br>
<span class="quotelev1">&gt; 0 -&gt; 2: 113.396 [ms] 5.29117 GB/s
</span><br>
<span class="quotelev1">&gt; 0 -&gt; 3: 113.415 [ms] 5.29032 GB/s
</span><br>
<span class="quotelev1">&gt; 0 -&gt; 4: 170.307 [ms] 3.52305 GB/s
</span><br>
<span class="quotelev1">&gt; 0 -&gt; 5: 169.613 [ms] 3.53747 GB/s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This shows that even if devices are on different IOHs, like 0 and 4, they
</span><br>
<span class="quotelev1">&gt; can talk to each other at a fantastic speed of 3.5 GB/s
</span><br>
<span class="quotelev1">&gt; and it would be pity if OpenMPI did not used this opportunity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also 2 questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) I noticed that on my 6-GPU 2-CPU  platform the initialization of CUDA 4.2
</span><br>
<span class="quotelev1">&gt; takes a looooong time, approx 10 seconds.
</span><br>
<span class="quotelev1">&gt; Do you think I should report this as a bug to nVidia?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) Is there any info on running OpenMPI + CUDA? For example, what are the
</span><br>
<span class="quotelev1">&gt; dependencies of transfer rates and latencies on transfer size?
</span><br>
<span class="quotelev1">&gt; A dedicated www page, blog or whatever? How can I know if the current
</span><br>
<span class="quotelev1">&gt; problem was solved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for making CUDA available in OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Z Koza
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; W dniu 31.07.2012 19:39, Rolf vandeVaart pisze:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current implementation does assume that the GPUs are on the same IOH
</span><br>
<span class="quotelev2">&gt;&gt; and therefore can use the IPC features of the CUDA library for
</span><br>
<span class="quotelev2">&gt;&gt; communication.
</span><br>
<span class="quotelev2">&gt;&gt; One of the initial motivations for this was that to be able to detect
</span><br>
<span class="quotelev2">&gt;&gt; whether GPUs can talk to one another, the CUDA library has to be initialized
</span><br>
<span class="quotelev2">&gt;&gt; and the GPUs have to be selected by each rank.  It is at that point that we
</span><br>
<span class="quotelev2">&gt;&gt; can determine whether the IPC will work between the GPUs.    However, this
</span><br>
<span class="quotelev2">&gt;&gt; means that the GPUs need to be selected by each rank prior to the call to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init as that is where we determine whether IPC is possible, and we were
</span><br>
<span class="quotelev2">&gt;&gt; trying to avoid that requirement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will submit a ticket against this and see if we can improve this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Zbigniew Koza
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, July 31, 2012 12:38 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] bug in CUDA support for dual-processor systems?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wrote a simple program to see if OpenMPI can really handle cuda
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pointers as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; promised in the FAQ and how efficiently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program (see below) breaks if MPI communication is to be performed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between two devices that are on the same node but under different IOHs in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dual-processor Intel machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that  cudaMemCpy works for such devices, although not as efficiently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the devices on the same IOH and GPUDirect enabled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the output from my program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===============================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   mpirun -n 6 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank: 1, size: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank: 2, size: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank: 3, size: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank: 4, size: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank: 5, size: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank: 0, size: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device 3 is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 is on typhoon1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using regular memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device 0 is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 is on typhoon1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using regular memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device 4 is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 4 is on typhoon1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using regular memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device 1 is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 is on typhoon1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using regular memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device 5 is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 5 is on typhoon1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using regular memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device 2 is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 is on typhoon1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using regular memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C^[[A^C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zkoza_at_typhoon1:~/multigpu$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zkoza_at_typhoon1:~/multigpu$ vim cudamussings.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zkoza_at_typhoon1:~/multigpu$ mpicc cudamussings.c -lcuda -lcudart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/local/cuda/lib64 -I/usr/local/cuda/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zkoza_at_typhoon1:~/multigpu$ vim cudamussings.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zkoza_at_typhoon1:~/multigpu$ mpicc cudamussings.c -lcuda -lcudart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/local/cuda/lib64 -I/usr/local/cuda/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zkoza_at_typhoon1:~/multigpu$ mpirun -n 6 ./a.out Process 1 of 6 is on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typhoon1 Process 2 of 6 is on typhoon1 Process 0 of 6 is on typhoon1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 of 6 is on typhoon1 Process 5 of 6 is on typhoon1 Process 3 of 6 is on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typhoon1 device 2 is set device 1 is set device 0 is set Using regular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device 5 is set device 3 is set device 4 is set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host-&gt;device bandwidth for processor 1: 1587.993499 MB/sec device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host-&gt;bandwidth for processor 2: 1570.275316 MB/sec device bandwidth for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host-&gt;processor 3: 1569.890751 MB/sec device bandwidth for processor 5:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host-&gt;1483.637702 MB/sec device bandwidth for processor 0: 1480.888029
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host-&gt;MB/sec device bandwidth for processor 4: 1476.241371 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [1] bandwidth: 3338.57 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [1] bandwidth: 420.85 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[1] bandwidth: 362.13 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Device[0] -&gt; Device[1] bandwidth: 6552.35 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [2] bandwidth: 3238.88 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [2] bandwidth: 418.18 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[2] bandwidth: 362.06 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Device[0] -&gt; Device[2] bandwidth: 5022.82 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [3] bandwidth: 3295.32 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [3] bandwidth: 418.90 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[3] bandwidth: 359.16 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Device[0] -&gt; Device[3] bandwidth: 5019.89 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Host  [4] bandwidth: 4619.55 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Device[0] -&gt; Host  [4] bandwidth: 419.24 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/MPI_Receive,  Host  [0] -&gt; Device[4] bandwidth: 364.52 MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The call to cuIpcOpenMemHandle failed. This is an unrecoverable error and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will cause the program to abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    cuIpcOpenMemHandle return value:   205
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    address: 0x200200000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check the cuda.h file for what the return value means. Perhaps a reboot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the node will clear the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [typhoon1:06098] Failed to register remote memory, rc=-1 [typhoon1:06098]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[33788,1],4] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 465
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my machine there are 2 six-core intel processors with HT on, yielding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24 virtual processors, and  6 Tesla C2070s.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The devices  are grouped in two groups, one with 4 and the other with 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devices.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Devices in the same group can talk to each other via GPUDirect at approx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6GB/s; devices in different groups can use cudaMemCpy and UVA at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somewhat smaller transfer rates.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my OpenMPI is openmpi-1.9a1r26904 compiled from sources
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure -prefix=/home/zkoza/openmpi.1.9.cuda
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-cuda=/usr/local/cuda --with-cuda-libdir=/usr/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nvcc -V
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nvcc: NVIDIA (R) Cuda compiler driver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (c) 2005-2012 NVIDIA Corporation Built on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thu_Apr__5_00:24:31_PDT_2012 Cuda compilation tools, release 4.2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; V0.2.1221
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc version 4.6.3 (Ubuntu/Linaro 4.6.3-1ubuntu5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ubuntu 12.04 64-bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nvidia  Driver Version: 295.41         |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program was compiled with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc prog.c -lcuda -lcudart -L/usr/local/cuda/lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/local/cuda/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SOURCE CODE:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;cuda.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;cuda_runtime.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define NREPEAT 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define NBYTES 100000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define CALL(x)\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    cudaError_t err = x;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (cudaSuccess != err)\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      printf(&quot;CUDA ERROR %s at %d\n&quot;, cudaGetErrorString(err),  __LINE__
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ); \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      cudaGetLastError();\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          int rank, size, n, len, numbytes;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          void *a_h, *a_d;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          struct timeval time[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          double bandwidth;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;Process %d of %d is on %s\n&quot;, rank, size, name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          CALL( cudaSetDevice(rank) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;device %d is set\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef PINNED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (rank == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  printf(&quot;Using pinned memory \n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          CALL( cudaMallocHost( (void **) &amp;a_h, NBYTES) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (rank == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  printf(&quot;Using regular memory \n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          a_h = malloc(NBYTES);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          CALL( cudaMalloc( (void **) &amp;a_d, NBYTES) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          gettimeofday(&amp;time[0], NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          for (n=0; n&lt;NREPEAT; n++ )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  CALL( cudaMemcpy(a_d, a_h, NBYTES,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cudaMemcpyHostToDevice) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          gettimeofday(&amp;time[1], NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          bandwidth = time[1].tv_sec - time[0].tv_sec;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          bandwidth += 1.e-6*(time[1].tv_usec - time[0].tv_usec);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          bandwidth = (double)NBYTES*NREPEAT/1.e6/bandwidth;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;Host-&gt;device bandwidth for processor %d: %f MB/sec\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank, bandwidth);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /* Test MPI send/recv bandwidth. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          int i, proc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          for (proc = 1; proc &lt; size; proc++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  for (i = 0; i &lt; 4; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           const int from_host = (i &amp; 1) == 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          const int to_host =   (i &amp; 2) == 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          const char* tab[2] = {&quot;Device&quot;, &quot;Host  &quot;};
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          void * ptr[2] = {a_d, a_h};;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          gettimeofday(&amp;time[0], NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          for (n=0; n&lt;NREPEAT; n++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                  if (rank == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                          MPI_Send(ptr[from_host],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NBYTES/sizeof(int), MPI_INT, proc, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                  else if (rank == proc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                          MPI_Recv(ptr[to_host],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NBYTES/sizeof(int), MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          gettimeofday(&amp;time[1], NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          //        printf(&quot;MPI status: %d\n&quot;, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          bandwidth = time[1].tv_sec - time[0].tv_sec;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          bandwidth += 1.e-6*(time[1].tv_usec -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time[0].tv_usec);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          bandwidth = NBYTES*NREPEAT/1.e6/bandwidth;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          if (rank == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                  printf(&quot;MPI_Send/MPI_Receive,  %s[%d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt; %s[%d] bandwidth: %4.2f MB/sec\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                        tab[from_host],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0,  tab[to_host], proc, bandwidth);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                  fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef PINNED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          CALL( cudaFreeHost(a_h) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          free(a_h);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          CALL( cudaFree(a_d) ) ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev2">&gt;&gt; may contain
</span><br>
<span class="quotelev2">&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev2">&gt;&gt; distribution
</span><br>
<span class="quotelev2">&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev2">&gt;&gt; sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19873.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<li><strong>Previous message:</strong> <a href="19871.php">Rushton Martin: "Re: [OMPI users] UC  Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="../../2012/07/19869.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
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
