<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 07:48:34 2008" -->
<!-- isoreceived="20081009114834" -->
<!-- sent="Thu, 9 Oct 2008 17:18:29 +0530" -->
<!-- isosent="20081009114829" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="cb60cbc40810090448q1c63bbd0w56f7ac0f7cffb39_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2b5e0c120810081409v253ef8a6g6a69ac8bb4b93c6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 07:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6918.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>In reply to:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6914.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 9, 2008 at 2:39 AM, Brian Dobbins &lt;bdobbins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [From Eugene Loh:]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH2  -  15 m 53 s.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With regards to your issue, do you have any indication when you get that
</span><br>
<span class="quotelev2">&gt;&gt; 25m39s timing if there is a grotesque amount of time being spent in MPI
</span><br>
<span class="quotelev2">&gt;&gt; calls?  Or, is the slowdown due to non-MPI portions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Just to add my two cents: if this job *can* be run on less than 8
</span><br>
<span class="quotelev1">&gt; processors (ideally, even on just 1), then I'd recommend doing so.  That is,
</span><br>
<span class="quotelev1">&gt; run it with OpenMPI and with MPICH2 on 1, 2 and 4 processors as well.  If
</span><br>
<span class="quotelev1">&gt; the single-processor jobs still give vastly different timings, then perhaps
</span><br>
<span class="quotelev1">&gt; Eugene is on the right track and it comes down to various computational
</span><br>
<span class="quotelev1">&gt; optimizations and not so much the message-passing that's make a difference.
</span><br>
<span class="quotelev1">&gt; Timings from 2 and 4 process runs might be interesting as well to see how
</span><br>
<span class="quotelev1">&gt; this difference changes with process counts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I've seen differences between various MPI libraries before, but nothing
</span><br>
<span class="quotelev1">&gt; quite this severe either.  If I get the time, maybe I'll try to set up
</span><br>
<span class="quotelev1">&gt; Gromacs tonight -- I've got both MPICH2 and OpenMPI installed here and can
</span><br>
<span class="quotelev1">&gt; try to duplicate the runs.   Sangamesh, is this a standard benchmark case
</span><br>
<span class="quotelev1">&gt; that anyone can download and run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes.
<br>
<a href="ftp://ftp.gromacs.org/pub/benchmarks/gmxbench-3.0.tar.gz">ftp://ftp.gromacs.org/pub/benchmarks/gmxbench-3.0.tar.gz</a>
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Cheers,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale Engineering HPC
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6917/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6918.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>In reply to:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6914.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
