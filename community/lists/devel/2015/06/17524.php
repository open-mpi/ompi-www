<?
$subject_val = "Re: [OMPI devel] Bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 11:54:11 2015" -->
<!-- isoreceived="20150623155411" -->
<!-- sent="Tue, 23 Jun 2015 10:53:50 -0500" -->
<!-- isosent="20150623155350" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug" -->
<!-- id="CAEcYPwD6xvn6_ibFVmc1R9Fps40Xef7c6=KTgp1dzgT2cAvteg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5588B742.20007_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-23 11:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17525.php">Howard Pritchard: "[OMPI devel] Fwd: MTT test has completed, status: failed"</a>
<li><strong>Previous message:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>In reply to:</strong> <a href="17522.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 22 June 2015 at 20:32, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMHO, if the mpi4py testsuite can be easily integrated in MTT, i think this
</span><br>
<span class="quotelev1">&gt; can be interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, integrating it in MTT perhaps is too much. I would think about
<br>
mpi4py's testsuite as an additional set of tests to run.
<br>
<p><span class="quotelev1">&gt; and if you have the resources, you could run the tests and automatically
</span><br>
<span class="quotelev1">&gt; report the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, I do not have resources I own, but I guess we could use free
<br>
services like Travis-CI
<br>
<p><span class="quotelev1">&gt; on one hand, we are interested by Open MPI bugs (even if they are reported
</span><br>
<span class="quotelev1">&gt; by mpi4py), but on
</span><br>
<span class="quotelev1">&gt; the other hand, i do not think as a community, we are interested by mpi4py
</span><br>
<span class="quotelev1">&gt; bugs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I understand your concern about mpi4py bugs. However, I would say that
<br>
99% of issues users ever had with mpi4py are either build issues, or
<br>
problems with the backend MPI implementation. I'm very serious about
<br>
testing and doing continuous integration across Python runtimes,
<br>
MPI-{1|2|3} implementations, and OSs:
<br>
<p><a href="https://travis-ci.org/mpi4py/mpi4py/builds">https://travis-ci.org/mpi4py/mpi4py/builds</a>
<br>
<a href="https://binstar.org/mpi4py/mpi4py/builds">https://binstar.org/mpi4py/mpi4py/builds</a>
<br>
<a href="https://ci.appveyor.com/project/mpi4py/mpi4py/history">https://ci.appveyor.com/project/mpi4py/mpi4py/history</a>
<br>
<p>Of course, there is always the possibility that some of my tests
<br>
eventually fail because of mistake I make in the tests, or because of
<br>
my bad understanding or interpretation of the MPI standard. Weighing
<br>
the prons and cons is on your side, but I believe more testing is
<br>
always good, even if very occasionally you get a failure that is not
<br>
Open MPI's fault.
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
<li><strong>Next message:</strong> <a href="17525.php">Howard Pritchard: "[OMPI devel] Fwd: MTT test has completed, status: failed"</a>
<li><strong>Previous message:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>In reply to:</strong> <a href="17522.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
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
