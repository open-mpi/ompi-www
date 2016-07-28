<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 13:23:45 2011" -->
<!-- isoreceived="20110907172345" -->
<!-- sent="Wed, 7 Sep 2011 19:23:35 +0200" -->
<!-- isosent="20110907172335" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created by	mpirun?" -->
<!-- id="729D4270-BB0A-40E5-B1BB-A9373C4E3D95_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 13:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17312.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.09.2011 um 18:58 schrieb Blosch, Edwin L:
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
<p>you mean you change the group id of the user before you submit the job? In GridEngine you can specify whether the actual group id should be used for the job, or the default login id.
<br>
<p>Having a tight integration, also the slave processes will run with the same group id.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;  Ed
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17312.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
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
