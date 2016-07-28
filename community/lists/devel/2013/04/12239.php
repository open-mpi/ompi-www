<?
$subject_val = "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 17:01:18 2013" -->
<!-- isoreceived="20130404210118" -->
<!-- sent="Thu, 4 Apr 2013 14:01:10 -0700" -->
<!-- isosent="20130404210110" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class" -->
<!-- id="CAAvDA16F4VX0_Km2mPrM8n8z9jWBmEmjiQU_aP4hFPz30toykQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D1ED4CE3-5539-4B57-A211-A79826C25182_at_ornl.gov" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 17:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12240.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12238.php">Martin SCHREIBER: "[OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>In reply to:</strong> <a href="12237.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of	ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12240.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12240.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha,
<br>
<p>I have at least one system where I can reproduce the problem, but don't
<br>
have up-to-date autotools.
<br>
So, I can only test from a tarball.
<br>
<p>If somebody can roll me a tarball of r28289 I can test ASAP.
<br>
Otherwise I'll try to remember to test from tonight's trunk nightly once it
<br>
appears.
<br>
<p>-Paul
<br>
<p><p>On Thu, Apr 4, 2013 at 1:30 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I pushed a bugfix to trunk (r28289). I don't have an access to a platform
</span><br>
<span class="quotelev1">&gt; with XRC (MOFED) installation, so this is a &quot;blind&quot; bugfix. If you have a
</span><br>
<span class="quotelev1">&gt; system with XRC, please test this revision. Hopefully this resolves the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; - Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2013, at 3:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is being addressed - however, for now, try configuring it with
</span><br>
<span class="quotelev1">&gt;  &quot;--disable-openib-connectx-xrc&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 4, 2013, at 10:32 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sadly, the IB folks never fixed this - sigh.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'll fix it in the trunk and then CMR it for 1.7. Unfortunately, it
</span><br>
<span class="quotelev1">&gt; requires that you have both IB and XRC to see it, which us non-IB-vendors
</span><br>
<span class="quotelev1">&gt; in the devel community don't.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 4, 2013, at 9:44 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Let me try and dig into it a bit - sadly, my access to IB machines is
</span><br>
<span class="quotelev1">&gt; sorely limited at the moment.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Apr 4, 2013, at 9:37 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Got the same error on all builds (4 compiler, with and without
</span><br>
<span class="quotelev1">&gt; trheading support, 64 and 32bit) on our systems, effectively prohibiting
</span><br>
<span class="quotelev1">&gt; the building of the 1.7 release.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Any idea how to workaround this?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Need more logs?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Best
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 08/06/12 19:41, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Looks like the type is defined twice - once in
</span><br>
<span class="quotelev1">&gt; ompi/mca/common/ofacm/common_ofacm_xoob.h and another time in
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/btl/openib/btl_openib_xrc.h.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 11:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I don't have XRC support in my kernels, so it wouldn't show up for
</span><br>
<span class="quotelev1">&gt; me.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Did someone have 2 instances of the ib_address_t class?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 1:17 PM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyone else seeing this?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD   libmpi.la
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0):
</span><br>
<span class="quotelev1">&gt; multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0):
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12240.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12238.php">Martin SCHREIBER: "[OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>In reply to:</strong> <a href="12237.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of	ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12240.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12240.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
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
