<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept - Busy wait";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 14:43:36 2011" -->
<!-- isoreceived="20111014184336" -->
<!-- sent="Fri, 14 Oct 2011 12:43:25 -0600" -->
<!-- isosent="20111014184325" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept - Busy wait" -->
<!-- id="68A277D2-2757-4343-91DE-A7C4FD54D0BD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEyYoRoaBrmPhOg1Uz6Qqk0RPxo4kOYoQjjXmGLL+kxddJtUrQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 14:43:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Previous message:</strong> <a href="17545.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>In reply to:</strong> <a href="17543.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Reply:</strong> <a href="17547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - been occupied. This is normal behavior. As has been discussed on this list before, OMPI made a design decision to minimize latency. This means we aggressively poll for connections. Only thing you can do is tell it to yield the processor when idle so, if something else is trying to run, we will let it get in there a little earlier. Use -mca mpi_yield_when_idle 1
<br>
<p>However, we have seen that if no other user processes are trying to run, then the scheduler hands the processor right back to you - and you'll still see that 100% number. It doesn't mean we are being hogs - it just means that nothing else wants to run, so we happily accept the time.
<br>
<p><p>On Oct 14, 2011, at 12:21 PM, Thatyene Louise Alves de Souza Ramos wrote:
<br>
<p><span class="quotelev1">&gt; Does anyone have any idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Thatyene Ramos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 7, 2011 at 12:01 PM, Thatyene Louise Alves de Souza Ramos &lt;thatyene_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi there!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my code I use MPI_Comm_accept in a server-client communication. I noticed that the server remains on busy wait whereas waiting for clients connections, using 100% of CPU if there are no other processes running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if there is any way to prevent this from happening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thatyene Ramos
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17546/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Previous message:</strong> <a href="17545.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>In reply to:</strong> <a href="17543.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Reply:</strong> <a href="17547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
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
