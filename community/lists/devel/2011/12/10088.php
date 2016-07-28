<?
$subject_val = "[OMPI devel] Drastic change in ORTE behavior between trunk and 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 23:10:52 2011" -->
<!-- isoreceived="20111214041052" -->
<!-- sent="Tue, 13 Dec 2011 23:10:47 -0500" -->
<!-- isosent="20111214041047" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Drastic change in ORTE behavior between trunk and 1.5" -->
<!-- id="23B4F847-AE65-4568-AF75-E99075BA3EE9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 23:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10087.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: elan"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Reply:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed today a drastic change in how ORTE deal with the hostfile between trunk and 1.5.
<br>
<p>1. 1.5 and prior used the hostile as a suggestion, a placeholder where to pick the requested number of daemons during the launch. The current trunk spawn daemons on all the nodes provided on the host file, and then spawn the apps only on some of them.
<br>
<p>2. If a default hostfile is provided and --host was specified 1.5 and prior use the nodes to limit the number of nodes in the environment to the requested nodes. The current trunk seems to ignore the --host option if a default hostfile is available.
<br>
<p>In my configuration the hostfile is system wide, specified in the /etc via orte_default_hostfile. It contains all the nodes in the cluster, the users are supposed to use --host to limit their mpirun to a specified subset.
<br>
<p>This seems a quite significant change. I would have expected an RFC.
<br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10087.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: elan"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Reply:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
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
