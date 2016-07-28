<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 23 12:49:26 2012" -->
<!-- isoreceived="20121223174926" -->
<!-- sent="Sun, 23 Dec 2012 18:49:18 +0100" -->
<!-- isosent="20121223174918" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1" -->
<!-- id="2A3F2FCF-F84A-4FDF-B155-270921BCB83F_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50D59DCE.1070307_at_ntlworld.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-23 12:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21045.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="21043.php">Yixuan: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="21042.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21219.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no definitive argument. In general I have to admit that we are envisioning the worst case scenario, and try to come out with a solution that solve it when possible with minimal overhead for other cases). Keeping every process in sync sounded like a good approach for minimizing the unexpected messages burden. However, this will [again] depend on the communication pattern depicted by the alltoallv operation.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Dec 22, 2012, at 12:47 , Number Cruncher &lt;number.cruncher_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the informative response. What I'm still not clear about is whether there isn't a very simple optimization for the zero-size case. If two processes know they aren't exchanging *any* data (which is known from the argument list for all_to_allv), isn't there any network latency or overhead in the sendrecv exchanges for this zero-exchange? The previous algorithm just skipped this case; couldn't the pairwise one also?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 21/12/2012 18:53, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I can argue the opposite: in the most general case, each process will exchange data with all other processes, so a blocking approach as implemented in the current version make sense. As you noticed, this lead to poor results when the exchange pattern is sparse. We took what we believed is the most common usage of the alltoallv collective, and provided a default algorithm we consider the best for it (pairwise due to a tightly coupled structure of communications).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, as one of the main developers of the collective module, I'm not insensible to your argument. I would have loved to be able to alter the behavior of the alltoallv to adapt more carefully to the collective pattern itself. Unfortunately, it is very difficult as the alltoallv is one of the few collective, where the knowledge about the communication pattern is not evenly distributed among the peers (every rank knows only about the communications where it is involved). Thus, without requiring extra communications, the only valid parameter which can affect the selection of one of the underlying implementations is the number of participants in the collective (not even the number of participants exchanging real data, but the number of participants in the communicator). Not enough to make a smartest decision.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As suggested several times already in this thread, there are quite a few MCA parameters that allow specialized behaviors for applications with communication patterns we did not considered as mainstream. You should definitively take advantage of these to further optimize your applications.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 21, 2012, at 13:25 , Number Cruncher &lt;number.cruncher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I completely understand there's no &quot;one size fits all&quot;, and I appreciate that there are workarounds to the change in behaviour. I'm only trying to make what little contribution I can by questioning the architecture of the pairwise algorithm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know that for every user you please, there will be some that aren't happy when a default changes (Windows 8 anyone?), but I'm trying to provide some real-world data. If 90% of apps are 10% faster and 10% are 1000% slower, should the default change?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all_to_all is a really nice primitive from a developer point of view. Every process' code is symmetric and identical. Maybe I should have to worry that most of the matrix exchange is sparse; I probably could calculate an optimal exchange pattern. But I think this is the implementation's job, and I will continue to argue that *waiting* for each pairwise exchange is (a) unnecessary, (b) doesn't improve performance for *any* application and (c) at worst causes huge slowdown over the last algorithm for sparse cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In summary: I'm arguing that there's a problem with the pairwise implementation as it stands. It doesn't have any optimization for sparse all_to_all and imposes unnecessary synchronisation barriers in all cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 20/12/2012 14:42, Iliev, Hristo wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Simon,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The goal of any MPI implementation is to be as fast as possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately there is no &quot;one size fits all&quot; algorithm that works on all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; networks and given all possible kind of peculiarities that your specific
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication scheme may have. That's why there are different algorithms and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are given the option to dynamically select them at run time without the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to recompile the code. I don't think the change of the default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; algorithm (note that the pairwise algorithm has been there for many years -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is not new, simply the new default one) was introduced in order to piss
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users off.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you want OMPI to default to the previous algorithm:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) Add this to the system-wide OMPI configuration file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $sysconf/openmpi-mca-params.conf (wher $sysconf would most likely be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $PREFIX/etc, where $PREFIX is the OMPI installation directory):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll_tuned_alltoallv_algorithm = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) The settings from (1) can be overridden on per user basis by the similar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; settings from $HOME/.openmpi/mca-params.conf.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) The settings from (1) and (2) can be overridden on per job basis by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exporting MCA parameters as environment variables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4) Finally, the settings from (1), (2), and (3) can be overridden on per MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program launch by supplying appropriate MCA parameters to orterun (a.k.a.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun and mpiexec).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is also a largely undocumented feature of the &quot;tuned&quot; collective
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component where a dynamic rules file can be supplied. In the file a series
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of cases tell the library which implementation to use based on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicator and message sizes. No idea if it works with ALLTOALLV.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hristo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sorry for top posting - damn you, Outlook!)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Behalf Of Number Cruncher
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, December 19, 2012 5:31 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.6.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 19/12/12 11:08, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Did you *really* wanna to dig into code just in order to switch a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; default communication algorithm?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No, I didn't want to, but with a huge change in performance, I'm forced to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something! And having looked at the different algorithms, I think there's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem with the new default whenever message sizes are small enough
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that connection latency will dominate. We're not all running Infiniband,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; having to wait for each pairwise exchange to complete before initiating
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; another seems wrong if the latency in waiting for completion dominates the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; transmission time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; E.g. If I have 10 small pairwise exchanges to perform,isn't it better to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; put all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10 outbound messages on the wire, and wait for 10 matching inbound
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages, in any order? The new algorithm must wait for first exchange to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complete, then second exchange, then third. Unlike before, does it not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to wait to acknowledge the matching *zero-sized* request? I don't see why
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this temporal ordering matters.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Simon
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Note there are several ways to set the parameters; --mca on command
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line is just one of them (suitable for quick online tests).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We 'tune' our Open MPI by setting environment variables....
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 12/19/12 11:44, Number Cruncher wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Having run some more benchmarks, the new default is *really* bad for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; our application (2-10x slower), so I've been looking at the source to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; try and figure out why.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It seems that the biggest difference will occur when the all_to_all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is actually sparse (e.g. our application); if most N-M process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; exchanges are zero in size the 1.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_alltoallv_intra_basic_linear algorithm will actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; only post irecv/isend for non-zero exchanges; any zero-size exchanges
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are skipped. It then waits once for all requests to complete. In
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; contrast, the new ompi_coll_tuned_alltoallv_intra_pairwise will post
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the zero-size exchanges for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *every* N-M pair, and wait for each pairwise exchange. This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; O(comm_size)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; waits, may of which are zero. I'm not clear what optimizations there
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are for zero-size isend/irecv, but surely there's a great deal more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; latency if each pairwise exchange has to be confirmed complete before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; executing the next?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Relatedly, how would I direct OpenMPI to use the older algorithm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; programmatically? I don't want the user to have to use &quot;--mca&quot; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; their &quot;mpiexec&quot;. Is there a C API?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Simon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 16/11/12 10:15, Iliev, Hristo wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi, Simon,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The pairwise algorithm passes messages in a synchronised ring-like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fashion with increasing stride, so it works best when independent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communication paths could be established between several ports of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the network switch/router. Some 1 Gbps Ethernet equipment is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; capable of doing so, some is - it depends (usually on the price).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This said, not all algorithms perform the same given a specific type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of network interconnect. For example, on our fat-tree InfiniBand
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; network the pairwise algorithm performs better.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can switch back to the basic linear algorithm by providing the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; following MCA parameters:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_alltoallv_algorithm 1 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Algorithm 1 is the basic linear, which used to be the default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Algorithm 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is the pairwise one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can also set these values as exported environment variables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can also put this in $HOME/.openmpi/mcaparams.conf or (to make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it have global effect) in $OPAL_PREFIX/etc/openmpi-mca-params.conf:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_alltoallv_algorithm=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A gratuitous hint: dual-Opteron systems are NUMAs so it makes sense
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to activate process binding with --bind-to-core if you haven't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; already did so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It prevents MPI processes from being migrated to other NUMA nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; while running.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hristo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing RWTH Aachen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; University, Center for Computing and Communication
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen Seffenter Weg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 23,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D 52074 Aachen (Germany)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Behalf Of Number Cruncher
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Thursday, November 15, 2012 5:37 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've noticed a very significant (100%) slow down for MPI_Alltoallv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; calls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; version 1.6.1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * This is most noticeable for high-frequency exchanges over 1Gb
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ethernet where process-to-process message sizes are fairly small
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (e.g.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 100kbyte)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; much of the exchange matrix is sparse.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * 1.6.1 release notes mention &quot;Switch the MPI_ALLTOALLV default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; algorithm to a pairwise exchange&quot;, but I'm not clear what this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; means or how to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; switch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; back to the old &quot;non-default algorithm&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I attach a test program which illustrates the sort of usage in our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI application. I have run as this as 32 processes on four nodes,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; over 1Gb ethernet, each node with 2x Opteron 4180 (dual hex-core);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0,4,8,..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on node 1, rank 1,5,9, ... on node 2, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It constructs an array of integers and a nProcess x nProcess
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exchange
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; typical
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of part of our application. This is then exchanged several thousand
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; times.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Output from &quot;mpicc -O3&quot; runs shown below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My guess is that 1.6.1 is hitting additional latency not present in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I also
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attach a plot showing network throughput on our actual mesh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; generation application. Nodes cfsc01-04 are running 1.6.0 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; finish within 35
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; minutes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Nodes cfsc05-08 are running 1.6.2 (started 10 minutes later) and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; take over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hour to run. There seems to be a much greater network demand in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; version, despite the user-code and input data being identical.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for any help you can give,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Simon
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21045.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="21043.php">Yixuan: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="21042.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21219.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
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
