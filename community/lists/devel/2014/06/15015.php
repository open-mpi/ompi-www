<?
$subject_val = "Re: [OMPI devel] Compile OpenMPI with MXM support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 08:46:50 2014" -->
<!-- isoreceived="20140619124650" -->
<!-- sent="Thu, 19 Jun 2014 16:45:53 +0400" -->
<!-- isosent="20140619124553" -->
<!-- name="Kiryanov, Denis" -->
<!-- email="denis.kiryanov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile OpenMPI with MXM support" -->
<!-- id="674465BAC0F69347905C11F02369E3AB8D22CBA78B_at_ppmail.tp-local.ru" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZcFu2_UO6-Ub2E9ygqWu6uS_24rk+pOD8boMca+gm3Rg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile OpenMPI with MXM support<br>
<strong>From:</strong> Kiryanov, Denis (<em>denis.kiryanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 08:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Previous message:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Reply:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] On Behalf Of Mike Dubman [miked_at_[hidden]]
<br>
Sent: Thursday, June 19, 2014 4:20 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Compile OpenMPI with MXM support
<br>
<p>Hi,
<br>
it seems that you extracted mxm.bin.rpm into $HOME and use it in configure.
<br>
It may have an issues during &quot;configure&quot; phase as libmxm.so may contain rpath to /opt/mellanox/mxm and you probably need LD_LIBRARY_PATH set to the real mxm location to make it working and also adjust .la files in mxm dir.
<br>
<p>I've adjusted the libdir variable in libmxm.la and set the LD_LIBRARY_PATH but it seem doesn't work...
<br>
<p>Alternatively, I would suggest using hpcx package which contains relocatable packages for mxm,fca,ompi,... which can be used directly w/o installation:
<br>
<p>Details here:
<br>
<a href="http://bgate.mellanox.com/products/hpcx/README.txt">http://bgate.mellanox.com/products/hpcx/README.txt</a>
<br>
<p>Download:
<br>
<a href="http://bgate.mellanox.com/products/hpcx/">http://bgate.mellanox.com/products/hpcx/</a>
<br>
<p>Regards
<br>
M
<br>
<p><p>On Thu, Jun 19, 2014 at 2:53 PM, Kiryanov, Denis &lt;denis.kiryanov_at_[hidden]&lt;mailto:denis.kiryanov_at_[hidden]&gt;&gt; wrote:
<br>
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
<p>Thanks!
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15013.php">http://www.open-mpi.org/community/lists/devel/2014/06/15013.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Previous message:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15014.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Reply:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
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
