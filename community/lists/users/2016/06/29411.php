<?
$subject_val = "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 10:47:31 2016" -->
<!-- isoreceived="20160608144731" -->
<!-- sent="Wed, 8 Jun 2016 07:47:17 -0700" -->
<!-- isosent="20160608144717" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows" -->
<!-- id="364F731B-F1F0-45E8-BD7C-42B7B8BD07EA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="95110DC63CB062409084890E698980AD1D83D3CA_at_VAW1PWINFMBXP1.veriskdom.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 10:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29410.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>In reply to:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 8, 2016, at 4:30 AM, Roth, Christopher &lt;CRoth_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What part of this output indicates this non-communicative configuration?
</span><br>
<p>--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[20141,1],0]) is on host: sweet1
<br>
&nbsp;&nbsp;Process 2 ([[20141,2],0]) is on host: sweet1
<br>
&nbsp;&nbsp;BTLs attempted: tcp sm self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;
<br>
<p>Both procs are on the same host. Since they cannot communicate, it means that (a) the shared memory component (sm) was unable to be used, and (b) the TCP subsystem did not provide a usable address for the two procs to reach each other. The former could mean that there wasn&#226;&#128;&#153;t enough room in the tmp directory, and the latter indicates that the TCP subsystem isn&#226;&#128;&#153;t configured to allow connections from its own local IP address.
<br>
<p>I don&#226;&#128;&#153;t know anything about Windows configuration I&#226;&#128;&#153;m afraid.
<br>
<p><p><span class="quotelev1">&gt; Please recall, this is using the precompiled OpenMpi Windows installation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the 'verbose' option is added, I see this sequence of output for the scheduler and each of the executor processes:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This output appears to show the btl components for TCP, SM and Self are all available, but this is contradicted the error message shown in the initial post  (&quot;At least one pair of MPI processes are unable to reach each other for MPI communications....&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is some sort of misconfiguration present, do you have a suggestion for correcting the situation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 07, 2016 3:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just looking at this output, it would appear that Windows is configured in a way that prevents the procs from connecting to each other via TCP while on the same node, and shared memory is disqualifying itself - which leaves no way for two procs on the same node to communicate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 7, 2016, at 12:16 PM, Roth, Christopher &lt;CRoth_at_[hidden] &lt;mailto:CRoth_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have developed a set of C++ MPI programs for performing a series of scientific calculations.  The master 'scheduler' program spawns off sets of parallelized 'executor' programs using the MPI_Comm_spawn routine; these executors communicate back and forth with the scheduler (only small amounts of information) via MPI_Bcast, MPI_Recv and MPI_Send routines (the 'C' library versions).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This software was originally developed on a multi-core Linux machine using OpenMpi v1.5.2, and works extremely well; now I'm attempting to port it to multi-core Windows 7 machine, using Visual Studios 2012 and the precompiled OpenMpi v1.6.2 Windows release.  It all compiles and links properly under VS2012.
</span><br>
<span class="quotelev2">&gt;&gt; When attempting to run this software on the Windows machine, the scheduler program is able to spawn off the executor programs as intended, but everything chokes when scheduler sends its initial broadcast.  There is slightly different behavior when launching the scheduler via 'mpirun', or just by itself, as shown in the logs below:
</span><br>
<span class="quotelev2">&gt;&gt; (the warning about the 127.0.0.1 address is benign - there is no loopback on Windows)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpirun -np 1 mpi_scheduler.exe
</span><br>
<span class="quotelev2">&gt;&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev2">&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Local host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev2">&gt;&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev2">&gt;&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev2">&gt;&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1][[20141,1],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_proc.c:128:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
</span><br>
<span class="quotelev2">&gt;&gt; \btl_tcp_proc.c] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: tcp sm self
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev2">&gt;&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:6800] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:6800] *** on communicator
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:6800] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:6800] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,1],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:02412] 4 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:02412] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt; PID:  524
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],2] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 488 on
</span><br>
<span class="quotelev2">&gt;&gt; node sweet1 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:02412] 3 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpi_scheduler.exe
</span><br>
<span class="quotelev2">&gt;&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev2">&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Local host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev2">&gt;&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev2">&gt;&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev2">&gt;&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04400] 1 more process has sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04400] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev2">&gt;&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev2">&gt;&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev2">&gt;&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04400] 3 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt;&lt;***mpi_executor.exe processes are running, but 'hung' while wating for first broadcast***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt;&lt;***manually killed one of the 'mpi_executor.exe' processes; others subsequently exited***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],3] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt; PID:  568
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04400] 2 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The addition of the mpirun option &quot;-mca btl_tcp_if_exclude none&quot; eliminates the benign 127.0.0.1 warning; the option &quot;-mca btl_base_verbose 100&quot; adds output that verifies that the tcp, sm and self btl modules are successfully initialized - nothing else seems to be amiss!
</span><br>
<span class="quotelev2">&gt;&gt; I have also tested this with the firewall completely disabled on the Windows machine, with no change in behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have been unable to determine what the error codes indicate, and am puzzled why the behavior is different when using the 'mpirun' launcher.
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the prototype scheduler and executor program source code files, as well as files containing the Windows installation ompi information.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please help me figure out what is needed to enable this MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; CJ Roth
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This email is intended solely for the recipient. It may contain privileged, proprietary or confidential information or material. If you are not the intended recipient, please delete this email and any attachments and notify the sender of the error.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpi_scheduler.cpp&gt;&lt;mpi_executor.cpp&gt;&lt;ompi_info-all.txt&gt;&lt;ompi_btl_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29410.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>In reply to:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
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
