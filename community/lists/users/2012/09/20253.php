<?
$subject_val = "Re: [OMPI users] static, standalone mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 20 09:58:46 2012" -->
<!-- isoreceived="20120920135846" -->
<!-- sent="Thu, 20 Sep 2012 06:58:38 -0700" -->
<!-- isosent="20120920135838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static, standalone mpirun" -->
<!-- id="2008D288-46EF-4041-B3BD-2203A578CAF3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C016596D52CB0_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] static, standalone mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-20 09:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>In reply to:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is the path correct for the new location?
<br>
<p>On Sep 20, 2012, at 5:15 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as I checked the mailing list - isn't it this bug showing up again in static version ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/05/19278.php">http://www.open-mpi.org/community/lists/users/2012/05/19278.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: Ilias Miroslav
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, September 20, 2012 1:43 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: static, standalone mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I prepared my own static OpenMPI files (mpirun, mpif90...) within openmpi-1.6.1.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;space&gt; --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I was trying to launch parallel job at other machine (I specified the OPAL_PREFIX variable and also copied share/openmi directory there).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I got this error - please what am I missing ? Thanks, Miro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./mpirun --np 1 dirac.x
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;    /home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
</span><br>
<span class="quotelev1">&gt; [sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
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
<li><strong>Next message:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>In reply to:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
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
