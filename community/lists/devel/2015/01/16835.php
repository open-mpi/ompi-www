<?
$subject_val = "[OMPI devel] Git tip of the week: &quot;hub&quot; script";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 19:17:03 2015" -->
<!-- isoreceived="20150129001703" -->
<!-- sent="Thu, 29 Jan 2015 00:17:01 +0000" -->
<!-- isosent="20150129001701" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Git tip of the week: &amp;quot;hub&amp;quot; script" -->
<!-- id="2B40097F-759A-4DC3-AA62-152974E360C6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Git tip of the week: &quot;hub&quot; script<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 19:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Previous message:</strong> <a href="16834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTL interfaces"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a totally sweet command line script that does a lot of common Github actions for you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://hub.github.com/">https://hub.github.com/</a>
<br>
<p>On OSX, you can install via Homebrew or ports.  There's precompiled binaries for Linux.
<br>
<p>One common OMPI use case:
<br>
<p>------
<br>
$ cd path_to_my_ompi_release_clone
<br>
$ hub checkout <a href="https://github.com/open-mpi/ompi-release/pull/173">https://github.com/open-mpi/ompi-release/pull/173</a>
<br>
<p>--&gt; Note: that's just the URL of the PR (copied from my web browser)
<br>
<p>Updating rhc54
<br>
remote: Counting objects: 6, done.
<br>
remote: Compressing objects: 100% (6/6), done.
<br>
remote: Total 6 (delta 0), reused 1 (delta 0)
<br>
Unpacking objects: 100% (6/6), done.
<br>
<span class="quotelev1">&gt;From git://github.com/rhc54/ompi-release
</span><br>
* [new branch]      cmr/george -&gt; rhc54/cmr/george
<br>
Branch rhc54-cmr/george set up to track remote branch cmr/george from rhc54.
<br>
Switched to a new branch 'rhc54-cmr/george'
<br>
-----
<br>
<p>And now I'm on a local branch representing that PR.  I can autogen/build/install/MTT/etc.  And then &quot;git checkout v1.8&quot; to go back to the stock v1.8 branch when I'm done.
<br>
<p>Sweet!
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
<li><strong>Next message:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Previous message:</strong> <a href="16834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTL interfaces"</a>
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
