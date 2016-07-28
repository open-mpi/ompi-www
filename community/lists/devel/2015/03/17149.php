<?
$subject_val = "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 10:30:08 2015" -->
<!-- isoreceived="20150324143008" -->
<!-- sent="Tue, 24 Mar 2015 14:30:06 +0000" -->
<!-- isosent="20150324143006" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc" -->
<!-- id="98504290-889B-4A7C-80F4-2ADB1302FE6D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5510D2D3.9070208_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-24 10:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>It might be easier simply to use the embedded libhwloc.  I.e., don't specify --with-hwloc=external, and let OMPI's default use of the embedded libhwloc take over.
<br>
<p><p><span class="quotelev1">&gt; On Mar 23, 2015, at 10:58 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Peter,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i was able to reproduce the issue when the external hwloc libraries are not
</span><br>
<span class="quotelev1">&gt; in the default lib path (e.g. /usr/lib64)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a simple workaround is to
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/path_to_your_hwloc_lib configure ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* libevent configure does compile a test program with -L/path_to_your_hwloc_lib -lhwloc,
</span><br>
<span class="quotelev1">&gt; and then tries to run the binary, but that fails since the library is not found.
</span><br>
<span class="quotelev1">&gt; on top of my head, possible fixes are :
</span><br>
<span class="quotelev1">&gt; a) invoke libevent configure with LD_LIBRARY_PATH=/path_to_your_hwloc_lib
</span><br>
<span class="quotelev1">&gt; b) invoke libevent configure with LDFLAGS=-Wl,-rpath,/path_to_your_hwloc_lib
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2015/03/24 10:23, Peter Gottesman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah, yes I am sorry. I can successfully configure if I do not define an
</span><br>
<span class="quotelev2">&gt;&gt; external hwloc, however the 'make all' fails. I must have not re-configured
</span><br>
<span class="quotelev2">&gt;&gt; it after trying that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The correct config.log is there now. From what I could gather, the problem
</span><br>
<span class="quotelev2">&gt;&gt; is in this line(105):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./conftest: error while loading shared libraries: libhwloc.so.0: cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I try to run that file I get a segfault, although from what I can tell
</span><br>
<span class="quotelev2">&gt;&gt; there is not a problem during the hwloc installation(but it would seem that
</span><br>
<span class="quotelev2">&gt;&gt; I am wrong).
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the correct config.log from
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/event/libevent2022/libevent,
</span><br>
<span class="quotelev2">&gt;&gt; the config.log from hwloc, and the output from the 'make install' of hwloc
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Peter
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17147.php">http://www.open-mpi.org/community/lists/devel/2015/03/17147.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17148.php">http://www.open-mpi.org/community/lists/devel/2015/03/17148.php</a>
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
<li><strong>Next message:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
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
