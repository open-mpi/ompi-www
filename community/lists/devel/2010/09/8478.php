<?
$subject_val = "[OMPI devel] Autogen improvements: ready for blast off";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 12 04:40:39 2010" -->
<!-- isoreceived="20100912084039" -->
<!-- sent="Sun, 12 Sep 2010 10:40:34 +0200" -->
<!-- isosent="20100912084034" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Autogen improvements: ready for blast off" -->
<!-- id="824EA16F-2ABB-4598-8DEF-4335FB17D23D_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Autogen improvements: ready for blast off<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-12 04:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8479.php">Jeff Squyres: "[OMPI devel] Updating copyright notices"</a>
<li><strong>Previous message:</strong> <a href="8477.php">Jeff Squyres: "[OMPI devel] Teleconf today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Terry: please add this to the agenda for the Tuesday call -- Ralph will talk about it since I may not be on the call)
<br>
<p>Ralph sent a mail a while ago describing improvements to autogen and the build process that Brian, Ralph, and I have been working on.  We think this work is now complete, and would like to bring it back to the SVN trunk.  Here's the bitbucket where this stuff lives:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/rhc/ompi-agen">http://bitbucket.org/rhc/ompi-agen</a>
<br>
<p>We'd like to bring this stuff in to the SVN trunk by the end of the week.  Please examine our changes and/or test the things you care about in the bitbucket.  The SVN commit to the trunk will look large mainly because it makes almost-identical changes in many Makefile.am's and configure.m4's (and we removed all configure.params files).
<br>
<p>********************************************************
<br>
*** THE MOST IMPORTANT THING DEVELOPERS NEED TO KNOW ***
<br>
********************************************************
<br>
<p>&lt;IMPORTANT&gt;
<br>
If your component has a configure.m4 file, it MUST call AC_CONFIG_FILES for your Makefile.am!  (and/or any files that you want configure to generate).  We converted all existing configure.m4 files -- the ompi/mca/btl/tcp/configure.m4 is a nice simple example to see what I mean.
<br>
&lt;/IMPORTANT&gt;
<br>
<p>There's some other changes and improvements, but most of them are behind the scenes.  We'll update the relevant wiki pages with all the other details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
<br>
<p>We understand that Mellanox may have some changes to their local branch of the OMPI build system; it is unknown whether they conflict with our new stuff or not.  Mellanox is out for ~2 weeks for holidays; we'd like to bring this stuff in to the SVN trunk sooner rather than waiting 2 weeks and letting the branch get overly stale.  Of course, when Mellanox does update and get the new stuff, if there are any problems, I'm happy to work through the issues with them.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8479.php">Jeff Squyres: "[OMPI devel] Updating copyright notices"</a>
<li><strong>Previous message:</strong> <a href="8477.php">Jeff Squyres: "[OMPI devel] Teleconf today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
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
