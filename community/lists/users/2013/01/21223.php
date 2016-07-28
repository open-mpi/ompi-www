<?
$subject_val = "[OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 21:35:47 2013" -->
<!-- isoreceived="20130125023547" -->
<!-- sent="Fri, 25 Jan 2013 02:35:39 +0000" -->
<!-- isosent="20130125023539" -->
<!-- name="#YEO JINGJIE#" -->
<!-- email="JYEO1_at_[hidden]" -->
<!-- subject="[OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI" -->
<!-- id="009017CD69F590478F7063E1C082325823BB5BB5_at_HKNPRD0111MB375.apcprd01.prod.exchangelabs.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI<br>
<strong>From:</strong> #YEO JINGJIE# (<em>JYEO1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 21:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="21227.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p><p><p>Maybe something went wrong as I was compiling OpenMPI, I am very new to linux. When I try to run LAMMPS using the following command:
<br>
<p><p><p>/usr/lib64/openmpi/bin/mpirun -n 16 /opt/lammps-21Jan13/lmp_linux &lt; zigzag.in
<br>
<p><p><p>I get the following errors:
<br>
<p><p><p>[NTU-2:28895] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_hnp_module.c at line 194
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
[NTU-2:28895] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 128
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
[NTU-2:28895] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orterun.c at line 616
<br>
<p><p><p>Regards,
<br>
Jingjie Yeo
<br>
Ph.D. Student
<br>
School of Mechanical and Aerospace Engineering
<br>
Nanyang Technological University, Singapore
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="21227.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
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
