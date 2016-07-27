<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 17:30:31 2009" -->
<!-- isoreceived="20091021213031" -->
<!-- sent="Wed, 21 Oct 2009 23:30:24 +0200" -->
<!-- isosent="20091021213024" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="20091021213024.GD4419_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ADF51AB.602_at_mcs.anl.gov" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 17:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Pavan Balaji: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0218.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0229.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji, le Wed 21 Oct 2009 13:23:39 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 10/21/2009 10:38 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Pavan Balaji, le Wed 21 Oct 2009 10:36:33 -0500, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 10/21/2009 10:28 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Pavan Balaji, le Wed 21 Oct 2009 09:55:36 -0500, a &#233;crit :
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1. I see a AC_PROG_CC_C99 in the configure.ac. Do you require the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; compiler to be C99 capable always?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No, we ended up using constructs which should pass c90 and the compilers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we have tested (aix, solaris, icc).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So shouldn't the AC_PROG_CC_C99 be gotten rid of?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No because when C99 is available, we enable some optimization features,
</span><br>
<span class="quotelev2">&gt; &gt; like __hwloc_restrict.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like __hwloc_restrict is not actually checking for C99, but
</span><br>
<span class="quotelev1">&gt; instead doing something GNU specific:
</span><br>
<p>It's doing both: if gcc is available, use __restrict, if C99 is
<br>
available, use restrict.
<br>
<p><span class="quotelev1">&gt; #if (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
</span><br>
<span class="quotelev1">&gt; # define __hwloc_restrict __restrict
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # if __STDC_VERSION__ &gt;= 199901L
</span><br>
<span class="quotelev1">&gt; #  define __hwloc_restrict restrict
</span><br>
<span class="quotelev1">&gt; # else
</span><br>
<span class="quotelev1">&gt; #  define __hwloc_restrict
</span><br>
<span class="quotelev1">&gt; # endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wouldn't it be better to add a feature test for restrict, instead of this?
</span><br>
<p>Please read this thread:
<br>
<p><a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0054.php">http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0054.php</a>
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Pavan Balaji: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0218.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0229.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
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
