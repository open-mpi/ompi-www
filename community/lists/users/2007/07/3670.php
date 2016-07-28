<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 16:42:55 2007" -->
<!-- isoreceived="20070712204255" -->
<!-- sent="Thu, 12 Jul 2007 16:42:35 -0400" -->
<!-- isosent="20070712204235" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?" -->
<!-- id="8E594469-117C-465A-998F-C7B64B244031_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ABA4E685-480C-4FED-8490-7682914D619A_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 16:42:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="3667.php">Jeff Squyres: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3672.php">Michael: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Reply:</strong> <a href="3672.php">Michael: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The INTFACE is for the namespace interface in order to allow the  
<br>
Fortran code to call a C function. So it should be dependent on the  
<br>
compiler. Btw, for some reasons I was quite sure we generate all 4  
<br>
versions of the Fortran interface ... If this is true is doesn't  
<br>
really mater what you have in the INTFACE.
<br>
<p>The option Jeff is refering to is the TRANSCOMM define. It allow  
<br>
BLACS to know how to convert between Fortran and C handlers. For Open  
<br>
MPI this should be set to -DUseMpi2.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 12, 2007, at 2:41 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 12, 2007, at 2:28 PM, Michael wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the FAQ &lt;<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>&gt;, section
</span><br>
<span class="quotelev2">&gt;&gt; labeled:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 12. How do I build BLACS with Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; INTFACE = -Df77IsF2C
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That INTFACE value is only for G77, G95, and related compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the Intel Fortran compiler it is: -DAdd_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really?  I always thought that this flag discussed how to convert F77
</span><br>
<span class="quotelev1">&gt; MPI handles to C handles (some MPI implementations use integers for
</span><br>
<span class="quotelev1">&gt; MPI handles in C, so there's no conversion necessary, but LAM and
</span><br>
<span class="quotelev1">&gt; Open MPI use pointers, so using the MPI_*_f2c() functions are
</span><br>
<span class="quotelev1">&gt; necessary).  Hence, it's not specific to a given fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I could be completely misunderstanding this value...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; UTK: can you confirm/deny both of these values?  (I do not claim to
</span><br>
<span class="quotelev1">&gt; be a BLACS expert...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have successfully built the combination of OpenMPI 1.2.3, ATLAS,
</span><br>
<span class="quotelev2">&gt;&gt; BLACS, ScalaPack, and MUMPS using the Intel Fortran compiler on two
</span><br>
<span class="quotelev2">&gt;&gt; different Debian Linux systems (3.0r3 on AMD Opterons and 4.0r0 on
</span><br>
<span class="quotelev2">&gt;&gt; Intel Woodcrest/MacPro).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="3667.php">Jeff Squyres: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3672.php">Michael: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Reply:</strong> <a href="3672.php">Michael: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
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
