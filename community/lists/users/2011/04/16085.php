<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 16:58:01 2011" -->
<!-- isoreceived="20110403205801" -->
<!-- sent="Sun, 3 Apr 2011 14:57:52 -0600" -->
<!-- isosent="20110403205752" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="F74CA951-419F-4D23-BA04-9C6AE3910D53_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=i-GmJU-tjJGdUz-UQTA5KXOwfUw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/pbsdsh/Torque problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 16:57:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16084.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16084.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16087.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16087.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16088.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2011, at 2:00 PM, Laurence Marks wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not using that computer. A scenario that I have come across is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that when a msub job is killed because it has exceeded it's Walltime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi tasks spawned by ssh may not be terminated because (so I am told)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Torque does not know about them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not true with OMPI. Torque will kill mpirun, which will in turn cause all MPI procs to die. Yes, it's true that Torque won't know about the MPI procs itself. However, OMPI is designed such that termination of mpirun by the resource manager will cause all apps to die.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does Torque on NodeA know that an mpi launched on NodeB by ssh
</span><br>
<span class="quotelev1">&gt; should be killed?
</span><br>
<p>Torque works at the job level. So if you get an interactive Torque session, Torque can only kill your session - which means it automatically kills everything started within that session, regardless of where it resides.
<br>
<p>Perhaps you don't fully understand how Torque works? As a brief recap, Torque allocates the requested number of nodes. On one of the nodes, it starts a &quot;sister mom&quot; that is responsible for that job. It also wires Torque daemons on each of the other nodes to the &quot;sister mom&quot; to create, in effect, a virtual machine.
<br>
<p>When the Torque session is completed, the &quot;sister mom&quot; notifies all the other Torque daemons in the VM that the session shall be terminated. At that time, all local procs belonging to that session are terminated. It doesn't matter how those procs got there - by ssh, mpirun, whatever. They -all- are killed.
<br>
<p>What Torque cannot do is kill the actual mpi processes started by mpirun. See below.
<br>
<p><span class="quotelev1">&gt; OMPI is designed (from what I can see) for all
</span><br>
<span class="quotelev1">&gt; mpirun to be started from the same node, not distributed mpi launched
</span><br>
<span class="quotelev1">&gt; independently from multiple nodes.
</span><br>
<p>Remember, mpirun launches its own set of daemons on each node. Each daemon then locally spawns its set of mpi processes. So mpirun knows where everything is and can kill it.
<br>
<p>To further ensure cleanup, each daemon monitors mpirun's existence. So Torque only knows about mpirun, and Torque kills mpirun when (e.g.) walltime is reached. OMPI's daemons see that mpirun has died and terminate their local processes prior to terminating themselves.
<br>
<p>Torque cannot directly kill the mpi processes because it has no knowledge of their existence and relationship to the job session. Instead, since Torque knows about the ssh that started mpirun (since you executed it interactively), it kills the ssh - which causes mpirun to die, which then causes the mpi apps to die.
<br>
<p><p><span class="quotelev1">&gt; I am not certain that killing the
</span><br>
<span class="quotelev1">&gt; ssh on NodeA will in fact terminate a mpi launched on NodeB (i.e. by
</span><br>
<span class="quotelev1">&gt; ssh NodeB mpirun AAA...) with OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It most certainly will! That mpirun on nodeB is executing under the ssh from nodeA, so when that ssh session is killed, it automatically kills everything run underneath it. And when mpirun dies, so does the job it was running, as per above.
<br>
<p>You can prove this to yourself rather easily. Just ssh to a remote node and execute any command that lingers for awhile - say something simple like &quot;sleep&quot;. Then kill the ssh and do a &quot;ps&quot; on the remote node. I guarantee that the command will have died.
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16084.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16084.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16087.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16087.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16088.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
