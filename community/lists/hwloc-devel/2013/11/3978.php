<?
$subject_val = "[hwloc-devel] Support for new architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  8 11:43:03 2013" -->
<!-- isoreceived="20131108164303" -->
<!-- sent="Fri, 8 Nov 2013 08:42:47 -0800" -->
<!-- isosent="20131108164247" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[hwloc-devel] Support for new architecture" -->
<!-- id="17C64459-6229-48F3-9243-04D377CC0FDF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Support for new architecture<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-08 11:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3979.php">Brice Goglin: "Re: [hwloc-devel] Support for new architecture"</a>
<li><strong>Previous message:</strong> <a href="3977.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-20-g713add8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3979.php">Brice Goglin: "Re: [hwloc-devel] Support for new architecture"</a>
<li><strong>Reply:</strong> <a href="3979.php">Brice Goglin: "Re: [hwloc-devel] Support for new architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We are seeing a new architecture appearing in the very near future, and I'm not sure how hwloc will handle it. Consider the following case:
<br>
<p>* I have a rack that contains multiple &quot;hosts&quot;
<br>
<p>* each host consists of a box/shelf with common support infrastructure in it - it has some kind of controller in it, and might have some networking support, maybe a pool of memory that can be allocated across the occupants.
<br>
<p>* in the host, I have one or more &quot;boards&quot;. Each board again has a controller in it with some common infrastructure to support its local sockets - might include some networking that would look like NICs (though not necessarily on a PCIe interface), a board-level memory pool, etc.
<br>
<p>* each socket contains one or more die. Each die runs its own instance of an OS - probably a lightweight kernel - that can vary between dies (e.g., might have a tweaked configuration), and has its own associated memory that will physically reside outside the socket. You can think of each die as constituting a &quot;shared memory locus&quot; - i.e., processes running on that die can share memory between them as it would sit under the same OS instance.
<br>
<p>* each die has some number of cores/hwthreads/caches etc.
<br>
<p>Note that the sockets are not sitting in some PCIe bus - they appear to be directly connected to the overall network just like a &quot;node&quot; would appear today. However, there is a definite need for higher layers (RMs and MPIs) to understand this overall hierarchy and the &quot;distances&quot; between the individual elements.
<br>
<p>Any thoughts on how we can support this?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3979.php">Brice Goglin: "Re: [hwloc-devel] Support for new architecture"</a>
<li><strong>Previous message:</strong> <a href="3977.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-20-g713add8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3979.php">Brice Goglin: "Re: [hwloc-devel] Support for new architecture"</a>
<li><strong>Reply:</strong> <a href="3979.php">Brice Goglin: "Re: [hwloc-devel] Support for new architecture"</a>
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
