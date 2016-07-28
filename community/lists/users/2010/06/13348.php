<?
$subject_val = "Re: [OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 14:13:20 2010" -->
<!-- isoreceived="20100620181320" -->
<!-- sent="Sun, 20 Jun 2010 20:13:14 +0200" -->
<!-- isosent="20100620181314" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI task scheduler" -->
<!-- id="AANLkTime3AfelY7pDthSeLBzt55Zf4lQbolPWn3aO6tG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w516C85E49267106B14CF13CBC20_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-06-20 14:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13347.php">Jack Bryan: "[OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13347.php">Jack Bryan: "[OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack,
<br>
<p>What you are seeking is the client/server pattern. Have one node act
<br>
as a server. It will create a list of tasks or even a graph of tasks
<br>
if you have dependencies, and then create clients that will connect to
<br>
the server with an RPC protocol (I've done this with a SOAP+TCP
<br>
protocol, the severance of the TCP connection meaning that the client
<br>
is dead and that its task should be recycled, it&#233;s easy to do with
<br>
Boost.ASIO and some Python/GCCXML scripts to automatically generate
<br>
your code, I've written a skeletton on my blog). You may even have
<br>
clients with different sizes or capabilities and tell the server what
<br>
each client can do, and then the server may dispatch appropriate
<br>
tickets to the clients.
<br>
<p>Each client and server can be a MPI process, you don't have to create
<br>
all clients inside one MPI process (you may use several if the
<br>
smallest resource your batch scheduler allocates is bigger that one of
<br>
your tasks). With a batch scheduler, it's better to allocate your
<br>
tasks as small as possible so that you can balance the resources you
<br>
need.
<br>
<p>Matthieu
<br>
<p>2010/6/20 Jack Bryan &lt;dtustudy68_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi, all:
</span><br>
<span class="quotelev1">&gt; I need to design a task scheduler (not PBS job scheduler) on Open MPI
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev1">&gt; I need to parallelize an algorithm so that a big problem is decomposed into
</span><br>
<span class="quotelev1">&gt; small tasks, which can be distributed
</span><br>
<span class="quotelev1">&gt; to other worker nodes by the Scheduler and after being solved, the results
</span><br>
<span class="quotelev1">&gt; of these tasks are returned to the manager node with the Scheduler, which
</span><br>
<span class="quotelev1">&gt; will distribute more tasks on the base of the collected results.
</span><br>
<span class="quotelev1">&gt; I need to use C++ to design the scheduler.
</span><br>
<span class="quotelev1">&gt; I have searched online and I cannot find any scheduler available
</span><br>
<span class="quotelev1">&gt; for this purpose.
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; June 19 &#160;2010
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; Hotmail has tools for the New Busy. Search, chat and e-mail from your inbox.
</span><br>
<span class="quotelev1">&gt; Learn more.
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
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13347.php">Jack Bryan: "[OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13347.php">Jack Bryan: "[OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13349.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
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
