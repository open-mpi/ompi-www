<?
$subject_val = "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 11:49:48 2010" -->
<!-- isoreceived="20100923154948" -->
<!-- sent="Thu, 23 Sep 2010 11:49:43 -0400" -->
<!-- isosent="20100923154943" -->
<!-- name="pooja varshneya" -->
<!-- email="pooja.varshneya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;self scheduled&amp;quot; work &amp;amp; mpi receive???" -->
<!-- id="AANLkTi=rSrz8sXR43=JLAV4fPwb+ramsXmwd+v46q4jm_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3D807689CC0B144B8A15A477B60C25D404A10F2E_at_0015-its-exmb10.us.saic.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???<br>
<strong>From:</strong> pooja varshneya (<em>pooja.varshneya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 11:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lewis,
<br>
<p>On Thu, Sep 23, 2010 at 9:38 AM, Lewis, Ambrose J.
<br>
&lt;AMBROSE.J.LEWIS_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve written an openmpi program that &#147;self schedules&#148; the work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master task is in a loop chunking up an input stream and handing off
</span><br>
<span class="quotelev1">&gt; jobs to worker tasks.&#160; At first the master gives the next job to the next
</span><br>
<span class="quotelev1">&gt; highest rank. &#160;After all ranks have their first job, the master waits via an
</span><br>
<span class="quotelev1">&gt; MPI receive call for the next free worker.&#160; The master parses out the rank
</span><br>
<span class="quotelev1">&gt; from the MPI receive and sends the next job to this node. &#160;The jobs aren&#146;t
</span><br>
<span class="quotelev1">&gt; all identical, so they run for slightly different durations based on the
</span><br>
<span class="quotelev1">&gt; input data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I plot a histogram of the number of jobs each worker performed, the
</span><br>
<span class="quotelev1">&gt; lower mpi ranks are doing much more work than the higher ranks. &#160;For
</span><br>
<span class="quotelev1">&gt; example, in a 120 process run, rank 1 did 32 jobs while rank 119 only did 2.
</span><br>
<span class="quotelev1">&gt; &#160;My guess is that openmpi returns the lowest rank from the MPI Recv when
</span><br>
<span class="quotelev1">&gt; I&#146;ve got MPI_ANY_SOURCE set and multiple sends have happened since the last
</span><br>
<span class="quotelev1">&gt; call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What is the time taken by each computation ? It is possible that
<br>
computation time for longer tasks is much greater than computation
<br>
time for shorter tasks ?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a different Recv call to make that will spread out the data better?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; THANXS!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; amb
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
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
