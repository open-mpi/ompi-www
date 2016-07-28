<?
$subject_val = "[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 13:03:37 2008" -->
<!-- isoreceived="20080424170337" -->
<!-- sent="Thu, 24 Apr 2008 10:03:26 -0700" -->
<!-- isosent="20080424170326" -->
<!-- name="Steven Truong" -->
<!-- email="midair77_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)" -->
<!-- id="28bb77d30804241003m2d040e36l7959670d81b72627_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)<br>
<strong>From:</strong> Steven Truong (<em>midair77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 13:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5512.php">Andreas Schäfer: "Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)"</a>
<li><strong>Reply:</strong> <a href="5512.php">Andreas Schäfer: "Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.  I recently encountered this error and can not really understand
<br>
what this means.  I googled and could not find any relevant
<br>
information.  Could somebody tell me what might cause this error?
<br>
<p>Our systems:  Rocks 4.3 x86_64, openmpi-1.2.5, scalapack-1.8.0,
<br>
Barcelona, Gigabit interconnections.
<br>
<p>Thank you very much.
<br>
<p><p>ERROR MESSAGE:
<br>
[compute-1-27:31550] *** Process received signal ***
<br>
[compute-1-27:31550] Signal: Segmentation fault (11)
<br>
[compute-1-27:31550] Signal code: Address not mapped (1)
<br>
[compute-1-27:31550] Failing at address: (nil)
<br>
[compute-1-27:31550] [ 0] /lib64/tls/libpthread.so.0 [0x34e6c0c4f0]
<br>
[compute-1-27:31550] [ 1]
<br>
/usr/local/bin/vaspopenmpi_scala(__dfast__cnormn+0x18e) [0x4dd0ee]
<br>
[compute-1-27:31550] [ 2]
<br>
/usr/local/bin/vaspopenmpi_scala(__rmm_diis__eddrmm+0x59be) [0x5b11fe]
<br>
[compute-1-27:31550] [ 3]
<br>
/usr/local/bin/vaspopenmpi_scala(elmin_+0x32fa) [0x608a9a]
<br>
[compute-1-27:31550] [ 4]
<br>
/usr/local/bin/vaspopenmpi_scala(MAIN__+0x15492) [0x425f4a]
<br>
[compute-1-27:31550] [ 5] /usr/local/bin/vaspopenmpi_scala(main+0xe) [0x6ed9ee]
<br>
[compute-1-27:31550] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x34e5f1c3fb]
<br>
[compute-1-27:31550] [ 7] /usr/local/bin/vaspopenmpi_scala [0x410a2a]
<br>
[compute-1-27:31550] *** End of error message ***
<br>
[compute-1-27:31549] *** Process received signal ***
<br>
[compute-1-27:31549] Signal: Segmentation fault (11)
<br>
[compute-1-27:31549] Signal code: Address not mapped (1)
<br>
[compute-1-27:31549] Failing at address: (nil)
<br>
[compute-1-27:31549] [ 0] /lib64/tls/libpthread.so.0 [0x34e6c0c4f0]
<br>
[compute-1-27:31549] [ 1]
<br>
/usr/local/bin/vaspopenmpi_scala(__dfast__cnorma+0x1e4) [0x4dd884]
<br>
[compute-1-27:31549] [ 2]
<br>
/usr/local/bin/vaspopenmpi_scala(__rmm_diis__eddrmm+0x6dbd) [0x5b25fd]
<br>
[compute-1-27:31549] [ 3]
<br>
/usr/local/bin/vaspopenmpi_scala(elmin_+0x32fa) [0x608a9a]
<br>
[compute-1-27:31549] [ 4]
<br>
/usr/local/bin/vaspopenmpi_scala(MAIN__+0x15492) [0x425f4a]
<br>
[compute-1-27:31549] [ 5] /usr/local/bin/vaspopenmpi_scala(main+0xe) [0x6ed9ee]
<br>
[compute-1-27:31549] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x34e5f1c3fb]
<br>
[compute-1-27:31549] [ 7] /usr/local/bin/vaspopenmpi_scala [0x410a2a]
<br>
[compute-1-27:31549] *** End of error message ***
<br>
mpiexec noticed that job rank 0 with PID 31544 on node
<br>
compute-1-27.local exited on signal 15 (Terminated).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5512.php">Andreas Schäfer: "Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)"</a>
<li><strong>Reply:</strong> <a href="5512.php">Andreas Schäfer: "Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)"</a>
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
