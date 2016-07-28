<?
$subject_val = "[OMPI devel] Process placement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 18:32:54 2016" -->
<!-- isoreceived="20160412223254" -->
<!-- sent="Wed, 13 Apr 2016 00:32:51 +0200" -->
<!-- isosent="20160412223251" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Process placement" -->
<!-- id="960A01EE-CFF0-499F-84D4-A4310E40668F_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Process placement<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 18:32:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18758.php">Gilles Gouaillardet: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18758.php">Gilles Gouaillardet: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="18758.php">Gilles Gouaillardet: "Re: [OMPI devel] Process placement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that my old scheme of process placement seems to be have a different outcome with the current master. I used to start a single process per node on my cluster using a hostfile together with &#226;&#128;&#156;map-by node&#226;&#128;&#157;, with a command line that looked like this &#226;&#128;&#156;mpirun &#226;&#128;&#148;hostfile arc &#226;&#128;&#148;map-by node -np 2 hostname&#226;&#128;&#157;.
<br>
<p>Assuming my host file contains
<br>
arc00 slots=20
<br>
arc01 slots=21
<br>
<p>The above command in 1.10 gives the expected:
<br>
arc00
<br>
arc01
<br>
<p>However on master it gives:
<br>
arc00
<br>
arc00
<br>
<p>It seems that &#226;&#128;&#156;&#226;&#128;&#148;map-by node&#226;&#128;&#157; was completely ignored, and to get back the same behavior I have to force replace it with -npernode 1 ?
<br>
<p>Also my processes, despite the fact that I asked for 1 per node, are not bound to the first core. Shouldn&#226;&#128;&#153;t we release the process binding when we know there is a single process per node (as in the above case) ?
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18758.php">Gilles Gouaillardet: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18758.php">Gilles Gouaillardet: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="18758.php">Gilles Gouaillardet: "Re: [OMPI devel] Process placement"</a>
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
