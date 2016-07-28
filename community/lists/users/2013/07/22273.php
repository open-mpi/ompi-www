<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 10:21:54 2013" -->
<!-- isoreceived="20130708142154" -->
<!-- sent="Mon, 8 Jul 2013 14:21:49 +0000" -->
<!-- isosent="20130708142149" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F27A6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DEA3D603-04B8-4400-9954-38333AEFA34C_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 10:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>Previous message:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>In reply to:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.
<br>
<p>This one seems like it could be as simple as a missing header file.  Try adding
<br>
<p>#include &quot;opal/constants.h&quot;
<br>
<p>in the timer_aix_component.c file.  
<br>
<p><p>On Jul 6, 2013, at 1:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We haven't had access to an AIX machine in quite some time, so it isn't a big surprise that things have bit-rotted. If you're willing to debug, we can try to provide fixes. Just may take a bit to complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2013, at 9:49 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; even for GNU compilers the OpenMPI compilation fails on AIX:
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/timer/aix
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev2">&gt;&gt; CC     timer_aix_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; timer_aix_component.c: In function 'opal_timer_aix_open':
</span><br>
<span class="quotelev2">&gt;&gt; timer_aix_component.c:68:10: error: 'OPAL_SUCCESS' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; timer_aix_component.c:68:10: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev2">&gt;&gt; timer_aix_component.c: At top level:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/atomic.h:393:9: warning: 'opal_atomic_add_32' used but never defined [enabled by default]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/atomic.h:403:9: warning: 'opal_atomic_sub_32' used but never defined [enabled by default]
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [timer_aix_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/gpfs/home/ilias/bin/openmpi_gnu/openmpi-1.6.5/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: Ilias Miroslav
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, July 06, 2013 1:51 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: OpenMPI 1.6.5 and IBM-AIX
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear experts,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build up OpenMPI 1.6.5 package with the AIX compiler suite:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/gpfs/home/ilias/bin/openmpi_xl  CXX=xlC CC=xlc F77=xlf FC=xlf90
</span><br>
<span class="quotelev2">&gt;&gt; xl fortran is of version 13.01, xlc/C is 11.01
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configuration goes well, but the compilation fails. Any help, please ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/timer/aix
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev2">&gt;&gt; CC     timer_aix_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; &quot;timer_aix_component.c&quot;, line 68.10: 1506-045 (S) Undeclared identifier OPAL_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;timer_aix_component.c&quot;, line 69.1: 1506-162 (W) No definition was found for function opal_atomic_sub_32. Storage class changed to extern.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;timer_aix_component.c&quot;, line 69.1: 1506-162 (W) No definition was found for function opal_atomic_add_32. Storage class changed to extern.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [timer_aix_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal/mca/timer/aix'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/gpfs/home/ilias/bin/openmpi_xl/openmpi-1.6.5/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; ilias_at_147.213.80.175:~/bin/openmpi_xl/openmpi-1.6.5/.
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
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>Previous message:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>In reply to:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<!-- nextthread="start" -->
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
