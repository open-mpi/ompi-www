<?
$subject_val = "Re: [OMPI users] OpenMPI with CPU of different speed.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 08:13:14 2011" -->
<!-- isoreceived="20111005121314" -->
<!-- sent="Wed, 5 Oct 2011 14:15:20 +0200" -->
<!-- isosent="20111005121520" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with CPU of different speed." -->
<!-- id="20111005121520.GA15131_at_rei.informatik.uni-erlangen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1317816321.2841.90.camel_at_pc437.embl.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with CPU of different speed.<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 08:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17501.php">Micka&#235;l CAN&#201;VET: "[OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="17501.php">Micka&#235;l CAN&#201;VET: "[OMPI users] OpenMPI with CPU of different speed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Reply:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid you'll have to do this kind of load balancing in your
<br>
application itself as Open MPI (just like any other MPI implementation)
<br>
has no notion of how your application manages its workload.
<br>
<p>HTH
<br>
-Andreas
<br>
<p><p>On 14:05 Wed 05 Oct     , Micka&#235;l CAN&#201;VET wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to define a weight to the CPUs of the hosts. I have a
</span><br>
<span class="quotelev1">&gt; cluster made of machine from different generation and when I run a
</span><br>
<span class="quotelev1">&gt; process on it, the whole cluster is slowed down by the slowest node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I'd like to do is something like that in my hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oldest slots=4 weight=0.75
</span><br>
<span class="quotelev1">&gt; newer slots=8 weight=0.95
</span><br>
<span class="quotelev1">&gt; newest slots=12 weight=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So that CPUs of oldest (and slowest) machine gets less data to process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Micka&#235;l
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17502/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17501.php">Micka&#235;l CAN&#201;VET: "[OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="17501.php">Micka&#235;l CAN&#201;VET: "[OMPI users] OpenMPI with CPU of different speed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Reply:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
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
