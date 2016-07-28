<?
$subject_val = "[OMPI devel] MPI_T and coll/tuned module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 02:47:53 2016" -->
<!-- isoreceived="20160610064753" -->
<!-- sent="Fri, 10 Jun 2016 15:47:41 +0900" -->
<!-- isosent="20160610064741" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_T and coll/tuned module" -->
<!-- id="3a967744-7e33-1bec-d435-5aaa70df11e1_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_T and coll/tuned module<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-10 02:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19093.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Reply:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p><p>i was thinking of using the MPI_T interface in order to try within the 
<br>
same MPI test program *all* the available algo of a given collective.
<br>
<p><p>That cannot currently be done because the mca parameter is registered with
<br>
<p>{flag=0, scope=MCA_BASE_VAR_SCOPE_READONLY}
<br>
<p><p>i made a proof of concept by changing this to
<br>
<p>{flag=MCA_BASE_VAR_FLAG_SETTABLE, scope=MCA_VAR_SCOPE_ALL}
<br>
<p>(see the inline patch below)
<br>
<p><p>strictly speaking, it does not work since the updated values are used 
<br>
next time a communicator is created.
<br>
<p>for example, changing a value on MPI_COMM_WORLD has no effect,
<br>
<p>but changing a value, MPI_Comm_dup(MPI_COMM_WORLD) and using the dup'ed 
<br>
communicator works.
<br>
<p>btw, i guess any communicator could be used to set the value.
<br>
<p><p>as far as i am concerned, that is good enough for me
<br>
<p><p>any objections to make some coll/tuned parameters writable by MPI_T ?
<br>
<p>if no, did i implement it correctly ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>here is the function that sets a value :
<br>
<p>int setValue_int_comm(int index, MPI_Comm comm, int *val) {
<br>
&nbsp;&nbsp;&nbsp;int err,count;
<br>
&nbsp;&nbsp;&nbsp;MPI_T_cvar_handle handle;
<br>
&nbsp;&nbsp;&nbsp;/* This example assumes that the variable index */
<br>
&nbsp;&nbsp;&nbsp;/* can be bound to a communicator */
<br>
err=MPI_T_cvar_handle_alloc(index,&amp;comm,&amp;handle,&amp;count);
<br>
&nbsp;&nbsp;&nbsp;if (err!=MPI_SUCCESS) return err;
<br>
&nbsp;&nbsp;&nbsp;/* The following assumes that the variable is */
<br>
&nbsp;&nbsp;&nbsp;/* represented by a single integer */
<br>
&nbsp;&nbsp;&nbsp;err=MPI_T_cvar_write(handle,val);
<br>
&nbsp;&nbsp;&nbsp;if (err!=MPI_SUCCESS) return err;
<br>
&nbsp;&nbsp;&nbsp;err=MPI_T_cvar_handle_free(&amp;handle);
<br>
&nbsp;&nbsp;&nbsp;return err;
<br>
}
<br>
<p>and here is the proof of concept
<br>
<p>diff --git a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c 
<br>
b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
<br>
index 81345b2..31ca217 100644
<br>
--- a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
<br>
+++ b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
<br>
@@ -76,9 +76,9 @@ int ompi_coll_tuned_bcast_intra_check_forced_init 
<br>
(coll_tuned_force_algorithm_mc
<br>
mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;bcast_algorithm&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Which bcast algorithm is 
<br>
used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2 
<br>
chain, 3: pipeline, 4: split binary tree, 5: binary tree, 6: binomial 
<br>
tree.&quot;,
<br>
-                                        MCA_BASE_VAR_TYPE_INT, 
<br>
new_enum, 0, 0,
<br>
+                                        MCA_BASE_VAR_TYPE_INT, 
<br>
new_enum, 0, MCA_BASE_VAR_FLAG_SETTABLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_INFO_LVL_5,
<br>
- MCA_BASE_VAR_SCOPE_READONLY,
<br>
+                                        MCA_BASE_VAR_SCOPE_ALL,
<br>
&amp;coll_tuned_bcast_forced_algorithm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(new_enum);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_param_indices-&gt;algorithm_param_index &lt; 0) {
<br>
diff --git a/ompi/mca/coll/tuned/coll_tuned_component.c 
<br>
b/ompi/mca/coll/tuned/coll_tuned_component.c
<br>
index 9756359..ea389fd 100644
<br>
--- a/ompi/mca/coll/tuned/coll_tuned_component.c
<br>
+++ b/ompi/mca/coll/tuned/coll_tuned_component.c
<br>
@@ -164,9 +164,9 @@ static int tuned_register(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void) 
<br>
mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;use_dynamic_rules&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Switch used to decide if 
<br>
we use static (compiled/if statements) or dynamic (built at runtime) 
<br>
decision function rules&quot;,
<br>
- MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0,
<br>
+ MCA_BASE_VAR_TYPE_BOOL, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_INFO_LVL_6,
<br>
- MCA_BASE_VAR_SCOPE_READONLY,
<br>
+ MCA_BASE_VAR_SCOPE_ALL,
<br>
&amp;ompi_coll_tuned_use_dynamic_rules);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_dynamic_rules_filename = NULL;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19093.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Reply:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
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
