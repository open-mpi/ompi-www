<?
$subject_val = "Re: [OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 10:45:41 2015" -->
<!-- isoreceived="20150310144541" -->
<!-- sent="Tue, 10 Mar 2015 10:45:37 -0400" -->
<!-- isosent="20150310144537" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="0673CEF5-B938-49B5-9E93-C78EE0B2089D_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tmi0X2bewgO0_gv5COGLopcu2a0Uhu=FfJ7MHPksO7LQ_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-10 10:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26448.php">Fischer, Greg A.: "[OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>In reply to:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Khalid,
<br>
<p>The decision is rechecked every time we create a new communicator. So, you might create a solution that force the algorithm to whatever you think it is best (using the environment variables you mentioned), then create a communicator, and free it once you&#226;&#128;&#153;re done.
<br>
<p>I have no idea what you&#226;&#128;&#153;re trying to achieve, but be aware there is a burden associated with the creation of a communicator, so this approach might outweigh the benefits.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Mar 10, 2015, at 10:31 , Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Khalid,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am not aware of such a mechanism.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* there might be a way to use MPI_T_* mechanisms to force the algorithm,
</span><br>
<span class="quotelev1">&gt; and i will let other folks comment on that */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you definetly cannot directly invoke ompi_coll_tuned_bcast_intra_binomial
</span><br>
<span class="quotelev1">&gt; (abstraction violation, non portable, and you miss the some parameters)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; out of curiosity, what do you have in mind for (some_condition) ?
</span><br>
<span class="quotelev1">&gt; /* since it seems implicit (some_condition) is independant of communicator size, and message size */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 10, 2015 at 10:04 PM, Khalid Hasanov &lt;xalid.h_at_[hidden] &lt;mailto:xalid.h_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to know if Open MPI provides some kind of mechanism to select collective algorithms such as MPI broadcast during run time depending on some logic. For example, I would like to
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
<span class="quotelev1">&gt; I know it is possible to use some fixed algorithm by coll_tuned_use_dynamic_rules or to define a custom selection rule using coll_tuned_dynamic_rules_filename. But
</span><br>
<span class="quotelev1">&gt; I think it is not suitable in this situation as the dynamic rules mainly based on the message size, segment size and communicator size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another option could be using Open MPI internal APIS like 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_bcast_intra_binomial( buf, count, dtype, root, comm, module, segsize);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it highly depends on Open MPI internals as it uses mca_coll_base_module_t . 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any better option? (except using my own implementation of collectives)
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26446.php">http://www.open-mpi.org/community/lists/users/2015/03/26446.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26446.php">http://www.open-mpi.org/community/lists/users/2015/03/26446.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26447.php">http://www.open-mpi.org/community/lists/users/2015/03/26447.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26449/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26448.php">Fischer, Greg A.: "[OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>In reply to:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
