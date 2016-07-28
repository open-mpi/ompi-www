<?
$subject_val = "Re: [OMPI devel] Trunk broken at r20375";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 14:27:04 2009" -->
<!-- isoreceived="20090128192704" -->
<!-- sent="Wed, 28 Jan 2009 12:26:51 -0700" -->
<!-- isosent="20090128192651" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken at r20375" -->
<!-- id="97F67EEC-FCD7-4918-B2A3-8E71C483CEB9_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="53E4380A-C9E3-4CBA-81DE-C657352CEDC5_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-28 14:26:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5330.php">George Bosilca: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>In reply to:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5330.php">George Bosilca: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5330.php">George Bosilca: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rats - once I fixed my area, it again broke on Linux at this same spot  
<br>
in convertor.
<br>
<p>Sorry for the confusion
<br>
Ralph
<br>
<p>On Jan 28, 2009, at 12:25 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Actually, check that  - it seems to be building under Linux (my  
</span><br>
<span class="quotelev1">&gt; build broke in some other area where I am working, but not here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it does not build on the Mac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2009, at 12:19 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe a recent commit has broken the trunk - I am unable to  
</span><br>
<span class="quotelev2">&gt;&gt; compile it on either Linux or Mac:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In file included from convertor_raw.c:24:
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_pack.h: In function  
</span><br>
<span class="quotelev2">&gt;&gt; &#145;pack_predefined_data&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/datatype/datatype_pack.h:41: error: implicit declaration  
</span><br>
<span class="quotelev2">&gt;&gt; of function &#145;MEMCPY_CSUM&#146;
</span><br>
<span class="quotelev2">&gt;&gt; convertor_raw.c: In function &#145;ompi_convertor_raw&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;, but  
</span><br>
<span class="quotelev2">&gt;&gt; argument 4 has type &#145;struct iovec *&#146;
</span><br>
<span class="quotelev2">&gt;&gt; convertor_raw.c:60: warning: format &#145;%lu&#146; expects type &#145;long  
</span><br>
<span class="quotelev2">&gt;&gt; unsigned int&#146;, but argument 5 has type &#145;unsigned int&#146;
</span><br>
<span class="quotelev2">&gt;&gt; convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;, but  
</span><br>
<span class="quotelev2">&gt;&gt; argument 6 has type &#145;long unsigned int&#146;
</span><br>
<span class="quotelev2">&gt;&gt; convertor_raw.c:87: warning: comparison between signed and unsigned
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [convertor_raw.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps an include file is missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5330.php">George Bosilca: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>In reply to:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5330.php">George Bosilca: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5330.php">George Bosilca: "Re: [OMPI devel] Trunk broken at r20375"</a>
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
