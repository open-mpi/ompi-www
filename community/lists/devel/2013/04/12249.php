<?
$subject_val = "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 04:27:02 2013" -->
<!-- isoreceived="20130405082702" -->
<!-- sent="Fri, 05 Apr 2013 10:26:52 +0200" -->
<!-- isosent="20130405082652" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class" -->
<!-- id="515E8ACC.8050300_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16QOFxmT=vCMM7bdCFXSwe-AYebHck18JaCYcCX0xiYBw_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 04:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12248.php">Ralph Castain: "[OMPI devel] v1.7 patches"</a>
<li><strong>In reply to:</strong> <a href="12246.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 04/05/13 03:16, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I found that not only did I need XRC, but I also needed to configure with
</span><br>
<span class="quotelev1">&gt; --enable-static to reproduce the problem.
</span><br>
<span class="quotelev1">&gt; I suspect that if Mellanox added --enable-static to an existing MTT
</span><br>
<span class="quotelev1">&gt; configuration this would not have remained unfixed for so long.
</span><br>
<p>Well, AFAIK we do not use --enable-static in our builds and in the config-log 
<br>
--disable-static is seen multiple times. Neverthelesse we run into the error
<br>
<span class="quotelev1"> &gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0):
</span><br>
<span class="quotelev1"> &gt; multiple definition of `ib_address_t_class'
</span><br>
<p>The configure line we're using is something like this:
<br>
<p>./configure --with-verbs --with-lsf --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-heterogeneous --enable-cxx-exceptions 
<br>
--enable-orterun-prefix-by-default --disable-dlopen --disable-mca-dso 
<br>
--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' 
<br>
--enable-mpi-ext ......
<br>
<p>(adding paths, compiler-specific optimisation things and -m32 or -m64)
<br>
<p>An config.log file attached FYI
<br>
<p><p>Best
<br>
<p>Paul
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12249/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12249/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12248.php">Ralph Castain: "[OMPI devel] v1.7 patches"</a>
<li><strong>In reply to:</strong> <a href="12246.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
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
