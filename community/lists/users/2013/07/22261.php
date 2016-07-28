<?
$subject_val = "[OMPI users] OpenMPI 1.6.5 and IBM-AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  6 07:51:16 2013" -->
<!-- isoreceived="20130706115116" -->
<!-- sent="Sat, 6 Jul 2013 11:51:10 +0000" -->
<!-- isosent="20130706115110" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.5 and IBM-AIX" -->
<!-- id="0EC91541DFCC614DB6B36C4BAE80AB6E038A6D_at_MAILBOX3.umb.sk" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.5 and IBM-AIX<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-06 07:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22260.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Reply:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear experts,
<br>
<p>I am trying to build up OpenMPI 1.6.5 package with the AIX compiler suite:
<br>
<p>./configure --prefix=/gpfs/home/ilias/bin/openmpi_xl  CXX=xlC CC=xlc F77=xlf FC=xlf90
<br>
xl fortran is of version 13.01, xlc/C is 11.01
<br>
<p>Configuration goes well, but the compilation fails. Any help, please ?
<br>
<p><p><p>Making all in mca/timer/aix
<br>
make[2]: Entering directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal/mca/timer/aix'
<br>
&nbsp;&nbsp;CC     timer_aix_component.lo
<br>
&quot;timer_aix_component.c&quot;, line 68.10: 1506-045 (S) Undeclared identifier OPAL_SUCCESS.
<br>
&quot;timer_aix_component.c&quot;, line 69.1: 1506-162 (W) No definition was found for function opal_atomic_sub_32. Storage class changed to extern.
<br>
&quot;timer_aix_component.c&quot;, line 69.1: 1506-162 (W) No definition was found for function opal_atomic_add_32. Storage class changed to extern.
<br>
make[2]: *** [timer_aix_component.lo] Error 1
<br>
make[2]: Leaving directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal/mca/timer/aix'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal'
<br>
make: *** [all-recursive] Error 1
<br>
ilias_at_147.213.80.175:~/bin/openmpi_xl/openmpi-1.6.5/.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22260.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Reply:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
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
