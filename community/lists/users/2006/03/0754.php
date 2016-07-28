<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 12:09:15 2006" -->
<!-- isoreceived="20060302170915" -->
<!-- sent="Thu, 02 Mar 2006 11:09:24 -0600" -->
<!-- isosent="20060302170924" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and distribution of slaves" -->
<!-- id="440726C4.3080105_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44071962.1050600_at_fujitsu.fr" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 12:09:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0755.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>In reply to:</strong> <a href="0752.php">Jean Latour: "[OMPI users] Spawn and distribution of slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Reply:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
as far as I know, Open MPI should follow the machinefile for spawn 
<br>
operations, starting however for every spawn at the beginning of the 
<br>
machinefile again. An info object such as 'lam_sched_round_robin' is 
<br>
currently not available/implemented. Let me look into this...
<br>
<p>Jean Latour wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing the MPI_Comm_Spawn function of Open MPI version 1.0.1, I have an 
</span><br>
<span class="quotelev1">&gt; example that works OK,
</span><br>
<span class="quotelev1">&gt; except that it shows that the spawned processes do not follow the 
</span><br>
<span class="quotelev1">&gt; &quot;machinefile&quot; setting of processors.
</span><br>
<span class="quotelev1">&gt; In this example a master process spawns first 2 processes, then 
</span><br>
<span class="quotelev1">&gt; disconnects from them and spawn 2 more
</span><br>
<span class="quotelev1">&gt; processes. Running on a Quad Opteron node, all processes are running on 
</span><br>
<span class="quotelev1">&gt; the same node, although the
</span><br>
<span class="quotelev1">&gt; machinefile specifies that the slaves should run on different nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the actual version of OpenMPI is it possible to direct the spawned 
</span><br>
<span class="quotelev1">&gt; processes on
</span><br>
<span class="quotelev1">&gt; a specific node ? (the node distribution could be given in the 
</span><br>
<span class="quotelev1">&gt; &quot;machinefile&quot; file, as with LAM MPI)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code (Fortran 90) of this example and makefile is attached as a tar 
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; Thank you very much
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jean Latour
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
<li><strong>Next message:</strong> <a href="0755.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>In reply to:</strong> <a href="0752.php">Jean Latour: "[OMPI users] Spawn and distribution of slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Reply:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
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
