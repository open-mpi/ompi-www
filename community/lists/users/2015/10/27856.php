<?
$subject_val = "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 08:51:45 2015" -->
<!-- isoreceived="20151009125145" -->
<!-- sent="Fri, 9 Oct 2015 05:51:38 -0700" -->
<!-- isosent="20151009125138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] python, mpi and shell subprocess: orte_error_log" -->
<!-- id="8A09BD4E-A4FB-43EE-B9F7-A4F98FD8C705_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEcYPwBKppMn9SxkxXoVmgQwQjN4-_1tzQpTvyenhfgROep1SA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 08:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27857.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27845.php">Gilles Gouaillardet: "[OMPI users]  python, mpi and shell subprocess: orte_error_log"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: OpenMPI does support spawning of both MPI and non-MPI jobs. If you are spawning a non-MPI job, then you have to -tell- us that so we don&#226;&#128;&#153;t hang trying to connect the new procs to the spawning proc as per MPI requirements.
<br>
<p>This is done by providing an info key to indicate that the child job is non-MPI, as explained in the MPI_Comm_spawn man page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_non_mpi           bool     If set to true, launching a non-MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application; the returned communicator
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will be MPI_COMM_NULL. Failure to set
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this flag when launching a non-MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application will cause both the child
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and parent jobs to &quot;hang&quot;.
<br>
<p><p><span class="quotelev1">&gt; On Oct 9, 2015, at 2:15 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9 October 2015 at 12:05, simona bellavista &lt;afylot_at_[hidden] &lt;mailto:afylot_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015-10-09 9:40 GMT+02:00 Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8 October 2015 at 14:54, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I cannot figure out how spawn would work with a string-command. I tried
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI.COMM_SELF.Spawn(cmd, args=None,maxproc=4) and it just hangs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI.COMM_SELF.Spawn(&quot;/bin/echo&quot;, args=[&quot;Hello&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;World!&quot;],maxprocs=1).Disconnect()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you try the line above and confirm whether it hangs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have tried the line above and it hangs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, as &quot;echo&quot; is not an MPI application, then it seems OpenMPI does
</span><br>
<span class="quotelev1">&gt; not support spawning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I couldn't figure out how to run Spawn with a string-like command, in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fact
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the command that I want to run varies for each processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use maxprocs=1 and make different spawn calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I have to insist. If you are using mpi4py as a tool to spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a bunch of different processes that work in isolation and then collect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result at the end, then mpi4py is likely not the right tool for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; task, at least if you do not have previous experience with MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programming.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, I don't have a big experience in MPI programming, but I do use and
</span><br>
<span class="quotelev2">&gt;&gt; modify existing MPI codes, and I thought MPI would be easiest choice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you seen these existing MPI codes calling back to the shell to
</span><br>
<span class="quotelev1">&gt; execute commands?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Clustershells looks a bit an overshoot for the goal I would like to achieve.
</span><br>
<span class="quotelev2">&gt;&gt; What shall I use instead? Shall I try multiprocessing module?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As long as running on a single compute node is many cores is enough
</span><br>
<span class="quotelev1">&gt; for your application, there is no reason to use MPI. Python's
</span><br>
<span class="quotelev1">&gt; multiprocessing of perhaps the Python 3 &quot;concurrent.futures&quot; package
</span><br>
<span class="quotelev1">&gt; (there is a backport for Python 2 on PyPI) would be trivial to get
</span><br>
<span class="quotelev1">&gt; working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27855.php">http://www.open-mpi.org/community/lists/users/2015/10/27855.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27855.php">http://www.open-mpi.org/community/lists/users/2015/10/27855.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27856/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27857.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27855.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27845.php">Gilles Gouaillardet: "[OMPI users]  python, mpi and shell subprocess: orte_error_log"</a>
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
