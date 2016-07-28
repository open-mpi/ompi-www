<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 14:36:24 2009" -->
<!-- isoreceived="20090615183624" -->
<!-- sent="Tue, 16 Jun 2009 00:05:43 +0530 (IST)" -->
<!-- isosent="20090615183543" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option" -->
<!-- id="609191.52948.qm_at_web8703.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A368643.4010703_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-15 14:35:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6238.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nik,

These are information you have asked. if i missed something please do let me know. 

1. MPI version strings

1. which mpicc :- /usr/local/bin/mpicc

2. mpicc --version
gcc (GCC) 4.2.4 (Ubuntu 4.2.4-1ubuntu3)
Copyright (C) 2007 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

2. Analyzer version strings

collect -V
collect: Sun Ceres Analyzer 7.7 Linux_i386 2009/03/06

analyzer -V
analyzer: Sun Ceres Analyzer 7.7 Linux_i386 2009/03/06

Experiment listing 
----------------------------------------------------------------------------------------------------------------------------------
test.1.er:
total 36
-rw-r--r-- 1 st105788 anjin 2058 2009-06-15 13:39 a.0.def.z
-rw-r--r-- 1 st105788 anjin  252 2009-06-15 13:39 a.1.events.z
-rw-r--r-- 1 st105788 anjin  255 2009-06-15 13:39 a.2.events.z
-rw-r--r-- 1 st105788 anjin    8 2009-06-15 13:39 a.otf
drwxr-xr-x 2 st105788 anjin 4096 2009-06-15 13:39 archives
-rw-r--r-- 1 st105788 anjin  947 2009-06-15 13:39 log.xml
-rw-r--r-- 1 st105788 anjin  688 2009-06-15 13:39 mpview.dat3
drwxr-xr-x 3 st105788 anjin 4096 2009-06-15 13:39 M_r0.er
drwxr-xr-x 3 st105788 anjin 4096 2009-06-15 13:39 M_r1.er

test.1.er/archives:
total 740
-rw-r--r-- 1 st105788 anjin   2712 2009-06-15 13:39 A1020827017
-rw-r--r-- 1 st105788 anjin  18676 2009-06-15 13:39 A1096690429
-rw-r--r-- 1 st105788 anjin   4376 2009-06-15 13:39 A1105646370
-rw-r--r-- 1 st105788 anjin  20020 2009-06-15 13:39 A1120068125
-rw-r--r-- 1 st105788 anjin   2524 2009-06-15 13:39 A1137133350
-rw-r--r-- 1 st105788 anjin    860 2009-06-15 13:39 A1156162824
-rw-r--r-- 1 st105788 anjin   9624 2009-06-15 13:39 A1267378599
-rw-r--r-- 1 st105788 anjin  62244 2009-06-15 13:39 A1299411686
-rw-r--r-- 1 st105788 anjin   1260 2009-06-15 13:39 A1372595803
-rw-r--r-- 1 st105788 anjin   1648 2009-06-15 13:39 A1437804225
-rw-r--r-- 1 st105788 anjin   5048 2009-06-15 13:39 A1454987564
-rw-r--r-- 1 st105788 anjin   1128 2009-06-15 13:39 A1479257043
-rw-r--r-- 1 st105788 anjin    488 2009-06-15 13:39 A1524770319
-rw-r--r-- 1 st105788 anjin 177688 2009-06-15 13:39 A1541555208
-rw-r--r-- 1 st105788 anjin   4120 2009-06-15 13:39 A154432543
-rw-r--r-- 1 st105788 anjin   1144 2009-06-15 13:39 A1624689557
-rw-r--r-- 1 st105788 anjin   4320 2009-06-15 13:39 A1790244868
-rw-r--r-- 1 st105788 anjin  18928 2009-06-15 13:39 A1877586533
-rw-r--r-- 1 st105788 anjin   1496 2009-06-15 13:39 A191452387
-rw-r--r-- 1 st105788 anjin   2424 2009-06-15 13:39 A1965872078
-rw-r--r-- 1 st105788 anjin  10676 2009-06-15 13:39 A2369457763
-rw-r--r-- 1 st105788 anjin  22504 2009-06-15 13:39 A2495007177
-rw-r--r-- 1 st105788 anjin   4224 2009-06-15 13:39 A2628085332
-rw-r--r-- 1 st105788 anjin   8744 2009-06-15 13:39 A2708436963
-rw-r--r-- 1 st105788 anjin   4688 2009-06-15 13:39 A2775785482
-rw-r--r-- 1 st105788 anjin    788 2009-06-15 13:39 A2847002775
-rw-r--r-- 1 st105788 anjin   2748 2009-06-15 13:39 A2863489633
-rw-r--r-- 1 st105788 anjin   1616 2009-06-15 13:39 A2901485964
-rw-r--r-- 1 st105788 anjin   3096 2009-06-15 13:39 A2927666762
-rw-r--r-- 1 st105788 anjin   1960 2009-06-15 13:39 A3003421601
-rw-r--r-- 1 st105788 anjin   1784 2009-06-15 13:39 A3038028125
-rw-r--r-- 1 st105788 anjin   2104 2009-06-15 13:39 A309860530
-rw-r--r-- 1 st105788 anjin   1744 2009-06-15 13:39 A3219106871
-rw-r--r-- 1 st105788 anjin  59748 2009-06-15 13:39 A3244963041
-rw-r--r-- 1 st105788 anjin   2840 2009-06-15 13:39 A3252039816
-rw-r--r-- 1 st105788 anjin   3792 2009-06-15 13:39 A3261151085
-rw-r--r-- 1 st105788 anjin   1724 2009-06-15 13:39 A331661572
-rw-r--r-- 1 st105788 anjin  48420 2009-06-15 13:39 A3495201517
-rw-r--r-- 1 st105788 anjin   1868 2009-06-15 13:39 A3607266356
-rw-r--r-- 1 st105788 anjin  21716 2009-06-15 13:39 A3648561707
-rw-r--r-- 1 st105788 anjin   8148 2009-06-15 13:39 A3731486934
-rw-r--r-- 1 st105788 anjin   1372 2009-06-15 13:39 A3760992247
-rw-r--r-- 1 st105788 anjin   1668 2009-06-15 13:39 A3804511592
-rw-r--r-- 1 st105788 anjin  10080 2009-06-15 13:39 A3835460118
-rw-r--r-- 1 st105788 anjin   5988 2009-06-15 13:39 A3911045865
-rw-r--r-- 1 st105788 anjin   4416 2009-06-15 13:39 A396208440
-rw-r--r-- 1 st105788 anjin  19496 2009-06-15 13:39 A4071031235
-rw-r--r-- 1 st105788 anjin   1508 2009-06-15 13:39 A4287186513
-rw-r--r-- 1 st105788 anjin    400 2009-06-15 13:39 A543296160
-rw-r--r-- 1 st105788 anjin   2676 2009-06-15 13:39 A576932308
-rw-r--r-- 1 st105788 anjin   1332 2009-06-15 13:39 A607593425
-rw-r--r-- 1 st105788 anjin   5828 2009-06-15 13:39 A651907835
-rw-r--r-- 1 st105788 anjin   2444 2009-06-15 13:39 A754944260
-rw-r--r-- 1 st105788 anjin   1240 2009-06-15 13:39 A791485
-rw-r--r-- 1 st105788 anjin   3120 2009-06-15 13:39 A844609745

test.1.er/M_r0.er:
total 60
drwxr-xr-x 2 st105788 anjin  4096 2009-06-15 13:39 archives
-rw-r--r-- 1 st105788 anjin 16384 2009-06-15 13:39 data.frameinfo
-rw-r--r-- 1 st105788 anjin     0 2009-06-15 13:39 dyntext
-rw-r--r-- 1 st105788 anjin  2657 2009-06-15 13:39 log.xml
-rw-r--r-- 1 st105788 anjin 29861 2009-06-15 13:39 map.xml
-rw-r--r-- 1 st105788 anjin  2304 2009-06-15 13:39 overview
-rw-r--r-- 1 st105788 anjin 16384 2009-06-15 13:39 profile

test.1.er/M_r0.er/archives:
total 0
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 er_mpview.so.fxUMRWnB2W7 -&gt; ../../archives/A2495007177
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 hello.hSUrf5gXXm4 -&gt; ../../archives/A1479257043
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 ld-2.7.so.drR3eZWu100 -&gt; ../../archives/A2847002775
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libc-2.7.so.haaplc45uHc -&gt; ../../archives/A1299411686
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libcollector.so.fxUMRWnB2W7 -&gt; ../../archives/A4071031235
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libdl-2.7.so.haaplc45uHc -&gt; ../../archives/A1524770319
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libm-2.7.so.haaplc45uHc -&gt; ../../archives/A3731486934
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libmca_common_sm.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A1372595803
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libmpi.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A1541555208
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libnsl-2.7.so.haaplc45uHc -&gt; ../../archives/A1105646370
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libnss_compat-2.7.so.haaplc45uHc -&gt; ../../archives/A1156162824
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libnss_files-2.7.so.haaplc45uHc -&gt; ../../archives/A1020827017
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 libnss_nis-2.7.so.haaplc45uHc -&gt; ../../archives/A754944260
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libopen-pal.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A3244963041
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libopen-rte.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A3495201517
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libpthread-2.7.so.haaplc45uHc -&gt; ../../archives/A1120068125
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 libutil-2.7.so.haaplc45uHc -&gt; ../../archives/A543296160
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 libz.so.1.2.3.3.UXwQ5Zq997d -&gt; ../../archives/A309860530
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_allocator_basic.so.08_UaWfHvW0 -&gt; ../../archives/A3607266356
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_allocator_bucket.so.08_UaWfHvW0 -&gt; ../../archives/A3038028125
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_bml_r2.so.08_UaWfHvW0 -&gt; ../../archives/A1965872078
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_btl_self.so.08_UaWfHvW0 -&gt; ../../archives/A2863489633
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_btl_sm.so.08_UaWfHvW0 -&gt; ../../archives/A2628085332
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_btl_tcp.so.08_UaWfHvW0 -&gt; ../../archives/A3911045865
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_carto_auto_detect.so.08_UaWfHvW0 -&gt; ../../archives/A1624689557
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_carto_file.so.08_UaWfHvW0 -&gt; ../../archives/A1137133350
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_basic.so.08_UaWfHvW0 -&gt; ../../archives/A3835460118
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_hierarch.so.08_UaWfHvW0 -&gt; ../../archives/A1790244868
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_inter.so.08_UaWfHvW0 -&gt; ../../archives/A2775785482
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_self.so.08_UaWfHvW0 -&gt; ../../archives/A1454987564
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_coll_sm.so.08_UaWfHvW0 -&gt; ../../archives/A154432543
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_sync.so.08_UaWfHvW0 -&gt; ../../archives/A3252039816
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_tuned.so.08_UaWfHvW0 -&gt; ../../archives/A3648561707
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_dpm_orte.so.08_UaWfHvW0 -&gt; ../../archives/A3219106871
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_ess_env.so.08_UaWfHvW0 -&gt; ../../archives/A1437804225
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_grpcomm_bad.so.08_UaWfHvW0 -&gt; ../../archives/A191452387
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_grpcomm_basic.so.08_UaWfHvW0 -&gt; ../../archives/A4287186513
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_mpool_fake.so.08_UaWfHvW0 -&gt; ../../archives/A3760992247
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_mpool_rdma.so.08_UaWfHvW0 -&gt; ../../archives/A576932308
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_mpool_sm.so.08_UaWfHvW0 -&gt; ../../archives/A2901485964
lrwxrwxrwx 1 st105788 anjin 22 2009-06-15 13:39 mca_notifier_syslog.so.08_UaWfHvW0 -&gt; ../../archives/A791485
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_oob_tcp.so.08_UaWfHvW0 -&gt; ../../archives/A2708436963
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_osc_pt2pt.so.08_UaWfHvW0 -&gt; ../../archives/A1267378599
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_osc_rdma.so.08_UaWfHvW0 -&gt; ../../archives/A2369457763
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_paffinity_linux.so.08_UaWfHvW0 -&gt; ../../archives/A3261151085
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_pml_cm.so.08_UaWfHvW0 -&gt; ../../archives/A651907835
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_pml_csum.so.08_UaWfHvW0 -&gt; ../../archives/A1877586533
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_pml_ob1.so.08_UaWfHvW0 -&gt; ../../archives/A1096690429
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_pml_v.so.08_UaWfHvW0 -&gt; ../../archives/A2927666762
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_pubsub_orte.so.08_UaWfHvW0 -&gt; ../../archives/A607593425
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_rcache_vma.so.08_UaWfHvW0 -&gt; ../../archives/A844609745
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_rml_oob.so.08_UaWfHvW0 -&gt; ../../archives/A396208440
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_routed_binomial.so.08_UaWfHvW0 -&gt; ../../archives/A3003421601
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_routed_direct.so.08_UaWfHvW0 -&gt; ../../archives/A331661572
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_routed_linear.so.08_UaWfHvW0 -&gt; ../../archives/A3804511592

test.1.er/M_r1.er:
total 60
drwxr-xr-x 2 st105788 anjin  4096 2009-06-15 13:39 archives
-rw-r--r-- 1 st105788 anjin 16384 2009-06-15 13:39 data.frameinfo
-rw-r--r-- 1 st105788 anjin     0 2009-06-15 13:39 dyntext
-rw-r--r-- 1 st105788 anjin  1563 2009-06-15 13:39 log.xml
-rw-r--r-- 1 st105788 anjin 30206 2009-06-15 13:39 map.xml
-rw-r--r-- 1 st105788 anjin  1280 2009-06-15 13:39 overview
-rw-r--r-- 1 st105788 anjin 16384 2009-06-15 13:39 profile

test.1.er/M_r1.er/archives:
total 0
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 er_mpview.so.fxUMRWnB2W7 -&gt; ../../archives/A2495007177
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 hello.hSUrf5gXXm4 -&gt; ../../archives/A1479257043
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 ld-2.7.so.drR3eZWu100 -&gt; ../../archives/A2847002775
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libc-2.7.so.haaplc45uHc -&gt; ../../archives/A1299411686
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libcollector.so.fxUMRWnB2W7 -&gt; ../../archives/A4071031235
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libdl-2.7.so.haaplc45uHc -&gt; ../../archives/A1524770319
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libm-2.7.so.haaplc45uHc -&gt; ../../archives/A3731486934
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libmca_common_sm.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A1372595803
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libmpi.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A1541555208
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libnsl-2.7.so.haaplc45uHc -&gt; ../../archives/A1105646370
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libnss_compat-2.7.so.haaplc45uHc -&gt; ../../archives/A1156162824
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libnss_files-2.7.so.haaplc45uHc -&gt; ../../archives/A1020827017
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 libnss_nis-2.7.so.haaplc45uHc -&gt; ../../archives/A754944260
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libopen-pal.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A3244963041
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libopen-rte.so.0.0.0.X-kXdT_0-T7 -&gt; ../../archives/A3495201517
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 libpthread-2.7.so.haaplc45uHc -&gt; ../../archives/A1120068125
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 libutil-2.7.so.haaplc45uHc -&gt; ../../archives/A543296160
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 libz.so.1.2.3.3.UXwQ5Zq997d -&gt; ../../archives/A309860530
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_allocator_basic.so.08_UaWfHvW0 -&gt; ../../archives/A3607266356
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_allocator_bucket.so.08_UaWfHvW0 -&gt; ../../archives/A3038028125
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_bml_r2.so.08_UaWfHvW0 -&gt; ../../archives/A1965872078
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_btl_self.so.08_UaWfHvW0 -&gt; ../../archives/A2863489633
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_btl_sm.so.08_UaWfHvW0 -&gt; ../../archives/A2628085332
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_btl_tcp.so.08_UaWfHvW0 -&gt; ../../archives/A3911045865
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_carto_auto_detect.so.08_UaWfHvW0 -&gt; ../../archives/A1624689557
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_carto_file.so.08_UaWfHvW0 -&gt; ../../archives/A1137133350
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_basic.so.08_UaWfHvW0 -&gt; ../../archives/A3835460118
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_hierarch.so.08_UaWfHvW0 -&gt; ../../archives/A1790244868
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_inter.so.08_UaWfHvW0 -&gt; ../../archives/A2775785482
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_self.so.08_UaWfHvW0 -&gt; ../../archives/A1454987564
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_coll_sm.so.08_UaWfHvW0 -&gt; ../../archives/A154432543
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_sync.so.08_UaWfHvW0 -&gt; ../../archives/A3252039816
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_coll_tuned.so.08_UaWfHvW0 -&gt; ../../archives/A3648561707
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_dpm_orte.so.08_UaWfHvW0 -&gt; ../../archives/A3219106871
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_ess_env.so.08_UaWfHvW0 -&gt; ../../archives/A1437804225
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_grpcomm_bad.so.08_UaWfHvW0 -&gt; ../../archives/A191452387
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_grpcomm_basic.so.08_UaWfHvW0 -&gt; ../../archives/A4287186513
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_mpool_fake.so.08_UaWfHvW0 -&gt; ../../archives/A3760992247
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_mpool_rdma.so.08_UaWfHvW0 -&gt; ../../archives/A576932308
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_mpool_sm.so.08_UaWfHvW0 -&gt; ../../archives/A2901485964
lrwxrwxrwx 1 st105788 anjin 22 2009-06-15 13:39 mca_notifier_syslog.so.08_UaWfHvW0 -&gt; ../../archives/A791485
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_oob_tcp.so.08_UaWfHvW0 -&gt; ../../archives/A2708436963
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_osc_pt2pt.so.08_UaWfHvW0 -&gt; ../../archives/A1267378599
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_osc_rdma.so.08_UaWfHvW0 -&gt; ../../archives/A2369457763
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_paffinity_linux.so.08_UaWfHvW0 -&gt; ../../archives/A3261151085
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_pml_cm.so.08_UaWfHvW0 -&gt; ../../archives/A651907835
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_pml_csum.so.08_UaWfHvW0 -&gt; ../../archives/A1877586533
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_pml_ob1.so.08_UaWfHvW0 -&gt; ../../archives/A1096690429
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_pml_v.so.08_UaWfHvW0 -&gt; ../../archives/A2927666762
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_pubsub_orte.so.08_UaWfHvW0 -&gt; ../../archives/A607593425
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_rcache_vma.so.08_UaWfHvW0 -&gt; ../../archives/A844609745
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_rml_oob.so.08_UaWfHvW0 -&gt; ../../archives/A396208440
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_routed_binomial.so.08_UaWfHvW0 -&gt; ../../archives/A3003421601
lrwxrwxrwx 1 st105788 anjin 25 2009-06-15 13:39 mca_routed_direct.so.08_UaWfHvW0 -&gt; ../../archives/A331661572
lrwxrwxrwx 1 st105788 anjin 26 2009-06-15 13:39 mca_routed_linear.so.08_UaWfHvW0 -&gt; ../../archives/A3804511592
----------------------------------------------------------------------------------------------------------------------------------


collect  -M OPENMPI  mpirun  -np  2  --  hello 
Creating experiment database test.4.er ...
Hello, world.  I am 1 of 2 on anjin-IBM-31
Hello, world.  I am 0 of 2 on anjin-IBM-31

analyzer  test.1.er
I have included screenshot (DIR=screenshots) of the profiler in the folder attached with this email.

The application itself (source code or binary). BTW i am using ubuntu 8.04 32 bit machine
Everything is included in the folder

And again thanks for helping me

Regards,
Leo P.




________________________________
From: Nikolay Molchanov &lt;Nikolay.Molchanov_at_[hidden]&gt;
To: Leo P. &lt;leo_7892003_at_[hidden]&gt;
Cc: devel_at_[hidden]
Sent: Tuesday, 16 June, 2009 12:34:59 AM
Subject: Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option

Hi Leo,

I think there is something wrong in the way the application is built,
or in the way you run collect. We run MPI tests every night, so at
least simple tests should work just fine. Could you, please, send me 
more details about your MPI and your application?

1. MPI version strings

which mpicc

mpicc -version

which mpirun

mpirun -version

2. Analyzer version strings

collect -V

analyzer -V

3. Experiment listing

ls -lR test.1.er

4. Log file (starting from the collect command):

collect  -M OPENMPI  mpirun  -np  2  --  hello 

...

analyzer  test.1.er

...

5. The application itself (source code or binary).

I'll run this application on our system, and let you know 
the result.

Thanks,
Nik 

Leo P. wrote: 
HI Nik,

I tried the Sun Studio Performance Analyzer and it was able to profile
to application but not the openMPI source code. The source code was
empty in Sun Studio Performance Analyzer. I tried but i was not able to
get the profiling information of openMPI.

So i installed Vampir trace and i was able to get otf while suggested i
got the profiling information. But i fail to understand what i should
do now. 
1. Am i suppose to download additional information for trace
information visualization? Is the additional software this <a href="https://www.ssl-id.net/www.vampir.eu/index.html">https://www.ssl-id.net/www.vampir.eu/index.html</a>
2. If not how can i visualize the trace information i got vampir-trace.

Sorry for bugging everyone so much about this. But i spend a lot of
time and this alone and i am not getting output. 

Leo P.




________________________________
From: Nikolay Molchanov &lt;Nikolay.Molchanov_at_[hidden]&gt;
To: leo_7892003_at_[hidden]
Cc: Open MPI
Developers &lt;devel_at_[hidden]&gt;
Sent: Monday, 15 June,
2009 12:18:50 PM
Subject: Re: [OMPI
devel] complete newbie question regarding --enable-mpi-profile option

Hi Leo,

If you want to get the profiling information, you can try Sun Studio
Performance Analyzer. You can download SS12.1 EA release -
here is a pointer to the web page:

<a href="http://developers.sun.com/sunstudio/downloads/express/index.jsp">http://developers.sun.com/sunstudio/downloads/express/index.jsp</a>

Final version will be available soon, but EA should be good enough 
to try :-) I suggest you to download EA as a tar file, extract it, 
set PATH, and run the following commands:

$ collect  -M  OPENMPI  mpirun  -np  2  --  hello 

Note: it is necessary to add &quot;--&quot; after mpirun arguments.
This command will create a &quot;test.1.er&quot; directory (experiment).
To view the experiment, run &quot;analyzer&quot; (Java GUI tool):

$ analyzer  test.1.er

If everything works properly you will see MPI Timeline and other tabs,
that show profiling information. Please, make sure you have java 1.5 or
newer in your PATH.

Thanks,
Nik

Leo P. wrote: 
Also i was wondering
whether gdb could be used with openMPI. I know
about -d option in mpirun but i need to use gdb if its possible. I
think i have done all the necessary things to enable profiling and
debuging but i am missing something here. 

Sorry guys i forgot i could debug shared library function in gdb. :) So
currently using 

$ mpirun -np 1 xterm -e gdb hello 
 
to debug the openMPI source.  

If only i could get the profiling information, it could help me a lot. 

Leo :)


________________________________
From: Leo
P. &lt;leo_7892003_at_[hidden]&gt;
To: Open MPI
Developers &lt;devel_at_[hidden]&gt;
Sent: Monday, 15
June,
2009 12:36:34 AM
Subject: [OMPI
devel]
complete newbie question regarding --enable-mpi-profile option


Hi
Everyone, 

I have been trying to enabling profiling of openMPI code. 

Earlier i also saw a thread [<a href="http://www.open-mpi.org/community/lists/users/2008/04/5369.php">http://www.open-mpi.org/community/lists/users/2008/04/5369.php</a>]
which talks about using --enable-mpi-profile option in configure which
i have done. But i have not been able to get hold of profiling data. I
tried installing vampir from <a href="https://computing.llnl.gov/code/vgv.html#installations">https://computing.llnl.gov/code/vgv.html#installations</a> but i am not been able to install. 

So i wanted to know how people are profiling the core openMPI code. 

I am a complete newbie and would appreciate any information. 

Also i was wondering whether gdb could be used with openMPI. I know
about -d option in mpirun but i need to use gdb if its possible. I
think i have done all the necessary things to enable profiling and
debuging but i am missing something here. 

Currentl y i am configuring openMPI using following param
 ./configure -enable-debug --with-devel-headers --enable-trace
--enable-mpi-profile --enable-mem-debug 


Leo P.

________________________________
 Explore and discover exciting holidays and getaways
with Yahoo! India Travel Click here!
________________________________
 Bollywood news, movie reviews, film trailers and
more! Click here. 

________________________________

_______________________________________________
devel mailing list
devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 

________________________________
 Own a website.Get an unlimited package.Pay next to
nothing.*Click here!.



      Bollywood news, movie reviews, film trailers and more! Go to <a href="http://in.movies.yahoo.com/">http://in.movies.yahoo.com/</a>
<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6241/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6241/prof.tar.gz">prof.tar.gz</a>
</ul>
<!-- attachment="prof.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6238.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
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
