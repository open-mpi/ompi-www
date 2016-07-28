<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 17:42:51 2012" -->
<!-- isoreceived="20120509214251" -->
<!-- sent="Wed, 9 May 2012 23:42:46 +0200" -->
<!-- isosent="20120509214246" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use plain &amp;quot;inline&amp;quot; in C++" -->
<!-- id="20120509214246.GF4738_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1630628352.194444.1336599680058.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Date:</strong> 2012-05-09 17:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe in reply to:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 09 May 2012 23:41:20 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On May 9, 2012, at 5:32 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +/* Note that if we're compiling C++, then just use the &quot;inline&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +   keyword, since it's part of C++ */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#  define __hwloc_inline inline
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, I don't know which version of the C++ standard includes the inline
</span><br>
<span class="quotelev2">&gt; &gt; keyword.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Huh -- really?  I always thought that the C++ language itself included the keyword &quot;inline&quot;.
</span><br>
<p>Possibly. I don't really know much about C++. I'm just saying that
<br>
perhaps at least the very early C++ prototypes might not have it :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3075.php">Jeff Squyres: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe in reply to:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
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
