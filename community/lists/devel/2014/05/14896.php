<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 10:55:32 2014" -->
<!-- isoreceived="20140528145532" -->
<!-- sent="Wed, 28 May 2014 23:55:31 +0900" -->
<!-- isosent="20140528145531" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAAkFZ5scD2bGzgtBgcvLx0E1oXm_bqLD4J1oqkOtiKsOMVqQuQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A29264F-C3AC-4D75-928A-603482F11EF7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-05-28 10:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>what if ?
<br>
<p>the parent :
<br>
MPI_Comm_free(&amp;merged);
<br>
MPI_Comm_disconnect(&amp;comm);
<br>
<p>and the child
<br>
MPI_Comm_free(&amp;merged);
<br>
MPI_Comm_disconnect(&amp;parent);
<br>
<p>Gilles
<br>
<p><p><span class="quotelev1">&gt; Good point - however, that doesn't fix it. Changing the Comm_free calls to
</span><br>
<span class="quotelev1">&gt; Comm_disconnect results in the same error messages when the parent
</span><br>
<span class="quotelev1">&gt; finalizes:
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14895.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14893.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
