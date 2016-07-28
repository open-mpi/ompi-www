<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 15:19:44 2009" -->
<!-- isoreceived="20090506191944" -->
<!-- sent="Wed, 6 May 2009 21:19:39 +0200" -->
<!-- isosent="20090506191939" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="e76aa17f0905061219o6ca28d58re0876491eb30c6cd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="704F2244-AF2D-4923-9748-49C62307D22D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 15:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9242.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9254.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/5/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On May 5, 2009, at 10:01 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What Terry said is correct. &#160;It means that &quot;mpirun&quot; will use, under the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; covers, the &quot;native&quot; launching mechanism of LSF to launch jobs (vs.,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; say,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; rsh or ssh). &#160;It'll also discover the hosts to use for this job without
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; use of a hostfile -- it'll query LSF directly to see what hosts it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; should
</span><br>
<span class="quotelev3">&gt;&gt; &gt; use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, so I have to do something like:
</span><br>
<span class="quotelev2">&gt;&gt; bsub -n ${CPUS} mpirun myapplication
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it what I think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what you think. &#160;;-) &#160;But I think that your above command might
</span><br>
<span class="quotelev1">&gt; be correct. &#160;You want *1* copy of mpirun to execute. &#160;Hence, if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -n ${CPUS} uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; launches ${CPUS} copies of uptime, then the above command is not correct.
</span><br>
<span class="quotelev1">&gt; &#160;You want to submit an ${CPUS} processor job to LSF and have *one* copy of
</span><br>
<span class="quotelev1">&gt; &quot;mpirun myapplication&quot; run -- mpirun will then invoke the underlying stuff
</span><br>
<span class="quotelev1">&gt; to launch ${CPUS} copies of myapplication and join them together into a
</span><br>
<span class="quotelev1">&gt; single MPI job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've enclosed the configure output as well as the config.log. The
</span><br>
<span class="quotelev2">&gt;&gt; problem is that my LSF (I didn't install it) 7.0.3 need libbat to be
</span><br>
<span class="quotelev2">&gt;&gt; linked against llsbstream (I modified the configure script to add
</span><br>
<span class="quotelev2">&gt;&gt; -llsbstream, and it compiled).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Huh! &#160;Odd -- we didn't need that before. &#160;Let me check with Platform...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you should be able to run like this without modifying configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;./configure LIBS=-llsbstream ....etc....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should add -llsbstream in the Right places.
</span><br>
<p>Thanks, I'll try this (provided I'm able to run OpenMPI 1.3.2, I have
<br>
some strange errors I didn't get with 1.2.8)
<br>
<p>Matthieu
<br>
<pre>
-- 
Information System Engineer, Ph.D.
Website: <a href="http://matthieu-brucher.developpez.com/">http://matthieu-brucher.developpez.com/</a>
Blogs: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a> and <a href="http://blog.developpez.com/?blog=92">http://blog.developpez.com/?blog=92</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9242.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9254.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
