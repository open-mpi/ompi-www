<?
$subject_val = "Re: [OMPI users] How does OpenMPI's progress engine determine progress?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 17:30:01 2012" -->
<!-- isoreceived="20120702213001" -->
<!-- sent="Mon, 2 Jul 2012 17:29:56 -0400" -->
<!-- isosent="20120702212956" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does OpenMPI's progress engine determine progress?" -->
<!-- id="F2538B28-C4A4-409F-83D1-2C678AC94EDA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1340891332.92632.YahooMailNeo_at_web29606.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does OpenMPI's progress engine determine progress?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 17:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19727.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19697.php">devendra rai: "[OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 28, 2012, at 9:48 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; I am currently working on OpenMPI-1.6, using MPI calls in separate threads. I understand that OpenMPI will like to make progress on every thread, and it attempts to do so very aggressively.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I have not found any document or literature which talks about the metric on how progress is calculated. Just what does it take for OpenMPI to determine whether or not progress is being made on a thread?
</span><br>
<p>Sorry for the delay in replying.
<br>
<p>By &quot;aggressively&quot;, we mean that OMPI continually checks for process.  I.e., it's basically a busy loop checking network devices (etc.) to see if anything has happened.  Hence, the CPU will likely run at 100%.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19727.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19697.php">devendra rai: "[OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
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
