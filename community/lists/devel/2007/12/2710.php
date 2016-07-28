<?
$subject_val = "[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 10:14:29 2007" -->
<!-- isoreceived="20071204151429" -->
<!-- sent="Tue, 04 Dec 2007 08:14:17 -0700" -->
<!-- isosent="20071204151417" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks" -->
<!-- id="C37ABCD9.B784%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 10:14:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2711.php">Ralph H Castain: "[OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Previous message:</strong> <a href="2709.php">Ralph H Castain: "[OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Reply:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
II. Interaction between the ROUTED and GRPCOMM frameworks
<br>
When we initially developed these two frameworks within the RTE, we
<br>
envisioned them to operate totally independently of each other. Thus, the
<br>
grpcomm collectives provide algorithms such as a binomial &quot;xcast&quot; that uses
<br>
the daemons to scalably send messages across the system.
<br>
<p>However, we recently realized that the efficacy of the current grpcomm
<br>
algorithms directly hinge on the daemons being fully connected - which we
<br>
were recently told may not be the case as other people introduce different
<br>
ROUTED components. For example, using the binomial algorithm in grpcomm's
<br>
xcast while having a ring topology selected in ROUTED would likely result in
<br>
terrible performance.
<br>
<p>This raises the following questions:
<br>
<p>(a) should the GRPCOMM and ROUTED frameworks be consolidated to ensure that
<br>
the group collectives algorithms properly &quot;match&quot; the communication
<br>
topology?
<br>
<p>(b) should we automatically select the grpcomm/routed pairings based on some
<br>
internal logic?
<br>
<p>(c) should we leave this &quot;as-is&quot; and the user is responsible for making
<br>
intelligent choices (and for detecting when the performance is bad due to
<br>
this mismatch)?
<br>
<p>(d) other suggestions?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2711.php">Ralph H Castain: "[OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Previous message:</strong> <a href="2709.php">Ralph H Castain: "[OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Reply:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
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
