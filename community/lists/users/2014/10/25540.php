<?
$subject_val = "Re: [OMPI users] CuEventCreate Failed...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 16:19:13 2014" -->
<!-- isoreceived="20141020201913" -->
<!-- sent="Mon, 20 Oct 2014 20:19:10 +0000" -->
<!-- isosent="20141020201910" -->
<!-- name="Steven Eliuk" -->
<!-- email="s.eliuk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CuEventCreate Failed..." -->
<!-- id="D06AB644.1D6CB%s.eliuk_at_samsung.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="22ff684df3884de981ce4411690fdd8e_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CuEventCreate Failed...<br>
<strong>From:</strong> Steven Eliuk (<em>s.eliuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-20 16:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25541.php">Marshall Ward: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Previous message:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>In reply to:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sir,
<br>
<p><p>We are using cuda6.0 release and the 331.89 driver&#133;
<br>
<p><p>Little background, the master does not init CUDA. We have tried this method too, having all five processes init cuda but it seems to cause the problem more easily.
<br>
<p><p>Yes the example below was on one machine, but we have seen it even with more machines&#133; except its not typically the event IPC error, just an event creation failed. Lets stick to the single machine issue first,
<br>
<p><p>We were thinking of trying the Multi-Process Service from nvidia, likely won&#146;t help though.
<br>
<p><p>Please lmk if you need anything else and thank you!!!
<br>
<p><p># nvcc --version
<br>
<p>nvcc: NVIDIA (R) Cuda compiler driver
<br>
<p>Copyright (c) 2005-2013 NVIDIA Corporation
<br>
<p>Built on Thu_Mar_13_11:58:58_PDT_2014
<br>
<p>Cuda compilation tools, release 6.0, V6.0.1
<br>
<p><p><p>nvidia-smi
<br>
<p>Mon Oct 20 12:53:12 2014
<br>
<p>+------------------------------------------------------+
<br>
<p>| NVIDIA-SMI 331.89     Driver Version: 331.89         |
<br>
<p>|-------------------------------+----------------------+----------------------+
<br>
<p>| GPU  Name        Persistence-M| Bus-Id        Disp.A | Volatile Uncorr. ECC |
<br>
<p>| Fan  Temp  Perf  Pwr:Usage/Cap|         Memory-Usage | GPU-Util  Compute M. |
<br>
<p>|===============================+======================+======================|
<br>
<p>|   0  Tesla K40m          On   | 0000:42:00.0     Off |                    0 |
<br>
<p>| N/A   37C    P8    59W / 235W |     54MiB / 11519MiB |      0%      Default |
<br>
<p>+-------------------------------+----------------------+----------------------+
<br>
<p><p><p>+-----------------------------------------------------------------------------+
<br>
<p>| Compute processes:                                               GPU Memory |
<br>
<p>|  GPU       PID  Process name                                     Usage      |
<br>
<p>|=============================================================================|
<br>
<p>|  No running compute processes found                                         |
<br>
<p>+-----------------------------------------------------------------------------+
<br>
<p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk, Ph.D. Comp Sci,
<br>
Advanced Software Platforms Lab,
<br>
SRA - SV,
<br>
Samsung Electronics,
<br>
1732 North First Street,
<br>
San Jose, CA 95112,
<br>
Work: +1 408-652-1976,
<br>
Work: +1 408-544-5781 Wednesdays,
<br>
Cell: +1 408-819-4407.
<br>
<p><p>From: Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Monday, October 20, 2014 at 12:30 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] CuEventCreate Failed...
<br>
<p>Hi:
<br>
I just tried running a program similar to yours with CUDA 6.5 and Open MPI and I could not reproduce.  Just to make sure I am doing things correctly, your example below is running with np=5 and on a single node? Which version of CUDA are you using?  Can you also send the output from nvidia-smi?  Also, based on the usage of &#150;allow-run-as-root I assume you are running the program as root?
<br>
<p><p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Steven Eliuk
<br>
Sent: Monday, October 20, 2014 1:59 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] CuEventCreate Failed...
<br>
<p>Thanks for your quick response,
<br>
<p>1)mpiexec --allow-run-as-root --mca btl_openib_want_cuda_gdr 1 --mca btl_openib_cuda_rdma_limit 60000 --mca mpi_common_cuda_event_max 1000 -n 5 test/RunTests
<br>
2)Yes, cuda aware support using Mellanox IB,
<br>
3)Yes, we have the ability to use several version of OpenMPI, Mvapich2, etc.
<br>
<p>Also, our defaults for openmpi-mca-params.conf are:
<br>
<p>mtl=^mxm
<br>
<p>btl=^usnic,tcp
<br>
<p>btl_openib_flags=1
<br>
<p><p>service nv_peer_mem status
<br>
<p>nv_peer_mem module is loaded.
<br>
<p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk,
<br>
<p><p>From: Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Sunday, October 19, 2014 at 7:33 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] CuEventCreate Failed...
<br>
<p>The error 304 corresponds to CUDA_ERRROR_OPERATNG_SYSTEM which means an OS call failed.  However, I am not sure how that relates to the call that is getting the error.
<br>
Also, the last error you report is from MVAPICH2-GDR, not from Open MPI.  I guess then I have a few questions.
<br>
<p><p>1.      Can you supply your configure line for Open MPI?
<br>
<p>2.      Are you making use of CUDA-aware support?
<br>
<p>3.      Are you set up so that users can use both Open MPI and MVAPICH2?
<br>
<p>Thanks,
<br>
Rolf
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Steven Eliuk
<br>
Sent: Friday, October 17, 2014 6:48 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: [OMPI users] CuEventCreate Failed...
<br>
<p>Hi All,
<br>
<p>We have run into issues, that don&#146;t really seem to materialize into incorrect results, nonetheless, we hope to figure out why we are getting them.
<br>
<p>We have several environments with test from one machine, with say 1-16 processes per node, to several machines with 1-16 processes. All systems are certified from Nvidia and use Nvidia Tesla k40 GPUs.
<br>
<p>We notice frequent situations of the following,
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The call to cuEventCreate failed. This is a unrecoverable error and will
<br>
<p>cause the program to abort.
<br>
<p>&nbsp;&nbsp;Hostname:                     aHost
<br>
<p>&nbsp;&nbsp;cuEventCreate return value:   304
<br>
<p>Check the cuda.h file for what the return value means.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The call to cuIpcGetEventHandle failed. This is a unrecoverable error and will
<br>
<p>cause the program to abort.
<br>
<p>&nbsp;&nbsp;cuIpcGetEventHandle return value:   304
<br>
<p>Check the cuda.h file for what the return value means.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The call to cuIpcGetMemHandle failed. This means the GPU RDMA protocol
<br>
<p>cannot be used.
<br>
<p>&nbsp;&nbsp;cuIpcGetMemHandle return value:   304
<br>
<p>&nbsp;&nbsp;address: 0x700fd0400
<br>
<p>Check the cuda.h file for what the return value means. Perhaps a reboot
<br>
<p>of the node will clear the problem.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Now, our test suite still verifies results but this does cause the following when it happens,
<br>
<p>The call to cuEventDestory failed. This is a unrecoverable error and will
<br>
<p>cause the program to abort.
<br>
<p>&nbsp;&nbsp;cuEventDestory return value:   400
<br>
<p>Check the cuda.h file for what the return value means.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>-------------------------------------------------------
<br>
<p>Primary job  terminated normally, but 1 process returned
<br>
<p>a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
<p>-------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
<p>the job to be terminated. The first process to do so was:
<br>
<p><p><p>&nbsp;&nbsp;Process name: [[37290,1],2]
<br>
<p>&nbsp;&nbsp;Exit code:    1
<br>
<p><p>We have traced the code back to the following files:
<br>
-ompi/mca/common/cuda/common_cuda.c :: mca_common_cuda_construct_event_and_handle()
<br>
<p>We also know the the following:
<br>
-it happens on every machine on the very first entry to the function previously mentioned,
<br>
-does not happen if the buffer size is under 128 bytes&#133; likely a different mech. Used for the IPC,
<br>
<p>Last, here is an intermittent one and it produces a lot failed tests in our suite&#133; when in fact they are solid, besides this error. Cause notification, annoyances and it would be nice to clean it up.
<br>
<p>mpi_rank_3][cudaipc_allocate_ipc_region] [src/mpid/ch3/channels/mrail/src/gen2/ibv_cuda_ipc.c:487] cuda failed with mapping of buffer object failed
<br>
<p><p>We have not been able to duplicate these errors in other MPI libs,
<br>
<p>Thank you for your time &amp; looking forward to your response,
<br>
<p><p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk, Ph.D. Comp Sci,
<br>
Advanced Software Platforms Lab,
<br>
SRA - SV,
<br>
Samsung Electronics,
<br>
1732 North First Street,
<br>
San Jose, CA 95112,
<br>
Work: +1 408-652-1976,
<br>
Work: +1 408-544-5781 Wednesdays,
<br>
Cell: +1 408-819-4407.
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25541.php">Marshall Ward: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Previous message:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>In reply to:</strong> <a href="25539.php">Rolf vandeVaart: "Re: [OMPI users] CuEventCreate Failed..."</a>
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
