<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 04:35:09 2009" -->
<!-- isoreceived="20090910083509" -->
<!-- sent="Thu, 10 Sep 2009 10:36:15 +0200" -->
<!-- isosent="20090910083615" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="4AA8BA7F.50108_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1252517855.31827.104.camel_at_alpha" -->
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
<strong>Date:</strong> 2009-09-10 04:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2009-09-09 at 17:44 +0200, Thomas Ropars wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.  I think you missed the top three lines of the output but
</span><br>
<span class="quotelev1">&gt; that doesn't matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; main() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;   PMPI_Comm_dup() at pcomm_dup.c:62
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_comm_dup() at communicator/comm.c:661
</span><br>
<span class="quotelev2">&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;       [0,2] (2 processes)
</span><br>
<span class="quotelev2">&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:264
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev2">&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev2">&gt;&gt;               ompi_request_default_wait_all() at request/req_wait.c:262
</span><br>
<span class="quotelev2">&gt;&gt;                 opal_condition_wait() at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;       [1,3] (2 processes)
</span><br>
<span class="quotelev2">&gt;&gt;       -----------------
</span><br>
<span class="quotelev2">&gt;&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:245
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev2">&gt;&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev2">&gt;&gt;               ompi_request_default_wait_all() at request/req_wait.c:262
</span><br>
<span class="quotelev2">&gt;&gt;                 opal_condition_wait() at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lines 264 and 245 of comm_cid.c are both in a for loop which calls
</span><br>
<span class="quotelev1">&gt; allreduce() twice in a loop until a certain condition is met.  As such
</span><br>
<span class="quotelev1">&gt; it's hard to tell from this trace if it is processes [0,2] are &quot;ahead&quot;
</span><br>
<span class="quotelev1">&gt; or [1,3] are &quot;behind&quot;.  Either way you look at it however the
</span><br>
<span class="quotelev1">&gt; all_reduce() should not deadlock like that so it's as likely to be a bug
</span><br>
<span class="quotelev1">&gt; in reduce as it is in ompi_comm_nextcid() from the trace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume all four processes are actually in the same call to comm_dup,
</span><br>
<span class="quotelev1">&gt; re-compiling your program with -g and re-running padb would confirm this
</span><br>
<span class="quotelev1">&gt; as it would show the line numbers.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes they are all in the second call to comm_dup.
<br>
<p>Thomas
<br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6815.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
