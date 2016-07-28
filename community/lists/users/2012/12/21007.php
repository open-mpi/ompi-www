<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 05:44:38 2012" -->
<!-- isoreceived="20121219104438" -->
<!-- sent="Wed, 19 Dec 2012 10:44:29 +0000" -->
<!-- isosent="20121219104429" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1" -->
<!-- id="50D19A8D.3030500_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC903C02F9E_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 05:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21006.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having run some more benchmarks, the new default is *really* bad for our 
<br>
application (2-10x slower), so I've been looking at the source to try 
<br>
and figure out why.
<br>
<p>It seems that the biggest difference will occur when the all_to_all is 
<br>
actually sparse (e.g. our application); if most N-M process exchanges 
<br>
are zero in size the 1.6 ompi_coll_tuned_alltoallv_intra_basic_linear 
<br>
algorithm will actually only post irecv/isend for non-zero exchanges; 
<br>
any zero-size exchanges are skipped. It then waits once for all requests 
<br>
to complete. In contrast, the new 
<br>
ompi_coll_tuned_alltoallv_intra_pairwise will post the zero-size 
<br>
exchanges for *every* N-M pair, and wait for each pairwise exchange. 
<br>
This is O(comm_size) waits, may of which are zero. I'm not clear what 
<br>
optimizations there are for zero-size isend/irecv, but surely there's a 
<br>
great deal more latency if each pairwise exchange has to be confirmed 
<br>
complete before executing the next?
<br>
<p>Relatedly, how would I direct OpenMPI to use the older algorithm 
<br>
programmatically? I don't want the user to have to use &quot;--mca&quot; in their 
<br>
&quot;mpiexec&quot;. Is there a C API?
<br>
<p>Thanks,
<br>
Simon
<br>
<p><p>On 16/11/12 10:15, Iliev, Hristo wrote:
<br>
<span class="quotelev1">&gt; Hi, Simon,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The pairwise algorithm passes messages in a synchronised ring-like fashion
</span><br>
<span class="quotelev1">&gt; with increasing stride, so it works best when independent communication
</span><br>
<span class="quotelev1">&gt; paths could be established between several ports of the network
</span><br>
<span class="quotelev1">&gt; switch/router. Some 1 Gbps Ethernet equipment is not capable of doing so,
</span><br>
<span class="quotelev1">&gt; some is - it depends (usually on the price). This said, not all algorithms
</span><br>
<span class="quotelev1">&gt; perform the same given a specific type of network interconnect. For example,
</span><br>
<span class="quotelev1">&gt; on our fat-tree InfiniBand network the pairwise algorithm performs better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can switch back to the basic linear algorithm by providing the following
</span><br>
<span class="quotelev1">&gt; MCA parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_alltoallv_algorithm 1 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Algorithm 1 is the basic linear, which used to be the default. Algorithm 2
</span><br>
<span class="quotelev1">&gt; is the pairwise one.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; You can also set  these values as exported environment variables:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev1">&gt; mpiexec ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also put this in $HOME/.openmpi/mcaparams.conf or (to make it have
</span><br>
<span class="quotelev1">&gt; global effect) in $OPAL_PREFIX/etc/openmpi-mca-params.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev1">&gt; coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A gratuitous hint: dual-Opteron systems are NUMAs so it makes sense to
</span><br>
<span class="quotelev1">&gt; activate process binding with --bind-to-core if you haven't already did so.
</span><br>
<span class="quotelev1">&gt; It prevents MPI processes from being migrated to other NUMA nodes while
</span><br>
<span class="quotelev1">&gt; running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Number Cruncher
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, November 15, 2012 5:37 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've noticed a very significant (100%) slow down for MPI_Alltoallv calls
</span><br>
<span class="quotelev1">&gt; as of
</span><br>
<span class="quotelev2">&gt;&gt; version 1.6.1.
</span><br>
<span class="quotelev2">&gt;&gt; * This is most noticeable for high-frequency exchanges over 1Gb ethernet
</span><br>
<span class="quotelev2">&gt;&gt; where process-to-process message sizes are fairly small (e.g. 100kbyte)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; much of the exchange matrix is sparse.
</span><br>
<span class="quotelev2">&gt;&gt; * 1.6.1 release notes mention &quot;Switch the MPI_ALLTOALLV default algorithm
</span><br>
<span class="quotelev2">&gt;&gt; to a pairwise exchange&quot;, but I'm not clear what this means or how to
</span><br>
<span class="quotelev1">&gt; switch
</span><br>
<span class="quotelev2">&gt;&gt; back to the old &quot;non-default algorithm&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I attach a test program which illustrates the sort of usage in our MPI
</span><br>
<span class="quotelev2">&gt;&gt; application. I have run as this as 32 processes on four nodes, over 1Gb
</span><br>
<span class="quotelev2">&gt;&gt; ethernet, each node with 2x Opteron 4180 (dual hex-core); rank 0,4,8,..
</span><br>
<span class="quotelev2">&gt;&gt; on node 1, rank 1,5,9, ... on node 2, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It constructs an array of integers and a nProcess x nProcess exchange
</span><br>
<span class="quotelev1">&gt; typical
</span><br>
<span class="quotelev2">&gt;&gt; of part of our application. This is then exchanged several thousand times.
</span><br>
<span class="quotelev2">&gt;&gt; Output from &quot;mpicc -O3&quot; runs shown below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that 1.6.1 is hitting additional latency not present in 1.6.0.
</span><br>
<span class="quotelev1">&gt; I also
</span><br>
<span class="quotelev2">&gt;&gt; attach a plot showing network throughput on our actual mesh generation
</span><br>
<span class="quotelev2">&gt;&gt; application. Nodes cfsc01-04 are running 1.6.0 and finish within 35
</span><br>
<span class="quotelev1">&gt; minutes.
</span><br>
<span class="quotelev2">&gt;&gt; Nodes cfsc05-08 are running 1.6.2 (started 10 minutes later) and take over
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt;&gt; hour to run. There seems to be a much greater network demand in the 1.6.1
</span><br>
<span class="quotelev2">&gt;&gt; version, despite the user-code and input data being identical.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help you can give,
</span><br>
<span class="quotelev2">&gt;&gt; Simon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21006.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
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
