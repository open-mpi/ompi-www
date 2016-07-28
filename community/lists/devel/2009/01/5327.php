<?
$subject_val = "[OMPI devel] Trunk broken at r20375";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 14:19:52 2009" -->
<!-- isoreceived="20090128191952" -->
<!-- sent="Wed, 28 Jan 2009 12:19:41 -0700" -->
<!-- isosent="20090128191941" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk broken at r20375" -->
<!-- id="6124A29D-CA20-4D84-A9D6-0D719789C9BE_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk broken at r20375<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-28 14:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5326.php">Jim Langston: "Re: [OMPI devel] Fun web site stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I believe a recent commit has broken the trunk - I am unable to  
<br>
compile it on either Linux or Mac:
<br>
<p>In file included from convertor_raw.c:24:
<br>
../../ompi/datatype/datatype_pack.h: In function &#145;pack_predefined_data&#146;:
<br>
../../ompi/datatype/datatype_pack.h:41: error: implicit declaration of  
<br>
function &#145;MEMCPY_CSUM&#146;
<br>
convertor_raw.c: In function &#145;ompi_convertor_raw&#146;:
<br>
convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;, but  
<br>
argument 4 has type &#145;struct iovec *&#146;
<br>
convertor_raw.c:60: warning: format &#145;%lu&#146; expects type &#145;long unsigned  
<br>
int&#146;, but argument 5 has type &#145;unsigned int&#146;
<br>
convertor_raw.c:60: warning: format &#145;%p&#146; expects type &#145;void *&#146;, but  
<br>
argument 6 has type &#145;long unsigned int&#146;
<br>
convertor_raw.c:87: warning: comparison between signed and unsigned
<br>
make[2]: *** [convertor_raw.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Perhaps an include file is missing?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Previous message:</strong> <a href="5326.php">Jim Langston: "Re: [OMPI devel] Fun web site stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
<li><strong>Reply:</strong> <a href="5328.php">Ralph Castain: "Re: [OMPI devel] Trunk broken at r20375"</a>
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
