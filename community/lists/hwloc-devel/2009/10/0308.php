<?
$subject_val = "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 01:50:36 2009" -->
<!-- isoreceived="20091030055036" -->
<!-- sent="Fri, 30 Oct 2009 16:50:25 +1100 (EST)" -->
<!-- isosent="20091030055025" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc" -->
<!-- id="1097494657.5407491256881825804.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="776715586.5407471256881663426.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 01:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Chris Samuel: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Maybe in reply to:</strong> <a href="0295.php">Pavan Balaji: "[hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0310.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Pavan Balaji&quot; &lt;balaji_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Log files attached.
</span><br>
<p>Hmm, it compiled for me with pgcc!
<br>
<p>[csamuel_at_tango hwloc-0.9.1rc3]$ pgcc -V
<br>
<p>pgcc 9.0-4 64-bit target on x86-64 Linux -tp shanghai-64
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>Configured with:
<br>
<p>[csamuel_at_tango hwloc-0.9.1rc3]$ CC=pgcc ./configure
<br>
<p>Ran lstopo to confirm it looked sensible.
<br>
<p><p>It doesn't build with PGI v8.0 though..
<br>
<p>[csamuel_at_tango hwloc-0.9.1rc3]$ pgcc -V
<br>
<p>pgcc 8.0-6 64-bit target on x86-64 Linux -tp gh-64
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p><p>libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../include/private -I../include/hwloc -I../include -I../include -I/usr/local/openmpi/1.3.3-pgi/include -I/usr/local/mpfr/2.4.1/include -I/usr/local/gmp/4.3.1/include -I/usr/include/libxml2 -g -c topology.c  -fpic -DPIC -o .libs/topology.o
<br>
PGC-S-0043-Redefinition of symbol, nbobjs (topology.c: 77)
<br>
PGC-S-0043-Redefinition of symbol, nbobjs (topology.c: 141)
<br>
PGC-S-0043-Redefinition of symbol, nbobjs (topology.c: 213)
<br>
PGC-S-0043-Redefinition of symbol, nbobjs (topology.c: 291)
<br>
PGC/x86-64 Linux 8.0-6: compilation completed with severe errors
<br>
make[1]: *** [topology.lo] Error 1
<br>
make[1]: Leaving directory `/nfs/user2/csamuel/Sources/HWloc/hwloc-0.9.1rc3/src'
<br>
make: *** [all-recursive] Error 1
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
<li><strong>Next message:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Chris Samuel: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Maybe in reply to:</strong> <a href="0295.php">Pavan Balaji: "[hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0310.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
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
