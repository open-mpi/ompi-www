<?
$subject_val = "[OMPI docs] help me!";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 14:16:50 2008" -->
<!-- isoreceived="20080621181650" -->
<!-- sent="Sat, 21 Jun 2008 11:16:33 -0700 (PDT)" -->
<!-- isosent="20080621181633" -->
<!-- name="Yen Phi" -->
<!-- email="ntpyen712_at_[hidden]" -->
<!-- subject="[OMPI docs] help me!" -->
<!-- id="898690.54709.qm_at_web55805.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI docs] help me!<br>
<strong>From:</strong> Yen Phi (<em>ntpyen712_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 14:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Jeff Squyres: "Re: [OMPI docs] help me!"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Yen Phi: "[OMPI docs] question about ompi-checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0115.php">Jeff Squyres: "Re: [OMPI docs] help me!"</a>
<li><strong>Reply:</strong> <a href="0115.php">Jeff Squyres: "Re: [OMPI docs] help me!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I run my job with OpenMPI and then checkpint it, it checkpoint when my job end. When I try to restart it, it notifies me that message. I don't know why. Please help me.
<br>
&nbsp;[root_at_localhost ~]# mpirun -np 4 -am ft-enable-cr hello
<br>
&nbsp;[root_at_localhost ~]# ompi-checkpoint  19632
<br>
Snapshot Ref.:   0 ompi_global_snapshot_19632.ckpt
<br>
[root_at_localhost ~]# ompi-restart ompi_global_snapshot_19632.ckpt
<br>
[localhost:19649] *** Process received signal ***
<br>
[localhost:19649] Signal: Segmentation fault (11)
<br>
[localhost:19649] Signal code: Address not mapped (1)
<br>
[localhost:19649] Failing at address: 0x1
<br>
[localhost:19649] [ 0] [0x110440]
<br>
[localhost:19649] [ 1] /usr/local/lib/libopen-rte.so.0(orte_rmaps_base_claim_slot+0x17b) [0x15db1f]
<br>
[localhost:19649] [ 2] /usr/local/lib/openmpi/mca_rmaps_round_robin.so [0x23cb84]
<br>
[localhost:19649] [ 3] /usr/local/lib/openmpi/mca_rmaps_round_robin.so [0x23d3ae]
<br>
[localhost:19649] [ 4] /usr/local/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x105) [0x15c61d]
<br>
[localhost:19649] [ 5] /usr/local/lib/libopen-rte.so.0(orte_plm_base_setup_job+0xd3) [0x156077]
<br>
[localhost:19649] [ 6] /usr/local/lib/openmpi/mca_plm_rsh.so [0x1fecc3]
<br>
[localhost:19649] [ 7] mpirun [0x804a79d]
<br>
[localhost:19649] [ 8] mpirun [0x8049e76]
<br>
[localhost:19649] [ 9] /lib/libc.so.6(__libc_start_main+0xe0) [0x9a0390]
<br>
[localhost:19649] [10] mpirun [0x8049da1]
<br>
[localhost:19649] *** End of error message ***
<br>
Segmentation fault
<br>
Thanks
<br>
Yen
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0114/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Jeff Squyres: "Re: [OMPI docs] help me!"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Yen Phi: "[OMPI docs] question about ompi-checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0115.php">Jeff Squyres: "Re: [OMPI docs] help me!"</a>
<li><strong>Reply:</strong> <a href="0115.php">Jeff Squyres: "Re: [OMPI docs] help me!"</a>
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
