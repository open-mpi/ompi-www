<?
$subject_val = "[OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 18:24:56 2012" -->
<!-- isoreceived="20120611222456" -->
<!-- sent="Mon, 11 Jun 2012 15:24:32 -0700" -->
<!-- isosent="20120611222432" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="[OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="CADEJBEXvRCcBUCT3_asy3NrFU5R38YdAtA6oSi0mLnK7Mx5Eog_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6<br>
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 18:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19498.php">Aurélien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19498.php">Aurélien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19498.php">Aurélien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are migrating to Open MPI 1.6 but since 1.6 dropped support for
<br>
Myricom GM driver so we have to switch to the MX driver. We have the
<br>
Myricom MX2G 1.2.16 driver installed. However upon testing the new
<br>
build of Open MPI on a node without the actual Myrinet device, we are
<br>
getting the following segmentation fault.
<br>
<p>&lt;----&gt;
<br>
[yqin_at_n0007.scs00 ~]$ mpirun -np 2  -np 2 osu_bw
<br>
[n0007.scs00:03075] Error in mx_open_endpoint (error No MX device
<br>
entry in /dev.)
<br>
[n0007.scs00:03074] Error in mx_open_endpoint (error No MX device
<br>
entry in /dev.)
<br>
--------------------------------------------------------------------------
<br>
[[32626,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: Myrinet/MX
<br>
&nbsp;&nbsp;Host: n0007.scs00
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
[n0007:03074] *** Process received signal ***
<br>
[n0007:03074] Signal: Segmentation fault (11)
<br>
[n0007:03074] Signal code: Invalid permissions (2)
<br>
[n0007:03074] Failing at address: 0x2b9112128130
<br>
[n0007:03075] *** Process received signal ***
<br>
[n0007:03075] Signal: Segmentation fault (11)
<br>
[n0007:03075] Signal code: Invalid permissions (2)
<br>
[n0007:03075] Failing at address: 0x2b041c9f1130
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 3075 on node n0007.scs00
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[n0007.scs00:03073] 1 more process has sent help message
<br>
help-mpi-btl-base.txt / btl:no-nics
<br>
[n0007.scs00:03073] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
<br>
to see all help / error messages
<br>
&lt;----&gt;
<br>
<p>Excluding the MX BTL does not get anywhere further.
<br>
<p>&lt;----&gt;
<br>
[yqin_at_n0007.scs00 ~]$ mpirun -np 2 -mca btl ^mx -np 2 osu_bw
<br>
[n0007.scs00:03453] Error in mx_open_endpoint (error No MX device
<br>
entry in /dev.)
<br>
[n0007.scs00:03454] Error in mx_open_endpoint (error No MX device
<br>
entry in /dev.)
<br>
[n0007:03453] *** Process received signal ***
<br>
[n0007:03453] Signal: Segmentation fault (11)
<br>
[n0007:03453] Signal code: Address not mapped (1)
<br>
[n0007:03453] Failing at address: 0x2b3c1fe73130
<br>
[n0007:03454] *** Process received signal ***
<br>
[n0007:03454] Signal: Segmentation fault (11)
<br>
[n0007:03454] Signal code: Address not mapped (1)
<br>
[n0007:03454] Failing at address: 0x2b2431bf0130
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 3454 on node n0007.scs00
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
&lt;----&gt;
<br>
<p>If we use only designated BTL such as SM and SELF, the binary runs but
<br>
still getting segmentation fault towards the end.
<br>
<p>&lt;----&gt;
<br>
[yqin_at_n0007.scs00 ~]$ mpirun -np 2 -mca btl sm,self -np 2 osu_bw
<br>
[n0007.scs00:03460] Error in mx_open_endpoint (error No MX device
<br>
entry in /dev.)
<br>
[n0007.scs00:03461] Error in mx_open_endpoint (error No MX device
<br>
entry in /dev.)
<br>
# OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
1                         2.54
<br>
2                         5.22
<br>
4                        10.92
<br>
8                        21.61
<br>
16                       43.89
<br>
32                       62.19
<br>
64                      121.95
<br>
128                     212.28
<br>
256                     337.52
<br>
512                     516.67
<br>
1024                    701.29
<br>
2048                    845.69
<br>
4096                    836.45
<br>
8192                    934.31
<br>
16384                  1035.53
<br>
32768                  1186.90
<br>
65536                  1390.41
<br>
131072                 1519.14
<br>
262144                 1562.96
<br>
524288                 1596.78
<br>
1048576                1611.48
<br>
2097152                1616.09
<br>
4194304                1620.47
<br>
[n0007:03461] *** Process received signal ***
<br>
[n0007:03460] *** Process received signal ***
<br>
[n0007:03460] Signal: Segmentation fault (11)
<br>
[n0007:03460] Signal code: Address not mapped (1)
<br>
[n0007:03460] Failing at address: 0x2acac044d130
<br>
[n0007:03461] Signal: Segmentation fault (11)
<br>
[n0007:03461] Signal code: Address not mapped (1)
<br>
[n0007:03461] Failing at address: 0x2b8bc4121130
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 3460 on node n0007.scs00
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
&lt;----&gt;
<br>
<p><p>Can anybody shed some light here? It looks like ompi is trying to open
<br>
the MX device no matter what. This is on a fresh build of Open MPI 1.6
<br>
with &quot;--with-mx --with-openib&quot; options. We didn't have such an issue
<br>
with the old GM BTL.
<br>
<p>Thanks,
<br>
<p>Yong Qin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19498.php">Aurélien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19498.php">Aurélien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19498.php">Aurélien Bouteiller: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
