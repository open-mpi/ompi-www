<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 19:37:29 2016" -->
<!-- isoreceived="20160107003729" -->
<!-- sent="Wed, 6 Jan 2016 19:36:59 -0500" -->
<!-- isosent="20160107003659" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAFb48S-d81HskF-uwc9YOFfeo0Z4Vukk46cnPmRDXn_h0=p=PQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="568DAF68.6040708_at_rist.or.jp" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 19:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 6, 2016 at 7:20 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; FWIW,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there has been one attempt to set the OMP_* environment variables within
</span><br>
<span class="quotelev1">&gt; OpenMPI, and that was aborted
</span><br>
<span class="quotelev1">&gt; because that caused crashes with a prominent commercial compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also, i'd like to clarify that OpenMPI does bind MPI tasks (e.g.
</span><br>
<span class="quotelev1">&gt; processes), and it is up to the OpenMP runtime to bind the OpenMP threads
</span><br>
<span class="quotelev1">&gt; to the resources made available by OpenMPI to the MPI task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in this case, that means OpenMPI will bind a MPI tasks to 7 cores (for
</span><br>
<span class="quotelev1">&gt; example cores 7 to 13), and it is up to the OpenMP runtime to bind each 7
</span><br>
<span class="quotelev1">&gt; OpenMP threads to one core previously allocated by OpenMPI
</span><br>
<span class="quotelev1">&gt; (for example, OMP thread 0 to core 7, OMP thread 1 to core 8, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed. Hybrid programming is a two-step tango. The harder task (in some
<br>
ways) is the placing MPI processes where I want. With omplace I could just
<br>
force things (though probably not with Open MPI...haven't tried it yet),
<br>
but I'd rather have a more &quot;formulaic&quot; way to place processes since then
<br>
you can script it. Now that I know about the ppr: syntax, I can see it'll
<br>
be quite useful!
<br>
<p>The other task is to get the OpenMP threads in the &quot;right way&quot;. I was
<br>
pretty sure KMP_AFFINITY=compact was correct (worked once...and, yeah,
<br>
using Intel at present. Figured start there, then expand to figure out GCC
<br>
and PGI). I'll do some experimenting with the OMP_* versions as a
<br>
more-respected standard is always a good thing.
<br>
<p>For others with inquiries into this, I highly recommend this page I found
<br>
after my query was answered here:
<br>
<p><a href="https://www.olcf.ornl.gov/kb_articles/parallel-job-execution-on-commodity-clusters/">https://www.olcf.ornl.gov/kb_articles/parallel-job-execution-on-commodity-clusters/</a>
<br>
<p>At this point, I'm thinking I should start up an MPI+OpenMP wiki to map all
<br>
the combinations of compiler+mpistack.
<br>
<p>Or pray the MPI Forum and OpenMP combine and I can just look in a Standard.
<br>
:D
<br>
<p>Thanks,
<br>
Matt
<br>
<pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
