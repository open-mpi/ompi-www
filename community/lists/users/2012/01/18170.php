<?
$subject_val = "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 13:56:44 2012" -->
<!-- isoreceived="20120116185644" -->
<!-- sent="Mon, 16 Jan 2012 22:56:39 +0400" -->
<!-- isosent="20120116185639" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision" -->
<!-- id="CAN7CqretgorVZyencQ1ATStVL2=ccUsLNOtEXo59KbA45gu=RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision<br>
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 13:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18201.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think I've found a bug in the hear revision of the OpenMPI 1.5
<br>
branch. If it is configured with --disable-debug it crashes in
<br>
finalize on the hello_c.c example. Did I miss something out?
<br>
<p>Configure options:
<br>
./configure --with-pmi=/usr/ --with-slurm=/usr/ --without-psm
<br>
--disable-debug --enable-mpirun-prefix-by-default
<br>
--prefix=/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install
<br>
<p>Runtime command and output:
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH:../lib ./mpirun --mca btl openib,self
<br>
--npernode 1 --host mir1,mir2 ./hello
<br>
<p>Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
[mir1:05542] *** Process received signal ***
<br>
[mir1:05542] Signal: Segmentation fault (11)
<br>
[mir1:05542] Signal code: Address not mapped (1)
<br>
[mir1:05542] Failing at address: 0xe8
<br>
[mir2:10218] *** Process received signal ***
<br>
[mir2:10218] Signal: Segmentation fault (11)
<br>
[mir2:10218] Signal code: Address not mapped (1)
<br>
[mir2:10218] Failing at address: 0xe8
<br>
[mir1:05542] [ 0] /lib64/libpthread.so.0() [0x390d20f4c0]
<br>
[mir1:05542] [ 1]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
<br>
[0x7f4588cee6a8]
<br>
[mir1:05542] [ 2]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
<br>
[0x7f4588cee700]
<br>
[mir1:05542] [ 3]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
<br>
[0x7f4588d1beb2]
<br>
[mir1:05542] [ 4]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
<br>
[0x7f4588c81eb5]
<br>
[mir1:05542] [ 5]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
<br>
[0x7f4588c217c3]
<br>
[mir1:05542] [ 6]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
<br>
[0x7f4588c39959]
<br>
[mir1:05542] [ 7] ./hello(main+0x69) [0x4008fd]
<br>
[mir1:05542] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x390ca1ec5d]
<br>
[mir1:05542] [ 9] ./hello() [0x4007d9]
<br>
[mir1:05542] *** End of error message ***
<br>
[mir2:10218] [ 0] /lib64/libpthread.so.0() [0x3a6dc0f4c0]
<br>
[mir2:10218] [ 1]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
<br>
[0x7f409f31d6a8]
<br>
[mir2:10218] [ 2]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
<br>
[0x7f409f31d700]
<br>
[mir2:10218] [ 3]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
<br>
[0x7f409f34aeb2]
<br>
[mir2:10218] [ 4]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
<br>
[0x7f409f2b0eb5]
<br>
[mir2:10218] [ 5]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
<br>
[0x7f409f2507c3]
<br>
[mir2:10218] [ 6]
<br>
/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
<br>
[0x7f409f268959]
<br>
[mir2:10218] [ 7] ./hello(main+0x69) [0x4008fd]
<br>
[mir2:10218] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3a6d41ec5d]
<br>
[mir2:10218] [ 9] ./hello() [0x4007d9]
<br>
[mir2:10218] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 5542 on node mir1 exited
<br>
on signal 11 (Segmentation fault).
<br>
---------------------------------------------------------------------
<br>
<p>Thanks,
<br>
Andrew Senin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18201.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
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
