<?
$subject_val = "Re: [OMPI users] static, standalone mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 10:06:36 2012" -->
<!-- isoreceived="20120923140636" -->
<!-- sent="Sun, 23 Sep 2012 07:06:27 -0700" -->
<!-- isosent="20120923140627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static, standalone mpirun" -->
<!-- id="5DE9090F-0DBF-48EF-B5EC-59DD7C4AA6C5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C016B4CA5F2A6_at_MAILBOX2.umb.sk" -->
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
<strong>Date:</strong> 2012-09-23 10:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>Previous message:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2012, at 11:11 PM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the path correct for the new location?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, the $PATH points to the location of the sole static &quot;mpirun&quot; and of the share/openmpi/*.txt directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why is mpirun constructing $&lt;PATH_OF_MPIRUN&gt;/etc/openmpi-default-hostfile as I see in the error message  below ? 
</span><br>
<span class="quotelev1">&gt; ( /home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/etc/openmpi-default-hostfile ) 
</span><br>
<p>Sorry, I should have been clearer - I was asking if the path in the error message was indeed OPAL_PREFIX/etc/.... I gather from your message that it is not. At the moment, it appears to be set to the install location, and probably isn't looking at OPAL_PREFIX.
<br>
<p>I can look into it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; Please what others variables/files do I have to set/copy with the static mpirun ? 
</span><br>
<span class="quotelev1">&gt; I am setting (experience from previous OpenMPI versions) OPAL_PREFIX, which is location of my static mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The wish is to distribute own static mpirun with related necessary files to other servers to be able to launch static parallel applications there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Miro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2012, at 5:15 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as I checked the mailing list - isn't it this bug showing up again in static version ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/05/19278.php">http://www.open-mpi.org/community/lists/users/2012/05/19278.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; M
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: Ilias Miroslav
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, September 20, 2012 1:43 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: static, standalone mpirun
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I prepared my own static OpenMPI files (mpirun, mpif90...) within openmpi-1.6.1.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=&lt;space&gt; --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-shared --enable-static
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and I was trying to launch parallel job at other machine (I specified the OPAL_PREFIX variable and also copied share/openmi directory there).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I got this error - please what am I missing ? Thanks, Miro
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./mpirun --np 1 dirac.x
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev2">&gt;&gt;   /home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
</span><br>
<span class="quotelev2">&gt;&gt; [sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev2">&gt;&gt; [sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>Previous message:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
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
