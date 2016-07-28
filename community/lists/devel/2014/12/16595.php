<?
$subject_val = "Re: [OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 08:40:07 2014" -->
<!-- isoreceived="20141215134007" -->
<!-- sent="Mon, 15 Dec 2014 13:40:05 +0000" -->
<!-- isosent="20141215134005" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc Status" -->
<!-- id="1418650804861.3275_at_goodyear.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57odRm4Di5Ky2XnyRf=h7H_PNUAGcfE5=DfEqsA+0dz1PMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 08:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16596.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16594.php">Ralph Castain: "[OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16594.php">Ralph Castain: "[OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16596.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16596.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forgive me if I've missed it, but I believe using physical OR logical core numbering was going to be
<br>
<p>reimplemented in the 1.8.4 series.
<br>
<p><p>I've checked out rc2 and as far as I can tell, it isn't there as yet.   Is this correct?
<br>
<p><p>thanks!
<br>
<p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Monday, December 15, 2014 8:35 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] 1.8.4rc Status
<br>
<p>Hi folks
<br>
<p>Trying to summarize the current situation on releasing 1.8.4. Remaining identified issues:
<br>
<p>1. TCP/BTL hang under mpi-thread-multiple. Asked George to look into it.
<br>
<p>2. hwloc updates required. Brice committed them to the hwloc 1.7 repo. Gilles volunteered to create the PR from there.
<br>
<p>3. Fortran f08 binding disable for compilers not meeting certain conditions. PR from Gilles awaiting review by Jeff
<br>
<p>4. Topo signature issue reported by IBM. Ralph is waiting for more debug.
<br>
<p>5. MPI/IO issue reported by Eric Chamberland. Gilles investigating.
<br>
<p>6. make check issue on SPARC. Problem and fix reported by Paul Hargrove, Ralph will commit
<br>
<p>7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and link. Need someone to investigate.
<br>
<p>Please let me know if I've missed anything.
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16595/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16596.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16594.php">Ralph Castain: "[OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16594.php">Ralph Castain: "[OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16596.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16596.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
