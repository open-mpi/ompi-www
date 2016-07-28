<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 11:48:18 2008" -->
<!-- isoreceived="20080929154818" -->
<!-- sent="Mon, 29 Sep 2008 11:48:11 -0400" -->
<!-- isosent="20080929154811" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="BD4E4429-86D4-465A-993D-71F35DC36B23_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809291541.m8TFfQiH010787_at_despam-11.iastate.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 11:48:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6760.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We need to see that command line from *inside a Torque* job.  That's  
<br>
the only place where those PBS_* environment variables will exists --  
<br>
OMPI's mpirun should be seeing these environment variables (when  
<br>
inside a Torque job) and then reacting to them by using the Torque  
<br>
native launcher, etc.
<br>
<p>Just to be sure: you are launching OMPI's &quot;mpirun&quot; inside your Torque  
<br>
job, correct?
<br>
<p><p><p>On Sep 29, 2008, at 11:41 AM, Zhiliang Hu wrote:
<br>
<p><span class="quotelev1">&gt; At 11:29 AM 9/29/2008 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 28, 2008, at 10:07 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed as you expected, &quot;printenv | grep PBS&quot; produced nothing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you *sure*?  I find it very hard to believe that if you run that
</span><br>
<span class="quotelev2">&gt;&gt; command ***in a Torque job*** that you will get no output.  Torque
</span><br>
<span class="quotelev2">&gt;&gt; would have to be *seriously* misbehaving for that to occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a command line without a torque job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhiliang
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6760.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
