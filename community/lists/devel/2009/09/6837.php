<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 16:25:13 2009" -->
<!-- isoreceived="20090915202513" -->
<!-- sent="Tue, 15 Sep 2009 22:26:17 +0200" -->
<!-- isosent="20090915202617" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="4AAFF869.6040609_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AA987E7.7080108_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] application hangs with multiple dup<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 16:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>In reply to:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Some news about that bug ?
<br>
<p>Thomas
<br>
<p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; so I can confirm that I can reproduce the hang, and we (George, Rainer 
</span><br>
<span class="quotelev1">&gt; and me) have looked into that and are continue digging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hate to say that, but it looked to us as if messages were 'lost' 
</span><br>
<span class="quotelev1">&gt; (sender clearly called send and but the data is not in any of the 
</span><br>
<span class="quotelev1">&gt; queues on the receiver side), which seems to be consistent with two 
</span><br>
<span class="quotelev1">&gt; other bug reports currently being discussed on the mailing list. I 
</span><br>
<span class="quotelev1">&gt; could reproduce the hang with both sm and tcp,  so its probably not a 
</span><br>
<span class="quotelev1">&gt; btl issue but somewhere higher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas Ropars wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Two short questions: do you have any open MPI mca parameters set in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a file or at runtime?
</span><br>
<span class="quotelev2">&gt;&gt; No
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And second, is there any difference if you disable the hierarch coll 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module (which does communicate additionally as well?) e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca coll ^hierarch -np 4 ./mytest
</span><br>
<span class="quotelev2">&gt;&gt; No, there is no difference.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if it can help but : I've first had the problem when 
</span><br>
<span class="quotelev2">&gt;&gt; launching bt.A.4 and sp.A.4 of the NAS Parallel Benchmarks (3.3 
</span><br>
<span class="quotelev2">&gt;&gt; version).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas Ropars wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, 2009-09-09 at 17:44 +0200, Thomas Ropars wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you.  I think you missed the top three lines of the output but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that doesn't matter.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; main() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PMPI_Comm_dup() at pcomm_dup.c:62
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     ompi_comm_dup() at communicator/comm.c:661
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       [0,2] (2 processes)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:264
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; at coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;               ompi_request_default_wait_all() at 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; request/req_wait.c:262
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 opal_condition_wait() at 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       [1,3] (2 processes)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:245
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; at coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;               ompi_request_default_wait_all() at 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; request/req_wait.c:262
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 opal_condition_wait() at 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lines 264 and 245 of comm_cid.c are both in a for loop which calls
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allreduce() twice in a loop until a certain condition is met.  As 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; such
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it's hard to tell from this trace if it is processes [0,2] are 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;ahead&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or [1,3] are &quot;behind&quot;.  Either way you look at it however the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all_reduce() should not deadlock like that so it's as likely to be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a bug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in reduce as it is in ompi_comm_nextcid() from the trace.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I assume all four processes are actually in the same call to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm_dup,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; re-compiling your program with -g and re-running padb would 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; confirm this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as it would show the line numbers.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes they are all in the second call to comm_dup.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>In reply to:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
