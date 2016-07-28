<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 12:38:37 2008" -->
<!-- isoreceived="20080929163837" -->
<!-- sent="Mon, 29 Sep 2008 12:38:28 -0400" -->
<!-- isosent="20080929163828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="F4DB86BF-B3C6-4630-B335-71DE4A264B7E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 12:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2008, at 12:27 PM, Zhiliang Hu wrote:
<br>
<p><span class="quotelev1">&gt; How you run that command line from *inside a Torque* job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- I am only a poor biologist, reading through the manuals/tutorials  
</span><br>
<span class="quotelev1">&gt; but still don't have good clues... (thanks in advance ;-)
</span><br>
<p>Ah, gotcha.
<br>
<p>I'm guessing that you're running OMPI outside of a Torque job, and  
<br>
that's why it's running entirely on a single machine (or on the  
<br>
machines where you listed in a hostfile).
<br>
<p>You need to run your Open MPI job inside the Torque job that you  
<br>
submit; OMPI should then detect that it is inside a Torque job and  
<br>
automatically use the hosts that have been allocated by Torque.
<br>
<p>You probably want to consult your local sysadmin / cluster admin to  
<br>
help you get Torque setup in your account, show you how to submit job  
<br>
scripts, etc. (the specific instructions for how to use Torque can  
<br>
vary from site to site and are a bit outside the scope of this list).
<br>
<p>Good luck!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6764.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
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
