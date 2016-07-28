<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 18:35:47 2006" -->
<!-- isoreceived="20060705223547" -->
<!-- sent="Wed, 5 Jul 2006 18:35:45 -0400 (EDT)" -->
<!-- isosent="20060705223545" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Getting the number of nodes" -->
<!-- id="50344.128.165.148.155.1152138945.squirrel_at_www.osl.iu.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="44AC3DD6.2030306_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 18:35:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0967.php">Pierre: "[OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="0965.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>In reply to:</strong> <a href="0965.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree with Ralph, this code should work fine (we do this internally in
<br>
orte_ras_base_node_query()). You may try adding a 'dump' of the GPR to
<br>
make sure that the node segment has information on it. Add a call like the
<br>
following to your function:
<br>
<p>&nbsp;&nbsp;orte_gpr.dup_segment(NULL);
<br>
<p>or better yet
<br>
<p>&nbsp;&nbsp;orte_gpr.dump_segment(ORTE_NODE_SEGMENT);
<br>
<p>that should print out the node segment that it would be reading from. This
<br>
may be a problem elsewhere, and this will help us pinpoint it.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><span class="quotelev1">&gt; I'm running this on my mac where I expected to only get back the
</span><br>
<span class="quotelev1">&gt; localhost.  I upgraded to 1.0.2 a little while back, had been using one
</span><br>
<span class="quotelev1">&gt; of the alphas (I think it was alpha 9 but I can't be sure) up until that
</span><br>
<span class="quotelev1">&gt; point when this function returned '1' on my mac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Rc=0 indicates that the &quot;get&quot; function was successful, so this means
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; there were no nodes on the NODE_SEGMENT. Were you running this in an
</span><br>
<span class="quotelev2">&gt;&gt; environment where nodes had been allocated to you? Or were you expecting
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; find only &quot;localhost&quot; on the segment?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely sure, but I don't believe there have been significant
</span><br>
<span class="quotelev2">&gt;&gt; changes in 1.0.2 for some time. My guess is that something has changed
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; your system as opposed to in the OpenMPI code you're using. Did you do
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; update recently and then begin seeing this behavior? Your revision level
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; 1000+ behind the current repository, so my guess is that you haven't
</span><br>
<span class="quotelev2">&gt;&gt; updated
</span><br>
<span class="quotelev2">&gt;&gt; for awhile - since 1.0.2 is under maintenance for bugs only, that
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't
</span><br>
<span class="quotelev2">&gt;&gt; be a problem. I'm just trying to understand why your function is doing
</span><br>
<span class="quotelev2">&gt;&gt; something different if the OpenMPI code your using hasn't changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/5/06 2:40 PM, &quot;Nathan DeBardeleben&quot; &lt;ndebard_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Open MPI: 1.0.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Open MPI SVN revision: r9571
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The rc value returned by the 'get' call is '0'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All I'm doing is calling init with my own daemon name, it's coming up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine, then I immediately call this to figure out how many nodes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; associated with this machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correspondence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you tell us which version of the code you are using, and print
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rc value that was returned by the &quot;get&quot; call? I see nothing obviously
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the code, but much depends on what happened prior to this call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; too.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTW: you might want to release the memory stored in the returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; values - it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could represent a substantial memory leak.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/5/06 9:28 AM, &quot;Nathan DeBardeleben&quot; &lt;ndebard_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I used to use this code to get the number of nodes in a cluster /
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machine / whatever:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; get_num_nodes(void)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     int rc;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     size_t cnt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     orte_gpr_value_t **values;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     rc = orte_gpr.get(ORTE_GPR_KEYS_OR|ORTE_GPR_TOKENS_OR,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ORTE_NODE_SEGMENT, NULL, NULL, &amp;cnt,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &amp;values);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     if(rc != ORTE_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         return 0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     return cnt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This now returns '0' on my MAC when it used to return 1.  Is this not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; acceptable way of doing this?  Is there a cleaner / better way these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; days?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0967.php">Pierre: "[OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="0965.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
<li><strong>In reply to:</strong> <a href="0965.php">Nathan DeBardeleben: "Re: [OMPI devel] Getting the number of nodes"</a>
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
