<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 12:55:15 2008" -->
<!-- isoreceived="20080929165515" -->
<!-- sent="Mon, 29 Sep 2008 18:55:04 +0200" -->
<!-- isosent="20080929165504" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="04150996-1DF4-439E-AB65-A6DC37B9B2F0_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809291627.m8TGRmxd023553_at_despam-11.iastate.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 12:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 29.09.2008 um 18:27 schrieb Zhiliang Hu:
<br>
<p><span class="quotelev1">&gt; How you run that command line from *inside a Torque* job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- I am only a poor biologist, reading through the manuals/ 
</span><br>
<span class="quotelev1">&gt; tutorials but still don't have good clues... (thanks in advance ;-)
</span><br>
<p>What is the content of your jobscript? Did you request more than one  
<br>
node for your job?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Zhiliang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 11:48 AM 9/29/2008 -0400, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We need to see that command line from *inside a Torque* job.  That's
</span><br>
<span class="quotelev2">&gt;&gt; the only place where those PBS_* environment variables will exists --
</span><br>
<span class="quotelev2">&gt;&gt; OMPI's mpirun should be seeing these environment variables (when
</span><br>
<span class="quotelev2">&gt;&gt; inside a Torque job) and then reacting to them by using the Torque
</span><br>
<span class="quotelev2">&gt;&gt; native launcher, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to be sure: you are launching OMPI's &quot;mpirun&quot; inside your Torque
</span><br>
<span class="quotelev2">&gt;&gt; job, correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As shown in my original post, I tried to (1) send a mpirun job  
</span><br>
<span class="quotelev1">&gt; without torque that it works; (2) submit it with 'qsub' but end up  
</span><br>
<span class="quotelev1">&gt; with things on one node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2008, at 11:41 AM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At 11:29 AM 9/29/2008 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 28, 2008, at 10:07 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Indeed as you expected, &quot;printenv | grep PBS&quot; produced nothing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you *sure*?  I find it very hard to believe that if you run  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command ***in a Torque job*** that you will get no output.  Torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would have to be *seriously* misbehaving for that to occur.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's a command line without a torque job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zhiliang
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
<li><strong>Next message:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6763.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
