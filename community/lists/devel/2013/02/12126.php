<?
$subject_val = "Re: [OMPI devel] RFC: Remove windows support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 13:34:33 2013" -->
<!-- isoreceived="20130218183433" -->
<!-- sent="Mon, 18 Feb 2013 10:34:25 -0800" -->
<!-- isosent="20130218183425" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove windows support" -->
<!-- id="94D78DD8-5CE8-40CB-B4C2-C5E5971F413A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51225A00.2090109_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 13:34:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12127.php">Bhagya Raju K: "[OMPI devel] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>In reply to:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Reply:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Marco - I was hoping that would be the case!
<br>
<p><p>On Feb 18, 2013, at 8:42 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 2/18/2013 5:10 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Remove all Windows code from the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: This issue keeps coming up over and over and over...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev2">&gt;&gt; 2. Remove all Windows code.  This involves some wholesale removing of components as well as a bunch of #if code throughout the code base.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   ==&gt; Removing this code can probably be done in multiple SVN commits:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2a. Removing Windows-only components (which, given the rate of change that we are planning for the trunk, may well need to be re-written if they are ever re-introduced into the tree).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cygwin does not use them. I'm currently building the trunk packages with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv,if-windows,shmem-windows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to specifically exclude them
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2b. Removing &quot;#if WINDOWS&quot; code (e.g., in opal/util/*, etc.).  This code may not be changing as much as the rest of the trunk, and may be suitable for svn reverting someday.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This does kill Cygwin support, too.  I realize we have a downstream packager for Cygwin, but the fact that we can't get any developer support for Windows -- despite multiple appeals -- seems to imply that the Windows Open MPI audience is very, very small.  So while it feels a bit sad to kill it, it may still be the Right Thing to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume it is __WINDOWS__
</span><br>
<span class="quotelev1">&gt; That is not defined on cygwin, so the build should survive
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a proposal, and is open for discussion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<li><strong>Next message:</strong> <a href="12127.php">Bhagya Raju K: "[OMPI devel] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>In reply to:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Reply:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
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
