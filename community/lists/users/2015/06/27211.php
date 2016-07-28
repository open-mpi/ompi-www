<?
$subject_val = "[OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 11:26:33 2015" -->
<!-- isoreceived="20150629152633" -->
<!-- sent="Mon, 29 Jun 2015 17:26:30 +0200" -->
<!-- isosent="20150629152630" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS" -->
<!-- id="559163A6.6060507_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 11:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27216.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Reply:</strong> <a href="27216.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>The my_sense entity in struct ompi_osc_sm_module_t is protected by 
<br>
OPAL_HAVE_POSIX_THREADS in the definition (ompi/mca/osc/sm/osc_sm.h)
<br>
<p>But in ./ompi/mca/osc/sm/osc_sm_active_target.c it is not.
<br>
<p>(Tripped on this due to a compiler problem which caused it to only 
<br>
partially detect threads support, found for C++, missing for C/Fortran)
<br>
<p>Not sure if it is something that need to be dealt with but reporting anyway.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27216.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Reply:</strong> <a href="27216.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
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
