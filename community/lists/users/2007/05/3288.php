<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 15:15:19 2007" -->
<!-- isoreceived="20070518191519" -->
<!-- sent="Fri, 18 May 2007 13:15:08 -0600" -->
<!-- isosent="20070518191508" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F6303_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 15:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3287.php">Tim Prins: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Reply:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Reply:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I was wondering why we would see ~ 100MB/s difference between mpich-mx
<br>
and Open MPI with SendRecv from the Intel MPI benchmarks.  Maybe I'm
<br>
missing turning something on?
<br>
<p>The hardware is:
<br>
<pre>
---
# mx_info -q
MX Version: 1.1.7
MX Build: root_at_tocc1:/projects/global/SOURCES/myricom/mx-1.1.7 Fri May
11 15:32:14 MDT 2007
1 Myrinet board installed.
The MX driver is configured to support up to 4 instances and 1024 nodes.
===================================================================
Instance #0:  333.2 MHz LANai, 133.3 MHz PCI bus, 4 MB SRAM
        Status:         Running, P0: Link up, P1: Link up
        MAC Address:    00:60:dd:48:ba:ae
        Product code:   M3F2-PCIXE-4
---
--- Open MPI 1.2.2 ---
$ cat
/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/BUILD_ENV 
# Build Environment:
USE=&quot;doc icc modules mx torque&quot;
COMPILER=&quot;intel-9.1-f040-c045&quot;
CC=&quot;icc&quot;
CXX=&quot;icpc&quot;
CLINKER=&quot;icc&quot;
FC=&quot;ifort&quot;
F77=&quot;ifort&quot;
CFLAGS=&quot; -O3 -pipe&quot;
CXXFLAGS=&quot; -O3 -pipe&quot;
FFLAGS=&quot; -O3&quot;
MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
MODULE_FILE=&quot;openmpi-1.2.2_mx_intel-9.1-f040-c045&quot;
INSTALL_DEST=&quot;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2
_mx&quot;
CONF_FLAGS=&quot; --with-mx=/opt/mx --with-tm=/apps/torque&quot;
$ env | grep OMPI
OMPI_MCA_rmaps_base_schedule_policy=node
OMPI_MCA_btl=^openib
OMPI_MCA_oob_tcp_include=eth0
OMPI_MCA_mpi_keep_hostnames=1
$ mpiexec -pernode -np 2 IMB-MPI1 SendRecv
#---------------------------------------------------
#    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part    
#---------------------------------------------------
# Date       : Fri May 18 13:11:20 2007
# Machine    : x86_64# System     : Linux
# Release    : 2.6.9-42.0.10.EL_lustre.1.4.10smp
# Version    : #1 SMP Tue May 15 19:56:35 MDT 2007
#
# Minimum message length in bytes:   0
# Maximum message length in bytes:   4194304
#
# MPI_Datatype                   :   MPI_BYTE 
# MPI_Datatype for reductions    :   MPI_FLOAT
# MPI_Op                         :   MPI_SUM  
#
#
# List of Benchmarks to run:
# Sendrecv
#-----------------------------------------------------------------------
------
# Benchmarking Sendrecv 
# #processes = 2 
#-----------------------------------------------------------------------
------
       #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
Mbytes/sec
            0         1000         4.38         4.38         4.38
0.00
            1         1000         6.03         6.03         6.03
0.32
            2         1000         6.02         6.03         6.02
0.63
            4         1000         6.10         6.10         6.10
1.25
            8         1000         6.27         6.27         6.27
2.43
           16         1000         6.23         6.23         6.23
4.90
           32         1000         6.50         6.50         6.50
9.39
           64         1000         6.48         6.49         6.49
18.82
          128         1000         8.02         8.02         8.02
30.45
          256         1000         8.69         8.69         8.69
56.20
          512         1000        10.16        10.16        10.16
96.08
         1024         1000        13.51        13.52        13.52
144.48
         2048         1000        17.19        17.19        17.19
227.25
         4096         1000        24.21        24.21        24.21
322.67
         8192         1000        38.10        38.10        38.10
410.13
        16384         1000        64.46        64.46        64.46
484.82
        32768         1000       116.23       116.24       116.23
537.69
        65536          640       210.11       210.11       210.11
594.91
       131072          320       401.53       401.56       401.54
622.58
       262144          160       900.95       901.01       900.98
554.94
       524288           80      1909.00      1909.20      1909.10
523.78
      1048576           40      3868.03      3868.40      3868.21
517.01
      2097152           20      8316.95      8317.46      8317.20
480.92
      4194304           10     19240.28     19241.38     19240.83
415.77
--- mpich-mx --
$ cat
/apps/x86_64/mpi/mpich-mx/intel-9.1-f040-c045/mpich-mx-1.2.7..4/BUILD_EN
V 
# Build Environment:
USE=&quot;doc icc modules romio&quot;
COMPILER=&quot;intel-9.1-f040-c045&quot;
CC=&quot;icc&quot;
CXX=&quot;icpc&quot;
CLINKER=&quot;icc&quot;
FC=&quot;ifort&quot;
F77=&quot;ifort&quot;
CFLAGS=&quot;-O3 -pipe -xP -I/opt/mx/include&quot;
CXXFLAGS=&quot;-O3 -pipe -xP -I/opt/mx/include&quot;
FFLAGS=&quot;-O3 -xP&quot;
MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
MODULE_FILE=&quot;mpich-mx-1.2.7..4_intel-9.1-f040-c045&quot;
INSTALL_DEST=&quot;/apps/x86_64/mpi/mpich-mx/intel-9.1-f040-c045/mpich-mx-1.2
.7..4&quot;
$ mpiexec -comm=mx -pernode -np 2 IMB-MPI1 SendRecv
#---------------------------------------------------
#    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part    
#---------------------------------------------------
# Date       : Fri May 18 12:59:21 2007
# Machine    : x86_64# System     : Linux
# Release    : 2.6.9-42.0.10.EL_lustre.1.4.10smp
# Version    : #1 SMP Tue May 15 19:56:35 MDT 2007
#
# Minimum message length in bytes:   0
# Maximum message length in bytes:   4194304
#
# MPI_Datatype                   :   MPI_BYTE 
# MPI_Datatype for reductions    :   MPI_FLOAT
# MPI_Op                         :   MPI_SUM  
#
#
# List of Benchmarks to run:
# Sendrecv
#-----------------------------------------------------------------------
------
# Benchmarking Sendrecv 
# #processes = 2 
#-----------------------------------------------------------------------
------
       #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
Mbytes/sec
            0         1000         3.69         3.70         3.69
0.00
            1         1000         3.84         3.84         3.84
0.50
            2         1000         3.83         3.83         3.83
1.00
            4         1000         3.96         3.96         3.96
1.93
            8         1000         4.01         4.01         4.01
3.81
           16         1000         4.07         4.08         4.08
7.49
           32         1000         4.19         4.19         4.19
14.56
           64         1000         4.32         4.32         4.32
28.27
          128         1000         4.75         4.75         4.75
51.35
          256         1000         6.72         6.73         6.72
72.58
          512         1000         8.32         8.32         8.32
117.32
         1024         1000        11.79        11.81        11.80
165.39
         2048         1000        15.36        15.38        15.37
254.03
         4096         1000        20.64        20.65        20.65
378.38
         8192         1000        34.89        34.90        34.90
447.71
        16384         1000        59.81        59.83        59.82
522.32
        32768         1000       105.03       105.06       105.04
594.90
        65536          640       195.61       195.61       195.61
639.02
       131072          320       363.85       363.85       363.85
687.09
       262144          160       693.94       693.97       693.96
720.49
       524288           80      1369.70      1369.79      1369.74
730.04
      1048576           40      2680.43      2680.60      2680.51
746.10
      2097152           20      5308.65      5309.50      5309.08
753.37
      4194304           10     10551.50     10551.91     10551.70
758.16
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3287.php">Tim Prins: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Reply:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Reply:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
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
