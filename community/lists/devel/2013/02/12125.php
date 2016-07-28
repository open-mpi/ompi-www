<?
$subject_val = "Re: [OMPI devel] RFC: Remove windows support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 11:42:48 2013" -->
<!-- isoreceived="20130218164248" -->
<!-- sent="Mon, 18 Feb 2013 17:42:40 +0100" -->
<!-- isosent="20130218164240" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove windows support" -->
<!-- id="51225A00.2090109_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F47D68_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove windows support<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 11:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Previous message:</strong> <a href="12124.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove windows support"</a>
<li><strong>In reply to:</strong> <a href="12124.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove windows support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Reply:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/18/2013 5:10 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; WHAT: Remove all Windows code from the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: This issue keeps coming up over and over and over...
</span><br>
<span class="quotelev1">&gt;
</span><br>
[cut]
<br>
<span class="quotelev1">&gt; 2. Remove all Windows code.  This involves some wholesale removing of components as well as a bunch of #if code throughout the code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ==&gt; Removing this code can probably be done in multiple SVN commits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2a. Removing Windows-only components (which, given the rate of change that we are planning for the trunk, may well need to be re-written if they are ever re-introduced into the tree).
</span><br>
<p>Cygwin does not use them. I'm currently building the trunk packages with
<br>
<p>--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv,if-windows,shmem-windows
<br>
<p>to specifically exclude them
<br>
<p><span class="quotelev1">&gt; 2b. Removing &quot;#if WINDOWS&quot; code (e.g., in opal/util/*, etc.).  This code may not be changing as much as the rest of the trunk, and may be suitable for svn reverting someday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This does kill Cygwin support, too.  I realize we have a downstream packager for Cygwin, but the fact that we can't get any developer support for Windows -- despite multiple appeals -- seems to imply that the Windows Open MPI audience is very, very small.  So while it feels a bit sad to kill it, it may still be the Right Thing to do.
</span><br>
<p>I assume it is __WINDOWS__
<br>
That is not defined on cygwin, so the build should survive
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a proposal, and is open for discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Previous message:</strong> <a href="12124.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove windows support"</a>
<li><strong>In reply to:</strong> <a href="12124.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove windows support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Reply:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
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
