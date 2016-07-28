<?
$subject_val = "Re: [OMPI devel] inter vs. intra communicator problem on master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 11:43:47 2015" -->
<!-- isoreceived="20150916154347" -->
<!-- sent="Wed, 16 Sep 2015 10:43:45 -0500" -->
<!-- isosent="20150916154345" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inter vs. intra communicator problem on master" -->
<!-- id="55F98E31.30406_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150916154246.GD98529_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] inter vs. intra communicator problem on master<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 11:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>In reply to:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18049.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes, I did fresh pull this morning, for me it deadlocks reliably for 2 
<br>
and more processes.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 9/16/2015 10:42 AM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reproducer is working for me with master on OX 10.10. Some changes
</span><br>
<span class="quotelev1">&gt; to ompi_comm_set went in yesterday. Are you on the latest hash?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 16, 2015 at 08:49:59AM -0500, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; something is borked right now on master in the management of inter vs. intra
</span><br>
<span class="quotelev2">&gt;&gt; communicators. It looks like intra communicators are wrongly selecting the
</span><br>
<span class="quotelev2">&gt;&gt; inter coll module thinking that it is an inter communicator, and we have
</span><br>
<span class="quotelev2">&gt;&gt; hangs because of that. I attach a small replicator, where a bcast of a
</span><br>
<span class="quotelev2">&gt;&gt; duplicate of MPI_COMM_WORLD hangs, because the inter collective module is
</span><br>
<span class="quotelev2">&gt;&gt; being selected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm comm1;
</span><br>
<span class="quotelev2">&gt;&gt;    int root=0;
</span><br>
<span class="quotelev2">&gt;&gt;    int rank2, size2, global_buf=1;
</span><br>
<span class="quotelev2">&gt;&gt;    int rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init ( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank ( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size ( MPI_COMM_WORLD, &amp;size );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Setting up a new communicator */
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_dup ( MPI_COMM_WORLD, &amp;comm1 );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size ( comm1, &amp;size2 );
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank ( comm1, &amp;rank2 );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Bcast ( &amp;global_buf, 1, MPI_INT, root, MPI_COMM_WORLD );
</span><br>
<span class="quotelev2">&gt;&gt;    if ( rank == root ) {
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;Bcast on MPI_COMM_WORLD finished\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Bcast ( &amp;global_buf, 1, MPI_INT, root, comm1 );
</span><br>
<span class="quotelev2">&gt;&gt;    if ( rank == root ) {
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;Bcast on duplicate of MPI_COMM_WORLD finished\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_free ( &amp;comm1 );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt;&gt;    return ( 0 );
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18040.php">http://www.open-mpi.org/community/lists/devel/2015/09/18040.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18042.php">http://www.open-mpi.org/community/lists/devel/2015/09/18042.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>In reply to:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18049.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
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
