<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 11:48:17 2011" -->
<!-- isoreceived="20110218164817" -->
<!-- sent="Fri, 18 Feb 2011 17:48:12 +0100" -->
<!-- isosent="20110218164812" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="20110218164812.GR6068_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="618252679.131819.1298044547711.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] The de-C99 of hwloc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 11:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1969.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1969.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 18 Feb 2011 16:55:47 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Let's do pthread_once() -- we don't have any of the infrastructure mojo for memory barriers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What will we need on Windows?
</span><br>
<p>It can easily be implemented with named mutexes on windows.
<br>
<p><span class="quotelev1">&gt; Are there other OS's without pthread_once()?
</span><br>
<p>It depends how far you look it the past. pthread_once was added to posix
<br>
in issue 5 (1998).
<br>
<p><span class="quotelev3">&gt; &gt;&gt; Is there no portable way to define a library _init function?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Not even in C99.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where should this functionality be, if we can't put it in an _init function, and it doesn't belong in the topology init function?
</span><br>
<p>It would be a library initialization function that the programmer needs
<br>
to call. The topology init function is the best that can be done without
<br>
going that way.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1969.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1969.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
