<?
$subject_val = "[hwloc-devel] tarball growing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 02:28:02 2010" -->
<!-- isoreceived="20100928062802" -->
<!-- sent="Tue, 28 Sep 2010 08:27:55 +0200" -->
<!-- isosent="20100928062755" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] tarball growing" -->
<!-- id="4CA18AEB.1060702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] tarball growing<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 02:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1348.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1346.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2507)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1349.php">Ashley Pittman: "Re: [hwloc-devel] tarball growing"</a>
<li><strong>Reply:</strong> <a href="1349.php">Ashley Pittman: "Re: [hwloc-devel] tarball growing"</a>
<li><strong>Reply:</strong> <a href="1352.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] tarball growing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bz2 tarball of hwloc 1.0.2 was 2.1MB. hwloc 1.1 will be at least
<br>
2.7MB. I know that bandwidth is free, but I am still not confortable
<br>
with the size increasing that much.
<br>
<p>Obviously, the problem comes from tarballs under tests/linux:
<br>
<p>605774 28 sept. 08:12 tests/linux/256ppc-8n8s4t.tar.gz
<br>
311293 28 sept. 08:12 tests/linux/256ppc-8n8s4t-nocache.tar.gz
<br>
232021 28 sept. 08:12 tests/linux/256ppc-8n8s4t-nosys.tar.gz
<br>
&nbsp;81856 28 sept. 08:12 tests/linux/48amd64-4d2n6c-sparse.tar.gz
<br>
&nbsp;72906 28 sept. 08:12 tests/linux/96em64t-4n4d3ca2co.tar.gz
<br>
&nbsp;72839 28 sept. 08:12 tests/linux/128ia64-17n4s2c.tar.gz
<br>
&nbsp;53033 28 sept. 08:12 tests/linux/64fake-4n2s2ca2c2t.tar.gz
<br>
&nbsp;41148 28 sept. 08:12 tests/linux/256ia64-64n2s2c.tar.gz
<br>
&nbsp;29786 28 sept. 08:12 tests/linux/8em64t-4c2t.tar.gz
<br>
&nbsp;23947 28 sept. 08:12 tests/linux/256ia64-64n2s2c.tar.gz.output
<br>
&nbsp;20391 28 sept. 08:12 tests/linux/256ppc-8n8s4t-nocache.tar.gz.output
<br>
&nbsp;20391 28 sept. 08:12 tests/linux/256ppc-8n8s4t.tar.gz.output
<br>
<p><p><p>Ideas:
<br>
1) Remove useless tarballs: Some early machines are very simple and
<br>
likely covered by larger machines added later to the test suite. But
<br>
those early tarballs are small anyway, there's not much improvement to
<br>
expect there.
<br>
2) The *extracted* size of the tarballs looks mostly related to
<br>
directory sizes (multiple of 4kB), I don't know if we can hope an
<br>
improvement inside the tarball for these, I assume that tar already
<br>
compresses them properly...
<br>
3) Reduce duplication between variants: Have the test script remove some
<br>
parts of the extracted tarball directly instead of keeping multiple
<br>
variants of the same machines with/without some files. This one should
<br>
help, I'll work on it tonight.
<br>
4) Remove some useless files from the tarballs. Assuming we know what
<br>
we'll need in the future... there's likely something to remove under the
<br>
topology, cache, and device-tree directories.
<br>
5) Stop distributing tarballs. having them in SVN is useful. I am not
<br>
sure about this one, maybe wait for some users to actually complain
<br>
about the tarball size :)
<br>
6) Try to generate some of our huge tarballs manually. Any intern to do
<br>
this? :)
<br>
<p>Any other idea?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1348.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1346.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2507)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1349.php">Ashley Pittman: "Re: [hwloc-devel] tarball growing"</a>
<li><strong>Reply:</strong> <a href="1349.php">Ashley Pittman: "Re: [hwloc-devel] tarball growing"</a>
<li><strong>Reply:</strong> <a href="1352.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] tarball growing"</a>
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
