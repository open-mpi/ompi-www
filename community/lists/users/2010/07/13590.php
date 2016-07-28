<?
$subject_val = "Re: [OMPI users] Dynamic process tutorials?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 11:08:02 2010" -->
<!-- isoreceived="20100712150802" -->
<!-- sent="Mon, 12 Jul 2010 08:07:53 -0700" -->
<!-- isosent="20100712150753" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic process tutorials?" -->
<!-- id="AANLkTimxEBBvdg2tMs8sYfnZgkDta8N8wd3BdA9YcK5X_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimDmnCFVSYc4J4QybpOivySJ5yVuucrnHOJXJt5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic process tutorials?<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 11:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13589.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13579.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13593.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody -
<br>
<p>Thanks for the reply.  is there a way of &quot;fusing&quot; intercommunicators?
<br>
Let's say I have a higher level node scheduler, and it makes a new
<br>
node available to a COMM that is already running.  So the master
<br>
spawns another process for that node.  How can the new process
<br>
communicate with the other already started processes?
<br>
<p>Also, how can you specify with MPI_Comm_spawn/multiple() how do you
<br>
specify IP addresses on which to start the processes?
<br>
<p>If my higher level node scheduler needs to take away a process from my
<br>
COMM, is it good/bad for that node to call MPI_Finalize as it exits?
<br>
<p>I would prefer not to use any of the MPI command-line utilities
<br>
(mpirun/mpiexec) if that's possible.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p>On Sat, Jul 10, 2010 at 11:53 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Brian
</span><br>
<span class="quotelev1">&gt; When you spawn processes with MPI_Comm_spawn(), one of the arguments
</span><br>
<span class="quotelev1">&gt; will be set to an intercommunicator of thes spawner and the spawnees.
</span><br>
<span class="quotelev1">&gt; You can use this intercommunicator as the communicator argument
</span><br>
<span class="quotelev1">&gt; in the MPI_functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 9, 2010 at 5:56 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been looking at the dynamic process features of mpi-2.&#160; I have managed
</span><br>
<span class="quotelev2">&gt;&gt; to actually launch processes using spawn, but haven't seen examples for
</span><br>
<span class="quotelev2">&gt;&gt; actually communicating once these processes are launched.&#160; I am additionally
</span><br>
<span class="quotelev2">&gt;&gt; interested in how processes created through multiple spawn calls can
</span><br>
<span class="quotelev2">&gt;&gt; communicate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know of resources that describe these topics?&#160; My google-fu must
</span><br>
<span class="quotelev2">&gt;&gt; not be up to par :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13589.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13579.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13593.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
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
