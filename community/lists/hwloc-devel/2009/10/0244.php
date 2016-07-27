<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc2 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 10:57:40 2009" -->
<!-- isoreceived="20091022145740" -->
<!-- sent="Thu, 22 Oct 2009 09:57:30 -0500" -->
<!-- isosent="20091022145730" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc2 failures" -->
<!-- id="4AE072DA.8020202_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091022070800.GP4419_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.1rc2 failures<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 10:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0245.php">Jeff Squyres: "[hwloc-devel] missing openfabrics-verbs.h"</a>
<li><strong>Previous message:</strong> <a href="0243.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>In reply to:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached 6 compilation log files: (icc|suncc|pgcc).(c|m).log
<br>
<p>*.c.log is generated as:
<br>
<p>% ./configure CC=&lt;compiler&gt; 2&gt;&amp;1 | tee &lt;compiler&gt;.c.log
<br>
<p>... so it should contain sub-configure outputs as well, if any.
<br>
<p>*.m.log is generated as:
<br>
<p>% make clean &amp;&amp; make 2&gt;&amp;1 | tee &lt;compiler&gt;.m.log
<br>
<p>Compiler information:
<br>
<p>% icc -V
<br>
Intel(R) C Intel(R) 64 Compiler Professional for applications running on
<br>
Intel(R) 64, Version 11.0    Build 20090131 Package ID: l_cproc_p_11.0.081
<br>
Copyright (C) 1985-2009 Intel Corporation.  All rights reserved.
<br>
<p>% pgcc -V
<br>
pgcc 9.0-4 64-bit target on x86-64 Linux -tp k8-64e
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>% suncc -V
<br>
cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
<br>
<p>This is from sunstudio 12, though the above version information doesn't
<br>
say that.
<br>
<p>System information:
<br>
<p>% uname -a
<br>
Linux bblogin 2.6.24-24-generic #1 SMP Sat Aug 22 00:30:49 UTC 2009
<br>
x86_64 GNU/Linux
<br>
<p>Attached /proc/cpuinfo as cpuinfo.log. Let me know if you need any more
<br>
information.
<br>
<p>&nbsp;-- Pavan
<br>
<p>On 10/22/2009 02:08 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Pavan Balaji, le Wed 21 Oct 2009 20:31:17 -0500, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; With suncc (sunstudio 12):
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================================
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 782: syntax error before or at: ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, you are using suncc on linux, I wouldn't have expected such
</span><br>
<span class="quotelev1">&gt; combination.  Well that can easily be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With pgcc (9.0-4):
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================================
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: pgcc -g -o .libs/lstopo lstopo-lstopo.o
</span><br>
<span class="quotelev2">&gt;&gt; lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o
</span><br>
<span class="quotelev2">&gt;&gt; lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/balaji/tmp/hwloc/hwloc-0.9.1rc2/src -lm ../src/.libs/libhwloc.so
</span><br>
<span class="quotelev2">&gt;&gt; -ltermcap
</span><br>
<span class="quotelev2">&gt;&gt; ../src/.libs/libhwloc.so: undefined reference to `__CPU_SET'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/.libs/libhwloc.so: undefined reference to `__CPU_ZERO'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you also post the warnings?  These are macros and should be
</span><br>
<span class="quotelev1">&gt; defined in /usr/include/bits/sched.h.
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
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>







</pre>
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0244/icc.c.log">icc.c.log</a>
</ul>
<!-- attachment="icc.c.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0244/icc.m.log">icc.m.log</a>
</ul>
<!-- attachment="icc.m.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0244/pgcc.c.log">pgcc.c.log</a>
</ul>
<!-- attachment="pgcc.c.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0244/pgcc.m.log">pgcc.m.log</a>
</ul>
<!-- attachment="pgcc.m.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0244/suncc.c.log">suncc.c.log</a>
</ul>
<!-- attachment="suncc.c.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0244/suncc.m.log">suncc.m.log</a>
</ul>
<!-- attachment="suncc.m.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0244/cpuinfo.log">cpuinfo.log</a>
</ul>
<!-- attachment="cpuinfo.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0245.php">Jeff Squyres: "[hwloc-devel] missing openfabrics-verbs.h"</a>
<li><strong>Previous message:</strong> <a href="0243.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>In reply to:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
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
