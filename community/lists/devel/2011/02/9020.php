<?
$subject_val = "[OMPI devel] Mercurial upgrade to 1.7.x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 08:59:41 2011" -->
<!-- isoreceived="20110224135941" -->
<!-- sent="Thu, 24 Feb 2011 08:59:37 -0500" -->
<!-- isosent="20110224135937" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Mercurial upgrade to 1.7.x" -->
<!-- id="EC29D8B7-4493-48C1-8250-41C7A746C5C8_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Mercurial upgrade to 1.7.x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 08:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9021.php">Jeff Squyres: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>Previous message:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just upgraded mercurial on my dev cluster to 1.7.x and found a pleasant surprise when I ran an &quot;update&quot; procedure on one of my SVN+HG trees.  My update procedure basically goes like this:
<br>
<p>-----
<br>
hg up
<br>
svn up
<br>
./contrib/hg/build-hgignore.pl
<br>
hg addremove
<br>
hg ci -m &quot;Up to SVN r&lt;svn version&gt;&quot;
<br>
-----
<br>
<p>When I ran &quot;svn up&quot;, it removed opal/mca/paffinity/hwloc/hwloc and added opal/mca/common/hwloc/hwloc (i.e., we moved the embedded hwloc from paffinity to common).
<br>
<p>The nifty part is that &quot;hg addremove&quot; saw the removes and the adds, *but then figured out that it was actually a move*.  Here's one of the output status messages from &quot;hg addremove&quot;:
<br>
<p>recording removal of opal/mca/paffinity/hwloc/hwloc/AUTHORS as rename to opal/mca/common/hwloc/hwloc/AUTHORS (100% similar)
<br>
<p>Cool!
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
<li><strong>Next message:</strong> <a href="9021.php">Jeff Squyres: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>Previous message:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
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
