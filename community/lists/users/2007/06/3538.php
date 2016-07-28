<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 15:14:43 2007" -->
<!-- isoreceived="20070621191443" -->
<!-- sent="Thu, 21 Jun 2007 14:14:39 -0500 (CDT)" -->
<!-- isosent="20070621191439" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI	question/problem]	including	code	attachments" -->
<!-- id="Pine.LNX.4.58.0706211404490.26552_at_triumph.mcs.anl.gov" -->
<!-- charset="X-UNKNOWN" -->
<!-- inreplyto="1182450810.24587.193.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 15:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3539.php">흆e Sandgren: "Re: [OMPI users] [Fwd:	MPI	question/problem]	including	code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3537.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3536.php">&#197;ke Sandgren: "Re: [OMPI users] [Fwd: MPI question/problem]	including	code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3539.php">흆e Sandgren: "Re: [OMPI users] [Fwd:	MPI	question/problem]	including	code	attachments"</a>
<li><strong>Reply:</strong> <a href="3539.php">흆e Sandgren: "Re: [OMPI users] [Fwd:	MPI	question/problem]	including	code	attachments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What test you are refering to ?
<br>
<p>config.log contains the test results of the features that configure is
<br>
looking for.  Failure of some thread test does not mean OpenMPI can't
<br>
support threads.  In fact, I was able to run a simple/correct
<br>
MPI_THREAD_MULTIPLE program uses pthread with openmpi-1.2.3 and the
<br>
program finishes normally on this multicore Ubuntu box.
<br>
<p>A.Chan
<br>
<p>On Thu, 21 Jun 2007, [ISO-8859-1] &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2007-06-21 at 13:27 -0500, Anthony Chan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It seems the hang only occurs when OpenMPI is built with
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-threads --enable-progress-threads.  [My OpenMPI builds use
</span><br>
<span class="quotelev2">&gt; &gt; gcc (GCC) 4.1.2 (Ubuntu 4.1.2-0ubuntu4)].  Probably
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-threads is the relevant option to cause the hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you looked at the config.log file for the thread test. When i built
</span><br>
<span class="quotelev1">&gt; ompi on Ubuntu that test was broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3539.php">흆e Sandgren: "Re: [OMPI users] [Fwd:	MPI	question/problem]	including	code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3537.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3536.php">&#197;ke Sandgren: "Re: [OMPI users] [Fwd: MPI question/problem]	including	code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3539.php">흆e Sandgren: "Re: [OMPI users] [Fwd:	MPI	question/problem]	including	code	attachments"</a>
<li><strong>Reply:</strong> <a href="3539.php">흆e Sandgren: "Re: [OMPI users] [Fwd:	MPI	question/problem]	including	code	attachments"</a>
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
