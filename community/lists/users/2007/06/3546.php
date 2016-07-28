<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 09:28:45 2007" -->
<!-- isoreceived="20070625132845" -->
<!-- sent="Mon, 25 Jun 2007 06:28:38 -0700" -->
<!-- isosent="20070625132838" -->
<!-- name="Gabb, Henry" -->
<!-- email="henry.gabb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel/openmpi" -->
<!-- id="4D97B70CF7F72144881F66DFF4BD7A1202397E50_at_fmsmsx413.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.913.1182674852.6844.users_at_open-mpi.org" -->
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
<strong>From:</strong> Gabb, Henry (<em>henry.gabb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-25 09:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>Previous message:</strong> <a href="3545.php">Francesco Pietra: "[OMPI users] Fwd: intel/openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="3541.php">Francesco Pietra: "[OMPI users] intel/openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>Reply:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francesco,
<br>
Try replacing 'icc' with 'icpc' in the CXX definition.
<br>
<p>Also, you shouldn't need the full path to the compilers. Are you
<br>
initializing the compilers before configuring openmpi? If not, I
<br>
strongly recommend that you run the ifortvars.{sh|csh} and
<br>
iccvars.{sh|csh} scripts before building openmpi. These scripts are in
<br>
the bin directories of the Intel compilers.
<br>
<p>Best regards,
<br>
Henry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>Previous message:</strong> <a href="3545.php">Francesco Pietra: "[OMPI users] Fwd: intel/openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="3541.php">Francesco Pietra: "[OMPI users] intel/openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>Reply:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
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
