<?
$subject_val = "Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 15:48:02 2011" -->
<!-- isoreceived="20110722194802" -->
<!-- sent="Fri, 22 Jul 2011 15:47:57 -0400" -->
<!-- isosent="20110722194757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue" -->
<!-- id="9D382719-5DE3-4DA5-A924-D5C10DA31A31_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E29A1B2.5020602_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 15:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16978.php">Rodrigo Oliveira: "[OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="16971.php">Paul Kapinos: "[OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you try compiling a trunk nightly tarball of Open MPI?
<br>
<p>We recently upgraded the version of Libtool that is used to bootstrap that tarball (compared to the v1.4 and v1.5 tarballs):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>On Jul 22, 2011, at 12:13 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; ... just do almost the same thing: Try to install OpenMPI 1.4.3 using 11.7 PGI Compiler on Scientific Linux 6.0. The same place, but other error message:
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; /usr/lib64/crt1.o: In function `_start':
</span><br>
<span class="quotelev1">&gt; (.text+0x20): undefined reference to `main'
</span><br>
<span class="quotelev1">&gt; gmake[2]: *** [libmpi_cxx.la] Error 2
</span><br>
<span class="quotelev1">&gt; gmake[2]: Leaving directory `/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux64_pgi/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then the compilation aborted. Configure string below. With the Intel, gcc and Studio compiles, the very same installations were happily through.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe someone can give me a hint about this is an issue by openmpi, pgi or somehow else...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; again, more logs downloadable:
</span><br>
<span class="quotelev1">&gt; <a href="https://gigamove.rz.rwth-aachen.de/d/id/WNk69nPr4w7svT">https://gigamove.rz.rwth-aachen.de/d/id/WNk69nPr4w7svT</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16978.php">Rodrigo Oliveira: "[OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="16971.php">Paul Kapinos: "[OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
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
