<?
$subject_val = "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 11:56:09 2012" -->
<!-- isoreceived="20120201165609" -->
<!-- sent="Wed, 1 Feb 2012 16:56:05 +0000" -->
<!-- isosent="20120201165605" -->
<!-- name="Frank" -->
<!-- email="frank.t.winter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun: How to print STDOUT of just one process?" -->
<!-- id="CAKpxCz+KoHdCUO7u10BxYRxrU4E8KQmKeKMnCNXQhAj9BYO6ZQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2965AE.7010206_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun: How to print STDOUT of just one process?<br>
<strong>From:</strong> Frank (<em>frank.t.winter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 11:56:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18362.php">Paul Kapinos: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great, that works!! Many Thanks!
<br>
<p>On Wed, Feb 1, 2012 at 4:17 PM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Try out the attached wrapper:
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 2 masterstdout &lt;prg&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 &lt;prg&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to have mpirun just merger STDOUT of one process to its
</span><br>
<span class="quotelev2">&gt;&gt; STDOUT stream?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos &#160; - &#160; High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23, &#160;D 52074 &#160;Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; ARGS=$@
</span><br>
<span class="quotelev1">&gt; if [[ $OMPI_COMM_WORLD_RANK == 0 ]]
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; &#160;$ARGS
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; &#160;$ARGS 1&gt;/dev/null 2&gt;/dev/null
</span><br>
<span class="quotelev1">&gt; fi
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18362.php">Paul Kapinos: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
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
