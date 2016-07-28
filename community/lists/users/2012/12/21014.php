<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 11:31:20 2012" -->
<!-- isoreceived="20121219163120" -->
<!-- sent="Wed, 19 Dec 2012 16:31:08 +0000" -->
<!-- isosent="20121219163108" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1" -->
<!-- id="50D1EBCC.1030008_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50D1A02F.9080400_at_rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2012-12-19 11:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21015.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<li><strong>In reply to:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21022.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21022.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19/12/12 11:08, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Did you *really* wanna to dig into code just in order to switch a 
</span><br>
<span class="quotelev1">&gt; default communication algorithm?
</span><br>
<p>No, I didn't want to, but with a huge change in performance, I'm forced 
<br>
to do something! And having looked at the different algorithms, I think 
<br>
there's a problem with the new default whenever message sizes are small 
<br>
enough that connection latency will dominate. We're not all running 
<br>
Infiniband, and having to wait for each pairwise exchange to complete 
<br>
before initiating another seems wrong if the latency in waiting for 
<br>
completion dominates the transmission time.
<br>
<p>E.g. If I have 10 small pairwise exchanges to perform,isn't it better to 
<br>
put all 10 outbound messages on the wire, and wait for 10 matching 
<br>
inbound messages, in any order? The new algorithm must wait for first 
<br>
exchange to complete, then second exchange, then third. Unlike before, 
<br>
does it not have to wait to acknowledge the matching *zero-sized* 
<br>
request? I don't see why this temporal ordering matters.
<br>
<p>Thanks for your help,
<br>
Simon
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note there are several ways to set the parameters; --mca on command 
</span><br>
<span class="quotelev1">&gt; line is just one of them (suitable for quick online tests).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We 'tune' our Open MPI by setting environment variables....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/19/12 11:44, Number Cruncher wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Having run some more benchmarks, the new default is *really* bad for our
</span><br>
<span class="quotelev2">&gt;&gt; application (2-10x slower), so I've been looking at the source to try 
</span><br>
<span class="quotelev2">&gt;&gt; and figure
</span><br>
<span class="quotelev2">&gt;&gt; out why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the biggest difference will occur when the all_to_all 
</span><br>
<span class="quotelev2">&gt;&gt; is actually
</span><br>
<span class="quotelev2">&gt;&gt; sparse (e.g. our application); if most N-M process exchanges are zero 
</span><br>
<span class="quotelev2">&gt;&gt; in size
</span><br>
<span class="quotelev2">&gt;&gt; the 1.6 ompi_coll_tuned_alltoallv_intra_basic_linear algorithm will 
</span><br>
<span class="quotelev2">&gt;&gt; actually
</span><br>
<span class="quotelev2">&gt;&gt; only post irecv/isend for non-zero exchanges; any zero-size exchanges 
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; skipped. It then waits once for all requests to complete. In 
</span><br>
<span class="quotelev2">&gt;&gt; contrast, the new
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_alltoallv_intra_pairwise will post the zero-size 
</span><br>
<span class="quotelev2">&gt;&gt; exchanges for
</span><br>
<span class="quotelev2">&gt;&gt; *every* N-M pair, and wait for each pairwise exchange. This is 
</span><br>
<span class="quotelev2">&gt;&gt; O(comm_size)
</span><br>
<span class="quotelev2">&gt;&gt; waits, may of which are zero. I'm not clear what optimizations there 
</span><br>
<span class="quotelev2">&gt;&gt; are for
</span><br>
<span class="quotelev2">&gt;&gt; zero-size isend/irecv, but surely there's a great deal more latency 
</span><br>
<span class="quotelev2">&gt;&gt; if each
</span><br>
<span class="quotelev2">&gt;&gt; pairwise exchange has to be confirmed complete before executing the 
</span><br>
<span class="quotelev2">&gt;&gt; next?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Relatedly, how would I direct OpenMPI to use the older algorithm
</span><br>
<span class="quotelev2">&gt;&gt; programmatically? I don't want the user to have to use &quot;--mca&quot; in their
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpiexec&quot;. Is there a C API?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Simon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 16/11/12 10:15, Iliev, Hristo wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Simon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The pairwise algorithm passes messages in a synchronised ring-like 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fashion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with increasing stride, so it works best when independent communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paths could be established between several ports of the network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch/router. Some 1 Gbps Ethernet equipment is not capable of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some is - it depends (usually on the price). This said, not all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perform the same given a specific type of network interconnect. For 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on our fat-tree InfiniBand network the pairwise algorithm performs 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can switch back to the basic linear algorithm by providing the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA parameters:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_tuned_alltoallv_algorithm 1 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Algorithm 1 is the basic linear, which used to be the default. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Algorithm 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the pairwise one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can also set these values as exported environment variables:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can also put this in $HOME/.openmpi/mcaparams.conf or (to make 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; global effect) in $OPAL_PREFIX/etc/openmpi-mca-params.conf:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A gratuitous hint: dual-Opteron systems are NUMAs so it makes sense to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; activate process binding with --bind-to-core if you haven't already 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It prevents MPI processes from being migrated to other NUMA nodes while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hristo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seffenter Weg 23, D 52074 Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Behalf Of Number Cruncher
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, November 15, 2012 5:37 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.6.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've noticed a very significant (100%) slow down for MPI_Alltoallv 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version 1.6.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * This is most noticeable for high-frequency exchanges over 1Gb 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ethernet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where process-to-process message sizes are fairly small (e.g. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 100kbyte)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; much of the exchange matrix is sparse.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 1.6.1 release notes mention &quot;Switch the MPI_ALLTOALLV default 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; algorithm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to a pairwise exchange&quot;, but I'm not clear what this means or how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back to the old &quot;non-default algorithm&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I attach a test program which illustrates the sort of usage in our MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application. I have run as this as 32 processes on four nodes, over 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1Gb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ethernet, each node with 2x Opteron 4180 (dual hex-core); rank 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0,4,8,..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on node 1, rank 1,5,9, ... on node 2, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It constructs an array of integers and a nProcess x nProcess exchange
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of part of our application. This is then exchanged several thousand 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; times.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Output from &quot;mpicc -O3&quot; runs shown below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My guess is that 1.6.1 is hitting additional latency not present in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.6.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attach a plot showing network throughput on our actual mesh generation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application. Nodes cfsc01-04 are running 1.6.0 and finish within 35
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minutes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nodes cfsc05-08 are running 1.6.2 (started 10 minutes later) and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; take over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hour to run. There seems to be a much greater network demand in the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.6.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version, despite the user-code and input data being identical.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any help you can give,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Simon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21015.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<li><strong>In reply to:</strong> <a href="21008.php">Paul Kapinos: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21022.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21022.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
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
