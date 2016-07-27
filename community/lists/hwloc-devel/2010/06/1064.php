<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 10:51:15 2010" -->
<!-- isoreceived="20100621145115" -->
<!-- sent="Mon, 21 Jun 2010 16:51:09 +0200" -->
<!-- isosent="20100621145109" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc and rpath" -->
<!-- id="20100621145109.GO5034_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54231C06-E9E9-4C19-9262-FCDF0B9FC5B6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 10:51:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1063.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1063.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 21 Jun 2010 10:48:13 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; I still see -rpath being inserted in the final link step for libhwloc.so (SVN build using AC 2.65, AM 1.11.1, LT 2.2.6b):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99   -fvisibility=hidden -I/usr/include/libxml2   -std=gnu99   -fvisibility=hidden  -I/users/jsquyres/svn/hwloc/include -Wall -Wunused-parameter -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic    -no-undefined  -version-number 0:0:0 -lxml2 -lz -lm    -o libhwloc.la -rpath /home/jsquyres/bogus/lib topology.lo traversal.lo topology-synthetic.lo bind.lo cpuset.lo misc.lo topology-xml.lo  topology-linux.lo       topology-x86.lo  -libverbs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But unless I'm mistaken, libtool then strips it out:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -shared  .libs/topology.o .libs/traversal.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-xml.o .libs/topology-linux.o .libs/topology-x86.o   -lxml2 -lz -lm -libverbs    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.0.0
</span><br>
<p>I was also seeing that behavior with LIBS, so I don't think turning to
<br>
LDADD fixed that part.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1063.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1063.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
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
