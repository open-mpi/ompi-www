<?
$subject_val = "Re: [OMPI users] dimension mapping of MPI_Cart_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 07:17:48 2010" -->
<!-- isoreceived="20100629111748" -->
<!-- sent="Tue, 29 Jun 2010 07:17:35 -0400" -->
<!-- isosent="20100629111735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dimension mapping of MPI_Cart_create" -->
<!-- id="D621950C-F6BE-4982-A885-0E066C3F7E89_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTin69R8aQT1v8o7eqxX0ignfrOiil_wfL872iTg5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] dimension mapping of MPI_Cart_create<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 07:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13441.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13436.php">Paul Hilscher: "[OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13444.php">Paul Hilscher: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="13444.php">Paul Hilscher: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI currently has very limited cartesian support -- it actually doesn't remap anything.
<br>
<p>That being said, it is *very* easy to extend Open MPI's algorithms for cartesian partitioning.  As you probably already know, Open MPI is all about its plugins -- finding and selecting a good set of plugins to use at run-time.  Open MPI has many different types of plugins.  One of these types of plugins performs the cartesian/graph mapping behind MPI_Cart_create (and friends) function(s).  
<br>
<p>Would you have any interest in writing a partitioning algorithm for your needs within the context of a plugin?  I'd be happy to walk you through the process; it's not too complicated (although we should probably move the discussion off to the Open MPI devel mailing list).
<br>
<p><p>On Jun 29, 2010, at 4:50 AM, Paul Hilscher wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using  a MPI-parallelized simulation program,  with a domain-decomposition in 6-Dimensions.
</span><br>
<span class="quotelev1">&gt; In order to improve the scalability of my program I would like to know according to what preferences
</span><br>
<span class="quotelev1">&gt; is MPI distributing the ranks when using MPI_Cart_create( reorder allowed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To explain my inquiry, imagine a 3-dimensional solver in  X-Y-M and 4 computing
</span><br>
<span class="quotelev1">&gt; nodes, each nodes consist of 4 Quad-Core CPUs (4(Node)x[ 4(CPUs) x 4(Cores))] CPUs=64CPUs). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I decompose  all 3 dimensions by 4 (4x4x4 = 64) using  MPI_Cart_create. 
</span><br>
<span class="quotelev1">&gt; MPI has now several  possibilities to map the problem e.g. X-M (locally) on a node and
</span><br>
<span class="quotelev1">&gt; Y across the nodes, or Y-M (locally) and X across the nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now my question is, how can I tell MPI that I want to distribute X-Y locally while 
</span><br>
<span class="quotelev1">&gt; M is distributed across nodes. The reason is that X-Y 
</span><br>
<span class="quotelev1">&gt; communication ratio is much large (FFT) compared to M where we have only 
</span><br>
<span class="quotelev1">&gt; 2 communications per time-step via an Allreduce. 
</span><br>
<span class="quotelev1">&gt; An MPI implementation for the BlueGENE for example has an option 
</span><br>
<span class="quotelev1">&gt; called mapfile where on can tell MPI how to map the dimensions onto 
</span><br>
<span class="quotelev1">&gt; the Nodes. I did not found somethings similar for openmpi. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody know how to achieve this mapping or could anybody 
</span><br>
<span class="quotelev1">&gt; tell me where I could find some examples or tutorials ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help and best wishes 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Hilscher
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13441.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13436.php">Paul Hilscher: "[OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13444.php">Paul Hilscher: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="13444.php">Paul Hilscher: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
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
