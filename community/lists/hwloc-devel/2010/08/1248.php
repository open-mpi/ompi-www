<?
$subject_val = "Re: [hwloc-devel] hwloc on power7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  5 09:17:18 2010" -->
<!-- isoreceived="20100805131718" -->
<!-- sent="Thu, 5 Aug 2010 15:17:07 +0200" -->
<!-- isosent="20100805131707" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on power7" -->
<!-- id="201008051517.08267.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C5A4739.8000409_at_inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-05 09:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1249.php">Bernd Kallies: "[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I have discussed the issue internally and we can confirm that CPU topology for 
<br>
POWER7 as reported by 2.6.32 kernel (in RHEL6.0) is indeed wrong.
<br>
<p>I have submitted BZ against RHEL6.0
<br>
<a href="https://bugzilla.redhat.com/show_bug.cgi?id=621546">https://bugzilla.redhat.com/show_bug.cgi?id=621546</a>
<br>
<p>to get it fixed. Let's see if the fix can be back-ported from 2.6.34 kernel.
<br>
<p>Thanks
<br>
Jirka
<br>
<p>On Thursday, August 05, 2010 07:08:09 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Power7 topology isn't properly reported by old kernels. We've been said
</span><br>
<span class="quotelev1">&gt; that it works fine with 2.6.34. I am not sure which commit fixed this. I
</span><br>
<span class="quotelev1">&gt; don't see many commits talk about Power7 topology between 2.6.32 and
</span><br>
<span class="quotelev1">&gt; 2.6.34, so it may be this one (from 2.6.34):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 4b83c330b4d38e869111bda6e9077d4f61ed974a
</span><br>
<span class="quotelev1">&gt; Author: Anton Blanchard &lt;anton_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Apr 7 15:33:44 2010 +0000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     powerpc/numa: Add form 1 NUMA affinity
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Firmware changed the way it represents memory and cpu affinity on
</span><br>
<span class="quotelev1">&gt; POWER7. Unfortunately the old method now caps the topology to work around
</span><br>
<span class="quotelev1">&gt; issues with legacy operating systems. For Linux to get the correct
</span><br>
<span class="quotelev1">&gt; topology we need to use the new form 1 affinity information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     We set the form 1 field in the client architecture, and if we see &quot;1&quot;
</span><br>
<span class="quotelev1">&gt; in the ibm,associativity-form property firmware supports form 1 affinity
</span><br>
<span class="quotelev1">&gt; and we should look at the first field in the
</span><br>
<span class="quotelev1">&gt; ibm,associativity-reference-points array. If not we use the second field
</span><br>
<span class="quotelev1">&gt; as we always have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Signed-off-by: Anton Blanchard &lt;anton_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Signed-off-by: Benjamin Herrenschmidt &lt;benh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe some distros should backport it...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 05/08/2010 00:19, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just got access to one POWER7 box. Both hwloc 1.0.2 and latest hwloc
</span><br>
<span class="quotelev2">&gt; &gt; 1.1 seem to have problems to detect the sockets correctly.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's IBM 8406-71Y server equipped with only one socket. On the chip there
</span><br>
<span class="quotelev2">&gt; &gt; are 8 cores. lstopo seems to be wrong here, reporting 8 sockets.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if this problem arose in linux kernel or it's bug in lstopo
</span><br>
<span class="quotelev2">&gt; &gt; code. Does anybody else tried to run hwloc on POWER7?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Jirka
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kernel: 2.6.32-54.el6.ppc64
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; root_at_[hidden]: /tmp/hwloc-1.1a1r2387/utils
</span><br>
<span class="quotelev2">&gt; &gt; $ ./lstopo
</span><br>
<span class="quotelev2">&gt; &gt; Machine (7616MB)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #0 + L3 #0 (4096KB) + L2 #0 (256KB) + L1 #0 (32KB) + Core #0
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #1 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #2 (phys=2)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #3 (phys=3)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #1 + L3 #1 (4096KB) + L2 #1 (256KB) + L1 #1 (32KB) + Core #1
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #4 (phys=4)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #5 (phys=5)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #6 (phys=6)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #7 (phys=7)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #2 + L3 #2 (4096KB) + L2 #2 (256KB) + L1 #2 (32KB) + Core #2
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #8 (phys=8)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #9 (phys=9)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #10 (phys=10)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #11 (phys=11)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #3 + L3 #3 (4096KB) + L2 #3 (256KB) + L1 #3 (32KB) + Core #3
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #12 (phys=12)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #13 (phys=13)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #14 (phys=14)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #15 (phys=15)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #4 + L3 #4 (4096KB) + L2 #4 (256KB) + L1 #4 (32KB) + Core #4
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #16 (phys=16)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #17 (phys=17)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #18 (phys=18)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #19 (phys=19)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #5 + L3 #5 (4096KB) + L2 #5 (256KB) + L1 #5 (32KB) + Core #5
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #20 (phys=20)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #21 (phys=21)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #22 (phys=22)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #23 (phys=23)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #6 + L3 #6 (4096KB) + L2 #6 (256KB) + L1 #6 (32KB) + Core #6
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #24 (phys=24)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #25 (phys=25)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #26 (phys=26)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #27 (phys=27)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #7 + L3 #7 (4096KB) + L2 #7 (256KB) + L1 #7 (32KB) + Core #7
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     PU #28 (phys=28)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #29 (phys=29)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #30 (phys=30)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #31 (phys=31)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1249.php">Bernd Kallies: "[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
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
