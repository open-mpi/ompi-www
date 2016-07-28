<?
$subject_val = "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 15:12:56 2016" -->
<!-- isoreceived="20160208201256" -->
<!-- sent="Mon, 8 Feb 2016 12:12:52 -0800" -->
<!-- isosent="20160208201252" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with OpenMPI and Univa Grid Engine" -->
<!-- id="47F5F6C0-4A08-42C5-B943-177BA0D518E6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAO-5B6RmCrTLSCFcUWEv+Yc1UAhWUBCMBwPusZ23EGaXf2Ba0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with OpenMPI and Univa Grid Engine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 15:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28467.php">Rahul Pisharody: "[OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="28467.php">Rahul Pisharody: "[OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is your OMPI installed on an NFS partition? If so, is it in the same mount point on all nodes?
<br>
<p>Most likely problem is that the required libraries were not found on the remote node
<br>
<p><span class="quotelev1">&gt; On Feb 8, 2016, at 10:45 AM, Rahul Pisharody &lt;rpisharody_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to get a simple program (print the hostname of the executing machine) compiled with openmpi run across multiple machines on Univa Grid Engine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This particular configuration has many of the ports blocked. My run command has the mca options necessary to limit the ports to the known open ports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, when I launch the program with mpirun, I get the following error messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +++++++++++++
</span><br>
<span class="quotelev1">&gt; error: executing task of job 23 failed: execution daemon on host &quot;&lt;machine&gt;&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 10126) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; error: executing task of job 23 failed: execution daemon on host &quot;machine&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've set the LD_LIBRARY_PATH and I've verified that path points to the necessary shared libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea/suggestion as to what is happening here will be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28467.php">http://www.open-mpi.org/community/lists/users/2016/02/28467.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28467.php">Rahul Pisharody: "[OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="28467.php">Rahul Pisharody: "[OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
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
