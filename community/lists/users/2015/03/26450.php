<?
$subject_val = "Re: [OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 11:21:26 2015" -->
<!-- isoreceived="20150310152126" -->
<!-- sent="Tue, 10 Mar 2015 15:21:25 +0000" -->
<!-- isosent="20150310152125" -->
<!-- name="Khalid Hasanov" -->
<!-- email="xalid.h_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="CABb4ZDd_Ye_+yfuwEQ9NYTaJve1QG7TRwmkq5ahCsv39yJNgZg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0673CEF5-B938-49B5-9E93-C78EE0B2089D_at_icl.utk.edu" -->
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
<strong>From:</strong> Khalid Hasanov (<em>xalid.h_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-10 11:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26451.php">Saad Raza: "[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10"</a>
<li><strong>Previous message:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George and Gilles, thank you for your answers.
<br>
<p><p>@George,  honestly I didn't know that the decision is rechecked for every
<br>
new communicator creation operation. I will try it. In fact we used
<br>
sub-communicators for some other research work previously and indeed it
<br>
outweigh the benefits for small message sizes in collectives.
<br>
<p>In my opinion, it would be beneficial for researchers to have similar
<br>
collective operation APIs in MPI implementations with additional algorithm
<br>
parameter where applicable.
<br>
<p><p>Best regards,
<br>
Khalid
<br>
<p><p><p><p>On Tue, Mar 10, 2015 at 2:45 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Khalid,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The decision is rechecked every time we create a new communicator. So, you
</span><br>
<span class="quotelev1">&gt; might create a solution that force the algorithm to whatever you think it
</span><br>
<span class="quotelev1">&gt; is best (using the environment variables you mentioned), then create a
</span><br>
<span class="quotelev1">&gt; communicator, and free it once you&#226;&#128;&#153;re done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no idea what you&#226;&#128;&#153;re trying to achieve, but be aware there is a
</span><br>
<span class="quotelev1">&gt; burden associated with the creation of a communicator, so this approach
</span><br>
<span class="quotelev1">&gt; might outweigh the benefits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2015, at 10:31 , Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; /* since it seems implicit (some_condition) is independant of communicator
</span><br>
<span class="quotelev1">&gt; size, and message size */
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
<span class="quotelev1">&gt; On Tue, Mar 10, 2015 at 10:04 PM, Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to know if Open MPI provides some kind of mechanism to
</span><br>
<span class="quotelev2">&gt;&gt; select collective algorithms such as MPI broadcast during run time
</span><br>
<span class="quotelev2">&gt;&gt; depending on some logic. For example, I would like to
</span><br>
<span class="quotelev2">&gt;&gt; use something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (some_condition)  ompi_binomial_broadcast(...);
</span><br>
<span class="quotelev2">&gt;&gt; else   ompi_pipeline_broadcast(...);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know it is possible to use some fixed algorithm by coll_tuned_use_dynamic_rules
</span><br>
<span class="quotelev2">&gt;&gt; or to define a custom selection rule using
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_dynamic_rules_filename. But
</span><br>
<span class="quotelev2">&gt;&gt; I think it is not suitable in this situation as the dynamic rules mainly
</span><br>
<span class="quotelev2">&gt;&gt; based on the message size, segment size and communicator size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another option could be using Open MPI internal APIS like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_bcast_intra_binomial( buf, count, dtype, root, comm,
</span><br>
<span class="quotelev2">&gt;&gt; module, segsize);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But it highly depends on Open MPI internals as it uses
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_base_module_t .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any better option? (except using my own implementation of
</span><br>
<span class="quotelev2">&gt;&gt; collectives)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestion highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Khalid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26446.php">http://www.open-mpi.org/community/lists/users/2015/03/26446.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26447.php">http://www.open-mpi.org/community/lists/users/2015/03/26447.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26449.php">http://www.open-mpi.org/community/lists/users/2015/03/26449.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26451.php">Saad Raza: "[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10"</a>
<li><strong>Previous message:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26449.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
