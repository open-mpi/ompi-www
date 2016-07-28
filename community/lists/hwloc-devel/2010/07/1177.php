<?
$subject_val = "Re: [hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 09:33:46 2010" -->
<!-- isoreceived="20100716133346" -->
<!-- sent="Fri, 16 Jul 2010 09:34:14 -0400" -->
<!-- isosent="20100716133414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="C291C6DB-BA87-4448-A0D1-78A8187182F3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C3FE739.6000801_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 09:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1178.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1178.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1178.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1179.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(gdb) bt
<br>
#0  0x0060bcb8 in strcmp () from /lib/tls/libc.so.6
<br>
#1  0x00498d7d in hwloc_look_linux (topology=0x8807008)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1805
<br>
#2  0x0048dd9c in hwloc_discover (topology=0x8807008) at topology.c:1423
<br>
#3  0x0048ed8e in hwloc_topology_load (topology=0x8807008) at topology.c:2005
<br>
#4  0x080489a4 in main () at hwloc_is_thissystem.c:34
<br>
(gdb) up
<br>
#1  0x00498d7d in hwloc_look_linux (topology=0x8807008)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1805
<br>
1805	  if (!strcmp(topology-&gt;backend_params.sysfs.root_path, &quot;/&quot;))
<br>
(gdb) p topology-&gt;backend_params.sysfs
<br>
$1 = {root_path = 0x0, root_fd = -1}
<br>
(gdb) 
<br>
<p>Need any other info?
<br>
<p><p>On Jul 16, 2010, at 12:59 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 16/07/2010 03:02, MPI Team a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1:  1024 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt; &gt; FAIL: hwloc_bind
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1:  1048 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt; &gt; FAIL: hwloc_object_userdata
</span><br>
<span class="quotelev2">&gt; &gt; PASS: hwloc_synthetic
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1:  1094 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt; &gt; FAIL: hwloc_is_thissystem
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1:  1118 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt; &gt; FAIL: hwloc_insert_misc
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1:  1142 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt; &gt; FAIL: glibc-sched
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't reproduce this on my machines. Can somebody send the
</span><br>
<span class="quotelev1">&gt; corresponding gdb backtrace? Take trunk, ./configure, make, make check,
</span><br>
<span class="quotelev1">&gt; and it fails
</span><br>
<span class="quotelev1">&gt;    libtool --mode=execute gdb &lt;test program&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
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
<li><strong>Next message:</strong> <a href="1178.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="1176.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1178.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1178.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1179.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
