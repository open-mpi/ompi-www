<?
$subject_val = "[OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 18:41:08 2008" -->
<!-- isoreceived="20081020224108" -->
<!-- sent="Mon, 20 Oct 2008 16:40:50 -0600" -->
<!-- isosent="20081020224050" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="A0801CEC7AFED846978515099D145DA512837377DC_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 18:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7063.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7065.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7091.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I work on an application (DAKOTA) that has opted for single binaries with source code to detect serial vs. MPI execution at run-time.  While I realize there are many other ways to handle this (wrapper scripts, command-line switches, different binaries for serial vs. MPI, etc.), I'm looking for a reliable way to detect (in source) whether a binary has been launched in serial or with orterun.
<br>
<p>We typically do this via detecting environment variables, so the easiest path for me would be to know an environment variable present when an application is invoked with orterun that is not typically present outside that MPI runtime environment.  Some candidates that came up in my particular environment include the following, but I don't know if any is a safe bet:
<br>
<p>OMPI_MCA_gpr_replica_uri
<br>
OMPI_MCA_mpi_paffinity_processor
<br>
OMPI_MCA_mpi_yield_when_idle
<br>
OMPI_MCA_ns_nds
<br>
OMPI_MCA_ns_nds_cellid
<br>
OMPI_MCA_ns_nds_jobid
<br>
OMPI_MCA_ns_nds_num_procs
<br>
OMPI_MCA_ns_nds_vpid
<br>
OMPI_MCA_ns_nds_vpid_start
<br>
OMPI_MCA_ns_replica_uri
<br>
OMPI_MCA_orte_app_num
<br>
OMPI_MCA_orte_base_nodename
<br>
OMPI_MCA_orte_precondition_transports
<br>
OMPI_MCA_pls
<br>
OMPI_MCA_ras
<br>
OMPI_MCA_rds
<br>
OMPI_MCA_rmaps
<br>
OMPI_MCA_rmgr
<br>
OMPI_MCA_universe
<br>
<p>I'd also welcome suggestions for other in-source tests that might reliably detect run via orterun.  Thanks!
<br>
<p>Brian
<br>
----------
<br>
Brian M. Adams, PhD (briadam_at_[hidden])
<br>
Optimization and Uncertainty Estimation
<br>
Sandia National Laboratories, Albuquerque, NM
<br>
<a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7063.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7065.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe reply:</strong> <a href="7091.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
