<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  9 12:28:08 2006" -->
<!-- isoreceived="20060509162808" -->
<!-- sent="Tue, 9 May 2006 09:27:38 -0700" -->
<!-- isosent="20060509162738" -->
<!-- name="Scott Weitzenkamp \(sweitzen\)" -->
<!-- email="sweitzen_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails" -->
<!-- id="A15335FBE9BD2449AF2C9EF3D1EB8EA301B36889_at_xmb-sjc-216.amer.cisco.com" -->
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
<strong>From:</strong> Scott Weitzenkamp \(sweitzen\) (<em>sweitzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-09 12:27:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1224.php">Mahesh Barve: "[OMPI users] Orted Command Not found"</a>
<li><strong>Previous message:</strong> <a href="1222.php">Rainer Keller: "Re: [OMPI users] Open MPI and MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<li><strong>Reply:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pallas runs OK up to Alltoall test, then we get:
<br>
<p>/data/software/qa/MPI/openmpi-1.1a2-rhel4-`uname -m`-mvapi/bin/mpirun
<br>
--mca \
<br>
mpi_leave_pinned 1 --np 4 --hostfile /tmp/hostfile env
<br>
LD_LIBRARY_PATH=/data\
<br>
/software/qa/MPI/openmpi-1.1a2-rhel3-`uname
<br>
-m`-mvapi/lib:/data/software/qa/\
<br>
MPI/openmpi-1.1a2-rhel3-`uname -m`-mvapi/lib64
<br>
/data/home/scott/builds/Topsp\
<br>
inOS-2.6.0/build183/protest/Igr7/050906_002959/open.pallas/1147159823/PM
<br>
B2.2\
<br>
.1/SRC_PMB/PMB-MPI1 Alltoall 
<br>
#---------------------------------------------------^M
<br>
#    PALLAS MPI Benchmark Suite V2.2, MPI-1 part    ^M
<br>
#---------------------------------------------------^M
<br>
# Date       : Tue May  9 00:33:10 2006^M
<br>
# Machine    : i686# System     : Linux^M
<br>
# Release    : 2.4.21-40.ELhugemem^M
<br>
# Version    : #1 SMP Thu Feb 2 22:14:10 EST 2006^M
<br>
^M
<br>
#^M
<br>
# Minimum message length in bytes:   0^M
<br>
# Maximum message length in bytes:   4194304^M
<br>
#^M
<br>
# MPI_Datatype                   :   MPI_BYTE ^M
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT^M
<br>
# MPI_Op                         :   MPI_SUM  ^M
<br>
#^M
<br>
#^M
<br>
^M
<br>
# List of Benchmarks to run:^M
<br>
^M
<br>
# Alltoall^M
<br>
^M
<br>
#----------------------------------------------------------------^M
<br>
# Benchmarking Alltoall ^M
<br>
# ( #processes = 2 ) ^M
<br>
# ( 2 additional processes waiting in MPI_Barrier)^M
<br>
#----------------------------------------------------------------^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.03         0.03         0.03^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         8.12         8.18         8.15^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         7.80         7.80         7.80^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         7.74         7.75         7.74^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         7.87         7.88         7.88^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         8.04         8.05         8.04^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         7.96         7.96         7.96^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         9.30         9.31         9.30^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        10.37        10.38        10.38^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        12.03        12.04        12.04^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        12.83        12.85        12.84^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        16.23        16.25        16.24^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000        20.55        20.57        20.56^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000        26.89        26.89        26.89^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000        44.50        44.51        44.51^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000        78.13        78.18        78.15^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000       132.28       132.31       132.30^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640       222.20       222.25       222.23^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320       405.07       405.15       405.11^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      1069.56      1069.62      1069.59^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80      2479.89      2481.27      2480.58^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40      4875.95      4882.20      4879.08^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20      9520.25      9530.10      9525.18^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10     19020.81     19048.00     19034.41^M
<br>
^M
<br>
#----------------------------------------------------------------^M
<br>
# Benchmarking Alltoall ^M
<br>
# ( #processes = 4 ) ^M
<br>
#----------------------------------------------------------------^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.03         0.03         0.03^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        27.06        27.07        27.07^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        16.48        16.49        16.48^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        17.28        17.29        17.28^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        20.79        20.80        20.80^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        18.60        18.61        18.61^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        18.46        18.47        18.47^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        19.09        19.10        19.09^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        16.24        16.29        16.26^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        18.10        18.11        18.10^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        19.39        19.40        19.39^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        26.51        26.52        26.52^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000        37.85        37.86        37.85^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000        60.41        60.42        60.41^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000       103.04       103.08       103.06^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       200.75       200.79       200.78^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000      2981.05      2982.04      2981.70^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640      3435.51      3436.92      3436.32^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      4224.32      4226.30      4225.34^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      6300.70      6305.17      6303.13^M
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)^M
<br>
Failing at addr:0x20^M
<br>
[0]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel4-i686-mvapi/lib/libopal.so
<br>
.0 \
<br>
[0xdfd66c]^M
<br>
[1] func:/lib/tls/libpthread.so.0 [0x938e40]^M
<br>
[2]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_r\
<br>
cache_rb.so(mca_rcache_rb_insert+0x30) [0x85012c]^M
<br>
[3]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_m\
<br>
pool_mvapi.so(mca_mpool_mvapi_register+0x1b3) [0x9d3157]^M
<br>
[4]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_p\
<br>
ml_ob1.so(mca_pml_ob1_rdma_btls+0x18c) [0x292458]^M
<br>
[5]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_p\
<br>
ml_ob1.so [0x2951f9]^M
<br>
[6]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_p\
<br>
ml_ob1.so(mca_pml_ob1_recv_request_progress+0x5e4) [0x294098]^M
<br>
[7]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_p\
<br>
ml_ob1.so(mca_pml_ob1_recv_request_match_specific+0xb0) [0x2948f0]^M
<br>
[8]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_p\
<br>
ml_ob1.so(mca_pml_ob1_irecv+0x139) [0x290d01]^M
<br>
[9]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_c\
<br>
oll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x38) [0x8a0394]^M
<br>
[10]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_\
<br>
coll_tuned.so(ompi_coll_tuned_alltoall_intra_pairwise+0xb4) [0x8a1550]^M
<br>
[11]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/openmpi/mc
<br>
a_\
<br>
coll_tuned.so(ompi_coll_tuned_alltoall_intra_dec_fixed+0x7d)
<br>
[0x8a0531]^M
<br>
[12]
<br>
func:/data/software/qa/MPI/openmpi-1.1a2-rhel4-i686-mvapi/lib/libmpi.so.
<br>
0(\
<br>
MPI_Alltoall+0x167) [0xf89daf]^M
<br>
[13]
<br>
func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/Igr7/05090
<br>
6_\
<br>
002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB-MPI1(Alltoall+0xa4)
<br>
[0x804dd\
<br>
28]^M
<br>
[14]
<br>
func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/Igr7/05090
<br>
6_\
<br>
002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB-MPI1(main+0x32e)
<br>
[0x804a78a]\
<br>
^M
<br>
[15] func:/lib/tls/libc.so.6(__libc_start_main+0xf8) [0x126748]^M
<br>
[16]
<br>
func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/Igr7/05090
<br>
6_\
<br>
002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB-MPI1(free+0x41)
<br>
[0x804a3cd]^\
<br>
M
<br>
*** End of error message ***^M
<br>
\300\200Broken pipe^M
<br>
<p>Scott Weitzenkamp
<br>
SQA and Release Manager
<br>
Server Virtualization Business Unit
<br>
Cisco Systems
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Scott Weitzenkamp (sweitzen) 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 09, 2006 12:35 AM
</span><br>
<span class="quotelev1">&gt; To: Scott Weitzenkamp (sweitzen)
</span><br>
<span class="quotelev1">&gt; Subject: Chassis TopspinOS-2.6.0 and Host Linux-3.2.0 Test 
</span><br>
<span class="quotelev1">&gt; Results - Total: 1; Pass 0; Fail: 1; Skip: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Protest Run Results
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chassis Branch: TopspinOS-2.6.0
</span><br>
<span class="quotelev1">&gt; Chassis Build: build183
</span><br>
<span class="quotelev1">&gt; IB Hosts: svbu-qa2650-16 svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13 
</span><br>
<span class="quotelev1">&gt; IB Hosts OS: host_hugemem_rhel3_40 host_hugemem_rhel3_37 
</span><br>
<span class="quotelev1">&gt; host_smp_rhel3_40 host_smp_rhel3_37 
</span><br>
<span class="quotelev1">&gt; Host Branch: Linux-3.2.0
</span><br>
<span class="quotelev1">&gt; Host Build: build089
</span><br>
<span class="quotelev1">&gt; Topology: 
</span><br>
<span class="quotelev1">&gt; /data/home/scott/cluster_switch.main/qa/tests/smoke/Igr7.topo
</span><br>
<span class="quotelev1">&gt; Logs: 
</span><br>
<span class="quotelev1">&gt; /data/home/scott/builds/TopspinOS-2.6.0/build183/protest/Igr7/
</span><br>
<span class="quotelev1">&gt; 050906_002959
</span><br>
<span class="quotelev1">&gt; Logs URL: 
</span><br>
<span class="quotelev1">&gt; <a href="http://svbu-borg.cisco.com/~releng/data/home/scott/builds/Tops">http://svbu-borg.cisco.com/~releng/data/home/scott/builds/Tops</a>
</span><br>
pinOS-2.6.0/build183/protest/Igr7/050906_002959
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scenario file: open.pallas.tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: MPI home dir is 
</span><br>
<span class="quotelev1">&gt; /data/software/qa/MPI/openmpi-1.1a2-rhel3-`uname -m`-mvapi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / PingPong 
</span><br>
<span class="quotelev1">&gt; Test Duration: 3.270 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000        10.19         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000         7.20         0.13
</span><br>
<span class="quotelev1">&gt;             2         1000         7.23         0.26
</span><br>
<span class="quotelev1">&gt;             4         1000         7.22         0.53
</span><br>
<span class="quotelev1">&gt;             8         1000         7.36         1.04
</span><br>
<span class="quotelev1">&gt;            16         1000         7.37         2.07
</span><br>
<span class="quotelev1">&gt;            32         1000         7.52         4.06
</span><br>
<span class="quotelev1">&gt;            64         1000         8.63         7.07
</span><br>
<span class="quotelev1">&gt;           128         1000         8.97        13.61
</span><br>
<span class="quotelev1">&gt;           256         1000         9.74        25.06
</span><br>
<span class="quotelev1">&gt;           512         1000        10.90        44.80
</span><br>
<span class="quotelev1">&gt;          1024         1000        13.51        72.30
</span><br>
<span class="quotelev1">&gt;          2048         1000        16.73       116.71
</span><br>
<span class="quotelev1">&gt;          4096         1000        22.24       175.65
</span><br>
<span class="quotelev1">&gt;          8192         1000        34.19       228.53
</span><br>
<span class="quotelev1">&gt;         16384         1000        56.80       275.11
</span><br>
<span class="quotelev1">&gt;         32768         1000        82.50       378.79
</span><br>
<span class="quotelev1">&gt;         65536          640       127.01       492.09
</span><br>
<span class="quotelev1">&gt;        131072          320       218.89       571.07
</span><br>
<span class="quotelev1">&gt;        262144          160       394.11       634.34
</span><br>
<span class="quotelev1">&gt;        524288           80       748.98       667.58
</span><br>
<span class="quotelev1">&gt;       1048576           40      1468.04       681.18
</span><br>
<span class="quotelev1">&gt;       2097152           20      2872.90       696.16
</span><br>
<span class="quotelev1">&gt;       4194304           10      5738.20       697.08
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / PingPong -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 3.169 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000        10.19         0.00
</span><br>
<span class="quotelev1">&gt;             1            0         1000        10.22         0.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000         7.28         0.13
</span><br>
<span class="quotelev1">&gt;             1            1         1000         7.13         0.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000         7.25         0.26
</span><br>
<span class="quotelev1">&gt;             1            2         1000         7.12         0.27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         7.26         0.53
</span><br>
<span class="quotelev1">&gt;             1            4         1000         7.15         0.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         7.42         1.03
</span><br>
<span class="quotelev1">&gt;             1            8         1000         7.27         1.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         7.51         2.03
</span><br>
<span class="quotelev1">&gt;             1           16         1000         7.24         2.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         7.52         4.06
</span><br>
<span class="quotelev1">&gt;             1           32         1000         7.51         4.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000         8.67         7.04
</span><br>
<span class="quotelev1">&gt;             1           64         1000         8.73         6.99
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000         9.95        12.27
</span><br>
<span class="quotelev1">&gt;             1          128         1000         9.02        13.54
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000         9.78        24.98
</span><br>
<span class="quotelev1">&gt;             1          256         1000         9.71        25.15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        11.06        44.17
</span><br>
<span class="quotelev1">&gt;             1          512         1000        10.80        45.23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        13.56        72.02
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        13.32        73.31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        16.59       117.71
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        16.49       118.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        21.96       177.91
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        21.50       181.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        32.33       241.67
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        33.50       233.23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000        56.32       277.44
</span><br>
<span class="quotelev1">&gt;             1        16384         1000        57.28       272.79
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000        82.25       379.94
</span><br>
<span class="quotelev1">&gt;             1        32768         1000        80.67       387.40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       126.69       493.31
</span><br>
<span class="quotelev1">&gt;             1        65536          640       125.46       498.17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       217.08       575.83
</span><br>
<span class="quotelev1">&gt;             1       131072          320       214.56       582.59
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160       395.69       631.81
</span><br>
<span class="quotelev1">&gt;             1       262144          160       393.47       635.37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80       748.94       667.61
</span><br>
<span class="quotelev1">&gt;             1       524288           80       752.60       664.36
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      1443.01       693.00
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      1467.11       681.61
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      2884.95       693.25
</span><br>
<span class="quotelev1">&gt;             1      2097152           20      2909.32       687.44
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10      5721.85       699.07
</span><br>
<span class="quotelev1">&gt;             1      4194304           10      5693.45       702.56
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / PingPing 
</span><br>
<span class="quotelev1">&gt; Test Duration: 8.259 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000        13.65         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000         7.28         0.13
</span><br>
<span class="quotelev1">&gt;             2         1000         7.26         0.26
</span><br>
<span class="quotelev1">&gt;             4         1000         7.32         0.52
</span><br>
<span class="quotelev1">&gt;             8         1000         7.46         1.02
</span><br>
<span class="quotelev1">&gt;            16         1000         7.51         2.03
</span><br>
<span class="quotelev1">&gt;            32         1000         7.62         4.01
</span><br>
<span class="quotelev1">&gt;            64         1000         8.78         6.95
</span><br>
<span class="quotelev1">&gt;           128         1000         9.22        13.24
</span><br>
<span class="quotelev1">&gt;           256         1000        10.50        23.25
</span><br>
<span class="quotelev1">&gt;           512         1000        11.58        42.17
</span><br>
<span class="quotelev1">&gt;          1024         1000        14.83        65.85
</span><br>
<span class="quotelev1">&gt;          2048         1000        19.15       101.97
</span><br>
<span class="quotelev1">&gt;          4096         1000        26.50       147.42
</span><br>
<span class="quotelev1">&gt;          8192         1000        44.17       176.89
</span><br>
<span class="quotelev1">&gt;         16384         1000        78.89       198.07
</span><br>
<span class="quotelev1">&gt;         32768         1000       123.22       253.62
</span><br>
<span class="quotelev1">&gt;         65536          640       215.34       290.23
</span><br>
<span class="quotelev1">&gt;        131072          320       366.66       340.91
</span><br>
<span class="quotelev1">&gt;        262144          160       688.94       362.88
</span><br>
<span class="quotelev1">&gt;        524288           80      1338.12       373.66
</span><br>
<span class="quotelev1">&gt;       1048576           40      2629.77       380.26
</span><br>
<span class="quotelev1">&gt;       2097152           20      5245.40       381.29
</span><br>
<span class="quotelev1">&gt;       4194304           10     10415.61       384.04
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / PingPing -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 2.870 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000        13.69         0.00
</span><br>
<span class="quotelev1">&gt;             1            0         1000        11.91         0.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000         7.47         0.13
</span><br>
<span class="quotelev1">&gt;             1            1         1000         7.28         0.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000         7.42         0.26
</span><br>
<span class="quotelev1">&gt;             1            2         1000         7.33         0.26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         7.47         0.51
</span><br>
<span class="quotelev1">&gt;             1            4         1000         7.30         0.52
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         7.61         1.00
</span><br>
<span class="quotelev1">&gt;             1            8         1000         7.47         1.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         7.55         2.02
</span><br>
<span class="quotelev1">&gt;             1           16         1000         7.49         2.04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         7.62         4.00
</span><br>
<span class="quotelev1">&gt;             1           32         1000         7.60         4.01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000         8.83         6.91
</span><br>
<span class="quotelev1">&gt;             1           64         1000         8.77         6.96
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        11.16        10.94
</span><br>
<span class="quotelev1">&gt;             1          128         1000         9.02        13.54
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        10.30        23.71
</span><br>
<span class="quotelev1">&gt;             1          256         1000        10.09        24.21
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        12.12        40.28
</span><br>
<span class="quotelev1">&gt;             1          512         1000        11.76        41.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        14.96        65.30
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        14.95        65.33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        19.50       100.15
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        19.15       101.99
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        26.42       147.87
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        25.89       150.87
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        46.07       169.57
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        42.60       183.38
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000        79.15       197.41
</span><br>
<span class="quotelev1">&gt;             1        16384         1000        76.40       204.52
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       123.99       252.03
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       122.70       254.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       204.70       305.32
</span><br>
<span class="quotelev1">&gt;             1        65536          640       205.00       304.87
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       370.49       337.39
</span><br>
<span class="quotelev1">&gt;             1       131072          320       366.83       340.76
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160       692.09       361.23
</span><br>
<span class="quotelev1">&gt;             1       262144          160       691.42       361.58
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      1336.15       374.21
</span><br>
<span class="quotelev1">&gt;             1       524288           80      1330.53       375.79
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      2634.95       379.51
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      2627.58       380.58
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      5240.35       381.65
</span><br>
<span class="quotelev1">&gt;             1      2097152           20      5194.95       384.99
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     10409.59       384.26
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     10314.59       387.80
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Sendrecv 
</span><br>
<span class="quotelev1">&gt; Test Duration: 4.710 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  
</span><br>
<span class="quotelev1">&gt; t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000        13.77        13.78        
</span><br>
<span class="quotelev1">&gt; 13.78         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000         7.37         7.38         
</span><br>
<span class="quotelev1">&gt; 7.38         0.26
</span><br>
<span class="quotelev1">&gt;             2         1000         7.36         7.37         
</span><br>
<span class="quotelev1">&gt; 7.36         0.52
</span><br>
<span class="quotelev1">&gt;             4         1000         7.36         7.36         
</span><br>
<span class="quotelev1">&gt; 7.36         1.04
</span><br>
<span class="quotelev1">&gt;             8         1000         7.52         7.53         
</span><br>
<span class="quotelev1">&gt; 7.53         2.03
</span><br>
<span class="quotelev1">&gt;            16         1000         7.52         7.52         
</span><br>
<span class="quotelev1">&gt; 7.52         4.06
</span><br>
<span class="quotelev1">&gt;            32         1000         7.69         7.70         
</span><br>
<span class="quotelev1">&gt; 7.70         7.93
</span><br>
<span class="quotelev1">&gt;            64         1000         8.80         8.81         
</span><br>
<span class="quotelev1">&gt; 8.81        13.85
</span><br>
<span class="quotelev1">&gt;           128         1000         9.19         9.20         
</span><br>
<span class="quotelev1">&gt; 9.20        26.54
</span><br>
<span class="quotelev1">&gt;           256         1000        10.17        10.17        
</span><br>
<span class="quotelev1">&gt; 10.17        47.99
</span><br>
<span class="quotelev1">&gt;           512         1000        11.77        11.78        
</span><br>
<span class="quotelev1">&gt; 11.77        82.90
</span><br>
<span class="quotelev1">&gt;          1024         1000        15.37        15.37        
</span><br>
<span class="quotelev1">&gt; 15.37       127.07
</span><br>
<span class="quotelev1">&gt;          2048         1000        19.25        19.26        
</span><br>
<span class="quotelev1">&gt; 19.25       202.79
</span><br>
<span class="quotelev1">&gt;          4096         1000        27.31        27.33        
</span><br>
<span class="quotelev1">&gt; 27.32       285.83
</span><br>
<span class="quotelev1">&gt;          8192         1000        42.78        42.81        
</span><br>
<span class="quotelev1">&gt; 42.79       364.98
</span><br>
<span class="quotelev1">&gt;         16384         1000        75.22        75.24        
</span><br>
<span class="quotelev1">&gt; 75.23       415.35
</span><br>
<span class="quotelev1">&gt;         32768         1000       122.82       122.85       
</span><br>
<span class="quotelev1">&gt; 122.84       508.73
</span><br>
<span class="quotelev1">&gt;         65536          640       204.42       204.45       
</span><br>
<span class="quotelev1">&gt; 204.43       611.41
</span><br>
<span class="quotelev1">&gt;        131072          320       366.74       366.81       
</span><br>
<span class="quotelev1">&gt; 366.78       681.55
</span><br>
<span class="quotelev1">&gt;        262144          160       689.38       689.56       
</span><br>
<span class="quotelev1">&gt; 689.47       725.10
</span><br>
<span class="quotelev1">&gt;        524288           80      1335.74      1336.15      
</span><br>
<span class="quotelev1">&gt; 1335.95       748.42
</span><br>
<span class="quotelev1">&gt;       1048576           40      2668.65      2669.30      
</span><br>
<span class="quotelev1">&gt; 2668.98       749.26
</span><br>
<span class="quotelev1">&gt;       2097152           20      5237.05      5238.85      
</span><br>
<span class="quotelev1">&gt; 5237.95       763.53
</span><br>
<span class="quotelev1">&gt;       4194304           10     10393.89     10397.00     
</span><br>
<span class="quotelev1">&gt; 10395.45       769.45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  
</span><br>
<span class="quotelev1">&gt; t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000        21.71        21.72        
</span><br>
<span class="quotelev1">&gt; 21.72         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000         8.49         8.50         
</span><br>
<span class="quotelev1">&gt; 8.50         0.22
</span><br>
<span class="quotelev1">&gt;             2         1000         8.65         8.66         
</span><br>
<span class="quotelev1">&gt; 8.65         0.44
</span><br>
<span class="quotelev1">&gt;             4         1000         8.55         8.57         
</span><br>
<span class="quotelev1">&gt; 8.56         0.89
</span><br>
<span class="quotelev1">&gt;             8         1000         8.66         8.68         
</span><br>
<span class="quotelev1">&gt; 8.67         1.76
</span><br>
<span class="quotelev1">&gt;            16         1000         8.66         8.70         
</span><br>
<span class="quotelev1">&gt; 8.69         3.51
</span><br>
<span class="quotelev1">&gt;            32         1000         8.86         8.88         
</span><br>
<span class="quotelev1">&gt; 8.87         6.88
</span><br>
<span class="quotelev1">&gt;            64         1000        10.01        10.02        
</span><br>
<span class="quotelev1">&gt; 10.02        12.18
</span><br>
<span class="quotelev1">&gt;           128         1000        10.34        10.35        
</span><br>
<span class="quotelev1">&gt; 10.34        23.58
</span><br>
<span class="quotelev1">&gt;           256         1000        11.35        11.36        
</span><br>
<span class="quotelev1">&gt; 11.35        43.00
</span><br>
<span class="quotelev1">&gt;           512         1000        13.02        13.04        
</span><br>
<span class="quotelev1">&gt; 13.03        74.91
</span><br>
<span class="quotelev1">&gt;          1024         1000        16.90        16.92        
</span><br>
<span class="quotelev1">&gt; 16.91       115.41
</span><br>
<span class="quotelev1">&gt;          2048         1000        19.87        19.90        
</span><br>
<span class="quotelev1">&gt; 19.89       196.32
</span><br>
<span class="quotelev1">&gt;          4096         1000        28.42        28.44        
</span><br>
<span class="quotelev1">&gt; 28.43       274.75
</span><br>
<span class="quotelev1">&gt;          8192         1000        48.98        49.04        
</span><br>
<span class="quotelev1">&gt; 49.01       318.62
</span><br>
<span class="quotelev1">&gt;         16384         1000        90.11        90.21        
</span><br>
<span class="quotelev1">&gt; 90.15       346.41
</span><br>
<span class="quotelev1">&gt;         32768         1000       123.08       123.10       
</span><br>
<span class="quotelev1">&gt; 123.09       507.74
</span><br>
<span class="quotelev1">&gt;         65536          640       204.75       204.80       
</span><br>
<span class="quotelev1">&gt; 204.77       610.37
</span><br>
<span class="quotelev1">&gt;        131072          320       366.26       366.38       
</span><br>
<span class="quotelev1">&gt; 366.34       682.35
</span><br>
<span class="quotelev1">&gt;        262144          160       707.12       707.32       
</span><br>
<span class="quotelev1">&gt; 707.25       706.89
</span><br>
<span class="quotelev1">&gt;        524288           80      1335.55      1335.91      
</span><br>
<span class="quotelev1">&gt; 1335.72       748.55
</span><br>
<span class="quotelev1">&gt;       1048576           40      2634.05      2634.73      
</span><br>
<span class="quotelev1">&gt; 2634.26       759.09
</span><br>
<span class="quotelev1">&gt;       2097152           20      5232.59      5244.75      
</span><br>
<span class="quotelev1">&gt; 5239.09       762.67
</span><br>
<span class="quotelev1">&gt;       4194304           10     10369.80     10408.60     
</span><br>
<span class="quotelev1">&gt; 10389.80       768.59
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Sendrecv -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 4.410 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000        13.72        
</span><br>
<span class="quotelev1">&gt; 13.72        13.72         0.00
</span><br>
<span class="quotelev1">&gt;             1            0         1000        12.41        
</span><br>
<span class="quotelev1">&gt; 12.41        12.41         0.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000         7.39         
</span><br>
<span class="quotelev1">&gt; 7.39         7.39         0.26
</span><br>
<span class="quotelev1">&gt;             1            1         1000         7.54         
</span><br>
<span class="quotelev1">&gt; 7.55         7.54         0.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000         7.34         
</span><br>
<span class="quotelev1">&gt; 7.35         7.35         0.52
</span><br>
<span class="quotelev1">&gt;             1            2         1000         8.19         
</span><br>
<span class="quotelev1">&gt; 8.21         8.20         0.46
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         7.34         
</span><br>
<span class="quotelev1">&gt; 7.35         7.35         1.04
</span><br>
<span class="quotelev1">&gt;             1            4         1000         7.48         
</span><br>
<span class="quotelev1">&gt; 7.51         7.49         1.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         7.51         
</span><br>
<span class="quotelev1">&gt; 7.51         7.51         2.03
</span><br>
<span class="quotelev1">&gt;             1            8         1000         7.60         
</span><br>
<span class="quotelev1">&gt; 7.61         7.61         2.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         7.48         
</span><br>
<span class="quotelev1">&gt; 7.48         7.48         4.08
</span><br>
<span class="quotelev1">&gt;             1           16         1000         7.67         
</span><br>
<span class="quotelev1">&gt; 7.67         7.67         3.98
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         7.62         
</span><br>
<span class="quotelev1">&gt; 7.63         7.63         8.00
</span><br>
<span class="quotelev1">&gt;             1           32         1000         7.85         
</span><br>
<span class="quotelev1">&gt; 7.85         7.85         7.77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000         8.76         
</span><br>
<span class="quotelev1">&gt; 8.77         8.76        13.92
</span><br>
<span class="quotelev1">&gt;             1           64         1000         8.90         
</span><br>
<span class="quotelev1">&gt; 8.90         8.90        13.71
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000         9.27         
</span><br>
<span class="quotelev1">&gt; 9.28         9.27        26.32
</span><br>
<span class="quotelev1">&gt;             1          128         1000         9.45         
</span><br>
<span class="quotelev1">&gt; 9.46         9.46        25.81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        10.23        
</span><br>
<span class="quotelev1">&gt; 10.24        10.24        47.68
</span><br>
<span class="quotelev1">&gt;             1          256         1000        10.34        
</span><br>
<span class="quotelev1">&gt; 10.34        10.34        47.20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        11.81        
</span><br>
<span class="quotelev1">&gt; 11.82        11.81        82.64
</span><br>
<span class="quotelev1">&gt;             1          512         1000        11.99        
</span><br>
<span class="quotelev1">&gt; 11.99        11.99        81.46
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        15.29        
</span><br>
<span class="quotelev1">&gt; 15.30        15.30       127.64
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        15.24        
</span><br>
<span class="quotelev1">&gt; 15.24        15.24       128.17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        19.18        
</span><br>
<span class="quotelev1">&gt; 19.19        19.19       203.60
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        19.38        
</span><br>
<span class="quotelev1">&gt; 19.38        19.38       201.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        26.37        
</span><br>
<span class="quotelev1">&gt; 26.38        26.37       296.14
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        26.06        
</span><br>
<span class="quotelev1">&gt; 26.07        26.07       299.65
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        44.89        
</span><br>
<span class="quotelev1">&gt; 44.94        44.92       347.69
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        42.71        
</span><br>
<span class="quotelev1">&gt; 42.73        42.72       365.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000        78.07        
</span><br>
<span class="quotelev1">&gt; 78.12        78.09       400.04
</span><br>
<span class="quotelev1">&gt;             1        16384         1000        78.14        
</span><br>
<span class="quotelev1">&gt; 78.17        78.15       399.79
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       122.95       
</span><br>
<span class="quotelev1">&gt; 122.99       122.97       508.19
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       122.67       
</span><br>
<span class="quotelev1">&gt; 122.68       122.67       509.47
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       204.46       
</span><br>
<span class="quotelev1">&gt; 204.51       204.49       611.22
</span><br>
<span class="quotelev1">&gt;             1        65536          640       203.90       
</span><br>
<span class="quotelev1">&gt; 203.93       203.92       612.96
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       366.34       
</span><br>
<span class="quotelev1">&gt; 366.44       366.39       682.25
</span><br>
<span class="quotelev1">&gt;             1       131072          320       366.57       
</span><br>
<span class="quotelev1">&gt; 366.61       366.59       681.92
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160       695.71       
</span><br>
<span class="quotelev1">&gt; 695.89       695.80       718.50
</span><br>
<span class="quotelev1">&gt;             1       262144          160       690.64       
</span><br>
<span class="quotelev1">&gt; 690.73       690.69       723.87
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      1337.91      
</span><br>
<span class="quotelev1">&gt; 1338.30      1338.11       747.22
</span><br>
<span class="quotelev1">&gt;             1       524288           80      1335.54      
</span><br>
<span class="quotelev1">&gt; 1335.66      1335.60       748.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      2635.45      
</span><br>
<span class="quotelev1">&gt; 2636.05      2635.75       758.71
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      2624.10      
</span><br>
<span class="quotelev1">&gt; 2624.18      2624.14       762.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      5242.25      
</span><br>
<span class="quotelev1">&gt; 5243.81      5243.03       762.80
</span><br>
<span class="quotelev1">&gt;             1      2097152           20      5176.90      
</span><br>
<span class="quotelev1">&gt; 5177.15      5177.03       772.63
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     10407.00     
</span><br>
<span class="quotelev1">&gt; 10410.61     10408.80       768.45
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     10287.11     
</span><br>
<span class="quotelev1">&gt; 10287.41     10287.26       777.65
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000        18.80        
</span><br>
<span class="quotelev1">&gt; 18.81        18.81         0.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000         8.76         
</span><br>
<span class="quotelev1">&gt; 8.77         8.76         0.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000         8.77         
</span><br>
<span class="quotelev1">&gt; 8.79         8.78         0.43
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         8.66         
</span><br>
<span class="quotelev1">&gt; 8.69         8.67         0.88
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         8.84         
</span><br>
<span class="quotelev1">&gt; 8.85         8.85         1.72
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         8.88         
</span><br>
<span class="quotelev1">&gt; 8.89         8.89         3.43
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         9.03         
</span><br>
<span class="quotelev1">&gt; 9.11         9.08         6.70
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        10.09        
</span><br>
<span class="quotelev1">&gt; 10.10        10.10        12.08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        11.28        
</span><br>
<span class="quotelev1">&gt; 11.31        11.29        21.59
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        11.60        
</span><br>
<span class="quotelev1">&gt; 11.62        11.61        42.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        12.97        
</span><br>
<span class="quotelev1">&gt; 12.98        12.98        75.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        16.27        
</span><br>
<span class="quotelev1">&gt; 16.29        16.28       119.91
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        20.33        
</span><br>
<span class="quotelev1">&gt; 20.37        20.35       191.78
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        27.75        
</span><br>
<span class="quotelev1">&gt; 27.77        27.76       281.36
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        53.92        
</span><br>
<span class="quotelev1">&gt; 53.97        53.95       289.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000        94.15        
</span><br>
<span class="quotelev1">&gt; 94.19        94.17       331.77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       123.83       
</span><br>
<span class="quotelev1">&gt; 123.84       123.84       504.67
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       204.36       
</span><br>
<span class="quotelev1">&gt; 204.40       204.39       611.54
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       370.60       
</span><br>
<span class="quotelev1">&gt; 370.69       370.65       674.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160       693.22       
</span><br>
<span class="quotelev1">&gt; 693.38       693.33       721.10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      1341.00      
</span><br>
<span class="quotelev1">&gt; 1341.40      1341.18       745.49
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      2637.87      
</span><br>
<span class="quotelev1">&gt; 2640.20      2639.39       757.52
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      5228.25      
</span><br>
<span class="quotelev1">&gt; 5233.15      5230.40       764.36
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     10389.59     
</span><br>
<span class="quotelev1">&gt; 10425.91     10408.58       767.32
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Exchange 
</span><br>
<span class="quotelev1">&gt; Test Duration: 6.329 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  
</span><br>
<span class="quotelev1">&gt; t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000        10.01        11.46        
</span><br>
<span class="quotelev1">&gt; 10.74         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000        10.02        10.02        
</span><br>
<span class="quotelev1">&gt; 10.02         0.38
</span><br>
<span class="quotelev1">&gt;             2         1000         9.90         9.91         
</span><br>
<span class="quotelev1">&gt; 9.91         0.77
</span><br>
<span class="quotelev1">&gt;             4         1000         9.93         9.93         
</span><br>
<span class="quotelev1">&gt; 9.93         1.54
</span><br>
<span class="quotelev1">&gt;             8         1000         9.91         9.91         
</span><br>
<span class="quotelev1">&gt; 9.91         3.08
</span><br>
<span class="quotelev1">&gt;            16         1000        10.02        10.02        
</span><br>
<span class="quotelev1">&gt; 10.02         6.09
</span><br>
<span class="quotelev1">&gt;            32         1000        10.18        10.18        
</span><br>
<span class="quotelev1">&gt; 10.18        11.99
</span><br>
<span class="quotelev1">&gt;            64         1000        11.34        11.34        
</span><br>
<span class="quotelev1">&gt; 11.34        21.53
</span><br>
<span class="quotelev1">&gt;           128         1000        11.46        11.46        
</span><br>
<span class="quotelev1">&gt; 11.46        42.59
</span><br>
<span class="quotelev1">&gt;           256         1000        13.09        13.09        
</span><br>
<span class="quotelev1">&gt; 13.09        74.59
</span><br>
<span class="quotelev1">&gt;           512         1000        14.22        14.23        
</span><br>
<span class="quotelev1">&gt; 14.23       137.27
</span><br>
<span class="quotelev1">&gt;          1024         1000        21.13        21.15        
</span><br>
<span class="quotelev1">&gt; 21.14       184.68
</span><br>
<span class="quotelev1">&gt;          2048         1000        27.45        27.47        
</span><br>
<span class="quotelev1">&gt; 27.46       284.40
</span><br>
<span class="quotelev1">&gt;          4096         1000        41.29        41.29        
</span><br>
<span class="quotelev1">&gt; 41.29       378.40
</span><br>
<span class="quotelev1">&gt;          8192         1000        70.92        70.96        
</span><br>
<span class="quotelev1">&gt; 70.94       440.39
</span><br>
<span class="quotelev1">&gt;         16384         1000       129.32       129.32       
</span><br>
<span class="quotelev1">&gt; 129.32       483.28
</span><br>
<span class="quotelev1">&gt;         32768         1000       243.38       243.43       
</span><br>
<span class="quotelev1">&gt; 243.41       513.49
</span><br>
<span class="quotelev1">&gt;         65536          640       402.20       402.27       
</span><br>
<span class="quotelev1">&gt; 402.23       621.48
</span><br>
<span class="quotelev1">&gt;        131072          320       728.52       728.68       
</span><br>
<span class="quotelev1">&gt; 728.60       686.17
</span><br>
<span class="quotelev1">&gt;        262144          160      1370.86      1371.14      
</span><br>
<span class="quotelev1">&gt; 1371.00       729.32
</span><br>
<span class="quotelev1">&gt;        524288           80      2664.69      2665.32      
</span><br>
<span class="quotelev1">&gt; 2665.01       750.38
</span><br>
<span class="quotelev1">&gt;       1048576           40      5262.72      5264.00      
</span><br>
<span class="quotelev1">&gt; 5263.36       759.88
</span><br>
<span class="quotelev1">&gt;       2097152           20     10436.70     10439.55     
</span><br>
<span class="quotelev1">&gt; 10438.13       766.32
</span><br>
<span class="quotelev1">&gt;       4194304           10     20823.30     20828.69     
</span><br>
<span class="quotelev1">&gt; 20825.99       768.17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  
</span><br>
<span class="quotelev1">&gt; t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000        18.99        19.01        
</span><br>
<span class="quotelev1">&gt; 19.00         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000        10.33        10.34        
</span><br>
<span class="quotelev1">&gt; 10.33         0.37
</span><br>
<span class="quotelev1">&gt;             2         1000        10.26        10.27        
</span><br>
<span class="quotelev1">&gt; 10.26         0.74
</span><br>
<span class="quotelev1">&gt;             4         1000        10.53        10.54        
</span><br>
<span class="quotelev1">&gt; 10.53         1.45
</span><br>
<span class="quotelev1">&gt;             8         1000        10.44        10.45        
</span><br>
<span class="quotelev1">&gt; 10.45         2.92
</span><br>
<span class="quotelev1">&gt;            16         1000        10.62        10.63        
</span><br>
<span class="quotelev1">&gt; 10.63         5.74
</span><br>
<span class="quotelev1">&gt;            32         1000        10.62        10.63        
</span><br>
<span class="quotelev1">&gt; 10.63        11.48
</span><br>
<span class="quotelev1">&gt;            64         1000        12.11        12.12        
</span><br>
<span class="quotelev1">&gt; 12.12        20.14
</span><br>
<span class="quotelev1">&gt;           128         1000        12.18        12.18        
</span><br>
<span class="quotelev1">&gt; 12.18        40.08
</span><br>
<span class="quotelev1">&gt;           256         1000        13.80        13.81        
</span><br>
<span class="quotelev1">&gt; 13.81        70.71
</span><br>
<span class="quotelev1">&gt;           512         1000        15.60        15.61        
</span><br>
<span class="quotelev1">&gt; 15.60       125.13
</span><br>
<span class="quotelev1">&gt;          1024         1000        21.15        21.16        
</span><br>
<span class="quotelev1">&gt; 21.15       184.60
</span><br>
<span class="quotelev1">&gt;          2048         1000        28.88        28.90        
</span><br>
<span class="quotelev1">&gt; 28.89       270.37
</span><br>
<span class="quotelev1">&gt;          4096         1000        42.20        42.23        
</span><br>
<span class="quotelev1">&gt; 42.22       370.02
</span><br>
<span class="quotelev1">&gt;          8192         1000        71.28        71.32        
</span><br>
<span class="quotelev1">&gt; 71.30       438.18
</span><br>
<span class="quotelev1">&gt;         16384         1000       133.44       133.47       
</span><br>
<span class="quotelev1">&gt; 133.45       468.28
</span><br>
<span class="quotelev1">&gt;         32768         1000       237.90       237.94       
</span><br>
<span class="quotelev1">&gt; 237.93       525.33
</span><br>
<span class="quotelev1">&gt;         65536          640       401.07       401.13       
</span><br>
<span class="quotelev1">&gt; 401.10       623.23
</span><br>
<span class="quotelev1">&gt;        131072          320       729.60       729.73       
</span><br>
<span class="quotelev1">&gt; 729.69       685.19
</span><br>
<span class="quotelev1">&gt;        262144          160      1402.19      1402.44      
</span><br>
<span class="quotelev1">&gt; 1402.34       713.04
</span><br>
<span class="quotelev1">&gt;        524288           80      2665.29      2665.88      
</span><br>
<span class="quotelev1">&gt; 2665.54       750.22
</span><br>
<span class="quotelev1">&gt;       1048576           40      5250.57      5251.60      
</span><br>
<span class="quotelev1">&gt; 5251.06       761.67
</span><br>
<span class="quotelev1">&gt;       2097152           20     10444.26     10447.40     
</span><br>
<span class="quotelev1">&gt; 10445.36       765.74
</span><br>
<span class="quotelev1">&gt;       4194304           10     20819.70     20832.89     
</span><br>
<span class="quotelev1">&gt; 20825.37       768.02
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Exchange -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 6.289 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         9.97        
</span><br>
<span class="quotelev1">&gt; 11.54        10.76         0.00
</span><br>
<span class="quotelev1">&gt;             1            0         1000        13.24        
</span><br>
<span class="quotelev1">&gt; 13.25        13.25         0.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000         9.97         
</span><br>
<span class="quotelev1">&gt; 9.97         9.97         0.38
</span><br>
<span class="quotelev1">&gt;             1            1         1000         9.61         
</span><br>
<span class="quotelev1">&gt; 9.61         9.61         0.40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000         9.91         
</span><br>
<span class="quotelev1">&gt; 9.92         9.92         0.77
</span><br>
<span class="quotelev1">&gt;             1            2         1000         9.52         
</span><br>
<span class="quotelev1">&gt; 9.53         9.53         0.80
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         9.96         
</span><br>
<span class="quotelev1">&gt; 9.96         9.96         1.53
</span><br>
<span class="quotelev1">&gt;             1            4         1000         9.63         
</span><br>
<span class="quotelev1">&gt; 9.63         9.63         1.58
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         9.97         
</span><br>
<span class="quotelev1">&gt; 9.98         9.98         3.06
</span><br>
<span class="quotelev1">&gt;             1            8         1000         9.59         
</span><br>
<span class="quotelev1">&gt; 9.61         9.60         3.18
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         9.95         
</span><br>
<span class="quotelev1">&gt; 9.96         9.95         6.13
</span><br>
<span class="quotelev1">&gt;             1           16         1000         9.81         
</span><br>
<span class="quotelev1">&gt; 9.81         9.81         6.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        10.16        
</span><br>
<span class="quotelev1">&gt; 10.17        10.16        12.01
</span><br>
<span class="quotelev1">&gt;             1           32         1000         9.84         
</span><br>
<span class="quotelev1">&gt; 9.85         9.85        12.39
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        11.03        
</span><br>
<span class="quotelev1">&gt; 11.04        11.03        22.12
</span><br>
<span class="quotelev1">&gt;             1           64         1000        10.79        
</span><br>
<span class="quotelev1">&gt; 10.80        10.79        22.61
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        13.15        
</span><br>
<span class="quotelev1">&gt; 13.15        13.15        37.13
</span><br>
<span class="quotelev1">&gt;             1          128         1000        11.15        
</span><br>
<span class="quotelev1">&gt; 11.16        11.16        43.75
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        12.71        
</span><br>
<span class="quotelev1">&gt; 12.71        12.71        76.85
</span><br>
<span class="quotelev1">&gt;             1          256         1000        12.36        
</span><br>
<span class="quotelev1">&gt; 12.37        12.36        78.97
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        14.65        
</span><br>
<span class="quotelev1">&gt; 14.65        14.65       133.33
</span><br>
<span class="quotelev1">&gt;             1          512         1000        14.91        
</span><br>
<span class="quotelev1">&gt; 14.92        14.92       130.94
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        20.85        
</span><br>
<span class="quotelev1">&gt; 20.86        20.86       187.28
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        20.43        
</span><br>
<span class="quotelev1">&gt; 20.45        20.44       191.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        27.83        
</span><br>
<span class="quotelev1">&gt; 27.84        27.84       280.61
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        26.73        
</span><br>
<span class="quotelev1">&gt; 26.75        26.74       292.09
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        41.41        
</span><br>
<span class="quotelev1">&gt; 41.43        41.42       377.11
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        39.94        
</span><br>
<span class="quotelev1">&gt; 39.96        39.95       390.99
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        75.95        
</span><br>
<span class="quotelev1">&gt; 76.00        75.98       411.20
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        68.93        
</span><br>
<span class="quotelev1">&gt; 68.96        68.94       453.19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       132.65       
</span><br>
<span class="quotelev1">&gt; 132.72       132.69       470.91
</span><br>
<span class="quotelev1">&gt;             1        16384         1000       128.51       
</span><br>
<span class="quotelev1">&gt; 128.55       128.53       486.18
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       242.75       
</span><br>
<span class="quotelev1">&gt; 242.79       242.77       514.84
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       238.97       
</span><br>
<span class="quotelev1">&gt; 238.98       238.98       523.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       404.87       
</span><br>
<span class="quotelev1">&gt; 404.95       404.91       617.36
</span><br>
<span class="quotelev1">&gt;             1        65536          640       399.60       
</span><br>
<span class="quotelev1">&gt; 399.62       399.61       625.60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       728.02       
</span><br>
<span class="quotelev1">&gt; 728.17       728.10       686.65
</span><br>
<span class="quotelev1">&gt;             1       131072          320       724.31       
</span><br>
<span class="quotelev1">&gt; 724.36       724.33       690.27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      1369.27      
</span><br>
<span class="quotelev1">&gt; 1369.57      1369.42       730.16
</span><br>
<span class="quotelev1">&gt;             1       262144          160      1365.21      
</span><br>
<span class="quotelev1">&gt; 1365.30      1365.25       732.44
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      2666.80      
</span><br>
<span class="quotelev1">&gt; 2667.48      2667.14       749.77
</span><br>
<span class="quotelev1">&gt;             1       524288           80      2652.58      
</span><br>
<span class="quotelev1">&gt; 2652.63      2652.60       753.97
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      5247.70      
</span><br>
<span class="quotelev1">&gt; 5248.80      5248.25       762.08
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      5220.70      
</span><br>
<span class="quotelev1">&gt; 5221.15      5220.93       766.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     10438.40     
</span><br>
<span class="quotelev1">&gt; 10440.86     10439.63       766.22
</span><br>
<span class="quotelev1">&gt;             1      2097152           20     10409.95     
</span><br>
<span class="quotelev1">&gt; 10410.95     10410.45       768.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     20799.19     
</span><br>
<span class="quotelev1">&gt; 20804.09     20801.64       769.08
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     20591.10     
</span><br>
<span class="quotelev1">&gt; 20591.31     20591.21       777.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000        16.83        
</span><br>
<span class="quotelev1">&gt; 16.85        16.84         0.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000        10.28        
</span><br>
<span class="quotelev1">&gt; 10.29        10.28         0.37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000        10.27        
</span><br>
<span class="quotelev1">&gt; 10.28        10.27         0.74
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        10.27        
</span><br>
<span class="quotelev1">&gt; 10.28        10.28         1.48
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        10.35        
</span><br>
<span class="quotelev1">&gt; 10.38        10.36         2.94
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        10.40        
</span><br>
<span class="quotelev1">&gt; 10.42        10.41         5.86
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        10.59        
</span><br>
<span class="quotelev1">&gt; 10.61        10.60        11.51
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        11.73        
</span><br>
<span class="quotelev1">&gt; 11.74        11.74        20.79
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        12.19        
</span><br>
<span class="quotelev1">&gt; 12.20        12.19        40.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        13.37        
</span><br>
<span class="quotelev1">&gt; 13.38        13.38        72.97
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        15.58        
</span><br>
<span class="quotelev1">&gt; 15.59        15.59       125.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        21.11        
</span><br>
<span class="quotelev1">&gt; 21.13        21.12       184.85
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        28.09        
</span><br>
<span class="quotelev1">&gt; 28.10        28.10       277.99
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        41.51        
</span><br>
<span class="quotelev1">&gt; 41.54        41.52       376.17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        69.64        
</span><br>
<span class="quotelev1">&gt; 69.68        69.66       448.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       129.73       
</span><br>
<span class="quotelev1">&gt; 129.79       129.76       481.57
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       240.58       
</span><br>
<span class="quotelev1">&gt; 240.64       240.62       519.45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       403.15       
</span><br>
<span class="quotelev1">&gt; 403.23       403.20       620.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       733.58       
</span><br>
<span class="quotelev1">&gt; 733.76       733.70       681.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      1438.44      
</span><br>
<span class="quotelev1">&gt; 1438.87      1438.72       694.99
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      2671.47      
</span><br>
<span class="quotelev1">&gt; 2672.16      2671.92       748.46
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      5282.70      
</span><br>
<span class="quotelev1">&gt; 5284.03      5283.49       757.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     10453.80     
</span><br>
<span class="quotelev1">&gt; 10461.55     10458.58       764.71
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     20774.30     
</span><br>
<span class="quotelev1">&gt; 20786.60     20779.53       769.73
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Reduce 
</span><br>
<span class="quotelev1">&gt; Test Duration: 6.999 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.07         0.09         0.08
</span><br>
<span class="quotelev1">&gt;             4         1000        15.09        15.10        15.10
</span><br>
<span class="quotelev1">&gt;             8         1000         7.82         7.82         7.82
</span><br>
<span class="quotelev1">&gt;            16         1000         7.63         7.63         7.63
</span><br>
<span class="quotelev1">&gt;            32         1000         7.96         7.96         7.96
</span><br>
<span class="quotelev1">&gt;            64         1000         9.00         9.00         9.00
</span><br>
<span class="quotelev1">&gt;           128         1000         9.41         9.41         9.41
</span><br>
<span class="quotelev1">&gt;           256         1000        10.39        10.39        10.39
</span><br>
<span class="quotelev1">&gt;           512         1000        11.66        11.66        11.66
</span><br>
<span class="quotelev1">&gt;          1024         1000        14.66        14.67        14.66
</span><br>
<span class="quotelev1">&gt;          2048         1000        18.60        18.60        18.60
</span><br>
<span class="quotelev1">&gt;          4096         1000        25.24        25.25        25.25
</span><br>
<span class="quotelev1">&gt;          8192         1000        39.60        39.62        39.61
</span><br>
<span class="quotelev1">&gt;         16384         1000        67.17        67.21        67.19
</span><br>
<span class="quotelev1">&gt;         32768         1000       110.43       110.43       110.43
</span><br>
<span class="quotelev1">&gt;         65536          640       179.86       179.90       179.88
</span><br>
<span class="quotelev1">&gt;        131072          320       328.67       328.93       328.80
</span><br>
<span class="quotelev1">&gt;        262144          160      1437.36      1441.53      1439.44
</span><br>
<span class="quotelev1">&gt;        524288           80      2702.94      2718.30      2710.62
</span><br>
<span class="quotelev1">&gt;       1048576           40      5261.58      5317.90      5289.74
</span><br>
<span class="quotelev1">&gt;       2097152           20     10345.46     10573.29     10459.37
</span><br>
<span class="quotelev1">&gt;       4194304           10     20220.49     21127.30     20673.90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.07         0.07         0.07
</span><br>
<span class="quotelev1">&gt;             4         1000        95.97        96.01        95.99
</span><br>
<span class="quotelev1">&gt;             8         1000         8.92         8.94         8.93
</span><br>
<span class="quotelev1">&gt;            16         1000         8.89         8.91         8.90
</span><br>
<span class="quotelev1">&gt;            32         1000         9.11         9.19         9.16
</span><br>
<span class="quotelev1">&gt;            64         1000        10.32        10.34        10.33
</span><br>
<span class="quotelev1">&gt;           128         1000        10.92        10.95        10.93
</span><br>
<span class="quotelev1">&gt;           256         1000        12.24        12.27        12.25
</span><br>
<span class="quotelev1">&gt;           512         1000        13.94        13.98        13.96
</span><br>
<span class="quotelev1">&gt;          1024         1000        17.59        17.63        17.61
</span><br>
<span class="quotelev1">&gt;          2048         1000        23.05        23.11        23.07
</span><br>
<span class="quotelev1">&gt;          4096         1000        33.54        33.61        33.57
</span><br>
<span class="quotelev1">&gt;          8192         1000        54.91        55.04        54.97
</span><br>
<span class="quotelev1">&gt;         16384         1000       105.20       105.43       105.30
</span><br>
<span class="quotelev1">&gt;         32768         1000       282.82       283.05       282.94
</span><br>
<span class="quotelev1">&gt;         65536          640       473.08       473.68       473.41
</span><br>
<span class="quotelev1">&gt;        131072          320       872.08       874.50       873.42
</span><br>
<span class="quotelev1">&gt;        262144          160      2486.53      2498.51      2493.06
</span><br>
<span class="quotelev1">&gt;        524288           80      5017.72      5074.60      5048.90
</span><br>
<span class="quotelev1">&gt;       1048576           40     11351.25     11573.85     11467.14
</span><br>
<span class="quotelev1">&gt;       2097152           20     22447.00     23285.15     22888.91
</span><br>
<span class="quotelev1">&gt;       4194304           10     41543.21     46419.71     44247.70
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Reduce -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 7.000 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.07         
</span><br>
<span class="quotelev1">&gt; 0.07         0.07
</span><br>
<span class="quotelev1">&gt;             1            0         1000         0.06         
</span><br>
<span class="quotelev1">&gt; 0.06         0.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        14.91        
</span><br>
<span class="quotelev1">&gt; 14.92        14.91
</span><br>
<span class="quotelev1">&gt;             1            4         1000        15.19        
</span><br>
<span class="quotelev1">&gt; 15.20        15.19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         7.63         
</span><br>
<span class="quotelev1">&gt; 7.63         7.63
</span><br>
<span class="quotelev1">&gt;             1            8         1000         7.53         
</span><br>
<span class="quotelev1">&gt; 7.54         7.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         7.62         
</span><br>
<span class="quotelev1">&gt; 7.62         7.62
</span><br>
<span class="quotelev1">&gt;             1           16         1000         7.61         
</span><br>
<span class="quotelev1">&gt; 7.62         7.62
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         7.74         
</span><br>
<span class="quotelev1">&gt; 7.75         7.75
</span><br>
<span class="quotelev1">&gt;             1           32         1000         7.76         
</span><br>
<span class="quotelev1">&gt; 7.77         7.77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000         8.94         
</span><br>
<span class="quotelev1">&gt; 8.95         8.94
</span><br>
<span class="quotelev1">&gt;             1           64         1000         8.97         
</span><br>
<span class="quotelev1">&gt; 8.98         8.98
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000         9.38         
</span><br>
<span class="quotelev1">&gt; 9.38         9.38
</span><br>
<span class="quotelev1">&gt;             1          128         1000         9.45         
</span><br>
<span class="quotelev1">&gt; 9.46         9.46
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        10.34        
</span><br>
<span class="quotelev1">&gt; 10.34        10.34
</span><br>
<span class="quotelev1">&gt;             1          256         1000        10.17        
</span><br>
<span class="quotelev1">&gt; 10.18        10.18
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        13.35        
</span><br>
<span class="quotelev1">&gt; 13.35        13.35
</span><br>
<span class="quotelev1">&gt;             1          512         1000        11.46        
</span><br>
<span class="quotelev1">&gt; 11.47        11.47
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        14.54        
</span><br>
<span class="quotelev1">&gt; 14.55        14.54
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        14.41        
</span><br>
<span class="quotelev1">&gt; 14.43        14.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        18.28        
</span><br>
<span class="quotelev1">&gt; 18.29        18.29
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        18.30        
</span><br>
<span class="quotelev1">&gt; 18.32        18.31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        25.36        
</span><br>
<span class="quotelev1">&gt; 25.38        25.37
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        25.11        
</span><br>
<span class="quotelev1">&gt; 25.14        25.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        39.01        
</span><br>
<span class="quotelev1">&gt; 39.04        39.02
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        40.01        
</span><br>
<span class="quotelev1">&gt; 40.05        40.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000        67.16        
</span><br>
<span class="quotelev1">&gt; 67.20        67.18
</span><br>
<span class="quotelev1">&gt;             1        16384         1000        68.11        
</span><br>
<span class="quotelev1">&gt; 68.18        68.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       109.07       
</span><br>
<span class="quotelev1">&gt; 109.08       109.07
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       108.65       
</span><br>
<span class="quotelev1">&gt; 108.69       108.67
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       181.28       
</span><br>
<span class="quotelev1">&gt; 181.33       181.30
</span><br>
<span class="quotelev1">&gt;             1        65536          640       179.40       
</span><br>
<span class="quotelev1">&gt; 179.49       179.44
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       329.42       
</span><br>
<span class="quotelev1">&gt; 329.68       329.55
</span><br>
<span class="quotelev1">&gt;             1       131072          320       327.54       
</span><br>
<span class="quotelev1">&gt; 327.90       327.72
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      1441.79      
</span><br>
<span class="quotelev1">&gt; 1446.28      1444.03
</span><br>
<span class="quotelev1">&gt;             1       262144          160      1399.98      
</span><br>
<span class="quotelev1">&gt; 1404.23      1402.10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      2741.36      
</span><br>
<span class="quotelev1">&gt; 2757.04      2749.20
</span><br>
<span class="quotelev1">&gt;             1       524288           80      2698.99      
</span><br>
<span class="quotelev1">&gt; 2714.05      2706.52
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      5220.40      
</span><br>
<span class="quotelev1">&gt; 5278.08      5249.24
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      5121.60      
</span><br>
<span class="quotelev1">&gt; 5177.47      5149.54
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     10209.80     
</span><br>
<span class="quotelev1">&gt; 10425.75     10317.78
</span><br>
<span class="quotelev1">&gt;             1      2097152           20     10289.00     
</span><br>
<span class="quotelev1">&gt; 10506.06     10397.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     19867.90     
</span><br>
<span class="quotelev1">&gt; 20674.00     20270.95
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     19935.30     
</span><br>
<span class="quotelev1">&gt; 20791.00     20363.15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.07         
</span><br>
<span class="quotelev1">&gt; 0.07         0.07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        18.01        
</span><br>
<span class="quotelev1">&gt; 18.05        18.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         9.03         
</span><br>
<span class="quotelev1">&gt; 9.05         9.04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         9.01         
</span><br>
<span class="quotelev1">&gt; 9.04         9.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         9.23         
</span><br>
<span class="quotelev1">&gt; 9.26         9.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        10.35        
</span><br>
<span class="quotelev1">&gt; 10.39        10.37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        10.98        
</span><br>
<span class="quotelev1">&gt; 11.02        11.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        12.33        
</span><br>
<span class="quotelev1">&gt; 12.37        12.35
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        13.84        
</span><br>
<span class="quotelev1">&gt; 13.89        13.86
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        17.61        
</span><br>
<span class="quotelev1">&gt; 17.66        17.64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        23.02        
</span><br>
<span class="quotelev1">&gt; 23.09        23.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        33.41        
</span><br>
<span class="quotelev1">&gt; 33.49        33.45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        56.72        
</span><br>
<span class="quotelev1">&gt; 56.86        56.78
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       105.83       
</span><br>
<span class="quotelev1">&gt; 106.06       105.94
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       284.02       
</span><br>
<span class="quotelev1">&gt; 284.25       284.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       478.39       
</span><br>
<span class="quotelev1">&gt; 479.01       478.73
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       871.73       
</span><br>
<span class="quotelev1">&gt; 874.10       873.04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      2718.90      
</span><br>
<span class="quotelev1">&gt; 2733.26      2726.07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      5462.75      
</span><br>
<span class="quotelev1">&gt; 5521.28      5492.48
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40     11273.95     
</span><br>
<span class="quotelev1">&gt; 11497.07     11389.24
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     22380.00     
</span><br>
<span class="quotelev1">&gt; 23276.70     22850.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     41432.80     
</span><br>
<span class="quotelev1">&gt; 46174.20     44063.35
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Reduce_scatter 
</span><br>
<span class="quotelev1">&gt; Test Duration: 13.139 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.09         0.09         0.09
</span><br>
<span class="quotelev1">&gt;             4         1000       103.56       110.11       106.83
</span><br>
<span class="quotelev1">&gt;             8         1000        15.40        15.41        15.41
</span><br>
<span class="quotelev1">&gt;            16         1000        15.46        15.46        15.46
</span><br>
<span class="quotelev1">&gt;            32         1000        15.58        15.58        15.58
</span><br>
<span class="quotelev1">&gt;            64         1000        16.83        16.83        16.83
</span><br>
<span class="quotelev1">&gt;           128         1000        18.28        18.28        18.28
</span><br>
<span class="quotelev1">&gt;           256         1000        19.74        19.74        19.74
</span><br>
<span class="quotelev1">&gt;           512         1000        21.85        21.85        21.85
</span><br>
<span class="quotelev1">&gt;          1024         1000        26.03        26.03        26.03
</span><br>
<span class="quotelev1">&gt;          2048         1000        32.28        32.28        32.28
</span><br>
<span class="quotelev1">&gt;          4096         1000        42.88        42.88        42.88
</span><br>
<span class="quotelev1">&gt;          8192         1000        62.70        62.70        62.70
</span><br>
<span class="quotelev1">&gt;         16384         1000       102.41       102.42       102.41
</span><br>
<span class="quotelev1">&gt;         32768         1000       170.04       170.05       170.05
</span><br>
<span class="quotelev1">&gt;         65536          640       276.37       276.41       276.39
</span><br>
<span class="quotelev1">&gt;        131072          320       577.86       578.05       577.96
</span><br>
<span class="quotelev1">&gt;        262144          160      2278.61      2281.04      2279.83
</span><br>
<span class="quotelev1">&gt;        524288           80      4393.82      4399.40      4396.61
</span><br>
<span class="quotelev1">&gt;       1048576           40      8482.20      8497.58      8489.89
</span><br>
<span class="quotelev1">&gt;       2097152           20     16983.75     17031.95     17007.85
</span><br>
<span class="quotelev1">&gt;       4194304           10     33703.21     33863.61     33783.41
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.16         0.17         0.16
</span><br>
<span class="quotelev1">&gt;             4         1000         1.58       125.57        82.74
</span><br>
<span class="quotelev1">&gt;             8         1000         1.63        23.59        12.62
</span><br>
<span class="quotelev1">&gt;            16         1000        26.44        26.46        26.45
</span><br>
<span class="quotelev1">&gt;            32         1000        26.57        26.59        26.58
</span><br>
<span class="quotelev1">&gt;            64         1000        27.85        27.87        27.86
</span><br>
<span class="quotelev1">&gt;           128         1000        28.60        28.62        28.61
</span><br>
<span class="quotelev1">&gt;           256         1000        28.45        28.47        28.46
</span><br>
<span class="quotelev1">&gt;           512         1000        33.40        33.42        33.41
</span><br>
<span class="quotelev1">&gt;          1024         1000        34.57        34.59        34.58
</span><br>
<span class="quotelev1">&gt;          2048         1000        44.37        44.39        44.38
</span><br>
<span class="quotelev1">&gt;          4096         1000        63.89        63.91        63.91
</span><br>
<span class="quotelev1">&gt;          8192         1000       101.82       101.85       101.84
</span><br>
<span class="quotelev1">&gt;         16384         1000       174.28       174.33       174.31
</span><br>
<span class="quotelev1">&gt;         32768         1000      1344.88      1345.14      1345.07
</span><br>
<span class="quotelev1">&gt;         65536          640       673.66       673.87       673.79
</span><br>
<span class="quotelev1">&gt;        131072          320      4261.23      4266.19      4264.25
</span><br>
<span class="quotelev1">&gt;        262144          160      6760.22      6771.17      6766.40
</span><br>
<span class="quotelev1">&gt;        524288           80     11947.40     11974.67     11962.54
</span><br>
<span class="quotelev1">&gt;       1048576           40     22110.45     22185.45     22152.57
</span><br>
<span class="quotelev1">&gt;       2097152           20     36873.10     37003.40     36937.47
</span><br>
<span class="quotelev1">&gt;       4194304           10     72581.01     73049.29     72814.97
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Reduce_scatter -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 13.139 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.09         
</span><br>
<span class="quotelev1">&gt; 0.09         0.09
</span><br>
<span class="quotelev1">&gt;             1            0         1000         0.08         
</span><br>
<span class="quotelev1">&gt; 0.08         0.08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000       104.08       
</span><br>
<span class="quotelev1">&gt; 107.45       105.77
</span><br>
<span class="quotelev1">&gt;             1            4         1000       103.74       
</span><br>
<span class="quotelev1">&gt; 112.48       108.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        15.12        
</span><br>
<span class="quotelev1">&gt; 15.13        15.12
</span><br>
<span class="quotelev1">&gt;             1            8         1000        15.06        
</span><br>
<span class="quotelev1">&gt; 15.07        15.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        15.16        
</span><br>
<span class="quotelev1">&gt; 15.17        15.17
</span><br>
<span class="quotelev1">&gt;             1           16         1000        14.90        
</span><br>
<span class="quotelev1">&gt; 14.91        14.91
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        15.43        
</span><br>
<span class="quotelev1">&gt; 15.44        15.43
</span><br>
<span class="quotelev1">&gt;             1           32         1000        15.11        
</span><br>
<span class="quotelev1">&gt; 15.12        15.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        16.80        
</span><br>
<span class="quotelev1">&gt; 16.81        16.81
</span><br>
<span class="quotelev1">&gt;             1           64         1000        16.60        
</span><br>
<span class="quotelev1">&gt; 16.61        16.61
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        18.23        
</span><br>
<span class="quotelev1">&gt; 18.23        18.23
</span><br>
<span class="quotelev1">&gt;             1          128         1000        17.93        
</span><br>
<span class="quotelev1">&gt; 17.94        17.93
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        20.14        
</span><br>
<span class="quotelev1">&gt; 20.14        20.14
</span><br>
<span class="quotelev1">&gt;             1          256         1000        19.08        
</span><br>
<span class="quotelev1">&gt; 19.09        19.09
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        23.24        
</span><br>
<span class="quotelev1">&gt; 23.24        23.24
</span><br>
<span class="quotelev1">&gt;             1          512         1000        21.20        
</span><br>
<span class="quotelev1">&gt; 21.21        21.20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        25.82        
</span><br>
<span class="quotelev1">&gt; 25.83        25.82
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        25.32        
</span><br>
<span class="quotelev1">&gt; 25.32        25.32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        31.92        
</span><br>
<span class="quotelev1">&gt; 31.92        31.92
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        31.67        
</span><br>
<span class="quotelev1">&gt; 31.69        31.68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        42.01        
</span><br>
<span class="quotelev1">&gt; 42.01        42.01
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        41.96        
</span><br>
<span class="quotelev1">&gt; 41.98        41.97
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        62.32        
</span><br>
<span class="quotelev1">&gt; 62.32        62.32
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        61.64        
</span><br>
<span class="quotelev1">&gt; 61.67        61.65
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       101.94       
</span><br>
<span class="quotelev1">&gt; 101.95       101.94
</span><br>
<span class="quotelev1">&gt;             1        16384         1000       101.36       
</span><br>
<span class="quotelev1">&gt; 101.39       101.37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       165.90       
</span><br>
<span class="quotelev1">&gt; 165.92       165.91
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       167.94       
</span><br>
<span class="quotelev1">&gt; 167.99       167.96
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       279.32       
</span><br>
<span class="quotelev1">&gt; 279.37       279.35
</span><br>
<span class="quotelev1">&gt;             1        65536          640       276.40       
</span><br>
<span class="quotelev1">&gt; 276.40       276.40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       583.91       
</span><br>
<span class="quotelev1">&gt; 584.11       584.01
</span><br>
<span class="quotelev1">&gt;             1       131072          320       530.21       
</span><br>
<span class="quotelev1">&gt; 530.24       530.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      2297.08      
</span><br>
<span class="quotelev1">&gt; 2299.36      2298.22
</span><br>
<span class="quotelev1">&gt;             1       262144          160      2271.50      
</span><br>
<span class="quotelev1">&gt; 2273.19      2272.35
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      4494.29      
</span><br>
<span class="quotelev1">&gt; 4500.10      4497.19
</span><br>
<span class="quotelev1">&gt;             1       524288           80      4328.51      
</span><br>
<span class="quotelev1">&gt; 4333.54      4331.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      8386.25      
</span><br>
<span class="quotelev1">&gt; 8401.35      8393.80
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      8607.18      
</span><br>
<span class="quotelev1">&gt; 8620.70      8613.94
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     17036.05     
</span><br>
<span class="quotelev1">&gt; 17084.65     17060.35
</span><br>
<span class="quotelev1">&gt;             1      2097152           20     17381.00     
</span><br>
<span class="quotelev1">&gt; 17426.40     17403.70
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     33299.60     
</span><br>
<span class="quotelev1">&gt; 33459.90     33379.75
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     34933.89     
</span><br>
<span class="quotelev1">&gt; 35096.40     35015.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.16         
</span><br>
<span class="quotelev1">&gt; 0.17         0.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         1.61       
</span><br>
<span class="quotelev1">&gt; 115.35        57.34
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         1.60        
</span><br>
<span class="quotelev1">&gt; 23.64        12.62
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        27.11        
</span><br>
<span class="quotelev1">&gt; 27.13        27.12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        27.13        
</span><br>
<span class="quotelev1">&gt; 27.15        27.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        28.15        
</span><br>
<span class="quotelev1">&gt; 28.17        28.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        29.04        
</span><br>
<span class="quotelev1">&gt; 29.06        29.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        30.94        
</span><br>
<span class="quotelev1">&gt; 30.96        30.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        33.68        
</span><br>
<span class="quotelev1">&gt; 33.70        33.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        36.91        
</span><br>
<span class="quotelev1">&gt; 36.93        36.92
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        45.90        
</span><br>
<span class="quotelev1">&gt; 45.91        45.91
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        65.67        
</span><br>
<span class="quotelev1">&gt; 65.69        65.68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000       103.55       
</span><br>
<span class="quotelev1">&gt; 103.58       103.57
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       177.91       
</span><br>
<span class="quotelev1">&gt; 177.96       177.94
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000      1353.36      
</span><br>
<span class="quotelev1">&gt; 1353.63      1353.55
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       676.91       
</span><br>
<span class="quotelev1">&gt; 677.09       677.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320      4241.57      
</span><br>
<span class="quotelev1">&gt; 4246.66      4244.66
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      6770.91      
</span><br>
<span class="quotelev1">&gt; 6782.06      6777.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80     11921.58     
</span><br>
<span class="quotelev1">&gt; 11948.23     11936.62
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40     22039.17     
</span><br>
<span class="quotelev1">&gt; 22112.38     22080.08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     37074.80     
</span><br>
<span class="quotelev1">&gt; 37205.05     37139.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     73296.40     
</span><br>
<span class="quotelev1">&gt; 73763.79     73530.40
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Allreduce 
</span><br>
<span class="quotelev1">&gt; Test Duration: 9.839 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.04         0.04         0.04
</span><br>
<span class="quotelev1">&gt;             4         1000        16.66        18.49        17.58
</span><br>
<span class="quotelev1">&gt;             8         1000        15.04        15.04        15.04
</span><br>
<span class="quotelev1">&gt;            16         1000        15.08        15.09        15.08
</span><br>
<span class="quotelev1">&gt;            32         1000        15.29        15.30        15.30
</span><br>
<span class="quotelev1">&gt;            64         1000        17.59        17.59        17.59
</span><br>
<span class="quotelev1">&gt;           128         1000        18.43        18.43        18.43
</span><br>
<span class="quotelev1">&gt;           256         1000        20.14        20.14        20.14
</span><br>
<span class="quotelev1">&gt;           512         1000        22.60        22.60        22.60
</span><br>
<span class="quotelev1">&gt;          1024         1000        28.17        28.17        28.17
</span><br>
<span class="quotelev1">&gt;          2048         1000        35.94        35.94        35.94
</span><br>
<span class="quotelev1">&gt;          4096         1000        46.86        46.86        46.86
</span><br>
<span class="quotelev1">&gt;          8192         1000        71.59        71.60        71.59
</span><br>
<span class="quotelev1">&gt;         16384         1000       124.06       124.08       124.07
</span><br>
<span class="quotelev1">&gt;         32768         1000       200.80       200.84       200.82
</span><br>
<span class="quotelev1">&gt;         65536          640       327.94       327.99       327.97
</span><br>
<span class="quotelev1">&gt;        131072          320       582.19       582.32       582.25
</span><br>
<span class="quotelev1">&gt;        262144          160      1309.89      1310.12      1310.00
</span><br>
<span class="quotelev1">&gt;        524288           80      2438.80      2439.33      2439.06
</span><br>
<span class="quotelev1">&gt;       1048576           40      4633.92      4634.83      4634.37
</span><br>
<span class="quotelev1">&gt;       2097152           20      9253.74      9255.55      9254.65
</span><br>
<span class="quotelev1">&gt;       4194304           10     18454.71     18457.90     18456.30
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.04         0.05         0.04
</span><br>
<span class="quotelev1">&gt;             4         1000        29.43        29.46        29.44
</span><br>
<span class="quotelev1">&gt;             8         1000        25.81        25.83        25.82
</span><br>
<span class="quotelev1">&gt;            16         1000        26.17        26.19        26.18
</span><br>
<span class="quotelev1">&gt;            32         1000        26.22        26.24        26.23
</span><br>
<span class="quotelev1">&gt;            64         1000        30.45        30.47        30.46
</span><br>
<span class="quotelev1">&gt;           128         1000        31.27        31.29        31.28
</span><br>
<span class="quotelev1">&gt;           256         1000        33.91        33.93        33.92
</span><br>
<span class="quotelev1">&gt;           512         1000        38.45        38.47        38.46
</span><br>
<span class="quotelev1">&gt;          1024         1000        48.97        49.00        48.99
</span><br>
<span class="quotelev1">&gt;          2048         1000        59.94        59.97        59.95
</span><br>
<span class="quotelev1">&gt;          4096         1000        83.83        83.87        83.85
</span><br>
<span class="quotelev1">&gt;          8192         1000       134.24       134.29       134.26
</span><br>
<span class="quotelev1">&gt;         16384         1000       245.60       245.77       245.69
</span><br>
<span class="quotelev1">&gt;         32768         1000       523.95       524.03       523.98
</span><br>
<span class="quotelev1">&gt;         65536          640       881.63       881.78       881.67
</span><br>
<span class="quotelev1">&gt;        131072          320      1643.84      1644.43      1644.07
</span><br>
<span class="quotelev1">&gt;        262144          160      4608.31      4610.54      4609.24
</span><br>
<span class="quotelev1">&gt;        524288           80      9078.54      9087.41      9082.61
</span><br>
<span class="quotelev1">&gt;       1048576           40     17319.03     17354.53     17336.08
</span><br>
<span class="quotelev1">&gt;       2097152           20     34595.25     34736.90     34664.58
</span><br>
<span class="quotelev1">&gt;       4194304           10     68758.90     69328.70     69040.74
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Allreduce -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 9.939 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.04         
</span><br>
<span class="quotelev1">&gt; 0.04         0.04
</span><br>
<span class="quotelev1">&gt;             1            0         1000         0.04         
</span><br>
<span class="quotelev1">&gt; 0.04         0.04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        15.08        
</span><br>
<span class="quotelev1">&gt; 16.79        15.94
</span><br>
<span class="quotelev1">&gt;             1            4         1000        21.90        
</span><br>
<span class="quotelev1">&gt; 21.90        21.90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        14.92        
</span><br>
<span class="quotelev1">&gt; 14.92        14.92
</span><br>
<span class="quotelev1">&gt;             1            8         1000        14.81        
</span><br>
<span class="quotelev1">&gt; 14.81        14.81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        15.01        
</span><br>
<span class="quotelev1">&gt; 15.01        15.01
</span><br>
<span class="quotelev1">&gt;             1           16         1000        14.75        
</span><br>
<span class="quotelev1">&gt; 14.76        14.76
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        15.37        
</span><br>
<span class="quotelev1">&gt; 15.37        15.37
</span><br>
<span class="quotelev1">&gt;             1           32         1000        15.06        
</span><br>
<span class="quotelev1">&gt; 15.06        15.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        17.71        
</span><br>
<span class="quotelev1">&gt; 17.72        17.71
</span><br>
<span class="quotelev1">&gt;             1           64         1000        17.25        
</span><br>
<span class="quotelev1">&gt; 17.26        17.26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        18.76        
</span><br>
<span class="quotelev1">&gt; 18.76        18.76
</span><br>
<span class="quotelev1">&gt;             1          128         1000        18.26        
</span><br>
<span class="quotelev1">&gt; 18.26        18.26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        20.52        
</span><br>
<span class="quotelev1">&gt; 20.52        20.52
</span><br>
<span class="quotelev1">&gt;             1          256         1000        19.62        
</span><br>
<span class="quotelev1">&gt; 19.63        19.63
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        24.53        
</span><br>
<span class="quotelev1">&gt; 24.53        24.53
</span><br>
<span class="quotelev1">&gt;             1          512         1000        22.09        
</span><br>
<span class="quotelev1">&gt; 22.10        22.09
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        28.33        
</span><br>
<span class="quotelev1">&gt; 28.33        28.33
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        27.53        
</span><br>
<span class="quotelev1">&gt; 27.54        27.54
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        35.29        
</span><br>
<span class="quotelev1">&gt; 35.29        35.29
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        34.73        
</span><br>
<span class="quotelev1">&gt; 34.73        34.73
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        47.23        
</span><br>
<span class="quotelev1">&gt; 47.23        47.23
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        46.55        
</span><br>
<span class="quotelev1">&gt; 46.56        46.56
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        72.81        
</span><br>
<span class="quotelev1">&gt; 72.83        72.82
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        71.28        
</span><br>
<span class="quotelev1">&gt; 71.30        71.29
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       122.72       
</span><br>
<span class="quotelev1">&gt; 122.74       122.73
</span><br>
<span class="quotelev1">&gt;             1        16384         1000       124.11       
</span><br>
<span class="quotelev1">&gt; 124.14       124.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       202.91       
</span><br>
<span class="quotelev1">&gt; 202.95       202.93
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       198.72       
</span><br>
<span class="quotelev1">&gt; 198.73       198.73
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       326.64       
</span><br>
<span class="quotelev1">&gt; 326.69       326.66
</span><br>
<span class="quotelev1">&gt;             1        65536          640       326.41       
</span><br>
<span class="quotelev1">&gt; 326.43       326.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       578.43       
</span><br>
<span class="quotelev1">&gt; 578.54       578.49
</span><br>
<span class="quotelev1">&gt;             1       131072          320       585.07       
</span><br>
<span class="quotelev1">&gt; 585.09       585.08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      1275.05      
</span><br>
<span class="quotelev1">&gt; 1275.28      1275.16
</span><br>
<span class="quotelev1">&gt;             1       262144          160      1245.09      
</span><br>
<span class="quotelev1">&gt; 1245.16      1245.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      2380.48      
</span><br>
<span class="quotelev1">&gt; 2380.94      2380.71
</span><br>
<span class="quotelev1">&gt;             1       524288           80      2413.58      
</span><br>
<span class="quotelev1">&gt; 2413.71      2413.64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      4665.67      
</span><br>
<span class="quotelev1">&gt; 4666.55      4666.11
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      4644.95      
</span><br>
<span class="quotelev1">&gt; 4645.05      4645.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      9234.45      
</span><br>
<span class="quotelev1">&gt; 9236.45      9235.45
</span><br>
<span class="quotelev1">&gt;             1      2097152           20      9316.60      
</span><br>
<span class="quotelev1">&gt; 9317.00      9316.80
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     18342.80     
</span><br>
<span class="quotelev1">&gt; 18345.80     18344.30
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     18693.79     
</span><br>
<span class="quotelev1">&gt; 18694.31     18694.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.03         
</span><br>
<span class="quotelev1">&gt; 0.04         0.04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        30.58        
</span><br>
<span class="quotelev1">&gt; 30.61        30.59
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        25.96        
</span><br>
<span class="quotelev1">&gt; 25.98        25.97
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        25.81        
</span><br>
<span class="quotelev1">&gt; 25.82        25.82
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        26.25        
</span><br>
<span class="quotelev1">&gt; 26.27        26.26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        30.18        
</span><br>
<span class="quotelev1">&gt; 30.20        30.19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        31.60        
</span><br>
<span class="quotelev1">&gt; 31.62        31.61
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        35.04        
</span><br>
<span class="quotelev1">&gt; 35.06        35.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        38.56        
</span><br>
<span class="quotelev1">&gt; 38.58        38.57
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        47.80        
</span><br>
<span class="quotelev1">&gt; 47.83        47.81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        60.04        
</span><br>
<span class="quotelev1">&gt; 60.07        60.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        83.09        
</span><br>
<span class="quotelev1">&gt; 83.13        83.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000       133.29       
</span><br>
<span class="quotelev1">&gt; 133.34       133.31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       242.23       
</span><br>
<span class="quotelev1">&gt; 242.32       242.26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       526.61       
</span><br>
<span class="quotelev1">&gt; 526.70       526.64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       882.81       
</span><br>
<span class="quotelev1">&gt; 882.97       882.85
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320      1624.91      
</span><br>
<span class="quotelev1">&gt; 1625.51      1625.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      4753.44      
</span><br>
<span class="quotelev1">&gt; 4755.68      4754.38
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      9000.99      
</span><br>
<span class="quotelev1">&gt; 9010.04      9005.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40     17733.20     
</span><br>
<span class="quotelev1">&gt; 17769.92     17750.84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     34719.90     
</span><br>
<span class="quotelev1">&gt; 34861.45     34789.24
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     68189.00     
</span><br>
<span class="quotelev1">&gt; 68761.81     68472.36
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Bcast 
</span><br>
<span class="quotelev1">&gt; Test Duration: 4.579 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.05         0.07         0.06
</span><br>
<span class="quotelev1">&gt;             1         1000        14.75        14.76        14.75
</span><br>
<span class="quotelev1">&gt;             2         1000         7.38         7.39         7.39
</span><br>
<span class="quotelev1">&gt;             4         1000         7.33         7.35         7.34
</span><br>
<span class="quotelev1">&gt;             8         1000         7.48         7.50         7.49
</span><br>
<span class="quotelev1">&gt;            16         1000         7.45         7.46         7.46
</span><br>
<span class="quotelev1">&gt;            32         1000         7.56         7.57         7.57
</span><br>
<span class="quotelev1">&gt;            64         1000         8.76         8.78         8.77
</span><br>
<span class="quotelev1">&gt;           128         1000         9.21         9.22         9.22
</span><br>
<span class="quotelev1">&gt;           256         1000         9.94         9.95         9.94
</span><br>
<span class="quotelev1">&gt;           512         1000        11.04        11.06        11.05
</span><br>
<span class="quotelev1">&gt;          1024         1000        13.60        13.62        13.61
</span><br>
<span class="quotelev1">&gt;          2048         1000        16.79        16.81        16.80
</span><br>
<span class="quotelev1">&gt;          4096         1000        22.39        22.42        22.40
</span><br>
<span class="quotelev1">&gt;          8192         1000        33.83        33.87        33.85
</span><br>
<span class="quotelev1">&gt;         16384         1000        57.91        57.97        57.94
</span><br>
<span class="quotelev1">&gt;         32768         1000        82.55        82.58        82.56
</span><br>
<span class="quotelev1">&gt;         65536          640       126.93       126.95       126.94
</span><br>
<span class="quotelev1">&gt;        131072          320       216.22       216.27       216.25
</span><br>
<span class="quotelev1">&gt;        262144          160       391.68       391.83       391.75
</span><br>
<span class="quotelev1">&gt;        524288           80       748.29       748.54       748.41
</span><br>
<span class="quotelev1">&gt;       1048576           40      1450.13      1450.65      1450.39
</span><br>
<span class="quotelev1">&gt;       2097152           20      2889.35      2890.60      2889.98
</span><br>
<span class="quotelev1">&gt;       4194304           10      5725.70      5728.20      5726.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.05         0.08         0.06
</span><br>
<span class="quotelev1">&gt;             1         1000       102.54       102.57       102.55
</span><br>
<span class="quotelev1">&gt;             2         1000        12.27        12.28        12.28
</span><br>
<span class="quotelev1">&gt;             4         1000        12.01        12.03        12.02
</span><br>
<span class="quotelev1">&gt;             8         1000        12.15        12.17        12.16
</span><br>
<span class="quotelev1">&gt;            16         1000        12.14        12.15        12.14
</span><br>
<span class="quotelev1">&gt;            32         1000        13.18        13.20        13.18
</span><br>
<span class="quotelev1">&gt;            64         1000        13.45        13.47        13.46
</span><br>
<span class="quotelev1">&gt;           128         1000        13.42        13.44        13.43
</span><br>
<span class="quotelev1">&gt;           256         1000        14.15        14.16        14.15
</span><br>
<span class="quotelev1">&gt;           512         1000        15.26        15.28        15.27
</span><br>
<span class="quotelev1">&gt;          1024         1000        18.22        18.25        18.23
</span><br>
<span class="quotelev1">&gt;          2048         1000        23.47        23.51        23.49
</span><br>
<span class="quotelev1">&gt;          4096         1000        33.43        33.47        33.45
</span><br>
<span class="quotelev1">&gt;          8192         1000        55.04        55.10        55.07
</span><br>
<span class="quotelev1">&gt;         16384         1000       106.79       106.93       106.86
</span><br>
<span class="quotelev1">&gt;         32768         1000       209.48       209.62       209.56
</span><br>
<span class="quotelev1">&gt;         65536          640       345.42       345.71       345.58
</span><br>
<span class="quotelev1">&gt;        131072          320       614.53       615.37       614.97
</span><br>
<span class="quotelev1">&gt;        262144          160      1154.42      1157.07      1155.78
</span><br>
<span class="quotelev1">&gt;        524288           80      2227.77      2237.69      2232.80
</span><br>
<span class="quotelev1">&gt;       1048576           40      4380.35      4417.95      4399.30
</span><br>
<span class="quotelev1">&gt;       2097152           20      8724.81      8872.44      8798.98
</span><br>
<span class="quotelev1">&gt;       4194304           10     17405.30     17974.09     17690.14
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Bcast -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 4.469 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.05         
</span><br>
<span class="quotelev1">&gt; 0.05         0.05
</span><br>
<span class="quotelev1">&gt;             1            0         1000         0.05         
</span><br>
<span class="quotelev1">&gt; 0.06         0.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000        14.78        
</span><br>
<span class="quotelev1">&gt; 14.80        14.79
</span><br>
<span class="quotelev1">&gt;             1            1         1000        14.88        
</span><br>
<span class="quotelev1">&gt; 14.88        14.88
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000         7.23         
</span><br>
<span class="quotelev1">&gt; 7.24         7.24
</span><br>
<span class="quotelev1">&gt;             1            2         1000         7.11         
</span><br>
<span class="quotelev1">&gt; 7.12         7.12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         7.18         
</span><br>
<span class="quotelev1">&gt; 7.20         7.19
</span><br>
<span class="quotelev1">&gt;             1            4         1000         7.13         
</span><br>
<span class="quotelev1">&gt; 7.13         7.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         7.31         
</span><br>
<span class="quotelev1">&gt; 7.32         7.32
</span><br>
<span class="quotelev1">&gt;             1            8         1000         7.27         
</span><br>
<span class="quotelev1">&gt; 7.27         7.27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         7.35         
</span><br>
<span class="quotelev1">&gt; 7.36         7.36
</span><br>
<span class="quotelev1">&gt;             1           16         1000         7.31         
</span><br>
<span class="quotelev1">&gt; 7.31         7.31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         7.51         
</span><br>
<span class="quotelev1">&gt; 7.52         7.51
</span><br>
<span class="quotelev1">&gt;             1           32         1000         7.45         
</span><br>
<span class="quotelev1">&gt; 7.45         7.45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000         8.66         
</span><br>
<span class="quotelev1">&gt; 8.67         8.66
</span><br>
<span class="quotelev1">&gt;             1           64         1000         8.65         
</span><br>
<span class="quotelev1">&gt; 8.66         8.65
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        10.88        
</span><br>
<span class="quotelev1">&gt; 10.89        10.88
</span><br>
<span class="quotelev1">&gt;             1          128         1000         8.95         
</span><br>
<span class="quotelev1">&gt; 8.95         8.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000         9.78         
</span><br>
<span class="quotelev1">&gt; 9.80         9.79
</span><br>
<span class="quotelev1">&gt;             1          256         1000         9.60         
</span><br>
<span class="quotelev1">&gt; 9.60         9.60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        10.98        
</span><br>
<span class="quotelev1">&gt; 11.00        10.99
</span><br>
<span class="quotelev1">&gt;             1          512         1000        10.84        
</span><br>
<span class="quotelev1">&gt; 10.84        10.84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        13.53        
</span><br>
<span class="quotelev1">&gt; 13.55        13.54
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        13.35        
</span><br>
<span class="quotelev1">&gt; 13.36        13.36
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        16.76        
</span><br>
<span class="quotelev1">&gt; 16.80        16.78
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        16.90        
</span><br>
<span class="quotelev1">&gt; 16.91        16.90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        22.17        
</span><br>
<span class="quotelev1">&gt; 22.20        22.19
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        22.82        
</span><br>
<span class="quotelev1">&gt; 22.84        22.83
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        35.69        
</span><br>
<span class="quotelev1">&gt; 35.73        35.71
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        33.15        
</span><br>
<span class="quotelev1">&gt; 33.19        33.17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000        56.78        
</span><br>
<span class="quotelev1">&gt; 56.84        56.81
</span><br>
<span class="quotelev1">&gt;             1        16384         1000        56.69        
</span><br>
<span class="quotelev1">&gt; 56.73        56.71
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000        82.71        
</span><br>
<span class="quotelev1">&gt; 82.74        82.73
</span><br>
<span class="quotelev1">&gt;             1        32768         1000        81.19        
</span><br>
<span class="quotelev1">&gt; 81.21        81.20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       126.77       
</span><br>
<span class="quotelev1">&gt; 126.80       126.79
</span><br>
<span class="quotelev1">&gt;             1        65536          640       125.70       
</span><br>
<span class="quotelev1">&gt; 125.70       125.70
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       217.37       
</span><br>
<span class="quotelev1">&gt; 217.43       217.40
</span><br>
<span class="quotelev1">&gt;             1       131072          320       215.39       
</span><br>
<span class="quotelev1">&gt; 215.44       215.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160       389.88       
</span><br>
<span class="quotelev1">&gt; 390.01       389.94
</span><br>
<span class="quotelev1">&gt;             1       262144          160       393.20       
</span><br>
<span class="quotelev1">&gt; 393.21       393.21
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80       742.11       
</span><br>
<span class="quotelev1">&gt; 742.35       742.23
</span><br>
<span class="quotelev1">&gt;             1       524288           80       742.81       
</span><br>
<span class="quotelev1">&gt; 742.82       742.82
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      1458.05      
</span><br>
<span class="quotelev1">&gt; 1458.50      1458.27
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      1454.42      
</span><br>
<span class="quotelev1">&gt; 1454.45      1454.44
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      2890.50      
</span><br>
<span class="quotelev1">&gt; 2891.86      2891.18
</span><br>
<span class="quotelev1">&gt;             1      2097152           20      2855.85      
</span><br>
<span class="quotelev1">&gt; 2856.10      2855.97
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10      5732.99      
</span><br>
<span class="quotelev1">&gt; 5735.29      5734.14
</span><br>
<span class="quotelev1">&gt;             1      4194304           10      5688.50      
</span><br>
<span class="quotelev1">&gt; 5689.40      5688.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.05         
</span><br>
<span class="quotelev1">&gt; 0.08         0.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000        23.53        
</span><br>
<span class="quotelev1">&gt; 23.55        23.54
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000        12.26        
</span><br>
<span class="quotelev1">&gt; 12.28        12.27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        12.09        
</span><br>
<span class="quotelev1">&gt; 12.11        12.10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        12.25        
</span><br>
<span class="quotelev1">&gt; 12.27        12.26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        12.24        
</span><br>
<span class="quotelev1">&gt; 12.26        12.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        12.54        
</span><br>
<span class="quotelev1">&gt; 12.56        12.55
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        12.86        
</span><br>
<span class="quotelev1">&gt; 12.88        12.87
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        13.22        
</span><br>
<span class="quotelev1">&gt; 13.24        13.23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        14.00        
</span><br>
<span class="quotelev1">&gt; 14.02        14.01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        15.28        
</span><br>
<span class="quotelev1">&gt; 15.30        15.29
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        18.15        
</span><br>
<span class="quotelev1">&gt; 18.18        18.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        23.20        
</span><br>
<span class="quotelev1">&gt; 23.24        23.21
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        33.01        
</span><br>
<span class="quotelev1">&gt; 33.05        33.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        54.58        
</span><br>
<span class="quotelev1">&gt; 54.64        54.61
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       104.19       
</span><br>
<span class="quotelev1">&gt; 104.32       104.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       205.32       
</span><br>
<span class="quotelev1">&gt; 205.45       205.39
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       340.68       
</span><br>
<span class="quotelev1">&gt; 340.97       340.84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       608.96       
</span><br>
<span class="quotelev1">&gt; 609.78       609.38
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      1141.46      
</span><br>
<span class="quotelev1">&gt; 1144.26      1142.90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      2199.45      
</span><br>
<span class="quotelev1">&gt; 2209.40      2204.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      4309.53      
</span><br>
<span class="quotelev1">&gt; 4346.97      4328.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      8464.45      
</span><br>
<span class="quotelev1">&gt; 8617.40      8541.36
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     16601.39     
</span><br>
<span class="quotelev1">&gt; 17169.90     16886.12
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Allgather 
</span><br>
<span class="quotelev1">&gt; Test Duration: 13.729 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.03         0.03         0.03
</span><br>
<span class="quotelev1">&gt;             1         1000        15.19        15.31        15.25
</span><br>
<span class="quotelev1">&gt;             2         1000        14.84        14.85        14.85
</span><br>
<span class="quotelev1">&gt;             4         1000        14.87        14.87        14.87
</span><br>
<span class="quotelev1">&gt;             8         1000        15.19        15.20        15.19
</span><br>
<span class="quotelev1">&gt;            16         1000        15.05        15.05        15.05
</span><br>
<span class="quotelev1">&gt;            32         1000        17.04        17.04        17.04
</span><br>
<span class="quotelev1">&gt;            64         1000        17.77        17.78        17.78
</span><br>
<span class="quotelev1">&gt;           128         1000        19.10        19.11        19.11
</span><br>
<span class="quotelev1">&gt;           256         1000        20.90        20.90        20.90
</span><br>
<span class="quotelev1">&gt;           512         1000        24.58        24.58        24.58
</span><br>
<span class="quotelev1">&gt;          1024         1000        31.63        31.63        31.63
</span><br>
<span class="quotelev1">&gt;          2048         1000        38.65        38.65        38.65
</span><br>
<span class="quotelev1">&gt;          4096         1000        56.61        56.62        56.61
</span><br>
<span class="quotelev1">&gt;          8192         1000        89.13        89.16        89.15
</span><br>
<span class="quotelev1">&gt;         16384         1000       152.15       152.18       152.17
</span><br>
<span class="quotelev1">&gt;         32768         1000       222.54       222.58       222.56
</span><br>
<span class="quotelev1">&gt;         65536          640       382.26       382.32       382.29
</span><br>
<span class="quotelev1">&gt;        131072          320       693.92       694.03       693.98
</span><br>
<span class="quotelev1">&gt;        262144          160      1431.36      1431.64      1431.50
</span><br>
<span class="quotelev1">&gt;        524288           80      2969.54      2970.19      2969.86
</span><br>
<span class="quotelev1">&gt;       1048576           40      5996.80      5997.12      5996.96
</span><br>
<span class="quotelev1">&gt;       2097152           20     12119.86     12122.35     12121.10
</span><br>
<span class="quotelev1">&gt;       4194304           10     24130.31     24134.80     24132.55
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.03         0.03         0.03
</span><br>
<span class="quotelev1">&gt;             1         1000        28.14        28.16        28.15
</span><br>
<span class="quotelev1">&gt;             2         1000        24.09        24.11        24.10
</span><br>
<span class="quotelev1">&gt;             4         1000        24.15        24.17        24.16
</span><br>
<span class="quotelev1">&gt;             8         1000        24.39        24.42        24.40
</span><br>
<span class="quotelev1">&gt;            16         1000        26.29        26.31        26.30
</span><br>
<span class="quotelev1">&gt;            32         1000        27.47        27.49        27.48
</span><br>
<span class="quotelev1">&gt;            64         1000        29.99        30.01        30.00
</span><br>
<span class="quotelev1">&gt;           128         1000        32.99        33.01        32.99
</span><br>
<span class="quotelev1">&gt;           256         1000        38.72        38.75        38.74
</span><br>
<span class="quotelev1">&gt;           512         1000        46.71        46.74        46.72
</span><br>
<span class="quotelev1">&gt;          1024         1000        60.89        60.93        60.91
</span><br>
<span class="quotelev1">&gt;          2048         1000        91.27        91.32        91.29
</span><br>
<span class="quotelev1">&gt;          4096         1000       156.02       156.11       156.06
</span><br>
<span class="quotelev1">&gt;          8192         1000       267.91       267.98       267.94
</span><br>
<span class="quotelev1">&gt;         16384         1000       458.11       458.20       458.14
</span><br>
<span class="quotelev1">&gt;         32768         1000       842.71       842.89       842.77
</span><br>
<span class="quotelev1">&gt;         65536          640      1525.32      1525.87      1525.54
</span><br>
<span class="quotelev1">&gt;        131072          320      2875.53      2877.73      2876.53
</span><br>
<span class="quotelev1">&gt;        262144          160      5612.53      5621.31      5616.71
</span><br>
<span class="quotelev1">&gt;        524288           80     10901.43     10936.58     10918.59
</span><br>
<span class="quotelev1">&gt;       1048576           40     21652.57     21793.70     21722.27
</span><br>
<span class="quotelev1">&gt;       2097152           20     42803.20     43370.85     43085.33
</span><br>
<span class="quotelev1">&gt;       4194304           10     84603.71     86869.99     85733.28
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Allgather -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 13.619 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.03         
</span><br>
<span class="quotelev1">&gt; 0.03         0.03
</span><br>
<span class="quotelev1">&gt;             1            0         1000         0.03         
</span><br>
<span class="quotelev1">&gt; 0.03         0.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000        14.79        
</span><br>
<span class="quotelev1">&gt; 15.04        14.92
</span><br>
<span class="quotelev1">&gt;             1            1         1000        23.05        
</span><br>
<span class="quotelev1">&gt; 23.06        23.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000        14.37        
</span><br>
<span class="quotelev1">&gt; 14.37        14.37
</span><br>
<span class="quotelev1">&gt;             1            2         1000        15.05        
</span><br>
<span class="quotelev1">&gt; 15.06        15.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        14.51        
</span><br>
<span class="quotelev1">&gt; 14.51        14.51
</span><br>
<span class="quotelev1">&gt;             1            4         1000        15.14        
</span><br>
<span class="quotelev1">&gt; 15.15        15.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        14.66        
</span><br>
<span class="quotelev1">&gt; 14.66        14.66
</span><br>
<span class="quotelev1">&gt;             1            8         1000        15.31        
</span><br>
<span class="quotelev1">&gt; 15.32        15.32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        14.82        
</span><br>
<span class="quotelev1">&gt; 14.82        14.82
</span><br>
<span class="quotelev1">&gt;             1           16         1000        15.51        
</span><br>
<span class="quotelev1">&gt; 15.53        15.52
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        16.16        
</span><br>
<span class="quotelev1">&gt; 16.16        16.16
</span><br>
<span class="quotelev1">&gt;             1           32         1000        16.74        
</span><br>
<span class="quotelev1">&gt; 16.75        16.74
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        17.67        
</span><br>
<span class="quotelev1">&gt; 17.67        17.67
</span><br>
<span class="quotelev1">&gt;             1           64         1000        18.40        
</span><br>
<span class="quotelev1">&gt; 18.41        18.40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        20.54        
</span><br>
<span class="quotelev1">&gt; 20.54        20.54
</span><br>
<span class="quotelev1">&gt;             1          128         1000        19.50        
</span><br>
<span class="quotelev1">&gt; 19.50        19.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        20.78        
</span><br>
<span class="quotelev1">&gt; 20.78        20.78
</span><br>
<span class="quotelev1">&gt;             1          256         1000        21.49        
</span><br>
<span class="quotelev1">&gt; 21.50        21.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        24.57        
</span><br>
<span class="quotelev1">&gt; 24.57        24.57
</span><br>
<span class="quotelev1">&gt;             1          512         1000        24.92        
</span><br>
<span class="quotelev1">&gt; 24.93        24.92
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        30.24        
</span><br>
<span class="quotelev1">&gt; 30.25        30.25
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        30.48        
</span><br>
<span class="quotelev1">&gt; 30.50        30.49
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        38.88        
</span><br>
<span class="quotelev1">&gt; 38.88        38.88
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        39.24        
</span><br>
<span class="quotelev1">&gt; 39.27        39.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        54.90        
</span><br>
<span class="quotelev1">&gt; 54.91        54.90
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        56.42        
</span><br>
<span class="quotelev1">&gt; 56.45        56.44
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        92.50        
</span><br>
<span class="quotelev1">&gt; 92.53        92.51
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        87.64        
</span><br>
<span class="quotelev1">&gt; 87.70        87.67
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       151.29       
</span><br>
<span class="quotelev1">&gt; 151.33       151.31
</span><br>
<span class="quotelev1">&gt;             1        16384         1000       150.74       
</span><br>
<span class="quotelev1">&gt; 150.75       150.74
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       223.62       
</span><br>
<span class="quotelev1">&gt; 223.66       223.64
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       224.75       
</span><br>
<span class="quotelev1">&gt; 224.76       224.75
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       375.88       
</span><br>
<span class="quotelev1">&gt; 375.95       375.92
</span><br>
<span class="quotelev1">&gt;             1        65536          640       380.39       
</span><br>
<span class="quotelev1">&gt; 380.40       380.39
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       691.63       
</span><br>
<span class="quotelev1">&gt; 691.77       691.70
</span><br>
<span class="quotelev1">&gt;             1       131072          320       698.52       
</span><br>
<span class="quotelev1">&gt; 698.55       698.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      1428.96      
</span><br>
<span class="quotelev1">&gt; 1429.24      1429.10
</span><br>
<span class="quotelev1">&gt;             1       262144          160      1455.81      
</span><br>
<span class="quotelev1">&gt; 1455.85      1455.83
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      3038.20      
</span><br>
<span class="quotelev1">&gt; 3038.79      3038.49
</span><br>
<span class="quotelev1">&gt;             1       524288           80      3035.49      
</span><br>
<span class="quotelev1">&gt; 3035.53      3035.51
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      6025.07      
</span><br>
<span class="quotelev1">&gt; 6026.22      6025.65
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      6220.52      
</span><br>
<span class="quotelev1">&gt; 6220.67      6220.60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     12213.95     
</span><br>
<span class="quotelev1">&gt; 12216.20     12215.07
</span><br>
<span class="quotelev1">&gt;             1      2097152           20     12457.41     
</span><br>
<span class="quotelev1">&gt; 12457.70     12457.55
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     24338.40     
</span><br>
<span class="quotelev1">&gt; 24342.31     24340.35
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     24826.29     
</span><br>
<span class="quotelev1">&gt; 24826.71     24826.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.03         
</span><br>
<span class="quotelev1">&gt; 0.04         0.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000        27.80        
</span><br>
<span class="quotelev1">&gt; 27.82        27.80
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000        24.05        
</span><br>
<span class="quotelev1">&gt; 24.07        24.06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        23.99        
</span><br>
<span class="quotelev1">&gt; 24.01        24.00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        24.73        
</span><br>
<span class="quotelev1">&gt; 24.76        24.74
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        26.14        
</span><br>
<span class="quotelev1">&gt; 26.17        26.15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        27.19        
</span><br>
<span class="quotelev1">&gt; 27.21        27.20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        29.54        
</span><br>
<span class="quotelev1">&gt; 29.56        29.55
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        32.49        
</span><br>
<span class="quotelev1">&gt; 32.51        32.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        38.65        
</span><br>
<span class="quotelev1">&gt; 38.67        38.66
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        47.00        
</span><br>
<span class="quotelev1">&gt; 47.03        47.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        61.25        
</span><br>
<span class="quotelev1">&gt; 61.29        61.27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        92.54        
</span><br>
<span class="quotelev1">&gt; 92.59        92.57
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000       155.10       
</span><br>
<span class="quotelev1">&gt; 155.19       155.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000       264.47       
</span><br>
<span class="quotelev1">&gt; 264.54       264.49
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       450.72       
</span><br>
<span class="quotelev1">&gt; 450.82       450.75
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       844.25       
</span><br>
<span class="quotelev1">&gt; 844.43       844.31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640      1521.38      
</span><br>
<span class="quotelev1">&gt; 1521.93      1521.59
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320      2870.66      
</span><br>
<span class="quotelev1">&gt; 2872.85      2871.64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      5624.76      
</span><br>
<span class="quotelev1">&gt; 5633.56      5628.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80     10923.28     
</span><br>
<span class="quotelev1">&gt; 10958.54     10940.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40     21651.00     
</span><br>
<span class="quotelev1">&gt; 21792.45     21720.84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20     42745.60     
</span><br>
<span class="quotelev1">&gt; 43313.50     43027.81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     84495.00     
</span><br>
<span class="quotelev1">&gt; 86766.01     85626.75
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Allgatherrv 
</span><br>
<span class="quotelev1">&gt; Test Duration: 1.080 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : No output for this performance test.
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Allgatherrv -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 1.359 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : No output for this performance test.
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-W: Could not run 
</span><br>
<span class="quotelev1">&gt; /data/home/scott/builds/TopspinOS-2.6.0/build183/protest/Igr7/
</span><br>
<span class="quotelev1">&gt; 050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB-MPI1
</span><br>
<span class="quotelev1">&gt;  Alltoall : 0
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Alltoall 
</span><br>
<span class="quotelev1">&gt; Test Duration: 64.459 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.03         0.03         0.03
</span><br>
<span class="quotelev1">&gt;             1         1000         8.12         8.18         8.15
</span><br>
<span class="quotelev1">&gt;             2         1000         7.80         7.80         7.80
</span><br>
<span class="quotelev1">&gt;             4         1000         7.74         7.75         7.74
</span><br>
<span class="quotelev1">&gt;             8         1000         7.87         7.88         7.88
</span><br>
<span class="quotelev1">&gt;            16         1000         8.04         8.05         8.04
</span><br>
<span class="quotelev1">&gt;            32         1000         7.96         7.96         7.96
</span><br>
<span class="quotelev1">&gt;            64         1000         9.30         9.31         9.30
</span><br>
<span class="quotelev1">&gt;           128         1000        10.37        10.38        10.38
</span><br>
<span class="quotelev1">&gt;           256         1000        12.03        12.04        12.04
</span><br>
<span class="quotelev1">&gt;           512         1000        12.83        12.85        12.84
</span><br>
<span class="quotelev1">&gt;          1024         1000        16.23        16.25        16.24
</span><br>
<span class="quotelev1">&gt;          2048         1000        20.55        20.57        20.56
</span><br>
<span class="quotelev1">&gt;          4096         1000        26.89        26.89        26.89
</span><br>
<span class="quotelev1">&gt;          8192         1000        44.50        44.51        44.51
</span><br>
<span class="quotelev1">&gt;         16384         1000        78.13        78.18        78.15
</span><br>
<span class="quotelev1">&gt;         32768         1000       132.28       132.31       132.30
</span><br>
<span class="quotelev1">&gt;         65536          640       222.20       222.25       222.23
</span><br>
<span class="quotelev1">&gt;        131072          320       405.07       405.15       405.11
</span><br>
<span class="quotelev1">&gt;        262144          160      1069.56      1069.62      1069.59
</span><br>
<span class="quotelev1">&gt;        524288           80      2479.89      2481.27      2480.58
</span><br>
<span class="quotelev1">&gt;       1048576           40      4875.95      4882.20      4879.08
</span><br>
<span class="quotelev1">&gt;       2097152           20      9520.25      9530.10      9525.18
</span><br>
<span class="quotelev1">&gt;       4194304           10     19020.81     19048.00     19034.41
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.03         0.03         0.03
</span><br>
<span class="quotelev1">&gt;             1         1000        27.06        27.07        27.07
</span><br>
<span class="quotelev1">&gt;             2         1000        16.48        16.49        16.48
</span><br>
<span class="quotelev1">&gt;             4         1000        17.28        17.29        17.28
</span><br>
<span class="quotelev1">&gt;             8         1000        20.79        20.80        20.80
</span><br>
<span class="quotelev1">&gt;            16         1000        18.60        18.61        18.61
</span><br>
<span class="quotelev1">&gt;            32         1000        18.46        18.47        18.47
</span><br>
<span class="quotelev1">&gt;            64         1000        19.09        19.10        19.09
</span><br>
<span class="quotelev1">&gt;           128         1000        16.24        16.29        16.26
</span><br>
<span class="quotelev1">&gt;           256         1000        18.10        18.11        18.10
</span><br>
<span class="quotelev1">&gt;           512         1000        19.39        19.40        19.39
</span><br>
<span class="quotelev1">&gt;          1024         1000        26.51        26.52        26.52
</span><br>
<span class="quotelev1">&gt;          2048         1000        37.85        37.86        37.85
</span><br>
<span class="quotelev1">&gt;          4096         1000        60.41        60.42        60.41
</span><br>
<span class="quotelev1">&gt;          8192         1000       103.04       103.08       103.06
</span><br>
<span class="quotelev1">&gt;         16384         1000       200.75       200.79       200.78
</span><br>
<span class="quotelev1">&gt;         32768         1000      2981.05      2982.04      2981.70
</span><br>
<span class="quotelev1">&gt;         65536          640      3435.51      3436.92      3436.32
</span><br>
<span class="quotelev1">&gt;        131072          320      4224.32      4226.30      4225.34
</span><br>
<span class="quotelev1">&gt;        262144          160      6300.70      6305.17      6303.13
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x20
</span><br>
<span class="quotelev1">&gt; [0] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel4-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; libopal.so.0 [0xdfd66c]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/tls/libpthread.so.0 [0x938e40]
</span><br>
<span class="quotelev1">&gt; [2] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_rcache_rb.so(mca_rcache_rb_insert+0x30) [0x85012c]
<br>
<span class="quotelev1">&gt; [3] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_mpool_mvapi.so(mca_mpool_mvapi_register+0x1b3) [0x9d3157]
<br>
<span class="quotelev1">&gt; [4] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_rdma_btls+0x18c) [0x292458]
</span><br>
<span class="quotelev1">&gt; [5] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so [0x2951f9]
</span><br>
<span class="quotelev1">&gt; [6] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_request_progress+0x5e4
</span><br>
<span class="quotelev1">&gt; ) [0x294098]
</span><br>
<span class="quotelev1">&gt; [7] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_request_match_specific
</span><br>
<span class="quotelev1">&gt; +0xb0) [0x2948f0]
</span><br>
<span class="quotelev1">&gt; [8] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_irecv+0x139) [0x290d01]
</span><br>
<span class="quotelev1">&gt; [9] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x38)
<br>
[0x8a0394]
<br>
<span class="quotelev1">&gt; [10] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_coll_tuned.so(ompi_coll_tuned_alltoall_intra_pairwise+0xb4)
<br>
[0x8a1550]
<br>
<span class="quotelev1">&gt; [11] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_coll_tuned.so(ompi_coll_tuned_alltoall_intra_dec_fixed+0x7d)
<br>
[0x8a0531]
<br>
<span class="quotelev1">&gt; [12] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel4-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(MPI_Alltoall+0x167) [0xf89daf]
</span><br>
<span class="quotelev1">&gt; [13] 
</span><br>
<span class="quotelev1">&gt; func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/
</span><br>
<span class="quotelev1">&gt; Igr7/050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB
</span><br>
<span class="quotelev1">&gt; -MPI1(Alltoall+0xa4) [0x804dd28]
</span><br>
<span class="quotelev1">&gt; [14] 
</span><br>
<span class="quotelev1">&gt; func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/
</span><br>
<span class="quotelev1">&gt; Igr7/050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB
</span><br>
<span class="quotelev1">&gt; -MPI1(main+0x32e) [0x804a78a]
</span><br>
<span class="quotelev1">&gt; [15] func:/lib/tls/libc.so.6(__libc_start_main+0xf8) [0x126748]
</span><br>
<span class="quotelev1">&gt; [16] 
</span><br>
<span class="quotelev1">&gt; func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/
</span><br>
<span class="quotelev1">&gt; Igr7/050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB
</span><br>
<span class="quotelev1">&gt; -MPI1(free+0x41) [0x804a3cd]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Broken pipe
</span><br>
<span class="quotelev1">&gt; _releng_at_svbu-qa2650-16:/data/home/scott/builds/TopspinOS-2.6.
</span><br>
<span class="quotelev1">&gt; 0/build183/protest/Igr7/050906_002959/open.pallas/1147159823/P
</span><br>
<span class="quotelev1">&gt; MB2.2.1/SRC_PMB\[releng_at_svbu-qa2650-16 SRC_PMB]$ 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-W: Could not run 
</span><br>
<span class="quotelev1">&gt; /data/home/scott/builds/TopspinOS-2.6.0/build183/protest/Igr7/
</span><br>
<span class="quotelev1">&gt; 050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB-MPI1
</span><br>
<span class="quotelev1">&gt;  Alltoall -multi 1: 0
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Alltoall -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 64.529 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.03         
</span><br>
<span class="quotelev1">&gt; 0.03         0.03
</span><br>
<span class="quotelev1">&gt;             1            0         1000         0.03         
</span><br>
<span class="quotelev1">&gt; 0.03         0.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000         8.08         
</span><br>
<span class="quotelev1">&gt; 9.82         8.95
</span><br>
<span class="quotelev1">&gt;             1            1         1000        16.16        
</span><br>
<span class="quotelev1">&gt; 16.16        16.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000         7.75         
</span><br>
<span class="quotelev1">&gt; 7.75         7.75
</span><br>
<span class="quotelev1">&gt;             1            2         1000         7.72         
</span><br>
<span class="quotelev1">&gt; 7.74         7.73
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000         7.69         
</span><br>
<span class="quotelev1">&gt; 7.69         7.69
</span><br>
<span class="quotelev1">&gt;             1            4         1000         7.70         
</span><br>
<span class="quotelev1">&gt; 7.71         7.71
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000         7.83         
</span><br>
<span class="quotelev1">&gt; 7.83         7.83
</span><br>
<span class="quotelev1">&gt;             1            8         1000         8.58         
</span><br>
<span class="quotelev1">&gt; 8.58         8.58
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000         7.88         
</span><br>
<span class="quotelev1">&gt; 7.88         7.88
</span><br>
<span class="quotelev1">&gt;             1           16         1000         7.95         
</span><br>
<span class="quotelev1">&gt; 7.95         7.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000         8.19         
</span><br>
<span class="quotelev1">&gt; 8.20         8.20
</span><br>
<span class="quotelev1">&gt;             1           32         1000         8.05         
</span><br>
<span class="quotelev1">&gt; 8.05         8.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000         9.34         
</span><br>
<span class="quotelev1">&gt; 9.34         9.34
</span><br>
<span class="quotelev1">&gt;             1           64         1000         9.29         
</span><br>
<span class="quotelev1">&gt; 9.30         9.30
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        11.69        
</span><br>
<span class="quotelev1">&gt; 11.69        11.69
</span><br>
<span class="quotelev1">&gt;             1          128         1000         9.74         
</span><br>
<span class="quotelev1">&gt; 9.75         9.75
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        11.16        
</span><br>
<span class="quotelev1">&gt; 11.16        11.16
</span><br>
<span class="quotelev1">&gt;             1          256         1000        10.95        
</span><br>
<span class="quotelev1">&gt; 10.96        10.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        12.38        
</span><br>
<span class="quotelev1">&gt; 12.39        12.39
</span><br>
<span class="quotelev1">&gt;             1          512         1000        12.10        
</span><br>
<span class="quotelev1">&gt; 12.10        12.10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        16.07        
</span><br>
<span class="quotelev1">&gt; 16.08        16.07
</span><br>
<span class="quotelev1">&gt;             1         1024         1000        15.47        
</span><br>
<span class="quotelev1">&gt; 15.48        15.48
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        20.24        
</span><br>
<span class="quotelev1">&gt; 20.26        20.25
</span><br>
<span class="quotelev1">&gt;             1         2048         1000        20.30        
</span><br>
<span class="quotelev1">&gt; 20.32        20.31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        28.03        
</span><br>
<span class="quotelev1">&gt; 28.04        28.04
</span><br>
<span class="quotelev1">&gt;             1         4096         1000        27.56        
</span><br>
<span class="quotelev1">&gt; 27.56        27.56
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000        45.71        
</span><br>
<span class="quotelev1">&gt; 45.72        45.72
</span><br>
<span class="quotelev1">&gt;             1         8192         1000        41.91        
</span><br>
<span class="quotelev1">&gt; 41.92        41.92
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000        79.02        
</span><br>
<span class="quotelev1">&gt; 79.03        79.02
</span><br>
<span class="quotelev1">&gt;             1        16384         1000        77.04        
</span><br>
<span class="quotelev1">&gt; 77.07        77.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000       131.96       
</span><br>
<span class="quotelev1">&gt; 132.00       131.98
</span><br>
<span class="quotelev1">&gt;             1        32768         1000       128.89       
</span><br>
<span class="quotelev1">&gt; 128.89       128.89
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640       224.41       
</span><br>
<span class="quotelev1">&gt; 224.46       224.43
</span><br>
<span class="quotelev1">&gt;             1        65536          640       219.07       
</span><br>
<span class="quotelev1">&gt; 219.08       219.07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320       517.59       
</span><br>
<span class="quotelev1">&gt; 518.01       517.80
</span><br>
<span class="quotelev1">&gt;             1       131072          320       402.72       
</span><br>
<span class="quotelev1">&gt; 402.77       402.75
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      1071.88      
</span><br>
<span class="quotelev1">&gt; 1072.39      1072.14
</span><br>
<span class="quotelev1">&gt;             1       262144          160      1041.22      
</span><br>
<span class="quotelev1">&gt; 1041.33      1041.27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       524288           80      2321.41      
</span><br>
<span class="quotelev1">&gt; 2321.47      2321.44
</span><br>
<span class="quotelev1">&gt;             1       524288           80      2391.01      
</span><br>
<span class="quotelev1">&gt; 2391.20      2391.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      1048576           40      4720.67      
</span><br>
<span class="quotelev1">&gt; 4722.40      4721.54
</span><br>
<span class="quotelev1">&gt;             1      1048576           40      4707.35      
</span><br>
<span class="quotelev1">&gt; 4707.55      4707.45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      2097152           20      9546.55      
</span><br>
<span class="quotelev1">&gt; 9559.10      9552.82
</span><br>
<span class="quotelev1">&gt;             1      2097152           20      9685.34      
</span><br>
<span class="quotelev1">&gt; 9693.84      9689.59
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0      4194304           10     19362.09     
</span><br>
<span class="quotelev1">&gt; 19431.60     19396.84
</span><br>
<span class="quotelev1">&gt;             1      4194304           10     19253.30     
</span><br>
<span class="quotelev1">&gt; 19280.50     19266.90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt;         Group       #bytes #repetitions  t_min[usec]  
</span><br>
<span class="quotelev1">&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            0         1000         0.03         
</span><br>
<span class="quotelev1">&gt; 0.03         0.03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            1         1000        24.88        
</span><br>
<span class="quotelev1">&gt; 24.89        24.89
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            2         1000        16.25        
</span><br>
<span class="quotelev1">&gt; 16.27        16.26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            4         1000        17.32        
</span><br>
<span class="quotelev1">&gt; 17.33        17.33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0            8         1000        17.01        
</span><br>
<span class="quotelev1">&gt; 17.02        17.01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           16         1000        17.76        
</span><br>
<span class="quotelev1">&gt; 17.77        17.76
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           32         1000        18.88        
</span><br>
<span class="quotelev1">&gt; 18.88        18.88
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0           64         1000        22.38        
</span><br>
<span class="quotelev1">&gt; 22.39        22.39
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          128         1000        15.94        
</span><br>
<span class="quotelev1">&gt; 15.95        15.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          256         1000        17.82        
</span><br>
<span class="quotelev1">&gt; 17.84        17.83
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0          512         1000        19.05        
</span><br>
<span class="quotelev1">&gt; 19.06        19.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1024         1000        26.06        
</span><br>
<span class="quotelev1">&gt; 26.08        26.07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         2048         1000        37.71        
</span><br>
<span class="quotelev1">&gt; 37.73        37.72
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         4096         1000        59.67        
</span><br>
<span class="quotelev1">&gt; 59.69        59.68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         8192         1000       105.69       
</span><br>
<span class="quotelev1">&gt; 105.72       105.70
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        16384         1000       210.82       
</span><br>
<span class="quotelev1">&gt; 210.87       210.84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        32768         1000      3002.53      
</span><br>
<span class="quotelev1">&gt; 3003.31      3002.91
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0        65536          640      3572.82      
</span><br>
<span class="quotelev1">&gt; 3574.32      3573.68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       131072          320      4486.19      
</span><br>
<span class="quotelev1">&gt; 4488.97      4487.67
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0       262144          160      6401.08      
</span><br>
<span class="quotelev1">&gt; 6408.27      6404.88
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x20
</span><br>
<span class="quotelev1">&gt; [0] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel4-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; libopal.so.0 [0x2f566c]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/tls/libpthread.so.0 [0x65ee40]
</span><br>
<span class="quotelev1">&gt; [2] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_rcache_rb.so(mca_rcache_rb_insert+0x30) [0xcc112c]
<br>
<span class="quotelev1">&gt; [3] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_mpool_mvapi.so(mca_mpool_mvapi_register+0x1b3) [0x266157]
<br>
<span class="quotelev1">&gt; [4] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_rdma_btls+0x18c) [0x3d7458]
</span><br>
<span class="quotelev1">&gt; [5] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so [0x3da1f9]
</span><br>
<span class="quotelev1">&gt; [6] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_request_progress+0x5e4
</span><br>
<span class="quotelev1">&gt; ) [0x3d9098]
</span><br>
<span class="quotelev1">&gt; [7] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_request_match_specific
</span><br>
<span class="quotelev1">&gt; +0xb0) [0x3d98f0]
</span><br>
<span class="quotelev1">&gt; [8] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so(mca_pml_ob1_irecv+0x139) [0x3d5d01]
</span><br>
<span class="quotelev1">&gt; [9] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x38)
<br>
[0x2a5394]
<br>
<span class="quotelev1">&gt; [10] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_coll_tuned.so(ompi_coll_tuned_alltoall_intra_pairwise+0xb4)
<br>
[0x2a6550]
<br>
<span class="quotelev1">&gt; [11] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel3-i686-mvapi/lib/
</span><br>
openmpi/mca_coll_tuned.so(ompi_coll_tuned_alltoall_intra_dec_fixed+0x7d)
<br>
[0x2a5531]
<br>
<span class="quotelev1">&gt; [12] 
</span><br>
<span class="quotelev1">&gt; func:/data/software/qa/MPI/openmpi-1.1a2-rhel4-i686-mvapi/lib/
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(MPI_Alltoall+0x167) [0x492daf]
</span><br>
<span class="quotelev1">&gt; [13] 
</span><br>
<span class="quotelev1">&gt; func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/
</span><br>
<span class="quotelev1">&gt; Igr7/050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB
</span><br>
<span class="quotelev1">&gt; -MPI1(Alltoall+0xa4) [0x804dd28]
</span><br>
<span class="quotelev1">&gt; [14] 
</span><br>
<span class="quotelev1">&gt; func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/
</span><br>
<span class="quotelev1">&gt; Igr7/050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB
</span><br>
<span class="quotelev1">&gt; -MPI1(main+0x32e) [0x804a78a]
</span><br>
<span class="quotelev1">&gt; [15] func:/lib/tls/libc.so.6(__libc_start_main+0xf8) [0x129748]
</span><br>
<span class="quotelev1">&gt; [16] 
</span><br>
<span class="quotelev1">&gt; func:/data/home/scott/builds/TopspinOS-2.6.0/build183/protest/
</span><br>
<span class="quotelev1">&gt; Igr7/050906_002959/open.pallas/1147159823/PMB2.2.1/SRC_PMB/PMB
</span><br>
<span class="quotelev1">&gt; -MPI1(free+0x41) [0x804a3cd]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Broken pipe
</span><br>
<span class="quotelev1">&gt; _releng_at_svbu-qa2650-16:/data/home/scott/builds/TopspinOS-2.6.
</span><br>
<span class="quotelev1">&gt; 0/build183/protest/Igr7/050906_002959/open.pallas/1147159823/P
</span><br>
<span class="quotelev1">&gt; MB2.2.1/SRC_PMB\[releng_at_svbu-qa2650-16 SRC_PMB]$ 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Barrier 
</span><br>
<span class="quotelev1">&gt; Test Duration: 1.440 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 2 ) 
</span><br>
<span class="quotelev1">&gt; # ( 2 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000        19.04        19.05        19.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000        40.79        40.81        40.80
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###TEST-D: Open-MPI VAPI Test on hosts svbu-qa2650-16 
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 svbu-qa2650-14 svbu-qa2650-13
</span><br>
<span class="quotelev1">&gt; Number of hosts : 4
</span><br>
<span class="quotelev1">&gt; Number of processes : 4
</span><br>
<span class="quotelev1">&gt; Test Type: Pallas MPI Benchmark / Barrier -multi 1
</span><br>
<span class="quotelev1">&gt; Test Duration: 1.240 seconds
</span><br>
<span class="quotelev1">&gt; Test Performances : 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( 2 groups of 2 processes each running simultaneous ) 
</span><br>
<span class="quotelev1">&gt; # Group    0                     : 0 1
</span><br>
<span class="quotelev1">&gt; # Group    1                     : 2 3
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         Group #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1000        19.02        19.02        19.02
</span><br>
<span class="quotelev1">&gt;             1         1000        17.82        17.83        17.83
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ( #processes = 4 ) 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         Group #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             0         1000        40.64        40.66        40.65
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-16 CPU Usage: 35.10%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-15 CPU Usage: 32.12%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-14 CPU Usage: 31.84%
</span><br>
<span class="quotelev1">&gt; svbu-qa2650-13 CPU Usage: 31.70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; InfiniBand.Performance.MPI.Pallas.Open-MPI.VAPI.GnuC --&gt; FAIL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of protest run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1224.php">Mahesh Barve: "[OMPI users] Orted Command Not found"</a>
<li><strong>Previous message:</strong> <a href="1222.php">Rainer Keller: "Re: [OMPI users] Open MPI and MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<li><strong>Reply:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
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
