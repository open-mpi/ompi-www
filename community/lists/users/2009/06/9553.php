<?
$subject_val = "Re: [OMPI users] What flags for configure for a single	machine	installation ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 08:36:42 2009" -->
<!-- isoreceived="20090605123642" -->
<!-- sent="Fri, 05 Jun 2009 14:36:59 +0200" -->
<!-- isosent="20090605123659" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What flags for configure for a single	machine	installation ?" -->
<!-- id="4A29116B.8080406_at_ens2m.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1244161069.27569.51.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] What flags for configure for a single	machine	installation ?<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 08:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9552.php">Jeff Squyres: "Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?"</a>
<li><strong>In reply to:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Frankcombe a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Is there any compelling reason you're not using the wrappers
</span><br>
<span class="quotelev1">&gt; mpif77/mpif90?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
In fact, this is for the same reason that I also try to use static linking:
<br>
I have been using two middle-size clusters as a normal user without root
<br>
privilege.
<br>
Hence I cannot update the compiler/libraries... packages.
<br>
The binaries are installed via apt-get (Debian distro) and almost never
<br>
updated by the administrator.
<br>
Hence, they are not optimized for our hardware.
<br>
The default gfortran is still  4.1.2 and ifort is  10.0 20070426 (hence
<br>
also mpif90).
<br>
I have made tests with more recent compilers and libraries installed
<br>
under my account and the system compilers indeed produce much slower codes.
<br>
I could go on this way and use LD_LIBRARY_PATH to point to my private
<br>
versions of the compilers/library but I have problems with the fact that
<br>
the SGE batch system uses an openmpi environment with an old version of
<br>
openmpi coherent with the compilers and glibc versions...
<br>
Furthermore, I would like to have the same computing environment on my
<br>
machine and on the cluster.
<br>
<p>Maybe there is a clever way to deal with my problems than going for
<br>
static link, but I have already wasted quite some time trying other
<br>
solutions unsuccessfully. However, I would evidently appreciate if
<br>
someone could point me one! ;-)
<br>
<p><p><pre>
-- 
Sincerely yours,
Michel DEVEL
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9552.php">Jeff Squyres: "Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?"</a>
<li><strong>In reply to:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Reply:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
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
