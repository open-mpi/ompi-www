<?
$subject_val = "Re: [hwloc-devel] libhwloc.so: undefined reference to	`hwloc_hwloc_strncasecmp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 18:34:48 2009" -->
<!-- isoreceived="20091001223448" -->
<!-- sent="Fri, 02 Oct 2009 00:33:43 +0200" -->
<!-- isosent="20091001223343" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libhwloc.so: undefined reference to	`hwloc_hwloc_strncasecmp" -->
<!-- id="4AC52E47.8030209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091001222728.GM2373_at_ozlabs.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libhwloc.so: undefined reference to	`hwloc_hwloc_strncasecmp<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 18:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0129.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Previous message:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>In reply to:</strong> <a href="0126.php">Tony Breeds: "[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied, thanks a lot Tony!
<br>
<p>Brice
<br>
<p><p><p>Tony Breeds wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 	I wanted to have a look at but hit a small snag the final link ended with:
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -g -O2 -o .libs/lstopo lstopo-lstopo.o lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  -L/home/OpenHPC/hwloc/src/hwloc/trunk/src -lm ../src/.libs/libhwloc.so -Wl,-rpath -Wl,/home/OpenHPC/hwloc/build/lib
</span><br>
<span class="quotelev1">&gt; ../src/.libs/libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using a fresh svn checkout, svn info shows:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Path: .
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://svn.open-mpi.org/svn/hwloc">http://svn.open-mpi.org/svn/hwloc</a>
</span><br>
<span class="quotelev1">&gt; Repository Root: <a href="http://svn.open-mpi.org/svn/hwloc">http://svn.open-mpi.org/svn/hwloc</a>
</span><br>
<span class="quotelev1">&gt; Repository UUID: 4b44e086-7f34-40ce-a3bd-00e031736276
</span><br>
<span class="quotelev1">&gt; Revision: 1090
</span><br>
<span class="quotelev1">&gt; Node Kind: directory
</span><br>
<span class="quotelev1">&gt; Schedule: normal
</span><br>
<span class="quotelev1">&gt; Last Changed Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Last Changed Rev: 1090
</span><br>
<span class="quotelev1">&gt; Last Changed Date: 2009-10-02 04:32:28 +1000 (Fri, 02 Oct 2009)
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and after runnign autogen.sh I build with:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix /home/OpenHPC/hwloc/build ; make ; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that somehow there is one to many &quot;hwloc_&quot; prefixes on that function call?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A svn an and svn log thinks that this revision is the cause:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tony_at_thor trunk]$ svn log -r 1090 -v
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; r1090 | sthibaul | 2009-10-02 04:32:28 +1000 (Fri, 02 Oct 2009) | 1 line
</span><br>
<span class="quotelev1">&gt; Changed paths:
</span><br>
<span class="quotelev1">&gt;    M /trunk/README
</span><br>
<span class="quotelev1">&gt;    M /trunk/configure.ac
</span><br>
<span class="quotelev1">&gt;    M /trunk/doc/Makefile.am
</span><br>
<span class="quotelev1">&gt;    M /trunk/include/hwloc/cpuset-bits.h
</span><br>
<span class="quotelev1">&gt;    M /trunk/include/hwloc/cpuset.h
</span><br>
<span class="quotelev1">&gt;    M /trunk/include/hwloc/glibc-sched.h
</span><br>
<span class="quotelev1">&gt;    M /trunk/include/hwloc/helper.h
</span><br>
<span class="quotelev1">&gt;    M /trunk/include/hwloc/linux-libnuma.h
</span><br>
<span class="quotelev1">&gt;    M /trunk/include/hwloc.h
</span><br>
<span class="quotelev1">&gt;    M /trunk/include/private/private.h
</span><br>
<span class="quotelev1">&gt;    M /trunk/src/bind.c
</span><br>
<span class="quotelev1">&gt;    M /trunk/src/topology-hpux.c
</span><br>
<span class="quotelev1">&gt;    M /trunk/src/topology-synthetic.c
</span><br>
<span class="quotelev1">&gt;    M /trunk/src/topology.c
</span><br>
<span class="quotelev1">&gt;    M /trunk/utils/hwloc-mask.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hp-ux compiler fixes
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This quick hack fixes it for me, but I don't know if it will work with hp-ux
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: trunk/src/topology-synthetic.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology-synthetic.c	(revision 1090)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology-synthetic.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -37,19 +37,19 @@
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (*pos &lt; '0' || *pos &gt; '9') {
</span><br>
<span class="quotelev1">&gt; -      if (!hwloc_hwloc_strncasecmp(pos, &quot;machines&quot;, 2))
</span><br>
<span class="quotelev1">&gt; +      if (!hwloc_strncasecmp(pos, &quot;machines&quot;, 2))
</span><br>
<span class="quotelev1">&gt;  	type = HWLOC_OBJ_MACHINE;
</span><br>
<span class="quotelev1">&gt; -      else if (!hwloc_hwloc_strncasecmp(pos, &quot;nodes&quot;, 1))
</span><br>
<span class="quotelev1">&gt; +      else if (!hwloc_strncasecmp(pos, &quot;nodes&quot;, 1))
</span><br>
<span class="quotelev1">&gt;  	type = HWLOC_OBJ_NODE;
</span><br>
<span class="quotelev1">&gt; -      else if (!hwloc_hwloc_strncasecmp(pos, &quot;sockets&quot;, 1))
</span><br>
<span class="quotelev1">&gt; +      else if (!hwloc_strncasecmp(pos, &quot;sockets&quot;, 1))
</span><br>
<span class="quotelev1">&gt;  	type = HWLOC_OBJ_SOCKET;
</span><br>
<span class="quotelev1">&gt; -      else if (!hwloc_hwloc_strncasecmp(pos, &quot;cores&quot;, 2))
</span><br>
<span class="quotelev1">&gt; +      else if (!hwloc_strncasecmp(pos, &quot;cores&quot;, 2))
</span><br>
<span class="quotelev1">&gt;  	type = HWLOC_OBJ_CORE;
</span><br>
<span class="quotelev1">&gt; -      else if (!hwloc_hwloc_strncasecmp(pos, &quot;caches&quot;, 2))
</span><br>
<span class="quotelev1">&gt; +      else if (!hwloc_strncasecmp(pos, &quot;caches&quot;, 2))
</span><br>
<span class="quotelev1">&gt;  	type = HWLOC_OBJ_CACHE;
</span><br>
<span class="quotelev1">&gt; -      else if (!hwloc_hwloc_strncasecmp(pos, &quot;procs&quot;, 1))
</span><br>
<span class="quotelev1">&gt; +      else if (!hwloc_strncasecmp(pos, &quot;procs&quot;, 1))
</span><br>
<span class="quotelev1">&gt;  	type = HWLOC_OBJ_PROC;
</span><br>
<span class="quotelev1">&gt; -      else if (!hwloc_hwloc_strncasecmp(pos, &quot;misc&quot;, 2))
</span><br>
<span class="quotelev1">&gt; +      else if (!hwloc_strncasecmp(pos, &quot;misc&quot;, 2))
</span><br>
<span class="quotelev1">&gt;  	type = HWLOC_OBJ_MISC;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;        next_pos = strchr(pos, ':');
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours Tony
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0129.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Previous message:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>In reply to:</strong> <a href="0126.php">Tony Breeds: "[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
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
