<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 10:45:46 2014" -->
<!-- isoreceived="20140528144546" -->
<!-- sent="Wed, 28 May 2014 07:45:42 -0700" -->
<!-- isosent="20140528144542" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="4A29264F-C3AC-4D75-928A-603482F11EF7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWwrCoftBjrmosHBC4sEkDS+fzW-UuTJHfMg6O7GqFcDQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-28 10:45:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14892.php">George Bosilca: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14892.php">George Bosilca: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2014, at 7:34 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Calling MPI_Comm_free is not enough from MPI perspective to clean up
</span><br>
<span class="quotelev1">&gt; all knowledge about remote processes, nor to sever the links between
</span><br>
<span class="quotelev1">&gt; the local and remote groups. One MUST call MPI_Comm_disconnect in
</span><br>
<span class="quotelev1">&gt; order to achieve this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Look at the code in ompi/mpi/c and see the difference between
</span><br>
<span class="quotelev1">&gt; MPI_Comm_free and MPI_Comm_disconnect. In addition to the barrier only
</span><br>
<span class="quotelev1">&gt; disconnect calls into the DPM framework, giving a chance to further
</span><br>
<span class="quotelev1">&gt; cleanup.
</span><br>
<p>Good point - however, that doesn't fix it. Changing the Comm_free calls to Comm_disconnect results in the same error messages when the parent finalizes:
<br>
<p>Parent:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (iter = 0; iter &lt; 100; ++iter) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(EXE_TEST, NULL, 1, MPI_INFO_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_WORLD, &amp;comm, &amp;err);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;parent: MPI_Comm_spawn #%d return : %d\n&quot;, iter, err);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge(comm, 0, &amp;merged);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(merged, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(merged, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;parent: MPI_Comm_spawn #%d rank %d, size %d\n&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iter, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;merged);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p><p>Child:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Child: launch\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge(parent, 1, &amp;merged);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(merged, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(merged, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Child merged rank = %d, size = %d\n&quot;, rank, size);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;merged);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p><p>Upon parent calling finalize:
<br>
<p>dpm_base_disconnect_init: error -12 in isend to process 0
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 28, 2014 at 10:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 28, 2014, at 6:41 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 28, 2014 at 9:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is definetly what happens : only some tasks call MPI_Comm_free()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Really? I don't see how that can happen in loop_spawn - every process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clearly calling comm_free. Or are you referring to the intercomm_create
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; yes, i am referring intercomm_create test
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; kewl - thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; about loop_spawn, i could not get any error on my single host single socket
</span><br>
<span class="quotelev2">&gt;&gt; VM.
</span><br>
<span class="quotelev2">&gt;&gt; (i tried --mca btl tcp,sm,self and --mca btl tcp,self)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize will end up calling ompi_dpm_dyn_finalize which causes the
</span><br>
<span class="quotelev2">&gt;&gt; error message on the parent of intercomm_create.
</span><br>
<span class="quotelev2">&gt;&gt; a necessary condition is ompi_comm_num_dyncomm &gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; /* which by the way sounds odd to me, should it be 0 ? */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That does sound odd
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which imho cannot happen if all communicators have been freed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; can you detail your full mpirun command line, the number of servers you are
</span><br>
<span class="quotelev2">&gt;&gt; using, the btl involved and the ompi release that can be used to reproduce
</span><br>
<span class="quotelev2">&gt;&gt; the issue ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Running on only one server, using the current head of the svn repo. My
</span><br>
<span class="quotelev2">&gt;&gt; cluster only has Ethernet, and I let it freely choose the BTLs (so I imagine
</span><br>
<span class="quotelev2">&gt;&gt; the candidates are sm,self,tcp,vader). The cmd line is really trivial:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 1 ./loop_spawn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I modified loop_spawn to only run 100 iterations as I am not patient enough
</span><br>
<span class="quotelev2">&gt;&gt; to wait for 1000, and the number of iters isn't a factor so long as it is
</span><br>
<span class="quotelev2">&gt;&gt; greater than 1. When the parent calls finalize, I get one of the following
</span><br>
<span class="quotelev2">&gt;&gt; emitted for every iteration that was done:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; dpm_base_disconnect_init: error -12 in isend to process 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So in other words, the parent is attempting to isend to every child that was
</span><br>
<span class="quotelev2">&gt;&gt; spawned during the test - it thinks that every comm_spawn'd process remains
</span><br>
<span class="quotelev2">&gt;&gt; connected to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm wondering if the issue is that the parent and child are calling
</span><br>
<span class="quotelev2">&gt;&gt; comm_free, but neither side called comm_disconnect. So unless comm_free is
</span><br>
<span class="quotelev2">&gt;&gt; calling disconnect under-the-covers, it might explain why the parent thinks
</span><br>
<span class="quotelev2">&gt;&gt; all the children are still present.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i will try to reproduce this myself
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14890.php">http://www.open-mpi.org/community/lists/devel/2014/05/14890.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14891.php">http://www.open-mpi.org/community/lists/devel/2014/05/14891.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14892.php">http://www.open-mpi.org/community/lists/devel/2014/05/14892.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14892.php">George Bosilca: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14892.php">George Bosilca: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
