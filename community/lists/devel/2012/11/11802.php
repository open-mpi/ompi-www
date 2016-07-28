<?
$subject_val = "Re: [OMPI devel] MPI_Bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 07:14:14 2012" -->
<!-- isoreceived="20121119121414" -->
<!-- sent="Mon, 19 Nov 2012 07:13:31 -0500" -->
<!-- isosent="20121119121331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Bcast" -->
<!-- id="BA9D8125-E716-4E2A-9A7C-BA776B4B283C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C714BDB0-52D1-42C3-98BD-7DD982B31F27_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Bcast<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 07:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11803.php">Jeff Squyres: "[OMPI devel] Dec. devel meeting"</a>
<li><strong>Previous message:</strong> <a href="11801.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="11801.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on what George says.
<br>
<p>In general, the only MPI collective operation that *forces* an explicit, global synchronization is MPI_Barrier.  Specifically: no process can exit the barrier until all processes have entered the barrier.
<br>
<p>In you example (MPI_Bcast), none of the non-root processes can exit the bcast before the root enters the bcast.  This is a much weaker synchronization than barrier.
<br>
<p><p>On Nov 18, 2012, at 10:18 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In this case the MPI_Bcast will act as a synchronization point, the slaves will be blocked in the call until the master do the operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2012, at 15:54 , Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello, 
</span><br>
<span class="quotelev2">&gt;&gt; Could someone be kind and explain me the MPI_Bcast when is call by all the other processes?
</span><br>
<span class="quotelev2">&gt;&gt; I am having some difficulties in fully understanding it.
</span><br>
<span class="quotelev2">&gt;&gt; The reason I asked, it is because in my code there are some slaves calling the MPI_Bcast function prior the master calls it.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sandra Guija
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: Wed, 14 Nov 2012 08:02:13 -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subject: [OMPI devel] topics for Dec. developer's meeting
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A few people have approached me with topics for the Dec meeting. I put the ones that I could remember on the wiki. Please go fill in whatever topics you want to discuss:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/Dec12Meeting">https://svn.open-mpi.org/trac/ompi/wiki/Dec12Meeting</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11803.php">Jeff Squyres: "[OMPI devel] Dec. devel meeting"</a>
<li><strong>Previous message:</strong> <a href="11801.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="11801.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast"</a>
<!-- nextthread="start" -->
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
