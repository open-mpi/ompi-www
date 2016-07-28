<?
$subject_val = "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 16:40:02 2015" -->
<!-- isoreceived="20150410204002" -->
<!-- sent="Fri, 10 Apr 2015 14:40:05 -0600" -->
<!-- isosent="20150410204005" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%" -->
<!-- id="55283525.6050501_at_khubla.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CACV7Auw3XE86wjJkXAySPNr1erXH034dqgARV9t9yrcyTPn0eQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 16:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26674.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>In reply to:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26674.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Reply:</strong> <a href="26674.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Namu,
<br>
<p>Hyperthreads aren't real cores, they're really just another hardware 
<br>
thread (two per physical core).  You have two CPUs with 6 physical cores 
<br>
each.  If you start 2 simulations, each with 6 MPI processes running, 
<br>
your 12 physical cores will each be running at 100%. Adding another 
<br>
simulation with another 6 MPI processes will oversubscribe your physical 
<br>
cores (you're asking for 150%), which is why you're still seeing 12 
<br>
processors at 100%, and everything else very low.  Your physical cores 
<br>
are switching hardware threads, but each core can't go any faster.  
<br>
Hyperthreads only help when your software doesn't load a core to 100%.  
<br>
Then the other hyperthread on that core can switch in and use leftover 
<br>
capacity.  Hardware thread switching is much faster than software thread 
<br>
switching, which is why it's there.
<br>
<p>Most simulation software will load cores to 100% (even if it doesn't use 
<br>
that 100% wisely, which is a whole other flame war) and hyperthreading 
<br>
doesn't help you.
<br>
<p>Damien
<br>
<p>On 2015-04-10 2:22 PM, namu patel wrote:
<br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.8.4 on my workstation with 2 CPUs, each with 12 
</span><br>
<span class="quotelev1">&gt; processors (6 with hyper-threading). When I run simulations using 
</span><br>
<span class="quotelev1">&gt; mpiexec, I'm noticing a strange performance issue. If I run two 
</span><br>
<span class="quotelev1">&gt; simulations, each with 6 processors, then everything is fine and 12 
</span><br>
<span class="quotelev1">&gt; processors are under 100% load. When I start a 3rd simulation with 6 
</span><br>
<span class="quotelev1">&gt; processors, I notice throttling in all 3 simulations and only 12 
</span><br>
<span class="quotelev1">&gt; processors are at 100%, the rest are below 10%. My guess is that 
</span><br>
<span class="quotelev1">&gt; somehow the processes from the 3rd simulations are doubling onto the 
</span><br>
<span class="quotelev1">&gt; already busy processors. How can I be certain that this is the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; namu
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26671.php">http://www.open-mpi.org/community/lists/users/2015/04/26671.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26674.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>In reply to:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26674.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Reply:</strong> <a href="26674.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
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
