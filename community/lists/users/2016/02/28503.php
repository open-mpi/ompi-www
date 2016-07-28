<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 22:18:20 2016" -->
<!-- isoreceived="20160211031820" -->
<!-- sent="Thu, 11 Feb 2016 12:18:19 +0900" -->
<!-- isosent="20160211031819" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="CAAkFZ5trmxCY-L3Pyt-AiF9fP=qpG6g+3_N26+esi8pv4ywkaQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uJq_Svkfm5mdTntUZxLJsMpKoGnBQHUc6WjnOn4L_M+RA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 22:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28502.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28502.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Peter's point is that if
<br>
- the windows uses contiguous memory
<br>
*and*
<br>
- all tasks knows how much memory was allocated by all other tasks in the
<br>
window
<br>
then it could/should be possible to get rid of MPI_Win_shared_query
<br>
<p>that is likely true if no task allocates zero byte.
<br>
now, if a task allocates zero byte, MPI_Win_allocate_shared could return a
<br>
null pointer and hence makes MPI_Win_shared_query usage mandatory.
<br>
<p>in his example, task 0 allocates zero bytes, so he was expecting the
<br>
returned pointer on task zero points to the memory allocated by task 1.
<br>
<p>if &quot;may enable&quot; should be read as &quot;does enable&quot;, then returning a null
<br>
pointer can be seen as a bug.
<br>
if &quot;may enable&quot; can be read as &quot;does not always enable&quot;, the returning a
<br>
null pointer is compliant with the standard.
<br>
<p>I am clearly not good at reading/interpreting the standard, so using
<br>
MPI_Win_shared_query is my recommended way to get it work.
<br>
(feel free to call it &quot;bulletproof&quot;,  &quot;overkill&quot;, or even &quot;right&quot;)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, February 11, 2016, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 10, 2016 at 8:44 AM, Peter Wind &lt;peter.wind_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','peter.wind_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree that in practice the best practice would be to use
</span><br>
<span class="quotelev2">&gt;&gt; Win_shared_query.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Still I am confused by this part in the documentation:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;The allocated memory is contiguous across process ranks unless the info
</span><br>
<span class="quotelev2">&gt;&gt; key *alloc_shared_noncontig* is specified. Contiguous across process
</span><br>
<span class="quotelev2">&gt;&gt; ranks means that the first address in the memory segment of process i is
</span><br>
<span class="quotelev2">&gt;&gt; consecutive with the last address in the memory segment of process i - 1.
</span><br>
<span class="quotelev2">&gt;&gt; This may enable the user to calculate remote address offsets with local
</span><br>
<span class="quotelev2">&gt;&gt; information only.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Isn't this an encouragement to use the pointer of Win_allocate_shared
</span><br>
<span class="quotelev2">&gt;&gt; directly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; No, it is not.  Win_allocate_shared only gives you the pointer to the
</span><br>
<span class="quotelev1">&gt; portion of the allocation that is owned by the calling process.  If you
</span><br>
<span class="quotelev1">&gt; want to access the whole slab, call Win_shared_query(..,rank=0,..) and use
</span><br>
<span class="quotelev1">&gt; the resulting baseptr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attempted to modify your code to be more correct, but I don't know
</span><br>
<span class="quotelev1">&gt; enough Fortran to get it right.  If you can parse C examples, I'll provide
</span><br>
<span class="quotelev1">&gt; some of those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know about bulletproof, but Win_shared_query is the *only* valid
</span><br>
<span class="quotelev2">&gt;&gt; way to get the addresses of memory in other processes associated with a
</span><br>
<span class="quotelev2">&gt;&gt; window.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The default for Win_allocate_shared is contiguous memory, but it can and
</span><br>
<span class="quotelev2">&gt;&gt; likely will be mapped differently into each process, in which case only
</span><br>
<span class="quotelev2">&gt;&gt; relative offsets are transferrable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 10, 2016 at 4:19 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Peter,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bulletproof way is to use MPI_Win_shared_query after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Win_allocate_shared.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not know if current behavior is a bug or a feature...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wednesday, February 10, 2016, Peter Wind &lt;peter.wind_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','peter.wind_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Under fortran, MPI_Win_allocate_shared is called with a window size of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; zero for some processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The output pointer is then not valid for these processes (null pointer).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did I understood this wrongly? shouldn't the pointers be contiguous, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that for a zero sized window, the pointer should point to the start of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; segment of the next rank?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The documentation explicitly specifies &quot;size = 0 is valid&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attached a small code, where rank=0 allocate a window of size zero. All
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the other ranks get valid pointers, except rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Peter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28485.php">http://www.open-mpi.org/community/lists/users/2016/02/28485.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28493.php">http://www.open-mpi.org/community/lists/users/2016/02/28493.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28496.php">http://www.open-mpi.org/community/lists/users/2016/02/28496.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28497.php">http://www.open-mpi.org/community/lists/users/2016/02/28497.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28503/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28502.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28502.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
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
