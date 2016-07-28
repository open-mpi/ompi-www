<?
$subject_val = "Re: [OMPI devel] Compile OpenMPI with MXM support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 09:06:58 2014" -->
<!-- isoreceived="20140619130658" -->
<!-- sent="Thu, 19 Jun 2014 16:06:56 +0300" -->
<!-- isosent="20140619130656" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile OpenMPI with MXM support" -->
<!-- id="CAAO1KyaqUScit3yfXmv8DKE_jg-DgYKh=tVVCqbXqUrAf2RqCg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="674465BAC0F69347905C11F02369E3AB8D22CBA78B_at_ppmail.tp-local.ru" -->
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
<strong>Date:</strong> 2014-06-19 09:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15017.php">Pritchard, Howard P: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
could you please try hpcx for ompi and mxm?
<br>
what mofed ver do you have?
<br>
what is your configure command line?
<br>
<p><p>On Thu, Jun 19, 2014 at 3:45 PM, Kiryanov, Denis &lt;
<br>
denis.kiryanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] On Behalf Of Mike Dubman [
</span><br>
<span class="quotelev1">&gt; miked_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 19, 2014 4:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Compile OpenMPI with MXM support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; it seems that you extracted mxm.bin.rpm into $HOME and use it in configure.
</span><br>
<span class="quotelev1">&gt; It may have an issues during &quot;configure&quot; phase as libmxm.so may contain
</span><br>
<span class="quotelev1">&gt; rpath to /opt/mellanox/mxm and you probably need LD_LIBRARY_PATH set to the
</span><br>
<span class="quotelev1">&gt; real mxm location to make it working and also adjust .la files in mxm dir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've adjusted the libdir variable in libmxm.la and set the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH but it seem doesn't work...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, I would suggest using hpcx package which contains
</span><br>
<span class="quotelev1">&gt; relocatable packages for mxm,fca,ompi,... which can be used directly w/o
</span><br>
<span class="quotelev1">&gt; installation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Details here:
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com/products/hpcx/README.txt">http://bgate.mellanox.com/products/hpcx/README.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Download:
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com/products/hpcx/">http://bgate.mellanox.com/products/hpcx/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 19, 2014 at 2:53 PM, Kiryanov, Denis &lt;
</span><br>
<span class="quotelev1">&gt; denis.kiryanov_at_[hidden]&lt;mailto:denis.kiryanov_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15013.php">http://www.open-mpi.org/community/lists/devel/2014/06/15013.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15015.php">http://www.open-mpi.org/community/lists/devel/2014/06/15015.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15016/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15017.php">Pritchard, Howard P: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15015.php">Kiryanov, Denis: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
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
