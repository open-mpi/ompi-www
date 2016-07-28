<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 10:54:02 2014" -->
<!-- isoreceived="20140528145402" -->
<!-- sent="Wed, 28 May 2014 07:53:58 -0700" -->
<!-- isosent="20140528145358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="31408E62-BF7F-44E0-B2D0-37F01B73E7BD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5v2G-K+kyLJaG_xK-CXTqix6CQgAWp2w=11E8WGzMSUEQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 10:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14887.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2014, at 7:50 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for the info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; can you detail your full mpirun command line, the number of servers you are using, the btl involved and the ompi release that can be used to reproduce the issue ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running on only one server, using the current head of the svn repo. My cluster only has Ethernet, and I let it freely choose the BTLs (so I imagine the candidates are sm,self,tcp,vader). The cmd line is really trivial:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is MPSS installed and loaded ?
</span><br>
<span class="quotelev1">&gt; if yes, scif is also a candidate
</span><br>
<p>Nope - not on this machine
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ./loop_spawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I modified loop_spawn to only run 100 iterations as I am not patient enough to wait for 1000, and the number of iters isn't a factor so long as it is greater than 1. When the parent calls finalize, I get one of the following emitted for every iteration that was done:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so we do the same thing but have different behaviour ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; just to be sure :
</span><br>
<span class="quotelev1">&gt; are we talking about the loop_spawn test from the ibm test suite available at
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_spawn.c">http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_spawn.c</a>
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_child.c">http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_child.c</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; number of iterations is 2000 (and not 1000)
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect is invoked by both parent in loop_spawn.c :
</span><br>
<span class="quotelev1">&gt;                 MPI_Comm_free(&amp;comm_merged);
</span><br>
<span class="quotelev1">&gt;                 MPI_Comm_disconnect(&amp;comm_spawned);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and children in loop_child.c :
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_free(&amp;merged);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_disconnect(&amp;parent);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there any possibility you are running a different test called loop_spawn or an older version of the dynamic/loop_spawn test from the ibm test suite ?
</span><br>
<p>Yeah, I'm running a version that was the parent of that one. Looks like it has diverged, so perhaps that is the issue. Let me refresh it and try again.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14894.php">http://www.open-mpi.org/community/lists/devel/2014/05/14894.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14887.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
