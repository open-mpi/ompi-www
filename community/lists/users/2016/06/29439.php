<?
$subject_val = "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 14:20:02 2016" -->
<!-- isoreceived="20160614182002" -->
<!-- sent="Tue, 14 Jun 2016 11:19:58 -0700" -->
<!-- isosent="20160614181958" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2" -->
<!-- id="01B65B4D-DF3D-422C-AAAF-592E774162D6_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+LevYLYfRU329dCkwnfifmypp+ALjet5F6v97H0XX0nWHBXqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 14:19:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29440.php">Nathan Hjelm: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29438.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29438.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm&#226;&#128;&#166;I&#226;&#128;&#153;m unable to replicate a problem on my machines. What fabric are you using? Does the problem go away if you add &#226;&#128;&#156;-mca btl tcp,sm,self&#226;&#128;&#157; to the mpirun cmd line?
<br>
<p><span class="quotelev1">&gt; On Jun 14, 2016, at 11:15 AM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, et. al,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great, thank you for the help. I downloaded the mpi loop spawn test directly from what I think is the master repo on github:  <a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a> &lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt;
</span><br>
<span class="quotelev1">&gt; I am still using the mpi code from 1.10.2, however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that test updated with the correct code? If so, I am still getting the same &quot;too many retries sending message to 0x0184:0x00001d27, giving up&quot; errors. I also just downloaded the June 14 nightly tarball (7.79MB) from: <a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a> &lt;<a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a>&gt; and I get the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please point me to the correct code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need me to provide more information please let me know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Jason
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jason Maldonis
</span><br>
<span class="quotelev1">&gt; Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev1">&gt; Materials Science Grad Student
</span><br>
<span class="quotelev1">&gt; University of Wisconsin, Madison
</span><br>
<span class="quotelev1">&gt; 1509 University Ave, Rm M142
</span><br>
<span class="quotelev1">&gt; Madison, WI 53706
</span><br>
<span class="quotelev1">&gt; maldonis_at_[hidden] &lt;mailto:maldonis_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 608-295-5532
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 14, 2016 at 10:59 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I dug into this a bit (with some help from others) and found that the spawn code appears to be working correctly - it is the test in orte/test that is wrong. The test has been correctly updated in the 2.x and master repos, but we failed to backport it to the 1.10 series. I have done so this morning, and it will be in the upcoming 1.10.3 release (out very soon).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 13, 2016, at 3:53 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, that PR has nothing to do with loop_spawn. I&#226;&#128;&#153;ll try to take a look at the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 13, 2016, at 3:47 PM, Jason Maldonis &lt;maldonis_at_[hidden] &lt;mailto:maldonis_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI 1.10.2 compiled with Intel. I am trying to get the spawn functionality to work inside a for loop, but continue to get the error &quot;too many retries sending message to &lt;addr&gt;, giving up&quot; somewhere down the line in the for loop, seemingly because the processors are not being fully freed when disconnecting/finishing. I found the orte/test/mpi/loop_spawn.c &lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt; example/test, and it has the exact same problem. I also found this &lt;<a href="https://www.open-mpi.org/community/lists/devel/2016/04/18814.php">https://www.open-mpi.org/community/lists/devel/2016/04/18814.php</a>&gt; mailing list post from ~ a month and a half ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this PR (<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>&gt;) about the same issue I am having (ie the loop_spawn example not working)? If so, do you know if we can downgrade to e.g. 1.10.1 or another version? Or is there another solution to fix this bug until you get a new release out (or is one coming shortly to fix this maybe?)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Below is the output of the loop_spawn test on our university's cluster, which I know very little about in terms of architecture but can get information if it's helpful. The large group of people who manage this cluster are very good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 5 loop_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 4, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 0, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 2, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 3, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 1, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 329941: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 0, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 2, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 1, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 3, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 4, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 329945: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 3, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 0, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 2, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 1, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 4, size 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 329949: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node:port?] too many retries sending message to &lt;addr&gt;, giving up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child job 5 terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Process name: [[...],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29435.php">http://www.open-mpi.org/community/lists/users/2016/06/29435.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29435.php">http://www.open-mpi.org/community/lists/users/2016/06/29435.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29438.php">http://www.open-mpi.org/community/lists/users/2016/06/29438.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29440.php">Nathan Hjelm: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29438.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29438.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
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
