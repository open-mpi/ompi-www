<?
$subject_val = "[OMPI users] Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 11:31:04 2009" -->
<!-- isoreceived="20090615153104" -->
<!-- sent="Mon, 15 Jun 2009 08:30:59 -0700 (PDT)" -->
<!-- isosent="20090615153059" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault (11)" -->
<!-- id="4063.42954.qm_at_web31007.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault (11)<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-15 11:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9620.php">Kraus Philipp: "[OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Previous message:</strong> <a href="9618.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9626.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="9626.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have installed BLCR 0.8.1 and OPENMPI 1.3 on a linux platform. However, when i tried checkpoiting an application, it hangs forever just before ending.
<br>
<p>A chekcpoint file is generated. However, when i try restarting it, i get the following error: 
<br>
<p>raj_at_sun06:~$ ompi-restart ompi_global_snapshot_22390.ckpt
<br>
[sun06:22423] *** Process received signal ***
<br>
[sun06:22423] Signal: Segmentation fault (11)
<br>
[sun06:22423] Signal code: Address not mapped (1)
<br>
[sun06:22423] Failing at address: (nil)
<br>
[sun06:22423] [ 0] [0xb7fb640c]
<br>
[sun06:22423] [ 1] /usr/local/openmpi/lib/libopen-pal.so.0(opal_crs_blcr_restart+0x103) [0xb7f76925]
<br>
[sun06:22423] [ 2] opal-restart [0x8049435]
<br>
[sun06:22423] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7d9a455]
<br>
[sun06:22423] [ 4] opal-restart [0x8049001]
<br>
[sun06:22423] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 22423 on node sun06 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Any help will be very appreciated.
<br>
<p>kind regards,
<br>
<p>Raj
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9620.php">Kraus Philipp: "[OMPI users] compiling OpenMPI 1.3.2 under Win Vista with MinGW 1.11-rc1"</a>
<li><strong>Previous message:</strong> <a href="9618.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9626.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="9626.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
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
