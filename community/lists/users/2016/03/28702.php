<?
$subject_val = "Re: [OMPI users] Open SHMEM Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 05:24:42 2016" -->
<!-- isoreceived="20160315092442" -->
<!-- sent="15 Mar 2016 09:24:27 -0000" -->
<!-- isosent="20160315092427" -->
<!-- name="RYAN RAY" -->
<!-- email="ryan.ray_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open SHMEM Error" -->
<!-- id="1457070398.S.16915.21610.f4-234-246.1458033867.24892_at_webmail.rediffmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Open SHMEM Error" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open SHMEM Error<br>
<strong>From:</strong> RYAN RAY (<em>ryan.ray_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-15 05:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28703.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Maybe in reply to:</strong> <a href="28634.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28703.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Reply:</strong> <a href="28703.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles,&amp;nbsp;Thanks for the reply. After executing the code as you told I get the output as shown in the attached snapshot.So I am understanding that the code cannot remotely access the array at PE1 from PE0. Can you please explain why this is happenning?
<br>
Regards,Ryan
<br>
<p>From: Gilles Gouaillardet &amp;lt;gilles_at_[hidden]&amp;gt;
<br>
Sent: Fri, 04 Mar 2016 11:16:38 
<br>
To: Open MPI Users &amp;lt;users_at_[hidden]&amp;gt;
<br>
Subject: Re: [OMPI users]  Open SHMEM Error
<br>
&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ryan,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;do you really get a segmentation fault ?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;here is the message i have :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Primary job&amp;nbsp; terminated normally, but 1 process returned
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;oshrun detected that one or more processes exited with non-zero
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status, thus causing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&amp;nbsp; Process name: [[23403,1],0]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&amp;nbsp; Exit code:&amp;nbsp;&amp;nbsp;&amp;nbsp; 1
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;the root cause is the test program ends with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;instead of
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* and i cannot figure out a rationale for that, i just replaced
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this with return 0; and that was fine*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fwiw, this examples use the deprecated start_pes(0) instead of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shmem_init();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;and there is no shmem_finalize(); 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Gilles
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;On 3/3/2016 4:15 PM, RYAN RAY wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28622.php">http://www.open-mpi.org/community/lists/users/2016/03/28622.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;
<br>
&nbsp;
<br>
_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28635.php">http://www.open-mpi.org/community/lists/users/2016/03/28635.php</a>
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28702/error1.png" alt="error1.png">
<!-- attachment="error1.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28703.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Maybe in reply to:</strong> <a href="28634.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28703.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Reply:</strong> <a href="28703.php">Gilles Gouaillardet: "Re: [OMPI users] Open SHMEM Error"</a>
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
