<?
$subject_val = "Re: [OMPI devel] using hnp_always_use_plm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 09:45:22 2009" -->
<!-- isoreceived="20091218144522" -->
<!-- sent="Fri, 18 Dec 2009 07:45:12 -0700" -->
<!-- isosent="20091218144512" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] using hnp_always_use_plm" -->
<!-- id="BADE02D2-CFCF-4EAB-A268-39B77A9E20B4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B2B94FB.4020207_at_ext.bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] using hnp_always_use_plm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-18 09:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7264.php">Damien Guinier: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Previous message:</strong> <a href="7262.php">Damien Guinier: "[OMPI devel] using hnp_always_use_plm"</a>
<li><strong>In reply to:</strong> <a href="7262.php">Damien Guinier: "[OMPI devel] using hnp_always_use_plm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7264.php">Damien Guinier: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Reply:</strong> <a href="7264.php">Damien Guinier: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't necessary. The orted already will open and use the local plm if you simply set OMPI_MCA_plm=foo in its environment. The rsh, tm, and slurm plm modules already do this so that they can execute a tree-like spawn (for rsh) and because I needed ssh on the backend nodes to locally launch &quot;slaves&quot; on RoadRunner and other machines.
<br>
<p>The required code (already in those modules) is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* enable local launch by the orteds */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;var = mca_base_param_environ_variable(&quot;plm&quot;, NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_setenv(var, &quot;rsh&quot;, true, &amp;env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(var);
<br>
<p><p>You don't want the orted using the hnp ess module as it will then try to track its own launches and totally forget that it is a remote orted with slightly different responsibilities.
<br>
<p>If you need it to execute a different plm on the backend, please let me know - it is a trivial change to allow specification of remote launch agents, and we should do it for them all if we do.
<br>
<p>Ralph
<br>
<p>On Dec 18, 2009, at 7:43 AM, Damien Guinier wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Openmpi, I working on a new little feature: hnp_always_use_plm.
</span><br>
<span class="quotelev1">&gt; - To create final application , mpirun use on remote &quot;orted via plm: Process lifecycle managment module&quot; or localy &quot;fork()&quot;. So the first compute node haven't the same methode than other compute node. Some debug tools(padb ...) and management tools (squeus -s ...) are impacted by this difference.
</span><br>
<span class="quotelev1">&gt; To simplify this cluster tools usage, I propose to add the possibility to use &quot;orted via plm&quot; on remote and localy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I make a patch to add the parameter &quot;OMPI_MCA_ess_hnp_always_use_plm&quot;, to use the &quot;plm&quot; module everywhere. On my patch , by default nothing is changed ( no impact).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you say to me , if this feature( and the patch) is good ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff orte/mca/ess/hnp/ess_hnp.h
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/hnp/ess_hnp.h        Tue Dec 15 15:31:24 2009 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/hnp/ess_hnp.h        Tue Dec 15 18:19:18 2009 +0100
</span><br>
<span class="quotelev1">&gt; @@ -27,7 +27,7 @@
</span><br>
<span class="quotelev1">&gt; int orte_ess_hnp_component_open(void);
</span><br>
<span class="quotelev1">&gt; int orte_ess_hnp_component_close(void);
</span><br>
<span class="quotelev1">&gt; int orte_ess_hnp_component_query(mca_base_module_t **module, int *priority);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +extern int mca_ess_hnp_always_use_plm;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_MODULE_DECLSPEC extern orte_ess_base_component_t mca_ess_hnp_component;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff orte/mca/ess/hnp/ess_hnp_component.c
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/hnp/ess_hnp_component.c      Tue Dec 15 15:31:24 2009 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/hnp/ess_hnp_component.c      Tue Dec 15 18:19:18 2009 +0100
</span><br>
<span class="quotelev1">&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/ess/hnp/ess_hnp.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; extern orte_ess_base_module_t orte_ess_hnp_module;
</span><br>
<span class="quotelev1">&gt; +int mca_ess_hnp_always_use_plm = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * Instantiate the public struct with all of our public information
</span><br>
<span class="quotelev1">&gt; @@ -63,6 +64,10 @@
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; orte_ess_hnp_component_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; +               mca_base_param_reg_int(&amp;mca_ess_hnp_component.base_version,
</span><br>
<span class="quotelev1">&gt; +                &quot;always_use_plm&quot;,
</span><br>
<span class="quotelev1">&gt; +                &quot;Used to force plm on all machine&quot;,
</span><br>
<span class="quotelev1">&gt; +                false,false, mca_ess_hnp_always_use_plm ,&amp;mca_ess_hnp_always_use_plm);
</span><br>
<span class="quotelev1">&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/hnp/ess_hnp_module.c Tue Dec 15 15:31:24 2009 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/hnp/ess_hnp_module.c Tue Dec 15 18:19:18 2009 +0100
</span><br>
<span class="quotelev1">&gt; @@ -442,9 +442,12 @@
</span><br>
<span class="quotelev1">&gt;     * node object
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    OBJ_RETAIN(proc);   /* keep accounting straight */
</span><br>
<span class="quotelev1">&gt; +    if(mca_ess_hnp_always_use_plm==0)
</span><br>
<span class="quotelev1">&gt; +    {
</span><br>
<span class="quotelev1">&gt;    node-&gt;daemon = proc;
</span><br>
<span class="quotelev1">&gt;    node-&gt;daemon_launched = true;
</span><br>
<span class="quotelev1">&gt;    node-&gt;state = ORTE_NODE_STATE_UP;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* record that the daemon job is running */
</span><br>
<span class="quotelev1">&gt;    jdata-&gt;num_procs = 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7263/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7264.php">Damien Guinier: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Previous message:</strong> <a href="7262.php">Damien Guinier: "[OMPI devel] using hnp_always_use_plm"</a>
<li><strong>In reply to:</strong> <a href="7262.php">Damien Guinier: "[OMPI devel] using hnp_always_use_plm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7264.php">Damien Guinier: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Reply:</strong> <a href="7264.php">Damien Guinier: "Re: [OMPI devel] using hnp_always_use_plm"</a>
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
