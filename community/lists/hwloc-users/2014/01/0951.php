<?
$subject_val = "Re: [hwloc-users] hwloc errors on program startup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 16:01:37 2014" -->
<!-- isoreceived="20140117210137" -->
<!-- sent="Fri, 17 Jan 2014 16:01:36 -0500 (EST)" -->
<!-- isosent="20140117210136" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc errors on program startup" -->
<!-- id="alpine.LRH.2.02.1401171535500.24687_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3446.1389980432.11941.hwloc-users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc errors on program startup<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 16:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Doug Roberts: "[hwloc-users] hwloc errors on program startup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The cluster is running centos6.3 (2.6.32-279.5.2) and will be updated 
<br>
to the latest centos6.5 (2.6.32-431.3.1) kernel towards the end of next
<br>
week. I will reply back to let you know if it worked, thanks very much!
<br>
<p>-Doug
<br>
<p>On Fri, 17 Jan 2014, hwloc-users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux says socket 0 contains processors 0-7 and socket 1 contains 8-15,
</span><br>
<span class="quotelev1">&gt; while NUMA node 0 contains processors 0-3+8-11 and NUMA node 1 contains
</span><br>
<span class="quotelev1">&gt; processors 4-7+12-15. Given why I read about Opteron 6320 online, the
</span><br>
<span class="quotelev1">&gt; problem is that NUMA 0 should be replaced with two NUMA nodes with
</span><br>
<span class="quotelev1">&gt; processors 0-3 on one side and 8-11 on the other side, and NUMA 1 be
</span><br>
<span class="quotelev1">&gt; replaced with two NUMA nodes with processors 4-7 and 12-15 respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your grep for SRAT confirms that there are 4 NUMA nodes in the machine,
</span><br>
<span class="quotelev1">&gt; and the APIC numbers seem correctly associated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, it looks like you have the last BIOS revision (1.01)
</span><br>
<span class="quotelev1">&gt; <a href="http://www.tyan.com/support_download_bios.aspx?model=B.YR190B8238">http://www.tyan.com/support_download_bios.aspx?model=B.YR190B8238</a>
</span><br>
<span class="quotelev1">&gt; Is there any kernel update available from RHEL6 for your machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0952.php">Robin Scher: "[hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Doug Roberts: "[hwloc-users] hwloc errors on program startup"</a>
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
