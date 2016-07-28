<?
$subject_val = "[OMPI devel] opal_config_bottom.h problem with trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 18:43:05 2014" -->
<!-- isoreceived="20140728224305" -->
<!-- sent="Mon, 28 Jul 2014 22:43:04 +0000" -->
<!-- isosent="20140728224304" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_config_bottom.h problem with trunk" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACB949_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] opal_config_bottom.h problem with trunk<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 18:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Previous message:</strong> <a href="15299.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Reply:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I was feeling lucky and decided to a fresh svn checkout of trunk and simple ./autogen.pl, ./configure
<br>
make on a opensuse 13.1.
<br>
<p>I get a blowup in opal_config_bottom.h:
<br>
<p>pp_at_hagel-vm:~&gt;../../opal/include/opal_config_bottom.h:383:38: error: expected declaration specifiers or '...' before '(' token
<br>
bash: ../../opal/include/opal_config_bottom.h:383:38:: No such file or directory
<br>
hpp_at_hagel-vm:~&gt; #    define malloc(size) opal_malloc((size), __FILE__, __LINE__)
<br>
<p>anyone else see this?
<br>
<p>I'll spend some time on it tomorrow.
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Previous message:</strong> <a href="15299.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Reply:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
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
