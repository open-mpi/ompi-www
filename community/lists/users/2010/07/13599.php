<?
$subject_val = "Re: [OMPI users] Dynamic process tutorials?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 14:31:40 2010" -->
<!-- isoreceived="20100712183140" -->
<!-- sent="Mon, 12 Jul 2010 12:31:29 -0600" -->
<!-- isosent="20100712183129" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic process tutorials?" -->
<!-- id="DE57BF48-5D29-4FA1-8807-4FE6FDA215E8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinbkTeAuqvaxQAtcgHF_ClCe-yZLoh5kGU6S8jQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 14:31:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13600.php">Trent Creekmore: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13598.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13595.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2010, at 11:12 AM, Brian Budge wrote:
<br>
<p><span class="quotelev1">&gt; HI Ralph -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply.  I think this patch sounds great!  The idea in
</span><br>
<span class="quotelev1">&gt; our software is that it won't be known until after the program is
</span><br>
<span class="quotelev1">&gt; running whether or not MPI is needed, so it would be best if the
</span><br>
<span class="quotelev1">&gt; communication initialization could be done programmatically instead of
</span><br>
<span class="quotelev1">&gt; through an external program like mpirun.  Is there a plan for this to
</span><br>
<span class="quotelev1">&gt; enter the mainline?
</span><br>
<p>Yes, but I'm not sure exactly what release. Will let you know when that gets decided.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 12, 2010 at 8:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2010, at 9:07 AM, Brian Budge wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jody -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the reply.  is there a way of &quot;fusing&quot; intercommunicators?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's say I have a higher level node scheduler, and it makes a new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node available to a COMM that is already running.  So the master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawns another process for that node.  How can the new process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate with the other already started processes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They can connect/accept via ompi-server - checkout &quot;man ompi-server&quot;. You can also have them all rendezvous at a common mpirun if you prefer by using the appropriate mca param to give the required contact info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, how can you specify with MPI_Comm_spawn/multiple() how do you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify IP addresses on which to start the processes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Look at &quot;man MPI_Comm_spawn&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If my higher level node scheduler needs to take away a process from my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMM, is it good/bad for that node to call MPI_Finalize as it exits?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The entire job will automatically abort if it fails to call Finalize as this is considered an abnormal termination event.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would prefer not to use any of the MPI command-line utilities
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mpirun/mpiexec) if that's possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not possible at the moment. I have provided a patch to another user on this list that made it possible to use ompi-server as a rendezvous point for singletons, but that isn't in any formal release yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Jul 10, 2010 at 11:53 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When you spawn processes with MPI_Comm_spawn(), one of the arguments
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be set to an intercommunicator of thes spawner and the spawnees.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can use this intercommunicator as the communicator argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the MPI_functions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jul 9, 2010 at 5:56 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've been looking at the dynamic process features of mpi-2.  I have managed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to actually launch processes using spawn, but haven't seen examples for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; actually communicating once these processes are launched.  I am additionally
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interested in how processes created through multiple spawn calls can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicate.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anyone know of resources that describe these topics?  My google-fu must
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not be up to par :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Brian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13600.php">Trent Creekmore: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13598.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13595.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
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
