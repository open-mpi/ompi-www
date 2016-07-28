<?
$subject_val = "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 14 15:02:45 2013" -->
<!-- isoreceived="20130314190245" -->
<!-- sent="Thu, 14 Mar 2013 15:02:41 -0400" -->
<!-- isosent="20130314190241" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?" -->
<!-- id="51421ED1.2070609_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7B1FF5EB-02D2-4307-9AE4-A5B52D7680F5_at_icl.utk.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-14 15:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21543.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21543.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>I see the problem you pointed out, on binding the MPI types
<br>
to the specific (pointer) sizes in a heterogeneous environment.
<br>
However, I would MPI_Aint would be in trouble in heterogeneous
<br>
environments as well?
<br>
I mean, can we safely pass MPI_AINT back
<br>
and forth across 32-bit and 64-bit machines?
<br>
[I would guess not, one side would be chopped off anyway, right?]
<br>
<p>No, no, I am not assuming that portability is any easy.
<br>
We try to make things portable as possible, a 'best effort' thing,
<br>
within reasonable limits.
<br>
I am glad all machines I am using now are 64-bit. :)
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>On 03/14/2013 02:52 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The short answer is yes.
</span><br>
However, this answer is wrong in a heterogeneous environment.
<br>
Suppose one rank is a 32 bits process, and the size_t is 4 bytes,
<br>
while another one is 64 bits with a size_t of 8 bytes.
<br>
If you correlate the sizeof(size_t) with the type you
<br>
use for a communication, then one process will use
<br>
MPI_UINT32_T while the other MPI_UINT64_t.
<br>
Based on the typemap matching rules defined by MPI,
<br>
there will be no automatic (MPI-based) conversion
<br>
between these two types.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm just pointing out that the portability in MPI
</span><br>
is sometimes not as straightforward as one might assume.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 14, 2013, at 15:09 , Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks, George!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I passed MPI_AINT to the MPI functions,
</span><br>
<span class="quotelev2">&gt;&gt; along with the ptrdiff_t buffers,
</span><br>
<span class="quotelev2">&gt;&gt; and it worked right, at least for the modest
</span><br>
<span class="quotelev2">&gt;&gt; buffer sizes I tried.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't got to size_t buffers yet, but if I understood right,
</span><br>
<span class="quotelev2">&gt;&gt; your suggestion for size_t buffers would be to
</span><br>
<span class="quotelev2">&gt;&gt; use MPI_UINT64_T as MPI data type on 64-bit machines, right?
</span><br>
<span class="quotelev2">&gt;&gt; [Probably MPI_UINT32_T on 32-bit, I presume.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/13/2013 07:42 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint is always signed, as it is supposed to be able to
</span><br>
<span class="quotelev2">&gt;&gt; hold any relative difference between two memory locations.
</span><br>
<span class="quotelev2">&gt;&gt; This it is a good match for ptrdiff_t.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no direct match for size_t, at least not
</span><br>
<span class="quotelev2">&gt;&gt; directly exposed by the MPI standard
</span><br>
<span class="quotelev2">&gt;&gt; (using the MPI-2.2 POSIX types, e.g MPI_UINT64_T).
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is that size_t is unsigned,
</span><br>
<span class="quotelev2">&gt;&gt; and ssize_t is the signed synonym.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 13, 2013, at 23:30 , Gus Correa&lt;gus_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Open MPI Pros
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which MPI data type corresponds to ptrdiff_t in C?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess the same question can be asked about size_t.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The FFTW3.3 MPI API has lots of stuff declared as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ptrdiff_t, and I need to pass them around with MPI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hopefully without size or sign mistakes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using Open MPI 1.6.3, if this matters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My C goes as far as ABC, and in my naive view
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ptrdiff_t is signed and has 64-bits on my x86_64 Linux computer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whereas size_t is unsigned also 64-bits, right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I grep mpi.h for ptrdiff I see that OPAL_PTRDIFF_TYPE is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Aint, which is indeed an MPI pointer/address type.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, this is OPAL, not generic MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Moreover, MPI_Aint seems to be unsigned, right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [And this would make it a bad match for ptrdiff_t,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but maybe a good match for size_t.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or is MPI_Aint signed?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grep result:]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 147:/* type to use for ptrdiff_t, if it does not exist, set to ptrdiff_t if it does exist */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 148:#define OPAL_PTRDIFF_TYPE ptrdiff_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 218:/* include for ptrdiff_t */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 317:typedef OPAL_PTRDIFF_TYPE MPI_Aint;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OTOH, there are bunches of signed and unsigned integer MPI types
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in mpi.h.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In a 64-bit machine, besides MPI_Aint,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess possible candidates would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_INT64_T and MPI_UINT64_T.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But which one: signed or unsigned?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Even if I write a little function to find an MPI integer type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the same extent as sizeof(ptrdiff_t), it may still
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; return more than one type, and be problematic to pick one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., signed or unsigned?).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21543.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21543.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
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
