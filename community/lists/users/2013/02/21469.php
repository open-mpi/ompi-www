<?
$subject_val = "Re: [OMPI users] OpenFabrics (openib)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 10:29:24 2013" -->
<!-- isoreceived="20130227152924" -->
<!-- sent="Wed, 27 Feb 2013 07:29:17 -0800" -->
<!-- isosent="20130227152917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenFabrics (openib)" -->
<!-- id="09B68639-710B-449B-966B-6F784B1A8496_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABHhH+sqANeyy+GMmOTANeLEOoHxm40=5H7Zmq6q5kdxYuResQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 10:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21470.php">Simon DeDeo: "Re: [OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>Previous message:</strong> <a href="21468.php">Khapare Joshi: "[OMPI users] OpenFabrics (openib)"</a>
<li><strong>In reply to:</strong> <a href="21468.php">Khapare Joshi: "[OMPI users] OpenFabrics (openib)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21472.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenFabrics (openib)"</a>
<li><strong>Reply:</strong> <a href="21472.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenFabrics (openib)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
--without-openib will do the trick
<br>
<p>On Feb 27, 2013, at 7:24 AM, Khapare Joshi &lt;khapare77_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First time poster, I recently installed openmpi 1.6.4 in my cluster with resource manager support as :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm --prefix=/opt/openmpi/1.6.2/ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it works well, but I always get some error saying :
</span><br>
<span class="quotelev1">&gt; [[58551,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: login-1-2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This probably looking for infiniband network, and when i installed it used default to use infiniband support. however I do not have any infiniband in my cluster, how do I fix this problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps re-configure the openmpi without openib ? if thats the case what flag I should use with configure ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; K
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
<li><strong>Next message:</strong> <a href="21470.php">Simon DeDeo: "Re: [OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>Previous message:</strong> <a href="21468.php">Khapare Joshi: "[OMPI users] OpenFabrics (openib)"</a>
<li><strong>In reply to:</strong> <a href="21468.php">Khapare Joshi: "[OMPI users] OpenFabrics (openib)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21472.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenFabrics (openib)"</a>
<li><strong>Reply:</strong> <a href="21472.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenFabrics (openib)"</a>
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
