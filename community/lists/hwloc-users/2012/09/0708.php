<?
$subject_val = "[hwloc-users] Solaris and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:16:12 2012" -->
<!-- isoreceived="20120912141612" -->
<!-- sent="Wed, 12 Sep 2012 10:16:14 -0400" -->
<!-- isosent="20120912141614" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-users] Solaris and hwloc" -->
<!-- id="FD2A495D-61FC-468B-A561-229A2886D445_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209111222.q8BCMr14027943_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [hwloc-users] Solaris and hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:16:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0710.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0711.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice / Samuel --
<br>
<p>How well does hwloc work for process binding on Solaris?  This is not something I've followed closely (note that Terry Dontje has moved on to other projects inside Oracle, so he's no longer my go-to guy for All Things Solaris...).
<br>
<p>Siegmar Gross (CC'ed) originally had a binding problem in Open MPI, but we've narrowed it down to some simple binding tests with hwloc, just to avoid all the OMPI complications.  
<br>
<p>I've asked him to run hwloc-bind on a few different configurations, and run my report-bindings.sh script (see below) so that it reports where it was actually bound.  He seems to get an hwloc error any time he tries to bind to more than 1 PU.  Is that expected on Solaris?
<br>
<p>Sidenote: if hwloc-bind fails to bind, should we still launch the child process?
<br>
<p>Here's my trivial report-bindings.sh script:
<br>
<p>-----
<br>
#!/bin/sh
<br>
<p>bitmap=`hwloc-bind --get -p`
<br>
friendly=`hwloc-calc -p -H socket.core.pu $bitmap`
<br>
<p>echo &quot;MCW rank $OMPI_COMM_WORLD_RANK (`hostname`): $friendly&quot;
<br>
exit 0
<br>
------
<br>
<p>See Seigmar's detailed reply, below.
<br>
<p><p><p>On Sep 11, 2012, at 8:22 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have purged the old stuff in the mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's concerning that you cannot bind to a full core (i.e., all
</span><br>
<span class="quotelev2">&gt;&gt; the pu in a core). Does Solaris not allow you to bind to multiple
</span><br>
<span class="quotelev2">&gt;&gt; pu's in a single process?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I don't know because I haven't used it up to now.
</span><br>
<span class="quotelev1">&gt; &quot;mpstat&quot; sees all hardware threads as cpu's.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 104 mpstat
</span><br>
<span class="quotelev1">&gt; CPU minf mjf xcal  intr ithr  csw icsw migr smtx  srw syscl  usr sys  wt idl
</span><br>
<span class="quotelev1">&gt;  0    1   0   16   224    8   36    0    0    1    0   127    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  1    1   0   38    69   40   38    0    0    1    0   146    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  2    2   0   18    57   28   41    0    0    1    0   169    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  3    1   0   14    40   11   40    0    0    1    0   152    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  4    1   0   13    41   11   41    0    0    1    0   149    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  5    1   0   17    43   12   42    0    0    1    0   178    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  6    2   0   15    43   11   44    0    0    1    0   171    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  7    1   0   14    42   11   41    0    0    1    0   156    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  8    1   0   10    34    9   32    0    0    0    0    46    0   0   0 100
</span><br>
<span class="quotelev1">&gt;  9    1   0   11    34    9   32    0    0    1    0    82    0   0   0 100
</span><br>
<span class="quotelev1">&gt; 10    1   0   10    32    8   30    0    0    1    0    55    0   0   0 100
</span><br>
<span class="quotelev1">&gt; 11    0   0   10    31    8   29    0    0    0    0    51    0   0   0 100
</span><br>
<span class="quotelev1">&gt; 12    0   0    9    30    8   28    0    0    0    0    46    0   0   0 100
</span><br>
<span class="quotelev1">&gt; 13    1   0   11    29    7   27    0    0    0    0    59    0   0   0 100
</span><br>
<span class="quotelev1">&gt; 14    1   0   11    33    8   29    0    0    1    0    68    0   0   0 100
</span><br>
<span class="quotelev1">&gt; 15    0   0   11    29    7   26    0    0    0    0    48    0   0   0 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found the following addresses which state that it is possible
</span><br>
<span class="quotelev1">&gt; to bind a process to a processor set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://developers.sun.com/solaris/articles/solaris_processor.html">http://developers.sun.com/solaris/articles/solaris_processor.html</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/10277221/binding-process-to-multiple-processors-on-sun">http://stackoverflow.com/questions/10277221/binding-process-to-multiple-processors-on-sun</a>
</span><br>
<span class="quotelev1">&gt; -solaris-os
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please repeat the hwloc-bind tests for both 1.3 and 1.5, but run
</span><br>
<span class="quotelev2">&gt;&gt; the report bindings script instead of date. That will show where
</span><br>
<span class="quotelev2">&gt;&gt; the child process was actually bound. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh rs0
</span><br>
<span class="quotelev1">&gt; cd hwloc
</span><br>
<span class="quotelev1">&gt; set path = ( `pwd`/hwloc-1.3.2/bin $path )
</span><br>
<span class="quotelev1">&gt; setenv LD_LIBRARY_PATH_32 `pwd`/hwloc-1.3.2/lib:${LD_LIBRARY_PATH_32}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I always get &quot;errno 18 Cross-device link&quot; if I use
</span><br>
<span class="quotelev1">&gt; &quot;socket:*.core:*&quot;. No diference between &quot;-l&quot; and &quot;-p&quot;. I
</span><br>
<span class="quotelev1">&gt; don't see differences in the output but I can provide the
</span><br>
<span class="quotelev1">&gt; output for all 16 hardware threads with both &quot;-l&quot; and &quot;-p&quot;
</span><br>
<span class="quotelev1">&gt; if you need it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 107 which hwloc-bind
</span><br>
<span class="quotelev1">&gt; /home/fd1026/hwloc/hwloc-1.3.2/bin/hwloc-bind
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 108 hwloc-bind socket:0.core:0 -l report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 114 hwloc-bind socket:0.core:0 -p report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 118 hwloc-bind socket:1.core:3 -l report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 119 hwloc-bind socket:1.core:3 -p report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get no error if I use &quot;pu:*&quot; but I don't see a difference in the
</span><br>
<span class="quotelev1">&gt; output. For me the output looks always the same independent of
</span><br>
<span class="quotelev1">&gt; &quot;pu:0&quot;, ..., &quot;pu:15&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 120 hwloc-bind pu:0 -l report-bindings.sh
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 121 hwloc-bind pu:0 -p report-bindings.sh
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the same things for hwloc-1.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 106 which hwloc-bind
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/hwloc-bind
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 107 hwloc-bind socket:0.core:0 -l report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 108 hwloc-bind socket:0.core:0 -p report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 109 hwloc-bind socket:1.core:3 -l report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 110 hwloc-bind socket:1.core:3 -p report-bindings.sh
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 112 hwloc-bind pu:0 -l report-bindings.sh
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 hwloc 113 hwloc-bind pu:0 -p report-bindings.sh
</span><br>
<span class="quotelev1">&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev1">&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev1">&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the above output helpful? Thank you very much for your help in advance.
</span><br>
<span class="quotelev1">&gt; Do you know a C++ application which I can try to test our compiler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##########################################################################
</span><br>
<span class="quotelev1">&gt; #                                                                        #
</span><br>
<span class="quotelev1">&gt; # Hochschule Fulda          University of Applied Sciences               #
</span><br>
<span class="quotelev1">&gt; # FB Angewandte Informatik  Department of Applied Computer Science       #
</span><br>
<span class="quotelev1">&gt; #                                                                        #
</span><br>
<span class="quotelev1">&gt; # Prof. Dr. Siegmar Gross   Tel.:   +49 (0)661 9640 - 333                #
</span><br>
<span class="quotelev1">&gt; #                           Fax:    +49 (0)661 9640 - 349                #
</span><br>
<span class="quotelev1">&gt; # Marquardstr. 35           WWW:    <a href="http://www.hs-fulda.de/~gross">http://www.hs-fulda.de/~gross</a>        #
</span><br>
<span class="quotelev1">&gt; #                           E-Mail: Siegmar.Gross_at_[hidden] #
</span><br>
<span class="quotelev1">&gt; # D-36039 Fulda                                                          #
</span><br>
<span class="quotelev1">&gt; #                                                                        #
</span><br>
<span class="quotelev1">&gt; ##########################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0710.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0711.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
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
