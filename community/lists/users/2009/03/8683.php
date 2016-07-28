<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 14:55:12 2009" -->
<!-- isoreceived="20090331185512" -->
<!-- sent="Tue, 31 Mar 2009 19:50:27 +0100" -->
<!-- isosent="20090331185027" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="87fxgtttl8.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49D253BC.4090707_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour of SGE+OpenMPI<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 14:50:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8684.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; However, I found that if I explicitly specify the &quot;-machinefile
</span><br>
<span class="quotelev2">&gt;&gt; $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a single
</span><br>
<span class="quotelev2">&gt;&gt; node, i.e. node0002.
</span><br>
<p>I had that sort of behaviour recently when the tight integration was
<br>
broken on the installation we'd been given, and it took me a long time
<br>
to spot.  [Is the orte_leave_session_attached fix relevant here?]
<br>
<p><span class="quotelev1">&gt; And for what it is worth, as you have seen,
</span><br>
<span class="quotelev1">&gt; you do not need to specify a machines file.  Open MPI will use the
</span><br>
<span class="quotelev1">&gt; ones that were allocated by SGE.  
</span><br>
<p>Yes, but there's a problem with the recommended (as far as I remember)
<br>
setup, with one slot per node to ensure a single job per node.  In that
<br>
case, you have no control over allocation -- -bynode and -byslot are
<br>
equivalent, which apparently can badly affect some codes.  We're
<br>
currently using a starter to generate a hosts file for that reason
<br>
(complicated by having dual- and quad-core nodes) and would welcome a
<br>
better idea.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8684.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
