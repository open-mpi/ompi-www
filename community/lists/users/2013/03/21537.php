<?
$subject_val = "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 19:42:21 2013" -->
<!-- isoreceived="20130313234221" -->
<!-- sent="Thu, 14 Mar 2013 00:42:19 +0100" -->
<!-- isosent="20130313234219" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?" -->
<!-- id="41447775-AE24-4198-A20C-C69C449B22CD_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5140FE13.20303_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 19:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21536.php">Gus Correa: "[OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21536.php">Gus Correa: "[OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Reply:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Aint is always signed, as it is supposed to be able to hold any relative difference between two memory locations. This it is a good match for ptrdiff_t.
<br>
<p>There is no direct match for size_t, at least not directly exposed by the MPI standard (using the MPI-2.2 POSIX types, e.g MPI_UINT64_T). My understanding is that size_t is unsigned, and ssize_t is the signed synonym.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Mar 13, 2013, at 23:30 , Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI Pros
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which MPI data type corresponds to ptrdiff_t in C?
</span><br>
<span class="quotelev1">&gt; I guess the same question can be asked about size_t.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The FFTW3.3 MPI API has lots of stuff declared as
</span><br>
<span class="quotelev1">&gt; ptrdiff_t, and I need to pass them around with MPI,
</span><br>
<span class="quotelev1">&gt; hopefully without size or sign mistakes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.6.3, if this matters.
</span><br>
<span class="quotelev1">&gt; My C goes as far as ABC, and in my naive view
</span><br>
<span class="quotelev1">&gt; ptrdiff_t is signed and has 64-bits on my x86_64 Linux computer,
</span><br>
<span class="quotelev1">&gt; whereas size_t is unsigned also 64-bits, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I grep mpi.h for ptrdiff I see that OPAL_PTRDIFF_TYPE is
</span><br>
<span class="quotelev1">&gt; MPI_Aint, which is indeed an MPI pointer/address type.
</span><br>
<span class="quotelev1">&gt; However, this is OPAL, not generic MPI.
</span><br>
<span class="quotelev1">&gt; Moreover, MPI_Aint seems to be unsigned, right?
</span><br>
<span class="quotelev1">&gt; [And this would make it a bad match for ptrdiff_t,
</span><br>
<span class="quotelev1">&gt; but maybe a good match for size_t.]
</span><br>
<span class="quotelev1">&gt; Or is MPI_Aint signed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [grep result:]
</span><br>
<span class="quotelev1">&gt; 147:/* type to use for ptrdiff_t, if it does not exist, set to ptrdiff_t if it does exist */
</span><br>
<span class="quotelev1">&gt; 148:#define OPAL_PTRDIFF_TYPE ptrdiff_t
</span><br>
<span class="quotelev1">&gt; 218:/* include for ptrdiff_t */
</span><br>
<span class="quotelev1">&gt; 317:typedef OPAL_PTRDIFF_TYPE MPI_Aint;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OTOH, there are bunches of signed and unsigned integer MPI types
</span><br>
<span class="quotelev1">&gt; in mpi.h.
</span><br>
<span class="quotelev1">&gt; In a 64-bit machine, besides MPI_Aint,
</span><br>
<span class="quotelev1">&gt; I guess possible candidates would be
</span><br>
<span class="quotelev1">&gt; MPI_INT64_T and MPI_UINT64_T.
</span><br>
<span class="quotelev1">&gt; But which one: signed or unsigned?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even if I write a little function to find an MPI integer type
</span><br>
<span class="quotelev1">&gt; with the same extent as sizeof(ptrdiff_t), it may still
</span><br>
<span class="quotelev1">&gt; return more than one type, and be problematic to pick one
</span><br>
<span class="quotelev1">&gt; (e.g., signed or unsigned?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21536.php">Gus Correa: "[OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21536.php">Gus Correa: "[OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Reply:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
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
