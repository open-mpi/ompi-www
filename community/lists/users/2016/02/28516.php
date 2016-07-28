<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 22:15:26 2016" -->
<!-- isoreceived="20160212031526" -->
<!-- sent="Thu, 11 Feb 2016 19:15:24 -0800" -->
<!-- isosent="20160212031524" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="CAGKz=uLQsEDi=1yXhsQrCuTSKqRFHCmycdG3+sHbH-wBM3DRMA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160211203528.GD27952_at_mordor.lanl.gov" -->
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
<strong>Date:</strong> 2016-02-11 22:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28517.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28515.php">Stephen Guzik: "[OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>In reply to:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28512.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, I ran with MPICH. But I like OpenMPI's choice better here, which is
<br>
why I said that I would explicitly set the pointer to bull when size is
<br>
zero.
<br>
<p>Jeff
<br>
<p>On Thursday, February 11, 2016, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff probably ran with MPICH. Open MPI's are consistent with our choice
</span><br>
<span class="quotelev1">&gt; of definition for size=0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; query: me=1, them=0, size=0, disp=1, base=0x0
</span><br>
<span class="quotelev1">&gt; query: me=1, them=1, size=4, disp=1, base=0x1097e30f8
</span><br>
<span class="quotelev1">&gt; query: me=1, them=2, size=4, disp=1, base=0x1097e30fc
</span><br>
<span class="quotelev1">&gt; query: me=1, them=3, size=4, disp=1, base=0x1097e3100
</span><br>
<span class="quotelev1">&gt; query: me=2, them=0, size=0, disp=1, base=0x0
</span><br>
<span class="quotelev1">&gt; query: me=2, them=1, size=4, disp=1, base=0x109fe10f8
</span><br>
<span class="quotelev1">&gt; query: me=2, them=2, size=4, disp=1, base=0x109fe10fc
</span><br>
<span class="quotelev1">&gt; query: me=2, them=3, size=4, disp=1, base=0x109fe1100
</span><br>
<span class="quotelev1">&gt; query: me=2, them=PROC_NULL, size=4, disp=1, base=0x109fe10f8
</span><br>
<span class="quotelev1">&gt; query: me=3, them=0, size=0, disp=1, base=0x0
</span><br>
<span class="quotelev1">&gt; query: me=3, them=1, size=4, disp=1, base=0x1088f30f8
</span><br>
<span class="quotelev1">&gt; query: me=3, them=2, size=4, disp=1, base=0x1088f30fc
</span><br>
<span class="quotelev1">&gt; query: me=3, them=3, size=4, disp=1, base=0x1088f3100
</span><br>
<span class="quotelev1">&gt; query: me=3, them=PROC_NULL, size=4, disp=1, base=0x1088f30f8
</span><br>
<span class="quotelev1">&gt; query: me=0, them=0, size=0, disp=1, base=0x0
</span><br>
<span class="quotelev1">&gt; query: me=0, them=1, size=4, disp=1, base=0x105b890f8
</span><br>
<span class="quotelev1">&gt; query: me=0, them=2, size=4, disp=1, base=0x105b890fc
</span><br>
<span class="quotelev1">&gt; query: me=0, them=3, size=4, disp=1, base=0x105b89100
</span><br>
<span class="quotelev1">&gt; query: me=0, them=PROC_NULL, size=4, disp=1, base=0x105b890f8
</span><br>
<span class="quotelev1">&gt; query: me=1, them=PROC_NULL, size=4, disp=1, base=0x1097e30f8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be portable only use MPI_Win_shared_query and do not rely on the
</span><br>
<span class="quotelev1">&gt; return value of base if you pass size = 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 11, 2016 at 08:23:16PM +0000, Peter Wind wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks Jeff, that was an interesting result. The pointers are here
</span><br>
<span class="quotelev1">&gt; well
</span><br>
<span class="quotelev2">&gt; &gt;    defined, also for the zero size segment.
</span><br>
<span class="quotelev2">&gt; &gt;    However I can't reproduce your output. I still get null pointers
</span><br>
<span class="quotelev1">&gt; (output
</span><br>
<span class="quotelev2">&gt; &gt;    below).
</span><br>
<span class="quotelev2">&gt; &gt;    (I tried both 1.8.5 and 1.10.2 versions)
</span><br>
<span class="quotelev2">&gt; &gt;    What could be the difference?
</span><br>
<span class="quotelev2">&gt; &gt;    Peter
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=0, them=0, size=0, disp=1, base=(nil)
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=0, them=1, size=4, disp=1, base=0x2aee280030d0
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=0, them=2, size=4, disp=1, base=0x2aee280030d4
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=0, them=3, size=4, disp=1, base=0x2aee280030d8
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=0, them=PROC_NULL, size=4, disp=1, base=0x2aee280030d0
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=1, them=0, size=0, disp=1, base=(nil)
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=1, them=1, size=4, disp=1, base=0x2aabbb9ce0d0
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=1, them=2, size=4, disp=1, base=0x2aabbb9ce0d4
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=1, them=3, size=4, disp=1, base=0x2aabbb9ce0d8
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=1, them=PROC_NULL, size=4, disp=1, base=0x2aabbb9ce0d0
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=2, them=0, size=0, disp=1, base=(nil)
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=2, them=1, size=4, disp=1, base=0x2b1579dd40d0
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=2, them=2, size=4, disp=1, base=0x2b1579dd40d4
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=2, them=3, size=4, disp=1, base=0x2b1579dd40d8
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=2, them=PROC_NULL, size=4, disp=1, base=0x2b1579dd40d0
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=3, them=0, size=0, disp=1, base=(nil)
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=3, them=1, size=4, disp=1, base=0x2ac8d2c350d0
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=3, them=2, size=4, disp=1, base=0x2ac8d2c350d4
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=3, them=3, size=4, disp=1, base=0x2ac8d2c350d8
</span><br>
<span class="quotelev2">&gt; &gt;    query: me=3, them=PROC_NULL, size=4, disp=1, base=0x2ac8d2c350d0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      See attached.  Output below.  Note that the base you get for ranks
</span><br>
<span class="quotelev1">&gt; 0 and
</span><br>
<span class="quotelev2">&gt; &gt;      1 is the same, so you need to use the fact that size=0 at rank=0 to
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev2">&gt; &gt;      not to dereference that pointer and expect to be writing into rank
</span><br>
<span class="quotelev1">&gt; 0's
</span><br>
<span class="quotelev2">&gt; &gt;      memory, since you will write into rank 1's.
</span><br>
<span class="quotelev2">&gt; &gt;      I would probably add &quot;if (size==0) base=NULL;&quot; for good measure.
</span><br>
<span class="quotelev2">&gt; &gt;      Jeff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      $ mpirun -n 4 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=0, them=0, size=0, disp=1, base=0x10bd64000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=0, them=1, size=4, disp=1, base=0x10bd64000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=0, them=2, size=4, disp=1, base=0x10bd64004
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=0, them=3, size=4, disp=1, base=0x10bd64008
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=0, them=PROC_NULL, size=4, disp=1, base=0x10bd64000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=1, them=0, size=0, disp=1, base=0x102d3b000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=1, them=1, size=4, disp=1, base=0x102d3b000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=1, them=2, size=4, disp=1, base=0x102d3b004
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=1, them=3, size=4, disp=1, base=0x102d3b008
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=1, them=PROC_NULL, size=4, disp=1, base=0x102d3b000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=2, them=0, size=0, disp=1, base=0x10aac1000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=2, them=1, size=4, disp=1, base=0x10aac1000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=2, them=2, size=4, disp=1, base=0x10aac1004
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=2, them=3, size=4, disp=1, base=0x10aac1008
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=2, them=PROC_NULL, size=4, disp=1, base=0x10aac1000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=3, them=0, size=0, disp=1, base=0x100fa2000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=3, them=1, size=4, disp=1, base=0x100fa2000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=3, them=2, size=4, disp=1, base=0x100fa2004
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=3, them=3, size=4, disp=1, base=0x100fa2008
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      query: me=3, them=PROC_NULL, size=4, disp=1, base=0x100fa2000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      On Thu, Feb 11, 2016 at 8:55 AM, Jeff Hammond &lt;
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        On Thu, Feb 11, 2016 at 8:46 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; On Thu, Feb 11, 2016 at 02:17:40PM +0000, Peter Wind wrote:
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    I would add that the present situation is bound to give
</span><br>
<span class="quotelev2">&gt; &gt;        problems for some
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    users.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    It is natural to divide an array in segments, each process
</span><br>
<span class="quotelev2">&gt; &gt;        treating its
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    own segment, but needing to read adjacent segments too.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    MPI_Win_allocate_shared seems to be designed for this.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    This will work fine as long as no segment as size zero. It
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev2">&gt; &gt;        also be
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    expected that most testing would be done with all segments
</span><br>
<span class="quotelev2">&gt; &gt;        larger than
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    zero.
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    The document adding &quot;size = 0 is valid&quot;, would also make
</span><br>
<span class="quotelev1">&gt; people
</span><br>
<span class="quotelev2">&gt; &gt;        confident
</span><br>
<span class="quotelev4">&gt; &gt;        &gt; &gt;    that it will be consistent for that special case too.
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; Nope, that statement says its ok for a rank to specify that the
</span><br>
<span class="quotelev2">&gt; &gt;        local
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; shared memory segment is 0 bytes. Nothing more. The standard
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; unfortunately does not define what pointer value is returned
</span><br>
<span class="quotelev1">&gt; for a
</span><br>
<span class="quotelev2">&gt; &gt;        rank
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; that specifies size = 0. Not sure if the RMA working group
</span><br>
<span class="quotelev2">&gt; &gt;        intentionally
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; left that undefine... Anyway, Open MPI does not appear to be
</span><br>
<span class="quotelev1">&gt; out of
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; compliance with the standard here.
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Alloc_mem doesn't say what happens if you pass size=0
</span><br>
<span class="quotelev1">&gt; either.  The
</span><br>
<span class="quotelev2">&gt; &gt;        RMA working group intentionally tries to maintain consistency
</span><br>
<span class="quotelev1">&gt; with the
</span><br>
<span class="quotelev2">&gt; &gt;        rest of the MPI standard whenever possible, so we did not create
</span><br>
<span class="quotelev1">&gt; a new
</span><br>
<span class="quotelev2">&gt; &gt;        semantic here.
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Win_shared_query text includes this:
</span><br>
<span class="quotelev2">&gt; &gt;        &quot;If all processes in the group attached to the window specified
</span><br>
<span class="quotelev1">&gt; size =
</span><br>
<span class="quotelev2">&gt; &gt;        0, then the call returns size = 0 and a baseptr as if
</span><br>
<span class="quotelev1">&gt; MPI_ALLOC_MEM
</span><br>
<span class="quotelev2">&gt; &gt;        was called with size = 0.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; To be safe you should use MPI_Win_shared_query as suggested.
</span><br>
<span class="quotelev1">&gt; You can
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; pass MPI_PROC_NULL as the rank to get the pointer for the first
</span><br>
<span class="quotelev2">&gt; &gt;        non-zero
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; sized segment in the shared memory window.
</span><br>
<span class="quotelev2">&gt; &gt;        Indeed!  I forgot about that.  MPI_Win_shared_query solves this
</span><br>
<span class="quotelev2">&gt; &gt;        problem for the user brilliantly.
</span><br>
<span class="quotelev2">&gt; &gt;        Jeff
</span><br>
<span class="quotelev2">&gt; &gt;        --
</span><br>
<span class="quotelev2">&gt; &gt;        Jeff Hammond
</span><br>
<span class="quotelev2">&gt; &gt;        jeff.science_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Jeff Hammond
</span><br>
<span class="quotelev2">&gt; &gt;      jeff.science_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/users/2016/02/28508.php">http://www.open-mpi.org/community/lists/users/2016/02/28508.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28511.php">http://www.open-mpi.org/community/lists/users/2016/02/28511.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28516/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28517.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28515.php">Stephen Guzik: "[OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>In reply to:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28512.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
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
