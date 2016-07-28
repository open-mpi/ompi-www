<?
$subject_val = "[OMPI users] Problem mpirun Signal: Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 16 00:14:19 2015" -->
<!-- isoreceived="20151116051419" -->
<!-- sent="Mon, 16 Nov 2015 02:13:56 -0300" -->
<!-- isosent="20151116051356" -->
<!-- name="Christopher Paredes" -->
<!-- email="jesuchristopher_at_[hidden]" -->
<!-- subject="[OMPI users] Problem mpirun Signal: Segmentation fault (11)" -->
<!-- id="CAPau=qwJC_ONS864i8dbzTRDkOzX5=6eTpjp9sQ9HU+r-ty3CQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Problem mpirun Signal: Segmentation fault (11)<br>
<strong>From:</strong> Christopher Paredes (<em>jesuchristopher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-16 00:13:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28040.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI State of the Union BOF: this Wednesday!"</a>
<li><strong>Previous message:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I have trouble running mpirun on my computer . I am using : mpirun Debian
<br>
testing repositories (Open MPI ) 1.6.5 y lammps (12 Mar 2015)
<br>
<p>the command was executed the following:
<br>
<p>mpirun.openmpi -np 2 lammps &lt; in.muro_export
<br>
<p>[debian:14898] *** Process received signal ***
<br>
[debian:14898] Signal: Segmentation fault (11)
<br>
[debian:14898] Signal code:  (128)
<br>
[debian:14898] Failing at address: (nil)
<br>
[debian:14898] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xf8d0)
<br>
[0x7f4563d398d0]
<br>
[debian:14898] [ 1] /usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0x23e9c)
<br>
[0x7f45646a3e9c]
<br>
[debian:14898] [ 2] /usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0xc006)
<br>
[0x7f456468c006]
<br>
[debian:14898] [ 3]
<br>
/usr/lib/x86_64-linux-gnu/libhwloc.so.5(hwloc_topology_load+0x1ab)
<br>
[0x7f456468cfa9]
<br>
[debian:14898] [ 4] /usr/lib/libmpi.so.1(opal_hwloc_unpack+0xc7)
<br>
[0x7f4564bc15e7]
<br>
[debian:14898] [ 5] /usr/lib/libmpi.so.1(opal_dss_unpack_buffer+0x73)
<br>
[0x7f4564bbccc3]
<br>
[debian:14898] [ 6] /usr/lib/libmpi.so.1(opal_dss_unpack+0xae)
<br>
[0x7f4564bbdc2e]
<br>
[debian:14898] [ 7] /usr/lib/libmpi.so.1(orte_util_nidmap_init+0x2b1)
<br>
[0x7f4564b88f31]
<br>
[debian:14898] [ 8] /usr/lib/openmpi/lib/openmpi/mca_ess_env.so(+0x1b19)
<br>
[0x7f4562537b19]
<br>
[debian:14898] [ 9] /usr/lib/libmpi.so.1(orte_init+0x193) [0x7f4564b71653]
<br>
[debian:14898] [10] /usr/lib/libmpi.so.1(ompi_mpi_init+0x166)
<br>
[0x7f4564b2c066]
<br>
[debian:14898] [11] /usr/lib/libmpi.so.1(MPI_Init+0x16d) [0x7f4564b448cd]
<br>
[debian:14898] [12] lammps() [0x40672b]
<br>
[debian:14898] [13] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)
<br>
[0x7f45639a2b45]
<br>
[debian:14898] [14] lammps() [0x4067ef]
<br>
[debian:14898] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun.openmpi noticed that process rank 0 with PID 14898 on node debian
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Regards
<br>
<p><pre>
-- 
Christopher Paredes
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28040.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI State of the Union BOF: this Wednesday!"</a>
<li><strong>Previous message:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- nextthread="start" -->
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
