<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 13:04:55 2007" -->
<!-- isoreceived="20070608170455" -->
<!-- sent="Fri, 8 Jun 2007 12:04:48 -0500 (CDT)" -->
<!-- isosent="20070608170448" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="Pine.LNX.4.58.0706081203170.310_at_triumph.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6363177B-DB0B-4080-A1A0-5FBF0469E746_at_cisco.com" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 13:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3412.php">Cupp, Matthew R: "[OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3378.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 8 Jun 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Would it be helpful if we provided some way to link in all the MPI
</span><br>
<span class="quotelev1">&gt; language bindings?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Examples off the top of my head (haven't thought any of these through):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - mpicxx_all ...
</span><br>
<span class="quotelev1">&gt; - setenv OMPI_WRAPPER_WANT_ALL_LANGUAGE_BINDINGS
</span><br>
<span class="quotelev1">&gt;    mpicxx ...
</span><br>
<span class="quotelev1">&gt; - mpicxx -ompi:all_languages ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Maybe this wrapper should be called &quot;mpild&quot; or &quot;mpilinker&quot;.
<br>
<p>A.Chan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2007, at 12:05 PM, Lie-Quan Lee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for willing to put more thought on it. Here is my simplified
</span><br>
<span class="quotelev2">&gt; &gt; story. I have an accelerator physics code, Omega3P that is to perform
</span><br>
<span class="quotelev2">&gt; &gt; complex eigenmode analysis. The algorithm for solving eigensystems
</span><br>
<span class="quotelev2">&gt; &gt; makes use of a 3rd-party  sparse direct solver called MUMPS (http://
</span><br>
<span class="quotelev2">&gt; &gt; graal.ens-lyon.fr/MUMPS/). Omega3P is written in C++ with MPI. MUMPS
</span><br>
<span class="quotelev2">&gt; &gt; is written in Fortran 95 with MPI fortran binding. And MUMPS requires
</span><br>
<span class="quotelev2">&gt; &gt; ScaLAPACK and BLACS. (sometime the vendor provides a scientific
</span><br>
<span class="quotelev2">&gt; &gt; library that includes BLACS and ScaLAPACK).  They are both written in
</span><br>
<span class="quotelev2">&gt; &gt; Fortran 77 with MPI Fortran binding.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I often need to compile them in various computer platforms with
</span><br>
<span class="quotelev2">&gt; &gt; different compilers for variety of reasons.
</span><br>
<span class="quotelev2">&gt; &gt; As I mentioned before, I use C++ compiler to link the final
</span><br>
<span class="quotelev2">&gt; &gt; executable. That will require MPI Fortran libraries and general
</span><br>
<span class="quotelev2">&gt; &gt; Fortran libraries.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What I did to solve the above problem is, I have a configure script
</span><br>
<span class="quotelev2">&gt; &gt; in which I will detect the compiler and the platform, based on that I
</span><br>
<span class="quotelev2">&gt; &gt; will add compiler and platform specific flags for the Fortran related
</span><br>
<span class="quotelev2">&gt; &gt; stuff (libraries and library path). This does well until it hit next
</span><br>
<span class="quotelev2">&gt; &gt; new platform/compiler...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some compilers made the above job slightly easier. For example in
</span><br>
<span class="quotelev2">&gt; &gt; Pathscale compiler collection, it provides -lpathfortran for all what
</span><br>
<span class="quotelev2">&gt; &gt; I need to link the executable using c++ compiler with fortran
</span><br>
<span class="quotelev2">&gt; &gt; compiled libraries. So is IBM visual age compiler set if the wraper
</span><br>
<span class="quotelev2">&gt; &gt; compilers (mpcc_r, mpf90_r) are used. The library name (-lxlf90_r) is
</span><br>
<span class="quotelev2">&gt; &gt; different, though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Rich Lee
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 6, 2007, at 4:16 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 5, 2007, at 11:17 PM, Lie-Quan Lee wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it is a quite of headache for each compiler/platform to deal with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mixed language
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; issues.  I have to compile my application on IBM visual age
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compiler,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Pathscale, Cray X1E compiler,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; intel/openmpi, intel/mpich, PGI compiler ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; And of course, openmpi 1.1 is different on this comparing with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi 1.2.2 (-lmpi_f77 is new to 1.2.2 version). :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You are right. MPI forum most like will not take care of this. I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; just
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; made a wish ... :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Understood; I know it's a pain.  :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What I want to understand, however, is what you need to do.  It seems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like your needs are a bit different than those of the mainstream --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is there a way that we can support you directly instead of forcing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you to a) identify openmpi, b) call mpi&lt;foo&gt; --showme:link to get the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; relevant flags, and c) stitch them together in the manner that you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; need?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We take great pains to ensure that the mpi&lt;foo&gt; wrapper compilers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;just work&quot; for all the common cases in order to avoid all the &quot;you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; must identify which MPI you are using&quot; kinds of games.  Your case
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sounds somewhat unusual, but perhaps there's a way we can get the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; information to you in a more direct manner...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3412.php">Cupp, Matthew R: "[OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3378.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
