<?
$subject_val = "[OMPI devel] a performance issue of Open MPI Reduce on infiniband cluster.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 14:48:34 2011" -->
<!-- isoreceived="20110831184834" -->
<!-- sent="Wed, 31 Aug 2011 14:48:29 -0400" -->
<!-- isosent="20110831184829" -->
<!-- name="teng ma" -->
<!-- email="xiaok1981_at_[hidden]" -->
<!-- subject="[OMPI devel] a performance issue of Open MPI Reduce on infiniband cluster." -->
<!-- id="CANQYCiZ1cPCOHeJQ=cNdSc7zr51gUeB_zC0bLPAMa_H2BJRw7g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] a performance issue of Open MPI Reduce on infiniband cluster.<br>
<strong>From:</strong> teng ma (<em>xiaok1981_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 14:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9737.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I met a performance issue of Open MPI Reduce on infiniband cluster.
<br>
I have two clusters, each has 32 nodes. Only difference between these two
<br>
clusters is their interconnect:
<br>
one gigabyte ethernet cluster and one 20 g infiniband.  I configure Open MPI
<br>
1.5.3 on both clusters as following:
<br>
<p>on infiniband cluster
<br>
configure --prefix=/home/tma/opt/ompi153 --with-knem=/opt/knem
<br>
--disable-debug --with-openib --enable-mpi-f77 --enable-mpi-f90
<br>
--enable-mpi-cxx --disable-vt
<br>
on ethernet cluster
<br>
../openmpi-1.5.3/configure --prefix=/home/tma/opt/ompi153
<br>
--with-knem=/opt/knem --disable-debug  --enable-mpi-f77 --enable-mpi-f90
<br>
--enable-mpi-cxx --disable-vt
<br>
<p>The only difference between these two setups is one uses TCP BTL on ethernet
<br>
and another uses Openib BTL on infiniband cluster.  I testes it with IMB3.2
<br>
using Reduce.
<br>
The performance is a little surprising.  No matter tuned coll or hierarch
<br>
coll,  Open MPI's Reduce  Gigabyte ethernet cluster is faster than it on 20g
<br>
infiniband cluster, sometimes by 10 times like followings:
<br>
<p>I used the same mapping between cores and processes on both clusters.  I
<br>
also use mvapich2-1.7 on infiniband cluster to test ininiband cluster's
<br>
hardware, and their results look normal to me and can beat  or close to the
<br>
runtime on ethernet cluster.   It looks like infiniband cluster's hardware
<br>
works correctly from mvapich2's result.  I also did not see too much
<br>
difference from pingpong test between nodes no matter open mpi or mvapich2
<br>
on infiniband @ latency or BW.    Is there any possible for OpenIB BTL to
<br>
degrade performance with large amount of processes involved into
<br>
communicator in special communication patters. I did not see this phenomenon
<br>
at other operations e.g. broadcast or allgather.   Is there any methods to
<br>
tune openib BTL on large scale?
<br>
<p><p>Tuned on ethernet cluster
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Reduce
<br>
# #processes = 768
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.08         0.39         0.09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000       222.57       224.46       223.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000       190.48       195.22       194.38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000       253.82       255.50       254.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000       224.99       227.10       226.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000       211.55       213.69       212.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000       206.82       208.64       207.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000       236.94       241.66       238.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000       299.05       301.38       300.35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000       437.94       441.51       440.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000      1032.04      1040.56      1037.91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000      1507.09      1516.15      1512.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000      1871.93      1884.96      1879.88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000      2836.64      2853.25      2846.76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000      4217.10      4236.68      4227.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          423     23731.68     23808.00     23773.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          160     54681.98     57174.22     56774.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          107     76799.20     81679.58     80494.88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80     81618.96     94513.69     89345.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40    120627.98    147049.20    132740.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20     47541.80     53145.49     51015.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10    402117.49    407616.31    406311.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8388608            5    126613.00    143827.63    141219.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16777216            2    204279.07    236565.95    228780.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;33554432            1    276933.91    398322.11    346959.91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;67108864            1    565240.86    709377.05    655559.84
<br>
<p>Tuned on infiniband cluster
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.06         0.09         0.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        12.20        15.05        13.45
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        10.43        11.34        10.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        10.32        11.55        10.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         9.87        10.78        10.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         9.92        11.13        10.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         2.70        84.15         5.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         2.45        16.78         5.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         5.97        22.52         9.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         3.94       122.85         8.24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         7.18       168.68        16.86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000        14.61      1008.60        79.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000        46.71      2152.43       164.35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       221.19      4381.02       422.91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768          775      1875.63      6993.05      2227.96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        99.90     15416.71      1138.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      1465.10     52405.28      3230.43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160       392.92     97336.44      4038.41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       796.63    108368.69      7415.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40      1650.22    106789.92     14436.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           16      5900.06    635461.49    350146.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10     11706.11   1196665.50    724550.82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8388608            5     24076.41   1889796.59   1012426.41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16777216            2     45678.50   2334099.41   1311503.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;33554432            1   2038235.90   3204766.99   2922900.88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;67108864            1   6048538.92   6359004.02   6224545.86
<br>
<p>Mvapich2-1.7
<br>
on infiniband cluster
<br>
#----------------------------------------------------------------
<br>
# Benchmarking Reduce
<br>
# #processes = 768
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.09         0.11         0.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         6.16        53.48        14.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         6.08        57.17        14.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         6.18        57.85        14.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         6.26        64.25        15.16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         6.98        56.46        17.91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         7.90        52.12        19.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        10.12        54.41        21.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        13.73        58.44        25.67
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        21.82        53.39        31.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000        40.11        71.48        48.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000        76.37       115.03        86.57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000        87.21       248.86       111.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       523.64       524.47       524.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000       612.20       613.11       612.67
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640       693.71       694.97       694.43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      1015.76      1019.67      1017.85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      2066.41      2080.15      2074.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80      4237.09      4292.31      4270.24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40      9458.45      9691.35      9600.54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20     32027.40     39877.95     35711.22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10     60754.99     65029.00     63449.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8388608            5     79504.20     96219.40     90051.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16777216            2    117237.45    197361.47    167624.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;33554432            1    133003.00    475266.93    299665.71
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;67108864            1    265702.01    831732.03    598579.16
<br>
<p>Teng Ma
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9737.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
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
