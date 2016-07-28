<?
$subject_val = "Re: [OMPI users] 1.5.3 and SGE integration?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 11:52:48 2011" -->
<!-- isoreceived="20110321155248" -->
<!-- sent="Mon, 21 Mar 2011 09:52:37 -0600" -->
<!-- isosent="20110321155237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.5.3 and SGE integration?" -->
<!-- id="A064505D-009F-495D-B2C3-D83F403F16D0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87bp14scf0.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.5.3 and SGE integration?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 11:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15933.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Reply:</strong> <a href="15933.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just looking at this for another question. Yes, SGE integration is broken in 1.5. Looking at how to fix now.
<br>
<p>Meantime, you can get it work by adding &quot;-mca plm ^rshd&quot; to your mpirun cmd line.
<br>
<p><p>On Mar 21, 2011, at 9:47 AM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Terry Dontje &lt;terry.dontje_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dave what version of Grid Engine are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6.2u5, plus irrelevant patches.  It's fine with ompi 1.4.  (All I did to
</span><br>
<span class="quotelev1">&gt; switch was to load the 1.5.3 modules environment.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The plm checks for the following env-var's to determine if you are
</span><br>
<span class="quotelev2">&gt;&gt; running Grid Engine.
</span><br>
<span class="quotelev2">&gt;&gt; SGE_ROOT
</span><br>
<span class="quotelev2">&gt;&gt; ARC
</span><br>
<span class="quotelev2">&gt;&gt; PE_HOSTFILE
</span><br>
<span class="quotelev2">&gt;&gt; JOB_ID
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If these are not there during the session that mpirun is executed then
</span><br>
<span class="quotelev2">&gt;&gt; it will resort to ssh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure.  What ras_gridengine_debug reported looked correct.  I'll try to
</span><br>
<span class="quotelev1">&gt; debug it.  At least I stand a reasonable chance with grid engine issues.
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
<li><strong>Next message:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15933.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Reply:</strong> <a href="15933.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
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
