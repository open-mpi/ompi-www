<?
$subject_val = "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 04:08:19 2009" -->
<!-- isoreceived="20090804080819" -->
<!-- sent="Tue, 04 Aug 2009 11:08:15 +0300" -->
<!-- isosent="20090804080815" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&amp;quot;" -->
<!-- id="4A77EC6F.5060903_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990908040012mc50d10aqab463d11149e9366_at_mail.gmail.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 04:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny,
<br>
You can find some details here:
<br>
<a href="http://icl.cs.utk.edu/news_pub/submissions/Flex-collective-euro-pvmmpi-2006.pdf">http://icl.cs.utk.edu/news_pub/submissions/Flex-collective-euro-pvmmpi-2006.pdf</a>
<br>
<p>Pasha
<br>
<p><p>Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am looking too for a file example of rules for dynamic collectives,
</span><br>
<span class="quotelev1">&gt; Have anybody tried it ? Where can I find a proper syntax for it ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; thanks.
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 23, 2009 at 3:08 PM, Igor Kozin &lt;i.n.kozin_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:i.n.kozin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Gus,
</span><br>
<span class="quotelev1">&gt;     I played with collectives a few months ago. Details are here
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf">http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf</a>
</span><br>
<span class="quotelev1">&gt;     That was in the context of 1.2.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You can get available tuning options by doing
</span><br>
<span class="quotelev1">&gt;     ompi_info -all -mca coll_tuned_use_dynamic_rules 1 | grep alltoall
</span><br>
<span class="quotelev1">&gt;     and similarly for other collectives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best,
</span><br>
<span class="quotelev1">&gt;     Igor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2009/7/23 Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;     &gt; Dear OpenMPI experts
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I would like to experiment with the OpenMPI tuned collectives,
</span><br>
<span class="quotelev2">&gt;     &gt; hoping to improve the performance of some programs we run
</span><br>
<span class="quotelev2">&gt;     &gt; in production mode.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; However, I could not find any documentation on how to select the
</span><br>
<span class="quotelev2">&gt;     &gt; different collective algorithms and other parameters.
</span><br>
<span class="quotelev2">&gt;     &gt; In particular, I would love to read an explanation clarifying
</span><br>
<span class="quotelev2">&gt;     &gt; the syntax and meaning of the lines on &quot;dyn_rules&quot;
</span><br>
<span class="quotelev2">&gt;     &gt; file that is passed to
</span><br>
<span class="quotelev2">&gt;     &gt; &quot;-mca coll_tuned_dynamic_rules_filename ./dyn_rules&quot;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Recently there was an interesting discussion on the list
</span><br>
<span class="quotelev2">&gt;     &gt; about this topic.  It showed that choosing the right collective
</span><br>
<span class="quotelev2">&gt;     &gt; algorithm can make a big difference in overall performance:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9355.php">http://www.open-mpi.org/community/lists/users/2009/05/9355.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9399.php">http://www.open-mpi.org/community/lists/users/2009/05/9399.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9401.php">http://www.open-mpi.org/community/lists/users/2009/05/9401.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; However, the thread was concentrated on &quot;MPI_Alltoall&quot;.
</span><br>
<span class="quotelev2">&gt;     &gt; Nothing was said about other collective functions.
</span><br>
<span class="quotelev2">&gt;     &gt; Not much was said about the
</span><br>
<span class="quotelev2">&gt;     &gt; &quot;tuned collective dynamic rules&quot; file syntax,
</span><br>
<span class="quotelev2">&gt;     &gt; the meaning of its parameters, etc.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Is there any source of information about that which I missed?
</span><br>
<span class="quotelev2">&gt;     &gt; Thank you for any pointers or clarifications.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;     &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;     &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;     &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
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
