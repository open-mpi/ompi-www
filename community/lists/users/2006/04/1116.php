<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 01:15:52 2006" -->
<!-- isoreceived="20060421051552" -->
<!-- sent="Fri, 21 Apr 2006 01:15:39 -0400" -->
<!-- isosent="20060421051539" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SLURM Confiuration ?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF708705_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI and SLURM Confiuration ?" -->
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
<strong>Date:</strong> 2006-04-21 01:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Previous message:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1114.php">semper: "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is your SLURM job running out of time and SLURM is killing you?  You
<br>
might want to ask for more than whatever default time you are given. 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of semper
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 21, 2006 12:25 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI and SLURM Confiuration ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I think that you need to install Open MPI into other machine as well.
</span><br>
<span class="quotelev2">&gt; &gt;You might want to setup NSF (network file system) for the 
</span><br>
<span class="quotelev1">&gt; master (you are
</span><br>
<span class="quotelev2">&gt; &gt;saying your local machine) so that your slave nodes could see your
</span><br>
<span class="quotelev2">&gt; &gt;mpi executable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bash line 1: orted : command not found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;This error might go away if you install Open MPI into all machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,Sang Chul.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I consulted the system administrator,and NFS is already UP. 
</span><br>
<span class="quotelev1">&gt; Yet disk0-4 all are
</span><br>
<span class="quotelev1">&gt; located under /home directory,that is to say ,they can be 
</span><br>
<span class="quotelev1">&gt; accessed by user semper
</span><br>
<span class="quotelev1">&gt; on each node.  So I add to mpirun &quot;--prefix 
</span><br>
<span class="quotelev1">&gt; /home/disk0/semper/openmpi&quot; option
</span><br>
<span class="quotelev1">&gt; which absolutely can be found by each node. this time it works!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However when I type &quot;mpirun -np 3 --hostfile hostfile --prefix 
</span><br>
<span class="quotelev1">&gt; /home/disk0/semper/openmpi hostname -s&quot; after &quot;srun -N 3 -A&quot;, 
</span><br>
<span class="quotelev1">&gt; there goes 3
</span><br>
<span class="quotelev1">&gt; results, and then hang. &quot;squeue&quot; shows that job is completed 
</span><br>
<span class="quotelev1">&gt; but not removed from
</span><br>
<span class="quotelev1">&gt; job queue. what does that say?
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
<li><strong>Next message:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Previous message:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1114.php">semper: "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
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
