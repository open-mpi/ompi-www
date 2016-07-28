<?
$subject_val = "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 17:05:37 2014" -->
<!-- isoreceived="20140109220537" -->
<!-- sent="Thu, 9 Jan 2014 22:05:35 +0000" -->
<!-- isosent="20140109220535" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11" -->
<!-- id="04B385D9-69A4-476A-B917-9A2472D0CA0F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA174sxVS2sJ4jD+i7YqZGVONwzis35ari6+u-41h-TVdeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 17:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13598.php">Paul Hargrove: "[OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13642.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13642.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Can you send the config.log file from this?  It has more details in it that will be useful (e.g., *why* ibv_open_device wasn't found in -libverbs).
<br>
<p>I wonder if the issue has to do something with our handling of the legacy --with-openib switch...? (it's been deprecated on the trunk in favor of --with-verbs)
<br>
<p><p>On Jan 8, 2014, at 8:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When trying to configure the OMPI trunk on a Solaris-11/x86-64 with --enable-openib, I see the following error not seen with the 1.7 branch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Compiler flags
</span><br>
<span class="quotelev1">&gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG -m64 -mt
</span><br>
<span class="quotelev1">&gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev1">&gt; checking for the C compiler vendor... (cached) sun
</span><br>
<span class="quotelev1">&gt; checking if want to add padding to the openib BTL control header... no
</span><br>
<span class="quotelev1">&gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for sys/poll.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev1">&gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Verbs support requested (via --with-verbs) but not found.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or v1.1), you *MUST* have both the libsysfs headers and libraries installed.  Later versions of libibverbs do not require libsysfs.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is despite an earlier:
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error above is with the Solaris Studio compilers, but the same happens with the GNU compilers.
</span><br>
<span class="quotelev1">&gt; The (compressed) full configure output for the GNU case is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a regression relative to the current 1.7.4rc, in which the openib btl works fine on Solaris-11/x86-64, by which I mean I can configure with --enable-openib and the following command line works:
</span><br>
<span class="quotelev1">&gt; mpirun -host pcp-j-19,pcp-j-20 -mca btl openib,self -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My best guess is that either the libsysfs requirement itself OR its associated test is Linux-specific.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; &lt;configure.log.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13598.php">Paul Hargrove: "[OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13642.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13642.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
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
