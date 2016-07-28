<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 09:43:01 2012" -->
<!-- isoreceived="20121220144301" -->
<!-- sent="Thu, 20 Dec 2012 14:42:55 +0000" -->
<!-- isosent="20121220144255" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903C7D883_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50D1EBCC.1030008_at_ntlworld.com" -->
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
<strong>Date:</strong> 2012-12-20 09:42:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21023.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Previous message:</strong> <a href="21021.php">Jeff Squyres: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>In reply to:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simon,
<br>
<p>The goal of any MPI implementation is to be as fast as possible.
<br>
Unfortunately there is no &quot;one size fits all&quot; algorithm that works on all
<br>
networks and given all possible kind of peculiarities that your specific
<br>
communication scheme may have. That's why there are different algorithms and
<br>
you are given the option to dynamically select them at run time without the
<br>
need to recompile the code. I don't think the change of the default
<br>
algorithm (note that the pairwise algorithm has been there for many years -
<br>
it is not new, simply the new default one) was introduced in order to piss
<br>
users off.
<br>
<p>If you want OMPI to default to the previous algorithm:
<br>
<p>1) Add this to the system-wide OMPI configuration file
<br>
$sysconf/openmpi-mca-params.conf (wher $sysconf would most likely be
<br>
$PREFIX/etc, where $PREFIX is the OMPI installation directory):
<br>
coll_tuned_use_dynamic_rules = 1
<br>
coll_tuned_alltoallv_algorithm = 1
<br>
<p>2) The settings from (1) can be overridden on per user basis by the similar
<br>
settings from $HOME/.openmpi/mca-params.conf.
<br>
<p>3) The settings from (1) and (2) can be overridden on per job basis by
<br>
exporting MCA parameters as environment variables:
<br>
export OMPI_MCA_coll_tuned_use_dynamic_rules=1
<br>
export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
<br>
<p>4) Finally, the settings from (1), (2), and (3) can be overridden on per MPI
<br>
program launch by supplying appropriate MCA parameters to orterun (a.k.a.
<br>
mpirun and mpiexec).
<br>
<p>There is also a largely undocumented feature of the &quot;tuned&quot; collective
<br>
component where a dynamic rules file can be supplied. In the file a series
<br>
of cases tell the library which implementation to use based on the
<br>
communicator and message sizes. No idea if it works with ALLTOALLV.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<p>(sorry for top posting - damn you, Outlook!)
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
&gt; Sent: Wednesday, December 19, 2012 5:31 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to
&gt; 1.6.1
&gt; 
&gt; On 19/12/12 11:08, Paul Kapinos wrote:
&gt; &gt; Did you *really* wanna to dig into code just in order to switch a
&gt; &gt; default communication algorithm?
&gt; 
&gt; No, I didn't want to, but with a huge change in performance, I'm forced to
do
&gt; something! And having looked at the different algorithms, I think there's
a
&gt; problem with the new default whenever message sizes are small enough
&gt; that connection latency will dominate. We're not all running Infiniband,
and
&gt; having to wait for each pairwise exchange to complete before initiating
&gt; another seems wrong if the latency in waiting for completion dominates the
&gt; transmission time.
&gt; 
&gt; E.g. If I have 10 small pairwise exchanges to perform,isn't it better to
put all
&gt; 10 outbound messages on the wire, and wait for 10 matching inbound
&gt; messages, in any order? The new algorithm must wait for first exchange to
&gt; complete, then second exchange, then third. Unlike before, does it not
have
&gt; to wait to acknowledge the matching *zero-sized* request? I don't see why
&gt; this temporal ordering matters.
&gt; 
&gt; Thanks for your help,
&gt; Simon
&gt; 
&gt; 
&gt; 
&gt; 
&gt; &gt;
&gt; &gt; Note there are several ways to set the parameters; --mca on command
&gt; &gt; line is just one of them (suitable for quick online tests).
&gt; &gt;
&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
&gt; &gt;
&gt; &gt; We 'tune' our Open MPI by setting environment variables....
&gt; &gt;
&gt; &gt; Best
&gt; &gt; Paul Kapinos
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On 12/19/12 11:44, Number Cruncher wrote:
&gt; &gt;&gt; Having run some more benchmarks, the new default is *really* bad for
&gt; &gt;&gt; our application (2-10x slower), so I've been looking at the source to
&gt; &gt;&gt; try and figure out why.
&gt; &gt;&gt;
&gt; &gt;&gt; It seems that the biggest difference will occur when the all_to_all
&gt; &gt;&gt; is actually sparse (e.g. our application); if most N-M process
&gt; &gt;&gt; exchanges are zero in size the 1.6
&gt; &gt;&gt; ompi_coll_tuned_alltoallv_intra_basic_linear algorithm will actually
&gt; &gt;&gt; only post irecv/isend for non-zero exchanges; any zero-size exchanges
&gt; &gt;&gt; are skipped. It then waits once for all requests to complete. In
&gt; &gt;&gt; contrast, the new ompi_coll_tuned_alltoallv_intra_pairwise will post
&gt; &gt;&gt; the zero-size exchanges for
&gt; &gt;&gt; *every* N-M pair, and wait for each pairwise exchange. This is
&gt; &gt;&gt; O(comm_size)
&gt; &gt;&gt; waits, may of which are zero. I'm not clear what optimizations there
&gt; &gt;&gt; are for zero-size isend/irecv, but surely there's a great deal more
&gt; &gt;&gt; latency if each pairwise exchange has to be confirmed complete before
&gt; &gt;&gt; executing the next?
&gt; &gt;&gt;
&gt; &gt;&gt; Relatedly, how would I direct OpenMPI to use the older algorithm
&gt; &gt;&gt; programmatically? I don't want the user to have to use &quot;--mca&quot; in
&gt; &gt;&gt; their &quot;mpiexec&quot;. Is there a C API?
&gt; &gt;&gt;
&gt; &gt;&gt; Thanks,
&gt; &gt;&gt; Simon
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On 16/11/12 10:15, Iliev, Hristo wrote:
&gt; &gt;&gt;&gt; Hi, Simon,
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; The pairwise algorithm passes messages in a synchronised ring-like
&gt; &gt;&gt;&gt; fashion with increasing stride, so it works best when independent
&gt; &gt;&gt;&gt; communication paths could be established between several ports of
&gt; &gt;&gt;&gt; the network switch/router. Some 1 Gbps Ethernet equipment is not
&gt; &gt;&gt;&gt; capable of doing so, some is - it depends (usually on the price).
&gt; &gt;&gt;&gt; This said, not all algorithms perform the same given a specific type
&gt; &gt;&gt;&gt; of network interconnect. For example, on our fat-tree InfiniBand
&gt; &gt;&gt;&gt; network the pairwise algorithm performs better.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; You can switch back to the basic linear algorithm by providing the
&gt; &gt;&gt;&gt; following MCA parameters:
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; mpiexec --mca coll_tuned_use_dynamic_rules 1 --mca
&gt; &gt;&gt;&gt; coll_tuned_alltoallv_algorithm 1 ...
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Algorithm 1 is the basic linear, which used to be the default.
&gt; &gt;&gt;&gt; Algorithm 2
&gt; &gt;&gt;&gt; is the pairwise one.
&gt; &gt;&gt;&gt; You can also set these values as exported environment variables:
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
&gt; &gt;&gt;&gt; export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
&gt; &gt;&gt;&gt; mpiexec ...
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; You can also put this in $HOME/.openmpi/mcaparams.conf or (to make
&gt; &gt;&gt;&gt; it have global effect) in $OPAL_PREFIX/etc/openmpi-mca-params.conf:
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; coll_tuned_use_dynamic_rules=1
&gt; &gt;&gt;&gt; coll_tuned_alltoallv_algorithm=1
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; A gratuitous hint: dual-Opteron systems are NUMAs so it makes sense
&gt; &gt;&gt;&gt; to activate process binding with --bind-to-core if you haven't
&gt; &gt;&gt;&gt; already did so.
&gt; &gt;&gt;&gt; It prevents MPI processes from being migrated to other NUMA nodes
&gt; &gt;&gt;&gt; while running.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Kind regards,
&gt; &gt;&gt;&gt; Hristo
&gt; &gt;&gt;&gt; --
&gt; &gt;&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing RWTH Aachen
&gt; &gt;&gt;&gt; University, Center for Computing and Communication
&gt; &gt;&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen Seffenter Weg
&gt; 23,
&gt; &gt;&gt;&gt; D 52074 Aachen (Germany)
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; -----Original Message-----
&gt; &gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
&gt; &gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]]
&gt; &gt;&gt;&gt;&gt; On Behalf Of Number Cruncher
&gt; &gt;&gt;&gt;&gt; Sent: Thursday, November 15, 2012 5:37 PM
&gt; &gt;&gt;&gt;&gt; To: Open MPI Users
&gt; &gt;&gt;&gt;&gt; Subject: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to
&gt; &gt;&gt;&gt;&gt; 1.6.1
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; I've noticed a very significant (100%) slow down for MPI_Alltoallv
&gt; &gt;&gt;&gt;&gt; calls
&gt; &gt;&gt;&gt; as of
&gt; &gt;&gt;&gt;&gt; version 1.6.1.
&gt; &gt;&gt;&gt;&gt; * This is most noticeable for high-frequency exchanges over 1Gb
&gt; &gt;&gt;&gt;&gt; ethernet where process-to-process message sizes are fairly small
&gt; &gt;&gt;&gt;&gt; (e.g.
&gt; &gt;&gt;&gt;&gt; 100kbyte)
&gt; &gt;&gt;&gt; and
&gt; &gt;&gt;&gt;&gt; much of the exchange matrix is sparse.
&gt; &gt;&gt;&gt;&gt; * 1.6.1 release notes mention &quot;Switch the MPI_ALLTOALLV default
&gt; &gt;&gt;&gt;&gt; algorithm to a pairwise exchange&quot;, but I'm not clear what this
&gt; &gt;&gt;&gt;&gt; means or how to
&gt; &gt;&gt;&gt; switch
&gt; &gt;&gt;&gt;&gt; back to the old &quot;non-default algorithm&quot;.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; I attach a test program which illustrates the sort of usage in our
&gt; &gt;&gt;&gt;&gt; MPI application. I have run as this as 32 processes on four nodes,
&gt; &gt;&gt;&gt;&gt; over 1Gb ethernet, each node with 2x Opteron 4180 (dual hex-core);
&gt; &gt;&gt;&gt;&gt; rank 0,4,8,..
&gt; &gt;&gt;&gt;&gt; on node 1, rank 1,5,9, ... on node 2, etc.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; It constructs an array of integers and a nProcess x nProcess
&gt; &gt;&gt;&gt;&gt; exchange
&gt; &gt;&gt;&gt; typical
&gt; &gt;&gt;&gt;&gt; of part of our application. This is then exchanged several thousand
&gt; &gt;&gt;&gt;&gt; times.
&gt; &gt;&gt;&gt;&gt; Output from &quot;mpicc -O3&quot; runs shown below.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; My guess is that 1.6.1 is hitting additional latency not present in
&gt; &gt;&gt;&gt;&gt; 1.6.0.
&gt; &gt;&gt;&gt; I also
&gt; &gt;&gt;&gt;&gt; attach a plot showing network throughput on our actual mesh
&gt; &gt;&gt;&gt;&gt; generation application. Nodes cfsc01-04 are running 1.6.0 and
&gt; &gt;&gt;&gt;&gt; finish within 35
&gt; &gt;&gt;&gt; minutes.
&gt; &gt;&gt;&gt;&gt; Nodes cfsc05-08 are running 1.6.2 (started 10 minutes later) and
&gt; &gt;&gt;&gt;&gt; take over
&gt; &gt;&gt;&gt; a
&gt; &gt;&gt;&gt;&gt; hour to run. There seems to be a much greater network demand in the
&gt; &gt;&gt;&gt;&gt; 1.6.1
&gt; &gt;&gt;&gt;&gt; version, despite the user-code and input data being identical.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Thanks for any help you can give,
&gt; &gt;&gt;&gt;&gt; Simon
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;
&gt; &gt;
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21022/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21023.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Previous message:</strong> <a href="21021.php">Jeff Squyres: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>In reply to:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Reply:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
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
