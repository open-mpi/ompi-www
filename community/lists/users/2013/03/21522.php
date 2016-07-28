<?
$subject_val = "Re: [OMPI users] status of cuda across multiple IO hubs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 11 11:43:32 2013" -->
<!-- isoreceived="20130311154332" -->
<!-- sent="Mon, 11 Mar 2013 08:43:26 -0700" -->
<!-- isosent="20130311154326" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] status of cuda across multiple IO hubs?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E95E0DE25_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANnhonQ5L0WRUT35KEVHB78P61pT4tfwbhpJy4Hoh=cV+sCqLg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] status of cuda across multiple IO hubs?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-11 11:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21523.php">Nilesh Mahajan: "[OMPI users] Send Recv Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="21521.php">Russell Power: "[OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>In reply to:</strong> <a href="21521.php">Russell Power: "[OMPI users] status of cuda across multiple IO hubs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, unfortunately, that issue is still unfixed.  I just created the ticket and included a possible workaround.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/3531">https://svn.open-mpi.org/trac/ompi/ticket/3531</a>
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Russell Power
</span><br>
<span class="quotelev1">&gt;Sent: Monday, March 11, 2013 11:28 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] status of cuda across multiple IO hubs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm running into issues when trying to use GPUs in a multiprocessor system
</span><br>
<span class="quotelev1">&gt;when using the latest release candidate (1.7rc8).
</span><br>
<span class="quotelev1">&gt;Specifically, it looks like the OpenMPI code is still assuming that all GPUs are
</span><br>
<span class="quotelev1">&gt;on the same IOH, as in this message from a few months
</span><br>
<span class="quotelev1">&gt;ago:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/users/2012/07/19879.php">http://www.open-mpi.org/community/lists/users/2012/07/19879.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I couldn't determine what happened to the ticket mentioned in that thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For the moment, I'm just constraining myself to using the GPUs attached to
</span><br>
<span class="quotelev1">&gt;one processor, but obviously that's less then ideal :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Curiously, the eager send path doesn't seem to have the same issue - if I
</span><br>
<span class="quotelev1">&gt;adjust btl_smcuda_eager_limit up, sends work up to that threshold.
</span><br>
<span class="quotelev1">&gt;Unfortunately, if I increase it beyond 10 megabytes I start seeing bus errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I can manually breakup my own sends to be below the eager limit, but that
</span><br>
<span class="quotelev1">&gt;seems non-optimal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any other recommendations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;R
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The testing code and output is pasted below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;cuda.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;cuda_runtime_api.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#  define CUDA_SAFE_CALL( call) {                                    \
</span><br>
<span class="quotelev1">&gt;    cudaError err = call;                                                    \
</span><br>
<span class="quotelev1">&gt;    if( cudaSuccess != err) {                                                \
</span><br>
<span class="quotelev1">&gt;        fprintf(stderr, &quot;Cuda error in file '%s' in line %i : %s.\n&quot;,        \
</span><br>
<span class="quotelev1">&gt;                __FILE__, __LINE__, cudaGetErrorString( err) );              \
</span><br>
<span class="quotelev1">&gt;        exit(EXIT_FAILURE);                                                  \
</span><br>
<span class="quotelev1">&gt;    } }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int recv(int src) {
</span><br>
<span class="quotelev1">&gt;  cudaSetDevice(0);
</span><br>
<span class="quotelev1">&gt;  for (int bSize = 1; bSize &lt; 100e6; bSize *= 2) {
</span><br>
<span class="quotelev1">&gt;    fprintf(stderr, &quot;Recv: %d\n&quot;, bSize);
</span><br>
<span class="quotelev1">&gt;    void* buffer;
</span><br>
<span class="quotelev1">&gt;    CUDA_SAFE_CALL(cudaMalloc(&amp;buffer, bSize));
</span><br>
<span class="quotelev1">&gt;    auto world = MPI::COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;    world.Recv(buffer, bSize, MPI::BYTE, src, 0);
</span><br>
<span class="quotelev1">&gt;    CUDA_SAFE_CALL(cudaFree(buffer))
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int send(int dst) {
</span><br>
<span class="quotelev1">&gt;  cudaSetDevice(2);
</span><br>
<span class="quotelev1">&gt;  for (int bSize = 1; bSize &lt; 100e6; bSize *= 2) {
</span><br>
<span class="quotelev1">&gt;    fprintf(stderr, &quot;Send: %d\n&quot;, bSize);
</span><br>
<span class="quotelev1">&gt;    void* buffer;
</span><br>
<span class="quotelev1">&gt;    CUDA_SAFE_CALL(cudaMalloc(&amp;buffer, bSize));
</span><br>
<span class="quotelev1">&gt;    auto world = MPI::COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;    world.Send(buffer, bSize, MPI::BYTE, dst, 0);
</span><br>
<span class="quotelev1">&gt;    CUDA_SAFE_CALL(cudaFree(buffer))
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;void checkPeerAccess() {
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;Access capability: gpu -&gt; gpu\n&quot;);
</span><br>
<span class="quotelev1">&gt;  for (int a = 0; a &lt; 3; ++a) {
</span><br>
<span class="quotelev1">&gt;    for (int b = a; b &lt; 3; ++b) {
</span><br>
<span class="quotelev1">&gt;      if (a == b) { continue; }
</span><br>
<span class="quotelev1">&gt;      int res;
</span><br>
<span class="quotelev1">&gt;      cudaDeviceCanAccessPeer(&amp;res, a, b);
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr, &quot;%d &lt;-&gt; %d: %d\n&quot;, a, b, res);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int main() {
</span><br>
<span class="quotelev1">&gt;  MPI::Init_thread(MPI::THREAD_MULTIPLE);
</span><br>
<span class="quotelev1">&gt;  if (MPI::COMM_WORLD.Get_rank() == 0) {
</span><br>
<span class="quotelev1">&gt;    checkPeerAccess();
</span><br>
<span class="quotelev1">&gt;    recv(1);
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;    send(0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;output from running:
</span><br>
<span class="quotelev1">&gt;mpirun -mca btl_smcuda_eager_limit 64 -n 2 ./a.out Access capability: gpu -&gt;
</span><br>
<span class="quotelev1">&gt;gpu
</span><br>
<span class="quotelev1">&gt;0 &lt;-&gt; 1: 1
</span><br>
<span class="quotelev1">&gt;0 &lt;-&gt; 2: 0
</span><br>
<span class="quotelev1">&gt;1 &lt;-&gt; 2: 0
</span><br>
<span class="quotelev1">&gt;Send: 1
</span><br>
<span class="quotelev1">&gt;Recv: 1
</span><br>
<span class="quotelev1">&gt;Send: 2
</span><br>
<span class="quotelev1">&gt;Recv: 2
</span><br>
<span class="quotelev1">&gt;Send: 4
</span><br>
<span class="quotelev1">&gt;Recv: 4
</span><br>
<span class="quotelev1">&gt;Send: 8
</span><br>
<span class="quotelev1">&gt;Recv: 8
</span><br>
<span class="quotelev1">&gt;Send: 16
</span><br>
<span class="quotelev1">&gt;Recv: 16
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;The call to cuIpcOpenMemHandle failed. This is an unrecoverable error and
</span><br>
<span class="quotelev1">&gt;will cause the program to abort.
</span><br>
<span class="quotelev1">&gt;  cuIpcOpenMemHandle return value:   217
</span><br>
<span class="quotelev1">&gt;  address: 0x2300200000
</span><br>
<span class="quotelev1">&gt;Check the cuda.h file for what the return value means. Perhaps a reboot of
</span><br>
<span class="quotelev1">&gt;the node will clear the problem.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="21523.php">Nilesh Mahajan: "[OMPI users] Send Recv Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="21521.php">Russell Power: "[OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>In reply to:</strong> <a href="21521.php">Russell Power: "[OMPI users] status of cuda across multiple IO hubs?"</a>
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
