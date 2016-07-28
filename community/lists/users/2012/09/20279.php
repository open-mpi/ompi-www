<?
$subject_val = "Re: [OMPI users] static, standalone mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 14:30:25 2012" -->
<!-- isoreceived="20120924183025" -->
<!-- sent="Mon, 24 Sep 2012 20:26:10 +0200" -->
<!-- isosent="20120924182610" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static, standalone mpirun" -->
<!-- id="C2E47DDD62F84E4CAF40AFFA65C0843C016B4CA5F2BB_at_MAILBOX2.umb.sk" -->
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
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 14:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20280.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20280.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20280.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Sorry, I should have been clearer - I was asking if the path in the error message was indeed OPAL_PREFIX/etc/.... I gather from your message that it is not. At the moment, it appears to be set to the install location, and probably isn't looking at OPAL_PREFIX. 
</span><br>
<p>yes, the path in error message is $OPAL_PREFIX/etc/openmpi-default-hostfile
<br>
<p>what else  shall I check to help to fix this bug please ?
<br>
<p>Best,
<br>
<p>M.
<br>
<p>ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.mpirun -v -np 1  ./dirac.x
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to open the hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/etc/openmpi-default-hostfile
<br>
Check to make sure the path and filename are correct.
<br>
--------------------------------------------------------------------------
<br>
[sparc:09036] [[3051,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
<br>
[sparc:09036] [[3051,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
<br>
[sparc:09036] [[3051,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
<br>
<p>ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.echo $OPAL_PREFIX
<br>
/home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC
<br>
<p>ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.echo $PATH
<br>
/home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC:/home/ilias/bin:/usr/local/bin:/usr/bin:/bin:/usr/games:/home/ilias/bin:.
<br>
ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.
<br>
<p>ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.ldd mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
<p>ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.ls -l share/openmpi/
<br>
total 336K
<br>
drwxr-xr-x 2 ilias ilias 4.0K 2012-09-22 22:08 amca-param-sets/
<br>
-rw-r--r-- 1 ilias ilias  618 2012-09-22 22:08 help-coll-sync.txt
<br>
.
<br>
.
<br>
.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20280.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20280.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20280.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
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
