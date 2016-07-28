<?
$subject_val = "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 05:39:34 2010" -->
<!-- isoreceived="20100709093934" -->
<!-- sent="Fri, 9 Jul 2010 11:39:55 +0200" -->
<!-- isosent="20100709093955" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?" -->
<!-- id="20100709093955.GA24387_at_rei.informatik.uni-erlangen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EE80FD74-812E-4524-ABE1-1766E41D2DF0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 05:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just tried these options and was able to increased shared memory
<br>
throughput to approx. 1950 MB/s. Still I wonder what the bottleneck
<br>
is. After all, the memory bandwidth of the systems is much higher.
<br>
<p>Thanks
<br>
-Andreas
<br>
<p><p>On 03:22 Fri 09 Jul     , Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Did you remember to set --bind-to-core or --bind-to-socket on the cmd line? Otherwise, the processes are running unbound, which makes a significant difference to performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2010, at 3:15 AM, Andreas Sch&#228;fer wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Maybe I should add that for tests I ran the benchmarks with two MPI
</span><br>
<span class="quotelev2">&gt; &gt; processes: for InfiniBand one process per node and for shared memory
</span><br>
<span class="quotelev2">&gt; &gt; both processes were located on one node.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt; &gt; HPC and Grid Computing
</span><br>
<span class="quotelev2">&gt; &gt; Chair of Computer Science 3
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev2">&gt; &gt; +49 9131 85-27910
</span><br>
<span class="quotelev2">&gt; &gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt; &gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (\___/)
</span><br>
<span class="quotelev2">&gt; &gt; (+'.'+)
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; This is Bunny. Copy and paste Bunny into your 
</span><br>
<span class="quotelev2">&gt; &gt; signature to help him gain world domination!
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13555/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
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
