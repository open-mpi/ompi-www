<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 12:27:56 2008" -->
<!-- isoreceived="20080929162756" -->
<!-- sent="Mon, 29 Sep 2008 11:27:41 -0500" -->
<!-- isosent="20080929162741" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809291627.m8TGRmxd023553_at_despam-11.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22576_1222703352_m8TFn8wB024921_BD4E4429-86D4-465A-993D-71 F35DC36B23_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub - mpirun problem<br>
<strong>From:</strong> Zhiliang Hu (<em>zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 12:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6761.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How you run that command line from *inside a Torque* job?
<br>
<p>-- I am only a poor biologist, reading through the manuals/tutorials but still don't have good clues... (thanks in advance ;-)
<br>
<p>Zhiliang
<br>
<p><p>At 11:48 AM 9/29/2008 -0400, you wrote:
<br>
<span class="quotelev1">&gt;We need to see that command line from *inside a Torque* job.  That's  
</span><br>
<span class="quotelev1">&gt;the only place where those PBS_* environment variables will exists --  
</span><br>
<span class="quotelev1">&gt;OMPI's mpirun should be seeing these environment variables (when  
</span><br>
<span class="quotelev1">&gt;inside a Torque job) and then reacting to them by using the Torque  
</span><br>
<span class="quotelev1">&gt;native launcher, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Just to be sure: you are launching OMPI's &quot;mpirun&quot; inside your Torque  
</span><br>
<span class="quotelev1">&gt;job, correct?
</span><br>
<p>As shown in my original post, I tried to (1) send a mpirun job without torque that it works; (2) submit it with 'qsub' but end up with things on one node.
<br>
<p><p><span class="quotelev1">&gt;On Sep 29, 2008, at 11:41 AM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;At 11:29 AM 9/29/2008 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Sep 28, 2008, at 10:07 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Indeed as you expected, &quot;printenv | grep PBS&quot; produced nothing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Are you *sure*?  I find it very hard to believe that if you run that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;command ***in a Torque job*** that you will get no output.  Torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt;would have to be *seriously* misbehaving for that to occur.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;That's a command line without a torque job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Zhiliang
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6761.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
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
