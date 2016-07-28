<?
$subject_val = "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 14 14:52:02 2013" -->
<!-- isoreceived="20130314185202" -->
<!-- sent="Thu, 14 Mar 2013 19:52:03 +0100" -->
<!-- isosent="20130314185203" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?" -->
<!-- id="7B1FF5EB-02D2-4307-9AE4-A5B52D7680F5_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5141DA17.7010404_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2013-03-14 14:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Previous message:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Reply:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The short answer is yes. However, this answer is wrong in a heterogeneous environment. Suppose one rank is a 32 bits process, and the size_t is 4 bytes, while another one is 64 bits with a size_t of 8 bytes. If you correlate the sizeof(size_t) with the type you use for a communication, then one process will use MPI_UINT32_T while the other MPI_UINT64_t. Based on the typemap matching rules defined by MPI, there will be no automatic (MPI-based) conversion between these two types.
<br>
<p>I'm just pointing out that the portability in MPI is sometimes not as straightforward as one might assume.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Mar 14, 2013, at 15:09 , Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Many thanks, George!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I passed MPI_AINT to the MPI functions,
</span><br>
<span class="quotelev1">&gt; along with the ptrdiff_t buffers,
</span><br>
<span class="quotelev1">&gt; and it worked right, at least for the modest
</span><br>
<span class="quotelev1">&gt; buffer sizes I tried.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't got to size_t buffers yet, but if I understood right,
</span><br>
<span class="quotelev1">&gt; your suggestion for size_t buffers would be to
</span><br>
<span class="quotelev1">&gt; use MPI_UINT64_T as MPI data type on 64-bit machines, right?
</span><br>
<span class="quotelev1">&gt; [Probably MPI_UINT32_T on 32-bit, I presume.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/13/2013 07:42 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Aint is always signed, as it is supposed to be able to
</span><br>
<span class="quotelev1">&gt; hold any relative difference between two memory locations.
</span><br>
<span class="quotelev1">&gt; This it is a good match for ptrdiff_t.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is no direct match for size_t, at least not
</span><br>
<span class="quotelev1">&gt; directly exposed by the MPI standard
</span><br>
<span class="quotelev1">&gt; (using the MPI-2.2 POSIX types, e.g MPI_UINT64_T).
</span><br>
<span class="quotelev1">&gt; My understanding is that size_t is unsigned,
</span><br>
<span class="quotelev1">&gt; and ssize_t is the signed synonym.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 13, 2013, at 23:30 , Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI Pros
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which MPI data type corresponds to ptrdiff_t in C?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess the same question can be asked about size_t.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The FFTW3.3 MPI API has lots of stuff declared as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptrdiff_t, and I need to pass them around with MPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hopefully without size or sign mistakes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using Open MPI 1.6.3, if this matters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My C goes as far as ABC, and in my naive view
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptrdiff_t is signed and has 64-bits on my x86_64 Linux computer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whereas size_t is unsigned also 64-bits, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I grep mpi.h for ptrdiff I see that OPAL_PTRDIFF_TYPE is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint, which is indeed an MPI pointer/address type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, this is OPAL, not generic MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moreover, MPI_Aint seems to be unsigned, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [And this would make it a bad match for ptrdiff_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but maybe a good match for size_t.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is MPI_Aint signed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [grep result:]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 147:/* type to use for ptrdiff_t, if it does not exist, set to ptrdiff_t if it does exist */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 148:#define OPAL_PTRDIFF_TYPE ptrdiff_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 218:/* include for ptrdiff_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 317:typedef OPAL_PTRDIFF_TYPE MPI_Aint;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OTOH, there are bunches of signed and unsigned integer MPI types
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in mpi.h.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In a 64-bit machine, besides MPI_Aint,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess possible candidates would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INT64_T and MPI_UINT64_T.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But which one: signed or unsigned?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even if I write a little function to find an MPI integer type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the same extent as sizeof(ptrdiff_t), it may still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return more than one type, and be problematic to pick one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., signed or unsigned?).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Previous message:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Reply:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
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
