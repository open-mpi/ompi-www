<?
$subject_val = "Re: [OMPI devel] Trunk broken at r20375";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 14:25:25 2009" -->
<!-- isoreceived="20090128192525" -->
<!-- sent="Wed, 28 Jan 2009 12:25:13 -0700" -->
<!-- isosent="20090128192513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken at r20375" -->
<!-- id="53E4380A-C9E3-4CBA-81DE-C657352CEDC5_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="6124A29D-CA20-4D84-A9D6-0D719789C9BE_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-01-28 14:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5327.php">Ralph Castain: "[OMPI devel] Trunk broken at r20375"</a>
<li><strong>In reply to:</strong> <a href="5327.php">Ralph Castain: "[OMPI devel] Trunk broken at r20375"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, check that  - it seems to be building under Linux (my build  
<br>
broke in some other area where I am working, but not here).
<br>
<p>However, it does not build on the Mac.
<br>
<p>Any suggestions?
<br>
Ralph
<br>
<p>On Jan 28, 2009, at 12:19 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe a recent commit has broken the trunk - I am unable to  
</span><br>
<span class="quotelev1">&gt; compile it on either Linux or Mac:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from convertor_raw.c:24:
</span><br>
<span class="quotelev1">&gt; ../../ompi/datatype/datatype_pack.h: In function  
</span><br>
<span class="quotelev1">&gt; &#145;pack_predefined_data&#146;:
</span><br>
<span class="quotelev1">&gt; ../../ompi/datatype/datatype_pack.h:41: error: implicit declaration  
</span><br>
<span class="quotelev1">&gt; of function &#145;MEMCPY_CSUM&#146;
</span><br>
<span class="quotelev1">&gt; convertor_raw.c: In function &#145;ompi_convertor_raw&#146;:
</span><br>
<span class="quotelev1">&gt; convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;, but  
</span><br>
<span class="quotelev1">&gt; argument 4 has type &#145;struct iovec *&#146;
</span><br>
<span class="quotelev1">&gt; convertor_raw.c:60: warning: format &#145;%lu&#146; expects type &#145;long  
</span><br>
<span class="quotelev1">&gt; unsigned int&#146;, but argument 5 has type &#145;unsigned int&#146;
</span><br>
<span class="quotelev1">&gt; convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;, but  
</span><br>
<span class="quotelev1">&gt; argument 6 has type &#145;long unsigned int&#146;
</span><br>
<span class="quotelev1">&gt; convertor_raw.c:87: warning: comparison between signed and unsigned
</span><br>
<span class="quotelev1">&gt; make[2]: *** [convertor_raw.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps an include file is missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5327.php">Ralph Castain: "[OMPI devel] Trunk broken at r20375"</a>
<li><strong>In reply to:</strong> <a href="5327.php">Ralph Castain: "[OMPI devel] Trunk broken at r20375"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5329.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
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
