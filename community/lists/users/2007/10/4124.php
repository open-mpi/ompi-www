<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 22:28:25 2007" -->
<!-- isoreceived="20071002022825" -->
<!-- sent="Mon, 1 Oct 2007 22:28:14 -0400" -->
<!-- isosent="20071002022814" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] init_thread + spawn error" -->
<!-- id="200710012228.14630.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="98e4c1720710011240h7ae3b6afk25ddadd2abfd08e2_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 22:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>In reply to:</strong> <a href="4120.php">Joao Vicente Lima: "[OMPI users] init_thread + spawn error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joao,
<br>
<p>Unfortunately Comm_spawn is a bit broken right now on the Open MPI trunk. We 
<br>
are currently working on some major changes to the runtime system, so I would 
<br>
rather not dig into this until these changes have made it onto the trunk.
<br>
<p>I do not know of a timeline for when this these changes will be put in the 
<br>
trunk and Comm_spawn (especially with threads) will be expected to work 
<br>
correctly again.
<br>
<p>Tim
<br>
<p>On Monday 01 October 2007 03:40:46 pm Joao Vicente Lima wrote:
<br>
<span class="quotelev1">&gt; Hi all!
</span><br>
<span class="quotelev1">&gt; I'm getting a error on call MPI_Init_thread and MPI_Comm_spawn.
</span><br>
<span class="quotelev1">&gt; am I mistaking something?
</span><br>
<span class="quotelev1">&gt; the attachments contains my ompi_info and source ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank!
</span><br>
<span class="quotelev1">&gt; Joao
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;   char *arg[]= {&quot;spawn1&quot;, (char *)0};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init_thread (&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_spawn (&quot;./spawn_slave&quot;, arg, 1,
</span><br>
<span class="quotelev1">&gt;           MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;slave,
</span><br>
<span class="quotelev1">&gt;           MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt; [c8:13335] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [c8:13335] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [c8:13335] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 0] [0xb7fbf440]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 1] /lib/libc.so.6(abort+0x101) [0xb7abd5b1]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 2] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e2933c]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 3] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e2923a]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 4] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e292e3]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 5] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e29fa7]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 6] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e29eda]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 7] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e2adec]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0(ompi_proc_unpack+ 0x181)
</span><br>
<span class="quotelev1">&gt; [0xb7e2b142]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0(ompi_comm_connect
</span><br>
<span class="quotelev1">&gt; _accept+0x57c) [0xb7e0fb70]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [10]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0(PMPI_Comm_spawn+0 x395)
</span><br>
<span class="quotelev1">&gt; [0xb7e5e285]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [11] ./spawn(main+0x7f) [0x80486ef]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [12] /lib/libc.so.6(__libc_start_main+0xdc) [0xb7aa7ebc]
</span><br>
<span class="quotelev1">&gt; [c8:13335] [13] ./spawn [0x80485e1]
</span><br>
<span class="quotelev1">&gt; [c8:13335] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 13335 on
</span><br>
<span class="quotelev1">&gt; node c8 calling &quot;abort&quot;. This will have caused other processes
</span><br>
<span class="quotelev1">&gt; in the application to be terminated by signals sent by mpirun
</span><br>
<span class="quotelev1">&gt; (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>In reply to:</strong> <a href="4120.php">Joao Vicente Lima: "[OMPI users] init_thread + spawn error"</a>
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
