<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 14:23:47 2009" -->
<!-- isoreceived="20091021182347" -->
<!-- sent="Wed, 21 Oct 2009 13:23:39 -0500" -->
<!-- isosent="20091021182339" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="4ADF51AB.602_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091021153815.GN4693_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 14:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0219.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0217.php">Jeff Squyres: "[hwloc-devel] merging to v0.9"</a>
<li><strong>In reply to:</strong> <a href="0204.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0227.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/21/2009 10:38 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Pavan Balaji, le Wed 21 Oct 2009 10:36:33 -0500, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 10/21/2009 10:28 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavan Balaji, le Wed 21 Oct 2009 09:55:36 -0500, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. I see a AC_PROG_CC_C99 in the configure.ac. Do you require the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler to be C99 capable always?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, we ended up using constructs which should pass c90 and the compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have tested (aix, solaris, icc).
</span><br>
<span class="quotelev2">&gt;&gt; So shouldn't the AC_PROG_CC_C99 be gotten rid of?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No because when C99 is available, we enable some optimization features,
</span><br>
<span class="quotelev1">&gt; like __hwloc_restrict.
</span><br>
<p>It looks like __hwloc_restrict is not actually checking for C99, but
<br>
instead doing something GNU specific:
<br>
<p>#if (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
<br>
# define __hwloc_restrict __restrict
<br>
#else
<br>
# if __STDC_VERSION__ &gt;= 199901L
<br>
#  define __hwloc_restrict restrict
<br>
# else
<br>
#  define __hwloc_restrict
<br>
# endif
<br>
#endif
<br>
<p>Wouldn't it be better to add a feature test for restrict, instead of this?
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0219.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0217.php">Jeff Squyres: "[hwloc-devel] merging to v0.9"</a>
<li><strong>In reply to:</strong> <a href="0204.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0227.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
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
