<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 19:39:33 2006" -->
<!-- isoreceived="20060420233933" -->
<!-- sent="Thu, 20 Apr 2006 19:37:21 -0400" -->
<!-- isosent="20060420233721" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SLURM configuration ?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7086B9_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI and SLURM configuration ?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 19:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Previous message:</strong> <a href="1106.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Maybe in reply to:</strong> <a href="1100.php">&#209;&#238;&#191;&#198;: "[OMPI users] OpenMPI and SLURM configuration ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, the location of $HOME should not matter.
<br>
<p>What happens if you &quot;mpirun -np 2 uptime&quot;?  (i.e., use mpirun to launch
<br>
a non-MPI application)
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of ??
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 20, 2006 10:17 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI and SLURM configuration ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Do you really have a shared /tmp on your cluster ? We do not 
</span><br>
<span class="quotelev1">&gt; copy the  
</span><br>
<span class="quotelev2">&gt; &gt;file on the nodes, they have to be on a shared file system, or at  
</span><br>
<span class="quotelev2">&gt; &gt;least they have to exist on the same place on all the nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No,but I put a copy of cpi in the /tmp directory on each node.
</span><br>
<span class="quotelev1">&gt; Because I wonder that put the executables under HOME 
</span><br>
<span class="quotelev1">&gt; direcotry(which differs)
</span><br>
<span class="quotelev1">&gt; might have some trouble.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Previous message:</strong> <a href="1106.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Maybe in reply to:</strong> <a href="1100.php">&#209;&#238;&#191;&#198;: "[OMPI users] OpenMPI and SLURM configuration ?"</a>
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
