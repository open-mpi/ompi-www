<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 19:46:09 2012" -->
<!-- isoreceived="20120806234609" -->
<!-- sent="Mon, 6 Aug 2012 17:45:17 -0600" -->
<!-- isosent="20120806234517" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion" -->
<!-- id="003001cd742d$89688090$9c3981b0$_at_wattsys.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50204956.4070009_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 19:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0663.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0663.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0663.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But, isn't the returned matrix merely and adjacency matrix? Distance in
<br>
steps? This doesn't encode a weight, such as latency does it?
<br>
<p>Ken
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden]
<br>
[mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Monday, August 06, 2012 4:47 PM
<br>
To: Wheeler, Kyle Bruce
<br>
Cc: &lt;hwloc-users_at_[hidden]&gt;
<br>
Subject: Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and
<br>
confusion
<br>
<p>Le 07/08/2012 00:36, Wheeler, Kyle Bruce a &#233;crit :
<br>
<span class="quotelev1">&gt; Ahhhh, that's key! The documentation currently says &quot;Look at ancestor 
</span><br>
<span class="quotelev1">&gt; objects from the bottom to the top until one of them contains a 
</span><br>
<span class="quotelev1">&gt; distance matrix that matches the objects exactly&quot;, which suggests to 
</span><br>
<span class="quotelev1">&gt; me that it will traverse the object hierarchy looking for the 
</span><br>
<span class="quotelev1">&gt; NUMANodes *for* me.
</span><br>
<p>Ahh, this one is exactly what's really confusing. There are two things here:
<br>
1) the object that contains the distance matrix
<br>
2) the object that are covered by the matrix
<br>
<p>When the matrix covers the entire machine (usual case), (1) is the root
<br>
object and (2) are NUMA nodes.
<br>
If you ever have a distance matrix between all cores of the first socket
<br>
(and not any other core in the machine), the first socket object would
<br>
contain a matrix with distance-&gt;relative_depth = depth(socket)-depth(core)
<br>
<p>So when you're looking for Core latencies, you check whether the ancestor
<br>
immediately above Core contain a matrix for Core distances, then its parent,
<br>
... up to the root object. So it's about (1) moving up but (2) remains the
<br>
same type (but (2) gets wider when (1) goes up).
<br>
<p>Brice
<br>
<p>_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0663.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0663.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0663.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
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
