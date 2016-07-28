<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc2 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 09:03:09 2009" -->
<!-- isoreceived="20091023130309" -->
<!-- sent="Fri, 23 Oct 2009 15:03:04 +0200" -->
<!-- isosent="20091023130304" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc2 failures" -->
<!-- id="4AE1A988.7020401_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091023124604.GK4686_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.1rc2 failures<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 09:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0258.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>In reply to:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0258.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev2">&gt;&gt; topology-linux.c(787): remark #593: variable &quot;proc_oscoreids&quot; was set but never used
</span><br>
<span class="quotelev2">&gt;&gt;     unsigned proc_oscoreids[] = { [0 ... HWLOC_NBMAXCPUS-1] = -1 };
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heh, good catch.  We indeed do not need it any more to manage the
</span><br>
<span class="quotelev1">&gt; computation. Brice, do you think we could just get rid of it?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I couldn't even find any old libtopology snapshot where it was actually
<br>
used so I guess it's ok to remove it.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0258.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>In reply to:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0258.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
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
