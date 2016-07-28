<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 11:03:45 2014" -->
<!-- isoreceived="20140528150345" -->
<!-- sent="Wed, 28 May 2014 08:03:41 -0700" -->
<!-- isosent="20140528150341" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="EF4AFC02-4099-478A-8EB1-0D7574505A04_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5scD2bGzgtBgcvLx0E1oXm_bqLD4J1oqkOtiKsOMVqQuQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-28 11:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, that satisfied it!
<br>
<p>Sorry for the chase - I'll update my test.
<br>
<p><p>On May 28, 2014, at 7:55 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what if ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the parent :
</span><br>
<span class="quotelev1">&gt; MPI_Comm_free(&amp;merged);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect(&amp;comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the child
</span><br>
<span class="quotelev1">&gt; MPI_Comm_free(&amp;merged);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect(&amp;parent);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Good point - however, that doesn't fix it. Changing the Comm_free calls to Comm_disconnect results in the same error messages when the parent finalizes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent:
</span><br>
<span class="quotelev1">&gt;     MPI_Init( &amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for (iter = 0; iter &lt; 100; ++iter) {
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_spawn(EXE_TEST, NULL, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt;                        0, MPI_COMM_WORLD, &amp;comm, &amp;err);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;parent: MPI_Comm_spawn #%d return : %d\n&quot;, iter, err);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Intercomm_merge(comm, 0, &amp;merged);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(merged, &amp;rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size(merged, &amp;size);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;parent: MPI_Comm_spawn #%d rank %d, size %d\n&quot;, 
</span><br>
<span class="quotelev1">&gt;                iter, rank, size);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_disconnect(&amp;merged);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Child:
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);   
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Child: launch\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_get_parent(&amp;parent);   
</span><br>
<span class="quotelev1">&gt;     MPI_Intercomm_merge(parent, 1, &amp;merged);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(merged, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(merged, &amp;size);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Child merged rank = %d, size = %d\n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_disconnect(&amp;merged);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14896.php">http://www.open-mpi.org/community/lists/devel/2014/05/14896.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14896.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
