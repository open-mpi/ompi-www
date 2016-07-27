<?
$subject_val = "Re: [hwloc-devel] hwloc on power7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 18:27:13 2010" -->
<!-- isoreceived="20100804222713" -->
<!-- sent="Thu, 5 Aug 2010 00:27:05 +0200" -->
<!-- isosent="20100804222705" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on power7" -->
<!-- id="201008050027.05899.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 18:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1244.php">Jirka Hladky: "[hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1244.php">Jirka Hladky: "[hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have just found that
<br>
<p>cat /sys/devices/system/cpu/cpu*/topology/physical_package_id
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
-1
<br>
<p>which seems to be wrong.....
<br>
<p>Jirka
<br>
<p>On Thursday, August 05, 2010 12:19:41 am Jirka Hladky wrote:
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
<span class="quotelev1">&gt; It's IBM 8406-71Y server equipped with only one socket. On the chip there
</span><br>
<span class="quotelev1">&gt; are 8 cores. lstopo seems to be wrong here, reporting 8 sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this problem arose in linux kernel or it's bug in lstopo
</span><br>
<span class="quotelev1">&gt; code. Does anybody else tried to run hwloc on POWER7?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1244.php">Jirka Hladky: "[hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1244.php">Jirka Hladky: "[hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1246.php">Christopher Samuel: "Re: [hwloc-devel] hwloc on power7"</a>
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
