<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  2 14:31:50 2007" -->
<!-- isoreceived="20070702183150" -->
<!-- sent="Mon, 2 Jul 2007 11:31:33 -0700" -->
<!-- isosent="20070702183133" -->
<!-- name="Yip, Elizabeth L" -->
<!-- email="elizabeth.l.yip_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absoft compilation problem" -->
<!-- id="350B898AB2BACD4980AC3DAFB99294F70A5B6F_at_XCH-NW-4V2.nw.nos.boeing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D6886697-4492-420B-8EBF-5FD4D8FA8CD4_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-02 14:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3567.php">Ricardo Reis: "[OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<li><strong>Previous message:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
<li><strong>In reply to:</strong> <a href="3562.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Reply:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I downloaded openmpi-1.2.3rc2r15098 from your &quot;nightly snapshot&quot;, same problem.
<br>
I notice in version 1.1.2, you generate libmpi_f90.a instead of the .so files.
<br>
<p><p><p>-----Original Message-----
<br>
From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
<br>
Sent: Sun 7/1/2007 4:03 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Absoft compilation problem
<br>
&nbsp;
<br>
I unfortunately do not have access to an Absoft compiler to test this  
<br>
with; it looks like GNU Libtool is getting the wrong arguments to  
<br>
pass to the f95 compiler to build a shared library.
<br>
<p>A quick workaround for this issue would be to disable the MPI F90  
<br>
bindings with the --disable-mpi-f90 switch to configure.
<br>
<p>Could you try the Open MPI nightly trunk tarball and see if it works  
<br>
there?  We use a different version of Libtool to make those tarballs.
<br>
<p><p>On Jun 30, 2007, at 2:09 AM, Yip, Elizabeth L wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attachment shows my problems when I tried to compile openmpi  
</span><br>
<span class="quotelev1">&gt; 1.2.3 with absoft 95
</span><br>
<span class="quotelev1">&gt; (Absoft 64-bit Fortran 95 9.0 with Service Pack 1).  I have similar  
</span><br>
<span class="quotelev1">&gt; problems with version 1.2.1, but
</span><br>
<span class="quotelev1">&gt; no problem with version 1.2.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elizabeth Yip
</span><br>
<span class="quotelev1">&gt; &lt;ompi_absoft.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
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
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3566/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3567.php">Ricardo Reis: "[OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<li><strong>Previous message:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
<li><strong>In reply to:</strong> <a href="3562.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Reply:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
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
