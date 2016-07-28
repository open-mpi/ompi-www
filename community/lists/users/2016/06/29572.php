<?
$subject_val = "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 11:47:23 2016" -->
<!-- isoreceived="20160630154723" -->
<!-- sent="Thu, 30 Jun 2016 11:47:20 -0400" -->
<!-- isosent="20160630154720" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?" -->
<!-- id="CA+ssbKX2tzz8JVUt6C9eaKN1BY7UiABiXuCakYjXapMFK4Bdkg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5szAe6W2S3EQQRozTVw6fgMnYYhSoc9jKh+FN=A21Hs8w_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 11:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29573.php">Orion Poplawski: "[OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29571.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29571.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29576.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The ompi/mca/cool/sm will not be used on	multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29576.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The ompi/mca/cool/sm will not be used on	multi-nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, that's good. I'll try that.
<br>
<p>So, is *ml* something not being developed now? Any documentation on this
<br>
component?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p>On Thu, Jun 30, 2016 at 11:01 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; you might want to give coll/ml a try
</span><br>
<span class="quotelev1">&gt; mpirun --mca coll_ml_priority 100 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Gilles. The reason for digging into intra-node optimizations
</span><br>
<span class="quotelev2">&gt;&gt; is that we've implemented several machine learning applications in OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; (Java binding), but found collective communication to be a bottleneck,
</span><br>
<span class="quotelev2">&gt;&gt; especially when the number of procs per node is high. I've implemented a
</span><br>
<span class="quotelev2">&gt;&gt; shared memory layer within Java (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.researchgate.net/publication/291695433_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters">https://www.researchgate.net/publication/291695433_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters</a>),
</span><br>
<span class="quotelev2">&gt;&gt; which solved this, but it would be nice to have this built-in.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll look at the send/recv implementations as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jun 30, 2016 at 10:02 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently, coll/tuned is not topology aware.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is something interesting, and everyone is invited to contribute.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll/ml is topology aware, but it is kind of unmaintained now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send/recv involves two abstraction layer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml, and then the interconnect transport.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typically, pml/ob1 is used, and it uses a btl (btl/tcp, btl/vader,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl/openib, ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an important exception is infinipath, which uses pml/cm and then mtl/psm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and libfabric, but I do not know the details...)
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
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, I am beginning to see how it works now. One question I still have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is, in the case of a mult-node communicator it seems coll/tuned (or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something not coll/sm) well be the one used, so do they do any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; optimizations to reduce communication within a node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also where can I find the p2p send recv modules?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the Bcast in coll/sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll modules have priority
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (see ompi_info --all)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for a given function (e,g. bcast) the module which implements it and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has the highest priority is used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; note a module can disqualify itself on a given communicator (e.g.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll/sm on I ter node communucator).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by default, coll/tuned is very likely used. this module is a bit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; special since it selects a given algorithm based on communicator and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message size.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if you give a high priority to coll/sm, then it will be used for single
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node intra communicators, assuming coll/sm implements all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collective primitives.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you, Gilles.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What is the bcast I should look for? In general, how do I know which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; module was used to for which communication - can I print this info?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 30, 2016 3:19 AM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1) is correct. coll/sm is disqualified if the communicator is an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; inter communicator or the communicator spans on several nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you can have a look at the source code, and you will not that bcast
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; does not use send/recv. instead, it uses a shared memory, so hopefully, it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is faster than other modules
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 6/30/2016 3:04 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looking at the *ompi/mca/coll/sm/coll_sm_module.c* it seems this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module will be used only if the calling communicator solely groups
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes within a node. I've got two questions here.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. So is my understanding correct that for something like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD where world is multiple processes within a node across many
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes, this module will not be used?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. If 1, is correct then are there any shared memory optimizations
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that happen when a collective like bcast  or allreduce is called, so that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communicating within a node is done efficiently through memory?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29564.php">http://www.open-mpi.org/community/lists/users/2016/06/29564.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29565.php">http://www.open-mpi.org/community/lists/users/2016/06/29565.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29567.php">http://www.open-mpi.org/community/lists/users/2016/06/29567.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29569.php">http://www.open-mpi.org/community/lists/users/2016/06/29569.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29571.php">http://www.open-mpi.org/community/lists/users/2016/06/29571.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29573.php">Orion Poplawski: "[OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29571.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29571.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29576.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The ompi/mca/cool/sm will not be used on	multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29576.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The ompi/mca/cool/sm will not be used on	multi-nodes?"</a>
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
