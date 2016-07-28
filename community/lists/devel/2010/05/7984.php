<?
$subject_val = "Re: [OMPI devel] Infiniband memory usage with XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 23 11:02:28 2010" -->
<!-- isoreceived="20100523150228" -->
<!-- sent="Sun, 23 May 2010 18:02:18 +0300" -->
<!-- isosent="20100523150218" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infiniband memory usage with XRC" -->
<!-- id="4BF9437A.4070302_at_dev.mellanox.co.il" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.1005191358430.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2010-05-23 11:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7985.php">Josh Hursey: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7983.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
~ 2300 KB - is it difference per machine or per MPI process ?
<br>
In OMPI XRC mode we allocate some additional resources that may consume 
<br>
some memory (the hash table), but even so ~2M sounds too much for me. 
<br>
When I will have time I will try to calculate the &quot;resonable&quot; difference.
<br>
<p>Pasha
<br>
<p>Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; On Mon, 17 May 2010, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The XRC protocol seems to create shared receive queues, which is a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; good thing. However, comparing memory used by an &quot;X&quot; queue versus 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and &quot;S&quot; queue, we can see a large difference. Digging a bit into 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the code, we found some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, do you see that X consumes more that S ? This is really odd.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, but that's what we see. At least after MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt; What is the difference (in Kb)?
</span><br>
<span class="quotelev1">&gt; At 32 nodes x 32 cores (1024 MPI processes), I get a difference of 
</span><br>
<span class="quotelev1">&gt; ~2300 KB in favor of &quot;S,65536,16,4,1&quot; versus &quot;X,65536,16,4,1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The proposed patch doesn't seem to solve the problem however, there's 
</span><br>
<span class="quotelev1">&gt; still something that's taking more memory than expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7985.php">Josh Hursey: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7983.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
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
