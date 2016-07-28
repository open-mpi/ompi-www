<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 05:11:31 2013" -->
<!-- isoreceived="20130506091131" -->
<!-- sent="Mon, 06 May 2013 10:10:51 +0100" -->
<!-- isosent="20130506091051" -->
<!-- name="Angel de Vicente" -->
<!-- email="angelv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers" -->
<!-- id="yeg8v3smq1w.fsf_at_carro.ll.iac.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="00B42741-1FB7-44A9-A4FF-E1FCA7E9F5BB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers<br>
<strong>From:</strong> Angel de Vicente (<em>angelv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 05:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Reply:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On May 4, 2013, at 4:54 PM, Angel de Vicente &lt;angelv_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to dump details of what OpenMPI is trying to do in each
</span><br>
<span class="quotelev2">&gt;&gt; node, so I can see if it is looking for different libraries in each
</span><br>
<span class="quotelev2">&gt;&gt; node, or something similar?
</span><br>
<p><p>thanks for the suggestions, but I'm still stuck:
<br>
<p><span class="quotelev1">&gt; What I do is simply &quot;ssh ompi_info -V&quot; to each remote node and compare
</span><br>
<span class="quotelev1">&gt; results - you should get the same answer everywhere.
</span><br>
<p>exactly the same information in the three connected machines
<br>
<p><span class="quotelev1">&gt; Another option in these situations is to configure
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default. If you install in the same
</span><br>
<span class="quotelev1">&gt; location on each node (e.g., on an NSF mount), then this will ensure
</span><br>
<span class="quotelev1">&gt; you get that same library.
</span><br>
<p>Re-configured and re-compiled OpenMPI, but I get the same behaviour. 
<br>
<p>I'm starting to think that perhaps is a firewall issue? I don't have
<br>
root access in these machines but I'll try to investigate.
<br>
<p>Cheers,
<br>
<pre>
-- 
&#195;&#129;ngel de Vicente
<a href="http://angel-de-vicente.blogspot.com/">http://angel-de-vicente.blogspot.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21852.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Reply:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
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
