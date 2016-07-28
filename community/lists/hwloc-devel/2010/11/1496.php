<?
$subject_val = "Re: [hwloc-devel] hwloc to be included in RHEL 6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 10:03:01 2010" -->
<!-- isoreceived="20101118150301" -->
<!-- sent="Thu, 18 Nov 2010 16:02:50 +0100" -->
<!-- isosent="20101118150250" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc to be included in RHEL 6.1" -->
<!-- id="201011181602.50923.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CE53E67.8030602_at_inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 10:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, November 18, 2010 03:55:35 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 18/11/2010 08:50, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Red Hat would like to included hwloc in the upcoming version of the Red
</span><br>
<span class="quotelev2">&gt; &gt; Hat Enterprise Linux 6.1. There is Bugzilla 648593
</span><br>
<span class="quotelev2">&gt; &gt; [RFE] Include Portable Hardware Locality (hwloc) in RHEL
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=648593">https://bugzilla.redhat.com/show_bug.cgi?id=648593</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; to address this.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I got following input from the devel:
</span><br>
<span class="quotelev2">&gt; &gt; =================================================
</span><br>
<span class="quotelev2">&gt; &gt; There appears to be a significant drawback to using hwloc.  The core #
</span><br>
<span class="quotelev2">&gt; &gt; shown in hwloc-ls does NOT map 1:1 with the processor id in
</span><br>
<span class="quotelev2">&gt; &gt; /proc/cpuinfo.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For example, on intel-s3e36-02.lab hwloc shows the core ids in socket 0
</span><br>
<span class="quotelev2">&gt; &gt; as {0,1,2,3,4,5,6,7}.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /proc/cpuinfo shows these as physically being {0,4,8,12,16,20,24,28}.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On the cmd-line, hwloc-ls does indicate a difference between the hwloc
</span><br>
<span class="quotelev2">&gt; &gt; core id and the physical id:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_intel-s3e36-02 ~]# hwloc-ls
</span><br>
<span class="quotelev2">&gt; &gt; Machine (64GB)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   NUMANode #0 (phys=0 16GB) + Socket #0 + L3 #0 (24MB)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #0 (256KB) + L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #1 (256KB) + L1 #1 (32KB) + Core #1 + PU #1 (phys=4)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #2 (256KB) + L1 #2 (32KB) + Core #2 + PU #2 (phys=8)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #3 (256KB) + L1 #3 (32KB) + Core #3 + PU #3 (phys=12)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #4 (256KB) + L1 #4 (32KB) + Core #4 + PU #4 (phys=16)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #5 (256KB) + L1 #5 (32KB) + Core #5 + PU #5 (phys=20)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #6 (256KB) + L1 #6 (32KB) + Core #6 + PU #6 (phys=24)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #7 (256KB) + L1 #7 (32KB) + Core #7 + PU #7 (phys=28)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you use the graphical interface, it is possible that
</span><br>
<span class="quotelev2">&gt; &gt; customers/GSS/everyone screws up the reporting of CPU #s.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Possible solution: Have hwloc-ls use '-p' by default.
</span><br>
<span class="quotelev2">&gt; &gt; =================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if you are open to change the default from --logical to --
</span><br>
<span class="quotelev2">&gt; &gt; physical. Please let me know your opinion on it. If you don't think that
</span><br>
<span class="quotelev2">&gt; &gt; it's a good idea perhaps you can give us arguments why you prefer
</span><br>
<span class="quotelev2">&gt; &gt; logical indexing over physical indexing.
</span><br>
<p>Hi Brice,
<br>
<p><span class="quotelev1">&gt; We want to keep a consistent default across the whole project. The API,
</span><br>
<span class="quotelev1">&gt; hwloc-calc and hwloc-bind use logical by default.
</span><br>
I do agree.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Another point is that at the moment you cannot distinguish if the
</span><br>
<span class="quotelev2">&gt; &gt; graphical output (.png, X, ...) was created with lstopo --physical or
</span><br>
<span class="quotelev2">&gt; &gt; lstopo --logical.
</span><br>
<p><span class="quotelev1">&gt; Actually, you can. Instead of &quot;Core #0&quot;, you get &quot;Core p#0&quot; (this &quot;p&quot;
</span><br>
<span class="quotelev1">&gt; means &quot;physical&quot;).
</span><br>
Oh, you are right. I didn't notice it. For the novice user, it will be difficult 
<br>
to notice the difference. 
<br>
<p>Actually, I had the same problem when I have first started lstopo. I was 
<br>
wondering how these indexes match with /proc/cpuinfo indexing.
<br>
<p><p><span class="quotelev2">&gt; &gt; Could you please add the legend to the picture explaining which index was
</span><br>
<span class="quotelev2">&gt; &gt; used?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess it's possible.
</span><br>
Oh, this would be great! Will it make it into 1.1?
<br>
<p>Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
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
