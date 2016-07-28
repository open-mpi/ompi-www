<?
$subject_val = "[OMPI devel] RFC: Upgrade trunk to AC 2.69";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 16:27:43 2012" -->
<!-- isoreceived="20120501202743" -->
<!-- sent="Tue, 1 May 2012 13:27:30 -0700" -->
<!-- isosent="20120501202730" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Upgrade trunk to AC 2.69" -->
<!-- id="EA954FD1-EBEF-44CB-BE93-4A85609B73B9_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Upgrade trunk to AC 2.69<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 16:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10952.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  libevent socket code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Upgrade the SVN trunk Autoconf requirement to AC 2.69 (just released last week)
<br>
<p>WHY: Some of our Fortran configury is now officially supported
<br>
<p>WHERE: ompi/config/*.m4
<br>
<p>TIMEOUT: Teleconf, Tuesday 8 May 2012
<br>
<p>---------------------
<br>
<p>More detail:
<br>
<p>Some of the configury that we have written in our own m4 is now officially supported by Autoconf 2.69.  Specifically, there's some new Fortran AC macros in 2.69 that do some of the things that we are doing by hand in m4.  It would be nice to get rid of our own m4 and replace it with officially-supported Autoconf m4 macros.
<br>
<p>This is a *developer only* issue, meaning that users who just &quot;./configure &amp;&amp; make install&quot; won't be affected.
<br>
<p>But all developers will need to upgrade to AC 2.69 -- autogen.pl will fail otherwise.
<br>
<p>The main issue driving the timing here is that the Fortran stuff is still fresh in my brain.  We certainly could defer the switch indefinitely, but the longer this later, the more stale all this new fortran stuff will get in my head (i.e., we'll keep using our own kludgey m4).
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
<li><strong>Next message:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10952.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  libevent socket code"</a>
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
