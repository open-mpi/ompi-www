<?
$subject_val = "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 08:00:28 2016" -->
<!-- isoreceived="20160630120028" -->
<!-- sent="Thu, 30 Jun 2016 21:00:19 +0900" -->
<!-- isosent="20160630120019" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?" -->
<!-- id="CAAkFZ5ufq4EniVcjdeBUJYjqSFb6OSmNrnOEnqsU5DFiy3hdfQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKUmV6YVPk8b1L9afZDzree=bpXOBpFCN2p7DZe-LE87eg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-30 08:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29566.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29566.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
the Bcast in coll/sm
<br>
<p>coll modules have priority
<br>
(see ompi_info --all)
<br>
<p>for a given function (e,g. bcast) the module which implements it and has
<br>
the highest priority is used.
<br>
note a module can disqualify itself on a given communicator (e.g. coll/sm
<br>
on I ter node communucator).
<br>
by default, coll/tuned is very likely used. this module is a bit special
<br>
since it selects a given algorithm based on communicator and message size.
<br>
<p>if you give a high priority to coll/sm, then it will be used for single
<br>
node intra communicators, assuming coll/sm implements all
<br>
collective primitives.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, June 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, Gilles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the bcast I should look for? In general, how do I know which
</span><br>
<span class="quotelev1">&gt; module was used to for which communication - can I print this info?
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2016 3:19 AM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) is correct. coll/sm is disqualified if the communicator is an inter
</span><br>
<span class="quotelev2">&gt;&gt; communicator or the communicator spans on several nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can have a look at the source code, and you will not that bcast does
</span><br>
<span class="quotelev2">&gt;&gt; not use send/recv. instead, it uses a shared memory, so hopefully, it is
</span><br>
<span class="quotelev2">&gt;&gt; faster than other modules
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; On 6/30/2016 3:04 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the *ompi/mca/coll/sm/coll_sm_module.c* it seems this module
</span><br>
<span class="quotelev2">&gt;&gt; will be used only if the calling communicator solely groups processes
</span><br>
<span class="quotelev2">&gt;&gt; within a node. I've got two questions here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. So is my understanding correct that for something like MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; where world is multiple processes within a node across many nodes, this
</span><br>
<span class="quotelev2">&gt;&gt; module will not be used?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. If 1, is correct then are there any shared memory optimizations that
</span><br>
<span class="quotelev2">&gt;&gt; happen when a collective like bcast  or allreduce is called, so that
</span><br>
<span class="quotelev2">&gt;&gt; communicating within a node is done efficiently through memory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29564.php">http://www.open-mpi.org/community/lists/users/2016/06/29564.php</a>
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
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29565.php">http://www.open-mpi.org/community/lists/users/2016/06/29565.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29566.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>In reply to:</strong> <a href="29566.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29568.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
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
