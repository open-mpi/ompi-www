<?
$subject_val = "Re: [OMPI users] calculation progress status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 10:18:57 2013" -->
<!-- isoreceived="20131021141857" -->
<!-- sent="Mon, 21 Oct 2013 16:19:22 +0200" -->
<!-- isosent="20131021141922" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] calculation progress status" -->
<!-- id="20131021141922.GA8180_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADsB1iDQOnGNeb_GW5VZ6OrMXwpRdMKP-KBig5n+KTSRouF4yw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] calculation progress status<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 10:19:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22806.php">MM: "[OMPI users] calculation progress status"</a>
<li><strong>In reply to:</strong> <a href="22806.php">MM: "[OMPI users] calculation progress status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Reply:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the solution depends on the details of your code. Will all clients
<br>
send their progress updates simultaneously? Are you planning for few
<br>
or many nodes?
<br>
<p>For few nodes and non-simultaneous updates you could loop on the root
<br>
while receiving from MPI_ANY. Clients could send out their updates via
<br>
MPI_Isend().
<br>
<p>If you're expecting many nodes, this 1-n schema will eventually
<br>
overwhelm the root node. In that case MPI_Gather() or MPI_Reduce()
<br>
will perform better. But those require all nodes to participate.
<br>
<p>Things get complicated if you want non-simultaneous updates from many
<br>
nodes...
<br>
<p>HTH
<br>
-Andreas
<br>
<p><p>On 15:07 Mon 21 Oct     , MM wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a n-variable function optimization task that I programmed with a
</span><br>
<span class="quotelev1">&gt; scatter, each mpi process evaluates my function in part of the space, then
</span><br>
<span class="quotelev1">&gt; a reduce to get the maximum at the root process. Most wall time is spent in
</span><br>
<span class="quotelev1">&gt; the function evaluations done inside every mpi process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to report to the root process some progress indicator, ie 40%
</span><br>
<span class="quotelev1">&gt; done so far and so on...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the customary solution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22807/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22806.php">MM: "[OMPI users] calculation progress status"</a>
<li><strong>In reply to:</strong> <a href="22806.php">MM: "[OMPI users] calculation progress status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Reply:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
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
