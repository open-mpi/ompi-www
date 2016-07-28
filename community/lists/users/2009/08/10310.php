<?
$subject_val = "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 18:24:01 2009" -->
<!-- isoreceived="20090811222401" -->
<!-- sent="Tue, 11 Aug 2009 18:23:51 -0400" -->
<!-- isosent="20090811222351" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&amp;quot;" -->
<!-- id="4A81EF77.5070305_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A77EC6F.5060903_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 18:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10309.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<li><strong>In reply to:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pavel, Lenny, Igor, list
<br>
<p>Igor: Thanks for the pointer to your notes/paper!
<br>
<p>Lenny: Thanks for resurrecting this thread!
<br>
<p>Pavel: Thanks for the article!
<br>
It clarified a number of things about tuned collectives
<br>
(e.g. fixed vs. dynamic selection),
<br>
and the example rule file is very helpful too.
<br>
<p>However, after reading the article and browsing through the code,
<br>
I still don't get what is that you call &quot;segment size&quot;.
<br>
The article ranks &quot;segment size&quot; as an important parameter controlling
<br>
factor for good performance of collectives (section 5.1).
<br>
At first I thought &quot;segment size&quot; was the TCP/IP 'maximum segment size', 
<br>
the MTU (or its IB equivalent) minus headers, etc.
<br>
However, the article apparently says it is not this (section 5.1).
<br>
<p>What is &quot;segment size&quot; in OpenMPI?
<br>
Can the &quot;segment size&quot; be directly or indirectly controlled by the user?
<br>
<p>On the other hand, the example rule file always has
<br>
topo and segmentation = 0.
<br>
Why?
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Lenny,
</span><br>
<span class="quotelev1">&gt; You can find some details here:
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/news_pub/submissions/Flex-collective-euro-pvmmpi-2006.pdf">http://icl.cs.utk.edu/news_pub/submissions/Flex-collective-euro-pvmmpi-2006.pdf</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am looking too for a file example of rules for dynamic collectives,
</span><br>
<span class="quotelev2">&gt;&gt; Have anybody tried it ? Where can I find a proper syntax for it ?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 23, 2009 at 3:08 PM, Igor Kozin &lt;i.n.kozin_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:i.n.kozin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt;     I played with collectives a few months ago. Details are here
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf">http://www.cse.scitech.ac.uk/disco/publications/WorkingNotes.ConnectX.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;     That was in the context of 1.2.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     You can get available tuning options by doing
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_info -all -mca coll_tuned_use_dynamic_rules 1 | grep alltoall
</span><br>
<span class="quotelev2">&gt;&gt;     and similarly for other collectives.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Best,
</span><br>
<span class="quotelev2">&gt;&gt;     Igor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2009/7/23 Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Dear OpenMPI experts
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I would like to experiment with the OpenMPI tuned collectives,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; hoping to improve the performance of some programs we run
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; in production mode.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; However, I could not find any documentation on how to select the
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; different collective algorithms and other parameters.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; In particular, I would love to read an explanation clarifying
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; the syntax and meaning of the lines on &quot;dyn_rules&quot;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; file that is passed to
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; &quot;-mca coll_tuned_dynamic_rules_filename ./dyn_rules&quot;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Recently there was an interesting discussion on the list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; about this topic.  It showed that choosing the right collective
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; algorithm can make a big difference in overall performance:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9355.php">http://www.open-mpi.org/community/lists/users/2009/05/9355.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9399.php">http://www.open-mpi.org/community/lists/users/2009/05/9399.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9401.php">http://www.open-mpi.org/community/lists/users/2009/05/9401.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; However, the thread was concentrated on &quot;MPI_Alltoall&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Nothing was said about other collective functions.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Not much was said about the
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; &quot;tuned collective dynamic rules&quot; file syntax,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; the meaning of its parameters, etc.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Is there any source of information about that which I missed?
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Thank you for any pointers or clarifications.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10309.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<li><strong>In reply to:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
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
