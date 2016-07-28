<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 13:33:16 2009" -->
<!-- isoreceived="20090921173316" -->
<!-- sent="Mon, 21 Sep 2009 19:33:11 +0200" -->
<!-- isosent="20090921173311" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="20090921173311.GA6140_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0C5F3586-C02A-42F1-B693-337562126C43_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] last API possible changes<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 13:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0066.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0066.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0066.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 21 Sep 2009 12:31:41 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 21, 2009, at 10:42 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt;It's part of the language starting from C99 only. An application could
</span><br>
<span class="quotelev2">&gt; &gt;enable non-C99 mode where it becomes undefined, you can never know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is a decade old, no?  ;-)
</span><br>
<p>Yes, but existing software tends to still not evolve. I'm still seeing
<br>
software using the old termio interface while it dates at least back
<br>
1988.
<br>
<p><span class="quotelev1">&gt; (Sorry -- I wasn't trying to be a jerk; just trying to be thorough...)
</span><br>
<p>No problem. Actually, I had followed your reasoning at the time I wrote
<br>
that part of the code, I'm just repeating what I've thought in my head
<br>
at the time :)
<br>
<p><span class="quotelev1">&gt; Is it possible that our use of restrict in cpuset- 
</span><br>
<span class="quotelev1">&gt; bits.h could come to a conclusion that is different than the  
</span><br>
<span class="quotelev1">&gt; underlying compiler (e.g., the underlying compiler needs __restrict)?   
</span><br>
<p>I'm not sure to understand what you mean.  What could happen
<br>
is that gcc stops understanding __restrict while it has been
<br>
understanding it since 2.95; I doubt that will ever happen.  Another
<br>
very low-probability possibility to get something wrong is if a
<br>
compiler defines __STDC_VERSION__ to a value greater than 199901L but
<br>
doesn't accept restrict; that would really be a compiler bug.  The
<br>
last possibility is restrict being #defined to something not being the
<br>
standard restrict qualifier.  I've just dropped the #if defined restrict
<br>
part to avoid it, that's not a big loss.
<br>
<p><span class="quotelev1">&gt; Alternatively, is the restrict optimization really worth it here?
</span><br>
<p>Re-reading what we use it for at the moment, there is not many
<br>
optimizations to be done, but now that I've removed the only case that
<br>
could be problematic, it shouldn't be a problem.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0066.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0066.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0066.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
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
