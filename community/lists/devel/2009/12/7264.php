<?
$subject_val = "Re: [OMPI devel] using hnp_always_use_plm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 10:51:07 2009" -->
<!-- isoreceived="20091218155107" -->
<!-- sent="Fri, 18 Dec 2009 17:10:31 +0100" -->
<!-- isosent="20091218161031" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] using hnp_always_use_plm" -->
<!-- id="4B2BA977.8090303_at_ext.bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BADE02D2-CFCF-4EAB-A268-39B77A9E20B4_at_open-mpi.org" -->
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
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-18 11:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Previous message:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>In reply to:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Reply:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry , I am not clear. That true, the same PLM is use on all node.
<br>
my parameter name is incorrect , &quot;mpirun_not_as_orted&quot; is better. My 
<br>
problem is simple:
<br>
-   I want &quot;mpirun&quot; haven't the &quot;orted&quot; launch feature.
<br>
-   To create processes on the &quot;mpirun node&quot;, I want launch by &quot;plm&quot; an 
<br>
&quot;orted&quot; ( on this &quot;mpirun node&quot;), and ask orted, to create processes.
<br>
<p>With this way, process tracker, debug tools have no difference between 
<br>
nodes.
<br>
<p>Sorry for this confusion.
<br>
Damien
<br>
<p>Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; It isn't necessary. The orted already will open and use the local plm 
</span><br>
<span class="quotelev1">&gt; if you simply set OMPI_MCA_plm=foo in its environment. The rsh, tm, 
</span><br>
<span class="quotelev1">&gt; and slurm plm modules already do this so that they can execute a 
</span><br>
<span class="quotelev1">&gt; tree-like spawn (for rsh) and because I needed ssh on the backend 
</span><br>
<span class="quotelev1">&gt; nodes to locally launch &quot;slaves&quot; on RoadRunner and other machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The required code (already in those modules) is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* enable local launch by the orteds */
</span><br>
<span class="quotelev1">&gt;     var = mca_base_param_environ_variable(&quot;plm&quot;, NULL, NULL);
</span><br>
<span class="quotelev1">&gt;     opal_setenv(var, &quot;rsh&quot;, true, &amp;env);
</span><br>
<span class="quotelev1">&gt;     free(var);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You don't want the orted using the hnp ess module as it will then try 
</span><br>
<span class="quotelev1">&gt; to track its own launches and totally forget that it is a remote orted 
</span><br>
<span class="quotelev1">&gt; with slightly different responsibilities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need it to execute a different plm on the backend, please let 
</span><br>
<span class="quotelev1">&gt; me know - it is a trivial change to allow specification of remote 
</span><br>
<span class="quotelev1">&gt; launch agents, and we should do it for them all if we do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2009, at 7:43 AM, Damien Guinier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Openmpi, I working on a new little feature: hnp_always_use_plm.
</span><br>
<span class="quotelev2">&gt;&gt; - To create final application , mpirun use on remote &quot;orted via plm: 
</span><br>
<span class="quotelev2">&gt;&gt; Process lifecycle managment module&quot; or localy &quot;fork()&quot;. So the first 
</span><br>
<span class="quotelev2">&gt;&gt; compute node haven't the same methode than other compute node. Some 
</span><br>
<span class="quotelev2">&gt;&gt; debug tools(padb ...) and management tools (squeus -s ...) are 
</span><br>
<span class="quotelev2">&gt;&gt; impacted by this difference.
</span><br>
<span class="quotelev2">&gt;&gt; To simplify this cluster tools usage, I propose to add the 
</span><br>
<span class="quotelev2">&gt;&gt; possibility to use &quot;orted via plm&quot; on remote and localy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I make a patch to add the parameter 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OMPI_MCA_ess_hnp_always_use_plm&quot;, to use the &quot;plm&quot; module 
</span><br>
<span class="quotelev2">&gt;&gt; everywhere. On my patch , by default nothing is changed ( no impact).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you say to me , if this feature( and the patch) is good ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thank you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff orte/mca/ess/hnp/ess_hnp.h
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/ess/hnp/ess_hnp.h        Tue Dec 15 15:31:24 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/ess/hnp/ess_hnp.h        Tue Dec 15 18:19:18 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -27,7 +27,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; int orte_ess_hnp_component_open(void);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_ess_hnp_component_close(void);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_ess_hnp_component_query(mca_base_module_t **module, int 
</span><br>
<span class="quotelev2">&gt;&gt; *priority);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +extern int mca_ess_hnp_always_use_plm;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_MODULE_DECLSPEC extern orte_ess_base_component_t 
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_hnp_component;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff orte/mca/ess/hnp/ess_hnp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/ess/hnp/ess_hnp_component.c      Tue Dec 15 15:31:24 
</span><br>
<span class="quotelev2">&gt;&gt; 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/ess/hnp/ess_hnp_component.c      Tue Dec 15 18:19:18 
</span><br>
<span class="quotelev2">&gt;&gt; 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/ess/hnp/ess_hnp.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; extern orte_ess_base_module_t orte_ess_hnp_module;
</span><br>
<span class="quotelev2">&gt;&gt; +int mca_ess_hnp_always_use_plm = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Instantiate the public struct with all of our public information
</span><br>
<span class="quotelev2">&gt;&gt; @@ -63,6 +64,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_hnp_component_open(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; + 
</span><br>
<span class="quotelev2">&gt;&gt;               mca_base_param_reg_int(&amp;mca_ess_hnp_component.base_version,
</span><br>
<span class="quotelev2">&gt;&gt; +                &quot;always_use_plm&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                &quot;Used to force plm on all machine&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                false,false, mca_ess_hnp_always_use_plm 
</span><br>
<span class="quotelev2">&gt;&gt; ,&amp;mca_ess_hnp_always_use_plm);
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/ess/hnp/ess_hnp_module.c Tue Dec 15 15:31:24 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/ess/hnp/ess_hnp_module.c Tue Dec 15 18:19:18 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -442,9 +442,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;     * node object
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_RETAIN(proc);   /* keep accounting straight */
</span><br>
<span class="quotelev2">&gt;&gt; +    if(mca_ess_hnp_always_use_plm==0)
</span><br>
<span class="quotelev2">&gt;&gt; +    {
</span><br>
<span class="quotelev2">&gt;&gt;    node-&gt;daemon = proc;
</span><br>
<span class="quotelev2">&gt;&gt;    node-&gt;daemon_launched = true;
</span><br>
<span class="quotelev2">&gt;&gt;    node-&gt;state = ORTE_NODE_STATE_UP;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* record that the daemon job is running */
</span><br>
<span class="quotelev2">&gt;&gt;    jdata-&gt;num_procs = 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Previous message:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>In reply to:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Reply:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
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
