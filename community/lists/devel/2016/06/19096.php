<?
$subject_val = "Re: [OMPI devel] MPI_T and coll/tuned module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 04:23:39 2016" -->
<!-- isoreceived="20160610082339" -->
<!-- sent="Fri, 10 Jun 2016 17:23:35 +0900" -->
<!-- isosent="20160610082335" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_T and coll/tuned module" -->
<!-- id="912ef4a3-d69a-3d4e-d299-c10537f883e4_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkV4YPrSTggJph-d6woEkZNDjY0WmotFBU=fUh9+0O4kQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_T and coll/tuned module<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-10 04:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
<li><strong>Previous message:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>In reply to:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Reply:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George, i will try to find it.
<br>
<p><p>for the second part, and if i read between the lines, that means a 
<br>
collective operation cannot have non deterministic paths, such as
<br>
<p>for (...) MPI_Irecv();
<br>
<p>for (...) { MPI_Waitany(); ompi_op_reduce(); }
<br>
<p>is that *really* prohibited ? i thought it was &quot;only&quot; *strongly 
<br>
discouraged* ...
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/10/2016 5:10 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; There is a mechanism to select the collective algorithm upon 
</span><br>
<span class="quotelev1">&gt; communicator creation. It is not using MPI_T (as this mechanism didn't 
</span><br>
<span class="quotelev1">&gt; exist at the tuned conception), but it behave in a similar manner. You 
</span><br>
<span class="quotelev1">&gt; simply update an MCA param (I do not remember the name and I'm not 
</span><br>
<span class="quotelev1">&gt; close to my computer), and the next communicator creation will 
</span><br>
<span class="quotelev1">&gt; automatically adapt its behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said it would be illegal in MQPI lingo to change the 
</span><br>
<span class="quotelev1">&gt; collective algorithm on an existing comomunicator, especially for 
</span><br>
<span class="quotelev1">&gt; reduction operations. It is clearly specified that if you execute 
</span><br>
<span class="quotelev1">&gt; multiple times a collective between the same processes with the same 
</span><br>
<span class="quotelev1">&gt; values and in the context of the same run you should get the exact 
</span><br>
<span class="quotelev1">&gt; same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, June 10, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i was thinking of using the MPI_T interface in order to try within
</span><br>
<span class="quotelev1">&gt;     the same MPI test program *all* the available algo of a given
</span><br>
<span class="quotelev1">&gt;     collective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That cannot currently be done because the mca parameter is
</span><br>
<span class="quotelev1">&gt;     registered with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {flag=0, scope=MCA_BASE_VAR_SCOPE_READONLY}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i made a proof of concept by changing this to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {flag=MCA_BASE_VAR_FLAG_SETTABLE, scope=MCA_VAR_SCOPE_ALL}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (see the inline patch below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     strictly speaking, it does not work since the updated values are
</span><br>
<span class="quotelev1">&gt;     used next time a communicator is created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for example, changing a value on MPI_COMM_WORLD has no effect,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     but changing a value, MPI_Comm_dup(MPI_COMM_WORLD) and using the
</span><br>
<span class="quotelev1">&gt;     dup'ed communicator works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     btw, i guess any communicator could be used to set the value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     as far as i am concerned, that is good enough for me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     any objections to make some coll/tuned parameters writable by MPI_T ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if no, did i implement it correctly ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     here is the function that sets a value :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int setValue_int_comm(int index, MPI_Comm comm, int *val) {
</span><br>
<span class="quotelev1">&gt;       int err,count;
</span><br>
<span class="quotelev1">&gt;       MPI_T_cvar_handle handle;
</span><br>
<span class="quotelev1">&gt;       /* This example assumes that the variable index */
</span><br>
<span class="quotelev1">&gt;       /* can be bound to a communicator */
</span><br>
<span class="quotelev1">&gt;     err=MPI_T_cvar_handle_alloc(index,&amp;comm,&amp;handle,&amp;count);
</span><br>
<span class="quotelev1">&gt;       if (err!=MPI_SUCCESS) return err;
</span><br>
<span class="quotelev1">&gt;       /* The following assumes that the variable is */
</span><br>
<span class="quotelev1">&gt;       /* represented by a single integer */
</span><br>
<span class="quotelev1">&gt;       err=MPI_T_cvar_write(handle,val);
</span><br>
<span class="quotelev1">&gt;       if (err!=MPI_SUCCESS) return err;
</span><br>
<span class="quotelev1">&gt;       err=MPI_T_cvar_handle_free(&amp;handle);
</span><br>
<span class="quotelev1">&gt;       return err;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     and here is the proof of concept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     diff --git a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt;     b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt;     index 81345b2..31ca217 100644
</span><br>
<span class="quotelev1">&gt;     --- a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt;     +++ b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt;     @@ -76,9 +76,9 @@ int
</span><br>
<span class="quotelev1">&gt;     ompi_coll_tuned_bcast_intra_check_forced_init
</span><br>
<span class="quotelev1">&gt;     (coll_tuned_force_algorithm_mc
</span><br>
<span class="quotelev1">&gt;     mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
</span><br>
<span class="quotelev1">&gt;                                              &quot;bcast_algorithm&quot;,
</span><br>
<span class="quotelev1">&gt;                                              &quot;Which bcast algorithm is
</span><br>
<span class="quotelev1">&gt;     used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2
</span><br>
<span class="quotelev1">&gt;     chain, 3: pipeline, 4: split binary tree, 5: binary tree, 6:
</span><br>
<span class="quotelev1">&gt;     binomial tree.&quot;,
</span><br>
<span class="quotelev1">&gt;     - MCA_BASE_VAR_TYPE_INT, new_enum, 0, 0,
</span><br>
<span class="quotelev1">&gt;     + MCA_BASE_VAR_TYPE_INT, new_enum, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt;                                              OPAL_INFO_LVL_5,
</span><br>
<span class="quotelev1">&gt;     - MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt;     + MCA_BASE_VAR_SCOPE_ALL,
</span><br>
<span class="quotelev1">&gt;     &amp;coll_tuned_bcast_forced_algorithm);
</span><br>
<span class="quotelev1">&gt;          OBJ_RELEASE(new_enum);
</span><br>
<span class="quotelev1">&gt;          if (mca_param_indices-&gt;algorithm_param_index &lt; 0) {
</span><br>
<span class="quotelev1">&gt;     diff --git a/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt;     b/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt;     index 9756359..ea389fd 100644
</span><br>
<span class="quotelev1">&gt;     --- a/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt;     +++ b/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt;     @@ -164,9 +164,9 @@ static int tuned_register(void)
</span><br>
<span class="quotelev1">&gt;          (void)
</span><br>
<span class="quotelev1">&gt;     mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
</span><br>
<span class="quotelev1">&gt;     &quot;use_dynamic_rules&quot;,
</span><br>
<span class="quotelev1">&gt;                                                 &quot;Switch used to decide
</span><br>
<span class="quotelev1">&gt;     if we use static (compiled/if statements) or dynamic (built at
</span><br>
<span class="quotelev1">&gt;     runtime) decision function rules&quot;,
</span><br>
<span class="quotelev1">&gt;     - MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;     + MCA_BASE_VAR_TYPE_BOOL, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt;                                                 OPAL_INFO_LVL_6,
</span><br>
<span class="quotelev1">&gt;     - MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt;     + MCA_BASE_VAR_SCOPE_ALL,
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_coll_tuned_use_dynamic_rules);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_dynamic_rules_filename = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19094.php">http://www.open-mpi.org/community/lists/devel/2016/06/19094.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19095.php">http://www.open-mpi.org/community/lists/devel/2016/06/19095.php</a>
</span><br>
<p>NT, new_enum, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VAR_FLAG_SETTABLE,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;OPAL_INFO_LVL_5,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MCA_BASE_VAR_SCOPE_READONLY,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VAR_SCOPE_ALL,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;amp;coll_tuned_bcast_forced_algorithm);&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160;OBJ_RELEASE(new_enum);&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160;if (mca_param_indices-&amp;gt;algorithm_param_index &amp;lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;diff --git a/ompi/mca/coll/tuned/coll_tuned_component.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b/ompi/mca/coll/tuned/coll_tuned_component.c&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;index 9756359..ea389fd 100644&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- a/ompi/mca/coll/tuned/coll_tuned_component.c&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+++ b/ompi/mca/coll/tuned/coll_tuned_component.c&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@@ -164,9 +164,9 @@ static int tuned_register(void)&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160;(void)
<br>
mca_base_component_var_register(&amp;amp;mca_coll_tuned_component.super.collm_version,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;use_dynamic_rules&quot;,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;Switch used to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;decide if we use static (compiled/if statements) or dynamic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(built at runtime) decision function rules&quot;,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ MCA_BASE_VAR_TYPE_BOOL, NULL, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VAR_FLAG_SETTABLE,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; OPAL_INFO_LVL_6,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MCA_BASE_VAR_SCOPE_READONLY,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ MCA_BASE_VAR_SCOPE_ALL,&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;amp;ompi_coll_tuned_use_dynamic_rules);&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160; &#160; &#160;ompi_coll_tuned_dynamic_rules_filename = NULL;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devel mailing list&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a moz-do-not-send=&quot;true&quot;&gt;devel_at_[hidden]&lt;/a&gt;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: &lt;a moz-do-not-send=&quot;true&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;href=&quot;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target=&quot;_blank&quot;&gt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel</a">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a</a>&gt;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post: &lt;a moz-do-not-send=&quot;true&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;href=&quot;<a href="http://www.open-mpi.org/community/lists/devel/2016/06/19094.php">http://www.open-mpi.org/community/lists/devel/2016/06/19094.php</a>&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target=&quot;_blank&quot;&gt;<a href="http://www.open-mpi.org/community/lists/devel/2016/06/19094.php</a">http://www.open-mpi.org/community/lists/devel/2016/06/19094.php</a</a>&gt;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/blockquote&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;fieldset class=&quot;mimeAttachmentHeader&quot;&gt;&lt;/fieldset&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;pre wrap=&quot;&quot;&gt;_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19095.php</pre">http://www.open-mpi.org/community/lists/devel/2016/06/19095.php</pre</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/blockquote&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
<br>
&nbsp;&nbsp;&lt;/body&gt;
<br>
&lt;/html&gt;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
<li><strong>Previous message:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>In reply to:</strong> <a href="19095.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Reply:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
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
