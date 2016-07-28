<?
$subject_val = "Re: [OMPI users] General question about running single-node jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 20:49:32 2014" -->
<!-- isoreceived="20140930004932" -->
<!-- sent="Mon, 29 Sep 2014 17:49:30 -0700" -->
<!-- isosent="20140930004930" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General question about running single-node jobs." -->
<!-- id="57783F66-3EDD-42AC-B6F1-AFA48AF9534B_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FB87A06E-D4B5-426E-8EC2-4FB7938B5C6B_at_stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] General question about running single-node jobs.<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 20:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25413.php">Ralph Castain: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25413.php">Ralph Castain: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25413.php">Ralph Castain: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's another data point that might be useful: The error message is much more rare if I run my application on 4 cores instead of 8.
<br>
<p>Thanks,
<br>
<p>- Lee-Ping
<br>
<p>On Sep 29, 2014, at 5:38 PM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for my last email - I think I spoke too quick.  I realized after reading some more documentation that OpenMPI always uses TCP sockets for out-of-band communication, so it doesn't make sense for me to set OMPI_MCA_oob=^tcp.  That said, I am still running into a strange problem in my application when running on a specific machine (Blue Waters compute node); I don't see this problem on any other nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run the same job (~5 seconds) in rapid succession, I see the following error message on the second execution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/leeping/opt/qchem-4.2/bin/parallel.csh,  , qcopt_reactants.in, 8, 0, ./qchem24825/
</span><br>
<span class="quotelev1">&gt; MPIRUN in parallel.csh is /tmp/leeping/opt/qchem-4.2/ext-libs/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt; P4_RSHCOMMAND in parallel.csh is ssh
</span><br>
<span class="quotelev1">&gt; QCOUTFILE is stdout
</span><br>
<span class="quotelev1">&gt; Q-Chem machineFile is /tmp/leeping/opt/qchem-4.2/bin/mpi/machines
</span><br>
<span class="quotelev1">&gt; [nid15081:24859] Warning: could not find environment variable &quot;QCLOCALSCR&quot;
</span><br>
<span class="quotelev1">&gt; [nid15081:24859] Warning: could not find environment variable &quot;QCREF&quot;
</span><br>
<span class="quotelev1">&gt; initial socket setup ...start
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process name: [[46773,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    255
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here's the source code where the program is exiting (before &quot;initial socket setup ...done&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int GPICommSoc::init(MPI_Comm comm0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* setup basic MPI information */
</span><br>
<span class="quotelev1">&gt;     init_comm(comm0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(comm);
</span><br>
<span class="quotelev1">&gt;     /*-- start inisock and set serveradd[] array --*/
</span><br>
<span class="quotelev1">&gt;     if (me == 0) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stdout,&quot;initial socket setup ...start\n&quot;);
</span><br>
<span class="quotelev1">&gt;         fflush(stdout);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     // create the initial socket 
</span><br>
<span class="quotelev1">&gt;     inisock = new_server_socket(NULL,0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     // fill and gather the serveraddr array
</span><br>
<span class="quotelev1">&gt;     int szsock = sizeof(SOCKADDR);
</span><br>
<span class="quotelev1">&gt;     memset(&amp;serveraddr[0],0, szsock*nproc);
</span><br>
<span class="quotelev1">&gt;     int iniport=get_sockport(inisock);
</span><br>
<span class="quotelev1">&gt;     set_sockaddr_byhname(NULL, iniport, &amp;serveraddr[me]);
</span><br>
<span class="quotelev1">&gt;     //printsockaddr( serveraddr[me] );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     SOCKADDR addrsend = serveraddr[me];
</span><br>
<span class="quotelev1">&gt;     MPI_Allgather(&amp;addrsend,szsock,MPI_BYTE,
</span><br>
<span class="quotelev1">&gt;                   &amp;serveraddr[0], szsock,MPI_BYTE, comm);
</span><br>
<span class="quotelev1">&gt;     if (me == 0) {
</span><br>
<span class="quotelev1">&gt;        fprintf(stdout,&quot;initial socket setup ...done \n&quot;
</span><br>
<span class="quotelev1">&gt;     );
</span><br>
<span class="quotelev1">&gt;     fflush(stdout);}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't write this part of the program and I'm really a novice to MPI - but it seems like the initial execution of the program isn't freeing up some system resource as it should.  Is there something that needs to be corrected in the code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 5:12 PM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My application uses MPI to run parallel jobs on a single node, so I have no need of any support for communication between nodes.  However, when I use mpirun to launch my application I see strange errors such as:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev2">&gt;&gt; at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP socket for out-of-band communications in file oob_tcp_listener.c at line 113
</span><br>
<span class="quotelev2">&gt;&gt; [nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP socket for out-of-band communications in file oob_tcp_component.c at line 584
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   orte_oob_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(+0xfeaa9)[0x2b77e9de5aa9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xd0)[0x2b77e9de13a0]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems like in each case, OpenMPI is trying to use some feature related to networking and crashing as a result.  My workaround is to deduce the components that are crashing and disable them in my environment variables like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl=self,sm
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_oob=^tcp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a better way to do this - i.e. explicitly prohibit OpenMPI from using any network-related feature and run only on the local node?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25410.php">http://www.open-mpi.org/community/lists/users/2014/09/25410.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25411.php">http://www.open-mpi.org/community/lists/users/2014/09/25411.php</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25413.php">Ralph Castain: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25413.php">Ralph Castain: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25413.php">Ralph Castain: "Re: [OMPI users] General question about running single-node jobs."</a>
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
