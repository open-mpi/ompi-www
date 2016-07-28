<?
$subject_val = "Re: [OMPI users] Dynamic process tutorials?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 11:32:23 2010" -->
<!-- isoreceived="20100712153223" -->
<!-- sent="Mon, 12 Jul 2010 17:32:18 +0200" -->
<!-- isosent="20100712153218" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic process tutorials?" -->
<!-- id="AANLkTilzi8aYwzDMK6ntaNxQnw3khDBsZ639xLTwsMr1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimxEBBvdg2tMs8sYfnZgkDta8N8wd3BdA9YcK5X_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 11:32:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13594.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13596.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13596.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian
<br>
<p>Generally it is possible to create new communicators from existing ones
<br>
(see for instance the various MPI_GROUP_* functions and MPI_COMM_CREATE)
<br>
<p><span class="quotelev1">&gt; Also, how can you specify with MPI_Comm_spawn/multiple() how do you
</span><br>
<span class="quotelev1">&gt; specify IP addresses on which to start the processes?
</span><br>
I haven't tried it yet with spawning, but i'd think this would also be
<br>
done by a rankfile
<br>
<p><span class="quotelev1">&gt; I would prefer not to use any of the MPI command-line utilities
</span><br>
<span class="quotelev1">&gt; (mpirun/mpiexec) if that's possible.
</span><br>
If you don't like command-line utilities, you can write some graphic tool
<br>
which will call mpirun or mpiexec. But somewhere you have to tell OpenMPI
<br>
what to run on how many processors etc.
<br>
<p>I'd suggest you take a look at the &quot;MPI-The Complete Reference&quot; Vol I and II
<br>
<p>Jody
<br>
<p>On Mon, Jul 12, 2010 at 5:07 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Jody -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. &#160;is there a way of &quot;fusing&quot; intercommunicators?
</span><br>
<span class="quotelev1">&gt; Let's say I have a higher level node scheduler, and it makes a new
</span><br>
<span class="quotelev1">&gt; node available to a COMM that is already running. &#160;So the master
</span><br>
<span class="quotelev1">&gt; spawns another process for that node. &#160;How can the new process
</span><br>
<span class="quotelev1">&gt; communicate with the other already started processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, how can you specify with MPI_Comm_spawn/multiple() how do you
</span><br>
<span class="quotelev1">&gt; specify IP addresses on which to start the processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If my higher level node scheduler needs to take away a process from my
</span><br>
<span class="quotelev1">&gt; COMM, is it good/bad for that node to call MPI_Finalize as it exits?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would prefer not to use any of the MPI command-line utilities
</span><br>
<span class="quotelev1">&gt; (mpirun/mpiexec) if that's possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &#160;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 10, 2010 at 11:53 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brian
</span><br>
<span class="quotelev2">&gt;&gt; When you spawn processes with MPI_Comm_spawn(), one of the arguments
</span><br>
<span class="quotelev2">&gt;&gt; will be set to an intercommunicator of thes spawner and the spawnees.
</span><br>
<span class="quotelev2">&gt;&gt; You can use this intercommunicator as the communicator argument
</span><br>
<span class="quotelev2">&gt;&gt; in the MPI_functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jul 9, 2010 at 5:56 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been looking at the dynamic process features of mpi-2.&#160; I have managed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to actually launch processes using spawn, but haven't seen examples for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually communicating once these processes are launched.&#160; I am additionally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interested in how processes created through multiple spawn calls can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know of resources that describe these topics?&#160; My google-fu must
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not be up to par :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="13594.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13596.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13596.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
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
