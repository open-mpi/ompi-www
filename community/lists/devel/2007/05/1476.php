<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  7 18:52:30 2007" -->
<!-- isoreceived="20070507225230" -->
<!-- sent="Mon, 07 May 2007 17:52:26 -0500" -->
<!-- isosent="20070507225226" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM" -->
<!-- id="1178578346.30571.183.camel_at_stevo-desktop" -->
<!-- inreplyto="1178575761.30571.175.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-07 18:52:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1477.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1478.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Reply:</strong> <a href="1478.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, there appears to be a DAPL BTL in OMPI.  Is this BTL complete and
<br>
enabled for the ofed-1.2 udapl library? 
<br>
<p><p>Steve.
<br>
<p><p>On Mon, 2007-05-07 at 17:09 -0500, Steve Wise wrote:
<br>
<span class="quotelev1">&gt; On Sat, 2007-04-28 at 16:20 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; You'd probably be better asking this question on the Open MPI mailing  
</span><br>
<span class="quotelev2">&gt; &gt; lists, not here.  :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, yes, adding RDMA CM support has actually been on my to-do list  
</span><br>
<span class="quotelev2">&gt; &gt; for a while, but it keeps getting bumped by higher priority items.   
</span><br>
<span class="quotelev2">&gt; &gt; It would be *much* better if some iWARP companies got involved in  
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hey Jeff, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chelsio's gonna pony up the resources to get this work done asap.  Do
</span><br>
<span class="quotelev1">&gt; you have any thoughts on how we can collaborate on this project?  I'm
</span><br>
<span class="quotelev1">&gt; familiar with mvapich, not ompi, so I need to go do some homework.  But
</span><br>
<span class="quotelev1">&gt; any pointers on the connection setup design for ompi would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm CCing devel_at_[hidden] in case anyone else is interested in
</span><br>
<span class="quotelev1">&gt; helping.  Chelsio can provide rnic HW...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 28, 2007, at 4:16 PM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is anyone working on adding RDMA-CM support to OpenMPI?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Steve.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; general mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; general_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/">http://openib.org/mailman/listinfo/</a> 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openib-general
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1477.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1478.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Reply:</strong> <a href="1478.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
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
