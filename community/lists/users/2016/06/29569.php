<?
$subject_val = "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 10:02:34 2016" -->
<!-- isoreceived="20160630140234" -->
<!-- sent="Thu, 30 Jun 2016 23:02:29 +0900" -->
<!-- isosent="20160630140229" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?" -->
<!-- id="CAAkFZ5tw=gouUq00=k8rfYmVguEMN4n3=N4SniPxDQvO-=mDOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKWrQsTigMgPPxSmXxyNBDKSP-SfnZWtBVYym1h3+8B6XQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-30 10:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
currently, coll/tuned is not topology aware.
<br>
this is something interesting, and everyone is invited to contribute.
<br>
coll/ml is topology aware, but it is kind of unmaintained now.
<br>
<p>send/recv involves two abstraction layer
<br>
pml, and then the interconnect transport.
<br>
typically, pml/ob1 is used, and it uses a btl (btl/tcp, btl/vader,
<br>
btl/openib, ...)
<br>
an important exception is infinipath, which uses pml/cm and then mtl/psm
<br>
(and libfabric, but I do not know the details...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OK, I am beginning to see how it works now. One question I still have is,
</span><br>
<span class="quotelev1">&gt; in the case of a mult-node communicator it seems coll/tuned (or something
</span><br>
<span class="quotelev1">&gt; not coll/sm) well be the one used, so do they do any optimizations to
</span><br>
<span class="quotelev1">&gt; reduce communication within a node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also where can I find the p2p send recv modules?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; the Bcast in coll/sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll modules have priority
</span><br>
<span class="quotelev1">&gt; (see ompi_info --all)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for a given function (e,g. bcast) the module which implements it and has
</span><br>
<span class="quotelev1">&gt; the highest priority is used.
</span><br>
<span class="quotelev1">&gt; note a module can disqualify itself on a given communicator (e.g. coll/sm
</span><br>
<span class="quotelev1">&gt; on I ter node communucator).
</span><br>
<span class="quotelev1">&gt; by default, coll/tuned is very likely used. this module is a bit special
</span><br>
<span class="quotelev1">&gt; since it selects a given algorithm based on communicator and message size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you give a high priority to coll/sm, then it will be used for single
</span><br>
<span class="quotelev1">&gt; node intra communicators, assuming coll/sm implements all
</span><br>
<span class="quotelev1">&gt; collective primitives.
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
<span class="quotelev1">&gt; On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','esaliya_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Gilles.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the bcast I should look for? In general, how do I know which
</span><br>
<span class="quotelev2">&gt;&gt; module was used to for which communication - can I print this info?
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 30, 2016 3:19 AM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) is correct. coll/sm is disqualified if the communicator is an inter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator or the communicator spans on several nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can have a look at the source code, and you will not that bcast does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not use send/recv. instead, it uses a shared memory, so hopefully, it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; faster than other modules
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/30/2016 3:04 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at the *ompi/mca/coll/sm/coll_sm_module.c* it seems this module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be used only if the calling communicator solely groups processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; within a node. I've got two questions here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. So is my understanding correct that for something like MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where world is multiple processes within a node across many nodes, this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module will not be used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. If 1, is correct then are there any shared memory optimizations that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happen when a collective like bcast  or allreduce is called, so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicating within a node is done efficiently through memory?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29564.php">http://www.open-mpi.org/community/lists/users/2016/06/29564.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29565.php">http://www.open-mpi.org/community/lists/users/2016/06/29565.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29567.php">http://www.open-mpi.org/community/lists/users/2016/06/29567.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29570.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
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
