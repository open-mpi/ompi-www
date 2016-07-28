<?
$subject_val = "Re: [OMPI users] Treatment of SIGHUP by mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 15:17:34 2010" -->
<!-- isoreceived="20100422191734" -->
<!-- sent="Thu, 22 Apr 2010 13:17:23 -0600" -->
<!-- isosent="20100422191723" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Treatment of SIGHUP by mpirun" -->
<!-- id="972057B2-D9CF-4DCA-AB41-24B2AF492C19_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD0A0D30200006B00049969_at_gwia2.beds.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Treatment of SIGHUP by mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 15:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12740.php">Arunkumar C R: "[OMPI users] program with MPI enabled subroutine"</a>
<li><strong>Previous message:</strong> <a href="12738.php">Jon Hitchcock: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>In reply to:</strong> <a href="12738.php">Jon Hitchcock: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like a bug - the processes should have died via SIGTERM, followed by SIGKILL. I know we had some problems in that regard, but I'm not sure if the fixes came into the 1.3.3 release or not.
<br>
<p>You might try updating to the 1.4.2rc1 tarball and see if that helps. I recently fixed a similar issue in the devel trunk, but that may not be related to this one as so much has changed in the devel area.
<br>
<p><p>On Apr 22, 2010, at 12:17 PM, Jon Hitchcock wrote:
<br>
<p><span class="quotelev1">&gt; &quot;mpirun -version&quot; says &quot;mpirun (Open MPI) 1.3.3&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; 22/04/2010 19:14:18 &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Which OMPI version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2010, at 12:04 PM, Jon Hitchcock wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If a user connects to a cluster using SSH, starts an MPI program which contains an infinite loop, and then breaks the SSH connection, the processes running the MPI program continue to run on the compute nodes and they have to be killed manually.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To investigate this, I found that if the user types Control-C (or sends SIGINT to mpirun), mpirun says &quot;killing job...&quot;, and on each compute node the orted process and the process running the MPI program are killed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However if SIGHUP is sent to mpirun, it says &quot;Hangup&quot; and exits, and on each compute node the orted process is killed but the process running the MPI program continues to run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is with Rocks 5.3 and Open MPI.  There is no batch scheduler.  The MPI program is just:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;       while (1) ;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have two questions.  Is this the behaviour I should expect?  Is there an easy way to kill the processes? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Jon Hitchcock
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12740.php">Arunkumar C R: "[OMPI users] program with MPI enabled subroutine"</a>
<li><strong>Previous message:</strong> <a href="12738.php">Jon Hitchcock: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>In reply to:</strong> <a href="12738.php">Jon Hitchcock: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
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
