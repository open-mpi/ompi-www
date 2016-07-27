<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2044";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 04:00:17 2010" -->
<!-- isoreceived="20100504080017" -->
<!-- sent="Tue, 4 May 2010 10:00:13 +0200" -->
<!-- isosent="20100504080013" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2044" -->
<!-- id="20100504080013.GH5108_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201005040532.o445W0vn008716_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2044<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 04:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0959.php">Jeff Squyres: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>Previous message:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden], le Tue 04 May 2010 01:32:00 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; @@ -326,6 +330,10 @@
</span><br>
<span class="quotelev1">&gt;      if (nr_tids == max_tids) {
</span><br>
<span class="quotelev1">&gt;        max_tids += 8;
</span><br>
<span class="quotelev1">&gt;        tids = realloc(tids, max_tids*sizeof(pid_t));
</span><br>
<span class="quotelev1">&gt; +      if (!tids) {
</span><br>
<span class="quotelev1">&gt; +        errno = ENOMEM;
</span><br>
<span class="quotelev1">&gt; +        return -1;
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      if (!strcmp(dirent-&gt;d_name, &quot;.&quot;) || !strcmp(dirent-&gt;d_name, &quot;..&quot;))
</span><br>
<span class="quotelev1">&gt;        continue;
</span><br>
<p>We also need to free the original allocated array.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0959.php">Jeff Squyres: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>Previous message:</strong> <a href="0957.php">Samuel Thibault: "Re: [hwloc-devel] want 1.0rc4?"</a>
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
