<?
$subject_val = "[OMPI users] Hair depleting issue with Ompi143 and one program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 18:07:18 2011" -->
<!-- isoreceived="20110120230718" -->
<!-- sent="Thu, 20 Jan 2011 15:07:03 -0800" -->
<!-- isosent="20110120230703" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="[OMPI users] Hair depleting issue with Ompi143 and one program" -->
<!-- id="E1Pg3ap-0003aE-VV_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Hair depleting issue with Ompi143 and one program<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 18:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Previous message:</strong> <a href="15384.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Maybe reply:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Reply:</strong> <a href="15387.php">Dave Goodell: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Maybe reply:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been working on slightly modifying a software package by Sean
<br>
Eddy called Hmmer 3.  The hardware acceleration was originally SSE2 but
<br>
since most of our compute nodes only have SSE1 and MMX I rewrote a few
<br>
small sections to just use those instructions.  (And yes, as far as I
<br>
can tell it invokes emms before any floating point operations are run
<br>
after each MMX usage.)   On top of that each binary has 3 options for
<br>
running the programs: single threaded, threaded, or MPI (using 
<br>
Ompi143).  For all other programs in this package everything works
<br>
everywhere.  For one called &quot;jackhmmer&quot; this table results (+=runs
<br>
correctly, - = problems), where the exact same problem is run in each
<br>
test (theoretically exercising exactly the same routines, just under
<br>
different threading control):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSE2   SSE1 
<br>
Single      +      +
<br>
Threaded    +      +
<br>
Ompi143     +      -
<br>
<p>The negative result for the SSE/Ompi143 combination happens whether the
<br>
worker nodes are Athlon MP (SSE1 only) or Athlon64.  The test machine
<br>
for the single and threaded runs is a two CPU Opteron 280 (4 cores
<br>
total).  Ompi143 is 32 bit everywhere (local copies though).  There have
<br>
been no modifications whatsoever made to the main jackhmmer.c file,
<br>
which is where the various run methods are implemented.
<br>
<p>Now if there was some intrinsic problem with my SSE1 code it should
<br>
presumably manifest in both the Single and Threaded versions as well
<br>
(the thread control is different, but they all feed through the same
<br>
underlying functions), or in one of the other programs, which isn't
<br>
seen.  Running under valgrind using Single or Threaded produces no
<br>
warnings.  Using mpirun with valgrind on the SSE2 produces 3: two
<br>
related to OMPI itself which are seen in every OMPI program run in
<br>
valgrind, and one caused by an MPIsend operation where the buffer
<br>
contains some uninitialized data (this is nothing toxic, just bytes in
<br>
fixed length fields which which were never set because a shorter string
<br>
is stored there). 
<br>
<p>==19802== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==19802==    at 0x4C77AC1: writev (in /lib/libc-2.10.1.so)
<br>
==19802==    by 0x8A069B5: mca_btl_tcp_frag_send (in
<br>
/opt/ompi143.X32/lib/openmpi/mca_btl_tcp.so)
<br>
==19802==    by 0x8A0626E: mca_btl_tcp_endpoint_send (in
<br>
/opt/ompi143.X32/lib/openmpi/mca_btl_tcp.so)
<br>
==19802==    by 0x8A01ADC: mca_btl_tcp_send (in
<br>
/opt/ompi143.X32/lib/openmpi/mca_btl_tcp.so)
<br>
==19802==    by 0x7FA24A9: mca_pml_ob1_send_request_start_prepare (in
<br>
/opt/ompi143.X32/lib/openmpi/mca_pml_ob1.so)
<br>
==19802==    by 0x7F98443: mca_pml_ob1_send (in
<br>
/opt/ompi143.X32/lib/openmpi/mca_pml_ob1.so)
<br>
==19802==    by 0x4A8530F: PMPI_Send (in
<br>
/opt/ompi143.X32/lib/libmpi.so.0.0.2)
<br>
==19802==    by 0x808D5F2: p7_oprofile_MPISend (mpi.c:101)
<br>
==19802==    by 0x805762E: main (jackhmmer.c:1149)
<br>
==19802==  Address 0x770bc9d is 15,101 bytes inside a block of size
<br>
15,389 alloc'd
<br>
==19802==    at 0x49E3A12: realloc (vg_replace_malloc.c:476)
<br>
==19802==    by 0x808D4E3: p7_oprofile_MPISend (mpi.c:88)
<br>
==19802==    by 0x805762E: main (jackhmmer.c:1149)
<br>
<p>Do that for the SSE1 version and the same 3 errors are seen, plus many
<br>
more like the following:
<br>
<p>==9416== Conditional jump or move depends on uninitialised value(s)
<br>
==9416==    at 0x807FE3E: forward_engine (fwdback.c:420)
<br>
==9416==    by 0x8080051: p7_ForwardParser (fwdback.c:143)
<br>
==9416==    by 0x806C3CC: p7_Pipeline (p7_pipeline.c:590)
<br>
==9416==    by 0x80564F0: main (jackhmmer.c:1426)
<br>
<p>Unfortunately this makes absolutely no sense.  Line 420 is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (xE &gt; 1.0e4)
<br>
<p>which tells us that xE wasn't set (fine), so assaying uninitialized
<br>
with statements like:
<br>
<p>&nbsp;&nbsp;fprintf(stderr,&quot;DEBUG xEv %lld\n&quot;,xEv);fflush(stderr);
<br>
<p>(each of which generates its own uninitialized value message) the first
<br>
uninitialized variable appears very early in the code after this
<br>
_mm_setzero_ps:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register __m128 xEv;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//other stuff that does not touch xEv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xEv   = _mm_setzero_ps();
<br>
<p>Now this is hair pulling for many reasons.  The first is that nothing of
<br>
substance was changed in this file (just some #defines that
<br>
resolve to the same values as they had originally).  The second is that
<br>
this is an SSE1 operation even in the original unmodified code.  The
<br>
third is that it just isn't possible for xEv to be uninitialized after
<br>
that statement - yet it is.  (Valgrind with --smc-check=all turns up
<br>
nothing more than leaving out that parameter.)   Here is the relevant
<br>
section in xmmintrin.h:
<br>
<p>/* Create a vector of zeros.  */
<br>
extern __inline __m128 __attribute__((__gnu_inline__, __always_inline__,
<br>
__artificial__))
<br>
_mm_setzero_ps (void)
<br>
{
<br>
&nbsp;&nbsp;return __extension__ (__m128){ 0.0f, 0.0f, 0.0f, 0.0f };
<br>
}
<br>
<p>Of course all of this nonsense is happening on a worker node, which
<br>
isn't making getting to the root of the problem any easier.
<br>
<p>The module where these uninitialized variables are seen was compiled like;
<br>
<p>mpicc -std=gnu99 -O1 -g -m32 -pthread -msse -mno-sse2  -DHAVE_CONFIG_H 
<br>
-I../../easel -I../../easel -I. -I.. -I. -I../../src -o fwdback.o -c
<br>
fwdback.c
<br>
<p>Building it on a 64 bit machine (that's why the -m32 is there) or a 32
<br>
bit machine gives the same result.
<br>
<p>If any of you have seen something like this before and can suggest a way
<br>
to proceed I would be very grateful.
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Previous message:</strong> <a href="15384.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Maybe reply:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Reply:</strong> <a href="15387.php">Dave Goodell: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Maybe reply:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
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
