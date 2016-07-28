<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 14:38:17 2011" -->
<!-- isoreceived="20110427183817" -->
<!-- sent="Wed, 27 Apr 2011 14:38:12 -0400" -->
<!-- isosent="20110427183812" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="BANLkTimpA9z1rmmrfdh51AUgtF6Lze82VQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C74450D-60E0-4898-86F3-8BC73D986E76_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] srun and openmpi<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 14:38:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16353.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16353.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 27, 2011 at 2:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2011, at 10:09 AM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was this ever committed to the OMPI src as something not having to be
</span><br>
<span class="quotelev2">&gt;&gt; run outside of OpenMPI, but as part of the PSM setup that OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; does?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not that I know of - I don't think the PSM developers ever looked at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having some trouble getting Slurm/OpenMPI to play nice with the
</span><br>
<span class="quotelev2">&gt;&gt; setup of this key. &#160;Namely, with slurm you cannot export variables
</span><br>
<span class="quotelev2">&gt;&gt; from the --prolog of an srun, only from an --task-prolog,
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately, if you use a task-prolog each rank gets a different
</span><br>
<span class="quotelev2">&gt;&gt; key, which doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm also guessing that each unique mpirun needs it's own psm key, not
</span><br>
<span class="quotelev2">&gt;&gt; one for the whole system, so i can't just make it a permanent
</span><br>
<span class="quotelev2">&gt;&gt; parameter somewhere else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, i recall reading somewhere that the --resv-ports parameter that
</span><br>
<span class="quotelev2">&gt;&gt; OMPI uses from slurm to choose a list of ports to use for TCP comm's,
</span><br>
<span class="quotelev2">&gt;&gt; tries to lock a port from the pool three times before giving up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Had to look back at the code - I think you misread this. I can find no evidence in the code that we try to bind that port more than once.
</span><br>
<p>Perhaps i misstated, i don't believe you're trying to bind to the same
<br>
port twice during the same session.  i believe the code re-uses
<br>
similar ports from session to session.  what i believe happens (but
<br>
could be totally wrong) the previous session releases the port, but
<br>
linux isn't quite done with it when the new session tries to bind to
<br>
the port, in which case it tries three times and then fails the job
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16353.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16353.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
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
