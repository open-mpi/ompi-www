<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 17:03:59 2009" -->
<!-- isoreceived="20090331210359" -->
<!-- sent="Tue, 31 Mar 2009 17:03:51 -0400" -->
<!-- isosent="20090331210351" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="49D28537.6050201_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87fxgtttl8.fsf_at_liv.ac.uk" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 17:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8692.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8690.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8721.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8721.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/31/09 14:50, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I found that if I explicitly specify the &quot;-machinefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node, i.e. node0002.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had that sort of behaviour recently when the tight integration was
</span><br>
<span class="quotelev1">&gt; broken on the installation we'd been given, and it took me a long time
</span><br>
<span class="quotelev1">&gt; to spot.  [Is the orte_leave_session_attached fix relevant here?]
</span><br>
No, orte_leave_session_attached is needed to avoid the errno=2 errors 
<br>
from the sm btl. (It is fixed in 1.3.2 and trunk)
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And for what it is worth, as you have seen,
</span><br>
<span class="quotelev2">&gt;&gt; you do not need to specify a machines file.  Open MPI will use the
</span><br>
<span class="quotelev2">&gt;&gt; ones that were allocated by SGE.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, but there's a problem with the recommended (as far as I remember)
</span><br>
<span class="quotelev1">&gt; setup, with one slot per node to ensure a single job per node.  In that
</span><br>
<span class="quotelev1">&gt; case, you have no control over allocation -- -bynode and -byslot are
</span><br>
<span class="quotelev1">&gt; equivalent, which apparently can badly affect some codes.  We're
</span><br>
<span class="quotelev1">&gt; currently using a starter to generate a hosts file for that reason
</span><br>
<span class="quotelev1">&gt; (complicated by having dual- and quad-core nodes) and would welcome a
</span><br>
<span class="quotelev1">&gt; better idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I am not sure what you are asking here.  Are you trying to get a single 
<br>
MPI process per node?  You could use -npernode 1.  Sorry for my confusion.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8692.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8690.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8721.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8721.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
