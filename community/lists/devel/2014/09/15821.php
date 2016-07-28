<?
$subject_val = "Re: [OMPI devel] mpirun + aprun question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 14:25:27 2014" -->
<!-- isoreceived="20140912182527" -->
<!-- sent="Fri, 12 Sep 2014 11:24:40 -0700" -->
<!-- isosent="20140912182440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun + aprun question" -->
<!-- id="3FC6C0CB-7604-4252-8471-9FABDAABACC5_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05B204E5_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun + aprun question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 14:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15822.php">Ralph Castain: "[OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Previous message:</strong> <a href="15820.php">Pritchard Jr., Howard: "[OMPI devel] mpirun + aprun question"</a>
<li><strong>In reply to:</strong> <a href="15820.php">Pritchard Jr., Howard: "[OMPI devel] mpirun + aprun question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Odd - I'm pretty sure it does indeed build the -L argument...and indeed, it does:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (nnode=0; nnode &lt; map-&gt;nodes-&gt;size; nnode++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, nnode))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if the daemon already exists on this node, then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* don't include it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_FLAG_TEST(node, ORTE_NODE_FLAG_DAEMON_LAUNCHED)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* otherwise, add it to the list of nodes upon which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* we need to launch a daemon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;nodelist_argc, &amp;nodelist_argv, node-&gt;name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (0 == opal_argv_count(nodelist_argv)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-plm-alps.txt&quot;, &quot;no-hosts-in-list&quot;, true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ORTE_ERR_FAILED_TO_START;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodelist_flat = opal_argv_join(nodelist_argv, ',');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_free(nodelist_argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* if we are using all allocated nodes, then alps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* doesn't need a nodelist
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (map-&gt;num_new_daemons &lt; orte_num_allocated_nodes) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;argc, &amp;argv, &quot;-L&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;argc, &amp;argv, nodelist_flat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>So maybe the --host option isn't working right for this environment? You could look at the setup_virtual_machine function in orte/mca/plm/base/plm_base_launch_support.c
<br>
<p>Set &quot;-mca plm_base_verbose 100 -mca ras_base_verbose 100&quot; and it should tell you something about how it processed the allocation to define the VM.
<br>
<p>There is also some oddball stuff Nathan inserted to redefine node location - maybe that is getting confused when running on partial allocations? It's in the same file, in the orte_plm_base_daemon_callback routine. Could be that the daemons actually are running on the nodes you specified, but think they are somewhere else.
<br>
<p><p>On Sep 12, 2014, at 11:13 AM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So, I&#146;ve got a testbed cray system with no batch scheduler, just use the native
</span><br>
<span class="quotelev1">&gt; alps both as the resource manager and as the job launcher for the orte daemons.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What I&#146;m noticing is that the mpirun command and &#150;host option, or otherwise
</span><br>
<span class="quotelev1">&gt; trying to specify via an mpirun way, the nodes to run the app on is ignored.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In this sort of environment, ORTE is going to need to figure out how to load up
</span><br>
<span class="quotelev1">&gt; the aprun &#150;L list_of_nids argument, but apparently doesn&#146;t do that.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is this intended behavior?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; crayadm_at_buffy:~/hpp&gt; mpirun -np 2 -N 1  --debug-daemons --host nid00022,nid00021 ./my_script.sh
</span><br>
<span class="quotelev1">&gt; plm:alps aprun -n 2 -N 1 -cc none orted -mca orte_debug_daemons 1 -mca orte_ess_jobid 337444864 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 -mca orte_hnp_uri 337444864.0;tcp://10.128.0.3:39190
</span><br>
<span class="quotelev1">&gt; Daemon [[5149,0],1] checking in as pid 7398 on host 20
</span><br>
<span class="quotelev1">&gt; Daemon [[5149,0],1] checking in as pid 6540 on host 21
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What&#146;s happening is that alps is just doing its default thing of grabbing the first set of nodes it can, which on
</span><br>
<span class="quotelev1">&gt; my little machine starts at nid00020.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What I&#146;d prefer to see with ORTE and alps is that ORTE always build the explicit &#150;L list_of_nids
</span><br>
<span class="quotelev1">&gt; so that a user can control the way the orte&#146;s are being launched, just as with using aprun directly
</span><br>
<span class="quotelev1">&gt; one can do either within a non alps managed batch environment and when a batch scheduler
</span><br>
<span class="quotelev1">&gt; is managing things and telling alps where to launch the job.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I had to use this &#150;L feature a lot when debugging large customer system problems.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can I assume LANL owns the alps pml component?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-5
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15820.php">http://www.open-mpi.org/community/lists/devel/2014/09/15820.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15821/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15822.php">Ralph Castain: "[OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Previous message:</strong> <a href="15820.php">Pritchard Jr., Howard: "[OMPI devel] mpirun + aprun question"</a>
<li><strong>In reply to:</strong> <a href="15820.php">Pritchard Jr., Howard: "[OMPI devel] mpirun + aprun question"</a>
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
