<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 19:13:14 2006" -->
<!-- isoreceived="20060203001314" -->
<!-- sent="Thu, 2 Feb 2006 16:10:40 -0800 (PST)" -->
<!-- isosent="20060203001040" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open-MPI all-to-all performance" -->
<!-- id="20060203001040.23889.qmail_at_web52013.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[O-MPI users] Open-MPI all-to-all performance" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 19:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0567.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0565.php">Konstantin Kudin: "[O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="0565.php">Konstantin Kudin: "[O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0570.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0570.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi all,
<br>
<p>&nbsp;There seem to have been problems with the attachement. Here is the
<br>
report:
<br>
<p>&nbsp;I did some tests of Open-MPI version 1.0.2a4r8848. My motivation was
<br>
an extreme degradation of all-to-all MPI performance on 8 cpus (ran
<br>
like 1 cpu). At the same time, MPICH 1.2.7 on 8 cpus runs more like on
<br>
4 (not like 1 !!!).
<br>
<p>&nbsp;This was done using Skampi from :
<br>
<a href="http://liinwww.ira.uka.de/~skampi/skampi4.1.tar.gz">http://liinwww.ira.uka.de/~skampi/skampi4.1.tar.gz</a>
<br>
<p>&nbsp;The version 4.1 was used.
<br>
<p>&nbsp;The system is bunch of a dual Opterons connected by Gigabit.
<br>
<p>&nbsp;The MPI operation I am most interested in is all-to-all exchange.
<br>
<p>&nbsp;First of all, there seem to be some problems with the logarithmic
<br>
approach. Here is what I mean. In the following, first column is the
<br>
packet size, the next one is the average time (microseconds), then
<br>
goes standard deviation. The test was done on 8 cpus (4 dual nodes).
<br>
<p><span class="quotelev1">&gt;mpirun -np 8 -mca mpi_paffinity_alone 1 skampi41
</span><br>
#/*@inp2p_MPI_Send-MPI_Iprobe_Recv.ski*/
<br>
#Description of the MPI_Send-MPI_Iprobe_Recv measurement:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0      74.3      1.3      8      74.3      1.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16      77.4      2.1      8      77.4      2.1      8       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32     398.9    323.4    100     398.9    323.4    100       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64      80.7      2.3      9      80.7      2.3      9       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80      79.3      2.3     13      79.3      2.3     13       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
<p><span class="quotelev1">&gt;mpirun -np 8 -mca mpi_paffinity_alone 1 -mca coll_basic_crossover 8
</span><br>
skampi41
<br>
#/*@inp2p_MPI_Send-MPI_Iprobe_Recv.ski*/
<br>
#Description of the MPI_Send-MPI_Iprobe_Recv measurement:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0      76.7      2.1      8      76.7      2.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16      75.8      1.5      8      75.8      1.5      8       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32      74.4      0.6      8      74.4      0.6      8       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64      76.3      0.4      8      76.3      0.4      8       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80      76.7      0.5      8      76.7      0.5      8       0.0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0
<br>
<p>&nbsp;This anomalously large times for certain packet sizes (either 16 or
<br>
32) without increasing coll_basic_crossover to 8 show up for a whole
<br>
set of tests, so this is not a fluke.
<br>
<p>&nbsp;Next, the all-to-all thing. The short test included 64x4 byte
<br>
messages.
<br>
The long one had 16384x4 byte messages.
<br>
<p><span class="quotelev1">&gt; mpirun -np 8 -mca mpi_paffinity_alone 1  -mca coll_basic_crossover 8
</span><br>
skampi41
<br>
#/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      12.7      0.2      8      12.7      0.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3      56.1      0.3      8      56.1      0.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      69.9      1.8      8      69.9      1.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5      87.0      2.2      8      87.0      2.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6      99.7      1.5      8      99.7      1.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7     122.5      2.2      8     122.5      2.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8     147.5      2.5      8     147.5      2.5      8
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     188.5      0.3      8     188.5      0.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1680.5     16.6      8    1680.5     16.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2759.0     15.5      8    2759.0     15.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    4110.2     34.0      8    4110.2     34.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6   75443.5  44383.9      6   75443.5  44383.9      6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  242133.4    870.5      2  242133.4    870.5      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  252436.7   4016.8      8  252436.7   4016.8      8 
<br>
<p><span class="quotelev1">&gt; mpirun -np 8 -mca mpi_paffinity_alone 1  -mca coll_basic_crossover 8
</span><br>
\
<br>
-mca coll_sm_info_num_procs 8 -mca btl_tcp_sndbuf 8388608 -mca
<br>
btl_tcp_rcvbuf 8388608 skampi41
<br>
#/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      13.1      0.1      8      13.1      0.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3      57.4      0.3      8      57.4      0.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      73.7      1.6      8      73.7      1.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5      87.1      2.0      8      87.1      2.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6     103.7      2.0      8     103.7      2.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7     118.3      2.4      8     118.3      2.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8     146.7      3.1      8     146.7      3.1      8
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     185.8      0.6      8     185.8      0.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1760.4     17.3      8    1760.4     17.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2916.8     52.1      8    2916.8     52.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5  106993.4 102562.4      2  106993.4 102562.4      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  260723.1   6679.1      2  260723.1   6679.1      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  240225.2   6369.8      6  240225.2   6369.8      6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  250848.1   4863.2      6  250848.1   4863.2      6
<br>
<p><p><span class="quotelev1">&gt; mpirun -np 8 -mca mpi_paffinity_alone 1  -mca coll_basic_crossover 8
</span><br>
\
<br>
-mca coll_sm_info_num_procs 8 -mca btl_tcp_sndbuf 8388608 \
<br>
-mca btl_tcp_rcvbuf 8388608 -mca btl_tcp_min_send_size 32768 \
<br>
-mca btl_tcp_max_send_size 65536 skampi41
<br>
#/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      13.5      0.2      8      13.5      0.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3      57.3      1.8      8      57.3      1.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      68.8      0.5      8      68.8      0.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5      83.2      0.6      8      83.2      0.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6     102.9      1.8      8     102.9      1.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7     117.4      2.3      8     117.4      2.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8     149.3      2.1      8     149.3      2.1      8
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     187.5      0.5      8     187.5      0.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1661.1     33.4      8    1661.1     33.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2715.9      6.9      8    2715.9      6.9      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5  116805.2  43036.4      8  116805.2  43036.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  163177.7  41363.4      7  163177.7  41363.4      7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  233105.5  20621.4      2  233105.5  20621.4      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  332049.5  83860.5      2  332049.5  83860.5      2 
<br>
<p><p>Same stuff for MPICH 1.2.7 (sockets, no shared memory):
<br>
#/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     312.5    106.5    100     312.5    106.5    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3     546.9    136.2    100     546.9    136.2    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2929.7    195.3    100    2929.7    195.3    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    2070.3    203.7    100    2070.3    203.7    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6    2929.7    170.0    100    2929.7    170.0    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7    1328.1    186.0    100    1328.1    186.0    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8    3203.1    244.4    100    3203.1    244.4    100
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-short-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     390.6    117.8    100     390.6    117.8    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    3164.1    252.6    100    3164.1    252.6    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    5859.4    196.3    100    5859.4    196.3    100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5   15234.4   6895.1     30   15234.4   6895.1     30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6   18136.2   5563.7     14   18136.2   5563.7     14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7   14204.5   2898.0     11   14204.5   2898.0     11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   11718.8   1594.7      4   11718.8   1594.7      4 
<br>
<p>So, as one can see, MPICH latencies are much higher for small packets,
<br>
yet, things are way more consistent for larger ones. Depending on the
<br>
settings, Open-MPI either degrades at 5 or 6 cpus.
<br>
<p>&nbsp;Konstantin
<br>
<p><p><p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0567.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0565.php">Konstantin Kudin: "[O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="0565.php">Konstantin Kudin: "[O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0570.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0570.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
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
