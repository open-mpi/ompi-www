<?
$subject_val = "Re: [OMPI devel] simple_spawn test fails using different set of btls.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 21:11:26 2014" -->
<!-- isoreceived="20141106021126" -->
<!-- sent="Thu, 06 Nov 2014 11:11:33 +0900" -->
<!-- isosent="20141106021133" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] simple_spawn test fails using different set of btls." -->
<!-- id="545AD8D5.905_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANhOtjb_Ht=w=96dJLxf8YLSsBCT-jqrczRteZTJ3sGe4=EzMw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 21:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16224.php">Paul Hargrove: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16202.php">Elena Elkina: "[OMPI devel] simple_spawn test fails using different set of btls."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16225.php">Ralph Castain: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>Reply:</strong> <a href="16225.php">Ralph Castain: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Elena,
<br>
<p>the first case (-mca btl tcp,self) crashing is a bug and i will have a
<br>
look at it.
<br>
<p>the second case (-mca sm,self) is a feature : the sm btl cannot be used
<br>
with tasks
<br>
having different jobids (this is the case after a spawn), and obviously,
<br>
self cannot be used also,
<br>
so the behaviour and error message is correct.
<br>
/* i am not aware of any plans to make the sm btl work with tasks from
<br>
different jobids */
<br>
<p>the third case (-mca openib,self) is more controversial ...
<br>
i previously posted
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16136.php">http://www.open-mpi.org/community/lists/devel/2014/10/16136.php</a>
<br>
what happens in your case (simple_spawn) is the openib modex is sent
<br>
with PMIX_REMOTE,
<br>
that means openib btl cannot be used between tasks on the same node.
<br>
i am still waiting for some feedback since i cannot figure out whether
<br>
this is a feature or an
<br>
undesired side effect / bug
<br>
<p>the last cast (-mca ^sm,openib) does make sense to me :
<br>
the tcp and self btls are used and they work just like they should.
<br>
<p>bottom line, i will investigate the first crash, wait for feedback about
<br>
the openib btl.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/11/06 1:08, Elena Elkina wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there is a problem in trunk which reproduces with
</span><br>
<span class="quotelev1">&gt; simple_spawn test (orte/test/mpi/simple_spawn.c). It seems to be a n issue
</span><br>
<span class="quotelev1">&gt; with pmix. It doesn't reproduce with default set of btls. But it reproduces
</span><br>
<span class="quotelev1">&gt; with several btls specified. For example,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; salloc -N5 $OMPI_HOME/install/bin/mpirun -np 33 --map-by node -mca coll ^ml
</span><br>
<span class="quotelev1">&gt; -display-map -mca orte_debug_daemons true --leave-session-attached
</span><br>
<span class="quotelev1">&gt; --debug-daemons -mca pml ob1 -mca btl *tcp,self*
</span><br>
<span class="quotelev1">&gt; ./orte/test/mpi/simple_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gets
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simple_spawn: ../../ompi/group/group_init.c:215:
</span><br>
<span class="quotelev1">&gt; ompi_group_increment_proc_count: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev1">&gt; 0xdeafbeedULL) == ((opal_object_t *) (proc_pointer))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [sputnik3.vbench.com:28888] [[41877,0],3] orted_cmd: exit cmd, but proc
</span><br>
<span class="quotelev1">&gt; [[41877,1],2] is alive
</span><br>
<span class="quotelev1">&gt; [sputnik5][[41877,1],29][../../../../../opal/mca/btl/tcp/btl_tcp_endpoint.c:675:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.1.42 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; salloc -N1 $OMPI_HOME/install/bin/mpirun -np 3 --map-by node -mca coll ^ml
</span><br>
<span class="quotelev1">&gt; -display-map -mca orte_debug_daemons true --leave-session-attached
</span><br>
<span class="quotelev1">&gt; --debug-daemons -mca pml ob1 -mca btl *sm,self* ./orte/test/mpi/simple_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fails with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[59481,2],0]) is on host: sputnik1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[59481,1],0]) is on host: sputnik1
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sputnik1.vbench.com:22156] [[59481,1],2] ORTE_ERROR_LOG: Unreachable in
</span><br>
<span class="quotelev1">&gt; file ../../../../../ompi/mca/dpm/orte/dpm_orte.c at line 485
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; salloc -N1 $OMPI_HOME/install/bin/mpirun -np 3 --map-by node -mca coll ^ml
</span><br>
<span class="quotelev1">&gt; -display-map -mca orte_debug_daemons true --leave-session-attached
</span><br>
<span class="quotelev1">&gt; --debug-daemons -mca pml ob1 -mca btl *openib,self*
</span><br>
<span class="quotelev1">&gt;  ./orte/test/mpi/simple_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also doesn't work:
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[60046,1],13]) is on host: sputnik4
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[60046,2],1]) is on host: sputnik4
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sputnik4.vbench.com:25476] [[60046,1],3] ORTE_ERROR_LOG: Unreachable in
</span><br>
<span class="quotelev1">&gt; file ../../../../../ompi/mca/dpm/orte/dpm_orte.c at line 485
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *But* combination ^sm,openib seems to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried different revisions from the beginning of October. It reproduces on
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16202.php">http://www.open-mpi.org/community/lists/devel/2014/11/16202.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16224.php">Paul Hargrove: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16202.php">Elena Elkina: "[OMPI devel] simple_spawn test fails using different set of btls."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16225.php">Ralph Castain: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>Reply:</strong> <a href="16225.php">Ralph Castain: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
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
