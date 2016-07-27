<?
$subject_val = "[hwloc-devel] Stop updating Trac wiki (Github migration)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 12:03:53 2014" -->
<!-- isoreceived="20140909160353" -->
<!-- sent="Tue, 9 Sep 2014 16:03:52 +0000" -->
<!-- isosent="20140909160352" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Stop updating Trac wiki (Github migration)" -->
<!-- id="5E87E23C-C977-475B-B4A1-CB2139C1978C_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Stop updating Trac wiki (Github migration)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 12:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
<li><strong>Previous message:</strong> <a href="4207.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-4-gd8c3f3d)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
<li><strong>Reply:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As part of our migration to Github, there are three main things to convert:
<br>
<p>1. SVN -&gt; Git
<br>
2. Trac wiki -&gt; Github markdown
<br>
3. Track tickets -&gt; Github issues
<br>
<p>I have a good automated solution for #1; that can be run whenever we're ready to switchover.
<br>
<p>I used an 80% automated solution for #2 (i.e., a bunch of regexps), and then did a bunch of manual fixups for what the regexps didn't catch.  You can see the result here (temporarily):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/jsquyres/ompi-test/wiki">https://github.com/jsquyres/ompi-test/wiki</a>
<br>
<p>*** PLEASE DO NOT UPDATE THE TRAC WIKI ANY MORE!  The trac wiki page conversion is basically done, and I don't intend to do it again.
<br>
<p>Meaning: if you make any updates to the Trac wiki, they won't be brought over to the new github wiki.
<br>
<p>Lastly, I'm just starting to see about converting Trac tickets to Github issues.  I'll be working on that this week, and hope to have updated information for everyone for next Tuesday's call.
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
<li><strong>Next message:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
<li><strong>Previous message:</strong> <a href="4207.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-4-gd8c3f3d)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
<li><strong>Reply:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
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
