<?
$subject_val = "Re: [OMPI users] Non-root install; hang there running on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 24 17:13:43 2010" -->
<!-- isoreceived="20100324211343" -->
<!-- sent="Wed, 24 Mar 2010 16:13:42 -0500" -->
<!-- isosent="20100324211342" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Non-root install; hang there running on multiple nodes" -->
<!-- id="COL117-DS25511C6EB681B3B7BA99C5E9250_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EAB61388-DDAD-4D2B-974E-F69F9FE884EB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Non-root install; hang there running on multiple nodes<br>
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-24 17:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12424.php">Artur Trojanowski: "[OMPI users] Question - OTF file"</a>
<li><strong>Previous message:</strong> <a href="12422.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may also want to check with the admin. I know on the system I use, he
<br>
will prevent you from using many nodes until you demonstrate you know what
<br>
you are doing. 
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Wednesday, March 24, 2010 3:33 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Non-root install; hang there running on multiple
<br>
nodes
<br>
<p>Can you mpirun non-MPI applications, like &quot;hostname&quot;?  I frequently run this
<br>
as a first step to debugging a wonky install.  For example:
<br>
<p>shell$ hostname
<br>
barney
<br>
shell$ mpirun hostname
<br>
barney
<br>
shell$ cat hosts
<br>
barney
<br>
rubble
<br>
shell$ mpirun --hostfile hosts hostname
<br>
barney
<br>
rubble
<br>
shell$
<br>
<p><p>On Mar 24, 2010, at 4:28 PM, haoanyi wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed OpenMPI1.4.1 as a non-root user on a cluster. It is totally OK
</span><br>
when I run with mpirun or mpiexec on one single node for many processes.
<br>
However, when I lauch many processes on multiple nodes, I can observe jobs
<br>
are distributed to those nodes (by using &quot;top&quot;), but all the jobs just hang
<br>
there and cannot finish.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the nodes use TCP to communicate with each other. This cluster
</span><br>
also provides MPICH2, which was configured by the sys admin., and has no
<br>
problem to do node communication in MPICH2. Besides, I read from some posts,
<br>
which says this may be caused by TCP firewall. Since I have no root's right,
<br>
and I don't know what shall request the admin. to do to fix this problem.
<br>
So, can you tell me how to do that either by the admin root or by the
<br>
non-root user (if possible)?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; Hao
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12424.php">Artur Trojanowski: "[OMPI users] Question - OTF file"</a>
<li><strong>Previous message:</strong> <a href="12422.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
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
