<?
$subject_val = "Re: [OMPI devel] Trunk broken at r20375";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 16:48:47 2009" -->
<!-- isoreceived="20090128214847" -->
<!-- sent="Wed, 28 Jan 2009 16:48:42 -0500" -->
<!-- isosent="20090128214842" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken at r20375" -->
<!-- id="7607CF42-1C3F-4CD9-9C02-EF6FFB1B7B5E_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="97F67EEC-FCD7-4918-B2A3-8E71C483CEB9_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk broken at r20375<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-28 16:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5331.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>In reply to:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5331.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5331.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seems more like a compiler problem. A static inline function defined  
<br>
in the header file but never used is the source of the problem. It did  
<br>
compile for me with the gcc from Leopard and 4.3.1 on Linux. I'll  
<br>
commit the fix asap.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 28, 2009, at 14:26 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Rats - once I fixed my area, it again broke on Linux at this same  
</span><br>
<span class="quotelev1">&gt; spot in convertor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2009, at 12:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, check that  - it seems to be building under Linux (my  
</span><br>
<span class="quotelev2">&gt;&gt; build broke in some other area where I am working, but not here).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, it does not build on the Mac.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2009, at 12:19 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe a recent commit has broken the trunk - I am unable to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile it on either Linux or Mac:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from convertor_raw.c:24:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/datatype/datatype_pack.h: In function  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#145;pack_predefined_data&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../ompi/datatype/datatype_pack.h:41: error: implicit  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of function &#145;MEMCPY_CSUM&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convertor_raw.c: In function &#145;ompi_convertor_raw&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but argument 4 has type &#145;struct iovec *&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convertor_raw.c:60: warning: format &#145;%lu&#146; expects type &#145;long  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unsigned int&#146;, but argument 5 has type &#145;unsigned int&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but argument 6 has type &#145;long unsigned int&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convertor_raw.c:87: warning: comparison between signed and unsigned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [convertor_raw.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps an include file is missing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5331.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>In reply to:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5331.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5331.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
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
