<?
$subject_val = "Re: [hwloc-devel] tarball growing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 06:40:18 2010" -->
<!-- isoreceived="20100928104018" -->
<!-- sent="Tue, 28 Sep 2010 06:40:14 -0400" -->
<!-- isosent="20100928104014" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] tarball growing" -->
<!-- id="55253F5C-39A5-4FFD-B00F-104ED63BAD6E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CA18AEB.1060702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] tarball growing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 06:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1353.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1347.php">Brice Goglin: "[hwloc-devel] tarball growing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eh. Other than not liking it, is there a *problem* with the tarball getting larger?  
<br>
<p>We could also make 2 tarballs if you really care - one with the tests and one without. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Sep 28, 2010, at 2:28 AM, &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The bz2 tarball of hwloc 1.0.2 was 2.1MB. hwloc 1.1 will be at least
</span><br>
<span class="quotelev1">&gt; 2.7MB. I know that bandwidth is free, but I am still not confortable
</span><br>
<span class="quotelev1">&gt; with the size increasing that much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously, the problem comes from tarballs under tests/linux:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 605774 28 sept. 08:12 tests/linux/256ppc-8n8s4t.tar.gz
</span><br>
<span class="quotelev1">&gt; 311293 28 sept. 08:12 tests/linux/256ppc-8n8s4t-nocache.tar.gz
</span><br>
<span class="quotelev1">&gt; 232021 28 sept. 08:12 tests/linux/256ppc-8n8s4t-nosys.tar.gz
</span><br>
<span class="quotelev1">&gt; 81856 28 sept. 08:12 tests/linux/48amd64-4d2n6c-sparse.tar.gz
</span><br>
<span class="quotelev1">&gt; 72906 28 sept. 08:12 tests/linux/96em64t-4n4d3ca2co.tar.gz
</span><br>
<span class="quotelev1">&gt; 72839 28 sept. 08:12 tests/linux/128ia64-17n4s2c.tar.gz
</span><br>
<span class="quotelev1">&gt; 53033 28 sept. 08:12 tests/linux/64fake-4n2s2ca2c2t.tar.gz
</span><br>
<span class="quotelev1">&gt; 41148 28 sept. 08:12 tests/linux/256ia64-64n2s2c.tar.gz
</span><br>
<span class="quotelev1">&gt; 29786 28 sept. 08:12 tests/linux/8em64t-4c2t.tar.gz
</span><br>
<span class="quotelev1">&gt; 23947 28 sept. 08:12 tests/linux/256ia64-64n2s2c.tar.gz.output
</span><br>
<span class="quotelev1">&gt; 20391 28 sept. 08:12 tests/linux/256ppc-8n8s4t-nocache.tar.gz.output
</span><br>
<span class="quotelev1">&gt; 20391 28 sept. 08:12 tests/linux/256ppc-8n8s4t.tar.gz.output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideas:
</span><br>
<span class="quotelev1">&gt; 1) Remove useless tarballs: Some early machines are very simple and
</span><br>
<span class="quotelev1">&gt; likely covered by larger machines added later to the test suite. But
</span><br>
<span class="quotelev1">&gt; those early tarballs are small anyway, there's not much improvement to
</span><br>
<span class="quotelev1">&gt; expect there.
</span><br>
<span class="quotelev1">&gt; 2) The *extracted* size of the tarballs looks mostly related to
</span><br>
<span class="quotelev1">&gt; directory sizes (multiple of 4kB), I don't know if we can hope an
</span><br>
<span class="quotelev1">&gt; improvement inside the tarball for these, I assume that tar already
</span><br>
<span class="quotelev1">&gt; compresses them properly...
</span><br>
<span class="quotelev1">&gt; 3) Reduce duplication between variants: Have the test script remove some
</span><br>
<span class="quotelev1">&gt; parts of the extracted tarball directly instead of keeping multiple
</span><br>
<span class="quotelev1">&gt; variants of the same machines with/without some files. This one should
</span><br>
<span class="quotelev1">&gt; help, I'll work on it tonight.
</span><br>
<span class="quotelev1">&gt; 4) Remove some useless files from the tarballs. Assuming we know what
</span><br>
<span class="quotelev1">&gt; we'll need in the future... there's likely something to remove under the
</span><br>
<span class="quotelev1">&gt; topology, cache, and device-tree directories.
</span><br>
<span class="quotelev1">&gt; 5) Stop distributing tarballs. having them in SVN is useful. I am not
</span><br>
<span class="quotelev1">&gt; sure about this one, maybe wait for some users to actually complain
</span><br>
<span class="quotelev1">&gt; about the tarball size :)
</span><br>
<span class="quotelev1">&gt; 6) Try to generate some of our huge tarballs manually. Any intern to do
</span><br>
<span class="quotelev1">&gt; this? :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1353.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1347.php">Brice Goglin: "[hwloc-devel] tarball growing"</a>
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
