<?
$subject_val = "[OMPI devel] Framework selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  1 12:12:55 2008" -->
<!-- isoreceived="20080701161255" -->
<!-- sent="Tue, 01 Jul 2008 10:12:43 -0600" -->
<!-- isosent="20080701161243" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Framework selection" -->
<!-- id="C48FB39B.E136%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Framework selection<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-01 12:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4256.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Trac upgrade"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4254.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into something unexpected today relative to the selection of
<br>
frameworks. It was totally unplanned, and may be an error on my part - or I
<br>
may be expecting the incorrect behavior. However, since others may encounter
<br>
it unexpectedly as well, I am sending this to the list.
<br>
<p>What I had done was:
<br>
<p>1. set OMPI_MCA_routed=direct in my environment
<br>
<p>2. (much later) executed: mpirun ... -mca routed binomial ...
<br>
<p>What happened was that mpirun selected the direct routed module, while my
<br>
application procs selected the binomial module. This unfortunately doesn't
<br>
generate a warning, but rather segfaults and/or hangs at some unpredictable
<br>
time depending upon the invoked communication patterns.
<br>
<p>It was my understanding that the cmd line should override anything in the
<br>
environment. Is this no longer true? I checked and orterun does indeed
<br>
process the cmd line prior to invoking orte_init.
<br>
<p>Or did I inadvertently do something wrong here (other than the fact that I
<br>
had forgotten the envar was set)?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4256.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Trac upgrade"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4254.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
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
