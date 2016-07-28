<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 04:29:32 2016" -->
<!-- isoreceived="20160211092932" -->
<!-- sent="Thu, 11 Feb 2016 09:29:29 +0000 (UTC)" -->
<!-- isosent="20160211092929" -->
<!-- name="Peter Wind" -->
<!-- email="peter.wind_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="2112552106.299195.1455182969057.JavaMail.zimbra_at_met.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5trmxCY-L3Pyt-AiF9fP=qpG6g+3_N26+esi8pv4ywkaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared memory zero size segment<br>
<strong>From:</strong> Peter Wind (<em>peter.wind_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 04:29:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that is what I meant. 
<br>
<p>Enclosed is a C example. 
<br>
The point is that the code would logically make sense for task 0, but since it asks for a segment of size=0, it only gets a null pointer, which cannot be used to access the shared parts. 
<br>
<p>Peter 
<br>
<p>----- Original Message -----
<br>
<p><span class="quotelev1">&gt; I think Peter's point is that if
</span><br>
<span class="quotelev1">&gt; - the windows uses contiguous memory
</span><br>
<span class="quotelev1">&gt; *and*
</span><br>
<span class="quotelev1">&gt; - all tasks knows how much memory was allocated by all other tasks in the
</span><br>
<span class="quotelev1">&gt; window
</span><br>
<span class="quotelev1">&gt; then it could/should be possible to get rid of MPI_Win_shared_query
</span><br>
<p><span class="quotelev1">&gt; that is likely true if no task allocates zero byte.
</span><br>
<span class="quotelev1">&gt; now, if a task allocates zero byte, MPI_Win_allocate_shared could return a
</span><br>
<span class="quotelev1">&gt; null pointer and hence makes MPI_Win_shared_query usage mandatory.
</span><br>
<p><span class="quotelev1">&gt; in his example, task 0 allocates zero bytes, so he was expecting the returned
</span><br>
<span class="quotelev1">&gt; pointer on task zero points to the memory allocated by task 1.
</span><br>
<p><span class="quotelev1">&gt; if &quot;may enable&quot; should be read as &quot;does enable&quot;, then returning a null
</span><br>
<span class="quotelev1">&gt; pointer can be seen as a bug.
</span><br>
<span class="quotelev1">&gt; if &quot;may enable&quot; can be read as &quot;does not always enable&quot;, the returning a null
</span><br>
<span class="quotelev1">&gt; pointer is compliant with the standard.
</span><br>
<p><span class="quotelev1">&gt; I am clearly not good at reading/interpreting the standard, so using
</span><br>
<span class="quotelev1">&gt; MPI_Win_shared_query is my recommended way to get it work.
</span><br>
<span class="quotelev1">&gt; (feel free to call it &quot;bulletproof&quot;, &quot;overkill&quot;, or even &quot;right&quot;)
</span><br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<p><span class="quotelev1">&gt; Gilles
</span><br>
<p><span class="quotelev1">&gt; On Thursday, February 11, 2016, Jeff Hammond &lt; jeff.science_at_[hidden] &gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt; On Wed, Feb 10, 2016 at 8:44 AM, Peter Wind &lt; peter.wind_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; I agree that in practice the best practice would be to use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Win_shared_query.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Still I am confused by this part in the documentation:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;The allocated memory is contiguous across process ranks unless the info
</span><br>
<span class="quotelev3">&gt; &gt; &gt; key
</span><br>
<span class="quotelev3">&gt; &gt; &gt; alloc_shared_noncontig is specified. Contiguous across process ranks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; means
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that the first address in the memory segment of process i is consecutive
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with the last address in the memory segment of process i - 1. This may
</span><br>
<span class="quotelev3">&gt; &gt; &gt; enable the user to calculate remote address offsets with local
</span><br>
<span class="quotelev3">&gt; &gt; &gt; information
</span><br>
<span class="quotelev3">&gt; &gt; &gt; only.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Isn't this an encouragement to use the pointer of Win_allocate_shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; directly?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; No, it is not. Win_allocate_shared only gives you the pointer to the
</span><br>
<span class="quotelev2">&gt; &gt; portion
</span><br>
<span class="quotelev2">&gt; &gt; of the allocation that is owned by the calling process. If you want to
</span><br>
<span class="quotelev2">&gt; &gt; access the whole slab, call Win_shared_query(..,rank=0,..) and use the
</span><br>
<span class="quotelev2">&gt; &gt; resulting baseptr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; I attempted to modify your code to be more correct, but I don't know enough
</span><br>
<span class="quotelev2">&gt; &gt; Fortran to get it right. If you can parse C examples, I'll provide some of
</span><br>
<span class="quotelev2">&gt; &gt; those.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Peter
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; I don't know about bulletproof, but Win_shared_query is the *only*
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; valid
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; way
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; to get the addresses of memory in other processes associated with a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; window.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; The default for Win_allocate_shared is contiguous memory, but it can
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; likely will be mapped differently into each process, in which case only
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; relative offsets are transferrable.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Jeff
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; On Wed, Feb 10, 2016 at 4:19 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; gilles.gouaillardet_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Peter,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The bulletproof way is to use MPI_Win_shared_query after
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Win_allocate_shared.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I do not know if current behavior is a bug or a feature...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Gilles
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Wednesday, February 10, 2016, Peter Wind &lt; peter.wind_at_[hidden] &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Under fortran, MPI_Win_allocate_shared is called with a window size
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; of
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; zero
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; for some processes.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The output pointer is then not valid for these processes (null
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; pointer).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Did I understood this wrongly? shouldn't the pointers be
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; contiguous,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; so
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; that
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; for a zero sized window, the pointer should point to the start of
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; segment of the next rank?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; The documentation explicitly specifies &quot;size = 0 is valid&quot;.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Attached a small code, where rank=0 allocate a window of size zero.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; All
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; other ranks get valid pointers, except rank 0.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Best regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Peter
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28485.php">http://www.open-mpi.org/community/lists/users/2016/02/28485.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28493.php">http://www.open-mpi.org/community/lists/users/2016/02/28493.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28496.php">http://www.open-mpi.org/community/lists/users/2016/02/28496.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28497.php">http://www.open-mpi.org/community/lists/users/2016/02/28497.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28503.php">http://www.open-mpi.org/community/lists/users/2016/02/28503.php</a>
</span><br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28504/shareC.c">shareC.c</a>
</ul>
<!-- attachment="shareC.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
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
