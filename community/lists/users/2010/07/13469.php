<?
$subject_val = "[OMPI users] Dynamic algorithms problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  4 08:12:47 2010" -->
<!-- isoreceived="20100704121247" -->
<!-- sent="Sun, 4 Jul 2010 14:12:42 +0200" -->
<!-- isosent="20100704121242" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamic algorithms problem" -->
<!-- id="AANLkTinM_ZoGkTrAto1P3g9MfsKKFHtq4ctnMK424IfY_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Dynamic algorithms problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-04 08:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13470.php">Jack Bryan: "[OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Reply:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI user,
<br>
<p>i'm trying to use collective dynamic rules with OpenMPi 1.4.2:
<br>
<p>export OMPI_MCA_coll_tuned_use_dynamic_rules=1
<br>
export OMPI_MCA_coll_tuned_bcast_algorithm=1
<br>
<p>My target is to test Bcast peformances using SKaMPI benchmark changing
<br>
dynamic rules. But at runtime i get the follow error:
<br>
<p><p>[node003:05871] *** Process received signal ***
<br>
[node003:05871] Signal: Segmentation fault (11)
<br>
[node003:05871] Signal code: Address not mapped (1)
<br>
[node003:05871] Failing at address: 0xcc
<br>
[node003:05872] *** Process received signal ***
<br>
[node003:05872] Signal: Segmentation fault (11)
<br>
[node003:05872] Signal code: Address not mapped (1)
<br>
[node003:05872] Failing at address: 0xcc
<br>
[node003:05871] [ 0] /lib64/libpthread.so.0 [0x3be160e4c0]
<br>
[node003:05871] [ 1]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
<br>
[0x2accf7210145]
<br>
[node003:05871] [ 2]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
<br>
[0x2accf720ef16]
<br>
[node003:05871] [ 3]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
<br>
[0x2accf721fec9]
<br>
[node003:05871] [ 4]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0(MPI_Bcast+0x171)
<br>
[0x2accf71b81e1]
<br>
[node003:05871] [ 5] ./skampi [0x409566]
<br>
[node003:05871] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3be0e1d974]
<br>
[node003:05871] [ 7] ./skampi [0x404e19]
<br>
[node003:05871] *** End of error message ***
<br>
[node003:05872] [ 0] /lib64/libpthread.so.0 [0x3be160e4c0]
<br>
[node003:05872] [ 1]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
<br>
[0x2b1959eb3145]
<br>
[node003:05872] [ 2]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
<br>
[0x2b1959eb1f16]
<br>
[node003:05872] [ 3]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
<br>
[0x2b1959ec2ec9]
<br>
[node003:05872] [ 4]
<br>
/gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0(MPI_Bcast+0x171)
<br>
[0x2b1959e5b1e1]
<br>
[node003:05872] [ 5] ./skampi [0x409566]
<br>
[node003:05872] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3be0e1d974]
<br>
[node003:05872] [ 7] ./skampi [0x404e19]
<br>
[node003:05872] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 9 with PID 5872 on node node003ib0 exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>The same using other Bcast algorithm. Disabling dynamic rules, it works
<br>
well. Maybe i'm using some wrong parameter setup?
<br>
<p>Thanks in advance.
<br>
<p><p><p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13470.php">Jack Bryan: "[OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Reply:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
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
