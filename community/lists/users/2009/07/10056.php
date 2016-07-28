<?
$subject_val = "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 08:08:43 2009" -->
<!-- isoreceived="20090723120843" -->
<!-- sent="Thu, 23 Jul 2009 13:08:38 +0100" -->
<!-- isosent="20090723120838" -->
<!-- name="Igor Kozin" -->
<!-- email="i.n.kozin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&amp;quot;" -->
<!-- id="fd21f64d0907230508x5607ccel6cc8ca0e5797a36d_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A67DD97.7090200_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;<br>
<strong>From:</strong> Igor Kozin (<em>i.n.kozin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 08:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Previous message:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10045.php">Gus Correa: "[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
I played with collectives a few months ago. Details are here
<br>
<a href="http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf">http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf</a>
<br>
That was in the context of 1.2.6
<br>
<p>You can get available tuning options by doing
<br>
ompi_info -all -mca coll_tuned_use_dynamic_rules 1 | grep alltoall
<br>
and similarly for other collectives.
<br>
<p>Best,
<br>
Igor
<br>
<p>2009/7/23 Gus Correa &lt;gus_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Dear OpenMPI experts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to experiment with the OpenMPI tuned collectives,
</span><br>
<span class="quotelev1">&gt; hoping to improve the performance of some programs we run
</span><br>
<span class="quotelev1">&gt; in production mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I could not find any documentation on how to select the
</span><br>
<span class="quotelev1">&gt; different collective algorithms and other parameters.
</span><br>
<span class="quotelev1">&gt; In particular, I would love to read an explanation clarifying
</span><br>
<span class="quotelev1">&gt; the syntax and meaning of the lines on &quot;dyn_rules&quot;
</span><br>
<span class="quotelev1">&gt; file that is passed to
</span><br>
<span class="quotelev1">&gt; &quot;-mca coll_tuned_dynamic_rules_filename ./dyn_rules&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Recently there was an interesting discussion on the list
</span><br>
<span class="quotelev1">&gt; about this topic. &#194;&#160;It showed that choosing the right collective
</span><br>
<span class="quotelev1">&gt; algorithm can make a big difference in overall performance:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9355.php">http://www.open-mpi.org/community/lists/users/2009/05/9355.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9399.php">http://www.open-mpi.org/community/lists/users/2009/05/9399.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9401.php">http://www.open-mpi.org/community/lists/users/2009/05/9401.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the thread was concentrated on &quot;MPI_Alltoall&quot;.
</span><br>
<span class="quotelev1">&gt; Nothing was said about other collective functions.
</span><br>
<span class="quotelev1">&gt; Not much was said about the
</span><br>
<span class="quotelev1">&gt; &quot;tuned collective dynamic rules&quot; file syntax,
</span><br>
<span class="quotelev1">&gt; the meaning of its parameters, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any source of information about that which I missed?
</span><br>
<span class="quotelev1">&gt; Thank you for any pointers or clarifications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>Previous message:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10045.php">Gus Correa: "[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
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
