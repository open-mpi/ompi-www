<?
$subject_val = "Re: [OMPI users] setting the btl_tcp_eager_limit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 09:33:37 2008" -->
<!-- isoreceived="20080505133337" -->
<!-- sent="Mon, 05 May 2008 15:33:22 +0200" -->
<!-- isosent="20080505133322" -->
<!-- name="jean-christophe.mignot_at_[hidden]" -->
<!-- email="jean-christophe.mignot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setting the btl_tcp_eager_limit" -->
<!-- id="481F0CA2.1040707_at_ens-lyon.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A7FC513-771A-4CFE-911A-B08EFD1DF839_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] setting the btl_tcp_eager_limit<br>
<strong>From:</strong> <a href="mailto:jean-christophe.mignot_at_[hidden]?Subject=Re:%20[OMPI%20users]%20setting%20the%20btl_tcp_eager_limit"><em>jean-christophe.mignot_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-05-05 09:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>Previous message:</strong> <a href="5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;Dear George,
<br>
First of all, many thanks for your quick response.
<br>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The btl_tcp_sndbuf and btl_tcp_rcvbuf are limited by the kernel 
</span><br>
<span class="quotelev1">&gt; (usually 128K), so there is no reason to set them to something huge, 
</span><br>
<span class="quotelev1">&gt; if the kernel is unable to support these values. 
</span><br>
In fact, we did change these values in the kernel. The reason why we use 
<br>
this huge values is that we work on a grid (Grid5000) where both the 
<br>
latency and the bandwidth are very high.
<br>
<span class="quotelev1">&gt; The eager didn't get modified between 1.1 and 1.2, so it should work 
</span><br>
<span class="quotelev1">&gt; as expected.
</span><br>
Please find below the results we obtain in the same configuration with 
<br>
ompi 1.1.4 and ompi 1.2.6 respectively using the pingpong of the IMB. 
<br>
You'll remark a change of the bandwidth response around 64KB. We think 
<br>
this is due to the use of the rendez-vous mode when messages are bigger 
<br>
than 64KB. That's why we try to change the eager limit. It worked fine 
<br>
with 1.1.4 version using the btl_tcp_eager_limit command line paramteter 
<br>
but it fails with 1.2.6.
<br>
Any idea is welcome.
<br>
Thanks in advance.
<br>
<p>#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V3.0, MPI-1 part
<br>
#---------------------------------------------------
<br>
# Date                  : Wed Apr 30 16:08:18 2008
<br>
# Machine               : x86_64
<br>
# System                : Linux
<br>
# Release               : 2.6.24
<br>
# Version               : #2 SMP Fri Apr 4 16:06:49 CEST 2008
<br>
# MPI Version           : 2.0
<br>
# MPI Thread Environment: MPI_THREAD_SINGLE
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   16777216
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># PingPong
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           50      5830.25         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           50      5831.46         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2           50      5831.77         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4           50      5831.37         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8           50      5831.56         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16           50      5831.36         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32           50      5831.37         0.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64           50      5833.24         0.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128           50      5836.28         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256           50      5841.19         0.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512           50      5850.76         0.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024           50      5870.26         0.17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048           50      5898.54         0.33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096           50      5926.43         0.66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192           50      5952.72         1.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384           50      6029.06         2.59
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768           50      6173.81         5.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536           50      6460.70         9.67
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072           50     18677.23         6.69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144           50     19804.31        12.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           50     22036.95        22.69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           50     26493.17        37.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           50     35400.57        56.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           50     53235.14        75.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8388608           50     88914.23        89.97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16777216           50    164841.80        97.06
<br>
<p>------------------------------------------------------------------------
<br>
<p>#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V3.0, MPI-1 part
<br>
#---------------------------------------------------
<br>
# Date                  : Wed Apr 30 16:15:27 2008
<br>
# Machine               : x86_64
<br>
# System                : Linux
<br>
# Release               : 2.6.24
<br>
# Version               : #2 SMP Fri Apr 4 16:06:49 CEST 2008
<br>
# MPI Version           : 2.0
<br>
# MPI Thread Environment: MPI_THREAD_SINGLE
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   16777216
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># PingPong
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           50      5828.42         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           50      5829.40         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2           50      5829.49         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4           50      5829.38         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8           50      5829.56         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16           50      5829.86         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32           50      5830.40         0.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64           50      5832.73         0.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128           50      5836.62         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256           50      5841.15         0.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512           50      5850.61         0.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024           50      5869.23         0.17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048           50      5896.90         0.33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096           50      5921.50         0.66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192           50      5953.92         1.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384           50      6025.42         2.59
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768           50      6172.76         5.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536           50      6459.50         9.68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072           50      7037.10        17.76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144           50      8216.81        30.43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           50     10614.90        47.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           50     15415.35        64.87
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           50     25000.11        80.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           50     44130.78        90.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8388608           50     82288.79        97.22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16777216           50    158273.73       101.09
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2008, at 1:20 PM, Jean-Christophe.Mignot_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; We're using a pingpong in order to measure the bandwidth and latency
</span><br>
<span class="quotelev2">&gt;&gt; available with open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; In our first experiments done with the 1.1.4 version, we were using the
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_eager_limit parameter to modify the eager limit. We've upgraded
</span><br>
<span class="quotelev2">&gt;&gt; to the 1.2.6 version and the limit parameter we fix doesn't seem to be
</span><br>
<span class="quotelev2">&gt;&gt; taken in account.  The value we want to use is 67108864. The command
</span><br>
<span class="quotelev2">&gt;&gt; line is:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -machinefile node_file -mca btl_tcp_sndbuf 4194304 -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_rcvbuf 4194304 -mca btl_tcp_eager_limit 67108864 pingpong.
</span><br>
<span class="quotelev2">&gt;&gt; Is this parameter still useful (ompi_info shows that this parameter is
</span><br>
<span class="quotelev2">&gt;&gt; still available) ?
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody have any idea ?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt; JC Mignot and Ludovic Hablot
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>Previous message:</strong> <a href="5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
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
