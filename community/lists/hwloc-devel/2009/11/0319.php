<?
$subject_val = "Re: [hwloc-devel] Pgcc issues fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 17:54:31 2009" -->
<!-- isoreceived="20091103225431" -->
<!-- sent="Wed, 4 Nov 2009 09:54:21 +1100 (EST)" -->
<!-- isosent="20091103225421" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Pgcc issues fixed?" -->
<!-- id="675440763.5636811257288861392.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1701728184.5636531257288642528.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Pgcc issues fixed?<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 17:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0320.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0318.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0318.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0320.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Grabbing now, thanks!
</span><br>
<p>Compiled OK with:
<br>
<p>[csamuel_at_tango hwloc-0.9.1rc3r1276]$ pgcc -V
<br>
<p>pgcc 8.0-6 64-bit target on x86-64 Linux -tp gh-64
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>Just these warnings:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../libtool --tag=CC   --mode=compile pgcc -DHAVE_CONFIG_H -I. -I../include/private -I../include/hwloc  -I../include -I../include -I/usr/local/openmpi/1.3.3-pgi/include -I/usr/local/mpfr/2.4.1/include -I/usr/local/gmp/4.3.1/include  -I/usr/include/libxml2   -g -c -o cpuset.lo cpuset.c                                                                                                                                                                            
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../include/private -I../include/hwloc -I../include -I../include -I/usr/local/openmpi/1.3.3-pgi/include -I/usr/local/mpfr/2.4.1/include -I/usr/local/gmp/4.3.1/include -I/usr/include/libxml2 -g -c cpuset.c  -fpic -DPIC -o .libs/cpuset.o                                                                                                                                                                                                
<br>
PGC-W-0155-Long value is passed to a nonprototyped function - argument #1 (cpuset.c: 453)                                                                                                                                                   
<br>
PGC-W-0155-Long value is passed to a nonprototyped function - argument #1 (cpuset.c: 489)                                                                                                                                                   
<br>
PGC-W-0155-Long value is passed to a nonprototyped function - argument #1 (cpuset.c: 506)                                                                                                                                                   
<br>
PGC-W-0155-Long value is passed to a nonprototyped function - argument #1 (cpuset.c: 507)                                                                                                                                                   
<br>
PGC/x86-64 Linux 8.0-6: compilation completed with warnings                                
<br>
<p>Will try PGI 7.0 now.
<br>
<p><pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0320.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0318.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0318.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0320.php">Chris Samuel: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
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
