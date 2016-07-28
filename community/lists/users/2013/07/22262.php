<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  6 12:49:29 2013" -->
<!-- isoreceived="20130706164929" -->
<!-- sent="Sat, 6 Jul 2013 16:49:23 +0000" -->
<!-- isosent="20130706164923" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX" -->
<!-- id="0EC91541DFCC614DB6B36C4BAE80AB6E038AF0_at_MAILBOX3.umb.sk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0EC91541DFCC614DB6B36C4BAE80AB6E038A6D_at_MAILBOX3.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-06 12:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22261.php">Ilias Miroslav: "[OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22261.php">Ilias Miroslav: "[OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Reply:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>even for GNU compilers the OpenMPI compilation fails on AIX:
<br>
.
<br>
.
<br>
.
<br>
Making all in mca/timer/aix
<br>
make[2]: Entering directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal/mca/timer/aix'
<br>
&nbsp;&nbsp;CC     timer_aix_component.lo
<br>
timer_aix_component.c: In function 'opal_timer_aix_open':
<br>
timer_aix_component.c:68:10: error: 'OPAL_SUCCESS' undeclared (first use in this function)
<br>
timer_aix_component.c:68:10: note: each undeclared identifier is reported only once for each function it appears in
<br>
timer_aix_component.c: At top level:
<br>
../../../../opal/include/opal/sys/atomic.h:393:9: warning: 'opal_atomic_add_32' used but never defined [enabled by default]
<br>
../../../../opal/include/opal/sys/atomic.h:403:9: warning: 'opal_atomic_sub_32' used but never defined [enabled by default]
<br>
make[2]: *** [timer_aix_component.lo] Error 1
<br>
make[2]: Leaving directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal/mca/timer/aix'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>________________________________________
<br>
From: Ilias Miroslav
<br>
Sent: Saturday, July 06, 2013 1:51 PM
<br>
To: users_at_[hidden]
<br>
Subject: OpenMPI 1.6.5 and IBM-AIX
<br>
<p>Dear experts,
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
<li><strong>Next message:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22261.php">Ilias Miroslav: "[OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22261.php">Ilias Miroslav: "[OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Reply:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
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
