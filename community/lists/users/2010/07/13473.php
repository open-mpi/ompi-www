<?
$subject_val = "Re: [OMPI users] Open MPI, cannot get the results from workers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  5 19:25:47 2010" -->
<!-- isoreceived="20100705232547" -->
<!-- sent="Mon, 5 Jul 2010 17:25:41 -0600" -->
<!-- isosent="20100705232541" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, cannot get the results from workers" -->
<!-- id="SNT134-w612150F2459281FAA783E8CBB10_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTinp22PMk5pQAC9eetI7wQ8fCuKv7WiLxC2DduQm_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI, cannot get the results from workers<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-05 19:25:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When the master sends out the task, it assign a distinct task number ID to the task. 
<br>
When the worker receive the task, it  still use the task's assigned ID as task tag to send it to master. 
<br>
Any help is appreciated. 
<br>
July 5 2010
<br>
<p><p><p>From: solarbikedz_at_[hidden]
<br>
Date: Mon, 5 Jul 2010 13:17:27 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI, cannot get the results from workers
<br>
<p>how does the master receive results from the workers? if a worker is sending multiple task results, how does the master knows what the message tags are ahead of time?
<br>
<p>On Sun, Jul 4, 2010 at 10:26 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p><p>Dear All : 
<br>
I designed a master-worker framework, in which the master can schedulemultiple tasks (numTaskPerWorkerNode) to each worker and then collects results from workers.
<br>
<p><p>if the numTaskPerWorkerNode = 1, it works well. 
<br>
But, if numTaskPerWorkerNode &gt; 1, the master cannot get the results from workers. 
<br>
But, the workers can get the tasks from master. 
<br>
<p><p>why ?
<br>
<p>I have used different taskTag to distinguish the tasks, but still does not work.
<br>
Any help is appreciated. 
<br>
<p><p>Thanks, 
<br>
Jack 
<br>
July 4  2010 		 	   		  
<br>
The New Busy is not the too busy. Combine all your e-mail accounts with Hotmail. Get busy.
<br>
<p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><pre>
-- 
David Zhang
University of California, San Diego
 		 	   		  
_________________________________________________________________
The New Busy is not the old busy. Search, chat and e-mail from your inbox.
<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_3">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_3</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13473/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
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
