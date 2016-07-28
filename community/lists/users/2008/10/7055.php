<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 04:18:26 2008" -->
<!-- isoreceived="20081021081826" -->
<!-- sent="Tue, 21 Oct 2008 09:18:20 +0100" -->
<!-- isosent="20081021081820" -->
<!-- name="Mattijs Janssens" -->
<!-- email="m.janssens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="200810210918.20165.m.janssens_at_opencfd.co.uk" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="A0801CEC7AFED846978515099D145DA512837377DC_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Mattijs Janssens (<em>m.janssens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 04:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7056.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Most message passing libraries that I've worked with use command line 
<br>
arguments (that get filtered out in MPI_Init) to pass in information to the 
<br>
started jobs. You could have a check for 'strange' command line arguments.
<br>
<p>Mattijs
<br>
<p>On Monday 20 October 2008 23:40, Adams, Brian M wrote:
<br>
<span class="quotelev1">&gt; I work on an application (DAKOTA) that has opted for single binaries with
</span><br>
<span class="quotelev1">&gt; source code to detect serial vs. MPI execution at run-time.  While I
</span><br>
<span class="quotelev1">&gt; realize there are many other ways to handle this (wrapper scripts,
</span><br>
<span class="quotelev1">&gt; command-line switches, different binaries for serial vs. MPI, etc.), I'm
</span><br>
<span class="quotelev1">&gt; looking for a reliable way to detect (in source) whether a binary has been
</span><br>
<span class="quotelev1">&gt; launched in serial or with orterun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We typically do this via detecting environment variables, so the easiest
</span><br>
<span class="quotelev1">&gt; path for me would be to know an environment variable present when an
</span><br>
<span class="quotelev1">&gt; application is invoked with orterun that is not typically present outside
</span><br>
<span class="quotelev1">&gt; that MPI runtime environment.  Some candidates that came up in my
</span><br>
<span class="quotelev1">&gt; particular environment include the following, but I don't know if any is a
</span><br>
<span class="quotelev1">&gt; safe bet:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_gpr_replica_uri
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_paffinity_processor
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_yield_when_idle
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_cellid
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_jobid
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_num_procs
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_vpid
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_vpid_start
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_replica_uri
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_app_num
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_base_nodename
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_precondition_transports
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pls
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ras
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rds
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmgr
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd also welcome suggestions for other in-source tests that might reliably
</span><br>
<span class="quotelev1">&gt; detect run via orterun.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; Brian M. Adams, PhD (briadam_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Optimization and Uncertainty Estimation
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories, Albuquerque, NM
</span><br>
<span class="quotelev1">&gt; <a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
</span><br>
<p><pre>
-- 
Mattijs Janssens
OpenCFD Ltd.
9 Albert Road,
Caversham,
Reading RG4 7AN.
Tel: +44 (0)118 9471030
Email: M.Janssens_at_[hidden]
URL: <a href="http://www.OpenCFD.co.uk">http://www.OpenCFD.co.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7056.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
