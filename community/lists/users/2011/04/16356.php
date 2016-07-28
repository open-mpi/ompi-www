<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 15:06:49 2011" -->
<!-- isoreceived="20110427190649" -->
<!-- sent="Wed, 27 Apr 2011 15:06:45 -0400" -->
<!-- isosent="20110427190645" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="BANLkTinPwSfSNOU-skdxqAv7Zt9hsnixLg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1BB67B7D-0DFE-4F60-AF0E-D88BF070585E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-27 15:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16364.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16364.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 27, 2011 at 2:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2011, at 12:38 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 27, 2011 at 2:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 27, 2011, at 10:09 AM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Was this ever committed to the OMPI src as something not having to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run outside of OpenMPI, but as part of the PSM setup that OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not that I know of - I don't think the PSM developers ever looked at it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm having some trouble getting Slurm/OpenMPI to play nice with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setup of this key. &#160;Namely, with slurm you cannot export variables
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the --prolog of an srun, only from an --task-prolog,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unfortunately, if you use a task-prolog each rank gets a different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; key, which doesn't work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm also guessing that each unique mpirun needs it's own psm key, not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one for the whole system, so i can't just make it a permanent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter somewhere else.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, i recall reading somewhere that the --resv-ports parameter that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI uses from slurm to choose a list of ports to use for TCP comm's,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tries to lock a port from the pool three times before giving up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Had to look back at the code - I think you misread this. I can find no evidence in the code that we try to bind that port more than once.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps i misstated, i don't believe you're trying to bind to the same
</span><br>
<span class="quotelev2">&gt;&gt; port twice during the same session. &#160;i believe the code re-uses
</span><br>
<span class="quotelev2">&gt;&gt; similar ports from session to session. &#160;what i believe happens (but
</span><br>
<span class="quotelev2">&gt;&gt; could be totally wrong) the previous session releases the port, but
</span><br>
<span class="quotelev2">&gt;&gt; linux isn't quite done with it when the new session tries to bind to
</span><br>
<span class="quotelev2">&gt;&gt; the port, in which case it tries three times and then fails the job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I understood you correctly. I'm just saying that I find no evidence in the code that we try three times before giving up. What I see is a single attempt to bind the port - if it fails, then we abort. There is no parameter to control that behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if the OS hasn't released the port by the time a new job starts on that node, then it will indeed abort if the job was unfortunately given the same port reservation.
</span><br>
<p>Oh, okay, sorry...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16364.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16364.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
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
