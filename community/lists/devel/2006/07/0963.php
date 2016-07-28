<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 16:35:12 2006" -->
<!-- isoreceived="20060705203512" -->
<!-- sent="Wed, 05 Jul 2006 14:40:40 -0600" -->
<!-- isosent="20060705204040" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Getting the number of nodes" -->
<!-- id="44AC23C8.3050707_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0D16D52.33AA%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-07-05 16:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0964.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0964.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Reply:</strong> <a href="0964.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;                 Open MPI: 1.0.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r9571
</span><br>
The rc value returned by the 'get' call is '0'.
<br>
All I'm doing is calling init with my own daemon name, it's coming up 
<br>
fine, then I immediately call this to figure out how many nodes are 
<br>
associated with this machine.
<br>
<p>-- Nathan
<br>
Correspondence
<br>
---------------------------------------------------------------------
<br>
Nathan DeBardeleben, Ph.D.
<br>
Los Alamos National Laboratory
<br>
Parallel Tools Team
<br>
High Performance Computing Environments
<br>
phone: 505-667-3428
<br>
email: ndebard_at_[hidden]
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you tell us which version of the code you are using, and print out the
</span><br>
<span class="quotelev1">&gt; rc value that was returned by the &quot;get&quot; call? I see nothing obviously wrong
</span><br>
<span class="quotelev1">&gt; with the code, but much depends on what happened prior to this call too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: you might want to release the memory stored in the returned values - it
</span><br>
<span class="quotelev1">&gt; could represent a substantial memory leak.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/5/06 9:28 AM, &quot;Nathan DeBardeleben&quot; &lt;ndebard_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I used to use this code to get the number of nodes in a cluster /
</span><br>
<span class="quotelev2">&gt;&gt; machine / whatever:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get_num_nodes(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     size_t cnt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     orte_gpr_value_t **values;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     rc = orte_gpr.get(ORTE_GPR_KEYS_OR|ORTE_GPR_TOKENS_OR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         ORTE_NODE_SEGMENT, NULL, NULL, &amp;cnt, &amp;values);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if(rc != ORTE_SUCCESS) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return cnt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; This now returns '0' on my MAC when it used to return 1.  Is this not an
</span><br>
<span class="quotelev2">&gt;&gt; acceptable way of doing this?  Is there a cleaner / better way these days?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0964.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0964.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>Reply:</strong> <a href="0964.php">Ralph H Castain: "Re: [OMPI devel] Getting the number of nodes"</a>
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
