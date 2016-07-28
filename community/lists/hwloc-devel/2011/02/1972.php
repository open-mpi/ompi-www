<?
$subject_val = "Re: [hwloc-devel] de-c99";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 12:27:24 2011" -->
<!-- isoreceived="20110218172724" -->
<!-- sent="Fri, 18 Feb 2011 18:27:19 +0100" -->
<!-- isosent="20110218172719" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] de-c99" -->
<!-- id="20110218172719.GD6068_at_const.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1230815921.132542.1298045937495.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] de-c99<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 12:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1973.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1971.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
<li><strong>Maybe in reply to:</strong> <a href="1966.php">Jeff Squyres: "[hwloc-devel] de-c99"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 18 Feb 2011 17:18:57 +0100, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; /users/jsquyres/hg/hwloc-de-c99/tests/ports/include/windows.h:23:1: warning: function declaration isn&#226;&#128;&#153;t a prototype
</span><br>
<p>This is expected.
<br>
<p><span class="quotelev1">&gt; topology-aix.c: In function &#226;&#128;&#152;hwloc_aix_set_thisproc_cpubind&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; topology-aix.c:90:18: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<p>These should be fixed by separating initialization. I really don't want
<br>
to see a magic number of 0s :)
<br>
<p><span class="quotelev1">&gt; topology-windows.c:164:4: warning: ISO C doesn&#226;&#128;&#153;t support unnamed structs/unions
</span><br>
<p>There's not much possible here, the C microsoft API is simply like
<br>
this....
<br>
<p><span class="quotelev1">&gt; topology-windows.c:318:17: warning: ISO C forbids assignment between function pointer and &#226;&#128;&#152;void *&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; topology-windows.c:323:30: warning: assignment from incompatible pointer type
</span><br>
<p>These are expected.
<br>
<p><span class="quotelev1">&gt; topology-freebsd.c: In function &#226;&#128;&#152;hwloc_freebsd_set_thread_cpubind&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:126:3: warning: passing argument 3 of &#226;&#128;&#152;pthread_setaffinity_np&#226;&#128;&#153; from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:445:12: note: expected &#226;&#128;&#152;const struct cpu_set_t *&#226;&#128;&#153; but argument is of type &#226;&#128;&#152;cpuset_t *&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c: In function &#226;&#128;&#152;hwloc_freebsd_get_thread_cpubind&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:150:3: warning: passing argument 3 of &#226;&#128;&#152;pthread_getaffinity_np&#226;&#128;&#153; from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:450:12: note: expected &#226;&#128;&#152;struct cpu_set_t *&#226;&#128;&#153; but argument is of type &#226;&#128;&#152;cpuset_t *&#226;&#128;&#153;
</span><br>
<p>These are expected.
<br>
<p>There rest should be possible to fix.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1973.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1971.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
<li><strong>Maybe in reply to:</strong> <a href="1966.php">Jeff Squyres: "[hwloc-devel] de-c99"</a>
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
