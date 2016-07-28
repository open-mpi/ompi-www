<?
$subject_val = "Re: [OMPI devel] Infiniband memory usage with XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 10:54:08 2010" -->
<!-- isoreceived="20100517145408" -->
<!-- sent="Mon, 17 May 2010 17:53:51 +0300" -->
<!-- isosent="20100517145351" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infiniband memory usage with XRC" -->
<!-- id="4BF1587F.7080004_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1005171439180.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2010-05-17 10:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Previous message:</strong> <a href="7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>In reply to:</strong> <a href="7943.php">Sylvain Jeaugey: "[OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see below.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using XRC queues, Open MPI is indeed creating only one XRC queue 
</span><br>
<span class="quotelev1">&gt; per node (instead of per-host). The problem is that the number of send 
</span><br>
<span class="quotelev1">&gt; elements in this queue is multiplied by the number of processes on the 
</span><br>
<span class="quotelev1">&gt; remote host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what are we getting from this ? Not much, except that we can 
</span><br>
<span class="quotelev1">&gt; reduce the sd_max parameter to 1 element, and still have 8 elements in 
</span><br>
<span class="quotelev1">&gt; the send queue (on 8 cores machines), which may still be ok on the 
</span><br>
<span class="quotelev1">&gt; performance side.
</span><br>
Don't forget the the QP object itself consume some memory on 
<br>
driver/verbs level.
<br>
BUT , but I agree that we need to provide more flexibility and it will 
<br>
be nice that default multiply coefficient will be  smaller , as well I 
<br>
think we need to make it user tunable parameter (yep, one more parameter).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Send queues are created lazily, so having a lot of memory for send 
</span><br>
<span class="quotelev1">&gt; queues is not necessary blocking. What's
</span><br>
<p><span class="quotelev1">&gt; blocking is the receive queues, because they are created during 
</span><br>
<span class="quotelev1">&gt; MPI_Init, so in a way, they are the &quot;basic fare&quot; of MPI.
</span><br>
BTW SRQ resources are also allocated on demand. We start with very small 
<br>
SRQ and it is increased on SRQ limit event.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The XRC protocol seems to create shared receive queues, which is a 
</span><br>
<span class="quotelev1">&gt; good thing. However, comparing memory used by an &quot;X&quot; queue versus and 
</span><br>
<span class="quotelev1">&gt; &quot;S&quot; queue, we can see a large difference. Digging a bit into the code, 
</span><br>
<span class="quotelev1">&gt; we found some
</span><br>
So, do you see that X consumes more that S ? This is really odd.
<br>
<span class="quotelev1">&gt; strange things, like the completion queue size not being the same as 
</span><br>
<span class="quotelev1">&gt; &quot;S&quot; queues (the patch below would fix it, but the root of the problem 
</span><br>
<span class="quotelev1">&gt; may be elsewhere).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is anyone able to comment on this ?
</span><br>
The fix looks ok, please submit it to trunk.
<br>
BTW do you want to prepare the patch for send queue size factor ? It 
<br>
should be quite simple.
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Previous message:</strong> <a href="7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>In reply to:</strong> <a href="7943.php">Sylvain Jeaugey: "[OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7947.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
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
