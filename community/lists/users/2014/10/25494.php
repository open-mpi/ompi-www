<?
$subject_val = "Re: [OMPI users] Fortran wrapper libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 13:32:52 2014" -->
<!-- isoreceived="20141014173252" -->
<!-- sent="Tue, 14 Oct 2014 19:32:49 +0200" -->
<!-- isosent="20141014173249" -->
<!-- name="Marc-Andre Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran wrapper libraries" -->
<!-- id="543D5E41.2080603_at_grs-sim.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E6B838D-E971-4576-9516-2AF19E055A7D_at_cisco.com" -->
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
<strong>Date:</strong> 2014-10-14 13:32:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25495.php">John Marshall: "[OMPI users] static for tools dynamic for libs"</a>
<li><strong>Previous message:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>In reply to:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p><span class="quotelev3">&gt;&gt;&gt; No.  Also note that in OMPI 1.7/1.8, we have renamed the Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper to be mpifort -- mpif77 and mpif90 are sym links to mpifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided simply for backwards compatibility.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the heads up. Complicates our configuration a little but good
</span><br>
<span class="quotelev2">&gt;&gt; to know. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a little confused here -- I thought you said you wanted to replace your wrappers with ours.
</span><br>
<p>Yes. We want to use your Fortran wrappers, but provide our own C
<br>
wrappers. For more details see my comments below.
<br>
<p><span class="quotelev1">&gt; If that's correct, why do you need to know linking order, etc.?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., if you're using our wrappers, then you just call mpif77/mpif90/mpifort, and you're done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpifort acts identically, regardless of whether it is invoked by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name &quot;mpif77&quot; or &quot;mpif90&quot; or &quot;mpifort&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the 1.7/1.8 series, we link in all the Fortran libraries when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invoke mpifort, which allows you to use any of the 3 MPI Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces (mpif.h, the mpi module, and the mpi_f08 module).  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is, of course, tempered by what you built and installed -- e.g., if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're using an old version of gfortran, the libmpi_usempif08 library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won't be built, and therefore won't be linked in by mpifort, and &quot;use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_f08&quot; in applications will fail to compile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok. Is there a required order for those three libraries?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ..but instead of answering your question directly, I'm going to ask: why do you need to know?  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Read below before answering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Score-P needs to get our C-wrappers inbetween your link line, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I understand, the order needs to be:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpifort user_code.f90 -o foo &lt;ompi_fortran_wrappers&gt; &lt;scorep-c-wrappers&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_libs&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  You shouldn't need to list the OMPI MPI libs at all -- the wrapper will put those in for you.
</span><br>
<p>Yes, but the I don't get any interposition for the Fortran calls.
<br>
<p><span class="quotelev1">&gt; For example, in OMPI 1.6.x:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpif77 hello_f77.f -o foo -lscorep
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turns into:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gfortran hello_f77.f -o foo -lscorep -I/home/jsquyres/bogus/include -pthread -L/home/jsquyres/bogus/lib -lmpi_f77 -lmpi -ldl -lm -lnuma -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice how -lscorep is to the left of all the OMPI libraries, so there's nothing additional you need to add.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And in v1.8.x:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpifort hello_f77.f -o foo -lscorep
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turns into:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gfortran hello_f77.f -o foo -lscorep -I/home/jsquyres/bogus/include -pthread -I/home/jsquyres/bogus/lib -Wl,-rpath -Wl,/home/jsquyres/bogus/lib -Wl,--enable-new-dtags -L/home/jsquyres/bogus/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<p>Thanks for the clarification.
<br>
<p><span class="quotelev2">&gt;&gt; The user code generates unresolved symbols that are satisfied by the
</span><br>
<span class="quotelev2">&gt;&gt; fortran wrappers of OMPI. They in turn generate unresolved symbols to
</span><br>
<span class="quotelev2">&gt;&gt; the C functions, then intercepted by the Score-P wrappers, in turn
</span><br>
<span class="quotelev2">&gt;&gt; generating unresolved symbols to the core MPI functions, which are
</span><br>
<span class="quotelev2">&gt;&gt; satisfied by the rest of the OMPI link line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the wrong scheme to use.  :-(
</span><br>
<p>In the general case, yes. In the long-run, also yes. However, this is a
<br>
solution that works (and has worked) well for many Fortran applications.
<br>
Frankly, this is why the tools community never noticed that anything was
<br>
wrong in the first place. ;-)
<br>
<p>We have identified some serious overhead issues with our own Fortran
<br>
wrappers in Score-P. Our old measurement system in Scalasca used the
<br>
proposed 'hack' and &quot;works&quot; with significantly lower overhead. This is
<br>
why we'd like to use OpenMPI's Fortran wrappers in Score-P as well, but
<br>
stumbled over the fact that we now have two or more libraries (and we
<br>
were used to only one). The idea is, to use the hack, until we have a
<br>
better working solution for the general case.
<br>
<p>Doesn't OpenMPI ship Vampirtrace with it? How is this solved there
<br>
currently? My guess would be that exactly this scheme is used, but I am
<br>
willing to learn ;-)
<br>
<p><span class="quotelev1">&gt; If you want to intercept Fortran function calls, you must do it in
</span><br>
<span class="quotelev1">&gt; Fortran.  It is not sufficient to only intercept C calls if you
</span><br>
<span class="quotelev1">&gt; intent to intercept all Fortran calls -- don't you remember our
</span><br>
<span class="quotelev1">&gt; confusing discussions in the Forum Tools WG about this exact topic?
</span><br>
<span class="quotelev1">&gt; :-(
</span><br>
<p>Yes, I do remember this discussion, and yes, fixing this current issue
<br>
will not fix the general issue. However, as far as I understood, the
<br>
problem only affected MPI functions that use pointer-to-functions
<br>
because calling conventions are different from Fortran to C and you'd
<br>
need to know what kind of function the pointer points to, right?
<br>
<p>So in principle this solution should work for applications that do not
<br>
use error handlers or user-defined operators. Yes, I agree a general
<br>
solution that very likely involves Fortran wrappers not to call their C
<br>
counterparts is desirable in the long run.
<br>
<p><span class="quotelev1">&gt; If -lscorep contains Fortran MPI wrappers (i.e., you're intercepting
</span><br>
<span class="quotelev1">&gt; the Fortran MPI API calls), then you can turn around and call PMPI
</span><br>
<span class="quotelev1">&gt; Fortran calls.  The MPI-3.0 + errata contains the right symbol
</span><br>
<span class="quotelev1">&gt; methodology you must use to intercept Fortran subroutine/function
</span><br>
<span class="quotelev1">&gt; calls for MPI.
</span><br>
<p>Yes, but we are not talking MPI 3.0 or mpi_f08 here. This is plain old
<br>
mpif.h and 'use mpi'.
<br>
<p>In the long run, my vision is to have Fortran wrappers that use a
<br>
Fortran interface definition of the relevant part of the measurement
<br>
system for calling into the measurement system directly and then calling
<br>
the Fortran PMPI function. However, this will take some time (convince
<br>
people, learn Fortran, write code, etc.).
<br>
<p>Cheers,
<br>
Marc-Andre
<br>
<pre>
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25494/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25495.php">John Marshall: "[OMPI users] static for tools dynamic for libs"</a>
<li><strong>Previous message:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>In reply to:</strong> <a href="25493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
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
