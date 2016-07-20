<?
$subject_val = "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 15:07:40 2010" -->
<!-- isoreceived="20100621190740" -->
<!-- sent="Mon, 21 Jun 2010 15:07:35 -0400" -->
<!-- isosent="20100621190735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-devel]  hwloc and rpath" -->
<!-- id="59213FCB-24AF-4F62-B4F3-2C0CA4D0C0AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201006211854.48271.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-devel]  hwloc and rpath<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 15:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]    hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0193.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]    hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0193.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]    hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2010, at 12:54 PM, Jirka Hladky wrote:
<br>
<p><span class="quotelev1">&gt; However, libtool does not look into /usr/lib64 by default. I have found 2 ways
</span><br>
<span class="quotelev1">&gt; how to fix it:
</span><br>
<p>Are we installing to /usr/lib64 by default?  Or do you have something in your specfile or your system's default that is resetting libdir to /usr/lib64?
<br>
<p>FWIW, in the 1.0.2 distribution tarball, I'm not seeing the -rpath argument in the final libtool link.  I see it in the almost-final link:
<br>
<p>/bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99   -fvisibility=hidden -I/usr/include/libxml2   -std=gnu99   -fvisibility=hidden  -I/home/jsquyres/hwloc-1.0.1/include    -no-undefined  -version-number 0:1:0 -lxml2 -lz -lm    -o libhwloc.la -rpath /usr/local/lib topology.lo traversal.lo topology-synthetic.lo bind.lo cpuset.lo misc.lo topology-xml.lo  topology-linux.lo       topology-x86.lo  
<br>
<p>But then libtool seems to strip it out:
<br>
<p>libtool: link: gcc -shared  .libs/topology.o .libs/traversal.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-xml.o .libs/topology-linux.o .libs/topology-x86.o   -lxml2 -lz -lm    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.1.0
<br>
<p>Are you seeing something different?
<br>
<p>How does one check to see if rpath was applied to the final .libs/libhwloc.so.0.1.0?  I tried objdump and didn't see anything, but I might be looking in the wrong place:
<br>
<p>$ objdump .libs/libhwloc.so.0.1.0 -x | grep -i path
<br>
000000000000de27 l     F .text	000000000000019d              hwloc_strdup_mntpath
<br>
$
<br>
<p><span class="quotelev1">&gt; 1) Add  /usr/lib64 into /etc/ld.so.conf. It works like a charm. The problem is
</span><br>
<span class="quotelev1">&gt; that I cannot use this change in the build environment (on a cluster of build
</span><br>
<span class="quotelev1">&gt; servers for compilation on different architectures)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel, do you have &quot;/usr/lib64&quot; directory listed in /etc/ld.so.conf listed on
</span><br>
<span class="quotelev1">&gt; your 64-bit Debian? If so, I will consider to open Bugzilla to add
</span><br>
<span class="quotelev1">&gt; &quot;/usr/lib64&quot; directory into /etc/ld.so.conf on Fedora as well.
</span><br>
<p>FWIW, it's not in my RHEL 5.4:
<br>
<p>[11:32] svbu-mpi:~/svn/ompi/ompi/mpi/c % more /etc/ld.so.conf
<br>
include ld.so.conf.d/*.conf
<br>
[11:32] svbu-mpi:~/svn/ompi/ompi/mpi/c % more /etc/ld.so.conf.d/*
<br>
/usr/lib64/qt-3.3/lib
<br>
[11:32] svbu-mpi:~/svn/ompi/ompi/mpi/c % 
<br>
<p><span class="quotelev1">&gt; 2) Second approach is to add
</span><br>
<span class="quotelev1">&gt; sed -i 's|^hardcode_libdir_flag_spec=.*|hardcode_libdir_flag_spec=&quot;&quot;|g' libtool
</span><br>
<span class="quotelev1">&gt; sed -i 's|^runpath_var=LD_RUN_PATH|runpath_var=DIE_RPATH_DIE|g' libtool
</span><br>
<span class="quotelev1">&gt; into the %configure stage in rpm specs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't like this approach but it seems to be the only way how to get rid of
</span><br>
<span class="quotelev1">&gt; rpath on an automatic build system.
</span><br>
<p>This is definitely not a preferred solution; I don't want to get in the business of frobbing a generated libtool script (we do it in Open MPI to work around esoteric bugs and it's awful awful awful).
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
<li><strong>Next message:</strong> <a href="0193.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]    hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0193.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]    hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0193.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]    hwloc and rpath"</a>
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
