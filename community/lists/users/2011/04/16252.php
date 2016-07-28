<?
$subject_val = "[OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 00:53:05 2011" -->
<!-- isoreceived="20110415045305" -->
<!-- sent="Fri, 15 Apr 2011 14:53:00 +1000" -->
<!-- isosent="20110415045300" -->
<!-- name="Derrick LIN" -->
<!-- email="klin938_at_[hidden]" -->
<!-- subject="[OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed)" -->
<!-- id="BANLkTikjtfJMwmppumcweh5tbAnTs+NA0A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)<br>
<strong>From:</strong> Derrick LIN (<em>klin938_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 00:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16253.php">Asad Ali: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Previous message:</strong> <a href="16251.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>Reply:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to setup a small SGE cluster with OpenMPI integrated but I am
<br>
totally stuck when trying to run a openmpi job to the SGE's PE.
<br>
<p>I mainly followed the guide sge-snow.pdf from Revolutions Computing and
<br>
<a href="http://idolinux.blogspot.com/2010/04/quick-install-of-open-mpi-with-grid.html">http://idolinux.blogspot.com/2010/04/quick-install-of-open-mpi-with-grid.html</a>
<br>
<p>The cluster is entirely ubuntu 10.10 based, both SGE 6.2u5 and OpenMPI 1.3
<br>
are directly from apt-get except OpenMPI is rebuilt from source with
<br>
--with-sge flag.
<br>
<p>Note: OpenMPI has been installed on all execution hosts, not on the queue
<br>
master and submission host.
<br>
<p>I submited a job by
<br>
<p>qsub -pe orte 8 ./ompi_job.sh
<br>
<p>The error I got looks like
<br>
=============================================================================================================================
<br>
<p>[sgeqexec01:06612] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
<br>
file ../../../../../../orte/mca/ess/hnp/ess_hnp_module.c
<br>
at line 161
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_plm_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[sgeqexec01:06612] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
<br>
file ../../../orte/runtime/orte_init.c
<br>
at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[sgeqexec01:06612] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
<br>
file ../../../../../orte/tools/orterun/orterun.c
<br>
at line 541
<br>
<p>==============================================================================================================================
<br>
<p>For troubleshooting I have done several things below:
<br>
<p>1) passwordless SSH has been configurated properly for the execution hosts
<br>
and the queue master.
<br>
<p>pwbcad_at_sgeqmast01:~$ ssh sgeqexec01 uptime
<br>
&nbsp;14:35:54 up  2:47,  1 user,  load average: 0.10, 0.08, 0.02
<br>
<p>2) I could run a openmpi job outside the SGE successfully.
<br>
<p>mpirun -host n1, n2 -np 8 ./ompi_job
<br>
<p>3) I submitted job to a queue directly instead of a PE, the job could run
<br>
and completed successfully
<br>
<p>qsub -q dev.q ./ompi_job.sh
<br>
<p>4) Although I don't think PATH and LD_LIBRARY_PATH would cause issues in
<br>
ubuntu, I still add OpenMPI binaries and libraries to both. But it didn't
<br>
help.
<br>
<p>It will be very appreciated if anyone can share their experience!
<br>
<p>Derrick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16253.php">Asad Ali: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Previous message:</strong> <a href="16251.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>Reply:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
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
