<?
$subject_val = "[OMPI devel] Compile OpenMPI with MXM support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 07:54:35 2014" -->
<!-- isoreceived="20140619115435" -->
<!-- sent="Thu, 19 Jun 2014 15:53:55 +0400" -->
<!-- isosent="20140619115355" -->
<!-- name="Kiryanov, Denis" -->
<!-- email="denis.kiryanov_at_[hidden]" -->
<!-- subject="[OMPI devel] Compile OpenMPI with MXM support" -->
<!-- id="674465BAC0F69347905C11F02369E3AB8D22CBA789_at_ppmail.tp-local.ru" -->
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
<strong>Subject:</strong> [OMPI devel] Compile OpenMPI with MXM support<br>
<strong>From:</strong> Kiryanov, Denis (<em>denis.kiryanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 07:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Previous message:</strong> <a href="15012.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Reply:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to compile openmpi-1.8.1 with the mxm library support but got the following error:
<br>
<p>--- MCA component mtl:mxm (m4 configuration macro)
<br>
checking for MCA component mtl:mxm compile mode... dso
<br>
checking --with-mxm value... sanity check ok (/home/users/tvoronov/kda/mxm-3.0.2822-1.x86_64-sles11sp3/)
<br>
checking --with-mxm-libdir value... sanity check ok (/home/users/tvoronov/kda/mxm-3.0.2822-1.x86_64-sles11sp3/lib/)
<br>
checking mxm/api/mxm_api.h usability... yes
<br>
checking mxm/api/mxm_api.h presence... yes
<br>
checking for mxm/api/mxm_api.h... yes
<br>
checking for mxm_cleanup in -lmxm... no
<br>
checking for MXM version compatibility... yes
<br>
configure: error: MXM support requested but not found.  Aborting
<br>
<p>I found that Mellanox suggests to install the library to /opt/mellanox but I don't find it useful to install to the /opt directory.
<br>
Any ideas?
<br>
<p>Thanks!<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Previous message:</strong> <a href="15012.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Reply:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
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
