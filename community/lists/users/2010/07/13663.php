<?
$subject_val = "Re: [OMPI users] Highly variable performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 15:12:39 2010" -->
<!-- isoreceived="20100715191239" -->
<!-- sent="Thu, 15 Jul 2010 21:14:37 +0200" -->
<!-- isosent="20100715191437" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Highly variable performance" -->
<!-- id="877hkwmuaq.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D09B321C-8022-4CD5-9352-A05803410CCC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Highly variable performance<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 15:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13664.php">Eugene Loh: "Re: [OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
<li><strong>Previous message:</strong> <a href="13662.php">Eugene Loh: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 15 Jul 2010 13:03:31 -0400, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Given the oversubscription on the existing HT links, could contention
</span><br>
<span class="quotelev1">&gt; account for the difference?  (I have no idea how HT's contention
</span><br>
<span class="quotelev1">&gt; management works) Meaning: if the stars line up in a given run, you
</span><br>
<span class="quotelev1">&gt; could end up with very little/no contention and you get good
</span><br>
<span class="quotelev1">&gt; bandwidth.  But if there's a bit of jitter, you could end up with
</span><br>
<span class="quotelev1">&gt; quite a bit of contention that ends up cascading into a bunch of
</span><br>
<span class="quotelev1">&gt; additional delay.
</span><br>
<p>What contention?  Many sockets needing to access memory on another
<br>
socket via HT links?  Then yes, perhaps that could be a lot.  As show in
<br>
the diagram, it's pretty non-uniform, and if, say sockets 0, 1, and 3
<br>
all found memory on socket 0 (say socket 2 had local memory), then there
<br>
are two ways for messages to get from 3 to 0 (via 1 or via 2).  I don't
<br>
know if there is hardware support to re-route to avoid contention, but
<br>
if not, then socket 3 could be sharing the 1-&gt;0 HT link (which has max
<br>
throughput of 8 GB/s, therefore 4 GB/s would be available per socket,
<br>
provided it was still operating at peak).  Note that this 4 GB/s is
<br>
still less than splitting the 10.7 GB/s three ways.
<br>
<p><span class="quotelev1">&gt; I fail to see how that could add up to 70-80 (or more) seconds of
</span><br>
<span class="quotelev1">&gt; difference -- 13 secs vs. 90+ seconds (and more), though...  70-80
</span><br>
<span class="quotelev1">&gt; seconds sounds like an IO delay -- perhaps paging due to the ramdisk
</span><br>
<span class="quotelev1">&gt; or somesuch...?  That's a SWAG.
</span><br>
<p>This problem should have had significantly less resident than would
<br>
cause paging, but these were very short jobs so a relatively small
<br>
amount of paging would cause a big performance hit.  We have also seen
<br>
up to a factor of 10 variability in longer jobs (e.g. 1 hour for a
<br>
&quot;fast&quot; run), with larger working sets, but once the pages are faulted,
<br>
this kernel (2.6.18 from RHEL5) won't migrate them around, so even if
<br>
you eventually swap out all the ramdisk, pages faulted before and after
<br>
will be mapped to all sorts of inconvenient places.
<br>
<p>But, I don't have any systematic testing with a guaranteed clean
<br>
ramdisk, and I'm not going to overanalyze the extra factors when there's
<br>
an understood factor of 3 hanging in the way.  I'll give an update if
<br>
there is any news.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13664.php">Eugene Loh: "Re: [OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
<li><strong>Previous message:</strong> <a href="13662.php">Eugene Loh: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
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
