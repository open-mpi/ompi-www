<?
$subject_val = "Re: [OMPI devel] MPI_Bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 18 22:18:13 2012" -->
<!-- isoreceived="20121119031813" -->
<!-- sent="Sun, 18 Nov 2012 22:18:07 -0500" -->
<!-- isosent="20121119031807" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Bcast" -->
<!-- id="C714BDB0-52D1-42C3-98BD-7DD982B31F27_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY166-W23ABF4CE2EFBFC4FACACF3CC570_at_phx.gbl" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-18 22:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11802.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="11800.php">Sandra Guija: "[OMPI devel] MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="11800.php">Sandra Guija: "[OMPI devel] MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11802.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="11802.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this case the MPI_Bcast will act as a synchronization point, the slaves will be blocked in the call until the master do the operation.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 18, 2012, at 15:54 , Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; Could someone be kind and explain me the MPI_Bcast when is call by all the other processes?
</span><br>
<span class="quotelev1">&gt; I am having some difficulties in fully understanding it.
</span><br>
<span class="quotelev1">&gt; The reason I asked, it is because in my code there are some slaves calling the MPI_Bcast function prior the master calls it.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sandra Guija
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 14 Nov 2012 08:02:13 -0700
</span><br>
<span class="quotelev2">&gt; &gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI devel] topics for Dec. developer's meeting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A few people have approached me with topics for the Dec meeting. I put the ones that I could remember on the wiki. Please go fill in whatever topics you want to discuss:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/Dec12Meeting">https://svn.open-mpi.org/trac/ompi/wiki/Dec12Meeting</a>
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
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11802.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="11800.php">Sandra Guija: "[OMPI devel] MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="11800.php">Sandra Guija: "[OMPI devel] MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11802.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="11802.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast"</a>
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
