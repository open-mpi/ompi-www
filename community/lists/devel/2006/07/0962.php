<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 15:21:26 2006" -->
<!-- isoreceived="20060705192126" -->
<!-- sent="Wed, 05 Jul 2006 13:21:22 -0600" -->
<!-- isosent="20060705192122" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Getting the number of nodes" -->
<!-- id="C0D16D52.33AA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44ABDAAA.1040009_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 15:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0963.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0961.php">Nathan DeBardeleben: "[OMPI devel] Getting the number of nodes"</a>
<li><strong>In reply to:</strong> <a href="0961.php">Nathan DeBardeleben: "[OMPI devel] Getting the number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0963.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Reply:</strong> <a href="0963.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan
<br>
<p>Could you tell us which version of the code you are using, and print out the
<br>
rc value that was returned by the &quot;get&quot; call? I see nothing obviously wrong
<br>
with the code, but much depends on what happened prior to this call too.
<br>
<p>BTW: you might want to release the memory stored in the returned values - it
<br>
could represent a substantial memory leak.
<br>
<p>Ralph
<br>
<p><p><p>On 7/5/06 9:28 AM, &quot;Nathan DeBardeleben&quot; &lt;ndebard_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I used to use this code to get the number of nodes in a cluster /
</span><br>
<span class="quotelev1">&gt; machine / whatever:
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; get_num_nodes(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int rc;
</span><br>
<span class="quotelev2">&gt;&gt;     size_t cnt;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_gpr_value_t **values;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     rc = orte_gpr.get(ORTE_GPR_KEYS_OR|ORTE_GPR_TOKENS_OR,
</span><br>
<span class="quotelev2">&gt;&gt;                         ORTE_NODE_SEGMENT, NULL, NULL, &amp;cnt, &amp;values);
</span><br>
<span class="quotelev2">&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;     if(rc != ORTE_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;         return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     return cnt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; This now returns '0' on my MAC when it used to return 1.  Is this not an
</span><br>
<span class="quotelev1">&gt; acceptable way of doing this?  Is there a cleaner / better way these days?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0963.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0961.php">Nathan DeBardeleben: "[OMPI devel] Getting the number of nodes"</a>
<li><strong>In reply to:</strong> <a href="0961.php">Nathan DeBardeleben: "[OMPI devel] Getting the number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0963.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Reply:</strong> <a href="0963.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
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
