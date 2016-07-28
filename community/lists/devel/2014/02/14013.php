<?
$subject_val = "Re: [OMPI devel] singleton appears to be broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 19:00:05 2014" -->
<!-- isoreceived="20140207000005" -->
<!-- sent="Fri, 7 Feb 2014 00:00:03 +0000" -->
<!-- isosent="20140207000003" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] singleton appears to be broken" -->
<!-- id="65BFF452-8FA3-4A6D-BBC4-FEC4757C9DB8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B72D0C49-8BB9-4B1F-ADA4-B73D4E30F259_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] singleton appears to be broken<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 19:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14012.php">George Bosilca: "[OMPI devel] singleton appears to be broken"</a>
<li><strong>In reply to:</strong> <a href="14012.php">George Bosilca: "[OMPI devel] singleton appears to be broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Reply:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unable to replicate on Linux/RHEL/64 bit with a trunk build.  How did you configure?  Here's my configure:
<br>
<p>./configure --prefix=/home/jsquyres/bogus --disable-vt --enable-mpirun-prefix-by-default --disable-mpi-fortran
<br>
<p>Does this happen with every run?
<br>
<p><p>On Feb 6, 2014, at 6:53 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A singleton hello_world assert with the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Warning :: opal_list_remove_item - the item 0x1211fc0 is not on the list 0x7f2cd9161ae0
</span><br>
<span class="quotelev1">&gt; hello: ../../../../ompi/orte/mca/rml/base/rml_base_msg_handlers.c:75: orte_rml_base_post_recv: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (recv))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [dancer:00698] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [dancer:00698] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [dancer:00698] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 0] /lib64/libpthread.so.0[0x3d8480f710]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3d83c32925]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 2] /lib64/libc.so.6(abort+0x175)[0x3d83c34105]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 3] /lib64/libc.so.6[0x3d83c2ba4e]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 4] /lib64/libc.so.6(__assert_perror_fail+0x0)[0x3d83c2bb10]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 5] /home/bosilca/opt/trunk/lib/libopen-rte.so.0(orte_rml_base_post_recv+0x252)[0x7f2cd8e76d55]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 6] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(+0xcca5d)[0x7f2cd89e8a5d]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 7] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(+0xcce53)[0x7f2cd89e8e53]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 8] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(opal_libevent2021_event_base_loop+0x4eb)[0x7f2cd89e99ea]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [ 9] /home/bosilca/opt/trunk/lib/libopen-rte.so.0(+0x28725)[0x7f2cd8d1b725]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [10] /lib64/libpthread.so.0[0x3d848079d1]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] [11] /lib64/libc.so.6(clone+0x6d)[0x3d83ce8b6d]
</span><br>
<span class="quotelev1">&gt; [dancer:00698] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same executable run via mpirun with a single process succeed. This is with trunk, I did not tried with the release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14012.php">George Bosilca: "[OMPI devel] singleton appears to be broken"</a>
<li><strong>In reply to:</strong> <a href="14012.php">George Bosilca: "[OMPI devel] singleton appears to be broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Reply:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
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
