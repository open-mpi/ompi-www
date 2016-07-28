<?
$subject_val = "Re: [OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 18:17:39 2010" -->
<!-- isoreceived="20100620221739" -->
<!-- sent="Sun, 20 Jun 2010 16:17:34 -0600" -->
<!-- isosent="20100620221734" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI task scheduler" -->
<!-- id="SNT134-w65403BD150FE379FCA77F6CBC20_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTikSSf-x7HOsPCLz_-M_nxLCQPUuod6TXk3VmZDZ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-06-20 18:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13354.php">jody: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13352.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13354.php">jody: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13354.php">jody: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13356.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, thank you very much for your help. 
<br>
What is the meaning of &quot; must find a system so that every task can be serialized in the same form.&quot; What is the meaning of &quot;serize &quot; ? 
<br>
I have no experience of programming with python and XML. 
<br>
I have studied your blog. 
<br>
Where can I find a simple example to use the techniques you have said ? 
<br>
For exmple, I have 5 task (print &quot;hello world !&quot;). 
<br>
I want to use 6 processors to do it in parallel. 
<br>
One processr is the manager node who distributes tasks and other 5 processorsdo the printing jobs and when they are done, they tell this to the manager noitde. 
<br>
<p>Boost.Asio is a cross-platform C++ library for network and low-level I/O programming. I have no experiences of using it. Will it take a long time to learn how to use it ? 
<br>
If the messages are transferred by SOAP+TCP, how the manager node calls it and push task into it ? 
<br>
Do I need to install SOAP+TCP on my cluster so that I can use it ? 
<br>
<p>Any help is appreciated. 
<br>
Jack 
<br>
June 20  2010
<br>
<span class="quotelev1">&gt; Date: Sun, 20 Jun 2010 21:00:06 +0200
</span><br>
<span class="quotelev1">&gt; From: matthieu.brucher_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI task scheduler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/6/20 Jack Bryan &lt;dtustudy68_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, Matthieu:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt; &gt; Most of your ideas show that what I want to do.
</span><br>
<span class="quotelev2">&gt; &gt; My scheduler should be able to be called from any C++ program, which can
</span><br>
<span class="quotelev2">&gt; &gt; put
</span><br>
<span class="quotelev2">&gt; &gt; a list of tasks to the scheduler and then the scheduler distributes the
</span><br>
<span class="quotelev2">&gt; &gt; tasks to other client nodes.
</span><br>
<span class="quotelev2">&gt; &gt; It may work like in this way:
</span><br>
<span class="quotelev2">&gt; &gt; while(still tasks available) {
</span><br>
<span class="quotelev2">&gt; &gt; myScheduler.push(tasks);
</span><br>
<span class="quotelev2">&gt; &gt; myScheduler.get(tasks results from client nodes);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exactly. In your case, you want only one server, so you must find a
</span><br>
<span class="quotelev1">&gt; system so that every task can be serialized in the same form. The
</span><br>
<span class="quotelev1">&gt; easiest way to do so is to serialize your parameter set as an XML
</span><br>
<span class="quotelev1">&gt; fragment and add the type of task as another field.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My cluster has 400 nodes with Open MPI. The tasks should be transferred b y
</span><br>
<span class="quotelev2">&gt; &gt; MPI protocol.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, they should not ;) MPI can be used, but it is not the easiest way
</span><br>
<span class="quotelev1">&gt; to do so. You still have to serialize your ticket, and you have to use
</span><br>
<span class="quotelev1">&gt; some functions that are from MPI2 (so perhaps not as portable as MPI1
</span><br>
<span class="quotelev1">&gt; functions). Besides, it cannot be used from programs that do not know
</span><br>
<span class="quotelev1">&gt; of using MPI protocols.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am not familiar with  RPC Protocol.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RPC is not a protocol per se. SOAP is. RPC stands for Remote Procedure
</span><br>
<span class="quotelev1">&gt; Call. It is basically your scheduler that has several functions
</span><br>
<span class="quotelev1">&gt; clients can call:
</span><br>
<span class="quotelev1">&gt; - add tickets
</span><br>
<span class="quotelev1">&gt; - retrieve ticket
</span><br>
<span class="quotelev1">&gt; - ticket is done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I use Boost.ASIO and some Python/GCCXML script to generate the code, it
</span><br>
<span class="quotelev2">&gt; &gt; can be
</span><br>
<span class="quotelev2">&gt; &gt; called from C++ program on Open MPI cluster ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, SOAP is just an XML way of representing the fact that you call a
</span><br>
<span class="quotelev1">&gt; function on the server. You can use it with C++, Java, ... I use it
</span><br>
<span class="quotelev1">&gt; with Python to monitor how many tasks are remaining, for instance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I cannot find the skeletton on your blog.
</span><br>
<span class="quotelev2">&gt; &gt; Would you please tell me where to find it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not complete as some of the work is property of my employer. This
</span><br>
<span class="quotelev1">&gt; is how I use GCCXML to generate the calling code:
</span><br>
<span class="quotelev1">&gt; <a href="http://matt.eifelle.com/2009/07/21/using-gccxml-to-automate-c-wrappers-creation/">http://matt.eifelle.com/2009/07/21/using-gccxml-to-automate-c-wrappers-creation/</a>
</span><br>
<span class="quotelev1">&gt; You have some additional code to write, but this is the main idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I really appreciate your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No sweat, I hope I can give you correct hints!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthieu
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
Hotmail is redefining busy with tools for the New Busy. Get more from your inbox.
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_2">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_2</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13354.php">jody: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13352.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13350.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13354.php">jody: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13354.php">jody: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13356.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
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
