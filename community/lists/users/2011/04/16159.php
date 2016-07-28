<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 12:40:30 2011" -->
<!-- isoreceived="20110406164030" -->
<!-- sent="Wed, 6 Apr 2011 11:40:21 -0500" -->
<!-- isosent="20110406164021" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="BANLkTim1nvNdJh+xtTTM7BWmR7-o=R8Njg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BANLkTinkBnqP6rmSwHsa57DhLtjPaMcGSA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-06 12:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16158.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16158.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16161.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
also, I'm not sure if I'm reading the results right. According to the last
<br>
run, did using the sun compilers (update 1 )  result in higher performance
<br>
with sunct?
<br>
<p>On Wed, Apr 6, 2011 at 11:38 AM, Nehemiah Dacres &lt;dacresni_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; some tests I did. I hope this isn't an abuse of the list. please tell me if
</span><br>
<span class="quotelev1">&gt; it is but thanks to all those who helped me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this  goes to say that the sun MPI works with programs not compiled with
</span><br>
<span class="quotelev1">&gt; sun&#146;s compilers.
</span><br>
<span class="quotelev1">&gt; this first test was run as a base case to see if MPI works., the sedcond
</span><br>
<span class="quotelev1">&gt; run is to see the speed up using OpenIB provides
</span><br>
<span class="quotelev1">&gt; jian_at_therock ~]$ mpirun -machinefile list
</span><br>
<span class="quotelev1">&gt; /opt/iba/src/mpi_apps/mpi_stress/mpi_stress
</span><br>
<span class="quotelev1">&gt; Start mpi_stress at Wed Apr  6 10:56:29 2011
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Size (bytes)         TxMessages      TxMillionBytes/s       TxMessages/s
</span><br>
<span class="quotelev1">&gt;              32              10000                  2.77           86485.67
</span><br>
<span class="quotelev1">&gt;              64              10000                  5.76           90049.42
</span><br>
<span class="quotelev1">&gt;             128              10000                 11.00           85923.85
</span><br>
<span class="quotelev1">&gt;             256              10000                 18.78           73344.43
</span><br>
<span class="quotelev1">&gt;             512              10000                 34.47           67331.98
</span><br>
<span class="quotelev1">&gt;            1024              10000                 34.81           33998.09
</span><br>
<span class="quotelev1">&gt;            2048              10000                 17.31            8454.27
</span><br>
<span class="quotelev1">&gt;            4096              10000                 18.34            4476.61
</span><br>
<span class="quotelev1">&gt;            8192              10000                 25.43            3104.28
</span><br>
<span class="quotelev1">&gt;           16384              10000                 15.56             949.50
</span><br>
<span class="quotelev1">&gt;           32768              10000                 13.95             425.74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          65536              10000                  9.88             150.79
</span><br>
<span class="quotelev1">&gt;          131072               8192                 11.05              84.31
</span><br>
<span class="quotelev1">&gt;          262144               4096                 13.12              50.04
</span><br>
<span class="quotelev1">&gt;          524288               2048                 16.54              31.55
</span><br>
<span class="quotelev1">&gt;         1048576               1024                 19.92              18.99
</span><br>
<span class="quotelev1">&gt;         2097152                512                 22.54              10.75
</span><br>
<span class="quotelev1">&gt;         4194304                256                 25.46               6.07
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iteration 0 : errors = 0, total = 0 (495 secs, Wed Apr  6 11:04:44 2011)
</span><br>
<span class="quotelev1">&gt; After 1 iteration(s), 8 mins and 15 secs, total errors = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the infiniband run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ mpirun -mca orte_base_help_aggregate btl,openib,self,
</span><br>
<span class="quotelev1">&gt; -machinefile list /opt/iba/src/mpi_apps/mpi_stress/mpi_stress
</span><br>
<span class="quotelev1">&gt; Start mpi_stress at Wed Apr  6 11:07:06 2011
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Size (bytes)         TxMessages      TxMillionBytes/s       TxMessages/s
</span><br>
<span class="quotelev1">&gt;          32              10000                  2.72           84907.69
</span><br>
<span class="quotelev1">&gt;          64              10000                  5.83           91097.94
</span><br>
<span class="quotelev1">&gt;         128              10000                 10.75           83959.63
</span><br>
<span class="quotelev1">&gt;         256              10000                 18.53           72384.48
</span><br>
<span class="quotelev1">&gt;         512              10000                 34.96           68285.00
</span><br>
<span class="quotelev1">&gt;        1024              10000                 11.40           11133.10
</span><br>
<span class="quotelev1">&gt;        2048              10000                 20.88           10196.34
</span><br>
<span class="quotelev1">&gt;        4096              10000                 10.13            2472.13
</span><br>
<span class="quotelev1">&gt;        8192              10000                 19.32            2358.25
</span><br>
<span class="quotelev1">&gt;       16384              10000                 14.58             890.10
</span><br>
<span class="quotelev1">&gt;       32768              10000                 15.85             483.61
</span><br>
<span class="quotelev1">&gt;       65536              10000                  9.04             137.95
</span><br>
<span class="quotelev1">&gt;       131072        8192                 10.90              83.12
</span><br>
<span class="quotelev1">&gt;      262144                   4096                 13.57              51.76
</span><br>
<span class="quotelev1">&gt;      524288                  2048                 16.82              32.08
</span><br>
<span class="quotelev1">&gt;     1048576        1024                 19.10              18.21
</span><br>
<span class="quotelev1">&gt;     2097152                512                 22.13              10.55
</span><br>
<span class="quotelev1">&gt;     4194304                256                 21.66               5.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iteration 0 : errors = 0, total = 0 (511 secs, Wed Apr  6 11:15:37 2011)
</span><br>
<span class="quotelev1">&gt; After 1 iteration(s), 8 mins and 31 secs, total errors = 0
</span><br>
<span class="quotelev1">&gt; compiled with the sun compilers i think
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ mpirun -mca orte_base_help_aggregate btl,openib,self,
</span><br>
<span class="quotelev1">&gt; -machinefile list sunMpiStress
</span><br>
<span class="quotelev1">&gt; Start mpi_stress at Wed Apr  6 11:23:18 2011
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Size (bytes)         TxMessages      TxMillionBytes/s       TxMessages/s
</span><br>
<span class="quotelev1">&gt;              32              10000                  2.60           81159.60
</span><br>
<span class="quotelev1">&gt;              64              10000                  5.19           81016.95
</span><br>
<span class="quotelev1">&gt;             128              10000                 10.23           79953.34
</span><br>
<span class="quotelev1">&gt;             256              10000                 16.74           65406.52
</span><br>
<span class="quotelev1">&gt;             512              10000                 23.71           46304.92
</span><br>
<span class="quotelev1">&gt;            1024              10000                 54.62           53340.73
</span><br>
<span class="quotelev1">&gt;            2048              10000                 45.75           22340.58
</span><br>
<span class="quotelev1">&gt;            4096              10000                 29.32            7158.87
</span><br>
<span class="quotelev1">&gt;            8192              10000                 28.61            3492.77
</span><br>
<span class="quotelev1">&gt;           16384              10000                184.03           11232.26
</span><br>
<span class="quotelev1">&gt;           32768              10000                215.69            6582.21
</span><br>
<span class="quotelev1">&gt;           65536              10000                229.88            3507.64
</span><br>
<span class="quotelev1">&gt;          131072               8192                231.64            1767.25
</span><br>
<span class="quotelev1">&gt;          262144               4096                220.73             842.00
</span><br>
<span class="quotelev1">&gt;          524288               2048                121.61             231.95
</span><br>
<span class="quotelev1">&gt;         1048576               1024                 66.54              63.46
</span><br>
<span class="quotelev1">&gt;         2097152                512                 44.20              21.08
</span><br>
<span class="quotelev1">&gt;         4194304                256                 45.17              10.77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iteration 0 : errors = 0, total = 0 (93 secs, Wed Apr  6 11:24:52 2011)
</span><br>
<span class="quotelev1">&gt; After 1 iteration(s), 1 mins and 33 secs, total errors = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sanity check: was sunMpiStress compiled using the sun compilers or oracle
</span><br>
<span class="quotelev1">&gt; compilerrs ?
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ which mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ ldd sunMpiStress
</span><br>
<span class="quotelev1">&gt;     libmpi.so.0 =&gt; /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002b5d2c6c3000)
</span><br>
<span class="quotelev1">&gt;     libopen-rte.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libopen-rte.so.0 (0x00002b5d2c8c1000)
</span><br>
<span class="quotelev1">&gt;     libopen-pal.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64/libopen-pal.so.0 (0x00002b5d2ca19000)
</span><br>
<span class="quotelev1">&gt;     libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003361400000)
</span><br>
<span class="quotelev1">&gt;     librt.so.1 =&gt; /lib64/librt.so.1 (0x000000335f400000)
</span><br>
<span class="quotelev1">&gt;     libm.so.6 =&gt; /lib64/libm.so.6 (0x000000335e400000)
</span><br>
<span class="quotelev1">&gt;     libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000335e800000)
</span><br>
<span class="quotelev1">&gt;     libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000336ba00000)
</span><br>
<span class="quotelev1">&gt;     libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000335ec00000)
</span><br>
<span class="quotelev1">&gt;     libc.so.6 =&gt; /lib64/libc.so.6 (0x000000335e000000)
</span><br>
<span class="quotelev1">&gt;     /lib64/ld-linux-x86-64.so.2 (0x000000335dc00000)
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ which mpicc
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpicc
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ mpicc /opt/iba/src/mpi_apps/mpi_stress/mpi_stress.c -o
</span><br>
<span class="quotelev1">&gt; sunMpiStress --showme
</span><br>
<span class="quotelev1">&gt; cc /opt/iba/src/mpi_apps/mpi_stress/mpi_stress.c -o sunMpiStress
</span><br>
<span class="quotelev1">&gt; -I/opt/SUNWhpc/HPC8.2.1c/sun/include/64
</span><br>
<span class="quotelev1">&gt; -I/opt/SUNWhpc/HPC8.2.1c/sun/include/64/openmpi -R/opt/mx/lib/lib64
</span><br>
<span class="quotelev1">&gt; -R/opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64
</span><br>
<span class="quotelev1">&gt; -L/opt/SUNWhpc/HPC8.2.1c/sun/lib/lib64 -lmpi -lopen-rte -lopen-pal -lnsl
</span><br>
<span class="quotelev1">&gt; -lrt -lm -ldl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ which cc
</span><br>
<span class="quotelev1">&gt; /opt/sun/sunstudio12.1/bin/cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; looks like it!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Nehemiah I. Dacres
System Administrator
Advanced Technology Group Saint Louis University
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16158.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16158.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16160.php">Eugene Loh: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16161.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
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
