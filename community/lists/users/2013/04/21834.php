<?
$subject_val = "Re: [OMPI users] job termination on grid";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 15:35:53 2013" -->
<!-- isoreceived="20130430193553" -->
<!-- sent="Tue, 30 Apr 2013 21:35:41 +0200" -->
<!-- isosent="20130430193541" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job termination on grid" -->
<!-- id="C2EF1280-DA94-413C-8501-11E0DA6F39A5_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAP9vw5DHJ-AR2HfwJ_dO_VOCaeG2y=1w-3QquyB7JrYSnN8XUw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] job termination on grid<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 15:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21833.php">Vladimir Yamshchikov: "[OMPI users] job termination on grid"</a>
<li><strong>In reply to:</strong> <a href="21833.php">Vladimir Yamshchikov: "[OMPI users] job termination on grid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Reply:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 30.04.2013 um 21:26 schrieb Vladimir Yamshchikov:
<br>
<p><span class="quotelev1">&gt; My recent job started normally but after a few hours of running died with the following message:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 19390) died unexpectedly with status 137 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<p>I wonder why it rose the failure only after running for hours. As 137 = 128 + 9 it was killed, maybe by the queuing system due to the set time limit? If you check the accouting, what is the output of:
<br>
<p>$ qacct -j &lt;job_id&gt;
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The scheduling script is below:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -N SC3blastx_64-96thr
</span><br>
<span class="quotelev1">&gt; #$ -pe openmpi* 64-96
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=24:00:00,vf=3G
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -M yaximik_at_[hidden]
</span><br>
<span class="quotelev1">&gt; #$ -m eas
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Load the appropriate module files
</span><br>
<span class="quotelev1">&gt; # Should be loaded already
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS blastx -query $UABGRID_SCRATCH/SC/AdQ30/fasta/SC1-IS4-Ind1-153ngFr1sep1run1R1AdQ30.fasta -db nr -out $UABGRID_SCRATCH/SC/blastx/SC/SC1-IS4-Ind1-153ngFr1sep1run1R1AdQ30.out -evalue 0.001 -max_intron_length 100000 -outfmt 5 -num_alignments 20 -lcase_masking -num_threads $NSLOTS
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What caused this termination? It does not seem scheduling problem as the program run several hours with 96 threads. My $LD_LIBRARY_PATH does have /share/apps/openmpi/1.6.4-gcc/lib entry, so how else should I modify it?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Vladimir
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
<li><strong>Next message:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21833.php">Vladimir Yamshchikov: "[OMPI users] job termination on grid"</a>
<li><strong>In reply to:</strong> <a href="21833.php">Vladimir Yamshchikov: "[OMPI users] job termination on grid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Reply:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
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
