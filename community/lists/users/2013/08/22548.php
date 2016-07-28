<?
$subject_val = "Re: [OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 23 17:37:41 2013" -->
<!-- isoreceived="20130823213741" -->
<!-- sent="Fri, 23 Aug 2013 15:37:40 -0600" -->
<!-- isosent="20130823213740" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?" -->
<!-- id="20130823213740.GB2788_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE3D1EC0.340F4%knteran_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-23 17:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22549.php">Federico Carotenuto: "[OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22547.php">Teranishi, Keita: "[OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>In reply to:</strong> <a href="22547.php">Teranishi, Keita: "[OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22570.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="22570.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 23, 2013 at 09:14:25PM +0000, Teranishi, Keita wrote:
<br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt;    I am trying to install OpenMPI 1.6.5 on Cray XE6 and very curious with the
</span><br>
<span class="quotelev1">&gt;    current support of PMI.  In the previous discussions, there was a comment
</span><br>
<span class="quotelev1">&gt;    on the version of PMI (it works with 2.1.4, but fails with 3.0).  Our
</span><br>
<p>Open MPI 1.6.5 does not have support for the XE-6. Use 1.7.2 instead.
<br>
<p><span class="quotelev1">&gt;    machine has PMI2.1.4 and PMI4.0 (default).  Which version do you
</span><br>
<p>There was a regression in PMI 3.x.x that still exists in 4.0.x that
<br>
causes a warning to be printed on every rank when using mpirun. We are
<br>
working with Cray to resolve the issue. For now use 2.1.4. See the
<br>
platform files in contrib/platform/lanl/cray_xe6. The platform files you
<br>
would want to use are debug-lustre or optimized-lusre.
<br>
<p>BTW, 1.7.2 is installed on Cielo and Cielito. Just run:
<br>
<p>module swap PrgEnv-pgi PrgEnv-gnu (PrgEnv-intel also works)
<br>
module unload cray-mpich2 xt-libsci
<br>
module load openmpi/1.7.2
<br>
<p><p>-Nathan Hjelm
<br>
Open MPI Team, HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22549.php">Federico Carotenuto: "[OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22547.php">Teranishi, Keita: "[OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>In reply to:</strong> <a href="22547.php">Teranishi, Keita: "[OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22570.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="22570.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
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
