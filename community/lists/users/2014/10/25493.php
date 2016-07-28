<?
$subject_val = "Re: [OMPI users] Fortran wrapper libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 10:29:42 2014" -->
<!-- isoreceived="20141014142942" -->
<!-- sent="Tue, 14 Oct 2014 14:29:40 +0000" -->
<!-- isosent="20141014142940" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran wrapper libraries" -->
<!-- id="4E6B838D-E971-4576-9516-2AF19E055A7D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="543CD1C2.5060708_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran wrapper libraries<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-14 10:29:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25494.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Previous message:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>In reply to:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25494.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Reply:</strong> <a href="25494.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 14, 2014, at 12:33 AM, Marc-Andre Hermanns &lt;m.a.hermanns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; No.  Also note that in OMPI 1.7/1.8, we have renamed the Fortran
</span><br>
<span class="quotelev2">&gt;&gt; wrapper to be mpifort -- mpif77 and mpif90 are sym links to mpifort
</span><br>
<span class="quotelev2">&gt;&gt; provided simply for backwards compatibility.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the heads up. Complicates our configuration a little but good
</span><br>
<span class="quotelev1">&gt; to know. ;-)
</span><br>
<p>I'm a little confused here -- I thought you said you wanted to replace your wrappers with ours.
<br>
<p>If that's correct, why do you need to know linking order, etc.?
<br>
<p>I.e., if you're using our wrappers, then you just call mpif77/mpif90/mpifort, and you're done.
<br>
<p><span class="quotelev2">&gt;&gt; mpifort acts identically, regardless of whether it is invoked by the
</span><br>
<span class="quotelev2">&gt;&gt; name &quot;mpif77&quot; or &quot;mpif90&quot; or &quot;mpifort&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the 1.7/1.8 series, we link in all the Fortran libraries when you
</span><br>
<span class="quotelev2">&gt;&gt; invoke mpifort, which allows you to use any of the 3 MPI Fortran
</span><br>
<span class="quotelev2">&gt;&gt; interfaces (mpif.h, the mpi module, and the mpi_f08 module).  This
</span><br>
<span class="quotelev2">&gt;&gt; is, of course, tempered by what you built and installed -- e.g., if
</span><br>
<span class="quotelev2">&gt;&gt; you're using an old version of gfortran, the libmpi_usempif08 library
</span><br>
<span class="quotelev2">&gt;&gt; won't be built, and therefore won't be linked in by mpifort, and &quot;use
</span><br>
<span class="quotelev2">&gt;&gt; mpi_f08&quot; in applications will fail to compile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok. Is there a required order for those three libraries?
</span><br>
<p>Yes.
<br>
<p>..but instead of answering your question directly, I'm going to ask: why do you need to know?  :-)
<br>
<p>Read below before answering.
<br>
<p><span class="quotelev1">&gt; Score-P needs to get our C-wrappers inbetween your link line, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I understand, the order needs to be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpifort user_code.f90 -o foo &lt;ompi_fortran_wrappers&gt; &lt;scorep-c-wrappers&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_libs&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<p>No.  You shouldn't need to list the OMPI MPI libs at all -- the wrapper will put those in for you.
<br>
<p>For example, in OMPI 1.6.x:
<br>
<p>$ mpif77 hello_f77.f -o foo -lscorep
<br>
<p>Turns into:
<br>
<p>gfortran hello_f77.f -o foo -lscorep -I/home/jsquyres/bogus/include -pthread -L/home/jsquyres/bogus/lib -lmpi_f77 -lmpi -ldl -lm -lnuma -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
<br>
<p>Notice how -lscorep is to the left of all the OMPI libraries, so there's nothing additional you need to add.
<br>
<p>And in v1.8.x:
<br>
<p>$ mpifort hello_f77.f -o foo -lscorep
<br>
<p>Turns into:
<br>
<p>gfortran hello_f77.f -o foo -lscorep -I/home/jsquyres/bogus/include -pthread -I/home/jsquyres/bogus/lib -Wl,-rpath -Wl,/home/jsquyres/bogus/lib -Wl,--enable-new-dtags -L/home/jsquyres/bogus/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
<p><span class="quotelev1">&gt; The user code generates unresolved symbols that are satisfied by the
</span><br>
<span class="quotelev1">&gt; fortran wrappers of OMPI. They in turn generate unresolved symbols to
</span><br>
<span class="quotelev1">&gt; the C functions, then intercepted by the Score-P wrappers, in turn
</span><br>
<span class="quotelev1">&gt; generating unresolved symbols to the core MPI functions, which are
</span><br>
<span class="quotelev1">&gt; satisfied by the rest of the OMPI link line.
</span><br>
<p>This is the wrong scheme to use.  :-(
<br>
<p>If you want to intercept Fortran function calls, you must do it in Fortran.  It is not sufficient to only intercept C calls if you intent to intercept all Fortran calls -- don't you remember our confusing discussions in the Forum Tools WG about this exact topic?  :-(
<br>
<p>If -lscorep contains Fortran MPI wrappers (i.e., you're intercepting the Fortran MPI API calls), then you can turn around and call PMPI Fortran calls.  The MPI-3.0 + errata contains the right symbol methodology you must use to intercept Fortran subroutine/function calls for MPI.
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
<li><strong>Next message:</strong> <a href="25494.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Previous message:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>In reply to:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25494.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Reply:</strong> <a href="25494.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
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
