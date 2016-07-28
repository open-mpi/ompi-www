<?
$subject_val = "[OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 15:16:46 2016" -->
<!-- isoreceived="20160607191646" -->
<!-- sent="Tue, 7 Jun 2016 19:16:07 +0000" -->
<!-- isosent="20160607191607" -->
<!-- name="Roth, Christopher" -->
<!-- email="CRoth_at_[hidden]" -->
<!-- subject="[OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows" -->
<!-- id="95110DC63CB062409084890E698980AD1D83D2C1_at_VAW1PWINFMBXP1.veriskdom.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows<br>
<strong>From:</strong> Roth, Christopher (<em>CRoth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 15:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29394.php">Rob Latham: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have developed a set of C++ MPI programs for performing a series of scientific calculations.  The master 'scheduler' program spawns off sets of parallelized 'executor' programs using the MPI_Comm_spawn routine; these executors communicate back and forth with the scheduler (only small amounts of information) via MPI_Bcast, MPI_Recv and MPI_Send routines (the 'C' library versions).
<br>
<p>This software was originally developed on a multi-core Linux machine using OpenMpi v1.5.2, and works extremely well; now I'm attempting to port it to multi-core Windows 7 machine, using Visual Studios 2012 and the precompiled OpenMpi v1.6.2 Windows release.  It all compiles and links properly under VS2012.
<br>
When attempting to run this software on the Windows machine, the scheduler program is able to spawn off the executor programs as intended, but everything chokes when scheduler sends its initial broadcast.  There is slightly different behavior when launching the scheduler via 'mpirun', or just by itself, as shown in the logs below:
<br>
(the warning about the 127.0.0.1 address is benign - there is no loopback on Windows)
<br>
<p>C:\Users\cjr\Desktop\mpi_demo&gt;mpirun -np 1 mpi_scheduler.exe
<br>
&nbsp;scheduler: MPI_Init
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for btl_tcp_if_exclude.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: sweet1
<br>
&nbsp;&nbsp;Value:      127.0.0.1/8
<br>
&nbsp;&nbsp;Message:    Did not find interface matching this subnet
<br>
--------------------------------------------------------------------------
<br>
--&gt;MPI_COMM_WORLD size = 1
<br>
parent: MPI_UNIVERSE_SIZE = 1
<br>
scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
<br>
&nbsp;executor: MPI_Init
<br>
&nbsp;executor: MPI_Init
<br>
&nbsp;executor: MPI_Init
<br>
&nbsp;executor: MPI_Init
<br>
[sweet1][[20141,1],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_proc.c:128:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
<br>
\btl_tcp_proc.c] mca_base_modex_recv: failed with return value=-13
<br>
--------------------------------------------------------------------------
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
--------------------------------------------------------------------------
<br>
&nbsp;subtask rank = 1 out of 4
<br>
&nbsp;subtask rank = 2 out of 4
<br>
&nbsp;subtask rank = 0 out of 4
<br>
&nbsp;subtask rank = 3 out of 4
<br>
<p>scheduler: MPI_Comm_spawn completed
<br>
&nbsp;scheduler broadcasting function string length = 4
<br>
child: MPI_UNIVERSE_SIZE = 4
<br>
child: MPI_UNIVERSE_SIZE = 4
<br>
child: MPI_UNIVERSE_SIZE = 4
<br>
child: MPI_UNIVERSE_SIZE = 4
<br>
Proc0 wait for first broadcast
<br>
Proc1 wait for first broadcast
<br>
Proc2 wait for first broadcast
<br>
Proc3 wait for first broadcast
<br>
[sweet1:6800] *** An error occurred in MPI_Bcast
<br>
[sweet1:6800] *** on communicator
<br>
[sweet1:6800] *** MPI_ERR_INTERN: internal error
<br>
[sweet1:6800] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
[sweet1:02412] [[20141,0],0]-[[20141,1],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
<br>
[sweet1:02412] 4 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
<br>
[sweet1:02412] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: sweet1
<br>
PID:  524
<br>
<p>This process may still be running and/or consuming resources.
<br>
<p>--------------------------------------------------------------------------
<br>
[sweet1:02412] [[20141,0],0]-[[20141,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
<br>
[sweet1:02412] [[20141,0],0]-[[20141,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
<br>
[sweet1:02412] [[20141,0],0]-[[20141,2],2] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 488 on
<br>
node sweet1 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[sweet1:02412] 3 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
<br>
<p>C:\Users\cjr\Desktop\mpi_demo&gt;
<br>
<p>====================================================
<br>
<p>C:\Users\cjr\Desktop\mpi_demo&gt;mpi_scheduler.exe
<br>
&nbsp;scheduler: MPI_Init
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for btl_tcp_if_exclude.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: sweet1
<br>
&nbsp;&nbsp;Value:      127.0.0.1/8
<br>
&nbsp;&nbsp;Message:    Did not find interface matching this subnet
<br>
--------------------------------------------------------------------------
<br>
--&gt;MPI_COMM_WORLD size = 1
<br>
parent: MPI_UNIVERSE_SIZE = 1
<br>
scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
<br>
&nbsp;executor: MPI_Init
<br>
&nbsp;executor: MPI_Init
<br>
&nbsp;executor: MPI_Init
<br>
&nbsp;executor: MPI_Init
<br>
[sweet1:04400] 1 more process has sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
<br>
[sweet1:04400] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
&nbsp;subtask rank = 2 out of 4
<br>
&nbsp;subtask rank = 1 out of 4
<br>
&nbsp;subtask rank = 0 out of 4
<br>
&nbsp;subtask rank = 3 out of 4
<br>
<p>scheduler: MPI_Comm_spawn completed
<br>
&nbsp;scheduler broadcasting function string length = 4
<br>
<p>child: MPI_UNIVERSE_SIZE = 4
<br>
child: MPI_UNIVERSE_SIZE = 4
<br>
child: MPI_UNIVERSE_SIZE = 4
<br>
child: MPI_UNIVERSE_SIZE = 4
<br>
Proc0 wait for first broadcast
<br>
Proc1 wait for first broadcast
<br>
Proc2 wait for first broadcast
<br>
Proc3 wait for first broadcast
<br>
<p>[sweet1:04400] 3 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
<br>
<p>&lt;&lt;&lt;&lt;***mpi_executor.exe processes are running, but 'hung' while wating for first broadcast***&gt;&gt;&gt;&gt;
<br>
&lt;&lt;&lt;&lt;***manually killed one of the 'mpi_executor.exe' processes; others subsequently exited***&gt;&gt;&gt;&gt;
<br>
<p>[sweet1:04400] [[22257,0],0]-[[22257,2],3] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: sweet1
<br>
PID:  568
<br>
<p>This process may still be running and/or consuming resources.
<br>
<p>--------------------------------------------------------------------------
<br>
[sweet1:04400] [[22257,0],0]-[[22257,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
<br>
[sweet1:04400] [[22257,0],0]-[[22257,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
<br>
[sweet1:04400] 2 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
<br>
<p>C:\Users\cjr\Desktop\mpi_demo&gt;
<br>
<p>================================================
<br>
<p>The addition of the mpirun option &quot;-mca btl_tcp_if_exclude none&quot; eliminates the benign 127.0.0.1 warning; the option &quot;-mca btl_base_verbose 100&quot; adds output that verifies that the tcp, sm and self btl modules are successfully initialized - nothing else seems to be amiss!
<br>
I have also tested this with the firewall completely disabled on the Windows machine, with no change in behavior.
<br>
<p>I have been unable to determine what the error codes indicate, and am puzzled why the behavior is different when using the 'mpirun' launcher.
<br>
I have attached the prototype scheduler and executor program source code files, as well as files containing the Windows installation ompi information.
<br>
<p>Please help me figure out what is needed to enable this MPI communication.
<br>
<p>Thanks,
<br>
CJ Roth
<br>
<p>________________________________
<br>
<p>This email is intended solely for the recipient. It may contain privileged, proprietary or confidential information or material. If you are not the intended recipient, please delete this email and any attachments and notify the sender of the error.
<br>
<p><p>
<p>



<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29395/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29395/mpi_scheduler.cpp">mpi_scheduler.cpp</a>
</ul>
<!-- attachment="mpi_scheduler.cpp" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29395/mpi_executor.cpp">mpi_executor.cpp</a>
</ul>
<!-- attachment="mpi_executor.cpp" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29395/ompi_info-all.txt">ompi_info-all.txt</a>
</ul>
<!-- attachment="ompi_info-all.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29395/ompi_btl_info.txt">ompi_btl_info.txt</a>
</ul>
<!-- attachment="ompi_btl_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29394.php">Rob Latham: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
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
