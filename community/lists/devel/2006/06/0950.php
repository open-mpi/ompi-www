<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 13:23:11 2006" -->
<!-- isoreceived="20060628172311" -->
<!-- sent="Wed, 28 Jun 2006 13:23:04 -0400" -->
<!-- isosent="20060628172304" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility" -->
<!-- id="44A2BAF8.7080408_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98a233180606272142u2a6a1778u66f189253317ce52_at_mail.gmail.com" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 13:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0949.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debugutility"</a>
<li><strong>In reply to:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Aune wrote:
<br>
<span class="quotelev1">&gt; I am writing up some interconnect/network debugging software that is
</span><br>
<span class="quotelev1">&gt; centered around ompi.  What is the best set of functions to use to get
</span><br>
<span class="quotelev1">&gt; the best bandwidth and latency numbers for openmpi and why?  I've been
</span><br>
<p>You mean MPI functions or internal ompi functions ? For MPI functions, 
<br>
it depends of what you are looking for. Send/recv is fine but it does 
<br>
not show the overlap capability. You would need to do something smarter 
<br>
with Isend/Irecv/Wait for that (Sandia has a nice bench that they should 
<br>
release soon). You may also want to measure the penalty for unexpected 
<br>
messages, the host CPU overhead and the ability to progress.
<br>
<p>All of these metrics are measured by existing benchmarks, do you want to 
<br>
write one that covers everything or something like IMB ?
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0949.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debugutility"</a>
<li><strong>In reply to:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
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
