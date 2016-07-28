<?
$subject_val = "Re: [hwloc-devel] Perl bindings question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 13:06:36 2011" -->
<!-- isoreceived="20110120180636" -->
<!-- sent="Thu, 20 Jan 2011 13:06:30 -0500" -->
<!-- isosent="20110120180630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Perl bindings question" -->
<!-- id="BC4C5851-5739-4EB4-8E3D-8738108574C6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1295517324.2218.245.camel_at_kallies" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 13:06:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1859.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1844.php">Bernd Kallies: "Re: [hwloc-devel] Perl bindings question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  
<br>
<p>The short version is that 0.10 with hwloc 1.1.1rc3 passed everything for me on a RHEL 5.5 node with 64 hardware threads (i.e., 32 intel cores on 4 sockets).  hwloc 1.1.0 (as expected) failed the ulong tests -- that stuff has been fixed in the upcoming 1.1.1.
<br>
<p>-----
<br>
[root_at_localhost Sys-Hwloc-0.10]# make test
<br>
PERL_DL_NONLAZY=1 /usr/bin/perl &quot;-MExtUtils::Command::MM&quot; &quot;-e&quot; &quot;test_harness(0, 'blib/lib', 'blib/arch')&quot; t/*.t
<br>
t/00-use.........ok                                                          
<br>
t/01-api.........ok                                                          
<br>
t/02-topo........ok 1/40I/O warning : failed to load external entity &quot;/MurKs&quot;
<br>
I/O warning : failed to load external entity &quot;/MurKs&quot;
<br>
t/02-topo........ok                                                          
<br>
t/03-topoinfo....ok                                                          
<br>
t/04-obj.........ok                                                          
<br>
t/05-strings.....ok                                                          
<br>
t/06-helpers.....ok                                                          
<br>
t/07-cpuset......ok                                                          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;122/122 skipped: Sys::Hwloc::Cpuset
<br>
t/08-bitmap......ok                                                          
<br>
t/09-sets........ok                                                          
<br>
t/10-bind........ok                                                          
<br>
All tests successful, 122 subtests skipped.
<br>
Files=11, Tests=5876,  4 wallclock secs ( 4.13 cusr +  0.31 csys =  4.44 CPU)
<br>
[root_at_localhost Sys-Hwloc-0.10]# 
<br>
-----
<br>
<p>These bindings will be MUCH better than me parsing the lstopo -xml output myself.  w00t!
<br>
<p>/me goes off to play with these perl bindings...
<br>
<p><p><p>On Jan 20, 2011, at 4:55 AM, Bernd Kallies wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, thanks for the report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Embarassingly the needed typemap file was not part of the package in
</span><br>
<span class="quotelev1">&gt; CPAN. This mistake is corrected in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://cpan.perl.org/authors/id/B/BK/BKA/Sys-Hwloc-0.10.tar.gz">http://cpan.perl.org/authors/id/B/BK/BKA/Sys-Hwloc-0.10.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please give this a try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be able to run the full test suite, you will also need to install a
</span><br>
<span class="quotelev1">&gt; newer Test::More (&gt;= 0.89). This is also available from CPAN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards BK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2011-01-19 at 17:51 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Bernd --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I finally got around to trying to play with Sys-Hwloc-0.09 today.  But I wasn't able to build it.  I'm not enough of a perl module wizard to know what is going on here -- what am I doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is on a RHEL5.5 machine with a local installation of hwloc 1.1 under /root/hg/bootstrap/local.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_localhost Sys-Hwloc-0.09]# export PKG_CONFIG_PATH=/root/hg/bootstrap/local/lib/pkgconfig/
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_localhost Sys-Hwloc-0.09]# perl Makefile.PL 
</span><br>
<span class="quotelev2">&gt;&gt; checking for hwloc... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for hwloc prefix... /root/hg/bootstrap/local
</span><br>
<span class="quotelev2">&gt;&gt; checking for hwloc eprefix... /root/hg/bootstrap/local
</span><br>
<span class="quotelev2">&gt;&gt; checking for hwloc includedir... /root/hg/bootstrap/local/include
</span><br>
<span class="quotelev2">&gt;&gt; checking for hwloc libdir... /root/hg/bootstrap/local/lib
</span><br>
<span class="quotelev2">&gt;&gt; checking for hwloc -I flags... -I/root/hg/bootstrap/local/include -I/usr/include/libxml2  
</span><br>
<span class="quotelev2">&gt;&gt; checking for hwloc libs... -L/root/hg/bootstrap/local/lib -lhwloc  
</span><br>
<span class="quotelev2">&gt;&gt; checking if hwloc supports hwloc_get_api_version... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if hwloc supports XML... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking HWLOC_API_VERSION... 0x00010100
</span><br>
<span class="quotelev2">&gt;&gt; Checking if your kit is complete...
</span><br>
<span class="quotelev2">&gt;&gt; Looks good
</span><br>
<span class="quotelev2">&gt;&gt; Warning: prerequisite Test::More 0.89 not found. We have 0.62.
</span><br>
<span class="quotelev2">&gt;&gt; Writing Makefile for Sys::Hwloc
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_localhost Sys-Hwloc-0.09]# make
</span><br>
<span class="quotelev2">&gt;&gt; sed -e s/@HWLOC_API_VERSION@/0x00010100/ &lt;lib/Sys/Hwloc.pm &gt;blib/lib/Sys/Hwloc.pm
</span><br>
<span class="quotelev2">&gt;&gt; AutoSplitting blib/lib/Sys/Hwloc.pm (blib/lib/auto/Sys/Hwloc)
</span><br>
<span class="quotelev2">&gt;&gt; cp lib/Sys/Hwloc/Obj.pod blib/lib/Sys/Hwloc/Obj.pod
</span><br>
<span class="quotelev2">&gt;&gt; cp lib/Sys/Hwloc/Cpuset.pod blib/lib/Sys/Hwloc/Cpuset.pod
</span><br>
<span class="quotelev2">&gt;&gt; cp lib/Sys/Hwloc/Bitmap.pod blib/lib/Sys/Hwloc/Bitmap.pod
</span><br>
<span class="quotelev2">&gt;&gt; cp lib/Sys/Hwloc/Topology.pod blib/lib/Sys/Hwloc/Topology.pod
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/perl /usr/lib/perl5/5.8.8/ExtUtils/xsubpp  -typemap /usr/lib/perl5/5.8.8/ExtUtils/typemap  Hwloc.xs &gt; Hwloc.xsc &amp;&amp; mv Hwloc.xsc Hwloc.c
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 458
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 459
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 472
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 483
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 506
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 511
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 528
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_obj_type_t' not in typemap in Hwloc.xs, line 529
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 548
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 561
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 575
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 590
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'pid_t' not in typemap in Hwloc.xs, line 591
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 606
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 620
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 635
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 662
</span><br>
<span class="quotelev2">&gt;&gt; Error: 'hwloc_topology_t' not in typemap in Hwloc.xs, line 680
</span><br>
<span class="quotelev2">&gt;&gt; ...lots more like this (and others)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Bernd Kallies
</span><br>
<span class="quotelev1">&gt; Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
</span><br>
<span class="quotelev1">&gt; Takustr. 7
</span><br>
<span class="quotelev1">&gt; 14195 Berlin
</span><br>
<span class="quotelev1">&gt; Tel: +49-30-84185-270
</span><br>
<span class="quotelev1">&gt; Fax: +49-30-84185-311
</span><br>
<span class="quotelev1">&gt; e-mail: kallies_at_[hidden]
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
<li><strong>Next message:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1859.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1844.php">Bernd Kallies: "Re: [hwloc-devel] Perl bindings question"</a>
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
