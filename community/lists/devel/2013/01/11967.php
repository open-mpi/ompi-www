<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 09:56:01 2013" -->
<!-- isoreceived="20130123145601" -->
<!-- sent="Wed, 23 Jan 2013 14:55:54 -0000" -->
<!-- isosent="20130123145554" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="000001cdf979$bf428860$3dc79920$_at_lindholm@arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3E08BD9F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New ARM patch<br>
<strong>From:</strong> Leif Lindholm (<em>leif.lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 09:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11966.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>To summarize the out-of-line assembler changes of this patch:
<br>
- The patch is functionally correct for ARMv7 (which we know, because the
<br>
code
<br>
&nbsp;&nbsp;doesn't change from the existing sources, it simply renames the file).
<br>
- It also appears to be functionally correct for ARMv6, given reports of
<br>
&nbsp;&nbsp;people testing it. The fact that the source is a direct copy of the ARMv7
<br>
&nbsp;&nbsp;file with the barrier operations substituted also suggests that it would
<br>
&nbsp;&nbsp;work. However, this duplication of functionally identical code seems
<br>
&nbsp;&nbsp;suboptimal to me.
<br>
- It *might* be functionally correct for ARMv5, although I have seen no
<br>
&nbsp;&nbsp;reports of it actually being tested on ARMv5 - only of being tested on
<br>
&nbsp;&nbsp;ARMv6/ARMv7 when successfully built for ARMv5.
<br>
- It is not functionally correct on ARMv4.
<br>
<p>In addition to this, it effectively adds an additional build system layer,
<br>
by copying source files around at configuration time, on top of an already
<br>
very modular build system.
<br>
<p>Now, the ARMv4/ARMv5 out-of-line code didn't exist at all before this, and
<br>
was only supported through the inline assembly, so this code would be useful
<br>
to keep, fix, and incorporate properly.
<br>
<p>Basic point is - this is an insufficiently validated patch referred to as
<br>
&quot;an ugly kludge&quot; by the original author (Jon Masters_at_Red Hat), who created
<br>
it to be able to include it in the Fedora ARMv5 port. I has previously
<br>
provided suggestions for improvements, but it has still been submitted to
<br>
the Open MPI users list without any of those suggestions being acted on.
<br>
<p>I admit to being slightly miffed with it being accepted and applied without
<br>
ever being mentioned on the Open MPI developers list - only on the users
<br>
list. A list to which I now find myself subscribed to without having asked
<br>
for or being told about - miffed again.
<br>
<p>If the main purpose of accepting this patch is to provide a stopgap measure
<br>
for something better, I would much prefer simply incorporating your
<br>
CCASFLAGS
<br>
workaround into the configure script - removing the out-of-line asm
<br>
implementations of the atomics, but still providing a functional library for
<br>
the most common use-cases.
<br>
<p>Something like:
<br>
<p>Index: config/opal_config_asm.m4
<br>
===================================================================
<br>
--- config/opal_config_asm.m4	(revision 27881)
<br>
+++ config/opal_config_asm.m4	(working copy)
<br>
@@ -820,6 +820,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_arch=&quot;ARM&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_ASM_SUPPORT_64BIT=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_ASM_ARM_VERSION=6
<br>
+            CCASFLAGS+=&quot; -march=armv7-a&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE_UNQUOTED([OPAL_ASM_ARM_VERSION],
<br>
[$OPAL_ASM_ARM_VERSION],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[What ARM assembly version to use])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_GCC_INLINE_ASSIGN='&quot;mov %0, #0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
@@ -830,6 +831,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_arch=&quot;ARM&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_ASM_SUPPORT_64BIT=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_ASM_ARM_VERSION=5
<br>
+            CCASFLAGS+=&quot; -march=armv7-a&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE_UNQUOTED([OPAL_ASM_ARM_VERSION],
<br>
[$OPAL_ASM_ARM_VERSION],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[What ARM assembly version to use])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_GCC_INLINE_ASSIGN='&quot;mov %0, #0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
<p>Then we can get on with rewriting this code properly with less urgency.
<br>
<p>Regards,
<br>
<p>Leif
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: 22 January 2013 16:41
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] New ARM patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leif --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We talked about this a bit on our weekly call today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be sure: are you saying that George's patches are *functionally
</span><br>
<span class="quotelev1">&gt; correct* for ARM5/6/7 (and broken for ARM 4), but it would be better to
</span><br>
<span class="quotelev1">&gt; organize the code a bit better?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that is correct, was ARM4 working before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If ARM4 was working before, how important is it?  I.e., would it be ok
</span><br>
<span class="quotelev1">&gt; to accept George's stuff for 1.7.0, and then accept any
</span><br>
<span class="quotelev1">&gt; improvements/reshuffle/etc. from you for 1.7.1?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2013, at 12:15 PM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi George,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any chance of r27882 being reverted?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I told the Fedora guys when that patch originally surfaced[1],
</span><br>
<span class="quotelev2">&gt; &gt; I'm not overly fond of
</span><br>
<span class="quotelev2">&gt; &gt; - copying source files around as part of the configure step
</span><br>
<span class="quotelev2">&gt; &gt; - having separate source files for ARMv6 and ARMv7, when those
</span><br>
<span class="quotelev1">&gt; differences
</span><br>
<span class="quotelev2">&gt; &gt;  should be easily separated through macros (and would be reusable for
</span><br>
<span class="quotelev1">&gt; 32-bit
</span><br>
<span class="quotelev2">&gt; &gt;  ARMv8).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, I might have mentioned that bit only on a separate thread on
</span><br>
<span class="quotelev1">&gt; the Fedora list, but the ARMv4 support isn't actually correct (the ASM
</span><br>
<span class="quotelev1">&gt; uses ARMv5-only operations).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My alternate solution, the basic idea of which I posted over there
</span><br>
<span class="quotelev1">&gt; [2] was to separate ARMv5 and earlier from ARM. Effectively separating
</span><br>
<span class="quotelev1">&gt; the atomics implementation at the boundary where The ARM architecture
</span><br>
<span class="quotelev1">&gt; got load-linked/store-conditional, rather than having a separate source
</span><br>
<span class="quotelev1">&gt; file for every architecture version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="https://lists.fedoraproject.org/pipermail/arm/2012">https://lists.fedoraproject.org/pipermail/arm/2012</a>-
</span><br>
<span class="quotelev1">&gt; November/004434.html
</span><br>
<span class="quotelev2">&gt; &gt; [2] <a href="https://lists.fedoraproject.org/pipermail/arm/2012">https://lists.fedoraproject.org/pipermail/arm/2012</a>-
</span><br>
<span class="quotelev1">&gt; November/004460.html
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Leif
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11966.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
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
