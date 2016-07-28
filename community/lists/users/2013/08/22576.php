<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 11:49:48 2013" -->
<!-- isoreceived="20130830154948" -->
<!-- sent="Fri, 30 Aug 2013 15:49:47 +0000" -->
<!-- isosent="20130830154947" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A5865BE_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE454A80.356C4%knteran_at_sandia.gov" -->
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
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-30 11:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22577.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>Previous message:</strong> <a href="22575.php">giancarlo.villegas_at_[hidden]: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server	11	Installation"</a>
<li><strong>In reply to:</strong> <a href="22570.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Replace install_path to where you want Open MPI installed.
<br>
<p>./configure --prefix=install_path --with-platform=contrib/platform/lanl/cray_xe6/optimized-luster
<br>
make
<br>
make install
<br>
<p>To use Open MPI just set the PATH and LD_LIBRARY_PATH:
<br>
<p>PATH=install_path/bin:$PATH
<br>
LD_LIBRARY_PATH=install_path/lib:$LD_LIBRARY_PATH
<br>
<p>You can then use mpicc, mpicxx, mpif90, etc to compile and either mpirun or aprun to run. If you are running at scale I would recommend against using aprun for now. I also recommend you change your programming environment to either PrgEnv-gnu or PrgEnv-intel. The PGI compiler can be a PIA. It is possible to build with the Cray compiler but it takes patching the config.guess and changing some autoconf stuff.
<br>
<p>-Nathan
<br>
<p>Please excuse the horrible Outlook-style quoting.
<br>
________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Teranishi, Keita [knteran_at_[hidden]]
<br>
Sent: Thursday, August 29, 2013 8:01 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?
<br>
<p>Thanks for the info.  Is it still possible to build by myself?  What is
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22577.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>Previous message:</strong> <a href="22575.php">giancarlo.villegas_at_[hidden]: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server	11	Installation"</a>
<li><strong>In reply to:</strong> <a href="22570.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
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
