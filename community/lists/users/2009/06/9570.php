<?
$subject_val = "Re: [OMPI users] What flags for configure for a	single	machine	installation ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 22:16:09 2009" -->
<!-- isoreceived="20090609021609" -->
<!-- sent="Tue, 09 Jun 2009 12:15:58 +1000" -->
<!-- isosent="20090609021558" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What flags for configure for a	single	machine	installation ?" -->
<!-- id="1244513758.27569.92.camel_at_rscpc28.anu.edu.au" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A29116B.8080406_at_ens2m.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] What flags for configure for a	single	machine	installation ?<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 22:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9571.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-06-05 at 14:36 +0200, DEVEL Michel wrote:
<br>
<span class="quotelev1">&gt; Terry Frankcombe a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Is there any compelling reason you're not using the wrappers
</span><br>
<span class="quotelev2">&gt; &gt; mpif77/mpif90?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; In fact, this is for the same reason that I also try to use static linking:
</span><br>
<span class="quotelev1">&gt; I have been using two middle-size clusters as a normal user without root
</span><br>
<span class="quotelev1">&gt; privilege.
</span><br>
<span class="quotelev1">&gt; Hence I cannot update the compiler/libraries... packages.
</span><br>
<span class="quotelev1">&gt; The binaries are installed via apt-get (Debian distro) and almost never
</span><br>
<span class="quotelev1">&gt; updated by the administrator.
</span><br>
<span class="quotelev1">&gt; Hence, they are not optimized for our hardware.
</span><br>
<span class="quotelev1">&gt; The default gfortran is still  4.1.2 and ifort is  10.0 20070426 (hence
</span><br>
<span class="quotelev1">&gt; also mpif90).
</span><br>
<span class="quotelev1">&gt; I have made tests with more recent compilers and libraries installed
</span><br>
<span class="quotelev1">&gt; under my account and the system compilers indeed produce much slower codes.
</span><br>
<span class="quotelev1">&gt; I could go on this way and use LD_LIBRARY_PATH to point to my private
</span><br>
<span class="quotelev1">&gt; versions of the compilers/library but I have problems with the fact that
</span><br>
<span class="quotelev1">&gt; the SGE batch system uses an openmpi environment with an old version of
</span><br>
<span class="quotelev1">&gt; openmpi coherent with the compilers and glibc versions...
</span><br>
<span class="quotelev1">&gt; Furthermore, I would like to have the same computing environment on my
</span><br>
<span class="quotelev1">&gt; machine and on the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe there is a clever way to deal with my problems than going for
</span><br>
<span class="quotelev1">&gt; static link, but I have already wasted quite some time trying other
</span><br>
<span class="quotelev1">&gt; solutions unsuccessfully. However, I would evidently appreciate if
</span><br>
<span class="quotelev1">&gt; someone could point me one! ;-)
</span><br>
<p>I'm no SGE expert.  But don't you have a PE available that simply
<br>
allocates nodes and calls your script?  Then you can specify in your
<br>
script any mpirun you want, and it all should still work.
<br>
Alternatively, can't you shut down the SGE-called mpirun as the first
<br>
thing you do, then continue on calling your own mpirun?  All this
<br>
depends on exactly how your machine and SGE is set up.
<br>
<p>I don't see how statically linking your app avoids this issue at all, if
<br>
you're still calling the wrong mpirun.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9571.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
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
