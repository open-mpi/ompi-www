<?
$subject_val = "[OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 11:25:15 2015" -->
<!-- isoreceived="20151002152515" -->
<!-- sent="Fri, 2 Oct 2015 17:25:11 +0200" -->
<!-- isosent="20151002152511" -->
<!-- name="Marcin Krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="[OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="560EA1D7.9030406_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Process binding with SLURM and 'heterogeneous' nodes<br>
<strong>From:</strong> Marcin Krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-02 11:25:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27771.php">Grigory Shamov: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27769.php">Georg Geiser: "[OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27771.php">Grigory Shamov: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27771.php">Grigory Shamov: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I fail to make OpenMPI bind to cores correctly when running from within 
<br>
SLURM-allocated CPU resources spread over a range of compute nodes in an 
<br>
otherwise homogeneous cluster. I have found this thread
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
<br>
<p>and did try to use what Ralph suggested there (--hetero-nodes), but it 
<br>
does not work (v. 1.10.0). When running with --report-bindings I get 
<br>
messages like
<br>
<p>[compute-9-11.local:27571] MCW rank 10 is not bound (or bound to all 
<br>
available processors)
<br>
<p>for all ranks outside of my first physical compute node. Moreover, 
<br>
everything works as expected if I ask SLURM to assign entire compute 
<br>
nodes. So it does look like Ralph's diagnose presented in that thread is 
<br>
correct, just the --hetero-nodes switch does not work for me.
<br>
<p>I have written a short code that uses sched_getaffinity to print the 
<br>
effective bindings: all MPI ranks except of those on the first node are 
<br>
bound to all CPU cores allocated by SLURM.
<br>
<p>Do I have to do something except of --hetero-nodes, or is this a problem 
<br>
that needs further investigation?
<br>
<p>Thanks a lot!
<br>
<p>Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27771.php">Grigory Shamov: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27769.php">Georg Geiser: "[OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27771.php">Grigory Shamov: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27771.php">Grigory Shamov: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
