<?
$subject_val = "[OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 08:35:15 2014" -->
<!-- isoreceived="20141215133515" -->
<!-- sent="Mon, 15 Dec 2014 05:35:13 -0800" -->
<!-- isosent="20141215133513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.4rc Status" -->
<!-- id="CAMD57odRm4Di5Ky2XnyRf=h7H_PNUAGcfE5=DfEqsA+0dz1PMg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 08:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16595.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16593.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16595.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16595.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16603.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Trying to summarize the current situation on releasing 1.8.4. Remaining
<br>
identified issues:
<br>
<p>1. TCP/BTL hang under mpi-thread-multiple. Asked George to look into it.
<br>
<p>2. hwloc updates required. Brice committed them to the hwloc 1.7 repo.
<br>
Gilles volunteered to create the PR from there.
<br>
<p>3. Fortran f08 binding disable for compilers not meeting certain
<br>
conditions. PR from Gilles awaiting review by Jeff
<br>
<p>4. Topo signature issue reported by IBM. Ralph is waiting for more debug.
<br>
<p>5. MPI/IO issue reported by Eric Chamberland. Gilles investigating.
<br>
<p>6. make check issue on SPARC. Problem and fix reported by Paul Hargrove,
<br>
Ralph will commit
<br>
<p>7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the
<br>
multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and
<br>
link. Need someone to investigate.
<br>
<p>Please let me know if I've missed anything.
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16595.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16593.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16595.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16595.php">Tom Wurgler: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16603.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
