<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 19:15:24 2009" -->
<!-- isoreceived="20090413231524" -->
<!-- sent="Mon, 13 Apr 2009 19:15:04 -0400" -->
<!-- isosent="20090413231504" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="3D2A25EC-D1F8-457E-B07F-1B3F1F466BDA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E3C131.50703_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 19:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8888.php">Åke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks.
<br>
<p><p>On Apr 13, 2009, at 6:48 PM, Orion Poplawski wrote:
<br>
<p><span class="quotelev1">&gt; Seeing the following building openmpi 1.3.1 on CentOS 5.3 with PGI  
</span><br>
<span class="quotelev1">&gt; pgf90
</span><br>
<span class="quotelev1">&gt; 8.0-5 fortran compiler:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -pthread... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -pthreads... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -mt... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -mthreads... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -lpthreads... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -llthread... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work with -lpthread... no
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK... yes
</span><br>
<span class="quotelev1">&gt; checking for working POSIX threads package... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and Solaris threads work... no
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and Solaris threads work... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and Solaris threads work... no
</span><br>
<span class="quotelev1">&gt; checking for working Solaris threads package... no
</span><br>
<span class="quotelev1">&gt; checking for type of thread support... none found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI was unable to find threading support on your system.  The
</span><br>
<span class="quotelev1">&gt; OMPI development team is considering requiring threading support for
</span><br>
<span class="quotelev1">&gt; proper OMPI execution.  This is in part because we are not aware of
</span><br>
<span class="quotelev1">&gt; any OpenFabrics users that do not have thread support -- so we need
</span><br>
<span class="quotelev1">&gt; you to e-mail the Open MPI Users mailing list to tell us if this is a
</span><br>
<span class="quotelev1">&gt; problem for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to get the PGI Fortran compiler to support threads  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8888.php">Åke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
