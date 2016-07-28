<?
$subject_val = "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 17:00:23 2015" -->
<!-- isoreceived="20150410210023" -->
<!-- sent="Fri, 10 Apr 2015 15:59:42 -0500" -->
<!-- isosent="20150410205942" -->
<!-- name="namu patel" -->
<!-- email="namu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%" -->
<!-- id="CACV7Auw7==z-SEvEL4BNTXpwEQo296gF8-isnUTuR7_xTNjjgw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55283525.6050501_at_khubla.com" -->
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
<strong>From:</strong> namu patel (<em>namu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 16:59:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26675.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>In reply to:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ahh, I appreciate this explanation. This is a good thing to keep in mind. I
<br>
read up on how functions like `top` measure the processor load. Since the
<br>
OS cannot distinguish between physical and virtual cores, `top` does not
<br>
provide an accurate measurement, hence, I should not be using it as an
<br>
absolute judge of the load on my system.
<br>
<p>Thank you,
<br>
Namu
<br>
<p>On Fri, Apr 10, 2015 at 3:40 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Namu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hyperthreads aren't real cores, they're really just another hardware
</span><br>
<span class="quotelev1">&gt; thread (two per physical core).  You have two CPUs with 6 physical cores
</span><br>
<span class="quotelev1">&gt; each.  If you start 2 simulations, each with 6 MPI processes running, your
</span><br>
<span class="quotelev1">&gt; 12 physical cores will each be running at 100%.  Adding another simulation
</span><br>
<span class="quotelev1">&gt; with another 6 MPI processes will oversubscribe your physical cores (you're
</span><br>
<span class="quotelev1">&gt; asking for 150%), which is why you're still seeing 12 processors at 100%,
</span><br>
<span class="quotelev1">&gt; and everything else very low.  Your physical cores are switching hardware
</span><br>
<span class="quotelev1">&gt; threads, but each core can't go any faster.  Hyperthreads only help when
</span><br>
<span class="quotelev1">&gt; your software doesn't load a core to 100%.  Then the other hyperthread on
</span><br>
<span class="quotelev1">&gt; that core can switch in and use leftover capacity.  Hardware thread
</span><br>
<span class="quotelev1">&gt; switching is much faster than software thread switching, which is why it's
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most simulation software will load cores to 100% (even if it doesn't use
</span><br>
<span class="quotelev1">&gt; that 100% wisely, which is a whole other flame war) and hyperthreading
</span><br>
<span class="quotelev1">&gt; doesn't help you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2015-04-10 2:22 PM, namu patel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am using OpenMPI 1.8.4 on my workstation with 2 CPUs, each with 12
</span><br>
<span class="quotelev1">&gt; processors (6 with hyper-threading). When I run simulations using mpiexec,
</span><br>
<span class="quotelev1">&gt; I'm noticing a strange performance issue. If I run two simulations, each
</span><br>
<span class="quotelev1">&gt; with 6 processors, then everything is fine and 12 processors are under 100%
</span><br>
<span class="quotelev1">&gt; load. When I start a 3rd simulation with 6 processors, I notice throttling
</span><br>
<span class="quotelev1">&gt; in all 3 simulations and only 12 processors are at 100%, the rest are below
</span><br>
<span class="quotelev1">&gt; 10%. My guess is that somehow the processes from the 3rd simulations are
</span><br>
<span class="quotelev1">&gt; doubling onto the already busy processors. How can I be certain that this
</span><br>
<span class="quotelev1">&gt; is the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt; namu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26671.php">http://www.open-mpi.org/community/lists/users/2015/04/26671.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26673.php">http://www.open-mpi.org/community/lists/users/2015/04/26673.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26675.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>In reply to:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
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
