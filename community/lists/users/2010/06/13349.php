<?
$subject_val = "Re: [OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 14:44:29 2010" -->
<!-- isoreceived="20100620184429" -->
<!-- sent="Sun, 20 Jun 2010 12:44:24 -0600" -->
<!-- isosent="20100620184424" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI task scheduler" -->
<!-- id="SNT134-w36B8876072CEBDFFE87C67CBC20_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTime3AfelY7pDthSeLBzt55Zf4lQbolPWn3aO6tG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI task scheduler<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-20 14:44:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Matthieu:
<br>
Thanks for your help. 
<br>
Most of your ideas show that what I want to do. 
<br>
My scheduler should be able to be called from any C++ program, which can put a list of tasks to the scheduler and then the scheduler distributes the tasks to other client nodes. 
<br>
It may work like in this way: 
<br>
while(still tasks available) {	myScheduler.push(tasks);	myScheduler.get(tasks results from client nodes);}	
<br>
<p>My cluster has 400 nodes with Open MPI. The tasks should be transferred b y MPI protocol. 
<br>
I am not familiar with  RPC Protocol.   
<br>
If I use Boost.ASIO and some Python/GCCXML script to generate the code, it can be called from C++ program on Open MPI cluster ? 
<br>
I cannot find the skeletton on your blog. 
<br>
Would you please tell me where to find it ?
<br>
I really appreciate your help. 
<br>
<p>Jack
<br>
June 20 2010
<br>
<span class="quotelev1">&gt; Date: Sun, 20 Jun 2010 20:13:14 +0200
</span><br>
<span class="quotelev1">&gt; From: matthieu.brucher_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI task scheduler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jack,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you are seeking is the client/server pattern. Have one node act
</span><br>
<span class="quotelev1">&gt; as a server. It will create a list of tasks or even a graph of tasks
</span><br>
<span class="quotelev1">&gt; if you have dependencies, and then create clients that will connect to
</span><br>
<span class="quotelev1">&gt; the server with an RPC protocol (I've done this with a SOAP+TCP
</span><br>
<span class="quotelev1">&gt; protocol, the severance of the TCP connection meaning that the client
</span><br>
<span class="quotelev1">&gt; is dead and that its task should be recycled, it&#233;s easy to do with
</span><br>
<span class="quotelev1">&gt; Boost.ASIO and some Python/GCCXML scripts to automatically generate
</span><br>
<span class="quotelev1">&gt; your code, I've written a skeletton on my blog). You may even have
</span><br>
<span class="quotelev1">&gt; clients with different sizes or capabilities and tell the server what
</span><br>
<span class="quotelev1">&gt; each client can do, and then the server may dispatch appropriate
</span><br>
<span class="quotelev1">&gt; tickets to the clients.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each client and server can be a MPI process, you don't have to create
</span><br>
<span class="quotelev1">&gt; all clients inside one MPI process (you may use several if the
</span><br>
<span class="quotelev1">&gt; smallest resource your batch scheduler allocates is bigger that one of
</span><br>
<span class="quotelev1">&gt; your tasks). With a batch scheduler, it's better to allocate your
</span><br>
<span class="quotelev1">&gt; tasks as small as possible so that you can balance the resources you
</span><br>
<span class="quotelev1">&gt; need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/6/20 Jack Bryan &lt;dtustudy68_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, all:
</span><br>
<span class="quotelev2">&gt; &gt; I need to design a task scheduler (not PBS job scheduler) on Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; cluster.
</span><br>
<span class="quotelev2">&gt; &gt; I need to parallelize an algorithm so that a big problem is decomposed into
</span><br>
<span class="quotelev2">&gt; &gt; small tasks, which can be distributed
</span><br>
<span class="quotelev2">&gt; &gt; to other worker nodes by the Scheduler and after being solved, the results
</span><br>
<span class="quotelev2">&gt; &gt; of these tasks are returned to the manager node with the Scheduler, which
</span><br>
<span class="quotelev2">&gt; &gt; will distribute more tasks on the base of the collected results.
</span><br>
<span class="quotelev2">&gt; &gt; I need to use C++ to design the scheduler.
</span><br>
<span class="quotelev2">&gt; &gt; I have searched online and I cannot find any scheduler available
</span><br>
<span class="quotelev2">&gt; &gt; for this purpose.
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; Jack
</span><br>
<span class="quotelev2">&gt; &gt; June 19  2010
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Hotmail has tools for the New Busy. Search, chat and e-mail from your inbox.
</span><br>
<span class="quotelev2">&gt; &gt; Learn more.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail. 
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13349/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
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
