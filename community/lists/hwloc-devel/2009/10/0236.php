<?
$subject_val = "[hwloc-devel] 0.9.1rc2 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 21:31:28 2009" -->
<!-- isoreceived="20091022013128" -->
<!-- sent="Wed, 21 Oct 2009 20:31:17 -0500" -->
<!-- isosent="20091022013117" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] 0.9.1rc2 failures" -->
<!-- id="4ADFB5E5.4030400_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] 0.9.1rc2 failures<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 21:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0237.php">Tony Breeds: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="0235.php">Jeff Squyres: "[hwloc-devel] Fwd: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tried building 0.9.1rc2 with gcc, icc, suncc and pgcc. Builds fine with
<br>
gcc. Lots of warnings with icc (as Jeff pointed out). Does not build
<br>
with suncc and pgcc.
<br>
<p>With suncc (sunstudio 12):
<br>
==================================================================
<br>
source='topology-linux.c' object='topology-linux.lo' libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/bash ../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/bash ../libtool --tag=CC   --mode=compile suncc -DHAVE_CONFIG_H
<br>
-I. -I../include/private -I../include/hwloc  -I../include -I../include
<br>
&nbsp;&nbsp;-g -c -o topology-linux.lo topology-linux.c
<br>
libtool: compile:  suncc -DHAVE_CONFIG_H -I. -I../include/private
<br>
-I../include/hwloc -I../include -I../include -g -c topology-linux.c
<br>
-KPIC -DPIC -o .libs/topology-linux.o
<br>
&quot;../include/hwloc/helper.h&quot;, line 46: warning: statement not reached
<br>
&quot;../include/hwloc/helper.h&quot;, line 69: warning: statement not reached
<br>
&quot;../include/private/private.h&quot;, line 197: warning: argument mismatch
<br>
&quot;topology-linux.c&quot;, line 535: warning: initializer does not fit or is
<br>
out of range: -1
<br>
&quot;topology-linux.c&quot;, line 536: warning: initializer does not fit or is
<br>
out of range: -1
<br>
&quot;topology-linux.c&quot;, line 782: syntax error before or at: ...
<br>
&quot;topology-linux.c&quot;, line 782: warning: null dimension: proc_physids
<br>
&quot;topology-linux.c&quot;, line 783: syntax error before or at: ...
<br>
&quot;topology-linux.c&quot;, line 783: warning: null dimension: osphysids
<br>
&quot;topology-linux.c&quot;, line 784: syntax error before or at: ...
<br>
&quot;topology-linux.c&quot;, line 784: warning: null dimension: proc_coreids
<br>
&quot;topology-linux.c&quot;, line 785: syntax error before or at: ...
<br>
&quot;topology-linux.c&quot;, line 785: warning: null dimension: oscoreids
<br>
&quot;topology-linux.c&quot;, line 786: syntax error before or at: ...
<br>
&quot;topology-linux.c&quot;, line 786: warning: null dimension: proc_osphysids
<br>
&quot;topology-linux.c&quot;, line 787: syntax error before or at: ...
<br>
&quot;topology-linux.c&quot;, line 787: warning: null dimension: proc_oscoreids
<br>
&quot;topology-linux.c&quot;, line 788: syntax error before or at: ...
<br>
&quot;topology-linux.c&quot;, line 788: warning: null dimension: core_osphysids
<br>
&quot;topology-linux.c&quot;, line 802: warning: argument mismatch
<br>
&quot;topology-linux.c&quot;, line 808: warning: argument mismatch
<br>
&quot;topology-linux.c&quot;, line 888: warning: argument mismatch
<br>
&quot;topology-linux.c&quot;, line 903: cannot recover from previous errors
<br>
cc: acomp failed for topology-linux.c
<br>
make[1]: *** [topology-linux.lo] Error 1
<br>
make[1]: Leaving directory
<br>
`/radix-homes/balaji/tmp/hwloc/hwloc-0.9.1rc2/src'
<br>
make: *** [all-recursive] Error 1
<br>
==================================================================
<br>
<p>With pgcc (9.0-4):
<br>
==================================================================
<br>
libtool: link: pgcc -g -o .libs/lstopo lstopo-lstopo.o
<br>
lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o
<br>
lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o
<br>
-L/home/balaji/tmp/hwloc/hwloc-0.9.1rc2/src -lm ../src/.libs/libhwloc.so
<br>
-ltermcap
<br>
../src/.libs/libhwloc.so: undefined reference to `__CPU_SET'
<br>
../src/.libs/libhwloc.so: undefined reference to `__CPU_ZERO'
<br>
make[1]: *** [lstopo] Error 2
<br>
make[1]: Leaving directory
<br>
`/radix-homes/balaji/tmp/hwloc/hwloc-0.9.1rc2/utils'
<br>
make: *** [all-recursive] Error 1
<br>
==================================================================
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0237.php">Tony Breeds: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="0235.php">Jeff Squyres: "[hwloc-devel] Fwd: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
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
