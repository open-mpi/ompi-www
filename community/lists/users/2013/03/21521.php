<?
$subject_val = "[OMPI users] status of cuda across multiple IO hubs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 11 11:28:03 2013" -->
<!-- isoreceived="20130311152803" -->
<!-- sent="Mon, 11 Mar 2013 11:27:59 -0400" -->
<!-- isosent="20130311152759" -->
<!-- name="Russell Power" -->
<!-- email="power_at_[hidden]" -->
<!-- subject="[OMPI users] status of cuda across multiple IO hubs?" -->
<!-- id="CANnhonQ5L0WRUT35KEVHB78P61pT4tfwbhpJy4Hoh=cV+sCqLg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] status of cuda across multiple IO hubs?<br>
<strong>From:</strong> Russell Power (<em>power_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-11 11:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>Previous message:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>Reply:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running into issues when trying to use GPUs in a multiprocessor
<br>
system when using the latest release candidate (1.7rc8).
<br>
Specifically, it looks like the OpenMPI code is still assuming that
<br>
all GPUs are on the same IOH, as in this message from a few months
<br>
ago:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2012/07/19879.php">http://www.open-mpi.org/community/lists/users/2012/07/19879.php</a>
<br>
<p>I couldn't determine what happened to the ticket mentioned in that thread.
<br>
<p>For the moment, I'm just constraining myself to using the GPUs
<br>
attached to one processor, but obviously that's less then ideal :).
<br>
<p>Curiously, the eager send path doesn't seem to have the same issue -
<br>
if I adjust btl_smcuda_eager_limit up, sends work up to that
<br>
threshold.  Unfortunately, if I increase it beyond 10 megabytes I
<br>
start seeing bus errors.
<br>
<p>I can manually breakup my own sends to be below the eager limit, but
<br>
that seems non-optimal.
<br>
<p>Any other recommendations?
<br>
<p>Thanks,
<br>
<p>R
<br>
<p>The testing code and output is pasted below.
<br>
<p><pre>
---
#include &lt;cuda.h&gt;
#include &lt;cuda_runtime_api.h&gt;
#include &lt;mpi.h&gt;
#  define CUDA_SAFE_CALL( call) {                                    \
    cudaError err = call;                                                    \
    if( cudaSuccess != err) {                                                \
        fprintf(stderr, &quot;Cuda error in file '%s' in line %i : %s.\n&quot;,        \
                __FILE__, __LINE__, cudaGetErrorString( err) );              \
        exit(EXIT_FAILURE);                                                  \
    } }
int recv(int src) {
  cudaSetDevice(0);
  for (int bSize = 1; bSize &lt; 100e6; bSize *= 2) {
    fprintf(stderr, &quot;Recv: %d\n&quot;, bSize);
    void* buffer;
    CUDA_SAFE_CALL(cudaMalloc(&amp;buffer, bSize));
    auto world = MPI::COMM_WORLD;
    world.Recv(buffer, bSize, MPI::BYTE, src, 0);
    CUDA_SAFE_CALL(cudaFree(buffer))
  }
}
int send(int dst) {
  cudaSetDevice(2);
  for (int bSize = 1; bSize &lt; 100e6; bSize *= 2) {
    fprintf(stderr, &quot;Send: %d\n&quot;, bSize);
    void* buffer;
    CUDA_SAFE_CALL(cudaMalloc(&amp;buffer, bSize));
    auto world = MPI::COMM_WORLD;
    world.Send(buffer, bSize, MPI::BYTE, dst, 0);
    CUDA_SAFE_CALL(cudaFree(buffer))
  }
}
void checkPeerAccess() {
  fprintf(stderr, &quot;Access capability: gpu -&gt; gpu\n&quot;);
  for (int a = 0; a &lt; 3; ++a) {
    for (int b = a; b &lt; 3; ++b) {
      if (a == b) { continue; }
      int res;
      cudaDeviceCanAccessPeer(&amp;res, a, b);
      fprintf(stderr, &quot;%d &lt;-&gt; %d: %d\n&quot;, a, b, res);
    }
  }
}
int main() {
  MPI::Init_thread(MPI::THREAD_MULTIPLE);
  if (MPI::COMM_WORLD.Get_rank() == 0) {
    checkPeerAccess();
    recv(1);
  } else {
    send(0);
  }
  MPI::Finalize();
}
output from running:
mpirun -mca btl_smcuda_eager_limit 64 -n 2 ./a.out
Access capability: gpu -&gt; gpu
0 &lt;-&gt; 1: 1
0 &lt;-&gt; 2: 0
1 &lt;-&gt; 2: 0
Send: 1
Recv: 1
Send: 2
Recv: 2
Send: 4
Recv: 4
Send: 8
Recv: 8
Send: 16
Recv: 16
--------------------------------------------------------------------------
The call to cuIpcOpenMemHandle failed. This is an unrecoverable error
and will cause the program to abort.
  cuIpcOpenMemHandle return value:   217
  address: 0x2300200000
Check the cuda.h file for what the return value means. Perhaps a reboot
of the node will clear the problem.
--------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>Previous message:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
<li><strong>Reply:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
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
