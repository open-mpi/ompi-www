<?
$subject_val = "Re: [OMPI users] Windows MPI with Fortran calling programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 09:39:16 2013" -->
<!-- isoreceived="20130116143916" -->
<!-- sent="Wed, 16 Jan 2013 14:39:10 +0000" -->
<!-- isosent="20130116143910" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows MPI with Fortran calling programs" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380BBC3A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="003301cdf25f$1dde8670$599b9350$_at_com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 09:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21132.php">Jure Pečar: "[OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="21121.php">Said Elnoshokaty: "[OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21494.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21494.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2013, at 8:57 AM, Said Elnoshokaty &lt;selnoshokaty_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Parallel processing is needed to speed up processing of large-scale master and sub-problems. 32-bit Microsoft Access 2007 is used to capture data and then calls a DLL program written in 32-bit Microsoft Fortran 90 for processing (to be distributed in parallel among master and sub-problems). Operating system is 64-bit Windows 7. Hardware is PCs core i3 and i5. Network is Ethernet 5. Please advise on the possibility of having MPI installed on this platform and how to install, if possible.
</span><br>
<p>Open MPI recently lost its Windows developer, and Windows support has been removed from the upcoming v1.7 release.
<br>
<p>Your best bet is likely to use Microsoft MPI.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21132.php">Jure Pečar: "[OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="21121.php">Said Elnoshokaty: "[OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21494.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21494.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
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
