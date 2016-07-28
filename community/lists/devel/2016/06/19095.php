<?
$subject_val = "Re: [OMPI devel] MPI_T and coll/tuned module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 04:10:25 2016" -->
<!-- isoreceived="20160610081025" -->
<!-- sent="Fri, 10 Jun 2016 10:10:23 +0200" -->
<!-- isosent="20160610081023" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_T and coll/tuned module" -->
<!-- id="CAMJJpkV4YPrSTggJph-d6woEkZNDjY0WmotFBU=fUh9+0O4kQQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3a967744-7e33-1bec-d435-5aaa70df11e1_at_rist.or.jp" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-10 04:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19094.php">Gilles Gouaillardet: "[OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>In reply to:</strong> <a href="19094.php">Gilles Gouaillardet: "[OMPI devel] MPI_T and coll/tuned module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Reply:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a mechanism to select the collective algorithm upon communicator
<br>
creation. It is not using MPI_T (as this mechanism didn't exist at the
<br>
tuned conception), but it behave in a similar manner. You simply update an
<br>
MCA param (I do not remember the name and I'm not close to my computer),
<br>
and the next communicator creation will automatically adapt its behavior.
<br>
<p>That being said it would be illegal in MQPI lingo to change the collective
<br>
algorithm on an existing comomunicator, especially for reduction
<br>
operations. It is clearly specified that if you execute multiple times
<br>
a collective between the same processes with the same values and in the
<br>
context of the same run you should get the exact same result.
<br>
<p>George.
<br>
<p>On Friday, June 10, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was thinking of using the MPI_T interface in order to try within the
</span><br>
<span class="quotelev1">&gt; same MPI test program *all* the available algo of a given collective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That cannot currently be done because the mca parameter is registered with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {flag=0, scope=MCA_BASE_VAR_SCOPE_READONLY}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i made a proof of concept by changing this to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {flag=MCA_BASE_VAR_FLAG_SETTABLE, scope=MCA_VAR_SCOPE_ALL}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (see the inline patch below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; strictly speaking, it does not work since the updated values are used next
</span><br>
<span class="quotelev1">&gt; time a communicator is created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, changing a value on MPI_COMM_WORLD has no effect,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but changing a value, MPI_Comm_dup(MPI_COMM_WORLD) and using the dup'ed
</span><br>
<span class="quotelev1">&gt; communicator works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, i guess any communicator could be used to set the value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as far as i am concerned, that is good enough for me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any objections to make some coll/tuned parameters writable by MPI_T ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if no, did i implement it correctly ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the function that sets a value :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int setValue_int_comm(int index, MPI_Comm comm, int *val) {
</span><br>
<span class="quotelev1">&gt;   int err,count;
</span><br>
<span class="quotelev1">&gt;   MPI_T_cvar_handle handle;
</span><br>
<span class="quotelev1">&gt;   /* This example assumes that the variable index */
</span><br>
<span class="quotelev1">&gt;   /* can be bound to a communicator */
</span><br>
<span class="quotelev1">&gt; err=MPI_T_cvar_handle_alloc(index,&amp;comm,&amp;handle,&amp;count);
</span><br>
<span class="quotelev1">&gt;   if (err!=MPI_SUCCESS) return err;
</span><br>
<span class="quotelev1">&gt;   /* The following assumes that the variable is */
</span><br>
<span class="quotelev1">&gt;   /* represented by a single integer */
</span><br>
<span class="quotelev1">&gt;   err=MPI_T_cvar_write(handle,val);
</span><br>
<span class="quotelev1">&gt;   if (err!=MPI_SUCCESS) return err;
</span><br>
<span class="quotelev1">&gt;   err=MPI_T_cvar_handle_free(&amp;handle);
</span><br>
<span class="quotelev1">&gt;   return err;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and here is the proof of concept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt; index 81345b2..31ca217 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev1">&gt; @@ -76,9 +76,9 @@ int ompi_coll_tuned_bcast_intra_check_forced_init
</span><br>
<span class="quotelev1">&gt; (coll_tuned_force_algorithm_mc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
</span><br>
<span class="quotelev1">&gt;                                          &quot;bcast_algorithm&quot;,
</span><br>
<span class="quotelev1">&gt;                                          &quot;Which bcast algorithm is used.
</span><br>
<span class="quotelev1">&gt; Can be locked down to choice of: 0 ignore, 1 basic linear, 2 chain, 3:
</span><br>
<span class="quotelev1">&gt; pipeline, 4: split binary tree, 5: binary tree, 6: binomial tree.&quot;,
</span><br>
<span class="quotelev1">&gt; -                                        MCA_BASE_VAR_TYPE_INT, new_enum,
</span><br>
<span class="quotelev1">&gt; 0, 0,
</span><br>
<span class="quotelev1">&gt; +                                        MCA_BASE_VAR_TYPE_INT, new_enum,
</span><br>
<span class="quotelev1">&gt; 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt;                                          OPAL_INFO_LVL_5,
</span><br>
<span class="quotelev1">&gt; - MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; +                                        MCA_BASE_VAR_SCOPE_ALL,
</span><br>
<span class="quotelev1">&gt; &amp;coll_tuned_bcast_forced_algorithm);
</span><br>
<span class="quotelev1">&gt;      OBJ_RELEASE(new_enum);
</span><br>
<span class="quotelev1">&gt;      if (mca_param_indices-&gt;algorithm_param_index &lt; 0) {
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt; index 9756359..ea389fd 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev1">&gt; @@ -164,9 +164,9 @@ static int tuned_register(void)
</span><br>
<span class="quotelev1">&gt;      (void)
</span><br>
<span class="quotelev1">&gt; mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
</span><br>
<span class="quotelev1">&gt;                                             &quot;use_dynamic_rules&quot;,
</span><br>
<span class="quotelev1">&gt;                                             &quot;Switch used to decide if we
</span><br>
<span class="quotelev1">&gt; use static (compiled/if statements) or dynamic (built at runtime) decision
</span><br>
<span class="quotelev1">&gt; function rules&quot;,
</span><br>
<span class="quotelev1">&gt; - MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt; + MCA_BASE_VAR_TYPE_BOOL, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev1">&gt;                                             OPAL_INFO_LVL_6,
</span><br>
<span class="quotelev1">&gt; - MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; + MCA_BASE_VAR_SCOPE_ALL,
</span><br>
<span class="quotelev1">&gt; &amp;ompi_coll_tuned_use_dynamic_rules);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ompi_coll_tuned_dynamic_rules_filename = NULL;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19094.php">http://www.open-mpi.org/community/lists/devel/2016/06/19094.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19094.php">Gilles Gouaillardet: "[OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>In reply to:</strong> <a href="19094.php">Gilles Gouaillardet: "[OMPI devel] MPI_T and coll/tuned module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Reply:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
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
