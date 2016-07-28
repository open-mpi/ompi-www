<?
$subject_val = "Re: [hwloc-devel] CPU affinity of OS Devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 16:53:34 2012" -->
<!-- isoreceived="20121106215334" -->
<!-- sent="Tue, 06 Nov 2012 22:53:29 +0100" -->
<!-- isosent="20121106215329" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU affinity of OS Devices?" -->
<!-- id="509986D9.3050006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="509984F3.8040803_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPU affinity of OS Devices?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 16:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3374.php">Guy Streeter: "[hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3374.php">Guy Streeter: "[hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Guy,
<br>
<p>I don't think OS devices ever had a cpuset. All objects that are not
<br>
things where you can bind processes usually have NULL cpusets. So when
<br>
you have a PCI or OS device, you walk up the obj-&gt;parent pointer until
<br>
you find an object with a non-NULL cpuset. That's the affinity you're
<br>
looking for.
<br>
<p>You can use hwloc_get_non_io_ancestor_obj() (in hwloc/helper.h) to find
<br>
the first parent with non-NULL cpuset.
<br>
<p>Brice
<br>
<p><p><p>Le 06/11/2012 22:45, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; I noticed on my system (Fedora 17) that the OS Devices don't have their own
</span><br>
<span class="quotelev1">&gt; cpuset. It seems like it would be good to know the affinity of the interrupt
</span><br>
<span class="quotelev1">&gt; assigned to the device. Is there a provision for this in hwloc, or would I
</span><br>
<span class="quotelev1">&gt; need to find it another way?
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; --Guy
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
<li><strong>Next message:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3374.php">Guy Streeter: "[hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3374.php">Guy Streeter: "[hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
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
