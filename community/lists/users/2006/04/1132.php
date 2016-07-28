<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 07:20:10 2006" -->
<!-- isoreceived="20060425112010" -->
<!-- sent="Tue, 25 Apr 2006 07:20:00 -0400" -->
<!-- isosent="20060425112000" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checking the cluster status withMPI_Comm_spawn_multiple" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF709042_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Checking the cluster status withMPI_Comm_spawn_multiple" -->
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
<strong>Date:</strong> 2006-04-25 07:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1133.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1131.php">Javier Fernandez Baldomero: "[OMPI users] help with mpirun problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're not doing anything wrong; it's just that Open MPI doesn't [yet]
<br>
handle failures well.  It will probably *eventually* respond with a
<br>
timeout (and therefore fail).
<br>
<p>You might want to run a real resource manager to manage your cluster,
<br>
such as SLURM, Torque, or one of a bunch of commercial solutions.  These
<br>
applications typically have some kind of daemon running on each node and
<br>
get fairly good notifications when nodes go down, etc.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of 
</span><br>
<span class="quotelev1">&gt; Laurent.POREZ_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 25, 2006 4:58 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Checking the cluster status 
</span><br>
<span class="quotelev1">&gt; withMPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before starting programs on my cluster, I want to check on 
</span><br>
<span class="quotelev1">&gt; every CPU if it is up and able to run MPI applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For this, I use a kind of 'ping' program that just send a 
</span><br>
<span class="quotelev1">&gt; message saying 'I'm OK' tu a superviser program.
</span><br>
<span class="quotelev1">&gt; The 'ping' program is sent by the superviser on each CPU by 
</span><br>
<span class="quotelev1">&gt; the MPI_Comm_spawn_multiple command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works fine when every CPU is up, but when one is down, my 
</span><br>
<span class="quotelev1">&gt; superviser stops when calling the MPI_Comm_spawn_multiple command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the questions are : 
</span><br>
<span class="quotelev1">&gt; * 'What am I doing wrong ?'
</span><br>
<span class="quotelev1">&gt; * 'Is there a other way to check my CPUs ?'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Laurent.
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
<li><strong>Next message:</strong> <a href="1133.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1131.php">Javier Fernandez Baldomero: "[OMPI users] help with mpirun problem"</a>
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
