<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 12:26:49 2010" -->
<!-- isoreceived="20100421162649" -->
<!-- sent="Wed, 21 Apr 2010 18:26:43 +0200" -->
<!-- isosent="20100421162643" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986" -->
<!-- id="20100421162643.GG5039_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8AAB5E27-5410-4733-8040-A410E3960235_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 12:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0929.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r1988)"</a>
<li><strong>Previous message:</strong> <a href="0927.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1988"</a>
<li><strong>In reply to:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 21 Apr 2010 09:04:11 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 21, 2010, at 8:47 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From that page:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     If you are writing a header file that must work when included in
</span><br>
<span class="quotelev2">&gt; &gt; ISO C programs, write __typeof__ instead of typeof. See Alternate
</span><br>
<span class="quotelev2">&gt; &gt; Keywords.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Modified: trunk/src/topology.c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That does not look like a header for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right, but gcc complained when used with -std=c99 unless it was __typeof__.  I did not check to see if icc or pgcc accepted typeof.  I read that text to be &quot;if you want portable code, use __typeof__ instead of typeof.&quot;
</span><br>
<p>Err, putting underscores doesn't magically makes something recognized by
<br>
compilers :)
<br>
<p>The reason why the documentation tells about headers and not .c files is
<br>
that while you control which standard your .c files are compiled under
<br>
(e.g. -std=c99), you do not control which standard your .h files will be
<br>
compiled under by other applications, that's why you need a way to tell
<br>
a compiler &quot;don't complain about these extensions I know you support but
<br>
warn about because you were given -std=c99).
<br>
<p>Here, typeof is not c99, and that's why gcc complains when given
<br>
-std=c99 (instead of the default -std=gnu99). Putting underscores just
<br>
hides the bug...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0929.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r1988)"</a>
<li><strong>Previous message:</strong> <a href="0927.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1988"</a>
<li><strong>In reply to:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
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
