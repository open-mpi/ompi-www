<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 19:36:13 2016" -->
<!-- isoreceived="20160211003613" -->
<!-- sent="Wed, 10 Feb 2016 16:35:51 -0800" -->
<!-- isosent="20160211003551" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="CAGKz=uJq_Svkfm5mdTntUZxLJsMpKoGnBQHUc6WjnOn4L_M+RA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="797185639.227935.1455122674210.JavaMail.zimbra_at_met.no" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 19:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>In reply to:</strong> <a href="28497.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 10, 2016 at 8:44 AM, Peter Wind &lt;peter.wind_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I agree that in practice the best practice would be to use
</span><br>
<span class="quotelev1">&gt; Win_shared_query.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still I am confused by this part in the documentation:
</span><br>
<span class="quotelev1">&gt; &quot;The allocated memory is contiguous across process ranks unless the info
</span><br>
<span class="quotelev1">&gt; key *alloc_shared_noncontig* is specified. Contiguous across process
</span><br>
<span class="quotelev1">&gt; ranks means that the first address in the memory segment of process i is
</span><br>
<span class="quotelev1">&gt; consecutive with the last address in the memory segment of process i - 1.
</span><br>
<span class="quotelev1">&gt; This may enable the user to calculate remote address offsets with local
</span><br>
<span class="quotelev1">&gt; information only.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't this an encouragement to use the pointer of Win_allocate_shared
</span><br>
<span class="quotelev1">&gt; directly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
No, it is not.  Win_allocate_shared only gives you the pointer to the
<br>
portion of the allocation that is owned by the calling process.  If you
<br>
want to access the whole slab, call Win_shared_query(..,rank=0,..) and use
<br>
the resulting baseptr.
<br>
<p>I attempted to modify your code to be more correct, but I don't know enough
<br>
Fortran to get it right.  If you can parse C examples, I'll provide some of
<br>
those.
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know about bulletproof, but Win_shared_query is the *only* valid
</span><br>
<span class="quotelev1">&gt; way to get the addresses of memory in other processes associated with a
</span><br>
<span class="quotelev1">&gt; window.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The default for Win_allocate_shared is contiguous memory, but it can and
</span><br>
<span class="quotelev1">&gt; likely will be mapped differently into each process, in which case only
</span><br>
<span class="quotelev1">&gt; relative offsets are transferrable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 10, 2016 at 4:19 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The bulletproof way is to use MPI_Win_shared_query after
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_allocate_shared.
</span><br>
<span class="quotelev2">&gt;&gt; I do not know if current behavior is a bug or a feature...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday, February 10, 2016, Peter Wind &lt;peter.wind_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Under fortran, MPI_Win_allocate_shared is called with a window size of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zero for some processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output pointer is then not valid for these processes (null pointer).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did I understood this wrongly? shouldn't the pointers be contiguous, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that for a zero sized window, the pointer should point to the start of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segment of the next rank?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The documentation explicitly specifies &quot;size = 0 is valid&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached a small code, where rank=0 allocate a window of size zero. All
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the other ranks get valid pointers, except rank 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Peter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28485.php">http://www.open-mpi.org/community/lists/users/2016/02/28485.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28493.php">http://www.open-mpi.org/community/lists/users/2016/02/28493.php</a>
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
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28496.php">http://www.open-mpi.org/community/lists/users/2016/02/28496.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28497.php">http://www.open-mpi.org/community/lists/users/2016/02/28497.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28502/sharetest.f90">sharetest.f90</a>
</ul>
<!-- attachment="sharetest.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>In reply to:</strong> <a href="28497.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28503.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
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
