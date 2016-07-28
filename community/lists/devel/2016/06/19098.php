<?
$subject_val = "Re: [OMPI devel] MPI_T and coll/tuned module";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 12 06:55:22 2016" -->
<!-- isoreceived="20160612105522" -->
<!-- sent="Sun, 12 Jun 2016 12:55:19 +0200" -->
<!-- isosent="20160612105519" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_T and coll/tuned module" -->
<!-- id="CAMJJpkWDHVA0421pjqi5Vq379r4VqHe-Epy8RZDkN=GEQWC9CQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="912ef4a3-d69a-3d4e-d299-c10537f883e4_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-06-12 06:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19099.php">Gilles Gouaillardet: "[OMPI devel] openib btl and 10 GbE port"</a>
<li><strong>Previous message:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
<li><strong>In reply to:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is my understanding of the MPI standard. Obviously some combination of
<br>
op and datatype are practically associative and commutative, in which case
<br>
the pattern you describe would be legal. Technically, we could add an MCA
<br>
parameter to allow the users to specify that the op should be considered as
<br>
associative (especially for operations on floating point numbers), in which
<br>
case any we are free to choose any communication pattern.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: for the dynamic selection use ompi_coll_tuned_forced_getvalues as a
<br>
starting point.
<br>
<p>On Fri, Jun 10, 2016 at 10:23 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thanks George, i will try to find it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for the second part, and if i read between the lines, that means a
</span><br>
<span class="quotelev1">&gt; collective operation cannot have non deterministic paths, such as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (...) MPI_Irecv();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (...) { MPI_Waitany(); ompi_op_reduce(); }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is that *really* prohibited ? i thought it was &quot;only&quot; *strongly
</span><br>
<span class="quotelev1">&gt; discouraged* ...
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
<span class="quotelev1">&gt; On 6/10/2016 5:10 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a mechanism to select the collective algorithm upon communicator
</span><br>
<span class="quotelev1">&gt; creation. It is not using MPI_T (as this mechanism didn't exist at the
</span><br>
<span class="quotelev1">&gt; tuned conception), but it behave in a similar manner. You simply update an
</span><br>
<span class="quotelev1">&gt; MCA param (I do not remember the name and I'm not close to my computer),
</span><br>
<span class="quotelev1">&gt; and the next communicator creation will automatically adapt its behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said it would be illegal in MQPI lingo to change the collective
</span><br>
<span class="quotelev1">&gt; algorithm on an existing comomunicator, especially for reduction
</span><br>
<span class="quotelev1">&gt; operations. It is clearly specified that if you execute multiple times
</span><br>
<span class="quotelev1">&gt; a collective between the same processes with the same values and in the
</span><br>
<span class="quotelev1">&gt; context of the same run you should get the exact same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, June 10, 2016, Gilles Gouaillardet &lt; &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i was thinking of using the MPI_T interface in order to try within the
</span><br>
<span class="quotelev2">&gt;&gt; same MPI test program *all* the available algo of a given collective.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That cannot currently be done because the mca parameter is registered with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {flag=0, scope=MCA_BASE_VAR_SCOPE_READONLY}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i made a proof of concept by changing this to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {flag=MCA_BASE_VAR_FLAG_SETTABLE, scope=MCA_VAR_SCOPE_ALL}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (see the inline patch below)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; strictly speaking, it does not work since the updated values are used
</span><br>
<span class="quotelev2">&gt;&gt; next time a communicator is created.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for example, changing a value on MPI_COMM_WORLD has no effect,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but changing a value, MPI_Comm_dup(MPI_COMM_WORLD) and using the dup'ed
</span><br>
<span class="quotelev2">&gt;&gt; communicator works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, i guess any communicator could be used to set the value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as far as i am concerned, that is good enough for me
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any objections to make some coll/tuned parameters writable by MPI_T ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if no, did i implement it correctly ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is the function that sets a value :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int setValue_int_comm(int index, MPI_Comm comm, int *val) {
</span><br>
<span class="quotelev2">&gt;&gt;   int err,count;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_T_cvar_handle handle;
</span><br>
<span class="quotelev2">&gt;&gt;   /* This example assumes that the variable index */
</span><br>
<span class="quotelev2">&gt;&gt;   /* can be bound to a communicator */
</span><br>
<span class="quotelev2">&gt;&gt; err=MPI_T_cvar_handle_alloc(index,&amp;comm,&amp;handle,&amp;count);
</span><br>
<span class="quotelev2">&gt;&gt;   if (err!=MPI_SUCCESS) return err;
</span><br>
<span class="quotelev2">&gt;&gt;   /* The following assumes that the variable is */
</span><br>
<span class="quotelev2">&gt;&gt;   /* represented by a single integer */
</span><br>
<span class="quotelev2">&gt;&gt;   err=MPI_T_cvar_write(handle,val);
</span><br>
<span class="quotelev2">&gt;&gt;   if (err!=MPI_SUCCESS) return err;
</span><br>
<span class="quotelev2">&gt;&gt;   err=MPI_T_cvar_handle_free(&amp;handle);
</span><br>
<span class="quotelev2">&gt;&gt;   return err;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and here is the proof of concept
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev2">&gt;&gt; b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev2">&gt;&gt; index 81345b2..31ca217 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/coll/tuned/coll_tuned_bcast_decision.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -76,9 +76,9 @@ int ompi_coll_tuned_bcast_intra_check_forced_init
</span><br>
<span class="quotelev2">&gt;&gt; (coll_tuned_force_algorithm_mc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
</span><br>
<span class="quotelev2">&gt;&gt;                                          &quot;bcast_algorithm&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                          &quot;Which bcast algorithm is used.
</span><br>
<span class="quotelev2">&gt;&gt; Can be locked down to choice of: 0 ignore, 1 basic linear, 2 chain, 3:
</span><br>
<span class="quotelev2">&gt;&gt; pipeline, 4: split binary tree, 5: binary tree, 6: binomial tree.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                        MCA_BASE_VAR_TYPE_INT, new_enum,
</span><br>
<span class="quotelev2">&gt;&gt; 0, 0,
</span><br>
<span class="quotelev2">&gt;&gt; +                                        MCA_BASE_VAR_TYPE_INT, new_enum,
</span><br>
<span class="quotelev2">&gt;&gt; 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev2">&gt;&gt;                                          OPAL_INFO_LVL_5,
</span><br>
<span class="quotelev2">&gt;&gt; - MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev2">&gt;&gt; +                                        MCA_BASE_VAR_SCOPE_ALL,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;coll_tuned_bcast_forced_algorithm);
</span><br>
<span class="quotelev2">&gt;&gt;      OBJ_RELEASE(new_enum);
</span><br>
<span class="quotelev2">&gt;&gt;      if (mca_param_indices-&gt;algorithm_param_index &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev2">&gt;&gt; b/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev2">&gt;&gt; index 9756359..ea389fd 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/coll/tuned/coll_tuned_component.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -164,9 +164,9 @@ static int tuned_register(void)
</span><br>
<span class="quotelev2">&gt;&gt;      (void)
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_component_var_register(&amp;mca_coll_tuned_component.super.collm_version,
</span><br>
<span class="quotelev2">&gt;&gt;                                             &quot;use_dynamic_rules&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                             &quot;Switch used to decide if we
</span><br>
<span class="quotelev2">&gt;&gt; use static (compiled/if statements) or dynamic (built at runtime) decision
</span><br>
<span class="quotelev2">&gt;&gt; function rules&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; - MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0,
</span><br>
<span class="quotelev2">&gt;&gt; + MCA_BASE_VAR_TYPE_BOOL, NULL, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev2">&gt;&gt;                                             OPAL_INFO_LVL_6,
</span><br>
<span class="quotelev2">&gt;&gt; - MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev2">&gt;&gt; + MCA_BASE_VAR_SCOPE_ALL,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;ompi_coll_tuned_use_dynamic_rules);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      ompi_coll_tuned_dynamic_rules_filename = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19094.php">http://www.open-mpi.org/community/lists/devel/2016/06/19094.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19095.php">http://www.open-mpi.org/community/lists/devel/2016/06/19095.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19096.php">http://www.open-mpi.org/community/lists/devel/2016/06/19096.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19099.php">Gilles Gouaillardet: "[OMPI devel] openib btl and 10 GbE port"</a>
<li><strong>Previous message:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
<li><strong>In reply to:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
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
