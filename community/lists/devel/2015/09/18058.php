<?
$subject_val = "Re: [OMPI devel] inter vs. intra communicator problem on master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 22:27:04 2015" -->
<!-- isoreceived="20150917022704" -->
<!-- sent="Wed, 16 Sep 2015 20:27:02 -0600" -->
<!-- isosent="20150917022702" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inter vs. intra communicator problem on master" -->
<!-- id="CAF1Cqj5fEHfsSceDDLbQ8cHxCUynNiUa_KKcWMaU=eS0gn07jw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150916163624.GG98529_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 22:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>In reply to:</strong> <a href="18049.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar
<br>
<p>Do you have a simple test we could run with jenkins ghprb that would catch
<br>
this going forward?
<br>
<p>I could add it to some of the checks we run on your UH slave node.
<br>
<p>Howard
<br>
<p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Sep 16, 2015 12:36 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the problem. Before my changes ompi_comm_dup signalled that the
</span><br>
<span class="quotelev1">&gt; communicator was not an inter-communicator by setting remote_size to
</span><br>
<span class="quotelev1">&gt; 0. The remote size is now from the remote group if one was supplied
</span><br>
<span class="quotelev1">&gt; (which is the case with intra-communicators) so ompi_comm_dup needs to
</span><br>
<span class="quotelev1">&gt; make sure NULL is passed for the remote_group when duplicating
</span><br>
<span class="quotelev1">&gt; intra-communicators.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I opened a PR. Once jenkins finishes I will merge it onto master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 16, 2015 at 10:43:45AM -0500, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; yes, I did fresh pull this morning, for me it deadlocks reliably for 2
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; more processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Edgar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/16/2015 10:42 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;The reproducer is working for me with master on OX 10.10. Some changes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;to ompi_comm_set went in yesterday. Are you on the latest hash?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;-Nathan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;On Wed, Sep 16, 2015 at 08:49:59AM -0500, Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;something is borked right now on master in the management of inter vs.
</span><br>
<span class="quotelev1">&gt; intra
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;communicators. It looks like intra communicators are wrongly selecting
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;inter coll module thinking that it is an inter communicator, and we
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;hangs because of that. I attach a small replicator, where a bcast of a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;duplicate of MPI_COMM_WORLD hangs, because the inter collective module
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;being selected.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;Edgar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;#include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;int main( int argc, char *argv[] )
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;{
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Comm comm1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   int root=0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   int rank2, size2, global_buf=1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   int rank, size;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Init ( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Comm_rank ( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Comm_size ( MPI_COMM_WORLD, &amp;size );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;/* Setting up a new communicator */
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Comm_dup ( MPI_COMM_WORLD, &amp;comm1 );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Comm_size ( comm1, &amp;size2 );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Comm_rank ( comm1, &amp;rank2 );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Bcast ( &amp;global_buf, 1, MPI_INT, root, MPI_COMM_WORLD );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   if ( rank == root ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       printf(&quot;Bcast on MPI_COMM_WORLD finished\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Bcast ( &amp;global_buf, 1, MPI_INT, root, comm1 );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   if ( rank == root ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       printf(&quot;Bcast on duplicate of MPI_COMM_WORLD finished\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Comm_free ( &amp;comm1 );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   MPI_Finalize ();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   return ( 0 );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;}
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18040.php">http://www.open-mpi.org/community/lists/devel/2015/09/18040.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18042.php">http://www.open-mpi.org/community/lists/devel/2015/09/18042.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18043.php">http://www.open-mpi.org/community/lists/devel/2015/09/18043.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18049.php">http://www.open-mpi.org/community/lists/devel/2015/09/18049.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>In reply to:</strong> <a href="18049.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Reply:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
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
