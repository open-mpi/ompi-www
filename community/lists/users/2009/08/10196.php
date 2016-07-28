<?
$subject_val = "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 03:12:22 2009" -->
<!-- isoreceived="20090804071222" -->
<!-- sent="Tue, 4 Aug 2009 10:12:16 +0300" -->
<!-- isosent="20090804071216" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&amp;quot;" -->
<!-- id="453d39990908040012mc50d10aqab463d11149e9366_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fd21f64d0907230508x5607ccel6cc8ca0e5797a36d_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 03:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10195.php">John R. Cary: "[OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am looking too for a file example of rules for dynamic collectives,
<br>
Have anybody tried it ? Where can I find a proper syntax for it ?
<br>
<p>thanks.
<br>
Lenny.
<br>
<p><p><p>On Thu, Jul 23, 2009 at 3:08 PM, Igor Kozin &lt;i.n.kozin_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; I played with collectives a few months ago. Details are here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf">http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf</a>
</span><br>
<span class="quotelev1">&gt; That was in the context of 1.2.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can get available tuning options by doing
</span><br>
<span class="quotelev1">&gt; ompi_info -all -mca coll_tuned_use_dynamic_rules 1 | grep alltoall
</span><br>
<span class="quotelev1">&gt; and similarly for other collectives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Igor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/7/23 Gus Correa &lt;gus_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;  &gt; Dear OpenMPI experts
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to experiment with the OpenMPI tuned collectives,
</span><br>
<span class="quotelev2">&gt; &gt; hoping to improve the performance of some programs we run
</span><br>
<span class="quotelev2">&gt; &gt; in production mode.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I could not find any documentation on how to select the
</span><br>
<span class="quotelev2">&gt; &gt; different collective algorithms and other parameters.
</span><br>
<span class="quotelev2">&gt; &gt; In particular, I would love to read an explanation clarifying
</span><br>
<span class="quotelev2">&gt; &gt; the syntax and meaning of the lines on &quot;dyn_rules&quot;
</span><br>
<span class="quotelev2">&gt; &gt; file that is passed to
</span><br>
<span class="quotelev2">&gt; &gt; &quot;-mca coll_tuned_dynamic_rules_filename ./dyn_rules&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Recently there was an interesting discussion on the list
</span><br>
<span class="quotelev2">&gt; &gt; about this topic.  It showed that choosing the right collective
</span><br>
<span class="quotelev2">&gt; &gt; algorithm can make a big difference in overall performance:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9355.php">http://www.open-mpi.org/community/lists/users/2009/05/9355.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9399.php">http://www.open-mpi.org/community/lists/users/2009/05/9399.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9401.php">http://www.open-mpi.org/community/lists/users/2009/05/9401.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, the thread was concentrated on &quot;MPI_Alltoall&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; Nothing was said about other collective functions.
</span><br>
<span class="quotelev2">&gt; &gt; Not much was said about the
</span><br>
<span class="quotelev2">&gt; &gt; &quot;tuned collective dynamic rules&quot; file syntax,
</span><br>
<span class="quotelev2">&gt; &gt; the meaning of its parameters, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any source of information about that which I missed?
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for any pointers or clarifications.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10195.php">John R. Cary: "[OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
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
