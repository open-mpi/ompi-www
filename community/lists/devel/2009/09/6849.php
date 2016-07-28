<?
$subject_val = "[OMPI devel] detecting regcache_clean deadlocks in Open-MX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 05:51:22 2009" -->
<!-- isoreceived="20090921095122" -->
<!-- sent="Mon, 21 Sep 2009 11:50:37 +0200" -->
<!-- isosent="20090921095037" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[OMPI devel] detecting regcache_clean deadlocks in Open-MX" -->
<!-- id="4AB74C6D.3020904_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] detecting regcache_clean deadlocks in Open-MX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 05:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6850.php">Sylvain Jeaugey: "[OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Previous message:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am playing with mx__regcache_clean() in Open-MX so as to have OpenMPI
<br>
cleanup the Open-MX regcache when needed. It causes some deadlocks since
<br>
OpenMPI intercepts Open-MX' own free() calls. Is there a &quot;safe&quot; way to
<br>
have Open-MX free/munmap calls not invoke OpenMPI interception hooks? Or
<br>
is there a way to detect the caller of free/munmap so that my
<br>
regcache_clean does nothing in this case? Otherwise, I guess I'll have
<br>
to add a private malloc implementation inside Open-MX and hope OpenMPI
<br>
won't see it.
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6850.php">Sylvain Jeaugey: "[OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Previous message:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
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
