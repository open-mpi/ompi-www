<?
$subject_val = "[OMPI users] job termination on grid";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 15:26:58 2013" -->
<!-- isoreceived="20130430192658" -->
<!-- sent="Tue, 30 Apr 2013 14:26:53 -0500" -->
<!-- isosent="20130430192653" -->
<!-- name="Vladimir Yamshchikov" -->
<!-- email="yaximik_at_[hidden]" -->
<!-- subject="[OMPI users] job termination on grid" -->
<!-- id="CAP9vw5DHJ-AR2HfwJ_dO_VOCaeG2y=1w-3QquyB7JrYSnN8XUw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] job termination on grid<br>
<strong>From:</strong> Vladimir Yamshchikov (<em>yaximik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 15:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21834.php">Reuti: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21834.php">Reuti: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Reply:</strong> <a href="21834.php">Reuti: "Re: [OMPI users] job termination on grid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p><p>My recent job started normally but after a few hours of running died with
<br>
the following message:
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
<p>A daemon (pid 19390) died unexpectedly with status 137 while attempting
<br>
<p>to launch so we are aborting.
<br>
<p><p><p>There may be more information reported by the environment (see above).
<br>
<p><p><p>This may be because the daemon was unable to find all the needed shared
<br>
<p>libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
<p>location of the shared libraries on the remote nodes and this will
<br>
<p>automatically be forwarded to the remote nodes.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that the job aborted, but has no info as to the process
<br>
<p>that caused that situation.
<br>
<p><p><p>The scheduling script is below:
<br>
<p><p><p>#$ -S /bin/bash
<br>
<p>#$ -cwd
<br>
<p>#$ -N SC3blastx_64-96thr
<br>
<p>#$ -pe openmpi* 64-96
<br>
<p>#$ -l h_rt=24:00:00,vf=3G
<br>
<p>#$ -j y
<br>
<p>#$ -M yaximik_at_[hidden]
<br>
<p>#$ -m eas
<br>
<p>#
<br>
<p># Load the appropriate module files
<br>
<p># Should be loaded already
<br>
<p>#$ -V
<br>
<p><p><p>mpirun -np $NSLOTS blastx -query
<br>
$UABGRID_SCRATCH/SC/AdQ30/fasta/SC1-IS4-Ind1-153ngFr1sep1run1R1AdQ30.fasta
<br>
-db nr -out
<br>
$UABGRID_SCRATCH/SC/blastx/SC/SC1-IS4-Ind1-153ngFr1sep1run1R1AdQ30.out
<br>
-evalue 0.001 -max_intron_length 100000 -outfmt 5 -num_alignments 20
<br>
-lcase_masking -num_threads $NSLOTS
<br>
<p>What caused this termination? It does not seem scheduling problem as the
<br>
program run several hours with 96 threads. My $LD_LIBRARY_PATH does have
<br>
/share/apps/openmpi/1.6.4-gcc/lib entry, so how else should I modify it?
<br>
<p>Vladimir
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21834.php">Reuti: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21834.php">Reuti: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Reply:</strong> <a href="21834.php">Reuti: "Re: [OMPI users] job termination on grid"</a>
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
