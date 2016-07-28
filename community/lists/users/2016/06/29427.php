<?
$subject_val = "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 18:53:34 2016" -->
<!-- isoreceived="20160613225334" -->
<!-- sent="Mon, 13 Jun 2016 15:53:09 -0700" -->
<!-- isosent="20160613225309" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2" -->
<!-- id="B3D7F195-0320-45B7-82F9-74BC643A27B6_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+LevYKTe3-=CN-LPbguTWaeGDY090-K3E2=LLkEAtRhPWyJ6g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-13 18:53:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29428.php">Mehmet Belgin: "[OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29426.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29425.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29435.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29435.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, that PR has nothing to do with loop_spawn. I&#226;&#128;&#153;ll try to take a look at the problem.
<br>
<p><span class="quotelev1">&gt; On Jun 13, 2016, at 3:47 PM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.10.2 compiled with Intel. I am trying to get the spawn functionality to work inside a for loop, but continue to get the error &quot;too many retries sending message to &lt;addr&gt;, giving up&quot; somewhere down the line in the for loop, seemingly because the processors are not being fully freed when disconnecting/finishing. I found the orte/test/mpi/loop_spawn.c &lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt; example/test, and it has the exact same problem. I also found this &lt;<a href="https://www.open-mpi.org/community/lists/devel/2016/04/18814.php">https://www.open-mpi.org/community/lists/devel/2016/04/18814.php</a>&gt; mailing list post from ~ a month and a half ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this PR (<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>&gt;) about the same issue I am having (ie the loop_spawn example not working)? If so, do you know if we can downgrade to e.g. 1.10.1 or another version? Or is there another solution to fix this bug until you get a new release out (or is one coming shortly to fix this maybe?)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is the output of the loop_spawn test on our university's cluster, which I know very little about in terms of architecture but can get information if it's helpful. The large group of people who manage this cluster are very good.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29428.php">Mehmet Belgin: "[OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29426.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29425.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29435.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29435.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
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
