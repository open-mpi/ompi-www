<?
$subject_val = "Re: [OMPI users] General question about running single-node jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 14:08:27 2014" -->
<!-- isoreceived="20141002180827" -->
<!-- sent="Thu, 2 Oct 2014 11:08:22 -0700" -->
<!-- isosent="20141002180822" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General question about running single-node jobs." -->
<!-- id="00db01cfde6b$dab6e540$9024afc0$_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1DF3F62F-556A-4E81-BEED-07E0ECF56497_at_stanford.edu" -->
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
<strong>Date:</strong> 2014-10-02 14:08:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25427.php">Diego Avesani: "[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25423.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>&nbsp;
<br>
<p>I've been troubleshooting this issue and communicating with Blue Waters
<br>
support.  It turns out that Q-Chem and OpenMPI are both trying to open
<br>
sockets, and I get different error messages depending on which one fails.  
<br>
<p>&nbsp;
<br>
<p>As an aside, I don't know why Q-Chem needs sockets of its own to communicate
<br>
between ranks; shouldn't OpenMPI be taking care of all that?  (I'm
<br>
unfamiliar with this part of the Q-Chem code base, maybe it's trying to
<br>
duplicate some functionality?)
<br>
<p>&nbsp;
<br>
<p>The Blue Waters support has indicated that there's a problem with their
<br>
realm-specific IP addressing (RSIP) for the compute nodes, which they're
<br>
working on fixing.  I also tried running the same Q-Chem / OpenMPI job on a
<br>
management node which I think has the same hardware (but not the RSIP), and
<br>
the problem went away.  So I think I'll shelve this problem for now, until
<br>
Blue Waters support gets back to me with the fix. :)
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>-          Lee-Ping
<br>
<p>&nbsp;
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lee-Ping Wang
<br>
Sent: Tuesday, September 30, 2014 1:15 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] General question about running single-node jobs.
<br>
<p>&nbsp;
<br>
<p>Hi Ralph,
<br>
<p>&nbsp;
<br>
<p>Thanks.  I'll add some print statements to the code and try to figure out
<br>
precisely where the failure is happening.
<br>
<p>&nbsp;
<br>
<p>- Lee-Ping
<br>
<p>&nbsp;
<br>
<p>On Sep 30, 2014, at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>&nbsp;
<br>
<p>On Sep 30, 2014, at 11:19 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>Hi Ralph,
<br>
<p>&nbsp;
<br>
<p>&nbsp;If so, then I should be able to (1) locate where the port number is defined
<br>
in the code, and (2) randomize the port number every time it's called to
<br>
work around the issue.  What do you think?
<br>
<p>&nbsp;
<br>
<p>That might work, depending on the code. I'm not sure what it is trying to
<br>
connect to, and if that code knows how to handle arbitrary connections
<br>
<p>&nbsp;
<br>
<p>The main reason why Q-Chem is using MPI is for executing parallel tasks on a
<br>
single node.  Thus, I think it's just the MPI ranks attempting to connect
<br>
with each other on the same machine.  This could be off the mark because I'm
<br>
still a novice with respect to MPI concepts - but I am sure it is just one
<br>
machine.
<br>
<p>&nbsp;
<br>
<p>Your statement doesn't match what you sent us - you showed that it was your
<br>
connection code that was failing, not ours. You wouldn't have gotten that
<br>
far if our connections failed as you would have failed in MPI_Init. You are
<br>
clearly much further than that as you already passed an MPI_Barrier before
<br>
reaching the code in question.
<br>
<p><p><p><p><p>&nbsp;
<br>
<p>You might check about those warnings - could be that QCLOCALSCR and QCREF
<br>
need to be set for the code to work.
<br>
<p>&nbsp;
<br>
<p>Thanks; I don't think these environment variables are the issue but I will
<br>
check again.  The calculation runs without any problems on four different
<br>
clusters (where I don't set these environment variables either), it's only
<br>
broken on the Blue Waters compute node.  Also, the calculation runs without
<br>
any problems the first time it's executed on the BW compute node - it's only
<br>
subsequent executions that give the error messages.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>- Lee-Ping
<br>
<p>&nbsp;
<br>
<p>On Sep 30, 2014, at 11:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>&nbsp;
<br>
<p>On Sep 30, 2014, at 10:49 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>Hi Ralph,
<br>
<p>&nbsp;
<br>
<p>Thank you.  I think your diagnosis is probably correct.  Are these sockets
<br>
the same as TCP/UDP ports (though different numbers) that are used in web
<br>
servers, email etc?
<br>
<p>&nbsp;
<br>
<p>Yes
<br>
<p><p><p><p><p>&nbsp;If so, then I should be able to (1) locate where the port number is defined
<br>
in the code, and (2) randomize the port number every time it's called to
<br>
work around the issue.  What do you think?
<br>
<p>&nbsp;
<br>
<p>That might work, depending on the code. I'm not sure what it is trying to
<br>
connect to, and if that code knows how to handle arbitrary connections
<br>
<p>&nbsp;
<br>
<p>You might check about those warnings - could be that QCLOCALSCR and QCREF
<br>
need to be set for the code to work.
<br>
<p><p><p><p><p>&nbsp;
<br>
<p>- Lee-Ping
<br>
<p>&nbsp;
<br>
<p>On Sep 29, 2014, at 8:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>I don't know anything about your application, or what the functions in your
<br>
code are doing. I imagine it's possible that you are trying to open
<br>
statically defined ports, which means that running the job again too soon
<br>
could leave the OS thinking the socket is already busy. It takes awhile for
<br>
the OS to release a socket resource.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Sep 29, 2014, at 5:49 PM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>Here's another data point that might be useful: The error message is much
<br>
more rare if I run my application on 4 cores instead of 8.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>- Lee-Ping
<br>
<p>&nbsp;
<br>
<p>On Sep 29, 2014, at 5:38 PM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>Sorry for my last email - I think I spoke too quick.  I realized after
<br>
reading some more documentation that OpenMPI always uses TCP sockets for
<br>
out-of-band communication, so it doesn't make sense for me to set
<br>
OMPI_MCA_oob=^tcp.  That said, I am still running into a strange problem in
<br>
my application when running on a specific machine (Blue Waters compute
<br>
node); I don't see this problem on any other nodes.
<br>
<p>&nbsp;
<br>
<p>When I run the same job (~5 seconds) in rapid succession, I see the
<br>
following error message on the second execution:
<br>
<p>&nbsp;
<br>
<p>/tmp/leeping/opt/qchem-4.2/bin/parallel.csh,  , qcopt_reactants.in, 8, 0,
<br>
./qchem24825/
<br>
<p>MPIRUN in parallel.csh is
<br>
/tmp/leeping/opt/qchem-4.2/ext-libs/openmpi/bin/mpirun
<br>
<p>P4_RSHCOMMAND in parallel.csh is ssh
<br>
<p>QCOUTFILE is stdout
<br>
<p>Q-Chem machineFile is /tmp/leeping/opt/qchem-4.2/bin/mpi/machines
<br>
<p>[nid15081:24859] Warning: could not find environment variable &quot;QCLOCALSCR&quot;
<br>
<p>[nid15081:24859] Warning: could not find environment variable &quot;QCREF&quot;
<br>
<p>initial socket setup ...start
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
<p>mpirun detected that one or more processes exited with non-zero status, thus
<br>
causing
<br>
<p>the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;Process name: [[46773,1],0]
<br>
<p>&nbsp;&nbsp;Exit code:    255
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>And here's the source code where the program is exiting (before &quot;initial
<br>
socket setup ...done&quot;)
<br>
<p>&nbsp;
<br>
<p>int GPICommSoc::init(MPI_Comm comm0) {
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* setup basic MPI information */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;init_comm(comm0);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/*-- start inisock and set serveradd[] array --*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;initial socket setup ...start\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// create the initial socket 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;inisock = new_server_socket(NULL,0);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// fill and gather the serveraddr array
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int szsock = sizeof(SOCKADDR);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;serveraddr[0],0, szsock*nproc);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int iniport=get_sockport(inisock);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;set_sockaddr_byhname(NULL, iniport, &amp;serveraddr[me]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//printsockaddr( serveraddr[me] );
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;SOCKADDR addrsend = serveraddr[me];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgather(&amp;addrsend,szsock,MPI_BYTE,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;serveraddr[0], szsock,MPI_BYTE, comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;initial socket setup ...done \n&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);}
<br>
<p>&nbsp;
<br>
<p>I didn't write this part of the program and I'm really a novice to MPI - but
<br>
it seems like the initial execution of the program isn't freeing up some
<br>
system resource as it should.  Is there something that needs to be corrected
<br>
in the code?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>- Lee-Ping
<br>
<p>&nbsp;
<br>
<p>On Sep 29, 2014, at 5:12 PM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>Hi there,
<br>
<p>&nbsp;
<br>
<p>My application uses MPI to run parallel jobs on a single node, so I have no
<br>
need of any support for communication between nodes.  However, when I use
<br>
mpirun to launch my application I see strange errors such as:
<br>
<p>&nbsp;
<br>
<p>--------------------------------------------------------------------------
<br>
<p>No network interfaces were found for out-of-band communications. We require
<br>
<p>at least one available network for out-of-band messaging.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>[nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP socket
<br>
for out-of-band communications in file oob_tcp_listener.c at line 113
<br>
<p>[nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP socket
<br>
for out-of-band communications in file oob_tcp_component.c at line 584
<br>
<p>--------------------------------------------------------------------------
<br>
<p>It looks like orte_init failed for some reason; your parallel process is
<br>
<p>likely to abort.  There are many reasons that a parallel process can
<br>
<p>fail during orte_init; some of which are due to configuration or
<br>
<p>environment problems.  This failure appears to be an internal failure;
<br>
<p>here's some additional information (which may only be relevant to an
<br>
<p>Open MPI developer):
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;orte_oob_base_select failed
<br>
<p>&nbsp;&nbsp;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>/home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(+0xfeaa9)[0x2b7
<br>
7e9de5aa9]
<br>
<p>/home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(ompi_btl_openib
<br>
_connect_base_select_for_local_port+0xd0)[0x2b77e9de13a0]
<br>
<p>&nbsp;
<br>
<p>It seems like in each case, OpenMPI is trying to use some feature related to
<br>
networking and crashing as a result.  My workaround is to deduce the
<br>
components that are crashing and disable them in my environment variables
<br>
like this:
<br>
<p>&nbsp;
<br>
<p>export OMPI_MCA_btl=self,sm
<br>
<p>export OMPI_MCA_oob=^tcp
<br>
<p>&nbsp;
<br>
<p>Is there a better way to do this - i.e. explicitly prohibit OpenMPI from
<br>
using any network-related feature and run only on the local node?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>- Lee-Ping
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25410.php">http://www.open-mpi.org/community/lists/users/2014/09/25410.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25411.php">http://www.open-mpi.org/community/lists/users/2014/09/25411.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25412.php">http://www.open-mpi.org/community/lists/users/2014/09/25412.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25413.php">http://www.open-mpi.org/community/lists/users/2014/09/25413.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25419.php">http://www.open-mpi.org/community/lists/users/2014/09/25419.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25420.php">http://www.open-mpi.org/community/lists/users/2014/09/25420.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25421.php">http://www.open-mpi.org/community/lists/users/2014/09/25421.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25422.php">http://www.open-mpi.org/community/lists/users/2014/09/25422.php</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25427.php">Diego Avesani: "[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25423.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
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
