<?
$subject_val = "Re: [OMPI users] mem lock limit &amp; ulimit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 15:14:21 2010" -->
<!-- isoreceived="20100818191421" -->
<!-- sent="Wed, 18 Aug 2010 13:08:00 -0600" -->
<!-- isosent="20100818190800" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mem lock limit &amp;amp; ulimit" -->
<!-- id="5C9C1C12-596B-40C9-B888-A25CB48FE3A6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100818181724.29937.qmail_at_ns354564.ovh.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] mem lock limit &amp; ulimit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 15:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14073.php">Jeff Squyres: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Previous message:</strong> <a href="14071.php">stabeek: "[OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>In reply to:</strong> <a href="14071.php">stabeek: "[OMPI users] mem lock limit &amp; ulimit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14073.php">Jeff Squyres: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Reply:</strong> <a href="14073.php">Jeff Squyres: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ulimit basically states that a normal user can increase a specific limit up to the maximum specified by root, either via system limit settings or during configuration of the OS.
<br>
<p>So the 256 limit you are seeing is one set locally. I would suggest asking your sys admin for a higher limit if you require one.
<br>
<p><p>On Aug 18, 2010, at 12:17 PM, stabeek wrote:
<br>
<p><span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; I've done a good bit of reading and still cannot get my mpirun programs to execute without giving warnings about the memory lock limit not being &quot;unlimited&quot;. 
</span><br>
<span class="quotelev1">&gt; I'm on an infiniband-(openib)-networked cluster under slurm resource mgmt using openmpi. 
</span><br>
<span class="quotelev1">&gt; Initially I did not want to set max memlock to unlimited because of security concerns, so I concentrated on having slurm negate this limit via its PropagateResourceLimitsExcept=MEMLOCK setting. 
</span><br>
<span class="quotelev1">&gt; There was little success with this, and then on reading the MPI FAQ @openmpi for a second time, and seeing that openmpi's source code actually recurs to libc's getrlimit() to ascertain the memlock limit, I decided this setting was not-relevant for me. This is hunch as yet, it would be nice to get it verified, though it won't help me resolve the problem really. 
</span><br>
<span class="quotelev1">&gt; Now I'm faced with having to ask about ulimit on a mailing which is not about ulimit, but I'm hoping for some people's experience here:
</span><br>
<span class="quotelev1">&gt; &quot;ulimit -l unlimited&quot; works if:
</span><br>
<span class="quotelev1">&gt; 1) the /etc/security/limits.conf file has unlimited soft and hard limits.
</span><br>
<span class="quotelev1">&gt; 2) if you are root. 
</span><br>
<span class="quotelev1">&gt; These conditions solve the problem. But the 2nd is not feasible as should be clear. The problem is that for a normal user running ulimit does not allow a memlock max setting above 256. Its behaviour is one of: 
</span><br>
<span class="quotelev1">&gt; &quot;Let normaluser increase max memlock only up to 256&quot; 
</span><br>
<span class="quotelev1">&gt; Can anybody shed any light or make any suggestions, it would be appreciated. Many thanks.
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
<li><strong>Next message:</strong> <a href="14073.php">Jeff Squyres: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Previous message:</strong> <a href="14071.php">stabeek: "[OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>In reply to:</strong> <a href="14071.php">stabeek: "[OMPI users] mem lock limit &amp; ulimit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14073.php">Jeff Squyres: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Reply:</strong> <a href="14073.php">Jeff Squyres: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
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
