<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 17:14:43 2014" -->
<!-- isoreceived="20140320211443" -->
<!-- sent="Thu, 20 Mar 2014 15:14:55 -0600" -->
<!-- isosent="20140320211455" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A84D83A2_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B395592-9166-4EDE-A6BC-4771DFDBAD4A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 17:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23905.php">Ross Boylan: "[OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23903.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23895.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23907.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23907.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As for the performance, my 4-node (64-processes) 3-hour job indicates Intel MPI and OpenMPI have close benchmarks. Intel MPI takes 2:53 while Open MPI takes 3:10.
<br>
<p>It is interesting that all my MPI_Wtime calls show OpenMPI is faster (up to twice or even more) than Intel MPI in communication for a single loop, but in overall wall time Open MPI is 10% slower for like 500K loops. The computing times are nearly the same. This is a little confusing.
<br>
<p>I may set up and run a new test.
<br>
<p>Beichuan
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Thursday, March 20, 2014 11:15
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI job initializing problem
<br>
<p>On Mar 20, 2014, at 12:48 PM, Beichuan Yan &lt;beichuan.yan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 2. <a href="http://www.open-mpi.org/community/lists/users/2011/11/17684.php">http://www.open-mpi.org/community/lists/users/2011/11/17684.php</a>
</span><br>
<span class="quotelev1">&gt; In the upcoming OMPI v1.7, we revamped the shared memory setup code such that it'll actually use /dev/shm properly, or use some other mechanism other than a mmap file backed in a real filesystem. So the issue goes away.
</span><br>
<p>Woo hoo!
<br>
<p><span class="quotelev1">&gt; my comment: up to OMPI v1.7.4, this shmem issue is still there. However, it is resolved in OMPI v1.7.5rc5. This is surprising.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, OMPI v1.7.5rc5 works well for multi-processes-on-one-node (shmem) mode on Spirit. There is no need to tune TCP or IB parameters to use it. My code just runs well:
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; My test data takes 20 minutes to run with OMPI v1.7.4, but needs less than 1 minute with OMPI v1.7.5rc5. I don't know what the magic is. I am wondering when OMPI v1.7.5 final will be released.
</span><br>
<p>Wow -- that sounds like a fundamental difference there.  Could be something to do with the NFS tmp directory...?  I could see how that could cause oodles of unnecessary network traffic.
<br>
<p>1.7.5 should be released ...immanently...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23905.php">Ross Boylan: "[OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23903.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23895.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23907.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23907.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
