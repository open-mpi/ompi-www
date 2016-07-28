<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 12:38:30 2011" -->
<!-- isoreceived="20110406163830" -->
<!-- sent="Wed, 6 Apr 2011 11:38:23 -0500" -->
<!-- isosent="20110406163823" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="BANLkTinkBnqP6rmSwHsa57DhLtjPaMcGSA_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BANLkTi=ZPoQhhvLaa=fmk0ygz4NvfjYuRA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems,<br>
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 12:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16157.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16157.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
some tests I did. I hope this isn't an abuse of the list. please tell me if
<br>
it is but thanks to all those who helped me.
<br>
<p>this  goes to say that the sun MPI works with programs not compiled with
<br>
sun&#146;s compilers.
<br>
this first test was run as a base case to see if MPI works., the sedcond run
<br>
is to see the speed up using OpenIB provides
<br>
jian_at_therock ~]$ mpirun -machinefile list
<br>
/opt/iba/src/mpi_apps/mpi_stress/mpi_stress
<br>
Start mpi_stress at Wed Apr  6 10:56:29 2011
<br>
<p>&nbsp;&nbsp;Size (bytes)         TxMessages      TxMillionBytes/s       TxMessages/s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32              10000                  2.77           86485.67
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64              10000                  5.76           90049.42
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128              10000                 11.00           85923.85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256              10000                 18.78           73344.43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512              10000                 34.47           67331.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024              10000                 34.81           33998.09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048              10000                 17.31            8454.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096              10000                 18.34            4476.61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192              10000                 25.43            3104.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384              10000                 15.56             949.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768              10000                 13.95             425.74
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536              10000                  9.88             150.79
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072               8192                 11.05              84.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144               4096                 13.12              50.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288               2048                 16.54              31.55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576               1024                 19.92              18.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152                512                 22.54              10.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304                256                 25.46               6.07
<br>
<p>Iteration 0 : errors = 0, total = 0 (495 secs, Wed Apr  6 11:04:44 2011)
<br>
After 1 iteration(s), 8 mins and 15 secs, total errors = 0
<br>
<p>here is the infiniband run
<br>
<p>[jian_at_therock ~]$ mpirun -mca orte_base_help_aggregate btl,openib,self,
<br>
-machinefile list /opt/iba/src/mpi_apps/mpi_stress/mpi_stress
<br>
Start mpi_stress at Wed Apr  6 11:07:06 2011
<br>
<p>&nbsp;&nbsp;Size (bytes)         TxMessages      TxMillionBytes/s       TxMessages/s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32              10000                  2.72           84907.69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64              10000                  5.83           91097.94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128              10000                 10.75           83959.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256              10000                 18.53           72384.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512              10000                 34.96           68285.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024              10000                 11.40           11133.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048              10000                 20.88           10196.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096              10000                 10.13            2472.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192              10000                 19.32            2358.25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384              10000                 14.58             890.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768              10000                 15.85             483.61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536              10000                  9.04             137.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072        8192                 10.90              83.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;262144                   4096                 13.57              51.76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;524288                  2048                 16.82              32.08
<br>
&nbsp;&nbsp;&nbsp;1048576        1024                 19.10              18.21
<br>
&nbsp;&nbsp;&nbsp;2097152                512                 22.13              10.55
<br>
&nbsp;&nbsp;&nbsp;4194304                256                 21.66               5.16
<br>
<p>Iteration 0 : errors = 0, total = 0 (511 secs, Wed Apr  6 11:15:37 2011)
<br>
After 1 iteration(s), 8 mins and 31 secs, total errors = 0
<br>
compiled with the sun compilers i think
<br>
[jian_at_therock ~]$ mpirun -mca orte_base_help_aggregate btl,openib,self,
<br>
-machinefile list sunMpiStress
<br>
Start mpi_stress at Wed Apr  6 11:23:18 2011
<br>
<p>&nbsp;&nbsp;Size (bytes)         TxMessages      TxMillionBytes/s       TxMessages/s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32              10000                  2.60           81159.60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64              10000                  5.19           81016.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128              10000                 10.23           79953.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256              10000                 16.74           65406.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512              10000                 23.71           46304.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024              10000                 54.62           53340.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048              10000                 45.75           22340.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096              10000                 29.32            7158.87
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192              10000                 28.61            3492.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384              10000                184.03           11232.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768              10000                215.69            6582.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536              10000                229.88            3507.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072               8192                231.64            1767.25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144               4096                220.73             842.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288               2048                121.61             231.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576               1024                 66.54              63.46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152                512                 44.20              21.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304                256                 45.17              10.77
<br>
<p>Iteration 0 : errors = 0, total = 0 (93 secs, Wed Apr  6 11:24:52 2011)
<br>
After 1 iteration(s), 1 mins and 33 secs, total errors = 0
<br>
<p>sanity check: was sunMpiStress compiled using the sun compilers or oracle
<br>
compilerrs ?
<br>
[jian_at_therock ~]$ which mpirun
<br>
/opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun
<br>
[jian_at_therock ~]$ ldd sunMpiStress
<br>
&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libmpi.so.0
<br>
(0x00002b5d2c6c3000)
<br>
&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libopen-rte.so.0
<br>
(0x00002b5d2c8c1000)
<br>
&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libopen-pal.so.0
<br>
(0x00002b5d2ca19000)
<br>
&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003361400000)
<br>
&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x000000335f400000)
<br>
&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x000000335e400000)
<br>
&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000335e800000)
<br>
&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000336ba00000)
<br>
&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000335ec00000)
<br>
&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x000000335e000000)
<br>
&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000335dc00000)
<br>
[jian_at_therock ~]$ which mpicc
<br>
/opt/SUNWhpc/HPC8.2.1c/sun/bin/mpicc
<br>
[jian_at_therock ~]$ mpicc /opt/iba/src/mpi_apps/mpi_stress/mpi_stress.c -o
<br>
sunMpiStress --showme
<br>
cc /opt/iba/src/mpi_apps/mpi_stress/mpi_stress.c -o sunMpiStress
<br>
-I/opt/SUNWhpc/HPC8.2.1c/sun/include/64
<br>
-I/opt/SUNWhpc/HPC8.2.1c/sun/include/64/openmpi -R/opt/mx/lib/lib64
<br>
-R/opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64
<br>
-L/opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64 -lmpi -lopen-rte -lopen-pal -lnsl
<br>
-lrt -lm -ldl -lutil -lpthread
<br>
[jian_at_therock ~]$ which cc
<br>
/opt/sun/sunstudio12.1/bin/cc
<br>
<p>looks like it!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16157.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16157.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
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
