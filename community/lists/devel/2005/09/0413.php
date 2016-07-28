<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 26 18:02:23 2005" -->
<!-- isoreceived="20050926230223" -->
<!-- sent="Mon, 26 Sep 2005 17:02:18 -0600" -->
<!-- isosent="20050926230218" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  p2p linpack ---" -->
<!-- id="131935BF-725C-4F2B-A9DD-D5A4EE065D52_at_cs.unm.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B80FA9BF-E5A4-476F-BD1B-DD759492FCDA_at_cs.unm.edu" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-26 18:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Roland Dreier: "[PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>In reply to:</strong> <a href="0407.php">Galen M. Shipman: "p2p linpack ---"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, looks like we found the problem.
<br>
<p>The memory free callback was incorrect. We were just looking for the  
<br>
base address of the free in the tree. Here is why this didn't work
<br>
Probably wouldn't compile but works for an explanation:
<br>
<p>buf = malloc(40*1024);  /* malloc  10 pages */
<br>
<p>&nbsp;&nbsp;/* send the second half of the buffer to the peer */
<br>
/* note that leave_pinned will register and cache only what it sees  
<br>
in the send */
<br>
MPI_Send(buf+5*4*1024, 5*4*1024, ........ );
<br>
<p>/* free the buffer, mpi will try to find the registration in the tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;based on the address, buf,, but won't find it so the registration
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remains */
<br>
free(buf);
<br>
<p><p>So since the registration is  left in the tree, a future malloc may  
<br>
obtain a virtual address that is within the base and bound of the  
<br>
registration. When this memory is later freed we try to deregister  
<br>
the entire registration, part of which might be in use by another  
<br>
buffer, it could even be in the process of an RDMA operation.
<br>
<p>Anyway, I have modified the code and we are now passing a smaller  
<br>
linpack run with leave_pinned and the mem hooks enabled without using  
<br>
any mallopt trickiness.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p>On Sep 25, 2005, at 10:58 AM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Well, after adding a bunch of debugging  output, I have found the  
</span><br>
<span class="quotelev1">&gt; following.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With both leave_pinned and use_mem_hook enabled on a linpack run we  
</span><br>
<span class="quotelev1">&gt; get the assertion error on the memory callback in linpack. That is  
</span><br>
<span class="quotelev1">&gt; to say, there is a free occurring in the middle of a registration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the point of assert we have NOT resized any registrations.
</span><br>
<span class="quotelev1">&gt; The existing registrations in the tree are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Existing registrations:	
</span><br>
<span class="quotelev1">&gt; Base	Bound	Length
</span><br>
<span class="quotelev1">&gt; 241615360	244841607	3226248
</span><br>
<span class="quotelev1">&gt; 244841608	246428807	1587200
</span><br>
<span class="quotelev1">&gt; 246428808	248016007	1587200
</span><br>
<span class="quotelev1">&gt; 248019648	251245895	3226248
</span><br>
<span class="quotelev1">&gt; Tyring to free		
</span><br>
<span class="quotelev1">&gt; 247917216		
</span><br>
<span class="quotelev1">&gt; From		
</span><br>
<span class="quotelev1">&gt; Base	Bound	
</span><br>
<span class="quotelev1">&gt; 246428808	248016007	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we get the assert, we are trying to free: 247917216, which is  
</span><br>
<span class="quotelev1">&gt; in the middle of the registration. Note we have NOT resized any  
</span><br>
<span class="quotelev1">&gt; registrations so I am confident there is not an issue with either  
</span><br>
<span class="quotelev1">&gt; the tree or the resize at least as far as linpack is concerned.
</span><br>
<span class="quotelev1">&gt; Here is the callstack:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a95f079c9 in raise () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a95f08e6e in abort () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a95f01690 in __assert_fail () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a9571b200 in mca_mpool_base_mem_cb (base=0xec6eaa0,  
</span><br>
<span class="quotelev1">&gt; size=31624,
</span><br>
<span class="quotelev1">&gt;     cbdata=0x0) at mpool_base_mem_cb.c:53
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a9587fe0d in opal_mem_free_release_hook (buf=0xec6eaa0,
</span><br>
<span class="quotelev1">&gt;     length=31624) at memory.c:121
</span><br>
<span class="quotelev1">&gt; #5  0x0000002a9588bd12 in opal_mem_free_free_hook (ptr=0xec6eaa0,
</span><br>
<span class="quotelev1">&gt;     caller=0x42b052) at memory_malloc_hooks.c:66
</span><br>
<span class="quotelev1">&gt; #6  0x000000000042b052 in ATL_dmmIJK ()
</span><br>
<span class="quotelev1">&gt; #7  0x000000000064f9b1 in ATL_dgemmNN ()
</span><br>
<span class="quotelev1">&gt; #8  0x000000000057722b in ATL_dgemmNN_RB ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000577fc3 in ATL_rtrsmRUN ()
</span><br>
<span class="quotelev1">&gt; #10 0x000000000042c63c in ATL_dtrsm ()
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000423c1e in atl_f77wrap_dtrsm__ ()
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000423a94 in dtrsm_ ()
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000411192 in HPL_dtrsm (ORDER=17933, SIDE=17933, UPLO=8,
</span><br>
<span class="quotelev1">&gt;     TRANS=4294967295, DIAG=0, M=23458672, N=0, ALPHA=1,  
</span><br>
<span class="quotelev1">&gt; A=0x7fbfffefa0, LDA=0,
</span><br>
<span class="quotelev1">&gt;     B=0x202, LDB=0) at HPL_dtrsm.c:949
</span><br>
<span class="quotelev1">&gt; #14 0x000000000040cfb6 in HPL_pdupdateTT (PBCST=0x0, IFLAG=0x0,
</span><br>
<span class="quotelev1">&gt;     PANEL=0x165f040, NN=-1) at HPL_pdupdateTT.c:362
</span><br>
<span class="quotelev1">&gt; #15 0x000000000041936f in HPL_pdgesvK2 (GRID=0x7fbffff4a0,  
</span><br>
<span class="quotelev1">&gt; ALGO=0x7fbffff460,
</span><br>
<span class="quotelev1">&gt;     A=0x7fbffff260) at HPL_pdgesvK2.c:178
</span><br>
<span class="quotelev1">&gt; #16 0x000000000040d6f7 in HPL_pdgesv (GRID=0x7fbffff4a0, ALGO=0x460d,
</span><br>
<span class="quotelev1">&gt;     A=0x7fbffff260) at HPL_pdgesv.c:107
</span><br>
<span class="quotelev1">&gt; #17 0x0000000000405b10 in HPL_pdtest (TEST=0x7fbffff430,  
</span><br>
<span class="quotelev1">&gt; GRID=0x7fbffff4a0,
</span><br>
<span class="quotelev1">&gt;     ALGO=0x7fbffff460, N=10000, NB=80) at HPL_pdtest.c:193
</span><br>
<span class="quotelev1">&gt; #18 0x0000000000401840 in main (ARGC=1, ARGV=0x7fbffff928)
</span><br>
<span class="quotelev1">&gt;     at HPL_pddriver.c:223
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the free occurs in the ATLAS libraries, I will look into  
</span><br>
<span class="quotelev1">&gt; re-building linpack with another BLAS library to see what happens.  
</span><br>
<span class="quotelev1">&gt; Any other suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Roland Dreier: "[PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>In reply to:</strong> <a href="0407.php">Galen M. Shipman: "p2p linpack ---"</a>
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
