<?
$subject_val = "Re: [OMPI users] static, standalone mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 02:11:28 2012" -->
<!-- isoreceived="20120923061128" -->
<!-- sent="Sun, 23 Sep 2012 08:11:20 +0200" -->
<!-- isosent="20120923061120" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static, standalone mpirun" -->
<!-- id="C2E47DDD62F84E4CAF40AFFA65C0843C016B4CA5F2A6_at_MAILBOX2.umb.sk" -->
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
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-23 02:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20261.php">Siegmar Gross: "[OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>Previous message:</strong> <a href="20259.php">Ralph Castain: "Re: [OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev1">&gt; Is the path correct for the new location?
</span><br>
<p>yes, the $PATH points to the location of the sole static &quot;mpirun&quot; and of the share/openmpi/*.txt directory.
<br>
<p>Why is mpirun constructing $&lt;PATH_OF_MPIRUN&gt;/etc/openmpi-default-hostfile as I see in the error message  below ? 
<br>
( /home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/etc/openmpi-default-hostfile ) 
<br>
<p><span class="quotelev2">&gt; &gt; Check to make sure the path and filename are correct.
</span><br>
Please what others variables/files do I have to set/copy with the static mpirun ? 
<br>
&nbsp;I am setting (experience from previous OpenMPI versions) OPAL_PREFIX, which is location of my static mpirun.
<br>
<p>The wish is to distribute own static mpirun with related necessary files to other servers to be able to launch static parallel applications there.
<br>
<p>Thanks, Miro
<br>
<p>On Sep 20, 2012, at 5:15 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi again,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20261.php">Siegmar Gross: "[OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>Previous message:</strong> <a href="20259.php">Ralph Castain: "Re: [OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
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
