<?
$subject_val = "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 11:15:38 2012" -->
<!-- isoreceived="20120821151538" -->
<!-- sent="Tue, 21 Aug 2012 17:15:46 +0200" -->
<!-- isosent="20120821151546" -->
<!-- name="Yann RADENAC" -->
<!-- email="Yann.Radenac_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Connection to lifeline lost&amp;quot; when developing a new rsh agent" -->
<!-- id="5033A622.4050902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E72AD76-5A64-4900-A9B8-D310CA650A7D_at_open-mpi.org" -->
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
<strong>From:</strong> Yann RADENAC (<em>Yann.Radenac_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 11:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19974.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Previous message:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19974.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Reply:</strong> <a href="19974.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/08/2012 15:56, Ralph Castain wrote :
<br>
<span class="quotelev1"> &gt; You might try adding &quot;-mca plm_base_verbose 5 --debug-daemons&quot; to 
</span><br>
watch the debug output from the daemons as they are launched.
<br>
<p>There seems to be an interference here: my problem is &quot;solved&quot; by 
<br>
enabling option --debug-daemons with a verbose level &gt; 0 !!
<br>
<p>This command fails (3 processes on 3 different machines):
<br>
<p>mpirun  --mca orte_rsh_agent xos-createProcess --leave-session-attached 
<br>
&nbsp;&nbsp;&nbsp;-np 3   -host `xreservation -a $XOS_RSVID` mpi/hello_world_MPI
<br>
<p><p>This command works !!!
<br>
(just adding the debug-daemons with verbose level &gt; 0) :
<br>
<p>mpirun  --mca orte_rsh_agent xos-createProcess --leave-session-attached 
<br>
&nbsp;&nbsp;-mca plm_base_verbose 5 --debug-daemons -np 3   -host `xreservation -a 
<br>
$XOS_RSVID` mpi/hello_world_MPI
<br>
<p><p>Anyway, this is just a workaround, and requiring the users to set the 
<br>
debug-daemons option is not acceptable.
<br>
<p>So what ssh is doing, and also the debug-daemons, that my agent 
<br>
xos-createProcess is not doing?
<br>
<p><p><p><span class="quotelev1">&gt; The lifeline is a socket connection between the daemons and mpirun. For some reason, the socket from your remote daemon back to mpirun is being closed, which the remote daemon interprets as &quot;lifeline lost&quot; and terminates itself. You could try setting the verbosity on the OOB to get the debug output from it (see &quot;ompi_info --param oob tcp&quot; for the settings), though it's likely to just tell you that the socket closed.
</span><br>
<p>By the way, no firewall is running on any of my machines.
<br>
<p>Using the oob_tcp options:
<br>
<p>mpirun  --mca orte_rsh_agent xos-createProcess --leave-session-attached 
<br>
&nbsp;&nbsp;-mca oob_tcp_debug 1 -mca oob_tcp_verbose 2 -np 3   -host 
<br>
`xreservation -a $XOS_RSVID` mpi/hello_world_MPI
<br>
<p><p>On the machine running the mpirun, the process is still waiting 
<br>
(polling) and standard error output is:
<br>
<p>[paradent-26.rennes.grid5000.fr:27762] [[1338,0],0]-[[1338,0],2] 
<br>
accepted: 172.16.97.26 - 172.16.97.6 nodelay 1 sndbuf 262142 rcvbuf 
<br>
262142 flags 00000802
<br>
[paradent-26.rennes.grid5000.fr:27762] [[1338,0],0]-[[1338,0],2] 
<br>
mca_oob_tcp_recv_handler: rejected connection from [[1338,0],2] 
<br>
connection state 4
<br>
<p><p><p>On the remote machine running the orted, orted fails and standard error 
<br>
output is:
<br>
<p>[paradent-6.rennes.grid5000.fr:10391] [[1338,0],2] routed:binomial: 
<br>
Connection to lifeline [[1338,0],0] lost
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19974.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Previous message:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19974.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Reply:</strong> <a href="19974.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
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
