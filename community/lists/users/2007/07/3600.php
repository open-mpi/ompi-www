<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 09:57:38 2007" -->
<!-- isoreceived="20070709135738" -->
<!-- sent="Mon, 9 Jul 2007 09:57:06 -0400" -->
<!-- isosent="20070709135706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absoft compilation problem" -->
<!-- id="18AB120A-6570-4010-839B-519835EC1F73_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="350B898AB2BACD4980AC3DAFB99294F70A5B70_at_XCH-NW-4V2.nw.nos.boeing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 09:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3599.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>In reply to:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You didn't say, but I assume that my other two statements were  
<br>
therefore correct (1.1.2 works with a static F90 library, 1.2.3 does  
<br>
not work).
<br>
<p>Do you need the MPI F90 bindings?  If not, does --disable-mpi-f90  
<br>
work for you?
<br>
<p><p><p>On Jul 5, 2007, at 1:37 PM, Yip, Elizabeth L wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2.1 does NOT work for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thu 7/5/2007 2:39 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Absoft compilation problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2007, at 7:31 PM, Yip, Elizabeth L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I downloaded openmpi-1.2.3rc2r15098 from your &quot;nightly snapshot&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; same problem.
</span><br>
<span class="quotelev2">&gt; &gt; I notice in version 1.1.2, you generate libmpi_f90.a instead of
</span><br>
<span class="quotelev2">&gt; &gt; the .so files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian clarified for me off-list that we use the same LT for nightly
</span><br>
<span class="quotelev1">&gt; trunk and OMPI 1.2.x tarballs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In 1.1.2, you're correct that we only made static F90 libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you clarify/confirm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 1.1.2 works for you (static F90 library)
</span><br>
<span class="quotelev1">&gt; - 1.2.1 works for you
</span><br>
<span class="quotelev1">&gt; - 1.2.3 does not work for you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is correct, then something is really, really weird.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Sun 7/1/2007 4:03 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Absoft compilation problem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I unfortunately do not have access to an Absoft compiler to test  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; with; it looks like GNU Libtool is getting the wrong arguments to
</span><br>
<span class="quotelev2">&gt; &gt; pass to the f95 compiler to build a shared library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A quick workaround for this issue would be to disable the MPI F90
</span><br>
<span class="quotelev2">&gt; &gt; bindings with the --disable-mpi-f90 switch to configure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you try the Open MPI nightly trunk tarball and see if it works
</span><br>
<span class="quotelev2">&gt; &gt; there?  We use a different version of Libtool to make those  
</span><br>
<span class="quotelev1">&gt; tarballs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 30, 2007, at 2:09 AM, Yip, Elizabeth L wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The attachment shows my problems when I tried to compile openmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.2.3 with absoft 95
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (Absoft 64-bit Fortran 95 9.0 with Service Pack 1).  I have  
</span><br>
<span class="quotelev1">&gt; similar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problems with version 1.2.1, but
</span><br>
<span class="quotelev3">&gt; &gt; &gt; no problem with version 1.2.1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Elizabeth Yip
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;ompi_absoft.tar.gz&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ATT5249792.txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT15994267.txt&gt;
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
<li><strong>Next message:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3599.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>In reply to:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
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
