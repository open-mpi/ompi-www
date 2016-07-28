<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 30 16:19:52 2012" -->
<!-- isoreceived="20120430201952" -->
<!-- sent="Mon, 30 Apr 2012 13:19:30 -0700" -->
<!-- isosent="20120430201930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="DD6F20A9-DFDA-4E9C-904E-7B33FF6F58CE_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A172070_at_GEORGE.Emea.Arm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-30 16:19:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm good with it as long as you guys are.
<br>
<p>Re the &quot;...for now&quot; comment; does this imply that you're going to do more later?
<br>
<p>BTW, I assume this is for trunk and the v1.6 branch, right?
<br>
<p><p>On Apr 30, 2012, at 9:47 AM, Leif Lindholm wrote:
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm happy for this to go in - Jeff?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt;    Leif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: nave.notnilc_at_[hidden] [mailto:nave.notnilc_at_[hidden]] On Behalf
</span><br>
<span class="quotelev2">&gt;&gt; Of Evan Clinton
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 30 April 2012 05:12
</span><br>
<span class="quotelev2">&gt;&gt; To: Leif Lindholm
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Developers; Jeffrey Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [PATCH] Open MPI on ARMv5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again for the comments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Quote the documentation, __kuser_cmpxchg &quot;already includes memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; barriers as needed,&quot; so the code using it shouldn't need anything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extra.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fair enough - but could you put a comment to this effect into the
</span><br>
<span class="quotelev2">&gt;&gt; patch?
</span><br>
<span class="quotelev2">&gt;&gt; Comment added.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I'm still not too happy about even the very unlikely risk of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something executing &quot;random stuff&quot; depending on kernel version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For now, could you update the comments to that effect that:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;These kernel functions are available on kernel versions 2.6.15 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; greater&quot; + &quot;, and running this software on earlier versions will
</span><br>
<span class="quotelev2">&gt;&gt; result
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in undefined behaviour.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Comment added.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I'm suggesting is not to parse information out of the build
</span><br>
<span class="quotelev2">&gt;&gt; host,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but rather using the configured toolchain and options and try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assemble the 64-bit atomic instructions. This would make it easy to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rebuild a generic ARMv6 package to support 64-bit atomics by just
</span><br>
<span class="quotelev2">&gt;&gt; adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -march=armv6zk to CFLAGS.
</span><br>
<span class="quotelev2">&gt;&gt; Ah, I get it.  I may see if I can come up with a nice test in the near
</span><br>
<span class="quotelev2">&gt;&gt; future.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For now, revised patch attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10941.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
