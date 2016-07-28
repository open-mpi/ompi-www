<?
$subject_val = "Re: [OMPI users] Hair depleting issue with Ompi143 and one program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 18:44:27 2011" -->
<!-- isoreceived="20110120234427" -->
<!-- sent="Thu, 20 Jan 2011 17:44:22 -0600" -->
<!-- isosent="20110120234422" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hair depleting issue with Ompi143 and one program" -->
<!-- id="DD11825F-6923-470E-983F-62866ACD2A57_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1Pg3ap-0003aE-VV_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hair depleting issue with Ompi143 and one program<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 18:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15388.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>In reply to:</strong> <a href="15385.php">David Mathog: "[OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to what OMPI might be doing to your program, but I have a few suggestions for looking into the Valgrind issues.
<br>
<p>Valgrind's &quot;--track-origins=yes&quot; option is usually helpful for figuring out where the uninitialized values came from.  However, if I understand you correctly and if you are correct in your assumption that _mm_setzero_ps is not actually zeroing your xEv variable for some reason, then this option will unhelpfully tell you that it was caused by a stack allocation at the entrance to the function where the variable is declared.  But it's worth turning on because it's easy to do and it might show you something obvious that you are missing.
<br>
<p>The next thing you can do is disable optimization when building your code in case GCC is taking a shortcut that is either incorrect or just doesn't play nicely with Valgrind.  Valgrind might run pretty slow though, because -O0 code can be really verbose and slow to check.
<br>
<p>After that, if you really want to dig in, you can try reading the assembly code that is generated for that _mm_setzero_ps line.  The easiest way is to pass &quot;-save-temps&quot; to gcc and it will keep a copy of &quot;sourcefile.s&quot; corresponding to &quot;sourcefile.c&quot;.  Sometimes &quot;-fverbose-asm&quot; helps, sometimes it makes things harder to follow.
<br>
<p>And the last semi-desperate step is to dig into what Valgrind thinks is going on.  You'll want to read up on how memcheck really works [1] before doing this.  Then read up on client requests [2,3].  You can then use the VALGRIND_GET_VBITS client request on your xEv variable in order to see which parts of the variable Valgrind thinks are undefined.  If the vbits don't match with what you expect, there's a chance that you might have found a bug in Valgrind itself.  It doesn't happen often, but the SSE code can be complicated and isn't exercised as often as the non-vector portions of Valgrind.
<br>
<p>Good luck,
<br>
-Dave
<br>
<p>[1] <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.machine">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.machine</a>
<br>
[2] <a href="http://valgrind.org/docs/manual/manual-core-adv.html#manual-core-adv.clientreq">http://valgrind.org/docs/manual/manual-core-adv.html#manual-core-adv.clientreq</a>
<br>
[3] <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
<br>
<p>On Jan 20, 2011, at 5:07 PM CST, David Mathog wrote:
<br>
<p><span class="quotelev1">&gt; I have been working on slightly modifying a software package by Sean
</span><br>
<span class="quotelev1">&gt; Eddy called Hmmer 3.  The hardware acceleration was originally SSE2 but
</span><br>
<span class="quotelev1">&gt; since most of our compute nodes only have SSE1 and MMX I rewrote a few
</span><br>
<span class="quotelev1">&gt; small sections to just use those instructions.  (And yes, as far as I
</span><br>
<span class="quotelev1">&gt; can tell it invokes emms before any floating point operations are run
</span><br>
<span class="quotelev1">&gt; after each MMX usage.)   On top of that each binary has 3 options for
</span><br>
<span class="quotelev1">&gt; running the programs: single threaded, threaded, or MPI (using 
</span><br>
<span class="quotelev1">&gt; Ompi143).  For all other programs in this package everything works
</span><br>
<span class="quotelev1">&gt; everywhere.  For one called &quot;jackhmmer&quot; this table results (+=runs
</span><br>
<span class="quotelev1">&gt; correctly, - = problems), where the exact same problem is run in each
</span><br>
<span class="quotelev1">&gt; test (theoretically exercising exactly the same routines, just under
</span><br>
<span class="quotelev1">&gt; different threading control):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           SSE2   SSE1 
</span><br>
<span class="quotelev1">&gt; Single      +      +
</span><br>
<span class="quotelev1">&gt; Threaded    +      +
</span><br>
<span class="quotelev1">&gt; Ompi143     +      -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The negative result for the SSE/Ompi143 combination happens whether the
</span><br>
<span class="quotelev1">&gt; worker nodes are Athlon MP (SSE1 only) or Athlon64.  The test machine
</span><br>
<span class="quotelev1">&gt; for the single and threaded runs is a two CPU Opteron 280 (4 cores
</span><br>
<span class="quotelev1">&gt; total).  Ompi143 is 32 bit everywhere (local copies though).  There have
</span><br>
<span class="quotelev1">&gt; been no modifications whatsoever made to the main jackhmmer.c file,
</span><br>
<span class="quotelev1">&gt; which is where the various run methods are implemented.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now if there was some intrinsic problem with my SSE1 code it should
</span><br>
<span class="quotelev1">&gt; presumably manifest in both the Single and Threaded versions as well
</span><br>
<span class="quotelev1">&gt; (the thread control is different, but they all feed through the same
</span><br>
<span class="quotelev1">&gt; underlying functions), or in one of the other programs, which isn't
</span><br>
<span class="quotelev1">&gt; seen.  Running under valgrind using Single or Threaded produces no
</span><br>
<span class="quotelev1">&gt; warnings.  Using mpirun with valgrind on the SSE2 produces 3: two
</span><br>
<span class="quotelev1">&gt; related to OMPI itself which are seen in every OMPI program run in
</span><br>
<span class="quotelev1">&gt; valgrind, and one caused by an MPIsend operation where the buffer
</span><br>
<span class="quotelev1">&gt; contains some uninitialized data (this is nothing toxic, just bytes in
</span><br>
<span class="quotelev1">&gt; fixed length fields which which were never set because a shorter string
</span><br>
<span class="quotelev1">&gt; is stored there). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==19802== Syscall param writev(vector[...]) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==19802==    at 0x4C77AC1: writev (in /lib/libc-2.10.1.so)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x8A069B5: mca_btl_tcp_frag_send (in
</span><br>
<span class="quotelev1">&gt; /opt/ompi143.X32/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x8A0626E: mca_btl_tcp_endpoint_send (in
</span><br>
<span class="quotelev1">&gt; /opt/ompi143.X32/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x8A01ADC: mca_btl_tcp_send (in
</span><br>
<span class="quotelev1">&gt; /opt/ompi143.X32/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x7FA24A9: mca_pml_ob1_send_request_start_prepare (in
</span><br>
<span class="quotelev1">&gt; /opt/ompi143.X32/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x7F98443: mca_pml_ob1_send (in
</span><br>
<span class="quotelev1">&gt; /opt/ompi143.X32/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x4A8530F: PMPI_Send (in
</span><br>
<span class="quotelev1">&gt; /opt/ompi143.X32/lib/libmpi.so.0.0.2)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x808D5F2: p7_oprofile_MPISend (mpi.c:101)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x805762E: main (jackhmmer.c:1149)
</span><br>
<span class="quotelev1">&gt; ==19802==  Address 0x770bc9d is 15,101 bytes inside a block of size
</span><br>
<span class="quotelev1">&gt; 15,389 alloc'd
</span><br>
<span class="quotelev1">&gt; ==19802==    at 0x49E3A12: realloc (vg_replace_malloc.c:476)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x808D4E3: p7_oprofile_MPISend (mpi.c:88)
</span><br>
<span class="quotelev1">&gt; ==19802==    by 0x805762E: main (jackhmmer.c:1149)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do that for the SSE1 version and the same 3 errors are seen, plus many
</span><br>
<span class="quotelev1">&gt; more like the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==9416== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==9416==    at 0x807FE3E: forward_engine (fwdback.c:420)
</span><br>
<span class="quotelev1">&gt; ==9416==    by 0x8080051: p7_ForwardParser (fwdback.c:143)
</span><br>
<span class="quotelev1">&gt; ==9416==    by 0x806C3CC: p7_Pipeline (p7_pipeline.c:590)
</span><br>
<span class="quotelev1">&gt; ==9416==    by 0x80564F0: main (jackhmmer.c:1426)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately this makes absolutely no sense.  Line 420 is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       if (xE &gt; 1.0e4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which tells us that xE wasn't set (fine), so assaying uninitialized
</span><br>
<span class="quotelev1">&gt; with statements like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr,&quot;DEBUG xEv %lld\n&quot;,xEv);fflush(stderr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (each of which generates its own uninitialized value message) the first
</span><br>
<span class="quotelev1">&gt; uninitialized variable appears very early in the code after this
</span><br>
<span class="quotelev1">&gt; _mm_setzero_ps:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      register __m128 xEv;
</span><br>
<span class="quotelev1">&gt;      //other stuff that does not touch xEv
</span><br>
<span class="quotelev1">&gt;      xEv   = _mm_setzero_ps();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now this is hair pulling for many reasons.  The first is that nothing of
</span><br>
<span class="quotelev1">&gt; substance was changed in this file (just some #defines that
</span><br>
<span class="quotelev1">&gt; resolve to the same values as they had originally).  The second is that
</span><br>
<span class="quotelev1">&gt; this is an SSE1 operation even in the original unmodified code.  The
</span><br>
<span class="quotelev1">&gt; third is that it just isn't possible for xEv to be uninitialized after
</span><br>
<span class="quotelev1">&gt; that statement - yet it is.  (Valgrind with --smc-check=all turns up
</span><br>
<span class="quotelev1">&gt; nothing more than leaving out that parameter.)   Here is the relevant
</span><br>
<span class="quotelev1">&gt; section in xmmintrin.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Create a vector of zeros.  */
</span><br>
<span class="quotelev1">&gt; extern __inline __m128 __attribute__((__gnu_inline__, __always_inline__,
</span><br>
<span class="quotelev1">&gt; __artificial__))
</span><br>
<span class="quotelev1">&gt; _mm_setzero_ps (void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  return __extension__ (__m128){ 0.0f, 0.0f, 0.0f, 0.0f };
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course all of this nonsense is happening on a worker node, which
</span><br>
<span class="quotelev1">&gt; isn't making getting to the root of the problem any easier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The module where these uninitialized variables are seen was compiled like;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -std=gnu99 -O1 -g -m32 -pthread -msse -mno-sse2  -DHAVE_CONFIG_H 
</span><br>
<span class="quotelev1">&gt; -I../../easel -I../../easel -I. -I.. -I. -I../../src -o fwdback.o -c
</span><br>
<span class="quotelev1">&gt; fwdback.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building it on a 64 bit machine (that's why the -m32 is there) or a 32
</span><br>
<span class="quotelev1">&gt; bit machine gives the same result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If any of you have seen something like this before and can suggest a way
</span><br>
<span class="quotelev1">&gt; to proceed I would be very grateful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
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
<li><strong>Next message:</strong> <a href="15388.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15386.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>In reply to:</strong> <a href="15385.php">David Mathog: "[OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
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
