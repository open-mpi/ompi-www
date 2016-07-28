<?
$subject_val = "[OMPI users] Unable to include mpich library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 03:14:33 2010" -->
<!-- isoreceived="20100625071433" -->
<!-- sent="Fri, 25 Jun 2010 12:44:28 +0530" -->
<!-- isosent="20100625071428" -->
<!-- name="Srinivas Gopal" -->
<!-- email="srinivas13.2_at_[hidden]" -->
<!-- subject="[OMPI users] Unable to include mpich library" -->
<!-- id="AANLkTik3idEgW-lXeQ387-Xaq6vCCiP7Tj89kLRZEeNO_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Unable to include mpich library<br>
<strong>From:</strong> Srinivas Gopal (<em>srinivas13.2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 03:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13407.php">Götz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13405.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13407.php">Götz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13407.php">Götz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I'm trying to build CCSM4 for which I'm using open mpi 1.4.1. $MPICH_PATH
<br>
is set /usr/local (output of $which mpirun is /usr/local/bin/mpirun) and
<br>
LIB_MPI is set to $(MPICH_PATH)/lib in its Macros file. However build
<br>
process exits with the following error:
<br>
*.....4/scratch//d_f45/lib -lcsm_share -lmct -lmpeu -lpio
<br>
-L/home/srinivas/netcdf/lib -lnetcdf  -L/usr/local/lib
<br>
-lmpich-L/home/srinivas/pnetcdf/lib -lpnetcdf
<br>
ld: cannot find -lmpich
<br>
gmake: *** [/home/srinivas/ccsm4/scratch//d_f45/run/ccsm.exe] Error 1*
<br>
<p>All though /usr/local/lib exists it says it cannot find -lmpich. Contents of
<br>
/usr/local/lib is as follows:
<br>
*total 4764
<br>
-rwxr-xr-x 1 root root    991 2010-06-06 00:01 libmca_common_sm.la
<br>
lrwxrwxrwx 1 root root     25 2010-06-06 00:01 libmca_common_sm.so -&gt;
<br>
libmca_common_sm.so.1.0.0
<br>
lrwxrwxrwx 1 root root     25 2010-06-06 00:01 libmca_common_sm.so.1 -&gt;
<br>
libmca_common_sm.so.1.0.0
<br>
-rwxr-xr-x 1 root root  13566 2010-06-06 00:01 libmca_common_sm.so.1.0.0
<br>
-rwxr-xr-x 1 root root   1041 2010-06-06 00:01 libmpi_cxx.la
<br>
lrwxrwxrwx 1 root root     19 2010-06-06 00:01 libmpi_cxx.so -&gt;
<br>
libmpi_cxx.so.0.0.0
<br>
lrwxrwxrwx 1 root root     19 2010-06-06 00:01 libmpi_cxx.so.0 -&gt;
<br>
libmpi_cxx.so.0.0.0
<br>
-rwxr-xr-x 1 root root 135913 2010-06-06 00:01 libmpi_cxx.so.0.0.0
<br>
-rwxr-xr-x 1 root root   1045 2010-06-06 00:01 libmpi_f77.la
<br>
lrwxrwxrwx 1 root root     19 2010-06-06 00:01 libmpi_f77.so -&gt;
<br>
libmpi_f77.so.0.0.0
<br>
lrwxrwxrwx 1 root root     19 2010-06-06 00:01 libmpi_f77.so.0 -&gt;
<br>
libmpi_f77.so.0.0.0
<br>
-rwxr-xr-x 1 root root 362563 2010-06-06 00:01 libmpi_f77.so.0.0.0
<br>
-rwxr-xr-x 1 root root   1045 2010-06-06 00:01 libmpi_f90.la
<br>
lrwxrwxrwx 1 root root     19 2010-06-06 00:01 libmpi_f90.so -&gt;
<br>
libmpi_f90.so.0.0.0
<br>
lrwxrwxrwx 1 root root     19 2010-06-06 00:01 libmpi_f90.so.0 -&gt;
<br>
libmpi_f90.so.0.0.0
<br>
-rwxr-xr-x 1 root root  18024 2010-06-06 00:01 libmpi_f90.so.0.0.0
<br>
-rwxr-xr-x 1 root root    996 2010-06-06 00:01 libmpi.la
<br>
lrwxrwxrwx 1 root root     15 2010-06-06 00:01 libmpi.so -&gt; libmpi.so.0.0.1
<br>
lrwxrwxrwx 1 root root     15 2010-06-06 00:01 libmpi.so.0 -&gt;
<br>
libmpi.so.0.0.1
<br>
-rwxr-xr-x 1 root root 865544 2010-06-06 00:01 libmpi.so.0.0.1
<br>
-rwxr-xr-x 1 root root    997 2010-06-06 00:00 libopenmpi_malloc.la
<br>
lrwxrwxrwx 1 root root     26 2010-06-06 00:00 libopenmpi_malloc.so -&gt;
<br>
libopenmpi_malloc.so.0.0.0
<br>
lrwxrwxrwx 1 root root     26 2010-06-06 00:00 libopenmpi_malloc.so.0 -&gt;
<br>
libopenmpi_malloc.so.0.0.0
<br>
-rwxr-xr-x 1 root root   5923 2010-06-06 00:00 libopenmpi_malloc.so.0.0.0
<br>
-rwxr-xr-x 1 root root    966 2010-06-06 00:00 libopen-pal.la
<br>
lrwxrwxrwx 1 root root     20 2010-06-06 00:00 libopen-pal.so -&gt;
<br>
libopen-pal.so.0.0.0
<br>
lrwxrwxrwx 1 root root     20 2010-06-06 00:00 libopen-pal.so.0 -&gt;
<br>
libopen-pal.so.0.0.0
<br>
-rwxr-xr-x 1 root root 400658 2010-06-06 00:00 libopen-pal.so.0.0.0
<br>
-rwxr-xr-x 1 root root    996 2010-06-06 00:00 libopen-rte.la
<br>
lrwxrwxrwx 1 root root     20 2010-06-06 00:00 libopen-rte.so -&gt;
<br>
libopen-rte.so.0.0.0
<br>
lrwxrwxrwx 1 root root     20 2010-06-06 00:00 libopen-rte.so.0 -&gt;
<br>
libopen-rte.so.0.0.0
<br>
-rwxr-xr-x 1 root root 359832 2010-06-06 00:00 libopen-rte.so.0.0.0
<br>
-rw-r--r-- 1 root root 238478 2010-06-06 00:01 libotf.a
<br>
-rwxr-xr-x 1 root root    891 2010-06-06 00:01 libotf.la
<br>
-rw-r--r-- 1 root root 356316 2010-06-06 00:01 libvt.a
<br>
-rw-r--r-- 1 root root 123778 2010-06-06 00:01 libvt.fmpi.a
<br>
-rw-r--r-- 1 root root 538458 2010-06-06 00:01 libvt.mpi.a
<br>
-rw-r--r-- 1 root root 435412 2010-06-06 00:01 libvt.omp.a
<br>
-rw-r--r-- 1 root root 616194 2010-06-06 00:01 libvt.ompi.a
<br>
-rwxr-xr-x 1 root root 284540 2010-06-06 00:01 mpi.mod
<br>
drwxr-xr-x 2 root root   4096 2010-06-06 00:01 openmpi*
<br>
<p>$mpif90 -showme -v
<br>
ifort -v
<br>
$ifort -v
<br>
Version 11.1
<br>
(Same ouput for mpicc as well)
<br>
Im using linux on x86_64
<br>
<p>Kindly let me know where I'm going wrong.
<br>
<p>Thanks and Regards,
<br>
Srinivas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13406/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13407.php">Götz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13405.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13407.php">Götz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13407.php">Götz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
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
