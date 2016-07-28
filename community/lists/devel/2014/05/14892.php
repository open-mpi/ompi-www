<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 10:34:42 2014" -->
<!-- isoreceived="20140528143442" -->
<!-- sent="Wed, 28 May 2014 10:34:37 -0400" -->
<!-- isosent="20140528143437" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAMJJpkWwrCoftBjrmosHBC4sEkDS+fzW-UuTJHfMg6O7GqFcDQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="642395E6-BC3E-4BD7-B0DC-14B9AA5E76E9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 10:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Calling MPI_Comm_free is not enough from MPI perspective to clean up
<br>
all knowledge about remote processes, nor to sever the links between
<br>
the local and remote groups. One MUST call MPI_Comm_disconnect in
<br>
order to achieve this.
<br>
<p>Look at the code in ompi/mpi/c and see the difference between
<br>
MPI_Comm_free and MPI_Comm_disconnect. In addition to the barrier only
<br>
disconnect calls into the DPM framework, giving a chance to further
<br>
cleanup.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, May 28, 2014 at 10:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 28, 2014, at 6:41 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 28, 2014 at 9:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is definetly what happens : only some tasks call MPI_Comm_free()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Really? I don't see how that can happen in loop_spawn - every process is
</span><br>
<span class="quotelev2">&gt;&gt; clearly calling comm_free. Or are you referring to the intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt; test?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; yes, i am referring intercomm_create test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kewl - thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; about loop_spawn, i could not get any error on my single host single socket
</span><br>
<span class="quotelev1">&gt; VM.
</span><br>
<span class="quotelev1">&gt; (i tried --mca btl tcp,sm,self and --mca btl tcp,self)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize will end up calling ompi_dpm_dyn_finalize which causes the
</span><br>
<span class="quotelev1">&gt; error message on the parent of intercomm_create.
</span><br>
<span class="quotelev1">&gt; a necessary condition is ompi_comm_num_dyncomm &gt; 1
</span><br>
<span class="quotelev1">&gt; /* which by the way sounds odd to me, should it be 0 ? */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That does sound odd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which imho cannot happen if all communicators have been freed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you detail your full mpirun command line, the number of servers you are
</span><br>
<span class="quotelev1">&gt; using, the btl involved and the ompi release that can be used to reproduce
</span><br>
<span class="quotelev1">&gt; the issue ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running on only one server, using the current head of the svn repo. My
</span><br>
<span class="quotelev1">&gt; cluster only has Ethernet, and I let it freely choose the BTLs (so I imagine
</span><br>
<span class="quotelev1">&gt; the candidates are sm,self,tcp,vader). The cmd line is really trivial:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ./loop_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I modified loop_spawn to only run 100 iterations as I am not patient enough
</span><br>
<span class="quotelev1">&gt; to wait for 1000, and the number of iters isn't a factor so long as it is
</span><br>
<span class="quotelev1">&gt; greater than 1. When the parent calls finalize, I get one of the following
</span><br>
<span class="quotelev1">&gt; emitted for every iteration that was done:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in other words, the parent is attempting to isend to every child that was
</span><br>
<span class="quotelev1">&gt; spawned during the test - it thinks that every comm_spawn'd process remains
</span><br>
<span class="quotelev1">&gt; connected to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm wondering if the issue is that the parent and child are calling
</span><br>
<span class="quotelev1">&gt; comm_free, but neither side called comm_disconnect. So unless comm_free is
</span><br>
<span class="quotelev1">&gt; calling disconnect under-the-covers, it might explain why the parent thinks
</span><br>
<span class="quotelev1">&gt; all the children are still present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will try to reproduce this myself
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14890.php">http://www.open-mpi.org/community/lists/devel/2014/05/14890.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14891.php">http://www.open-mpi.org/community/lists/devel/2014/05/14891.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
