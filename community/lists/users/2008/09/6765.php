<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 12:59:04 2008" -->
<!-- isoreceived="20080929165904" -->
<!-- sent="Mon, 29 Sep 2008 11:58:48 -0500" -->
<!-- isosent="20080929165848" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809291658.m8TGwv2N003481_at_despam-10.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="17705_1222706341_m8TGcxJO023933_F4DB86BF-B3C6-4630-B335-71 DE4A264B7E_at_cisco.com" -->
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
<strong>Date:</strong> 2008-09-29 12:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am the &quot;system admin&quot; here (so far so good on several servers over several years but this PBS thing appear to be daunting ;-)
<br>
<p>I suppose **run ... from *inside a Torque*** is to run things with a PBS script.  I thought &quot;qsub -l nodes=6:ppn=2 mpirun ...&quot; already bring things into a PBS environment context.
<br>
<p>Hope I don't have to take another school to get this to work ;-)
<br>
<p>Zhiliang
<br>
<p><p>At 12:38 PM 9/29/2008 -0400, you wrote:
<br>
<span class="quotelev1">&gt;On Sep 29, 2008, at 12:27 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;How you run that command line from *inside a Torque* job?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- I am only a poor biologist, reading through the manuals/tutorials  
</span><br>
<span class="quotelev2">&gt;&gt;but still don't have good clues... (thanks in advance ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ah, gotcha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm guessing that you're running OMPI outside of a Torque job, and  
</span><br>
<span class="quotelev1">&gt;that's why it's running entirely on a single machine (or on the  
</span><br>
<span class="quotelev1">&gt;machines where you listed in a hostfile).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You need to run your Open MPI job inside the Torque job that you  
</span><br>
<span class="quotelev1">&gt;submit; OMPI should then detect that it is inside a Torque job and  
</span><br>
<span class="quotelev1">&gt;automatically use the hosts that have been allocated by Torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You probably want to consult your local sysadmin / cluster admin to  
</span><br>
<span class="quotelev1">&gt;help you get Torque setup in your account, show you how to submit job  
</span><br>
<span class="quotelev1">&gt;scripts, etc. (the specific instructions for how to use Torque can  
</span><br>
<span class="quotelev1">&gt;vary from site to site and are a bit outside the scope of this list).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Good luck!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
