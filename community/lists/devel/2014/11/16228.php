<?
$subject_val = "Re: [OMPI devel] simple_spawn test fails using different set of btls.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 03:46:50 2014" -->
<!-- isoreceived="20141106084650" -->
<!-- sent="Thu, 6 Nov 2014 12:46:50 +0400" -->
<!-- isosent="20141106084650" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] simple_spawn test fails using different set of btls." -->
<!-- id="CANhOtjbKVsY_b1rdFqPL9DjLkznQnEovQG7y8HNQSJ8CwiiPQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkU85Gezb9HoBVAvmijwUMkdD3JDEPdvpBAzB5=YtVr=aQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] simple_spawn test fails using different set of btls.<br>
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 03:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16229.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Previous message:</strong> <a href="16227.php">George Bosilca: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>In reply to:</strong> <a href="16227.php">George Bosilca: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16232.php">Dave Goodell (dgoodell): "Re: [OMPI devel] simple_spawn test fails using different set of	btls."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! It fixes the problem with tcp.
<br>
<p>Best regards,
<br>
Elena
<br>
<p>On Thu, Nov 6, 2014 at 10:44 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I pushed a slightly better patch for the TCP BTL
</span><br>
<span class="quotelev1">&gt; (54ddb0aece0892dcdb1a1293a3bd3902b5f3acdc). The correct scheme would be to
</span><br>
<span class="quotelev1">&gt; OBJ_RETAIN the proc once it is attached to the btl_proc and release it upon
</span><br>
<span class="quotelev1">&gt; destruction of the btl_proc. However, for some obscure reason this doesn't
</span><br>
<span class="quotelev1">&gt; quite works, as the main opel_proc is apparently already destroyed when we
</span><br>
<span class="quotelev1">&gt; try to finalize the TCP BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Sorry Dave I also pushed a master branch merge ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 6, 2014 at 1:10 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i updated the MODEX flag to PMIX_GLOBAL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/d542c9ff2dc57ca5d260d0578fd5c1c556c598c7">https://github.com/open-mpi/ompi/commit/d542c9ff2dc57ca5d260d0578fd5c1c556c598c7</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Elena,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i was able to reproduce the issue (salloc -N 5 mpirun -np 2 is enough).
</span><br>
<span class="quotelev2">&gt;&gt; i was &quot;lucky&quot; to reproduce the issue : it happened because one of node
</span><br>
<span class="quotelev2">&gt;&gt; was misconfigured
</span><br>
<span class="quotelev2">&gt;&gt; with two interfaces in the same subnet (!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please give a try to the attached patch ?
</span><br>
<span class="quotelev2">&gt;&gt; i did not commit it because i do not know if this is the right fix or a
</span><br>
<span class="quotelev2">&gt;&gt; simple workaround
</span><br>
<span class="quotelev2">&gt;&gt; /* for example, should the opal_proc_t be OBJ_RETAINed before invoking
</span><br>
<span class="quotelev2">&gt;&gt; add_procs and
</span><br>
<span class="quotelev2">&gt;&gt; then be OBJ_RELEASEd by the btl add_proc if it is unreachable ? */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/11/06 12:46, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Nov 5, 2014, at 6:11 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Elena,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the first case (-mca btl tcp,self) crashing is a bug and i will have a look at it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the second case (-mca sm,self) is a feature : the sm btl cannot be used with tasks
</span><br>
<span class="quotelev2">&gt;&gt; having different jobids (this is the case after a spawn), and obviously, self cannot be used also,
</span><br>
<span class="quotelev2">&gt;&gt; so the behaviour and error message is correct.
</span><br>
<span class="quotelev2">&gt;&gt; /* i am not aware of any plans to make the sm btl work with tasks from different jobids */\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  That is correct - I&#226;&#128;&#153;m also unaware of any plans to extend it at this point, though IIRC Nathan at one time mentioned perhaps extending vader for that purpose
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  the third case (-mca openib,self) is more controversial ...
</span><br>
<span class="quotelev2">&gt;&gt; i previously posted <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16136.php">http://www.open-mpi.org/community/lists/devel/2014/10/16136.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16136.php">http://www.open-mpi.org/community/lists/devel/2014/10/16136.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16136.php">http://www.open-mpi.org/community/lists/devel/2014/10/16136.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what happens in your case (simple_spawn) is the openib modex is sent with PMIX_REMOTE,
</span><br>
<span class="quotelev2">&gt;&gt; that means openib btl cannot be used between tasks on the same node.
</span><br>
<span class="quotelev2">&gt;&gt; i am still waiting for some feedback since i cannot figure out whether this is a feature or an
</span><br>
<span class="quotelev2">&gt;&gt; undesired side effect / bug
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I believe it is a bug - I provided some initial values for the modex scope with the expectation (and request when we committed it) that people would review and modify them as appropriate. I recall setting the openib scope as &#226;&#128;&#156;remote&#226;&#128;&#157; only because I wasn&#226;&#128;&#153;t aware of anyone using it for local comm. Since Mellanox obviously is testing for that case, a scope of PMIX_GLOBAL would be more appropriate
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  the last cast (-mca ^sm,openib) does make sense to me :
</span><br>
<span class="quotelev2">&gt;&gt; the tcp and self btls are used and they work just like they should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, i will investigate the first crash, wait for feedback about the openib btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/11/06 1:08, Elena Elkina wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like there is a problem in trunk which reproduces with
</span><br>
<span class="quotelev2">&gt;&gt; simple_spawn test (orte/test/mpi/simple_spawn.c). It seems to be a n issue
</span><br>
<span class="quotelev2">&gt;&gt; with pmix. It doesn't reproduce with default set of btls. But it reproduces
</span><br>
<span class="quotelev2">&gt;&gt; with several btls specified. For example,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; salloc -N5 $OMPI_HOME/install/bin/mpirun -np 33 --map-by node -mca coll ^ml
</span><br>
<span class="quotelev2">&gt;&gt; -display-map -mca orte_debug_daemons true --leave-session-attached
</span><br>
<span class="quotelev2">&gt;&gt; --debug-daemons -mca pml ob1 -mca btl *tcp,self*
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/test/mpi/simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gets
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simple_spawn: ../../ompi/group/group_init.c:215:
</span><br>
<span class="quotelev2">&gt;&gt; ompi_group_increment_proc_count: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev2">&gt;&gt; 0xdeafbeedULL) == ((opal_object_t *) (proc_pointer))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev2">&gt;&gt; [sputnik3.vbench.com:28888] [[41877,0],3] orted_cmd: exit cmd, but proc
</span><br>
<span class="quotelev2">&gt;&gt; [[41877,1],2] is alive
</span><br>
<span class="quotelev2">&gt;&gt; [sputnik5][[41877,1],29][../../../../../opal/mca/btl/tcp/btl_tcp_endpoint.c:675:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() to 192.168.1.42 failed: Connection refused (111)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; salloc -N1 $OMPI_HOME/install/bin/mpirun -np 3 --map-by node -mca coll ^ml
</span><br>
<span class="quotelev2">&gt;&gt; -display-map -mca orte_debug_daemons true --leave-session-attached
</span><br>
<span class="quotelev2">&gt;&gt; --debug-daemons -mca pml ob1 -mca btl *sm,self* ./orte/test/mpi/simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fails with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[59481,2],0]) is on host: sputnik1
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[59481,1],0]) is on host: sputnik1
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sputnik1.vbench.com:22156] [[59481,1],2] ORTE_ERROR_LOG: Unreachable in
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../ompi/mca/dpm/orte/dpm_orte.c at line 485
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; salloc -N1 $OMPI_HOME/install/bin/mpirun -np 3 --map-by node -mca coll ^ml
</span><br>
<span class="quotelev2">&gt;&gt; -display-map -mca orte_debug_daemons true --leave-session-attached
</span><br>
<span class="quotelev2">&gt;&gt; --debug-daemons -mca pml ob1 -mca btl *openib,self*
</span><br>
<span class="quotelev2">&gt;&gt;  ./orte/test/mpi/simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; also doesn't work:
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[60046,1],13]) is on host: sputnik4
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[60046,2],1]) is on host: sputnik4
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: openib self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sputnik4.vbench.com:25476] [[60046,1],3] ORTE_ERROR_LOG: Unreachable in
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../ompi/mca/dpm/orte/dpm_orte.c at line 485
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *But* combination ^sm,openib seems to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried different revisions from the beginning of October. It reproduces on
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16202.php">http://www.open-mpi.org/community/lists/devel/2014/11/16202.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16202.php">http://www.open-mpi.org/community/lists/devel/2014/11/16202.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16202.php">http://www.open-mpi.org/community/lists/devel/2014/11/16202.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16223.php">http://www.open-mpi.org/community/lists/devel/2014/11/16223.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16225.php">http://www.open-mpi.org/community/lists/devel/2014/11/16225.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16226.php">http://www.open-mpi.org/community/lists/devel/2014/11/16226.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16227.php">http://www.open-mpi.org/community/lists/devel/2014/11/16227.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16229.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Previous message:</strong> <a href="16227.php">George Bosilca: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>In reply to:</strong> <a href="16227.php">George Bosilca: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16232.php">Dave Goodell (dgoodell): "Re: [OMPI devel] simple_spawn test fails using different set of	btls."</a>
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
