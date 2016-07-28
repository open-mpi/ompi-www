<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 16:46:53 2006" -->
<!-- isoreceived="20060615204653" -->
<!-- sent="Thu, 15 Jun 2006 13:46:45 -0700" -->
<!-- isosent="20060615204645" -->
<!-- name="Anoop Rajendra" -->
<!-- email="anoop.rajendra_at_[hidden]" -->
<!-- subject="[OMPI users] SEGV_MAPERR during execution" -->
<!-- id="A1477C3D-BDAF-470E-B215-9BA27D049D52_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Anoop Rajendra (<em>anoop.rajendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 16:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1426.php">Anoop Rajendra: "[OMPI users] Cannot link statically against OpenMPI programs"</a>
<li><strong>Previous message:</strong> <a href="1424.php">Martin Schaff&#195;&#182;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1428.php">Brian Barrett: "Re: [OMPI users] SEGV_MAPERR during execution"</a>
<li><strong>Reply:</strong> <a href="1428.php">Brian Barrett: "Re: [OMPI users] SEGV_MAPERR during execution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to run a simple pi program compiled using openmpi.
<br>
<p>My command line and error message is
<br>
<p>[mpiuser_at_Pebble-anoop ~]$ mpirun -n 2 -hostfile /opt/openmpi/openmpi/ 
<br>
etc/openmpi-default-hostfile /home/mpiuser/cpi2
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
[0] func:/opt/openmpi/openmpi/lib/libopal.so.0 [0xceb6dd]
<br>
[1] func:/lib/tls/libpthread.so.0 [0xd44880]
<br>
[2] func:/opt/openmpi/openmpi/lib/openmpi/mca_btl_tcp.so [0x746d23]
<br>
[3] func:/opt/openmpi/openmpi/lib/openmpi/mca_btl_tcp.so 
<br>
(mca_btl_tcp_add_procs+0x140) [0x744094]
<br>
[4] func:/opt/openmpi/openmpi/lib/openmpi/mca_bml_r2.so 
<br>
(mca_bml_r2_add_procs+0x202) [0x96add6]
<br>
[5] func:/opt/openmpi/openmpi/lib/openmpi/mca_pml_ob1.so 
<br>
(mca_pml_ob1_add_procs+0x85) [0x134259]
<br>
[6] func:/opt/openmpi/openmpi/lib/libmpi.so.0(ompi_mpi_init+0x385)  
<br>
[0x70ca7d]
<br>
[7] func:/opt/openmpi/openmpi/lib/libmpi.so.0(MPI_Init+0x8c) [0x6fb724]
<br>
[8] func:/home/mpiuser/cpi2(main+0x56) [0x804890d]
<br>
[9] func:/lib/tls/libc.so.6(__libc_start_main+0xd3) [0xaf3e23]
<br>
[10] func:/home/mpiuser/cpi2 [0x8048819]
<br>
<p><p><p>The application was compiled with the following command line
<br>
<p>[root_at_Pebble-anoop examples]# mpicc -o cpi2 cpi.c
<br>
<p>There are 2 single processor machines in the cluster with my host  
<br>
file reading
<br>
<p>pebble-anoop.local
<br>
compute-0-0.local
<br>
<p>Finally, openMPI was compiled with no special options. Just the  
<br>
default make all install.
<br>
<p>Can someone help me? I'm a newbie at this: so please excuse my  
<br>
naivete, and I'd be grateful if someone can point me in the right  
<br>
direction.
<br>
<p>Thanks,
<br>
Anoop
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1426.php">Anoop Rajendra: "[OMPI users] Cannot link statically against OpenMPI programs"</a>
<li><strong>Previous message:</strong> <a href="1424.php">Martin Schaff&#195;&#182;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1428.php">Brian Barrett: "Re: [OMPI users] SEGV_MAPERR during execution"</a>
<li><strong>Reply:</strong> <a href="1428.php">Brian Barrett: "Re: [OMPI users] SEGV_MAPERR during execution"</a>
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
