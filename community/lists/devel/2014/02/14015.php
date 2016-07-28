<?
$subject_val = "Re: [OMPI devel] singleton appears to be broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 19:12:15 2014" -->
<!-- isoreceived="20140207001215" -->
<!-- sent="Thu, 6 Feb 2014 16:11:04 -0800" -->
<!-- isosent="20140207001104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] singleton appears to be broken" -->
<!-- id="0B23F1BA-33CA-4B6F-8E06-41A437C1EB1D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9D2C78F8-A9D1-4217-98B2-71F2A02985BC_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 19:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14016.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>In reply to:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14016.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Reply:</strong> <a href="14016.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, should have noted: that's on both trunk and 1.7.4
<br>
<p>On Feb 6, 2014, at 4:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Works for me on Mac and Linux/Centos6.2 as well
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2014, at 4:00 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm unable to replicate on Linux/RHEL/64 bit with a trunk build.  How did you configure?  Here's my configure:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/jsquyres/bogus --disable-vt --enable-mpirun-prefix-by-default --disable-mpi-fortran
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does this happen with every run?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2014, at 6:53 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A singleton hello_world assert with the following output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning :: opal_list_remove_item - the item 0x1211fc0 is not on the list 0x7f2cd9161ae0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello: ../../../../ompi/orte/mca/rml/base/rml_base_msg_handlers.c:75: orte_rml_base_post_recv: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (recv))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 0] /lib64/libpthread.so.0[0x3d8480f710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3d83c32925]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 2] /lib64/libc.so.6(abort+0x175)[0x3d83c34105]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 3] /lib64/libc.so.6[0x3d83c2ba4e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 4] /lib64/libc.so.6(__assert_perror_fail+0x0)[0x3d83c2bb10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 5] /home/bosilca/opt/trunk/lib/libopen-rte.so.0(orte_rml_base_post_recv+0x252)[0x7f2cd8e76d55]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 6] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(+0xcca5d)[0x7f2cd89e8a5d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 7] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(+0xcce53)[0x7f2cd89e8e53]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 8] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(opal_libevent2021_event_base_loop+0x4eb)[0x7f2cd89e99ea]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [ 9] /home/bosilca/opt/trunk/lib/libopen-rte.so.0(+0x28725)[0x7f2cd8d1b725]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [10] /lib64/libpthread.so.0[0x3d848079d1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] [11] /lib64/libc.so.6(clone+0x6d)[0x3d83ce8b6d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dancer:00698] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same executable run via mpirun with a single process succeed. This is with trunk, I did not tried with the release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14016.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>In reply to:</strong> <a href="14014.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14016.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Reply:</strong> <a href="14016.php">George Bosilca: "Re: [OMPI devel] singleton appears to be broken"</a>
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
