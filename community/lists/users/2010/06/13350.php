<?
$subject_val = "Re: [OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 15:00:11 2010" -->
<!-- isoreceived="20100620190011" -->
<!-- sent="Sun, 20 Jun 2010 21:00:06 +0200" -->
<!-- isosent="20100620190006" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI task scheduler" -->
<!-- id="AANLkTikSSf-x7HOsPCLz_-M_nxLCQPUuod6TXk3VmZDZ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w36B8876072CEBDFFE87C67CBC20_at_phx.gbl" -->
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
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-20 15:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2010/6/20 Jack Bryan &lt;dtustudy68_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi, Matthieu:
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; Most of your ideas show that what I want to do.
</span><br>
<span class="quotelev1">&gt; My scheduler should be able to be called from any C++ program, which can
</span><br>
<span class="quotelev1">&gt; put
</span><br>
<span class="quotelev1">&gt; a list of tasks to the scheduler and then the scheduler distributes the
</span><br>
<span class="quotelev1">&gt; tasks to other client nodes.
</span><br>
<span class="quotelev1">&gt; It may work like in this way:
</span><br>
<span class="quotelev1">&gt; while(still tasks available) {
</span><br>
<span class="quotelev1">&gt; myScheduler.push(tasks);
</span><br>
<span class="quotelev1">&gt; myScheduler.get(tasks results from client nodes);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Exactly. In your case, you want only one server, so you must find a
<br>
system so that every task can be serialized in the same form. The
<br>
easiest way to do so is to serialize your parameter set as an XML
<br>
fragment and add the type of task as another field.
<br>
<p><span class="quotelev1">&gt; My cluster has 400 nodes with Open MPI. The tasks should be transferred b y
</span><br>
<span class="quotelev1">&gt; MPI protocol.
</span><br>
<p>No, they should not ;) MPI can be used, but it is not the easiest way
<br>
to do so. You still have to serialize your ticket, and you have to use
<br>
some functions that are from MPI2 (so perhaps not as portable as MPI1
<br>
functions). Besides, it cannot be used from programs that do not know
<br>
of using MPI protocols.
<br>
<p><span class="quotelev1">&gt; I am not familiar with &#160;RPC Protocol.
</span><br>
<p>RPC is not a protocol per se. SOAP is. RPC stands for Remote Procedure
<br>
Call. It is basically your scheduler that has several functions
<br>
clients can call:
<br>
- add tickets
<br>
- retrieve ticket
<br>
- ticket is done
<br>
<p><span class="quotelev1">&gt; If I use Boost.ASIO and some Python/GCCXML script to generate the code, it
</span><br>
<span class="quotelev1">&gt; can be
</span><br>
<span class="quotelev1">&gt; called from C++ program on Open MPI cluster ?
</span><br>
<p>Yes, SOAP is just an XML way of representing the fact that you call a
<br>
function on the server. You can use it with C++, Java, ... I use it
<br>
with Python to monitor how many tasks are remaining, for instance.
<br>
<p><span class="quotelev1">&gt; I cannot find the skeletton on your blog.
</span><br>
<span class="quotelev1">&gt; Would you please tell me where to find it ?
</span><br>
<p>It's not complete as some of the work is property of my employer. This
<br>
is how I use GCCXML to generate the calling code:
<br>
<a href="http://matt.eifelle.com/2009/07/21/using-gccxml-to-automate-c-wrappers-creation/">http://matt.eifelle.com/2009/07/21/using-gccxml-to-automate-c-wrappers-creation/</a>
<br>
You have some additional code to write, but this is the main idea.
<br>
<p><span class="quotelev1">&gt; I really appreciate your help.
</span><br>
<p>No sweat, I hope I can give you correct hints!
<br>
<p>Matthieu
<br>
<pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
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
