<?
$subject_val = "Re: [hwloc-devel] Support for new architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  9 03:38:14 2013" -->
<!-- isoreceived="20131109083814" -->
<!-- sent="Sat, 09 Nov 2013 09:38:10 +0100" -->
<!-- isosent="20131109083810" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Support for new architecture" -->
<!-- id="527DF472.3050700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="17C64459-6229-48F3-9243-04D377CC0FDF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Support for new architecture<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-09 03:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3980.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-21-gdfab146)"</a>
<li><strong>Previous message:</strong> <a href="3978.php">Ralph Castain: "[hwloc-devel] Support for new architecture"</a>
<li><strong>In reply to:</strong> <a href="3978.php">Ralph Castain: "[hwloc-devel] Support for new architecture"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>Is there something below that is the main reason of this mail? I don't
<br>
anything obviously incompatible with hwloc here. This all seems mostly
<br>
hierarchical to me, nothing harder than a NUMA machine with a strange
<br>
NUMA interconnect.
<br>
<p>A couple notes:
<br>
* NIC don't require a PCI bus in hwloc. We can attach OS devices
<br>
everywhere. And we can add other types of buses if needed (the bridge
<br>
type is already configurable).
<br>
* Your hierarchy of objects may have to use custom types or generic Groups
<br>
* if there are independent lightweight kernels on small parts of the
<br>
machine, we'll have to be careful assuming things like binding don't
<br>
work across different subparts
<br>
* the same controller in &quot;common support infrastructure&quot; in host or
<br>
boards could be individual NICs, one for each subcomponent?
<br>
* if there are objects within a single parent that have different
<br>
distances to that common infrastructure, there's still a way to do it
<br>
(put the NIC under a group of nearby sockets, and add a distance matrix
<br>
explaining all this).
<br>
<p>If that doesn't work, we'll do a hwloc v2.0 with very intrusive changes,
<br>
we'll see :)
<br>
<p>Brice
<br>
<p><p><p>Le 08/11/2013 17:42, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are seeing a new architecture appearing in the very near future, and I'm not sure how hwloc will handle it. Consider the following case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * I have a rack that contains multiple &quot;hosts&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * each host consists of a box/shelf with common support infrastructure in it - it has some kind of controller in it, and might have some networking support, maybe a pool of memory that can be allocated across the occupants.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * in the host, I have one or more &quot;boards&quot;. Each board again has a controller in it with some common infrastructure to support its local sockets - might include some networking that would look like NICs (though not necessarily on a PCIe interface), a board-level memory pool, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * each socket contains one or more die. Each die runs its own instance of an OS - probably a lightweight kernel - that can vary between dies (e.g., might have a tweaked configuration), and has its own associated memory that will physically reside outside the socket. You can think of each die as constituting a &quot;shared memory locus&quot; - i.e., processes running on that die can share memory between them as it would sit under the same OS instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * each die has some number of cores/hwthreads/caches etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the sockets are not sitting in some PCIe bus - they appear to be directly connected to the overall network just like a &quot;node&quot; would appear today. However, there is a definite need for higher layers (RMs and MPIs) to understand this overall hierarchy and the &quot;distances&quot; between the individual elements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on how we can support this?
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="3980.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-21-gdfab146)"</a>
<li><strong>Previous message:</strong> <a href="3978.php">Ralph Castain: "[hwloc-devel] Support for new architecture"</a>
<li><strong>In reply to:</strong> <a href="3978.php">Ralph Castain: "[hwloc-devel] Support for new architecture"</a>
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
