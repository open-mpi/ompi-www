<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 06:08:35 2012" -->
<!-- isoreceived="20121219110835" -->
<!-- sent="Wed, 19 Dec 2012 12:08:31 +0100" -->
<!-- isosent="20121219110831" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1" -->
<!-- id="50D1A02F.9080400_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50D19A8D.3030500_at_ntlworld.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 06:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21009.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you *really* wanna to dig into code just in order to switch a default 
<br>
communication algorithm?
<br>
<p>Note there are several ways to set the parameters; --mca on command line is just 
<br>
one of them (suitable for quick online tests).
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>We 'tune' our Open MPI by setting environment variables....
<br>
<p>Best
<br>
Paul Kapinos
<br>
<p><p><p>On 12/19/12 11:44, Number Cruncher wrote:
<br>
<span class="quotelev1">&gt; Having run some more benchmarks, the new default is *really* bad for our
</span><br>
<span class="quotelev1">&gt; application (2-10x slower), so I've been looking at the source to try and figure
</span><br>
<span class="quotelev1">&gt; out why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the biggest difference will occur when the all_to_all is actually
</span><br>
<span class="quotelev1">&gt; sparse (e.g. our application); if most N-M process exchanges are zero in size
</span><br>
<span class="quotelev1">&gt; the 1.6 ompi_coll_tuned_alltoallv_intra_basic_linear algorithm will actually
</span><br>
<span class="quotelev1">&gt; only post irecv/isend for non-zero exchanges; any zero-size exchanges are
</span><br>
<span class="quotelev1">&gt; skipped. It then waits once for all requests to complete. In contrast, the new
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_alltoallv_intra_pairwise will post the zero-size exchanges for
</span><br>
<span class="quotelev1">&gt; *every* N-M pair, and wait for each pairwise exchange. This is O(comm_size)
</span><br>
<span class="quotelev1">&gt; waits, may of which are zero. I'm not clear what optimizations there are for
</span><br>
<span class="quotelev1">&gt; zero-size isend/irecv, but surely there's a great deal more latency if each
</span><br>
<span class="quotelev1">&gt; pairwise exchange has to be confirmed complete before executing the next?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Relatedly, how would I direct OpenMPI to use the older algorithm
</span><br>
<span class="quotelev1">&gt; programmatically? I don't want the user to have to use &quot;--mca&quot; in their
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot;. Is there a C API?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Simon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 16/11/12 10:15, Iliev, Hristo wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Simon,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The pairwise algorithm passes messages in a synchronised ring-like fashion
</span><br>
<span class="quotelev2">&gt;&gt; with increasing stride, so it works best when independent communication
</span><br>
<span class="quotelev2">&gt;&gt; paths could be established between several ports of the network
</span><br>
<span class="quotelev2">&gt;&gt; switch/router. Some 1 Gbps Ethernet equipment is not capable of doing so,
</span><br>
<span class="quotelev2">&gt;&gt; some is - it depends (usually on the price). This said, not all algorithms
</span><br>
<span class="quotelev2">&gt;&gt; perform the same given a specific type of network interconnect. For example,
</span><br>
<span class="quotelev2">&gt;&gt; on our fat-tree InfiniBand network the pairwise algorithm performs better.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can switch back to the basic linear algorithm by providing the following
</span><br>
<span class="quotelev2">&gt;&gt; MCA parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_alltoallv_algorithm 1 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Algorithm 1 is the basic linear, which used to be the default. Algorithm 2
</span><br>
<span class="quotelev2">&gt;&gt; is the pairwise one.
</span><br>
<span class="quotelev2">&gt;&gt; You can also set these values as exported environment variables:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can also put this in $HOME/.openmpi/mcaparams.conf or (to make it have
</span><br>
<span class="quotelev2">&gt;&gt; global effect) in $OPAL_PREFIX/etc/openmpi-mca-params.conf:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A gratuitous hint: dual-Opteron systems are NUMAs so it makes sense to
</span><br>
<span class="quotelev2">&gt;&gt; activate process binding with --bind-to-core if you haven't already did so.
</span><br>
<span class="quotelev2">&gt;&gt; It prevents MPI processes from being migrated to other NUMA nodes while
</span><br>
<span class="quotelev2">&gt;&gt; running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; Hristo
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23, D 52074 Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Number Cruncher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, November 15, 2012 5:37 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've noticed a very significant (100%) slow down for MPI_Alltoallv calls
</span><br>
<span class="quotelev2">&gt;&gt; as of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version 1.6.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * This is most noticeable for high-frequency exchanges over 1Gb ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where process-to-process message sizes are fairly small (e.g. 100kbyte)
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much of the exchange matrix is sparse.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 1.6.1 release notes mention &quot;Switch the MPI_ALLTOALLV default algorithm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a pairwise exchange&quot;, but I'm not clear what this means or how to
</span><br>
<span class="quotelev2">&gt;&gt; switch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back to the old &quot;non-default algorithm&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attach a test program which illustrates the sort of usage in our MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application. I have run as this as 32 processes on four nodes, over 1Gb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ethernet, each node with 2x Opteron 4180 (dual hex-core); rank 0,4,8,..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on node 1, rank 1,5,9, ... on node 2, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It constructs an array of integers and a nProcess x nProcess exchange
</span><br>
<span class="quotelev2">&gt;&gt; typical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of part of our application. This is then exchanged several thousand times.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Output from &quot;mpicc -O3&quot; runs shown below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that 1.6.1 is hitting additional latency not present in 1.6.0.
</span><br>
<span class="quotelev2">&gt;&gt; I also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attach a plot showing network throughput on our actual mesh generation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application. Nodes cfsc01-04 are running 1.6.0 and finish within 35
</span><br>
<span class="quotelev2">&gt;&gt; minutes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nodes cfsc05-08 are running 1.6.2 (started 10 minutes later) and take over
</span><br>
<span class="quotelev2">&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hour to run. There seems to be a much greater network demand in the 1.6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version, despite the user-code and input data being identical.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help you can give,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21008/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21009.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21007.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
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
