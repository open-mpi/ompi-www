<?
$subject_val = "[OMPI users] OpenMPI against multiple, evolving SLURM versions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 01:12:43 2016" -->
<!-- isoreceived="20160129061243" -->
<!-- sent="Thu, 28 Jan 2016 22:12:21 -0800" -->
<!-- isosent="20160129061221" -->
<!-- name="William Law" -->
<!-- email="willthelaw_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI against multiple, evolving SLURM versions" -->
<!-- id="8AB65D7E-7BF6-41E6-8F2C-F84274DF02C2_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI against multiple, evolving SLURM versions<br>
<strong>From:</strong> William Law (<em>willthelaw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-29 01:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Previous message:</strong> <a href="28407.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Our group can't find anyway to do this and it'd be helpful.
<br>
<p>We use slurm and keep upgrading the slurm environment.  OpenMPI bombs out against PMI each time the libslurm stuff changes, which seems to be fairly regularly.  Is there a way to compile against slurm but insulate ourselves from the libslurm chaos?  Obvious will ask the slurm folks too.
<br>
<p>[wlaw_at_some-node /scratch/users/wlaw/imb/src]$ mpirun -n 2 --mca grpcomm ^pmi ./IMB-MPI1 
<br>
[some-node.local:42584] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_ess_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
<br>
[some-node.local:42585] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
<br>
[some-node.local:42586] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
<br>
<p>(sent it via the wrong email so it bounced..... heh)
<br>
<p>Upon further investigation it seems like the most appropriate thing would be to point it at compile time to libslurm.so instead of libslurm.so.xx; does that make sense?
<br>
<p>Thanks,
<br>
<p>Will
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28408/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Previous message:</strong> <a href="28407.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
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
