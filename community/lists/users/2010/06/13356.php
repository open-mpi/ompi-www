<?
$subject_val = "Re: [OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 03:14:22 2010" -->
<!-- isoreceived="20100621071422" -->
<!-- sent="Mon, 21 Jun 2010 09:14:18 +0200" -->
<!-- isosent="20100621071418" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI task scheduler" -->
<!-- id="AANLkTilFTIjfUDd5Cj4K0BRsMJjxvFDXNUYM1U8ZLIPO_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 03:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13355.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] question about reconstructPar"</a>
<li><strong>In reply to:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2010/6/21 Jack Bryan &lt;dtustudy68_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thank you very much for your help.
</span><br>
<span class="quotelev1">&gt; What is the meaning of &quot; must find a system so that every task can be
</span><br>
<span class="quotelev1">&gt; serialized in the same form.&quot; What is the meaning of &quot;serize &quot; ?
</span><br>
<p>Serialize is the process of converting an object instance into a
<br>
text/binary stream, and to create a new object instance from this
<br>
stream. It allows communication of data between processes. With MPI,
<br>
you send one data type after another, with serialization, you send
<br>
everything in one big chunk.
<br>
<p><span class="quotelev1">&gt; I have no experience of programming with python and XML.
</span><br>
<p>Python is not mandatory at all. I use it to automate the wrappers/SOAP
<br>
files generation, and to talk to the daemon. You can do this is any
<br>
language you are comfortable with.
<br>
<p><span class="quotelev1">&gt; I have studied your blog.
</span><br>
<span class="quotelev1">&gt; Where can I find a simple example to use the techniques you have said ?
</span><br>
<p>If you are looking for RPC samples, you can ask google with just SOAP
<br>
as key, it will find several tutorials on how this works. As Jody
<br>
said, you may want something simplier if you can have all tasks in one
<br>
MPI process, but once you go on a big cluster with variable resources,
<br>
you will be stuck.
<br>
<p><span class="quotelev1">&gt; For exmple, I have 5 task (print &quot;hello world !&quot;).
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
<p>In this case, you have your daemon working in parallel from the batch
<br>
scheduler, and then each process asks the daemon for a new ticket. You
<br>
may add tickets by talking to the dameon directly, without having to
<br>
launch a new job.
<br>
<p><p><span class="quotelev1">&gt; Boost.Asio is a cross-platform C++ library for network and low-level I/O
</span><br>
<span class="quotelev1">&gt; programming. I have no experiences of using it. Will it take a long time to
</span><br>
<span class="quotelev1">&gt; learn
</span><br>
<span class="quotelev1">&gt; how to use it ?
</span><br>
<p>The longest time will not be to master Boost, but more to understand
<br>
how to create your TCP server and to serialize your parameters.
<br>
<p><span class="quotelev1">&gt; If the messages are transferred by SOAP+TCP, how the manager node calls it
</span><br>
<span class="quotelev1">&gt; and push task into it ?
</span><br>
<p>You have to think of SOAP + TCP as just a simple function call that
<br>
hides everything. From the client node point of view, it's a simple
<br>
function call server.get_ticket(). The manager node will be talked to
<br>
by different kind of programs: task programs or by a program that will
<br>
push tickets. The latter one will just be another function call like
<br>
this in C++:
<br>
<p>std::vector&lt;std::string&gt; tickets;
<br>
daemon.connect(somewhere, port);
<br>
daemon.add_tickets(tickets);
<br>
<p><span class="quotelev1">&gt; Do I need to install SOAP+TCP on my cluster so that I can use it ?
</span><br>
<p>As Jody said, you can do things with MPI directly. I would not
<br>
recommand it, but this will help you with a fast solution. You will
<br>
have to use some MPI2 calls to create a socket on the daemon to talk
<br>
to it, and in fact, you will have to create exactly what I proposed,
<br>
but less portable.
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
<li><strong>Next message:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13355.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] question about reconstructPar"</a>
<li><strong>In reply to:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
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
