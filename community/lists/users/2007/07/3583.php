<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 13:39:10 2007" -->
<!-- isoreceived="20070705173910" -->
<!-- sent="Thu, 5 Jul 2007 10:37:54 -0700" -->
<!-- isosent="20070705173754" -->
<!-- name="Yip, Elizabeth L" -->
<!-- email="elizabeth.l.yip_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absoft compilation problem" -->
<!-- id="350B898AB2BACD4980AC3DAFB99294F70A5B70_at_XCH-NW-4V2.nw.nos.boeing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FF2AB974-D4DE-4474-843C-5BF07EA024FA_at_cisco.com" -->
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
<strong>From:</strong> Yip, Elizabeth L (<em>elizabeth.l.yip_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 13:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
<li><strong>Previous message:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3600.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.2.1 does NOT work for me.
<br>
<p>-----Original Message-----
<br>
From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
<br>
Sent: Thu 7/5/2007 2:39 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Absoft compilation problem
<br>
&nbsp;
<br>
On Jul 2, 2007, at 7:31 PM, Yip, Elizabeth L wrote:
<br>
<p><span class="quotelev1">&gt; I downloaded openmpi-1.2.3rc2r15098 from your &quot;nightly snapshot&quot;,  
</span><br>
<span class="quotelev1">&gt; same problem.
</span><br>
<span class="quotelev1">&gt; I notice in version 1.1.2, you generate libmpi_f90.a instead of  
</span><br>
<span class="quotelev1">&gt; the .so files.
</span><br>
<p>Brian clarified for me off-list that we use the same LT for nightly  
<br>
trunk and OMPI 1.2.x tarballs.
<br>
<p>In 1.1.2, you're correct that we only made static F90 libraries.
<br>
<p>Can you clarify/confirm:
<br>
<p>- 1.1.2 works for you (static F90 library)
<br>
- 1.2.1 works for you
<br>
- 1.2.3 does not work for you
<br>
<p>If this is correct, then something is really, really weird.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Sun 7/1/2007 4:03 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Absoft compilation problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I unfortunately do not have access to an Absoft compiler to test this
</span><br>
<span class="quotelev1">&gt; with; it looks like GNU Libtool is getting the wrong arguments to
</span><br>
<span class="quotelev1">&gt; pass to the f95 compiler to build a shared library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A quick workaround for this issue would be to disable the MPI F90
</span><br>
<span class="quotelev1">&gt; bindings with the --disable-mpi-f90 switch to configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try the Open MPI nightly trunk tarball and see if it works
</span><br>
<span class="quotelev1">&gt; there?  We use a different version of Libtool to make those tarballs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2007, at 2:09 AM, Yip, Elizabeth L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The attachment shows my problems when I tried to compile openmpi
</span><br>
<span class="quotelev2">&gt; &gt; 1.2.3 with absoft 95
</span><br>
<span class="quotelev2">&gt; &gt; (Absoft 64-bit Fortran 95 9.0 with Service Pack 1).  I have similar
</span><br>
<span class="quotelev2">&gt; &gt; problems with version 1.2.1, but
</span><br>
<span class="quotelev2">&gt; &gt; no problem with version 1.2.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Elizabeth Yip
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompi_absoft.tar.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mime-attachment.txt&gt;
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
<span class="quotelev1">&gt; &lt;ATT5249792.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3583/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
<li><strong>Previous message:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3600.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
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
