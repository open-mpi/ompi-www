<?
$subject_val = "Re: [OMPI devel] Please set svn:ignore properly";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 08:32:39 2008" -->
<!-- isoreceived="20080213133239" -->
<!-- sent="Wed, 13 Feb 2008 08:32:12 -0500" -->
<!-- isosent="20080213133212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Please set svn:ignore properly" -->
<!-- id="DBBAE587-ABAB-4064-BE2F-58CB23613B2F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3D836D3.463F%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 08:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3239.php">Jeff Squyres: "[OMPI devel] Newest PLPA"</a>
<li><strong>Previous message:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Understood; I too, have started to use hg internally at Cisco.  But I  
<br>
still take care to set svn:ignore properly when I commit back to the  
<br>
main repository, for a few reasons:
<br>
<p>- SVN is the official SCM for OMPI; it's a choice to *not* use it
<br>
- there are still a good chunk of developers using SVN exclusively
<br>
- the svn:ignore information can be mined and used in other SCM  
<br>
systems, such as hg and git (hg has some internal &quot;ignore&quot; problems,  
<br>
but that's a different issue)
<br>
<p>So I still think that everyone should be setting svn:ignore properly.
<br>
<p>My $0.02...
<br>
<p><p>On Feb 13, 2008, at 7:55 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I sympathize with your request. However, we should note that those  
</span><br>
<span class="quotelev1">&gt; of us not
</span><br>
<span class="quotelev1">&gt; using subversion for our work (e.g., using Hg or GIT) may not see this
</span><br>
<span class="quotelev1">&gt; problem despite best intentions. Those system set &quot;ignore&quot; on a global
</span><br>
<span class="quotelev1">&gt; basis, not on a per directory basis like svn. So (a) we just don't  
</span><br>
<span class="quotelev1">&gt; see any
</span><br>
<span class="quotelev1">&gt; warning about this, and (b) we don't have a way to set those  
</span><br>
<span class="quotelev1">&gt; properties in
</span><br>
<span class="quotelev1">&gt; our repositories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we merge the work from our repository over to an svn checkout, we
</span><br>
<span class="quotelev1">&gt; typically do not build it there. This helps when we are  
</span><br>
<span class="quotelev1">&gt; transitioning back
</span><br>
<span class="quotelev1">&gt; and forth between the official svn repository and our local  
</span><br>
<span class="quotelev1">&gt; repository. So
</span><br>
<span class="quotelev1">&gt; we again won't see an svn:ignore issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that doesn't help any, but I think it probably explains the  
</span><br>
<span class="quotelev1">&gt; majority
</span><br>
<span class="quotelev1">&gt; of what you are seeing. I'm not sure there is a good answer,  
</span><br>
<span class="quotelev1">&gt; unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/12/08 7:46 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Developers --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you add a new component, framework, or anything that includes  
</span><br>
<span class="quotelev2">&gt;&gt; one
</span><br>
<span class="quotelev2">&gt;&gt; or more new directories: please be sure to set the svn:ignore  
</span><br>
<span class="quotelev2">&gt;&gt; property
</span><br>
<span class="quotelev2">&gt;&gt; on each new directory properly.  Here's the SVN docs on the  
</span><br>
<span class="quotelev2">&gt;&gt; svn:ignore
</span><br>
<span class="quotelev2">&gt;&gt; property:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.props.special.ig">http://svnbook.red-bean.com/en/1.4/svn-book.html#svn.advanced.props.special.ig</a>
</span><br>
<span class="quotelev2">&gt;&gt; nore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is proper to ignore all automatically-generated files, such as  
</span><br>
<span class="quotelev2">&gt;&gt; (but
</span><br>
<span class="quotelev2">&gt;&gt; not limited to):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *.la
</span><br>
<span class="quotelev2">&gt;&gt; *.lo
</span><br>
<span class="quotelev2">&gt;&gt; .libs
</span><br>
<span class="quotelev2">&gt;&gt; .deps
</span><br>
<span class="quotelev2">&gt;&gt; .dirstamp
</span><br>
<span class="quotelev2">&gt;&gt; Makefile
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.in
</span><br>
<span class="quotelev2">&gt;&gt; static-components.h
</span><br>
<span class="quotelev2">&gt;&gt; ...etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3239.php">Jeff Squyres: "[OMPI devel] Newest PLPA"</a>
<li><strong>Previous message:</strong> <a href="3237.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
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
