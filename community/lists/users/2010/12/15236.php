<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 30 11:31:17 2010" -->
<!-- isoreceived="20101230163117" -->
<!-- sent="Thu, 30 Dec 2010 16:31:11 +0000" -->
<!-- isosent="20101230163111" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="AANLkTikgUVWzruS4AMqmEDwu5MeSMe04xZiFTt5VibD3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A498430C-57FF-42F6-8CA9-B3101217E8C1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-12-30 11:31:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15237.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15221.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15237.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="15237.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes that's true, error messages help.  I was hoping there was some
<br>
documentation to see what i've done wrong.  I can't easily cut and
<br>
paste errors from my cluster.
<br>
<p>Here's a snippet (hand typed) of the error message, but it does look
<br>
like a rank communications error
<br>
<p>ORTE_ERROR_LOG: A message is attempting to be sent to a process whose
<br>
contact information is unknown in file rml_oob_send.c at line 145.
<br>
*** MPI_INIT failure message (snipped) ***
<br>
orte_grpcomm_modex failed
<br>
--&gt; Returned &quot;A messages is attempting to be sent to a process whose
<br>
contact information us uknown&quot; (-117) instead of &quot;Success&quot; (0)
<br>
<p>This msg repeats for each rank, an ultimately hangs the srun which i
<br>
have to Ctrl-C and terminate
<br>
<p>I have mpiports defined in my slurm config and running srun with
<br>
-resv-ports does show the SLURM_RESV_PORTS environment variable
<br>
getting parts to the shell
<br>
<p><p>On Thu, Dec 23, 2010 at 8:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm not sure there is any documentation yet - not much clamor for it. :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would really help if you included the error message. Otherwise, all I can do is guess, which wastes both of our time :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My best guess is that the port reservation didn't get passed down to the MPI procs properly - but that's just a guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2010, at 12:46 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone point me towards the most recent documentation for using
</span><br>
<span class="quotelev2">&gt;&gt; srun and openmpi?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I followed what i found on the web with enabling the MpiPorts config
</span><br>
<span class="quotelev2">&gt;&gt; in slurm and using the --resv-ports switch, but I'm getting an error
</span><br>
<span class="quotelev2">&gt;&gt; from openmpi during setup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Slurm 2.1.15 and Openmpi 1.5 w/PSM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sure I'm missing a step.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
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
<li><strong>Next message:</strong> <a href="15237.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15221.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15237.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="15237.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
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
