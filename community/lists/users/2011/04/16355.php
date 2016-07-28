<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 14:46:37 2011" -->
<!-- isoreceived="20110427184637" -->
<!-- sent="Wed, 27 Apr 2011 12:46:28 -0600" -->
<!-- isosent="20110427184628" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="1BB67B7D-0DFE-4F60-AF0E-D88BF070585E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimpA9z1rmmrfdh51AUgtF6Lze82VQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 14:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2011, at 12:38 PM, Michael Di Domenico wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Apr 27, 2011 at 2:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 27, 2011, at 10:09 AM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Was this ever committed to the OMPI src as something not having to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run outside of OpenMPI, but as part of the PSM setup that OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not that I know of - I don't think the PSM developers ever looked at it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having some trouble getting Slurm/OpenMPI to play nice with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setup of this key.  Namely, with slurm you cannot export variables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the --prolog of an srun, only from an --task-prolog,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unfortunately, if you use a task-prolog each rank gets a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; key, which doesn't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm also guessing that each unique mpirun needs it's own psm key, not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one for the whole system, so i can't just make it a permanent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter somewhere else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, i recall reading somewhere that the --resv-ports parameter that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI uses from slurm to choose a list of ports to use for TCP comm's,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tries to lock a port from the pool three times before giving up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Had to look back at the code - I think you misread this. I can find no evidence in the code that we try to bind that port more than once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps i misstated, i don't believe you're trying to bind to the same
</span><br>
<span class="quotelev1">&gt; port twice during the same session.  i believe the code re-uses
</span><br>
<span class="quotelev1">&gt; similar ports from session to session.  what i believe happens (but
</span><br>
<span class="quotelev1">&gt; could be totally wrong) the previous session releases the port, but
</span><br>
<span class="quotelev1">&gt; linux isn't quite done with it when the new session tries to bind to
</span><br>
<span class="quotelev1">&gt; the port, in which case it tries three times and then fails the job
</span><br>
<p>Actually, I understood you correctly. I'm just saying that I find no evidence in the code that we try three times before giving up. What I see is a single attempt to bind the port - if it fails, then we abort. There is no parameter to control that behavior.
<br>
<p>So if the OS hasn't released the port by the time a new job starts on that node, then it will indeed abort if the job was unfortunately given the same port reservation.
<br>
<p><p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
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
