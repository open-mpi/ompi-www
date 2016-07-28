<?
$subject_val = "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 05:15:57 2015" -->
<!-- isoreceived="20151009091557" -->
<!-- sent="Fri, 9 Oct 2015 12:15:33 +0300" -->
<!-- isosent="20151009091533" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] python, mpi and shell subprocess: orte_error_log" -->
<!-- id="CAEcYPwBKppMn9SxkxXoVmgQwQjN4-_1tzQpTvyenhfgROep1SA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAC-_n505aNcYVQLM_Q+ZKpCKr+QLuTGdG23rwfwXuSbo3xXtMQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 05:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27856.php">Ralph Castain: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27856.php">Ralph Castain: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27856.php">Ralph Castain: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9 October 2015 at 12:05, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-10-09 9:40 GMT+02:00 Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8 October 2015 at 14:54, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I cannot figure out how spawn would work with a string-command. I tried
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI.COMM_SELF.Spawn(cmd, args=None,maxproc=4) and it just hangs
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI.COMM_SELF.Spawn(&quot;/bin/echo&quot;, args=[&quot;Hello&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;World!&quot;],maxprocs=1).Disconnect()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you try the line above and confirm whether it hangs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried the line above and it hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, as &quot;echo&quot; is not an MPI application, then it seems OpenMPI does
<br>
not support spawning.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I couldn't figure out how to run Spawn with a string-like command, in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fact
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the command that I want to run varies for each processor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Use maxprocs=1 and make different spawn calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I have to insist. If you are using mpi4py as a tool to spawn
</span><br>
<span class="quotelev2">&gt;&gt; a bunch of different processes that work in isolation and then collect
</span><br>
<span class="quotelev2">&gt;&gt; result at the end, then mpi4py is likely not the right tool for the
</span><br>
<span class="quotelev2">&gt;&gt; task, at least if you do not have previous experience with MPI
</span><br>
<span class="quotelev2">&gt;&gt; programming.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Well, I don't have a big experience in MPI programming, but I do use and
</span><br>
<span class="quotelev1">&gt; modify existing MPI codes, and I thought MPI would be easiest choice.
</span><br>
<p>Have you seen these existing MPI codes calling back to the shell to
<br>
execute commands?
<br>
<p><span class="quotelev1">&gt; Clustershells looks a bit an overshoot for the goal I would like to achieve.
</span><br>
<span class="quotelev1">&gt; What shall I use instead? Shall I try multiprocessing module?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>As long as running on a single compute node is many cores is enough
<br>
for your application, there is no reason to use MPI. Python's
<br>
multiprocessing of perhaps the Python 3 &quot;concurrent.futures&quot; package
<br>
(there is a backport for Python 2 on PyPI) would be trivial to get
<br>
working.
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27856.php">Ralph Castain: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27856.php">Ralph Castain: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27856.php">Ralph Castain: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
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
