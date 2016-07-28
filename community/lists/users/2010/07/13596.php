<?
$subject_val = "Re: [OMPI users] Dynamic process tutorials?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 13:16:59 2010" -->
<!-- isoreceived="20100712171659" -->
<!-- sent="Mon, 12 Jul 2010 10:16:54 -0700" -->
<!-- isosent="20100712171654" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic process tutorials?" -->
<!-- id="AANLkTikEJIdg40veksfc9P4KlH8YT0Ke0L1_YaHStz4P_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTilzi8aYwzDMK6ntaNxQnw3khDBsZ639xLTwsMr1_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-12 13:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13595.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13593.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody -
<br>
<p>I have successfully run mpi programs on my machine without mpirun, but
<br>
I guess where this breaks down is on multiple machines?  Because the
<br>
ompi-server that Ralph mentioned is never started?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p>On Mon, Jul 12, 2010 at 8:32 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally it is possible to create new communicators from existing ones
</span><br>
<span class="quotelev1">&gt; (see for instance the various MPI_GROUP_* functions and MPI_COMM_CREATE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, how can you specify with MPI_Comm_spawn/multiple() how do you
</span><br>
<span class="quotelev2">&gt;&gt; specify IP addresses on which to start the processes?
</span><br>
<span class="quotelev1">&gt; I haven't tried it yet with spawning, but i'd think this would also be
</span><br>
<span class="quotelev1">&gt; done by a rankfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would prefer not to use any of the MPI command-line utilities
</span><br>
<span class="quotelev2">&gt;&gt; (mpirun/mpiexec) if that's possible.
</span><br>
<span class="quotelev1">&gt; If you don't like command-line utilities, you can write some graphic tool
</span><br>
<span class="quotelev1">&gt; which will call mpirun or mpiexec. But somewhere you have to tell OpenMPI
</span><br>
<span class="quotelev1">&gt; what to run on how many processors etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd suggest you take a look at the &quot;MPI-The Complete Reference&quot; Vol I and II
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 12, 2010 at 5:07 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply. &#160;is there a way of &quot;fusing&quot; intercommunicators?
</span><br>
<span class="quotelev2">&gt;&gt; Let's say I have a higher level node scheduler, and it makes a new
</span><br>
<span class="quotelev2">&gt;&gt; node available to a COMM that is already running. &#160;So the master
</span><br>
<span class="quotelev2">&gt;&gt; spawns another process for that node. &#160;How can the new process
</span><br>
<span class="quotelev2">&gt;&gt; communicate with the other already started processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, how can you specify with MPI_Comm_spawn/multiple() how do you
</span><br>
<span class="quotelev2">&gt;&gt; specify IP addresses on which to start the processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If my higher level node scheduler needs to take away a process from my
</span><br>
<span class="quotelev2">&gt;&gt; COMM, is it good/bad for that node to call MPI_Finalize as it exits?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would prefer not to use any of the MPI command-line utilities
</span><br>
<span class="quotelev2">&gt;&gt; (mpirun/mpiexec) if that's possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jul 10, 2010 at 11:53 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When you spawn processes with MPI_Comm_spawn(), one of the arguments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be set to an intercommunicator of thes spawner and the spawnees.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can use this intercommunicator as the communicator argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the MPI_functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jul 9, 2010 at 5:56 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've been looking at the dynamic process features of mpi-2.&#160; I have managed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to actually launch processes using spawn, but haven't seen examples for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actually communicating once these processes are launched.&#160; I am additionally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interested in how processes created through multiple spawn calls can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone know of resources that describe these topics?&#160; My google-fu must
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not be up to par :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13595.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13593.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
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
