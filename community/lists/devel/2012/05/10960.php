<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 13:56:54 2012" -->
<!-- isoreceived="20120502175654" -->
<!-- sent="Wed, 2 May 2012 18:58:17 +0100" -->
<!-- isosent="20120502175817" -->
<!-- name="Leif Lindholm" -->
<!-- email="Leif.Lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A1720CA_at_GEORGE.Emea.Arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A2A5E8C_at_GEORGE.Emea.Arm.com" -->
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
<strong>Date:</strong> 2012-05-02 13:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10959.php">Jeff Squyres: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Evan, Jeff,
<br>
<p>The Fedora guys are having trouble building the armv5tel variant (well, they did before this patch too, but... :)
<br>
<p>It appears the lack of out-of-line assembly causes issues in that it still attempts to assemble the armv7 file:
<br>
<a href="http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log">http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log</a>
<br>
<p>Evan - how are you building this?
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Leif Lindholm
</span><br>
<span class="quotelev1">&gt; Sent: 30 April 2012 22:05
</span><br>
<span class="quotelev1">&gt; To: Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Developers; Evan Clinton
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [PATCH] Open MPI on ARMv5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My only question mark was with regards to the lack of out-of-line
</span><br>
<span class="quotelev1">&gt; assembly implementations for the older architecture versions (as in &quot;I
</span><br>
<span class="quotelev1">&gt; don't know whether people would care about that or not&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does apply cleanly-ish (non-interactively) on top of 1.5.5, but I
</span><br>
<span class="quotelev1">&gt; don't know if any further drops off 1.5 are planned?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt;     Leif
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 30 April 2012 21:19
</span><br>
<span class="quotelev1">&gt; To: Leif Lindholm
</span><br>
<span class="quotelev1">&gt; Cc: Evan Clinton; Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [PATCH] Open MPI on ARMv5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm good with it as long as you guys are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re the &quot;...for now&quot; comment; does this imply that you're going to do
</span><br>
<span class="quotelev1">&gt; more later?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I assume this is for trunk and the v1.6 branch, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 30, 2012, at 9:47 AM, Leif Lindholm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm happy for this to go in - Jeff?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /
</span><br>
<span class="quotelev2">&gt; &gt;    Leif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: nave.notnilc_at_[hidden] [mailto:nave.notnilc_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Of Evan Clinton
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: 30 April 2012 05:12
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Leif Lindholm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cc: Open MPI Developers; Jeffrey Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI devel] [PATCH] Open MPI on ARMv5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks again for the comments.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Quote the documentation, __kuser_cmpxchg &quot;already includes memory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; barriers as needed,&quot; so the code using it shouldn't need anything
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; extra.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Fair enough - but could you put a comment to this effect into the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; patch?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Comment added.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But I'm still not too happy about even the very unlikely risk of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; something executing &quot;random stuff&quot; depending on kernel version.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For now, could you update the comments to that effect that:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;These kernel functions are available on kernel versions 2.6.15 and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; greater&quot; + &quot;, and running this software on earlier versions will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; result
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in undefined behaviour.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Comment added.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What I'm suggesting is not to parse information out of the build
</span><br>
<span class="quotelev3">&gt; &gt;&gt; host,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; but rather using the configured toolchain and options and try to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; assemble the 64-bit atomic instructions. This would make it easy to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rebuild a generic ARMv6 package to support 64-bit atomics by just
</span><br>
<span class="quotelev3">&gt; &gt;&gt; adding
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -march=armv6zk to CFLAGS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah, I get it.  I may see if I can come up with a nice test in the
</span><br>
<span class="quotelev1">&gt; near
</span><br>
<span class="quotelev3">&gt; &gt;&gt; future.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For now, revised patch attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- IMPORTANT NOTICE: The contents of this email and any attachments
</span><br>
<span class="quotelev1">&gt; are confidential and may also be privileged. If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient, please notify the sender immediately and do not
</span><br>
<span class="quotelev1">&gt; disclose the contents to any other person, use it for any purpose, or
</span><br>
<span class="quotelev1">&gt; store or copy the information in any medium.  Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- IMPORTANT NOTICE: The contents of this email and any attachments are
</span><br>
<span class="quotelev1">&gt; confidential and may also be privileged. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please notify the sender immediately and do not disclose the
</span><br>
<span class="quotelev1">&gt; contents to any other person, use it for any purpose, or store or copy
</span><br>
<span class="quotelev1">&gt; the information in any medium.  Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10959.php">Jeff Squyres: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
