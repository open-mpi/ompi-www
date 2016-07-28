<?
$subject_val = "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 03:40:24 2015" -->
<!-- isoreceived="20151009074024" -->
<!-- sent="Fri, 9 Oct 2015 10:40:00 +0300" -->
<!-- isosent="20151009074000" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] python, mpi and shell subprocess: orte_error_log" -->
<!-- id="CAEcYPwD3ULksZUKCRp0-OJzSJoAFFj9Cnh+669OpVgb+EbiPMg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAC-_n52UVX-wWyz30E4fs6m-epPLcxMTo1inS0q2RCC+GJHFpQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-09 03:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27852.php">waku2005: "[OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27844.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8 October 2015 at 14:54, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot figure out how spawn would work with a string-command. I tried
</span><br>
<span class="quotelev2">&gt;&gt; MPI.COMM_SELF.Spawn(cmd, args=None,maxproc=4) and it just hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>MPI.COMM_SELF.Spawn(&quot;/bin/echo&quot;, args=[&quot;Hello&quot;,
<br>
&quot;World!&quot;],maxprocs=1).Disconnect()
<br>
<p>Could you try the line above and confirm whether it hangs?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I couldn't figure out how to run Spawn with a string-like command, in fact
</span><br>
<span class="quotelev1">&gt; the command that I want to run varies for each processor.
</span><br>
<p>Use maxprocs=1 and make different spawn calls.
<br>
<p>However, I have to insist. If you are using mpi4py as a tool to spawn
<br>
a bunch of different processes that work in isolation and then collect
<br>
result at the end, then mpi4py is likely not the right tool for the
<br>
task, at least if you do not have previous experience with MPI
<br>
programming.
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
<li><strong>Next message:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27852.php">waku2005: "[OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27844.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27854.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
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
