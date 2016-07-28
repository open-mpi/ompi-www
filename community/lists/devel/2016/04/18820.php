<?
$subject_val = "Re: [OMPI devel] 1.10.3rc MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 01:53:57 2016" -->
<!-- isoreceived="20160426055357" -->
<!-- sent="Tue, 26 Apr 2016 14:53:52 +0900" -->
<!-- isosent="20160426055352" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc MTT failures" -->
<!-- id="09ff48c3-e5f7-f78f-8cbe-bb8587eabd8c_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="49E4CC0C-56B3-4472-836D-9402BEF613A2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.3rc MTT failures<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-26 01:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18821.php">Sylvain Jeaugey: "[OMPI devel] Process affinity detection"</a>
<li><strong>Previous message:</strong> <a href="18819.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: AUTHORS revamp"</a>
<li><strong>In reply to:</strong> <a href="18818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>fwiw, it is possible to save some bandwidth (~4x) with the --depth option
<br>
<p><p>full clone:
<br>
<p>git clone <a href="https://ggouaillardet&#64;github.com/open-mpi/ompi-tests.git">https://ggouaillardet&#64;github.com/open-mpi/ompi-tests.git</a>
<br>
Cloning into 'ompi-tests'...
<br>
remote: Counting objects: 32016, done.
<br>
remote: Total 32016 (delta 0), reused 0 (delta 0), pack-reused 32016
<br>
Receiving objects: 100% (32016/32016), 61.31 MiB | 645.00 KiB/s, done.
<br>
Resolving deltas: 100% (20719/20719), done.
<br>
Checking out files: 100% (9221/9221), done.
<br>
<p><p>last commit only :
<br>
<p>git clone --depth=1 <a href="https://ggouaillardet&#64;github.com/open-mpi/ompi-tests.git">https://ggouaillardet&#64;github.com/open-mpi/ompi-tests.git</a>
<br>
Cloning into 'ompi-tests'...
<br>
remote: Counting objects: 10687, done.
<br>
remote: Compressing objects: 100% (4667/4667), done.
<br>
remote: Total 10687 (delta 4972), reused 9595 (delta 4477), pack-reused 0
<br>
Receiving objects: 100% (10687/10687), 13.29 MiB | 673.00 KiB/s, done.
<br>
Resolving deltas: 100% (4972/4972), done.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/26/2016 12:03 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Apr 25, 2016, at 9:50 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; and fwiw, Jeff uses an internally mirrored repo for ompi-tests, so it Cisco clusters should use the latest test suites.
</span><br>
<span class="quotelev1">&gt; Correct.  My local git mirrors update nightly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: This made a *huge* difference when we were using SVN for ompi-tests.  An individual SVN checkout across the network was reeeaaaalllllyyyyy slow; it was *significantly* faster to do a local SVN checkout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sure it's still faster to do a local git clone, but I don't know offhand if the amount of speedup is compared to a github.com clone of ompi-tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18821.php">Sylvain Jeaugey: "[OMPI devel] Process affinity detection"</a>
<li><strong>Previous message:</strong> <a href="18819.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: AUTHORS revamp"</a>
<li><strong>In reply to:</strong> <a href="18818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
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
