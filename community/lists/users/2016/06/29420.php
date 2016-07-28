<?
$subject_val = "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 09:51:43 2016" -->
<!-- isoreceived="20160609135143" -->
<!-- sent="Thu, 9 Jun 2016 13:51:03 +0000" -->
<!-- isosent="20160609135103" -->
<!-- name="Roth, Christopher" -->
<!-- email="CRoth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows" -->
<!-- id="95110DC63CB062409084890E698980AD1D83D60C_at_VAW1PWINFMBXP1.veriskdom.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAkFZ5u8x5Hjk6Fjb3rVnKP5AyLGUMowQz+nES69yuVLhB6duw_at_mail.gmail.com" -->
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
<strong>From:</strong> Roth, Christopher (<em>CRoth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 09:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29421.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>Previous message:</strong> <a href="29419.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29418.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles:
<br>
OK, I had assumed MPI_Comm_spawn function was not a big stretch of the other basic capabilities.
<br>
The openmpi windows pre-compiled library was obtained from this very website:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/software/ompi/v1.6/downloads/OpenMPI_v1.6.2-2_win64.exe">https://www.open-mpi.org/software/ompi/v1.6/downloads/OpenMPI_v1.6.2-2_win64.exe</a>
<br>
Windows support was ended nearly 4 years ago, so bug reports are pointless.
<br>
<p>I will be looking into Cygwin as a possible solution.
<br>
It was originally developed under Linux (and runs great).
<br>
________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
<br>
Sent: Thursday, June 09, 2016 8:58 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
<br>
<p>Christopher,
<br>
<p>just to be clear, MPI_Comm_spawn is *not* a basic functionality.
<br>
also, it might work on older windows (xp for example)
<br>
<p>you might want to report thus issue to whoever provided this Open MPI pre-compiled library.
<br>
an other option is to use cygwin, it provides a fairly recent Open MPI and the maintainer is active.
<br>
<p>other options include Linux (you can even run it in a virtual machine) or OS X
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, June 9, 2016, Roth, Christopher &lt;CRoth_at_[hidden]&lt;mailto:CRoth_at_[hidden]&gt;&gt; wrote:
<br>
Thanks for the info, Gilles.
<br>
Being relatively new to MPI, I was not aware 'sm' did not work with intercommunicators - I had assumed it was an option if the others were not available.
<br>
<p>I am running as an admin on this test machine.  When adding the option '-mca btl_tcp_port_min_v4 2000', a higher port number is used, but that does not alter the program behavior at all.
<br>
<p>Given that the initial development was on Linux using OpenMpi v1.5, I would like to assume the Windows implementation would have mostly equivalent feature development, and then improved in v1.6.  Apparently that isn't true...
<br>
This is rather disappointing that a seemingly basic MPI communication functionality is broken like this under Windows, even if it is an older version.
<br>
Hacking on the Windows OpenMPI code is a rabbit hole that I do not want to go down for numerous reasons.
<br>
<p>I have briefly explored alternate Windows MPI libraries: the Windows version of MPICH (from Microsoft) has not implemented MPI_Comm_Spawn; Intel MPI has a licensing fee.  Do you any other alternatives to suggest?
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;UrlBlockedError.aspx&gt;] on behalf of Gilles Gouaillardet [gilles_at_[hidden]&lt;UrlBlockedError.aspx&gt;]
<br>
Sent: Wednesday, June 08, 2016 7:58 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
<br>
<p><p>Christopher,
<br>
<p><p>the sm btl does not work with inter communicators and hence disqualifies itself.
<br>
<p>i guess this is what you interpreted as 'partially working'
<br>
<p><p>i am surprised you are using a privileged port (260 &lt; 1024), are you running as an admin ?
<br>
<p><p>Open MPI is no more supported on windows, and the 1.6 series is pretty antique these days...
<br>
<p><p>regardless this, the source code points to
<br>
<p><p>static __inline int opal_get_socket_errno(void) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int ret = WSAGetLastError();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;switch (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case WSAEINTR: return EINTR;
<br>
...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default: printf(&quot;Feature not implemented: %d %s\n&quot;, __LINE__, __FILE__); return OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
}
<br>
<p><p>at first, it is worth printing (ret) if the feature is not implemented.
<br>
<p>then you can hack this part and add the missing case
<br>
<p>recent windows (7) might use a newer one that was not available on older ones (xp)
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p><p>On 6/9/2016 1:51 AM, Roth, Christopher wrote:
<br>
Well, that obvious error message states the basic problem - I was hoping you had noticed a detail in the ompi_info output that would point to a reason for it.
<br>
<p>Further test runs with the option '-mca btl tcp,self' (excluding 'sm' from the mix) and '-mca btl_base_verbose 100', supply some more information:
<br>
------
<br>
[sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
<br>
[sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
<br>
------
<br>
The ip address is the host machine's.  The process ID corresponds to the first of the executor programs.  The programs now hang at that point (within the scheduler's MPI_Comm_spawn call and the executors' MPI_Init calls), and and have to be manually killed.
<br>
<p>Yet another test, adding the '-mca mpi_preconnect_mpi 1' (along with the other two added arguments), gives more info:
<br>
------
<br>
[sweet1:04976] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
<br>
[sweet1:04516] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
<br>
[sweet1:03824] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
<br>
[sweet1][[17613,2],1][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_endpoint.c:486:..\..\..\openmpi-1.6.2\ompi\mca\btl
<br>
\tcp\btl_tcp_endpoint.c] received unexpected process identifier [[17613,2],0]
<br>
[sweet1][[17613,2],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_frag.c:215:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
<br>
\btl_tcp_frag.c] Feature not implemented: 130 D:/temp/OpenMPI/openmpi-1.6.2/opal/include\opal/opal_socket_errno.h
<br>
Feature not implemented: 130 D:/temp/OpenMPI/openmpi-1.6.2/opal/include\opal/opal_socket_errno.h
<br>
mca_btl_tcp_frag_recv: readv failed: Unknown error (-1)
<br>
------
<br>
With the 'preconnect' option, it sets up the TCP link for all of the executor processes, but then runs into an actual error, regarding some function not implemented.  This option is not required, but I had to give it a whirl.
<br>
<p>All of these test runs have the same behavior when performed with and without the firewall active.
<br>
<p>The fact that the executor programs don't get past the MPI_Init call when the 'sm' is excluded from btl set , implies that the 'sm' is at least partially working.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;UrlBlockedError.aspx&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;UrlBlockedError.aspx&gt;]
<br>
Sent: Wednesday, June 08, 2016 10:47 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
<br>
<p><p>On Jun 8, 2016, at 4:30 AM, Roth, Christopher &lt;CRoth_at_[hidden]&lt;UrlBlockedError.aspx&gt;&gt; wrote:
<br>
<p>What part of this output indicates this non-communicative configuration?
<br>
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
&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;
<br>
<p>Both procs are on the same host. Since they cannot communicate, it means that (a) the shared memory component (sm) was unable to be used, and (b) the TCP subsystem did not provide a usable address for the two procs to reach each other. The former could mean that there wasn&#146;t enough room in the tmp directory, and the latter indicates that the TCP subsystem isn&#146;t configured to allow connections from its own local IP address.
<br>
<p>I don&#146;t know anything about Windows configuration I&#146;m afraid.
<br>
<p><p>Please recall, this is using the precompiled OpenMpi Windows installation
<br>
<p>When the 'verbose' option is added, I see this sequence of output for the scheduler and each of the executor processes:
<br>
------
<br>
[sweet1:06412] mca: base: components_open: Looking for btl components
<br>
[sweet1:06412] mca: base: components_open: opening btl components
<br>
[sweet1:06412] mca: base: components_open: found loaded component tcp
<br>
[sweet1:06412] mca: base: components_open: component tcp register function successful
<br>
[sweet1:06412] mca: base: components_open: component tcp open function successful
<br>
[sweet1:06412] mca: base: components_open: found loaded component sm
<br>
[sweet1:06412] mca: base: components_open: component sm has no register function
<br>
[sweet1:06412] mca: base: components_open: component sm open function successful
<br>
[sweet1:06412] mca: base: components_open: found loaded component self
<br>
[sweet1:06412] mca: base: components_open: component self has no register function
<br>
[sweet1:06412] mca: base: components_open: component self open function successful
<br>
[sweet1:06412] select: initializing btl component tcp
<br>
[sweet1:06412] select: init of component tcp returned success
<br>
[sweet1:06412] select: initializing btl component sm
<br>
[sweet1:06412] select: init of component sm returned success
<br>
[sweet1:06412] select: initializing btl component self
<br>
[sweet1:06412] select: init of component self returned success
<br>
-------
<br>
<p>This output appears to show the btl components for TCP, SM and Self are all available, but this is contradicted the error message shown in the initial post  (&quot;At least one pair of MPI processes are unable to reach each other for MPI communications....&quot;)
<br>
<p>If there is some sort of misconfiguration present, do you have a suggestion for correcting the situation?
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;UrlBlockedError.aspx&gt;] on behalf of Ralph Castain [&lt;UrlBlockedError.aspx&gt;rhc_at_[hidden]&lt;UrlBlockedError.aspx&gt;]
<br>
Sent: Tuesday, June 07, 2016 3:39 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
<br>
<p>Just looking at this output, it would appear that Windows is configured in a way that prevents the procs from connecting to each other via TCP while on the same node, and shared memory is disqualifying itself - which leaves no way for two procs on the same node to communicate.
<br>
<p><p>On Jun 7, 2016, at 12:16 PM, Roth, Christopher &lt;&lt;UrlBlockedError.aspx&gt;CRoth_at_[hidden]&lt;UrlBlockedError.aspx&gt;&gt; wrote:
<br>
<p>I have developed a set of C++ MPI programs for performing a series of scientific calculations.  The master 'scheduler' program spawns off sets of parallelized 'executor' programs using the MPI_Comm_spawn routine; these executors communicate back and forth with the scheduler (only small amounts of information) via MPI_Bcast, MPI_Recv and MPI_Send routines (the 'C' library versions).
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
&nbsp;&nbsp;Value:      127.0.0.1/8&lt;<a href="http://127.0.0.1/8">http://127.0.0.1/8</a>&gt;
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
&nbsp;&nbsp;Value:      127.0.0.1/8&lt;<a href="http://127.0.0.1/8">http://127.0.0.1/8</a>&gt;
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
&lt;mpi_scheduler.cpp&gt;&lt;mpi_executor.cpp&gt;&lt;ompi_info-all.txt&gt;&lt;ompi_btl_info.txt&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;UrlBlockedError.aspx&gt;
<br>
Subscription: &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;UrlBlockedError.aspx&gt;
<br>
Subscription: &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a>
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;UrlBlockedError.aspx&gt;
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29412.php">http://www.open-mpi.org/community/lists/users/2016/06/29412.php</a>
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29420/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29421.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>Previous message:</strong> <a href="29419.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29418.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
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
