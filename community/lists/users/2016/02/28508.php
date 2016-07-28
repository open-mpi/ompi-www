<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 12:04:17 2016" -->
<!-- isoreceived="20160211170417" -->
<!-- sent="Thu, 11 Feb 2016 09:03:54 -0800" -->
<!-- isosent="20160211170354" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="CAGKz=u+o0dJJC_d5t=vhO5swDNt_FhwH6fjRPrT+dJ2s04TZOg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAGKz=uJyrSr1Dh7xZWtE=L44pT3Sx=GPzO67JR_WPDr-JV9z1A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-11 12:03:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28509.php">Rob Latham: "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See attached.  Output below.  Note that the base you get for ranks 0 and 1
<br>
is the same, so you need to use the fact that size=0 at rank=0 to know not
<br>
to dereference that pointer and expect to be writing into rank 0's memory,
<br>
since you will write into rank 1's.
<br>
<p>I would probably add &quot;if (size==0) base=NULL;&quot; for good measure.
<br>
<p>Jeff
<br>
<p>$ mpirun -n 4 ./a.out
<br>
<p>query: me=0, them=0, size=0, disp=1, base=0x10bd64000
<br>
<p>query: me=0, them=1, size=4, disp=1, base=0x10bd64000
<br>
<p>query: me=0, them=2, size=4, disp=1, base=0x10bd64004
<br>
<p>query: me=0, them=3, size=4, disp=1, base=0x10bd64008
<br>
<p>query: me=0, them=PROC_NULL, size=4, disp=1, base=0x10bd64000
<br>
<p>query: me=1, them=0, size=0, disp=1, base=0x102d3b000
<br>
<p>query: me=1, them=1, size=4, disp=1, base=0x102d3b000
<br>
<p>query: me=1, them=2, size=4, disp=1, base=0x102d3b004
<br>
<p>query: me=1, them=3, size=4, disp=1, base=0x102d3b008
<br>
<p>query: me=1, them=PROC_NULL, size=4, disp=1, base=0x102d3b000
<br>
<p>query: me=2, them=0, size=0, disp=1, base=0x10aac1000
<br>
<p>query: me=2, them=1, size=4, disp=1, base=0x10aac1000
<br>
<p>query: me=2, them=2, size=4, disp=1, base=0x10aac1004
<br>
<p>query: me=2, them=3, size=4, disp=1, base=0x10aac1008
<br>
<p>query: me=2, them=PROC_NULL, size=4, disp=1, base=0x10aac1000
<br>
<p>query: me=3, them=0, size=0, disp=1, base=0x100fa2000
<br>
<p>query: me=3, them=1, size=4, disp=1, base=0x100fa2000
<br>
<p>query: me=3, them=2, size=4, disp=1, base=0x100fa2004
<br>
<p>query: me=3, them=3, size=4, disp=1, base=0x100fa2008
<br>
<p>query: me=3, them=PROC_NULL, size=4, disp=1, base=0x100fa2000
<br>
<p>On Thu, Feb 11, 2016 at 8:55 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 11, 2016 at 8:46 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Feb 11, 2016 at 02:17:40PM +0000, Peter Wind wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    I would add that the present situation is bound to give problems
</span><br>
<span class="quotelev1">&gt; for some
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    users.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    It is natural to divide an array in segments, each process treating
</span><br>
<span class="quotelev1">&gt; its
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    own segment, but needing to read adjacent segments too.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    MPI_Win_allocate_shared seems to be designed for this.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    This will work fine as long as no segment as size zero. It can also
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    expected that most testing would be done with all segments larger
</span><br>
<span class="quotelev1">&gt; than
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    zero.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    The document adding &quot;size = 0 is valid&quot;, would also make people
</span><br>
<span class="quotelev1">&gt; confident
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    that it will be consistent for that special case too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nope, that statement says its ok for a rank to specify that the local
</span><br>
<span class="quotelev2">&gt; &gt; shared memory segment is 0 bytes. Nothing more. The standard
</span><br>
<span class="quotelev2">&gt; &gt; unfortunately does not define what pointer value is returned for a rank
</span><br>
<span class="quotelev2">&gt; &gt; that specifies size = 0. Not sure if the RMA working group intentionally
</span><br>
<span class="quotelev2">&gt; &gt; left that undefine... Anyway, Open MPI does not appear to be out of
</span><br>
<span class="quotelev2">&gt; &gt; compliance with the standard here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Alloc_mem doesn't say what happens if you pass size=0 either.  The RMA
</span><br>
<span class="quotelev1">&gt; working group intentionally tries to maintain consistency with the rest of
</span><br>
<span class="quotelev1">&gt; the MPI standard whenever possible, so we did not create a new semantic
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Win_shared_query text includes this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;If all processes in the group attached to the window specified size = 0,
</span><br>
<span class="quotelev1">&gt; then the call returns size = 0 and a baseptr as if MPI_ALLOC_MEM was called
</span><br>
<span class="quotelev1">&gt; with size = 0.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To be safe you should use MPI_Win_shared_query as suggested. You can
</span><br>
<span class="quotelev2">&gt; &gt; pass MPI_PROC_NULL as the rank to get the pointer for the first non-zero
</span><br>
<span class="quotelev2">&gt; &gt; sized segment in the shared memory window.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed!  I forgot about that.  MPI_Win_shared_query solves this problem
</span><br>
<span class="quotelev1">&gt; for the user brilliantly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
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
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28508/win_shared_query.c">win_shared_query.c</a>
</ul>
<!-- attachment="win_shared_query.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28509.php">Rob Latham: "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
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
