<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  6 13:09:03 2013" -->
<!-- isoreceived="20130706170903" -->
<!-- sent="Sat, 6 Jul 2013 10:08:56 -0700" -->
<!-- isosent="20130706170856" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX" -->
<!-- id="DEA3D603-04B8-4400-9954-38333AEFA34C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0EC91541DFCC614DB6B36C4BAE80AB6E038AF0_at_MAILBOX3.umb.sk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-06 13:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22264.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Reply:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We haven't had access to an AIX machine in quite some time, so it isn't a big surprise that things have bit-rotted. If you're willing to debug, we can try to provide fixes. Just may take a bit to complete.
<br>
<p><p>On Jul 6, 2013, at 9:49 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; even for GNU compilers the OpenMPI compilation fails on AIX:
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; Making all in mca/timer/aix
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev1">&gt;  CC     timer_aix_component.lo
</span><br>
<span class="quotelev1">&gt; timer_aix_component.c: In function 'opal_timer_aix_open':
</span><br>
<span class="quotelev1">&gt; timer_aix_component.c:68:10: error: 'OPAL_SUCCESS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; timer_aix_component.c:68:10: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt; timer_aix_component.c: At top level:
</span><br>
<span class="quotelev1">&gt; ../../../../opal/include/opal/sys/atomic.h:393:9: warning: 'opal_atomic_add_32' used but never defined [enabled by default]
</span><br>
<span class="quotelev1">&gt; ../../../../opal/include/opal/sys/atomic.h:403:9: warning: 'opal_atomic_sub_32' used but never defined [enabled by default]
</span><br>
<span class="quotelev1">&gt; make[2]: *** [timer_aix_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: Ilias Miroslav
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, July 06, 2013 1:51 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: OpenMPI 1.6.5 and IBM-AIX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear experts,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to build up OpenMPI 1.6.5 package with the AIX compiler suite:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/gpfs/home/ilias/bin/openmpi_xl  CXX=xlC CC=xlc F77=xlf FC=xlf90
</span><br>
<span class="quotelev1">&gt; xl fortran is of version 13.01, xlc/C is 11.01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configuration goes well, but the compilation fails. Any help, please ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/timer/aix
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev1">&gt;  CC     timer_aix_component.lo
</span><br>
<span class="quotelev1">&gt; &quot;timer_aix_component.c&quot;, line 68.10: 1506-045 (S) Undeclared identifier OPAL_SUCCESS.
</span><br>
<span class="quotelev1">&gt; &quot;timer_aix_component.c&quot;, line 69.1: 1506-162 (W) No definition was found for function opal_atomic_sub_32. Storage class changed to extern.
</span><br>
<span class="quotelev1">&gt; &quot;timer_aix_component.c&quot;, line 69.1: 1506-162 (W) No definition was found for function opal_atomic_add_32. Storage class changed to extern.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [timer_aix_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; ilias_at_147.213.80.175:~/bin/openmpi_xl/openmpi-1.6.5/.
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
<li><strong>Next message:</strong> <a href="22264.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22262.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Reply:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
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
