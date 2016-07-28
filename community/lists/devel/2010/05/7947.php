<?
$subject_val = "Re: [OMPI devel] Infiniband memory usage with XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 11:03:39 2010" -->
<!-- isoreceived="20100517150339" -->
<!-- sent="Mon, 17 May 2010 17:05:57 +0200 (CEST)" -->
<!-- isosent="20100517150557" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infiniband memory usage with XRC" -->
<!-- id="alpine.DEB.2.00.1005171659030.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BF1587F.7080004_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Infiniband memory usage with XRC<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 11:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Previous message:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Pasha for these details.
<br>
<p>On Mon, 17 May 2010, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; blocking is the receive queues, because they are created during MPI_Init, 
</span><br>
<span class="quotelev2">&gt;&gt; so in a way, they are the &quot;basic fare&quot; of MPI.
</span><br>
<span class="quotelev1">&gt; BTW SRQ resources are also allocated on demand. We start with very small SRQ 
</span><br>
<span class="quotelev1">&gt; and it is increased on SRQ limit event.
</span><br>
Ok. Understood. So maybe the increased memory is only due to CQs.
<br>
<p><span class="quotelev2">&gt;&gt; The XRC protocol seems to create shared receive queues, which is a good 
</span><br>
<span class="quotelev2">&gt;&gt; thing. However, comparing memory used by an &quot;X&quot; queue versus and &quot;S&quot; queue, 
</span><br>
<span class="quotelev2">&gt;&gt; we can see a large difference. Digging a bit into the code, we found some
</span><br>
<span class="quotelev1">&gt; So, do you see that X consumes more that S ? This is really odd.
</span><br>
Yes, but that's what we see. At least after MPI_Init.
<br>
<p><span class="quotelev2">&gt;&gt; strange things, like the completion queue size not being the same as &quot;S&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; queues (the patch below would fix it, but the root of the problem may be 
</span><br>
<span class="quotelev2">&gt;&gt; elsewhere).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is anyone able to comment on this ?
</span><br>
<span class="quotelev1">&gt; The fix looks ok, please submit it to trunk.
</span><br>
I don't have an account to do this, so I'll let maintainers push it into 
<br>
SVN.
<br>
<p><span class="quotelev1">&gt; BTW do you want to prepare the patch for send queue size factor ? It should 
</span><br>
<span class="quotelev1">&gt; be quite simple.
</span><br>
Maybe we can do this. However, we are a little playing with parameters and 
<br>
code without really knowing the deep consequences of what we do. 
<br>
Therefore, I would feel more confortable if someone who knows much on the 
<br>
openib btl confirms it's not breaking everything.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Previous message:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
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
