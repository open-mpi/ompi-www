<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 17 07:12:56 2007" -->
<!-- isoreceived="20070617111256" -->
<!-- sent="Sun, 17 Jun 2007 13:12:49 +0200" -->
<!-- isosent="20070617111249" -->
<!-- name="Markus Daene" -->
<!-- email="markus.daene_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems" -->
<!-- id="46751731.8030503_at_physik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C291D172.3013%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Markus Daene (<em>markus.daene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-17 07:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1725.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
<li><strong>In reply to:</strong> <a href="1651.php">Ralph Castain: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1654.php">Pak Lui: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>many thanks. This is exactly what I need.
<br>
Markus
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Markus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two MCA params that can help you, I believe:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. You to set the maximum size of the shared memory file with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpool_sm_max_size xxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where xxx is the maximum memory file you want, expressed in bytes. The
</span><br>
<span class="quotelev1">&gt; default value I see is 512MBytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. You can set the size/peer of the file, again in bytes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpool_sm_per_peer_size xxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will allocate a file that is xxx * num_procs_on_the_node on each node,
</span><br>
<span class="quotelev1">&gt; up to the maximum file size (either the 512MB default or whatever you
</span><br>
<span class="quotelev1">&gt; specified using the previous param). This defaults to 32MBytes/proc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that there is also a minimum (total, not per-proc) file size that
</span><br>
<span class="quotelev1">&gt; defaults to 128MBytes. If that is still too large, you can adjust it using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpool_sm_min_size yyy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1725.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
<li><strong>In reply to:</strong> <a href="1651.php">Ralph Castain: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1654.php">Pak Lui: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
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
