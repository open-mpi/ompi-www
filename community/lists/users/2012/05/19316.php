<?
$subject_val = "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 20 20:26:13 2012" -->
<!-- isoreceived="20120521002613" -->
<!-- sent="Sun, 20 May 2012 20:26:07 -0400" -->
<!-- isosent="20120521002607" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers" -->
<!-- id="BA894EBA-B026-45C6-97CA-81F1C269FB1D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FB77C13.70207_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-20 20:26:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19317.php">Reuti: "Re: [OMPI users] MPI books and resources"</a>
<li><strong>Previous message:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2012, at 6:55 AM, Tim Prince wrote:
<br>
<p><span class="quotelev1">&gt; I don't see how it is too great an inconvenience for your Makefile to set PATH and LD_LIBRARY_PATH to include the mpif90 corresponding to the chosen Fortran compiler.
</span><br>
<p>+1 on this.  
<br>
<p>I believe there are/might be some flags to force the Intel compilers to be ABI compatible with gfortran, but I don't know how well those are maintained between specific version tuples of (gfortran version, ifort version).
<br>
<p>It is always safest -- and usually easiest -- to have separate OMPI installs for each different set of compilers that you want to use.  This is unfortunate and sometimes annoying, but it's not really something that Open MPI can fix.  Only the compiler vendors can fix the ABI in/compatibility between the different compiler suites.  Sorry.  :-(
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
<li><strong>Next message:</strong> <a href="19317.php">Reuti: "Re: [OMPI users] MPI books and resources"</a>
<li><strong>Previous message:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
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
