<?
$subject_val = "Re: [OMPI users] Error when calling MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 31 12:43:03 2011" -->
<!-- isoreceived="20111031164303" -->
<!-- sent="Mon, 31 Oct 2011 16:42:57 +0000" -->
<!-- isosent="20111031164257" -->
<!-- name="Weston, Stephen" -->
<!-- email="stephen.weston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when calling MPI_Init" -->
<!-- id="F07A5A8C4255D14FA860AD5452EE2C3B03E37B9F_at_x10-mbx7.yu.yale.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56D095A2-424A-4BCE-883B-FA560622E2F1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when calling MPI_Init<br>
<strong>From:</strong> Weston, Stephen (<em>stephen.weston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-31 12:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17660.php">Jeff Squyres: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17658.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17658.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17660.php">Jeff Squyres: "Re: [OMPI users] Error when calling MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Setting OMPI_MCA_mtl=^psm does work.  Thanks very much
<br>
for your help.
<br>
<p>- Steve
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Monday, October 31, 2011 12:33 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error when calling MPI_Init
<br>
<p>On Oct 31, 2011, at 10:27 AM, Weston, Stephen wrote:
<br>
<p><span class="quotelev1">&gt; I'm just running it directly from a shell.  That may sound crazy,
</span><br>
<span class="quotelev1">&gt; but my original problem was trying to install the Rmpi package,
</span><br>
<span class="quotelev1">&gt; which is the R interface to MPI.  The Rmpi package calls
</span><br>
<span class="quotelev1">&gt; MPI_Init when it is loaded, and the package is loaded when it
</span><br>
<span class="quotelev1">&gt; is installed, so the installation failed until I installed the package
</span><br>
<span class="quotelev1">&gt; using the mpirun command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But even after installing Rmpi, it is common for R users to run
</span><br>
<span class="quotelev1">&gt; Rmpi programs from an interactive R session using spawned
</span><br>
<span class="quotelev1">&gt; workers.  And in that case, they aren't using mpirun.
</span><br>
<p>It's okay so long as only one process is being run. Directly launching the MPI procs via rsh/ssh won't work, however, if there is more than one proc in the job.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A colleague who reads this list pointed out to me that the
</span><br>
<span class="quotelev1">&gt; problem is probably because the cluster that I'm using has
</span><br>
<span class="quotelev1">&gt; QLogic infiniband cards that apparently require
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_precondition_transports to be set.  That
</span><br>
<span class="quotelev1">&gt; may be the answer to my question.
</span><br>
<p>That was my next question :-)
<br>
<p>Your colleague is correct. Alternatively, you can tell OMPI to ignore the psm interface to those cards by either configuring it out (--without-psm) or at run time by setting the envar OMPI_MCA_mtl=^psm
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Steve
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, October 31, 2011 12:02 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error when calling MPI_Init
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are you running the job without mpirun? Is this under slurm or some other RM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2011, at 9:46 AM, Weston, Stephen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing an error on one of our clusters when executing the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init function in a program that is _not_ invoked using the
</span><br>
<span class="quotelev2">&gt;&gt; mpirun command.  The error is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Error obtaining unique transport key from ORTE
</span><br>
<span class="quotelev2">&gt;&gt;   (orte_precondition_transports not present in the environment).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; followed by &quot;It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev2">&gt;&gt; parallel process is likely to abort.&quot;, etc.  Since mpirun sets
</span><br>
<span class="quotelev2">&gt;&gt; this environment variable, it's not surprising that it isn't
</span><br>
<span class="quotelev2">&gt;&gt; set, but in our other Open MPI installations it doesn't seem
</span><br>
<span class="quotelev2">&gt;&gt; necessary for this environment variable to be set.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can work around the problem by setting the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OMPI_MCA_orte_precondition_transports&quot; environment variable
</span><br>
<span class="quotelev2">&gt;&gt; before running the program using the command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % eval &quot;export `mpirun env | grep OMPI_MCA_orte_precondition_transports`&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I'm very curious what is causing this error, since it only
</span><br>
<span class="quotelev2">&gt;&gt; happens on one of our clusters.  Could this indicate a problem
</span><br>
<span class="quotelev2">&gt;&gt; with the way we configured Open MPI when we installed it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any pointers on how to further investigate this issue would be
</span><br>
<span class="quotelev2">&gt;&gt; appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Steve Weston
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S.  I'm using Open MPI 1.4.3 on a Linux cluster using CentOS
</span><br>
<span class="quotelev2">&gt;&gt; release 5.5.  It happens in any MPI program that I execute
</span><br>
<span class="quotelev2">&gt;&gt; without mpirun.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17660.php">Jeff Squyres: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17658.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17658.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17660.php">Jeff Squyres: "Re: [OMPI users] Error when calling MPI_Init"</a>
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
