<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 12:54:44 2009" -->
<!-- isoreceived="20090401165444" -->
<!-- sent="Wed, 01 Apr 2009 17:54:27 +0100" -->
<!-- isosent="20090401165427" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="87r60cpb5o.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49D28537.6050201_at_Sun.COM" -->
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
<strong>Date:</strong> 2009-04-01 12:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8722.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8734.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8734.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; No, orte_leave_session_attached is needed to avoid the errno=2 errors
</span><br>
<span class="quotelev1">&gt; from the sm btl. (It is fixed in 1.3.2 and trunk)
</span><br>
<p>[It does cause other trouble, but I forget what the exact behaviour was
<br>
when I lost it as a default.]
<br>
<p><span class="quotelev2">&gt;&gt; Yes, but there's a problem with the recommended (as far as I remember)
</span><br>
<span class="quotelev2">&gt;&gt; setup, with one slot per node to ensure a single job per node.  In that
</span><br>
<span class="quotelev2">&gt;&gt; case, you have no control over allocation -- -bynode and -byslot are
</span><br>
<span class="quotelev2">&gt;&gt; equivalent, which apparently can badly affect some codes.  We're
</span><br>
<span class="quotelev2">&gt;&gt; currently using a starter to generate a hosts file for that reason
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^
<br>
<p>I meant queue prologue, not pe starter method.
<br>
<p><span class="quotelev2">&gt;&gt; (complicated by having dual- and quad-core nodes) and would welcome a
</span><br>
<span class="quotelev2">&gt;&gt; better idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure what you are asking here.  Are you trying to get a
</span><br>
<span class="quotelev1">&gt; single MPI process per node?  You could use -npernode 1.  Sorry for my
</span><br>
<span class="quotelev1">&gt; confusion.
</span><br>
<p>No.  It's an SGE issue, not an Open MPI one, but to try to explain
<br>
anyhow:  People normally want to ensure that a partially-full node
<br>
running an MPI job doesn't get anything else scheduled on it.  E.g. on
<br>
8-core nodes, if you submit a 16-process job, there are four cores left
<br>
over on the relevant nodes which might get something else scheduled on
<br>
them.  Using one slot per node avoids that, but means generating your
<br>
own hosts file if you want -bynode and -byslot not to be equivalent.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8722.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8734.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8734.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
