<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun  4 04:35:17 2006" -->
<!-- isoreceived="20060604083517" -->
<!-- sent="Sun, 04 Jun 2006 10:33:24 +0200" -->
<!-- isosent="20060604083324" -->
<!-- name="Frank" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.0.2 with XGrid on Netvolumes failed to run (wrong ownership)" -->
<!-- id="44829AD4.4060307_at_fraka-mp.de" -->
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
<strong>From:</strong> Frank (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-04 04:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1378.php">Frank: "[OMPI users] Open MPI 1.2a1r10185 and XGrid"</a>
<li><strong>Previous message:</strong> <a href="1376.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know wheter this is Open MPI or XGrid related:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -d -np 1 ./vhone
<br>
<p>with vhone installed on a local volume with XGrid environment set up 
<br>
run's successfully and the output-files belong to the user nobody (see 
<br>
attachment dirlist_xgrid_local.txt).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirund -d -np 1 ./vhone
<br>
<p>with vhone installed on a network-volume with XGrid environment set up 
<br>
failed to run successfully, 'cause each time an output file should be 
<br>
written to an error occured since the output-file belongs to the user 
<br>
who started the run (see attachment dirlist_xgrid_netvolume.txt).
<br>
<p>Without XGrid set up vhone run's just fine on network-volumes, too (see 
<br>
attachment dirlist_noxgrid_netvolume.txt).
<br>
<p>Yours,
<br>
Frank
<br>
<p>
<p>
total 117520
<br>
drwxrwxrwx   80 motte   wheel      2720 Jun  4 10:02 .
<br>
drwxrwxrwx    7 admin   wheel       238 Jun  3 13:00 ..
<br>
-rw-rw-rw-    1 motte   wheel     21508 Jun  3 13:01 .DS_Store
<br>
-rw-rw-rw-    1 motte   wheel      2999 Jun  4 09:16 Makefile
<br>
-rw-rw-rw-    1 motte   wheel      2969 Jun  3 12:58 Makefile.orig
<br>
-rw-rw-rw-    1 motte   wheel      3007 Jun  3 13:00 Makefile~
<br>
-rw-r--r--    1 nobody  wheel   5248423 Jun  4 09:25 Tsod3_1000.0000
<br>
-rw-r--r--    1 nobody  wheel   5248423 Jun  4 09:28 Tsod3_1001.0000
<br>
-rw-r--r--    1 nobody  wheel   5248423 Jun  4 09:30 Tsod3_1002.0000
<br>
-rw-r--r--    1 nobody  wheel   5248423 Jun  4 09:35 Tsod3_1003.0000
<br>
-rw-r--r--    1 nobody  wheel   5276612 Jun  4 09:25 Tsod3daa.000
<br>
-rw-r--r--    1 nobody  wheel   5276612 Jun  4 09:28 Tsod3dab.000
<br>
-rw-r--r--    1 nobody  wheel   5276612 Jun  4 09:30 Tsod3dac.000
<br>
-rw-r--r--    1 nobody  wheel   5276612 Jun  4 09:35 Tsod3dad.000
<br>
-rw-r--r--    1 nobody  wheel       890 Jun  4 09:35 Tsod3hst
<br>
-rw-r--r--    1 nobody  wheel  17304731 Jun  4 09:35 Tsod3mvy
<br>
-rw-r--r--    1 motte   wheel         0 Jun  4 10:02 dirlist.txt
<br>
-rw-rw-rw-    1 motte   wheel      2273 Jun  3 12:58 dtcon.f
<br>
-rw-r--r--    1 motte   wheel      4360 Jun  4 09:21 dtcon.o
<br>
-rw-rw-rw-    1 motte   wheel       920 Jun  3 12:58 dump.f
<br>
-rw-r--r--    1 motte   wheel      2500 Jun  4 09:21 dump.o
<br>
-rw-rw-rw-    1 motte   wheel      3583 Jun  3 12:58 evolve.f
<br>
-rw-r--r--    1 motte   wheel      4288 Jun  4 09:21 evolve.o
<br>
-rw-rw-rw-    1 motte   wheel      1709 Jun  3 12:58 flatten.f
<br>
-rw-r--r--    1 motte   wheel      1292 Jun  4 09:21 flatten.o
<br>
-rw-rw-rw-    1 motte   wheel      2640 Jun  3 12:58 forces.f
<br>
-rw-r--r--    1 motte   wheel      2440 Jun  4 09:21 forces.o
<br>
-rw-rw-rw-    1 motte   wheel      1287 Jun  3 12:58 global.h
<br>
-rw-rw-rw-    1 motte   wheel      2153 Jun  3 12:58 grid.f
<br>
-rw-r--r--    1 motte   wheel      1232 Jun  4 09:21 grid.o
<br>
-rw-rw-rw-    1 motte   wheel      1329 Jun  3 12:58 imagexy.f
<br>
-rw-r--r--    1 motte   wheel      2800 Jun  4 09:21 imagexy.o
<br>
-rw-rw-rw-    1 motte   wheel      1003 Jun  3 12:58 imagexz.f
<br>
-rw-r--r--    1 motte   wheel      2080 Jun  4 09:21 imagexz.o
<br>
-rw-rw-rw-    1 motte   wheel      1001 Jun  3 12:58 imageyz.f
<br>
-rw-r--r--    1 motte   wheel      2080 Jun  4 09:21 imageyz.o
<br>
-rw-rw-rw-    1 motte   wheel       179 Jun  3 13:11 indat
<br>
-rw-rw-rw-    1 motte   wheel       179 Jun  3 12:58 indat~
<br>
-rw-rw-rw-    1 motte   wheel      4664 Jun  3 13:11 init.f
<br>
-rw-r--r--    1 motte   wheel      6136 Jun  4 09:21 init.o
<br>
-rw-rw-rw-    1 motte   wheel      4664 Jun  3 12:58 init_Tsod3
<br>
-rw-rw-rw-    1 motte   wheel      4566 Jun  3 12:58 init_bow
<br>
-rw-rw-rw-    1 motte   wheel      4664 Jun  3 12:58 init_sod
<br>
-rw-rw-rw-    1 motte   wheel      4770 Jun  3 12:58 init_swb
<br>
-rw-rw-rw-    1 motte   wheel      3450 Jun  3 12:58 parabola.f
<br>
-rw-r--r--    1 motte   wheel      1660 Jun  4 09:21 parabola.o
<br>
-rw-rw-rw-    1 motte   wheel      2152 Jun  3 12:58 paraset.f
<br>
-rw-r--r--    1 motte   wheel      1028 Jun  4 09:21 paraset.o
<br>
-rw-rw-rw-    1 motte   wheel      3313 Jun  3 12:58 ppm.f
<br>
-rw-r--r--    1 motte   wheel      3004 Jun  4 09:21 ppm.o
<br>
-rw-rw-rw-    1 motte   wheel      2956 Jun  3 12:58 prin.f
<br>
-rw-r--r--    1 motte   wheel      5632 Jun  4 09:21 prin.o
<br>
-rw-rw-rw-    1 motte   wheel      5194 Jun  3 12:58 remap.f
<br>
-rw-r--r--    1 motte   wheel      4520 Jun  4 09:21 remap.o
<br>
-rw-rw-rw-    1 motte   wheel      3884 Jun  3 12:58 riemann.f
<br>
-rw-r--r--    1 motte   wheel      1888 Jun  4 09:21 riemann.o
<br>
-rw-rw-rw-    1 motte   wheel      1242 Jun  3 12:59 sweep.h
<br>
-rw-rw-rw-    1 motte   wheel      4171 Jun  3 12:59 sweepbc.f
<br>
-rw-r--r--    1 motte   wheel      8592 Jun  4 09:21 sweepbc.o
<br>
-rw-rw-rw-    1 motte   wheel       200 Jun  3 12:59 sweepsize.h
<br>
-rw-rw-rw-    1 motte   wheel      1617 Jun  3 12:59 sweepx.f
<br>
-rw-r--r--    1 motte   wheel      2180 Jun  4 09:21 sweepx.o
<br>
-rw-rw-rw-    1 motte   wheel      1769 Jun  3 12:59 sweepxi.f
<br>
-rw-r--r--    1 motte   wheel      2244 Jun  4 09:21 sweepxi.o
<br>
-rw-rw-rw-    1 motte   wheel      1848 Jun  3 12:59 sweepy.f
<br>
-rw-r--r--    1 motte   wheel      2276 Jun  4 09:21 sweepy.o
<br>
-rw-rw-rw-    1 motte   wheel      1718 Jun  3 12:59 sweepyi.f
<br>
-rw-r--r--    1 motte   wheel      2212 Jun  4 09:21 sweepyi.o
<br>
-rw-rw-rw-    1 motte   wheel      2145 Jun  3 12:59 sweepz.f
<br>
-rw-r--r--    1 motte   wheel      2652 Jun  4 09:21 sweepz.o
<br>
-rwxr-xr-x    1 motte   wheel    362872 Jun  4 09:21 vhone
<br>
-rw-rw-rw-    1 motte   wheel       711 Jun  3 12:59 vhone.cmd
<br>
-rw-rw-rw-    1 motte   wheel       659 Jun  3 12:59 vhone.cmd~
<br>
-rw-rw-rw-    1 motte   wheel      8328 Jun  3 12:59 vhone.f
<br>
-rw-rw-rw-    1 motte   wheel      8314 Jun  3 12:59 vhone.f~
<br>
-rw-r--r--    1 motte   wheel     11564 Jun  4 09:21 vhone.o
<br>
-rw-rw-rw-    1 motte   wheel      1544 Jun  3 12:59 volume.f
<br>
-rw-r--r--    1 motte   wheel      1956 Jun  4 09:21 volume.o
<br>
-rw-rw-rw-    1 motte   wheel      1949 Jun  3 12:59 zone.h
<br>
-rw-rw-rw-    1 motte   wheel      1949 Jun  3 12:58 zone.h~
<br>
<p>
<p>
total 2024
<br>
-rw-r--r--    1 motte  staff       0 Jun  4 09:43 #Makefile#
<br>
drwxrwxrwx   72 motte  staff    2370 Jun  4 10:01 .
<br>
drwxrwxrwx    7 motte  staff     264 Jun  3 19:03 ..
<br>
-rw-rw-rw-    1 motte  staff   21508 Jun  3 19:14 .DS_Store
<br>
-rw-rw-rw-    1 motte  staff    2999 Jun  4 09:52 Makefile
<br>
-rw-rw-rw-    1 motte  staff    2969 Jun  3 12:58 Makefile.orig
<br>
-rw-rw-rw-    1 motte  staff    3007 Jun  3 13:00 Makefile~
<br>
-rw-r--r--    1 motte  staff       0 Jun  4 09:54 Tsod3hst
<br>
-rw-r--r--    1 motte  staff       0 Jun  4 10:01 dirlist.txt
<br>
-rw-rw-rw-    1 motte  staff    2273 Jun  3 12:58 dtcon.f
<br>
-rw-r--r--    1 motte  staff    4360 Jun  4 09:52 dtcon.o
<br>
-rw-rw-rw-    1 motte  staff     920 Jun  3 12:58 dump.f
<br>
-rw-r--r--    1 motte  staff    2500 Jun  4 09:52 dump.o
<br>
-rw-rw-rw-    1 motte  staff    3583 Jun  3 12:58 evolve.f
<br>
-rw-r--r--    1 motte  staff    4288 Jun  4 09:52 evolve.o
<br>
-rw-rw-rw-    1 motte  staff    1709 Jun  3 12:58 flatten.f
<br>
-rw-r--r--    1 motte  staff    1292 Jun  4 09:52 flatten.o
<br>
-rw-rw-rw-    1 motte  staff    2640 Jun  3 12:58 forces.f
<br>
-rw-r--r--    1 motte  staff    2440 Jun  4 09:52 forces.o
<br>
-rw-rw-rw-    1 motte  staff    1287 Jun  3 12:58 global.h
<br>
-rw-rw-rw-    1 motte  staff    2153 Jun  3 12:58 grid.f
<br>
-rw-r--r--    1 motte  staff    1232 Jun  4 09:52 grid.o
<br>
-rw-rw-rw-    1 motte  staff    1329 Jun  3 12:58 imagexy.f
<br>
-rw-r--r--    1 motte  staff    2800 Jun  4 09:53 imagexy.o
<br>
-rw-rw-rw-    1 motte  staff    1003 Jun  3 12:58 imagexz.f
<br>
-rw-r--r--    1 motte  staff    2080 Jun  4 09:53 imagexz.o
<br>
-rw-rw-rw-    1 motte  staff    1001 Jun  3 12:58 imageyz.f
<br>
-rw-r--r--    1 motte  staff    2080 Jun  4 09:53 imageyz.o
<br>
-rw-rw-rw-    1 motte  staff     179 Jun  3 17:50 indat
<br>
-rw-rw-rw-    1 motte  staff     179 Jun  3 15:54 indat~
<br>
-rw-rw-rw-    1 motte  staff    4664 Jun  3 17:49 init.f
<br>
-rw-r--r--    1 motte  staff    6136 Jun  4 09:52 init.o
<br>
-rw-rw-rw-    1 motte  staff    4664 Jun  3 12:58 init_Tsod3
<br>
-rw-rw-rw-    1 motte  staff    4566 Jun  3 12:58 init_bow
<br>
-rw-rw-rw-    1 motte  staff    4664 Jun  3 12:58 init_sod
<br>
-rw-rw-rw-    1 motte  staff    4770 Jun  3 12:58 init_swb
<br>
-rw-rw-rw-    1 motte  staff    3450 Jun  3 12:58 parabola.f
<br>
-rw-r--r--    1 motte  staff    1660 Jun  4 09:52 parabola.o
<br>
-rw-rw-rw-    1 motte  staff    2152 Jun  3 12:58 paraset.f
<br>
-rw-r--r--    1 motte  staff    1028 Jun  4 09:52 paraset.o
<br>
-rw-rw-rw-    1 motte  staff    3313 Jun  3 12:58 ppm.f
<br>
-rw-r--r--    1 motte  staff    3004 Jun  4 09:52 ppm.o
<br>
-rw-rw-rw-    1 motte  staff    2956 Jun  3 12:58 prin.f
<br>
-rw-r--r--    1 motte  staff    5632 Jun  4 09:52 prin.o
<br>
-rw-rw-rw-    1 motte  staff    5194 Jun  3 12:58 remap.f
<br>
-rw-r--r--    1 motte  staff    4520 Jun  4 09:53 remap.o
<br>
-rw-rw-rw-    1 motte  staff    3884 Jun  3 12:58 riemann.f
<br>
-rw-r--r--    1 motte  staff    1888 Jun  4 09:53 riemann.o
<br>
-rw-rw-rw-    1 motte  staff    1242 Jun  3 12:59 sweep.h
<br>
-rw-rw-rw-    1 motte  staff    4171 Jun  3 12:59 sweepbc.f
<br>
-rw-r--r--    1 motte  staff    8592 Jun  4 09:53 sweepbc.o
<br>
-rw-rw-rw-    1 motte  staff     200 Jun  3 12:59 sweepsize.h
<br>
-rw-rw-rw-    1 motte  staff    1617 Jun  3 12:59 sweepx.f
<br>
-rw-r--r--    1 motte  staff    2180 Jun  4 09:53 sweepx.o
<br>
-rw-rw-rw-    1 motte  staff    1769 Jun  3 12:59 sweepxi.f
<br>
-rw-r--r--    1 motte  staff    2244 Jun  4 09:53 sweepxi.o
<br>
-rw-rw-rw-    1 motte  staff    1848 Jun  3 12:59 sweepy.f
<br>
-rw-r--r--    1 motte  staff    2276 Jun  4 09:53 sweepy.o
<br>
-rw-rw-rw-    1 motte  staff    1718 Jun  3 12:59 sweepyi.f
<br>
-rw-r--r--    1 motte  staff    2212 Jun  4 09:53 sweepyi.o
<br>
-rw-rw-rw-    1 motte  staff    2145 Jun  3 12:59 sweepz.f
<br>
-rw-r--r--    1 motte  staff    2652 Jun  4 09:53 sweepz.o
<br>
-rwxr-xr-x    1 motte  staff  362872 Jun  4 09:53 vhone
<br>
-rw-rw-rw-    1 motte  staff     711 Jun  3 12:59 vhone.cmd
<br>
-rw-rw-rw-    1 motte  staff     659 Jun  3 12:59 vhone.cmd~
<br>
-rw-rw-rw-    1 motte  staff    8328 Jun  3 12:59 vhone.f
<br>
-rw-rw-rw-    1 motte  staff    8314 Jun  3 12:59 vhone.f~
<br>
-rw-r--r--    1 motte  staff   11564 Jun  4 09:53 vhone.o
<br>
-rw-rw-rw-    1 motte  staff    1544 Jun  3 12:59 volume.f
<br>
-rw-r--r--    1 motte  staff    1956 Jun  4 09:53 volume.o
<br>
-rw-rw-rw-    1 motte  staff    1949 Jun  3 20:13 zone.h
<br>
-rw-rw-rw-    1 motte  staff    1949 Jun  3 13:26 zone.h~
<br>
<p>
<p>
total 118192
<br>
-rw-r--r--    1 motte  staff         0 Jun  4 09:43 #Makefile#
<br>
drwxrwxrwx   82 motte  staff      2710 Jun  4 10:16 .
<br>
drwxrwxrwx    7 motte  staff       264 Jun  3 19:03 ..
<br>
-rw-rw-rw-    1 motte  staff     21508 Jun  3 19:14 .DS_Store
<br>
-rw-rw-rw-    1 motte  staff      2999 Jun  4 09:52 Makefile
<br>
-rw-rw-rw-    1 motte  staff      2969 Jun  3 12:58 Makefile.orig
<br>
-rw-rw-rw-    1 motte  staff      3007 Jun  3 13:00 Makefile~
<br>
-rw-r--r--    1 motte  staff   5248423 Jun  4 10:06 Tsod3_1000.0000
<br>
-rw-r--r--    1 motte  staff   5248423 Jun  4 10:09 Tsod3_1001.0000
<br>
-rw-r--r--    1 motte  staff   5248423 Jun  4 10:11 Tsod3_1002.0000
<br>
-rw-r--r--    1 motte  staff   5248423 Jun  4 10:13 Tsod3_1003.0000
<br>
-rw-r--r--    1 motte  staff   5276612 Jun  4 10:06 Tsod3daa.000
<br>
-rw-r--r--    1 motte  staff   5276612 Jun  4 10:09 Tsod3dab.000
<br>
-rw-r--r--    1 motte  staff   5276612 Jun  4 10:11 Tsod3dac.000
<br>
-rw-r--r--    1 motte  staff   5276612 Jun  4 10:14 Tsod3dad.000
<br>
-rw-r--r--    1 motte  staff       890 Jun  4 10:14 Tsod3hst
<br>
-rw-r--r--    1 motte  staff  17304731 Jun  4 10:13 Tsod3mvy
<br>
-rw-r--r--    1 motte  staff         0 Jun  4 10:15 dirlist_noxgrid_netvolume.txt
<br>
-rw-r--r--    1 motte  staff      4248 Jun  4 10:01 dirlist_xgrid_netvolume.txt
<br>
-rw-rw-rw-    1 motte  staff      2273 Jun  3 12:58 dtcon.f
<br>
-rw-r--r--    1 motte  staff      4360 Jun  4 10:04 dtcon.o
<br>
-rw-rw-rw-    1 motte  staff       920 Jun  3 12:58 dump.f
<br>
-rw-r--r--    1 motte  staff      2500 Jun  4 10:04 dump.o
<br>
-rw-rw-rw-    1 motte  staff      3583 Jun  3 12:58 evolve.f
<br>
-rw-r--r--    1 motte  staff      4288 Jun  4 10:04 evolve.o
<br>
-rw-rw-rw-    1 motte  staff      1709 Jun  3 12:58 flatten.f
<br>
-rw-r--r--    1 motte  staff      1292 Jun  4 10:04 flatten.o
<br>
-rw-rw-rw-    1 motte  staff      2640 Jun  3 12:58 forces.f
<br>
-rw-r--r--    1 motte  staff      2440 Jun  4 10:04 forces.o
<br>
-rw-rw-rw-    1 motte  staff      1287 Jun  3 12:58 global.h
<br>
-rw-rw-rw-    1 motte  staff      2153 Jun  3 12:58 grid.f
<br>
-rw-r--r--    1 motte  staff      1232 Jun  4 10:04 grid.o
<br>
-rw-rw-rw-    1 motte  staff      1329 Jun  3 12:58 imagexy.f
<br>
-rw-r--r--    1 motte  staff      2800 Jun  4 10:04 imagexy.o
<br>
-rw-rw-rw-    1 motte  staff      1003 Jun  3 12:58 imagexz.f
<br>
-rw-r--r--    1 motte  staff      2080 Jun  4 10:04 imagexz.o
<br>
-rw-rw-rw-    1 motte  staff      1001 Jun  3 12:58 imageyz.f
<br>
-rw-r--r--    1 motte  staff      2080 Jun  4 10:04 imageyz.o
<br>
-rw-rw-rw-    1 motte  staff       179 Jun  3 17:50 indat
<br>
-rw-rw-rw-    1 motte  staff       179 Jun  3 15:54 indat~
<br>
-rw-rw-rw-    1 motte  staff      4664 Jun  3 17:49 init.f
<br>
-rw-r--r--    1 motte  staff      6136 Jun  4 10:04 init.o
<br>
-rw-rw-rw-    1 motte  staff      4664 Jun  3 12:58 init_Tsod3
<br>
-rw-rw-rw-    1 motte  staff      4566 Jun  3 12:58 init_bow
<br>
-rw-rw-rw-    1 motte  staff      4664 Jun  3 12:58 init_sod
<br>
-rw-rw-rw-    1 motte  staff      4770 Jun  3 12:58 init_swb
<br>
-rw-rw-rw-    1 motte  staff      3450 Jun  3 12:58 parabola.f
<br>
-rw-r--r--    1 motte  staff      1660 Jun  4 10:04 parabola.o
<br>
-rw-rw-rw-    1 motte  staff      2152 Jun  3 12:58 paraset.f
<br>
-rw-r--r--    1 motte  staff      1028 Jun  4 10:04 paraset.o
<br>
-rw-rw-rw-    1 motte  staff      3313 Jun  3 12:58 ppm.f
<br>
-rw-r--r--    1 motte  staff      3004 Jun  4 10:04 ppm.o
<br>
-rw-rw-rw-    1 motte  staff      2956 Jun  3 12:58 prin.f
<br>
-rw-r--r--    1 motte  staff      5632 Jun  4 10:04 prin.o
<br>
-rw-rw-rw-    1 motte  staff      5194 Jun  3 12:58 remap.f
<br>
-rw-r--r--    1 motte  staff      4520 Jun  4 10:04 remap.o
<br>
-rw-rw-rw-    1 motte  staff      3884 Jun  3 12:58 riemann.f
<br>
-rw-r--r--    1 motte  staff      1888 Jun  4 10:04 riemann.o
<br>
-rw-rw-rw-    1 motte  staff      1242 Jun  3 12:59 sweep.h
<br>
-rw-rw-rw-    1 motte  staff      4171 Jun  3 12:59 sweepbc.f
<br>
-rw-r--r--    1 motte  staff      8592 Jun  4 10:04 sweepbc.o
<br>
-rw-rw-rw-    1 motte  staff       200 Jun  3 12:59 sweepsize.h
<br>
-rw-rw-rw-    1 motte  staff      1617 Jun  3 12:59 sweepx.f
<br>
-rw-r--r--    1 motte  staff      2180 Jun  4 10:04 sweepx.o
<br>
-rw-rw-rw-    1 motte  staff      1769 Jun  3 12:59 sweepxi.f
<br>
-rw-r--r--    1 motte  staff      2244 Jun  4 10:04 sweepxi.o
<br>
-rw-rw-rw-    1 motte  staff      1848 Jun  3 12:59 sweepy.f
<br>
-rw-r--r--    1 motte  staff      2276 Jun  4 10:04 sweepy.o
<br>
-rw-rw-rw-    1 motte  staff      1718 Jun  3 12:59 sweepyi.f
<br>
-rw-r--r--    1 motte  staff      2212 Jun  4 10:04 sweepyi.o
<br>
-rw-rw-rw-    1 motte  staff      2145 Jun  3 12:59 sweepz.f
<br>
-rw-r--r--    1 motte  staff      2652 Jun  4 10:04 sweepz.o
<br>
-rwxr-xr-x    1 motte  staff    362872 Jun  4 10:04 vhone
<br>
-rw-rw-rw-    1 motte  staff       711 Jun  3 12:59 vhone.cmd
<br>
-rw-rw-rw-    1 motte  staff       659 Jun  3 12:59 vhone.cmd~
<br>
-rw-rw-rw-    1 motte  staff      8328 Jun  3 12:59 vhone.f
<br>
-rw-rw-rw-    1 motte  staff      8314 Jun  3 12:59 vhone.f~
<br>
-rw-r--r--    1 motte  staff     11564 Jun  4 10:04 vhone.o
<br>
-rw-rw-rw-    1 motte  staff      1544 Jun  3 12:59 volume.f
<br>
-rw-r--r--    1 motte  staff      1956 Jun  4 10:04 volume.o
<br>
-rw-rw-rw-    1 motte  staff      1949 Jun  3 20:13 zone.h
<br>
-rw-rw-rw-    1 motte  staff      1949 Jun  3 13:26 zone.h~
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1378.php">Frank: "[OMPI users] Open MPI 1.2a1r10185 and XGrid"</a>
<li><strong>Previous message:</strong> <a href="1376.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
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
