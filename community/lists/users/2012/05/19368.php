<?
$subject_val = "Re: [OMPI users] vers 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 10:04:47 2012" -->
<!-- isoreceived="20120524140447" -->
<!-- sent="Thu, 24 May 2012 10:04:42 -0400" -->
<!-- isosent="20120524140442" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vers 1.6.1" -->
<!-- id="B02142DD-B493-4079-8069-666F04072198_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1205241135160.4078_at_serodio" -->
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
<strong>Subject:</strong> Re: [OMPI users] vers 1.6.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 10:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19369.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19367.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19363.php">Ricardo Reis: "[OMPI users] vers 1.6.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 6:35 AM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; When is it thought that 1.6.1 goes public?
</span><br>
<p><p>FWIW, the nightly tarballs of the head of the v1.6 SVN branch are available here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
<br>
<p>There's only been a few minor fixes applied so far after 1.6 was released:
<br>
<p>1. The intercommunicator-related parameter checking in collectives from this morning (I'm guessing George will apply this fix sometime today)
<br>
2. Fix cleanup during MPI_FINALIZE related to user-defined error codes
<br>
3. Fix default hostfile location
<br>
4. Fixed a malformed error message in the openib BTL
<br>
<p>These are all pretty minor fixes.  As noted, #1 has been in OMPI since (at least) v1.2 -- and probably longer than that.  Any any of these a showstopper for someone?
<br>
<p>There's a few other issues that are on my to-do list to investigate in the near future:
<br>
<p>- wrapper compilers incorrectly adding -ldl / -lhwloc
<br>
- PGI compiler issues (need to get my new PGI license installed first...)
<br>
- MPI_COMPLEX* and MPI_DOUBLE_COMPLEX issues
<br>
- clang / OS X issues
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
<li><strong>Next message:</strong> <a href="19369.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19367.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19363.php">Ricardo Reis: "[OMPI users] vers 1.6.1"</a>
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
