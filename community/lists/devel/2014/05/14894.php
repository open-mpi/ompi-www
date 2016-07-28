<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 10:50:23 2014" -->
<!-- isoreceived="20140528145023" -->
<!-- sent="Wed, 28 May 2014 23:50:20 +0900" -->
<!-- isosent="20140528145020" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAAkFZ5v2G-K+kyLJaG_xK-CXTqix6CQgAWp2w=11E8WGzMSUEQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 10:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>thanks for the info
<br>
<p>can you detail your full mpirun command line, the number of servers you are
<br>
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
<span class="quotelev1">&gt; cluster only has Ethernet, and I let it freely choose the BTLs (so I
</span><br>
<span class="quotelev1">&gt; imagine the candidates are sm,self,tcp,vader). The cmd line is really
</span><br>
<span class="quotelev1">&gt; trivial:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
is MPSS installed and loaded ?
<br>
if yes, scif is also a candidate
<br>
<p><p><span class="quotelev1">&gt; mpirun -n 1 ./loop_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I modified loop_spawn to only run 100 iterations as I am not patient
</span><br>
<span class="quotelev1">&gt; enough to wait for 1000, and the number of iters isn't a factor so long as
</span><br>
<span class="quotelev1">&gt; it is greater than 1. When the parent calls finalize, I get one of the
</span><br>
<span class="quotelev1">&gt; following emitted for every iteration that was done:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
so we do the same thing but have different behaviour ...
<br>
<p>just to be sure :
<br>
are we talking about the loop_spawn test from the ibm test suite available
<br>
at
<br>
<a href="http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_spawn.c">http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_spawn.c</a>
<br>
and
<br>
<a href="http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_child.c">http://svn.open-mpi.org/svn/ompi-tests/trunk/ibm/dynamic/loop_child.c</a>
<br>
<p>number of iterations is 2000 (and not 1000)
<br>
MPI_Comm_disconnect is invoked by both parent in loop_spawn.c :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;comm_merged);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;comm_spawned);
<br>
<p><p>and children in loop_child.c :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;merged);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;parent);
<br>
<p><p>is there any possibility you are running a different test called loop_spawn
<br>
or an older version of the dynamic/loop_spawn test from the ibm test suite ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
