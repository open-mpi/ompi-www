<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 11:44:56 2014" -->
<!-- isoreceived="20140528154456" -->
<!-- sent="Wed, 28 May 2014 08:44:52 -0700" -->
<!-- isosent="20140528154452" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="EE5B88DE-030F-4264-ADD3-840A4B255B34_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vkv-4tqx-m8ngS9a72wgBDOsxxoacVRtDytH0Wcgk5CA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-28 11:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and I have debated this question. We could reduce the number of iterations, or we could up the time limit. Better solution is probably to speed it back up again as it *used* to complete in the current time limit. So we thought we'd leave it alone for now as a reminder that we need to address this at some point.
<br>
<p>I've done some qualifying to find out the time bottlenecks for Nathan, Jeff, and I - but none of us have had the time to chase it down.
<br>
<p><p>On May 28, 2014, at 8:37 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; good to know !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; how should we handle this within mtt ?
</span><br>
<span class="quotelev1">&gt; decrease nseconds to 570 ?
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
<span class="quotelev1">&gt; On Thu, May 29, 2014 at 12:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ah, that satisfied it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the chase - I'll update my test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 28, 2014, at 7:55 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; what if ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the parent :
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_free(&amp;merged);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_disconnect(&amp;comm);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and the child
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_free(&amp;merged);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_disconnect(&amp;parent);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Good point - however, that doesn't fix it. Changing the Comm_free calls to Comm_disconnect results in the same error messages when the parent finalizes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Parent:
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init( &amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     for (iter = 0; iter &lt; 100; ++iter) {
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_spawn(EXE_TEST, NULL, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt;&gt;                        0, MPI_COMM_WORLD, &amp;comm, &amp;err);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;parent: MPI_Comm_spawn #%d return : %d\n&quot;, iter, err);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Intercomm_merge(comm, 0, &amp;merged);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_rank(merged, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_size(merged, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;parent: MPI_Comm_spawn #%d rank %d, size %d\n&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt;                iter, rank, size);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_disconnect(&amp;merged);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Child:
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);   
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Child: launch\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_get_parent(&amp;parent);   
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Intercomm_merge(parent, 1, &amp;merged);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(merged, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(merged, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Child merged rank = %d, size = %d\n&quot;, rank, size);
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_disconnect(&amp;merged);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14896.php">http://www.open-mpi.org/community/lists/devel/2014/05/14896.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14897.php">http://www.open-mpi.org/community/lists/devel/2014/05/14897.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14899.php">http://www.open-mpi.org/community/lists/devel/2014/05/14899.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14894.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
