<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 13:37:38 2009" -->
<!-- isoreceived="20090909173738" -->
<!-- sent="Wed, 09 Sep 2009 18:37:35 +0100" -->
<!-- isosent="20090909173735" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="1252517855.31827.104.camel_at_alpha" -->
<!-- inreplyto="4AA7CD41.60006_at_irisa.fr" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 13:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6809.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6814.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6814.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-09-09 at 17:44 +0200, Thomas Ropars wrote:
<br>
<p>Thank you.  I think you missed the top three lines of the output but
<br>
that doesn't matter.
<br>
<p><span class="quotelev1">&gt; main() at ?:?
</span><br>
<span class="quotelev1">&gt;   PMPI_Comm_dup() at pcomm_dup.c:62
</span><br>
<span class="quotelev1">&gt;     ompi_comm_dup() at communicator/comm.c:661
</span><br>
<span class="quotelev1">&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;       [0,2] (2 processes)
</span><br>
<span class="quotelev1">&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:264
</span><br>
<span class="quotelev1">&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev1">&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev1">&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev1">&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt;               ompi_request_default_wait_all() at request/req_wait.c:262
</span><br>
<span class="quotelev1">&gt;                 opal_condition_wait() at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;       [1,3] (2 processes)
</span><br>
<span class="quotelev1">&gt;       -----------------
</span><br>
<span class="quotelev1">&gt;       ompi_comm_nextcid() at communicator/comm_cid.c:245
</span><br>
<span class="quotelev1">&gt;         ompi_comm_allreduce_intra() at communicator/comm_cid.c:619
</span><br>
<span class="quotelev1">&gt;           ompi_coll_tuned_allreduce_intra_dec_fixed() at 
</span><br>
<span class="quotelev1">&gt; coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;             ompi_coll_tuned_allreduce_intra_recursivedoubling() at 
</span><br>
<span class="quotelev1">&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt;               ompi_request_default_wait_all() at request/req_wait.c:262
</span><br>
<span class="quotelev1">&gt;                 opal_condition_wait() at ../opal/threads/condition.h:99
</span><br>
<p>Lines 264 and 245 of comm_cid.c are both in a for loop which calls
<br>
allreduce() twice in a loop until a certain condition is met.  As such
<br>
it's hard to tell from this trace if it is processes [0,2] are &quot;ahead&quot;
<br>
or [1,3] are &quot;behind&quot;.  Either way you look at it however the
<br>
all_reduce() should not deadlock like that so it's as likely to be a bug
<br>
in reduce as it is in ompi_comm_nextcid() from the trace.
<br>
<p>I assume all four processes are actually in the same call to comm_dup,
<br>
re-compiling your program with -g and re-running padb would confirm this
<br>
as it would show the line numbers.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6809.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6814.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6814.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
