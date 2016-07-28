<?
$subject_val = "[OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 16 19:08:43 2012" -->
<!-- isoreceived="20120816230843" -->
<!-- sent="Thu, 16 Aug 2012 19:08:38 -0400" -->
<!-- isosent="20120816230838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="74D31A60-EFE3-4957-BD99-B5FD3138925E_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: OMPI git mirror on github.com<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-16 19:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11403.php">Jeff Squyres: "[OMPI devel] opal_hotel class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Create a git mirror of SVN (just like we have for Mercurial), host it on github.com (vs. hosting it on www.open-mpi.org)
<br>
<p>WHY: LANL and Mellanox both asked for git mirrors
<br>
<p>WHEN: Already done
<br>
<p>WHERE: <a href="https://github.com/open-mpi/ompi-svn-mirror">https://github.com/open-mpi/ompi-svn-mirror</a>
<br>
<p>------
<br>
<p>LANL and Mellanox prefer git to Mercurial, so they asked me to setup a git mirror for SVN (similar to what we have for Mercurial: <a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a>).  No problem; I did it.
<br>
<p>I was trying to setup gitweb on www.open-mpi.org and running into a few problems (I'm not super-familiar with the intricacies of git), and I had an epiphany: why not put the OMPI SVN git mirror on github.com?
<br>
<p>There doesn't seem to be much of a reason to host the git repo on www.open-mpi.org, and github.com has lots of services that git people tend to like.  So I did it.
<br>
<p>What do people think?  
<br>
<p>1. Having a git mirror at all (I think this is a no-brainer, since some of our active developers want it)
<br>
2. Hosting it at github.com instead of www.open-mpi.org
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11403.php">Jeff Squyres: "[OMPI devel] opal_hotel class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11405.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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
