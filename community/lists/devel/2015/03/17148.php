<?
$subject_val = "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 22:58:10 2015" -->
<!-- isoreceived="20150324025810" -->
<!-- sent="Tue, 24 Mar 2015 11:58:27 +0900" -->
<!-- isosent="20150324025827" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Configuration error with external hwloc" -->
<!-- id="5510D2D3.9070208_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF_-zRtBDsac4u0QSWOi9Lec_WrYcomfBU8qVsP97YKZSfJDwg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Configuration error with external hwloc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-23 22:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
<li><strong>Previous message:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
<li><strong>Reply:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter,
<br>
<p>i was able to reproduce the issue when the external hwloc libraries are not
<br>
in the default lib path (e.g. /usr/lib64)
<br>
<p>a simple workaround is to
<br>
LD_LIBRARY_PATH=/path_to_your_hwloc_lib configure ...
<br>
<p>/* libevent configure does compile a test program with
<br>
-L/path_to_your_hwloc_lib -lhwloc,
<br>
and then tries to run the binary, but that fails since the library is
<br>
not found.
<br>
on top of my head, possible fixes are :
<br>
a) invoke libevent configure with LD_LIBRARY_PATH=/path_to_your_hwloc_lib
<br>
b) invoke libevent configure with LDFLAGS=-Wl,-rpath,/path_to_your_hwloc_lib
<br>
Cheers,
<br>
*/
<br>
<p><p>Gilles
<br>
<p>On 2015/03/24 10:23, Peter Gottesman wrote:
<br>
<span class="quotelev1">&gt; Ah, yes I am sorry. I can successfully configure if I do not define an
</span><br>
<span class="quotelev1">&gt; external hwloc, however the 'make all' fails. I must have not re-configured
</span><br>
<span class="quotelev1">&gt; it after trying that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The correct config.log is there now. From what I could gather, the problem
</span><br>
<span class="quotelev1">&gt; is in this line(105):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./conftest: error while loading shared libraries: libhwloc.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; When I try to run that file I get a segfault, although from what I can tell
</span><br>
<span class="quotelev1">&gt; there is not a problem during the hwloc installation(but it would seem that
</span><br>
<span class="quotelev1">&gt; I am wrong).
</span><br>
<span class="quotelev1">&gt; I have attached the correct config.log from
</span><br>
<span class="quotelev1">&gt; opal/mca/event/libevent2022/libevent,
</span><br>
<span class="quotelev1">&gt; the config.log from hwloc, and the output from the 'make install' of hwloc
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17147.php">http://www.open-mpi.org/community/lists/devel/2015/03/17147.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
<li><strong>Previous message:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
<li><strong>Reply:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
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
