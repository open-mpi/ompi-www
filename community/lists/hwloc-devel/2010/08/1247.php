<?
$subject_val = "Re: [hwloc-devel] hwloc on power7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  5 01:11:39 2010" -->
<!-- isoreceived="20100805051139" -->
<!-- sent="Thu, 05 Aug 2010 07:08:09 +0200" -->
<!-- isosent="20100805050809" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on power7" -->
<!-- id="4C5A4739.8000409_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201008050019.42270.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on power7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-05 01:08:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1244.php">Jirka Hladky: "[hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Power7 topology isn't properly reported by old kernels. We've been said
<br>
that it works fine with 2.6.34. I am not sure which commit fixed this. I
<br>
don't see many commits talk about Power7 topology between 2.6.32 and
<br>
2.6.34, so it may be this one (from 2.6.34):
<br>
<p>commit 4b83c330b4d38e869111bda6e9077d4f61ed974a
<br>
Author: Anton Blanchard &lt;anton_at_[hidden]&gt;
<br>
Date:   Wed Apr 7 15:33:44 2010 +0000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;powerpc/numa: Add form 1 NUMA affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Firmware changed the way it represents memory and cpu affinity on POWER7.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Unfortunately the old method now caps the topology to work around issues
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with legacy operating systems. For Linux to get the correct topology we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;need to use the new form 1 affinity information.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;We set the form 1 field in the client architecture, and if we see &quot;1&quot; in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ibm,associativity-form property firmware supports form 1 affinity and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;we should look at the first field in the ibm,associativity-reference-points
<br>
&nbsp;&nbsp;&nbsp;&nbsp;array. If not we use the second field as we always have.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Signed-off-by: Anton Blanchard &lt;anton_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Signed-off-by: Benjamin Herrenschmidt &lt;benh_at_[hidden]&gt;
<br>
<p><p>Maybe some distros should backport it...
<br>
<p>Brice
<br>
<p><p><p><p>Le 05/08/2010 00:19, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just got access to one POWER7 box. Both hwloc 1.0.2 and latest hwloc 1.1 
</span><br>
<span class="quotelev1">&gt; seem to have problems to detect the sockets correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's IBM 8406-71Y server equipped with only one socket. On the chip there are 
</span><br>
<span class="quotelev1">&gt; 8 cores. lstopo seems to be wrong here, reporting 8 sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if this problem arose in linux kernel or it's bug in lstopo code. 
</span><br>
<span class="quotelev1">&gt; Does anybody else tried to run hwloc on POWER7?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kernel: 2.6.32-54.el6.ppc64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_[hidden]: /tmp/hwloc-1.1a1r2387/utils
</span><br>
<span class="quotelev1">&gt; $ ./lstopo 
</span><br>
<span class="quotelev1">&gt; Machine (7616MB)
</span><br>
<span class="quotelev1">&gt;   Socket #0 + L3 #0 (4096KB) + L2 #0 (256KB) + L1 #0 (32KB) + Core #0
</span><br>
<span class="quotelev1">&gt;     PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;     PU #1 (phys=1)
</span><br>
<span class="quotelev1">&gt;     PU #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;     PU #3 (phys=3)
</span><br>
<span class="quotelev1">&gt;   Socket #1 + L3 #1 (4096KB) + L2 #1 (256KB) + L1 #1 (32KB) + Core #1
</span><br>
<span class="quotelev1">&gt;     PU #4 (phys=4)
</span><br>
<span class="quotelev1">&gt;     PU #5 (phys=5)
</span><br>
<span class="quotelev1">&gt;     PU #6 (phys=6)
</span><br>
<span class="quotelev1">&gt;     PU #7 (phys=7)
</span><br>
<span class="quotelev1">&gt;   Socket #2 + L3 #2 (4096KB) + L2 #2 (256KB) + L1 #2 (32KB) + Core #2
</span><br>
<span class="quotelev1">&gt;     PU #8 (phys=8)
</span><br>
<span class="quotelev1">&gt;     PU #9 (phys=9)
</span><br>
<span class="quotelev1">&gt;     PU #10 (phys=10)
</span><br>
<span class="quotelev1">&gt;     PU #11 (phys=11)
</span><br>
<span class="quotelev1">&gt;   Socket #3 + L3 #3 (4096KB) + L2 #3 (256KB) + L1 #3 (32KB) + Core #3
</span><br>
<span class="quotelev1">&gt;     PU #12 (phys=12)
</span><br>
<span class="quotelev1">&gt;     PU #13 (phys=13)
</span><br>
<span class="quotelev1">&gt;     PU #14 (phys=14)
</span><br>
<span class="quotelev1">&gt;     PU #15 (phys=15)
</span><br>
<span class="quotelev1">&gt;   Socket #4 + L3 #4 (4096KB) + L2 #4 (256KB) + L1 #4 (32KB) + Core #4
</span><br>
<span class="quotelev1">&gt;     PU #16 (phys=16)
</span><br>
<span class="quotelev1">&gt;     PU #17 (phys=17)
</span><br>
<span class="quotelev1">&gt;     PU #18 (phys=18)
</span><br>
<span class="quotelev1">&gt;     PU #19 (phys=19)
</span><br>
<span class="quotelev1">&gt;   Socket #5 + L3 #5 (4096KB) + L2 #5 (256KB) + L1 #5 (32KB) + Core #5
</span><br>
<span class="quotelev1">&gt;     PU #20 (phys=20)
</span><br>
<span class="quotelev1">&gt;     PU #21 (phys=21)
</span><br>
<span class="quotelev1">&gt;     PU #22 (phys=22)
</span><br>
<span class="quotelev1">&gt;     PU #23 (phys=23)
</span><br>
<span class="quotelev1">&gt;   Socket #6 + L3 #6 (4096KB) + L2 #6 (256KB) + L1 #6 (32KB) + Core #6
</span><br>
<span class="quotelev1">&gt;     PU #24 (phys=24)
</span><br>
<span class="quotelev1">&gt;     PU #25 (phys=25)
</span><br>
<span class="quotelev1">&gt;     PU #26 (phys=26)
</span><br>
<span class="quotelev1">&gt;     PU #27 (phys=27)
</span><br>
<span class="quotelev1">&gt;   Socket #7 + L3 #7 (4096KB) + L2 #7 (256KB) + L1 #7 (32KB) + Core #7
</span><br>
<span class="quotelev1">&gt;     PU #28 (phys=28)
</span><br>
<span class="quotelev1">&gt;     PU #29 (phys=29)
</span><br>
<span class="quotelev1">&gt;     PU #30 (phys=30)
</span><br>
<span class="quotelev1">&gt;     PU #31 (phys=31)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1244.php">Jirka Hladky: "[hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
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
