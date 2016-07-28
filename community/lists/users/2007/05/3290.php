<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 15:58:53 2007" -->
<!-- isoreceived="20070518195853" -->
<!-- sent="Fri, 18 May 2007 13:58:41 -0600" -->
<!-- isosent="20070518195841" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F6304_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51781225-6306-4DE7-8D91-B1A7E7A7AA45_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-18 15:58:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>In reply to:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Much better thanks!
<br>
<p><pre>
---
$ env | grep OMPI
OMPI_MCA_rmaps_base_schedule_policy=node
OMPI_MCA_pml=cm
OMPI_MCA_btl=^openib
OMPI_MCA_oob_tcp_include=eth0
OMPI_MCA_mpi_keep_hostnames=1
$ mpiexec -pernode -np 2 IMB-MPI1 SendRecv
#---------------------------------------------------
#    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part    
#---------------------------------------------------
# Date       : Fri May 18 13:56:36 2007
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
            0         1000         4.06         4.06         4.06
0.00
            1         1000         4.22         4.22         4.22
0.45
            2         1000         4.40         4.40         4.40
0.87
            4         1000         4.36         4.36         4.36
1.75
            8         1000         4.35         4.35         4.35
3.50
           16         1000         4.42         4.42         4.42
6.90
           32         1000         4.59         4.59         4.59
13.29
           64         1000         4.70         4.71         4.71
25.93
          128         1000         5.17         5.17         5.17
47.18
          256         1000         7.24         7.25         7.24
67.38
          512         1000         8.90         8.91         8.91
109.63
         1024         1000        12.34        12.35        12.34
158.21
         2048         1000        15.76        15.78        15.77
247.57
         4096         1000        21.24        21.25        21.24
367.73
         8192         1000        35.53        35.54        35.53
439.71
        16384         1000        60.57        60.58        60.57
515.89
        32768         1000       105.18       105.19       105.18
594.15
        65536          640       197.25       197.25       197.25
633.70
       131072          320       365.81       365.82       365.81
683.40 
       262144          160       696.87       696.88       696.87
717.49
       524288           80      1376.61      1376.72      1376.67
726.36
      1048576           40      2688.57      2691.88      2690.23
742.98
      2097152           20      5311.70      5312.20      5311.95
752.98
      4194304           10     10557.51     10558.80     10558.15
757.66
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of gshipman
&gt; Sent: Friday, May 18, 2007 1:48 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Intel MPI SendRcv Performance using 
&gt; MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4
&gt; 
&gt; Can you try adding the following param:
&gt; 
&gt; OMPI_MCA_pml=cm
&gt; 
&gt; and report the results?
&gt; 
&gt; Thanks,
&gt; 
&gt; Galen
&gt; 
&gt; 
&gt; On May 18, 2007, at 1:15 PM, Maestas, Christopher Daniel wrote:
&gt; 
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; I was wondering why we would see ~ 100MB/s difference 
&gt; between mpich-mx
&gt; &gt; and Open MPI with SendRecv from the Intel MPI benchmarks.  Maybe I'm
&gt; &gt; missing turning something on?
&gt; &gt;
&gt; &gt; The hardware is:
&gt; &gt; ---
&gt; &gt; # mx_info -q
&gt; &gt; MX Version: 1.1.7
&gt; &gt; MX Build: 
&gt; root_at_tocc1:/projects/global/SOURCES/myricom/mx-1.1.7 Fri May
&gt; &gt; 11 15:32:14 MDT 2007
&gt; &gt; 1 Myrinet board installed.
&gt; &gt; The MX driver is configured to support up to 4 instances and 1024  
&gt; &gt; nodes.
&gt; &gt; ===================================================================
&gt; &gt; Instance #0:  333.2 MHz LANai, 133.3 MHz PCI bus, 4 MB SRAM
&gt; &gt;         Status:         Running, P0: Link up, P1: Link up
&gt; &gt;         MAC Address:    00:60:dd:48:ba:ae
&gt; &gt;         Product code:   M3F2-PCIXE-4
&gt; &gt; ---
&gt; &gt;
&gt; &gt; --- Open MPI 1.2.2 ---
&gt; &gt; $ cat
&gt; &gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/ 
&gt; &gt; BUILD_ENV
&gt; &gt; # Build Environment:
&gt; &gt; USE=&quot;doc icc modules mx torque&quot;
&gt; &gt; COMPILER=&quot;intel-9.1-f040-c045&quot;
&gt; &gt; CC=&quot;icc&quot;
&gt; &gt; CXX=&quot;icpc&quot;
&gt; &gt; CLINKER=&quot;icc&quot;
&gt; &gt; FC=&quot;ifort&quot;
&gt; &gt; F77=&quot;ifort&quot;
&gt; &gt; CFLAGS=&quot; -O3 -pipe&quot;
&gt; &gt; CXXFLAGS=&quot; -O3 -pipe&quot;
&gt; &gt; FFLAGS=&quot; -O3&quot;
&gt; &gt; MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
&gt; &gt; MODULE_FILE=&quot;openmpi-1.2.2_mx_intel-9.1-f040-c045&quot;
&gt; &gt; INSTALL_DEST=&quot;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/ 
&gt; &gt; openmpi-1.2.2
&gt; &gt; _mx&quot;
&gt; &gt; CONF_FLAGS=&quot; --with-mx=/opt/mx --with-tm=/apps/torque&quot;
&gt; &gt; $ env | grep OMPI
&gt; &gt; OMPI_MCA_rmaps_base_schedule_policy=node
&gt; &gt; OMPI_MCA_btl=^openib
&gt; &gt; OMPI_MCA_oob_tcp_include=eth0
&gt; &gt; OMPI_MCA_mpi_keep_hostnames=1
&gt; &gt; $ mpiexec -pernode -np 2 IMB-MPI1 SendRecv
&gt; &gt; #---------------------------------------------------
&gt; &gt; #    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
&gt; &gt; #---------------------------------------------------
&gt; &gt; # Date       : Fri May 18 13:11:20 2007
&gt; &gt; # Machine    : x86_64# System     : Linux
&gt; &gt; # Release    : 2.6.9-42.0.10.EL_lustre.1.4.10smp
&gt; &gt; # Version    : #1 SMP Tue May 15 19:56:35 MDT 2007
&gt; &gt;
&gt; &gt; #
&gt; &gt; # Minimum message length in bytes:   0
&gt; &gt; # Maximum message length in bytes:   4194304
&gt; &gt; #
&gt; &gt; # MPI_Datatype                   :   MPI_BYTE
&gt; &gt; # MPI_Datatype for reductions    :   MPI_FLOAT
&gt; &gt; # MPI_Op                         :   MPI_SUM
&gt; &gt; #
&gt; &gt; #
&gt; &gt;
&gt; &gt; # List of Benchmarks to run:
&gt; &gt;
&gt; &gt; # Sendrecv
&gt; &gt;
&gt; &gt; 
&gt; #-------------------------------------------------------------
&gt; -------- 
&gt; &gt; --
&gt; &gt; ------
&gt; &gt; # Benchmarking Sendrecv
&gt; &gt; # #processes = 2
&gt; &gt; 
&gt; #-------------------------------------------------------------
&gt; -------- 
&gt; &gt; --
&gt; &gt; ------
&gt; &gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
&gt; &gt; Mbytes/sec
&gt; &gt;             0         1000         4.38         4.38         4.38
&gt; &gt; 0.00
&gt; &gt;             1         1000         6.03         6.03         6.03
&gt; &gt; 0.32
&gt; &gt;             2         1000         6.02         6.03         6.02
&gt; &gt; 0.63
&gt; &gt;             4         1000         6.10         6.10         6.10
&gt; &gt; 1.25
&gt; &gt;             8         1000         6.27         6.27         6.27
&gt; &gt; 2.43
&gt; &gt;            16         1000         6.23         6.23         6.23
&gt; &gt; 4.90
&gt; &gt;            32         1000         6.50         6.50         6.50
&gt; &gt; 9.39
&gt; &gt;            64         1000         6.48         6.49         6.49
&gt; &gt; 18.82
&gt; &gt;           128         1000         8.02         8.02         8.02
&gt; &gt; 30.45
&gt; &gt;           256         1000         8.69         8.69         8.69
&gt; &gt; 56.20
&gt; &gt;           512         1000        10.16        10.16        10.16
&gt; &gt; 96.08
&gt; &gt;          1024         1000        13.51        13.52        13.52
&gt; &gt; 144.48
&gt; &gt;          2048         1000        17.19        17.19        17.19
&gt; &gt; 227.25
&gt; &gt;          4096         1000        24.21        24.21        24.21
&gt; &gt; 322.67
&gt; &gt;          8192         1000        38.10        38.10        38.10
&gt; &gt; 410.13
&gt; &gt;         16384         1000        64.46        64.46        64.46
&gt; &gt; 484.82
&gt; &gt;         32768         1000       116.23       116.24       116.23
&gt; &gt; 537.69
&gt; &gt;         65536          640       210.11       210.11       210.11
&gt; &gt; 594.91
&gt; &gt;        131072          320       401.53       401.56       401.54
&gt; &gt; 622.58
&gt; &gt;        262144          160       900.95       901.01       900.98
&gt; &gt; 554.94
&gt; &gt;        524288           80      1909.00      1909.20      1909.10
&gt; &gt; 523.78
&gt; &gt;       1048576           40      3868.03      3868.40      3868.21
&gt; &gt; 517.01
&gt; &gt;       2097152           20      8316.95      8317.46      8317.20
&gt; &gt; 480.92
&gt; &gt;       4194304           10     19240.28     19241.38     19240.83
&gt; &gt; 415.77
&gt; &gt;
&gt; &gt; --- mpich-mx --
&gt; &gt; $ cat
&gt; &gt; /apps/x86_64/mpi/mpich-mx/intel-9.1-f040-c045/mpich-mx-1.2.7..4/ 
&gt; &gt; BUILD_EN
&gt; &gt; V
&gt; &gt; # Build Environment:
&gt; &gt; USE=&quot;doc icc modules romio&quot;
&gt; &gt; COMPILER=&quot;intel-9.1-f040-c045&quot;
&gt; &gt; CC=&quot;icc&quot;
&gt; &gt; CXX=&quot;icpc&quot;
&gt; &gt; CLINKER=&quot;icc&quot;
&gt; &gt; FC=&quot;ifort&quot;
&gt; &gt; F77=&quot;ifort&quot;
&gt; &gt; CFLAGS=&quot;-O3 -pipe -xP -I/opt/mx/include&quot;
&gt; &gt; CXXFLAGS=&quot;-O3 -pipe -xP -I/opt/mx/include&quot;
&gt; &gt; FFLAGS=&quot;-O3 -xP&quot;
&gt; &gt; MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
&gt; &gt; MODULE_FILE=&quot;mpich-mx-1.2.7..4_intel-9.1-f040-c045&quot;
&gt; &gt; INSTALL_DEST=&quot;/apps/x86_64/mpi/mpich-mx/intel-9.1-f040-c045/mpich- 
&gt; &gt; mx-1.2
&gt; &gt; .7.4&quot;
&gt; &gt;
&gt; &gt; $ mpiexec -comm=mx -pernode -np 2 IMB-MPI1 SendRecv
&gt; &gt;
&gt; &gt; #---------------------------------------------------
&gt; &gt; #    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
&gt; &gt; #---------------------------------------------------
&gt; &gt; # Date       : Fri May 18 12:59:21 2007
&gt; &gt; # Machine    : x86_64# System     : Linux
&gt; &gt; # Release    : 2.6.9-42.0.10.EL_lustre.1.4.10smp
&gt; &gt; # Version    : #1 SMP Tue May 15 19:56:35 MDT 2007
&gt; &gt;
&gt; &gt; #
&gt; &gt; # Minimum message length in bytes:   0
&gt; &gt; # Maximum message length in bytes:   4194304
&gt; &gt; #
&gt; &gt; # MPI_Datatype                   :   MPI_BYTE
&gt; &gt; # MPI_Datatype for reductions    :   MPI_FLOAT
&gt; &gt; # MPI_Op                         :   MPI_SUM
&gt; &gt; #
&gt; &gt; #
&gt; &gt;
&gt; &gt; # List of Benchmarks to run:
&gt; &gt;
&gt; &gt; # Sendrecv
&gt; &gt;
&gt; &gt; 
&gt; #-------------------------------------------------------------
&gt; -------- 
&gt; &gt; --
&gt; &gt; ------
&gt; &gt; # Benchmarking Sendrecv
&gt; &gt; # #processes = 2
&gt; &gt; 
&gt; #-------------------------------------------------------------
&gt; -------- 
&gt; &gt; --
&gt; &gt; ------
&gt; &gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
&gt; &gt; Mbytes/sec
&gt; &gt;             0         1000         3.69         3.70         3.69
&gt; &gt; 0.00
&gt; &gt;             1         1000         3.84         3.84         3.84
&gt; &gt; 0.50
&gt; &gt;             2         1000         3.83         3.83         3.83
&gt; &gt; 1.00
&gt; &gt;             4         1000         3.96         3.96         3.96
&gt; &gt; 1.93
&gt; &gt;             8         1000         4.01         4.01         4.01
&gt; &gt; 3.81
&gt; &gt;            16         1000         4.07         4.08         4.08
&gt; &gt; 7.49
&gt; &gt;            32         1000         4.19         4.19         4.19
&gt; &gt; 14.56
&gt; &gt;            64         1000         4.32         4.32         4.32
&gt; &gt; 28.27
&gt; &gt;           128         1000         4.75         4.75         4.75
&gt; &gt; 51.35
&gt; &gt;           256         1000         6.72         6.73         6.72
&gt; &gt; 72.58
&gt; &gt;           512         1000         8.32         8.32         8.32
&gt; &gt; 117.32
&gt; &gt;          1024         1000        11.79        11.81        11.80
&gt; &gt; 165.39
&gt; &gt;          2048         1000        15.36        15.38        15.37
&gt; &gt; 254.03
&gt; &gt;          4096         1000        20.64        20.65        20.65
&gt; &gt; 378.38
&gt; &gt;          8192         1000        34.89        34.90        34.90
&gt; &gt; 447.71
&gt; &gt;         16384         1000        59.81        59.83        59.82
&gt; &gt; 522.32
&gt; &gt;         32768         1000       105.03       105.06       105.04
&gt; &gt; 594.90
&gt; &gt;         65536          640       195.61       195.61       195.61
&gt; &gt; 639.02
&gt; &gt;        131072          320       363.85       363.85       363.85
&gt; &gt; 687.09
&gt; &gt;        262144          160       693.94       693.97       693.96
&gt; &gt; 720.49
&gt; &gt;        524288           80      1369.70      1369.79      1369.74
&gt; &gt; 730.04
&gt; &gt;       1048576           40      2680.43      2680.60      2680.51
&gt; &gt; 746.10
&gt; &gt;       2097152           20      5308.65      5309.50      5309.08
&gt; &gt; 753.37
&gt; &gt;       4194304           10     10551.50     10551.91     10551.70
&gt; &gt; 758.16
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>In reply to:</strong> <a href="3289.php">gshipman: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
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
