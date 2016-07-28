<?
$subject_val = "Re: [OMPI users] GCC 4.9 and MPI_F08?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 16:40:06 2014" -->
<!-- isoreceived="20140814204006" -->
<!-- sent="Thu, 14 Aug 2014 20:40:04 +0000" -->
<!-- isosent="20140814204004" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC 4.9 and MPI_F08?" -->
<!-- id="B11EBDAD-3C13-4BC3-946A-557FD0109B11_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="477460400.925115.1408009920581.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] GCC 4.9 and MPI_F08?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 16:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25013.php">Christoph Niethammer: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 14, 2014, at 5:52 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just gave gcc 4.9.0 a try and the mpi_f09 module
</span><br>
<p>Wow -- that must be 1 better than the mpi_f08 module!
<br>
<p>:-p
<br>
<p><span class="quotelev1">&gt; is there but it seems to miss some functions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpifort test.f90
</span><br>
<span class="quotelev1">&gt; /tmp/ccHCEbXC.o: In function `MAIN__':
</span><br>
<span class="quotelev1">&gt; test.f90:(.text+0x35a): undefined reference to `mpi_win_lock_all_'
</span><br>
<p>Turns out that this is not a problem with the mpi_f08 module, per se -- we didn't have Fortran bindings (at all) for MPI_WIN_LOCK_ALL, MPI_WIN_UNLOCK_ALL, and MPI_WIN_SYNC.  :-(
<br>
<p>I just added them to the trunk, and will be adding tests to the test suite shortly...
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
<li><strong>Next message:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25013.php">Christoph Niethammer: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
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
