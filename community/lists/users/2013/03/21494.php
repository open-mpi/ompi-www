<?
$subject_val = "Re: [OMPI users] Windows MPI with Fortran calling programs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  3 15:03:12 2013" -->
<!-- isoreceived="20130303200312" -->
<!-- sent="Sun, 3 Mar 2013 22:03:04 +0200" -->
<!-- isosent="20130303200304" -->
<!-- name="Said Elnoshokaty" -->
<!-- email="selnoshokaty_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows MPI with Fortran calling programs" -->
<!-- id="000001ce184a$1dc3f0b0$594bd210$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC380BBC3A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows MPI with Fortran calling programs<br>
<strong>From:</strong> Said Elnoshokaty (<em>selnoshokaty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-03 15:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21495.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21493.php">Stefan Mauerberger: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21131.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>This is to thank you for your advice to use MS MPI. After a long and tedious
<br>
trials, finally I have succeeded to control the use of MS MPI in my case.
<br>
<p>Best regards.
<br>
<p>Prof. Dr. Said Elnoshokaty
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Wednesday, January 16, 2013 4:39 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Windows MPI with Fortran calling programs
<br>
<p>On Jan 14, 2013, at 8:57 AM, Said Elnoshokaty &lt;selnoshokaty_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Parallel processing is needed to speed up processing of large-scale master
</span><br>
and sub-problems. 32-bit Microsoft Access 2007 is used to capture data and
<br>
then calls a DLL program written in 32-bit Microsoft Fortran 90 for
<br>
processing (to be distributed in parallel among master and sub-problems).
<br>
Operating system is 64-bit Windows 7. Hardware is PCs core i3 and i5.
<br>
Network is Ethernet 5. Please advise on the possibility of having MPI
<br>
installed on this platform and how to install, if possible.
<br>
<p>Open MPI recently lost its Windows developer, and Windows support has been
<br>
removed from the upcoming v1.7 release.
<br>
<p>Your best bet is likely to use Microsoft MPI.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21495.php">Andrew J Gomes: "[OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21493.php">Stefan Mauerberger: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21131.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
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
