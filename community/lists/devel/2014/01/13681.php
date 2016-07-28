<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 03:08:10 2014" -->
<!-- isoreceived="20140110080810" -->
<!-- sent="Fri, 10 Jan 2014 09:08:05 +0100" -->
<!-- isosent="20140110080805" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="52CFAA65.4020501_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA174b-cSCZzwuNYcr30mvQgtRp0poaOWAMXLjME66-+tOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 03:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13682.php">Mike Dubman: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13667.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13686.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il 1/10/2014 5:00 AM, Paul Hargrove ha scritto:
<br>
<span class="quotelev1">&gt; The following might be helpful:
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/1653163/difference-between-statvfs-and-statfs-system-calls">http://stackoverflow.com/questions/1653163/difference-between-statvfs-and-statfs-system-calls</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to indicate that even if one does find a statfs() function,
</span><br>
<span class="quotelev1">&gt; there are multiple os-dependent versions and it should therefore be
</span><br>
<span class="quotelev1">&gt; avoided.  Since statvfs() is defined by POSIX, it should be preferred.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I am not mistaken, reordering the #if logic in path.c to use *only*
</span><br>
<span class="quotelev1">&gt; statvfs() when it is available (and *not* trying both as is done now)
</span><br>
<span class="quotelev1">&gt; would resolve the problems I am seeing with NetBSD and Solaris WITHOUT
</span><br>
<span class="quotelev1">&gt; any need to change the configure logic.  However, if one does want to
</span><br>
<span class="quotelev1">&gt; keep the current logic (or at least something similar) it looks like
</span><br>
<span class="quotelev1">&gt; configure should not assume statfs() is available without *also*
</span><br>
<span class="quotelev1">&gt; confirming that &quot;struct statfs&quot; is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>statvfs() is available on CYGWIN,
<br>
<a href="http://cygwin.com/cygwin-api/compatibility.html#std-susv4">http://cygwin.com/cygwin-api/compatibility.html#std-susv4</a>
<br>
<p>so no issue to use it as default for me
<br>
<p>Thanks
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13682.php">Mike Dubman: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13667.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13686.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
