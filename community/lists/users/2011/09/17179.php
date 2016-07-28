<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 22:04:46 2011" -->
<!-- isoreceived="20110908020446" -->
<!-- sent="Wed, 7 Sep 2011 21:04:27 -0500" -->
<!-- isosent="20110908020427" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created by mpirun?" -->
<!-- id="001a01cc6dcb$a3c09e00$eb41da00$_at_net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="729D4270-BB0A-40E5-B1BB-A9373C4E3D95_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can you set the gid of the processes created by mpirun?<br>
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 22:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17180.php">bhimesh akula: "[OMPI users] query regarding Open fabrics connections"</a>
<li><strong>Previous message:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17181.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17181.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Typically it is something like 'qsub -W group_list=groupB &lt;other options&gt;
<br>
myjob.sh'. Ultimately myjob.sh runs with gid groupB on some host in the
<br>
cluster.  When that script reaches the mpirun command, then mpirun and the
<br>
processes started on the same host all run with gid groupB, but any of the
<br>
spawned processes that start on other hosts run with the user's default
<br>
group, say groupA.
<br>
<p>It did occur to me that the launching technique might have some ability to
<br>
influence this behavior as you indicated. I don't know what launcher is
<br>
being used in our cases, I guess it's rsh/ssh.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Reuti
<br>
Sent: Wednesday, September 07, 2011 12:24 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Can you set the gid of the processes created by
<br>
mpirun?
<br>
<p>Hi,
<br>
<p>you mean you change the group id of the user before you submit the job? In
<br>
GridEngine you can specify whether the actual group id should be used for
<br>
the job, or the default login id.
<br>
<p>Having a tight integration, also the slave processes will run with the same
<br>
group id.
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
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can you set the gid of the processes created by
</span><br>
mpirun?
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Sep 7, 2011, at 7:38 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpirun command is invoked when the user's group is 'set group' to
</span><br>
group 650.  When the rank 0 process creates files, they have group ownership
<br>
650.  But the user's login group is group 1040. The child processes that get
<br>
started on other nodes run with group 1040, and the files they create have
<br>
group ownership 1040.
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a way to tell mpirun to start the child processes with the same
</span><br>
uid and gid as the rank 0 process?
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm afraid not - never came up before. Could be done, but probably not
</span><br>
right away. What version are you using?
<br>
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
<li><strong>Next message:</strong> <a href="17180.php">bhimesh akula: "[OMPI users] query regarding Open fabrics connections"</a>
<li><strong>Previous message:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17181.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17181.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
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
