<?
$subject_val = "[OMPI devel] oshmem tests";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 08:14:20 2014" -->
<!-- isoreceived="20140220131420" -->
<!-- sent="Thu, 20 Feb 2014 13:14:18 +0000" -->
<!-- isosent="20140220131418" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem tests" -->
<!-- id="03BF6F60-76E2-42CE-B443-C02D6BBC2FA8_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem tests<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 08:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14191.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took the liberty of committing the openshmem test suite 1.0d to the ompi-tests SVN, mainly because there are some post-release patches that are necessary to get it to compile/run properly.
<br>
<p>Mellanox put some clever workarounds in the MTT ini file for a first round of patches, but I'm finding more patches are necessary (e.g., to declare time() and srand()).  So let's just commit it, ensure all the patches are send upstream, and see if 1.0e will contain all the fixes.
<br>
<p>Mellanox: did you send all your existing patches upstream already?
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
<li><strong>Next message:</strong> <a href="14191.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
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
