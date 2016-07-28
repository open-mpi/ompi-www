<?
$subject_val = "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 02:29:51 2009" -->
<!-- isoreceived="20090929062951" -->
<!-- sent="Tue, 29 Sep 2009 08:29:44 +0200" -->
<!-- isosent="20090929062944" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?" -->
<!-- id="e76aa17f0909282329m1f1945b1w45f65b917b1e32af_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c4d69730909282316y53eee9day697e5b0910a98be8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 02:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10808.php">Rahul Nabar: "[OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10808.php">Rahul Nabar: "[OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10816.php">Eugene Loh: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10816.php">Eugene Loh: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>You can try MPE (free) or Vampir (not free, but can be integrated
<br>
inside OpenMPI).
<br>
<p>Matthieu
<br>
<p>2009/9/29 Rahul Nabar &lt;rpnabar_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I have a code that seems to run about 40% faster when I bond together
</span><br>
<span class="quotelev1">&gt; twin eth interfaces. The question, of course, arises: is it really
</span><br>
<span class="quotelev1">&gt; producing so much traffic to keep twin 1 Gig eth interfaces busy? I
</span><br>
<span class="quotelev1">&gt; don't really believe this but need a way to check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are good tools to monitior the MPI performance of a running job.
</span><br>
<span class="quotelev1">&gt; Basically what throughput loads is it imposing on the eth interfaces.
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code does not seem to produce much of disk I/O as profiled via
</span><br>
<span class="quotelev1">&gt; strace (if at all NFS I/O is a bottleneck).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rahul
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
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10808.php">Rahul Nabar: "[OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10808.php">Rahul Nabar: "[OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10816.php">Eugene Loh: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10816.php">Eugene Loh: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
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
