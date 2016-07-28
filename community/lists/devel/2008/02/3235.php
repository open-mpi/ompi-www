<?
$subject_val = "Re: [OMPI devel] Please set svn:ignore properly";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 07:55:47 2008" -->
<!-- isoreceived="20080213125547" -->
<!-- sent="Wed, 13 Feb 2008 05:55:31 -0700" -->
<!-- isosent="20080213125531" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Please set svn:ignore properly" -->
<!-- id="C3D836D3.463F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7AEE05B2-F141-4FD7-AD20-747483F44CAB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Please set svn:ignore properly<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 07:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3236.php">Ralf Wildenhues: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3234.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3209.php">Jeff Squyres: "[OMPI devel] Please set svn:ignore properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>Reply:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Jeff
<br>
<p>I sympathize with your request. However, we should note that those of us not
<br>
using subversion for our work (e.g., using Hg or GIT) may not see this
<br>
problem despite best intentions. Those system set &quot;ignore&quot; on a global
<br>
basis, not on a per directory basis like svn. So (a) we just don't see any
<br>
warning about this, and (b) we don't have a way to set those properties in
<br>
our repositories.
<br>
<p>When we merge the work from our repository over to an svn checkout, we
<br>
typically do not build it there. This helps when we are transitioning back
<br>
and forth between the official svn repository and our local repository. So
<br>
we again won't see an svn:ignore issue.
<br>
<p>I know that doesn't help any, but I think it probably explains the majority
<br>
of what you are seeing. I'm not sure there is a good answer, unfortunately.
<br>
<p>Ralph
<br>
<p><p><p>On 2/12/08 7:46 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Developers --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you add a new component, framework, or anything that includes one
</span><br>
<span class="quotelev1">&gt; or more new directories: please be sure to set the svn:ignore property
</span><br>
<span class="quotelev1">&gt; on each new directory properly.  Here's the SVN docs on the svn:ignore
</span><br>
<span class="quotelev1">&gt; property:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.props.special.ig">http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.props.special.ig</a>
</span><br>
<span class="quotelev1">&gt; nore
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is proper to ignore all automatically-generated files, such as (but
</span><br>
<span class="quotelev1">&gt; not limited to):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *.la
</span><br>
<span class="quotelev1">&gt; *.lo
</span><br>
<span class="quotelev1">&gt; .libs
</span><br>
<span class="quotelev1">&gt; .deps
</span><br>
<span class="quotelev1">&gt; .dirstamp
</span><br>
<span class="quotelev1">&gt; Makefile
</span><br>
<span class="quotelev1">&gt; Makefile.in
</span><br>
<span class="quotelev1">&gt; static-components.h
</span><br>
<span class="quotelev1">&gt; ...etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3236.php">Ralf Wildenhues: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3234.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3209.php">Jeff Squyres: "[OMPI devel] Please set svn:ignore properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>Reply:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI devel] Please set svn:ignore properly"</a>
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
