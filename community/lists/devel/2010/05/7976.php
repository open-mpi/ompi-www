<?
$subject_val = "Re: [OMPI devel] Infiniband memory usage with XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 07:59:25 2010" -->
<!-- isoreceived="20100519115925" -->
<!-- sent="Wed, 19 May 2010 14:01:22 +0200 (CEST)" -->
<!-- isosent="20100519120122" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infiniband memory usage with XRC" -->
<!-- id="alpine.DEB.2.00.1005191358430.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BF15F12.4080803_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2010-05-19 08:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7977.php">Rayson Ho: "[OMPI devel] MPI_Pack &amp; MPI_Unpack Performance"</a>
<li><strong>Previous message:</strong> <a href="7975.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7984.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7984.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 17 May 2010, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The XRC protocol seems to create shared receive queues, which is a good 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thing. However, comparing memory used by an &quot;X&quot; queue versus and &quot;S&quot; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; queue, we can see a large difference. Digging a bit into the code, we 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; found some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, do you see that X consumes more that S ? This is really odd.
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but that's what we see. At least after MPI_Init.
</span><br>
<span class="quotelev1">&gt; What is the difference (in Kb)?
</span><br>
At 32 nodes x 32 cores (1024 MPI processes), I get a difference of ~2300 
<br>
KB in favor of &quot;S,65536,16,4,1&quot; versus &quot;X,65536,16,4,1&quot;.
<br>
<p>The proposed patch doesn't seem to solve the problem however, there's 
<br>
still something that's taking more memory than expected.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7977.php">Rayson Ho: "[OMPI devel] MPI_Pack &amp; MPI_Unpack Performance"</a>
<li><strong>Previous message:</strong> <a href="7975.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7984.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7984.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
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
