<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 10:48:18 2010" -->
<!-- isoreceived="20100621144818" -->
<!-- sent="Mon, 21 Jun 2010 10:48:13 -0400" -->
<!-- isosent="20100621144813" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc and rpath" -->
<!-- id="54231C06-E9E9-4C19-9262-FCDF0B9FC5B6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100618231815.GP4931_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 10:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1062.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2232)"</a>
<li><strong>In reply to:</strong> <a href="1060.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry; I was on a plane while most of this conversation was occurring on Friday.
<br>
<p>I see that Samuel converted to use LDADD instead of LIBS.  Cool.  
<br>
<p>I still see -rpath being inserted in the final link step for libhwloc.so (SVN build using AC 2.65, AM 1.11.1, LT 2.2.6b):
<br>
<p>/bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99   -fvisibility=hidden -I/usr/include/libxml2   -std=gnu99   -fvisibility=hidden  -I/users/jsquyres/svn/hwloc/include -Wall -Wunused-parameter -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic    -no-undefined  -version-number 0:0:0 -lxml2 -lz -lm    -o libhwloc.la -rpath /home/jsquyres/bogus/lib topology.lo traversal.lo topology-synthetic.lo bind.lo cpuset.lo misc.lo topology-xml.lo  topology-linux.lo       topology-x86.lo  -libverbs
<br>
<p>But unless I'm mistaken, libtool then strips it out:
<br>
<p>libtool: link: gcc -shared  .libs/topology.o .libs/traversal.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-xml.o .libs/topology-linux.o .libs/topology-x86.o   -lxml2 -lz -lm -libverbs    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.0.0
<br>
<p>Does this latest change make it work acceptably for you?
<br>
<p><p><p>On Jun 18, 2010, at 7:18 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Samuel Thibault, le Sat 19 Jun 2010 00:03:49 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; What is the output of gcc -print-search-dirs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, no, I misread the configure script, sys_lib_dlsearch_path_spec
</span><br>
<span class="quotelev1">&gt; comes from ld.so.conf (that makes sense actually).  Could you post your
</span><br>
<span class="quotelev1">&gt; /etc/ld.so.conf (and any file that it could include)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1062.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2232)"</a>
<li><strong>In reply to:</strong> <a href="1060.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
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
