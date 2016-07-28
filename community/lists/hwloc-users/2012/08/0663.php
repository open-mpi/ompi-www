<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 02:17:17 2012" -->
<!-- isoreceived="20120807061717" -->
<!-- sent="Tue, 07 Aug 2012 08:17:11 +0200" -->
<!-- isosent="20120807061711" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion" -->
<!-- id="5020B2E7.5040604_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="003001cd742d$89688090$9c3981b0$_at_wattsys.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 02:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0664.php">Brock Palen: "[hwloc-users] HWLoc Documentation pages 404's"</a>
<li><strong>Previous message:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/08/2012 01:45, Kenneth A. Lloyd a &#233;crit :
<br>
<span class="quotelev1">&gt; But, isn't the returned matrix merely and adjacency matrix? Distance in
</span><br>
<span class="quotelev1">&gt; steps? This doesn't encode a weight, such as latency does it?
</span><br>
<p>There could be different types of matrices. Right now, there's a single
<br>
type called &quot;latency&quot; as defined by the ACPI SLIT specs (10 on the
<br>
diagonal, &gt;10 everywhere else, but we normalize things to get 1.0 on the
<br>
diagonal).
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 06, 2012 4:47 PM
</span><br>
<span class="quotelev1">&gt; To: Wheeler, Kyle Bruce
</span><br>
<span class="quotelev1">&gt; Cc: &lt;hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and
</span><br>
<span class="quotelev1">&gt; confusion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 07/08/2012 00:36, Wheeler, Kyle Bruce a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Ahhhh, that's key! The documentation currently says &quot;Look at ancestor 
</span><br>
<span class="quotelev2">&gt;&gt; objects from the bottom to the top until one of them contains a 
</span><br>
<span class="quotelev2">&gt;&gt; distance matrix that matches the objects exactly&quot;, which suggests to 
</span><br>
<span class="quotelev2">&gt;&gt; me that it will traverse the object hierarchy looking for the 
</span><br>
<span class="quotelev2">&gt;&gt; NUMANodes *for* me.
</span><br>
<span class="quotelev1">&gt; Ahh, this one is exactly what's really confusing. There are two things here:
</span><br>
<span class="quotelev1">&gt; 1) the object that contains the distance matrix
</span><br>
<span class="quotelev1">&gt; 2) the object that are covered by the matrix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the matrix covers the entire machine (usual case), (1) is the root
</span><br>
<span class="quotelev1">&gt; object and (2) are NUMA nodes.
</span><br>
<span class="quotelev1">&gt; If you ever have a distance matrix between all cores of the first socket
</span><br>
<span class="quotelev1">&gt; (and not any other core in the machine), the first socket object would
</span><br>
<span class="quotelev1">&gt; contain a matrix with distance-&gt;relative_depth = depth(socket)-depth(core)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So when you're looking for Core latencies, you check whether the ancestor
</span><br>
<span class="quotelev1">&gt; immediately above Core contain a matrix for Core distances, then its parent,
</span><br>
<span class="quotelev1">&gt; ... up to the root object. So it's about (1) moving up but (2) remains the
</span><br>
<span class="quotelev1">&gt; same type (but (2) gets wider when (1) goes up).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0664.php">Brock Palen: "[hwloc-users] HWLoc Documentation pages 404's"</a>
<li><strong>Previous message:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
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
