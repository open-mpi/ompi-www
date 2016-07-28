<?
$subject_val = "Re: [hwloc-devel] hwloc to be included in RHEL 6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 09:55:42 2010" -->
<!-- isoreceived="20101118145542" -->
<!-- sent="Thu, 18 Nov 2010 08:55:35 -0600" -->
<!-- isosent="20101118145535" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc to be included in RHEL 6.1" -->
<!-- id="4CE53E67.8030602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011181550.07285.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc to be included in RHEL 6.1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 09:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1496.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1494.php">Jirka Hladky: "[hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1494.php">Jirka Hladky: "[hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1496.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Reply:</strong> <a href="1496.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/11/2010 08:50, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Red Hat would like to included hwloc in the upcoming version of the Red Hat 
</span><br>
<span class="quotelev1">&gt; Enterprise Linux 6.1. There is Bugzilla 648593
</span><br>
<span class="quotelev1">&gt; [RFE] Include Portable Hardware Locality (hwloc) in RHEL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=648593">https://bugzilla.redhat.com/show_bug.cgi?id=648593</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to address this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got following input from the devel:
</span><br>
<span class="quotelev1">&gt; =================================================
</span><br>
<span class="quotelev1">&gt; There appears to be a significant drawback to using hwloc.  The core # shown in
</span><br>
<span class="quotelev1">&gt; hwloc-ls does NOT map 1:1 with the processor id in /proc/cpuinfo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, on intel-s3e36-02.lab hwloc shows the core ids in socket 0 as
</span><br>
<span class="quotelev1">&gt; {0,1,2,3,4,5,6,7}.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo shows these as physically being {0,4,8,12,16,20,24,28}.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the cmd-line, hwloc-ls does indicate a difference between the hwloc core id
</span><br>
<span class="quotelev1">&gt; and the physical id:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_intel-s3e36-02 ~]# hwloc-ls
</span><br>
<span class="quotelev1">&gt; Machine (64GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode #0 (phys=0 16GB) + Socket #0 + L3 #0 (24MB)
</span><br>
<span class="quotelev1">&gt;     L2 #0 (256KB) + L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;     L2 #1 (256KB) + L1 #1 (32KB) + Core #1 + PU #1 (phys=4)
</span><br>
<span class="quotelev1">&gt;     L2 #2 (256KB) + L1 #2 (32KB) + Core #2 + PU #2 (phys=8)
</span><br>
<span class="quotelev1">&gt;     L2 #3 (256KB) + L1 #3 (32KB) + Core #3 + PU #3 (phys=12)
</span><br>
<span class="quotelev1">&gt;     L2 #4 (256KB) + L1 #4 (32KB) + Core #4 + PU #4 (phys=16)
</span><br>
<span class="quotelev1">&gt;     L2 #5 (256KB) + L1 #5 (32KB) + Core #5 + PU #5 (phys=20)
</span><br>
<span class="quotelev1">&gt;     L2 #6 (256KB) + L1 #6 (32KB) + Core #6 + PU #6 (phys=24)
</span><br>
<span class="quotelev1">&gt;     L2 #7 (256KB) + L1 #7 (32KB) + Core #7 + PU #7 (phys=28)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use the graphical interface, it is possible that customers/GSS/everyone
</span><br>
<span class="quotelev1">&gt; screws up the reporting of CPU #s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Possible solution: Have hwloc-ls use '-p' by default.
</span><br>
<span class="quotelev1">&gt; =================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if you are open to change the default from --logical to --
</span><br>
<span class="quotelev1">&gt; physical. Please let me know your opinion on it. If you don't think that it's 
</span><br>
<span class="quotelev1">&gt; a good idea perhaps you can give us arguments why you prefer logical indexing 
</span><br>
<span class="quotelev1">&gt; over physical indexing.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We want to keep a consistent default across the whole project. The API,
<br>
hwloc-calc and hwloc-bind use logical by default.
<br>
<p><span class="quotelev1">&gt; Another point is that at the moment you cannot distinguish if the graphical 
</span><br>
<span class="quotelev1">&gt; output (.png, X, ...) was created with lstopo --physical or lstopo --logical.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Actually, you can. Instead of &quot;Core #0&quot;, you get &quot;Core p#0&quot; (this &quot;p&quot;
<br>
means &quot;physical&quot;).
<br>
<p><span class="quotelev1">&gt; Could you please add the legend to the picture explaining which index was 
</span><br>
<span class="quotelev1">&gt; used?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I guess it's possible.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1496.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1494.php">Jirka Hladky: "[hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1494.php">Jirka Hladky: "[hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1496.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Reply:</strong> <a href="1496.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
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
