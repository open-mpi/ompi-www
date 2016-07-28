<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 09:17:44 2016" -->
<!-- isoreceived="20160211141744" -->
<!-- sent="Thu, 11 Feb 2016 14:17:40 +0000 (UTC)" -->
<!-- isosent="20160211141740" -->
<!-- name="Peter Wind" -->
<!-- email="peter.wind_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="1083313430.354599.1455200260945.JavaMail.zimbra_at_met.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2112552106.299195.1455182969057.JavaMail.zimbra_at_met.no" -->
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
<strong>Date:</strong> 2016-02-11 09:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would add that the present situation is bound to give problems for some users. 
<br>
<p>It is natural to divide an array in segments, each process treating its own segment, but needing to read adjacent segments too. 
<br>
MPI_Win_allocate_shared seems to be designed for this. 
<br>
This will work fine as long as no segment as size zero. It can also be expected that most testing would be done with all segments larger than zero. 
<br>
The document adding &quot;size = 0 is valid&quot;, would also make people confident that it will be consistent for that special case too. 
<br>
Then long down the road of the development of a particular code some special case will use a segment of size zero, and it will be hard to trace back this error to the mpi library. 
<br>
<p>Peter 
<br>
<p><p>----- Original Message -----
<br>
<p><p><p>Yes, that is what I meant. 
<br>
<p>Enclosed is a C example. 
<br>
The point is that the code would logically make sense for task 0, but since it asks for a segment of size=0, it only gets a null pointer, which cannot be used to access the shared parts. 
<br>
<p>Peter 
<br>
<p>----- Original Message -----
<br>
<p>&lt;blockquote&gt;
<br>
I think Peter's point is that if 
<br>
- the windows uses contiguous memory 
<br>
*and* 
<br>
- all tasks knows how much memory was allocated by all other tasks in the window 
<br>
then it could/should be possible to get rid of MPI_Win_shared_query 
<br>
<p>that is likely true if no task allocates zero byte. 
<br>
now, if a task allocates zero byte, MPI_Win_allocate_shared could return a null pointer and hence makes MPI_Win_shared_query usage mandatory. 
<br>
<p>in his example, task 0 allocates zero bytes, so he was expecting the returned pointer on task zero points to the memory allocated by task 1. 
<br>
<p>if &quot;may enable&quot; should be read as &quot;does enable&quot;, then returning a null pointer can be seen as a bug. 
<br>
if &quot;may enable&quot; can be read as &quot;does not always enable&quot;, the returning a null pointer is compliant with the standard. 
<br>
<p>I am clearly not good at reading/interpreting the standard, so using MPI_Win_shared_query is my recommended way to get it work. 
<br>
(feel free to call it &quot;bulletproof&quot;, &quot;overkill&quot;, or even &quot;right&quot;) 
<br>
<p>Cheers, 
<br>
<p>Gilles 
<br>
<p>On Thursday, February 11, 2016, Jeff Hammond &lt; jeff.science_at_[hidden] &gt; wrote: 
<br>
<p>&lt;blockquote&gt;
<br>
<p><p><p>On Wed, Feb 10, 2016 at 8:44 AM, Peter Wind &lt; peter.wind_at_[hidden] &gt; wrote: 
<br>
<p>&lt;blockquote&gt;
<br>
<p>I agree that in practice the best practice would be to use Win_shared_query. 
<br>
<p>Still I am confused by this part in the documentation: 
<br>
&quot;The allocated memory is contiguous across process ranks unless the info key alloc_shared_noncontig is specified. Contiguous across process ranks means that the first address in the memory segment of process i is consecutive with the last address in the memory segment of process i - 1. This may enable the user to calculate remote address offsets with local information only.&quot; 
<br>
<p>Isn't this an encouragement to use the pointer of Win_allocate_shared directly? 
<br>
<p><p><p><p><p>No, it is not. Win_allocate_shared only gives you the pointer to the portion of the allocation that is owned by the calling process. If you want to access the whole slab, call Win_shared_query(..,rank=0,..) and use the resulting baseptr. 
<br>
<p>I attempted to modify your code to be more correct, but I don't know enough Fortran to get it right. If you can parse C examples, I'll provide some of those. 
<br>
<p>Jeff 
<br>
<p>&lt;blockquote&gt;
<br>
<p><p>Peter 
<br>
<p><p><p>&lt;blockquote&gt;
<br>
<p>I don't know about bulletproof, but Win_shared_query is the *only* valid way to get the addresses of memory in other processes associated with a window. 
<br>
<p>The default for Win_allocate_shared is contiguous memory, but it can and likely will be mapped differently into each process, in which case only relative offsets are transferrable. 
<br>
<p>Jeff 
<br>
<p>On Wed, Feb 10, 2016 at 4:19 AM, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden] &gt; wrote: 
<br>
<p>&lt;blockquote&gt;
<br>
Peter, 
<br>
<p>The bulletproof way is to use MPI_Win_shared_query after MPI_Win_allocate_shared. 
<br>
I do not know if current behavior is a bug or a feature... 
<br>
<p>Cheers, 
<br>
<p>Gilles 
<br>
<p><p>On Wednesday, February 10, 2016, Peter Wind &lt; peter.wind_at_[hidden] &gt; wrote: 
<br>
<p>&lt;blockquote&gt;
<br>
Hi, 
<br>
<p>Under fortran, MPI_Win_allocate_shared is called with a window size of zero for some processes. 
<br>
The output pointer is then not valid for these processes (null pointer). 
<br>
Did I understood this wrongly? shouldn't the pointers be contiguous, so that for a zero sized window, the pointer should point to the start of the segment of the next rank? 
<br>
The documentation explicitly specifies &quot;size = 0 is valid&quot;. 
<br>
<p>Attached a small code, where rank=0 allocate a window of size zero. All the other ranks get valid pointers, except rank 0. 
<br>
<p>Best regards, 
<br>
Peter 
<br>
_______________________________________________ 
<br>
users mailing list 
<br>
users_at_[hidden] 
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28485.php">http://www.open-mpi.org/community/lists/users/2016/02/28485.php</a> 
<br>
<p>&lt;/blockquote&gt;
<br>
<p><p>_______________________________________________ 
<br>
users mailing list 
<br>
users_at_[hidden] 
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28493.php">http://www.open-mpi.org/community/lists/users/2016/02/28493.php</a> 
<br>
<p>&lt;/blockquote&gt;
<br>
<p><p><p><p><pre>
-- 
Jeff Hammond 
jeff.science_at_[hidden] 
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> 
_______________________________________________ 
users mailing list 
users_at_[hidden] 
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28496.php">http://www.open-mpi.org/community/lists/users/2016/02/28496.php</a> 
&lt;/blockquote&gt;
_______________________________________________ 
users mailing list 
users_at_[hidden] 
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28497.php">http://www.open-mpi.org/community/lists/users/2016/02/28497.php</a> 
&lt;/blockquote&gt;
-- 
Jeff Hammond 
jeff.science_at_[hidden] 
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> 
&lt;/blockquote&gt;
_______________________________________________ 
users mailing list 
users_at_[hidden] 
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28503.php">http://www.open-mpi.org/community/lists/users/2016/02/28503.php</a> 
&lt;/blockquote&gt;
_______________________________________________ 
users mailing list 
users_at_[hidden] 
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28504.php">http://www.open-mpi.org/community/lists/users/2016/02/28504.php</a> 
&lt;/blockquote&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28504.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
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
