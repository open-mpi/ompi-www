<?
$subject_val = "[OMPI users] running a ompi 1.4.2 job with -np versus -npernode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 13:08:31 2010" -->
<!-- isoreceived="20100517170831" -->
<!-- sent="Mon, 17 May 2010 11:08:07 -0600" -->
<!-- isosent="20100517170807" -->
<!-- name="Christopher Maestas" -->
<!-- email="cdmaestas_at_[hidden]" -->
<!-- subject="[OMPI users] running a ompi 1.4.2 job with -np versus -npernode" -->
<!-- id="AANLkTim6VjeXEq0cP-8rls48B5MOycIpgAPfNKlG8AJl_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] running a ompi 1.4.2 job with -np versus -npernode<br>
<strong>From:</strong> Christopher Maestas (<em>cdmaestas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 13:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13063.php">Jeff Squyres: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>Previous message:</strong> <a href="13061.php">Ping Luo: "[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Reply:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've been having some troubles with OpenMPI 1.4.X and slurm recently.  I
<br>
seem to be able to run jobs this way ok:
<br>
<pre>
---
sh-3.1$ mpirun -np 2 mpi_hello
Hello, I am node cut1n7 with rank 0
Hello, I am node cut1n8 with rank 1
--
However if I try and use the -npernode option I get:
---
sh-3.1$ mpirun -npernode 1 mpi_hello
[cut1n7:16368] *** Process received signal ***
[cut1n7:16368] Signal: Segmentation fault (11)
[cut1n7:16368] Signal code: Address not mapped (1)
[cut1n7:16368] Failing at address: 0x50
[cut1n7:16368] [ 0] /lib64/libpthread.so.0 [0x37bda0de80]
[cut1n7:16368] [ 1]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
[0x2b73eb84df8b]
[cut1n7:16368] [ 2]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x655)
[0x2b73eb8592f5]
[cut1n7:16368] [ 3]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x10b)
[0x2b73eb86031b]
[cut1n7:16368] [ 4]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/openmpi/mca_plm_slurm.so
[0x2b73ec709ecf]
[cut1n7:16368] [ 5] mpirun [0x40335a]
[cut1n7:16368] [ 6] mpirun [0x4029f3]
[cut1n7:16368] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x37bce1d8b4]
[cut1n7:16368] [ 8] mpirun [0x402929]
[cut1n7:16368] *** End of error message ***
Segmentation fault
---
This is ompi 1.4.2, gcc 4.1.1 and slurm 2.0.9 ... I'm sure it's a rather
silly detail on my end, but figure I should start this thread for any
insights and feedback I can help provide to resolve this.
Thanks,
-cdm
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13063.php">Jeff Squyres: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>Previous message:</strong> <a href="13061.php">Ping Luo: "[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Reply:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
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
