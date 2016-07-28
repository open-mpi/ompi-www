<?
$subject_val = "Re: [OMPI users] Error when calling MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 31 12:02:46 2011" -->
<!-- isoreceived="20111031160246" -->
<!-- sent="Mon, 31 Oct 2011 10:02:37 -0600" -->
<!-- isosent="20111031160237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when calling MPI_Init" -->
<!-- id="C1224B58-0586-4718-843F-9A25F421BC7E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F07A5A8C4255D14FA860AD5452EE2C3B03E36B2B_at_x10-mbx7.yu.yale.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-31 12:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17657.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17655.php">Weston, Stephen: "[OMPI users] Error when calling MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17655.php">Weston, Stephen: "[OMPI users] Error when calling MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17657.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Reply:</strong> <a href="17657.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How are you running the job without mpirun? Is this under slurm or some other RM?
<br>
<p><p>On Oct 31, 2011, at 9:46 AM, Weston, Stephen wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing an error on one of our clusters when executing the
</span><br>
<span class="quotelev1">&gt; MPI_Init function in a program that is _not_ invoked using the
</span><br>
<span class="quotelev1">&gt; mpirun command.  The error is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Error obtaining unique transport key from ORTE
</span><br>
<span class="quotelev1">&gt;    (orte_precondition_transports not present in the environment).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; followed by &quot;It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev1">&gt; parallel process is likely to abort.&quot;, etc.  Since mpirun sets
</span><br>
<span class="quotelev1">&gt; this environment variable, it's not surprising that it isn't
</span><br>
<span class="quotelev1">&gt; set, but in our other Open MPI installations it doesn't seem
</span><br>
<span class="quotelev1">&gt; necessary for this environment variable to be set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can work around the problem by setting the
</span><br>
<span class="quotelev1">&gt; &quot;OMPI_MCA_orte_precondition_transports&quot; environment variable
</span><br>
<span class="quotelev1">&gt; before running the program using the command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  % eval &quot;export `mpirun env | grep OMPI_MCA_orte_precondition_transports`&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I'm very curious what is causing this error, since it only
</span><br>
<span class="quotelev1">&gt; happens on one of our clusters.  Could this indicate a problem
</span><br>
<span class="quotelev1">&gt; with the way we configured Open MPI when we installed it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any pointers on how to further investigate this issue would be
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Steve Weston
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.  I'm using Open MPI 1.4.3 on a Linux cluster using CentOS
</span><br>
<span class="quotelev1">&gt; release 5.5.  It happens in any MPI program that I execute
</span><br>
<span class="quotelev1">&gt; without mpirun.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="17657.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17655.php">Weston, Stephen: "[OMPI users] Error when calling MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17655.php">Weston, Stephen: "[OMPI users] Error when calling MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17657.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Reply:</strong> <a href="17657.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
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
