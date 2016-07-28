<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 09:41:10 2014" -->
<!-- isoreceived="20140528134110" -->
<!-- sent="Wed, 28 May 2014 22:41:07 +0900" -->
<!-- isosent="20140528134107" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAAkFZ5vww2aJ0Vvkjw4rFRgf8iPo=32NP6EsUqjHXgCYpd0YCg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6F12C561-8773-48D1-94CC-A70227E4D298_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-05-28 09:41:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p><p>On Wed, May 28, 2014 at 9:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is definetly what happens : only some tasks call MPI_Comm_free()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really? I don't see how that can happen in loop_spawn - every process is
</span><br>
<span class="quotelev1">&gt; clearly calling comm_free. Or are you referring to the intercomm_create
</span><br>
<span class="quotelev1">&gt; test?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, i am referring intercomm_create test
</span><br>
<p>about loop_spawn, i could not get any error on my single host single socket
<br>
VM.
<br>
(i tried --mca btl tcp,sm,self and --mca btl tcp,self)
<br>
<p>MPI_Finalize will end up calling ompi_dpm_dyn_finalize which causes the
<br>
error message on the parent of intercomm_create.
<br>
a necessary condition is ompi_comm_num_dyncomm &gt; 1
<br>
/* which by the way sounds odd to me, should it be 0 ? */
<br>
which imho cannot happen if all communicators have been freed
<br>
<p>can you detail your full mpirun command line, the number of servers you are
<br>
using, the btl involved and the ompi release that can be used to reproduce
<br>
the issue ?
<br>
<p>i will try to reproduce this myself
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14891.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
