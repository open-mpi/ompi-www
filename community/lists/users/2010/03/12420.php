<?
$subject_val = "Re: [OMPI users] Non-root install; hang there running on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 24 16:33:28 2010" -->
<!-- isoreceived="20100324203328" -->
<!-- sent="Wed, 24 Mar 2010 16:33:24 -0400" -->
<!-- isosent="20100324203324" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Non-root install; hang there running on multiple nodes" -->
<!-- id="EAB61388-DDAD-4D2B-974E-F69F9FE884EB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1bf2c0d.2c4.12791dcdb38.Coremail.haoanyi_at_163.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-24 16:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12421.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12419.php">haoanyi: "[OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12419.php">haoanyi: "[OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12421.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12421.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12422.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12423.php">Trent Creekmore: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you mpirun non-MPI applications, like &quot;hostname&quot;?  I frequently run this as a first step to debugging a wonky install.  For example:
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
<span class="quotelev1">&gt; I installed OpenMPI1.4.1 as a non-root user on a cluster. It is totally OK when I run with mpirun or mpiexec on one single node for many processes. However, when I lauch many processes on multiple nodes, I can observe jobs are distributed to those nodes (by using &quot;top&quot;), but all the jobs just hang there and cannot finish.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the nodes use TCP to communicate with each other. This cluster also provides MPICH2, which was configured by the sys admin., and has no problem to do node communication in MPICH2. Besides, I read from some posts, which says this may be caused by TCP firewall. Since I have no root's right, and I don't know what shall request the admin. to do to fix this problem. So, can you tell me how to do that either by the admin root or by the non-root user (if possible)?
</span><br>
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12421.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12419.php">haoanyi: "[OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12419.php">haoanyi: "[OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12421.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12421.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12422.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12423.php">Trent Creekmore: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
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
