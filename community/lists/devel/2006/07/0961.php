<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 11:23:21 2006" -->
<!-- isoreceived="20060705152321" -->
<!-- sent="Wed, 05 Jul 2006 09:28:42 -0600" -->
<!-- isosent="20060705152842" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="[OMPI devel] Getting the number of nodes" -->
<!-- id="44ABDAAA.1040009_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 11:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Reply:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used to use this code to get the number of nodes in a cluster / 
<br>
machine / whatever:
<br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; get_num_nodes(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;     size_t cnt;
</span><br>
<span class="quotelev1">&gt;     orte_gpr_value_t **values;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     rc = orte_gpr.get(ORTE_GPR_KEYS_OR|ORTE_GPR_TOKENS_OR,
</span><br>
<span class="quotelev1">&gt;                         ORTE_NODE_SEGMENT, NULL, NULL, &amp;cnt, &amp;values);
</span><br>
<span class="quotelev1">&gt;                         
</span><br>
<span class="quotelev1">&gt;     if(rc != ORTE_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     return cnt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
This now returns '0' on my MAC when it used to return 1.  Is this not an 
<br>
acceptable way of doing this?  Is there a cleaner / better way these days?
<br>
<p><pre>
-- 
-- Nathan
Correspondence
---------------------------------------------------------------------
Nathan DeBardeleben, Ph.D.
Los Alamos National Laboratory
Parallel Tools Team
High Performance Computing Environments
phone: 505-667-3428
email: ndebard_at_[hidden]
---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Reply:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
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
