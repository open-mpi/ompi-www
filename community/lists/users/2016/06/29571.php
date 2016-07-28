<?
$subject_val = "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 11:01:42 2016" -->
<!-- isoreceived="20160630150142" -->
<!-- sent="Fri, 1 Jul 2016 00:01:36 +0900" -->
<!-- isosent="20160630150136" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?" -->
<!-- id="CAAkFZ5szAe6W2S3EQQRozTVw6fgMnYYhSoc9jKh+FN=A21Hs8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKVs+pTH1jU=_PTpSUD-Tf-SFxAz3OXSo4WKG-yFG9i8dw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 11:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you might want to give coll/ml a try
<br>
mpirun --mca coll_ml_priority 100 ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, Gilles. The reason for digging into intra-node optimizations is
</span><br>
<span class="quotelev1">&gt; that we've implemented several machine learning applications in OpenMPI
</span><br>
<span class="quotelev1">&gt; (Java binding), but found collective communication to be a bottleneck,
</span><br>
<span class="quotelev1">&gt; especially when the number of procs per node is high. I've implemented a
</span><br>
<span class="quotelev1">&gt; shared memory layer within Java (
</span><br>
<span class="quotelev1">&gt; <a href="https://www.researchgate.net/publication/291695433_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters">https://www.researchgate.net/publication/291695433_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters</a>),
</span><br>
<span class="quotelev1">&gt; which solved this, but it would be nice to have this built-in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll look at the send/recv implementations as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 30, 2016 at 10:02 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; currently, coll/tuned is not topology aware.
</span><br>
<span class="quotelev2">&gt;&gt; this is something interesting, and everyone is invited to contribute.
</span><br>
<span class="quotelev2">&gt;&gt; coll/ml is topology aware, but it is kind of unmaintained now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; send/recv involves two abstraction layer
</span><br>
<span class="quotelev2">&gt;&gt; pml, and then the interconnect transport.
</span><br>
<span class="quotelev2">&gt;&gt; typically, pml/ob1 is used, and it uses a btl (btl/tcp, btl/vader,
</span><br>
<span class="quotelev2">&gt;&gt; btl/openib, ...)
</span><br>
<span class="quotelev2">&gt;&gt; an important exception is infinipath, which uses pml/cm and then mtl/psm
</span><br>
<span class="quotelev2">&gt;&gt; (and libfabric, but I do not know the details...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','esaliya_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, I am beginning to see how it works now. One question I still have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is, in the case of a mult-node communicator it seems coll/tuned (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something not coll/sm) well be the one used, so do they do any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimizations to reduce communication within a node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also where can I find the p2p send recv modules?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the Bcast in coll/sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll modules have priority
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (see ompi_info --all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for a given function (e,g. bcast) the module which implements it and has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the highest priority is used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note a module can disqualify itself on a given communicator (e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll/sm on I ter node communucator).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by default, coll/tuned is very likely used. this module is a bit special
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since it selects a given algorithm based on communicator and message size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you give a high priority to coll/sm, then it will be used for single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node intra communicators, assuming coll/sm implements all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective primitives.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you, Gilles.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the bcast I should look for? In general, how do I know which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module was used to for which communication - can I print this info?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 30, 2016 3:19 AM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) is correct. coll/sm is disqualified if the communicator is an inter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator or the communicator spans on several nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you can have a look at the source code, and you will not that bcast
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does not use send/recv. instead, it uses a shared memory, so hopefully, it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is faster than other modules
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 6/30/2016 3:04 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at the *ompi/mca/coll/sm/coll_sm_module.c* it seems this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; module will be used only if the calling communicator solely groups
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes within a node. I've got two questions here.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. So is my understanding correct that for something like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD where world is multiple processes within a node across many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes, this module will not be used?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. If 1, is correct then are there any shared memory optimizations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that happen when a collective like bcast  or allreduce is called, so that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicating within a node is done efficiently through memory?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29564.php">http://www.open-mpi.org/community/lists/users/2016/06/29564.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29565.php">http://www.open-mpi.org/community/lists/users/2016/06/29565.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29567.php">http://www.open-mpi.org/community/lists/users/2016/06/29567.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29569.php">http://www.open-mpi.org/community/lists/users/2016/06/29569.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
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
