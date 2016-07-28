<?
$subject_val = "[OMPI users] Salloc and mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 04:12:42 2014" -->
<!-- isoreceived="20140716081242" -->
<!-- sent="Wed, 16 Jul 2014 12:12:40 +0400" -->
<!-- isosent="20140716081240" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] Salloc and mpirun problem" -->
<!-- id="1405498360.186675205_at_f317.i.mail.ru" -->
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
<strong>Subject:</strong> [OMPI users] Salloc and mpirun problem<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 04:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24778.php">Mike Dubman: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24776.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24778.php">Mike Dubman: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24778.php">Mike Dubman: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="24795.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
I have&#194;&#160;Open MPI v1.9a1r32142 and slurm 2.5.6.
<br>
<p>I can not use mpirun after salloc:
<br>
<p>$salloc -N2 --exclusive -p test -J ompi
<br>
$LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -np 1 hello_c
<br>
-----------------------------------------------------------------------------------------------------
<br>
An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
------------------------------------------------------------------------------------------------------
<br>
But if i use mpirun in sbutch script it looks correct:
<br>
$cat ompi_mxm3.0
<br>
#!/bin/sh
<br>
LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so&#194;&#160; mpirun&#194;&#160; -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --map-by slot:pe=8 &quot;$@&quot;
<br>
<p>$sbatch -N2&#194;&#160; --exclusive -p test -J ompi&#194;&#160; ompi_mxm3.0 ./hello_c
<br>
Submitted batch job 645039
<br>
$cat slurm-645039.out 
<br>
[warn] Epoll ADD(1) on fd 0 failed.&#194;&#160; Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
<br>
[warn] Epoll ADD(4) on fd 1 failed.&#194;&#160; Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
<br>
Hello, world, I am 0 of 2, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142, Jul 04, 2014 (nightly snapshot tarball), 146)
<br>
Hello, world, I am 1 of 2, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142, Jul 04, 2014 (nightly snapshot tarball), 146)
<br>
<p>Regards,
<br>
Timur<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24777/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24778.php">Mike Dubman: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24776.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24778.php">Mike Dubman: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24778.php">Mike Dubman: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="24795.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
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
