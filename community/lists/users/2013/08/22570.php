<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 22:01:39 2013" -->
<!-- isoreceived="20130830020139" -->
<!-- sent="Fri, 30 Aug 2013 02:01:17 +0000" -->
<!-- isosent="20130830020117" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?" -->
<!-- id="CE454A80.356C4%knteran_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130823213740.GB2788_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?<br>
<strong>From:</strong> Teranishi, Keita (<em>knteran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 22:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22571.php">giancarlo.villegas_at_[hidden]: "[OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>Previous message:</strong> <a href="22569.php">Ralph Castain: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22548.php">Nathan Hjelm: "Re: [OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22576.php">Hjelm, Nathan T: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="22576.php">Hjelm, Nathan T: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info.  Is it still possible to build by myself?  What is
<br>
the procedure other than configure script?
<br>
<p><p><p><p><p>On 8/23/13 2:37 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Fri, Aug 23, 2013 at 09:14:25PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    Hi,
</span><br>
<span class="quotelev2">&gt;&gt;    I am trying to install OpenMPI 1.6.5 on Cray XE6 and very curious
</span><br>
<span class="quotelev2">&gt;&gt;with the
</span><br>
<span class="quotelev2">&gt;&gt;    current support of PMI.  In the previous discussions, there was a
</span><br>
<span class="quotelev2">&gt;&gt;comment
</span><br>
<span class="quotelev2">&gt;&gt;    on the version of PMI (it works with 2.1.4, but fails with 3.0).  Our
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI 1.6.5 does not have support for the XE-6. Use 1.7.2 instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    machine has PMI2.1.4 and PMI4.0 (default).  Which version do you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There was a regression in PMI 3.x.x that still exists in 4.0.x that
</span><br>
<span class="quotelev1">&gt;causes a warning to be printed on every rank when using mpirun. We are
</span><br>
<span class="quotelev1">&gt;working with Cray to resolve the issue. For now use 2.1.4. See the
</span><br>
<span class="quotelev1">&gt;platform files in contrib/platform/lanl/cray_xe6. The platform files you
</span><br>
<span class="quotelev1">&gt;would want to use are debug-lustre or optimized-lusre.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;BTW, 1.7.2 is installed on Cielo and Cielito. Just run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;module swap PrgEnv-pgi PrgEnv-gnu (PrgEnv-intel also works)
</span><br>
<span class="quotelev1">&gt;module unload cray-mpich2 xt-libsci
</span><br>
<span class="quotelev1">&gt;module load openmpi/1.7.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan Hjelm
</span><br>
<span class="quotelev1">&gt;Open MPI Team, HPC-3, LANL
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22571.php">giancarlo.villegas_at_[hidden]: "[OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>Previous message:</strong> <a href="22569.php">Ralph Castain: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22548.php">Nathan Hjelm: "Re: [OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22576.php">Hjelm, Nathan T: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="22576.php">Hjelm, Nathan T: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
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
