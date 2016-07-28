<?
$subject_val = "[hwloc-devel] API, and make distcheck failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 02:08:22 2009" -->
<!-- isoreceived="20090915060822" -->
<!-- sent="Tue, 15 Sep 2009 08:07:49 +0200" -->
<!-- isosent="20090915060749" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] API, and make distcheck failure" -->
<!-- id="4AAF2F35.7060001_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] API, and make distcheck failure<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 02:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0042.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Reply:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just gave a deep look and fixed several minor things in the API. The
<br>
biggest thing I am not sure about is:
<br>
We currently have several functions that may find something by type or
<br>
by depth (for instance the number of objects, the n-th one, the next
<br>
one, ...). These functions are currently named
<br>
&quot;hwloc_get_foo_by_depth(..., depth)&quot; if looking by depth and
<br>
&quot;hwloc_get_foo(..., type)&quot; if by type. The latter may fail if there are
<br>
multiple levels with same types (e.g. Caches), the former always work
<br>
(unless depth is invalid). Should we keep these function name patterns
<br>
or change them to something else? like _by_depth/_by_type or
<br>
&lt;nothing&gt;/_by_type?
<br>
<p>Also, make distcheck currently fails here. It looks for index.html
<br>
inside the build dir while it should look inside the source dir.
<br>
However, it seems that it correctly looks inside the source dir when
<br>
building outside of make distcheck. Don't know what's going on...
<br>
<p>Brice
<br>
<p><p>LC_ALL=C /usr/bin/w3m ../doc/doxygen-doc/html/index.html | sed -n -e '/^Introduction$/,$p' &gt; ../../README
<br>
/bin/bash: ../../README: Permission denied
<br>
w3m: Can't load ../doc/doxygen-doc/html/index.html.
<br>
make[3]: *** [../../README] Error 1
<br>
make[3]: Leaving directory `/home/bgoglin/libtopology/build/hwloc-0.9.1a1-1/_build/doc'
<br>
ERROR: generating new README failed
<br>
ERROR: cannot continue
<br>
make[2]: *** [dist-hook] Error 1
<br>
make[2]: Leaving directory `/home/bgoglin/libtopology/build/hwloc-0.9.1a1-1/_build'
<br>
make[1]: *** [distdir] Error 2
<br>
make[1]: Leaving directory `/home/bgoglin/libtopology/build/hwloc-0.9.1a1-1/_build'
<br>
make: *** [distcheck] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0042.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Reply:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
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
