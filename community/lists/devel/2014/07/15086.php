<?
$subject_val = "Re: [OMPI devel] segv in ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 18:42:31 2014" -->
<!-- isoreceived="20140709224231" -->
<!-- sent="Wed, 9 Jul 2014 15:42:04 -0700" -->
<!-- isosent="20140709224204" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segv in ompi_info" -->
<!-- id="57DC8D33-36FF-4ACA-B1A4-F602853112D9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17vLe2ao8Ce_gQcZCn1zzu9coTJYUE1q8MXCk7RGtV46Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 18:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15087.php">Kawashima, Takahiro: "[OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>Previous message:</strong> <a href="15085.php">Paul Hargrove: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15085.php">Paul Hargrove: "Re: [OMPI devel] segv in ompi_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good suggestion - fixed on trunk in r32189
<br>
<p><p>On Jul 9, 2014, at 2:30 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I agree with Gilles that there is not a &quot;bug&quot;, but I believe that OMPI could do something better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, I'll show that
</span><br>
<span class="quotelev1">&gt; a) this is not a new behavior
</span><br>
<span class="quotelev1">&gt; b) it is not limited to &quot;less&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ (strace ompi_info -a | grep -m1 btl) 2&gt;&amp;1 | grep -e 'Open MPI:' -e SIGPIPE
</span><br>
<span class="quotelev1">&gt; write(1, &quot;                Open MPI: 1.4.5\n&quot;, 32) = 32
</span><br>
<span class="quotelev1">&gt; --- SIGPIPE (Broken pipe) @ 0 (0) ---
</span><br>
<span class="quotelev1">&gt; +++ killed by SIGPIPE +++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) the opmi_info output says &quot;Open MPI: 1.4.5&quot; (thus not new by any stretch).
</span><br>
<span class="quotelev1">&gt; b) the &quot;-m1&quot; argument to the inner &quot;grep&quot; says exit after the first match
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;strace&quot; is to detect/report that SIGPIPE was received.
</span><br>
<span class="quotelev1">&gt; The outer grep picks out the relevant info from the flood of strace output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the &quot;issue&quot; today seems to be that mxm is catching the signal and producing a backtrace.  This backtrace is NOT a desirable behavior.  This is not intrinsically the &quot;fault&quot; of mxm, because there is no reason to believe that ompi_info would never link to (or dlopen) another library that performs backtraces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I would suggest that ompi_info simply &quot;signal(SIGPIPE, SIG_IGN);&quot; to resolve this in a way not specific to mxm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 9, 2014 at 3:47 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; how do you test ?
</span><br>
<span class="quotelev1">&gt; i cannot reproduce a bug :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if you run ompi_info -a -l 9 | less
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and i press 'q' at the early stage (e.g. before all output is written to the pipe)
</span><br>
<span class="quotelev1">&gt; then the less process exits and receives SIG_PIPE and crash (which is a normal unix behaviour)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now if i press the spacebar until the end of the output (e.g. i get the (END) message from less)
</span><br>
<span class="quotelev1">&gt; and then press 'q', then there is no problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; strace -e signal ompi_info -a -l 9 | true
</span><br>
<span class="quotelev1">&gt; will cause ompi_info receives a SIG_PIPE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; strace -e signal dd if=/dev/zero bs=1M count=1 | true
</span><br>
<span class="quotelev1">&gt; will cause dd receives a SIG_PIPE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; unless i miss something, i would conclude there is no bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/07/09 19:33, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; mxm only intercept signals and prints the stacktrace.
</span><br>
<span class="quotelev2">&gt;&gt; happens on trunk as well.
</span><br>
<span class="quotelev2">&gt;&gt; only when &quot;| less&quot; is used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 8, 2014 at 4:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm unable to replicate.  Please provide more detail...?  Is this a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem in the MXM component?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 8, 2014, at 9:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $/usr/mpi/gcc/openmpi-1.8.2a1/bin/ompi_info -a -l 9|less
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Caught signal 13 (Broken pipe)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  2 0x0000000000054cac mxm_handle_error()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:653
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  3 0x0000000000054e74 mxm_error_signal_handler()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /var/tmp/OFED_topdir/BUILD/mxm-3.2.2883/src/mxm/util/debug/debug.c:628
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  4 0x00000033fbe32920 killpg()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  5 0x00000033fbedb650 __write_nocancel()  interp.c:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  6 0x00000033fbe71d53 _IO_file_write@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  7 0x00000033fbe73305 _IO_do_write@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  8 0x00000033fbe719cd _IO_file_xsputn@@GLIBC_2.2.5()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  9 0x00000033fbe48410 _IO_vfprintf()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 0x00000033fbe4f40a printf()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11 0x000000000002bc84 opal_info_out()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:853
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12 0x000000000002c6bb opal_info_show_mca_group_params()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:658
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 13 0x000000000002c882 opal_info_show_mca_group_params()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:716
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14 0x000000000002cc13 opal_info_show_mca_params()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:742
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15 0x000000000002d074 opal_info_do_params()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /var/tmp/OFED_topdir/BUILD/openmpi-1.8.2a1/opal/runtime/opal_info_support.c:485
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16 0x000000000040167b main()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17 0x00000033fbe1ecdd __libc_start_main()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 18 0x0000000000401349 _start()  ??:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15075.php">http://www.open-mpi.org/community/lists/devel/2014/07/15075.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15076.php">http://www.open-mpi.org/community/lists/devel/2014/07/15076.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15080.php">http://www.open-mpi.org/community/lists/devel/2014/07/15080.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15082.php">http://www.open-mpi.org/community/lists/devel/2014/07/15082.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15085.php">http://www.open-mpi.org/community/lists/devel/2014/07/15085.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15087.php">Kawashima, Takahiro: "[OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>Previous message:</strong> <a href="15085.php">Paul Hargrove: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15085.php">Paul Hargrove: "Re: [OMPI devel] segv in ompi_info"</a>
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
