<?
$subject_val = "[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 11:40:31 2009" -->
<!-- isoreceived="20091110164031" -->
<!-- sent="Tue, 10 Nov 2009 17:40:43 +0100" -->
<!-- isosent="20091110164043" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure" -->
<!-- id="4AF9978B.5080607_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 11:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11116.php">Simone Pellegrini: "[OMPI users] mpi_yield_when_idle effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3 (with 
<br>
gridengine compnent).
<br>
<p>During any job submission, SGE creates a session directory in $TMPDIR, 
<br>
named after the job id and the computing node name. This session 
<br>
directory is created using nobody/nogroup credentials.
<br>
<p>When using OpenMPI with tight-integration, opal creates different 
<br>
subdirectories in this session directory. The issue I'm facing now is 
<br>
that OpenMPI fails to create these subdirectories:
<br>
<p>[charlie:03882] opal_os_dirpath_create: Error: Unable to create the 
<br>
sub-directory (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0) 
<br>
of (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0
<br>
[charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../openmpi-1.3.3/orte/util/session_dir.c at line 101
<br>
[charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../openmpi-1.3.3/orte/util/session_dir.c at line 425
<br>
[charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ess_hnp_module.c at line 273
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
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../openmpi-1.3.3/orte/runtime/orte_init.c at line 132
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
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at line 473
<br>
<p>This seems very likely related to the permissions set on $TMPDIR.
<br>
<p>I'd like to know if someone might have experienced the same or a similar 
<br>
issue and if any solution was found.
<br>
<p>Thanks for your help,
<br>
Eloi
<br>
<p><p><p><p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Axis Park Louvain-la-Neuve
Rue Emile Francqui, 1
B-1435 Mont-Saint Guibert
BELGIUM
Company Phone: +32 10 487 959
Company Fax:   +32 10 454 626
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11116.php">Simone Pellegrini: "[OMPI users] mpi_yield_when_idle effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
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
