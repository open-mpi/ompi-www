<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 13:15:12 2011" -->
<!-- isoreceived="20110907171512" -->
<!-- sent="Wed, 7 Sep 2011 11:15:03 -0600" -->
<!-- isosent="20110907171503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created by	mpirun?" -->
<!-- id="89C10AD9-510D-4EDD-8B4C-0A2C449CE660_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275C8BF5B4_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can you set the gid of the processes created by	mpirun?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 13:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see - I'll try to devise a patch for you shortly.
<br>
<p><p>On Sep 7, 2011, at 10:58 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the reply.   I&#146;m using 1.4.2.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We have a job queueing system with a prioritization scheme where the priorities of jobs are in part a function of the group id.  This is why, for us, it is common that the initial mpirun command executes with a group other than the user&#146;s default group.   We also have some applications where each process writes data to disk, and the resulting collection of output files has mixed group permissions.  This creates problems --- mostly just inconvenience --- but I could imagine some security-conscious folks might be more concerned about it.   Also, if it&#146;s relevant, the OpenMPI we are using is built without support for the job-queueing system (our preference for various reasons).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain [mailto:rhc_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 07, 2011 8:53 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Sep 7, 2011, at 7:38 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpirun command is invoked when the user&#146;s group is &#145;set group&#146; to group 650.  When the rank 0 process creates files, they have group ownership 650.  But the user&#146;s login group is group 1040. The child processes that get started on other nodes run with group 1040, and the files they create have group ownership 1040.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a way to tell mpirun to start the child processes with the same uid and gid as the rank 0 process?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm afraid not - never came up before. Could be done, but probably not right away. What version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
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
