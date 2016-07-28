<?
$subject_val = "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 00:36:25 2010" -->
<!-- isoreceived="20100630043625" -->
<!-- sent="Wed, 30 Jun 2010 13:36:19 +0900" -->
<!-- isosent="20100630043619" -->
<!-- name="Paul Hilscher" -->
<!-- email="pphilscher.ml_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create" -->
<!-- id="AANLkTimkYDrSB-tCa8FJ6Od8tHKl0cIV9qE9uZBG5C5V_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D621950C-F6BE-4982-A885-0E066C3F7E89_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create<br>
<strong>From:</strong> Paul Hilscher (<em>pphilscher.ml_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 00:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8126.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8128.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="8128.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Maybe reply:</strong> <a href="8130.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff, thanks for the information.
<br>
<p><span class="quotelev1">&gt;Open MPI currently has very limited cartesian support -- it actually
</span><br>
doesn't remap anything.
<br>
<p>I see, OpenMPI doesn't remap anything; this explains probably why my runtime
<br>
of my simulation varies sometimes between 30% for the same setup.
<br>
<p><span class="quotelev1">&gt;Would you have any interest in writing a partitioning algorithm for your
</span><br>
needs within the context of a plugin?  I'd be happy to walk &gt;you through the
<br>
process; it's not too complicated (although we should probably move the
<br>
discussion off to the Open MPI devel &gt;mailing list).
<br>
<p>I guess after using for more than a decade Open Source Software, it's time
<br>
to give something back :). ... so yes, I am willing to do that !!
<br>
<p>Because I am not yet experienced with OpenMPI internals, I would really
<br>
appreciate your advice, if you could tell me where exactly I have to dig
<br>
into.. I guess it should be around ompi_topo_create function, but how to
<br>
write MPI_Cart_Create as a plugin, I will rely on you information. And do
<br>
you know if MPICH, LAM etc. have an efficient implementation of
<br>
MPI_Cart_Create ? so I can borrow some ideas from them....
<br>
<p>best wishes,
<br>
<p>Paul Hilscher
<br>
<p><p><p>On Tue, Jun 29, 2010 at 8:17 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI currently has very limited cartesian support -- it actually
</span><br>
<span class="quotelev1">&gt; doesn't remap anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, it is *very* easy to extend Open MPI's algorithms for
</span><br>
<span class="quotelev1">&gt; cartesian partitioning.  As you probably already know, Open MPI is all about
</span><br>
<span class="quotelev1">&gt; its plugins -- finding and selecting a good set of plugins to use at
</span><br>
<span class="quotelev1">&gt; run-time.  Open MPI has many different types of plugins.  One of these types
</span><br>
<span class="quotelev1">&gt; of plugins performs the cartesian/graph mapping behind MPI_Cart_create (and
</span><br>
<span class="quotelev1">&gt; friends) function(s).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you have any interest in writing a partitioning algorithm for your
</span><br>
<span class="quotelev1">&gt; needs within the context of a plugin?  I'd be happy to walk you through the
</span><br>
<span class="quotelev1">&gt; process; it's not too complicated (although we should probably move the
</span><br>
<span class="quotelev1">&gt; discussion off to the Open MPI devel mailing list).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 29, 2010, at 4:50 AM, Paul Hilscher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI list,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using  a MPI-parallelized simulation program,  with a
</span><br>
<span class="quotelev1">&gt; domain-decomposition in 6-Dimensions.
</span><br>
<span class="quotelev2">&gt; &gt; In order to improve the scalability of my program I would like to know
</span><br>
<span class="quotelev1">&gt; according to what preferences
</span><br>
<span class="quotelev2">&gt; &gt; is MPI distributing the ranks when using MPI_Cart_create( reorder
</span><br>
<span class="quotelev1">&gt; allowed).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To explain my inquiry, imagine a 3-dimensional solver in  X-Y-M and 4
</span><br>
<span class="quotelev1">&gt; computing
</span><br>
<span class="quotelev2">&gt; &gt; nodes, each nodes consist of 4 Quad-Core CPUs (4(Node)x[ 4(CPUs) x
</span><br>
<span class="quotelev1">&gt; 4(Cores))] CPUs=64CPUs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now I decompose  all 3 dimensions by 4 (4x4x4 = 64) using
</span><br>
<span class="quotelev1">&gt;  MPI_Cart_create.
</span><br>
<span class="quotelev2">&gt; &gt; MPI has now several  possibilities to map the problem e.g. X-M (locally)
</span><br>
<span class="quotelev1">&gt; on a node and
</span><br>
<span class="quotelev2">&gt; &gt; Y across the nodes, or Y-M (locally) and X across the nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now my question is, how can I tell MPI that I want to distribute X-Y
</span><br>
<span class="quotelev1">&gt; locally while
</span><br>
<span class="quotelev2">&gt; &gt; M is distributed across nodes. The reason is that X-Y
</span><br>
<span class="quotelev2">&gt; &gt; communication ratio is much large (FFT) compared to M where we have only
</span><br>
<span class="quotelev2">&gt; &gt; 2 communications per time-step via an Allreduce.
</span><br>
<span class="quotelev2">&gt; &gt; An MPI implementation for the BlueGENE for example has an option
</span><br>
<span class="quotelev2">&gt; &gt; called mapfile where on can tell MPI how to map the dimensions onto
</span><br>
<span class="quotelev2">&gt; &gt; the Nodes. I did not found somethings similar for openmpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anybody know how to achieve this mapping or could anybody
</span><br>
<span class="quotelev2">&gt; &gt; tell me where I could find some examples or tutorials ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for your help and best wishes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul Hilscher
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8126.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8128.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="8128.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Maybe reply:</strong> <a href="8130.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
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
