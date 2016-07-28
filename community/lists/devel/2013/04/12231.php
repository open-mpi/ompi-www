<?
$subject_val = "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 12:37:44 2013" -->
<!-- isoreceived="20130404163744" -->
<!-- sent="Thu, 04 Apr 2013 18:37:38 +0200" -->
<!-- isosent="20130404163738" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class" -->
<!-- id="515DAC52.6040106_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B110DB4B1_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 12:37:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12232.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12230.php">Ralph Castain: "[OMPI devel] v1.7 warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11379.php">Gutierrez, Samuel K: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12232.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12232.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got the same error on all builds (4 compiler, with and without trheading 
<br>
support, 64 and 32bit) on our systems, effectively prohibiting the building of 
<br>
the 1.7 release.
<br>
<p>Any idea how to workaround this?
<br>
<p>Need more logs?
<br>
<p>Best
<br>
<p><p><p>On 08/06/12 19:41, Gutierrez, Samuel K wrote:
<br>
<span class="quotelev1">&gt; Looks like the type is defined twice - once in ompi/mca/common/ofacm/common_ofacm_xoob.h and another time in ./ompi/mca/btl/openib/btl_openib_xrc.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 6, 2012, at 11:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have XRC support in my kernels, so it wouldn't show up for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did someone have 2 instances of the ib_address_t class?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 6, 2012, at 1:17 PM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone else seeing this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CCLD   libmpi.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12231/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12232.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12230.php">Ralph Castain: "[OMPI devel] v1.7 warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11379.php">Gutierrez, Samuel K: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12232.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12232.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
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
