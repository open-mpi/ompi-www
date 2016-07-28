<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 08:13:02 2009" -->
<!-- isoreceived="20090910121302" -->
<!-- sent="Thu, 10 Sep 2009 14:14:10 +0200" -->
<!-- isosent="20090910121410" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="4AA8ED92.4020501_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AA8D9FE.2010601_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2009-09-10 08:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6818.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Two short questions: do you have any open MPI mca parameters set in a 
</span><br>
<span class="quotelev1">&gt; file or at runtime?
</span><br>
No
<br>
<span class="quotelev1">&gt; And second, is there any difference if you disable the hierarch coll 
</span><br>
<span class="quotelev1">&gt; module (which does communicate additionally as well?) e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca coll ^hierarch -np 4 ./mytest
</span><br>
No, there is no difference.
<br>
<p>I don't know if it can help but : I've first had the problem when 
<br>
launching bt.A.4 and sp.A.4 of the NAS Parallel Benchmarks (3.3 version).
<br>
<p>Thomas
<br>
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
<span class="quotelev2">&gt;&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 2009-09-09 at 17:44 +0200, Thomas Ropars wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.  I think you missed the top three lines of the output but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that doesn't matter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main() at ?:?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PMPI_Comm_dup() at pcomm_dup.c:62
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ompi_comm_dup() at communicator/comm.c:661
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       [0,2] (2 processes)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:264
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               ompi_request_default_wait_all() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/req_wait.c:262
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 opal_condition_wait() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../opal/threads/condition.h:99
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       [1,3] (2 processes)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:245
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               ompi_request_default_wait_all() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request/req_wait.c:262
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 opal_condition_wait() at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../opal/threads/condition.h:99
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lines 264 and 245 of comm_cid.c are both in a for loop which calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allreduce() twice in a loop until a certain condition is met.  As such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's hard to tell from this trace if it is processes [0,2] are &quot;ahead&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or [1,3] are &quot;behind&quot;.  Either way you look at it however the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all_reduce() should not deadlock like that so it's as likely to be a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in reduce as it is in ompi_comm_nextcid() from the trace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume all four processes are actually in the same call to comm_dup,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; re-compiling your program with -g and re-running padb would confirm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as it would show the line numbers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Yes they are all in the second call to comm_dup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6818.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
