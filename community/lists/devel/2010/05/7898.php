<?
$subject_val = "Re: [OMPI devel] malloc(0) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 15:36:17 2010" -->
<!-- isoreceived="20100506193617" -->
<!-- sent="Thu, 6 May 2010 15:36:08 -0400" -->
<!-- isosent="20100506193608" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc(0) warnings" -->
<!-- id="E5132FAA-D03A-4647-9F6E-8B924723D9BD_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="i2me7ba66e41005051717ue1358952q6f489bb05259731_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc(0) warnings<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 15:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Previous message:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>In reply to:</strong> <a href="7896.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Reply:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is an artifact of using the gatherv (or the scatterv) on an inter-communicator without any useful data (i.e. either count of zero or empty datatypes). Looks more like a synchronization than a real operation. 
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On May 5, 2010, at 20:17 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; After building 1.4.2 with debug flags to configure, I get this (I've
</span><br>
<span class="quotelev1">&gt; got these warnings in previous releases, too):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (INTEC/CONICET-UNL)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1011)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
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
<li><strong>Next message:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Previous message:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>In reply to:</strong> <a href="7896.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Reply:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
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
