<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 12:17:20 2015" -->
<!-- isoreceived="20150325161720" -->
<!-- sent="Wed, 25 Mar 2015 09:17:17 -0700" -->
<!-- isosent="20150325161717" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="E798EB57-7CDD-45CD-BFA0-BD36B2FBD8C4_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj5bHEk9hEHSVJv9Zy4ZcVDMgT=wtoy2W+PB3VuA2hH=cQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 12:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26524.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26522.php">Howard Pritchard: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26522.php">Howard Pritchard: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh come on, Howard - before you go dumping more components into the system, let&#226;&#128;&#153;s explore WHY he hit this problem.
<br>
<p>Geez&#226;&#128;&#166;
<br>
<p><span class="quotelev1">&gt; On Mar 25, 2015, at 9:16 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kind of working fine.  I don't like users having to add these kind of specialized --mca settings
</span><br>
<span class="quotelev1">&gt; just to get something to work.  sounds like time for yet another cray specific component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-03-25 10:14 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; It&#226;&#128;&#153;s working just fine, Howard - we found the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2015, at 9:12 AM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mark,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you're wanting to use the orte-submit feature, you will need to get mpirun working.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you rerun using the mpirun launch method but with
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --mca oob_base_verbose 10 --mca ess_base_verbose 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; set?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, you may want to make sure you are using the ipogif0 eth device. This
</span><br>
<span class="quotelev2">&gt;&gt; can be controlled using the oob_tcp_if_include mca parameter, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca oob_tcp_if_include ipogif0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm assuming your use case doesn't require connectivity between processes
</span><br>
<span class="quotelev2">&gt;&gt; running on the compute nodes and some external service in suggesting this
</span><br>
<span class="quotelev2">&gt;&gt; option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015-03-25 8:14 GMT-06:00 Mark Santcroos &lt;mark.santcroos_at_[hidden] &lt;mailto:mark.santcroos_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Howard,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 25 Mar 2015, at 14:58 , Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; How are you building ompi?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My configure is rather straightforward:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$OMPI_PREFIX --disable-getpwuid
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I got spoiled on Hopper/Edison and I need more explicit configuration on BW ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Also what happens if you use. aprun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if you meant in combination with mpirun or not, so I'll provide both:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; aprun -n2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Hello from rank 1, thread 0, on nid16869. (core affinity = 0)
</span><br>
<span class="quotelev2">&gt;&gt; Hello from rank 0, thread 0, on nid16868. (core affinity = 0)
</span><br>
<span class="quotelev2">&gt;&gt; After sleep from rank 1, thread 0, on nid16869. (core affinity = 0)
</span><br>
<span class="quotelev2">&gt;&gt; After sleep from rank 0, thread 0, on nid16868. (core affinity = 0)
</span><br>
<span class="quotelev2">&gt;&gt; Application 23791589 resources: utime ~0s, stime ~2s, Rss ~27304, inblocks ~13229, outblocks ~66
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; aprun -n2 mpirun ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; apstat: error opening /ufs/alps_shared/reservations: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; apstat: error opening /ufs/alps_shared/reservations: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; [nid16868:17876] [[699,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 159
</span><br>
<span class="quotelev2">&gt;&gt; [nid16868:17876] [[699,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 85
</span><br>
<span class="quotelev2">&gt;&gt; [nid16868:17876] [[699,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../orte/mca/ras/base/ras_base_allocate.c at line 190
</span><br>
<span class="quotelev2">&gt;&gt; [nid16869:17034] [[9344,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 159
</span><br>
<span class="quotelev2">&gt;&gt; [nid16869:17034] [[9344,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../../orte/mca/ras/tm/ras_tm_module.c at line 85
</span><br>
<span class="quotelev2">&gt;&gt; [nid16869:17034] [[9344,0],0] ORTE_ERROR_LOG: File open failure in file ../../../../orte/mca/ras/base/ras_base_allocate.c at line 190
</span><br>
<span class="quotelev2">&gt;&gt; Application 23791590 exit codes: 1
</span><br>
<span class="quotelev2">&gt;&gt; Application 23791590 resources: utime ~0s, stime ~2s, Rss ~27304, inblocks ~9596, outblocks ~478
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I work with ompi on the nersc edison and hopper daily.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I use Edison and Hopper too, and there it works for me indeed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; typically i use aprun though.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to use orte-submit and friends, so I &quot;explicitly&quot; don't want to use aprun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you definitely dont need to use ccm.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and shouldnt.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depends on the use-case, but happy to leave that out of scope for now :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mar 25, 2015 6:00 AM, &quot;Mark Santcroos&quot; &lt;mark.santcroos_at_[hidden] &lt;mailto:mark.santcroos_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any users of Open MPI on Blue Waters here?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And then I specifically mean in &quot;native&quot; mode, not inside CCM.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; After configuring and building as I do on other Cray's, mpirun gives me the following:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [nid25263:31700] [[23896,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [nid25263:31700] [[23896,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Version is the latest and greatest from git.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So I'm interested to hear whether people have been successful on Blue Waters and/or whether the error rings a bell for people.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Mark
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26505.php">http://www.open-mpi.org/community/lists/users/2015/03/26505.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26505.php">http://www.open-mpi.org/community/lists/users/2015/03/26505.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26506.php">http://www.open-mpi.org/community/lists/users/2015/03/26506.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26506.php">http://www.open-mpi.org/community/lists/users/2015/03/26506.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26507.php">http://www.open-mpi.org/community/lists/users/2015/03/26507.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26507.php">http://www.open-mpi.org/community/lists/users/2015/03/26507.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26520.php">http://www.open-mpi.org/community/lists/users/2015/03/26520.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26520.php">http://www.open-mpi.org/community/lists/users/2015/03/26520.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26521.php">http://www.open-mpi.org/community/lists/users/2015/03/26521.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26521.php">http://www.open-mpi.org/community/lists/users/2015/03/26521.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26522.php">http://www.open-mpi.org/community/lists/users/2015/03/26522.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26524.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26522.php">Howard Pritchard: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26522.php">Howard Pritchard: "Re: [OMPI users] open mpi on blue waters"</a>
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
