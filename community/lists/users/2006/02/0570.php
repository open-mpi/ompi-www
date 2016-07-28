<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  3 00:27:46 2006" -->
<!-- isoreceived="20060203052746" -->
<!-- sent="Thu, 2 Feb 2006 22:27:29 -0700" -->
<!-- isosent="20060203052729" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open-MPI all-to-all performance" -->
<!-- id="4B171EF8-1A28-4E1D-B8A3-488D885AADCC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060203001040.23889.qmail_at_web52013.mail.yahoo.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-03 00:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0566.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Konstantin,
<br>
<p>By using coll_basic_crossover 8 you are forcing all of your  
<br>
benchmarks to use the basic collectives, which offer poor  
<br>
performance. I ran the skampi Alltoall benchmark with the tuned  
<br>
collectives I get the following results which seem to scale quite  
<br>
well, when I have a bit more time I will provide comparisons with MPICH.
<br>
<p><p>&nbsp;&nbsp;mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned  -mca  
<br>
mpi_paffinity_alone 1 ./skampi
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      47.3      0.4      8      47.3      0.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3      57.9      1.7     40      57.9      1.7     40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      65.2      1.5      8      65.2      1.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5      74.0      2.1     10      74.0      2.1     10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6      84.3      1.5      8      84.3      1.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7      89.9      0.4      8      89.9      0.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8     107.8      1.9      8     107.8      1.9      8
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2    1049.0     29.8      8    1049.0     29.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1677.7     49.8     31    1677.7     49.8     31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    3287.0     96.8     11    3287.0     96.8     11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    3247.3     57.8      8    3247.3     57.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6    4802.5     98.6      8    4802.5     98.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7    6166.4     70.3      8    6166.4     70.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8    7380.8    116.1      8    7380.8    116.1      8
<br>
<p><p>If I use the basic collectives then things do fall apart with long  
<br>
messages, but this is expected.
<br>
<p>&nbsp;&nbsp;mpirun -np 8 -mca btl tcp -mca coll self,basic -mca  
<br>
mpi_paffinity_alone 1 ./skampi
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
<br>
<p>&nbsp;&nbsp;2      45.7      0.2      8      45.7      0.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3      55.0      0.9      8      55.0      0.9      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      64.2      0.4      8      64.2      0.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5      73.4      1.2      8      73.4      1.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6      83.5      0.5      8      83.5      0.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7      92.8      1.4      8      92.8      1.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8     108.1      2.2      8     108.1      2.2      8
<br>
<p><p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     798.0      1.5      8     798.0      1.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1756.0     38.5      8    1756.0     38.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   99601.8  60958.5      5   99601.8  60958.5      5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5  134846.3  31683.9     11  134846.3  31683.9     11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  224243.7   6599.1     11  224243.7   6599.1     11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  230021.1   6788.1     10  230021.1   6788.1     10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  242596.5   7693.6      6  242596.5   7693.6      6
<br>
<p><p><p>On Feb 2, 2006, at 5:10 PM, Konstantin Kudin wrote:
<br>
<p><span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  There seem to have been problems with the attachement. Here is the
</span><br>
<span class="quotelev1">&gt; report:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I did some tests of Open-MPI version 1.0.2a4r8848. My motivation was
</span><br>
<span class="quotelev1">&gt; an extreme degradation of all-to-all MPI performance on 8 cpus (ran
</span><br>
<span class="quotelev1">&gt; like 1 cpu). At the same time, MPICH 1.2.7 on 8 cpus runs more like on
</span><br>
<span class="quotelev1">&gt; 4 (not like 1 !!!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This was done using Skampi from :
</span><br>
<span class="quotelev1">&gt; <a href="http://liinwww.ira.uka.de/~skampi/skampi4.1.tar.gz">http://liinwww.ira.uka.de/~skampi/skampi4.1.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The version 4.1 was used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The system is bunch of a dual Opterons connected by Gigabit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The MPI operation I am most interested in is all-to-all exchange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  First of all, there seem to be some problems with the logarithmic
</span><br>
<span class="quotelev1">&gt; approach. Here is what I mean. In the following, first column is the
</span><br>
<span class="quotelev1">&gt; packet size, the next one is the average time (microseconds), then
</span><br>
<span class="quotelev1">&gt; goes standard deviation. The test was done on 8 cpus (4 dual nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -mca mpi_paffinity_alone 1 skampi41
</span><br>
<span class="quotelev1">&gt; #/*@inp2p_MPI_Send-MPI_Iprobe_Recv.ski*/
</span><br>
<span class="quotelev1">&gt; #Description of the MPI_Send-MPI_Iprobe_Recv measurement:
</span><br>
<span class="quotelev1">&gt;        0      74.3      1.3      8      74.3      1.3      8
</span><br>
<span class="quotelev1">&gt;       16      77.4      2.1      8      77.4      2.1      8       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;       32     398.9    323.4    100     398.9    323.4    100       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;       64      80.7      2.3      9      80.7      2.3      9       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;       80      79.3      2.3     13      79.3      2.3     13       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -mca mpi_paffinity_alone 1 -mca coll_basic_crossover 8
</span><br>
<span class="quotelev1">&gt; skampi41
</span><br>
<span class="quotelev1">&gt; #/*@inp2p_MPI_Send-MPI_Iprobe_Recv.ski*/
</span><br>
<span class="quotelev1">&gt; #Description of the MPI_Send-MPI_Iprobe_Recv measurement:
</span><br>
<span class="quotelev1">&gt;        0      76.7      2.1      8      76.7      2.1      8
</span><br>
<span class="quotelev1">&gt;       16      75.8      1.5      8      75.8      1.5      8       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;       32      74.4      0.6      8      74.4      0.6      8       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;       64      76.3      0.4      8      76.3      0.4      8       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;       80      76.7      0.5      8      76.7      0.5      8       0.0
</span><br>
<span class="quotelev1">&gt;      0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This anomalously large times for certain packet sizes (either 16 or
</span><br>
<span class="quotelev1">&gt; 32) without increasing coll_basic_crossover to 8 show up for a whole
</span><br>
<span class="quotelev1">&gt; set of tests, so this is not a fluke.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Next, the all-to-all thing. The short test included 64x4 byte
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt; The long one had 16384x4 byte messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -mca mpi_paffinity_alone 1  -mca coll_basic_crossover 8
</span><br>
<span class="quotelev1">&gt; skampi41
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2      12.7      0.2      8      12.7      0.2      8
</span><br>
<span class="quotelev1">&gt;        3      56.1      0.3      8      56.1      0.3      8
</span><br>
<span class="quotelev1">&gt;        4      69.9      1.8      8      69.9      1.8      8
</span><br>
<span class="quotelev1">&gt;        5      87.0      2.2      8      87.0      2.2      8
</span><br>
<span class="quotelev1">&gt;        6      99.7      1.5      8      99.7      1.5      8
</span><br>
<span class="quotelev1">&gt;        7     122.5      2.2      8     122.5      2.2      8
</span><br>
<span class="quotelev1">&gt;        8     147.5      2.5      8     147.5      2.5      8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2     188.5      0.3      8     188.5      0.3      8
</span><br>
<span class="quotelev1">&gt;        3    1680.5     16.6      8    1680.5     16.6      8
</span><br>
<span class="quotelev1">&gt;        4    2759.0     15.5      8    2759.0     15.5      8
</span><br>
<span class="quotelev1">&gt;        5    4110.2     34.0      8    4110.2     34.0      8
</span><br>
<span class="quotelev1">&gt;        6   75443.5  44383.9      6   75443.5  44383.9      6
</span><br>
<span class="quotelev1">&gt;        7  242133.4    870.5      2  242133.4    870.5      2
</span><br>
<span class="quotelev1">&gt;        8  252436.7   4016.8      8  252436.7   4016.8      8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -mca mpi_paffinity_alone 1  -mca coll_basic_crossover 8
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt; -mca coll_sm_info_num_procs 8 -mca btl_tcp_sndbuf 8388608 -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_rcvbuf 8388608 skampi41
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2      13.1      0.1      8      13.1      0.1      8
</span><br>
<span class="quotelev1">&gt;        3      57.4      0.3      8      57.4      0.3      8
</span><br>
<span class="quotelev1">&gt;        4      73.7      1.6      8      73.7      1.6      8
</span><br>
<span class="quotelev1">&gt;        5      87.1      2.0      8      87.1      2.0      8
</span><br>
<span class="quotelev1">&gt;        6     103.7      2.0      8     103.7      2.0      8
</span><br>
<span class="quotelev1">&gt;        7     118.3      2.4      8     118.3      2.4      8
</span><br>
<span class="quotelev1">&gt;        8     146.7      3.1      8     146.7      3.1      8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2     185.8      0.6      8     185.8      0.6      8
</span><br>
<span class="quotelev1">&gt;        3    1760.4     17.3      8    1760.4     17.3      8
</span><br>
<span class="quotelev1">&gt;        4    2916.8     52.1      8    2916.8     52.1      8
</span><br>
<span class="quotelev1">&gt;        5  106993.4 102562.4      2  106993.4 102562.4      2
</span><br>
<span class="quotelev1">&gt;        6  260723.1   6679.1      2  260723.1   6679.1      2
</span><br>
<span class="quotelev1">&gt;        7  240225.2   6369.8      6  240225.2   6369.8      6
</span><br>
<span class="quotelev1">&gt;        8  250848.1   4863.2      6  250848.1   4863.2      6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -mca mpi_paffinity_alone 1  -mca coll_basic_crossover 8
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt; -mca coll_sm_info_num_procs 8 -mca btl_tcp_sndbuf 8388608 \
</span><br>
<span class="quotelev1">&gt; -mca btl_tcp_rcvbuf 8388608 -mca btl_tcp_min_send_size 32768 \
</span><br>
<span class="quotelev1">&gt; -mca btl_tcp_max_send_size 65536 skampi41
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2      13.5      0.2      8      13.5      0.2      8
</span><br>
<span class="quotelev1">&gt;        3      57.3      1.8      8      57.3      1.8      8
</span><br>
<span class="quotelev1">&gt;        4      68.8      0.5      8      68.8      0.5      8
</span><br>
<span class="quotelev1">&gt;        5      83.2      0.6      8      83.2      0.6      8
</span><br>
<span class="quotelev1">&gt;        6     102.9      1.8      8     102.9      1.8      8
</span><br>
<span class="quotelev1">&gt;        7     117.4      2.3      8     117.4      2.3      8
</span><br>
<span class="quotelev1">&gt;        8     149.3      2.1      8     149.3      2.1      8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2     187.5      0.5      8     187.5      0.5      8
</span><br>
<span class="quotelev1">&gt;        3    1661.1     33.4      8    1661.1     33.4      8
</span><br>
<span class="quotelev1">&gt;        4    2715.9      6.9      8    2715.9      6.9      8
</span><br>
<span class="quotelev1">&gt;        5  116805.2  43036.4      8  116805.2  43036.4      8
</span><br>
<span class="quotelev1">&gt;        6  163177.7  41363.4      7  163177.7  41363.4      7
</span><br>
<span class="quotelev1">&gt;        7  233105.5  20621.4      2  233105.5  20621.4      2
</span><br>
<span class="quotelev1">&gt;        8  332049.5  83860.5      2  332049.5  83860.5      2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same stuff for MPICH 1.2.7 (sockets, no shared memory):
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2     312.5    106.5    100     312.5    106.5    100
</span><br>
<span class="quotelev1">&gt;        3     546.9    136.2    100     546.9    136.2    100
</span><br>
<span class="quotelev1">&gt;        4    2929.7    195.3    100    2929.7    195.3    100
</span><br>
<span class="quotelev1">&gt;        5    2070.3    203.7    100    2070.3    203.7    100
</span><br>
<span class="quotelev1">&gt;        6    2929.7    170.0    100    2929.7    170.0    100
</span><br>
<span class="quotelev1">&gt;        7    1328.1    186.0    100    1328.1    186.0    100
</span><br>
<span class="quotelev1">&gt;        8    3203.1    244.4    100    3203.1    244.4    100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2     390.6    117.8    100     390.6    117.8    100
</span><br>
<span class="quotelev1">&gt;        3    3164.1    252.6    100    3164.1    252.6    100
</span><br>
<span class="quotelev1">&gt;        4    5859.4    196.3    100    5859.4    196.3    100
</span><br>
<span class="quotelev1">&gt;        5   15234.4   6895.1     30   15234.4   6895.1     30
</span><br>
<span class="quotelev1">&gt;        6   18136.2   5563.7     14   18136.2   5563.7     14
</span><br>
<span class="quotelev1">&gt;        7   14204.5   2898.0     11   14204.5   2898.0     11
</span><br>
<span class="quotelev1">&gt;        8   11718.8   1594.7      4   11718.8   1594.7      4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, as one can see, MPICH latencies are much higher for small packets,
</span><br>
<span class="quotelev1">&gt; yet, things are way more consistent for larger ones. Depending on the
</span><br>
<span class="quotelev1">&gt; settings, Open-MPI either degrades at 5 or 6 cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Konstantin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<li><strong>Next message:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0566.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
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
