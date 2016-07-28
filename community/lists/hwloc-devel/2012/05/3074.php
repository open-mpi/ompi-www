<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 17:32:35 2012" -->
<!-- isoreceived="20120509213235" -->
<!-- sent="Wed, 9 May 2012 23:32:29 +0200" -->
<!-- isosent="20120509213229" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use plain &amp;quot;inline&amp;quot; in C++" -->
<!-- id="20120509213229.GV4738_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="691309482.194318.1336597183596.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 17:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe in reply to:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Reply:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 09 May 2012 22:59:43 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel -- does this look right to you?  If so, I can apply to 1.3, 1.4, and trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +/* Note that if we're compiling C++, then just use the &quot;inline&quot;
</span><br>
<span class="quotelev1">&gt; +   keyword, since it's part of C++ */
</span><br>
<span class="quotelev1">&gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev1">&gt; +#  define __hwloc_inline inline
</span><br>
<p>Well, I don't know which version of the C++ standard includes the inline
<br>
keyword. We need to make sure that other compilers recognize it as such
<br>
in all their usual standard layers.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe in reply to:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Reply:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
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
