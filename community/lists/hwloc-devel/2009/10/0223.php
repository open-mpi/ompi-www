<?
$subject_val = "Re: [hwloc-devel] v0.9 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 15:44:42 2009" -->
<!-- isoreceived="20091021194442" -->
<!-- sent="Wed, 21 Oct 2009 21:43:07 +0200" -->
<!-- isosent="20091021194307" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v0.9 branch" -->
<!-- id="4ADF644B.3050809_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D89EFC4-015A-474A-92BB-587FF04CFF53_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v0.9 branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 15:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now that I try to implement it, I remember why an inline is convenient:
<br>
it doesn't require any build-time/run-time dependency unless you really
<br>
use it. If we make this code non-inline, we actually need libibverbs at
<br>
build time and runtime. Distro packages will have to depend on
<br>
libibverbs, and we'll get lots of complaints. Same for linux-libnuma.h
<br>
and maybe nvidia cuda one day :) So we'll probably end up splitting this
<br>
code out of libhwloc.so and make a libhwloc-openfabrics-verbs.so.
<br>
<p>Brice
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; My vote: +1 for before v0.9.1 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2009, at 3:20 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Oct 20, 2009, at 8:33 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Brice -- do you need to move r1195 and r1196 to the v0.9 branch?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I effectively just brought these over to the v0.9 branch.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; With all these changes, I'll cut an rc2 and post it shortly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I still supposed to make the verbs helper not inline anymore ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0224.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
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
