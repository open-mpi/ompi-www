<?
$subject_val = "[OMPI users] Trouble with udcm and rdmacm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 07:22:36 2015" -->
<!-- isoreceived="20150813112236" -->
<!-- sent="Thu, 13 Aug 2015 13:22:33 +0200" -->
<!-- isosent="20150813112233" -->
<!-- name="Tobias Kloeffel" -->
<!-- email="tobias.kloeffel_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with udcm and rdmacm" -->
<!-- id="55CC7DF9.6090609_at_fau.de" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with udcm and rdmacm<br>
<strong>From:</strong> Tobias Kloeffel (<em>tobias.kloeffel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-13 07:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27456.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>The configuration might be a bit exotic:
<br>
<p>Kernel 4.1.5 vanilla, Mellanox OFED 3.0-2.0.1
<br>
<p>ccc174 1 x dual port ConnectX-3
<br>
mini4   2 x single port ConnectX-2
<br>
mini2   8 x single port ConnectX-2
<br>
MIS20025
<br>
<p>The following does work:
<br>
<p>using oob coonection manager in 1.7.3:
<br>
everything works, except latencies are really bad compared to 1.8.8
<br>
<p>udcm in 1.8.8:
<br>
everything works as long as I exclude mlx4_0:2 by setting:
<br>
&nbsp;&nbsp;--mca btl_openib_if_include 
<br>
'mlx4_0:1,mlx4_1:1,mlx4_2:1,mlx4_3:1,mlx4_4:1,mlx4_5:1,mlx4_6:1,mlx4_7:1'
<br>
if I include mlx4_0:2 I get:
<br>
[mini4][[62272,1],4][connect/btl_openib_connect_udcm.c:1907:udcm_process_messages] 
<br>
could not initialize cpc data for endpoint
<br>
libibverbs: ibv_create_ah failed to query port.
<br>
<p>rdmacm in 1.8.8 only works between ccc174 and mini4, running across all 
<br>
three nodes will produce:
<br>
<p>mpirun --mca btl_openib_cpc_include rdmacm --mca 
<br>
btl_openib_warn_default_gid_prefix  0  --hostfile ~/hostlist -np 40 
<br>
./osu_alltoall
<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:           mini2
<br>
&nbsp;&nbsp;&nbsp;Local device:         mlx4_7
<br>
&nbsp;&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;&nbsp;CPCs attempted:       rdmacm
<br>
--------------------------------------------------------------------------
<br>
[ccc174][[61500,1],1][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
<br>
[btl_openib_proc.c:157] ompi_modex_recv failed for peer [[61500,1],9]
<br>
<p>Any help would be much appreciated.
<br>
<p>Regards,
<br>
Tobias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27456.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
