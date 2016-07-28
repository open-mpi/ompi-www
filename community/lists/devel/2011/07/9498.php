<?
$subject_val = "[OMPI devel] Wrong version of flex in nightly tarballs last night";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 10:51:09 2011" -->
<!-- isoreceived="20110711145109" -->
<!-- sent="Mon, 11 Jul 2011 10:51:04 -0400" -->
<!-- isosent="20110711145104" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Wrong version of flex in nightly tarballs last night" -->
<!-- id="DB2AD0A3-F8A2-4365-B690-946027F11C34_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Wrong version of flex in nightly tarballs last night<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 10:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9497.php">Jeff Squyres: "[OMPI devel] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shiqing notified me that when I upgraded the auto tools on the build server yesterday, I forgot to include the proper version of flex -- so it used a really old version (2.5.4 instead of 2.5.35) which generates _lex.c files that don't compile on Windows.
<br>
<p>I (think that I) have fixed the problem and am generating new nightly tarballs for trunk, v1.4, and v1.5 right now.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9497.php">Jeff Squyres: "[OMPI devel] OpenMPI with NAG compiler and gcc 4.6"</a>
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
