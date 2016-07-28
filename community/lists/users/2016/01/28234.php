<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 19:53:13 2016" -->
<!-- isoreceived="20160107005313" -->
<!-- sent="Wed, 6 Jan 2016 16:52:43 -0800" -->
<!-- isosent="20160107005243" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAGKz=uJ_dd_WEVMJU1Q1KSPNBZz0RtkMbGTGWNwB17JnT21cBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFb48S-d81HskF-uwc9YOFfeo0Z4Vukk46cnPmRDXn_h0=p=PQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 19:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Previous message:</strong> <a href="28233.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28233.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 6, 2016 at 4:36 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jan 6, 2016 at 7:20 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there has been one attempt to set the OMP_* environment variables within
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI, and that was aborted
</span><br>
<span class="quotelev2">&gt;&gt; because that caused crashes with a prominent commercial compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; also, i'd like to clarify that OpenMPI does bind MPI tasks (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; processes), and it is up to the OpenMP runtime to bind the OpenMP threads
</span><br>
<span class="quotelev2">&gt;&gt; to the resources made available by OpenMPI to the MPI task.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in this case, that means OpenMPI will bind a MPI tasks to 7 cores (for
</span><br>
<span class="quotelev2">&gt;&gt; example cores 7 to 13), and it is up to the OpenMP runtime to bind each 7
</span><br>
<span class="quotelev2">&gt;&gt; OpenMP threads to one core previously allocated by OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; (for example, OMP thread 0 to core 7, OMP thread 1 to core 8, ...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed. Hybrid programming is a two-step tango. The harder task (in some
</span><br>
<span class="quotelev1">&gt; ways) is the placing MPI processes where I want. With omplace I could just
</span><br>
<span class="quotelev1">&gt; force things (though probably not with Open MPI...haven't tried it yet),
</span><br>
<span class="quotelev1">&gt; but I'd rather have a more &quot;formulaic&quot; way to place processes since then
</span><br>
<span class="quotelev1">&gt; you can script it. Now that I know about the ppr: syntax, I can see it'll
</span><br>
<span class="quotelev1">&gt; be quite useful!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other task is to get the OpenMP threads in the &quot;right way&quot;. I was
</span><br>
<span class="quotelev1">&gt; pretty sure KMP_AFFINITY=compact was correct (worked once...and, yeah,
</span><br>
<span class="quotelev1">&gt; using Intel at present. Figured start there, then expand to figure out GCC
</span><br>
<span class="quotelev1">&gt; and PGI). I'll do some experimenting with the OMP_* versions as a
</span><br>
<span class="quotelev1">&gt; more-respected standard is always a good thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For others with inquiries into this, I highly recommend this page I found
</span><br>
<span class="quotelev1">&gt; after my query was answered here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.olcf.ornl.gov/kb_articles/parallel-job-execution-on-commodity-clusters/">https://www.olcf.ornl.gov/kb_articles/parallel-job-execution-on-commodity-clusters/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point, I'm thinking I should start up an MPI+OpenMP wiki to map
</span><br>
<span class="quotelev1">&gt; all the combinations of compiler+mpistack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Just using Intel compilers, OpenMP and MPI.  Problem solved :-)
<br>
<p>(I work for Intel and the previous statement should be interpreted as a
<br>
joke, although Intel OpenMP and MPI interoperate as well as any
<br>
implementations of which I am aware.)
<br>
<p><p><span class="quotelev1">&gt; Or pray the MPI Forum and OpenMP combine and I can just look in a
</span><br>
<span class="quotelev1">&gt; Standard. :D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
echo &quot;&quot; &gt; $OPENMP_STANDARD # critical step
<br>
cat $MPI_STANDARD $OPENMP_STANDARD &gt; $HPC_STANDARD
<br>
<p>More seriously, hybrid programming sucks.  Just use MPI-3 and exploit your
<br>
coherence domain via MPI_Win_allocate_shared.  That way, you won't have to
<br>
mix runtimes, suffer mercilessly because of opaque race conditions in
<br>
thread-unsafe libraries, or reason about a bolt-on pseudo-language that
<br>
replicates features found in ISO languages without a well-defined
<br>
interoperability model.  For example, what is the interoperability between
<br>
OpenMP 4.5 threads/atomics and C++11 threads/atomics, C11 threads/atomics,
<br>
or Fortran 2008 concurrency features (e.g. coarrays)?  Nobody knows out
<br>
side of &quot;don't do that&quot;.  How about OpenMP parallel regions inside code
<br>
that runs in a POSIX, C11 or C++11 thread?  Good luck.  I've been trying to
<br>
solve the latter problem for years and have made very little progress as
<br>
far as the spec goes.
<br>
<p>Related work:
<br>
- <a href="http://www.eecs.berkeley.edu/Pubs/TechRpts/2006/EECS-2006-1.pdf">http://www.eecs.berkeley.edu/Pubs/TechRpts/2006/EECS-2006-1.pdf</a>
<br>
-
<br>
<a href="http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf">http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf</a>
<br>
<p>Do not feed the trolls ;-)
<br>
<p>Jeff
<br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Previous message:</strong> <a href="28233.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28233.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28324.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
