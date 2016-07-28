<?
$subject_val = "[OMPI devel] Locality info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 16:28:22 2011" -->
<!-- isoreceived="20111019202822" -->
<!-- sent="Wed, 19 Oct 2011 14:28:13 -0600" -->
<!-- isosent="20111019202813" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Locality info" -->
<!-- id="13122DFD-BAD9-4589-8495-47C97EE51412_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Locality info<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 16:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9857.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>Previous message:</strong> <a href="9855.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9857.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>Reply:</strong> <a href="9857.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>Reply:</strong> <a href="9866.php">George Bosilca: "Re: [OMPI devel] Locality info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>For those of you who don't follow the commits...
<br>
<p>I just committed (r25323) an extension of the orte_ess.proc_get_locality function that allows a process to get its relative resource usage with any other proc in the job. In other words, you can provide a process name to the function, and the returned bitmask tells you if you share a node, numa, socket, caches (by level), core, and hyperthread with that process.
<br>
<p>If you are on the same node and unbound, of course, you share all of those. However, if you are bound, then this can help tell you if you are on a common numa node, sharing an L1 cache, etc. Might be handy.
<br>
<p>I implemented the underlying functionality so that we can further extend it to tell you the relative resource location of two procs on a remote node. If that someday becomes of interest, it would be relatively easy to do - but would require passing more info around. Hence, I've allowed for it, but not implemented it until there is some identified need.
<br>
<p>Locality info is available anytime after the modex is completed during MPI_Init, and is supported regardless of launch environment (minus cnos, for now), launch by mpirun, or direct-launch - in other words, pretty much always.
<br>
<p>Hope it proves of help in your work
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9857.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>Previous message:</strong> <a href="9855.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9857.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>Reply:</strong> <a href="9857.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>Reply:</strong> <a href="9866.php">George Bosilca: "Re: [OMPI devel] Locality info"</a>
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
