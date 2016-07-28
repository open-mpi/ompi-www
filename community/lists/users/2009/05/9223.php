<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 10:01:55 2009" -->
<!-- isoreceived="20090505140155" -->
<!-- sent="Tue, 5 May 2009 16:01:42 +0200" -->
<!-- isosent="20090505140142" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="e76aa17f0905050701g404fd05fj2d1b666605080afe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E8C0F252-0E6A-446A-A570-975BDA2E6F82_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-05 10:01:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9224.php">Robert Kubrick: "[OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/5/5 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On May 5, 2009, at 6:10 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first is what the support of LSF by OpenMPI means. When mpirun is
</span><br>
<span class="quotelev2">&gt;&gt; executed, it is an LSF job that is actually ran? Or what does it
</span><br>
<span class="quotelev2">&gt;&gt; imply? I've tried to search on the openmpi website as well as on the
</span><br>
<span class="quotelev2">&gt;&gt; internet, but I couldn't find a clear answer/use case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What Terry said is correct. &#160;It means that &quot;mpirun&quot; will use, under the
</span><br>
<span class="quotelev1">&gt; covers, the &quot;native&quot; launching mechanism of LSF to launch jobs (vs., say,
</span><br>
<span class="quotelev1">&gt; rsh or ssh). &#160;It'll also discover the hosts to use for this job without the
</span><br>
<span class="quotelev1">&gt; use of a hostfile -- it'll query LSF directly to see what hosts it should
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<p>OK, so I have to do something like:
<br>
bsub -n ${CPUS} mpirun myapplication
<br>
<p>Is it what I think?
<br>
<p><span class="quotelev2">&gt;&gt; My second question is about the LSF detection. lsf.h is detected, but
</span><br>
<span class="quotelev2">&gt;&gt; when lsb_launch is searched for ion libbat.so, it fails because
</span><br>
<span class="quotelev2">&gt;&gt; parse_time and parse_time_ex are not found. Is there a way to add
</span><br>
<span class="quotelev2">&gt;&gt; additional lsf libraries so that the search can be done?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the data shown here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<p>I've enclosed the configure output as well as the config.log. The
<br>
problem is that my LSF (I didn't install it) 7.0.3 need libbat to be
<br>
linked against llsbstream (I modified the configure script to add
<br>
-llsbstream, and it compiled).
<br>
<p>I can't use the official way of launching a batch job, LSF doesn't
<br>
pickup the correct LSF script wrapper (due to a bogus installation).
<br>
<p>Thank you for all the answers! (I will have others, as I'm trying to
<br>
use the InfiniPath support as well)
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
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9223/output.tar.bz">output.tar.bz</a>
</ul>
<!-- attachment="output.tar.bz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9224.php">Robert Kubrick: "[OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
