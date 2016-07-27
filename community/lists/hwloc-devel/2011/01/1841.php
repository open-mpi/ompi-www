<?
$subject_val = "[hwloc-devel] Perl bindings question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 17:51:40 2011" -->
<!-- isoreceived="20110119225140" -->
<!-- sent="Wed, 19 Jan 2011 17:51:35 -0500" -->
<!-- isosent="20110119225135" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Perl bindings question" -->
<!-- id="42367D03-9285-4DCD-B8E2-C4A3E6035881_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Perl bindings question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 17:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1842.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3094)"</a>
<li><strong>Previous message:</strong> <a href="1840.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc1 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1844.php">Bernd Kallies: "Re: [hwloc-devel] Perl bindings question"</a>
<li><strong>Reply:</strong> <a href="1844.php">Bernd Kallies: "Re: [hwloc-devel] Perl bindings question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernd --
<br>
<p>I finally got around to trying to play with Sys-Hwloc-0.09 today.  But I wasn't able to build it.  I'm not enough of a perl module wizard to know what is going on here -- what am I doing wrong?
<br>
<p>This is on a RHEL5.5 machine with a local installation of hwloc 1.1 under /root/hg/bootstrap/local.
<br>
<p>[root_at_localhost Sys-Hwloc-0.09]# export PKG_CONFIG_PATH=/root/hg/bootstrap/local/lib/pkgconfig/
<br>
[root_at_localhost Sys-Hwloc-0.09]# perl Makefile.PL 
<br>
checking for hwloc... yes
<br>
checking for hwloc prefix... /root/hg/bootstrap/local
<br>
checking for hwloc eprefix... /root/hg/bootstrap/local
<br>
checking for hwloc includedir... /root/hg/bootstrap/local/include
<br>
checking for hwloc libdir... /root/hg/bootstrap/local/lib
<br>
checking for hwloc -I flags... -I/root/hg/bootstrap/local/include -I/usr/include/libxml2  
<br>
checking for hwloc libs... -L/root/hg/bootstrap/local/lib -lhwloc  
<br>
checking if hwloc supports hwloc_get_api_version... no
<br>
checking if hwloc supports XML... yes
<br>
checking HWLOC_API_VERSION... 0x00010100
<br>
Checking if your kit is complete...
<br>
Looks good
<br>
Warning: prerequisite Test::More 0.89 not found. We have 0.62.
<br>
Writing Makefile for Sys::Hwloc
<br>
[root_at_localhost Sys-Hwloc-0.09]# make
<br>
sed -e s/@HWLOC_API_VERSION@/0x00010100/ &lt;lib/Sys/Hwloc.pm &gt;blib/lib/Sys/Hwloc.pm
<br>
AutoSplitting blib/lib/Sys/Hwloc.pm (blib/lib/auto/Sys/Hwloc)
<br>
cp lib/Sys/Hwloc/Obj.pod blib/lib/Sys/Hwloc/Obj.pod
<br>
cp lib/Sys/Hwloc/Cpuset.pod blib/lib/Sys/Hwloc/Cpuset.pod
<br>
cp lib/Sys/Hwloc/Bitmap.pod blib/lib/Sys/Hwloc/Bitmap.pod
<br>
cp lib/Sys/Hwloc/Topology.pod blib/lib/Sys/Hwloc/Topology.pod
<br>
/usr/bin/perl /usr/lib/perl5/5.8.8/ExtUtils/xsubpp  -typemap /usr/lib/perl5/5.8.8/ExtUtils/typemap  Hwloc.xs &gt; Hwloc.xsc &amp;&amp; mv Hwloc.xsc Hwloc.c
<br>
Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 458
<br>
Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 459
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 472
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 483
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 506
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 511
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 528
<br>
Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 529
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 548
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 561
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 575
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 590
<br>
Error: 'pid_t' not in typemap in Hwloc.xs, line 591
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 606
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 620
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 635
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 662
<br>
Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 680
<br>
...lots more like this (and others)
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
<li><strong>Next message:</strong> <a href="1842.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3094)"</a>
<li><strong>Previous message:</strong> <a href="1840.php">Jeff Squyres: "[hwloc-devel] 1.1.1rc1 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1844.php">Bernd Kallies: "Re: [hwloc-devel] Perl bindings question"</a>
<li><strong>Reply:</strong> <a href="1844.php">Bernd Kallies: "Re: [hwloc-devel] Perl bindings question"</a>
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
