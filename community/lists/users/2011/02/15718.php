<?
$subject_val = "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrieron Windows XP SP3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 06:37:59 2011" -->
<!-- isoreceived="20110224113759" -->
<!-- sent="Thu, 24 Feb 2011 06:37:50 -0500" -->
<!-- isosent="20110224113750" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrieron Windows XP SP3" -->
<!-- id="BC723F9D-2ECC-48BA-85C8-69FD5CE1AE1A_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AB003ED847BEC24EBD9AA7508F69A9C404BF0ADA_at_lancelot.dsonet.corp.root" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrieron Windows XP SP3<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 06:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15719.php">Vasiliy G Tolstov: "Re: [OMPI users] multicast not available"</a>
<li><strong>Previous message:</strong> <a href="15717.php">Jeff Squyres (jsquyres): "Re: [OMPI users] multicast not available"</a>
<li><strong>In reply to:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should:
<br>
<p>- do N warmup barriers
<br>
- start the timers
<br>
- do M barriers (M should be a lot)
<br>
- stop the timers
<br>
- divide the time by M
<br>
<p>Benchmarking is tricky to get right. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Feb 23, 2011, at 11:54 PM, &quot;Li Zuwei&quot; &lt;lzuwei_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm measuring barrier synchronization performance on the v1.5.1 build of OpenMPI. I am currently trying to measure synchronization performance on a single node, with 5 processes. I'm getting pretty weak results as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing procedure - initialize the timer at the start of the barrier, stop the timer when the process break from the barrier. Cycle through N number of times and calculate the average.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 Node 5 processes: 299.38ms
</span><br>
<span class="quotelev1">&gt; 1 Node 7 processes: 513.95ms
</span><br>
<span class="quotelev1">&gt; 1 Node 10 processes: 749.94ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering if this is the expected performance on a single nodes. I presume Open MPI automatically uses Shared Memory for barrier synchronization on a single node which I think should be able to provide better performance when running on a single node. Is there a way to determine what transport layer I am using and I would greatly appreciate tips on how can I tune this performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Zuwei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15719.php">Vasiliy G Tolstov: "Re: [OMPI users] multicast not available"</a>
<li><strong>Previous message:</strong> <a href="15717.php">Jeff Squyres (jsquyres): "Re: [OMPI users] multicast not available"</a>
<li><strong>In reply to:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
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
