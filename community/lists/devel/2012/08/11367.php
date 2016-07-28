<?
$subject_val = "[OMPI devel] No-VM launch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 12:37:10 2012" -->
<!-- isoreceived="20120803163710" -->
<!-- sent="Fri, 3 Aug 2012 09:37:03 -0700" -->
<!-- isosent="20120803163703" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] No-VM launch" -->
<!-- id="98562C4E-71DD-4CBF-9399-9F8A2DA838E6_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] No-VM launch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 12:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Previous message:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I know some people really preferred our old method of launch - i.e., when we used to map the job first, and then only launch daemons on the nodes that were being used by application procs. We gained some things by making the change, but recognized that we also lost something.
<br>
<p>At the time of the change, maintaining both methods of launch would have been very difficult. However, we now have introduced the ORTE state machine, and can implement the old launch method as a simple component in that framework.
<br>
<p>I have done that and committed it to the trunk today (r26946). It appears to be working fine across multiple nodes, so please feel free to try it and report any problems. You can activate it by adjusting its priority:
<br>
<p>-mca state_novm_priority 100
<br>
<p>Any value over 60 will activate it.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Previous message:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
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
