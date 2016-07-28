<?
$subject_val = "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 14:27:29 2016" -->
<!-- isoreceived="20160614182729" -->
<!-- sent="Tue, 14 Jun 2016 18:27:27 +0000 (GMT)" -->
<!-- isosent="20160614182727" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2" -->
<!-- id="bc53af73-cfca-4046-98f0-bb103315149d_at_me.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 14:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29441.php">Louis Williams: "[OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That message is coming from udcm in the openib btl. It indicates some sort of failure in the connection mechanism. It can happen if the listening thread no longer exists or is taking too long to process messages.

-Nathan


On Jun 14, 2016, at 12:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:

Hmm&#226;&#128;&#166;I&#226;&#128;&#153;m unable to replicate a problem on my machines. What fabric are you using? Does the problem go away if you add &#226;&#128;&#156;-mca btl tcp,sm,self&#226;&#128;&#157; to the mpirun cmd line?

On Jun 14, 2016, at 11:15 AM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
Hi Ralph, et. al,

Great, thank you for the help. I downloaded the mpi loop spawn test directly from what I think is the master repo on github: &#194;&#160;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>
I am still using the mpi code from 1.10.2, however.

Is that test updated with the correct code? If so, I am still getting the same &quot;too many retries sending message to 0x0184:0x00001d27, giving up&quot; errors. I also just downloaded the June 14 nightly tarball (7.79MB) from:&#194;&#160;<a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a> and I get the same error.

Could you please point me to the correct code?

If you need me to provide more information please let me know.

Thank you,
Jason

Jason Maldonis
Research Assistant of Professor Paul Voyles
Materials Science Grad Student
University of Wisconsin, Madison
1509 University Ave, Rm M142
Madison, WI 53706
maldonis_at_[hidden]
608-295-5532

On Tue, Jun 14, 2016 at 10:59 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
I dug into this a bit (with some help from others) and found that the spawn code appears to be working correctly - it is the test in orte/test that is wrong. The test has been correctly updated in the 2.x and master repos, but we failed to backport it to the 1.10 series. I have done so this morning, and it will be in the upcoming 1.10.3 release (out very soon).


On Jun 13, 2016, at 3:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:

No, that PR has nothing to do with loop_spawn. I&#226;&#128;&#153;ll try to take a look at the problem.

On Jun 13, 2016, at 3:47 PM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:

Hello,

I am using OpenMPI 1.10.2 compiled with Intel. I am trying to get the&#194;&#160;spawn&#194;&#160;functionality to work inside a for loop, but continue to get the error&#194;&#160;&quot;too many retries sending message to &lt;addr&gt;, giving up&quot;&#194;&#160;somewhere down the line in the for loop, seemingly because the processors are not being fully freed when disconnecting/finishing. I found the&#194;&#160;orte/test/mpi/loop_spawn.c&#194;&#160;example/test, and it has the exact same problem. I also found&#194;&#160;this&#194;&#160;mailing list post from ~ a month and a half ago.

Is this PR (<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>) about the same issue I am having (ie the&#194;&#160;loop_spawn&#194;&#160;example not working)? If so, do you know if we can downgrade to e.g. 1.10.1 or another version? Or is there another solution to fix this bug until you get a new release out (or is one coming shortly to fix this maybe?)?

Below is the output of the&#194;&#160;loop_spawn&#194;&#160;test on our university's cluster, which I know very little about in terms of architecture but can get information if it's helpful. The large group of people who manage this cluster are very good.

Thanks for your time.

Jason

mpiexec -np 5 loop_spawn
parent*******************************
parent: Launching MPI*
parent*******************************
parent: Launching MPI*
parent*******************************
parent: Launching MPI*
parent*******************************
parent: Launching MPI*
parent*******************************
parent: Launching MPI*
parent: MPI_Comm_spawn #0 return : 0
parent: MPI_Comm_spawn #0 return : 0
parent: MPI_Comm_spawn #0 return : 0
parent: MPI_Comm_spawn #0 return : 0
parent: MPI_Comm_spawn #0 return : 0
Child: launch
Child merged rank = 5, size = 6
parent: MPI_Comm_spawn #0 rank 4, size 6
parent: MPI_Comm_spawn #0 rank 0, size 6
parent: MPI_Comm_spawn #0 rank 2, size 6
parent: MPI_Comm_spawn #0 rank 3, size 6
parent: MPI_Comm_spawn #0 rank 1, size 6
Child 329941: exiting
parent: MPI_Comm_spawn #1 return : 0
parent: MPI_Comm_spawn #1 return : 0
parent: MPI_Comm_spawn #1 return : 0
parent: MPI_Comm_spawn #1 return : 0
parent: MPI_Comm_spawn #1 return : 0
Child: launch
parent: MPI_Comm_spawn #1 rank 0, size 6
parent: MPI_Comm_spawn #1 rank 2, size 6
parent: MPI_Comm_spawn #1 rank 1, size 6
parent: MPI_Comm_spawn #1 rank 3, size 6
Child merged rank = 5, size = 6
parent: MPI_Comm_spawn #1 rank 4, size 6
Child 329945: exiting
parent: MPI_Comm_spawn #2 return : 0
parent: MPI_Comm_spawn #2 return : 0
parent: MPI_Comm_spawn #2 return : 0
parent: MPI_Comm_spawn #2 return : 0
parent: MPI_Comm_spawn #2 return : 0
Child: launch
parent: MPI_Comm_spawn #2 rank 3, size 6
parent: MPI_Comm_spawn #2 rank 0, size 6
parent: MPI_Comm_spawn #2 rank 2, size 6
Child merged rank = 5, size = 6
parent: MPI_Comm_spawn #2 rank 1, size 6
parent: MPI_Comm_spawn #2 rank 4, size 6
Child 329949: exiting
parent: MPI_Comm_spawn #3 return : 0
parent: MPI_Comm_spawn #3 return : 0
parent: MPI_Comm_spawn #3 return : 0
parent: MPI_Comm_spawn #3 return : 0
parent: MPI_Comm_spawn #3 return : 0
Child: launch
[node:port?] too many retries sending message to &lt;addr&gt;, giving up
-------------------------------------------------------
Child job 5 terminated normally, but 1 process returned
a non-zero exit code.. Per user-direction, the job has been aborted.
-------------------------------------------------------
--------------------------------------------------------------------------
mpiexec detected that one or more processes exited with non-zero status, thus causing
the job to be terminated. The first process to do so was:

  Process name: [[...],0]
  Exit code:    255
--------------------------------------------------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>



_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29435.php">http://www.open-mpi.org/community/lists/users/2016/06/29435.php</a>

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29438.php">http://www.open-mpi.org/community/lists/users/2016/06/29438.php</a>

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29439.php">http://www.open-mpi.org/community/lists/users/2016/06/29439.php</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29441.php">Louis Williams: "[OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29439.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
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
