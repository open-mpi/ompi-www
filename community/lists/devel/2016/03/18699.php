<?
$subject_val = "[OMPI devel] RFC: RML change to multi-select";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 19:21:32 2016" -->
<!-- isoreceived="20160315232132" -->
<!-- sent="Tue, 15 Mar 2016 16:21:29 -0700" -->
<!-- isosent="20160315232129" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: RML change to multi-select" -->
<!-- id="9CBE25F4-5E85-4681-A0B8-D1E1D56F8DFF_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: RML change to multi-select<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-15 19:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18698.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18702.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Reply:</strong> <a href="18702.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We are working on integrating the RML with libfabric so we have access to both management Ethernet and fabric transports. A first step in enabling this is to convert the RML framework to multi-select of active components. The stub functions then scan the components in priority order until one can perform the requested action (e.g., send a buffer). This will allow us to simultaneously support both OFI and other components.
<br>
<p>While making this change, we also:
<br>
<p>* removed the qos framework - this functionality has been moved to another library that builds on top of the RML
<br>
<p>* removed the ftrm component - this was stale, and it wasn&#226;&#128;&#153;t clear to us how it would change under the new architecture
<br>
<p>We will be adding the new OFI component in a separate PR. This just contains the change to a multi-select framework.
<br>
<p>The PR is here:  <a href="https://github.com/open-mpi/ompi/pull/1457">https://github.com/open-mpi/ompi/pull/1457</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1457">https://github.com/open-mpi/ompi/pull/1457</a>&gt;
<br>
<p>Please feel free to comment and/or make suggestions
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18698.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18702.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Reply:</strong> <a href="18702.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
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
