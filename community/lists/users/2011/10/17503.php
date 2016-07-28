<?
$subject_val = "Re: [OMPI users] OpenMPI with CPU of different speed.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 08:58:29 2011" -->
<!-- isoreceived="20111005125829" -->
<!-- sent="Wed, 5 Oct 2011 16:58:25 +0400" -->
<!-- isosent="20111005125825" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with CPU of different speed." -->
<!-- id="CAGR4S9EY5XGdbc1Wibh0FajB9bTQgoEODvPPN_FQF2VfnRk_9A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111005121520.GA15131_at_rei.informatik.uni-erlangen.de" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 08:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17504.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17502.php">Andreas Sch&#228;fer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="17502.php">Andreas Sch&#228;fer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17505.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Reply:</strong> <a href="17505.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Maybe Micka&#235;l means load balancing could be achieved simply by
<br>
spawning various number of MPI processes, depending on how many cores
<br>
particular node has? This should be possible, but accuracy of such
<br>
balancing will be task-dependent due to other factors, like memory
<br>
operations and communications.
<br>
<p>- D.
<br>
<p>2011/10/5 Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I'm afraid you'll have to do this kind of load balancing in your
</span><br>
<span class="quotelev1">&gt; application itself as Open MPI (just like any other MPI implementation)
</span><br>
<span class="quotelev1">&gt; has no notion of how your application manages its workload.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14:05 Wed 05 Oct &#160; &#160; , Micka&#235;l CAN&#201;VET wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to define a weight to the CPUs of the hosts. I have a
</span><br>
<span class="quotelev2">&gt;&gt; cluster made of machine from different generation and when I run a
</span><br>
<span class="quotelev2">&gt;&gt; process on it, the whole cluster is slowed down by the slowest node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I'd like to do is something like that in my hostfile:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; oldest slots=4 weight=0.75
</span><br>
<span class="quotelev2">&gt;&gt; newer slots=8 weight=0.95
</span><br>
<span class="quotelev2">&gt;&gt; newest slots=12 weight=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So that CPUs of oldest (and slowest) machine gets less data to process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; Micka&#235;l
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17504.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17502.php">Andreas Sch&#228;fer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="17502.php">Andreas Sch&#228;fer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17505.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Reply:</strong> <a href="17505.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
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
