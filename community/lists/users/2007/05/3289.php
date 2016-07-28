<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 15:48:07 2007" -->
<!-- isoreceived="20070518194807" -->
<!-- sent="Fri, 18 May 2007 13:48:02 -0600" -->
<!-- isosent="20070518194802" -->
<!-- name="gshipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4" -->
<!-- id="51781225-6306-4DE7-8D91-B1A7E7A7AA45_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F6303_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> gshipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 15:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3290.php">Maestas, Christopher Daniel: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3288.php">Maestas, Christopher Daniel: "[OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>In reply to:</strong> <a href="3288.php">Maestas, Christopher Daniel: "[OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3290.php">Maestas, Christopher Daniel: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Reply:</strong> <a href="3290.php">Maestas, Christopher Daniel: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try adding the following param:
<br>
<p>OMPI_MCA_pml=cm
<br>
<p>and report the results?
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On May 18, 2007, at 1:15 PM, Maestas, Christopher Daniel wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was wondering why we would see ~ 100MB/s difference between mpich-mx
</span><br>
<span class="quotelev1">&gt; and Open MPI with SendRecv from the Intel MPI benchmarks.  Maybe I'm
</span><br>
<span class="quotelev1">&gt; missing turning something on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hardware is:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; # mx_info -q
</span><br>
<span class="quotelev1">&gt; MX Version: 1.1.7
</span><br>
<span class="quotelev1">&gt; MX Build: root_at_tocc1:/projects/global/SOURCES/myricom/mx-1.1.7 Fri May
</span><br>
<span class="quotelev1">&gt; 11 15:32:14 MDT 2007
</span><br>
<span class="quotelev1">&gt; 1 Myrinet board installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 instances and 1024  
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #0:  333.2 MHz LANai, 133.3 MHz PCI bus, 4 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status:         Running, P0: Link up, P1: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address:    00:60:dd:48:ba:ae
</span><br>
<span class="quotelev1">&gt;         Product code:   M3F2-PCIXE-4
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Open MPI 1.2.2 ---
</span><br>
<span class="quotelev1">&gt; $ cat
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/openmpi-1.2.2_mx/ 
</span><br>
<span class="quotelev1">&gt; BUILD_ENV
</span><br>
<span class="quotelev1">&gt; # Build Environment:
</span><br>
<span class="quotelev1">&gt; USE=&quot;doc icc modules mx torque&quot;
</span><br>
<span class="quotelev1">&gt; COMPILER=&quot;intel-9.1-f040-c045&quot;
</span><br>
<span class="quotelev1">&gt; CC=&quot;icc&quot;
</span><br>
<span class="quotelev1">&gt; CXX=&quot;icpc&quot;
</span><br>
<span class="quotelev1">&gt; CLINKER=&quot;icc&quot;
</span><br>
<span class="quotelev1">&gt; FC=&quot;ifort&quot;
</span><br>
<span class="quotelev1">&gt; F77=&quot;ifort&quot;
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot; -O3 -pipe&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot; -O3 -pipe&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot; -O3&quot;
</span><br>
<span class="quotelev1">&gt; MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
</span><br>
<span class="quotelev1">&gt; MODULE_FILE=&quot;openmpi-1.2.2_mx_intel-9.1-f040-c045&quot;
</span><br>
<span class="quotelev1">&gt; INSTALL_DEST=&quot;/apps/x86_64/mpi/openmpi/intel-9.1-f040-c045/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2
</span><br>
<span class="quotelev1">&gt; _mx&quot;
</span><br>
<span class="quotelev1">&gt; CONF_FLAGS=&quot; --with-mx=/opt/mx --with-tm=/apps/torque&quot;
</span><br>
<span class="quotelev1">&gt; $ env | grep OMPI
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps_base_schedule_policy=node
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=^openib
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_keep_hostnames=1
</span><br>
<span class="quotelev1">&gt; $ mpiexec -pernode -np 2 IMB-MPI1 SendRecv
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date       : Fri May 18 13:11:20 2007
</span><br>
<span class="quotelev1">&gt; # Machine    : x86_64# System     : Linux
</span><br>
<span class="quotelev1">&gt; # Release    : 2.6.9-42.0.10.EL_lustre.1.4.10smp
</span><br>
<span class="quotelev1">&gt; # Version    : #1 SMP Tue May 15 19:56:35 MDT 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes:   0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes:   4194304
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype                   :   MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions    :   MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op                         :   MPI_SUM
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Sendrecv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; # Benchmarking Sendrecv
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000         4.38         4.38         4.38
</span><br>
<span class="quotelev1">&gt; 0.00
</span><br>
<span class="quotelev1">&gt;             1         1000         6.03         6.03         6.03
</span><br>
<span class="quotelev1">&gt; 0.32
</span><br>
<span class="quotelev1">&gt;             2         1000         6.02         6.03         6.02
</span><br>
<span class="quotelev1">&gt; 0.63
</span><br>
<span class="quotelev1">&gt;             4         1000         6.10         6.10         6.10
</span><br>
<span class="quotelev1">&gt; 1.25
</span><br>
<span class="quotelev1">&gt;             8         1000         6.27         6.27         6.27
</span><br>
<span class="quotelev1">&gt; 2.43
</span><br>
<span class="quotelev1">&gt;            16         1000         6.23         6.23         6.23
</span><br>
<span class="quotelev1">&gt; 4.90
</span><br>
<span class="quotelev1">&gt;            32         1000         6.50         6.50         6.50
</span><br>
<span class="quotelev1">&gt; 9.39
</span><br>
<span class="quotelev1">&gt;            64         1000         6.48         6.49         6.49
</span><br>
<span class="quotelev1">&gt; 18.82
</span><br>
<span class="quotelev1">&gt;           128         1000         8.02         8.02         8.02
</span><br>
<span class="quotelev1">&gt; 30.45
</span><br>
<span class="quotelev1">&gt;           256         1000         8.69         8.69         8.69
</span><br>
<span class="quotelev1">&gt; 56.20
</span><br>
<span class="quotelev1">&gt;           512         1000        10.16        10.16        10.16
</span><br>
<span class="quotelev1">&gt; 96.08
</span><br>
<span class="quotelev1">&gt;          1024         1000        13.51        13.52        13.52
</span><br>
<span class="quotelev1">&gt; 144.48
</span><br>
<span class="quotelev1">&gt;          2048         1000        17.19        17.19        17.19
</span><br>
<span class="quotelev1">&gt; 227.25
</span><br>
<span class="quotelev1">&gt;          4096         1000        24.21        24.21        24.21
</span><br>
<span class="quotelev1">&gt; 322.67
</span><br>
<span class="quotelev1">&gt;          8192         1000        38.10        38.10        38.10
</span><br>
<span class="quotelev1">&gt; 410.13
</span><br>
<span class="quotelev1">&gt;         16384         1000        64.46        64.46        64.46
</span><br>
<span class="quotelev1">&gt; 484.82
</span><br>
<span class="quotelev1">&gt;         32768         1000       116.23       116.24       116.23
</span><br>
<span class="quotelev1">&gt; 537.69
</span><br>
<span class="quotelev1">&gt;         65536          640       210.11       210.11       210.11
</span><br>
<span class="quotelev1">&gt; 594.91
</span><br>
<span class="quotelev1">&gt;        131072          320       401.53       401.56       401.54
</span><br>
<span class="quotelev1">&gt; 622.58
</span><br>
<span class="quotelev1">&gt;        262144          160       900.95       901.01       900.98
</span><br>
<span class="quotelev1">&gt; 554.94
</span><br>
<span class="quotelev1">&gt;        524288           80      1909.00      1909.20      1909.10
</span><br>
<span class="quotelev1">&gt; 523.78
</span><br>
<span class="quotelev1">&gt;       1048576           40      3868.03      3868.40      3868.21
</span><br>
<span class="quotelev1">&gt; 517.01
</span><br>
<span class="quotelev1">&gt;       2097152           20      8316.95      8317.46      8317.20
</span><br>
<span class="quotelev1">&gt; 480.92
</span><br>
<span class="quotelev1">&gt;       4194304           10     19240.28     19241.38     19240.83
</span><br>
<span class="quotelev1">&gt; 415.77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- mpich-mx --
</span><br>
<span class="quotelev1">&gt; $ cat
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/mpich-mx/intel-9.1-f040-c045/mpich-mx-1.2.7..4/ 
</span><br>
<span class="quotelev1">&gt; BUILD_EN
</span><br>
<span class="quotelev1">&gt; V
</span><br>
<span class="quotelev1">&gt; # Build Environment:
</span><br>
<span class="quotelev1">&gt; USE=&quot;doc icc modules romio&quot;
</span><br>
<span class="quotelev1">&gt; COMPILER=&quot;intel-9.1-f040-c045&quot;
</span><br>
<span class="quotelev1">&gt; CC=&quot;icc&quot;
</span><br>
<span class="quotelev1">&gt; CXX=&quot;icpc&quot;
</span><br>
<span class="quotelev1">&gt; CLINKER=&quot;icc&quot;
</span><br>
<span class="quotelev1">&gt; FC=&quot;ifort&quot;
</span><br>
<span class="quotelev1">&gt; F77=&quot;ifort&quot;
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-O3 -pipe -xP -I/opt/mx/include&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-O3 -pipe -xP -I/opt/mx/include&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-O3 -xP&quot;
</span><br>
<span class="quotelev1">&gt; MODULE_DEST=&quot;/apps/modules/modulefiles/mpi&quot;
</span><br>
<span class="quotelev1">&gt; MODULE_FILE=&quot;mpich-mx-1.2.7..4_intel-9.1-f040-c045&quot;
</span><br>
<span class="quotelev1">&gt; INSTALL_DEST=&quot;/apps/x86_64/mpi/mpich-mx/intel-9.1-f040-c045/mpich- 
</span><br>
<span class="quotelev1">&gt; mx-1.2
</span><br>
<span class="quotelev1">&gt; .7..4&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec -comm=mx -pernode -np 2 IMB-MPI1 SendRecv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date       : Fri May 18 12:59:21 2007
</span><br>
<span class="quotelev1">&gt; # Machine    : x86_64# System     : Linux
</span><br>
<span class="quotelev1">&gt; # Release    : 2.6.9-42.0.10.EL_lustre.1.4.10smp
</span><br>
<span class="quotelev1">&gt; # Version    : #1 SMP Tue May 15 19:56:35 MDT 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes:   0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes:   4194304
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype                   :   MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions    :   MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op                         :   MPI_SUM
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Sendrecv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; # Benchmarking Sendrecv
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000         3.69         3.70         3.69
</span><br>
<span class="quotelev1">&gt; 0.00
</span><br>
<span class="quotelev1">&gt;             1         1000         3.84         3.84         3.84
</span><br>
<span class="quotelev1">&gt; 0.50
</span><br>
<span class="quotelev1">&gt;             2         1000         3.83         3.83         3.83
</span><br>
<span class="quotelev1">&gt; 1.00
</span><br>
<span class="quotelev1">&gt;             4         1000         3.96         3.96         3.96
</span><br>
<span class="quotelev1">&gt; 1.93
</span><br>
<span class="quotelev1">&gt;             8         1000         4.01         4.01         4.01
</span><br>
<span class="quotelev1">&gt; 3.81
</span><br>
<span class="quotelev1">&gt;            16         1000         4.07         4.08         4.08
</span><br>
<span class="quotelev1">&gt; 7.49
</span><br>
<span class="quotelev1">&gt;            32         1000         4.19         4.19         4.19
</span><br>
<span class="quotelev1">&gt; 14.56
</span><br>
<span class="quotelev1">&gt;            64         1000         4.32         4.32         4.32
</span><br>
<span class="quotelev1">&gt; 28.27
</span><br>
<span class="quotelev1">&gt;           128         1000         4.75         4.75         4.75
</span><br>
<span class="quotelev1">&gt; 51.35
</span><br>
<span class="quotelev1">&gt;           256         1000         6.72         6.73         6.72
</span><br>
<span class="quotelev1">&gt; 72.58
</span><br>
<span class="quotelev1">&gt;           512         1000         8.32         8.32         8.32
</span><br>
<span class="quotelev1">&gt; 117.32
</span><br>
<span class="quotelev1">&gt;          1024         1000        11.79        11.81        11.80
</span><br>
<span class="quotelev1">&gt; 165.39
</span><br>
<span class="quotelev1">&gt;          2048         1000        15.36        15.38        15.37
</span><br>
<span class="quotelev1">&gt; 254.03
</span><br>
<span class="quotelev1">&gt;          4096         1000        20.64        20.65        20.65
</span><br>
<span class="quotelev1">&gt; 378.38
</span><br>
<span class="quotelev1">&gt;          8192         1000        34.89        34.90        34.90
</span><br>
<span class="quotelev1">&gt; 447.71
</span><br>
<span class="quotelev1">&gt;         16384         1000        59.81        59.83        59.82
</span><br>
<span class="quotelev1">&gt; 522.32
</span><br>
<span class="quotelev1">&gt;         32768         1000       105.03       105.06       105.04
</span><br>
<span class="quotelev1">&gt; 594.90
</span><br>
<span class="quotelev1">&gt;         65536          640       195.61       195.61       195.61
</span><br>
<span class="quotelev1">&gt; 639.02
</span><br>
<span class="quotelev1">&gt;        131072          320       363.85       363.85       363.85
</span><br>
<span class="quotelev1">&gt; 687.09
</span><br>
<span class="quotelev1">&gt;        262144          160       693.94       693.97       693.96
</span><br>
<span class="quotelev1">&gt; 720.49
</span><br>
<span class="quotelev1">&gt;        524288           80      1369.70      1369.79      1369.74
</span><br>
<span class="quotelev1">&gt; 730.04
</span><br>
<span class="quotelev1">&gt;       1048576           40      2680.43      2680.60      2680.51
</span><br>
<span class="quotelev1">&gt; 746.10
</span><br>
<span class="quotelev1">&gt;       2097152           20      5308.65      5309.50      5309.08
</span><br>
<span class="quotelev1">&gt; 753.37
</span><br>
<span class="quotelev1">&gt;       4194304           10     10551.50     10551.91     10551.70
</span><br>
<span class="quotelev1">&gt; 758.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3290.php">Maestas, Christopher Daniel: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3288.php">Maestas, Christopher Daniel: "[OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>In reply to:</strong> <a href="3288.php">Maestas, Christopher Daniel: "[OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3290.php">Maestas, Christopher Daniel: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Reply:</strong> <a href="3290.php">Maestas, Christopher Daniel: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
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
