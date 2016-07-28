<?
$subject_val = "Re: [OMPI users] Issue running mpi program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 00:27:57 2014" -->
<!-- isoreceived="20140510042757" -->
<!-- sent="Fri, 9 May 2014 21:26:50 -0700" -->
<!-- isosent="20140510042650" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue running mpi program" -->
<!-- id="26E5B933-20EF-4AC4-A41C-0D8463F786D1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAERZHG8rU1rAgErnVdywLjOfomo6_e6BB=0kEiZXyr=3q8R8PQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue running mpi program<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 00:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24311.php">zack li: "[OMPI users] Issue running mpi program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....that is indeed odd. What version of OMPI are you using?
<br>
<p>You might try adding &quot;-mca plm rsh&quot; to your cmd line - this will ensure the launcher isn't trying to use srun under the covers. However, it shouldn't have built the slurm support if you specifically asked us not to do so.
<br>
<p><p>On May 7, 2014, at 9:31 PM, zack li &lt;lyzack89_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple MPI program on TACC Stampede system.  But, I have the following error: 
</span><br>
<span class="quotelev1">&gt; c445-203$ ../../ompi/install/bin/mpirun -np 2 -hostfile hosts ./simp
</span><br>
<span class="quotelev1">&gt; srun: cluster configuration lacks support for cpu bindingBut, I have 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My config flag is: 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$PWD/install --enable-static --disable-shared --without-slurm --without-ftb --disable-vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could anyone tell me what's the issue here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Zack
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
<li><strong>Next message:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24311.php">zack li: "[OMPI users] Issue running mpi program"</a>
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
