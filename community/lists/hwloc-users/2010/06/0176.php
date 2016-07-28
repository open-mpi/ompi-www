<?
$subject_val = "Re: [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 19:10:27 2010" -->
<!-- isoreceived="20100618231027" -->
<!-- sent="Sat, 19 Jun 2010 01:10:21 +0200" -->
<!-- isosent="20100618231021" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc and rpath" -->
<!-- id="20100618231021.GN4931_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201006190045.17883.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 19:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0177.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka Hladky, le Sat 19 Jun 2010 00:45:17 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I haven't tried it yet. In any case, rpath is already in Makefile.in which is 
</span><br>
<span class="quotelev1">&gt; shipped with hwloc-1.0.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./src/Makefile.in:@HWLOC_BUILD_STANDALONE_TRUE_at_am_libhwloc_la_rpath = -rpath 
</span><br>
<span class="quotelev1">&gt; $(libdir)
</span><br>
<span class="quotelev1">&gt; ./src/Makefile.in:@HWLOC_BUILD_STANDALONE_FALSE_at_am_libhwloc_embedded_la_rpath =
</span><br>
<span class="quotelev1">&gt; ./src/Makefile.in:      $(AM_V_CCLD)$(libhwloc_la_LINK) $(am_libhwloc_la_rpath) 
</span><br>
<span class="quotelev1">&gt; $(libhwloc_la_OBJECTS) $(libhwloc_la_LIBADD) $(LIBS)
</span><br>
<span class="quotelev1">&gt; ./src/Makefile.in:      $(AM_V_CCLD)$(libhwloc_embedded_la_LINK) 
</span><br>
<p>Yes, because at that stage it can't know whether libdir will be in the
<br>
standard search path or not.  But then libtool filters this out, see
<br>
<p>/bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99   -fvisibility=hidden -I/usr/include/libxml2   -std=gnu99   -fvisibility=hidden -Wall -g -I/home/samy/pm2-newsched/hwloc/include -Wall -Wunused-parameter -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic    -no-undefined  -version-number 0:0:0 -lxml2    -o libhwloc.la -rpath /usr/local/lib topology.lo traversal.lo topology-synthetic.lo bind.lo cpuset.lo misc.lo topology-xml.lo  topology-linux.lo       topology-x86.lo  -libverbs  
<br>
libtool: link: gcc -shared  .libs/topology.o .libs/traversal.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-xml.o .libs/topology-linux.o .libs/topology-x86.o   /usr/lib/libxml2.so /usr/lib/libibverbs.so    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.0.0
<br>
<p><span class="quotelev2">&gt; &gt; So apparently libtool somehow doesn't realizes that /usr/lib64 is in the
</span><br>
<span class="quotelev2">&gt; &gt; standard search path.  I'd tend to believe it's a bug in libtool or the
</span><br>
<span class="quotelev2">&gt; &gt; distribution which don't understand each other.  How does configure get
</span><br>
<span class="quotelev2">&gt; &gt; invoked?  What is the output of gcc -print-search-dirs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have double checked it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64 is included in the output of gcc -print-search-dirs.
</span><br>
<p>Ok.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0177.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
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
