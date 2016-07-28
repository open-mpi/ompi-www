<?
$subject_val = "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 14:16:13 2016" -->
<!-- isoreceived="20160614181613" -->
<!-- sent="Tue, 14 Jun 2016 13:15:42 -0500" -->
<!-- isosent="20160614181542" -->
<!-- name="Jason Maldonis" -->
<!-- email="maldonis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2" -->
<!-- id="CA+LevYLYfRU329dCkwnfifmypp+ALjet5F6v97H0XX0nWHBXqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DBEB5541-DB29-4ED9-A279-C4FAB09DFEDB_at_open-mpi.org" -->
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
<strong>From:</strong> Jason Maldonis (<em>maldonis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 14:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29437.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29435.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, et. al,
<br>
<p>Great, thank you for the help. I downloaded the mpi loop spawn test
<br>
directly from what I think is the master repo on github:
<br>
<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>
<br>
I am still using the mpi code from 1.10.2, however.
<br>
<p>Is that test updated with the correct code? If so, I am still getting the
<br>
same &quot;too many retries sending message to 0x0184:0x00001d27, giving up&quot;
<br>
errors. I also just downloaded the June 14 nightly tarball (7.79MB) from:
<br>
<a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a> and I get the same error.
<br>
<p>Could you please point me to the correct code?
<br>
<p>If you need me to provide more information please let me know.
<br>
<p>Thank you,
<br>
Jason
<br>
<p>Jason Maldonis
<br>
Research Assistant of Professor Paul Voyles
<br>
Materials Science Grad Student
<br>
University of Wisconsin, Madison
<br>
1509 University Ave, Rm M142
<br>
Madison, WI 53706
<br>
maldonis_at_[hidden]
<br>
608-295-5532
<br>
<p>On Tue, Jun 14, 2016 at 10:59 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I dug into this a bit (with some help from others) and found that the
</span><br>
<span class="quotelev1">&gt; spawn code appears to be working correctly - it is the test in orte/test
</span><br>
<span class="quotelev1">&gt; that is wrong. The test has been correctly updated in the 2.x and master
</span><br>
<span class="quotelev1">&gt; repos, but we failed to backport it to the 1.10 series. I have done so this
</span><br>
<span class="quotelev1">&gt; morning, and it will be in the upcoming 1.10.3 release (out very soon).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2016, at 3:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, that PR has nothing to do with loop_spawn. I&#226;&#128;&#153;ll try to take a look at
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2016, at 3:47 PM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.10.2 compiled with Intel. I am trying to get the
</span><br>
<span class="quotelev1">&gt; spawn functionality to work inside a for loop, but continue to get the
</span><br>
<span class="quotelev1">&gt; error &quot;too many retries sending message to &lt;addr&gt;, giving up&quot; somewhere
</span><br>
<span class="quotelev1">&gt; down the line in the for loop, seemingly because the processors are not
</span><br>
<span class="quotelev1">&gt; being fully freed when disconnecting/finishing. I found the
</span><br>
<span class="quotelev1">&gt; orte/test/mpi/loop_spawn.c
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt; example/test,
</span><br>
<span class="quotelev1">&gt; and it has the exact same problem. I also found this
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://www.open-mpi.org/community/lists/devel/2016/04/18814.php">https://www.open-mpi.org/community/lists/devel/2016/04/18814.php</a>&gt; mailing
</span><br>
<span class="quotelev1">&gt; list post from ~ a month and a half ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this PR (<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>) about the same
</span><br>
<span class="quotelev1">&gt; issue I am having (ie the loop_spawn example not working)? If so, do you
</span><br>
<span class="quotelev1">&gt; know if we can downgrade to e.g. 1.10.1 or another version? Or is there
</span><br>
<span class="quotelev1">&gt; another solution to fix this bug until you get a new release out (or is one
</span><br>
<span class="quotelev1">&gt; coming shortly to fix this maybe?)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the output of the loop_spawn test on our university's cluster,
</span><br>
<span class="quotelev1">&gt; which I know very little about in terms of architecture but can get
</span><br>
<span class="quotelev1">&gt; information if it's helpful. The large group of people who manage this
</span><br>
<span class="quotelev1">&gt; cluster are very good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jason
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 5 loop_spawn
</span><br>
<span class="quotelev1">&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt; Child: launch
</span><br>
<span class="quotelev1">&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 rank 4, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 rank 0, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 rank 2, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 rank 3, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 rank 1, size 6
</span><br>
<span class="quotelev1">&gt; Child 329941: exiting
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt; Child: launch
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 rank 0, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 rank 2, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 rank 1, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 rank 3, size 6
</span><br>
<span class="quotelev1">&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #1 rank 4, size 6
</span><br>
<span class="quotelev1">&gt; Child 329945: exiting
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt; Child: launch
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 rank 3, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 rank 0, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 rank 2, size 6
</span><br>
<span class="quotelev1">&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 rank 1, size 6
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #2 rank 4, size 6
</span><br>
<span class="quotelev1">&gt; Child 329949: exiting
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt; Child: launch
</span><br>
<span class="quotelev1">&gt; [node:port?] too many retries sending message to &lt;addr&gt;, giving up
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Child job 5 terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[...],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    255
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29435.php">http://www.open-mpi.org/community/lists/users/2016/06/29435.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29437.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29435.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
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
