<?
$subject_val = "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 05:22:31 2010" -->
<!-- isoreceived="20100709092231" -->
<!-- sent="Fri, 9 Jul 2010 03:22:20 -0600" -->
<!-- isosent="20100709092220" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?" -->
<!-- id="EE80FD74-812E-4524-ABE1-1766E41D2DF0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100709091531.GA23800_at_rei.informatik.uni-erlangen.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 05:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13555.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13553.php">Ralph Castain: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>In reply to:</strong> <a href="13552.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13555.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13555.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you remember to set --bind-to-core or --bind-to-socket on the cmd line? Otherwise, the processes are running unbound, which makes a significant difference to performance.
<br>
<p><p>On Jul 9, 2010, at 3:15 AM, Andreas Sch&#228;fer wrote:
<br>
<p><span class="quotelev1">&gt; Maybe I should add that for tests I ran the benchmarks with two MPI
</span><br>
<span class="quotelev1">&gt; processes: for InfiniBand one process per node and for shared memory
</span><br>
<span class="quotelev1">&gt; both processes were located on one node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; HPC and Grid Computing
</span><br>
<span class="quotelev1">&gt; Chair of Computer Science 3
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev1">&gt; +49 9131 85-27910
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your 
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13555.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13553.php">Ralph Castain: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>In reply to:</strong> <a href="13552.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13555.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13555.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
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
