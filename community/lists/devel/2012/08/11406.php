<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 17 07:07:53 2012" -->
<!-- isoreceived="20120817110753" -->
<!-- sent="Fri, 17 Aug 2012 07:07:47 -0400" -->
<!-- isosent="20120817110747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="CD00B250-D087-4482-92BB-C68EBD45B7FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D35DBC1F-B674-4DF2-999F-D1826B6CE930_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: OMPI git mirror on github.com<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-17 07:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11407.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3161: openib udcm finalize causes open async thread to abort"</a>
<li><strong>Previous message:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11409.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11409.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Come to think of it, why not host the official mercurial SVN mirror repo on Bitbucket for the same reason (lots of nice hg features on Bitbucket -- nicer than hgweb/www.open-mpi.org's hosting).
<br>
<p>There's no need to delete the original mercurial SVN mirror on www.open-mpi.org (because I know of at least one group who is actively using it), but we could deprecate it and schedule to take it down in, say, 6 months or so.
<br>
<p><p>On Aug 16, 2012, at 9:06 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Putting it on github is a good solution - gitweb can be rather annoying, from prior experience.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2012, at 4:08 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Create a git mirror of SVN (just like we have for Mercurial), host it on github.com (vs. hosting it on www.open-mpi.org)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: LANL and Mellanox both asked for git mirrors
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Already done
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: <a href="https://github.com/open-mpi/ompi-svn-mirror">https://github.com/open-mpi/ompi-svn-mirror</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; LANL and Mellanox prefer git to Mercurial, so they asked me to setup a git mirror for SVN (similar to what we have for Mercurial: <a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a>).  No problem; I did it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was trying to setup gitweb on www.open-mpi.org and running into a few problems (I'm not super-familiar with the intricacies of git), and I had an epiphany: why not put the OMPI SVN git mirror on github.com?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There doesn't seem to be much of a reason to host the git repo on www.open-mpi.org, and github.com has lots of services that git people tend to like.  So I did it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What do people think?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Having a git mirror at all (I think this is a no-brainer, since some of our active developers want it)
</span><br>
<span class="quotelev2">&gt;&gt; 2. Hosting it at github.com instead of www.open-mpi.org
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="11407.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3161: openib udcm finalize causes open async thread to abort"</a>
<li><strong>Previous message:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11409.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11409.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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
