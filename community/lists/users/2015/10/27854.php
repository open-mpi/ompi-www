<?
$subject_val = "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 05:05:15 2015" -->
<!-- isoreceived="20151009090515" -->
<!-- sent="Fri, 9 Oct 2015 11:05:11 +0200" -->
<!-- isosent="20151009090511" -->
<!-- name="simona bellavista" -->
<!-- email="afylot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] python, mpi and shell subprocess: orte_error_log" -->
<!-- id="CAC-_n505aNcYVQLM_Q+ZKpCKr+QLuTGdG23rwfwXuSbo3xXtMQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwD3ULksZUKCRp0-OJzSJoAFFj9Cnh+669OpVgb+EbiPMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] python, mpi and shell subprocess: orte_error_log<br>
<strong>From:</strong> simona bellavista (<em>afylot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 05:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2015-10-09 9:40 GMT+02:00 Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On 8 October 2015 at 14:54, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I cannot figure out how spawn would work with a string-command. I tried
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI.COMM_SELF.Spawn(cmd, args=None,maxproc=4) and it just hangs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI.COMM_SELF.Spawn(&quot;/bin/echo&quot;, args=[&quot;Hello&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;World!&quot;],maxprocs=1).Disconnect()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try the line above and confirm whether it hangs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have tried the line above and it hangs
<br>
<p><p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I couldn't figure out how to run Spawn with a string-like command, in
</span><br>
<span class="quotelev1">&gt; fact
</span><br>
<span class="quotelev2">&gt; &gt; the command that I want to run varies for each processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use maxprocs=1 and make different spawn calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I have to insist. If you are using mpi4py as a tool to spawn
</span><br>
<span class="quotelev1">&gt; a bunch of different processes that work in isolation and then collect
</span><br>
<span class="quotelev1">&gt; result at the end, then mpi4py is likely not the right tool for the
</span><br>
<span class="quotelev1">&gt; task, at least if you do not have previous experience with MPI
</span><br>
<span class="quotelev1">&gt; programming.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I don't have a big experience in MPI programming, but I do use and
</span><br>
modify existing MPI codes, and I thought MPI would be easiest choice.
<br>
Clustershells looks a bit an overshoot for the goal I would like to
<br>
achieve. What shall I use instead? Shall I try multiprocessing module?
<br>
<p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27853.php">http://www.open-mpi.org/community/lists/users/2015/10/27853.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
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
