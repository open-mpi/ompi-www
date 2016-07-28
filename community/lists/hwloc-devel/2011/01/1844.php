<?
$subject_val = "Re: [hwloc-devel] Perl bindings question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 04:55:44 2011" -->
<!-- isoreceived="20110120095544" -->
<!-- sent="Thu, 20 Jan 2011 10:55:24 +0100" -->
<!-- isosent="20110120095524" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Perl bindings question" -->
<!-- id="1295517324.2218.245.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="42367D03-9285-4DCD-B8E2-C4A3E6035881_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Perl bindings question<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 04:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1845.php">Jeff Squyres (jsquyres): "[hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1843.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.1rc1r3097)"</a>
<li><strong>In reply to:</strong> <a href="1841.php">Jeff Squyres: "[hwloc-devel] Perl bindings question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1860.php">Jeff Squyres: "Re: [hwloc-devel] Perl bindings question"</a>
<li><strong>Reply:</strong> <a href="1860.php">Jeff Squyres: "Re: [hwloc-devel] Perl bindings question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, thanks for the report.
<br>
<p>Embarassingly the needed typemap file was not part of the package in
<br>
CPAN. This mistake is corrected in
<br>
<p><a href="http://cpan.perl.org/authors/id/B/BK/BKA/Sys-Hwloc-0.10.tar.gz">http://cpan.perl.org/authors/id/B/BK/BKA/Sys-Hwloc-0.10.tar.gz</a>
<br>
<p>Please give this a try.
<br>
<p>To be able to run the full test suite, you will also need to install a
<br>
newer Test::More (&gt;= 0.89). This is also available from CPAN.
<br>
<p>Regards BK
<br>
<p><p>On Wed, 2011-01-19 at 17:51 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Bernd --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I finally got around to trying to play with Sys-Hwloc-0.09 today.  But I wasn't able to build it.  I'm not enough of a perl module wizard to know what is going on here -- what am I doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is on a RHEL5.5 machine with a local installation of hwloc 1.1 under /root/hg/bootstrap/local.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_localhost Sys-Hwloc-0.09]# export PKG_CONFIG_PATH=/root/hg/bootstrap/local/lib/pkgconfig/
</span><br>
<span class="quotelev1">&gt; [root_at_localhost Sys-Hwloc-0.09]# perl Makefile.PL 
</span><br>
<span class="quotelev1">&gt; checking for hwloc... yes
</span><br>
<span class="quotelev1">&gt; checking for hwloc prefix... /root/hg/bootstrap/local
</span><br>
<span class="quotelev1">&gt; checking for hwloc eprefix... /root/hg/bootstrap/local
</span><br>
<span class="quotelev1">&gt; checking for hwloc includedir... /root/hg/bootstrap/local/include
</span><br>
<span class="quotelev1">&gt; checking for hwloc libdir... /root/hg/bootstrap/local/lib
</span><br>
<span class="quotelev1">&gt; checking for hwloc -I flags... -I/root/hg/bootstrap/local/include -I/usr/include/libxml2  
</span><br>
<span class="quotelev1">&gt; checking for hwloc libs... -L/root/hg/bootstrap/local/lib -lhwloc  
</span><br>
<span class="quotelev1">&gt; checking if hwloc supports hwloc_get_api_version... no
</span><br>
<span class="quotelev1">&gt; checking if hwloc supports XML... yes
</span><br>
<span class="quotelev1">&gt; checking HWLOC_API_VERSION... 0x00010100
</span><br>
<span class="quotelev1">&gt; Checking if your kit is complete...
</span><br>
<span class="quotelev1">&gt; Looks good
</span><br>
<span class="quotelev1">&gt; Warning: prerequisite Test::More 0.89 not found. We have 0.62.
</span><br>
<span class="quotelev1">&gt; Writing Makefile for Sys::Hwloc
</span><br>
<span class="quotelev1">&gt; [root_at_localhost Sys-Hwloc-0.09]# make
</span><br>
<span class="quotelev1">&gt; sed -e s/@HWLOC_API_VERSION@/0x00010100/ &lt;lib/Sys/Hwloc.pm &gt;blib/lib/Sys/Hwloc.pm
</span><br>
<span class="quotelev1">&gt; AutoSplitting blib/lib/Sys/Hwloc.pm (blib/lib/auto/Sys/Hwloc)
</span><br>
<span class="quotelev1">&gt; cp lib/Sys/Hwloc/Obj.pod blib/lib/Sys/Hwloc/Obj.pod
</span><br>
<span class="quotelev1">&gt; cp lib/Sys/Hwloc/Cpuset.pod blib/lib/Sys/Hwloc/Cpuset.pod
</span><br>
<span class="quotelev1">&gt; cp lib/Sys/Hwloc/Bitmap.pod blib/lib/Sys/Hwloc/Bitmap.pod
</span><br>
<span class="quotelev1">&gt; cp lib/Sys/Hwloc/Topology.pod blib/lib/Sys/Hwloc/Topology.pod
</span><br>
<span class="quotelev1">&gt; /usr/bin/perl /usr/lib/perl5/5.8.8/ExtUtils/xsubpp  -typemap /usr/lib/perl5/5.8.8/ExtUtils/typemap  Hwloc.xs &gt; Hwloc.xsc &amp;&amp; mv Hwloc.xsc Hwloc.c
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 458
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 459
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 472
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 483
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 506
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 511
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 528
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 529
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 548
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 561
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 575
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 590
</span><br>
<span class="quotelev1">&gt; Error: 'pid_t' not in typemap in Hwloc.xs, line 591
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 606
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 620
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 635
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 662
</span><br>
<span class="quotelev1">&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 680
</span><br>
<span class="quotelev1">&gt; ...lots more like this (and others)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1845.php">Jeff Squyres (jsquyres): "[hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1843.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.1rc1r3097)"</a>
<li><strong>In reply to:</strong> <a href="1841.php">Jeff Squyres: "[hwloc-devel] Perl bindings question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1860.php">Jeff Squyres: "Re: [hwloc-devel] Perl bindings question"</a>
<li><strong>Reply:</strong> <a href="1860.php">Jeff Squyres: "Re: [hwloc-devel] Perl bindings question"</a>
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
