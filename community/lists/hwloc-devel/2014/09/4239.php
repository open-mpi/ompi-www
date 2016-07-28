<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 16:53:56 2014" -->
<!-- isoreceived="20140923205356" -->
<!-- sent="Tue, 23 Sep 2014 13:53:39 -0700" -->
<!-- isosent="20140923205339" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="14AF40A4-C213-472F-ADCB-3BF2EB5FFA74_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5421DD2C.5050703_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Using hwloc to detect Hard Disks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 16:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4240.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4241.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4241.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
True - but we intend to collect the inventory as root anyway. :-)
<br>
<p>On Sep 23, 2014, at 1:50 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 24/09/14 00:57, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Memory info is available from lshw, though they are a GPL code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW on this laptop (Intel Haswell) lshw only report DIMM info when run
</span><br>
<span class="quotelev1">&gt; as root, which I suspect would point them to accessing DMI information
</span><br>
<span class="quotelev1">&gt; via /dev/mem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using strace supports this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3405  open(&quot;/dev/mem&quot;, O_RDONLY)        = -1 EACCES (Permission denied)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW dmidecode does the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; samuel_at_haswell:~$ dmidecode
</span><br>
<span class="quotelev1">&gt; # dmidecode 2.12
</span><br>
<span class="quotelev1">&gt; /dev/mem: Permission denied
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4238.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4238.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4240.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4241.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4241.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
