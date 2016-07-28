<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 18:38:42 2007" -->
<!-- isoreceived="20070712223842" -->
<!-- sent="Thu, 12 Jul 2007 18:38:34 -0400" -->
<!-- isosent="20070712223834" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?" -->
<!-- id="985D6EA7-6A72-4144-9303-CA525088AC77_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8E594469-117C-465A-998F-C7B64B244031_at_cs.utk.edu" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 18:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2007, at 4:42 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The INTFACE is for the namespace interface in order to allow the
</span><br>
<span class="quotelev1">&gt; Fortran code to call a C function. So it should be dependent on the
</span><br>
<span class="quotelev1">&gt; compiler. Btw, for some reasons I was quite sure we generate all 4
</span><br>
<span class="quotelev1">&gt; versions of the Fortran interface ... If this is true is doesn't
</span><br>
<span class="quotelev1">&gt; really mater what you have in the INTFACE.
</span><br>
<p>It would except this flag not only affects the names BLACS uses to  
<br>
link to OpenMPI but also what interfaces it generates (based on my  
<br>
experience), which then for example affects what happens when you  
<br>
build ScalaPack.  I believe that was what I was seeing when building  
<br>
those three with the Intel compiler and g95, the latter was harder  
<br>
then expected.
<br>
<p><span class="quotelev1">&gt; The option Jeff is refering to is the TRANSCOMM define. It allow
</span><br>
<span class="quotelev1">&gt; BLACS to know how to convert between Fortran and C handlers. For Open
</span><br>
<span class="quotelev1">&gt; MPI this should be set to -DUseMpi2.
</span><br>
<p>Fortunately documented on the web FAQ but not in the BLACS  
<br>
documentation.
<br>
<p>Michael
<br>
<p><span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2007, at 2:41 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2007, at 2:28 PM, Michael wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the FAQ &lt;<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>&gt;, section
</span><br>
<span class="quotelev3">&gt;&gt;&gt; labeled:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12. How do I build BLACS with Open MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTFACE = -Df77IsF2C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That INTFACE value is only for G77, G95, and related compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the Intel Fortran compiler it is: -DAdd_
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Really?  I always thought that this flag discussed how to convert F77
</span><br>
<span class="quotelev2">&gt;&gt; MPI handles to C handles (some MPI implementations use integers for
</span><br>
<span class="quotelev2">&gt;&gt; MPI handles in C, so there's no conversion necessary, but LAM and
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI use pointers, so using the MPI_*_f2c() functions are
</span><br>
<span class="quotelev2">&gt;&gt; necessary).  Hence, it's not specific to a given fortran compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I could be completely misunderstanding this value...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; UTK: can you confirm/deny both of these values?  (I do not claim to
</span><br>
<span class="quotelev2">&gt;&gt; be a BLACS expert...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have successfully built the combination of OpenMPI 1.2.3, ATLAS,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BLACS, ScalaPack, and MUMPS using the Intel Fortran compiler on two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different Debian Linux systems (3.0r3 on AMD Opterons and 4.0r0 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel Woodcrest/MacPro).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
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
