<?
$subject_val = "Re: [OMPI users] OpenFabrics (openib)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 11:56:46 2013" -->
<!-- isoreceived="20130227165646" -->
<!-- sent="Wed, 27 Feb 2013 16:56:34 +0000" -->
<!-- isosent="20130227165634" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenFabrics (openib)" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F60C63_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="09B68639-710B-449B-966B-6F784B1A8496_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenFabrics (openib)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 11:56:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21473.php">Reuti: "[OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21471.php">Jeff Squyres (jsquyres): "Re: [OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>In reply to:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also just disable/unload the OpenFabrics drivers in your systems.  Open MPI is reacting to the fact that it could the drivers loaded (even though there is no OpenFabrics-based hardware active, apparently).
<br>
<p>If you unload the drivers, this message should go away.
<br>
<p><p><p>On Feb 27, 2013, at 10:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; --without-openib will do the trick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2013, at 7:24 AM, Khapare Joshi &lt;khapare77_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First time poster, I recently installed openmpi 1.6.4 in my cluster with resource manager support as :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-tm --prefix=/opt/openmpi/1.6.2/ 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it works well, but I always get some error saying :
</span><br>
<span class="quotelev2">&gt;&gt; [[58551,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev2">&gt;&gt;  Host: login-1-2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This probably looking for infiniband network, and when i installed it used default to use infiniband support. however I do not have any infiniband in my cluster, how do I fix this problem. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps re-configure the openmpi without openib ? if thats the case what flag I should use with configure ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; K
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21473.php">Reuti: "[OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21471.php">Jeff Squyres (jsquyres): "Re: [OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>In reply to:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
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
