<?
$subject_val = "[OMPI devel] Interaction between orterun and user program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 04:17:39 2015" -->
<!-- isoreceived="20150916081739" -->
<!-- sent="Wed, 16 Sep 2015 17:17:35 +0900" -->
<!-- isosent="20150916081735" -->
<!-- name="Kay Khandan (Hamed)" -->
<!-- email="hkhandan_at_[hidden]" -->
<!-- subject="[OMPI devel] Interaction between orterun and user program" -->
<!-- id="E1FE5373-A90E-4231-A504-FD852CEEF57A_at_yahoo.com" -->
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
<strong>Subject:</strong> [OMPI devel] Interaction between orterun and user program<br>
<strong>From:</strong> Kay Khandan (Hamed) (<em>hkhandan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 04:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18039.php">Алексей Рыжих: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Reply:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>My name is Kay. I&#226;&#128;&#153;m a huge &quot;oom-pi&quot; fan, but only recently have been looking at from devel perspective.
<br>
<p>I appreciate if somebody shows me the entry point into understanding how orterun and user program interact, and more importantly how to change the way they interact.
<br>
<p>The reason: I am making a plugin for MPI support in another message passing system. This plugin is loaded from a dynamic library sometime after the process is started and is run on a separated tread. Therefore, (1) it does not receive any command line arguments, and (2) it is not allowed to use standard pipes (file descriptors 0,1, 2). With that in mind, I&#226;&#128;&#153;de like to interface this plugin from inside so-called ARE (which is the name for the runtime environment for this particular message passing system) to our old friend ORTE. I have the option to run &#226;&#128;&#156;are&#226;&#128;&#157; as a user program run by orterun.
<br>
<p>$orterun are ./actual-user-program 
<br>
<p>&nbsp;It might be wishful thinking, but I am also kindda hoping that I could get orterun out of the way all together by embedding a part of its implementation directly inside that plugin.
<br>
<p>I&#226;&#128;&#153;de appreciate to hear your insights.
<br>
<p>Best,
<br>
&#226;&#128;&#148; Kay<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18039.php">Алексей Рыжих: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18037.php">Gilles Gouaillardet: "Re: [OMPI devel] Commit 6e6a3e96"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Reply:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
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
