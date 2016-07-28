<?
$subject_val = "[OMPI devel] More VT warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 10:09:33 2008" -->
<!-- isoreceived="20080201150933" -->
<!-- sent="Fri, 01 Feb 2008 10:09:31 -0500" -->
<!-- isosent="20080201150931" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] More VT warnings" -->
<!-- id="47A3362B.7090403_at_cs.indiana.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1201800989.5763.119.camel_at_ricolap" -->
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
<strong>Subject:</strong> [OMPI devel] More VT warnings<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 10:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Reply:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With a fresh checkout, I get the following warnings:
<br>
<p>vt_metric_papi.c:72: warning: no previous prototype for &#226;&#128;&#152;vt_metric_error&#226;&#128;&#153;
<br>
vt_metric_papi.c:86: warning: no previous prototype for &#226;&#128;&#152;vt_metric_warning&#226;&#128;&#153;
<br>
vt_metric_papi.c:100: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
vt_metric_papi.c: In function &#226;&#128;&#152;vt_metric_descriptions&#226;&#128;&#153;:
<br>
vt_metric_papi.c:126: warning: comparison between signed and unsigned
<br>
vt_metric_papi.c: At top level:
<br>
vt_metric_papi.c:147: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
vt_metric_papi.c:72: warning: no previous prototype for &#226;&#128;&#152;vt_metric_error&#226;&#128;&#153;
<br>
vt_metric_papi.c:86: warning: no previous prototype for &#226;&#128;&#152;vt_metric_warning&#226;&#128;&#153;
<br>
vt_metric_papi.c:100: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
vt_metric_papi.c: In function &#226;&#128;&#152;vt_metric_descriptions&#226;&#128;&#153;:
<br>
vt_metric_papi.c:126: warning: comparison between signed and unsigned
<br>
vt_metric_papi.c: At top level:
<br>
vt_metric_papi.c:147: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
vt_metric_papi.c:72: warning: no previous prototype for &#226;&#128;&#152;vt_metric_error&#226;&#128;&#153;
<br>
vt_metric_papi.c:86: warning: no previous prototype for &#226;&#128;&#152;vt_metric_warning&#226;&#128;&#153;
<br>
vt_metric_papi.c:100: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
vt_metric_papi.c: In function &#226;&#128;&#152;vt_metric_descriptions&#226;&#128;&#153;:
<br>
vt_metric_papi.c:126: warning: comparison between signed and unsigned
<br>
vt_metric_papi.c: At top level:
<br>
vt_metric_papi.c:147: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
vt_metric_papi.c:72: warning: no previous prototype for &#226;&#128;&#152;vt_metric_error&#226;&#128;&#153;
<br>
vt_metric_papi.c:86: warning: no previous prototype for &#226;&#128;&#152;vt_metric_warning&#226;&#128;&#153;
<br>
vt_metric_papi.c:100: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
vt_metric_papi.c: In function &#226;&#128;&#152;vt_metric_descriptions&#226;&#128;&#153;:
<br>
vt_metric_papi.c:126: warning: comparison between signed and unsigned
<br>
vt_metric_papi.c: At top level:
<br>
vt_metric_papi.c:147: warning: function declaration isn&#226;&#128;&#153;t a prototype
<br>
<p><p>Note that this indicates that the file vt_metric_papi.c is being 
<br>
compiled *3* times. I am not using a parallel make here. Any ideas why 
<br>
it is compiling 3 times? It should not be timing issue, the nfs server 
<br>
and the system clock seem to be well synchronized.
<br>
<p><p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Reply:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
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
