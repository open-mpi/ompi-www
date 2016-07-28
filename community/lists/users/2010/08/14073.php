<?
$subject_val = "Re: [OMPI users] mem lock limit &amp; ulimit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 16:22:10 2010" -->
<!-- isoreceived="20100818202210" -->
<!-- sent="Wed, 18 Aug 2010 13:23:33 -0700" -->
<!-- isosent="20100818202333" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mem lock limit &amp;amp; ulimit" -->
<!-- id="76B03B91-87C7-4ACA-A8FF-3B252B9AB699_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5C9C1C12-596B-40C9-B888-A25CB48FE3A6_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 16:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14074.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>In reply to:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're using IB for HPC/MPI, you probably want an unlimited memlock limit.
<br>
<p>Keep in mind that you need to start the slurm daemons with the desired memlock limit, too -- if they're started via init.d, for example, they won't be subject to /etc/security/limits.conf.
<br>
<p><p>On Aug 18, 2010, at 12:08 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; ulimit basically states that a normal user can increase a specific limit up to the maximum specified by root, either via system limit settings or during configuration of the OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the 256 limit you are seeing is one set locally. I would suggest asking your sys admin for a higher limit if you require one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2010, at 12:17 PM, stabeek wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello, 
</span><br>
<span class="quotelev2">&gt;&gt; I've done a good bit of reading and still cannot get my mpirun programs to execute without giving warnings about the memory lock limit not being &quot;unlimited&quot;. 
</span><br>
<span class="quotelev2">&gt;&gt; I'm on an infiniband-(openib)-networked cluster under slurm resource mgmt using openmpi. 
</span><br>
<span class="quotelev2">&gt;&gt; Initially I did not want to set max memlock to unlimited because of security concerns, so I concentrated on having slurm negate this limit via its PropagateResourceLimitsExcept=MEMLOCK setting. 
</span><br>
<span class="quotelev2">&gt;&gt; There was little success with this, and then on reading the MPI FAQ @openmpi for a second time, and seeing that openmpi's source code actually recurs to libc's getrlimit() to ascertain the memlock limit, I decided this setting was not-relevant for me. This is hunch as yet, it would be nice to get it verified, though it won't help me resolve the problem really. 
</span><br>
<span class="quotelev2">&gt;&gt; Now I'm faced with having to ask about ulimit on a mailing which is not about ulimit, but I'm hoping for some people's experience here:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ulimit -l unlimited&quot; works if:
</span><br>
<span class="quotelev2">&gt;&gt; 1) the /etc/security/limits.conf file has unlimited soft and hard limits.
</span><br>
<span class="quotelev2">&gt;&gt; 2) if you are root. 
</span><br>
<span class="quotelev2">&gt;&gt; These conditions solve the problem. But the 2nd is not feasible as should be clear. The problem is that for a normal user running ulimit does not allow a memlock max setting above 256. Its behaviour is one of: 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Let normaluser increase max memlock only up to 256&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody shed any light or make any suggestions, it would be appreciated. Many thanks.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14074.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>In reply to:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
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
