<?
$subject_val = "Re: [OMPI users] Fortran wrapper libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 03:33:24 2014" -->
<!-- isoreceived="20141014073324" -->
<!-- sent="Tue, 14 Oct 2014 09:33:22 +0200" -->
<!-- isosent="20141014073322" -->
<!-- name="Marc-Andre Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran wrapper libraries" -->
<!-- id="543CD1C2.5060708_at_grs-sim.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59970DEB-9A03-45C1-8451-E440A2649E97_at_cisco.com" -->
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
<strong>From:</strong> Marc-Andre Hermanns (<em>m.a.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-14 03:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Previous message:</strong> <a href="25491.php">Rajeev Thakur: "[OMPI users] new tutorial books on MPI"</a>
<li><strong>In reply to:</strong> <a href="25490.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Reply:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>thanks for your answer on this.
<br>
<p><span class="quotelev1">&gt; Sorry for the delay.
</span><br>
<p>No problem. Better delayed than never. ;-)
<br>
<p><span class="quotelev1">&gt; Which version of Open MPI are you referring to? I'm offline at the
</span><br>
<span class="quotelev1">&gt; moment, and I think you're referring to the OMPI 1.6 series -- I'm
</span><br>
<span class="quotelev1">&gt; pretty sure we renamed these libraries in the 1.7/1.8 series, to
</span><br>
<span class="quotelev1">&gt; something like libmpi_mpifh, libmpi_usmpi (respectively), and
</span><br>
<span class="quotelev1">&gt; libmpi_usempif08.
</span><br>
<p>As far as I know, the concrete example where we investigated this was on
<br>
a Fujitsu system, and I think they base their MPI on OpenMPI. As I don't
<br>
think they re-base frequently, it is very likely that it is based on a
<br>
1.6 or earlier OpenMPI.
<br>
<p><span class="quotelev2">&gt;&gt; in the Score-P measurement system, we'd like to use the Fortran wrapper
</span><br>
<span class="quotelev2">&gt;&gt; libraries provided with Open-MPI rather than our own. When checking the
</span><br>
<span class="quotelev2">&gt;&gt; library directory we found:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.so
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f90.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our questions are:
</span><br>
<span class="quotelev2">&gt;&gt; - Does it matter which one of the libraries we link with the application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Does the first correspond to mpif77 and the second to mpif90?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  Also note that in OMPI 1.7/1.8, we have renamed the Fortran
</span><br>
<span class="quotelev1">&gt; wrapper to be mpifort -- mpif77 and mpif90 are sym links to mpifort
</span><br>
<span class="quotelev1">&gt; provided simply for backwards compatibility.
</span><br>
<p>Thanks for the heads up. Complicates our configuration a little but good
<br>
to know. ;-)
<br>
<p><span class="quotelev1">&gt; mpifort acts identically, regardless of whether it is invoked by the
</span><br>
<span class="quotelev1">&gt; name &quot;mpif77&quot; or &quot;mpif90&quot; or &quot;mpifort&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.7/1.8 series, we link in all the Fortran libraries when you
</span><br>
<span class="quotelev1">&gt; invoke mpifort, which allows you to use any of the 3 MPI Fortran
</span><br>
<span class="quotelev1">&gt; interfaces (mpif.h, the mpi module, and the mpi_f08 module).  This
</span><br>
<span class="quotelev1">&gt; is, of course, tempered by what you built and installed -- e.g., if
</span><br>
<span class="quotelev1">&gt; you're using an old version of gfortran, the libmpi_usempif08 library
</span><br>
<span class="quotelev1">&gt; won't be built, and therefore won't be linked in by mpifort, and &quot;use
</span><br>
<span class="quotelev1">&gt; mpi_f08&quot; in applications will fail to compile.
</span><br>
<p>Ok. Is there a required order for those three libraries?
<br>
<p><span class="quotelev2">&gt;&gt; - Is there a best practice as to what to put on the link line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't need to list any MPI libraries on the mpifort (or mpif77 or
</span><br>
<span class="quotelev1">&gt; mpif90 -- even back in the v1.6 series) command line.  You can just:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpifort my_awesome_fortran_mpi_app.f90 -o foo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And OMPI will link in the appropriate libraries for you.  That's why
</span><br>
<span class="quotelev1">&gt; we felt comfortable changing the Fortran library names in the
</span><br>
<span class="quotelev1">&gt; v1.7/v1.8 series.
</span><br>
<p>Score-P needs to get our C-wrappers inbetween your link line, though.
<br>
<p>As far as I understand, the order needs to be:
<br>
<p>mpifort user_code.f90 -o foo &lt;ompi_fortran_wrappers&gt; &lt;scorep-c-wrappers&gt;
<br>
&lt;ompi_mpi_libs&gt;
<br>
<p>Right?
<br>
<p>The user code generates unresolved symbols that are satisfied by the
<br>
fortran wrappers of OMPI. They in turn generate unresolved symbols to
<br>
the C functions, then intercepted by the Score-P wrappers, in turn
<br>
generating unresolved symbols to the core MPI functions, which are
<br>
satisfied by the rest of the OMPI link line.
<br>
<p>Therefore, we need to know which libraries need to go where.
<br>
<p>Cheers,
<br>
Marc-Andre
<br>
<p><pre>
-- 
Marc-Andre Hermanns
J&#252;lich Aachen Research Alliance,
High Performance Computing (JARA-HPC)
German Research School for Simulation Sciences GmbH
Schinkelstrasse 2
52062 Aachen
Germany
Phone: +49 241 80 99753
Fax: +49 241 80 6 99753
www.grs-sim.de/parallel
email: m.a.hermanns_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25492/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Previous message:</strong> <a href="25491.php">Rajeev Thakur: "[OMPI users] new tutorial books on MPI"</a>
<li><strong>In reply to:</strong> <a href="25490.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Reply:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
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
