<?
$subject_val = "Re: [OMPI devel] RFC: Remove windows support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 11:29:24 2013" -->
<!-- isoreceived="20130226162924" -->
<!-- sent="Tue, 26 Feb 2013 16:29:19 +0000" -->
<!-- isosent="20130226162919" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove windows support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F5CB86_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="94D78DD8-5CE8-40CB-B4C2-C5E5971F413A_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 11:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12168.php">Eugene Loh: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12166.php">Siegmar Gross: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No other issues were raised about this, and today was the timeout.
<br>
<p>On the call today, Ralph volunteered to do the work:
<br>
<p>- svn rm the windows-specific components
<br>
- remove all the #if Windows-specific code
<br>
<p>He'll be doing that over the next week or so.
<br>
<p><p><p>On Feb 18, 2013, at 1:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Marco - I was hoping that would be the case!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 18, 2013, at 8:42 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/18/2013 5:10 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Remove all Windows code from the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: This issue keeps coming up over and over and over...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [cut]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Remove all Windows code.  This involves some wholesale removing of components as well as a bunch of #if code throughout the code base.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ==&gt; Removing this code can probably be done in multiple SVN commits:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2a. Removing Windows-only components (which, given the rate of change that we are planning for the trunk, may well need to be re-written if they are ever re-introduced into the tree).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cygwin does not use them. I'm currently building the trunk packages with
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv,if-windows,shmem-windows
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to specifically exclude them
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2b. Removing &quot;#if WINDOWS&quot; code (e.g., in opal/util/*, etc.).  This code may not be changing as much as the rest of the trunk, and may be suitable for svn reverting someday.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This does kill Cygwin support, too.  I realize we have a downstream packager for Cygwin, but the fact that we can't get any developer support for Windows -- despite multiple appeals -- seems to imply that the Windows Open MPI audience is very, very small.  So while it feels a bit sad to kill it, it may still be the Right Thing to do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I assume it is __WINDOWS__
</span><br>
<span class="quotelev2">&gt;&gt; That is not defined on cygwin, so the build should survive
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a proposal, and is open for discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12168.php">Eugene Loh: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12166.php">Siegmar Gross: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12126.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove windows support"</a>
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
