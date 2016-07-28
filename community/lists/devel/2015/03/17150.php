<?
$subject_val = "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 15:48:00 2015" -->
<!-- isoreceived="20150324194800" -->
<!-- sent="Tue, 24 Mar 2015 19:47:58 +0000" -->
<!-- isosent="20150324194758" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Configuration error with external hwloc" -->
<!-- id="4D7185E4-EF0E-403B-9C79-04FF0B0D17E5_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-24 15:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17151.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
<li><strong>In reply to:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17151.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17151.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I talked to Peter off-list.
<br>
<p>We got a successful build going for him.
<br>
<p>Seems like we've identified a few issues here, though:
<br>
<p>1. ./configure with gcc 4.7.2 on Debian (I didn't catch the precise version of Debian) results in a Lhwloc1 duplicate symbol in OMPI's embedded hwloc.  This feels very much like a compiler error -- we got a successful builds when we forced the use of -O2 instead of the default -O3.  Peter and I will investigate further.
<br>
<p>2. Using an external hwloc is tricky: one issue is that LD_LIBRARY_PATH needs to be set.  We should be able to fix this in OMPI itself such that you won't need to set LD_LIBRARY_PATH yourself.  Second, however, is if you have both an external libevent and an external hwloc in the same tree, but you only want to use *one* of those two as external to OMPI.  Ralph will file a github issue about this shortly.
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 23, 2015, at 9:23 PM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, yes I am sorry. I can successfully configure if I do not define an external hwloc, however the 'make all' fails. I must have not re-configured it after trying that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The correct config.log is there now. From what I could gather, the problem is in this line(105):
</span><br>
<span class="quotelev1">&gt; ./conftest: error while loading shared libraries: libhwloc.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; When I try to run that file I get a segfault, although from what I can tell there is not a problem during the hwloc installation(but it would seem that I am wrong).
</span><br>
<span class="quotelev1">&gt; I have attached the correct config.log from opal/mca/event/libevent2022/libevent, the config.log from hwloc, and the output from the 'make install' of hwloc
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt; &lt;output.tar.bz2&gt;
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
<li><strong>Next message:</strong> <a href="17151.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external	hwloc"</a>
<li><strong>In reply to:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17151.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17151.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
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
