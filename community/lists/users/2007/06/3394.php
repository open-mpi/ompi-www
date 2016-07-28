<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 08:19:03 2007" -->
<!-- isoreceived="20070607121903" -->
<!-- sent="Thu, 7 Jun 2007 08:18:39 -0400" -->
<!-- isosent="20070607121839" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi with ifort in debug..trouble" -->
<!-- id="31D0A244-B5B9-4600-BD53-6F06A7272C32_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18b769180706060917v3689376atf6de68b93cbc84fe_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-06-07 08:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3383.php">Srinath Vadlamani: "[OMPI users] open-mpi with ifort in debug..trouble"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you be a bit more descriptive?  What is the exact compilation  
<br>
output (including the error)?  And what exactly do you mean by &quot;debug  
<br>
mode&quot; -- compiling Open MPI with and without -g?  Please see http:// 
<br>
www.open-mpi.org/community/help/.
<br>
<p>FWIW, I do not see the symbol &quot;output_local_symbols&quot; in the Open MPI  
<br>
source code anywhere...
<br>
<p><p>On Jun 6, 2007, at 12:17 PM, Srinath Vadlamani wrote:
<br>
<p><span class="quotelev1">&gt; So I have been trying to build multiple applications with an ifort 
</span><br>
<span class="quotelev1">&gt; +gcc implementation of Open-MPI.  I wanted to build them in debug  
</span><br>
<span class="quotelev1">&gt; mode.  This is on a Macbook Pro
</span><br>
<span class="quotelev1">&gt; System Version:    Mac OS X 10.4.9 (8P2137)
</span><br>
<span class="quotelev1">&gt;   Kernel Version:    Darwin 8.9.1
</span><br>
<span class="quotelev1">&gt;   gcc :gcc version 4.0.1
</span><br>
<span class="quotelev1">&gt;   ifort: 10.0.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried building PETSc from <a href="ftp://ftp.mcs.anl.gov/pub/petsc/">ftp://ftp.mcs.anl.gov/pub/petsc/</a> 
</span><br>
<span class="quotelev1">&gt; release-snapshots/petsc-lite-2.3.3-p1.tar.gz
</span><br>
<span class="quotelev1">&gt; in debug mode and the error on gets in building fortran examples is:
</span><br>
<span class="quotelev1">&gt; ld: internal error: output_local_symbols () inconsistent local  
</span><br>
<span class="quotelev1">&gt; symbol count
</span><br>
<span class="quotelev1">&gt; This does not happen when *not* in debug mode.
</span><br>
<span class="quotelev1">&gt; This is the same error we get with the same build parameters of one  
</span><br>
<span class="quotelev1">&gt; of our Fortran scientific codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error does *not* occur when using mpich2-1.0.5p4.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3383.php">Srinath Vadlamani: "[OMPI users] open-mpi with ifort in debug..trouble"</a>
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
