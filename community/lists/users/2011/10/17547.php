<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept - Busy wait";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 14:48:12 2011" -->
<!-- isoreceived="20111014184812" -->
<!-- sent="Fri, 14 Oct 2011 15:47:48 -0300" -->
<!-- isosent="20111014184748" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept - Busy wait" -->
<!-- id="CAEyYoRq2GutpGUNTR2xR-Eb8ukvrXtXzSZfzhc1Bh3jU3WMwjw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68A277D2-2757-4343-91DE-A7C4FD54D0BD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept - Busy wait<br>
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 14:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17548.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17546.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>In reply to:</strong> <a href="17546.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the explanation! I use &quot;-mca mpi_yield_when_idle 1&quot; already!
<br>
<p>Thank you again!
<br>
<pre>
---
Thatyene Ramos
On Fri, Oct 14, 2011 at 3:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; Sorry - been occupied. This is normal behavior. As has been discussed on
&gt; this list before, OMPI made a design decision to minimize latency. This
&gt; means we aggressively poll for connections. Only thing you can do is tell it
&gt; to yield the processor when idle so, if something else is trying to run, we
&gt; will let it get in there a little earlier. Use -mca mpi_yield_when_idle 1
&gt;
&gt; However, we have seen that if no other user processes are trying to run,
&gt; then the scheduler hands the processor right back to you - and you'll still
&gt; see that 100% number. It doesn't mean we are being hogs - it just means that
&gt; nothing else wants to run, so we happily accept the time.
&gt;
&gt;
&gt; On Oct 14, 2011, at 12:21 PM, Thatyene Louise Alves de Souza Ramos wrote:
&gt;
&gt; Does anyone have any idea?
&gt;
&gt; ---
&gt; Thatyene Ramos
&gt;
&gt; On Fri, Oct 7, 2011 at 12:01 PM, Thatyene Louise Alves de Souza Ramos &lt;
&gt; thatyene_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; Hi there!
&gt;&gt;
&gt;&gt; In my code I use MPI_Comm_accept in a server-client communication. I
&gt;&gt; noticed that the server remains on busy wait whereas waiting for clients
&gt;&gt; connections, using 100% of CPU if there are no other processes running.
&gt;&gt;
&gt;&gt; I wonder if there is any way to prevent this from happening.
&gt;&gt;
&gt;&gt; Thanks in advance.
&gt;&gt;
&gt;&gt; Thatyene Ramos
&gt;&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17548.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17546.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>In reply to:</strong> <a href="17546.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<!-- nextthread="start" -->
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
