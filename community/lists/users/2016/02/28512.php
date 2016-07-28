<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 15:32:41 2016" -->
<!-- isoreceived="20160211203241" -->
<!-- sent="Thu, 11 Feb 2016 20:32:40 +0000 (UTC)" -->
<!-- isosent="20160211203240" -->
<!-- name="Peter Wind" -->
<!-- email="peter.wind_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="806829052.387653.1455222760238.JavaMail.zimbra_at_met.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20160211164601.GA27952_at_mordor.lanl.gov" -->
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
<strong>Date:</strong> 2016-02-11 15:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can be right semantically. But also the sentence &quot;the first address in the memory segment of process i is consecutive with the last address in the memory segment of process i - 1&quot; is not easy to interpret correctly for a zero size segment.
<br>
<p>There may be good reasons not to allocate the pointer for zero size segment. What I try to say is, that a new user reading the documentation, will not expect this behaviour before trying it out.
<br>
Couldn't a small sentence in the documentation, like &quot;the pointer should not be used for zero size segments&quot; clarify this?
<br>
<p>Peter
<br>
<p>----- Original Message -----
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 11, 2016 at 02:17:40PM +0000, Peter Wind wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    I would add that the present situation is bound to give problems for
</span><br>
<span class="quotelev2">&gt; &gt;    some
</span><br>
<span class="quotelev2">&gt; &gt;    users.
</span><br>
<span class="quotelev2">&gt; &gt;    It is natural to divide an array in segments, each process treating its
</span><br>
<span class="quotelev2">&gt; &gt;    own segment, but needing to read adjacent segments too.
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Win_allocate_shared seems to be designed for this.
</span><br>
<span class="quotelev2">&gt; &gt;    This will work fine as long as no segment as size zero. It can also be
</span><br>
<span class="quotelev2">&gt; &gt;    expected that most testing would be done with all segments larger than
</span><br>
<span class="quotelev2">&gt; &gt;    zero.
</span><br>
<span class="quotelev2">&gt; &gt;    The document adding &quot;size = 0 is valid&quot;, would also make people
</span><br>
<span class="quotelev2">&gt; &gt;    confident
</span><br>
<span class="quotelev2">&gt; &gt;    that it will be consistent for that special case too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nope, that statement says its ok for a rank to specify that the local
</span><br>
<span class="quotelev1">&gt; shared memory segment is 0 bytes. Nothing more. The standard
</span><br>
<span class="quotelev1">&gt; unfortunately does not define what pointer value is returned for a rank
</span><br>
<span class="quotelev1">&gt; that specifies size = 0. Not sure if the RMA working group intentionally
</span><br>
<span class="quotelev1">&gt; left that undefine... Anyway, Open MPI does not appear to be out of
</span><br>
<span class="quotelev1">&gt; compliance with the standard here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be safe you should use MPI_Win_shared_query as suggested. You can
</span><br>
<span class="quotelev1">&gt; pass MPI_PROC_NULL as the rank to get the pointer for the first non-zero
</span><br>
<span class="quotelev1">&gt; sized segment in the shared memory window.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; HPC-5, LANL
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28506.php">http://www.open-mpi.org/community/lists/users/2016/02/28506.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28506.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
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
