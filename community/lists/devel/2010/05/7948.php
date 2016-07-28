<?
$subject_val = "Re: [OMPI devel] Infiniband memory usage with XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 11:22:10 2010" -->
<!-- isoreceived="20100517152210" -->
<!-- sent="Mon, 17 May 2010 18:21:54 +0300" -->
<!-- isosent="20100517152154" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infiniband memory usage with XRC" -->
<!-- id="4BF15F12.4080803_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1005171659030.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 11:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7949.php">Jeff Squyres: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvain Jeaugey wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; The XRC protocol seems to create shared receive queues, which is a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good thing. However, comparing memory used by an &quot;X&quot; queue versus 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and &quot;S&quot; queue, we can see a large difference. Digging a bit into the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code, we found some
</span><br>
<span class="quotelev2">&gt;&gt; So, do you see that X consumes more that S ? This is really odd.
</span><br>
<span class="quotelev1">&gt; Yes, but that's what we see. At least after MPI_Init.
</span><br>
What is the difference (in Kb)?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strange things, like the completion queue size not being the same as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;S&quot; queues (the patch below would fix it, but the root of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem may be elsewhere).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is anyone able to comment on this ?
</span><br>
<span class="quotelev2">&gt;&gt; The fix looks ok, please submit it to trunk.
</span><br>
<span class="quotelev1">&gt; I don't have an account to do this, so I'll let maintainers push it 
</span><br>
<span class="quotelev1">&gt; into SVN.
</span><br>
Ok, I will push it.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW do you want to prepare the patch for send queue size factor ? It 
</span><br>
<span class="quotelev2">&gt;&gt; should be quite simple.
</span><br>
<span class="quotelev1">&gt; Maybe we can do this. However, we are a little playing with parameters 
</span><br>
<span class="quotelev1">&gt; and code without really knowing the deep consequences of what we do. 
</span><br>
<span class="quotelev1">&gt; Therefore, I would feel more confortable if someone who knows much on 
</span><br>
<span class="quotelev1">&gt; the openib btl confirms it's not breaking everything.
</span><br>
Well, please feel free to submit a patch for review. Also if you see any 
<br>
other issues with XRC, MLNX will be happy to help.
<br>
<p>Regards,
<br>
Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7949.php">Jeff Squyres: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
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
