<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 30 12:46:30 2012" -->
<!-- isoreceived="20120430164630" -->
<!-- sent="Mon, 30 Apr 2012 17:47:43 +0100" -->
<!-- isosent="20120430164743" -->
<!-- name="Leif Lindholm" -->
<!-- email="Leif.Lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A172070_at_GEORGE.Emea.Arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="CALQMFq0aDDjonMmWOBB3zGcwQCVCK=GqQisg18Um3QFQv708uw_at_mail.gmail.com" -->
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
<strong>From:</strong> Leif Lindholm (<em>Leif.Lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-30 12:47:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
<p>I'm happy for this to go in - Jeff?
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: nave.notnilc_at_[hidden] [mailto:nave.notnilc_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Evan Clinton
</span><br>
<span class="quotelev1">&gt; Sent: 30 April 2012 05:12
</span><br>
<span class="quotelev1">&gt; To: Leif Lindholm
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Developers; Jeffrey Squyres
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [PATCH] Open MPI on ARMv5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for the comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Quote the documentation, __kuser_cmpxchg &quot;already includes memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; barriers as needed,&quot; so the code using it shouldn't need anything
</span><br>
<span class="quotelev3">&gt; &gt;&gt; extra.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fair enough - but could you put a comment to this effect into the
</span><br>
<span class="quotelev1">&gt; patch?
</span><br>
<span class="quotelev1">&gt; Comment added.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But I'm still not too happy about even the very unlikely risk of
</span><br>
<span class="quotelev2">&gt; &gt; something executing &quot;random stuff&quot; depending on kernel version.
</span><br>
<span class="quotelev2">&gt; &gt; For now, could you update the comments to that effect that:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;These kernel functions are available on kernel versions 2.6.15 and
</span><br>
<span class="quotelev2">&gt; &gt; greater&quot; + &quot;, and running this software on earlier versions will
</span><br>
<span class="quotelev1">&gt; result
</span><br>
<span class="quotelev2">&gt; &gt; in undefined behaviour.&quot;
</span><br>
<span class="quotelev1">&gt; Comment added.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What I'm suggesting is not to parse information out of the build
</span><br>
<span class="quotelev1">&gt; host,
</span><br>
<span class="quotelev2">&gt; &gt; but rather using the configured toolchain and options and try to
</span><br>
<span class="quotelev2">&gt; &gt; assemble the 64-bit atomic instructions. This would make it easy to
</span><br>
<span class="quotelev2">&gt; &gt; rebuild a generic ARMv6 package to support 64-bit atomics by just
</span><br>
<span class="quotelev1">&gt; adding
</span><br>
<span class="quotelev2">&gt; &gt; -march=armv6zk to CFLAGS.
</span><br>
<span class="quotelev1">&gt; Ah, I get it.  I may see if I can come up with a nice test in the near
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, revised patch attached.
</span><br>
<p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10940.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
