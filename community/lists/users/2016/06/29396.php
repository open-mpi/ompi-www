<?
$subject_val = "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 15:39:50 2016" -->
<!-- isoreceived="20160607193950" -->
<!-- sent="Tue, 7 Jun 2016 12:39:46 -0700" -->
<!-- isosent="20160607193946" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows" -->
<!-- id="6C07D4D9-9781-4CEE-827C-D8A4BAB8FC7A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="95110DC63CB062409084890E698980AD1D83D2C1_at_VAW1PWINFMBXP1.veriskdom.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 15:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29397.php">Ken Nielson: "[OMPI users] mpirun and Torque"</a>
<li><strong>Previous message:</strong> <a href="29395.php">Roth, Christopher: "[OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29395.php">Roth, Christopher: "[OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just looking at this output, it would appear that Windows is configured in a way that prevents the procs from connecting to each other via TCP while on the same node, and shared memory is disqualifying itself - which leaves no way for two procs on the same node to communicate.
<br>
<p><p><span class="quotelev1">&gt; On Jun 7, 2016, at 12:16 PM, Roth, Christopher &lt;CRoth_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have developed a set of C++ MPI programs for performing a series of scientific calculations.  The master 'scheduler' program spawns off sets of parallelized 'executor' programs using the MPI_Comm_spawn routine; these executors communicate back and forth with the scheduler (only small amounts of information) via MPI_Bcast, MPI_Recv and MPI_Send routines (the 'C' library versions).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This software was originally developed on a multi-core Linux machine using OpenMpi v1.5.2, and works extremely well; now I'm attempting to port it to multi-core Windows 7 machine, using Visual Studios 2012 and the precompiled OpenMpi v1.6.2 Windows release.  It all compiles and links properly under VS2012.
</span><br>
<span class="quotelev1">&gt; When attempting to run this software on the Windows machine, the scheduler program is able to spawn off the executor programs as intended, but everything chokes when scheduler sends its initial broadcast.  There is slightly different behavior when launching the scheduler via 'mpirun', or just by itself, as shown in the logs below:
</span><br>
<span class="quotelev1">&gt; (the warning about the 127.0.0.1 address is benign - there is no loopback on Windows)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpirun -np 1 mpi_scheduler.exe
</span><br>
<span class="quotelev1">&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev1">&gt; value will be ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host: sweet1
</span><br>
<span class="quotelev1">&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev1">&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev1">&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev1">&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt; [sweet1][[20141,1],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_proc.c:128:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
</span><br>
<span class="quotelev1">&gt; \btl_tcp_proc.c] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: tcp sm self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev1">&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** on communicator
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,1],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] 4 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: sweet1
</span><br>
<span class="quotelev1">&gt; PID:  524
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],2] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 488 on
</span><br>
<span class="quotelev1">&gt; node sweet1 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] 3 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpi_scheduler.exe
</span><br>
<span class="quotelev1">&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev1">&gt; value will be ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host: sweet1
</span><br>
<span class="quotelev1">&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev1">&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev1">&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev1">&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] 1 more process has sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev1">&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] 3 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;***mpi_executor.exe processes are running, but 'hung' while wating for first broadcast***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;***manually killed one of the 'mpi_executor.exe' processes; others subsequently exited***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],3] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: sweet1
</span><br>
<span class="quotelev1">&gt; PID:  568
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] 2 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The addition of the mpirun option &quot;-mca btl_tcp_if_exclude none&quot; eliminates the benign 127.0.0.1 warning; the option &quot;-mca btl_base_verbose 100&quot; adds output that verifies that the tcp, sm and self btl modules are successfully initialized - nothing else seems to be amiss!
</span><br>
<span class="quotelev1">&gt; I have also tested this with the firewall completely disabled on the Windows machine, with no change in behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been unable to determine what the error codes indicate, and am puzzled why the behavior is different when using the 'mpirun' launcher.
</span><br>
<span class="quotelev1">&gt; I have attached the prototype scheduler and executor program source code files, as well as files containing the Windows installation ompi information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help me figure out what is needed to enable this MPI communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; CJ Roth
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email is intended solely for the recipient. It may contain privileged, proprietary or confidential information or material. If you are not the intended recipient, please delete this email and any attachments and notify the sender of the error.
</span><br>
<span class="quotelev1">&gt; &lt;mpi_scheduler.cpp&gt;&lt;mpi_executor.cpp&gt;&lt;ompi_info-all.txt&gt;&lt;ompi_btl_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29397.php">Ken Nielson: "[OMPI users] mpirun and Torque"</a>
<li><strong>Previous message:</strong> <a href="29395.php">Roth, Christopher: "[OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29395.php">Roth, Christopher: "[OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
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
