<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 14:25:43 2011" -->
<!-- isoreceived="20110427182543" -->
<!-- sent="Wed, 27 Apr 2011 12:25:32 -0600" -->
<!-- isosent="20110427182532" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="0C74450D-60E0-4898-86F3-8BC73D986E76_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimBEvnH5WpL7unfVVg9NjeHwBpFFA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-27 14:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16350.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2011, at 10:09 AM, Michael Di Domenico wrote:
<br>
<p><span class="quotelev1">&gt; Was this ever committed to the OMPI src as something not having to be
</span><br>
<span class="quotelev1">&gt; run outside of OpenMPI, but as part of the PSM setup that OpenMPI
</span><br>
<span class="quotelev1">&gt; does?
</span><br>
<p>Not that I know of - I don't think the PSM developers ever looked at it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having some trouble getting Slurm/OpenMPI to play nice with the
</span><br>
<span class="quotelev1">&gt; setup of this key.  Namely, with slurm you cannot export variables
</span><br>
<span class="quotelev1">&gt; from the --prolog of an srun, only from an --task-prolog,
</span><br>
<span class="quotelev1">&gt; unfortunately, if you use a task-prolog each rank gets a different
</span><br>
<span class="quotelev1">&gt; key, which doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm also guessing that each unique mpirun needs it's own psm key, not
</span><br>
<span class="quotelev1">&gt; one for the whole system, so i can't just make it a permanent
</span><br>
<span class="quotelev1">&gt; parameter somewhere else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, i recall reading somewhere that the --resv-ports parameter that
</span><br>
<span class="quotelev1">&gt; OMPI uses from slurm to choose a list of ports to use for TCP comm's,
</span><br>
<span class="quotelev1">&gt; tries to lock a port from the pool three times before giving up.
</span><br>
<p>Had to look back at the code - I think you misread this. I can find no evidence in the code that we try to bind that port more than once.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone tell me where that parameter is set, i'd like to set it to
</span><br>
<span class="quotelev1">&gt; a higher value.  We're seeing issues where running a large number of
</span><br>
<span class="quotelev1">&gt; short srun's sequentially is causing some of the mpirun's in the
</span><br>
<span class="quotelev1">&gt; stream to be killed because they could not lock the ports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect because of the lag between when the port is actually closed
</span><br>
<span class="quotelev1">&gt; in linux and when ompi re-opens a new port is very quick, we're trying
</span><br>
<span class="quotelev1">&gt; three times and giving up.  I have more then enough ports in the
</span><br>
<span class="quotelev1">&gt; resv-ports list, 30k.  but i suspect there is some random re-use being
</span><br>
<span class="quotelev1">&gt; done and it's failing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 3, 2011 at 10:00 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yo Ralph --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see this was committed <a href="https://svn.open-mpi.org/trac/ompi/changeset/24197">https://svn.open-mpi.org/trac/ompi/changeset/24197</a>.  Do you want to add a blurb in README about it, and/or have this executable compiled as part of the PSM MTL and then installed into $bindir (maybe named ompi-psm-keygen)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Right now, it's only compiled as part of &quot;make check&quot; and not installed, right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 30, 2010, at 5:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Run the program only once - it can be in the prolog of the job if you like. The output value needs to be in the env of every rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reuse the value as many times as you like - it doesn't have to be unique for each job. There is nothing magic about the value itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 30, 2010, at 2:11 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How early does this need to run? Can I run it as part of a task
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prolog, or does it need to be the shell env for each rank?  And does
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it need to run on one node or all the nodes in the job?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Dec 30, 2010 at 8:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, I couldn't do it as a patch - proved too complicated as the psm system looks for the value early in the boot procedure.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What I can do is give you the attached key generator program. It outputs the envar required to run your program. So if you run the attached program and then export the output into your environment, you should be okay. Looks like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ./psm_keygen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI_MCA_orte_precondition_transports=0099b3eaa2c1547e-afb287789133a954
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You compile the program with the usual mpicc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me know if this solves the problem (or not).
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
<li><strong>Next message:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16350.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16354.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
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
