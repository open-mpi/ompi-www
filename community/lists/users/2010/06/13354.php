<?
$subject_val = "Re: [OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 02:41:28 2010" -->
<!-- isoreceived="20100621064128" -->
<!-- sent="Mon, 21 Jun 2010 08:41:23 +0200" -->
<!-- isosent="20100621064123" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI task scheduler" -->
<!-- id="AANLkTimMub8ZUY6ZJKcIOyTPHxmeoHD2SIZMMsMJalpQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w65403BD150FE379FCA77F6CBC20_at_phx.gbl" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 02:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13355.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] question about reconstructPar"</a>
<li><strong>Previous message:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13356.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I think your problem can be solved easily on  the MPI level.
<br>
Just hav you manager execute a loop in which it waits for any message.
<br>
Define different message types by their MPI-tags. Once a message
<br>
has been received, decide what to do by looking at the tag.
<br>
<p>Here i assume that a worker with no job sends a message with the tag
<br>
TAG_TASK_REQUEST and then waits to receive a message from the master
<br>
with either a new task or the command to exit.
<br>
Once a worker has finished a tsk it sends a message with the tag TAG_RESULT,
<br>
and then sends a message containing the result.
<br>
Here i assume that new tasks can be sent from a different node by using
<br>
the tag TAG_NEW_TASK.
<br>
<p>The main loop in the Master would be:
<br>
<p>while (more_tasks) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;a, MPI_INT, 1, MPI_ANY_SOURCE, MPI_ANY_TAG, &amp;st);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (st.MPI_TAG) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case TAG_TASK_REQUEST:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendNextTask(st.MPI_SOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case TAG_RESULT:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collectResult(st.MPI_SOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case TAG_NEW_TASK:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;putNewTaskOnQueue(st.MPI_SOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p><p>In a worker:
<br>
<p>&nbsp;&nbsp;while (go_on) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(a, MPI_INT, 1, idMaster, TAG_TASK_REQUEST);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;TaskDef, TaskType, 1, idMaster, MPI_ANY_TAG, &amp;st);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (st.MPI_TAG == TAG_STOP) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;go_on=false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result=workOnTask(TaskDef, TaskLen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(a, MPI_INT, 1, idMaster, TAG_RESULT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(result, resultType, 1, idMaster, TAG_RESULT_CONTENT);
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p>I hope this helps
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Mon, Jun 21, 2010 at 12:17 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thank you very much for your help.
</span><br>
<span class="quotelev1">&gt; What is the meaning of &quot; must find a system so that every task can be
</span><br>
<span class="quotelev1">&gt; serialized in the same form.&quot; What is the meaning of &quot;serize &quot; ?
</span><br>
<span class="quotelev1">&gt; I have no experience of programming with python and XML.
</span><br>
<span class="quotelev1">&gt; I have studied your blog.
</span><br>
<span class="quotelev1">&gt; Where can I find a simple example to use the techniques you have said ?
</span><br>
<span class="quotelev1">&gt; For exmple, I have 5 task (print &quot;hello world !&quot;).
</span><br>
<span class="quotelev1">&gt; I want to use 6 processors to do it in parallel.
</span><br>
<span class="quotelev1">&gt; One processr is the manager node who distributes tasks and other 5
</span><br>
<span class="quotelev1">&gt; processors
</span><br>
<span class="quotelev1">&gt; do the printing jobs and when they are done, they tell this to the manager
</span><br>
<span class="quotelev1">&gt; noitde.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Boost.Asio is a cross-platform C++ library for network and low-level I/O
</span><br>
<span class="quotelev1">&gt; programming. I have no experiences of using it. Will it take a long time to
</span><br>
<span class="quotelev1">&gt; learn
</span><br>
<span class="quotelev1">&gt; how to use it ?
</span><br>
<span class="quotelev1">&gt; If the messages are transferred by SOAP+TCP, how the manager node calls it
</span><br>
<span class="quotelev1">&gt; and push task into it ?
</span><br>
<span class="quotelev1">&gt; Do I need to install SOAP+TCP on my cluster so that I can use it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; June 20 &#160;2010
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sun, 20 Jun 2010 21:00:06 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: matthieu.brucher_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Open MPI task scheduler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/6/20 Jack Bryan &lt;dtustudy68_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi, Matthieu:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for your help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Most of your ideas show that what I want to do.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My scheduler should be able to be called from any C++ program, which can
</span><br>
<span class="quotelev3">&gt;&gt; &gt; put
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a list of tasks to the scheduler and then the scheduler distributes the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tasks to other client nodes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It may work like in this way:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; while(still tasks available) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; myScheduler.push(tasks);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; myScheduler.get(tasks results from client nodes);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Exactly. In your case, you want only one server, so you must find a
</span><br>
<span class="quotelev2">&gt;&gt; system so that every task can be serialized in the same form. The
</span><br>
<span class="quotelev2">&gt;&gt; easiest way to do so is to serialize your parameter set as an XML
</span><br>
<span class="quotelev2">&gt;&gt; fragment and add the type of task as another field.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My cluster has 400 nodes with Open MPI. The tasks should be transferred
</span><br>
<span class="quotelev3">&gt;&gt; &gt; b y
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI protocol.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, they should not ;) MPI can be used, but it is not the easiest way
</span><br>
<span class="quotelev2">&gt;&gt; to do so. You still have to serialize your ticket, and you have to use
</span><br>
<span class="quotelev2">&gt;&gt; some functions that are from MPI2 (so perhaps not as portable as MPI1
</span><br>
<span class="quotelev2">&gt;&gt; functions). Besides, it cannot be used from programs that do not know
</span><br>
<span class="quotelev2">&gt;&gt; of using MPI protocols.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am not familiar with &#160;RPC Protocol.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RPC is not a protocol per se. SOAP is. RPC stands for Remote Procedure
</span><br>
<span class="quotelev2">&gt;&gt; Call. It is basically your scheduler that has several functions
</span><br>
<span class="quotelev2">&gt;&gt; clients can call:
</span><br>
<span class="quotelev2">&gt;&gt; - add tickets
</span><br>
<span class="quotelev2">&gt;&gt; - retrieve ticket
</span><br>
<span class="quotelev2">&gt;&gt; - ticket is done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If I use Boost.ASIO and some Python/GCCXML script to generate the code,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; can be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; called from C++ program on Open MPI cluster ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, SOAP is just an XML way of representing the fact that you call a
</span><br>
<span class="quotelev2">&gt;&gt; function on the server. You can use it with C++, Java, ... I use it
</span><br>
<span class="quotelev2">&gt;&gt; with Python to monitor how many tasks are remaining, for instance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I cannot find the skeletton on your blog.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Would you please tell me where to find it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's not complete as some of the work is property of my employer. This
</span><br>
<span class="quotelev2">&gt;&gt; is how I use GCCXML to generate the calling code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://matt.eifelle.com/2009/07/21/using-gccxml-to-automate-c-wrappers-creation/">http://matt.eifelle.com/2009/07/21/using-gccxml-to-automate-c-wrappers-creation/</a>
</span><br>
<span class="quotelev2">&gt;&gt; You have some additional code to write, but this is the main idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I really appreciate your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No sweat, I hope I can give you correct hints!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthieu
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
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
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; Hotmail is redefining busy with tools for the New Busy. Get more from your
</span><br>
<span class="quotelev1">&gt; inbox. See how.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13355.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] question about reconstructPar"</a>
<li><strong>Previous message:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13356.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
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
