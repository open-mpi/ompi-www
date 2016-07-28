<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 12:34:09 2006" -->
<!-- isoreceived="20061006163409" -->
<!-- sent="Fri, 6 Oct 2006 10:33:57 -0600" -->
<!-- isosent="20061006163357" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F5FD1_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-06 12:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<li><strong>Previous message:</strong> <a href="1941.php">Maestas, Christopher Daniel: "[OMPI users] A -pernode behavior using torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>Reply:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone ever seen this?
<br>
<pre>
---
[dn32:07156] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file
base/rmaps_base_node.c at line 153
[dn32:07156] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file
rmaps_rr.c at line 270
[dn32:07156] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file
rmgr_urm.c at line 428
[dn32:07156] orterun: spawn failed with errno=-3
---
This happened on a 2ppn job using 2 nodes.
I tried searching the site, but didn't find anything.
Thanks,
-cdm
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<li><strong>Previous message:</strong> <a href="1941.php">Maestas, Christopher Daniel: "[OMPI users] A -pernode behavior using torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>Reply:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
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
