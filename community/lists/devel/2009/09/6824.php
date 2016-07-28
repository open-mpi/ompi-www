<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 19:12:52 2009" -->
<!-- isoreceived="20090910231252" -->
<!-- sent="Fri, 11 Sep 2009 02:12:39 +0300" -->
<!-- isosent="20090910231239" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="4AA987E7.7080108_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AA8ED92.4020501_at_irisa.fr" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 19:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6823.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6817.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so I can confirm that I can reproduce the hang, and we (George, Rainer 
<br>
and me) have looked into that and are continue digging.
<br>
<p>I hate to say that, but it looked to us as if messages were 'lost' 
<br>
(sender clearly called send and but the data is not in any of the queues 
<br>
on the receiver side), which seems to be consistent with two other bug 
<br>
reports currently being discussed on the mailing list. I could reproduce 
<br>
the hang with both sm and tcp,  so its probably not a btl issue but 
<br>
somewhere higher.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Thomas Ropars wrote:
<br>
<span class="quotelev1">&gt; Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Two short questions: do you have any open MPI mca parameters set in a 
</span><br>
<span class="quotelev2">&gt;&gt; file or at runtime?
</span><br>
<span class="quotelev1">&gt; No
</span><br>
<span class="quotelev2">&gt;&gt; And second, is there any difference if you disable the hierarch coll 
</span><br>
<span class="quotelev2">&gt;&gt; module (which does communicate additionally as well?) e.g.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca coll ^hierarch -np 4 ./mytest
</span><br>
<span class="quotelev1">&gt; No, there is no difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if it can help but : I've first had the problem when 
</span><br>
<span class="quotelev1">&gt; launching bt.A.4 and sp.A.4 of the NAS Parallel Benchmarks (3.3 version).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas Ropars wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 2009-09-09 at 17:44 +0200, Thomas Ropars wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you.  I think you missed the top three lines of the output but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that doesn't matter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; main() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   PMPI_Comm_dup() at pcomm_dup.c:62
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ompi_comm_dup() at communicator/comm.c:661
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       [0,2] (2 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:264
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               ompi_request_default_wait_all() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; request/req_wait.c:262
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 opal_condition_wait() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       [1,3] (2 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:245
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               ompi_request_default_wait_all() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; request/req_wait.c:262
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 opal_condition_wait() at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lines 264 and 245 of comm_cid.c are both in a for loop which calls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allreduce() twice in a loop until a certain condition is met.  As such
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it's hard to tell from this trace if it is processes [0,2] are &quot;ahead&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or [1,3] are &quot;behind&quot;.  Either way you look at it however the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all_reduce() should not deadlock like that so it's as likely to be a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in reduce as it is in ompi_comm_nextcid() from the trace.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I assume all four processes are actually in the same call to comm_dup,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; re-compiling your program with -g and re-running padb would confirm 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as it would show the line numbers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes they are all in the second call to comm_dup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6823.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6817.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
