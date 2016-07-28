<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 05:15:59 2012" -->
<!-- isoreceived="20121116101559" -->
<!-- sent="Fri, 16 Nov 2012 10:15:40 +0000" -->
<!-- isosent="20121116101540" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903C02F9E_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50A51A45.9000109_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-16 05:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20728.php">Brian Budge: "[OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20726.php">marco atzeri: "[OMPI users] New package: openmpi-1.6.3-3"</a>
<li><strong>In reply to:</strong> <a href="20722.php">Number Cruncher: "[OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Simon,
<br>
<p>The pairwise algorithm passes messages in a synchronised ring-like fashion
<br>
with increasing stride, so it works best when independent communication
<br>
paths could be established between several ports of the network
<br>
switch/router. Some 1 Gbps Ethernet equipment is not capable of doing so,
<br>
some is - it depends (usually on the price). This said, not all algorithms
<br>
perform the same given a specific type of network interconnect. For example,
<br>
on our fat-tree InfiniBand network the pairwise algorithm performs better.
<br>
<p>You can switch back to the basic linear algorithm by providing the following
<br>
MCA parameters:
<br>
<p>mpiexec --mca coll_tuned_use_dynamic_rules 1 --mca
<br>
coll_tuned_alltoallv_algorithm 1 ...
<br>
<p>Algorithm 1 is the basic linear, which used to be the default. Algorithm 2
<br>
is the pairwise one.
<br>
&nbsp;
<br>
You can also set  these values as exported environment variables:
<br>
<p>export OMPI_MCA_coll_tuned_use_dynamic_rules=1
<br>
export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
<br>
mpiexec ...
<br>
<p>You can also put this in $HOME/.openmpi/mcaparams.conf or (to make it have
<br>
global effect) in $OPAL_PREFIX/etc/openmpi-mca-params.conf:
<br>
<p>coll_tuned_use_dynamic_rules=1
<br>
coll_tuned_alltoallv_algorithm=1
<br>
<p>A gratuitous hint: dual-Opteron systems are NUMAs so it makes sense to
<br>
activate process binding with --bind-to-core if you haven't already did so.
<br>
It prevents MPI processes from being migrated to other NUMA nodes while
<br>
running.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On Behalf Of Number Cruncher
&gt; Sent: Thursday, November 15, 2012 5:37 PM
&gt; To: Open MPI Users
&gt; Subject: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1
&gt; 
&gt; I've noticed a very significant (100%) slow down for MPI_Alltoallv calls
as of
&gt; version 1.6.1.
&gt; * This is most noticeable for high-frequency exchanges over 1Gb ethernet
&gt; where process-to-process message sizes are fairly small (e.g. 100kbyte)
and
&gt; much of the exchange matrix is sparse.
&gt; * 1.6.1 release notes mention &quot;Switch the MPI_ALLTOALLV default algorithm
&gt; to a pairwise exchange&quot;, but I'm not clear what this means or how to
switch
&gt; back to the old &quot;non-default algorithm&quot;.
&gt; 
&gt; I attach a test program which illustrates the sort of usage in our MPI
&gt; application. I have run as this as 32 processes on four nodes, over 1Gb
&gt; ethernet, each node with 2x Opteron 4180 (dual hex-core); rank 0,4,8,..
&gt; on node 1, rank 1,5,9, ... on node 2, etc.
&gt; 
&gt; It constructs an array of integers and a nProcess x nProcess exchange
typical
&gt; of part of our application. This is then exchanged several thousand times.
&gt; Output from &quot;mpicc -O3&quot; runs shown below.
&gt; 
&gt; My guess is that 1.6.1 is hitting additional latency not present in 1.6.0.
I also
&gt; attach a plot showing network throughput on our actual mesh generation
&gt; application. Nodes cfsc01-04 are running 1.6.0 and finish within 35
minutes.
&gt; Nodes cfsc05-08 are running 1.6.2 (started 10 minutes later) and take over
a
&gt; hour to run. There seems to be a much greater network demand in the 1.6.1
&gt; version, despite the user-code and input data being identical.
&gt; 
&gt; Thanks for any help you can give,
&gt; Simon
&gt; 
&gt; For 1.6.0:
&gt; 
&gt; Open MPI 1.6.0
&gt; Proc  0: 50 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0 0
&gt; 0                                  Total: 198 x 100 int
&gt; Proc  1: 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                     Total: 148 x 100 int
&gt; Proc  2: 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                        Total: 109 x 100 int
&gt; Proc  3: 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                           Total: 80 x 100 int
&gt; Proc  4: 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                              Total: 58 x 100 int
&gt; Proc  5: 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                 Total: 41 x 100 int
&gt; Proc  6:  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                    Total: 29 x 100 int
&gt; Proc  7:  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                       Total: 20 x 100
int
&gt; Proc  8:  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                          Total: 14 x
&gt; 100 int
&gt; Proc  9:  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                             Total: 9 x
&gt; 100 int
&gt; Proc 10:  2  1  0  0  0  0  0  0  0  0 0 Total: 6 x 100 int Proc 11:  1  0
0  0  0  0  0  0  0
&gt; 0                                                                 0
&gt; Total: 4 x 100 int
&gt; Proc 12:  0  0  0  0  0  0  0  0
&gt; 0                                                                 0 0
&gt; Total: 2 x 100 int
&gt; Proc 13:  0  0  0  0  0  0  0
&gt; 0                                                                 0 0  0
&gt; Total: 1 x 100 int
&gt; Proc 14:  0  0  0  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0 Total: 1 x 100 int
&gt; Proc 15:  0  0  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0 Total: 0 x 100 int
&gt; Proc 16:  0  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0 Total: 0 x 100 int
&gt; Proc 17:  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0 Total: 1 x 100 int
&gt; Proc 18:  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0  0 Total: 1 x 100 int
&gt; Proc 19:  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0  0  0 Total: 2 x 100 int
&gt; Proc 20:
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0  0  0  1 Total: 4 x 100 int Proc 21: 0  0  0  0  0  0  0  0
0  1  2 Total: 6 x 100
&gt; int
&gt; Proc 22:                                                              0
&gt; 0  0  0  0  0  0  0  0  1  2  3 Total: 9 x 100 int Proc 23: 0  0  0  0  0
0  0  0  0  1  2  3  4
&gt; Total: 14 x 100 int
&gt; Proc 24:                                                        0 0  0
&gt; 0  0  0  0  0  0  1  2  3  4  6 Total: 20 x 100 int
&gt; Proc 25:                                                     0  0 0  0
&gt; 0  0  0  0  0  1  2  3  4  6  8 Total: 29 x 100 int
&gt; Proc 26:                                                  0  0  0 0  0
&gt; 0  0  0  0  1  2  3  4  6  8 12 Total: 41 x 100 int
&gt; Proc 27:                                               0  0  0  0 0  0
&gt; 0  0  0  1  2  3  4  6  8 12 16 Total: 58 x 100 int
&gt; Proc 28:                                            0  0  0  0  0 0  0
&gt; 0  0  1  2  3  4  6  8 12 16 22 Total: 80 x 100 int
&gt; Proc 29:                                         0  0  0  0  0  0 0  0
&gt; 0  1  2  3  4  6  8 12 16 22 29 Total: 109 x 100 int
&gt; Proc 30:                                      0  0  0  0  0  0  0 0  0
&gt; 1  2  3  4  6  8 12 16 22 29 38 Total: 148 x 100 int
&gt; Proc 31:                                   0  0  0  0  0  0  0  0 0  1
&gt; 2  3  4  6  8 12 16 22 29 38 50 Total: 198 x 100 int
&gt;
............................................................................
........................
&gt; Total time = 15.443502 seconds
&gt; 
&gt; 
&gt; For 1.6.1:
&gt; 
&gt; Open MPI 1.6.1
&gt; Proc  0: 50 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0 0
&gt; 0                                  Total: 198 x 100 int
&gt; Proc  1: 38 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                     Total: 148 x 100 int
&gt; Proc  2: 29 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                        Total: 109 x 100 int
&gt; Proc  3: 22 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                           Total: 80 x 100 int
&gt; Proc  4: 16 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                              Total: 58 x 100 int
&gt; Proc  5: 12  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                 Total: 41 x 100 int
&gt; Proc  6:  8  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                    Total: 29 x 100 int
&gt; Proc  7:  6  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                       Total: 20 x 100
int
&gt; Proc  8:  4  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                          Total: 14 x
&gt; 100 int
&gt; Proc  9:  3  2  1  0  0  0  0  0  0  0  0
&gt; 0                                                             Total: 9 x
&gt; 100 int
&gt; Proc 10:  2  1  0  0  0  0  0  0  0  0 0 Total: 6 x 100 int Proc 11:  1  0
0  0  0  0  0  0  0
&gt; 0                                                                 0
&gt; Total: 4 x 100 int
&gt; Proc 12:  0  0  0  0  0  0  0  0
&gt; 0                                                                 0 0
&gt; Total: 2 x 100 int
&gt; Proc 13:  0  0  0  0  0  0  0
&gt; 0                                                                 0 0  0
&gt; Total: 1 x 100 int
&gt; Proc 14:  0  0  0  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0 Total: 1 x 100 int
&gt; Proc 15:  0  0  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0 Total: 0 x 100 int
&gt; Proc 16:  0  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0 Total: 0 x 100 int
&gt; Proc 17:  0  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0 Total: 1 x 100 int
&gt; Proc 18:  0  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0  0 Total: 1 x 100 int
&gt; Proc 19:  0
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0  0  0 Total: 2 x 100 int
&gt; Proc 20:
&gt; 0                                                                 0 0
&gt; 0  0  0  0  0  0  0  1 Total: 4 x 100 int Proc 21: 0  0  0  0  0  0  0  0
0  1  2 Total: 6 x 100
&gt; int
&gt; Proc 22:                                                              0
&gt; 0  0  0  0  0  0  0  0  1  2  3 Total: 9 x 100 int Proc 23: 0  0  0  0  0
0  0  0  0  1  2  3  4
&gt; Total: 14 x 100 int
&gt; Proc 24:                                                        0 0  0
&gt; 0  0  0  0  0  0  1  2  3  4  6 Total: 20 x 100 int
&gt; Proc 25:                                                     0  0 0  0
&gt; 0  0  0  0  0  1  2  3  4  6  8 Total: 29 x 100 int
&gt; Proc 26:                                                  0  0  0 0  0
&gt; 0  0  0  0  1  2  3  4  6  8 12 Total: 41 x 100 int
&gt; Proc 27:                                               0  0  0  0 0  0
&gt; 0  0  0  1  2  3  4  6  8 12 16 Total: 58 x 100 int
&gt; Proc 28:                                            0  0  0  0  0 0  0
&gt; 0  0  1  2  3  4  6  8 12 16 22 Total: 80 x 100 int
&gt; Proc 29:                                         0  0  0  0  0  0 0  0
&gt; 0  1  2  3  4  6  8 12 16 22 29 Total: 109 x 100 int
&gt; Proc 30:                                      0  0  0  0  0  0  0 0  0
&gt; 1  2  3  4  6  8 12 16 22 29 38 Total: 148 x 100 int
&gt; Proc 31:                                   0  0  0  0  0  0  0  0 0  1
&gt; 2  3  4  6  8 12 16 22 29 38 50 Total: 198 x 100 int
&gt;
............................................................................
........................
&gt; Total time = 25.549821 seconds

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20727/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20728.php">Brian Budge: "[OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20726.php">marco atzeri: "[OMPI users] New package: openmpi-1.6.3-3"</a>
<li><strong>In reply to:</strong> <a href="20722.php">Number Cruncher: "[OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
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
