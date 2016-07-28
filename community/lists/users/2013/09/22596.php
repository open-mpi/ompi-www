<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 16:26:50 2013" -->
<!-- isoreceived="20130903202650" -->
<!-- sent="Tue, 3 Sep 2013 13:26:46 -0700" -->
<!-- isosent="20130903202646" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?" -->
<!-- id="C07CAE67-1ED7-40AA-9456-9141D7D9A0A4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE4B8F84.358BA%knteran_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 16:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22597.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Previous message:</strong> <a href="22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>In reply to:</strong> <a href="22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22597.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="22597.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How does it fail?
<br>
<p>On Sep 3, 2013, at 1:19 PM, &quot;Teranishi, Keita&quot; &lt;knteran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help.  I can run a job using openmpi, assigning a signle
</span><br>
<span class="quotelev1">&gt; process per node.  However, I have been failing to run a job using
</span><br>
<span class="quotelev1">&gt; multiple MPI ranks in a single node.  In other words, &quot;mpiexec
</span><br>
<span class="quotelev1">&gt; --bind-to-core --npernode 16 --n 16 ./test&quot; never works (apron -n 16 works
</span><br>
<span class="quotelev1">&gt; fine).  DO you have any thought about it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; Keita Teranishi
</span><br>
<span class="quotelev1">&gt; R&amp;D Principal Staff Member
</span><br>
<span class="quotelev1">&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; Livermore, CA 94551
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/30/13 8:49 AM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Replace install_path to where you want Open MPI installed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=install_path
</span><br>
<span class="quotelev2">&gt;&gt; --with-platform=contrib/platform/lanl/cray_xe6/optimized-luster
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To use Open MPI just set the PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PATH=install_path/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=install_path/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can then use mpicc, mpicxx, mpif90, etc to compile and either mpirun
</span><br>
<span class="quotelev2">&gt;&gt; or aprun to run. If you are running at scale I would recommend against
</span><br>
<span class="quotelev2">&gt;&gt; using aprun for now. I also recommend you change your programming
</span><br>
<span class="quotelev2">&gt;&gt; environment to either PrgEnv-gnu or PrgEnv-intel. The PGI compiler can be
</span><br>
<span class="quotelev2">&gt;&gt; a PIA. It is possible to build with the Cray compiler but it takes
</span><br>
<span class="quotelev2">&gt;&gt; patching the config.guess and changing some autoconf stuff.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please excuse the horrible Outlook-style quoting.
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Teranishi, Keita
</span><br>
<span class="quotelev2">&gt;&gt; [knteran_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, August 29, 2013 8:01 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6)
</span><br>
<span class="quotelev2">&gt;&gt; is working for OpenMPI-1.6.5?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the info.  Is it still possible to build by myself?  What is
</span><br>
<span class="quotelev2">&gt;&gt; the procedure other than configure script?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/23/13 2:37 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Aug 23, 2013 at 09:14:25PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   I am trying to install OpenMPI 1.6.5 on Cray XE6 and very curious
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   current support of PMI.  In the previous discussions, there was a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   on the version of PMI (it works with 2.1.4, but fails with 3.0).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.6.5 does not have support for the XE-6. Use 1.7.2 instead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   machine has PMI2.1.4 and PMI4.0 (default).  Which version do you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was a regression in PMI 3.x.x that still exists in 4.0.x that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causes a warning to be printed on every rank when using mpirun. We are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working with Cray to resolve the issue. For now use 2.1.4. See the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platform files in contrib/platform/lanl/cray_xe6. The platform files you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would want to use are debug-lustre or optimized-lusre.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, 1.7.2 is installed on Cielo and Cielito. Just run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module swap PrgEnv-pgi PrgEnv-gnu (PrgEnv-intel also works)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module unload cray-mpich2 xt-libsci
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module load openmpi/1.7.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI Team, HPC-3, LANL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22597.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Previous message:</strong> <a href="22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>In reply to:</strong> <a href="22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22597.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Reply:</strong> <a href="22597.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
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
