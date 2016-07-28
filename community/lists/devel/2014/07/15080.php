<?
$subject_val = "Re: [OMPI devel] segv in ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 06:33:41 2014" -->
<!-- isoreceived="20140709103341" -->
<!-- sent="Wed, 9 Jul 2014 13:33:40 +0300" -->
<!-- isosent="20140709103340" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segv in ompi_info" -->
<!-- id="CAAO1Kya7gqRwjYX2s7T7kjvx1hjPi4Ecwp0YwMKnSZP8XyFxzw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C32DCBC2-240A-4E79-8652-95BE5A29FC89_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segv in ompi_info<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 06:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15079.php">Mike Dubman: "[OMPI devel] trunk and fortran errors"</a>
<li><strong>In reply to:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Reply:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mxm only intercept signals and prints the stacktrace.
<br>
happens on trunk as well.
<br>
only when &quot;| less&quot; is used.
<br>
<p><p><p><p><p><p>On Tue, Jul 8, 2014 at 4:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I'm unable to replicate.  Please provide more detail...?  Is this a
</span><br>
<span class="quotelev1">&gt; problem in the MXM component?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2014, at 9:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $/usr/mpi/gcc/openmpi-1.8.2a1/bin/ompi_info -a -l 9|less
</span><br>
<span class="quotelev2">&gt; &gt; Caught signal 13 (Broken pipe)
</span><br>
<span class="quotelev2">&gt; &gt; ==== backtrace ====
</span><br>
<span class="quotelev2">&gt; &gt;  2 0x0000000000054cac mxm_handle_error()
</span><br>
<span class="quotelev1">&gt;  /var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:653
</span><br>
<span class="quotelev2">&gt; &gt;  3 0x0000000000054e74 mxm_error_signal_handler()
</span><br>
<span class="quotelev1">&gt;  /var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:628
</span><br>
<span class="quotelev2">&gt; &gt;  4 0x00000033fbe32920 killpg()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt;  5 0x00000033fbedb650 __write_nocancel()  interp.c:0
</span><br>
<span class="quotelev2">&gt; &gt;  6 0x00000033fbe71d53 _IO_file_write@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt;  7 0x00000033fbe73305 _IO_do_write@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt;  8 0x00000033fbe719cd _IO_file_xsputn@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt;  9 0x00000033fbe48410 _IO_vfprintf()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt; 10 0x00000033fbe4f40a printf()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt; 11 0x000000000002bc84 opal_info_out()
</span><br>
<span class="quotelev1">&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:853
</span><br>
<span class="quotelev2">&gt; &gt; 12 0x000000000002c6bb opal_info_show_mca_group_params()
</span><br>
<span class="quotelev1">&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:658
</span><br>
<span class="quotelev2">&gt; &gt; 13 0x000000000002c882 opal_info_show_mca_group_params()
</span><br>
<span class="quotelev1">&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:716
</span><br>
<span class="quotelev2">&gt; &gt; 14 0x000000000002cc13 opal_info_show_mca_params()
</span><br>
<span class="quotelev1">&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:742
</span><br>
<span class="quotelev2">&gt; &gt; 15 0x000000000002d074 opal_info_do_params()
</span><br>
<span class="quotelev1">&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:485
</span><br>
<span class="quotelev2">&gt; &gt; 16 0x000000000040167b main()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt; 17 0x00000033fbe1ecdd __libc_start_main()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt; 18 0x0000000000401349 _start()  ??:0
</span><br>
<span class="quotelev2">&gt; &gt; ===================
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15075.php">http://www.open-mpi.org/community/lists/devel/2014/07/15075.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15076.php">http://www.open-mpi.org/community/lists/devel/2014/07/15076.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15079.php">Mike Dubman: "[OMPI devel] trunk and fortran errors"</a>
<li><strong>In reply to:</strong> <a href="15076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segv in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Reply:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
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
