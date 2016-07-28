<?
$subject_val = "Re: [OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 10:31:48 2015" -->
<!-- isoreceived="20150310143148" -->
<!-- sent="Tue, 10 Mar 2015 23:31:46 +0900" -->
<!-- isosent="20150310143146" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="CAAkFZ5tmi0X2bewgO0_gv5COGLopcu2a0Uhu=FfJ7MHPksO7LQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABb4ZDdvhe++ChuxBNp5F+tHpqiBQBhE0DcJgdinzKWtY+WRMw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI collectives algorithm selection<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-10 10:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26448.php">Fischer, Greg A.: "[OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>Previous message:</strong> <a href="26446.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26446.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Khalid,
<br>
<p>i am not aware of such a mechanism.
<br>
<p>/* there might be a way to use MPI_T_* mechanisms to force the algorithm,
<br>
and i will let other folks comment on that */
<br>
<p>you definetly cannot directly invoke ompi_coll_tuned_bcast_intra_binomial
<br>
(abstraction violation, non portable, and you miss the some parameters)
<br>
<p>out of curiosity, what do you have in mind for (some_condition) ?
<br>
/* since it seems implicit (some_condition) is independant of communicator
<br>
size, and message size */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Mar 10, 2015 at 10:04 PM, Khalid Hasanov &lt;xalid.h_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to know if Open MPI provides some kind of mechanism to select
</span><br>
<span class="quotelev1">&gt; collective algorithms such as MPI broadcast during run time depending on
</span><br>
<span class="quotelev1">&gt; some logic. For example, I would like to
</span><br>
<span class="quotelev1">&gt; use something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (some_condition)  ompi_binomial_broadcast(...);
</span><br>
<span class="quotelev1">&gt; else   ompi_pipeline_broadcast(...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know it is possible to use some fixed algorithm by coll_tuned_use_dynamic_rules
</span><br>
<span class="quotelev1">&gt; or to define a custom selection rule using
</span><br>
<span class="quotelev1">&gt; coll_tuned_dynamic_rules_filename. But
</span><br>
<span class="quotelev1">&gt; I think it is not suitable in this situation as the dynamic rules mainly
</span><br>
<span class="quotelev1">&gt; based on the message size, segment size and communicator size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another option could be using Open MPI internal APIS like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_bcast_intra_binomial( buf, count, dtype, root, comm,
</span><br>
<span class="quotelev1">&gt; module, segsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it highly depends on Open MPI internals as it uses
</span><br>
<span class="quotelev1">&gt; mca_coll_base_module_t .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any better option? (except using my own implementation of
</span><br>
<span class="quotelev1">&gt; collectives)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion highly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Khalid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26446.php">http://www.open-mpi.org/community/lists/users/2015/03/26446.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26448.php">Fischer, Greg A.: "[OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>Previous message:</strong> <a href="26446.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26446.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
