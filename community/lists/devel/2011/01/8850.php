<?
$subject_val = "[OMPI devel] u_int8_t";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 19:51:57 2011" -->
<!-- isoreceived="20110111005157" -->
<!-- sent="Mon, 10 Jan 2011 16:51:02 -0800" -->
<!-- isosent="20110111005102" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] u_int8_t" -->
<!-- id="4D2BA976.4080107_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] u_int8_t<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 19:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Reply:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why do
<br>
&nbsp;&nbsp;&nbsp;u_int8_t
<br>
&nbsp;&nbsp;&nbsp;u_int16_t
<br>
&nbsp;&nbsp;&nbsp;u_int32_t
<br>
&nbsp;&nbsp;&nbsp;u_int64_t
<br>
get defined in opal_config.h?  I don't see them used anywhere in the 
<br>
OMPI/OPAL/ORTE code base.
<br>
<p>Okay, one exception, in opal/util/if.c:
<br>
<p>#if defined(__DragonFly__)
<br>
#define IN_LINKLOCAL(i)        (((u_int32_t)(i) &amp; 0xffff0000) == 0xa9fe0000)
<br>
#endif
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Reply:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
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
