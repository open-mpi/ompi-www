<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 30 00:12:28 2012" -->
<!-- isoreceived="20120430041228" -->
<!-- sent="Mon, 30 Apr 2012 00:12:23 -0400" -->
<!-- isosent="20120430041223" -->
<!-- name="Evan Clinton" -->
<!-- email="evan.m.clinton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="CALQMFq0aDDjonMmWOBB3zGcwQCVCK=GqQisg18Um3QFQv708uw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F998B56.5000002_at_arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Open MPI on ARMv5<br>
<strong>From:</strong> Evan Clinton (<em>evan.m.clinton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-30 00:12:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10939.php">Jeff Squyres: "Re: [OMPI devel] June Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again for the comments.
<br>
<p><span class="quotelev2">&gt;&gt; Quote the documentation, __kuser_cmpxchg &quot;already includes memory
</span><br>
<span class="quotelev2">&gt;&gt; barriers as needed,&quot; so the code using it shouldn't need anything
</span><br>
<span class="quotelev2">&gt;&gt; extra.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fair enough - but could you put a comment to this effect into the patch?
</span><br>
Comment added.
<br>
<p><span class="quotelev1">&gt; But I'm still not too happy about even the very unlikely risk of
</span><br>
<span class="quotelev1">&gt; something executing &quot;random stuff&quot; depending on kernel version.
</span><br>
<span class="quotelev1">&gt; For now, could you update the comments to that effect that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;These kernel functions are available on kernel versions 2.6.15 and
</span><br>
<span class="quotelev1">&gt; greater&quot; + &quot;, and running this software on earlier versions will result
</span><br>
<span class="quotelev1">&gt; in undefined behaviour.&quot;
</span><br>
Comment added.
<br>
<p><span class="quotelev1">&gt; What I'm suggesting is not to parse information out of the build host,
</span><br>
<span class="quotelev1">&gt; but rather using the configured toolchain and options and try to
</span><br>
<span class="quotelev1">&gt; assemble the 64-bit atomic instructions. This would make it easy to
</span><br>
<span class="quotelev1">&gt; rebuild a generic ARMv6 package to support 64-bit atomics by just adding
</span><br>
<span class="quotelev1">&gt; -march=armv6zk to CFLAGS.
</span><br>
Ah, I get it.  I may see if I can come up with a nice test in the near future.
<br>
<p>For now, revised patch attached.
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10940/ompi_armv5-3rd.diff">ompi_armv5-3rd.diff</a>
</ul>
<!-- attachment="ompi_armv5-3rd.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10939.php">Jeff Squyres: "Re: [OMPI devel] June Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
