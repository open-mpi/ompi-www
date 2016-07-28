<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 14:41:48 2007" -->
<!-- isoreceived="20070712184148" -->
<!-- sent="Thu, 12 Jul 2007 14:41:30 -0400" -->
<!-- isosent="20070712184130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?" -->
<!-- id="ABA4E685-480C-4FED-8490-7682914D619A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3FFFB316-0F3B-4BA6-BCB8-3A66E430F7F9_at_ieee.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 14:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3666.php">Michael: "[OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="3666.php">Michael: "[OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Reply:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2007, at 2:28 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; In the FAQ &lt;<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>&gt;, section
</span><br>
<span class="quotelev1">&gt; labeled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12. How do I build BLACS with Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; INTFACE = -Df77IsF2C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That INTFACE value is only for G77, G95, and related compilers.
</span><br>
<p><span class="quotelev1">&gt; For the Intel Fortran compiler it is: -DAdd_
</span><br>
<p>Really?  I always thought that this flag discussed how to convert F77  
<br>
MPI handles to C handles (some MPI implementations use integers for  
<br>
MPI handles in C, so there's no conversion necessary, but LAM and  
<br>
Open MPI use pointers, so using the MPI_*_f2c() functions are  
<br>
necessary).  Hence, it's not specific to a given fortran compiler.
<br>
<p>But I could be completely misunderstanding this value...
<br>
<p>UTK: can you confirm/deny both of these values?  (I do not claim to  
<br>
be a BLACS expert...)
<br>
<p><span class="quotelev1">&gt; I have successfully built the combination of OpenMPI 1.2.3, ATLAS,
</span><br>
<span class="quotelev1">&gt; BLACS, ScalaPack, and MUMPS using the Intel Fortran compiler on two
</span><br>
<span class="quotelev1">&gt; different Debian Linux systems (3.0r3 on AMD Opterons and 4.0r0 on
</span><br>
<span class="quotelev1">&gt; Intel Woodcrest/MacPro).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3666.php">Michael: "[OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="3666.php">Michael: "[OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Reply:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
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
