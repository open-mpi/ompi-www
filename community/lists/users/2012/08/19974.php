<?
$subject_val = "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 12:41:14 2012" -->
<!-- isoreceived="20120821164114" -->
<!-- sent="Tue, 21 Aug 2012 09:41:07 -0700" -->
<!-- isosent="20120821164107" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Connection to lifeline lost&amp;quot; when developing a new rsh agent" -->
<!-- id="58357FBF-BEEA-4022-B222-6348C68D59A8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5033A622.4050902_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 12:41:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19975.php">Maginot Junior: "[OMPI users] Measuring latency"</a>
<li><strong>Previous message:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>In reply to:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you looked thru the code in orte/mca/plm/rsh/plm_rsh_module.c? It is executing a tree-like spawn pattern by default, but there isn't anything magic about what ssh is doing. However, there are things done to prep the remote shell (setting paths etc.), and the tree spawn passes some additional parameters. It would be worth your while to read thru it to see if just replacing ssh is going to be enough for your environment.
<br>
<p>The OOB output is telling you that the connection is being attempted, but being rejected for some reason during the return &quot;ACK&quot;. Not sure why that would be happening, unless the remote daemon died during the connection handshake.
<br>
<p>--debug-daemons doesn't do anything but (a) turn on the debug output, and (b) cause ssh to leave the session open by telling the orted not to &quot;daemonize&quot; itself. The --leave-session-attached option does (b) without all the debug output.
<br>
<p><p>On Aug 21, 2012, at 8:15 AM, Yann RADENAC &lt;Yann.Radenac_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 20/08/2012 15:56, Ralph Castain wrote :
</span><br>
<span class="quotelev2">&gt; &gt; You might try adding &quot;-mca plm_base_verbose 5 --debug-daemons&quot; to watch the debug output from the daemons as they are launched.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There seems to be an interference here: my problem is &quot;solved&quot; by enabling option --debug-daemons with a verbose level &gt; 0 !!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This command fails (3 processes on 3 different machines):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  --mca orte_rsh_agent xos-createProcess --leave-session-attached   -np 3   -host `xreservation -a $XOS_RSVID` mpi/hello_world_MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This command works !!!
</span><br>
<span class="quotelev1">&gt; (just adding the debug-daemons with verbose level &gt; 0) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  --mca orte_rsh_agent xos-createProcess --leave-session-attached  -mca plm_base_verbose 5 --debug-daemons -np 3   -host `xreservation -a $XOS_RSVID` mpi/hello_world_MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, this is just a workaround, and requiring the users to set the debug-daemons option is not acceptable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what ssh is doing, and also the debug-daemons, that my agent xos-createProcess is not doing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The lifeline is a socket connection between the daemons and mpirun. For some reason, the socket from your remote daemon back to mpirun is being closed, which the remote daemon interprets as &quot;lifeline lost&quot; and terminates itself. You could try setting the verbosity on the OOB to get the debug output from it (see &quot;ompi_info --param oob tcp&quot; for the settings), though it's likely to just tell you that the socket closed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, no firewall is running on any of my machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the oob_tcp options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  --mca orte_rsh_agent xos-createProcess --leave-session-attached  -mca oob_tcp_debug 1 -mca oob_tcp_verbose 2 -np 3   -host `xreservation -a $XOS_RSVID` mpi/hello_world_MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the machine running the mpirun, the process is still waiting (polling) and standard error output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [paradent-26.rennes.grid5000.fr:27762] [[1338,0],0]-[[1338,0],2] accepted: 172.16.97.26 - 172.16.97.6 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [paradent-26.rennes.grid5000.fr:27762] [[1338,0],0]-[[1338,0],2] mca_oob_tcp_recv_handler: rejected connection from [[1338,0],2] connection state 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the remote machine running the orted, orted fails and standard error output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [paradent-6.rennes.grid5000.fr:10391] [[1338,0],2] routed:binomial: Connection to lifeline [[1338,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19975.php">Maginot Junior: "[OMPI users] Measuring latency"</a>
<li><strong>Previous message:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>In reply to:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
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
