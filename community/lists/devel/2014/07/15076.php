<?
$subject_val = "Re: [OMPI devel] segv in ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  8 09:50:44 2014" -->
<!-- isoreceived="20140708135044" -->
<!-- sent="Tue, 8 Jul 2014 13:50:42 +0000" -->
<!-- isosent="20140708135042" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segv in ompi_info" -->
<!-- id="C32DCBC2-240A-4E79-8652-95BE5A29FC89_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1Kybiur4p6gXVQOcCUSKj8NR8ipdrr_g6He-kFW0pFTyNjg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-08 09:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15077.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI BTL async progress prototype discussion meeting"</a>
<li><strong>Previous message:</strong> <a href="15075.php">Mike Dubman: "[OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15075.php">Mike Dubman: "[OMPI devel] segv in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Reply:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unable to replicate.  Please provide more detail...?  Is this a problem in the MXM component?
<br>
<p>On Jul 8, 2014, at 9:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $/usr/mpi/gcc/openmpi-1.8.2a1/bin/ompi_info -a -l 9|less
</span><br>
<span class="quotelev1">&gt; Caught signal 13 (Broken pipe)
</span><br>
<span class="quotelev1">&gt; ==== backtrace ====
</span><br>
<span class="quotelev1">&gt;  2 0x0000000000054cac mxm_handle_error()  /var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:653
</span><br>
<span class="quotelev1">&gt;  3 0x0000000000054e74 mxm_error_signal_handler()  /var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:628
</span><br>
<span class="quotelev1">&gt;  4 0x00000033fbe32920 killpg()  ??:0
</span><br>
<span class="quotelev1">&gt;  5 0x00000033fbedb650 __write_nocancel()  interp.c:0
</span><br>
<span class="quotelev1">&gt;  6 0x00000033fbe71d53 _IO_file_write@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev1">&gt;  7 0x00000033fbe73305 _IO_do_write@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev1">&gt;  8 0x00000033fbe719cd _IO_file_xsputn@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev1">&gt;  9 0x00000033fbe48410 _IO_vfprintf()  ??:0
</span><br>
<span class="quotelev1">&gt; 10 0x00000033fbe4f40a printf()  ??:0
</span><br>
<span class="quotelev1">&gt; 11 0x000000000002bc84 opal_info_out()  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:853
</span><br>
<span class="quotelev1">&gt; 12 0x000000000002c6bb opal_info_show_mca_group_params()  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:658
</span><br>
<span class="quotelev1">&gt; 13 0x000000000002c882 opal_info_show_mca_group_params()  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:716
</span><br>
<span class="quotelev1">&gt; 14 0x000000000002cc13 opal_info_show_mca_params()  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:742
</span><br>
<span class="quotelev1">&gt; 15 0x000000000002d074 opal_info_do_params()  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:485
</span><br>
<span class="quotelev1">&gt; 16 0x000000000040167b main()  ??:0
</span><br>
<span class="quotelev1">&gt; 17 0x00000033fbe1ecdd __libc_start_main()  ??:0
</span><br>
<span class="quotelev1">&gt; 18 0x0000000000401349 _start()  ??:0
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15075.php">http://www.open-mpi.org/community/lists/devel/2014/07/15075.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15077.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI BTL async progress prototype discussion meeting"</a>
<li><strong>Previous message:</strong> <a href="15075.php">Mike Dubman: "[OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15075.php">Mike Dubman: "[OMPI devel] segv in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Reply:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
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
