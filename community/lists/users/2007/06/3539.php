<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 04:26:24 2007" -->
<!-- isoreceived="20070622082624" -->
<!-- sent="Fri, 22 Jun 2007 10:26:17 +0200" -->
<!-- isosent="20070622082617" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd:	MPI	question/problem]	including	code	attachments" -->
<!-- id="1182500777.24587.207.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="Pine.LNX.4.58.0706211404490.26552_at_triumph.mcs.anl.gov" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-22 04:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3540.php">de Almeida, Valmor F.: "Re: [OMPI users] mpi python recommendation"</a>
<li><strong>Previous message:</strong> <a href="3538.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI	question/problem]	including	code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3538.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI	question/problem]	including	code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2007-06-21 at 14:14 -0500, Anthony Chan wrote:
<br>
<span class="quotelev1">&gt; What test you are refering to ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; config.log contains the test results of the features that configure is
</span><br>
<span class="quotelev1">&gt; looking for.  Failure of some thread test does not mean OpenMPI can't
</span><br>
<span class="quotelev1">&gt; support threads.  In fact, I was able to run a simple/correct
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE program uses pthread with openmpi-1.2.3 and the
</span><br>
<span class="quotelev1">&gt; program finishes normally on this multicore Ubuntu box.
</span><br>
<p>Yes but what i was referring to is the test the checks for NPTL vs Linux
<br>
threads. That test is/was broken and i don't remember off hand if they
<br>
by accident (using gcc) got it right or not on a NPTL system.
<br>
I now for certain that using non GCC compilers the test fails horribly
<br>
and gets it completely wrong. (Unless they have fixed it since i tried
<br>
on 1.0 and early 1.1 and 1.2)
<br>
I did send a patch but i have yet to see it being included.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3540.php">de Almeida, Valmor F.: "Re: [OMPI users] mpi python recommendation"</a>
<li><strong>Previous message:</strong> <a href="3538.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI	question/problem]	including	code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3538.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI	question/problem]	including	code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
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
