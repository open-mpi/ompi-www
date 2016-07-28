<?
$subject_val = "Re: [OMPI devel] Compile OpenMPI with MXM support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 08:20:51 2014" -->
<!-- isoreceived="20140619122051" -->
<!-- sent="Thu, 19 Jun 2014 15:20:49 +0300" -->
<!-- isosent="20140619122049" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile OpenMPI with MXM support" -->
<!-- id="CAAO1KyZcFu2_UO6-Ub2E9ygqWu6uS_24rk+pOD8boMca+gm3Rg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="674465BAC0F69347905C11F02369E3AB8D22CBA789_at_ppmail.tp-local.ru" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 08:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Previous message:</strong> <a href="15013.php">Kiryanov, Denis: "[OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15013.php">Kiryanov, Denis: "[OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Reply:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
it seems that you extracted mxm.bin.rpm into $HOME and use it in configure.
<br>
It may have an issues during &quot;configure&quot; phase as libmxm.so may contain
<br>
rpath to /opt/mellanox/mxm and you probably need LD_LIBRARY_PATH set to the
<br>
real mxm location to make it working and also adjust .la files in mxm dir.
<br>
<p>Alternatively, I would suggest using hpcx package which contains
<br>
relocatable packages for mxm,fca,ompi,... which can be used directly w/o
<br>
installation:
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
<p><p>On Thu, Jun 19, 2014 at 2:53 PM, Kiryanov, Denis &lt;
<br>
denis.kiryanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to compile openmpi-1.8.1 with the mxm library support but got
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component mtl:mxm (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component mtl:mxm compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-mxm value... sanity check ok
</span><br>
<span class="quotelev1">&gt; (/home/users/tvoronov/kda/mxm-3.0.2822-1.x86_64-sles11sp3/)
</span><br>
<span class="quotelev1">&gt; checking --with-mxm-libdir value... sanity check ok
</span><br>
<span class="quotelev1">&gt; (/home/users/tvoronov/kda/mxm-3.0.2822-1.x86_64-sles11sp3/lib/)
</span><br>
<span class="quotelev1">&gt; checking mxm/api/mxm_api.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking mxm/api/mxm_api.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for mxm/api/mxm_api.h... yes
</span><br>
<span class="quotelev1">&gt; checking for mxm_cleanup in -lmxm... no
</span><br>
<span class="quotelev1">&gt; checking for MXM version compatibility... yes
</span><br>
<span class="quotelev1">&gt; configure: error: MXM support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found that Mellanox suggests to install the library to /opt/mellanox but
</span><br>
<span class="quotelev1">&gt; I don't find it useful to install to the /opt directory.
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15013.php">http://www.open-mpi.org/community/lists/devel/2014/06/15013.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Previous message:</strong> <a href="15013.php">Kiryanov, Denis: "[OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15013.php">Kiryanov, Denis: "[OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>Reply:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
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
