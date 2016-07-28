<?
$subject_val = "Re: [OMPI devel] vader and mmap_shmem module cleanup problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 10:49:24 2015" -->
<!-- isoreceived="20151215154924" -->
<!-- sent="Tue, 15 Dec 2015 15:49:20 +0000" -->
<!-- isosent="20151215154920" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vader and mmap_shmem module cleanup problem" -->
<!-- id="7AAE4EF4-769C-4880-856C-30295DBDB03F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="566FE8E3.9020908_at_xlab.si" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vader and mmap_shmem module cleanup problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 10:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18421.php">Geoffrey Paulsen: "[OMPI devel] Minutes from Weekly Telecon 12/15/2015"</a>
<li><strong>Previous message:</strong> <a href="18419.php">Nathan Hjelm: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18417.php">Justin Cinkelj: "[OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2015, at 5:18 AM, Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second question.
</span><br>
<span class="quotelev1">&gt; With two threads in one process, I got attempt to opal_shmem_segment_dettach() and munmap() on same mmap-ed address, from both threads. I 'fixed' that by replacing &quot;ds_buf-&gt;seg_cpid = getpid()&quot; with gettid(), and then each thread munmap-s only address allocated by itself. Is that correct? Or is it possible, that the second thread might still try to access data at that address?
</span><br>
<p>I echo Gilles' comments here: we never really planned for MPI processes to be threads -- I'm surprised you haven't run into more problems like this.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18421.php">Geoffrey Paulsen: "[OMPI devel] Minutes from Weekly Telecon 12/15/2015"</a>
<li><strong>Previous message:</strong> <a href="18419.php">Nathan Hjelm: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18417.php">Justin Cinkelj: "[OMPI devel] vader and mmap_shmem module cleanup problem"</a>
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
