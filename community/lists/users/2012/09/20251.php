<?
$subject_val = "[OMPI users] static, standalone mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 20 07:43:43 2012" -->
<!-- isoreceived="20120920114343" -->
<!-- sent="Thu, 20 Sep 2012 13:43:24 +0200" -->
<!-- isosent="20120920114324" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] static, standalone mpirun" -->
<!-- id="C2E47DDD62F84E4CAF40AFFA65C0843C016596D52CAD_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> [OMPI users] static, standalone mpirun<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-20 07:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20250.php">Ralph Castain: "Re: [OMPI users] How can use comm_spawn  when the host is off-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20310.php">Jeff Squyres: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings, 
<br>
<p>I prepared my own static OpenMPI files (mpirun, mpif90...) within openmpi-1.6.1.tar.gz
<br>
<p>&nbsp;./configure --prefix=&lt;space&gt; --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-shared --enable-static
<br>
<p>and I was trying to launch parallel job at other machine (I specified the OPAL_PREFIX variable and also copied share/openmi directory there).
<br>
<p>However, I got this error - please what am I missing ? Thanks, Miro
<br>
<p>./mpirun --np 1 dirac.x
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
[sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
<br>
[sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
<br>
[sparc:23537] [[29526,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20250.php">Ralph Castain: "Re: [OMPI users] How can use comm_spawn  when the host is off-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20252.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Reply:</strong> <a href="20310.php">Jeff Squyres: "Re: [OMPI users] static, standalone mpirun"</a>
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
