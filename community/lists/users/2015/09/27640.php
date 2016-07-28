<?
$subject_val = "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 19:32:31 2015" -->
<!-- isoreceived="20150920233231" -->
<!-- sent="Sun, 20 Sep 2015 19:32:27 -0400" -->
<!-- isosent="20150920233227" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?" -->
<!-- id="20150920233227.GA11997_at_avicenna.ee.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="641C0AD4-D490-4C08-B41D-5A69AF089CA2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-20 19:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Ralph Castain on Sun, Sep 20, 2015 at 06:54:41PM EDT:
<br>
<p>(snip)
<br>
<p><span class="quotelev2">&gt; &gt; On a closer look, it seems that the &quot;17&quot; corresponds to the number of times the
</span><br>
<span class="quotelev2">&gt; &gt; error was emitted after its occurrence regardless of how many actual MPI processes
</span><br>
<span class="quotelev2">&gt; &gt; were running (each of the MPI processes spawned by my program iterates a certain
</span><br>
<span class="quotelev2">&gt; &gt; number of times and causes the error to occur during each iteration).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is correct - if you tell us the error, we&#226;&#128;&#153;d be happy to help
</span><br>
<span class="quotelev1">&gt; diagnose. Otherwise, your analysis is correct.
</span><br>
<p>I'm already in communication with Rolf vandeVaart regarding the error
<br>
[1]. Unfortunately, neither of us has made much headway finding the source of
<br>
the problem as of the present time.
<br>
<p>[1] <a href="http://www.open-mpi.org/community/lists/users/2015/09/27526.php">http://www.open-mpi.org/community/lists/users/2015/09/27526.php</a>
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<!-- nextthread="start" -->
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
