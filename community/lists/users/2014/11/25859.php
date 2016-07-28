<?
$subject_val = "Re: [OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 24 01:06:40 2014" -->
<!-- isoreceived="20141124060640" -->
<!-- sent="Mon, 24 Nov 2014 00:06:39 -0600" -->
<!-- isosent="20141124060639" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_wtime implementation" -->
<!-- id="CAMJJpkU8mPibA26WonQezpZJ9Dvz+g3rjkA7-33+FQ9yGYmUPg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="679EB04D-924B-4D56-8CE1-7DE1BFDEF2ED_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_wtime implementation<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-24 01:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25860.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25858.php">George Bosilca: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://github.com/open-mpi/ompi/pull/285">https://github.com/open-mpi/ompi/pull/285</a> is a potential answer. I would
<br>
like to hear Dave Goodell comment on this before pushing it upstream.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Nov 19, 2014 at 12:56 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You&#226;&#128;&#153;re right, we screwed up (some #define not correctly set). I have a
</span><br>
<span class="quotelev1">&gt; patch, I&#226;&#128;&#153;ll push it asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 19, 2014, at 05:19 , Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Daniels, Marcus G&quot; &lt;mdaniels_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, 2014-11-17 at 17:31 +0000, Dave Love wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I discovered from looking at the mpiP profiler that OMPI always uses
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gettimeofday rather than clock_gettime to implement mpi_wtime on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; GNU/Linux, and that looks sub-optimal.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It can be very expensive in practice, especially for codes that have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fine-grained instrumentation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OK, but I assumed VT would take that sort of thing into account for
</span><br>
<span class="quotelev2">&gt; &gt; platforms I don't have.  clock_gettime(CLOCK_MONOTONIC,) is as fast as
</span><br>
<span class="quotelev2">&gt; &gt; gettimeofday on our mainstream sort of system (RHEL6, sandybridge);
</span><br>
<span class="quotelev2">&gt; &gt; CLOCK_MONOTONIC_COARSE is about three times faster.  [I can't find that
</span><br>
<span class="quotelev2">&gt; &gt; sort of information in Linux doc.]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps there should be a choice via an MCA parameter, but it looks as
</span><br>
<span class="quotelev2">&gt; &gt; though it should default to clock_gettime on x86_64 Linux.  I suppose
</span><br>
<span class="quotelev2">&gt; &gt; one can argue what &quot;high resolution&quot; means in the mpi_wtime doc, but I'd
</span><br>
<span class="quotelev2">&gt; &gt; rather not.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25844.php">http://www.open-mpi.org/community/lists/users/2014/11/25844.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25859/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25860.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25858.php">George Bosilca: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
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
