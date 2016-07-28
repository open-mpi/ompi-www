<?
$subject_val = "[MTT devel] MTT: let's use git tags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 11:49:36 2014" -->
<!-- isoreceived="20140624154936" -->
<!-- sent="Tue, 24 Jun 2014 15:49:34 +0000" -->
<!-- isosent="20140624154934" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] MTT: let's use git tags" -->
<!-- id="E00F05B6-7535-473B-BABC-D5F4E1A91091_at_cisco.com" -->
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
<strong>Subject:</strong> [MTT devel] MTT: let's use git tags<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 11:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0635.php">Christoph Niethammer: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master	updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">Christoph Niethammer: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0635.php">Christoph Niethammer: "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The topic came up today that MTT sometimes has bugs, particularly w.r.t. ongoing MTT development.
<br>
<p>It seems like we should use git tags to let the OMPI/testing community know which tag they should be using (vs. HEAD).
<br>
<p>To that end, I have created a &quot;v3.0.0&quot; tag that exists before the controversial set of commits I pushed the other day -- e12386e.  Assumedly, when we fix whatever problem Mellanox is setting with commits beyond e12386e, we can call that &quot;v3.0.1&quot;, or some such, and ask everyone to move up to it.
<br>
<p>So those who need stability should stick back at tags, and those who want to help with development can be at the HEAD.
<br>
<p>How does that sound?
<br>
<p>If that sounds ok, I'll ask the OMPI test community to git checkout v3.0.0.  And in the future, we'll ask the OMPI test community to update to the next relevant tag, etc.
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
<li><strong>Next message:</strong> <a href="0635.php">Christoph Niethammer: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master	updated.	016088f2a0831b32ab5fd6f60f4cabe67e92e594"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">Christoph Niethammer: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0635.php">Christoph Niethammer: "Re: [MTT devel] MTT: let's use git tags"</a>
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
