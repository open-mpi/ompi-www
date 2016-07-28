<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 10:06:09 2007" -->
<!-- isoreceived="20070806140609" -->
<!-- sent="Mon, 6 Aug 2007 17:06:03 +0300" -->
<!-- isosent="20070806140603" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem with system() call and openib - blocks send/recv" -->
<!-- id="20070806140603.GL23118_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46B727D0.4070406_at_princeton.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 10:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Previous message:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>In reply to:</strong> <a href="2078.php">Bill Wichser: "[OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 06, 2007 at 09:53:20AM -0400, Bill Wichser wrote:
<br>
<span class="quotelev1">&gt; We have run across an issue, probably more related to openib than to 
</span><br>
<span class="quotelev1">&gt; openmpi but don't know how to resolve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux kernel - 2.6.9-55.0.2.ELsmp x86_64
</span><br>
fork (and thus system()) is not supported by openib in this kernel.
<br>
To get system() working you need kernel 2.6.12 at least. To get fork()
<br>
somewhat working you need kernel 2.6.16 (or 17 don't remember exactly)
<br>
and libibverbs-1.1.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Previous message:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>In reply to:</strong> <a href="2078.php">Bill Wichser: "[OMPI devel] problem with system() call and openib - blocks send/recv"</a>
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
