<?
$subject_val = "Re: [OMPI users] MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 21:47:43 2012" -->
<!-- isoreceived="20120829014743" -->
<!-- sent="Tue, 28 Aug 2012 18:47:37 -0700" -->
<!-- isosent="20120829014737" -->
<!-- name="Tony Raymond" -->
<!-- email="traymond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init" -->
<!-- id="C521977B031ADB40857D0FE9C98CC8270388D5E8B6_at_xchange4" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0120890-FF55-4BB1-8F66-14F45B426C0C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init<br>
<strong>From:</strong> Tony Raymond (<em>traymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 21:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20051.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20044.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Reply:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for taking care of this so quick!
<br>
<p>Does this mean that MPI_Init will leave the SIGCHLD handler alone? Should it be fine to set the handler as I did in the current version of MPI?
<br>
<p>Thanks,
<br>
Tony
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Tuesday, August 28, 2012 2:40 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_Init
<br>
<p>Okay, I fixed this on our trunk - I'll post it for transfer to the 1.7 and 1.6 series in their next releases.
<br>
<p>Thanks!
<br>
<p>On Aug 28, 2012, at 2:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oh crud - yes we do. Checking on it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2012, at 2:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Glancing at the code, I don't see anywhere that we trap SIGCHLD outside of mpirun and the orte daemons - certainly not inside an MPI app. What version of OMPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 28, 2012, at 2:06 PM, Tony Raymond &lt;traymond_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an application that uses openMPI and creates some child processes using fork(). I've been trying to catch SIGCHLD in order to check the exit status of these processes so that the program will exit if a child errors out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've found out that if I set the SIGCHLD handler before calling MPI_Init, MPI_Init sets the SIGCHLD handler so that my application appears to ignore SIGCHLD, but if I set my handler after MPI_Init, the application handles SIGCHLD appropriately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm wondering if there are any problems that could come up by changing the SIGCHLD handler, and why MPI_Init modifies the SIGCHLD handler in the first place.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tony
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
<span class="quotelev1">&gt;
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20051.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20044.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Reply:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
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
