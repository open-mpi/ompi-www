<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 15:23:20 2016" -->
<!-- isoreceived="20160211202320" -->
<!-- sent="Thu, 11 Feb 2016 20:23:16 +0000 (UTC)" -->
<!-- isosent="20160211202316" -->
<!-- name="Peter Wind" -->
<!-- email="peter.wind_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="1236900970.387217.1455222196673.JavaMail.zimbra_at_met.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGKz=u+o0dJJC_d5t=vhO5swDNt_FhwH6fjRPrT+dJ2s04TZOg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-11 15:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28512.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28510.php">Rob Latham: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28508.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff, that was an interesting result. The pointers are here well defined, also for the zero size segment. 
<br>
However I can't reproduce your output. I still get null pointers (output below). 
<br>
(I tried both 1.8.5 and 1.10.2 versions) 
<br>
What could be the difference? 
<br>
<p>Peter 
<br>
<p>mpirun -np 4 a.out 
<br>
query: me=0, them=0, size=0, disp=1, base=(nil) 
<br>
query: me=0, them=1, size=4, disp=1, base=0x2aee280030d0 
<br>
query: me=0, them=2, size=4, disp=1, base=0x2aee280030d4 
<br>
query: me=0, them=3, size=4, disp=1, base=0x2aee280030d8 
<br>
query: me=0, them=PROC_NULL, size=4, disp=1, base=0x2aee280030d0 
<br>
query: me=1, them=0, size=0, disp=1, base=(nil) 
<br>
query: me=1, them=1, size=4, disp=1, base=0x2aabbb9ce0d0 
<br>
query: me=1, them=2, size=4, disp=1, base=0x2aabbb9ce0d4 
<br>
query: me=1, them=3, size=4, disp=1, base=0x2aabbb9ce0d8 
<br>
query: me=1, them=PROC_NULL, size=4, disp=1, base=0x2aabbb9ce0d0 
<br>
query: me=2, them=0, size=0, disp=1, base=(nil) 
<br>
query: me=2, them=1, size=4, disp=1, base=0x2b1579dd40d0 
<br>
query: me=2, them=2, size=4, disp=1, base=0x2b1579dd40d4 
<br>
query: me=2, them=3, size=4, disp=1, base=0x2b1579dd40d8 
<br>
query: me=2, them=PROC_NULL, size=4, disp=1, base=0x2b1579dd40d0 
<br>
query: me=3, them=0, size=0, disp=1, base=(nil) 
<br>
query: me=3, them=1, size=4, disp=1, base=0x2ac8d2c350d0 
<br>
query: me=3, them=2, size=4, disp=1, base=0x2ac8d2c350d4 
<br>
query: me=3, them=3, size=4, disp=1, base=0x2ac8d2c350d8 
<br>
query: me=3, them=PROC_NULL, size=4, disp=1, base=0x2ac8d2c350d0 
<br>
<p>----- Original Message -----
<br>
<p><span class="quotelev1">&gt; See attached. Output below. Note that the base you get for ranks 0 and 1 is
</span><br>
<span class="quotelev1">&gt; the same, so you need to use the fact that size=0 at rank=0 to know not to
</span><br>
<span class="quotelev1">&gt; dereference that pointer and expect to be writing into rank 0's memory,
</span><br>
<span class="quotelev1">&gt; since you will write into rank 1's.
</span><br>
<p><span class="quotelev1">&gt; I would probably add &quot;if (size==0) base=NULL;&quot; for good measure.
</span><br>
<p><span class="quotelev1">&gt; Jeff
</span><br>
<p><span class="quotelev1">&gt; $ mpirun -n 4 ./a.out
</span><br>
<p><span class="quotelev1">&gt; query: me=0, them=0, size=0, disp=1, base=0x10bd64000
</span><br>
<p><span class="quotelev1">&gt; query: me=0, them=1, size=4, disp=1, base=0x10bd64000
</span><br>
<p><span class="quotelev1">&gt; query: me=0, them=2, size=4, disp=1, base=0x10bd64004
</span><br>
<p><span class="quotelev1">&gt; query: me=0, them=3, size=4, disp=1, base=0x10bd64008
</span><br>
<p><span class="quotelev1">&gt; query: me=0, them=PROC_NULL, size=4, disp=1, base=0x10bd64000
</span><br>
<p><span class="quotelev1">&gt; query: me=1, them=0, size=0, disp=1, base=0x102d3b000
</span><br>
<p><span class="quotelev1">&gt; query: me=1, them=1, size=4, disp=1, base=0x102d3b000
</span><br>
<p><span class="quotelev1">&gt; query: me=1, them=2, size=4, disp=1, base=0x102d3b004
</span><br>
<p><span class="quotelev1">&gt; query: me=1, them=3, size=4, disp=1, base=0x102d3b008
</span><br>
<p><span class="quotelev1">&gt; query: me=1, them=PROC_NULL, size=4, disp=1, base=0x102d3b000
</span><br>
<p><span class="quotelev1">&gt; query: me=2, them=0, size=0, disp=1, base=0x10aac1000
</span><br>
<p><span class="quotelev1">&gt; query: me=2, them=1, size=4, disp=1, base=0x10aac1000
</span><br>
<p><span class="quotelev1">&gt; query: me=2, them=2, size=4, disp=1, base=0x10aac1004
</span><br>
<p><span class="quotelev1">&gt; query: me=2, them=3, size=4, disp=1, base=0x10aac1008
</span><br>
<p><span class="quotelev1">&gt; query: me=2, them=PROC_NULL, size=4, disp=1, base=0x10aac1000
</span><br>
<p><span class="quotelev1">&gt; query: me=3, them=0, size=0, disp=1, base=0x100fa2000
</span><br>
<p><span class="quotelev1">&gt; query: me=3, them=1, size=4, disp=1, base=0x100fa2000
</span><br>
<p><span class="quotelev1">&gt; query: me=3, them=2, size=4, disp=1, base=0x100fa2004
</span><br>
<p><span class="quotelev1">&gt; query: me=3, them=3, size=4, disp=1, base=0x100fa2008
</span><br>
<p><span class="quotelev1">&gt; query: me=3, them=PROC_NULL, size=4, disp=1, base=0x100fa2000
</span><br>
<p><span class="quotelev1">&gt; On Thu, Feb 11, 2016 at 8:55 AM, Jeff Hammond &lt; jeff.science_at_[hidden] &gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt; On Thu, Feb 11, 2016 at 8:46 AM, Nathan Hjelm &lt; hjelmn_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, Feb 11, 2016 at 02:17:40PM +0000, Peter Wind wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I would add that the present situation is bound to give problems for
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; some
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; It is natural to divide an array in segments, each process treating its
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; own segment, but needing to read adjacent segments too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Win_allocate_shared seems to be designed for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This will work fine as long as no segment as size zero. It can also be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; expected that most testing would be done with all segments larger than
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; zero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The document adding &quot;size = 0 is valid&quot;, would also make people
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; confident
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that it will be consistent for that special case too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nope, that statement says its ok for a rank to specify that the local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shared memory segment is 0 bytes. Nothing more. The standard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; unfortunately does not define what pointer value is returned for a rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that specifies size = 0. Not sure if the RMA working group intentionally
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; left that undefine... Anyway, Open MPI does not appear to be out of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compliance with the standard here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; MPI_Alloc_mem doesn't say what happens if you pass size=0 either. The RMA
</span><br>
<span class="quotelev2">&gt; &gt; working group intentionally tries to maintain consistency with the rest of
</span><br>
<span class="quotelev2">&gt; &gt; the MPI standard whenever possible, so we did not create a new semantic
</span><br>
<span class="quotelev2">&gt; &gt; here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; MPI_Win_shared_query text includes this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; &quot;If all processes in the group attached to the window specified size = 0,
</span><br>
<span class="quotelev2">&gt; &gt; then the call returns size = 0 and a baseptr as if MPI_ALLOC_MEM was called
</span><br>
<span class="quotelev2">&gt; &gt; with size = 0.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To be safe you should use MPI_Win_shared_query as suggested. You can
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pass MPI_PROC_NULL as the rank to get the pointer for the first non-zero
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sized segment in the shared memory window.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Indeed! I forgot about that. MPI_Win_shared_query solves this problem for
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; user brilliantly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Jeff
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
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28508.php">http://www.open-mpi.org/community/lists/users/2016/02/28508.php</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28512.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28510.php">Rob Latham: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28508.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28513.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
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
