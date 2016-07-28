<?
$subject_val = "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 21:23:06 2015" -->
<!-- isoreceived="20150324012306" -->
<!-- sent="Mon, 23 Mar 2015 21:23:05 -0400" -->
<!-- isosent="20150324012305" -->
<!-- name="Peter Gottesman" -->
<!-- email="mygames1030_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Configuration error with external hwloc" -->
<!-- id="CAF_-zRtBDsac4u0QSWOi9Lec_WrYcomfBU8qVsP97YKZSfJDwg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="ABD96EAE-2EA6-4B55-B914-4D83E9DFCF0B_at_cisco.com" -->
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
<strong>From:</strong> Peter Gottesman (<em>mygames1030_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-23 21:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, yes I am sorry. I can successfully configure if I do not define an
<br>
external hwloc, however the 'make all' fails. I must have not re-configured
<br>
it after trying that.
<br>
<p>The correct config.log is there now. From what I could gather, the problem
<br>
is in this line(105):
<br>
<p><span class="quotelev1">&gt; ./conftest: error while loading shared libraries: libhwloc.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<p>When I try to run that file I get a segfault, although from what I can tell
<br>
there is not a problem during the hwloc installation(but it would seem that
<br>
I am wrong).
<br>
I have attached the correct config.log from
<br>
opal/mca/event/libevent2022/libevent,
<br>
the config.log from hwloc, and the output from the 'make install' of hwloc
<br>
Thanks,
<br>
Peter
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17147/output.tar.bz2">output.tar.bz2</a>
</ul>
<!-- attachment="output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17148.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
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
