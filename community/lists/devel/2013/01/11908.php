<?
$subject_val = "[OMPI devel] New SM BTL Initialization Take 2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 15:24:09 2013" -->
<!-- isoreceived="20130109202409" -->
<!-- sent="Wed, 9 Jan 2013 20:24:03 +0000" -->
<!-- isosent="20130109202403" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] New SM BTL Initialization Take 2" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B18634991_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] New SM BTL Initialization Take 2<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 15:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11909.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Previous message:</strong> <a href="11907.php">Phil Carns: "[OMPI devel] use of stat() during malloc initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>Reply:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've reworked the SM BTL initialization to address some of the concerns voiced last week. The update is pretty simple and like last week's change does not use RML for initialization.
<br>
<p>Short Description of Change:
<br>
All local ranks agree upon a well-known rendezvous point during component init.
<br>
Rank 0 writes initialization data into that file.
<br>
During add_procs the rest of the local ranks read from that file and extract the info required for attach.
<br>
<p>The repo is here: <a href="https://bitbucket.org/samuelkgutierrez/rmllesssm2">https://bitbucket.org/samuelkgutierrez/rmllesssm2</a>
<br>
<p>I would like to commit the changes on Friday, so please take a look and tell me what you think.
<br>
<p>Thanks!
<br>
<p>Sam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11909.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Previous message:</strong> <a href="11907.php">Phil Carns: "[OMPI devel] use of stat() during malloc initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>Reply:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
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
