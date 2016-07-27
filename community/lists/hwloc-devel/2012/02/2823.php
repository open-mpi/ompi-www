<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 16:44:58 2012" -->
<!-- isoreceived="20120208214458" -->
<!-- sent="Wed, 08 Feb 2012 22:44:51 +0100" -->
<!-- isosent="20120208214451" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F32ECD3.1080407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F32E4CC.7060303_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 16:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2824.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2822.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2820.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2824.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2824.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2827.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2842.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/02/2012 22:10, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Please report this failure, and configure using a
</span><br>
<span class="quotelev2">&gt;&gt; different C compiler if possible.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Your C compiler does not consider incorrect
</span><br>
<span class="quotelev1">&gt; argument counts to be a fatal error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EXCEPT, that I am not seeing the &quot;set CFLAGS...&quot; message.
</span><br>
<span class="quotelev1">&gt; Is it possible that this check is running before
</span><br>
<span class="quotelev1">&gt; hwloc_check_compiler_vendor_result has been set?
</span><br>
<p>Ah, we need to use $hwloc_c_vendor instead. That's where's
<br>
$hwloc_check_compiler_vendor_result ends up before being cleared.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ALSO, the text of the (missing) message is incorrect:
</span><br>
<span class="quotelev1">&gt; 284c284
</span><br>
<span class="quotelev1">&gt; &lt;             AC_MSG_WARN([For XLC you may try appending '-qhalt=-e'
</span><br>
<span class="quotelev1">&gt; to the value of CFLAGS.])
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;             AC_MSG_WARN([For XLC you may try appending '-qhalt=e' to
</span><br>
<span class="quotelev1">&gt; the value of CFLAGS.])
</span><br>
<p>By the way, do we need -qhalt=E or -qhalt=e ? Your mail uses both.
<br>
<p>Jeff, can you fix everything reported in this thread locally and prepare
<br>
a new tarball for Paul?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2824.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2822.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2820.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2824.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2824.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2827.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2842.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
