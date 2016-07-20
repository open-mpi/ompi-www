<?
$subject_val = "Re: [hwloc-users] Solaris and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:26:48 2012" -->
<!-- isoreceived="20120912142648" -->
<!-- sent="Wed, 12 Sep 2012 16:26:42 +0200" -->
<!-- isosent="20120912142642" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Solaris and hwloc" -->
<!-- id="50509BA2.4070201_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD2A495D-61FC-468B-A561-229A2886D445_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Solaris and hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I remember correctly, Solaris won't let you bind to random sets of
<br>
PUs. It can bind to single PUs, sets of NUMA nodes, or an entire
<br>
machine, or something like this.
<br>
<p>hwloc-bind has a --strict option (that sets HWLOC_CPUBIND_STRICT). Maybe
<br>
that needs to be improved.
<br>
<p>Brice
<br>
<p><p><p><p>Le 12/09/2012 16:16, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice / Samuel --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How well does hwloc work for process binding on Solaris?  This is not something I've followed closely (note that Terry Dontje has moved on to other projects inside Oracle, so he's no longer my go-to guy for All Things Solaris...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar Gross (CC'ed) originally had a binding problem in Open MPI, but we've narrowed it down to some simple binding tests with hwloc, just to avoid all the OMPI complications.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've asked him to run hwloc-bind on a few different configurations, and run my report-bindings.sh script (see below) so that it reports where it was actually bound.  He seems to get an hwloc error any time he tries to bind to more than 1 PU.  Is that expected on Solaris?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: if hwloc-bind fails to bind, should we still launch the child process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my trivial report-bindings.sh script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bitmap=`hwloc-bind --get -p`
</span><br>
<span class="quotelev1">&gt; friendly=`hwloc-calc -p -H socket.core.pu $bitmap`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;MCW rank $OMPI_COMM_WORLD_RANK (`hostname`): $friendly&quot;
</span><br>
<span class="quotelev1">&gt; exit 0
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See Seigmar's detailed reply, below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2012, at 8:22 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have purged the old stuff in the mail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's concerning that you cannot bind to a full core (i.e., all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the pu in a core). Does Solaris not allow you to bind to multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pu's in a single process?
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I don't know because I haven't used it up to now.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpstat&quot; sees all hardware threads as cpu's.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 fd1026 104 mpstat
</span><br>
<span class="quotelev2">&gt;&gt; CPU minf mjf xcal  intr ithr  csw icsw migr smtx  srw syscl  usr sys  wt idl
</span><br>
<span class="quotelev2">&gt;&gt;  0    1   0   16   224    8   36    0    0    1    0   127    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  1    1   0   38    69   40   38    0    0    1    0   146    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  2    2   0   18    57   28   41    0    0    1    0   169    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  3    1   0   14    40   11   40    0    0    1    0   152    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  4    1   0   13    41   11   41    0    0    1    0   149    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  5    1   0   17    43   12   42    0    0    1    0   178    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  6    2   0   15    43   11   44    0    0    1    0   171    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  7    1   0   14    42   11   41    0    0    1    0   156    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  8    1   0   10    34    9   32    0    0    0    0    46    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;  9    1   0   11    34    9   32    0    0    1    0    82    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt; 10    1   0   10    32    8   30    0    0    1    0    55    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt; 11    0   0   10    31    8   29    0    0    0    0    51    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt; 12    0   0    9    30    8   28    0    0    0    0    46    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt; 13    1   0   11    29    7   27    0    0    0    0    59    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt; 14    1   0   11    33    8   29    0    0    1    0    68    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt; 15    0   0   11    29    7   26    0    0    0    0    48    0   0   0 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found the following addresses which state that it is possible
</span><br>
<span class="quotelev2">&gt;&gt; to bind a process to a processor set.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://developers.sun.com/solaris/articles/solaris_processor.html">http://developers.sun.com/solaris/articles/solaris_processor.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://stackoverflow.com/questions/10277221/binding-process-to-multiple-processors-on-sun">http://stackoverflow.com/questions/10277221/binding-process-to-multiple-processors-on-sun</a>
</span><br>
<span class="quotelev2">&gt;&gt; -solaris-os
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please repeat the hwloc-bind tests for both 1.3 and 1.5, but run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the report bindings script instead of date. That will show where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the child process was actually bound. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh rs0
</span><br>
<span class="quotelev2">&gt;&gt; cd hwloc
</span><br>
<span class="quotelev2">&gt;&gt; set path = ( `pwd`/hwloc-1.3.2/bin $path )
</span><br>
<span class="quotelev2">&gt;&gt; setenv LD_LIBRARY_PATH_32 `pwd`/hwloc-1.3.2/lib:${LD_LIBRARY_PATH_32}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I always get &quot;errno 18 Cross-device link&quot; if I use
</span><br>
<span class="quotelev2">&gt;&gt; &quot;socket:*.core:*&quot;. No diference between &quot;-l&quot; and &quot;-p&quot;. I
</span><br>
<span class="quotelev2">&gt;&gt; don't see differences in the output but I can provide the
</span><br>
<span class="quotelev2">&gt;&gt; output for all 16 hardware threads with both &quot;-l&quot; and &quot;-p&quot;
</span><br>
<span class="quotelev2">&gt;&gt; if you need it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 107 which hwloc-bind
</span><br>
<span class="quotelev2">&gt;&gt; /home/fd1026/hwloc/hwloc-1.3.2/bin/hwloc-bind
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 108 hwloc-bind socket:0.core:0 -l report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 114 hwloc-bind socket:0.core:0 -p report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 118 hwloc-bind socket:1.core:3 -l report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 119 hwloc-bind socket:1.core:3 -p report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get no error if I use &quot;pu:*&quot; but I don't see a difference in the
</span><br>
<span class="quotelev2">&gt;&gt; output. For me the output looks always the same independent of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pu:0&quot;, ..., &quot;pu:15&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 120 hwloc-bind pu:0 -l report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 121 hwloc-bind pu:0 -p report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now the same things for hwloc-1.5:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 106 which hwloc-bind
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/hwloc-bind
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 107 hwloc-bind socket:0.core:0 -l report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 108 hwloc-bind socket:0.core:0 -p report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 109 hwloc-bind socket:1.core:3 -l report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 110 hwloc-bind socket:1.core:3 -p report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind 0x0000c000 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 112 hwloc-bind pu:0 -l report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rs0 hwloc 113 hwloc-bind pu:0 -p report-bindings.sh
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank  (rs0.informatik.hs-fulda.de): Socket:1024.Core:0.PU:0 Socket:1024.Core:0.PU:1 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:2.PU:2 Socket:1024.Core:2.PU:3 Socket:1024.Core:4.PU:4 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1024.Core:4.PU:5 Socket:1024.Core:6.PU:6 Socket:1024.Core:6.PU:7 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:8.PU:8 Socket:1032.Core:8.PU:9 Socket:1032.Core:10.PU:10 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:10.PU:11 Socket:1032.Core:12.PU:12 Socket:1032.Core:12.PU:13 
</span><br>
<span class="quotelev2">&gt;&gt; Socket:1032.Core:14.PU:14 Socket:1032.Core:14.PU:15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the above output helpful? Thank you very much for your help in advance.
</span><br>
<span class="quotelev2">&gt;&gt; Do you know a C++ application which I can try to test our compiler?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ##########################################################################
</span><br>
<span class="quotelev2">&gt;&gt; #                                                                        #
</span><br>
<span class="quotelev2">&gt;&gt; # Hochschule Fulda          University of Applied Sciences               #
</span><br>
<span class="quotelev2">&gt;&gt; # FB Angewandte Informatik  Department of Applied Computer Science       #
</span><br>
<span class="quotelev2">&gt;&gt; #                                                                        #
</span><br>
<span class="quotelev2">&gt;&gt; # Prof. Dr. Siegmar Gross   Tel.:   +49 (0)661 9640 - 333                #
</span><br>
<span class="quotelev2">&gt;&gt; #                           Fax:    +49 (0)661 9640 - 349                #
</span><br>
<span class="quotelev2">&gt;&gt; # Marquardstr. 35           WWW:    <a href="http://www.hs-fulda.de/~gross">http://www.hs-fulda.de/~gross</a>        #
</span><br>
<span class="quotelev2">&gt;&gt; #                           E-Mail: Siegmar.Gross_at_[hidden] #
</span><br>
<span class="quotelev2">&gt;&gt; # D-36039 Fulda                                                          #
</span><br>
<span class="quotelev2">&gt;&gt; #                                                                        #
</span><br>
<span class="quotelev2">&gt;&gt; ##########################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
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
