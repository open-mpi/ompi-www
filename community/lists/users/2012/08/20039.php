<?
$subject_val = "Re: [OMPI users] MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 17:23:48 2012" -->
<!-- isoreceived="20120828212348" -->
<!-- sent="Tue, 28 Aug 2012 14:23:40 -0700" -->
<!-- isosent="20120828212340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init" -->
<!-- id="AD338FDC-D9AE-49B5-8104-7192846C4AB0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9CE85F8D-3641-4EA4-926B-49AC8AC58FF1_at_bcgsc.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 17:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20038.php">Tony Raymond: "[OMPI users] MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="20038.php">Tony Raymond: "[OMPI users] MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Reply:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glancing at the code, I don't see anywhere that we trap SIGCHLD outside of mpirun and the orte daemons - certainly not inside an MPI app. What version of OMPI are you using?
<br>
<p>On Aug 28, 2012, at 2:06 PM, Tony Raymond &lt;traymond_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an application that uses openMPI and creates some child processes using fork(). I've been trying to catch SIGCHLD in order to check the exit status of these processes so that the program will exit if a child errors out. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've found out that if I set the SIGCHLD handler before calling MPI_Init, MPI_Init sets the SIGCHLD handler so that my application appears to ignore SIGCHLD, but if I set my handler after MPI_Init, the application handles SIGCHLD appropriately. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm wondering if there are any problems that could come up by changing the SIGCHLD handler, and why MPI_Init modifies the SIGCHLD handler in the first place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tony
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
<li><strong>Next message:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20038.php">Tony Raymond: "[OMPI users] MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="20038.php">Tony Raymond: "[OMPI users] MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Reply:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
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
