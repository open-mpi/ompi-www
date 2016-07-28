<?
$subject_val = "[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 11 18:37:16 2009" -->
<!-- isoreceived="20091011223716" -->
<!-- sent="Sun, 11 Oct 2009 15:37:06 -0700 (PDT)" -->
<!-- isosent="20091011223706" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure" -->
<!-- id="Pine.GSO.4.64.0910111532180.6299_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-11 18:37:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10907.php">Ralph Castain: "Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>Previous message:</strong> <a href="10905.php">Sangamesh B: "[OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10907.php">Ralph Castain: "Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>Reply:</strong> <a href="10907.php">Ralph Castain: "Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simple job (standard compute pi, cpi.c), one machine  with 4 cores -
<br>
OpenMPI built with gcc 4.3.2 and using gcc 4.3.2.
<br>
<p>mpirun -x FOO --mca btl tcp,self -np 4 -machinefile hosty ./a.out
<br>
[hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in file ../../../../.././orte/mca/rmaps/round_robin/rmaps_rr.c at line 122
<br>
[hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in file ../../../.././orte/mca/rmaps/base/rmaps_base_map_job.c at line 88
<br>
[hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in file ../../../.././orte/mca/plm/base/plm_base_launch_support.c at line 103
<br>
[hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in file ../../../../.././orte/mca/plm/rsh/plm_rsh_module.c at line 1013
<br>
<p>?
<br>
DM
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10907.php">Ralph Castain: "Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>Previous message:</strong> <a href="10905.php">Sangamesh B: "[OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10907.php">Ralph Castain: "Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>Reply:</strong> <a href="10907.php">Ralph Castain: "Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
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
