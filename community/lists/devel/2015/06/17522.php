<?
$subject_val = "Re: [OMPI devel] Bug";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 21:33:06 2015" -->
<!-- isoreceived="20150623013306" -->
<!-- sent="Tue, 23 Jun 2015 10:32:50 +0900" -->
<!-- isosent="20150623013250" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug" -->
<!-- id="5588B742.20007_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEcYPwArwGHwRwpzzJ=yoQn=50o0eXSJRTr64U7Dth_psapr7A_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 21:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>In reply to:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>IMHO, if the mpi4py testsuite can be easily integrated in MTT, i think 
<br>
this can be interesting.
<br>
<p>and if you have the resources, you could run the tests and automatically 
<br>
report the results.
<br>
<p>on one hand, we are interested by Open MPI bugs (even if they are 
<br>
reported by mpi4py), but on
<br>
the other hand, i do not think as a community, we are interested by 
<br>
mpi4py bugs.
<br>
<p>i will let other folks comment on that.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/23/2015 9:49 AM, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; On 22 June 2015 at 18:26, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; if you still have the test program that can do that, could you please post
</span><br>
<span class="quotelev2">&gt;&gt; it ?
</span><br>
<span class="quotelev1">&gt; Oh, I see. These warnings arose while running mpi4py (my Python
</span><br>
<span class="quotelev1">&gt; wrappers for MPI) testsuite. I'll have to write a C version or the
</span><br>
<span class="quotelev1">&gt; offending test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Would you be interested in somehow integrate mpi4py testing within
</span><br>
<span class="quotelev1">&gt; your continuous integration infrastructure? I've been reporting bugs
</span><br>
<span class="quotelev1">&gt; since a long time ago, all of them were caught by my testsuite. These
</span><br>
<span class="quotelev1">&gt; tests are a bit special in the sense that a single run stress almost
</span><br>
<span class="quotelev1">&gt; all of MPI. Also, my testsuite tests for corner cases and &quot;stupid&quot;
</span><br>
<span class="quotelev1">&gt; code paths (e.g. create and destroy something without ever using it
</span><br>
<span class="quotelev1">&gt; for anything useful) that evidently no one out there is testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>In reply to:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
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
