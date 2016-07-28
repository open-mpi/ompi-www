<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 23:10:05 2014" -->
<!-- isoreceived="20140528031005" -->
<!-- sent="Tue, 27 May 2014 20:10:01 -0700" -->
<!-- isosent="20140528031001" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="E0DE05A4-51CB-4B68-B122-90B569DE66C2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sErgm1B1UbDrSyAdOyXt0-zGhKkRs8Lof0gZMmJVRdEQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-27 23:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2014, at 6:11 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the case of intercomm_create, the children free all the communicators and then MPI_Disconnect() and then MPI_Finalize() and exits.
</span><br>
<span class="quotelev1">&gt; the parent only MPI_Disconnect() without freeing all the communicators. MPI_Finalize() tries to disconnect and communicate with already exited processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my understanding is that there are two ways of seeing things :
</span><br>
<span class="quotelev1">&gt; a) the &quot;R-way&quot; : the problem is the parent should not try to communicate to already exited processes
</span><br>
<span class="quotelev1">&gt; b) the &quot;J-way&quot; : the problem is the children should have waited either in MPI_Comm_free() or MPI_Finalize()
</span><br>
<p>I don't think you can use option (b) - we can't have the children lingering around for the parent to call finalize, if I'm understanding you correctly.
<br>
<p>When I look at loop_spawn, I see this being done by the parent on every iteration:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;loop() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(EXE_TEST, NULL, 1, MPI_INFO_NULL,
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;merged);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p><p>The child does:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);   
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;merged);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p><p>So it looks to me like there is either something missing, or a bug in Comm_free that isn't removing the child from the parent's field of view.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i did not investigate the loop_spawn test yet, and will do today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as far as i am concerned, i have no opinion on which of a) or b) is the correct/most appropriate approach.
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
<span class="quotelev1">&gt; On Wed, May 28, 2014 at 9:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Since you ignored my response, I'll reiterate and clarify it here. The problem in the case of loop_spawn is that the parent process remains &quot;connected&quot; to children after the child has finalized and died. Hence, when the parent attempts to finalize, it tries to &quot;disconnect&quot; itself from processes that no longer exist - and that is what generates the error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the issue in that case appears to be that &quot;finalize&quot; is not marking the child process as &quot;disconnected&quot;, thus leaving the parent thinking that it needs to disconnect when it finally ends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 5:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note that MPI says that COMM_DISCONNECT simply disconnects that individual communicator.  It does *not* guarantee that the processes involved will be fully disconnected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I think that the freeing of communicators is good app behavior, but it is not required by the MPI spec.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If OMPI is requiring this for correct termination, then something is wrong.  MPI_FINALIZE is supposed to be collective across all connected MPI procs -- and if the parent and spawned procs in this test are still connected (because they have not disconnected all communicators between them), the FINALIZE is supposed to be collective across all of them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This means that FINALIZE is allowed to block if it needs to, such that OMPI sending control messages to procs that are still &quot;connected&quot; (in the MPI sense) should never cause a race condition.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As such, this sounds like an OMPI bug.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 27, 2014, at 2:27 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; currently, the dynamic/intercomm_create test from the ibm test suite output the following messages :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dpm_base_disconnect_init: error -12 in isend to process 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the root cause it task 0 tries to send messages to already exited tasks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; one way of seeing things is that this is an application issue :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; task 0 should have MPI_Comm_free'd all its communicator before calling MPI_Comm_disconnect.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This can be achieved via the attached patch
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an other way of seeing things is that this is a bug in OpenMPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In this case, what would be the the right approach ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - automatically free communicators (if needed) when MPI_Comm_disconnect is invoked ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - simply remove communicators (if needed) from ompi_mpi_communicators when MPI_Comm_disconnect is invoked ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  /* this causes a memory leak, but the application can be seen as responsible of it */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - other ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance for your feedback,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;intercomm_create.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14847.php">http://www.open-mpi.org/community/lists/devel/2014/05/14847.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14875.php">http://www.open-mpi.org/community/lists/devel/2014/05/14875.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14876.php">http://www.open-mpi.org/community/lists/devel/2014/05/14876.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14877.php">http://www.open-mpi.org/community/lists/devel/2014/05/14877.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
