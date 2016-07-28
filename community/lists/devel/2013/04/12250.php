<?
$subject_val = "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 10:05:52 2013" -->
<!-- isoreceived="20130405140552" -->
<!-- sent="Fri, 5 Apr 2013 10:05:36 -0400" -->
<!-- isosent="20130405140536" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class" -->
<!-- id="869EA83B-BDB8-4BF1-B018-F49CB6E55676_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="515E8ACC.8050300_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 10:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12251.php">Nathan Hjelm: "[OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul (K.),
<br>
<p>I fixed the problem in trunk r28289. Can you please test the revision with your build environment.
<br>
<p>Regards,
<br>
Pavel (Pasha) Shamis
<br>
<p><p><p><p><p><p>On Apr 5, 2013, at 4:26 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/05/13 03:16, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I found that not only did I need XRC, but I also needed to configure with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static to reproduce the problem.
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that if Mellanox added --enable-static to an existing MTT
</span><br>
<span class="quotelev2">&gt;&gt; configuration this would not have remained unfixed for so long.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, AFAIK we do not use --enable-static in our builds and in the config-log 
</span><br>
<span class="quotelev1">&gt; --disable-static is seen multiple times. Neverthelesse we run into the error
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0):
</span><br>
<span class="quotelev2">&gt;&gt; multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure line we're using is something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-verbs --with-lsf --with-devel-headers 
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt --enable-heterogeneous --enable-cxx-exceptions 
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default --disable-dlopen --disable-mca-dso 
</span><br>
<span class="quotelev1">&gt; --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-ext ......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (adding paths, compiler-specific optimisation things and -m32 or -m64)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An config.log file attached FYI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;&lt;smime.p7s&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12251.php">Nathan Hjelm: "[OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
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
